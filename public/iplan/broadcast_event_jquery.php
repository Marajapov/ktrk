<?php include_once 'config.php'; ?>
<?php include_once 'include.js.php';?>
<?php 
    if (isset($_POST['brodcast_id'])) {
        $br_id = (int)getpost('brodcast_id');
    }
	if ($br_id==0) die();
	//$event_list = $db->selectpuresql("select e.*, ch.name as chname from event e INNER join channels ch ON ch.id=e.channel");
	$last_year_time = strtotime("-1 year", time());
	$last_year_date = date("Y-m-d", $last_year_time);
	
	$last_monday = date("w") == 1 ? date("Y-m-d"): date("Y-m-d", strtotime("last monday"));
	
	$event_q = "select t.* from 
	(select e.*, ch.name as chname from event e 
	INNER join channels ch ON ch.id=e.channel 
	where e.approve='1' AND e.dt > '".$last_year_date."'  AND e.dt < '".$last_monday." 05:59' AND e.father_db='episodes') t 
	INNER JOIN episodes ep ON ep.id=t.father_id where ep.father = '".$br_id."'";
	
	//echo $event_q; die();
	$event_list = $db->selectpuresql($event_q);
	//$episode_list = $db->selectpuresql("select * from episodes where is_reserve='1' and father='".$br_id."'");
	$episode_list = $db->selectpuresql("select ep.*, u.name as uname from episodes ep INNER JOIN users u ON u.id = ep.user where ep.is_reserve='1' and ep.father='".$br_id."'");
	$ep_q = "select t.*, ev.id as evid, ev.dt as evdt, ev.approve as evapprove from 
	(select ep.* from episodes ep where ep.father='".$br_id."')t 
	LEFT JOIN (select * from event where father_db='episodes') 
	ev ON t.id=ev.father_id order by evdt desc";
	
	$episode_full_list = $db->selectpuresql($ep_q);


?>
                        <div id="tableHelper" class="row"> <!-- style="display: none;" -->
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header element-header-extra">Эфиры</h6>
                              <div class="element-box">                                 
                                 <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                       <a href="#episodes" aria-controls="episodes" role="tab" data-toggle="tab">Эфиры</a>
                                    </li>
                                    <li role="presentation">
                                       <a href="#pending" aria-controls="pending" role="tab" data-toggle="tab">Выпуски</a>
                                    </li>
									<li role="presentation">
                                       <a href="#reserve" aria-controls="reserve" role="tab" data-toggle="tab">В резерве</a>
                                    </li>
                                 </ul>
                                 
								 <div id="" style="overflow-x: hidden; overflow-y:scroll; height:230px;">
                                 <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="episodes">
                                       <div class="table-responsive">
									   <div class="form-desc">
                                    <p>Количество эфиров за последний год: <span><?php echo count($event_list);?></span></p>
                                    <p>Последний эфир: <span><?php if (count($event_list)>0) echo date("d.m.Y H:i", strtotime($event_list[0]['dt'])); ?></span></p>
                                 </div>
                                          <table class="table table-lightborder">
                                             <thead>
                                                <tr>
                                                   <th>Тема</th>
                                                   <th>Время эфира</th>
                                                   <th>Расписание</th>
                                                   <th>Телеканал</th>
                                                   <th>Показ</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php foreach($event_list as $event) {?>
												  <tr onclick="selectBroadcast_event(<?php echo $event['id'];?>)" id="broadcast_event_row<?php echo $event['id'];?>" class="clickable-row">
													 <td class="nowrap"><?php echo $event['title'];?></td>         
													 <td class="nowrap"><?php echo date("d.m.Y H:i", strtotime($event['dt']));?></td>         
													 <td class="nowrap"><?php echo $event['chname'];?>-<?php echo date("W-y", strtotime($event['dt']));?></td>         
													 <td><?php echo $event['chname'];?></td>
													 <td><?php echo $event['show_type'];?></td>
												  </tr> 
												<?php } ?> 

                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
									
									<div role="tabpanel" class="tab-pane" id="pending">
                                       <div class="table-responsive">
                                          <table class="table table-lightborder">
                                             <thead>
                                                <tr>
                                                   <th>ID выпуска</th>
                                                   <th>Тема</th>
												   <th>Показ</th>
												   <th>Статус</th>
												   <th></th>
                                                </tr>
                                             </thead>
                                             <tbody>
											<?php foreach($episode_full_list as $ep) {?>
                                                <tr>
                                                   	<td class="nowrap"><?php echo $ep["id"];?></td>         
                                                   <td class="nowrap"><?php echo $ep["title"];?></td>         
												   <td class="nowrap"><?php echo $ep["evdt"];?></td>
												   <td class="nowrap"><?php if ($ep['evid']) { if ($ep['evapprove']) {?><span style="color:green">Подтвержден</span><?php } else {?><span style="color:red">Не подтвержден</span><?php }} ?></td>	
													<td class="nowrap"><a href="episode_edit.php?id=<?php echo $ep["id"];?>" target="_blank">Редактировать</a></td>      
												</tr> 
											<?php } ?> 
											 
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
									
									
                                    <div role="tabpanel" class="tab-pane" id="reserve">
                                       <div class="table-responsive">
                                          <table class="table table-lightborder">
                                             <thead>
                                                <tr>
                                                   <th>ID выпуска</th>
                                                   <th>Тема</th>
                                                   <th>Кем добавлен</th>
                                                </tr>
                                             </thead>
                                             <tbody>
											
											 <?php foreach($episode_list as $ep) {?>
                                                <tr>
                                                   <td class="nowrap"><?php echo $ep["id"];?></td>         
                                                   <td class="nowrap"><?php echo $ep["title"];?></td>         
                                                   <td class="nowrap"><?php echo $ep["uname"];?></td>     
                                                </tr> 
											<?php } ?> 
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
								</div> 
                              </div>

                              
                           </div>
                        </div>
                     </div>
                     
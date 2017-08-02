<?php include_once 'usercontrol.php'; ?>
<!DOCTYPE html>
<html>
   <head>
      <?php include 'content_header.php'; ?>
	  <script src="printThis.js"></script>
   </head>
   <body>
      <div class="all-wrapper">
         <div class="layout-w">
            <div class="menu-w menu-activated-on-click">
               
               <?php include 'content_left.php'; ?>
            </div>
            <div class="content-w">
			
				<?php include 'content_top.php'; ?>

               <div class="content-i">
			   
			      <?php 
						 $act=0;
						 $id = 0;
						 $table = "montage_event";
						 
						 $montage_list = $db->select("montage");
						 
						 if (count($montage_list)==0) {echo "no montage room detected"; die();}
						 $montage_room = 0;
						 if (isset($_GET['montage_room'])) $montage_room = getget('montage_room');
						 if (isset($_POST['montage_room'])) $montage_room = getpost('montage_room');
						 
						 if ($montage_room == 0) $montage_room = $montage_list[0]['id'];
						 
						 
						 if (isset($_GET['act'])) { if ($_GET['act']=='add') $act=1; else if ($_GET['act']=='edit') $act=2; else if ($_GET['act']=='delete') $act=3; }

						if (isset($_POST['act']) && $_POST['act']=='add') {
							$broadcast = getpost('broadcast');
							 $episode = getpost('episode');
							 $montage = getpost('montage');
							 $incharge = getpost('incharge');
							 $note = getpost('note');
							 $duration = getpost('duration');
							 
							 $fd = getpost('from_date');
							 $ft = getpost('from_time');
							 $tt = getpost('to_time');
							 
								$montage_date_from_date = date("Y/m/d", strtotime($fd));
								$date_from_montage = $montage_date_from_date ." ".$ft;
								$date_to_montage = $montage_date_from_date ." ".$tt;
							 
							 $ins_montage_event = array("broadcast"=>$broadcast, "episode"=>$episode, "date_from"=>$date_from_montage, "date_to"=>$date_to_montage, "note"=>$note, "montage"=>$montage, "incharge"=>$incharge, "duration"=>$duration);
							 $db->insert($table, $ins_montage_event);
						}
						
						if (isset($_POST['act']) && $_POST['act']=='edit') {
							 $id = (int)getpost('id');
							 $broadcast = getpost('broadcast');
							 $episode = getpost('episode');
							 $montage = getpost('montage');
							 $incharge = getpost('incharge');
							 $note = getpost('note');
							 $duration = getpost('duration');
							 
							 $fd = getpost('from_date');
							 $ft = getpost('from_time');
							 $tt = getpost('to_time');
							 
								$montage_date_from_date = date("Y/m/d", strtotime($fd));
								$date_from_montage = $montage_date_from_date ." ".$ft;
								$date_to_montage = $montage_date_from_date ." ".$tt;
							 
							 $ins_montage_event = array("broadcast"=>$broadcast, "episode"=>$episode, "date_from"=>$date_from_montage, "date_to"=>$date_to_montage, "note"=>$note, "montage"=>$montage, "incharge"=>$incharge, "duration"=>$duration);
							 $db->update($table, $ins_montage_event, "id = '".$id."'");
						}
						
						if ($act==3){
							 $id = (int)getget('id');
							 $item = $db->delete($table, "id = '".$id."'");
						 }
						 
						 
						 
						 if ($act==2){
							 $id = (int)getget('id');
							 $item = $db->select_one($table, "id = '".$id."'");
						 }
						 
						 $this_montage = $db->select_one('montage', "id='".$montage_room."'");
						 
						 $search_date_from = $search_date_to = 0 ;
						 if (isset($_GET['search_date_from'])) $search_date_from = date("Y/m/d", strtotime(getget("search_date_from")));
						 if (isset($_GET['search_date_to'])) $search_date_to = date("Y/m/d", strtotime(getget("search_date_to")));
						 
						 if (!$search_date_from) $search_date_from = date("Y/m/d");
						 if (!$search_date_to) $search_date_to = date("Y/m/d", strtotime("+10 days"));
						
						 $sql = "select * from montage_event where montage='".$montage_room."' AND date_from >= '".$search_date_from."' AND  date_from <= '".$search_date_to."'";
						 //$sql = "select * from montage_event order by date_from";
						 //echo $sql;
						 //die();
						 $montage_event_list = $db->selectpuresql($sql);
						
					 ?>
					 <?php if ($act==2 || $act==1) {?>
					 <div class="content-box">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header"><?php if ($act==1) echo "Добавить"; else if ($act==2) echo "Редактировать"; ?></h6>
                               <div class="element-box">
                                 <form action="" id='myForm' method="POST">
                                    <fieldset class="form-group">         
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Дата монтажа (от)</label>
                                                      <input name="from_date" class="form-control datepicker" placeholder="выберите дату" type="text" <?php if ($act==2) echo 'value="'.date("d.m.Y", strtotime($item["date_from"])).'"'; ?>>
                                                   </div>
                                                </div>
												<div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Время монтажа (от)</label>
                                                      <input name = "from_time" class="form-control timepicker" placeholder="выберите время" type="text" <?php if ($act==2) echo 'value="'.date("H:i", strtotime($item["date_from"])).'"'; ?>>
                                                   </div>
                                                </div>
												<div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Время монтажа (до)</label>
                                                      <input  name = "to_time" class="form-control timepicker" placeholder="выберите время" type="text" <?php if ($act==2) echo 'value="'.date("H:i", strtotime($item["date_to"])).'"'; ?>>
                                                   </div>
                                                </div>
                                             </div> 
                                          </div>                                       
                                       </div>  
									   <div class="row">
                                          
										  <div class="col-sm-2">
                                                <div class="form-group">
                                                   <label for="">Хрон на выходе</label>
                                                   <input name="duration" class="form-control timepicker" placeholder="выберите время" type="text" value="<?php echo $item['duration'];?>">
                                                </div>
                                             </div>  
																				 
                                       </div>       
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Название материала</label>
                                                <input class="form-control" type="text"  name="broadcast" <?php if ($act==2) echo 'value="'.$item["broadcast"].'"'; ?>>
                                             </div>
                                          </div>                                       
                                       </div>
									   <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">ID выпуска</label>
                                                <input class="form-control" type="text"  name="episode" <?php if ($act==2) echo 'value="'.$item["episode"].'"'; ?>>
                                             </div>
                                          </div>                                       
                                       </div>
									   <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                      <label for="">АВМ №</label>               
                                                      <select name="montage" class="form-control selectpicker" title="выберите АВМ">
                                                         <?php 
												   foreach($montage_list as $u)
												   {?>
												   <option value="<?php echo $u["id"];?>" <?php if($u["id"]==$montage_room) echo 'selected';?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                          </div>                                       
                                       </div>
									   
									   
									   <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Ответственный</label>
                                                <input class="form-control" type="text"  name="incharge" <?php if ($act==2) echo 'value="'.$item["incharge"].'"'; ?>>
                                             </div>
                                          </div>                                       
                                       </div>
									   
									   <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Примечание</label>
                                                <input class="form-control" type="text"  name="note" <?php if ($act==2) echo 'value="'.$item["note"].'"'; ?>>
                                             </div>
                                          </div>                                       
                                       </div>
									   
                                    </fieldset>                              
                                    <div class="form-buttons-w">
										<input class="form-control" type="hidden"  name="act" value="<?php if ($act==1) echo "add"; else if ($act==2) echo "edit"; ?>">
										<?php if ($act==2) {?><input class="form-control" type="hidden"  name="id" value="<?php echo $id?>"><?php } ?>
                                       <button class="btn btn-primary" type="submit"><?php if ($act==1) echo "Создать"; else if ($act==2) echo "Редактировать"; ?></button>
                                       <button class="btn btn-default" type="button" onclick="window.location='?'">Отмена</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
					 <?php } else { ?>
			   
			   
                  <div class="content-box">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">КООРДИНАЦИЯ МОНТАЖНЫХ СТУДИЙ</h6>

							  
                       
                     
							  
							  
                              <div class="element-box">
							  
                                 <div id="fullMontage" class="table-responsive table-main">
                                    <table class="table table-lightborder">
                                       <thead>
                                          
										  <tr>
                                             <td colspan="8"><b><?php echo $this_montage['name'];?></b><br/> С <?php echo date("d.m.Y", strtotime($search_date_from));?> по <?php echo date("d.m.Y", strtotime($search_date_to));?>
											 		<span style="float:right">
											 			<a id="printer_link" class="print-hide" href ="#">
															<svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
																<path d="M22.2,5V1c0-0.4-0.3-0.7-0.7-0.7h-19C2.1,0.3,1.8,0.6,1.8,1v4C0.8,5.1,0,5.9,0,7v8.8c0,1.1,0.9,2,2,2h2.4V23
																c0,0.4,0.3,0.7,0.7,0.7h14.3c0.4,0,0.7-0.3,0.7-0.7v-5.3H22c1.1,0,2-0.9,2-2V7C24,5.9,23.2,5.1,22.2,5z M3.1,1.6h17.7V5H3.1V1.6z
																 M18.6,22.4h-13V15h13V22.4z M22.7,15.7c0,0.4-0.3,0.7-0.7,0.7h-2.1V15h0.5c0.4,0,0.7-0.3,0.7-0.7s-0.3-0.7-0.7-0.7H3.6
																C3.2,13.7,3,14,3,14.3S3.2,15,3.6,15h0.7v1.4H2c-0.4,0-0.7-0.3-0.7-0.7V7c0-0.4,0.3-0.7,0.7-0.7H22c0.4,0,0.7,0.3,0.7,0.7V15.7z
																 M7.8,18.2h8.3c0.4,0,0.7-0.3,0.7-0.7s-0.3-0.7-0.7-0.7H7.8c-0.4,0-0.7,0.3-0.7,0.7S7.5,18.2,7.8,18.2z M7.8,21h8.3
																c0.4,0,0.7-0.3,0.7-0.7s-0.3-0.7-0.7-0.7H7.8c-0.4,0-0.7,0.3-0.7,0.7S7.5,21,7.8,21z M20.4,8h-4.8C15.2,8,15,8.3,15,8.7v2.4
																c0,0.4,0.3,0.7,0.7,0.7h4.8c0.4,0,0.7-0.3,0.7-0.7V8.7C21,8.3,20.8,8,20.4,8z M19.7,10.4h-3.5V9.3h3.5V10.4z"/>
															</svg>
														</a>
											 		</span>
											 </td>
                                          </tr>
										  
										  <tr>
                                             <th>Дата</th>
                                             <th>Время начал.</th>
                                             <th>Время окон.</th>
											  <th>Монтируемый материал</th>
											  <th>Ответственный</th>
                                             <th>Хрон на выхода</th>
                                             <th>Заложено часов</th>
											  				<th class="print-hide"></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php
											foreach($montage_event_list as $p) {
												?>
												
										<tr>
                                             <td class="nowrap"><?php echo date("d.m.Y", strtotime($p['date_from']));?></td>         
                                             <td class="nowrap"><?php echo date("H:i", strtotime($p['date_from']));?></td>
											 <td class="nowrap"><?php echo date("H:i", strtotime($p['date_to']));?></td>
											 <td class="nowrap"><?php echo $p['broadcast'];?></td>         
                                             <td class="nowrap"><?php echo $p['incharge'];?></td>
											 <td class="nowrap"><?php echo $p['duration'];?></td>
											 <td class="nowrap"><?php 
											    $to_time = strtotime($p['date_from']);
												$from_time = strtotime($p['date_to']);
												$min_diff_total =  floor(abs($to_time - $from_time) / 60);
												//$date1 = new DateTime(date('Y-m-d', strtotime($p['date_from'])));
												//$date2 = new DateTime(date('Y-m-d', strtotime($p['date_to'])));
												//$min_diff = $date1->diff($date2)->i; // 0
												$hour_diff = floor($min_diff_total / 60);
												$min_diff = $min_diff_total - $hour_diff * 60;
												echo $hour_diff;
												if ($min_diff>0){
													echo ".";
													echo $min_diff;
												}
											 ?></td>         

											 <td class="nowrap print-hide"><div style="float:right"><a href="?act=edit&id=<?php echo $p['id'];?>">Редактировать</a> <a href="?act=delete&id=<?php echo $p['id'];?>" onclick="return confirm('Вы уверены что хотите удалить эту запись из базы?')">Удалить</a><div></td>											 
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
                  
				  
				  
				  <div class="content-panel">
				  
					<div class="element-wrapper">
                        <h6 class="element-header">Фильтр</h6>
                        <div class="element-box-tp">
                           <form action="" method='get'>
                              
							  
							  <div class="form-group">
                                                      <label for="">С</label>
                                                      <input  name = "search_date_from" class="form-control datepicker" placeholder="выберите дату" type="text" value="<?php echo date("d.m.Y", strtotime($search_date_from));?>">
                                                   </div>
												   
												   
												 <div class="form-group">
                                                      <label for="">По</label>
                                                      <input  name = "search_date_to" class="form-control datepicker" placeholder="выберите дату" type="text" value="<?php echo date("d.m.Y", strtotime($search_date_to));?>">
                                                   </div>  
												   
												   <div class="form-group">
                                                      <label for="">АВМ №</label>               
                                                      <select name="montage_room" class="form-control selectpicker" title="выберите АВМ">
                                                         <?php 
												   foreach($montage_list as $u)
												   {?>
												   <option value="<?php echo $u["id"];?>" <?php if($u["id"]==$montage_room) echo 'selected';?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
												   
                              <div class="form-group">
                                 <button class="btn btn-primary">
                                    Фильтр
                                 </button>
                              </div>   
                           </form>
                        </div>
                     </div>
				  

					 
					 
					 <div class="element-wrapper">
                        <h6 class="element-header">Действия</h6>
                        <div class="element-box-tp">
                           <div class="el-buttons-list full-width">
                              <a class="btn btn-default" href="?act=add">
                                 <span>Добавить</span>
                              </a>
                              
                           </div>
						   
						   
						   
                        </div>
                     </div>
                     
                  </div>
               </div>
			    <?php } ?>
            </div>
					
         </div>
      </div>
	  <?php include 'include.js.php';?>

      <script>
		$('#printer_link').click(function(){
			$('#fullMontage').printThis({
				header: "<h1><?php echo 'КООРДИНАЦИЯ МОНТАЖНЫХ СТУДИЙ';?></h1>" 
			});
			return false;
		});
	  </script>
   </body>
</html>
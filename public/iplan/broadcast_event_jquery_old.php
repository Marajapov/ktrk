<?php include_once 'config.php'; ?>
<?php include_once 'include.js.php';?>
<?php 
    if (isset($_POST['brodcast_id'])) {
        $br_id = (int)getpost('brodcast_id');
    }
	if ($br_id==0) return;
	$event_list = $db->selectpuresql("select e.*, ch.name as chname from event e INNER join channels ch ON ch.id=e.channel");
	//$event_list = $db->selectpuresql("select e.*, ch.name as chname, u.name as uname from event e INNER join channels ch ON ch.id=e.channel inner join users u ON u.id = e.user where e.approve='1' AND e.dt >= DATE_SUB(NOW(),INTERVAL 1 YEAR) AND e.father_id='".$film_id."' AND e.father_db='films' order by e.dt desc");
	$last = $db->selectpuresql("select * from event order by id desc limit 1");
?>
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header element-header-extra">Эфиры</h6>
                              <div class="element-box">                                 
                                 <ul class="form-nav">
                                    <li class="nav-item">
                                       <a class="nav-link active" href="#">Эфиры</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#">В резерве</a>
                                    </li>
                                 </ul>
                                 <div class="form-desc">
                                    <p>Количество эфиров за последний год: <span><?php echo count($event_list);?></span></p>
                                    <p>Последний эфир: <span><?php if (count($last)>0) echo date("d.m.Y H:i", strtotime($last[0]['dt'])); ?></span></p>
                                 </div>
                                 <div class="table-responsive">
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
<script>
	var item = [];
	var event_list = <?php echo json_encode($event_list); ?>;
	$( "#add_calendar" ).click(function() {
		
		var dt = $( "#caledar_dt" ).val();
		var tm = $( "#calendar_time" ).val();
		var channel = $( "#calendar_channel" ).val();
		
		
		var title = $('#event_add_title').val();
		var show_type = $('#event_add_show_type').val();
		var duration_string = $('#event_add_duration_string').val();
		var duration = $('#event_add_duration').val();
		
		$.ajax({
		url: 'broadcast_event_add_jquery.php',
		type: 'post',
		data: { "brodcast_id": <?php echo $br_id;?>, "dt":dt , "tm":tm , "channel":channel , "title":title , "show_type":show_type, "duration_string":duration_string, "duration":duration },
		success: function(response) {
			console.log(response);
		}
		});
		
	});
	$('#broadcast_event_calendar').css({ display: "none" });
	function selectBroadcast_event(event_id){
		$.each(event_list, function (i, elem) {
			if (elem['id']==event_id){
				item = elem;
				$('#event_add_title').val(elem['title']);
				$('#event_add_show_type').val(elem['show_type']);
				$('#event_add_duration_string').val(elem['duration_string']);
				$('#event_add_duration').val(elem['duration']);
				return false;
			}
		});
		$('#broadcast_event_calendar').css({ display: "block" });
		$('#broadcast_event_row'+event_id).addClass('active');
		$('#broadcast_event_row'+event_id).siblings().removeClass('active');
	}
</script>
                              <div class="element-box" id="broadcast_event_calendar" style="display:none">
                                
                                    <fieldset class="form-group">          
                                       <legend><span>Разместить в сетке</span></legend>
                                       <div class="row">
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Дата выхода</label>
                                                <input id="caledar_dt" class="form-control datepicker" placeholder="Выберите дату" type="text">
                                             </div>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Время выхода</label>
                                                <input id="calendar_time" class="form-control timepicker" placeholder="Выберите время" type="text">
                                             </div>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Канал<!--Сетка--></label>
                                                <select id="calendar_channel" class="form-control selectpicker" title="Выберите сетку">
												<?php $auth_user_id = $_SESSION["user_id"]; $auth_user = $db->select_one("users", "id='".$auth_user_id."'"); ?>
                                                  <?php
													$channels = make_channels_list($auth_user);
													foreach($channels as $ch) {
												  ?>
												   <option value="<?php echo $ch['id'];?>"><?php echo $ch['name'];?></option>
                                                   <?php } ?>
                                                </select>
                                             </div>
                                          </div>
                                       </div>                                       
                                    </fieldset>                                    
                                    <div class="form-buttons-w">
									<input type="hidden" id="event_add_title"><input type="hidden" id="event_add_show_type"><input type="hidden" id="event_add_duration_string"><input type="hidden" id="event_add_duration">
                                       <button class="btn btn-primary" type="button" id="add_calendar">Выбрать</button>
                                       <button class="btn btn-default" type="button">Отмена</button>
                                    </div>
                                 
                              </div>
                           </div>
                        </div>
                     
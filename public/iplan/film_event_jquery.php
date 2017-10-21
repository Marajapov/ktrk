<?php include_once 'config.php'; ?>
<?php include_once 'include.js.php';?>
<?php 
    if (isset($_POST['film_id'])) {
        $film_id = (int)getpost('film_id');
    }
	if ($film_id==0) die();
	$event_list = $db->selectpuresql("select e.*, ch.name as chname, u.name as uname from event e INNER join channels ch ON ch.id=e.channel inner join users u ON u.id = e.user where e.approve='1' AND e.dt >= DATE_SUB(NOW(),INTERVAL 1 YEAR) AND e.father_id='".$film_id."' AND e.father_db='films' order by e.dt desc");
	$film = $db->select_one("films", "id = '".$film_id."'");
?>
<div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header element-header-extra">Эфиры</h6>
                              <div class="element-box">
                                 <div class="form-desc">
                                    <p>Количество эфиров за последний год: <span><?php echo count($event_list);?></span></p>
                                    <p>Последний эфир: <span><span><?php if (count($event_list)>0) echo date("d.m.Y H:i", strtotime($event_list[0]['dt'])); ?></span></p>
                                 </div>
								 <div id="" style="overflow-x: hidden; overflow-y:scroll; height:230px;">
                                 <div class="table-responsive">
                                    <table class="table table-lightborder">
                                       <thead>
                                          <tr>
                                             <th>Время эфира</th>
                                             <th>Расписание</th>
                                             <th>Телеканал</th>
                                             <th>Кем размещен в эфир</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          
										  <?php foreach($event_list as $event) {?>
										  
										  <tr>
                                             <td class="nowrap"><?php echo date("d.m.Y H:i", strtotime($event['dt']));?></td>         
                                             <td class="nowrap"><?php echo $event['chname'];?>-<?php echo date("W-y", strtotime($event['dt']));?></td>         
                                             <td><?php echo $event['chname'];?></td>
                                             <td><?php echo $event['uname'];?></td>
                                          </tr>  
                                         
										  <?php } ?>
										 
                                       </tbody>
                                    </table>
                                 </div></div>
                              </div>
<script>
$( "#add_calendar" ).click(function() {
		
		var dt = $( "#caledar_dt" ).val();
		var tm = $( "#calendar_time" ).val();
		var channel = $( "#calendar_channel" ).val();
		
		
		var film_id = $('#film_id').val();
		var seria = 0;
		<?php if ($film['type']==2) {?> seria = $('#seria').val();<?php } ?>
		var title = $('#event_add_title').val();
		var duration_string = $('#event_add_duration_string').val();
		var duration = $('#event_add_duration').val();
		
		$.ajax({
		url: 'film_event_add_jquery.php',
		type: 'post',
		data: { "film_id": film_id, "dt":dt , "seria":seria , "tm":tm , "channel":channel , "title":title , "duration_string":duration_string, "duration":duration },
		success: function(response) {
			$( "#caledar_dt" ).val("");
			$( "#calendar_time" ).val("");
			alert(response);
		}
		});
		
});
</script>
                              <div class="element-box" id="broadcast_event_calendar" >
                                
                                    <fieldset class="form-group">          
                                       <legend><span>Разместить в сетке</span></legend>
                                       <div class="row">
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Дата выхода</label>
                                                <input id="caledar_dt" class="form-control datepicker" placeholder="Выберите дату" type="text">
                                             </div>
                                          </div>
                                          <div class="col-sm-4" style="width:250px">
                                             <div class="form-group">
                                                <label for="">Время выхода</label>
                                                <input id="calendar_time" class="form-control timepicker" placeholder="Выберите время" type="text">
                                             </div>
                                          </div>
										  <?php if ($film['type']==2) {
												$this_seria = 0;
												if (count($event_list)>0) $this_seria = $event_list[0]['seria'];
												$this_seria++;
										  ?>
										  <div class="col-sm-4" style="width:150px">
                                             <div class="form-group">
                                                <label for="">Серия #</label>
                                                <input id="seria" class="form-control" type="text" value="<?php echo $this_seria;  ?>">
                                             </div>
                                          </div>
										  <?php } ?>
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
									<input type="hidden" id="event_add_title" value="<?php echo $film['name'];?>">
									<input type="hidden" id="event_add_duration_string" value="<?php echo $film['duration'];?>" >
									<input type="hidden" id="event_add_duration" value="<?php echo $film['durationMinute'];?>">
									<input type="hidden" id="film_id" value="<?php echo $film['id'];?>">
                                       <button class="btn btn-primary" type="button" id="add_calendar">Выбрать</button>
                                       <button class="btn btn-default" type="button">Отмена</button>
                                    </div>
                                 
                              </div>
                           </div>
                        </div>
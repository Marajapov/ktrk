<?php include_once 'usercontrol.php'; ?>
<?php
	$place_id = 0;
	if (isset($_GET['place_id'])) $place_id = getget('place_id');
	if (isset($_POST['place_id'])) $place_id = getpost('place_id');
	if ($place_id == 0) $place = $db->select_one("place", "1", "*", "order by id LIMIT 1");
	else $place = $db->select_one("place", "id='".$place_id."'");
	$place_id = $place['id'];
?>
<!DOCTYPE html>
<html>
   <head>
      <?php include 'content_calendar_header.php'; ?>
      
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
			   
			   
			   
                  <div class="content-box">
						<div class="row">
													<div class="col-sm-10">
													   <div class="form-group">
														              
														  <select id="place_main_changer" name="place_tech" class="form-control selectpicker" title="выберите свет" style="color:red !important; background: #bf5279 !important;">
															 
															 <?php $users_list = $db->select("place");
													   foreach($users_list as $u)
													   {?>
													   <option value="<?php echo $u['id'];?>" <?php if ($place_id==$u['id']) echo "selected";?>><?php echo $u['name'];?></option>
													   <?php  } ?>
															 
														  </select>
													   </div>
													</div>
													<div class="col-sm-2">
													   <div class="form-group form-extra form-extra-calendar">
													   	<button id="add-New-Event" class="btn btn-primary" type="submit">Добавить</button>
									                 	<a id='printer_link' href ="return false;">
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
													   </div>
													</div>
													
													
													
						</div>
					 

						<div id="fullCalendar">
							<style type="text/css">
					      	@media print{      		
								    @page {
								        size: portrait;
								    }
					      	}
					      </style>
						</div>

                  </div>
				  
				  
				  
				  
				  
                  
               </div>
            </div>
         </div>
      </div>
	  
	  
	  <div id="calendarModal">
         <div class="element-wrapper">
            <h6 class="element-header" id="eventTitle"></h6>
            
               <fieldset> 
												<div class="row">
													<div class="col-sm-6">
													   <div class="form-group">
														  <label for="">Дата начала</label>
														  <input id="modal_date_from_date" name="date_from_date" class="form-control datepicker" placeholder="выберите дату" type="text">
													   </div>
													</div>
													<div class="col-sm-6">
													   <div class="form-group">
														  <label for="">&nbsp;</label>
														  <input id="modal_date_from_time" name="date_from_time" class="form-control timepicker" placeholder="выберите время" type="text">
													   </div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
													   <div class="form-group">
														  <label for="">Дата окончания</label>
														  <input id="modal_date_to_date" name="date_to_date" class="form-control datepicker" placeholder="выберите дату" type="text">
													   </div>
													</div>
                                                <div class="col-sm-6">
                                                   <div class="form-group">
													 <label for="endDate">&nbsp;</label>
														<input id="modal_date_to_time" class="form-control timepicker" placeholder="выберите время" type="text">
												  </div>
                                                </div>
												</div>
												
												<div class="row">
													<div class="col-sm-12">
													   <div class="form-group">
														  <label for="">Тип события</label>               
														  <select id="modal_reason" name="modal_reason" class="form-control selectpicker" title="выберите">
															 
															 <option value="Съемки передачи">Съемки передачи</option>
															 <option value="Прямой эфир">Прямой эфир</option>
															 
														  </select>
													   </div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-sm-12">
													   <div class="form-group">
														  <label for="">Название</label>
														  <input id="modal_title" class="form-control" type="text">
													   </div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-sm-12">
													   <div class="form-group">
														  <label for="">Примечание</label>
														  <input id="modal_note" class="form-control" type="text">
													   </div>
													</div>
												</div>
												
        
               </fieldset>
               <div class="form-buttons-w">
				  <input id="modal_event_id" type="hidden" value="0">
				  <input id="modal_place_studio_id" type="hidden" value="<?php echo $place_id;?>">
                  <button id="button-modal-save" class="btn btn-primary" type="submit">Сохранить</button>
                  <button id="button-modal-delete" class="btn btn-default">Удалить</button>
                  <button class="btn btn-default btn-close close">Отмена</button>
               </div>
            
         </div>
      </div>
	  
	  <?php include 'include.js.php';?>

      <!-- Calendar scripts -->
      <script src="js/jquery.easyModal.js"></script>
      <script src="js/fullcalendar.min.js"></script>
      <script src="js/coordinator_place.js"></script>
	  <script>
		$(function(){
			
			$("#printer_link").click(function(){
						$('#fullCalendar').printThis({
							header: "<h1><?php echo $place['name'];?></h1>" 
						});
						return false;
			});
			
			$('#fullCalendar').fullCalendar({
               // General Display
               header: {
                   left: "agendaWeek customMonth",
                   center: "prev title next",
                   right: "today"
               },
               // height: 'auto',
               height: 800,
              editable: true,

               customButtons: {
                  customMonth: {
                     text: 'Месяц',
                     click: function(){
                        $('#fullCalendar').fullCalendar('gotoDate', getNextMonday().format('YYYY-MM-DD'));
                        $('#fullCalendar').fullCalendar('changeView', 'month');
                     }
                  }
               },

               // Timezone
               timezone: 'UTC+6',

               // Current Date

               // Views
               defaultView: 'agendaWeek',

               // Agenda Options
               allDaySlot: false,
               minTime: '06:00:00',
               maxTime: "22:00:00",
               // scrollTime: '06:00:00',
               slotLabelFormat: 'HH:mm',
               slotLabelInterval: '01:30:00',

               // Text/Time Customization           
               buttonText: {
                  today: 'текущий',
                  week: 'неделя',
                  month: 'месяц',                  
               },
               columnFormat: 'ddd, D MMM',
               locale: 'ru',
               timeFormat: 'HH:mm',
               
               // Clicking & Hovering
               navLinks: true,

               // Selection

               // Event Data
               timezoneParam: 'UTC+6',
               events: [
				<?php $place_event_list = $db->select("place_event", "place = '".$place_id."'"); foreach($place_event_list as $item) {?>
                  {
                      event_id: '<?php echo $item['id'];?>',
					  event_place: '<?php echo $place_id;?>',
					  name: '<?php echo $item['broadcast'];?>',
					  reason: '<?php echo $item['reason'];?>',
					  note: '<?php echo $item['note'];?>',
					  title: "<?php echo $item['reason'];?>: <?php echo $item['broadcast'];?>",
                      start: '<?php echo $item['date_from'];?>',
                      end: '<?php echo $item['date_to'];?>',
						<?php if ($item['reason']=='Прямой эфир') {?>
						color:'#FF0000',
						<?php } ?>
				},<?php } ?>
                  
               ],
               eventClick: function(event, element) {
                     calendarModal(event);
               }
            });
		});
	  </script>
   </body>
</html>
<?php include 'usercontrol.php';?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <meta charset="utf-8">
      <meta content="ie=edge" http-equiv="x-ua-compatible">
      <meta content="template language" name="keywords">
      <meta content="Admin" name="author">
      <meta content="Admin dashboard html template" name="description">
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <link href="favicon.png" rel="shortcut icon">
      <link href="apple-touch-icon.png" rel="apple-touch-icon">
      <link href="css/vendor/bootstrap/bootstrap.css" rel="stylesheet">
      <link href="css/vendor/bootstrap-select/bootstrap-select.css" rel="stylesheet">
      <link href="css/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker-build.css" rel="stylesheet">
      <link href="css/fullcalendar.min.css" rel="stylesheet">
      <link href="css/vendor/font-awesome/font-awesome.css" rel="stylesheet">
      <link href="css/vendor/build/build.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <div class="all-wrapper">
         <div class="layout-w">
            <div class="menu-w">
               <div class="logo-w">
                  <a class="logo" href="index.php"><img src="img/logo.png"><span>Admin Panel</span></a>
                  <div class="mobile-menu-trigger">
                     <i class="icon fa fa-navicon" aria-hidden="true"></i>
                  </div>
               </div>
               <div class="menu-and-user">

                 

               </div>
            </div>
			
			
			
			
			
            <div class="content-w">
               <div class="content-top clearfix">
                  

                          
               </div>
               <div class="content-i">
                  <div class="content-box">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">КООРДИНАЦИЯ ЭФИРНЫХ СТУДИЙ</h6>
                              <div class="element-box">
                                 <div id="fullCalendar"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </div>

      <div id="calendarModal">
         <div class="element-wrapper">
            <h6 class="element-header" id="eventTitle"></h6>
            <form>
               <fieldset> 
                  <div class="form-group">
                     <label for="startDate">Время начала</label>
                     <input id="startDate" class="form-control timepicker" placeholder="Выберите дату" type="text">
                  </div> 
                  <div class="form-group">
                     <label for="endDate">Время окончания</label>
                     <input id="endDate" class="form-control timepicker" placeholder="Выберите дату" type="text">
                  </div>         
               </fieldset>
               <div class="form-buttons-w">
                  <button class="btn btn-primary" type="submit">Сохранить</button>
                  <button class="btn btn-default">Удалить</button>
                  <button class="btn btn-default btn-close close">Отмена</button>
               </div>
            </form>
         </div>
      </div>

      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script>
         var sidebar = $('.menu-w'),
             btnToggle = $('.btn-toggle');

         btnToggle.click(function(){
            sidebar.toggleClass('menu-open');
            if(sidebar.hasClass('.menu-open')){
               btnToggle.attr('title','Свернуть меню')
            } else {
               btnToggle.attr('title','Развернуть меню')
            }
         });
      </script>
      <script src="js/moment.js"></script>
      <script src="js/transition.js"></script>
      <script src="js/collapse.js"></script>
      <script src="js/bootstrap-select.js"></script>
      <script src="js/bootstrap-datetimepicker.js"></script>
      <script src="js/ru.js"></script>

      <script>
         $('.datepicker').datetimepicker({
            locale: 'ru',
            format: 'L',
            icons: {
               previous: "dp-icon dp-icon-previous",
               next: "dp-icon dp-icon-next",
            }
         });

         $('.timepicker').datetimepicker({
            locale: 'ru',
            format: 'LT',
            icons: {
               up: "dp-icon dp-icon-up",
               down: "dp-icon dp-icon-down"
            }
         });

         $('.selectpicker').selectpicker({
            iconBase: 'dp-icon',
            tickIcon: 'dp-icon-check',
         });
      </script>

      <!-- Calendar scripts -->
      <script src="js/jquery.easyModal.js"></script>
      <script src="js/fullcalendar.min.js"></script>
      <script>
		 
		 function addEvent(){
					var a = {
                      title: "Шайтандын кийими Прада",
                      start: '2017-07-13 15:00:00',
                      end: '2017-07-13 15:45:00'
                  };
		 }
		 
         $('#calendarModal').easyModal({
            top: 200,
            overlay : 0.2
         });
         
         $('.fc-event').click(function(e){
            $('#modal1').trigger('openModal');
            e.preventDefault();
         });

         function calendarModal(event){
            $('#calendarModal').trigger('openModal');

            var eventTitle = $('#eventTitle'),
                start = event.start.format('HH:mm'),
                end = event.end.format('HH:mm'),
                startDate = $('#startDate'),
                endDate = $('#endDate');

            eventTitle.html(event.title);
            startDate.val(start);
            endDate.val(end);
         }

         function getNextMonday(){
            return moment().add(1, 'weeks').isoWeekday(1);
         }

         $(function(){
			 
			
			
            var currentDate = moment().format('YYYY-MM-DD');

            console.log(getNextMonday().format('YYYY-MM-DD'));

            $('#fullCalendar').fullCalendar({
               // General Display
               header: {
                   left: "agendaWeek customMonth",
                   center: "prev title next",
                   right: "today"
               },
               // height: 'auto',
               height: 800,
               dateAlignment: 'week',

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
				<?php $place_event_list = $db->select("place_event"); foreach($place_event_list as $item) {?>
                  {
                      title: "<?php echo $item['reason'];?>: <?php echo $item['broadcast'];?>",
                      start: '<?php echo $item['date_from'];?>',
                      end: '<?php echo $item['date_to'];?>'
				},<?php } ?>
                  
               ],
               eventClick: function(event, element) {
                     calendarModal(event);
                     $('#calendar').fullCalendar('updateEvent', event);

               }
            });
			
			var myCalendar = $('#calendar'); 
			myCalendar.fullCalendar();
			var myEvent = {
			  title:"my new event",
			  allDay: true,
			  start: new Date(),
			  end: new Date()
			};
			myCalendar.fullCalendar( 'renderEvent', myEvent );
			
			//$('#calendar').fullCalendar('option', 'height', 200);
         });
      </script>
   </body>
</html>
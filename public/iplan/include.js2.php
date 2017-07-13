 

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

         $(function(){

            $('#fullCalendar').fullCalendar({
               // General Display
               header: {
                   left: "agendaWeek",
                   center: "prev title next",
                   right: "today"
               },
               // height: 'auto',
               height: 800,

               // Timezone
               timezone: 'UTC+6',

               // Views
               defaultView: 'agendaWeek',

               // Agenda Options
               allDaySlot: false,
               // minTime: '06:00:00',
               scrollTime: '06:00:00',
               slotLabelFormat: 'HH:mm',
               slotLabelInterval: '00:30:00',

               // Text/Time Customization           
               buttonText: {
                  today: 'сегодня',
                  week: 'неделя'
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
                  {
                      title: "Шайтандын кийими Прада",
                      start: '2017-07-09 15:00:00',
                      end: '2017-07-09 15:45:00'
                  },
                  {
                      title: "Шайтандын кийими",
                      start: '2017-07-09 15:45:00',
                      end: '2017-07-09 16:30:00'
                  },
                  {
                      title: "Шайтандын кийими Прада, Шайтандын кийими Прада",
                      start: '2017-07-07 23:40:00',
                      end: '2017-07-08 01:10:00'
                  }
               ],
               eventClick: function(event, element) {
                     calendarModal(event);
                     $('#calendar').fullCalendar('updateEvent', event);

               }
            });
         });
      </script>
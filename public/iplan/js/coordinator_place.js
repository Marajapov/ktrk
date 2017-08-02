var temp_event = new Object();

		function send_ajax(event){
			var myObject = new Object();
			myObject.event_id = event.event_id;
			myObject.action = event.action;
			myObject.start = event.start_dt_string;
			myObject.end = event.end_dt_string;
			myObject.reason = event.reason;
			myObject.note = event.note;
			myObject.event_place = $("#modal_place_studio_id").val();
			myObject.broadcast = event.name;
			
			var myjson = JSON.stringify(myObject);
			
			$.ajax({
				url: 'coordinator_place_jquery.php',
				type: 'post',
				data: { data: myjson},
				success: function(response) {
					event.event_id = response;
				},
				async: false
			});
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
			
			temp_event = event;

            var eventTitle = $('#eventTitle'),
                start_date = event.start.format('DD.MM.YYYY'),
                end_date = event.end.format('DD.MM.YYYY'),
				start_time = event.start.format('HH:mm'),
                end_time = event.end.format('HH:mm'),
				modal_title = $('#modal_title'),
				modal_reason = $('#modal_reason'),
				modal_note = $('#modal_note'),
				modal_event_id = $('#modal_event_id'),
				modal_date_from_date = $('#modal_date_from_date'),
				modal_date_from_time = $('#modal_date_from_time'),
				modal_date_to_date = $('#modal_date_to_date'),
				modal_date_to_time = $('#modal_date_to_time');
			
			//$('#button-modal-delete').css("display","block");
            eventTitle.html(event.title);
			modal_date_from_date.val(start_date);
			modal_date_from_time.val(start_time);
			modal_date_to_date.val(end_date);
			modal_date_to_time.val(end_time);
			modal_title.val(event.name);
			modal_note.val(event.note);
			modal_event_id.val(event.event_id);
			modal_reason.val(event.reason);
			modal_reason.selectpicker('refresh');
         }

         function getNextMonday(){
            return moment().add(1, 'weeks').isoWeekday(1);
         }

         $(function(){

			$("#place_main_changer").change(function(){
				var id = $("#place_main_changer").val();
				window.location.replace("coordinator_place.php?place_id="+id);
			});
			
			
			$("#button-modal-delete").click(function(){
				
				
				
				var modal_event_id = $('#modal_event_id');
				if (modal_event_id.val()==0) {
					$('#calendarModal').trigger('closeModal');
					return;
				}
				if (!confirm("Вы уверены что хотите удалить эту запись из базы?")) return;
				var event = temp_event;
				$('#fullCalendar').fullCalendar( 'removeEvents' , event._id );
				temp_event = new Object();
				event.action='delete';
				send_ajax(event);
				 $('#calendarModal').trigger('closeModal');
			});
			
			$("#add-New-Event").click(function(){
				var eventTitle = $('#eventTitle'),
				modal_title = $('#modal_title'),
				modal_reason = $('#modal_reason'),
				modal_note = $('#modal_note'),
				modal_event_id = $('#modal_event_id'),
				modal_date_from_date = $('#modal_date_from_date'),
				modal_date_from_time = $('#modal_date_from_time'),
				modal_date_to_date = $('#modal_date_to_date'),
				modal_date_to_time = $('#modal_date_to_time');
				
				eventTitle.html("Новое событие");
				modal_date_from_date.val("");
				modal_date_from_time.val("");
				modal_date_to_date.val("");
				modal_date_to_time.val("");
				modal_title.val("");
				modal_note.val("");
				modal_event_id.val(0);
				 $('#calendarModal').trigger('openModal');
			});
			
			$("#button-modal-save").click(function(){
				
				var modal_event_id = $('#modal_event_id');
				var event = modal_event_id.val()>0 ? temp_event : new Object();
				
				
				var eventTitle = $('#eventTitle'),
					modal_title = $('#modal_title'),
					modal_reason = $('#modal_reason'),
					modal_note = $('#modal_note'),
					modal_date_from_date = $('#modal_date_from_date'),
					modal_date_from_time = $('#modal_date_from_time'),
					modal_date_to_date = $('#modal_date_to_date'),
					modal_date_to_time = $('#modal_date_to_time');
				
				eventTitle.html("Новое событие");
				
				var st_dt1 = modal_date_from_date.val();
				var st_tm = modal_date_from_time.val();
				var ed_dt1 = modal_date_to_date.val();
				var ed_tm = modal_date_to_time.val();
				
				if (st_tm.length * ed_tm.length == 0){
					alert('Выберите время');
					return;
				}
				
				var st_dt2 = st_dt1.split(".").reverse().join("-");
				var ed_dt2 = ed_dt1.split(".").reverse().join("-");
				
				var st_dt=new Date(st_dt2 + " " +st_tm);
				var ed_dt=new Date(ed_dt2 + " " +ed_tm);
				
				if (isNaN(st_dt.getMonth()) || isNaN(ed_dt.getMonth())){
					alert('Ошибка! Выберите дату');
					return;
				}
				
				event.start_dt_string = st_dt2 + " " +st_tm;
				event.end_dt_string = ed_dt2 + " " +ed_tm;
				event.start = st_dt;
				event.end = ed_dt;
				event.reason = modal_reason.val();
				event.name = modal_title.val();
				event.note = modal_note.val();
				event.title = event.reason + ": " + event.name;
				event.color= event.reason=='Прямой эфир' ? "#FF0000": null;

				if (modal_event_id.val()>0) {
						event.action='edit';
						send_ajax(event);
						$('#fullCalendar').fullCalendar('updateEvent', event);
					}
				else {
						event.action='add';
						send_ajax(event);
						$('#fullCalendar').fullCalendar( 'renderEvent', event, 'stick' );
					}
				
				temp_event = new Object();
				 $('#calendarModal').trigger('closeModal');
				 
			});
			
			
            var currentDate = moment().format('YYYY-MM-DD');            
			
			
         });
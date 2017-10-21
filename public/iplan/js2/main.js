  var day0 = [], day1 = [], day2 = [], day3 = [], day4 = [], day5 = [], day6 = [];
  var emp0 = [], emp1 = [], emp2 = [], emp3 = [], emp4 = [], emp5 = [], emp6 = [];
  var month_ar = [];
  
  var defaultSettings = {
      headers: [],  
      day0: [], day1: [], day2: [], day3: [], day4: [], day5: [], day6: [],
	  emp0: [], emp1: [], emp2: [], emp3: [], emp4: [], emp5: [], emp6: [],
	  month_ar: [],
      cardTemplate: '<div>${id}</div>',

      onClick: function (e, task) {openModal(task);},

      containerCssClass: 'skeduler-container',
      headerContainerCssClass: 'skeduler-headers',
      schedulerContainerCssClass: 'skeduler-main',
      taskPlaceholderCssClass: 'skeduler-task-placeholder',
      cellCssClass: 'skeduler-cell',

      lineHeight: 30,
      borderWidth: 1,

      debug: false
  };
  var settings = {};
  var root = this;
  var this_tab=0;
  
    function toTimeString(value) {
    return (value < 10 ? '0' : '') + Math.ceil(value) + (Math.ceil(value) > Math.floor(value) ? ':30' : ':00');
  }
  
  function getCardHeight(duration) {
	var dur = (settings.lineHeight + settings.borderWidth) * (duration / 60) - 1;
    return dur;
  }
  
  function renderInnerCardContent(task) {
    var result = settings.cardTemplate;
    for (var key in task) {
      if (task.hasOwnProperty(key)) {
        // TODO: replace all
        result = result.replace('${' + key + '}', task[key]);
      }
    }
    return $(result);
  }
  
  function renderEmptyCardContent(task) {
    var result = settings.emptyCardTemplate;
   
    return $(result);
  }

  function getCardTopPosition(startTime) {
    return (settings.lineHeight + settings.borderWidth) * (startTime);
  }
  
  function appendTasks(placeholder, tasks) {
    tasks.forEach(function(task) {
      appendTask(task, placeholder);
    }, this);
  }
  
  function appendTask(task, placeholder) {
	  if (task.column>6){
		    placeholder = (typeof placeholder !== 'undefined') ?  placeholder : $("#monthly_day_"+task.column);
			var card = $('<div style="font-size:11" id="event_month_'+task.id+'">'+task.startTimeString+'<br>'+task.title+'</div>');
			card.appendTo("#monthly_day_"+task.column);
			
	  }
	  if(task.column<7) {
		  placeholder = $("#colum_place_holder"+task.column);
		  var innerContent = renderInnerCardContent(task);
		  var top = getCardTopPosition(task.startTime);
		  var height = getCardHeight(task.duration);

		  var card = $('<div id="event_'+task.id+'"></div>')
			.attr({
			  style: 'top: ' + top + 'px;  height: ' + height + 'px',
			  title: task.title,
			  //title: toTimeString(task.startTime) + ' - ' + toTimeString(task.startTime + task.duration)
			});
			
			card.on('click', function (e) { settings.onClick && settings.onClick(e, task) });
			card.append(innerContent)
			.appendTo(placeholder);
			
			if (task.overlap) document.getElementById("event_" + task.id).style.backgroundColor="red";
	  }
  }
  
  function appendEmptyTask(task, placeholder) {
	  
	  placeholder = (typeof placeholder !== 'undefined') ?  placeholder : $("#colum_place_holder"+task.column);
	  var innerContent = renderEmptyCardContent(task);
      var top = getCardTopPosition(task.startTime);
      var dur = (settings.lineHeight + settings.borderWidth) * (task.duration) - 1;
	  var height = dur;
      var duration = makeDurationInStringFromExact(task.duration);
      var card = $('<span class="skeduler-task-placeholder-empty empty_event_column_'+task.column+'" id="empty_event_'+task.column+'">'+duration+'</span>')
        .attr({
          style: 'top: ' + top + 'px; line-height: ' + height + 'px',
		  title: 'ss',
        });
        //card.on('click', function (e) { settings.onClick && settings.onClick(e, task) });
        card.append(innerContent)
        .appendTo(placeholder);
  }
  
  function fillCalendarWithTasks(){
	for(var i=0; i < day0.length; i++) appendTask(day0[i]);
	for(var i=0; i < day1.length; i++) appendTask(day1[i]);
	for(var i=0; i < day2.length; i++) appendTask(day2[i]);
	for(var i=0; i < day3.length; i++) appendTask(day3[i]);
	for(var i=0; i < day4.length; i++) appendTask(day4[i]);
	for(var i=0; i < day5.length; i++) appendTask(day5[i]);
	for(var i=0; i < day6.length; i++) appendTask(day6[i]);
	for(var i=0; i < month_ar.length; i++) appendTask(month_ar[i]);
	draw_empty_areas_full();
  }
  
  function round(value, decimals) {
	return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
  }
  
  function makeDurationInString(duration){
	  var durationInString = "00:";
	  var hour = Math.floor(duration/60);
	  var hourNew = hour>9?hour:"0"+hour;
	  if (hour>0) durationInString = hourNew + ":";
	  var minute = duration%60;
	  if (minute<10) minute = "0" + minute;
	  durationInString += minute;
	  return durationInString;
  }
  
  function makeDurationInStringFromExact(duration){
	  var newduration = Math.round(duration * 60);
	  return makeDurationInString(newduration);
  }
  
  function makeEndTimeInString(endTime){
	  var exactHour = Math.floor(endTime) + calendar_startHour;
	  exactHour = exactHour % 24;
	  var exactMinute = endTime - Math.floor(endTime);
	  exactMinute = Math.round(exactMinute * 60);
	  var hourString = exactHour < 10 ? "0"+exactHour:exactHour;
	  var minuteString = exactMinute < 10 ? "0"+exactMinute:exactMinute;
	  return hourString + ":" + minuteString;
  }
  
  function addTask(task){
	  var targetArray = "day" + task.column;
	
	  var newHour = task.startTimeHour < calendar_startHour ? Number(task.startTimeHour) + 24 : task.startTimeHour;
	  newHour = newHour - calendar_startHour;
	  var newMinute = round((task.startTimeMinute / 60), 5);
	  task.startTime =  newHour + newMinute;
	  
	  var hourString = task.startTimeHour < 10 ? "0"+task.startTimeHour:task.startTimeHour;
	  var minuteString = task.startTimeMinute < 10 ? "0"+task.startTimeMinute:task.startTimeMinute;
	  
	  task.startTimeString =  hourString + ":" + minuteString;
	  task.durationString = makeDurationInString(task.duration);
	  
	  task.endTime = round(task.startTime, 5) + round((task.duration / 60), 5);
	  task.endTimeString = makeEndTimeInString(task.endTime);
	  
	  
	  if (task.startTime<0) { currentError = errorText_calendar_earlierTime; return false;}
	  if (task.endTime>24) { currentError = errorText_calendar_overlap; return false;}
	  
	  if (isNaN(task.startTime) || isNaN(task.duration) || isNaN(task.column)) { currentError = errorText_calendar_InvalidValue; return false;}
	  
	  
	  task.overlap = false;
	  task.id = taskCounter++;
	  task.column = (typeof task.column !== 'undefined') ?  task.column : 0;
	  if (task.column < 0) task.column = 0;
	  //if (task.type!='month') if (task.column > 6) task.column = 6;
	  if (task.upl==1){} else {
		  $.ajax({
				url: 'calendar_catalog_jquery_save.php',
				type: 'post',
				data: { data:JSON.stringify(task) },
				success: function(response) {
					task.realid = response;
				}
		  });
	  }
	  
	  if(task.realid>0){} else { currentError = 'task add error'; return false;}
	  //return;
	  
	  //var length_array = this[targetArray].length;
	  //var last_task = this[targetArray].
	  
	  if (task.column>6){
			month_ar.push(task);  
	  }
	  if(task.column<7){
		  
		  
		  for(var i=0; i< this[targetArray].length; i++){
			  if (this[targetArray][i].id == task.id) continue;
			  var top1 = this[targetArray][i].startTime;
			  var bottom1 = this[targetArray][i].endTime;
			  var top2 = task.startTime;
			  var bottom2 = task.endTime;
			  
			  if ((top1 >= top2 && top1 < bottom2) || (top2 >= top1 && top2 < bottom1) || (bottom1 > top2 && bottom1 <= bottom2) || (bottom2 > top1 && bottom2 <= bottom1)){
				  task.overlap = true;
				  break;
			  } 
		  }
		  
		  for(var placeInArray=0; placeInArray< this[targetArray].length; placeInArray++){
			  if (this[targetArray][placeInArray].id == task.id) continue;
			  if (this[targetArray][placeInArray].startTime > task.startTime) break;
		  }
		  
		  if (placeInArray==0) this[targetArray].unshift(task);
			else if (placeInArray < this[targetArray].length) this[targetArray].splice( placeInArray, 0, task);
				else this[targetArray].push(task);
		  
		  /////////
		  //         CREATING EMPTY SPACES
		  /////////
		  var targetEmptyArray = "emp" + task.column;
		  if (task.batch){} else {
			  task.batch = false;
			  draw_empty_areas(this[targetArray], this[targetEmptyArray], task.column);
		  }
	  } 
	  
	  return true;
  }
  
  ////*****
  ///  WRITE EMPTY SPACES
  ///******
  function draw_empty_areas_full(){
	  for(i=0; i<7; i++){
		  var targetArray = "day"+i;
		  var targetEmptyArray = "emp"+i;
		  if (this[targetArray].length > 0) draw_empty_areas(this[targetArray], this[targetEmptyArray], i);  
	  }
  }
  
  function draw_empty_areas(tasks, empties, column){

	  empties = [];
	  
	  if (tasks.length == 0) {
		  var empty_task = { startTime: 0, duration: 24, column: column};
		  appendEmptyTask(empty_task);
		  return;
	  }
	  
	  $( ".empty_event_column_0" +column ).remove();
	  if (tasks.length == 0) return;
	  if (tasks[0].startTime > 0){
		var empty_task = { startTime: 0, duration: tasks[0].startTime, column: column};
		empties.push(empty_task);
	  }
	  
	  
	  for(var placeInArray=0; placeInArray< tasks.length-1; placeInArray++){
		  var this_duration = tasks[placeInArray+1].startTime - tasks[placeInArray].endTime;
		  if (this_duration>0){
			  var empty_task = { startTime: tasks[placeInArray].endTime, duration: this_duration, column: column};
			  empties.push(empty_task);
		  }
	  }
	 
	var placeInArray = tasks.length-1;

	var endTime = tasks[placeInArray].endTime;
	var last_duration = 24 - endTime;
	if (last_duration>0){
	  var empty_task = { startTime: tasks[placeInArray].endTime, duration: last_duration, column: column};
	  empties.push(empty_task);
	}
	for(var j=0; j < empties.length; j++) appendEmptyTask(empties[j]);
  }
  
  function divcollision($div1, $div2) {
      var y1 = $div1.offset().top;
      var h1 = $div1.outerHeight(true);
      var b1 = y1 + h1;

      var y2 = $div2.offset().top;
      var h2 = $div2.outerHeight(true);
      var b2 = y2 + h2;

      if (b1 < y2 || y1 > b2) return false;
      return true;
    }
	
function openModalwithID(id, day){
	var targetArray = "day" + day;
	for(var i=0; i<this[targetArray].length; i++){
		 if (this[targetArray][i].id == id){
			 openModal(this[targetArray][i]);
			 return;
		 }
	}
}

function openModal(task) {
	  if (task.e) {
		  $("#myModal").modal();
		  $("#calendar-modal-header").text(task.title);
		  $("#calendar-modal-starthour").val(task.startTimeHour);
		  $("#calendar-modal-startminute").val(task.startTimeMinute);
		  
		  if (!task.durationHour) task.durationHour = Math.floor(task.duration/60);
		  if (!task.durationMinute) task.durationMinute = task.duration - (task.durationHour*60);
		  
		  $("#calendar-modal-durationMinute").val(task.durationMinute);
		  $("#calendar-modal-durationHour").val(task.durationHour);
		  $("#calendar-modal-id").val(task.id);
		  $("#calendar-modal-day-id").val(task.column);
	  }
 }
 
function modal_save_task(){
	var hour = Number($("#calendar-modal-starthour").val());
	var minute = Number($("#calendar-modal-startminute").val());
	var durHour = Number($("#calendar-modal-durationHour").val());
	var durMinute = Number($("#calendar-modal-durationMinute").val());
	var duration = durHour * 60 + durMinute;
	var durationString = makeDurationInString(duration);
	var id = Number($("#calendar-modal-id").val());
	var day = Number($("#calendar-modal-day-id").val());
	var targetArray = "day" + day;
	var targetEmptyArray = "emp" + day;
	
	for(var i=0; i<this[targetArray].length; i++){
		 if (this[targetArray][i].id == id){
			 var arr = this[targetArray][i];
			 
			 arr.startTimeHour = hour;
			 arr.startTimeMinute = minute;
			 arr.duration = duration;
			 arr.durationHour = durHour;
			 arr.durationMinute = durMinute;
			 arr.durationString = durationString;
			 
			 $.ajax({
				url: 'calendar_catalog_jquery_update.php',
				type: 'post',
				data: { data:JSON.stringify(arr) },
				success: function(response) {
					//console.log(response);
				}
			});
			 
			 document.getElementById("event_"+id).remove();
			 this[targetArray].splice(i,1);
			 if (addTask(arr)) {
				appendTask(arr);
				
			 }
			 else alert(currentError); 
			 
			 break;
		 }
	 }
	update_tab(this_tab); 
	$('#myModal').modal('toggle');	
}

function update_db(task){
	$.ajax({
				url: 'calendar_catalog_jquery_update.php',
				type: 'post',
				data: { data:JSON.stringify(task) },
				success: function(response) {
					//console.log(response);
				}
	});
}

function modal_delete_task(){
	var id = $("#calendar-modal-id").val();
	var day = $("#calendar-modal-day-id").val();
	delete_task(id, day);
	
	$('#myModal').modal('toggle');		 
}
function delete_task_from_page(id, day, tabID){
	delete_task(id, day);
	update_tab(tabID);
}

function delete_month_task_from_page(id, day){
	var targetArray = "day" + day;
	 for(var i=0; i<month_ar.length; i++){
		 if (month_ar[i].id == id){
			 document.getElementById("event_month_"+id).remove();
			 month_ar.splice(i,1);
			 break;
		 }
	 }
}

function delete_task(id, day){
	var targetArray = "day" + day;
	var targetEmptyArray = "emp" + day;
	 for(var i=0; i<this[targetArray].length; i++){
		 if (this["day"+day][i].id == id){
			 
			 $.ajax({
				url: 'calendar_catalog_jquery_delete.php',
				type: 'post',
				data: { data:JSON.stringify(this["day"+day][i]) },
				success: function(response) {
					//console.log(response);
				}
			});
			 
			 if (this["day"+day][i].type == "month") delete_month_task_from_page(id, day);
			 
			 document.getElementById("event_"+id).remove();
			 this[targetArray].splice(i,1);
			 break;
		 }
	 }
	 draw_empty_areas(this[targetArray], this[targetEmptyArray], day);
}

function update_tab(tabID){
	for(var j=0; j<4; j++)
		for(var i=0; i<7; i++) {
			$('#catalog_chk_'+j+"_"+i).attr('checked', false);
			$('#catalog_chk_'+j+"_"+i).attr('disabled', true);
	}
	
	if (tabID==0){
		for(var i=0; i<7; i++) {
			$('#catalog_chk_0_'+i).attr('disabled', false);
		}
	}
	
	if (tabID==8){
		for(var j=0; j<4; j++)
			for(var i=0; i<7; i++) {
				$('#catalog_chk_'+j+"_"+i).attr('checked', false);
				$('#catalog_chk_'+j+"_"+i).attr('disabled', false);
			}
	}
	
	
	
	if (tabID > 0 && tabID < 8) {
		day = tabID-1;
		
		//$('#catalog_chk_0_'+day).attr('checked', true);
		//$('#catalog_chk_0_'+day).attr('disabled', true);
		
		var targetArray = 'day' + day;
		var fulltext = '';
		
			for(var i=0; i<root[targetArray].length; i++){
				var task = root[targetArray][i];
				var timeline = '';
				timeline += '<div class="entry">';
				timeline += '<div class="title">';
				timeline += '<h3>'+root[targetArray][i].startTimeString+' - '+root[targetArray][i].endTimeString+'</h3>';
				timeline += '<p></p>';
				timeline += '</div>';
				timeline += '<div class="body">';
				timeline += '<p>'+root[targetArray][i].title+'</p>';
				timeline += '<ul><li>'+makeDurationInString(root[targetArray][i].duration)+'</li></ul>';
				timeline += '<a href="#" onclick="delete_task_from_page('+task.id+','+task.column+', '+tabID+');return false;">Удалить</a> <a href="#" onclick="openModalwithID('+task.id+','+task.column+');return false;">Редактировать</a>';
				timeline += '</div>';
				timeline += '</div>';
				
				fulltext += timeline +' ';
				
				if (i < (root[targetArray].length-1)){
					var this_duration = root[targetArray][i+1].startTime - root[targetArray][i].endTime;
					if (this_duration>0){
						timeline = '';
						timeline += '<div class="entry">';
						timeline += '<div class="title">';
						timeline += '<h3>'+root[targetArray][i].endTimeString+' - '+root[targetArray][i+1].startTimeString+'</h3>';
						timeline += '<p></p>';
						timeline += '</div>';
						timeline += '<div class="body">';
						timeline += '<p style="color:green">Доступное время</p>';
						timeline += '<ul><li style="color:green">'+makeDurationInStringFromExact(this_duration)+'</li></ul>';
						
						timeline += '</div>';
						timeline += '</div>';
						
						fulltext += timeline +' ';
					}
					if (this_duration < 0){
						timeline = '';
						timeline += '<div class="entry">';
						timeline += '<div class="title">';
						timeline += '<h3>'+root[targetArray][i+1].startTimeString+' - '+root[targetArray][i].endTimeString+'</h3>';
						timeline += '<p></p>';
						timeline += '</div>';
						timeline += '<div class="body">';
						timeline += '<p style="color:red">Превышение хронометража</p>';
						timeline += '<ul><li style="color:red">'+makeDurationInStringFromExact(-1*this_duration)+'</li></ul>';
						
						timeline += '</div>';
						timeline += '</div>';
						
						fulltext += timeline +' ';
					}
				}
			}
			$('#timeline'+day).html(fulltext);
	}
}	
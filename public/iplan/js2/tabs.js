$( function() {
    $( "#tabs" ).tabs();
	
	
	$("#clearThisCalendar").click(function() {
		for(var j=0; j<4; j++)
		for(var i=0; i<7; i++) {
			$('#catalog_chk_'+j+"_"+i).attr('checked', false);
		}
			
		$("#durationHour").val("0");
		$("#durationHour").val("0");
		$("#startHour").val("0");
		$("#startMinute").val("0");
	});
	
	$("#addThisCalendar").click(function() {
		var durationHour= $("#durationHour").val();
		var durationMinute= $("#durationMinute").val();
		var duration = parseInt(durationHour) * 60 + parseInt(durationMinute);
		if (duration==0) return false;
		if (this_tab==0){
			for(var i=0; i<7;i++){
				if($("#catalog_chk_0_"+i).is(':checked')) {
					var task = {
						calendar_start_date: $("#calendar_start_date").val(),
						father_id: $("#f_id").val(),
						f_name: $("#f_name").val(),
						channel: $("#channel").val(),
						seria: $("#seria").val(),
						startTimeHour: $("#startHour").val(), 
						startTimeMinute: $("#startMinute").val(),	
						duration: duration, 
						column: i, 
						e:1,
						title: title,
						show_type: show_type
					};
					if (addTask(task)) appendTask(task);
					else alert(0);
				}
			}
		}
		else if (this_tab > 0 && this_tab < 8) {
			day = this_tab-1;
			var task = { 
						calendar_start_date: $("#calendar_start_date").val(),
						father_id: $("#f_id").val(),
						f_name: $("#f_name").val(),
						channel: $("#channel").val(),
						seria: $("#seria").val(),
						startTimeHour: $("#startHour").val(), 
						startTimeMinute: $("#startMinute").val(),	
						duration: duration, 
						column: day,
						e:1,						
						title: title,
						show_type: show_type
					};
			if (addTask(task)) appendTask(task);
			else alert(currentError);
			update_tab(1);
		} else if (this_tab==8){
			for(var j=0; j<4;j++){
				for(var i=0; i<7;i++){
					if($("#catalog_chk_"+j+"_"+i).is(':checked')) {
						var col = (j*7) + (i);
						
						var task = {
							calendar_start_date: $("#calendar_start_date").val(),
							father_id: $("#f_id").val(),
							f_name: $("#f_name").val(),
							channel: $("#channel").val(),
							seria: $("#seria").val(),
							startTimeHour: $("#startHour").val(), 
							startTimeMinute: $("#startMinute").val(),	
							duration: duration, 
							column: col,
							e:1,
							type:'month',
							title: title,
							show_type: show_type
						};
						if (addTask(task)) appendTask(task);
						else alert(2);
					}
				}
			}
		}
		
		for(var j=0; j<4; j++)
		for(var i=0; i<7; i++) {
			$('#catalog_chk_'+j+"_"+i).attr('checked', false);
	}
		
		
	});
	$("#saveCalendar").click(function() {
		
		var myJsonString = "";
		if (day0.length>0) myJsonString += JSON.stringify(day0);
		
		if (day1.length>0) myJsonString += JSON.stringify(day1);

		if (day2.length>0) myJsonString += JSON.stringify(day2);

		if (day3.length>0)  myJsonString += JSON.stringify(day3);

		if (day4.length>0)  myJsonString += JSON.stringify(day4);

		if (day5.length>0)  myJsonString += JSON.stringify(day5);

		if (day6.length>0)  myJsonString += JSON.stringify(day6);

		//alert(myJsonString);
		$.ajax({
			url: 'calendar_catalog_save.php',
			type: 'post',
			data: { data:JSON.stringify(day3) },
			success: function(response) {
				console.log(response);
			}
		});
		
	});

	
	$( "#tabs" ).on( "tabsactivate", function( event, ui ) {
		this_tab = ui.newTab.index();
		update_tab(this_tab);
	} );
	
	$('#daily_calendar_open_modal').click(function(){ MyFunction(); return false; });
});
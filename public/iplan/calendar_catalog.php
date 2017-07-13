<script>
var catalog_type="";
var f_id = 0;
var f_name = "";
var duration = 0;
var duration_string =  "";
var title = "";
var show_type = "";
var calendar_date_start = <?php echo date('Y-m-d', strtotime($dt));?>;

$( function() {
	$( "#leftsets" ).css({"display": "none"});
	$( "#serial_inp" ).css({"display": "none"});
	$.ajax({
			url: 'calendar_catalog_jquery.php',
			type: 'post',
			data: { "w": 0},
			success: function(response) {
				$( "#selector_div" ).html(response);
			}
		});
	
	$( "#main" ).change(function() {
		$( "#serial_inp" ).css({"display": "none"});
		$( "#leftsets" ).css({"display": "none"});
		var w = $( "#main" ).val();
		catalog_type =w;
		if (w==1){
			f_name = "films";
			$( "#film_select" ).css({"display": "block"});
			$( "#reserv" ).css({"display": "none"});
		}else{
			f_name = "broadcasts";
			$( "#film_select" ).css({"display": "none"});
			$( "#reserv" ).css({"display": "block"});
		}
		
		$.ajax({
			url: 'calendar_catalog_jquery.php',
			type: 'post',
			data: { "w": w},
			success: function(response) {
				$( "#selector_div" ).html(response);
			}
		});
		
	});
	
	$( "#filsm_select" ).change(function() {
		
		$( "#leftsets" ).css({"display": "none"});
		var type = $( "#film_select" ).val();
		for(var i=0; i<3; i++){
			if(i==type) $('.film_type_'+type).css({"display": "block"});
			else $('.film_type_'+type).css({"display": "none"});
		}
	});
	
	
	
});

function select_event2(event_id, show_type2, title2){
		$('#event_row_'+event_id).css({"background": "#0c55ff", "color":"white"});
		$('#event_row_'+event_id).siblings().css({"background": "white", "color":"black"});
		$( "#leftsets" ).css({"display": "block"});
		
		f_id = event_id;
		show_type = show_type2;
		title = title2;
		//$('#event_row_'+event_id).css({"background": "blue"});
		//$('#event_row_'+event_id).siblings().css({"background": "white"});
		//$('#event_row_'+event_id).addClass('active');
		//$('#event_row_'+event_id).siblings().removeClass('active');
	}
	
function select_event(event_id){
	$("#addThisCalendar").prop('disabled', false);
	$('#event_row_'+event_id).css({"background": "#0c55ff", "color":"white"});
	$('#event_row_'+event_id).siblings().css({"background": "white", "color":"black"});
	$( "#leftsets" ).css({"display": "block"});
	title = $('#rowtitle'+event_id).html(); 
	if(catalog_type==0){
		$('#f_name').val('episodes');
		show_type = $('#rowtitle'+event_id).attr('class');	
	} else {
		show_type ="";
		$('#f_name').val('films');
	}
			
	f_id = event_id;
	$('#f_id').val(event_id);

	//$('#event_row_'+event_id).css({"background": "#0c55ff"});
	//$('#event_row_'+event_id).siblings().css({"background": "white"});
	//$('#event_row_'+event_id).addClass('active');
	//$('#event_row_'+event_id).siblings().removeClass('active');
	}
function showhidefilms(){
		$( "#leftsets" ).css({"display": "none"});
		$( "#serial_inp" ).css({"display": "none"});
		type = document.getElementById("film_select").value;
		
		for(var i=0; i<3; i++){
			if(i==type) $('.film_type_'+i).css({"display": "block"});
			else $('.film_type_'+i).css({"display": "none"});
		}
		if (type==2) $( "#serial_inp" ).css({"display": "block"});
	}
	
function showbroadcasts(){
		$( "#leftsets" ).css({"display": "none"});
		$( "#serial_inp" ).css({"display": "none"});
		var i = document.getElementById("reserv").value;
		var x = i==1?0:1;
		$('.film_type_'+i).css({"display": "block"});
		$('.film_type_'+x).css({"display": "none"});
	}

function select_event_broadcast(event_id, par_show_type){
	$( "#serial_inp" ).css({"display": "none"});
	$("#addThisCalendar").prop('disabled', false);
	$('#event_row_'+event_id).css({"background": "#0c55ff", "color":"white"});
	$('#event_row_'+event_id).siblings().css({"background": "white", "color":"black"});
	$( "#leftsets" ).css({"display": "block"});
	
	title = $('#rowtitle'+event_id).html();

	$('#f_name').val('episodes');
	show_type = par_show_type;	
			
	f_id = event_id;
	$('#f_id').val(event_id);

	//$('#event_row_'+event_id).css({"background": "#0c55ff"});
	//$('#event_row_'+event_id).siblings().css({"background": "white"});
	//$('#event_row_'+event_id).addClass('active');
	//$('#event_row_'+event_id).siblings().removeClass('active');
	}
</script>

<div class="form-group">
	<select class="form-control" id="main">
		<option value="0">Передачи</option>
		<option value="1">Фильмотека</option>
	</select>
</div>
<div class="form-group">
	<select class="form-control" id="reserv"  onchange="showbroadcasts()" >
		<option value="1">Из резервов</option>
		<option value="0">Эфиры</option>
	</select>
</div>
<div class="form-group">
	<select class="form-control" id="film_select" onchange="showhidefilms()" style="display:none">
		<option value="0">Фильмы</option>
		<option value="1">Мультфильмы</option>
		<option value="2">Сериалы</option>
	</select>
</div>

<div id="selector_div"></div>

<div id="leftsets">
	<input type="hidden" id="title" placeholder="title">
	<div class="form-group">
		<label>Время выхода: </label>
		<div class="row">
			<div class="col-sm-6">
				<select class="form-control" id="startHour">
					<?php for($i=6; $i<25; $i++){ ?>
					<option value="<?php echo $i;?>"><?php echo $i<10? "0".$i:$i;?></option>
					<?php } ?>
					<?php for($i=0; $i<6; $i++){ ?>
					<option value="<?php echo $i;?>"><?php echo $i<10? "0".$i:$i;?></option>
					<?php } ?>
				</select>
			</div>
			<div class="col-sm-6">
				<select class="form-control" id="startMinute">
					<?php for($i=0; $i<59; $i++){ ?>
					<option value="<?php echo $i;?>"><?php echo $i<10? "0".$i:$i;?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		
	</div>
	<div class="form-group">
		<label>Хронометраж: </label>
		<div class="row">
			<div class="col-sm-6">
				<select class="form-control" id="durationHour">
					<?php for($i=0; $i<4; $i++){ ?>
					<option value="<?php echo $i;?>"><?php echo $i<10? "0".$i:$i;?></option>
					<?php } ?>
				</select>
			</div>
			<div class="col-sm-6">
				<select class="form-control" id="durationMinute">
					<?php for($i=0; $i<59; $i++){ ?>
					<option value="<?php echo $i;?>"><?php echo $i<10? "0".$i:$i;?></option>
					<?php } ?>
				</select>
			</div>
		</div>
	</div>
	<div class="form-group" id="serial_inp">
		<label>Серия:</label>
		<input class="form-control" type="input" id="seria" placeholder="серия #">
	</div>
</div>

<input type="hidden" id="duration" placeholder="duration">
<input type="hidden" id="f_id">
<input type="hidden" id="f_name">
<input type="hidden" id="channel" value="<?php echo $ch;?>">
<input type="hidden" id="calendar_start_date" value="<?php echo date('Y-m-d', $dt);?>">

<div>
	<table>
	<tr><td></td><td>П</td><td>В</td><td>С</td><td>Ч</td><td>П</td><td>С</td><td>В</td></tr>
	<tr><td>I</td>
		<td><input type="checkbox" id="catalog_chk_0_0"></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_0_1"></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_0_2"></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_0_3"></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_0_4"></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_0_5"></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_0_6"></td>
	</tr>
	<tr><td>II</td><td><input type="checkbox" id="catalog_chk_1_0" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_1_1" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_1_2" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_1_3" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_1_4" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_1_5" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_1_6" disabled></td>
	</tr>
	<tr><td>III</td><td><input type="checkbox" id="catalog_chk_2_0" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_2_1" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_2_2" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_2_3" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_2_4" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_2_5" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_2_6" disabled></td>
	</tr>
	<tr><td>IV</td><td><input type="checkbox" id="catalog_chk_3_0" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_3_1" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_3_2" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_3_3" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_3_4" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_3_5" disabled></td>
		<td><input class="week-checkbox" type="checkbox" id="catalog_chk_3_6" disabled></td>
	</tr>
	</table>

</div>


<div class="form-buttons-w">
 	<div class="el-buttons-list full-width">
 		<input class="btn btn-primary" type="button" id="addThisCalendar" value="Разместить">
 		<input class="btn btn-default" type="button" id="clearThisCalendar" value="Очистить">
 	</div>          
</div>



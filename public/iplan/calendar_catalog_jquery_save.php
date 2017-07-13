<?php include_once 'usercontrol.php'; 
$data = json_decode($_POST['data']);
	$start_date = sanitize($data->calendar_start_date);
	$father_id = sanitize($data->father_id);
	$father_db = sanitize($data->f_name);
	$channel = sanitize($data->channel);
	$seria = sanitize($data->seria);
	$startTimeHour = sanitize($data->startTimeHour);
	$startTimeMinute = sanitize($data->startTimeMinute);
	$duration = sanitize($data->duration);
	$duratation_string = sanitize($data->durationString);
	$title = sanitize($data->title);
	$column = sanitize($data->column);
	$show_type = sanitize($data->show_type);
	$auth_user_id = $_SESSION["user_id"];
	$dt_timestamp = strtotime($start_date);
	if ($startTimeHour<6) $column++;
	$dt = date("Y-m-d H:i", strtotime("+ ".$column." day ".$startTimeHour." hours ".$startTimeMinute." minutes", $dt_timestamp));
	
	$get_same = $db->select("event", "dt = '".$dt."' AND father_id = '".$father_id."'");
	if (count($get_same)>0) {echo '0'; die();}
	
	if ($father_db == 'episodes'){
		$get_old = $db->select("event", "approve='1' AND father_db = 'episodes' AND father_id = '".$father_id."'");
		if (count($get_old)>0) {$title .= ' повтор от '.$get_old[0]['dt'];}
	}
	
	
	
	$ins = array("user"=>$auth_user_id, "dt"=>$dt, "title"=>$title, "duration"=>$duration, "duration_string"=>$duratation_string, "seria"=>$seria, "channel"=>$channel, "show_type"=>$show_type, "father_db"=>$father_db, "father_id"=>$father_id);
	
	$return_id = $db->insert("event", $ins);
	
	echo $return_id;
	
?>
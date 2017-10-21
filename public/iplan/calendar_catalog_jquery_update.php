<?php 
$document_db = "calendar_event";
$document_type_only = 1;
$document_read = $document_write = $document_execute = $document_delete = 0;
include_once 'usercontrol.php'; 
if (!$document_execute) {echo "0"; die();}

$data = json_decode($_POST['data']);
	
	$start_date = sanitize($data->calendar_start_date);
	
	$startTimeHour = sanitize($data->startTimeHour);
	$startTimeMinute = sanitize($data->startTimeMinute);
	$duration = sanitize($data->duration);
	$duratation_string = sanitize($data->durationString);
	
	$column = sanitize($data->column);
	
	$dt_timestamp = strtotime($start_date);
	
	if ($startTimeHour<6) $column++;
	
	$dt = date("Y-m-d H:i", strtotime("+ ".$column." day ".$startTimeHour." hours ".$startTimeMinute." minutes", $dt_timestamp));
	
	$id = sanitize($data->realid);
	
	$ins = array("dt"=>$dt, "duration"=>$duration, "duration_string"=>$duratation_string);
	$db->update("event", $ins, "id = '".$id."'");

?>
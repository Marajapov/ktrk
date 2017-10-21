<?php include_once 'usercontrol.php'; 
	$data = isset($_POST['data']) ? json_decode($_POST['data']) : Null;
	//print_r($data); die();
	$id = isset($data->event_id) ? sanitize($data->event_id) : '';
	$action = isset($data->action) ? sanitize($data->action) : '';
	if ($id>0) {} else { if ($action!='add') {echo 0; die();}}
	
	if ($action=='delete') {
		if ($id>0) $db->delete('place_event', "id='".$id."'");
	}
	
	$date_from = isset($data->start) ? sanitize($data->start) : '';
	$date_to = isset($data->end) ? sanitize($data->end) : '';
	$reason = isset($data->reason) ? sanitize($data->reason) : '';
	$note = isset($data->note) ? sanitize($data->note) : '';
	$place = isset($data->event_place) ? sanitize($data->event_place) : '';
	$broadcast = isset($data->broadcast) ? sanitize($data->broadcast) : '';
	
	$ins = array("date_from"=>$date_from, "date_to"=>$date_to, "reason"=>$reason, "note"=>$note, "place"=>$place, "broadcast"=>$broadcast);
	
	if ($action=='edit') {
		if ($id>0) $db->update('place_event', $ins, "id='".$id."'");
		echo $id;
		die();
	}
	if ($action=='add') {
		$return_id = $db->insert('place_event', $ins);
		echo $return_id;
		die();
	}
	
?>
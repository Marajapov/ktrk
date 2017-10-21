<?php 
$document_db = "calendar_event";
$document_type_only = 1;
$document_read = $document_write = $document_execute = $document_delete = 0;
include_once 'usercontrol.php'; 
if (!$document_delete) {echo "0"; die();}

$data = json_decode($_POST['data']);
	
	$id = sanitize($data->realid);
	$db->delete("event", "id = '".$id."'");
	echo '1';
?>
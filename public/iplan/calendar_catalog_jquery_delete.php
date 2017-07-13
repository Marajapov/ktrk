<?php include_once 'usercontrol.php'; ?>
<?php
$data = json_decode($_POST['data']);
	
	$id = sanitize($data->realid);
	$db->delete("event", "id = '".$id."'");
	echo '1';
?>
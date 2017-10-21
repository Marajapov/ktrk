<?php include_once 'usercontrol.php'; ?>
<?php
$data = json_decode($_POST['data']);
foreach($data as $d){ 
	echo $d->title."<br/>";
	//print_r($d);
}

?>
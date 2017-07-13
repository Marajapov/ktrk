<?php include_once 'usercontrol.php'; ?>
<?
	 if (isset($_POST['brodcast_id'])) {
		 
		 $user = $_SESSION["user_id"];
		 $father_db = 'broadcasts';
		 $father_id = (int)getpost('brodcast_id');
		 
		 $dt = getpost('dt');
		 $tm = getpost('tm');
		 $channel = getpost('channel');
		 
		 $date_sum = $dt . " " . $tm;
		 
		 $date_full = date("Y/m/d H:i", strtotime($date_sum));
		 
		 $title = getpost('title');
		 $show_type = getpost('show_type');
		 
		 $duration_string = getpost('duration_string');
		 $duration = (int)getpost('duration');

		 $ins = array("user"=>$user, "father_db"=>$father_db, "dt"=>$date_full, "father_id"=>$father_id, "channel"=>$channel, "title"=>$title, "show_type"=>$show_type, "duration_string"=>$duration_string, "duration"=>$duration);
		 $db->insert("event", $ins);
		 echo json_encode($ins);
		
		 
    }
?>
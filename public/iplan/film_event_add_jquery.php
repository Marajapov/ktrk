<?php include_once 'usercontrol.php'; ?>
<?
	 if (isset($_POST['film_id'])) {
		 
		 $user = $_SESSION["user_id"];
		 $father_db = 'films';
		 $father_id = (int)getpost('film_id');
		 
		 $seria = getpost('seria');
		 $dt = getpost('dt');
		 $tm = getpost('tm');
		 $channel = getpost('channel');
		 
		 $date_sum = $dt . " " . $tm;
		 
		 $date_full = date("Y/m/d H:i", strtotime($date_sum));
		 $compare_dt = strtotime($dt);
		 $start = strtotime('next monday'); // or your date as well
		 $end = strtotime('next monday + 27 days');

		 if ($end < $compare_dt || $start > $compare_dt){
			 echo "Ошибка: Минимум дата: ".date("d.m.Y", $start)." Максимум дата:".date("d.m.Y", $end);
			 die();
		 }
		 
		 $title = getpost('title');
		 $duration_string = getpost('duration_string');
		 $duration = (int)getpost('duration');
		 
		 if ($father_id==0 || $title == "" || $duration==0) {
			 echo "Ошибка";
			 die();
		 }
		
		 
		 

		 $ins = array("user"=>$user, "father_db"=>$father_db, "dt"=>$date_full, "father_id"=>$father_id, "channel"=>$channel, "title"=>$title, "seria"=>$seria, "duration_string"=>$duration_string, "duration"=>$duration);
		 if ($db->insert("event", $ins)){
			 echo "Успешно!";
		 }
		 else echo "Ошибка!";
		 
    }
?>
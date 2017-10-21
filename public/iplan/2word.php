<?php include_once 'usercontrol.php'; 

$ch=0;
$dt = 0;
if (isset($_GET['dt'])) $dt = (int)getget('dt');
if (isset($_GET['ch'])) $ch = getget('ch');

if ($ch * $dt == 0) die();

$auth_user_id = $_SESSION["user_id"]; $auth_user = $db->select_one("users", "id='".$auth_user_id."'");
if ($auth_user['status'] < 5 ) {
	$ch_ar = explode( ",", $auth_user['channels']);
	
	$found = false;
	foreach($ch_ar as $c){
		if ($c == $ch){
			$found = true; break;
		}
	}
	if (!$found) die("no access");
}

$channel = $db->select_one("channels", "id='".$ch."'");



$weekno = date("W", $dt);
$year_no = date("y", $dt);
$year = date("Y", $dt);

$dt_start = strtotime(" +6 hours", $dt);
$dt_end = strtotime(" +7 days + 6 hours", $dt);
$q = "select * from event where channel='".$ch."' AND dt >= '".date('Y-m-d H:i', $dt_start)."' AND dt < '".date('Y-m-d H:i', $dt_end)."' order by dt";

$event_list = $db->selectpuresql($q);

$filename = $channel['name']."-".$weekno."-".$year_no;

$week_list = array();


foreach($event_list as $row){
	$w = date("w", strtotime($row['dt']));
	$h = date("H", strtotime($row['dt']));
	
	if ($w==0) $w=7;
	if ($h<6) $w--;
	if ($w==0) $w=7;
	
	$week_list[$w][]= $row;
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<?php 


	for($i=1; $i<8; $i++) {
		//echo "<hr>";
		if (!isset($week_list[$i])) continue; if (count($week_list[$i]) == 0) continue;
		
		foreach($week_list[$i] as $event){
			$week_day = date("w", strtotime($event['dt']));
			//echo $event['title']. " ".  date("d.m.Y H:i", strtotime($event['dt']))." (".$week_days[$week_day].")<br/>"; 
		}	
	}
	
	
?>
</div>


<div class="col-md-3">
<?php 
for($i=1; $i<8; $i++) { if (!isset($week_list[$i])) continue; if (count($week_list[$i]) == 0) continue;
$week_day = date("w", strtotime($week_list[$i][0]['dt']));

echo date("d.m.Y", strtotime($week_list[$i][0]['dt']))." (".$week_days[$week_day].")"; 
?>

<ul class="list-group ticketView">
	<?php foreach($week_list[$i] as $event){ ?>
    <li class="list-group-item ticketView">
        <span class="badge pull-left"><?php echo date("H:i", strtotime($event['dt'])); ?></span> &nbsp;&nbsp;&nbsp;<?php echo $event['title']; ?>
    </li>
  	<?php } ?>
</ul>
<?php } ?>
</div>

</body>
</html>

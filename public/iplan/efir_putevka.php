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


//$dt = date("d m Y", $dt);
$weekno = date("W", $dt);
$year_no = date("y", $dt);
$year = date("Y", $dt);

$dt_start = strtotime(" +6 hours", $dt);
$dt_end = strtotime(" +28 days + 6 hours", $dt);
$q = "select * from event where channel='".$ch."' AND dt >= '".date('Y-m-d H:i', $dt_start)."' AND dt < '".date('Y-m-d H:i', $dt_end)."'";

$event_list = $db->selectpuresql($q);

$filename = "Эфирная путевка - " . $channel['name']."-".$weekno."-".$year_no;
$file_ending = "xls";
//header info for browser
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0"); 

$week_list = array();


foreach($event_list as $row){
	$w = date("w", strtotime($row['dt']));
	$h = date("H", strtotime($row['dt']));
	
	if ($w==0) $w=7;
	if ($h<6) $w--;
	if ($w==0) $w=7;
	
	$week_list[$w][]= $row;
}

echo "\n";
for($i=1; $i<8; $i++) { if (!isset($week_list[$i])) continue; if (count($week_list[$i]) == 0) continue;

$week_day = date("w", strtotime($week_list[$i][0]['dt']));
echo date("d.m.Y", strtotime($week_list[$i][0]['dt']))." (".$week_days[$week_day].")\n"; 
foreach($week_list[$i] as $event)  echo date("H:i", strtotime($event['dt']))."\t" . $event['title']."\t" . $event['show_type']."\t" . $event['duration']."\t" . $event['serverpath']."\n";  ?>

<?php } ?>
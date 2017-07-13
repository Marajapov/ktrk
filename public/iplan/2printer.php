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
<html>
<head>
<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}

    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
    }
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }


</style>
</head>
<body>
<div class="book">
    <div class="page">
	
<table class="CSSTableGenerator" style="width:100%">
<tr>
<td style="font-weight:bold;" colspan="2"><?php echo $filename;?></td>
</tr>

<?php
for($i=1; $i<8; $i++) { if (!isset($week_list[$i])) continue; if (count($week_list[$i]) == 0) continue;

$week_day = date("w", strtotime($week_list[$i][0]['dt']));

?>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2"><?php echo date("d.m.Y", strtotime($week_list[$i][0]['dt']))." (".$week_days[$week_day].")";  ?> </td></tr>  
<?php
foreach($week_list[$i] as $event){ ?>
<tr>
<td><?php echo date("H:i", strtotime($event['dt'])); ?> </td>
<td align="center"><?php echo $event['title']; ?></td>
</tr> 
<?php }} ?>
</table>
</div></div>
<script>
window.print();
</script>
</body>
</html>
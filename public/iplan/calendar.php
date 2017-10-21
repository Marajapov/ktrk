<?php 
$document_db = "calendar_event";
$document_type_count=3;
$document_read = $document_write = $document_execute = $document_delete = 0;
$document_type2_read = $document_type2_write = $document_type2_execute = $document_type2_delete = 0;
$document_type3_read = $document_type3_write = $document_type3_execute = $document_type3_delete = 0;
include_once 'usercontrol.php'; 
if (!$document_read) {echo "У вас нет разрешения на доступ к этой странице. Обратитесь к администратору."; die();}
?>
<?php
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


$left = 0;
$today = date("N");
$left = 8 - $today;
$start = strtotime("+".$left." day");
 
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'content_header.php'; ?>
</head>
<body>
  	<div class="all-wrapper">
     	<div class="layout-w">
         <div class="menu-w menu-activated-on-click">
            	<?php include 'content_left.php'; ?>
         </div>
         <div class="content-w">			
				<?php include 'content_top_calendar.php'; ?>				
         	<div class="content-i">			   
            	<div class="content-box">
					 	<div class="row">
					 		<div class="col-sm-12">
					 			<div class="element-wrapper">
					 				<h6 class="element-header"><?php echo $channel['name']."-".$weekno."-".$year_no; ?></h6>
					 				<div>
					 					
					 					<div id="tabs">
											<ul>
												<li><a href="#tabs-1">Неделя</a></li>
												<li><a href="#tabs-2">Понедельник</a></li>
												<li><a href="#tabs-3">Вторник</a></li>
												<li><a href="#tabs-4">Среда</a></li>
												<li><a href="#tabs-5">Четверг</a></li>
												<li><a href="#tabs-6">Пятница</a></li>
												<li><a href="#tabs-7">Суббота</a></li>
												<li><a href="#tabs-8">Воскресенье</a></li>
												<?php if ($document_type2_read) { ?>
												<li><a href="#tabs-9">Перспективный план</a></li>
												<?php } ?>
											</ul>
											  
											<div id="tabs-1">
												<div id="skeduler-container"></div>
											</div>
											<div id="tabs-2"><div class="timeline" id="timeline0" name="п"></div></div>
											<div id="tabs-3"><div class="timeline" id="timeline1" name="в"></div></div>
											<div id="tabs-4"><div class="timeline" id="timeline2" name="с"></div></div>
											<div id="tabs-5"><div class="timeline" id="timeline3" name="ч"></div></div>
											<div id="tabs-6"><div class="timeline" id="timeline4" name="п"></div></div>
											<div id="tabs-7"><div class="timeline" id="timeline5" name="с"></div></div>
											<div id="tabs-8"><div class="timeline" id="timeline6" name="в"></div></div>
											<?php if ($document_type2_read) { ?>
											<div id="tabs-9"><?php include 'calendar_monthly.php'; ?></div>
											<?php } ?>
										</div>	

										<?php include 'calendar_modal.php'; ?> 
					 				</div>
					 			</div>
					 		</div>
					 	</div>                 
         		</div>
               
			   <?php if ($document_write) { ?>
			   <div class="content-panel calendar-catalog">
                  	<div class="element-wrapper">
                     	<?php include 'calendar_catalog.php'; ?>
                    </div>
               </div>
			   <?php } ?>
         	</div>
      	</div>
   	</div>
	</div>

	<?php include 'include.js.php' ?>
	<script src="js/script.js"></script> 
	<script src="js/tabs.js"></script>

	<script>
		$( function() {
			
			
			<?php
				//$ps = Null;
				$upperolddt = $dt;
				$upperdt = date('Y-m-d', $dt);
				foreach($event_list as $p) {
					$dt = date_parse($p['dt']);
					
					$h = date("H", strtotime($p['dt']));
					$dEnd = new DateTime($upperdt);
					$dStart = new DateTime(date("Y-m-d", strtotime($p['dt'])));
					$dDiff = $dStart->diff($dEnd);
					$type= "";
					if($dDiff->days > 6){
						$type="month";
						$c = $dDiff->days;
					}else{
						$c = date("w", strtotime($p['dt']));
						if ($c==0) $c = 7;
						$c--;
					}
					
					
					$e = ($auth_user['status']>4 || $auth_user['id']==$p['user']) ? 1:0;
					
					if ($h<6) $c--;
					?>
					//console.log(<?=$c?>);
					var task = { batch:false, type:'<?php echo $type?>', calendar_start_date:'<?php echo $upperdt;?>', realid: <?php echo $p['id'];?>, upl:1, e:<?php echo $e;?>, user: <?php echo $auth_user['id'];?>,startTimeHour: <?php echo $dt['hour'];?>, startTimeMinute: <?php echo $dt['minute'];?>,	duration: <?php echo $p['duration'];?>, column: <?php echo $c;?>, title: '<?php echo $p['title'];?>'};
					addTask(task);
			<?php } ?>	
			fillCalendarWithTasks();
		});
					
		</script>
</body>
</html>
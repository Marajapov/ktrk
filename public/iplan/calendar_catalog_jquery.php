<?php include_once 'usercontrol.php'; ?>
<?php
	 if (isset($_POST['w'])) {
		 
		 $user = $_SESSION["user_id"];
		 $w = getpost('w');
		 
		 $table = ($w==1) ? "films":"broadcasts";
		
		 $result = "<table>";
		 if ($w==1){
		 ?>
			<table id="myTable" class="table">
			<?php 
				$films = $db->selectpuresql("select * from films order by last_dt");
				foreach($films as $f){ ?> 
					<tr <?php if ($f['type']>0) echo 'style="display:none"';?> onclick="select_event(<?php echo $f['id'];?>)" id="event_row_<?php echo $f['id'];?>"  class="clickable-row film_type_<?php echo $f['type']; ?>">
				    	<th id="rowtitle<?php echo $f['id'];?>"><?php echo $f["name"]; ?></th>
					</tr>
				<?php } ?>
			<table>	 
			 <?php } else { ?>
			 <table id="myTable" class="table">
			<?php 
				$films = $db->selectpuresql("select e.*, b.name as bname from episodes e INNER JOIN broadcasts b ON e.father = b.id");
				foreach($films as $f){
				?> 
					<tr <?php if ($f['is_reserve']==0) echo 'style="display:none"';?> onclick="select_event_broadcast(<?php echo $f['id'];?>, '<?php echo $f['show_type'];?>')" id="event_row_<?php echo $f['id'];?>"  class="clickable-row film_type_<?php echo $f['is_reserve']; ?>">
					    <th id="rowtitle<?php echo $f['id'];?>" class="<?php echo $f["show_type"]; ?>"><?php echo $f["bname"]; ?></th><th><?php echo $f["title"]; ?></th>
					</tr>
				<?php } ?>
			<table>	
		<?php } ?>		
	<?php } ?>
<?php include_once 'usercontrol.php'; 
$id = 0;
if (isset($_GET['id'])) { $id = getget('id');}
if (isset($_POST['id'])) { $id = getpost('id');}
if ($id==0) redirect('index.php');
$this_user = $db->select_one('users', "id='".$id."'");
if (!$this_user) redirect('index.php');

$modules = $db->select("modules");
if (isset($_POST['id'])){
	
	$db->delete("user_module", "user='".$id."'");
	foreach($modules as $m){
		$access = 0;
		if (isset($_POST['chkbx_'.$m['id'].'_1'])) $access = 1;
		if (isset($_POST['chkbx_'.$m['id'].'_2'])) $access += 2;
		if (isset($_POST['chkbx_'.$m['id'].'_3'])) $access += 4;
		if (isset($_POST['chkbx_'.$m['id'].'_4'])) $access += 8;
		if ($access>0) {
			$ins = array("user"=>$id, "module"=>$m['id'], "module_db"=>$m['db'], "type"=>$m['type'], "access"=>$access);
			$db->insert("user_module", $ins);
		}
	}
}


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
			
				<?php include 'content_top.php'; ?>
				
               <div class="content-i">
			   
			   
			   
                  <div class="content-box">
                     

					 <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              
							<h6 class="element-header">Редактировать пользователя (Доступ) : <?php echo $this_user['name'];?></h6>
                            
							<script>
							function makeDecision(id){
								var boolS = document.getElementById('chkbx_father_'+id).checked;
								for(var i=1; i<5; i++) document.getElementById('chkbx_'+id+'_'+i).checked = boolS;
							}
							</script>
							<form action="user_access.php" method="post">
							  <?php
										$user_access = $db->select("user_module", "user='".$id."'");
										foreach($modules as $m)
										{
											$thisaccess = $read = $write = $execute = $delete = 0;
											
											foreach($user_access as $ua) if ($ua['module'] == $m['id']) {$thisaccess = $ua['access']; break;} 
											
											if ($thisaccess>7) { $delete = 1; $thisaccess-=8; }
											if ($thisaccess>3) { $execute = 1; $thisaccess-=4; }
											if ($thisaccess>1) { $write = 1; $thisaccess-=2; }
											if ($thisaccess>0) { $read = 1; }
											
									?>
									
							  <div class="element-box">
                                 <div class="table-responsive table-main">
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
														 <div class="col-sm-4">
														 
																<input onclick="makeDecision(<?php echo $m['id'];?>);" type="checkbox" class="styled" id="chkbx_father_<?php echo $m['id'];?>" value="option1">
																<label for="chkbx_father_<?php echo $m['id'];?>"> <b><?php echo $m['name'];?></b></label>
																
														</div>
                                                         <div class="col-sm-2">   
															<div class="checkbox">
                                                               <input <?php if ($read) echo "checked";?>  type="checkbox" name="chkbx_<?php echo $m['id'];?>_1" class="styled" id="chkbx_<?php echo $m['id'];?>_1" value="option1">
                                                               <label for="chkbx_<?php echo $m['id'];?>_1">Просмотр</label>
                                                           </div>
														 </div>
														 <div class="col-sm-2">
														   <div class="checkbox">
                                                             <input <?php if ($write) echo "checked";?>  type="checkbox" name="chkbx_<?php echo $m['id'];?>_2" class="styled" id="chkbx_<?php echo $m['id'];?>_2" value="option1">
                                                               <label for="chkbx_<?php echo $m['id'];?>_2">Создание</label>
                                                           </div>
														 </div>
														 <div class="col-sm-2">  
														   <div class="checkbox">
                                                               <input <?php if ($execute) echo "checked";?>  type="checkbox" name="chkbx_<?php echo $m['id'];?>_3" class="styled" id="chkbx_<?php echo $m['id'];?>_3" value="option1">
                                                               <label for="chkbx_<?php echo $m['id'];?>_3">Редактирование</label>
                                                           </div>
														</div>
														 <div class="col-sm-2">   
														   <div class="checkbox">
                                                              <input <?php if ($delete) echo "checked";?>  type="checkbox" name="chkbx_<?php echo $m['id'];?>_4" class="styled" id="chkbx_<?php echo $m['id'];?>_4" value="option1">
                                                               <label for="chkbx_<?php echo $m['id'];?>_4">Удаление</label>
                                                           </div>
														 </div>
														   
                                                         </div>
                                                      </div>
                                 </div>                                 
                              </div>
							  
							  <?php }  ?>
							  <div class="element-box">
                                 <div class="table-responsive table-main">
                                                      <div class="form-buttons-w">
										<input class="form-control" type="hidden"  name="id" value="<?php echo $id; ?>">
                                       <button class="btn btn-primary" type="submit">Сохранить</button>
                                       
                                    </div>
                                 </div>                                 
                              </div>
							  </form>
                           </div>
                        </div>
                     </div>
					 
					

                     
                  </div>
				  
				  
				  
				  
				  
                  
               </div>
            </div>
         </div>
      </div>
	  <?php include 'include.js.php';?>
   </body>
</html>
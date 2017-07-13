<?php include_once 'usercontrol.php'; ?>
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
			   
			      <?php 
						 $act=0;
						 $id = 0;
						 $table = "channels";
						 
						 if (isset($_GET['act'])) { if ($_GET['act']=='add') $act=1; else if ($_GET['act']=='edit') $act=2; else if ($_GET['act']=='delete') $act=3; }
						 
						 
						
						if (isset($_POST['act']) && $_POST['act']=='add') {
							 $name = getpost('name');
							 $fullname = getpost('fullname');
							 $ch_id = getpost('ch_id');
							 $broadcast_time = getpost('broadcast_time');
							 $ins = array("name"=>$name, "fullname"=>$fullname, "ch_id"=>$ch_id, "broadcast_time"=>$broadcast_time);
							 $newID = $db->insert($table, $ins);
							 
							 $pic = $_FILES['fileToUpload']['name'];
							 
							 $pic_loc = $_FILES['fileToUpload']['tmp_name'];
							 $folder="uploaded_files/";
							 
							 $extention = pathinfo($pic,PATHINFO_EXTENSION);
							 $newName = $episode."_episode_attachment".time() .".". $extention ;
							 
							 if(move_uploaded_file($pic_loc,$folder.$newName))
							 {
								$db->update($table, array("logo"=>$newName), "id='".$newID."'");
							 }
							 else
							 {
								//
							 }
							 
						}
						
						if (isset($_POST['act']) && $_POST['act']=='edit') {
							 $id = (int)getpost('id');
							 $name = getpost('name');
							 $fullname = getpost('fullname');
							 $ch_id = getpost('ch_id');
							 $broadcast_time = getpost('broadcast_time');
							 $ins = array("name"=>$name, "fullname"=>$fullname, "ch_id"=>$ch_id, "broadcast_time"=>$broadcast_time);
							 $db->update($table, $ins, "id = '".$id."'");
						}
						
						if ($act==3){
							 $id = (int)getget('id');
							 $item = $db->delete($table, "id = '".$id."'");
						 }
						 
						 if ($act==2){
							 $id = (int)getget('id');
							 $item = $db->select_one($table, "id = '".$id."'");
						 }
						
					 ?>
					 <?php if ($act==2 || $act==1) {?>
					 <div class="content-box">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header"><?php if ($act==1) echo "Добавить телеканал"; else if ($act==2) echo "Редактировать"; ?></h6>
                               <div class="element-box">
                                 <form enctype="multipart/form-data" action="" method="post">
                                    <fieldset class="form-group">          
                                       <div class="row">
                                          
										  <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Название передачи</label>
                                                <input class="form-control" type="text" name="name" <?php if ($act==2) echo 'value="'.$item["name"].'"'; ?>>
                                             </div>
                                          </div>
										  
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">ID</label>
                                                <input class="form-control" type="text" name="ch_id" <?php if ($act==2) echo 'value="'.$item["ch_id"].'"'; ?>>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Полное наименование</label>
                                                <input class="form-control" type="text" name="fullname" <?php if ($act==2) echo 'value="'.$item["fullname"].'"'; ?>>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">                 
                                             <div class="form-group">
                                                <label for="">Часов вещания</label>               
                                                <input class="form-control timepicker" type="text" name="broadcast_time" <?php if ($act==2) echo 'value="'.$item["broadcast_time"].'"'; ?>>
                                             </div>
                                          </div>  
                                          <div class="col-sm-6">    
                                             <div class="form-group">
                                                <label for="">Прикерпить логотип</label>
                                                <input type="file" name="fileToUpload" id="fileToUpload">
                                             </div>
                                          </div> 
										  
										  									  
                                       </div>                                      
                                    </fieldset>                              
                                    <div class="form-buttons-w">
										<input class="form-control" type="hidden"  name="act" value="<?php if ($act==1) echo "add"; else if ($act==2) echo "edit"; ?>">
										<?php if ($act==2) {?><input class="form-control" type="hidden"  name="id" value="<?php echo $id?>"><?php } ?>
                                       <button class="btn btn-primary" type="submit"><?php if ($act==1) echo "Создать"; else if ($act==2) echo "Редактировать"; ?></button>
                                       <button class="btn btn-default" type="button" onclick="window.location='?'">Отмена</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
					 <?php }  else { ?>
			   
			   
                  <div class="content-box">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">Телеканалы</h6>

                              <div class="element-box">
                                 <div class="table-responsive table-main">
                                    <table class="table table-lightborder">
                                       <thead>
                                          <tr>
                                             <th>ID</th>
                                             <th>Имя</th>
                                             <th>Полное наименование</th>
                                          </tr>
                                       </thead>
                                       <tbody>
									   
									   
									   <?php
											$ps = $db->select("channels");
											foreach($ps as $p) {
												?>
												
										  <tr>
                                             <td class="nowrap"><?php echo $p['ch_id'];?></td>         
                                             <td class="nowrap"><?php echo $p['name'];?></td>         
                                             <td class="nowrap"><?php echo $p['fullname'];?></td>
											 
											 <td class="nowrap"><div style="float:right"><a href="?act=edit&id=<?php echo $p['id'];?>">Редактировать</a> <a href="?act=delete&id=<?php echo $p['id'];?>" onclick="return confirm('Вы уверены что хотите удалить эту запись из базы?')">Удалить</a><div></td>
                                          </tr>		
												
										 
											
										<?php } ?>
									   
                                          
                                                                  
                                       </tbody>
                                    </table>
                                 </div>                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="content-panel">
                     <div class="element-wrapper">
                        <h6 class="element-header">Действия</h6>
                        <div class="element-box-tp">
                           <div class="el-buttons-list full-width">
                              <a class="btn btn-default" href="?act=add">
                                 <span>Добавить телеканал</span>
                              </a>
                             
                           </div>
                        </div>
                     </div>
                     
                  </div>
				  <?php } ?>
               </div>
            </div>
         </div>
      </div>
	  <?php include 'include.js.php';?>
   </body>
</html>
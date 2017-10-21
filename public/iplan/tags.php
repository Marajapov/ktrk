<?php 
$document_db = "tags";
$document_read = $document_write = $document_execute = $document_delete = 0;
include_once 'usercontrol.php'; 
if (!$document_read) {echo "У вас нет разрешения на доступ к этой странице. Обратитесь к администратору."; die();}
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
			   
			      <?php 
						 $act=0;
						 $id = 0;
						 $table = "tags";
						 if (isset($_GET['act'])) { if ($_GET['act']=='add') $act=1; else if ($_GET['act']=='edit') $act=2; else if ($_GET['act']=='delete') $act=3; }

						if (isset($_POST['act']) && $_POST['act']=='add') {
							 $name = getpost('name');
							 $fullname = getpost('fullname');
							 $deadline = getpost('deadline');
							 $report = getpost('report');
							 $ins = array("name"=>$name, "fullname"=>$fullname, "deadline"=>$deadline, "report"=>$report);
							 $db->insert($table, $ins);
						}
						
						if (isset($_POST['act']) && $_POST['act']=='edit') {
							 $id = (int)getpost('id');
							 $name = getpost('name');
							 $fullname = getpost('fullname');
							 $deadline = getpost('deadline');
							 $report = getpost('report');
							 $ins = array("name"=>$name, "fullname"=>$fullname, "deadline"=>$deadline, "report"=>$report);
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
                              <h6 class="element-header"><?php if ($act==1) echo "Добавить тег"; else if ($act==2) echo "Редактировать"; ?></h6>
                               <div class="element-box">
                                 <form action="" id='myForm' method="POST">
                                    <fieldset class="form-group">         
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Наименование</label>
                                                <input class="form-control" type="text" name="name" <?php if ($act==2) echo 'value="'.$item["name"].'"'; ?>>
                                             </div>
                                          </div>                                       
                                       </div>       
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Полное наименование</label>
                                                <input class="form-control" type="text"  name="fullname" <?php if ($act==2) echo 'value="'.$item["fullname"].'"'; ?>>
                                             </div>
                                          </div>                                       
                                       </div>
									   <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Срок реализации</label>
                                                <input class="form-control" type="text"  name="deadline" <?php if ($act==2) echo 'value="'.$item["deadline"].'"'; ?>>
                                             </div>
                                          </div>                                       
                                       </div>
									   <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Отчетность</label>
                                                <input class="form-control" type="text"  name="report" <?php if ($act==2) echo 'value="'.$item["report"].'"'; ?>>
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
					 <?php } else { ?>
			   
			   
                  <div class="content-box">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">Теги</h6>

                              <div class="element-box">
                                 <div class="table-responsive table-main">
                                    <table class="table table-lightborder">
                                       <thead>
                                          <tr>
                                             <th>Наименование</th>
                                             <th>Полное название</th>
                                          </tr>
                                       </thead>
                                       <tbody>
										<?php
											$ps = $db->select($table);
											foreach($ps as $p) {
												?>
												
										<tr>
                                             <td class="nowrap"><?php echo $p['name'];?></td>         
                                             <td class="nowrap"><?php echo $p['fullname'];?></td>
											<td class="nowrap"><div style="float:right">
											 
											 <?php if ($document_execute) { ?><a href="?act=edit&id=<?php echo $p['id'];?>">Редактировать</a><?php } ?>
											 
											 <?php if ($document_delete) { ?><a href="?act=delete&id=<?php echo $p['id'];?>" onclick="return confirm('Вы уверены что хотите удалить эту запись из базы?')">Удалить</a><?php } ?>
											 
											 <div></td>
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
                  
				   <?php if ($document_write) { ?>
				  <div class="content-panel">
                     <div class="element-wrapper">
                        <h6 class="element-header">Действия</h6>
                        <div class="element-box-tp">
                           <div class="el-buttons-list full-width">
                              <a class="btn btn-default" href="?act=add">
                                 <span>Добавить</span>
                              </a>
                              
                           </div>
                        </div>
                     </div>
                     
                  </div>
				  <?php } ?>
				  
				  
               </div>
			    <?php } ?>
            </div>
					
         </div>
      </div>
	  <?php include 'include.js.php';?>
   </body>
</html>
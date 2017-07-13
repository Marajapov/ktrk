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
						 $table = "users";
						 $error = "";
						 
						 if (isset($_GET['act'])) { if ($_GET['act']=='add') $act=1; else if ($_GET['act']=='edit') $act=2; else if ($_GET['act']=='delete') $act=3; }

						if (isset($_POST['act']) && $_POST['act']=='add') {
							 $name = getpost('name');
							 $username = getpost('username');
							 $p1 = getpost('p1');
							 $p2 = getpost('p2');
							 $status = getpost('status');
							 
							 if (strlen($username)<1) $error = "Заполните обязательное поле: Логин";
							 if (strlen($p1)<1)  $error = "Заполните обязательное поле: Пароль";
							 if ($p1 != $p2) $error = "Пароли не совпадают. Пожалуйста, проверьте.";
							 $blocked = isset($_GET['blocked']) ? getpost('blocked'):0;
							 if ($blocked!=1) $blocked = 0; 
							 $ins = array("name"=>$name, "username"=>$username, "password"=>md5($p1), "blocked"=>$blocked, "status"=>$status);
							 if (strlen($error)==0) $db->insert($table, $ins);
						}
						
						if (isset($_POST['act']) && $_POST['act']=='edit') {
							 $id = (int)getpost('id');
							 $name = getpost('name');
							 $username = getpost('username');
							 $blocked = getpost('blocked');
							 if ($blocked!=1) $blocked = 0; 
							 $status = getpost('status');
							 if (strlen($username)<1) $error = "Заполните обязательное поле: Логин";
							 $ins = array("name"=>$name, "username"=>$username, "blocked"=>$blocked, "status"=>$status);
							 if (strlen($error)==0) $db->update($table, $ins, "id = '".$id."'");
						}
						
						if ($act==3){
							 $id = (int)getget('id');
							 $db->update($table, array("status"=>0), "id = '".$id."'");
						 }
						 
						 if ($act==2){
							 $id = (int)getget('id');
							 $item = $db->select_one($table, "status>'0' and id = '".$id."'");
						 }
						
					 ?>
					 <?php if ($act==2 || $act==1) {?>
					 <div class="content-box">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header"><?php if ($act==1) echo "Добавить пользователя"; else if ($act==2) echo "Редактировать"; ?></h6>
                               <div class="element-box">
                                 <form action="" id='myForm' method="POST">
                                    <fieldset class="form-group">         
                                       <?php if (strlen($error)>0) {?>
									    <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label style="color:red"> <?php echo $error; ?></label>
                                             </div>
                                          </div>
                                          </div>
									   <?php } ?>
									   <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Имя пользователя</label>
                                                <input class="form-control" type="text" name="name" <?php if ($act==2) echo 'value="'.$item["name"].'"'; ?>>
                                             </div>
                                          </div>                                       
                                       </div>       
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Логин</label>
                                                <input class="form-control" type="text"  name="username" <?php if ($act==2) echo 'value="'.$item["username"].'"'; ?>>
                                             </div>
                                          </div>                                       
                                       </div>
									   
									   <?if ($act==1) {?>
									   
									   <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Пароль</label>
                                                <input class="form-control" type="password"  name="p1">
                                             </div>
                                          </div>                                       
                                       </div>
									   <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Потверждение пароля</label>
                                                <input class="form-control" type="password"  name="p2">
                                             </div>
                                          </div>                                       
                                       </div>
									   
									   <?php } ?>
									   
									   <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Полномочия</label>
												<select name="status" class="form-control selectpicker">
												<?php for($i=1; $i<count($user_status); $i++){ ?>
													<option value="<?php echo $i;?>" <?php if ($act==2) { if ($item['status']==$i) echo "selected"; } ?>><?php echo $user_status[$i];?></option>
												<?php } ?>
                                                </select>
                                             </div>
                                          </div>                                       
                                       </div>
									   
									   <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <div class="checkbox">
                                                   <input type="checkbox" class="styled" id="editable1" value="1" name="blocked" <?php if ($act==2 && $item['blocked']==1) echo 'checked';?>>
                                                   <label for="editable1">Заблокирован</label>
                                               </div>
                                             </div>
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
                              <h6 class="element-header">Пользователи</h6>

                              <div class="element-box">
                                 <div class="table-responsive table-main">
                                    <table class="table table-lightborder">
                                       <thead>
                                          <tr>
                                             <th>Имя</th>
                                             <th>Логин</th>
											 <th>Полномочия</th>
											 <th></th>
                                          </tr>
                                       </thead>
                                       <tbody>
										<?php
											$ps = $db->select($table, "status>'0'");
											foreach($ps as $p) {
												?>
												
										<tr>
                                             <td class="nowrap"><?php echo $p['name'];?></td>         
                                             <td class="nowrap"><?php echo $p['username'];?></td>
											 <td class="nowrap"><?php $st = $p['status']; echo $user_status[$st]; ?></td>
											 <td class="nowrap"><div style="float:right">
											 
											 <a href="?act=edit&id=<?php echo $p['id'];?>">Редактировать</a> 
											 <a href="user_access.php?&id=<?php echo $p['id'];?>">Доступ</a> 
											 <a href="?act=delete&id=<?php echo $p['id'];?>" onclick="return confirm('Вы уверены что хотите удалить эту запись из базы?')">Удалить</a><div></td>											 
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
                                 <span>Добавить</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
			    <?php } ?>
            </div>
         </div>
      </div>
	  <?php include 'include.js.php';?>
   </body>
</html>

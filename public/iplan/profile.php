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
						$table = "users";
						$error = "";
						$id = $_SESSION['user_id'];
						
						if (isset($_POST['old'])) {
							  
							 $old = getpost('old');
							 
							 $p1 = getpost('p1');
							 $p2 = getpost('p2');
							 
							 if (strlen($p1)<1)  $error = "Заполните обязательное поле: Пароль";
							 if ($p1 != $p2) $error = "Пароли не совпадают. Пожалуйста, проверьте.";
							 
							 $item = $db->select_one($table, "id = '".$id."'");
							 if ($item['password'] != md5($old)) $error = "Неверный текущий пароль. Пожалуйста, проверьте.";
							 
							 $ins = array("password"=>md5($p1));
							 
							 if (strlen($error)==0) {
								$db->update($table, $ins, "id = '".$id."'");
								$error = "Ваш пароль успешно изменён";
							 }
						}
						
						$item = $db->select_one($table, "id = '".$id."'");
						
					 ?>

					 <div class="content-box">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">Изменить пароль</h6>
                               <div class="element-box">
                                 <form action="" id='myForm' method="POST">
                                    <fieldset class="form-group">         
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for=""><?php echo $item["name"]; ?> :  <label for=""><?php echo $item["username"]; ?></label>
                                             </div>
                                          </div>
										                                   
                                       </div>       
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
                                                <label for="">Текущий пароль</label>
                                                <input class="form-control" type="password"  name="old">
                                             </div>
                                          </div>                                       
                                       </div>
									   <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Новый пароль</label>
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
                                    </fieldset>                              
                                    <div class="form-buttons-w">
										
										
                                       <button class="btn btn-primary" type="submit">Поменять пароль</button>
                                       <button class="btn btn-default" type="button" onclick="window.location='index.php'">Отмена</button>
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
      </div>
	  <?php include 'include.js.php';?>
   </body>
</html>
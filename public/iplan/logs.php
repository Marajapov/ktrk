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
						$user_post_list = array();
						$next_year = date('Y', strtotime('+1 year'));
						if (isset($_POST['user_ar'])) {
							$user_post_list = $_POST['user_ar'];
							$date_from_date = isset($_POST['date_from_date'])?getpost('date_from_date'):'01.01.2017';
							$date_from_time = isset($_POST['date_from_time'])?getpost('date_from_time'):'00:00';
							$date_to_date = isset($_POST['date_to_date'])?getpost('date_to_date'):'01.01.'.$next_year;
							$date_to_time = isset($_POST['date_to_time'])?getpost('date_to_time'):'00:00';
							
							/*
							foreach($_POST['user_ar'] as $u){
								echo $u;
							}
							*/
							
						}
					?>

					 <div class="content-box" style="width:400px">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <div class="element-box">
                                 <form action="" method="post">
                                    <fieldset class="form-group">          
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="row">
                                                <div class="col-sm-6" style="width:250px;">
                                                   <div class="form-group">
                                                      <label for="">C</label>
                                                      <input name="date_from_date" class="form-control datepicker" placeholder="выберите дату" type="text" <?php if (isset($date_from_date)) echo 'value="'.$date_from_date.'"';?>>
                                                   </div>
                                                </div>
                                                <div class="col-sm-6" style="width:250px;">
                                                   <div class="form-group">
                                                      <label for="">&nbsp;</label>
                                                      <input name="date_from_time" class="form-control timepicker" placeholder="выберите время" type="text" <?php if (isset($date_from_date)) echo 'value="'.$date_from_time.'"';?>>
                                                   </div>
                                                </div>
                                             </div>
                                          </div> 
                                       </div>       
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="row">
                                                <div class="col-sm-6" style="width:250px;">
                                                   <div class="form-group">
                                                      <label for="">По</label>
                                                      <input name="date_to_date" class="form-control datepicker" placeholder="выберите дату" type="text" <?php if (isset($date_from_date)) echo 'value="'.$date_to_date.'"';?>>
                                                   </div>
                                                </div>
                                                <div class="col-sm-6" style="width:250px;">
                                                   <div class="form-group">
                                                      <label for="">&nbsp;</label>
                                                      <input name="date_to_time" class="form-control timepicker" placeholder="выберите время" type="text" <?php if (isset($date_to_time)) echo 'value="'.$date_from_time.'"';?>>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <fieldset class="form-group">
                                          <span style="text-decoration: underline;">Пользователи</span>
                                          <div class="row">
                                             <div class="col-sm-6" style="width:250px;">
											 <div id="" style="overflow-x: hidden; overflow-y:scroll; height:200px;">
                                                <?php
												$users_list = $db->select("users", "status>'0'");
												foreach ($users_list as $u)
												{ ?>
												<div class="checkbox">
                                                   <input name="user_ar[]" type="checkbox" <?php if(in_array($u['id'],$user_post_list)) echo "checked"; ?> class="styled" id="editable<?php echo $u['id'];?>" value="<?php echo $u['id'];?>">
                                                   <label for="editable<?php echo $u['id'];?>"><?php echo $u['name'];?></label>
                                                </div>
												<?php } ?>
											</div>
                                             </div>
                                          </div>   
                                       </fieldset>                                   
                                    </fieldset>
                                    <div class="form-buttons-w">
                                       <button class="btn btn-primary" type="submit">Показать</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
					 </div>
					 <div class="content-box">
                     <div class="row"> <!-- style="display: none;" -->
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">Лог База</h6>
                              <div class="element-box">                                 
                                 <div class="table-responsive">
                                    <table class="table table-lightborder">
                                       <thead>
                                          <tr>
                                             <th>Время</th>
                                             <th>Пользователь</th>
                                             <th>Действие</th>
                                             <th>Описание</th>
                                             <th>Комментарий</th>
                                          </tr>
                                       </thead>
                                       <tbody>
									   
										<?php 
											if (isset($_POST['user_ar'])) {
												$date_sql = ' AND 1 ';
												if (isset($date_from_date) && (strlen($date_from_date)>0)){
													$date_from_date = date("Y/m/d", strtotime($date_from_date));
													if (isset($date_from_time) && (strlen($date_from_time)>0)){
														$from = $date_from_date ." ".$date_from_time;
													} else $from = $date_from_date ." 00:00";
													$date_sql .= "AND log.dt >='".$from."' ";
												}
												if (isset($date_to_date) && (strlen($date_to_date)>0)){
													$date_to_date = date("Y/m/d", strtotime($date_to_date));
													if (isset($date_to_time) && (strlen($date_to_time)>0)){
														$from = $date_to_date ." ".$date_to_time;
													} else $from = $date_to_date ." 00:00";
													$date_sql .= "AND log.dt <='".$from."' ";
												}
												$user_list_ar = $_POST['user_ar'];
												for($i=0; $i< count($user_list_ar); $i++){
													$user_list_ar[$i] = (int)$user_list_ar[$i];
												}
												$user_list_string = implode(',', $user_list_ar);
												
												$my_sql = "select u.name, log.* from users as u inner join log ON u.id = log.user where user in (".$user_list_string.") " .$date_sql;
												//echo $my_sql;
												$result = $db->selectpuresql($my_sql);
											foreach($result as $r){
											
										?>
                                          <tr>
                                             <td class="nowrap"><?php echo $r['dt'];?></td>         
                                             <td class="nowrap"><?php echo $r['name'];?></td>         
                                             <td class="nowrap"><?php echo $r['action'];?></td>         
                                             <td></td>
                                             <td></td>
                                          </tr> 
											<?php }} ?>
									   
                                       </tbody>
                                    </table>

                                    
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
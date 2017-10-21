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
						 $table = "montage_event";
						 
						 $montage_list = $db->select("montage");
						 if (count($montage_list)==0) echo "no montage room detected"; die();
						 $montage_room = 0;
						 if (isset($_GET['montage_room'])) $montage_room = getget('montage_room');
						 if (isset($_POST['montage_room'])) $montage_room = getpost('montage_room');
						 
						 if ($montage_room == 0) $montage_room = $montage_list[0];
						 
						 
						 if (isset($_GET['act'])) { if ($_GET['act']=='add') $act=1; else if ($_GET['act']=='edit') $act=2; else if ($_GET['act']=='delete') $act=3; }

						if (isset($_POST['act']) && $_POST['act']=='add') {
							 $name = getpost('name');
							 $code = getpost('code');
							 $amount = getpost('amount');
							 $type = getpost('type');
							 $ins = array("name"=>$name, "code"=>$code, "amount"=>$amount, "type"=>$type);
							 $db->insert($table, $ins);
						}
						
						if (isset($_POST['act']) && $_POST['act']=='edit') {
							 $id = (int)getpost('id');
							 $name = getpost('name');
							 $code = getpost('code');
							 $amount = getpost('amount');
							 $type = getpost('type');
							 $ins = array("name"=>$name, "code"=>$code, "amount"=>$amount, "type"=>$type);
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
						 
						 $date_from = $date_to = 0 ;
						 if (isset($_POST['date_from'])) $date_from = date("Y/m/d", strtotime(getpost("date_from")));
						 if (isset($_POST['date_to'])) $date_to = date("Y/m/d", strtotime(getpost("date_from")));
						 
						 if (!$date_from) $date_from = date("Y/m/d");
						 if (!$date_to) $date_from = date("Y/m/d", strtotime("+10 days"));
						
						 $sql = "select * from montage_event where date_from >= '".$date_from."' AND  date_from <= '".$date_to."'";
						 
						 $montage_event_list = $db->selectpuresql($sql);
						
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
                                                <div class="radio">
                                                   <input type="radio" name="type" id="radio1" value="0" <?php if ($act==2) { if ($item['type']==0) echo "checked"; } else echo "checked"; ?>>
                                                   <label for="radio1">
                                                      Основное оборудование
                                                   </label>
                                                </div>
                                                <div class="radio">
                                                   <input type="radio" name="type" id="radio2" value="1" <?php if ($act==2) { if ($item['type']==1) echo "checked"; } ?>>
                                                   <label for="radio2">
                                                      Дополнительное оборудование
                                                   </label>
                                                </div>
                                             </div> 
                                          </div>                                       
                                       </div>  
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
                                                <label for="">ID</label>
                                                <input class="form-control" type="text"  name="code" <?php if ($act==2) echo 'value="'.$item["code"].'"'; ?>>
                                             </div>
                                          </div>                                       
                                       </div>
									   <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Количество</label>
												<select name="amount" class="form-control selectpicker" title="выберите количество">
												<?php for($i=1; $i<1001; $i++){ ?>
													<option value="<?php echo $i;?>" <?php if ($act==2) { if ($item['amount']==$i) echo "selected"; } ?>><?php echo $i;?></option>
												<?php } ?>
                                                </select>
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
                              <h6 class="element-header">Основное оборудование</h6>

                              <div class="element-box">
                                 <div class="table-responsive table-main">
                                    <table class="table table-lightborder">
                                       <thead>
                                          <tr>
                                             <th>Дата</th>
                                             <th>Время начал.</th>
                                             <th>Время окон.</th>
											  <th>Монтируемый материал</th>
											  <th>Ответственный</th>
                                             <th>Хрон на выхода</th>
                                             <th>Заложено часов</th>
											  <th></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php
											foreach($montage_event_list as $p) {
												?>
												
										<tr>
                                             <td class="nowrap"><?php echo $p['date_from'];?></td>         
                                             <td class="nowrap"><?php echo $p['date_from'];?></td>
											 <td class="nowrap"><?php echo $p['date_to'];?></td>
											 <td class="nowrap"><?php echo $p['note'];?></td>         
                                             <td class="nowrap"><?php echo $p['name'];?></td>
											 <td class="nowrap"><?php echo $p['amount'];?></td>
											 <td class="nowrap"><?php echo $p['code'];?></td>         
                                             <td class="nowrap"><?php echo $p['name'];?></td>
											 <td class="nowrap"><?php echo $p['amount'];?></td>
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
					 <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">Дополнительное оборудование</h6>

                              <div class="element-box">
                                 <div class="table-responsive table-main">
                                    <table class="table table-lightborder">
                                       <thead>
                                          <tr>
                                             <th>ID</th>
                                             <th>Наименование</th>
                                             <th>Количество (шт.)</th>
											 <th></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          
										  <?php
											$ps = $db->select($table, "type='1'");
											foreach($ps as $p) {
												?>
												
										<tr>
                                             <td class="nowrap"><?php echo $p['code'];?></td>         
                                             <td class="nowrap"><?php echo $p['name'];?></td>
											 <td class="nowrap"><?php echo $p['amount'];?></td>
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
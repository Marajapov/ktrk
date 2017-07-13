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
                  <div class="content-box">
				  
				  <?php 
				  
				  $id=0;
				  $error_fl = 0;
				  $error_msg = "";
				  
				  
				  
				  if (isset($_GET['id'])) $id = (int)getget('id');	
				  if (isset($_POST['id'])) $id = (int)getpost('id');
				  if ($id==0) die();
				  
				  if (isset($_GET['act'])) {
					  $act = getget('act');
					  if ($act=='d'){
						  $db->delete("films",  "id='".$id."'");
						  redirect("films.php","js");
					  }
				  }
				  
				  
				  if (isset($_POST['id'])){

					  $name = getpost('name');
					  $genre = "";
					 
					  foreach ($_POST['genre'] as $selectedOption)
						$genre .=  $selectedOption.", ";
					  
					  if (strlen($genre)>4) $genre = substr($genre, 0, -2);
					  
					  $duration = getpost('duration');
					  $pieces = explode(":", $duration);
					  if (count($pieces)==2) $durationMinute = (int)$pieces[0] * 60 + (int)$pieces[1];
					  else $durationMinute = 0;
					  $language = getpost('language');
					  $country = getpost('country');
					  $company = getpost('company');
					  $director = getpost('director');
					  //$serverpath = getpost('serverpath');
					  $serverpath = "";
					  $other = 0; //getpost('other');
					  $number = getpost('number');
					  $description = getpost('description');
					  
					  $ins = array("name"=>$name, "genre"=>$genre, "duration"=>$duration, "durationMinute"=>$durationMinute, "language"=>$language, "country"=>$country, "company"=>$company, "director"=>$director, "serverpath"=>$serverpath, "other"=>$other, "number"=>$number, "description"=>$description);
					  if ($db->update("films", $ins, "id='".$id."'")!=0){$error_fl = 1;
						  $error_msg = "Вы успешно обновили данные";
					  }
					  else {$error_fl = 2; $error_msg = "Ошибка!";}
					  
				  }
				  
				  $film = $db->select_one("films", "id='".$id."'");
				  if (!$film) die();
				  
				  if ($error_fl > 0 ) {
				  ?>
				  

                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header"></h6>
                               <div class="element-box">
                                 <?php echo $error_msg;?>
                              </div>
                           </div>
                        </div>
                     </div>
                
				  <?php } if (true) { ?>
				  
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">Редактировать  фильм</h6>
                               <div class="element-box">
                                 <form method="post" action="">
                                    <fieldset class="form-group">          
                                       <div class="row">
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Дата добавления в базу</label>
                                                <input name="added_dt" class="form-control datepicker" placeholder="Выберите дату" type="text" disabled  value="<?php echo date('d.m.Y', strtotime($film["added_dt"]));?>">
                                             </div>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Кто добавил</label>
                                                <select name="user" class="form-control selectpicker" title="Выберите пользователя" disabled>
                                                   <?php $users_list = $db->select("users", "status>'0'");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>" <?php echo $u['id']==$film['user']?'selected':'';  ?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                             </div>
                                          </div>
										  
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">ID (формируется автоматически)</label>
                                                <input class="form-control" type="text" disabled value="<?php echo $film['id'];?>">
                                             </div>
                                          </div>
                                       </div>                                      
                                    </fieldset> 
                                    <fieldset class="form-group">       
                                       <legend><span>Карточка фильма</span></legend>          
                                       <div class="row">
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Название</label>
                                                <input name="name" class="form-control" type="text" required value="<?php echo $film['name'];?>">
                                             </div>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Жанр фильма (2 и больше указать через запятую)</label>               
                                                <select name="genre[]" id="byGenre" class="form-control selectpicker" title="выберите жанр(ы)" multiple  required >
                                                   <?php foreach($film_genre as $fg) {?>
												   <option <?php echo strpos($film['genre'], $fg) !== false ?'selected':'' ?>><?php echo $fg;?></option>
                                                   <?php } ?>
												   
                                                </select>
                                             </div>
                                          </div>                                          
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Хронометраж в формате чч:мм</label>
                                                <input name="duration" class="form-control timepicker" type="text" required  value="<?php echo $film['duration'];?>">
                                             </div>
                                          </div>                                          
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Язык фильма</label>               
                                                <select name="language" id="byGenre" class="form-control selectpicker" title="выберите язык"  required>
                                                   <?php $langs = $db->select("languages");
												   foreach($langs as $lang)
												   {?>
												   <option <?php if ($film['language']==$lang['name']) echo 'selected';?>><?php echo $lang['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                             </div>
                                          </div>                                     
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Страна производитель</label>               
                                                <select name="country" id="byGenre" class="form-control selectpicker" title="выберите страну"  required>
                                                   <option <?php if ($film['country']=='Кыргызстан') echo 'selected';?>>Кыргызстан</option>
                                                   <option <?php if ($film['country']=='Казахстан') echo 'selected';?>>Казахстан</option>
                                                   <option <?php if ($film['country']=='Россия') echo 'selected';?>>Россия</option>
                                                   <option <?php if ($film['country']=='СССР') echo 'selected';?>>СССР</option>
                                                   <option <?php if ($film['country']=='США') echo 'selected';?>>США</option>
                                                   <option <?php if ($film['country']=='Великобритания') echo 'selected';?>>Великобритания</option>
                                                   <option <?php if ($film['country']=='Италия') echo 'selected';?>>Италия</option>
                                                </select>
                                             </div>
                                          </div>                                
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Производство</label>               
                                                <select name="company" id="byGenre" class="form-control selectpicker" title="Производство"  required>
                                                   <option <?php if ($film['company']=='Кыргызтелефильм') echo 'selected';?>>Кыргызтелефильм</option>
                                                   <option <?php if ($film['company']=='Кыргызфильм') echo '';?>>Кыргызфильм</option>
                                                   <option <?php if ($film['company']=='Кыргызстан') echo 'selected';?>>Кыргызстан</option>
												   <option <?php if ($film['company']=='Казахстан') echo '';?>>Казахстан</option>
                                                   <option <?php if ($film['company']=='Россия') echo 'selected';?>>Россия</option>
                                                   <option <?php if ($film['company']=='Советский') echo 'selected';?>>Советский</option>
												   <option <?php if ($film['company']=='США') echo 'selected';?>>США</option>
                                                   <option <?php if ($film['company']=='Великобритания') echo 'selected';?>>Великобритания</option>
                                                   <option <?php if ($film['company']=='Италия') echo 'selected';?>>Италия</option>
                                                </select>
                                             </div>
                                          </div>  
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Режиссер фильма</label>
                                                <input name="director" class="form-control" type="text" required value="<?php echo $film['director'];?>">
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <div class="row">
                                          
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Носитель</label>               
                                                <select name="other" id="byGenre" class="form-control selectpicker" disabled value="<?php echo $film['other'];?>">
                                                   <option>Носитель</option>
                                                </select>
                                             </div>
                                          </div> 
										  <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">№</label>
                                                <input name="number" class="form-control" type="text" value="<?php echo $film['number'];?>">
                                             </div>
                                          </div>
                                       </div> 
                                       <div class="row">
                                          <div class="col-sm-12">                               
                                             <label for="">Краткая аннотация фильма</label>
                                             <textarea name="description" class="form-control" rows="8"><?php echo $film['description'];?></textarea>
                                          </div>
                                       </div>                                      
                                    </fieldset>                                    
                                    <div class="form-buttons-w">
									<input type="hidden" name="id" value="<?php echo $id;?>">
                                       <button class="btn btn-primary" type="submit">Сохранить</button>
                                       <button class="btn btn-default" type="button"  onclick="location.href = 'films.php'">Отмена</button>
                                    </div>
                                 </form>
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
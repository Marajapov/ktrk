<?php 
$document_db = "films";
$document_read = $document_write = $document_execute = $document_delete = 0;
include_once 'usercontrol.php'; 
if (!$document_write) {echo "У вас нет разрешения на доступ к этой странице. Обратитесь к администратору."; die();}
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
				  
				  <?php 
				  
				  if (isset($_POST['name'])){
					  $user = (int)getpost('user');
					  $added_dt = date("Y/m/d", strtotime(getpost('added_dt')));
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
					  $serverpath = getpost('serverpath');

					  $other = 0; //getpost('other');
					  $number = getpost('number');
					  $description = getpost('description');
					  
					  $ins = array("user"=>$user, "added_dt"=>$added_dt, "name"=>$name, "genre"=>$genre, "duration"=>$duration, "durationMinute"=>$durationMinute, "language"=>$language, "country"=>$country, "company"=>$company, "director"=>$director, "serverpath"=>$serverpath, "other"=>$other, "number"=>$number, "description"=>$description);
					  if ($db->insert("films", $ins)!=0){
						  redirect("films.php","js");
					  }
					  
				  }
				  
				  
				  if (false) {
				  ?>
				  

                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header"></h6>
                               <div class="element-box">
                                 fasdfasdf
                              </div>
                           </div>
                        </div>
                     </div>
                
				  <?php } if (true) { ?>
				  
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">Добавить фильм</h6>
                               <div class="element-box">
                                 <form method="post" action="">
                                    <fieldset class="form-group">          
                                       <div class="row">
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Дата добавления в базу</label>
                                                <input name="added_dt" class="form-control datepicker" placeholder="Выберите дату" type="text" required >
                                             </div>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Кто добавил</label>
                                                <select name="user" class="form-control selectpicker" title="Выберите пользователя" required>
                                                   <?php $users_list = $db->select("users", "status>'0'");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>"><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">ID (формируется автоматически)</label>
                                                <input class="form-control" type="text" disabled>
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
                                                <input name="name" class="form-control" type="text" required>
                                             </div>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Жанр фильма (2 и больше указать через запятую)</label>               
                                                <select name="genre[]" id="byGenre" class="form-control selectpicker" title="выберите жанр(ы)" multiple  required>
                                                   <?php foreach($film_genre as $fg) {?>
												   <option><?php echo $fg;?></option>
                                                   <?php } ?>
												   
                                                </select>
                                             </div>
                                          </div>                                          
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Хронометраж в формате чч:мм</label>
                                                <input name="duration" class="form-control timepicker" type="text" value="01:30" required>
                                             </div>
                                          </div>                                          
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Язык фильма</label>               
                                                <select name="language" id="byGenre" class="form-control selectpicker" title="выберите язык"  required>
                                                   <?php $langs = $db->select("languages");
												   foreach($langs as $l)
												   {?>
												   <option><?php echo $l['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                             </div>
                                          </div>                                     
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Страна производитель</label>               
                                                <select name="country" id="byGenre" class="form-control selectpicker" title="выберите страну"  required>
                                                   <option>Кыргызстан</option>
                                                   <option>Казахстан</option>
                                                   <option>Россия</option>
                                                   <option>СССР</option>
                                                   <option>США</option>
                                                   <option>Великобритания</option>
                                                   <option>Италия</option>
                                                </select>
                                             </div>
                                          </div>                                
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Производство</label>               
                                                <select name="company" id="byGenre" class="form-control selectpicker" title="Производство"  required>
                                                   <option>Кыргызтелефильм</option>
                                                   <option>Кыргызфильм</option>
                                                   <option>Кыргызстан</option>
												   <option>Казахстан</option>
                                                   <option>Россия</option>
                                                   <option>Советский</option>
												   <option>США</option>
                                                   <option>Великобритания</option>
                                                   <option>Италия</option>
                                                </select>
                                             </div>
                                          </div>  
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Режиссер фильма</label>
                                                <input name="director" class="form-control" type="text" required>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Путь к файлу</label>               
                                                <input name="serverpath" class="form-control" type="text">
                                             </div>
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">Носитель</label>               
                                                <select name="other" id="byGenre" class="form-control selectpicker" disabled>
                                                   <option>Носитель</option>
                                                </select>
                                             </div>
                                          </div> 
										  <div class="col-sm-4">
                                             <div class="form-group">
                                                <label for="">№</label>
                                                <input name="number" class="form-control" type="text">
                                             </div>
                                          </div>
                                       </div> 
                                       <div class="row">
                                          <div class="col-sm-12">                               
                                             <label for="">Краткая аннотация фильма</label>
                                             <textarea name="description" class="form-control" rows="8"></textarea>
                                          </div>
                                       </div>                                      
                                    </fieldset>                                    
                                    <div class="form-buttons-w">
                                       <button class="btn btn-primary" type="submit">Добавить</button>
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
<?php 
$document_db = "broadcasts";
$document_type_only = 1;
$document_read = $document_write = $document_execute = $document_delete = 0;
include_once 'usercontrol.php'; 
if ($document_execute || $document_delete){} else {echo "У вас нет разрешения на доступ к этой странице. Обратитесь к администратору."; die();}
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
				  $id=0;
				  $error_fl = 0;
				  $error_msg = "";
				  
				  
				  
				  if (isset($_GET['id'])) $id = (int)getget('id');	
				  if (isset($_POST['id'])) $id = (int)getpost('id');
				  if ($id==0) die();
				  
				  if (isset($_GET['act'])) {
					  $act = getget('act');
					  if ($act=='a'){
						  $last_dt = date("Y/m/d H:i:s");
						  if ($document_execute) $db->update("broadcasts", array("status"=>2, "last_dt"=>$last_dt), "id='".$id."'");
						  redirect("broadcasts.php","js");
					  }
					  if ($act=='d'){
						  if ($document_delete) $db->update("broadcasts", array("status"=>0), "id='".$id."'");
						  redirect("broadcasts.php","js");
					  }
				  }

								  
				  if (!$document_execute){ echo "У вас нет разрешения на доступ к этой странице. Обратитесь к администратору."; die(); }
				  if (isset($_POST['id'])){
					   					   
					  $last_dt = date("Y/m/d H:i:s");
					  $ins["last_dt"] = $last_dt;
					  
					  $channel = getpost('channel');
					  $ins["channel"] = $channel;
					  $studio = getpost('studio');
					  $ins["studio"] = $studio;
					  
					  $name = getpost('name');
					  $ins["name"] = $name;
					  $name_flag = isset($_POST['name_flag'])?1:0;
					  $ins["name_flag"] = $name_flag;
					  
					  $genre = getpost('genre');
					  
					  //$genre = $broadcast_genre[$genre][0]
					  
					  $ins["genre"] = $genre;
					  $genre_flag = isset($_POST['genre_flag'])?1:0;
					  $ins["genre_flag"] = $genre_flag;
					  $theme = getpost('theme');
					  $ins["theme"] = $theme;
					  $theme_flag = isset($_POST['theme_flag'])?1:0;
					  $ins["theme_flag"] = $theme_flag;
					  $duration = getpost('duration');
					  $ins["duration"] = $duration;
					  $duration_flag = isset($_POST['duration_flag'])?1:0;
					  $ins["duration_flag"] = $duration_flag;
					  $pieces = explode(":", $duration);
					  
					  if (count($pieces)==2) $durationMinute = (int)$pieces[0] * 60 + (int)$pieces[1];
					  else $durationMinute = 0;
					  $ins["durationMinute"] = $durationMinute;
					  
					  $language = getpost('language');
					  $ins["language"] = $language;
					  $language_flag = isset($_POST['language_flag'])?1:0;
					  $ins["language_flag"] = $language_flag;
					  $concept = getpost('concept');
					  $ins["concept"] = $concept;
					  $concept_flag = isset($_POST['concept_flag'])?1:0;
					  $ins["concept_flag"] = $concept_flag;
					  $show_type = getpost('show_type');
					  $ins["show_type"] = $show_type;
					  $show_type_flag = isset($_POST['show_type_flag'])?1:0;
					  $ins["show_type_flag"] = $show_type_flag;
					  
					  $company = getpost('company');
					  $ins["company"] = $company;
					  $company_flag = isset($_POST['company_flag'])?1:0;
					  $ins["company_flag"] = $company_flag;
					  
					  $editor = getpost('editor');
					  $ins["editor"] = $editor;
					  $editor_flag = isset($_POST['editor_flag'])?1:0;
					  $ins["editor_flag"] = $editor_flag;
					  $anchor = getpost('anchor');
					  $ins["anchor"] = $anchor;
					  $anchor_flag = isset($_POST['anchor_flag'])?1:0;
					  $ins["anchor_flag"] = $anchor_flag;
					  $director = getpost('director');
					  $ins["director"] = $director;
					  $director_flag = isset($_POST['director_flag'])?1:0;
					  $ins["director_flag"] = $director_flag;
					  $place = getpost('place');
					  $ins["place"] = $place;
					  $place_flag = isset($_POST['place_flag'])?1:0;
					  $ins["place_flag"] = $place_flag;
					  $camera = getpost('camera');
					  $ins["camera"] = $camera;
					  $camera_flag = isset($_POST['camera_flag'])?1:0;
					  $ins["camera_flag"] = $camera_flag;
					  $camera_count = getpost('camera_count');
					  $ins["camera_count"] = $camera_count;
					  $camera2 = getpost('camera2');
					  $ins["camera2"] = $camera2;
					  $camera2_flag = isset($_POST['camera2_flag'])?1:0;
					  $ins["camera2_flag"] = $camera2_flag;
					  $camera2_count = getpost('camera2_count');
					  $ins["camera2_count"] = $camera2_count;
					  $tech1 = getpost('tech1');
					  $ins["tech1"] = $tech1;
					  $tech1_flag = isset($_POST['tech1_flag'])?1:0;
					  $ins["tech1_flag"] = $tech1_flag;
					  $tech2 = getpost('tech2');
					  $ins["tech2"] = $tech2;
					  $tech2_flag = isset($_POST['tech2_flag'])?1:0;
					  $ins["tech2_flag"] = $tech2_flag;
					  $tech3 = getpost('tech3');
					  $ins["tech3"] = $tech3;
					  $tech3_flag = isset($_POST['tech3_flag'])?1:0;
					  $ins["tech3_flag"] = $tech3_flag;
					  $tech4 = getpost('tech4');
					  $ins["tech4"] = $tech4;
					  $tech4_flag = isset($_POST['tech4_flag'])?1:0;
					  $ins["tech4_flag"] = $tech4_flag;
					  $tech5 = getpost('tech5');
					  $ins["tech5"] = $tech5;
					  $tech5_flag = isset($_POST['tech5_flag'])?1:0;
					  $ins["tech5_flag"] = $tech5_flag;
					  
					  //print_r($ins);
					  
					  
					  if ($db->update("broadcasts", $ins, "id='".$id."'")){
						  $error_fl = 1;
						  $error_msg = "Вы успешно обновили данные";
					  }
					  else {$error_fl = 2; $error_msg = "Ошибка!";}
					  
				  }
				  
				  
				  $b = $db->select_one("broadcasts", "id='".$id."'");
				  if (!$b) die();
				  
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
                              <h6 class="element-header">Редактировать передачу</h6>
                               <div class="element-box">
                                 <form method="post" action="">
                                    <fieldset class="form-group">          
                                       <div class="row">
                                          <div class="col-sm-3">
                                             <div class="form-group">
                                                <label for="">Дата создания передачи</label>
                                                <input name="added_dt" class="form-control datepicker" type="text" disabled value="<?php echo date('d.m.Y', strtotime($b["added_dt"]));?>" >
                                             </div>
                                          </div>
                                          <div class="col-sm-3">
                                             <div class="form-group">
                                                <label for="">Кем создана</label>
                                                <select name="user" class="form-control selectpicker" title="Выберите пользователя" disabled>
                                                   <?php $users_list = $db->select("users", "status>'0'");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>" <?php if ($u['id'] == $b['user']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-sm-3">
                                             <div class="form-group">
                                                <label for="">Редакция/студия/телеканал</label>
                                                <select name="studio" class="form-control selectpicker" title="выберите редакцию" required>
                                                   <?php $users_list = $db->select("studios");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>" <?php if ($u['id'] == $b['studio']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-sm-3">
                                             <div class="form-group">
                                                <label for="">Телеканал назначения</label>
                                                <select  name="channel" class="form-control selectpicker" title="выберите телеканал" required>
                                                   <?php $users_list = $db->select("channels");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>" <?php if ($u['id'] == $b['channel']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                             </div>
                                          </div>
                                       </div>                                      
                                    </fieldset>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          
                                          <fieldset class="form-group">       
                                             <legend><span>Паспорт передачи</span></legend> 
                                             <div class="row">
                                                <div class="col-sm-9">
                                                   <div class="form-group">
                                                      <label for="">Название передачи</label>
                                                      <input name="name" class="form-control" type="text" required value="<?php echo $b['name'];?>">
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="name_flag" name="name_flag" value="option1" <?php if ($b['name_flag']) echo "checked";?>>
                                                         <label for="name_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-9">                       
                                                   <div class="form-group">
                                                      <label for="">Жанр передачи</label>               
                                                      <select name="genre" id="br_genre" class="form-control selectpicker" title="выберите жанр" required>
                                                         
														 <?php 
														   for($i=0; $i<count($broadcast_genre); $i++)
														   {?>
														   <option value="<?php echo $i;?>"  <?php if ($i == $b['genre']) echo "selected";?>><?php echo $broadcast_genre[$i][0];?></option>
														   <?php  } ?>
                                                         
                                                      </select>
													  <script>
														$( "#br_genre" ).change(function() {
															var id = $( "#br_genre" ).val();
															$("#theme").empty();
															$('#theme').selectpicker('refresh');
															var broadcast_genre_array = <?php echo json_encode($broadcast_genre); ?>;
															$.each(broadcast_genre_array, function (i, elem) {
																if (i==id)
																	$.each(elem, function (j, kelem) {
																		if (j==0) return true;
																		var option = $('<option></option>').attr("value", kelem).text(kelem);
																		$('#theme').append(option)
																		$('#theme').selectpicker('refresh');
																		
																	});
															});
														});
													  </script>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="genre_flag" name="genre_flag" value="option1" <?php if ($b['genre_flag']) echo "checked";?>>
                                                         <label for="genre_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-9">                       
                                                   <div class="form-group">
                                                      <label for="">Тематика жанра</label>               
                                                      <select name="theme" id="theme" class="form-control selectpicker" title="выберите тематику" required>
													  
													  <?php 
														   for($i=0; $i<count($broadcast_genre); $i++) if($i == $b['genre']) for($j=0; $j<count($broadcast_genre[$i]); $j++)
														   {?>
														   <option <?php if ($broadcast_genre[$i][$j] == $b['theme']) echo "selected";?>><?php echo $broadcast_genre[$i][$j];?></option>
														   <?php  } ?>
													  
													  </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="theme_flag" value="option1" name="theme_flag" <?php if ($b['theme_flag']) echo "checked";?>>
                                                         <label for="theme_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
                                             
                                             <div class="row">
                                                <div class="col-sm-3">                       
                                                   <div class="form-group">
                                                      <label for="">Хронометраж</label>               
                                                      <input class="form-control timepicker" type="text"  value="01:30" required name="duration">
                                                   </div>
                                                </div>
                                                <div class="col-sm-3 col-sm-offset-6">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="duration_flag" value="option1" name="duration_flag" <?php if ($b['duration_flag']) echo "checked";?>>
                                                         <label for="duration_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-9">                       
                                                   <div class="form-group">
                                                      <label for="">Язык передачи</label>            
                                                      <select name="language" class="form-control selectpicker" title="выберите язык" required>
                                                          <?php $users_list = $db->select("languages");
												   foreach($users_list as $u)
												   {?>
												   <option <?php if ($u['name'] == $b['language']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="language_flag" value="option1" name="language_flag" <?php if ($b['language_flag']) echo "checked";?>>
                                                         <label for="language_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-9">                       
                                                   <div class="form-group">
                                                      <label for="">Концепция передачи (5-7 предложений)</label>
                                                      <textarea name="concept" class="form-control" rows="8"><?php echo $b['concept'];?></textarea>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="concept_flag" value="option1" name="concept_flag" <?php if ($b['concept_flag']) echo "checked";?>>
                                                         <label for="concept_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-9">                       
                                                   <div class="form-group">
                                                      <label for="">Метод выдачи</label>               
                                                      <select name="show_type" class="form-control selectpicker" title="выберите метод">
                                                         <?php 
														   for($i=0; $i<count($broadcast_type); $i++)
														   {?>
														   <option value="<?php echo $broadcast_type[$i];?>" <?php if ($broadcast_type[$i] == $b['show_type']) echo "selected";?>><?php echo $broadcast_type[$i];?></option>
														   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="show_type_flag" value="option1" name="show_type_flag" <?php if ($b['show_type_flag']) echo "checked";?>>
                                                         <label for="show_type_flag">редактируемость</label>
                                                     </div> 
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
												<div class="col-sm-9">                       
                                                   <div class="form-group">
                                                      <label for="">Производство</label>               
                                                      <select name="company" class="form-control selectpicker" title="выберите производитство">
                                                          <?php 
														   for($i=0; $i<count($broadcast_proiz); $i++)
														   {?>
														   <option <?php if ($broadcast_proiz[$i] == $b['company']) echo "selected";?>><?php echo $broadcast_proiz[$i];?></option>
														   <?php  } ?>
														
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="company_flag" value="option1" name="company_flag" <?php if ($b['company_flag']) echo "checked";?>>
                                                         <label for="company_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-9">                       
                                                   <div class="form-group">
                                                      <label for="">Редактор</label>   
                                                      <input class="form-control" type="text" name="editor" value="<?php echo $b['editor'];?>">
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="editor_flag" value="option1" name="editor_flag" <?php if ($b['editor_flag']) echo "checked";?>>
                                                         <label for="editor_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-9">                       
                                                   <div class="form-group">
                                                      <label for="">Ведущие (указать через запятую)</label>   
                                                      <input class="form-control" type="text" name="anchor" value="<?php echo $b['anchor'];?>">
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="anchor_flag" value="option1" name="anchor_flag" <?php if ($b['anchor_flag']) echo "checked";?>>
                                                         <label for="anchor_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div
                                             <div class="row">
                                                <div class="col-sm-9">                       
                                                   <div class="form-group">
                                                      <label for="">Режиссер (если больше одного, указать через запятую)</label>   
                                                      <input class="form-control" type="text" name="director" value="<?php echo $b['director'];?>">
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="director_flag" value="option1" name="director_flag" <?php if ($b['director_flag']) echo "checked";?>>
                                                         <label for="director_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>                                      
                                          </fieldset> 
                                       </div>

                                       <div class="col-sm-6">
                                          
                                          <fieldset class="form-group">       
                                             <legend><span>Техника</span></legend> 
                                             <div class="row">
                                                <div class="col-sm-9">
                                                   <div class="form-group">
                                                      <label for="">Место съемок/Студия</label>
                                                      <select name="place" class="form-control selectpicker" title=" ">
                                                         <?php $users_list = $db->select("place");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>" <?php if ($u['id'] == $b['place']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="place_flag" value="option1" name="place_flag" <?php if ($b['place_flag']) echo "checked";?>>
                                                         <label for="place_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-6">                       
                                                   <div class="form-group">
                                                      <label for="">Камеры</label>               
                                                      <select name="camera" class="form-control selectpicker" title="выберите камеру">
                                                         <?php $users_list = $db->select("tools", "is_camera='1'");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>" <?php if ($u['id'] == $b['camera']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">                       
                                                   <div class="form-group">
                                                      <label for="">Количество</label>               
                                                      <select name="camera_count" class="form-control selectpicker">
                                                          
														 
														<?php 
														for ($i=1; $i<10; $i++) {
														?>
														<option <?php if ($i == $b['camera_count']) echo "selected";?>><?php echo $i;?></option>
														<?php } ?>
														 
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="camera_flag" value="option1" name="camera_flag" <?php if ($b['camera_flag']) echo "checked";?>>
                                                         <label for="camera_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-6">                       
                                                   <div class="form-group">
                                                      <label for="">Доп. камеры</label>               
                                                      <select name="camera2" class="form-control selectpicker" title="выберите камеру">
                                                          <?php $users_list = $db->select("tools", "is_camera='1'");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>" <?php if ($u['id'] == $b['camera2']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">                       
                                                   <div class="form-group">
                                                      <label for="">Количество</label>               
                                                      <select name="camera2_count" class="form-control selectpicker">
                                                         <?php 
														for ($i=1; $i<10; $i++) {
														?>
														<option <?php if ($i == $b['camera2_count']) echo "selected";?>><?php echo $i;?></option>
														<?php } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="camera2_flag" value="option1" name="camera2_flag" <?php if ($b['camera2_flag']) echo "checked";?>>
                                                         <label for="camera2_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>  

											<div class="row">
                                                <div class="col-sm-9">
                                                   <div class="form-group">
                                                      <label for=""></label>
                                                      <select name="tech1" class="form-control selectpicker" title=" ">
                                                         <?php $users_list = $db->select("tools", "is_camera = '0'");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>" <?php if ($u['id'] == $b['tech1']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="tech1_flag" value="option1" name="tech1_flag" <?php if ($b['tech1_flag']) echo "checked";?>>
                                                         <label for="tech1_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
											 
											 
											 <div class="row">
                                                <div class="col-sm-9">
                                                   <div class="form-group">
                                                      <label for=""></label>
                                                      <select name="tech2" class="form-control selectpicker" title=" ">
                                                         <?php $users_list = $db->select("tools", "is_camera = '0'");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>" <?php if ($u['id'] == $b['tech2']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="tech2_flag" value="option1" name="tech2_flag" <?php if ($b['tech2_flag']) echo "checked";?>>
                                                         <label for="tech2_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
											 
											 
											 <div class="row">
                                                <div class="col-sm-9">
                                                   <div class="form-group">
                                                      <label for=""></label>
                                                      <select name="tech3" class="form-control selectpicker" title=" ">
                                                         <?php $users_list = $db->select("tools", "is_camera = '0'");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>" <?php if ($u['id'] == $b['tech3']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="tech3_flag" value="option1" name="tech3_flag" <?php if ($b['tech3_flag']) echo "checked";?>>
                                                         <label for="tech3_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
											 
											 <div class="row">
                                                <div class="col-sm-9">
                                                   <div class="form-group">
                                                      <label for=""></label>
                                                      <select name="tech4" class="form-control selectpicker" title=" ">
                                                         <?php $users_list = $db->select("tools", "is_camera = '0'");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>" <?php if ($u['id'] == $b['tech5']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="tech4_flag" value="option1" name="tech4_flag" <?php if ($b['tech4_flag']) echo "checked";?>>
                                                         <label for="tech4_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
											 
											 <div class="row">
                                                <div class="col-sm-9">
                                                   <div class="form-group">
                                                      <label for=""></label>
                                                      <select name="tech5" class="form-control selectpicker" title=" ">
                                                         <?php $users_list = $db->select("tools", "is_camera = '0'");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>" <?php if ($u['id'] == $b['tech5']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="tech5_flag" value="option1" name="tech5_flag" <?php if ($b['tech5_flag']) echo "checked";?>>
                                                         <label for="tech5_flag">редактируемость</label>
                                                     </div>
                                                   </div>
                                                </div>
                                             </div>
											 
                                          </fieldset> 
                                       </div>
                                    </div>                               
                                    <div class="form-buttons-w">
										<input type="hidden" name="id" value="<?php echo $id;?>">
                                       <button class="btn btn-primary" type="submit">Сохранить</button>
                                       <button class="btn btn-default" type="button" onclick="location.href = 'broadcasts.php'">Отмена</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
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
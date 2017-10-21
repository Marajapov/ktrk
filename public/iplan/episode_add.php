<?php 
$document_db = "episodes";
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
				
				<?php
				$id = 0;
				if (isset($_GET['id'])) $id = (int)getget('id');
				if (isset($_POST['id'])) $id = (int)getpost('id');
				if ($id==0) die();
				
				if (isset($_POST['id'])){
					
					$user = $auth_user["id"];
					$title = getpost("title");
					$language = getpost("language");
					$tag = getpost("tag");
					$theme = getpost("theme");
					$duration = getpost("duration");
					$pieces = explode(":", $duration);
					if (count($pieces)==2) $durationMinute = (int)$pieces[0] * 60 + (int)$pieces[1];
					else $durationMinute = 0;
					
					$show_type = getpost("show_type");
					
					$dt = getpost("dt");
					$tm = getpost("tm");
					$date_from_date = date("Y/m/d", strtotime($dt));
					$from = $date_from_date ." ".$tm;
					
					$is_reserve = isset($_POST['is_reserve']) ? 1:0;
					
					$incharge = getpost("incharge");
					$editor = getpost("editor");
					$anchor = getpost("anchor");
					$director = getpost("director");
					$ins = array("father"=>$id, "user"=>$user, "title"=>$title, "language"=>$language, "tag"=>$tag, "theme"=>$theme, "duration"=>$duration, "durationMinute"=>$durationMinute, "show_type"=>$show_type, "dt"=>$from, "is_reserve"=>$is_reserve, "incharge"=>$incharge, "editor"=>$editor, "anchor"=>$anchor, "director"=>$director);
					
					
					
					$episode = $db->insert("episodes", $ins);
					
					if ((int)$episode==0) die();
					
					$g1 = getpost("g1");
					$g2 = getpost("g2");
					$g3 = getpost("g3");
					$g4 = getpost("g4");
					$w1 = getpost("w1");
					$w2 = getpost("w2");
					$w3 = getpost("w3");
					$w4 = getpost("w4");
					$ins2 = array("episode"=>$episode, "g1"=>$g1, "g2"=>$g2, "g3"=>$g3, "g4"=>$g4, "w1"=>$w1, "w2"=>$w2, "w3"=>$w3, "w4"=>$w4);
					$db->insert("episode_guests", $ins2);
					
					$place = getpost("place");
					$date_from_date = getpost("date_from_date");
					$date_from_time = getpost("date_from_time");
					
					$date_to_date = getpost("date_to_date");
					$date_to_time = getpost("date_to_time");
					
					$date_from_date = date("Y/m/d", strtotime($date_from_date));
					$date_from = $date_from_date ." ".$date_from_time;
					
					$date_to_date = date("Y/m/d", strtotime($date_to_date));
					$date_to = $date_to_date ." ".$date_to_time;
					
					$description = getpost("description");
					
					$place_tech = getpost("place_tech");

					$ins3 = array("episode"=>$episode, "place"=>$place, "date_from"=>$date_from, "date_to"=>$date_to, "description"=>$description, "tech"=>$place_tech);
					$db->insert("episode_place", $ins3);
					
					
					$montage = getpost("montage");
					$montage_date_from_date = getpost("montage_date_from_date");
					$montage_date_from_time = getpost("montage_date_from_time");
					
					$montage_date_to_date = getpost("montage_date_to_date");
					$montage_date_to_time = getpost("montage_date_to_time");
					
					$montage_date_from_date = date("Y/m/d", strtotime($montage_date_from_date));
					$date_from_montage = $montage_date_from_date ." ".$montage_date_from_time;
					
					$montage_date_to_date = date("Y/m/d", strtotime($montage_date_to_date));
					$date_to_montage = $montage_date_to_date ." ".$montage_date_to_time;
					
					$import = getpost("import");
					
					$export = getpost("export");

					$ins4 = array("episode"=>$episode, "montage"=>$montage, "date_from"=>$date_from_montage, "date_to"=>$date_to_montage, "import"=>$import, "export"=>$export);
					$db->insert("episode_montage", $ins4);
					
					$camera1 = getpost("camera1");
					$camera2 = getpost("camera2");
					$camera_count1 = getpost("camera_count1");
					$camera_count2 = getpost("camera_count2");
					
					$crane = isset($_POST['crane']) ? 1:0;
					$rails = isset($_POST['rails']) ? 1:0;
					$drone = isset($_POST['drone']) ? 1:0;
					$steadycam = isset($_POST['steadycam']) ? 1:0;
					
					$tool = getpost("tool");
					$tool_desc = getpost("tool_desc");

					$ins5 = array("episode"=>$episode, "camera1"=>$camera1, "camera2"=>$camera2, "camera_count1"=>$camera_count1, "camera_count2"=>$camera_count2, "crane"=>$crane, "rails"=>$rails, "drone"=>$drone, "steadycam"=>$steadycam, "tool"=>$tool, "tool_desc"=>$tool_desc);
					$tool_id = $db->insert("episode_tools", $ins5);
					
					
					$need = isset($_POST['need']) ? 1:0;
					$what = getpost("what");
					$where = getpost("where");

					$ins6 = array("episode"=>$episode, "need"=>$need, "what"=>$what, "where"=>$where);
					$db->insert("episode_transport", $ins6);
					
					$archive = isset($_POST['archive']) ? 1:0;
					$serverpath = getpost("serverpath");
					$file = "";

					
					$pic = $_FILES['fileToUpload']['name'];
							 
							 $pic_loc = $_FILES['fileToUpload']['tmp_name'];
							 $folder="uploaded_files/";
							 
							 $extention = pathinfo($pic,PATHINFO_EXTENSION);
							 $newName = "channel_logo".time() .".". $extention ;
							 
							 if(move_uploaded_file($pic_loc,$folder.$newName))
							 {
								$file = $newName;
							 }
							 else
							 {
								//
							 }
					
					
					$ins7 = array("episode"=>$episode, "archive"=>$archive, "serverpath"=>$serverpath, "file"=>$file);
					$db->insert("episode_file", $ins7);
					
					$br = $db->select_one("broadcasts", "id='".$id."'");
					$channel_t = $db->select_one("channels", "id='".$br['channel']."'");
					$studio_t = $db->select_one("studios", "id='".$br['studio']."'");
					
					$reason = $show_type == 'live' ? 'Прямой эфир':'Съемки передачи';
					
					$ins_place_event = array("broadcast"=>$br['name'], "episode"=>$episode, "date_from"=>$date_from, "date_to"=>$date_to, "note"=>$description, "reason"=>$reason, "place"=>$place);
					$db->insert("place_event", $ins_place_event);
					
					$ins_montage_event = array("broadcast"=>$br['name'], "episode"=>$episode, "date_from"=>$date_from_montage, "date_to"=>$date_to_montage, "note"=>$description, "montage"=>$montage, "incharge"=>$incharge, "duration"=>$duration);
					$db->insert("montage_event", $ins_montage_event);
					
					$ins_tool_event = array("show_type"=>$show_type, "channel"=>$channel_t['name'], "studio"=>$studio_t['name'], "broadcast"=>$br['name'], "episode"=>$episode, "episode_tools_id"=>$tool_id, "date_from"=>$date_from, "date_to"=>$date_to, "need"=>$need, "incharge"=>$incharge, "where"=>$where, "reason"=>$reason, "lightning"=>$place_tech, "camera1"=>$camera1, "camera2"=>$camera2, "camera_count1"=>$camera_count1, "camera_count2"=>$camera_count2, "crane"=>$crane, "rails"=>$rails, "drone"=>$drone, "main_tool"=>$tool);
					$db->insert("tool_event", $ins_tool_event);
					
					
					
					
					redirect("episode_edit.php?c=1&id=".$episode,"js");
				}
				
				
				$br = $db->select_one("broadcasts", "id='".$id."'");
				if (count($br)==0) die();
				
				
				
				?>

               <div class="content-i">
                  <div class="content-box">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">Создать выпуск передачи</h6>
                               <div class="element-box">
                                 <form action="" method="post" enctype="multipart/form-data">
                                    <fieldset class="form-group">

                                       <legend><span>Информация о выпуске</span></legend>
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Название передачи</label>
                                                <input class="form-control" type="text" disabled value="<?php echo $br['name'];?>">
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Тема выпуска</label>
                                                <input name="title" class="form-control" type="text" required>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-3">
                                             <div class="form-group">
                                                <label for="">ID выпуска</label>
                                                <input class="form-control" type="text" disabled>
												<input name="id" value="<?php echo $id;?>" type="hidden">
                                             </div>
                                          </div>
                                          <div class="col-sm-3">
                                             <div class="form-group">
                                                <label for="">Язык</label>            
                                                <select name="language" class="form-control selectpicker" title="выберите язык">
                                                    <?php $users_list = $db->select("languages");
												   foreach($users_list as $u)
												   {?>
												   <option><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label for="">Тег</label>          
                                                <select name="tag" class="form-control selectpicker" title="выберите тег">
                                                   <?php $users_list = $db->select("tags");
												   foreach($users_list as $u)
												   {?>
												   <option><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                </select>
                                             </div>
                                          </div>
                                       </div>

                                    </fieldset>

                                    <fieldset class="form-group">

                                          <legend><span>Свойства</span></legend>
                                          <div class="row">
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label for="">Жанр</label>
                                                   <select name="genre" class="form-control selectpicker" required>
                                                      <option><?php $g = $br['genre']; echo $broadcast_genre[$g][0];?></option>
                                                     
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label for="">Тематика жанра</label>
                                                   <select name="theme" class="form-control selectpicker" title="выберите тематику">
                                                      <?php $users_list = $db->select("tags");
												   foreach($broadcast_genre[$g] as $u)
												   {?>
												   <option><?php echo $u;?></option>
                                                   <?php  } ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label for="">Хронометраж</label>
                                                   <input name="duration" class="form-control timepicker" placeholder="выберите время" type="text" value="<?php echo $br['duration'];?>">
                                                </div>
                                             </div>
                                          </div>                                     

                                    </fieldset>

                                    <fieldset class="form-group">

                                          <legend><span>Разместить в сетке</span></legend>
                                          <div class="row">
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label for="">Метод выдачи</label>               
                                                   <select name="show_type" class="form-control selectpicker" title="выберите метод">
                                                       <?php
												   foreach($broadcast_type as $u)
												   {?>
												   <option><?php echo $u;?></option>
                                                   <?php  } ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label for="">Дата выхода</label>
                                                   <input required name="dt" class="form-control datepicker" placeholder="выберите дату" type="text">
                                                </div>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label for="">Время выпуска</label>
                                                   <input required name="tm" class="form-control timepicker" placeholder="выберите время" type="text">
                                                </div>
                                             </div>
                                             <div class="col-sm-12">
                                                <div class="form-group">
                                                   <div class="checkbox">
                                                      <input type="checkbox" class="styled" id="isreserve1" value="1" name="is_reserve">
                                                      <label for="isreserve1">
                                                         добавить в резерв (если не определено время в сетке)
                                                      </label>
                                                  </div>
                                                </div>
                                             </div>
                                          </div>                                     

                                    </fieldset>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                       <li role="presentation" class="active">
                                          <a href="#members" aria-controls="members" role="tab" data-toggle="tab">Участники</a>
                                       </li>
                                       <li role="presentation">
                                          <a href="#filming" aria-controls="filming" role="tab" data-toggle="tab">Съемки</a>
                                       </li>
                                       <li role="presentation">
                                          <a href="#editing" aria-controls="editing" role="tab" data-toggle="tab">Монтаж</a>
                                       </li>
                                       <li role="presentation">
                                          <a href="#techs" aria-controls="techs" role="tab" data-toggle="tab">Техника</a>
                                       </li>
                                       <li role="presentation">
                                          <a href="#transport" aria-controls="transport" role="tab" data-toggle="tab">Транспорт</a>
                                       </li>
                                       <li role="presentation">
                                          <a href="#files" aria-controls="files" role="tab" data-toggle="tab">Файлы</a>
                                       </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                       <div role="tabpanel" class="tab-pane active" id="members">
                                          <fieldset class="form-group">
                                             <legend><span>Участники</span></legend>
                                             <div class="row">
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Ответственный</label>
                                                      <input name="incharge" class="form-control" type="text">
                                                   </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Редактор</label>
                                                      <input name="editor" value="<?php echo $br["editor"];?>" class="form-control" type="text">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Ведущий</label>
                                                      <input  name="anchor" value="<?php echo $br["anchor"];?>" class="form-control" type="text">
                                                   </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Режиссер</label>
                                                      <input name="director" value="<?php echo $br["director"];?>"  class="form-control" type="text">
                                                   </div>
                                                </div>
                                             </div>
                                             <fieldset class="form-group">
                                                <legend><span>Приглашенные участники</span></legend>
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Ф.И.О.</label>
                                                         <input  name="g1" class="form-control" type="text">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Должность</label>
                                                         <input name="w1" class="form-control" type="text">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Ф.И.О.</label>
                                                         <input name="g2" class="form-control" type="text">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Должность</label>
                                                         <input name="w2" class="form-control" type="text">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Ф.И.О.</label>
                                                         <input name="g3" class="form-control" type="text">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Должность</label>
                                                         <input name="w3" class="form-control" type="text">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Ф.И.О.</label>
                                                         <input name="g4" class="form-control" type="text">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Должность</label>
                                                         <input name="w4" class="form-control" type="text">
                                                      </div>
                                                   </div>
                                                </div>
                                             </fieldset>          
                                          </fieldset>
                                       </div>
                                       <div role="tabpanel" class="tab-pane" id="filming">
                                          <fieldset class="form-group">

                                             <legend><span>Время и место съемок</span></legend>
                                             <div class="row">
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Студия</label>               
                                                      <select name="place" class="form-control selectpicker" title="выберите студию">
                                                        <?php $users_list = $db->select("place");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>"><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Дата съемок (от)</label>
                                                      <input name="date_from_date" class="form-control datepicker" placeholder="выберите дату" type="text">
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Время съемок (от)</label>
                                                      <input name="date_from_time" class="form-control timepicker" placeholder="выберите время" type="text">
                                                   </div>
                                                </div>
                                             </div> 
                                             <div class="row">
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Примечание</label>
                                                      <textarea name="description" class="form-control" rows="8"></textarea>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Дата съемок (до)</label>
                                                      <input name="date_to_date" class="form-control datepicker" placeholder="выберите дату" type="text">
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Время съемок (до)</label>
                                                      <input name="date_to_time" class="form-control timepicker" placeholder="выберите время" type="text">
                                                   </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Допольнительный свет</label>               
                                                      <select name="place_tech" class="form-control selectpicker" title="выберите свет">
                                                         
														 <?php $users_list = $db->select("tools");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>"><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                         
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>                                     

                                       </fieldset>
                                       </div>
                                       <div role="tabpanel" class="tab-pane" id="editing">
                                          <fieldset class="form-group">

                                             <legend><span>Заявка на монтаж</span></legend>
                                             <div class="row">
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">АВМ №</label>               
                                                      <select name="montage" class="form-control selectpicker" title="выберите АВМ">
                                                         <?php $users_list = $db->select("montage");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u["id"];?>"><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Дата монтажа (от)</label>
                                                      <input name="montage_date_from_date" class="form-control datepicker" placeholder="выберите дату" type="text">
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Время монтажа (от)</label>
                                                      <input name = "montage_date_from_time" class="form-control timepicker" placeholder="выберите время" type="text">
                                                   </div>
                                                </div>
                                             </div> 
                                             <div class="row">
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Формат источника</label>
                                                      <select name="import" class="form-control selectpicker" title="выберите источник">
                                                          <?php 
												   foreach($file_types as $u)
												   {?> <option><?php echo $u;?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Дата монтажа (до)</label>
                                                      <input  name = "montage_date_to_date" class="form-control datepicker" placeholder="выберите дату" type="text">
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Время монтажа (до)</label>
                                                      <input  name = "montage_date_to_time" class="form-control timepicker" placeholder="выберите время" type="text">
                                                   </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Выходной формат</label>   
                                                      <select name="export" class="form-control selectpicker" title="выберите формат">
                                                          <?php 
												   foreach($file_types as $u)
												   {?> <option><?php echo $u;?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>                                     

                                          </fieldset>
                                       </div>
                                       <div role="tabpanel" class="tab-pane" id="techs">
                                          <fieldset class="form-group">
                                             <div class="row">
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label for="">Камера</label>               
                                                      <select name="camera1" class="form-control selectpicker" title="выберите камеру">
                                                        <?php $users_list = $db->select("tools", "is_camera='1'");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>"><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-2">
                                                   <div class="form-group">
                                                      <label for="">Количество</label>
                                                      <select name="camera_count1" class="form-control selectpicker" title="выберите кол-во">
                                                         <option>1</option>
                                                         <option>2</option>
                                                         <option>3</option>
                                                         <option>4</option>
                                                         <option>5</option>
                                                         <option>6</option>
                                                         <option>7</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-1">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input name="crane" type="checkbox" class="styled" id="crane" value="option1">
                                                         <label name="crane" for="crane">Кран</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-1">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input name="rails"  type="checkbox" class="styled" id="rails" value="option1">
                                                         <label  for="rails">Рельсы</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-1">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input name="drone"  type="checkbox" class="styled" id="drone" value="option1">
                                                         <label for="drone">Дрон</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-1">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input name="steadycam" type="checkbox" class="styled" id="steadycam" value="option1">
                                                         <label for="steadycam">Стэдикам</label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div> 
                                             <div class="row">
                                                <div class="col-sm-4">
                                                   <div class="form-group">
                                                      <label for="">Доп.камеры</label>
                                                      <select name="camera2" class="form-control selectpicker" title="выберите камеру">
                                                          <?php $users_list = $db->select("tools", "is_camera='1'");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>"><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-2">
                                                   <div class="form-group">
                                                      <label for="">Количество</label>
                                                      <select name="camera_count2" class="form-control selectpicker" title="выберите кол-во">
                                                         <option>1</option>
                                                         <option>2</option>
                                                         <option>3</option>
                                                         <option>4</option>
                                                         <option>5</option>
                                                         <option>6</option>
                                                         <option>7</option>
                                                      </select>
                                                   </div>
                                                </div>                                          
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">ПТС Форд</label>
                                                      <select name="tool" class="form-control selectpicker" title="выберите источник">
                                                        <?php $users_list = $db->select("tools");
												   foreach($users_list as $u)
												   {?>
												   <option value="<?php echo $u['id'];?>"><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>                                         
                                             </div>
                                             <div class="row">                               
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Примечание</label>
                                                      <textarea name="tool_desc" class="form-control" rows="8"></textarea>
                                                   </div>
                                                </div>
                                             </div>                                       

                                          </fieldset>
                                       </div>
                                       <div role="tabpanel" class="tab-pane" id="transport">
                                          <fieldset class="form-group">
                                             <div class="row">
                                                <div class="col-sm-2">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input name="need" type="checkbox" class="styled" id="editable2" value="option1">
                                                         <label for="editable2">Транспорт требуется</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-10">
                                                   <div class="form-group">
                                                      <label for="">Место проведения съемок - Направление</label>               
                                                      <input name="where" class="form-control" type="text">
                                                   </div>
                                                </div>                                         
                                             </div>                                              
                                             <div class="row">                               
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Примечание</label>
                                                      <textarea name="what" class="form-control" rows="8"></textarea>
                                                   </div>
                                                </div>
                                             </div>
                                          </fieldset>
                                       </div>
                                       <div role="tabpanel" class="tab-pane" id="files">
                                          <fieldset class="form-group">
                                             <div class="row">
                                                <div class="col-sm-2">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="servercheck" value="servercheck">
                                                         <label for="servercheck">файл в наличии</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="form-group">
                                                      <label for="">Путь</label>               
                                                      <input name="serverpath" class="form-control" type="text">
                                                   </div>
                                                </div>                                         
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-2">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input type="checkbox" class="styled" id="scene_plan" value="option1">
                                                         <label for="scene_plan">Сценарный план</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-10">
                                                   <div class="form-group">
                                                      <label for="">Укажите файл</label>
                                                      <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                         <div class="form-control" data-trigger="fileinput">
                                                            <span class="dp-icon dp-icon-file fileinput-exists"></span>
                                                            <span class="fileinput-filename"></span>
                                                         </div>
                                                         <span class="input-group-addon btn btn-default btn-file">
                                                            <span class="fileinput-new">выбрать</span>
                                                            <span class="fileinput-exists">Изменить</span>
                                                            <input type="file" name='fileToUpload'>
                                                         </span>
                                                         <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Удалить</a>
                                                      </div>
                                                   </div>
                                                </div>                                         
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-2">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input name="archive" type="checkbox" class="styled" id="archive" value="option1">
                                                         <label for="archive">Внести материал в архив</label>
                                                      </div>
                                                   </div>
                                                </div>                                        
                                             </div>
                                          </fieldset>
                                       </div>
                                    </div>

                                    <div class="form-buttons-w">
                                       <button class="btn btn-primary" type="submit">Создать</button>
                                       <button class="btn btn-default" type="button" onclick="location.href = 'broadcasts.php'">Отмена</button>
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
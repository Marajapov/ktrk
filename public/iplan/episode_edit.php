<?php 
$document_db = "episodes";
$document_read = $document_write = $document_execute = $document_delete = 0;
include_once 'usercontrol.php'; 
if (!$document_execute){echo "У вас нет разрешения на доступ к этой странице. Обратитесь к администратору."; die();}
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
				
				$id=0;
				  $error_fl = 0;
				  $error_msg = "";
				
				$id = 0;
				
				if (isset($_GET['c'])){
					$error_fl = 1;
					$error_msg = "Вы успешно добавили выпуск передачи";
				}
				
				if (isset($_GET['id'])) $id = (int)getget('id');
				if (isset($_POST['id'])) $id = (int)getpost('id');
				if ($id==0) die();
				
				$episode = $db->select_one("episodes", "id='".$id."'");
				
				if (isset($_POST['id'])){
					
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
					$ins = array("title"=>$title, "language"=>$language, "tag"=>$tag, "theme"=>$theme, "duration"=>$duration, "durationMinute"=>$durationMinute, "show_type"=>$show_type, "dt"=>$from, "is_reserve"=>$is_reserve, "incharge"=>$incharge, "editor"=>$editor, "anchor"=>$anchor, "director"=>$director);
					
					
					
					$db->update("episodes", $ins, "id='".$id."'");
					
					$g1 = getpost("g1");
					$g2 = getpost("g2");
					$g3 = getpost("g3");
					$g4 = getpost("g4");
					$w1 = getpost("w1");
					$w2 = getpost("w2");
					$w3 = getpost("w3");
					$w4 = getpost("w4");
					$ins2 = array("g1"=>$g1, "g2"=>$g2, "g3"=>$g3, "g4"=>$g4, "w1"=>$w1, "w2"=>$w2, "w3"=>$w3, "w4"=>$w4);
					$db->update("episode_guests", $ins2, "episode='".$id."'");
					
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

					$ins3 = array("place"=>$place, "date_from"=>$date_from, "date_to"=>$date_to, "description"=>$description, "tech"=>$place_tech);
					$db->update("episode_place", $ins3, "episode='".$id."'");
					
					
					$montage = getpost("montage");
					$montage_date_from_date = getpost("montage_date_from_date");
					$montage_date_from_time = getpost("montage_date_from_time");
					
					$montage_date_to_date = getpost("montage_date_to_date");
					$montage_date_to_time = getpost("montage_date_to_time");
					
					$montage_date_from_date = date("Y/m/d", strtotime($montage_date_from_date));
					$date_from = $montage_date_from_date ." ".$montage_date_from_time;
					
					$montage_date_to_date = date("Y/m/d", strtotime($montage_date_to_date));
					$date_to = $montage_date_to_date ." ".$montage_date_to_time;
					
					$import = getpost("import");
					
					$export = getpost("export");

					$ins4 = array("montage"=>$montage, "date_from"=>$date_from, "date_to"=>$date_to, "import"=>$import, "export"=>$export);
					$db->update("episode_montage", $ins4, "episode='".$id."'");
					
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

					$ins5 = array( "camera1"=>$camera1, "camera2"=>$camera2, "camera_count1"=>$camera_count1, "camera_count2"=>$camera_count2, "crane"=>$crane, "rails"=>$rails, "drone"=>$drone, "steadycam"=>$steadycam, "tool"=>$tool, "tool_desc"=>$tool_desc);
					$db->update("episode_tools", $ins5, "episode='".$id."'");
					
					
					$need = isset($_POST['need']) ? 1:0;
					$what = getpost("what");
					$where = getpost("where");

					$ins6 = array("need"=>$need, "what"=>$what, "where"=>$where);
					$db->update("episode_transport", $ins6, "episode='".$id."'");
					
					$archive = isset($_POST['archive']) ? 1:0;
					$serverpath = getpost("serverpath");
					$serverpath = getpost("serverpath");

					$ins7 = array( "archive"=>$archive, "serverpath"=>$serverpath);
					$db->update("episode_file", $ins7, "episode='".$id."'");
					$error_fl = 1;
					$error_msg = "Вы успешно обновили данные";
					
					$br = $db->select_one("broadcasts", "id='".$episode['father']."'");
					
					$reason = $show_type == 'live' ? 'Прямой эфир':'Съемки передачи';
					
					
					
					$ins_place_event = array("broadcast"=>$br['name'], "episode"=>$id, "date_from"=>$date_from, "date_to"=>$date_to, "note"=>$description, "reason"=>$reason, "place"=>$place);
					$db->insert("place_event", $ins_place_event);
					
					$ins_montage_event = array("broadcast"=>$br['name'], "episode"=>$id, "date_from"=>$date_from_montage, "date_to"=>$date_to_montage, "note"=>$description, "montage"=>$montage, "incharge"=>$incharge, "duration"=>$duration);
					$db->insert("montage_event", $ins_montage_event);
					
					$ins_tool_event = array("broadcast"=>$br['name'], "episode"=>$id, "episode_tools_id"=>$tool_id, "date_from"=>$date_from, "date_to"=>$date_to, "need"=>$need, "incharge"=>$incharge, "where"=>$where, "reason"=>$reason, "lightning"=>$place_tech, "camera1"=>$camera1, "camera2"=>$camera2, "camera_count1"=>$camera_count1, "camera_count2"=>$camera_count2, "crane"=>$crane, "rails"=>$rails, "drone"=>$drone, "extra_tool"=>$tool);
					$db->insert("tool_event", $ins_tool_event);
					
				}
				
				
				$episode = $db->select_one("episodes", "id='".$id."'");
				
				$br = $db->select_one("broadcasts", "id='".$episode['father']."'");
				
				$episode_guests = $db->select_one("episode_guests", "episode='".$id."'");
				$episode_place = $db->select_one("episode_place", "episode='".$id."'");
				$episode_montage = $db->select_one("episode_montage", "episode='".$id."'");
				$episode_tools = $db->select_one("episode_tools", "episode='".$id."'");
				$episode_transport = $db->select_one("episode_transport", "episode='".$id."'");
				$episode_file = $db->select_one("episode_file", "episode='".$id."'");
				
				?>

               <div class="content-i">
                  <div class="content-box">
				  
				  <?php if ($error_fl > 0 ) {
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
                
				  <?php } ?>
				  
				  
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">Редактировать выпуск передачи</h6>
                               <div class="element-box">
                                 <form action="" method="post">
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
                                                <input name="title" class="form-control" type="text"  value="<?php echo $episode['title'];?>">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-3">
                                             <div class="form-group">
                                                <label for="">ID выпуска</label>
                                                <input class="form-control" type="text" disabled value="<?php echo $episode['id'];?>">
                                             </div>
                                          </div>
                                          <div class="col-sm-3">
                                             <div class="form-group">
                                                <label for="">Язык</label>            
                                                <select name="language" class="form-control selectpicker" title="выберите язык">
                                                    <?php $users_list = $db->select("languages");
												   foreach($users_list as $u)
												   {?>
												   <option <?php if ($episode['language']== $u['name']) echo 'selected';?>><?php echo $u['name'];?></option>
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
												   <option <?php if ($episode['tag']== $u['name']) echo 'selected';?>><?php echo $u['name'];?></option>
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
                                                   <select name="genre" class="form-control selectpicker" >
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
												   <option <?php if ($episode['theme']==$u) echo 'selected';?>><?php echo $u;?></option>
                                                   <?php  } ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label for="">Хронометраж</label>
                                                   <input name="duration" class="form-control timepicker" placeholder="выберите время" type="text" value="<?php echo $episode['duration'];?>">
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
												   <option <?php if ($episode['show_type']== $u) echo 'selected';?>><?php echo $u;?></option>
                                                   <?php  } ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label for="">Дата выхода</label>
                                                   <input id="date_date_date"  name="dt" class="form-control datepicker" placeholder="выберите дату" type="text" value="<?php echo date("d.m.Y", strtotime($episode['dt']));?>">
                                                </div>
                                             </div>
                                             <div class="col-sm-4">
                                                <div class="form-group">
                                                   <label for="">Время выпуска</label>
                                                   <input id="date_date_time"  name="tm" class="form-control timepicker" placeholder="выберите время" type="text" value="<?php echo date("H:i", strtotime($episode['dt']));?>">
                                                </div>
                                             </div>
											 
											 <script>
											$( function() {
													 //$('#isreserve1').val($(this).is(':checked'));

													$('#isreserve1').change(function() {
														if($(this).is(":checked")) {
															$('#date_date_date').val('00.00.0000');
															$('#date_date_time').val('');
														}
														else{
															
														}        
													});
											});</script>
											 
											 
                                             <div class="col-sm-12">
                                                <div class="form-group">
                                                   <div class="checkbox">
                                                      <input type="checkbox" class="styled" id="isreserve1" value="1" name="is_reserve" <?php if($episode['is_reserve']) echo 'checked';?>>
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
                                                      <input name="incharge" class="form-control" type="text" value="<?php echo $episode['incharge'];?>">
                                                   </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Редактор</label>
                                                      <input name="editor" value="<?php echo $episode["editor"];?>" class="form-control" type="text">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Ведущий</label>
                                                      <input  name="anchor" value="<?php echo $episode["anchor"];?>" class="form-control" type="text">
                                                   </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Режиссер</label>
                                                      <input name="director" value="<?php echo $episode["director"];?>"  class="form-control" type="text">
                                                   </div>
                                                </div>
                                             </div>
                                             <fieldset class="form-group">
                                                <legend><span>Приглашенные участники</span></legend>
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Ф.И.О.</label>
                                                         <input  name="g1" class="form-control" type="text" value="<?php echo $episode_guests["g1"];?>" >
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Должность</label>
                                                         <input name="w1" class="form-control" type="text" value="<?php echo $episode_guests["w1"];?>" >
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Ф.И.О.</label>
                                                         <input name="g2" class="form-control" type="text" value="<?php echo $episode_guests["g2"];?>" >
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Должность</label>
                                                         <input name="w2" class="form-control" type="text" value="<?php echo $episode_guests["w2"];?>" >
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Ф.И.О.</label>
                                                         <input name="g3" class="form-control" type="text" value="<?php echo $episode_guests["g3"];?>" >
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Должность</label>
                                                         <input name="w3" class="form-control" type="text" value="<?php echo $episode_guests["w3"];?>" >
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Ф.И.О.</label>
                                                         <input name="g4" class="form-control" type="text" value="<?php echo $episode_guests["g4"];?>" >
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label for="">Должность</label>
                                                         <input name="w4" class="form-control" type="text" value="<?php echo $episode_guests["w4"];?>" >
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
												   <option <?php if($u['id']==$episode_place['place']) echo "selected"; ?> value="<?php echo $u['id'];?>" ><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Дата съемок (от)</label>
                                                      <input name="date_from_date" class="form-control datepicker" placeholder="выберите дату" type="text" value="<?php echo date('d.m.Y', strtotime($episode_place["date_from"]));?>">
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Время съемок (от)</label>
                                                      <input name="date_from_time" class="form-control timepicker" placeholder="выберите время" type="text" value="<?php echo date('H:i', strtotime($episode_place["date_from"]));?>">
                                                   </div>
                                                </div>
                                             </div> 
                                             <div class="row">
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Примечание</label>
                                                      <textarea name="description" class="form-control" rows="8"><?php echo $episode_place["description"];?></textarea>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Дата съемок (до)</label>
                                                      <input name="date_to_date" class="form-control datepicker" placeholder="выберите дату" type="text" value="<?php echo date('d.m.Y', strtotime($episode_place["date_to"]));?>">
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Время съемок (до)</label>
                                                      <input name="date_to_time" class="form-control timepicker" placeholder="выберите время" type="text" value="<?php echo date('H:i', strtotime($episode_place["date_to"]));?>">
                                                   </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Допольнительный свет</label>               
                                                      <select name="place_tech" class="form-control selectpicker" title="выберите свет">
                                                         
														 <?php $users_list = $db->select("tools");
												   foreach($users_list as $u)
												   {?>
												   <option <?php echo $u['id'] == $episode_place['tech']? 'selected':'';?> value="<?php echo $u['id'];?>"><?php echo $u['name'];?></option>
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
												   <option <?php echo $u['id'] == $episode_montage['montage']? 'selected':'';?>  value="<?php echo $u["id"];?>"><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Дата монтажа (от)</label>
                                                      <input name="montage_date_from_date" class="form-control datepicker" placeholder="выберите дату" type="text" value="<?php echo date('d.m.Y', strtotime($episode_montage["date_from"]));?>">
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Время монтажа (от)</label>
                                                      <input name = "montage_date_from_time" class="form-control timepicker" placeholder="выберите время" type="text" value="<?php echo date('H:i', strtotime($episode_montage["date_from"]));?>">
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
												   {?> <option <?php echo $u == $episode_montage['import']? 'selected':'';?> ><?php echo $u;?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Дата монтажа (до)</label>
                                                      <input  name = "montage_date_to_date" class="form-control datepicker" placeholder="выберите дату" type="text" value="<?php echo date('d.m.Y', strtotime($episode_montage["date_to"]));?>">
                                                   </div>
                                                </div>
                                                <div class="col-sm-3">
                                                   <div class="form-group">
                                                      <label for="">Время монтажа (до)</label>
                                                      <input  name = "montage_date_to_time" class="form-control timepicker" placeholder="выберите время" type="text" value="<?php echo date('H:i', strtotime($episode_montage["date_to"]));?>">
                                                   </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Выходной формат</label>   
                                                      <select name="export" class="form-control selectpicker" title="выберите формат">
                                                          <?php 
												   foreach($file_types as $u)
												   {?> <option <?php echo $u == $episode_montage['export']? 'selected':'';?>><?php echo $u;?></option>
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
												   <option value="<?php echo $u['id'];?>" <?php if ($u['id'] == $episode_tools['camera1']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-2">
                                                   <div class="form-group">
                                                      <label for="">Количество</label>
                                                      <select name="camera_count1" class="form-control selectpicker" title="выберите кол-во">
                                                          <?php 
														for ($i=1; $i<10; $i++) {
														?>
														<option <?php if ($i == $episode_tools['camera_count1']) echo "selected";?>><?php echo $i;?></option>
														<?php } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-1">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input name="crane" type="checkbox" class="styled" id="crane" value="option1" <?php echo $episode_tools['crane']? 'checked':'';?>>
                                                         <label name="crane" for="crane">Кран</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-1">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input name="rails"  type="checkbox" class="styled" id="rails" value="option1" <?php echo $episode_tools['crane']? 'checked':'';?>>
                                                         <label  for="rails">Рельсы</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-1">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input name="drone"  type="checkbox" class="styled" id="drone" value="option1" <?php echo $episode_tools['crane']? 'checked':'';?>>
                                                         <label for="drone">Дрон</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-1">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input name="steadycam" type="checkbox" class="styled" id="steadycam" value="option1" <?php echo $episode_tools['crane']? 'checked':'';?>>
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
												   <option value="<?php echo $u['id'];?>" <?php if ($u['id'] == $episode_tools['camera2']) echo "selected";?>><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-sm-2">
                                                   <div class="form-group">
                                                      <label for="">Количество</label>
                                                      <select name="camera_count2" class="form-control selectpicker" title="выберите кол-во">
                                                        <?php 
														for ($i=1; $i<10; $i++) {
														?>
														<option <?php if ($i == $episode_tools['camera_count2']) echo "selected";?>><?php echo $i;?></option>
														<?php } ?>
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
												   <option  <?php echo $episode_tools['tool']=$u['id']? 'selected':'';?> value="<?php echo $u['id'];?>"><?php echo $u['name'];?></option>
                                                   <?php  } ?>
                                                      </select>
                                                   </div>
                                                </div>                                         
                                             </div>
                                             <div class="row">                               
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Примечание</label>
                                                      <textarea name="tool_desc" class="form-control" rows="8"><?php echo $episode_tools['tool_desc'];?></textarea>
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
                                                         <input name="need" type="checkbox" class="styled" id="editable2" value="option1"  <?php echo $episode_transport['need']? 'checked':'';?>>
                                                         <label for="editable2">Транспорт требуется</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-10">
                                                   <div class="form-group">
                                                      <label for="">Место проведения съемок - Направление</label>               
                                                      <input name="where" class="form-control" type="text" value="<?php echo $episode_transport['where'];?>">
                                                   </div>
                                                </div>                                         
                                             </div>                                              
                                             <div class="row">                               
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                      <label for="">Примечание</label>
                                                      <textarea name="what" class="form-control" rows="8"><?php echo $episode_transport['what'];?></textarea>
                                                   </div>
                                                </div>
                                             </div>
                                          </fieldset>
                                       </div>
                                       <div role="tabpanel" class="tab-pane" id="files">
                                          <fieldset class="form-group">
                                             <div class="row">
                                                
                                                <div class="col-sm-10">
                                                    <div class="form-group">
                                                      <label for="">Путь</label>               
                                                      <input name="serverpath" class="form-control" type="text" value="<?php echo stripslashes($episode_file['serverpath']);?>">
                                                   </div>
                                                </div>                                         
                                             </div>
                                                                    
                                            
                                             <div class="row">
                                                <div class="col-sm-2">
                                                   <div class="form-group">
                                                      <div class="checkbox">
                                                         <input name="archive" type="checkbox" class="styled" id="archive" value="option1" <?php echo $episode_file['archive']? 'checked':'';?>>
                                                         <label for="archive">Внести материал в архив</label>
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
            </div>
         </div>
      </div>
	  <?php include 'include.js.php';?>
   </body>
</html>
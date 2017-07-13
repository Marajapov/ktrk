<?php include_once 'usercontrol.php'; ?>
<!DOCTYPE html>
<html>
   <head>
      <?php include 'content_header.php'; ?>
   </head>
   <body>
   <script>
		$film_id = 0;
   </script>
      <div class="all-wrapper">
         <div class="layout-w">
            <div class="menu-w menu-activated-on-click">
               
               <?php include 'content_left.php'; ?>
            </div>
            <div class="content-w">
			
				<?php include 'content_top.php'; ?>
				
               <div class="content-i">
                  <div class="content-box">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">Фильмотека</h6>

                              <div class="element-box">
							  
							  
							  <?php 
							  
							   $search_key = $search_production = $search_genre = '';
											if (isset($_GET['key'])) $search_key = trim(getget('key'));
											if (isset($_GET['genre'])) 	 $search_genre = trim(getget('genre'));
											if (isset($_GET['production'])) $search_production = trim(getget('production'));
											 
											 $extra_q = "";
											 if (strlen($search_key)>0) $extra_q .= " AND id = '".$search_key."'";
											 if (strlen($search_production)>0) $extra_q .= " AND company like '%".$search_production."%'";
											 if (strlen($search_genre)>0) $extra_q .= " AND genre like '%".$search_genre."%'";
											 
											 $all_film_list = $db->select("films", "1".$extra_q);
											 $film_list = $db->select("films", "type='0'".$extra_q);
											 $film_2_list = $db->select("films", "type='1'".$extra_q);
											 $film_3_list = $db->select("films", "type='2'".$extra_q);
											 
							  ?>
							  
							  
                                 <!-- Nav tabs -->
                                 <ul class="nav nav-tabs" role="tablist">
                                    <?php if(strlen($extra_q)>0) { ?>
									<li role="presentation" class="active">
                                       <a href="#allfilms" aria-controls="allfilms" role="tab" data-toggle="tab">Поиск<!--(<?php //echo count($all_film_list);?>)--></a>
                                    </li>
									<?php } ?>
									<?php if(strlen($extra_q)==0) { ?>
									<li role="presentation" class="active">
                                       <a href="#films" aria-controls="films" role="tab" data-toggle="tab">Фильмы</a>
                                    </li>
                                    <li role="presentation">
                                       <a href="#cartoons" aria-controls="cartoons" role="tab" data-toggle="tab">Мультфильмы</a>
                                    </li>
									<li role="presentation">
                                       <a href="#serial" aria-controls="serial" role="tab" data-toggle="tab">Сериалы</a>
                                    </li>
									<?php } ?>
                                 </ul>

                                 <!-- Tab panes -->
								 <div id="" style="overflow-x: hidden; overflow-y:scroll; height:230px;">
                                 <div class="tab-content">
                                    
									<?php if(strlen($extra_q)>0) { ?>
									
									<div role="tabpanel" class="tab-pane" id="allfilms">
                                       <div class="table-responsive table-main">
                                          <table class="table table-lightborder">
                                             <thead>
                                                <tr>
                                                   <th>Название</th>
                                                   <th>Хронометраж</th>
                                                   <th>Жанр</th>
                                                   <th>Производство</th>
                                                   <th>Язык</th>
                                                   <th>ID</th>
                                                   <th>Создан</th>
                                                </tr>
                                             </thead>
                                             <tbody>
											 <?php 
											 
											 foreach($all_film_list as $f)
											 {?>
                                                <tr onclick="selectFilm(<?php echo $f['id'];?>)" id="broadcast_row<?php echo $f['id'];?>" class="clickable-row" >
                                                   <td class="nowrap"><?php echo $f['name']; ?></td>         
                                                   <td class="nowrap"><?php echo $f['duration']; ?></td>         
                                                   <td><?php echo $f['genre']; ?></td>
                                                   <td><?php echo $f['company']; ?></td>
                                                   <td><?php echo $f['language']; ?></td>
                                                   <td><?php echo $f['id']; ?></td>
                                                   <td><?php echo date("d.m.Y", strtotime($f['added_dt'])); ?></td>
                                                </tr>
                                               <?php } ?>                                    
                                             </tbody>
                                          </table>
                                       </div>
                                       
                                    </div>
									
									<?php } ?>
									
									
									<div role="tabpanel" class="tab-pane active" id="films">
                                       <div class="table-responsive table-main">
                                          <table class="table table-lightborder">
                                             <thead>
                                                <tr>
                                                   <th>Название</th>
                                                   <th>Хронометраж</th>
                                                   <th>Жанр</th>
                                                   <th>Производство</th>
                                                   <th>Язык</th>
                                                   <th>ID</th>
                                                   <th>Создан</th>
                                                </tr>
                                             </thead>
                                             <tbody>
											 
											 <?php 
											 
											
											 foreach($film_list as $f)
											 {?>
                                                <tr onclick="selectFilm(<?php echo $f['id'];?>)" id="broadcast_row<?php echo $f['id'];?>" class="clickable-row" >
                                                   <td class="nowrap"><?php echo $f['name']; ?></td>         
                                                   <td class="nowrap"><?php echo $f['duration']; ?></td>         
                                                   <td><?php echo $f['genre']; ?></td>
                                                   <td><?php echo $f['company']; ?></td>
                                                   <td><?php echo $f['language']; ?></td>
                                                   <td><?php echo $f['id']; ?></td>
                                                   <td><?php echo date("d.m.Y", strtotime($f['added_dt'])); ?></td>
                                                </tr>
											 <?php } ?>                               
                                             </tbody>
                                          </table>
                                       </div>
                                       
                                    </div>
									

                                    <div role="tabpanel" class="tab-pane" id="cartoons">
                                       <div class="table-responsive table-main">
                                          <table class="table table-lightborder">
                                             <thead>
                                                <tr>
                                                   <th>Название</th>
                                                   <th>Хронометраж</th>
                                                   <th>Жанр</th>
                                                   <th>Производство</th>
                                                   <th>Язык</th>
                                                   <th>ID</th>
                                                   <th>Создан</th>
                                                </tr>
                                             </thead>
                                             <tbody>
											 <?php 
											 
											 foreach($film_2_list as $f)
											 {?>
                                                <tr onclick="selectFilm(<?php echo $f['id'];?>)" id="broadcast_row<?php echo $f['id'];?>" class="clickable-row" >
                                                   <td class="nowrap"><?php echo $f['name']; ?></td>         
                                                   <td class="nowrap"><?php echo $f['duration']; ?></td>         
                                                   <td><?php echo $f['genre']; ?></td>
                                                   <td><?php echo $f['company']; ?></td>
                                                   <td><?php echo $f['language']; ?></td>
                                                   <td><?php echo $f['id']; ?></td>
                                                   <td><?php echo date("d.m.Y", strtotime($f['added_dt'])); ?></td>
                                                </tr>
                                               <?php } ?>                                    
                                             </tbody>
                                          </table>
                                       </div>
                                       
                                    </div>
									
									<div role="tabpanel" class="tab-pane" id="serial">
                                       <div class="table-responsive table-main">
                                          <table class="table table-lightborder">
                                             <thead>
                                                <tr>
                                                   <th>Название</th>
                                                   <th>Хронометраж</th>
                                                   <th>Жанр</th>
                                                   <th>Производство</th>
                                                   <th>Язык</th>
                                                   <th>ID</th>
                                                   <th>Создан</th>
                                                </tr>
                                             </thead>
                                             <tbody>
											 <?php 
											 
											 foreach($film_3_list as $f)
											 {?>
                                                <tr onclick="selectFilm(<?php echo $f['id'];?>)" id="broadcast_row<?php echo $f['id'];?>" class="clickable-row" >
                                                   <td class="nowrap"><?php echo $f['name']; ?></td>         
                                                   <td class="nowrap"><?php echo $f['duration']; ?></td>         
                                                   <td><?php echo $f['genre']; ?></td>
                                                   <td><?php echo $f['company']; ?></td>
                                                   <td><?php echo $f['language']; ?></td>
                                                   <td><?php echo $f['id']; ?></td>
                                                   <td><?php echo date("d.m.Y", strtotime($f['added_dt'])); ?></td>
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
                        </div>
                     </div>
                     <script src="films.js"></script>
                     <div id="tableEvents" class="row" style="display: none;">
					 
                     </div>

                  </div>
                  <div class="content-panel">
                     <div class="element-wrapper">
                        <h6 class="element-header">Действия</h6>
                        <div class="element-box-tp">
                           <div class="el-buttons-list full-width">
                              <a class="btn btn-default" href="film_add.php">
                                 <span>Добавить</span>
                              </a>
                              <a id="btn_edit_broadcast" class="btn btn-default"  style="display:none" onclick="go(1)" href="javascript:void(0);">
                                 <span>Редактировать</span>
                              </a>
                              <a id="btn_delete_broadcast" class="btn btn-default" style="display:none" onclick="go(2)" href="javascript:void(0);" >
                                 <span>Удалить</span>
                              </a>
                              
                           </div>
                        </div>
                     </div>
                     <div class="element-wrapper">
                        <h6 class="element-header">Поиск по фильмотеке</h6>
                        <div class="element-box-tp">
                           <form action="" method='get'>
                              <div class="form-group">
                                 <input type="text" name="key" class="form-control" placeholder="название или ID">
                              </div> 
                              <div class="form-group">
                                 <select name="genre" id="search_by_genre" class="form-control selectpicker" title="по жанру">
                                    <?php foreach($film_genre as $fg) {?>
									<option><?php echo $fg; ?></option>
                                    <?php } ?>
                                 </select>
                              </div>  
                              <div class="form-group">
                                 <select name="production" id="search_by_country" class="form-control selectpicker" title="по производителю">
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
								 <input type="hidden" name="a" value="1">
                              </div>
                              <div class="form-group">
                                 <button class="btn btn-primary">
                                    Поиск
                                 </button>
                              </div>   
                           </form>
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
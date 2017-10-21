<?php 
$document_db = "broadcasts";
$document_type_count=4;
$document_read = $document_write = $document_execute = $document_delete = 0;
$document_type2_read = $document_type2_write = $document_type2_execute = $document_type2_delete = 0;
$document_type3_read = $document_type3_write = $document_type3_execute = $document_type3_delete = 0;
$document_type4_read = $document_type4_write = $document_type4_execute = $document_type4_delete = 0;
include_once 'usercontrol.php'; 
if (!$document_read) {echo "У вас нет разрешения на доступ к этой странице. Обратитесь к администратору."; die();}
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
					$channels = make_channels_list($auth_user);
					$all = make_broadcast_list($auth_user);
					//$all = $db->select("broadcasts", "status>'0' and channel in (".$auth_user['channels'].")"); // broadcasts.STATUS: 0 - delete 1 - actual 2- archive 3-concert 4 - news
					//$all_archive = $db->select("broadcasts", "status='2'");
					//$all_concert = $db->select("broadcasts", "status='3'");
					//$all_news = $db->select("broadcasts", "status='4'");
					$studios = $db->select("studios");
					$first_channel = count($channels)>0 ? $channels[0]['id'] : 0;
					
			   ?>
			   <script src="broadcasts.js"></script>
			   <script>
				var broadcast_id = 0;
				var channel_id = <?php echo $first_channel;?>;
				var result = '';
				var broadcast_genre_array = <?php echo json_encode($broadcast_genre); ?>;
				var studios_array = <?php echo json_encode($studios); ?>;
				var all_array = <?php echo json_encode($all); ?>;
				
				
				$( function() {
					
					make_broadcasts();
					$('input[type=radio][name=channels]').change(function() {
						channel_id = this.value;
						make_broadcasts();
					});
					
					$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
					  $('#tableEvents').html();
					  $( "#tableEvents" ).css({"display": "none"});
					});
					
				});
				
				
				
				</script>

			   <div class="content-i">
                  <div class="content-box">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">Каталог передач</h6>

                              <div class="element-box">
                                 <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                       <a href="#peredachi" aria-controls="peredachi" role="tab" data-toggle="tab">Передачи</a>
                                    </li>
                                    <li role="presentation">
                                       <a href="#archive" aria-controls="archive" role="tab" data-toggle="tab">Архив передач</a>
                                    </li>
                                    <li role="presentation">
                                       <a href="#shows" aria-controls="shows" role="tab" data-toggle="tab">Концерты</a>
                                    </li>
                                    <li role="presentation">
                                       <a href="#events" aria-controls="events" role="tab" data-toggle="tab">События</a>
                                    </li>
                                 </ul>
								 <div id="" style="overflow-x: hidden; overflow-y:scroll; height:230px;">
                                 
								 <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="peredachi">
                                       <div class="table-responsive table-main">
                                          <table class="table table-lightborder">
                                             <thead>
                                                <tr>
                                                   <th>Название</th>
                                                   <th>Хронометраж</th>
                                                   <th>Редакция</th>
                                                   <th>Жанр</th>
                                                   <th>Язык</th>
                                                   <th>ID</th>
                                                   <th>Создан</th>
                                                   <th>Изменен</th>
                                                </tr>
                                             </thead>
                                             <tbody id="broadcast_actual">
                                                <tr>
                                                   <td class="nowrap">Ой Ордо</td>         
                                                   <td class="nowrap">02:10</td>         
                                                   <td>СЭИП</td>
                                                   <td>социальные</td>
                                                   <td>кыргызский</td>
                                                   <td>04</td>
                                                   <td>25.08.2013</td>
                                                   <td>25.08.2013</td>
                                                </tr>                                                                                         
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="archive">
                                       <div class="table-responsive table-main">
                                          <table class="table table-lightborder">
                                             <thead>
                                                <tr>
                                                   <th>Название</th>
                                                   <th>Хронометраж</th>
                                                   <th>Редакция</th>
                                                   <th>Жанр</th>
                                                   <th>Язык</th>
                                                   <th>ID</th>
                                                   <th>Создан</th>
                                                   <th>Изменен</th>
                                                </tr>
                                             </thead>
                                             <tbody id="broadcast_archive">
                                                <tr>
                                                   <td class="nowrap">Ой Ордо</td>         
                                                   <td class="nowrap">02:10</td>         
                                                   <td>СЭИП</td>
                                                   <td>социальные</td>
                                                   <td>кыргызский</td>
                                                   <td>04</td>
                                                   <td>25.08.2013</td>
                                                   <td>25.08.2013</td>
                                                </tr>
                                         
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="shows">
                                       <div class="table-responsive table-main">
                                          <table class="table table-lightborder">
                                             <thead>
                                                <tr>
                                                   <th>Название</th>
                                                   <th>Хронометраж</th>
                                                   <th>Редакция</th>
                                                   <th>Жанр</th>
                                                   <th>Язык</th>
                                                   <th>ID</th>
                                                   <th>Создан</th>
                                                   <th>Изменен</th>
                                                </tr>
                                             </thead>
                                             <tbody id="broadcast_concert">
                                                <tr>
                                                   <td class="nowrap">Ой Ордо</td>         
                                                   <td class="nowrap">02:10</td>         
                                                   <td>СЭИП</td>
                                                   <td>социальные</td>
                                                   <td>кыргызский</td>
                                                   <td>04</td>
                                                   <td>25.08.2013</td>
                                                   <td>25.08.2013</td>
                                                </tr>
                                                                            
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="events">
                                       <div class="table-responsive table-main">
                                          <table class="table table-lightborder">
                                             <thead>
                                                <tr>
                                                   <th>Название</th>
                                                   <th>Хронометраж</th>
                                                   <th>Редакция</th>
                                                   <th>Жанр</th>
                                                   <th>Язык</th>
                                                   <th>ID</th>
                                                   <th>Создан</th>
                                                   <th>Изменен</th>
                                                </tr>
                                             </thead>
                                             <tbody  id="broadcast_news">
                                                <tr>
                                                   <td class="nowrap">Ой Ордо</td>         
                                                   <td class="nowrap">02:10</td>         
                                                   <td>СЭИП</td>
                                                   <td>социальные</td>
                                                   <td>кыргызский</td>
                                                   <td>04</td>
                                                   <td>25.08.2013</td>
                                                   <td>25.08.2013</td>
                                                </tr>
                                                                                     
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
								 </div>
                                 <div class="controls-below-table">
                                    <div class="table-records-info"><!--Всего 22 --></div>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="tableEvents" class="row" style="display: none;">
					 
                     </div>
                  </div>
                  <div class="content-panel">
                     <div class="element-wrapper">
                        <h6 class="element-header">Телеканал</h6>
                        <div class="element-box-tp">
                           <form action="#">
                              <div class="form-group">
                                <?php
									foreach($channels as $ch) {
								?>
								 
								 <div class="radio">
                                    <input type="radio" name="channels" id="radio<?php echo $ch["id"];?>" value="<?php echo $ch["id"];?>" <?php if ($ch["id"]==$first_channel) echo "checked";?>>
                                    <label for="radio<?php echo $ch["id"];?>">
                                          <?php echo $ch["name"];?>
                                    </label>
                                 </div>
								 
								<?php } ?>
                                 
                                 
                                 <div class="radio">
                                    <input type="radio" name="channels" id="radio0" value="0" >
                                    <label for="radio0">
                                          Все телеканалы
                                    </label>
                                 </div>
                              </div>   
                           </form>
                        </div>
                     </div>
                     <div class="element-wrapper">
                        <h6 class="element-header">Действия</h6>
                        <div class="element-box-tp">
                           <div class="el-buttons-list full-width">
                              
							  <?php if ($document_write) { ?>
							  <a class="btn btn-default" href="broadcast_add.php">
                                 <span>Добавить передачу</span>
                              </a>
							  <?php } ?>
							  <script>
								
								function go(t){
									if (broadcast_id>0){
										if (t==1) window.location = "episode_add.php?id="+broadcast_id;
										if (t==2) window.location = "broadcast_edit.php?act=e&id="+broadcast_id;
										if (t==3) window.location = "broadcast_edit.php?act=a&id="+broadcast_id;
										if (t==4) window.location = "broadcast_edit.php?act=d&id="+broadcast_id;
									}
								}
								
							  </script>
							  
							  
                              <a class="btn btn-default" id="btn_add_show" href="#" onclick="go(1)" style="display:none">
                                 <span>Добавить выпуск</span>
                              </a>
							  
							  <?php if ($document_execute) { ?>
                              <a class="btn btn-default" id="btn_edit_broadcast" href="#" onclick="go(2)">
                                 <span>Редактировать</span>
                              </a>
							  <?php } ?>
							  <?php if ($document_execute) { ?>
                              <a class="btn btn-default" id="btn_send_archive" href="#" onclick="go(3)">
                                 <span>В архив</span>
                              </a>
							  <?php } ?>
							  <?php if ($document_delete) { ?>
                              <a class="btn btn-default" id="btn_delete_broadcast" href="#" href="#" onclick="go(4)">
                                 <span>Удалить</span>
                              </a>
							  <?php } ?>
                              <!--
							  <a class="btn btn-default" id="btn_add_show" href="#">
                                 <span>Настройки</span>
                              </a>
							  -->
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
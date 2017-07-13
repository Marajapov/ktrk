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
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="element-wrapper">
                              <h6 class="element-header">Редактировать пользователя (Доступ)</h6>
                               <div class="element-box">
                                 <form>
                                    

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                       <li role="presentation">
                                          <a href="#credentials" aria-controls="credentials" role="tab" data-toggle="tab">Полномочия</a>
                                       </li>
                                       <li role="presentation" class="active">
                                          <a href="#rights" aria-controls="rights" role="tab" data-toggle="tab">Собственное производство</a>
                                       </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                       <div role="tabpanel" class="tab-pane" id="credentials">
                                          <div class="row">
                                             <div class="col-sm-6">
                                                <fieldset class="form-group">
                                                   <legend><span>Права доступа</span></legend>
                                                   <div class="row">
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable1" value="option1">
                                                               <label for="editable1">Администратор</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable2" value="option1">
                                                               <label for="editable2">Руководитель</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable3" value="option1">
                                                               <label for="editable3">Директор программ</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable4" value="option1">
                                                               <label for="editable4">Отдел программ</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable5" value="option1">
                                                               <label for="editable5">Продюсер</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable6" value="option1">
                                                               <label for="editable6">Сотрудник</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable7" value="option1">
                                                               <label for="editable7">Бухгалтерия</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable8" value="option1">
                                                               <label for="editable8">Технари</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                   </div>          
                                                </fieldset>
                                             </div>
                                             <div class="col-sm-6">
                                                <fieldset class="form-group">
                                                   <legend><span>Доступ к разделам</span></legend>
                                                   <div class="row">
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable1" value="option1">
                                                               <label for="editable1">Редактировать пользователей</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable2" value="option1">
                                                               <label for="editable2">Редактировать настройки</label>
                                                           </div>
                                                         </div>
                                                         <div class="col-sm-12">
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable21" value="option1">
                                                                  <label for="editable21">Телеканалы</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable22" value="option1">
                                                                  <label for="editable22">Жанры</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable23" value="option1">
                                                                  <label for="editable23">Теги</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable24" value="option1">
                                                                  <label for="editable24">Язык вещания</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable25" value="option1">
                                                                  <label for="editable25">Перечень оборудования</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable26" value="option1">
                                                                  <label for="editable26">Студии</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable27" value="option1">
                                                                  <label for="editable27">Студии монтажа</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable28" value="option1">
                                                                  <label for="editable28">Редакции</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable29" value="option1">
                                                                  <label for="editable29">Метод выдачи</label>
                                                              </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable3" value="option1">
                                                               <label for="editable3">Просматривать расписание</label>
                                                           </div>
                                                         </div>

                                                         <div class="col-sm-12">
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable31" value="option1">
                                                                  <label for="editable31">Редактировать расписание</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable32" value="option1">
                                                                  <label for="editable32">Подписывать путевку</label>
                                                              </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable4" value="option1">
                                                               <label for="editable4">Просматривать отчеты</label>
                                                           </div>
                                                         </div>
                                                         <div class="col-sm-12">
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable41" value="option1">
                                                                  <label for="editable41">Создавать отчеты</label>
                                                              </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable5" value="option1">
                                                               <label for="editable5">Просматривать архив</label>
                                                           </div>
                                                         </div>
                                                         <div class="col-sm-12">
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable51" value="option1">
                                                                  <label for="editable51">В резерве</label>
                                                              </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>             
                                                </fieldset>
                                             </div>
                                          </div>
                                       </div>
                                       <div role="tabpanel" class="tab-pane active" id="rights">
                                          
                                          <div class="row">
                                             <div class="col-sm-6">
                                                <fieldset class="form-group">
                                                   <legend><span>Права доступа</span></legend>
                                                   <div class="row">
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable1" value="option1">
                                                               <label for="editable1">Просмотр</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable2" value="option1">
                                                               <label for="editable2">Создание</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable3" value="option1">
                                                               <label for="editable3">Редактирование</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable4" value="option1">
                                                               <label for="editable4">Удаление</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                   </div>          
                                                </fieldset>
                                             </div>
                                             <div class="col-sm-6">
                                                <fieldset class="form-group">
                                                   <legend><span>Доступ к разделам</span></legend>
                                                   <div class="row">
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable2" value="option1">
                                                               <label for="editable2">Расписания</label>
                                                           </div>
                                                         </div>
                                                         <div class="col-sm-12">
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable21" value="option1">
                                                                  <label for="editable21">Недельная программа</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable22" value="option1">
                                                                  <label for="editable22">Эфирная путевка</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable23" value="option1">
                                                                  <label for="editable23">Перспективный план</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable24" value="option1">
                                                                  <label for="editable24">Техплан</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable25" value="option1">
                                                                  <label for="editable25">План студий</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable26" value="option1">
                                                                  <label for="editable26">Маршрутный лист</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable27" value="option1">
                                                                  <label for="editable27">Монтажный план</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable28" value="option1">
                                                                  <label for="editable28">Ежедневки</label>
                                                              </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable3" value="option1">
                                                               <label for="editable3">Каталог передач</label>
                                                           </div>
                                                         </div>

                                                         <div class="col-sm-12">
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable31" value="option1">
                                                                  <label for="editable31">Передачи</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable32" value="option1">
                                                                  <label for="editable32">Архив передач</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                               <div class="checkbox">
                                                                  <input type="checkbox" class="styled" id="editable32" value="option1">
                                                                  <label for="editable32">Концерты</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                               <div class="form-group">
                                                                  <div class="checkbox">
                                                                     <input type="checkbox" class="styled" id="editable31" value="option1">
                                                                     <label for="editable31">Эфиры</label>
                                                                 </div>
                                                               </div>
                                                               <div class="form-group">
                                                                  <div class="checkbox">
                                                                     <input type="checkbox" class="styled" id="editable32" value="option1">
                                                                     <label for="editable32">В резерве</label>
                                                                 </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable4" value="option1">
                                                               <label for="editable4">Фильмотека</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                         <div class="form-group">
                                                            <div class="checkbox">
                                                               <input type="checkbox" class="styled" id="editable4" value="option1">
                                                               <label for="editable4">Правка</label>
                                                           </div>
                                                         </div>
                                                      </div>
                                                   </div>             
                                                </fieldset>
                                             </div>
                                          </div>
                                       </div>
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
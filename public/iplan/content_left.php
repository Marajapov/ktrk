			<div class="logo-w">
                  <a class="logo" href="index.php"><img src="img/logo.png"><span>iPlan</span></a>
                  <div class="mobile-menu-trigger">
                     <i class="icon fa fa-navicon" aria-hidden="true"></i>
                  </div>
            </div>
			<div class="menu-and-user">
                  <div class="logged-user-w">
                     
                     <div class="logged-user-info-w">
                        <div class="logged-user-name"><?php echo $auth_user['name']; ?></div>
                        <div class="logged-user-role"><?php echo $auth_user['username']; ?></div>
                     </div>
                  </div>
				  <div class="menu-toggle">
                     <span>Меню</span>
                     <button class="btn-toggle" title="Свернуть меню">
                        <svg id="openBtn" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                           <path d="M24,5.3c0-0.5-0.4-0.9-0.9-0.9H0.9C0.4,4.4,0,4.8,0,5.3s0.4,0.9,0.9,0.9h22.2C23.6,6.2,24,5.8,24,5.3z M24,12
                           c0-0.5-0.4-0.9-0.9-0.9H0.9C0.4,11.1,0,11.5,0,12s0.4,0.9,0.9,0.9h22.2C23.6,12.9,24,12.5,24,12z M24,18.7c0-0.5-0.4-0.9-0.9-0.9
                           H0.9c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9h22.2C23.6,19.6,24,19.2,24,18.7z"/>
                        </svg>
                        <svg id="closeBtn" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                           <path d="M23.1,19.6h-8.9c-0.5,0-0.9-0.4-0.9-0.9c0-0.5,0.4-0.9,0.9-0.9h8.9c0.5,0,0.9,0.4,0.9,0.9C24,19.2,23.6,19.6,23.1,19.6zM24,12c0-0.5-0.4-0.9-0.9-0.9H7.6c-0.5,0-0.9,0.4-0.9,0.9s0.4,0.9,0.9,0.9h15.6C23.6,12.9,24,12.5,24,12z M24,5.3c0-0.5-0.4-0.9-0.9-0.9H0.9C0.4,4.4,0,4.8,0,5.3s0.4,0.9,0.9,0.9h22.2C23.6,6.2,24,5.8,24,5.3z"/>
                        </svg>
                     </button>
                  </div>
                  <ul class="main-menu">
                     <li>
                        <a href="index.php">
                           <div class="icon-w">
                              <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                 <g id="house">
                                    <g>
                                       <path class="st0" d="M24,12c0-0.2-0.1-0.5-0.3-0.7L12.8,0.4c0,0-0.1-0.1-0.1-0.1C12.5,0.1,12.3,0,12,0c-0.3,0-0.5,0.1-0.7,0.3
                                          c0,0-0.1,0.1-0.1,0.1L0.3,11.3C0.1,11.5,0,11.8,0,12h0c0,0,0,0,0,0c0,0,0,0,0,0C0,13.1,0.9,14,2,14h1v8c0,1.1,0.9,2,2,2h14
                                          c1.1,0,2-0.9,2-2v-8h1c0.6,0,1.1-0.6,1.5-1.2c0.1,0,0.1-0.1,0.2-0.1C23.9,12.5,24,12.3,24,12L24,12L24,12z M13,22h-2v-5h2V22z
                                           M19,12v10h-4v-6c0-0.6-0.4-1-1-1h-4c-0.6,0-1,0.4-1,1v6H5V12H2.4L12,2.4l9.6,9.6H19z"/>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <span>Главная</span>
                        </a>
                     </li>
                     
					 <?php
					 $show_this = false;
					 if ($_SESSION['user_status'] > 4) $show_this = true;
					 else {
						 foreach($_SESSION['user_access'] as $ua) if ($ua['module_db'] == 'films') { $show_this = true; break;} 
					 }
					 if ($show_this) {
					 ?>
					 
					 <li>
                        <a href="films.php">
                           <div class="icon-w">
                              <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                 <g id="video-camera">
                                    <g>
                                       <path class="st0" d="M22,6l-5,2V6c0-1.1-0.9-2-2-2H2C0.9,4,0,4.9,0,6v12c0,1.1,0.9,2,2,2h13c1.1,0,2-0.9,2-2v-2l5,2
                                          c1.1,0,2-0.9,2-2V8C24,6.9,23.1,6,22,6z M15,18H2V6h13V18z M22,16l-5-2v-4l5-2V16z"/>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <span>Фильмотека</span>
                        </a>
                     </li>
                     <?php } ?>
					 <?php
					 $show_this = false;
					 if ($_SESSION['user_status'] > 4) $show_this = true;
					 else {
						 foreach($_SESSION['user_access'] as $ua) if ($ua['module_db'] == 'broadcasts' && $ua['type'] == '1') { $show_this = true; break;} 
					 }
					 if ($show_this) {
					 ?>
					 <li>
                        <a href="broadcasts.php">
                           <div class="icon-w">
                              <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                 <g id="minimize">
                                    <g>
                                       <path class="st0" d="M13,22H2V11h5V9H2c-1.1,0-2,0.9-2,2v11c0,1.1,0.9,2,2,2h11c1.1,0,2-0.9,2-2v-5h-2V22z M22,0H11
                                          C9.9,0,9,0.9,9,2v11c0,1.1,0.9,2,2,2h11c1.1,0,2-0.9,2-2V2C24,0.9,23.1,0,22,0z M22,13H11V2h11V13z"/>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <span>Передачи</span>
                        </a>
                     </li>
					 <?php } ?>
					 <?php
					 $show_this = false;
					 if ($_SESSION['user_status'] > 4) $show_this = true;
					 else {
						 foreach($_SESSION['user_access'] as $ua) if ($ua['module_db'] == 'channels') { $show_this = true; break;} 
					 }
					 if ($show_this) {
					 ?>
                     <li>
                        <a href="channels.php">
                           <div class="icon-w">
                              <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                 <g id="grid">
                                    <g>
                                       <path class="st0" d="M8,14H2c-1.1,0-2,0.9-2,2v6c0,1.1,0.9,2,2,2h6c1.1,0,2-0.9,2-2v-6C10,14.9,9.1,14,8,14z M8,22H2v-6h6V22z
                                           M22,14h-6c-1.1,0-2,0.9-2,2v6c0,1.1,0.9,2,2,2h6c1.1,0,2-0.9,2-2v-6C24,14.9,23.1,14,22,14z M22,22h-6v-6h6V22z M22,0h-6
                                          c-1.1,0-2,0.9-2,2v6c0,1.1,0.9,2,2,2h6c1.1,0,2-0.9,2-2V2C24,0.9,23.1,0,22,0z M22,8h-6V2h6V8z M8,0H2C0.9,0,0,0.9,0,2v6
                                          c0,1.1,0.9,2,2,2h6c1.1,0,2-0.9,2-2V2C10,0.9,9.1,0,8,0z M8,8H2V2h6V8z"/>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <span>Каналы</span>
                        </a>
                     </li>
					 <?php } ?>
					 <?php
					 $show_this = false;
					 if ($_SESSION['user_status'] > 4) $show_this = true;
					 else {
						 foreach($_SESSION['user_access'] as $ua) if ($ua['module_db'] == 'studios') { $show_this = true; break;} 
					 }
					 if ($show_this) {
					 ?>
                     <li>
                        <a href="studios.php">
                           <div class="icon-w">
                              <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                 <g id="mic">
                                    <g>
                                       <path class="st0" d="M19,13c0,3.9-3.1,6-7,6c-3.9,0-7-2.1-7-6H3c0,4.4,3.6,8,8,8v2c0,0.6,0.4,1,1,1c0.6,0,1-0.4,1-1v-2
                                          c4.4,0,8-3.6,8-8H19z M12,17c2.2,0,4-1.8,4-4V4c0-2.2-1.8-4-4-4S8,1.8,8,4v9C8,15.2,9.8,17,12,17z M10,4c0-1.1,0.9-2,2-2
                                          s2,0.9,2,2v9c0,1.1-0.9,2-2,2s-2-0.9-2-2V4z"/>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <span>Студии / Редакции</span>
                        </a>
                     </li>
					 <?php } ?>
					 <?php
					 $show_this = false;
					 if ($_SESSION['user_status'] > 4) $show_this = true;
					 else {
						 foreach($_SESSION['user_access'] as $ua) if ($ua['module_db'] == 'tools') { $show_this = true; break;} 
					 }
					 if ($show_this) {
					 ?>
                     <li>
                        <a href="tools.php">
                           <div class="icon-w">
                              <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                 <g id="gear">
                                    <g>
                                       <path class="st0" d="M23.9,10.7c-0.1-0.8-0.9-1.3-1.6-1.3c-0.7,0-1.3-0.4-1.5-1c-0.3-0.6-0.1-1.4,0.4-1.8c0.6-0.5,0.6-1.4,0.2-2
                                          c-0.6-0.7-1.2-1.4-1.9-1.9c-0.3-0.2-0.6-0.3-0.9-0.3c-0.4,0-0.8,0.2-1.1,0.5c-0.3,0.3-0.8,0.5-1.2,0.5c-0.2,0-0.4,0-0.6-0.1
                                          c-0.6-0.3-1-0.9-1-1.6c0-0.8-0.5-1.5-1.3-1.5c-0.9-0.1-1.8-0.1-2.7,0C9.9,0.2,9.4,0.8,9.4,1.6c0,0.7-0.4,1.3-1,1.6
                                          C8.2,3.2,8,3.3,7.8,3.3c-0.5,0-1-0.2-1.3-0.5C6.3,2.4,5.9,2.3,5.5,2.3c-0.3,0-0.6,0.1-0.9,0.3C3.9,3.1,3.2,3.8,2.6,4.5
                                          C2.2,5.1,2.2,6,2.8,6.5C3.3,7,3.5,7.7,3.2,8.3c-0.3,0.6-0.9,1-1.6,1c-0.8,0-1.4,0.5-1.5,1.3c-0.1,0.9-0.1,1.8,0,2.7
                                          c0.1,0.8,0.9,1.3,1.6,1.3l0.1,0c0.6,0,1.2,0.4,1.4,1c0.3,0.6,0.1,1.3-0.4,1.8c-0.6,0.5-0.6,1.4-0.2,2c0.6,0.7,1.2,1.4,1.9,1.9
                                          c0.3,0.2,0.6,0.3,0.9,0.3c0.4,0,0.8-0.2,1.1-0.5c0.3-0.3,0.8-0.5,1.2-0.5c0.2,0,0.4,0,0.6,0.1c0.6,0.3,1,0.9,1,1.6
                                          c0,0.8,0.5,1.5,1.3,1.5C11.1,24,11.5,24,12,24c0.4,0,0.9,0,1.3-0.1c0.8-0.1,1.3-0.7,1.3-1.5c0-0.7,0.4-1.3,1-1.6
                                          c0.2-0.1,0.4-0.1,0.6-0.1c0.5,0,1,0.2,1.3,0.5c0.3,0.3,0.7,0.5,1.1,0.5c0.3,0,0.6-0.1,0.9-0.3c0.7-0.6,1.4-1.2,1.9-1.9
                                          c0.5-0.6,0.4-1.5-0.2-2c-0.5-0.5-0.7-1.2-0.4-1.8c0.2-0.6,0.8-1,1.5-1l0.1,0c0,0,0.1,0,0.1,0c0.7,0,1.4-0.6,1.5-1.3
                                          C24,12.5,24,11.6,23.9,10.7z M21.9,12.9c-1.3,0-2.5,0.8-2.9,2c-0.5,1.2-0.2,2.6,0.7,3.5c-0.4,0.5-0.9,0.9-1.3,1.3
                                          c-0.6-0.6-1.4-0.9-2.3-0.9c-0.4,0-0.8,0.1-1.2,0.2c-1.2,0.5-2,1.6-2,2.9c-0.6,0.1-1.2,0.1-1.8,0c0-1.3-0.8-2.4-2-2.9
                                          c-0.4-0.2-0.8-0.2-1.2-0.2c-0.9,0-1.7,0.3-2.3,0.9c-0.5-0.4-0.9-0.8-1.3-1.3c0.9-0.9,1.1-2.3,0.7-3.5c-0.5-1.2-1.7-2-2.9-2
                                          C2,12.3,2,11.6,2,11C3.3,11,4.5,10.2,5,9c0.5-1.2,0.2-2.6-0.7-3.5c0.4-0.5,0.8-0.9,1.3-1.3c0.6,0.6,1.4,0.9,2.3,0.9
                                          c0.4,0,0.7-0.3,1.1-0.4c1.2-0.5,2-1.4,2.1-2.7C11.7,2,12.3,2,12.9,2c0,1.3,0.8,2.4,2,2.9c0.4,0.2,0.8,0.2,1.2,0.2
                                          c0.9,0,1.7-0.3,2.3-0.9c0.5,0.4,0.9,0.8,1.3,1.3c-0.9,0.9-1.1,2.3-0.7,3.5c0.5,1.2,1.6,2,2.9,2C22,11.7,22,12.3,21.9,12.9z M12,8
                                          c-2.2,0-4,1.8-4,4c0,2.2,1.8,4,4,4c2.2,0,4-1.8,4-4C16,9.8,14.2,8,12,8z M12,14c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2c1.1,0,2,0.9,2,2
                                          C14,13.1,13.1,14,12,14z"/>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <span>Тех.оборудование</span>
                        </a>
                     </li>
					 <?php } ?>
					 <?php
					 $show_this = false;
					 if ($_SESSION['user_status'] > 4) $show_this = true;
					 else {
						 foreach($_SESSION['user_access'] as $ua) if ($ua['module_db'] == 'genres') { $show_this = true; break;} 
					 }
					 if ($show_this) {
					 ?>
                     <li>
                        <a href="genres.php">
                           <div class="icon-w">
                              <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                 <g id="sliders">
                                    <g>
                                       <path class="st0" d="M1,5h13.1c0.4,1.7,2,3,3.9,3c1.9,0,3.4-1.3,3.9-3H23c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1h-1.1
                                          c-0.4-1.7-2-3-3.9-3c-1.9,0-3.4,1.3-3.9,3H1C0.4,3,0,3.4,0,4C0,4.6,0.4,5,1,5z M18,2c1.1,0,2,0.9,2,2s-0.9,2-2,2c-1.1,0-2-0.9-2-2
                                          S16.9,2,18,2z M23,19H9.9c-0.4-1.7-2-3-3.9-3c-1.9,0-3.4,1.3-3.9,3H1c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1h1.1c0.4,1.7,2,3,3.9,3
                                          c1.9,0,3.4-1.3,3.9-3H23c0.6,0,1-0.4,1-1C24,19.4,23.6,19,23,19z M6,22c-1.1,0-2-0.9-2-2s0.9-2,2-2c1.1,0,2,0.9,2,2S7.1,22,6,22z
                                           M23,11h-7.1c-0.4-1.7-2-3-3.9-3c-1.9,0-3.4,1.3-3.9,3H1c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1h7.1c0.4,1.7,2,3,3.9,3
                                          c1.9,0,3.4-1.3,3.9-3H23c0.6,0,1-0.4,1-1C24,11.4,23.6,11,23,11z M12,14c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2
                                          C14,13.1,13.1,14,12,14z"/>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <span>Жанры</span>
                        </a>
                     </li>
					 <?php } ?>
					 <?php
					 $show_this = false;
					 if ($_SESSION['user_status'] > 4) $show_this = true;
					 else {
						 foreach($_SESSION['user_access'] as $ua) if ($ua['module_db'] == 'languages') { $show_this = true; break;} 
					 }
					 if ($show_this) {
					 ?>
                     <li class="active">
                        <a href="languages.php">
                           <div class="icon-w">
                              <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                 <g id="message">
                                    <g>
                                       <path class="st0" d="M6.8,10.4c-0.9,0-1.6,0.7-1.6,1.6c0,0.9,0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6C8.3,11.1,7.6,10.4,6.8,10.4z
                                           M12,10.4c-0.9,0-1.6,0.7-1.6,1.6c0,0.9,0.7,1.6,1.6,1.6s1.6-0.7,1.6-1.6C13.6,11.1,12.9,10.4,12,10.4z M22.5,17.9
                                          c2.6-4.6,1.9-10.5-2-14.3c-4.7-4.7-12.3-4.7-17,0c-4.7,4.7-4.7,12.3,0,17c3.9,3.9,9.8,4.5,14.3,2L24,24L22.5,17.9z M20.9,20.9
                                          l-2.9-1c-3.9,2.9-9.4,2.7-13-0.9C1.1,15.1,1.1,8.8,5,5c3.9-3.9,10.2-3.9,14,0c3.5,3.5,3.8,9.1,0.9,13L20.9,20.9z M17.2,10.4
                                          c-0.9,0-1.6,0.7-1.6,1.6c0,0.9,0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6C18.8,11.1,18.1,10.4,17.2,10.4z"/>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <span>Языки</span>
                        </a>
                     </li>
					 <?php } ?>
					 <?php
					 $show_this = false;
					 if ($_SESSION['user_status'] > 4) $show_this = true;
					 else {
						 foreach($_SESSION['user_access'] as $ua) if ($ua['module_db'] == 'tags') { $show_this = true; break;} 
					 }
					 if ($show_this) {
					 ?>
                     <li>
                        <a href="tags.php">
                           <div class="icon-w">
                              <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                 <g id="bookmark">
                                    <g>
                                       <path class="st0" d="M20,0H4C2.9,0,2,0.9,2,2v20c0,1.1,0.9,2,2,2l8-5l8,5c1.1,0,2-0.9,2-2V2C22,0.9,21.1,0,20,0z M20,22l-8-5l-8,5
                                          V2h16V22z"/>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <span>Теги</span>
                        </a>
                     </li>
					 <?php } ?>
					 <?php
					 $show_this = false;
					 if ($_SESSION['user_status'] > 4) $show_this = true;
					 else {
						 foreach($_SESSION['user_access'] as $ua) if ($ua['module_db'] == 'place') { $show_this = true; break;} 
					 }
					 if ($show_this) {
					 ?>
                     <li>
                        <a href="place.php">
                           <div class="icon-w">
                              <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                 <g id="picture">
                                    <g>
                                       <path class="st0" d="M7,9c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2C5.9,5,5,5.9,5,7C5,8.1,5.9,9,7,9z M22,0H2C0.9,0,0,0.9,0,2v20
                                          c0,1.1,0.9,2,2,2h20c1.1,0,2-0.9,2-2V2C24,0.9,23.1,0,22,0z M22,22H2v-2c0.3,0,0.5-0.1,0.7-0.3L8,14.4l4.3,4.2
                                          c0.2,0.3,0.6,0.4,0.9,0.3c0.2,0,0.4-0.1,0.6-0.3v0c0,0,0,0,0,0l8.3-5.3V22z M22,11c-0.1,0-0.3,0-0.4,0.1L13,16.6l-4.3-4.3
                                          C8.5,12.1,8.3,12,8,12c-0.3,0-0.5,0.1-0.7,0.3L2,17.6V2h20V11z"/>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <span>Эфирные студии</span>
                        </a>
                     </li>
					 <?php } ?>
					 <?php
					 $show_this = false;
					 if ($_SESSION['user_status'] > 4) $show_this = true;
					 else {
						 foreach($_SESSION['user_access'] as $ua) if ($ua['module_db'] == 'montage') { $show_this = true; break;} 
					 }
					 if ($show_this) {
					 ?>
                     <li>
                        <a href="montage.php">
                           <div class="icon-w">
                              <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                 <g id="share1">
                                    <g>
                                       <path class="st0" d="M20,16c-1.3,0-2.5,0.7-3.2,1.7L8,12.4c0-0.1,0-0.2,0-0.4c0-0.1,0-0.2,0-0.3l8.8-5.3C17.5,7.4,18.7,8,20,8
                                          c2.2,0,4-1.8,4-4s-1.8-4-4-4c-2.2,0-4,1.8-4,4c0,0.1,0,0.3,0,0.4L7.2,9.6C6.4,8.6,5.3,8,4,8c-2.2,0-4,1.8-4,4c0,2.2,1.8,4,4,4
                                          c1.3,0,2.5-0.7,3.2-1.7l8.8,5.2c0,0.1,0,0.3,0,0.4c0,2.2,1.8,4,4,4c2.2,0,4-1.8,4-4C24,17.8,22.2,16,20,16z M20,2c1.1,0,2,0.9,2,2
                                          s-0.9,2-2,2s-2-0.9-2-2S18.9,2,20,2z M4,14c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2c1.1,0,2,0.9,2,2C6,13.1,5.1,14,4,14z M20,22
                                          c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S21.1,22,20,22z"/>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <span>Монтажные студии</span>
                        </a>
                     </li>
					 <?php } ?>
					 <?php
					 $show_this = false;
					 if ($_SESSION['user_status'] > 4) $show_this = true;
					 else {
						 foreach($_SESSION['user_access'] as $ua) if ($ua['module_db'] == 'users') { $show_this = true; break;} 
					 }
					 if ($show_this) {
					 ?>
                     <li>
                        <a href="users.php">
                           <div class="icon-w">
                              <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                 <g id="user">
                                    <g>
                                       <path class="st0" d="M12,14c-5.6,0-8.2,4.6-8.8,10h2c0.5-4.3,2.3-8,6.8-8c4.5,0,6.3,3.7,6.8,8h2C20.2,18.6,17.6,14,12,14z M12,12
                                          c3.3,0,6-2.7,6-6c0-3.3-2.7-6-6-6C8.7,0,6,2.7,6,6C6,9.3,8.7,12,12,12z M12,2c2.2,0,4,1.8,4,4c0,2.2-1.8,4-4,4c-2.2,0-4-1.8-4-4
                                          C8,3.8,9.8,2,12,2z"/>
                                    </g>
                                 </g>
                              </svg>  
                           </div>
                           <span>Пользователи</span>
                        </a>
                     </li> 
					<?php } ?>
					 <?php
					 $show_this = false;
					 if ($_SESSION['user_status'] > 4) $show_this = true;
					 else {
						 foreach($_SESSION['user_access'] as $ua) if ($ua['module_db'] == 'log') { $show_this = true; break;} 
					 }
					 if ($show_this) {
					 ?>					 
                     <li>
                        <a href="logs.php">
                           <div class="icon-w">
                              <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                 <g id="file">
                                    <g>
                                       <path class="st0" d="M21.8,6.2c0-0.3-0.1-0.5-0.3-0.7l-5.3-5.3C16,0.1,15.8,0,15.5,0H4C3,0,2.2,0.8,2.2,1.8v20.4
                                          C2.2,23.2,3,24,4,24h16c1,0,1.8-0.8,1.8-1.8L21.8,6.2L21.8,6.2z M15.6,2.2l4,4h-4V2.2z M20,22.2H4V1.8h9.8v5.3
                                          c0,0.5,0.4,0.9,0.9,0.9H20V22.2z"/>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <span>Логи</span>
                        </a>
                     </li>  
					<?php } ?>
									 
                  </ul>
               </div>
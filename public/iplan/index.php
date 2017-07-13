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
							 			<h6 class="element-header">Координация</h6>
							 			<div class="row">
							 				<div class="col-sm-3">
							 					<div class="element-box">
		                                 <div class="el-tablo el-tablo-small">
		                                 	<div class="el-title">
		                                 		<a href="coordinator_montage.php">
		                                 			<span>Координация</span>
		                              				<span>монтажных студий</span>
															</a>
		                                 	</div>
		                              	</div>                                 
		                           	</div>
							 				</div>
							 				<div class="col-sm-3">
							 					<div class="element-box">
		                                 <div class="el-tablo el-tablo-small">
		                                 	<div class="el-title">
		                                 		<a href="coordinator_place.php">
		                                 			<span>Координация</span>
		                              				<span>эфирных студий</span>
															</a>
		                                 	</div>
		                              	</div>                                 
		                           	</div>
							 				</div>
							 				<div class="col-sm-3">
							 					<div class="element-box">
		                                 <div class="el-tablo el-tablo-small">
		                                 	<div class="el-title">
		                                 		<a href="coordinator_tools.php">
		                                 			<span>Координация</span>
		                              				<span>технических средств</span>
															</a>
		                                 	</div>
		                              	</div>                                 
		                           	</div>
							 				</div>
							 			</div>
							 		</div>
					 			</div>	
                     
					 
							 	<?php $channels = make_channels_list($auth_user);
							 	$first = strtotime("next Monday");
							 	foreach($channels as $ch){
							 	?>
	                        <div class="col-sm-12">
	                           <div class="element-wrapper">
			                              
											<h6 class="element-header"><?php echo $ch['name'];?></h6>
	                              <div class="row">
												<?php
														
													for($i=0; $i<4; $i++){
														$newdt = strtotime(date("Y-m-d",$first)." +".$i." week");
														$dt = date("d m Y", $newdt);
														$weekno = date("W", $newdt);
														$year_no = date("y", $newdt);
														$year = date("Y", $newdt);
														
												?>
		                              	<div class="col-sm-2">
		                              		<div class="element-box">
				                                 <div class="el-tablo">

				                                 	<div class="el-title">
				                                 		<a id="btn_edit_broadcast" href="calendar.php?dt=<?php echo $newdt; ?>&ch=<?php echo $ch['id']; ?>" target="_blank">
				                                 			<span>
				                                 				<?php echo $ch['name']."-".$weekno."-".$year_no; ?>
			                                 				</span>
																	</a>
				                                 	</div>

				                                 	<div class="form-buttons-w">
																 	<div class="el-buttons-list full-width">
																 		<div class="row">
															 				<a href="2excel.php?dt=<?php echo $newdt; ?>&ch=<?php echo $ch['id']; ?>" target="_blank" title="Экспорт в Excel">
																	 			<svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
																					<g id="file">
																						<g>
																							<path class="st0" d="M21.8,6.2c0-0.3-0.1-0.5-0.3-0.7l-5.3-5.3C16,0.1,15.8,0,15.5,0H4C3,0,2.2,0.8,2.2,1.8v20.4
																								C2.2,23.2,3,24,4,24h16c1,0,1.8-0.8,1.8-1.8L21.8,6.2L21.8,6.2z M15.6,2.2l4,4h-4V2.2z M20,22.2H4V1.8h9.8v5.3
																								c0,0.5,0.4,0.9,0.9,0.9H20V22.2z"/>
																						</g>
																					</g>
																					<polygon points="13.9,19.5 16.3,19.5 13.2,14.8 15.8,11 13.4,11 12,13.1 10.6,11 8.2,11 10.8,14.8 7.7,19.5 10,19.5 10.1,19.5 
																						12.9,19.5 12,18.1 11,18.1 12,16.6 "/>
																				</svg>
																	 		</a>
															 				<a href="2web.php?dt=<?php echo $newdt; ?>&ch=<?php echo $ch['id']; ?>" target="_blank" title="Экспорт для Web">
																	 			<svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
																					<path d="M20.9,20.1c2-2.2,3.1-5,3.1-8.1l0,0l0,0l0,0l0,0c0-3.1-1.2-5.9-3-8c0-0.1-0.1-0.1-0.2-0.2C18.6,1.5,15.5,0,12,0l0,0h0h0l0,0
																						C8.5,0,5.4,1.5,3.2,3.9C3.1,3.9,3.1,4,3.1,4C1.2,6.1,0,9,0,12s1.2,5.9,3.1,8c0,0,0.1,0.1,0.1,0.1C5.4,22.5,8.5,24,12,24l0,0l0,0l0,0
																						l0,0l0,0c3.2,0,6.2-1.3,8.5-3.5C20.6,20.3,20.8,20.2,20.9,20.1L20.9,20.1z M1.3,12.6h6c0.1,1.5,0.3,3,0.8,4.5
																						c-1.5,0.3-3,0.9-4.3,1.6C2.4,17.1,1.5,15,1.3,12.6z M3.8,5.2c1.4,0.7,2.9,1.3,4.3,1.6c-0.5,1.5-0.7,3-0.8,4.5h-6
																						C1.5,9,2.4,6.9,3.8,5.2z M22.7,11.3h-6c-0.1-1.5-0.3-3-0.8-4.5c1.5-0.3,3-0.9,4.3-1.6C21.6,6.9,22.5,9,22.7,11.3z M9.4,16.9
																						c-0.5-1.4-0.7-2.8-0.8-4.3h6.7c-0.1,1.4-0.3,2.9-0.8,4.3C12.9,16.7,11.1,16.7,9.4,16.9z M14.1,18.2c-0.3,0.7-0.7,1.5-1.1,2.1L12,22
																						l-1-1.7c-0.4-0.7-0.8-1.4-1.1-2.1C11.3,18,12.7,18,14.1,18.2z M8.7,11.3C8.7,9.9,9,8.4,9.4,7c0.9,0.1,1.7,0.2,2.6,0.2
																						c0.9,0,1.7-0.1,2.6-0.2c0.5,1.4,0.7,2.8,0.8,4.3H8.7z M9.9,5.8c0.3-0.7,0.7-1.5,1.1-2.1l1-1.7l1,1.7c0.4,0.7,0.8,1.4,1.1,2.1
																						C12.7,6,11.3,6,9.9,5.8z M15.4,5.6c-0.4-0.9-0.8-1.8-1.3-2.6l-1-1.6c2.4,0.3,4.4,1.3,6.1,2.8C18.1,4.8,16.8,5.3,15.4,5.6z M9.8,3
																						C9.3,3.8,8.9,4.7,8.6,5.6C7.2,5.3,5.9,4.8,4.7,4.2c1.6-1.5,3.7-2.6,6.1-2.8L9.8,3z M8.6,18.4c0.4,0.9,0.8,1.8,1.3,2.6l1,1.6
																						c-2.4-0.3-4.4-1.3-6.1-2.8C5.9,19.2,7.2,18.7,8.6,18.4z M14.2,21c0.5-0.8,0.9-1.7,1.3-2.6c1.3,0.3,2.6,0.7,3.8,1.4
																						c-1.7,1.6-3.8,2.6-6.1,2.8L14.2,21z M15.9,17.2c0.5-1.5,0.7-3,0.8-4.5h6c-0.1,2.3-1,4.4-2.4,6.1C18.9,18,17.4,17.5,15.9,17.2z"/>
																				</svg>
																	 		</a>
																	 		<a href="2printer.php?dt=<?php echo $newdt; ?>&ch=<?php echo $ch['id']; ?>" target="_blank" title="Экспорт для печати">
																	 			<svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
																					<path d="M22.2,5V1c0-0.4-0.3-0.7-0.7-0.7h-19C2.1,0.3,1.8,0.6,1.8,1v4C0.8,5.1,0,5.9,0,7v8.8c0,1.1,0.9,2,2,2h2.4V23
																					c0,0.4,0.3,0.7,0.7,0.7h14.3c0.4,0,0.7-0.3,0.7-0.7v-5.3H22c1.1,0,2-0.9,2-2V7C24,5.9,23.2,5.1,22.2,5z M3.1,1.6h17.7V5H3.1V1.6z
																					 M18.6,22.4h-13V15h13V22.4z M22.7,15.7c0,0.4-0.3,0.7-0.7,0.7h-2.1V15h0.5c0.4,0,0.7-0.3,0.7-0.7s-0.3-0.7-0.7-0.7H3.6
																					C3.2,13.7,3,14,3,14.3S3.2,15,3.6,15h0.7v1.4H2c-0.4,0-0.7-0.3-0.7-0.7V7c0-0.4,0.3-0.7,0.7-0.7H22c0.4,0,0.7,0.3,0.7,0.7V15.7z
																					 M7.8,18.2h8.3c0.4,0,0.7-0.3,0.7-0.7s-0.3-0.7-0.7-0.7H7.8c-0.4,0-0.7,0.3-0.7,0.7S7.5,18.2,7.8,18.2z M7.8,21h8.3
																					c0.4,0,0.7-0.3,0.7-0.7s-0.3-0.7-0.7-0.7H7.8c-0.4,0-0.7,0.3-0.7,0.7S7.5,21,7.8,21z M20.4,8h-4.8C15.2,8,15,8.3,15,8.7v2.4
																					c0,0.4,0.3,0.7,0.7,0.7h4.8c0.4,0,0.7-0.3,0.7-0.7V8.7C21,8.3,20.8,8,20.4,8z M19.7,10.4h-3.5V9.3h3.5V10.4z"/>
																				</svg>
																	 		</a>
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
								 
							 	<?php } ?>
                     </div>

                     
                  </div>
				  
				  
				  
				  
				  
                  
               </div>
            </div>
         </div>
      </div>
	  <?php include 'include.js.php';?>
   </body>
</html>
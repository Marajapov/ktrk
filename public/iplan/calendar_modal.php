
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

	  <!-- Modal content-->
	  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title" id="calendar-modal-header">Modal Header</h4>
			</div>
			<div class="modal-body">
				<div id="calendar-modal-exp"></div>
			  	<p>
				  	<input type="hidden" name="bookId" id="calendar-modal-id" value=""/>
				  	<input type="hidden" name="bookId" id="calendar-modal-day-id" value=""/>
			  	</p>
			  
			  	<div class="row">
			  		<div class="col-sm-6">
			  			<div class="form-group">
					  		<label>Время выхода:</label> 
							<div>
								<select class="form-control" id="calendar-modal-starthour">
									<?php for($i=0; $i<25; $i++){ ?>
									<option value="<?php echo $i;?>"><?php echo $i<10? "0".$i:$i;?></option>
									<?php } ?>
								</select>
								<select class="form-control" id="calendar-modal-startminute">
									<?php for($i=0; $i<59; $i++){ ?>
									<option value="<?php echo $i;?>"><?php echo $i<10? "0".$i:$i;?></option>
									<?php } ?>
								</select>
							</div>
						</div>
			  		</div>
			  		<div class="col-sm-6">
			  			<div class="form-group" id="leftsets-kapanmaz">
							<input type="hidden" id="title" placeholder="title" />
							<div>
								<label>Хронометраж: </label>						
								<div>
									<select class="form-control" id="calendar-modal-durationHour">
										<?php for($i=0; $i<4; $i++){ ?>
										<option value="<?php echo $i;?>"><?php echo $i<10? "0".$i:$i;?></option>
										<?php } ?>
									</select>
									<select class="form-control" id="calendar-modal-durationMinute">
										<?php for($i=0; $i<60; $i++){ ?>
										<option value="<?php echo $i;?>"><?php echo $i<10? "0".$i:$i;?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
			  		</div>
			  	</div>
			</div>
			<div class="modal-footer">
			
			  	<a class="btn btn-primary" onclick="modal_save_task()" href="javascript:void(0);">Сохранить</a>
			  	<a class="btn btn-danger" onclick="modal_delete_task()" href="javascript:void(0);">Удалить</a>		
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
		  	</div>
		</div>
	</div>
</div>


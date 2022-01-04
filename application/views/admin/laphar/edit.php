<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Laphar Edit</h3>
            </div>
			<?php echo form_open('laphar/edit/'.$laphar['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="time" class="control-label">Time</label>
						<div class="form-group">
							<input type="text" name="time" value="<?php echo ($this->input->post('time') ? $this->input->post('time') : $laphar['time']); ?>" class="has-datetimepicker form-control" id="time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="satuan" class="control-label">Satuan</label>
						<div class="form-group">
							<input type="text" name="satuan" value="<?php echo ($this->input->post('satuan') ? $this->input->post('satuan') : $laphar['satuan']); ?>" class="form-control" id="satuan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="laphar" class="control-label">Laphar</label>
						<div class="form-group">
							<textarea name="laphar" class="form-control" id="laphar"><?php echo ($this->input->post('laphar') ? $this->input->post('laphar') : $laphar['laphar']); ?></textarea>
							<span class="text-danger"><?php echo form_error('laphar');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
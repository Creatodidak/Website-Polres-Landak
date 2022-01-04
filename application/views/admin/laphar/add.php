<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Input Laphar Disini</h3>
            </div>
            <?php echo form_open('laphar/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					
					<div class="col-md-6">
						<label for="laphar" class="control-label">Laphar</label>
						<div class="form-group">
							<textarea name="laphar" class="form-control" id="laphar"><?php echo $this->input->post('laphar'); ?></textarea>
							<span class="text-danger"><?php echo form_error('laphar');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Input
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
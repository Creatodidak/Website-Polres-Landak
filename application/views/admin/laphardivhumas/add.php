<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Input Laphar Div Humas Disini</h3>
            </div>
            <?php echo form_open('laphardivhumas/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<?php 
					$msg = $this->session->flashdata('msg');
					
					if(isset($msg)) { 
									  if($this->session->flashdata('msg') == 'gagal') {?>
																						<script> 
																							alert("Data Duplikat..!!!");
																						</script>
									  													 <?php
																						}else{
																							if($this->session->flashdata('msg') == 'simpan') {?>
																							<script> 
																								alert("Data Berhasil Di Input..!!!");
																							</script>
																							   <?php
																							 }
									}
								}
					?>

					<div class="col-md-6">
						<label for="laphardivhumas" class="control-label">Cukup tuliskan judul berita...!!!</label>
						<br> <?php echo $this->db->last_query();?> <br>
						<div class="form-group">
							<textarea name="laphardivhumas" class="form-control" id="laphardivhumas"><?php echo $this->input->post('laphardivhumas'); ?></textarea>
							<span class="text-danger"><?php echo form_error('laphardivhumas');?></span>
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
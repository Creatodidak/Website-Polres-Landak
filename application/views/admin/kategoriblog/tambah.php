<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah Kategori Blog</h4>
      	</div>
      	<form action="<?php echo base_url('kategoriblog/tambah') ?>" method="post">
      	<div class="modal-body">
      		<div class="form-group">
      			<label for="">Nama Kategori Blog</label>
      			<input type="text" name="nama_kategoriblog" id="" class="form-control">
      		</div>
            <div class="form-group">
               <label for="">Parameter</label>
               <input type="text" name="parameter_kategoriblog" id="" class="form-control">
            </div>
      	</div>
      	<div class="modal-footer">
      		<button class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
      		<a href="#" class="btn btn-default" data-dismiss="modal">Tutup</a>
      	</div>
      	</form>
      </div>
   </div>
</div>
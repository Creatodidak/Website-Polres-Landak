<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah Ourservice</h4>
      	</div>
      	<form action="<?php echo base_url('ourservice/tambah') ?>" method="post" enctype="multipart/form-data">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Judul Ourservice</label>
               <input type="text" name="judul_ourservice" class="form-control">
            </div>
      		<div class="form-group">
      			<label for="">Keterangan Ourservice</label>
      			<textarea class="form-control" name="ket_ourservice"></textarea>
      		</div>
            <div class="form-group">
               <label for="">Link Ourservice</label>
               <input type="text" name="link_ourservice" class="form-control">
            </div>
            <div class="form-group">
               <label for="">Pilih Foto</label>
               <input type="file" name="fileourservice" id="" class="form-control">
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
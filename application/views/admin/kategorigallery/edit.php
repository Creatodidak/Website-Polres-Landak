<?php foreach($kategorigallery->result() as $r); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header bg-success">
            <h4>Edit Kategori Gallery</h4>
         </div>
         <form action="<?php echo base_url('kategorigallery/edit') ?>" method="post">
         <input type="hidden" name="id_kategorigallery" id="" class="form-control" value="<?php echo $r->id_kategorigallery; ?>">
         <div class="modal-body">
            <div class="form-group">
               <label for="">Nama Kategori Gallery</label>
               <input type="text" name="nama_kategorigallery" id="" class="form-control" value="<?php echo $r->nama_kategorigallery; ?>">
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
<?php foreach($website->result() as $iden); ?>
<div class="">
   <form action="<?php echo base_url('website/infosiswabaru') ?>" method="post" enctype="multipart/form-data">
      <div class="box box-solid">
         <div class="box-header with-border bg-info">
            <h3 class="box-title">Info Untuk Siswa Baru</h3>
         </div>
         <div class="box-body">
            <div class="form-group">
               <textarea class="form-control" id="editor1" name="info_siswabaru"><?php echo $iden->info_siswabaru; ?></textarea>
            </div>
         </div>
         <div class="box-footer">
            <button class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
         </div>
      </div>
   </form>
</div>
<script>
   $(function(){
      CKEDITOR.replace('editor1');
      $('.datepicker').datepicker({
         format : "yyyy-m-d",
      });
   })
</script>
<?php if($this->session->flashdata('msg')=='edit'){ ?>
<script>
   iziToast.show({timeout:5000,color:'green',title: 'Berhasil Disimpan',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>
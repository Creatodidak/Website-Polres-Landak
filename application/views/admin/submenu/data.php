<?php foreach($menu->result() as $m); ?>
<div class="">
	<div class="">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><b>Data Sub Menu <?php echo $m->nama_menu; ?></b></h3>
				<span class="pull-right"><a href="#" onclick="tambahsubmenu()" class="btn btn-success btn-xs">Tambah Sub Menu</a></span>
			</div>
			<div class="box-body">
				<table class="table table-bordered table-hover">
					<thead>
						<th width="5%">No</th>
						<th>Nama Sub Menu</th>
						<th>Link</th>
						<th>Urutan</th>
						<th colspan="2" width="10%">Ubah Urutan</th>
						<th width="20%">Aksi</th>
					</thead>
					
					<tbody id="datasubmenu">
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div id="edit"></div>
<div id="tambah"></div>

<script>
	$(function(){
		datasubmenu();
	});
	function datasubmenu(){
		$.ajax({
			type : "GET",
			url : "<?php echo base_url('submenu/loadsubmenu/'.$this->uri->segment(3)); ?>",
			async : false,
			cache : false,
			success : function(html){
				$('#datasubmenu').html(html).show();
			}
		})
	}
	function	tambahsubmenu(){
		$.ajax({
			type : "GET",
			url : "<?php echo base_url('admin/tambahsubmenu/'.$this->uri->segment(3)); ?>",
			cache : false,
			async : false,
			success : function(html){
				$("#tambah").html(html).show();
				$('#modtambah').modal('show');
			}
		});
	}
	function hapus(id){
		swal({
		  title: "Menghapus Sub Menu Ini?",
		  text: "Tekan Ya Untuk Setuju dan Tekan Batal Jika Tidak Setuju",
		  type: "warning",
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal',
		})
		.then(function () {
        	$.ajax({
				type : "GET",
				url : "<?php echo base_url('submenu/hapus/'); ?>"+id,
				cache : false,
				async : false,
				success : function(response){
					datasubmenu();
				}
			});
      },
      function (dismiss) {
        if(dismiss === 'cancel') {
          swal("Anda Membatalkan Proses");
        }
      })
	}
</script>
<?php if($this->session->flashdata('msg')=='simpan'){ ?>
<script>
	iziToast.show({timeout:5000,color:'green',title: 'Berhasil Disimpan',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>
<?php if($this->session->flashdata('msg')=='edit'){ ?>
<script>
	iziToast.show({timeout:5000,color:'blue',title: 'Berhasil Diedit',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>
<?php if($this->session->flashdata('msg')=='hapus'){ ?>
<script>
	iziToast.show({timeout:5000,color:'red',title: 'Berhasil Dihapus',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>
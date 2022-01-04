<div class="">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><b>Data Siswa Baru</b></h3>
			<span class="pull-right"><a href="#" onclick="reloaddata()" class="btn bg-maroon btn-xs">Refresh Data</a></span>
		</div>
		<div class="box-body">
			<table class="table table-bordered table-hover serverside">
				<thead>
					<th width="5%">No</th>
					<th>No Pendaftaran</th>
					<th>Gelombang</th>
					<th>Nama</th>
					<th>JK</th>
					<th>TTL</th>
					<th>Email</th>
					<th>Tgl Daftar</th>
					<th width="15%">Aksi</th>
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
  $(document).ready(function(){
    loadsiswabaru();
  });
  function loadsiswabaru(){
    $('.serverside').DataTable({ 
         "processing": true, 
         "serverSide": true, 
         "pageLength": 10,
         "order": [], 
         "ajax": {
             "url": "<?php echo site_url('siswabaru/get_data_siswabaru')?>",
             "type": "POST"
         },
         "columnDefs": [
         { 
             "targets": [ 0 ], 
             "orderable": false, 
         },
         ],
      });
  }
  function terima(id){
		swal({
		  title: "Siswa Ini Akan Diterima?",
		  text: "Tekan Ya Untuk Setuju dan Tekan Batal Jika Tidak Setuju",
		  type: "warning",
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal',
		})
		.then(function () {
        	$.ajax({
				type : "GET",
				url : "<?php echo base_url('siswabaru/terima/'); ?>"+id,
				cache : false,
				async : false,
				success : function(response){
					if(response=='sukses'){
						swal({
						  title: "Sukses",
						  text: "Reload halaman untuk melihat perubahan data",
						  type: "success",
				        showCancelButton: false,
				        confirmButtonText: 'Ya',
				        cancelButtonText: 'Batal',
						});
						document.location.reload();
					}
					else{
						swal({
						  title: "Gagal",
						  text: "Maaf sistem masih error!",
						  type: "warning",
				        showCancelButton: false,
				        confirmButtonText: 'Ya',
				        cancelButtonText: 'Batal',
						});
					}
				}
			});
      },
      function (dismiss) {
        if(dismiss === 'cancel') {
          swal("Anda Membatalkan Proses");
        }
      })
	}
  function reloaddata(){
  	window.location.reload();
  }
</script>
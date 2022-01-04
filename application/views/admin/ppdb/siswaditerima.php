<div class="">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><b>Data Siswa Diterima</b></h3>
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
    loadsiswaditerima();
  });
  function loadsiswaditerima(){
    $('.serverside').DataTable({ 
         "processing": true, 
         "serverSide": true, 
         "pageLength": 10,
         "order": [], 
         "ajax": {
             "url": "<?php echo site_url('siswabaru/get_data_siswaditerima')?>",
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
  function reloaddata(){
  	window.location.reload();
  }
</script>
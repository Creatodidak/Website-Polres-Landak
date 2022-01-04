<div class="col-md-10 offset-md-1" style="background-color: #fff">
<div class="row">
	

	<div class="col-md-12 text-center" style="margin-top: 20px;">
		<img src="<?php echo base_url('assets/v2/beranda/images/presisi.jpg'); ?>" alt="" width="50%">
	<br/>
		<h3><b>SELAMAT DATANG DI ZONA INTEGRITAS POLRES LANDAK</b></h3>
	</div>
	<div class="col-md-8 offset-md-2" style="text-align: justify;margin-top: 20px;border-left: 10px solid orange">
    Pengertian Umum
<ul style="list-style-type: decimal;">
<li>Zona Integritas (ZI) di lingkungan Polri adalah predikat yang diberikan kepada Polri yang mempunyai komitmen untuk mewujudkan WBK dan WBBM melalui reformasi birokrasi, khususnya dalam hal pencegahan korupsi dan peningkatan kualitas pelayanan publik mulai dari Kapolri dan jajarannya;</li>

 <li>Menuju Wilayah Bebas dari Korupsi (WBK) adalah predikat yang diberikan kepada Satker yang memenuhi sebagian besar program Manajemen Perubahan, Penataan Tatalaksana, Penataan Sistem Manajemen SDM, Penguatan Pengawasan dan Penguatan Akuntabilitas Kinerja;</li>
 
 <li>Menuju Wilayah Birokrasi Bersih dan Melayani (WBBM) adalah predikat yang diberikan kepada Satker yang memenuhi sebagian besar program Manajemen Perubahan, Penataan Tatalaksana, Penataan Sistem Manajemen SDM, Penguatan Pengawasan, Penguatan Akuntabilitas Kinerja dan Penguatan Kualitas Pelayanan Publik;</li>
 
 <li>Satker, serendah-rendahnya eselon III yang menyelenggarakan fungsi pelayanan;<li>Tim Penilai Internal (TPI) adalah tim yang dibentuk oleh Kapolri yang mempunyai tugas melakukan penilaian Satker dalam rangka memperoleh predikat menuju WBK/menuju WBBM;</li>

 <li>Tim Penilai Nasional (TPN) adalah tim yang dibentuk untuk melakukan evaluasi terhadap unit kerja yang diusulkan menjadi Zona Integritas Menuju WBK dan Menuju WBBM. Tim Penilai Nasional terdiri dari unsur Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi, Komisi Pemberantasan Korupsi (KPK), dan Ombudsman Republik Indonesia (ORI).</li>
 </ul>
 <BR>
 <BR>
 <h3 class="text-center">Pagu Definitif Polres Landak T.A. <?php echo date('Y'); ?> </h3>
 <?php $no = 1; ?>
<div class="table-responsive-md">
 <table class="table  table-bordered table-hover" style="font-size:small">
  <thead class="table-info">
    <tr>
       <th>No</th>
       <th>Satker</th>
       <th>Pagu</th>
     </tr>
   </thead>
   <tbody>
   <?php foreach ($pagu as $p) : ?>
      <tr>
         <th scope="row"><?php echo $no++ ?></th>
         <td><?php echo $p->satuan; ?></td>
         <td><?php $this->rupiah->angka($p->jumlah);?></td>
      </tr>
    <?php endforeach; ?>
    
   </tbody>
</table>
</div>

<BR>
 <BR>
 <h3 class="text-center">Berkas</h3>
 <?php $no = 1; ?>
<div class="table-responsive-md">
 <table class="table  table-bordered table-hover" style="font-size:small">
  <thead class="table-info">
    <tr>
       <th>No</th>
       <th>Nama File</th>
       <th>Aksi</th>
     </tr>
   </thead>
   <tbody>
      <tr>
         <th scope="row"><?php echo $no++ ?></th>
         <td><i class="fa fa-file-pdf-o text-danger" aria-hidden="true"></i> LAPORAN KINERJA POLRES LANDAK Ta.2020 NEW.pdf
</td>
         <td><a class="text-success" href="<?php echo base_url("assets/zi/LAPORAN KINERJA POLRES LANDAK Ta.2020 NEW.pdf");?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
      </tr>

      <tr>
         <th scope="row"><?php echo $no++ ?></th>
         <td><i class="fa fa-file-pdf-o text-danger" aria-hidden="true"></i> LAPORAN RBP POLRES LANDAK 2020.pdf
</td>
         <td><a class="text-success" href="<?php echo base_url("assets/zi/LAPORAN RBP POLRES LANDAK 2020.pdf");?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
      </tr>

      <tr>
         <th scope="row"><?php echo $no++ ?></th>
         <td><i class="fa fa-file-pdf-o text-danger" aria-hidden="true"></i> RENJA TA. 2021.pdf
</td>
         <td><a class="text-success" href="<?php echo base_url("assets/zi/RENJA TA. 2021.pdf");?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
      </tr>

      <tr>
         <th scope="row"><?php echo $no++ ?></th>
         <td><i class="fa fa-file-pdf-o text-danger" aria-hidden="true"></i> RENSTRA TERBARU 2020-2024-IKU-KE-3.pdf
</td>
         <td><a class="text-success" href="<?php echo base_url("assets/zi/RENSTRA TERBARU 2020-2024-IKU-KE-3.pdf");?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
      </tr>

      <tr>
         <th scope="row"><?php echo $no++ ?></th>
         <td><i class="fa fa-file-pdf-o text-danger" aria-hidden="true"></i> IKU LANDAK 2020 REVISI.pdf
</td>
         <td><a class="text-success" href="<?php echo base_url("assets/zi/IKU LANDAK 2020 REVISI.pdf");?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
      </tr>
    
   </tbody>
</table>
</div>



	</div>
	
<div class="col-md-12 text-center text-xl" style="margin-top: 30px; margin-bottom: 30px;">

		<img class="h-16 lg:h-24" src="https://dumaspresisi.polri.go.id/dumaspro/media/homepage_v1/polisi_presisi.webp" alt="" height="85px">
		Prediktif, Responsibilitas, Transparansi Berkeadilan
		<img class="h-16 lg:h-24" src="https://dumaspresisi.polri.go.id/dumaspro/media/homepage_v1/polwan.webp" alt="" height="85px">
	</div>

</div>
</div>
<?php 
foreach($siswabaru->result() as $sis);
foreach($biodataorangtua->result() as $bioor);
foreach($biodataperkembangan->result() as $bioper);
if($sis->jk_siswabaru=='L'){$jk= 'Laki-laki';}else{ $jk='Perempuan';}
$penay= $this->Msiswabaru->getonependidikan($bioor->id_pendidikan_ayah); foreach($penay->result() as $pena);
$pekay= $this->Msiswabaru->getonepekerjaan($bioor->id_pekerjaan_ayah); foreach($pekay->result() as $peka);
$penib= $this->Msiswabaru->getonependidikan($bioor->id_pendidikan_ibu); foreach($penib->result() as $peni);
$pekib= $this->Msiswabaru->getonepekerjaan($bioor->id_pekerjaan_ibu); foreach($pekib->result() as $peki);
$penwal= $this->Msiswabaru->getonependidikan($bioor->id_pendidikan_wali); foreach($penwal->result() as $penw);
$pekwal= $this->Msiswabaru->getonepekerjaan($bioor->id_pekerjaan_wali); foreach($pekwal->result() as $pekw);

?>
<div class="row">
  <div class="col-xs-12">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#siswa" data-toggle="tab">Biodata Siswa</a></li>
        <li><a href="#ayah" data-toggle="tab">Biodata Ayah</a></li>
        <li><a href="#ibu" data-toggle="tab">Biodata Ibu</a></li>
        <li><a href="#wali" data-toggle="tab">Biodata Wali</a></li>
        <li><a href="#perkembangan" data-toggle="tab">Perkembangan</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="siswa">
          <section>
            <table class="table table-bordered">
              <tr><td width="3%">1.</td><td colspan="3">Nama Siswa</td><td></td></tr>
              <tr><td></td><td width="3%">a.</td><td width="30%">Lengkap</td><td width="3%">:</td><td><?php echo $sis->nama_siswabaru; ?></td></tr>
              <tr><td></td><td>b.</td><td>Panggilan</td><td>:</td><td><?php echo $sis->panggilan_siswabaru; ?></td></tr>
              <tr><td>2.</td><td colspan="2">Jenis Kelamin</td><td>:</td><td><?php echo $jk; ?></td></tr>
              <tr><td>3.</td><td colspan="2">Nomor NIK (sesuai KK)</td><td>:</td><td><?php echo $sis->nik_siswabaru; ?></td></tr>
              <tr><td>4.</td><td colspan="2">Kelahiran</td><td></td><td></td></tr>
              <tr><td></td><td>a.</td><td>Tanggal, bulan & tahun</td><td>:</td><td><?php echo tgl($sis->tangl_siswabaru); ?></td></tr>
              <tr><td></td><td>b.</td><td>Tempat</td><td>:</td><td><?php echo $sis->teml_siswabaru; ?></td></tr>
              <tr><td>5.</td><td colspan="2">Agama</td><td>:</td><td><?php echo $sis->nama_agama; ?></td></tr>
              <tr><td>6.</td><td colspan="2">Kewarganegaraan</td><td>:</td><td><?php echo $sis->wni_siswabaru; ?></td></tr>
              <tr><td>7.</td><td colspan="2">Jumlah Saudara</td><td></td><td></td></tr>
              <tr><td></td><td>a.</td><td>Kandung</td><td>:</td><td><?php echo $sis->kandung_siswabaru; ?> Orang</td></tr>
              <tr><td></td><td>b.</td><td>Tiri</td><td>:</td><td><?php echo $sis->tiri_siswabaru; ?> Orang</td></tr>
              <tr><td></td><td>c.</td><td>Angkat</td><td>:</td><td><?php echo $sis->angkat_siswabaru; ?> Orang</td></tr>
              <tr><td></td><td>d.</td><td>Anak ke (sesuai KK) </td><td>:</td><td><?php echo $sis->anakke_siswabaru; ?> Dari <?php echo $sis->kandung_siswabaru; ?> Saudara</td></tr>
              <tr><td>8.</td><td colspan="2">Bahasa sehari-hari dalam keluarga</td><td>:</td><td><?php echo $sis->bahasa_siswabaru; ?></td></tr>
              <tr><td>9.</td><td colspan="2">Keadaan Jasmani</td><td></td><td></td></tr>
              <tr><td></td><td>a.</td><td>Berat badan</td><td>:</td><td><?php echo $sis->berat_siswabaru; ?> kg</td></tr>
              <tr><td></td><td>b.</td><td>Tinggi badan</td><td>:</td><td><?php echo $sis->tinggi_siswabaru; ?> cm</td></tr>
              <tr><td></td><td>c.</td><td>Golongan darah</td><td>:</td><td><?php echo $sis->golda_siswabaru; ?></td></tr>
              <tr><td></td><td>d.</td><td>Penyakit yang pernah diderita</td><td>:</td><td><?php echo $sis->penyakit_siswabaru; ?></td></tr>
              <tr><td>10.</td><td colspan="2">Alamat</td><td></td><td></td></tr>
              <tr><td></td><td colspan="2">Jalan</td><td align="top">:</td><td><?php echo $sis->jalan_siswabaru; ?><br>Rt.<?php echo $sis->rt_siswabaru; ?> Rw.<?php echo $sis->rw_siswabaru; ?> No.<?php echo $sis->no_siswabaru; ?> <br>Telepon : <?php echo $sis->notelp_siswabaru; ?></td></tr>
              <tr><td></td><td colspan="2">Kelurahan</td><td>:</td><td><?php echo $sis->kelurahan_siswabaru; ?></td></tr>
              <tr><td></td><td colspan="2">Kecamatan</td><td>:</td><td><?php echo $sis->kecamatan_siswabaru; ?></td></tr>
              <tr><td></td><td colspan="2">Kab. / Kota</td><td>:</td><td><?php echo $sis->kabkota_siswabaru; ?></td></tr>
              <tr><td></td><td colspan="2">Provinsi</td><td>:</td><td><?php echo $sis->provinsi_siswabaru; ?></td></tr>
              <tr><td></td><td colspan="2">Kode Pos</td><td>:</td><td><?php echo $sis->pos_siswabaru; ?></td></tr>
              <tr><td>11.</td><td colspan="2">Bertempat tinggal pada</td><td>:</td><td><?php echo $sis->temting_siswabaru; ?></td></tr>
              <tr><td>12.</td><td colspan="2">Jarak tempat tinggal ke sekolah</td><td>:</td><td><?php echo $sis->jarak_siswabaru; ?> km</td></tr>
              <tr><td>13.</td><td colspan="2">Transportasi</td><td>:</td><td><?php echo $sis->naik_siswabaru; ?></td></tr>
            </table>
          </section>
        </div>
        <div class="tab-pane" id="ayah">
          <section>
            <table class="table table-bordered">
              <tr><td width="20%">Nama</td><td width="3%">:</td><td><?php echo $bioor->nama_ayah; ?></td></tr>
              <tr><td width="20%">NIK</td><td>:</td><td><?php echo $bioor->nik_ayah; ?></td></tr>
              <tr><td width="20%">Tempat/Tanggal Lahir</td><td>:</td><td><?php echo $bioor->teml_ayah; ?>, <?php echo dmy($bioor->tangl_ayah); ?></td></tr>
              <tr><td width="20%">Pendidikan</td><td>:</td><td><?php echo $pena->nama_pendidikan; ?></td></tr>
              <tr><td width="20%">Pekerjaan</td><td>:</td><td><?php echo $peka->nama_pekerjaan; ?></td></tr>
              <tr><td width="20%">Penghasilan per bulan</td><td>:</td><td>Rp. <?php echo rp($bioor->hasil_ayah); ?> /Bulan</td></tr>
              <tr><td width="20%">Nomor Telepon Rumah/Kantor</td><td>:</td><td><?php echo $bioor->notelp_ayah; ?></td></tr>
              <tr><td width="20%">Nomor HP</td><td>:</td><td><?php echo $bioor->nohp_ayah; ?></td></tr>
              <tr><td width="20%">Email</td><td>:</td><td><?php echo $bioor->email_ayah; ?></td></tr>
            </table>
          </section>
        </div>
        <div class="tab-pane" id="ibu">
          <section>
            <table class="table table-bordered">
              <tr><td width="20%">Nama</td><td width="3%">:</td><td><?php echo $bioor->nama_ibu; ?></td></tr>
              <tr><td width="20%">NIK</td><td>:</td><td><?php echo $bioor->nik_ibu; ?></td></tr>
              <tr><td width="20%">Tempat/Tanggal Lahir</td><td>:</td><td><?php echo $bioor->teml_ibu; ?>, <?php echo dmy($bioor->tangl_ibu); ?></td></tr>
              <tr><td width="20%">Pendidikan</td><td>:</td><td><?php echo $peni->nama_pendidikan; ?></td></tr>
              <tr><td width="20%">Pekerjaan</td><td>:</td><td><?php echo $peki->nama_pekerjaan; ?></td></tr>
              <tr><td width="20%">Penghasilan per bulan</td><td>:</td><td>Rp. <?php echo rp($bioor->hasil_ibu); ?> /Bulan</td></tr>
              <tr><td width="20%">Nomor Telepon Rumah/Kantor</td><td>:</td><td><?php echo $bioor->notelp_ibu; ?></td></tr>
              <tr><td width="20%">Nomor HP</td><td>:</td><td><?php echo $bioor->nohp_ibu; ?></td></tr>
              <tr><td width="20%">Email</td><td>:</td><td><?php echo $bioor->email_ibu; ?></td></tr>
            </table>
          </section>
        </div>
        <div class="tab-pane" id="wali">
          <section>
            <table class="table table-bordered">
              <tr><td width="20%">Nama</td><td width="3%">:</td><td><?php echo $bioor->nama_wali; ?></td></tr>
              <tr><td width="20%">NIK</td><td>:</td><td><?php echo $bioor->nik_wali; ?></td></tr>
              <tr><td width="20%">Tempat/Tanggal Lahir</td><td>:</td><td><?php echo $bioor->teml_wali; ?>, <?php echo dmy($bioor->tangl_wali); ?></td></tr>
              <tr><td width="20%">Pendidikan</td><td>:</td><td><?php echo $penw->nama_pendidikan; ?></td></tr>
              <tr><td width="20%">Pekerjaan</td><td>:</td><td><?php echo $pekw->nama_pekerjaan; ?></td></tr>
              <tr><td width="20%">Penghasilan per bulan</td><td>:</td><td>Rp. <?php echo rp($bioor->hasil_wali); ?> /Bulan</td></tr>
              <tr><td width="20%">Nomor Telepon Rumah/Kantor</td><td>:</td><td><?php echo $bioor->notelp_wali; ?></td></tr>
              <tr><td width="20%">Nomor HP</td><td>:</td><td><?php echo $bioor->nohp_wali; ?></td></tr>
              <tr><td width="20%">Email</td><td>:</td><td><?php echo $bioor->email_wali; ?></td></tr>
            </table>
          </section>
        </div>
        <div class="tab-pane" id="perkembangan">
          <section>
            <table class="table table-bordered">
              <tr><td width="3%">1.</td><td colspan="2">Masuk menjadi siswa baru kelas</td><td>I</td><td></td></tr>
              <tr><td></td><td width="3%">a.</td><td width="30%">Asal Siswa</td><td width="3%">:</td><td><?php echo $bioper->asal_siswa; ?></td></tr>
              <tr><td></td><td>b.</td><td>Alamat</td><td>:</td><td><?php echo $bioper->alamat; ?></td></tr>
              <tr><td></td><td>c.</td><td>Nama Taman Kanak-kanak</td><td>:</td><td><?php echo $bioper->nama_tk; ?></td></tr>
              <tr><td></td><td>d.</td><td>Tanggal dan No. STTB TK</td><td>:</td><td><?php echo dmy($bioper->tgl_sttb); ?> <?php echo $bioper->no_sttb; ?></td></tr>

              <tr><td>2.</td><td colspan="2">Pindahan dari sekolah lain (khusus siswa pindahan).</td><td></td></tr>
              <tr><td></td><td>a.</td><td>Nama sekolah asal</td><td>:</td><td><?php echo $bioper->sekolah_asal; ?></td></tr>
              <tr><td></td><td>b.</td><td>Dari tingkat / kelas</td><td>:</td><td><?php echo $bioper->daritingkat; ?></td></tr>
              <tr><td>3.</td><td colspan="2">Diterima tanggal</td><td>:</td><td><?php echo dmy($bioper->diterima_tanggal); ?></td></tr>
              <tr><td>4.</td><td colspan="2">Di tingkat / kelas</td><td>:</td><td><?php echo $bioper->ditingkatkelas; ?></td></tr>

              <tr style="font-weight:bold;"><td colspan="4">BEA SISWA</td><td></td></tr>
              <tr><td>1.</td><td colspan="2">Jenis Bea Siswa dan lamanya<br>(Jika pernah mendapatkan)</td><td>:</td><td><?php echo $bioper->jenis_bea; ?></td></tr>
            </table>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
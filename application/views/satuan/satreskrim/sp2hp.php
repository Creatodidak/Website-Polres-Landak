<div class="col-md-10 offset-md-1" style="background-color: #fff">
<div class="row">
    

    <div class="col-md-12 text-center" style="margin-top: 20px;">
        <img src="http://4.bp.blogspot.com/-u376u-5omPs/TwBFY4Xh08I/AAAAAAAAEeU/UfEtmdrVHrQ/s1600/LOGO+POLRI.png" alt="" height="150px">
    <br/>
        <h3><b>SP2HP ONLINE SAT RESKRIM POLRES LANDAK</b></h3>
    </div>
    
<div class="col-md-8 offset-md-2 border" style="margin-bottom: 10px; margin-top: 10px">
      <div class="col-md-12" style="padding: 10px;">
        <?php $attributes = array('class' => 'row'); ?>
        <?php echo form_open('satreskrim/sp2hp',$attributes);?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukan Kode Unik Anda" aria-label="Kode Unik" aria-describedby="basic-addon2" name="keyword">
          <div class="input-group-append">
            <button class="btn btn-outline-primary" type="submit">Cari Data</button>
          </div>
        </div>
        <?php echo form_close();
        foreach ($sp2hp as $sp2hp): ?>
        <object
        type="application/pdf"
        data="/<?php
        if (!empty($sp2hp->a5)){  echo $sp2hp->a5;}
        elseif (!empty($sp2hp->a4)) {echo $sp2hp->a4;}
        elseif (!empty($sp2hp->a3)) {echo $sp2hp->a3;}
        elseif (!empty($sp2hp->a2)) {echo $sp2hp->a2;}
        elseif (!empty($sp2hp->a1)) {echo $sp2hp->a1;}
        else {echo "tidak ada data";
        }
        ?>"
        width="100%"
        height="100%"
        ></object>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="col-md-8 offset-md-2" style="text-align: justify;margin-top: 20px;border-left: 10px solid red">

Surat Pemberitahuan Perkembangan Hasil Penyidikan (SP2HP) merupakan hak bagi pelapor. Dalam hal menjamin akuntabilitas dan transparansi penyelidikan /penyidikan, penyidik wajib memberikan SP2HP kepada pihak pelapor baik diminta atau tidak diminta secara berkala.<br/><br/>

Berdasarkan Peraturan Kepala Kepolisian Negara Republik Indonesia Nomor 12 Tahun 2009 tentang Pengawasan dan Pengendalian Penanganan Perkara Pidana di Lingkungan Kepolisian Negara Republik Indonesia, pasal 39 ayat 1, berbunyi dalam hal menjamin akuntabilitas dan transparansi penyidikan, penyidik wajib memberikan SP2HP kepada pihak pelapor baik diminta atau tidak diminta secara berkala paling sedikit 1 kali setiap 1 bulan.
SP2HP sekurang-kurangnya memuat tentang:<br/><br/>
<ul style="list-style-type: decimal;">
<li>pokok perkara;</li>
<li>tindakan penyidikan yang telah dilaksanakan dan hasilnya;</li>
<li>masalah/kendala yang dihadapi dalam penyidikan;</li>
<li>rencana tindakan selanjutnya; dan </li>
<li>himbauan atau penegasan kepada pelapor tentang hak dan kewajibannya demi kelancaran dan keberhasilan penyidikan.</li>
</ul><br/><br/>


SP2HP yang dikirimkan kepada pelapor, ditandatangani oleh Ketua Tim Penyidik dan diketahui oleh Pengawas Penyidik, tembusannya wajib disampaikan kepada atasan langsung.<br/><br/>

SP2HP merupakan layanan kepolisian yang memberikan informasi kepada masyarakat sampai sejauh mana perkembangan perkara yang ditangani oleh pihak Kepolisian. Sehingga dengan adanya transparansi penanganan perkara, masyarakat dapat menilai kinerja Kepolisian dalam menangani berbagai perkara tindak pidana yang terjadi di masyarakat.
Dalam SP2HP, di sisi pojok kanan atas tertera kode yang mengindikasikan keterangan:<br/><br/>
<ul style="list-style-type: disc;">
<li>A1: Perkembangan hasil penelitian Laporan;</li>
<li>A2: Perkembangan hasil penyelidikan blm dapat ditindaklanjuti ke penyidikan;</li>
<li>A3: Perkembangan hasil penyelidikan akan dilakukan penyidikan;</li>
<li>A4: Perkembangan hasil penyidikan;</li>
<li>A5: SP3 (Surat Perintah Pemberhentian Penyelidikan)</li>
</ul>


        
    </div>
    
<div class="col-md-12 text-center text-xl" style="margin-top: 30px; margin-bottom: 30px;">

        <img class="h-16 lg:h-24" src="https://dumaspresisi.polri.go.id/dumaspro/media/homepage_v1/polisi_presisi.webp" alt="" height="85px">
        Prediktif, Responsibilitas, Transparansi Berkeadilan
        <img class="h-16 lg:h-24" src="https://dumaspresisi.polri.go.id/dumaspro/media/homepage_v1/polwan.webp" alt="" height="85px">
    </div>

</div>
</div>




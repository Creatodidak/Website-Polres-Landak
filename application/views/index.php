<?php

/***
1. Header
2. Navigasi
3. Banner Atas
4. Survey Kepuasan Masyarakat
5. Jadwal Pelayanan
6. Pejabat Utama Polres Landak
7. Berita Polres Landak
8. Footer


Script jika ingin banner model lain

<div class="page-hero bg-image " style="background-image: url(assets/img/bg-banner.jpg);">
      <div class="hero-section">
        <div class="container text-center wow zoomIn">
          <span class="subhead">SELAMAT DATANG DI WEBSITE</span>
          <h1 class="display-4">KEPOLISIAN RESOR LANDAK</h1>
          <a href="#" class="btn btn-primary">Mari Menjelajah!</a>
        </div>
      </div> 
</div>

***/

/*** HEADER***/
include 'beranda/komponen/header.php'; 

/*** NAVIGASI***/
include 'beranda/komponen/navigasi.php'; 

/*** BANNER ATAS***/
?><img src="assets/img/bg-banner.jpg" alt="header" width="100%"><?php

/*** SURVEY KEPUASAN MASYARAKAT***/
/***include 'beranda/komponen/survey.php'; ***/

/*** JADWAL PELAYANAN***/
include 'beranda/komponen/jadwalpelayanan.php'; 

/*** PJU POLRES LANDAK***/
include 'beranda/komponen/pejabatutama.php'; 

/*** BERITA***/
include 'beranda/komponen/berita.php'; 

/*** FOOTER***/
include 'beranda/komponen/footer.php'; 

?>
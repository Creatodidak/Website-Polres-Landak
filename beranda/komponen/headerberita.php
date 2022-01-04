<!DOCTYPE html>
<html lang="ID">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php foreach($bacaberita->result() as $beritahumas){ ?>
  <title> <?php echo strtoupper($beritahumas->judul_blog);?> | <?php echo $beritahumas->publish;?> | Polres Landak | POLRI PRESISI </title>
  <!-- Primary Meta Tags -->
  <meta name="title" content="<?php echo strtoupper($beritahumas->judul_blog);?> | <?php echo $beritahumas->publish;?> | Polres Landak | POLRI PRESISI ">
  <meta name="description" content="<?php echo $beritahumas->isi_blog;?>">
  <meta name="keywords" content="polres landak, polres landak polda kalbar, polres landak kriminal">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="Indonesian">
  <meta name="author" content="Creatodidak">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo base_url();?>berita/read/<?php echo $beritahumas->id_blog;?>">
  <meta property="og:title" content="<?php echo strtoupper($beritahumas->judul_blog);?> | <?php echo $beritahumas->publish;?> | Polres Landak | POLRI PRESISI ">
  <meta property="og:description" content="<?php echo $beritahumas->isi_blog;?>">
  <meta property="og:image" content="<?php echo base_url($beritahumas->foto_blog);?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo base_url();?>berita/read/<?php echo $beritahumas->id_blog;?>">
  <meta property="twitter:title" content="<?php echo strtoupper($beritahumas->judul_blog);?> | <?php echo $beritahumas->publish;?> | Polres Landak | POLRI PRESISI ">
  <meta property="twitter:description" content="<?php echo $beritahumas->isi_blog;?>">
  <meta property="twitter:image" content="<?php echo base_url($beritahumas->foto_blog);?>">

  <?php } ?>
  <link rel="icon" type="image/x-icon" href="/assets/img/person/person_1.png">

  <link rel="stylesheet" href="/assets/css/maicons.css">

  <link rel="stylesheet" href="/assets/css/bootstrap.css">

  <link rel="stylesheet" href="/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="/assets/css/theme.css">

  
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
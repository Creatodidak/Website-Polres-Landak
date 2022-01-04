<!DOCTYPE html>
<html>
<head lang="id">
    


    <?php foreach($bacaberita->result() as $beritahumas){ ?>
        <meta charset="UTF-8"/>
        <title><?php echo strtoupper($beritahumas->judul_blog); ?> | PolresLandak | Polri Presisi </title>
        <link rel="stylesheet" type="text/css" href="/assets/beranda/style.css"/>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo strtoupper($beritahumas->judul_blog); ?>" />
        <meta property="og:description" content="<?php echo substr($beritahumas->isi_blog,0,300); ?>" />
        <meta property="og:url" content="https://www.polreslandak.com/berita/baca/<?php echo $this->uri->segment(3);?>" />
        <meta property="og:image" content="https://www.polreslandak.com/<?php echo $beritahumas->foto_blog; ?>" />
    <?php } ?>
               
</head>
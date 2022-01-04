
<?php foreach($website->result() as $iden); ?>
<div class="col-md-12 col-lg12">
<div id="carousel-example-2" class="carousel slide carousel-fade row" data-ride="carousel">

  <div class="carousel-inner col-md-9" style="max-height: 450px; padding: 0;" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="<?php echo base_url()?>/assets/v2/beranda/images/polres.JPG" alt="First slide" width="100%" >
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Selamat datang di Website Humas Polres Landak</h3>
      </div>
    </div>
    <?php foreach($lastblog->result() as $newb){
    echo '<div class="carousel-item"><div class="view"><img class="d-block fluid" src="';
      echo base_url($newb->foto_blog);
      echo'" style="width:100%; height:auto; overflow: hidden;"></div><div class="mask rgba-black"></div><div class="carousel-caption"><h3 class="h3-responsive" ><a class="pull-left" href="';
      echo base_url('beranda/berita/'.$newb->id_blog.'');
      echo'" padding="20px" style="color: white; text-decoration:none; font-weight: bold;">';
      echo $newb->judul_blog;
    echo '</a>
    </h3>
  </div></div>'
  ;}
  ?>
  
</div>

<div class="col-md-3 " style="padding: 0;">
  <img src="<?php echo base_url(); ?>/assets/v2/beranda/images/presisi.jpg" alt="Card image cap" width="100%" height="450px">
  
</div>
</div>
</div>


<div class="col-md-10 offset-md-1" style="background-color: #fff">
<section class="berita" id="berita">

<div class="col-md-10 offset-md-1" style="padding-top: 20px">
  <h2 class="page-headline large text-left"><SPAN style="padding:5px; background-color: #007bff;color: white; font-weight: bold;">NOMOR</SPAN> PENTING</h2>
  <table class="table table-sm table-bordered table-hover" style="font-size: small; padding: 10px; margin-top: 30px">  
  <tr class="text-center bg-primary text-uppercase">
    <th scope="col">No</th>
    <th scope="col">Nama</th>
    <th scope="col">Jabatan</th>
    <th scope="col">No. Handphone</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Ipda I Nyoman Astika, S.H.</td>
    <td class="text-center">KSPKT Polres Landak</td>
    <td class="text-center">0811 5682 000</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Kompol Pesta Tampubolon</td>
    <td class="text-center">Kapolsek Ngabang</td>
    <td class="text-center">0813 5201 6499</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Iptu Murdiyanto</td>
    <td class="text-center">Kapolsek Air Besar</td>
    <td class="text-center">0822 5438 1483</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Ipda Rinto, S.sos.</td>
    <td class="text-center">Kapolsek Kuala Behe</td>
    <td class="text-center">0813 5255 5111</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Ipda Yulius Van Chanel. TK, S.I.P.</td>
    <td class="text-center">Kapolsek Sengah Temila</td>
    <td class="text-center">0897 2702 002</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Ipda Didik Pramono, S.H.</td>
    <td class="text-center">Kapolsek Sebangki</td>
    <td class="text-center">0858 2147 6271</td>
  </tr>
  <tr>
    <td>7</td>
    <td>Iptu Dahman Saragih</td>
    <td class="text-center">Kapolsek Menyuke</td>
    <td class="text-center">0821 5427 2206</td>
  </tr>
  <tr>
    <td>8</td>
    <td>Ipda Hendra Setiyawan, Amd.</td>
    <td class="text-center">Kapolsek Meranti</td>
    <td class="text-center">0812 5614 393</td>
  </tr>
  <tr>
    <td>9</td>
    <td>Iptu Anuar Syarifudin, S.H., M.H.</td>
    <td class="text-center">Kapolsek Mandor</td>
    <td class="text-center">0852 4891 9191</td>
  </tr>
  <tr>
    <td>10</td>
    <td>Iptu Asep Tabroni</td>
    <td class="text-center">Kapolsek Mempawah Hulu</td>
    <td class="text-center">0812 5688 070</td>
  </tr>
  <tr>
    <td>11</td>
    <td>Iptu Burhan Nuddin, S.H.</td>
    <td class="text-center">Kapolsek Menjalin</td>
    <td class="text-center">0812 5748 4833</td>
  </tr>
</table>
</div>

<div class="col-md-10 offset-md-1">
  <div class="row">
<div class="col-md-3" >
      
      <div class="fb-page" data-href="https://www.facebook.com/humasreslandak/" data-tabs="timeline" data-width="" data-height="320" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/humasreslandak/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/humasreslandak/">HUMAS Polres Landak</a></blockquote></div><br>
    </div>
    <div class="col-md-9">
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
      <div class="elfsight-app-e7c12cfa-2654-4590-b96f-185711b46954" style="z-index: 2"></div>
    </div>
  </div>
  </div>
<div class="col-md-10 py-3">
  
  <h2 class="page-headline large text-right"><SPAN style="padding:5px; background-color: #007bff;color: white; font-weight: bold;">BERITA</SPAN> TERBARU KAMI</h2>
  <p class="text-right">#bersamalawan<b>HOAX</b></p>
</div>
<div class="col-md-10 offset-md-1">
  <div class="row inner-page">
    <div class="col-md-3">
      <img class="media-object" src="<?php echo base_url();?>assets/v2/beranda/images/onel.png" width="100%" />
      <div class="panel panel-warning">
        
        <div class="card">
          <div class="card-header bg-primary">
            Kategori
          </div>
          <ul class="list-group list-group-flush">
            <?php foreach($kategoriblog->result() as $katblog){ $blogdikategori= $this->Mblog->blogdikategori($katblog->id_kategoriblog); ?>
            <li class="list-group-item"><a style="color: #000" href="<?php echo base_url('beranda/kategoriblog/'.$katblog->parameter_kategoriblog); ?>"><i class="fa fa-tags" aria-hidden="true"></i> <?php echo $katblog->nama_kategoriblog.'  <span class="badge badge-primary">'.$blogdikategori->num_rows().'</span'; ?></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-6 " style="color: #000">
      <ul class="list-unstyled">
        <?php foreach($lastblog->result() as $newb){ ?>
        <li class="media py-3" >
          <img class="media-object" src="<?php echo base_url($newb->foto_blog); ?>" alt="..." style="width:100px;height: 70px;">
          <div class="media-body" style="padding: 2px">
            <h4>  <a href="<?php echo base_url('beranda/berita/'.$newb->id_blog); ?>" style="color: #000; font-weight: bold; font-size: medium;"><?php echo $newb->judul_blog; ?></a></h4>
            <small><p><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
              <?php echo tglwaktu($newb->tglinput_blog); ?> <i class="fa fa-tags" aria-hidden="true"></i>
            <?php echo $newb->nama_kategoriblog; ?> <br><i class="fa fa-eye" aria-hidden="true"></i> Dibaca
 <?php
       $id = $newb->id_blog;
      $query = $this->db->query("SELECT DISTINCT ipaddress FROM counter WHERE postid = '$id'");
      echo $query->num_rows();
      ?> x</p></small>
          </div>
        </li>
        <?php } ?>
      </ul>
      <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" style="max-height: 250px" role="listbox">
          <div class="carousel-item active">
            <div class="view">
              <img class="d-block w-100" src="<?php echo base_url()?>/assets/v2/beranda/images/polres.JPG" alt="First slide" >
              <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
              <h3 class="h3-responsive">Selamat datang di Website Humas Polres Landak</h3>
            </div>
          </div>
          <?php foreach($newfoto->result() as $gal): ?>
          <div class="carousel-item">
            <div class="view">
              <img class="d-block w-100" src="<?php echo base_url($gal->foto_gallery); ?>" style="max-height: 250px;overflow: hidden;">
            </div>
          </div>
          
          <?php endforeach; ?>
          
        </div>
      </div>
    </div>
    <div class="col-md-3">
       <a class="twitter-timeline" data-lang="id" data-height="500" href="https://twitter.com/reslandak?ref_src=twsrc%5Etfw">Tweets by reslandak</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      
    </div>
</div>
</div>
</section>

<div class="col-md-10 offset-md-1" style="z-index: 2">
<center>
<?php foreach($slider->result() as $sli){ ?>
<img src="<?php echo base_url($sli->foto_slider); ?>" alt="" style="max-height: 100px; width: 100%">
<?php } ?>
</center>
</div>

<div class="col-md-10 offset-md-1" style="z-index: 2">
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-b2eefb0b-b2cf-4e8c-aa86-705c22023260"></div>
</div>
</div>



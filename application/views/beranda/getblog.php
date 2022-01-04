<?php
$device = @$_SERVER[HTTP_USER_AGENT];
$ipadr = @$_SERVER['REMOTE_ADDR'];
?>

<div class="container" style="margin-top: 50px">
  <div class="row">


    <div class="col-md-8">
      <center>
<?php foreach($slider->result() as $sli){ ?>
<img src="<?php echo base_url($sli->foto_slider); ?>" alt="" style="max-height: 100px; width: 100%">
<?php } ?>
</center>
<?php if($getblog->num_rows() == 0) { redirect(base_url('notfound')); } ?>
<?php foreach($getblog->result() as $detail); ?>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Berita</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="/home/kategoriblog/<?php echo $detail->nama_kategoriblog; ?>"><?php echo $detail->nama_kategoriblog; ?></a></li>
          <li class="breadcrumb-item"><?php echo $detail->publish; ?></li>

          
        </ol>
      </nav>

      <img src="<?php echo base_url($detail->foto_blog); ?>" alt="blog" style="width: 100%">
      <h4 style="text-align: justify;"><?php echo $detail->judul_blog; ?><span class="divider-left"></span></h4>
      <small><i class="fa fa-calendar"></i> <?php echo tglwaktu($detail->tglinput_blog);?> | Dibaca <?php
       $id = $this->uri->segment(3);
      $query = $this->db->query("SELECT DISTINCT ipaddress FROM counter WHERE postid = '$id'");
      echo $query->num_rows();
      ?> kali</small>
      <p class="margin10 text-justify"> <?php echo $detail->isi_blog; ?> </p>
      <p class="pull-left"> <strong>Bagikan Berita Ini : </strong> </p>
      <!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="www.polreslandak.com/beranda/berita/<?php echo $detail->id_blog; ?>" data-a2a-title="<?php echo $detail->publish; ?> | <?php echo $detail->judul_blog; ?>">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_telegram"></a>
</div>
<script>
var a2a_config = a2a_config || {};
a2a_config.locale = "id";
</script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
    </div>
    <div class="col-md-4 " style="color: #e10019">
      <ul class="list-unstyled">
        <?php foreach($newblog->result() as $newb){ ?>
        <li class="media py-3" >
          <img class="media-object" src="<?php echo base_url($newb->foto_blog); ?>" alt="..." style="width:100px;height: 70px;">
          <div class="media-body" style="padding: 2px">
            <p style="text-align: justify;">  <a href="<?php echo base_url('home/berita/'.$newb->id_blog); ?>" style="color: #222222; font-weight: bold;"><?php echo $newb->judul_blog; ?></a></p>
            <p><small><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
              <?php echo tglwaktu($newb->tglinput_blog); ?> <i class="fa fa-tags" aria-hidden="true"></i>
            <?php echo $newb->nama_kategoriblog; ?></small></p>
          </div>
        </li>
        <?php }?>
      </ul>
    </div>
  </div>
</div>
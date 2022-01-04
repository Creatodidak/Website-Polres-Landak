<?php if($this->session->userdata('id_siswabaru')!=null){ redirect(base_url('siswabaru')); } ?>
<?php foreach($website->result() as $iden); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        
<meta name="facebook-domain-verification" content="u5mwpgfke6lnyjw6drhmbz7e3qtui8" />
    <?php
if ($this->uri->segment(3) == FALSE)
{
        echo '

        <meta charset="utf-8">
        <meta name="keywords" content="';echo $iden->nama_website; echo '"/>
        <meta name="description" content="';echo $iden->nama_website; echo '"/>
        <meta name="copyright" content="';echo $iden->nama_website; echo '">
        <meta http-equiv="Copyright" content="';echo $iden->nama_website; echo '" />
        <meta itemprop="name" content="';echo $iden->nama_website; echo '" />
        <meta itemprop="description" content="';echo $iden->nama_website; echo '" />
        <title>Humas Polres Landak</title>
        <meta property="og:url" content="';echo $detail->judul_blog; echo '">        
        <meta property="og:image" content="';echo base_url($detail->foto_blog); echo '">


        ';
}
else
{       foreach($getblog->result() as $detail);
        echo'
        <meta property="og:url" content="https://www.polreslandak.com/beranda/berita/'; echo $detail->id_blog;echo'" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="';echo $detail->publish;echo' | '; echo $detail->judul_blog;echo '" />
        <meta property="og:description" content="Klin untuk baca berita" />
        <meta property="og:image" content="';echo $detail->foto_blog; echo '" />

        <meta charset="utf-8">
        <meta name="keywords" content="';echo $iden->nama_website; echo '"/>
        <meta name="description" content="';echo $iden->nama_website; echo '"/>
        <meta name="copyright" content="';echo $iden->nama_website; echo '">
        <meta http-equiv="Copyright" content="';echo $iden->nama_website; echo '" />
        <meta itemprop="name" content="';echo $iden->nama_website; echo '" />
        <meta itemprop="description" content="';echo $iden->nama_website; echo '" />
        <title>';echo $detail->publish;echo' | '; echo $detail->judul_blog;echo '</title>
        <meta property="og:url" content="';echo $detail->judul_blog; echo '">        
        <meta property="og:image" content="';echo base_url($detail->foto_blog); echo '">
';
}
?>

        <meta name="language" content="Indonesia">
        <meta property="og:type" content="article">
        <meta name="robots" content="index,follow" />
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="imagetoolbar" content="no" />
        <link rel="shortcut icon" type="image/png" href="https://seeklogo.com/images/D/divisi-humas-polri-logo-BC7A7A1059-seeklogo.com.png"/>
        <meta name="revisit-after" content="7" />
        <meta name="webcrawlers" content="all" />
        <meta name="rating" content="general" />
        <meta name="spiders" content="all" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        
       
        <!-- Bootstrap core CSS -->
        <!-- Latest compiled and minified CSS -->
        <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v8.0" nonce="8MfUOyp0"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
        <link href="<?php echo base_url();?>assets/v2/beranda/stylex.css" rel="stylesheet">
<style type="text/css">
  
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #2d3332 !important
}
#footer h5{
  padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
  padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
  font-size:25px;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.social li:hover a i {
  font-size:30px;
  margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
  color:#ffffff;
}
#footer ul.social li a:hover{
  color:#eeeeee;
}
#footer ul.quick-links li{
  padding: 3px 0;
  -webkit-transition: .5s all ease;
  -moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.quick-links li:hover{
  padding: 3px 0;
  margin-left:5px;
  font-weight:700;
}
#footer ul.quick-links li a i{
  margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
  #footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}

.dropdown:hover > .dropdown-menu {
    display: block;
}
.dropdown > .dropdown-toggle:active {
    /*Without this, clicking will make it sticky*/
    pointer-events: none;
}
</style>

    </head>

    <body data-spy="scroll" data-target="#topnav" style="background-image: url('<?php echo base_url("assets/v2/beranda/images/bgx.jpg") ?>');background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;">

<!-- Image and text -->
<nav class="navbar navbar-primary bg-primary">
  <p style="font-weight: bold;font-size: larger;color: white; margin: 0;">
    <img src="<?php echo base_url('assets/v2/beranda/images/polreslandak2.png')?>" width="30"  alt="" loading="lazy">
    KEPOLISIAN RESOR LANDAK
</p>
</nav>
<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
  <div class="container">

    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="list-style-type: none;">
    <ul class="navbar-nav mr-auto" style="font-size: small;">
      <?
foreach ($menu->result() as $menuhead){
// Query untuk mencari data sub menu
$sub_menu = $this->db->get_where('submenu', array('id_menu' => $menuhead->id_menu));
// periksa apakah ada sub menu
if ($sub_menu->num_rows() > 0) {
// main menu dengan sub menu
echo "
<li class='nav-item dropdown'>
  <a class='nav-link dropdown-toggle' href='".$menuhead->link_menu."' id='navbarDropdown2' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
    ".$menuhead->nama_menu."
  </a>
  <div class='dropdown-menu'>";
    foreach ($sub_menu->result() as $sub) {
    echo " <a class='dropdown-item' href='".$sub->link_submenu."'>".$sub->nama_submenu."</a>";}}
    else {
    // main menu tanpa sub menu
    echo "
    <li class='nav-item'>
      <a class='nav-link' href='".$menuhead->link_menu."'>".$menuhead->nama_menu."</a>
    </li>";
    
    }
    }
    ?>
  </ul>
    </div>
  </div>
</nav>
        
        <?php echo $_content; ?>
        
<!-- Footer -->
  <section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5><b>Kepolisian Resor Landak</b></h5>
          <ul class="list-unstyled quick-links" style="color: #fff">
          Jalan Raya Ngabang Km. 3, Desa Hilir Kantor, Kecamatan Ngabang, Kabupaten Landak<br>
          Kalimantan Barat
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <ul class="list-unstyled quick-links text-center">
            <div id="histats_counter"></div>
            <script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4225704,4,236,241,20,00011111']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4225704&101" alt="sites stats" border="0"></a></noscript>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Website Polri Lainnya</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="https://polri.go.id"><i class="fa fa-angle-double-right"></i>Polri</a></li>
            <li><a href="https://humas.polri.go.id"><i class="fa fa-angle-double-right"></i>Humas Polri</a></li>
            <li><a href="https://pid.kalbar.polri.go.id"><i class="fa fa-angle-double-right"></i>PPID Polda Kalbar</a></li>
          </ul>
        </div>
      </div>
      
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p class="h6"><b>©Humas Polres Landak <?php echo date("Y"); ?></b></p>
        </div>
        <hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->

<!---
            <div class="col-sm-12 fixed-bottom footer">
 <span style="  background: #E10019;padding: 20px;font-weight: bold;">BREAKING NEWS</span>
  <marquee class="GeneratedMarquee" direction="right" scrollamount="4" behavior="scroll">JANGAN LUPA PAKAI MASKER | BERSAMA LAWAN COVID - 19 | #BERSATULAWANHOAX | JANGAN LUPA PAKAI MASKER | BERSAMA LAWAN COVID - 19 | #BERSATULAWANHOAX | JANGAN LUPA PAKAI MASKER | BERSAMA LAWAN COVID - 19 | #BERSATULAWANHOAX | JANGAN LUPA PAKAI MASKER | BERSAMA LAWAN COVID - 19 | #BERSATULAWANHOAX | JANGAN LUPA PAKAI MASKER | BERSAMA LAWAN COVID - 19 | #BERSATULAWANHOAX | JANGAN LUPA PAKAI MASKER | BERSAMA LAWAN COVID - 19 | #BERSATULAWANHOAX | JANGAN LUPA PAKAI MASKER | BERSAMA LAWAN COVID - 19 | #BERSATULAWANHOAX | </marquee>
 
            </div>
    --->


<div class="fixed-bottom ticker-container">
  <div class="ticker-caption">
    <p><i class="fa fa-bolt" aria-hidden="true"></i>
 Breaking News</p>
  </div>
  <ul>
    <?php foreach($lastblog->result() as $newb){
    echo '<div><li><span>';
    echo $newb->judul_blog;
    echo '<a href="';echo base_url('beranda/berita/'.$newb->id_blog.'');echo'">';
      
    echo ' Baca Selengkapnya </a></span></li>
    </div>'
  ;}
  ?>
  </ul>


               </div>



    </div>              <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/v2/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/v2/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/v2/js/ticker.js" ></script>
<!-- Start of LiveChat (www.livechatinc.com) code -->

<!-- End of LiveChat code -->
<div class="icon-bar">
  <a href="https://www.facebook.com/humaspolres.landak" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="https://twitter.com/reslandak" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="mailto:humaspolreslandak@gmail.com" class="google"><i class="fa fa-google"></i></a>
  <a href="https://www.youtube.com/channel/UCbp_b-2WKzpOWnbXqka8-pA" class="youtube"><i class="fa fa-youtube"></i></a>
</div>


</body>
</html>
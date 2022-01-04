<!--- BERITA-->
<div class="page-section bg-light">
    <div class="container">
      

      <h1 class="text-center wow fadeInUp">BERITA POLRES LANDAK</h1>
      <center>  <img src="assets/img/partner.jpg" alt="header" class="partner"></center>
      <div class="row mt-5">
        

        <!--- BERITA LIST-->
        <?php foreach($berita->result() as $berita){ ?>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#"><?php echo $berita->nama_kategoriblog; ?></a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="<?php echo $berita->foto_blog; ?>" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="/berita/read/<?php echo $berita->id_blog; ?>"><?php echo ucwords($berita->judul_blog); ?></a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="assets/img/person/person_1.png" alt="">
                  </div>
                  <span><?php echo $berita->publish; ?></span>
                </div>
                <span class="mai-time"></span> 1 week ago
              </div>
            </div>
          </div>
        </div>
        <?php } ?>

        


        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="/berita" class="btn btn-primary">TEMUKAN BERITA LAINNYA</a>
        </div>

      </div>
    </div>
  </div>

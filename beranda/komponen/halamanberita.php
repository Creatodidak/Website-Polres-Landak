<div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">

            <!--- DAFTAR BERITA DIMULAI DISINI-->

            <?php foreach($berita->result() as $berita){ ?>

            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#"><?php echo $berita->nama_kategoriblog; ?></a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="/<?php echo $berita->foto_blog; ?>" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="/berita/read/<?php echo $berita->id_blog; ?>"><?php echo $berita->judul_blog; ?></a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="/assets/img/person/person_1.png" alt="">
                      </div>
                      <span><?php echo $berita->publish; ?></span>
                    </div>
                    <span class="mai-time"></span> 1 week ago
                  </div>
                </div>
              </div>
            </div>

            <?php } ?>
            <!--- DAFTAR BERITA BERAKHIR DISINI-->

            <!--- PAGINASI-->
            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
            
          </div> <!-- .row -->
        </div>
        <div class="col-lg-4">

        <!--- SIDEBAR-->
        <?php include 'beranda/komponen/sidebarberita.php' ?>
        <!--- AKHIR SIDEBAR-->
        
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->
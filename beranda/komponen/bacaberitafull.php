<?php foreach($bacaberita->result() as $beritahumas){ ?>

<div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="index.html">Berita</a></li>
              <li class="breadcrumb-item"><a href="blog.html"><?php echo $beritahumas->publish;?></a></li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="/<?php echo $beritahumas->foto_blog;?>" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">Dipublish oleh</span> <a href="#"><?php echo $beritahumas->publish;?></a>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a href="#"><?php echo $beritahumas->tglinput_blog;?></a>
              </div>
              <span class="divider">|</span>
              <div>
                <a href="#"><?php echo $beritahumas->nama_kategoriblog;?></a>
              </div>
            </div>
            <h4 class="post-title h4"><?php echo nl2br($beritahumas->judul_blog);?></h4>
            <div class="post-content">
            <?php echo $beritahumas->isi_blog;?> 
            </div>
          </article> <!-- .blog-details -->

        </div>
        <div class="col-lg-4">
          
          <!--- SIDEBAR-->
          <?php include 'beranda/komponen/sidebarberita.php' ?>
          <!--- AKHIR SIDEBAR-->


        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <?php } ?>
          <!--- SIDEBAR-->
          <div class="sidebar">

            <!--- ISI SIDEBAR DIMULAI DISINI-->

            <!--- KATEGORI BERITA-->
            <div class="sidebar-block">
              <h3 class="sidebar-title">KATEGORI BERITA</h3>
              <ul class="categories">
              <?php foreach($kategori->result() as $kategori){ ?>
                <li><a href="#"><?php echo $kategori->nama_kategoriblog; ?></a></li>
              <?php } ?>
              </ul>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">POLSEK JAJARAN</h3>
              <ul style="list-style-type: square; font-size: medium;">
              <li> Polsek Ngabang</li>
              <li> Polsek Air Besar</li>
              <li> Polsek Kuala Behe</li>
              <li> Polsek Sengah Temila</li>
              <li> Polsek Menyuke</li>
              <li> Polsek Meranti</li>
              <li> Polsek Sebangki</li>
              <li> Polsek Mandor</li>
              <li> Polsek Menjalin</li>
              <li> Polsek Mempawah Hulu</li>
              </ul>
            </div>
            
            <?php /***
            <!--- POSTINGAN TERAKHIR-->
            <div class="sidebar-block">
              <h3 class="sidebar-title">BERITA TERAKHIR</h3>

              <!--- DAFTAR POSTINGAN TERAKHIR DIMULAI DISINI-->
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/blog/blog_1.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                  </div>
                </div>
              </div>
              <!--- DAFTAR POSTINGAN TERAKHIR BERAKHIR DISINI-->
            </div>
            **/ ?>

            <!--- TAG BERITA-->
            <div class="sidebar-block">
              <h3 class="sidebar-title">TAGAR BERITA</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

          </div> 
          <!--- AKHIR SIDEBAR-->
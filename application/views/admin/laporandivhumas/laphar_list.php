<!doctype html>
<html>
  <head>
    <title>Laporan Div Humas</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" />
    <style>
      body {
        padding: 15px;
      }
    </style>
  </head>
  <body>
  <div class="container" style="margin-bottom: 10px">
      <div>
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#divhumas">Laporan Div Humas</a></li>
          <li><a data-toggle="tab" href="#keseluruhan">Laporan Keseluruhan</a></li>
          <li><a data-toggle="tab" href="#rekap">Rekap Berita Div Humas</a></li>
          <li><a data-toggle="tab" href="#rekapsemua">Rekap Semua Berita</a></li>
        </ul>

            <div class="tab-content">
                    <div id="divhumas" class="tab-pane fade in active">
                        <div class="container" id="laporan">
                            <?php $date = date("Y/m/d"); ?>Kepada *Yth. Kapolres Landak*<br>
                            Dari *Paur Humas Res Landak*<br>
                            <br>
                            Selamat malam komandan,<br>
                            izin melaporkan laporan berita Polres Landak di halaman Div Humas Mabes Polri hari <?php echo format_indo(date('Y-m-d'));?> adalah sbb:<br>
                            <br>
                            1. Humas Polres Landak : <?php echo $polreslandak; ?><br>
                            2. Polsek Ngabang : <?php echo $polsekngabang; ?><br>
                            3. Polsek Air Besar : <?php echo $polsekairbesar; ?><br>
                            4. Polsek Kuala Behe : <?php echo $polsekkualabehe; ?><br>
                            5. Polsek Sengah Temila : <?php echo  $polseksengahtemila; ?><br>
                            6. Polsek Menyuke : <?php echo $polsekmenyuke; ?><br>
                            7. Polsek Sebangki : <?php echo $polseksebangki; ?><br>
                            8. Polsek Meranti : <?php echo $polsekmeranti; ?><br>
                            9. Polsek Mandor : <?php echo $polsekmandor; ?><br>
                            10. Polsek Mempawah Hulu : <?php echo $polsekmempawahhulu; ?><br>
                            11. Polsek Menjalin : <?php echo $polsekmenjalin; ?><br>
                            <br>
                            Lampiran:<br>
                            <br>
                            A. Humas Polres Landak<br>
                            <br>
                            <?php 
                                      foreach ($laporanpolreslandak as $laporan){ ?> <?php echo ++$i1 ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> B. Polsek Ngabang<br>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekngabang as $laporan){ ?> <?php echo ++$i2 ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> C. Polsek Air Besar<br>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekairbesar as $laporan){ ?> <?php echo ++$i3 ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> D. Polsek Kuala Behe<br>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekkualabehe as $laporan){ ?> <?php echo ++$i4 ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> E. Polsek Sengah Temila<br>
                            <br>
                            <?php 
                                      foreach ($laporanpolseksengahtemila as $laporan){ ?> <?php echo ++$i5 ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> F. Polsek Menyuke<br>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmenyuke as $laporan){ ?> <?php echo ++$i6 ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> G. Polsek Sebangki<br>
                            <br>
                            <?php 
                                      foreach ($laporanpolseksebangki as $laporan){ ?> <?php echo ++$i7 ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> H. Polsek Meranti<br>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmeranti as $laporan){ ?> <?php echo ++$i8 ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> I. Polsek Mandor<br>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmandor as $laporan){ ?> <?php echo ++$i9 ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> J. Polsek Mempawah Hulu<br>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmempawahhulu as $laporan){ ?> <?php echo ++$i10 ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> K. Polsek Menjalin<br>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmenjalin as $laporan){ ?> <?php echo ++$i11 ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "", $laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> demikian yang dapat kami laporkan komandan,<br>
                            terimakasih.<br>
                            <button type="button" class="btn btn-primary" onclick="copyDivToClipboard()">Salin Data</button>
                          </div>
                          <script>
                                  function copyDivToClipboard() {
                                    var range = document.createRange();
                                    range.selectNode(document.getElementById("laporan"));
                                    window.getSelection().removeAllRanges(); // clear current selection
                                    window.getSelection().addRange(range); // to select text
                                    document.execCommand("copy");
                                    window.getSelection().removeAllRanges(); // to deselect
                                    alert("Berhasil Di Copy!");
                                  }
                          </script>
                    </div>

                    <div id="keseluruhan" class="tab-pane fade in active">
                    <div class="container" id="keseluruhan">
                            <?php $date = date("Y/m/d"); ?>
                            Kepada *Yth. Kapolres Landak*<br>
                            Dari *Paur Humas Res Landak*<br>
                            <br>
                            Selamat malam komandan,<br>
                            izin melaporkan laporan berita Polres Landak di halaman Div Humas Mabes Polri hari <?php echo format_indo(date('Y-m-d'));?> adalah sbb:<br>
                            <br>
                            Total = *... Link Berita*
                            <br>
                            A.	Laman Website Div Humas Polri ( ... Berita )
                            <br>
                            <?php 
                                      foreach ($laporanpolreslandak as $laporan){ ?> <?php echo ++$i ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekngabang as $laporan){ ?> <?php echo ++$i ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekairbesar as $laporan){ ?> <?php echo ++$i ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekkualabehe as $laporan){ ?> <?php echo ++$i ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolseksengahtemila as $laporan){ ?> <?php echo ++$i?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmenyuke as $laporan){ ?> <?php echo ++$i ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolseksebangki as $laporan){ ?> <?php echo ++$i ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmeranti as $laporan){ ?> <?php echo ++$i?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <?php 
                                      foreach ($laporanpolsekmandor as $laporan){ ?> <?php echo ++$i ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmempawahhulu as $laporan){ ?> <?php echo ++$i ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmenjalin as $laporan){ ?> <?php echo ++$i ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "", $laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> 
                            
                            <br>
                            <br>
                            B.	Media Online dan Website Polres Landak ( ... berita )
                            <br>
                            <br>
                            
                            <?php foreach ($lapblog as $lap){ ?>
                                    <?php echo ++$start ?>. [<?php echo $lap->publish ?>] <?php echo $lap->judul_blog ?> http://polreslandak.com/home/getblog/<?php echo $lap->id_blog ?><br><br>
                            <?php } ?>

                            <?php 
                            foreach ($laporanxx as $laporanx){ ?>
                                    <?php echo ++$start ?>. [<?php echo $laporanx->satuan ?>] <?php echo $laporanx->laphar ?><br><br>
                            <?php } ?>
                            
                            
                            
                            
                            demikian yang dapat kami laporkan komandan,<br>
                            terimakasih.<br>
                            <button type="button" class="btn btn-primary" onclick="copyDivToClipboardkeseluruhan()">Salin Data</button>
                          </div>
                          <script>
                                  function copyDivToClipboardkeseluruhan() {
                                    var range = document.createRange();
                                    range.selectNode(document.getElementById("keseluruhan"));
                                    window.getSelection().removeAllRanges(); // clear current selection
                                    window.getSelection().addRange(range); // to select text
                                    document.execCommand("copy");
                                    window.getSelection().removeAllRanges(); // to deselect
                                    alert("Berhasil Di Copy!");
                                  }
                          </script>
                    </div>

                    <div id="rekap" class="tab-pane fade in active">
                    <div class="container" id="rekap">
                            <?php $date = date("Y/m/d"); ?>

                            <?php 
                                      foreach ($laporanpolreslandak as $laporan){ ?> <?php echo ++$ix ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekngabang as $laporan){ ?> <?php echo ++$ix ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekairbesar as $laporan){ ?> <?php echo ++$ix ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekkualabehe as $laporan){ ?> <?php echo ++$ix ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolseksengahtemila as $laporan){ ?> <?php echo ++$ix?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmenyuke as $laporan){ ?> <?php echo ++$ix ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolseksebangki as $laporan){ ?> <?php echo ++$ix ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmeranti as $laporan){ ?> <?php echo ++$ix?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <?php 
                                      foreach ($laporanpolsekmandor as $laporan){ ?> <?php echo ++$ix ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmempawahhulu as $laporan){ ?> <?php echo ++$ix ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmenjalin as $laporan){ ?> <?php echo ++$ix ?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "", $laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> 
                            
                            <br>
                            <br>
                            
                            <button type="button" class="btn btn-primary" onclick="copyDivToClipboardrekap()">Salin Data</button>
                          </div>
                          <script>
                                  function copyDivToClipboardrekap() {
                                    var range = document.createRange();
                                    range.selectNode(document.getElementById("rekap"));
                                    window.getSelection().removeAllRanges(); // clear current selection
                                    window.getSelection().addRange(range); // to select text
                                    document.execCommand("copy");
                                    window.getSelection().removeAllRanges(); // to deselect
                                    alert("Berhasil Di Copy!");
                                  }
                          </script>
                    </div>
                    <div id="rekapsemua" class="tab-pane fade in active">
                    <?php 
                                      foreach ($laporanpolreslandak as $laporan){ ?> <?php echo ++$icc?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekngabang as $laporan){ ?> <?php echo ++$icc?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekairbesar as $laporan){ ?> <?php echo ++$icc?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekkualabehe as $laporan){ ?> <?php echo ++$icc?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolseksengahtemila as $laporan){ ?> <?php echo ++$icc?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmenyuke as $laporan){ ?> <?php echo ++$icc?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolseksebangki as $laporan){ ?> <?php echo ++$icc?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmeranti as $laporan){ ?> <?php echo ++$icc?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <?php 
                                      foreach ($laporanpolsekmandor as $laporan){ ?> <?php echo ++$icc?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmempawahhulu as $laporan){ ?> <?php echo ++$icc?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?>
                            <br>
                            <?php 
                                      foreach ($laporanpolsekmenjalin as $laporan){ ?> <?php echo ++$icc?>. <?php echo ucfirst($laporan->laphardivhumas) .
                                      ' Http://humas.polri.go.id/'.
                                      $date. '/'. strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "", $laporan->laphardivhumas))).'/' ?><br>
                            <br>
                            <?php } ?> 
                            <?php foreach ($lapblog as $lap){ ?>
                                    <?php echo ++$icc?>. [<?php echo $lap->publish ?>] <?php echo $lap->judul_blog ?> http://polreslandak.com/home/getblog/<?php echo $lap->id_blog ?><br><br>
                            <?php } ?>

                            <?php 
                            foreach ($laporanxx as $laporanx){ ?>
                                    <?php echo ++$icc ?>. [<?php echo $laporanx->satuan ?>] <?php echo $laporanx->laphar ?><br><br>
                            <?php } ?>
                            
                            <button type="button" class="btn btn-primary" onclick="copyDivToClipboardsemua()">Salin Data</button>
                          </div>
                          <script>
                                  function copyDivToClipboardsemua() {
                                    var range = document.createRange();
                                    range.selectNode(document.getElementById("rekapsemua"));
                                    window.getSelection().removeAllRanges(); // clear current selection
                                    window.getSelection().addRange(range); // to select text
                                    document.execCommand("copy");
                                    window.getSelection().removeAllRanges(); // to deselect
                                    alert("Berhasil Di Copy!");
                                  }
                          </script>
                    </div>
            </div>
      </div>
</div>

  </body>
</html>
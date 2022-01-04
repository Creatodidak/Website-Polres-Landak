<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" />
    <style>
      body {
        padding: 15px;
      }
    </style>
  </head>
  <body>
    <div class="container" style="margin-bottom: 10px"> <?php echo format_indo(date('Y-m-d'));?>, <br /><br /><br />
      <div>
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#blog">Website Polres Landak</a></li>
          <li><a data-toggle="tab" href="#medon">Media Online Wartawan</a></li>
          <li><a data-toggle="tab" href="#divhumas">Website Div Humas</a></li>
        </ul>
        <div class="tab-content">
          <div id="blog" class="tab-pane fade in active"> <?php 
          
if(empty($reviewblog->result())){    
                                echo "belum ada data";
                                }else{
                                foreach ($reviewblog->result() as $lap){echo ++$start ?>. <?php echo $lap->judul_blog ?> http://polreslandak.com/home/getblog/<?php echo $lap->id_blog ?><br><br> <?php }} ?><div> <button type="button" class="btn btn-primary" onclick="copyDivToClipboardblog()"> Salin Data </button> </div></div>
          <div id="medon" class="tab-pane fade"> <?php 
if(empty($reviewmedon->result())){    
                                echo "belum ada data";
                                }else{
                                foreach ($reviewmedon->result() as $lap){echo ++$stat ?>. <?php echo $lap->laphar ?><br><br> <?php }} ?><div> <button type="button" class="btn btn-primary" onclick="copyDivToClipboardmedon()"> Salin Data </button> </div></div>
          <div id="divhumas" class="tab-pane fade"> <?php 
if(empty($reviewdivhumas->result())){    
                                echo "belum ada data";
                                }else{
                                foreach ($reviewdivhumas->result() as $lap){echo ++$stt ?>. <?php echo ucfirst($lap->laphardivhumas)?> http://humas.polri.go.id/<?php echo date("Y/m/d");?>/<?php echo strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9\-\*\& ]/', "",$lap->laphardivhumas)))?>/<br><br> <?php }} ?><div> <button type="button" class="btn btn-primary" onclick="copyDivToClipboarddivhumas()"> Salin Data </button> </div></div>
         
      </div>
      </div><br />
    </div>
    </div>
  </body>
 
            <script>
                function copyDivToClipboardblog() {
                    var range = document.createRange();
                    range.selectNode(document.getElementById("blog"));
                    window.getSelection().removeAllRanges(); // clear current selection
                    window.getSelection().addRange(range); // to select text
                    document.execCommand("copy");
                    window.getSelection().removeAllRanges();// to deselect
                    alert("Berhasil Di Copy!");
                }
            </script>

<script>
                function copyDivToClipboardmedon() {
                    var range = document.createRange();
                    range.selectNode(document.getElementById("medon"));
                    window.getSelection().removeAllRanges(); // clear current selection
                    window.getSelection().addRange(range); // to select text
                    document.execCommand("copy");
                    window.getSelection().removeAllRanges();// to deselect
                    alert("Berhasil Di Copy!");
                }
            </script>

<script>
                function copyDivToClipboarddivhumas() {
                    var range = document.createRange();
                    range.selectNode(document.getElementById("divhumas"));
                    window.getSelection().removeAllRanges(); // clear current selection
                    window.getSelection().addRange(range); // to select text
                    document.execCommand("copy");
                    window.getSelection().removeAllRanges();// to deselect
                    alert("Berhasil Di Copy!");
                }
            </script>
</html>
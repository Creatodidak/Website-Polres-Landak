<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Laphar List</h2>
        <div class="row" style="margin-bottom: 10px">
        

Kepada : Yth. Kapolda Kalbar <br/>
Dari : Kapolres Landak 
<br/><br/>
Dengan hormat, disampaikan kepada Jenderal hasil kegiatan Media Cyber Troops Polres Landak beserta Polsek Jajaran, pada hari <?php echo format_indo(date('Y-m-d'));?>, sbb :
<br/><br/>
A. Humas Polres Landak
<br/><br/>
B. Polsek Jajaran Polres Landak
<br/>

<?php foreach ($lapblog as $lap){ ?>
                <?php echo ++$start ?>. [<?php echo $lap->publish ?>] <?php echo $lap->judul_blog ?> http://polreslandak.com/home/getblog/<?php echo $lap->id_blog ?><br><br>
        <?php } ?>

        <?php 
        foreach ($laporan as $laporan){ ?>
                <?php echo ++$start ?>. [<?php echo $laporan->satuan ?>] <?php echo $laporan->laphar ?><br><br>
        <?php } ?>
<br/><br/>
Demikian yang dapat kami laporkan, dumm.<br/><br/>
Tembusan:<br/>
1. Wakapolda Kalbar<br/>
2. Irwasda Polda Kalbar<br/>
3. Karo Ops Polda Kalbar<br/>
4. Kabid Humas Polda Kalbar<br/>
        </div>

        

        </div>



    </body>
</html>
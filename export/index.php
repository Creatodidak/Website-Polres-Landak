<?php

$host       =   "localhost";
$user       =   "polresla_webutama";
$password   =   "l,AFn?0Ajsk_";
$database   =   "polresla_new";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
 $hashtag = $_GET['hashtag'];
 $getig = mysqli_query($koneksi, "SELECT * from instagram where hashtag='$hashtag'");
 $getfb = mysqli_query($koneksi, "SELECT * from facebook where hashtag='$hashtag'");
 $gettw = mysqli_query($koneksi, "SELECT * from twitter where hashtag='$hashtag'");

 $countig    =mysqli_num_rows($getig);
 $counttw    =mysqli_num_rows($gettw);
 $countfb    =mysqli_num_rows($getfb);

 

function hari_ini(){
    $hari = date ("D");

    switch($hari){
        case 'Sun':
            $hari_ini = "Minggu";
        break;

        case 'Mon':         
            $hari_ini = "Senin";
        break;

        case 'Tue':
            $hari_ini = "Selasa";
        break;

        case 'Wed':
            $hari_ini = "Rabu";
        break;

        case 'Thu':
            $hari_ini = "Kamis";
        break;

        case 'Fri':
            $hari_ini = "Jumat";
        break;

        case 'Sat':
            $hari_ini = "Sabtu";
        break;
        
        default:
            $hari_ini = "Tidak di ketahui";     
        break;
    }

    return "<b>" . $hari_ini . "</b>";

}

function tgl_indo($tanggal){
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}



?>
<?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=PolresLandak_#$hashtag.xls");
    ?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

    <table cellspacing="0" border="0">

    <colgroup width="127"></colgroup>
    <colgroup width="83"></colgroup>
    <colgroup span="3" width="450"></colgroup>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 height="47" align="left" valign=middle bgcolor="#C0C0C0"><b><font size=6>POLRES LANDAK</font></b></td>
        </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 height="22" align="left" valign=middle bgcolor="#FFFF00"><b><font size=4>Hari : <?php echo hari_ini();?>, <?php echo tgl_indo(date('Y-m-d'));?></font></b></td>
        </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 height="23" align="left" valign=middle bgcolor="#FF00FF"><b><font size=4>Hashtag : #<?php echo $_GET['hashtag'];?></font></b></td>
        </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="29" align="center" valign=middle bgcolor="#00CCFF"><b>PLATFORM</b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#00CCFF"><b><br></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#00CCFF"><b>TWITTER</b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#00CCFF"><b><font color="#000000">FACEBOOK</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#00CCFF"><b><font color="#000000">INSTAGRAM</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="34" align="center" valign=middle><b>JUMLAH VIRAL</b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b>WAKTU</b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="1" sdnum="1033;"><b>1</b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="2" sdnum="1033;"><b><font color="#000000">2</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdval="3" sdnum="1033;"><b><font color="#000000">3</font></b></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=top><?php echo $countig+$counttw+$countfb;?></td>
       
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=top sdnum="1033;0;0.00"><?php echo date('H:i');?></td>
       
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><?php foreach ($gettw as $tw){?><?php  echo $tw['link'] ?><br><?php } ?></td>
       
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><?php foreach ($getfb as $fb){?><?php  echo $fb['link'] ?><br><?php } ?></td>
       
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top><?php foreach ($getig as $ig){?><?php  echo $ig['link'] ?><br><?php } ?></td>
    </tr>
</table>

</body>
</html>
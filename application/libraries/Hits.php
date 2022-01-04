<?php 

class Hits{

	function nama_saya(){
		$ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
$tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
$waktu   = time(); //
 
// Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini
$s = mysql_query("SELECT * FROM hits WHERE ip='$ip' AND tanggal='$tanggal'");

// Kalau belum ada, simpan data user tersebut ke database
if(mysql_num_rows($s) == 0){
    mysql_query("INSERT INTO hits(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
}
// Jika sudah ada, update
else{
    mysql_query("UPDATE hits SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
}

$pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM hits WHERE tanggal='$tanggal' GROUP BY ip")); // Hitung jumlah pengunjung
$totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM hits"), 0); // hitung total pengunjung
$bataswaktu       = time() - 300;
$pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM hits WHERE online > '$bataswaktu'")); // hitung pengunjung online
	}
}

?>


Hari ini : <?php echo $pengunjung; ?> 
Total : <?php echo $totalpengunjung; ?>
Pengunjung Online : <?php echo $pengunjungonline; ?>



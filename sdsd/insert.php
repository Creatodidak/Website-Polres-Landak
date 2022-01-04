<?php

if($_SERVER['REQUEST_METHOD']=='POST') {

   $response = array();
   //mendapatkan data
   $laporan = $_POST['laporan'];
   $personil = $_POST['personil'];
   $satuan = $_POST['satuan'];
   $waktu = date('Y-m-d H:i:s');

   require_once('dbconnect.php');
   //Cek laporan sudah terdaftar apa belum
   $sql = "SELECT * FROM laporan WHERE laporan ='$laporan'";
   $check = mysqli_fetch_array(mysqli_query($con,$sql));
   if(isset($check)){
     $response["value"] = 0;
     $response["message"] = "oops! laporan sudah terdaftar!";
     echo json_encode($response);
   } else {
     $sql = "INSERT INTO laporan (laporan,personil,satuan,waktu) VALUES('$laporan','$personil','$satuan','$waktu')";
     if(mysqli_query($con,$sql)) {
       $response["value"] = 1;
       $response["message"] = "Laporan Berhasil di Input";
       echo json_encode($response);
     } else {
       $response["value"] = 0;
       $response["message"] = "oops! Coba lagi!";
       echo json_encode($response);
     }
   }
   // tutup database
   mysqli_close($con);
} else {
  $response["value"] = 0;
  $response["message"] = "oops! Coba lagi!";
  echo json_encode($response);
}
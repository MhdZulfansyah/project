<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$no=$_POST['no'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$include=$_POST['include'];
$jasa_sewa=$_POST['jasa_sewa'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into tour (no,nama,jenis_kelamin,include,jasa_sewa) 
                        values ('$no', '$nama', '$jenis_kelamin', '$include','$jasa_sewa')");

if($simpan==true){

    header("location:tampil-tour.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>
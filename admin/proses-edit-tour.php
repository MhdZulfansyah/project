<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['tour_id'];
$no=$_POST['no'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$include=$_POST['include'];
$jasa_sewa=$_POST['jasa_sewa'];

$ubah=$koneksi->query("update tour set no='$no', nama='$nama', jenis_kelamin='$jenis_kelamin', include='$include',jasa_sewa='$jasa_sewa' where tour_id='$id'");

if($ubah==true){

    header("location:tampil-tour.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>
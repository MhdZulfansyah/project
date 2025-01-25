
<?php

include "koneksi.php";
$nama_lengkap= $koneksi->real_escape_string($_POST['nama_lengkap']); 
$nomor_paspor = $koneksi->real_escape_string($_POST['nomor_paspor']); 
$nomor_ktp = $koneksi->real_escape_string($_POST['nomor_ktp']);
$jenis_kelamin= $koneksi->real_escape_string($_POST['jenis_kelamin']); 
$alamat= $koneksi->real_escape_string($_POST['alamat']); 
$tempat_tanggal_lahir= $koneksi->real_escape_string($_POST['tempat_tanggal_lahir']); 
$tourguide = $koneksi->real_escape_string($_POST['tourguide']); 
$nomor_hp_wa = $koneksi->real_escape_string($_POST['nomor_hp_wa']); 
$alamat_email = $koneksi->real_escape_string($_POST['alamat_email']); 
$pesan = $koneksi->real_escape_string($_POST['pesan']);

$simpan=$koneksi->query("insert into komentar(nama_lengkap,nomor_paspor,nomor_ktp,jenis_kelamin,alamat,tempat_tanggal_lahir,tourguide,nomor_hp_wa,alamat_email,pesan) 
                        values ('$nama_lengkap', '$nomor_paspor', '$nomor_ktp', '$jenis_kelamin', '$alamat', '$tempat_tanggal_lahir', '$tourguide', '$nomor_hp_wa', '$alamat_email', '$pesan')");

if($simpan==true){

    header("location:contact.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>
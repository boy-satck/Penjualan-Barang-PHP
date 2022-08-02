<?php
include 'koneksi.php';
$id_konsumen      = $_POST['id_konsumen'];
$kode_konsumen    = $_POST['kode_konsumen'];
$nama_konsumen          = $_POST['nama_konsumen'];
$tempat_lahir           = $_POST['tempat_lahir'];
$tanggal_lahir      = $_POST['tanggal_lahir'];
$no_telpon      = $_POST['no_telpon'];
$email      = $_POST['email'];
$alamat      = $_POST['alamat'];
echo $id_konsumen,$kode_konsumen,$nama_konsumen,$tempat_lahir,$tanggal_lahir,$no_telpon,$email,$alamat;
mysqli_query($kon, "UPDATE tb_konsumen SET kode_konsumen='$kode_konsumen',nama_konsumen='$nama_konsumen',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',no_telpon='$no_telpon',email='$email',alamat='$alamat' WHERE id_konsumen = $id_konsumen");
header("location:konsumen.php");
?>
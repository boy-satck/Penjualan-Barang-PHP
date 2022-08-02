<?php
include 'koneksi.php';
$kode_konsumen    = $_POST['kode_konsumen'];
$nama_konsumen          = $_POST['nama_konsumen'];
$tempat_lahir           = $_POST['tempat_lahir'];
$tanggal_lahir      = $_POST['tanggal_lahir'];
$no_telpon      = $_POST['no_telpon'];
$email      = $_POST['email'];
$alamat      = $_POST['alamat'];
mysqli_query($kon, "INSERT INTO tb_konsumen VALUES('','$kode_konsumen','$nama_konsumen','$tempat_lahir','$tanggal_lahir','$no_telpon','$email','$alamat')");
header("location:konsumen.php");
?>
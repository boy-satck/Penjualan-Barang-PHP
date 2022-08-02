<?php
include 'koneksi.php';
$kode_barang    = $_POST['kode_barang'];
$nama_barang          = $_POST['nama_barang'];
$satuan           = $_POST['satuan'];
$harga_beli      = $_POST['harga_beli'];
$harga_jual      = $_POST['harga_jual'];
$foto            = $_POST['foto'];
mysqli_query($kon, "INSERT INTO db_barang VALUES('','$kode_barang','$nama_barang','$satuan','$harga_beli','$harga_jual','$foto')");
header("location:barang.php");
?>


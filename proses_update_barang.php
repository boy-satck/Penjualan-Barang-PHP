<?php
include 'koneksi.php';
$id_barang      = $_POST['id_barang'];
$kode_barang    = $_POST['kode_barang'];
$nama_barang          = $_POST['nama_barang'];
$satuan           = $_POST['satuan'];
$harga_beli      = $_POST['harga_beli'];
$harga_jual      = $_POST['harga_jual'];
$foto      = $_POST['foto'];
echo $id_barang,$kode_barang,$nama_barang,$satuan,$harga_beli,$harga_jual;
mysqli_query($kon, "UPDATE db_barang SET kode_barang='$kode_barang=',nama_barang='$nama_barang',satuan='$satuan',harga_beli='$harga_beli',harga_jual='$harga_jual',foto='$foto' WHERE id_barang = $id_barang");
header("location:barang.php");
?>
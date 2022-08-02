<?php
include 'koneksi.php';
$kode_transaksi    = $_POST['kode_transaksi'];
$kode_barang          = $_POST['kode_barang'];
$kode_konsumen           = $_POST['kode_konsumen'];
$jumlah      = $_POST['jumlah'];
$total_harga      = $_POST['total_harga'];
mysqli_query($kon, "INSERT INTO tb_transaksi VALUES('','$kode_transaksi','$kode_barang','$kode_konsumen','$jumlah','$total_harga')");
header("location:transaksi.php");
?>

 
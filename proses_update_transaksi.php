<?php
include 'koneksi.php';
$id_transaksi      = $_POST['id_transaksi'];
$kode_transaksi    = $_POST['kode_transaksi'];
$kode_barang          = $_POST['kode_barang'];
$kode_konsumen           = $_POST['kode_konsumen'];
$jumlah      = $_POST['jumlah'];
$total_harga      = $_POST['total_harga'];

echo $id_transaksi,$kode_transaksi,$kode_barang,$kode_konsumen,$jumlah,$total_harga;
mysqli_query($kon, "UPDATE tb_transaksi SET kode_transaksi='$kode_transaksi',kode_barang='$kode_barang',kode_konsumen='$kode_konsumen',jumlah='$jumlah',total_harga='$total_harga'
 WHERE id_transaksi = $id_transaksi");
header("location:transaksi.php");
?>
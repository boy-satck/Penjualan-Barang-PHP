<?php
include 'koneksi.php';
$id_transaksi    = $_GET['id_transaksi']; //get id yang dikirim melalui url
mysqli_query($kon, "DELETE FROM tb_transaksi WHERE id_transaksi = $id_transaksi");
header("location:transaksi.php");
?>
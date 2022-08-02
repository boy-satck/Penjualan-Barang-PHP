<?php
include 'koneksi.php';
$id_barang    = $_GET['id_barang']; //get id yang dikirim melalui url
mysqli_query($kon, "DELETE FROM db_barang WHERE id_barang = $id_barang");
header("location:barang.php");
?>
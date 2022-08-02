<?php
include 'koneksi.php';
$id_konsumen    = $_GET['id_konsumen']; //get id yang dikirim melalui url
mysqli_query($kon, "DELETE FROM tb_konsumen WHERE id_konsumen = $id_konsumen");
header("location:konsumen.php");
?>
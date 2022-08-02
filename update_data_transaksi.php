<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="menu.css">
</head>
</style>
<body>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Update Data Transaksi</title>
    <form action="proses_update_transaksi.php" method="post">
        <?php
        $id_transaksi = $_GET['id_transaksi'];
        include "koneksi.php";        
        $query = mysqli_query($kon, "SELECT * FROM tb_transaksi where id_transaksi = $id_transaksi");
        while ($data = mysqli_fetch_array($query)) {
        ?>

        <table>
                <div class="card-body">
        
        <table class="table table-bordered table-striped">
    <td><center><font face="Times New Roman (serif)"><font size="6">Update Data Transaksi</td></center></font></font>
            <table>
                <div class="card mt-3">
        <table class="table table-bordered table-striped"> 
                <input type="hidden" name="id_transaksi" value="<?php echo $data['id_transaksi']; ?>">
                <tr>
                    <td>kode transaksi</td>
                    <td><input type=" text" name="kode_transaksi" value="<?php echo $data['kode_transaksi']; ?>"></td>
                </tr>
                <tr>
                    <td>kode barang</td>
                    <td><input type="text" name="kode_barang" value="<?php echo $data['kode_barang']; ?>"></td>
                </tr>
                <tr>
                    <td>kode konsumen</td>
                    <td><input type="text" name="kode_konsumen" value="<?php echo $data['kode_konsumen'];  ?>"></td>
                </tr>
                <tr>
                    <td>jumlah</td>
                    <td><input type="text" name="jumlah" value="<?php echo $data['jumlah'];  ?>"></td>
                    <tr>
                    <td>total harga</td>
                    <td><input type="text" name="total_harga" value="<?php echo $data['total_harga'];  ?>"></td>                    
                </tr>
                </tr>
                <tr>                    
                <tr>
                    <td></td>
                    <td><button type="submit" name="Simpan" class="fcc-btn">Submit</button></td>
                </tr>
            </table>
        <?php } ?>
    </form>
</body>
</html>
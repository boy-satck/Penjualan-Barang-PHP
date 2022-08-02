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
    <title>Update Data barang</title>
</head>
<body>    
    <form action="proses_update_barang.php" method="post">
        <?php
        $id_barang = $_GET['id_barang'];
        include "koneksi.php";        
        $query = mysqli_query($kon, "SELECT * FROM db_barang where id_barang = $id_barang");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <table>
                <div class="card-body">
        
        <table class="table table-bordered table-striped">
    <td><center><font face="Times New Roman (serif)"><font size="6">Update Data Barang</td></center></font></font>

    <form action="penambahan_data.php" method="post">
    <form action="upload_gambar.php" method="post">
        <div class="card mt-3">
        <table class="table table-bordered table-striped">             
        <table>
            <tr>
                <div class="card mt-3">
        <table class="table table-bordered table-striped"> 
                <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
                <tr>
                    <td>kode barang</td>
                    <td><input type=" text" name="kode_barang" value="<?php echo $data['kode_barang']; ?>"></td>
                </tr>
                <tr>
                    <td>nama barang</td>
                    <td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>"></td>
                </tr>
                <tr>
                    <td>satuan</td>
                    <td><input type="text" name="satuan" value="<?php echo $data['satuan'];  ?>"></td>
                </tr>
                <tr>
                    <td>harga_beli</td>
                    <td><input type="text" name="harga_beli" value="<?php echo $data['harga_beli'];  ?>"></td>
                    <tr>
                    <td>harga jual</td>
                    <td><input type="text" name="harga_jual" value="<?php echo $data['harga_jual'];  ?>"></td>
                    <tr>
                    <td>Foto</td>
                    <td><input type="file" name="foto" value="<?php echo $foto['foto'];  ?>"></td>
                </tr>
                                                     
                
                    <td></td>
                    <td><button type="submit" name="Simpan" class="fcc-btn">Submit</button></td>
                </tr>
            </table>
        <?php } ?>
    </form>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>    
</body>
</html>
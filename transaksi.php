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
   <link rel="stylesheet" type="text/css" href="menu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">    
    <title>Data Transaksi</title>
    
</head>
<body>
    <div class="card-body">

        <div class="card mt-3">
        <table class="table table-bordered table-striped">            
            <center>         
            <div class="dropdown">
  <button class="dropbtn"><font face="Times New Roman (serif)"><font size="5"><center>Data Transaksi</button></font></font>
  <div class="dropdown-content">
    <a href="barang.php">Barang</a>
    <a href="konsumen.php">Konsumen</a> 
</center>
    </table>   
</center>
        <thead>
            <tr>
                 <div class="card-body">        
        <table class="table table-bordered table-striped">
                <td>No</td>
                <td>kode transaksi</td>
                <td>kode barang</td>
                <td>kode konsumen</td>
                <td>jumlah</td>
                <td>total harga</td>
                <td><a class="fcc-btn" href="input_transaksi.php">Insert</a></td>  
                
                
            </tr>
        </thead>
        <?php
        include "koneksi.php";
       
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM tb_transaksi'); // query select produk di dalam php
       


        while ($data = mysqli_fetch_array($query)) {


        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['kode_transaksi'] ?></td>
                <td><?php echo $data['kode_barang'] ?></td>
                <td><?php echo $data['kode_konsumen'] ?></td>
                <td><?php echo $data['jumlah'] ?></td>
                <td><?php echo $data['total_harga'] ?></td>               
                <td>
                    <a class="fcc-btn" href="update_data_transaksi.php?id_transaksi=<?php echo $data['id_transaksi']; ?>">Update</a>
                    <a class="fcc-btn" href="delete_transaksi.php?id_transaksi=<?php echo $data['id_transaksi']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <br>
    <center>            
<a class="fcc-btn" href="logout.php">Logout</a><center>  </br>
</body>
</html>
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
    <title>Data Konsumen</title>    
</head>
<body>
    <!--bootsrap card dan tablenya -->
    <div class="card-body">

        <div class="card mt-3">
        <table class="table table-bordered table-striped">            
            <center>
            <!-- link button dropdown untuk data konsumen -->         
            <div class="dropdown">
  <button class="dropbtn"><font face="Times New Roman (serif)"><font size="5"><center>Data Konsumen</button></font></font>
    <!-- isi link dropdown button barang, transaksi -->
  <div class="dropdown-content">
    <a href="barang.php">Barang</a>
    <a href="transaksi.php">Transaksi</a> 
    </table>   
</center>


    
    <table>
        <thead>
            <tr>
                <div class="card-body">        
        <table class="table table-bordered table-striped">
                <td>No</td>
                <td>kode konsumen</td>
                <td>nama konsumen</td>
                <td>tempat lahir</td>
                <td>tanggal lahir</td>
                <td>no telpon</td>
                <td>email</td>
                <td>alamat</td>
                <td><a class="fcc-btn" href="input_konsumen.php">Insert</a></td>  
                
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM tb_konsumen'); // query select produk di dalam php
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['kode_konsumen'] ?></td>
                <td><?php echo $data['nama_konsumen'] ?></td>
                <td><?php echo $data['tempat_lahir'] ?></td>
                <td><?php echo $data['tanggal_lahir'] ?></td>
                <td><?php echo $data['no_telpon'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td>
                    <a class="fcc-btn" href="update_data_konsumen.php?id_konsumen=<?php echo $data['id_konsumen']; ?>">Update</a>
                    
                     <a class="fcc-btn" href="delete_konsumen.php?id_konsumen=<?php echo $data['id_konsumen']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <br>
     <center>            
<a class="fcc-btn" href="logout.php">Logout</a><center>  
</body>
</html>
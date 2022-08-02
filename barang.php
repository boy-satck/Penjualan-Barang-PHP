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
<head>   
<body>    

<div class="card-body">
        <div class="card mt-3">
        <table class="table table-bordered table-striped">  
        <center>         
            <div class="dropdown">
  <button class="dropbtn"><font face="Times New Roman (serif)"><font size="5"><center>Data Barang</button></font></font>
  <div class="dropdown-content">
    <a href="konsumen.php">Konsumen</a>
    <a href="transaksi.php">Transaksi</a>    
</center>
  </div>
</div>   
  </div>
</div>    
    <table>
        <thead>
            <tr>
                           
                
            </tr>
        </thead>

         
      
      <div class="card-body">
        
        <table class="table table-bordered table-striped">
             <td>No</td>
                <td>kode barang</td>
                <td>nama barang</td>
                <td>satuan</td>
                <td>harga beli</td>
                <td>harga jual</td>
                <td>foto</td>
                <td><a class="fcc-btn" href="input_barang.php">Insert</a></td>
                  
        <?php
        include "koneksi.php";
        
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM db_barang'); // query select produk di dalam php
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $data['kode_barang'] ?></td>
                <td><?php echo $data['nama_barang'] ?></td>
                <td><?php echo $data['satuan'] ?></td>
                <td><?php echo $data['harga_beli'] ?></td>
                <td><?php echo $data['harga_jual'] ?></td>
                <td><?php echo $data['foto'] ?>
                
                
                                    
                           
                        
                    <td><a class="fcc-btn" href="update_data_barang.php?id_barang=<?php echo $data['id_barang']; ?>">Update</a>
                    <a class="fcc-btn" href="delete_barang.php?id_barang=<?php echo $data['id_barang']; ?>">Delete</a></td>
                    
                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="card-body">
    <table class="table table-bordered table-striped">
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>     
     <link rel="stylesheet" type="text/css" href="style.css">    
            <center>            
<a class="fcc-btn" href="logout.php">Logout</a><center>            
        </table>
            
            
</body>
</html>
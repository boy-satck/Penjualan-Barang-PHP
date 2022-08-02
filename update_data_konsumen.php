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
    <title>Update Data Konsumen</title>
</head>

<body>   
    <form action="proses_update_konsumen.php" method="post">
        <?php
        $id_konsumen = $_GET['id_konsumen'];
        include "koneksi.php";        
        $query = mysqli_query($kon, "SELECT * FROM tb_konsumen where id_konsumen = $id_konsumen");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <table>
                <div class="card-body">
        
        <table class="table table-bordered table-striped">
    <td><center><font face="Times New Roman (serif)"><font size="6">Update Data Konsumen</td></center></font></font>

    <form action="penambahan_data.php" method="post">
    </table>                        
        <table>
            <div class="card mt-3">
        <table class="table table-bordered table-striped"> 
                <input type="hidden" name="id_konsumen" value="<?php echo $data['id_konsumen']; ?>">
                <tr>
                    <td>kode konsumen</td>
                    <td><input type=" text" name="kode_konsumen" value="<?php echo $data['kode_konsumen']; ?>"></td>
                </tr>
                <tr>
                    <td>nama konsumen</td>
                    <td><input type="text" name="nama_konsumen" value="<?php echo $data['nama_konsumen']; ?>"></td>
                </tr>
                <tr>
                    <td>tempat lahir</td>
                    <td><input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir'];  ?>"></td>
                </tr>
                <tr>
                    <td>tanggal lahir</td>
                    <td><input type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];  ?>"></td>
                    <tr>
                    <td>no telpon</td>
                    <td><input type="text" name="no_telpon" value="<?php echo $data['no_telpon'];  ?>"></td>                        
                    </tr>
                    <td>email</td>
                    <td><input type="text" name="email" value="<?php echo $data['email'];  ?>"></td>
                    </tr>                   
                    <td>alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $data['alamat'];  ?>"></td>
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
    <script type="text/javascript" src="js/bootstrap.min.js"></script>   
</body>
</html>
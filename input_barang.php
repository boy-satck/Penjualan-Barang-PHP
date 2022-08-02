<?php
include "koneksi.php";
$query = "SELECT max(kode_barang) as maxKode FROM db_barang";
$hasil = mysqli_query($kon, $query);
$data  = mysqli_fetch_array($hasil);
$kode_barang = $data['maxKode'];

// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal '1', akan diambil '1001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($kode_barang, 3, 3);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;

// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "1";
$newID = $char . sprintf("%03s", $noUrut);

//Memasukkan data textbox ke database
if (isset($_POST['submit'])) {
 $kode_barang = $_POST['kode_barang'];
 

 $query2 = "INSERT INTO db_barang VALUES ('$kode_barang')";
 $hasil2 = mysqli_query($koneksi, $query2);

 if ($hasil2) {  
  header("Location: penambahan_data.php");
  echo "Berhasil";
  exit();
 }else{
  echo "gagal";
 }
}

?>

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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Input barang</title>
    
</head>

<body>
    <div class="card-body">
        
        <table class="table table-bordered table-striped">
    <td><center><font face="Times New Roman (serif)"><font size="6">Penambahan Data</td></center></font></font>
        <form action="penambahan_data.php" method="post">
        <form action="upload_file.php" method="post">
        <div class="card mt-3">
        <table class="table table-bordered table-striped">             
        <table>
            
                <div class="card mt-3">
        <table class="table table-bordered border-primary">
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" readonly="" name="kode_barang" value="<?php echo $newID; ?>"></td>
            </tr>
            <tr>
                <td>nama barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>satuan</td>
                <td><input type="text" name="satuan"></td>
            </tr>
            <tr>
                <td>harga beli</td>
                <td><input type="text" name="harga_beli"></td>
            </tr>
            <tr>
                <td>harga jual</td>
            
                <td><input type="text" name="harga_jual"></td>
            <tr>
                <td> Foto
                <td><input type="file" name="foto"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="Simpan" class="fcc-btn">Submit</button></td>
            </tr>
        </table>
    </form>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>
</html>


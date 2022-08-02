<?php
include "koneksi.php";
$query = "SELECT max(kode_konsumen) as maxKode FROM tb_konsumen";
$hasil = mysqli_query($kon, $query);
$data  = mysqli_fetch_array($hasil);
$kode_konsumen = $data['maxKode'];

// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($kode_konsumen, 3, 3);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;

// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "12";
$newID = $char . sprintf("%03s", $noUrut);

//Memasukkan data textbox ke database
if (isset($_POST['submit'])) {
 $kode_konsumen = $_POST['kode_konsumen'];
 

 $query2 = "INSERT INTO tb_konsumen VALUES ('$kode_konsumen')";
 $hasil2 = mysqli_query($koneksi, $query2);

 if ($hasil2) {  
  header("Location: penambahan_data_konsumen.php");
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
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="menu.css">
    <title>Input Konsumen</title>
</head>
<body>    

    <form action="penambahan_data_konsumen.php" method="post">
        <table>
            <tr>
                <div class="card-body">
        
        <table class="table table-bordered table-striped">
    <td><center><font face="Times New Roman (serif)"><font size="6">Penambahan Data</td></center></font></font>
</div></table>

    <form action="penambahan_data.php" method="post">
        <div class="card mt-3">
        <table class="table table-bordered table-striped">     
        
                <td>kode konsumen</td>
                <td><input type="text" readonly="" name="kode_konsumen" value="<?php echo $newID; ?>"></td>
            </tr>
            <tr>
                <td>nama konsumen</td>
                <td><input type="text" name="nama_konsumen"></td>
            </tr>
            <tr>
                <td>tempat lahir</td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td><input type="text" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>no telpon</td>
                <td><input type="text" name="no_telpon"></td>
            </tr>
            <tr>
            	<td>email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
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


<?php 
// Menghubungkan file ini dengan file database
include 'koneksi.php';

// Mengambil data dari form lalu ditampung didalam variabel
$foto_nama = $_FILES['pas_foto']['name'];
$foto_size = $_FILES['pas_foto']['size'];

// Mengecek apakah file lebih besar 2 MB atau tidak
if ($foto_size > 2097152) {
  // Jika File lebih dari 2 MB maka akan gagal mengupload File
  header("location:insert.php?pesan=size");
}else{

  // Mengecek apakah Ada file yang diupload atau tidak
  if ($foto_nama != "") {

    // Ekstensi yang diperbolehkan untuk diupload boleh diubah sesuai keinginan
    $ekstensi_izin = array('png','jpg','jepg');
    // Memisahkan nama file dengan Ekstensinya
    $pisahkan_ekstensi = explode('.', $foto); 
    $ekstensi = strtolower(end($pisahkan_ekstensi));
    // Nama file yang berada di dalam direktori temporer server
    $file_tmp = $_FILES['pas_foto']['tmp_name'];   
    // Membuat angka/huruf acak berdasarkan waktu diupload
    $tanggal = md5(date('Y-m-d h:i:s'));
    // Menyatukan angka/huruf acak dengan nama file aslinya
    $foto = $tanggal.'-'.$foto; 

    // Mengecek apakah Ekstensi file sesuai dengan Ekstensi file yg diuplaod
    if(in_array($ekstensi, $ekstensi_izin) === true)  {
      // Memindahkan File kedalam Folder "FOTO"
            move_uploaded_file($file_tmp, 'foto/'.$foto_nama_new);

            // Query untuk memasukan data kedalam table SISWA
            $query = mysqli_query($koneksi, "INSERT INTO db_barang VALUES ('','$foto')");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
              header("location:penambahan_data.php?pesan=berhasil");
            } else {
                header("location:penambahan_data.php?pesan=gagal");
            }

        } else { 
          // Jika ekstensinya tidak sesuai dengan apa yg kita tetapkan maka error
          header("location:penambahan_data.php?pesan=ekstensi");        }

    }else{

      // Apabila tidak ada file yang diupload maka akan menjalankan code dibawah ini
       $query = mysqli_query($koneksi, "INSERT INTO db_barang(foto) VALUES ('$foto')");

            // Mengecek apakah data gagal diinput atau tidak
            if($query){
              header("location:penambahan_data.php?pesan=berhasil");
            } else {
                header("location:penambahan_data.php?pesan=gagal");
            }

    }

}
?>
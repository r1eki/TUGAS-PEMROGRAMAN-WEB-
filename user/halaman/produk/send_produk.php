<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$isi = $_POST['isi'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;

// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database


  $result = mysqli_query($koneksi, "INSERT INTO produk(nama,foto,isi,kategori) VALUES('$nama','$fotobaru','$isi', '$kategori')");
  

  if($result){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "<script language='javascript'>alert('Data Berhasil Di simpan !');
document.location='halaman.php';
</script>"; // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
   echo "<script language='javascript'>alert('Data Gagal di simpan !');
document.location='halaman.php?page=produk';
</script>";
  }
}
?>
<?php 
$koneksi = mysqli_connect("localhost","root","$3v3nF0ld123","e-container");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
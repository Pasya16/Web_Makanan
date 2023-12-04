<?php 
 
$koneksi = mysqli_connect("localhost","root","","resep_makanan");
 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
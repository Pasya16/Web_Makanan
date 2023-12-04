<?php 
include 'koneksi.php.php';
 
$id =$_GET['id'];
 
mysqli_query($koneksi,"delete from makanan_berat where Id_Resep='$id'");

header("location:menusarapan.php");
 
?>
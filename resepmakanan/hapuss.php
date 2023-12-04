<?php 
include 'koneksi.php.php';
 
$id =$_GET['id'];
 
mysqli_query($koneksi,"delete from cemilan where Id_Resep='$id'");

header("location:cemilan.php");
 
?>
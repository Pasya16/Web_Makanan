<html>
<body>
<?php
include "koneksi.php.php";

$Id_Resep = $_POST['Id_Resep'];
$Nama = $_POST['Nama'];
$Id_Kategori = $_POST['Id_Kategori'];

$query = "UPDATE resep SET Id_Resep='$Id_Resep', Nama='$Nama', Id_Kategori='$Id_Kategori' WHERE Id_Resep=$Id_Resep"; 

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil diperbarui.";
    header("Location: nyoba.php");
    exit; 
} else {
    echo "Error: " . mysqli_error($koneksi);
}
exit;
?>
</body>
</html>
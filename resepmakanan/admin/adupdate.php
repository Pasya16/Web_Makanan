<html>
<body>
<?php
include "adkoneksi.php";

$Id_Resep = $_POST['Id_Resep'];
$Nama = $_POST['Nama'];
$Kategori = $_POST['Kategori'];
$Langkah = $_POST['Langkah'];
$query = "UPDATE makanan_berat SET Id_Resep='$Id_Resep', Nama='$Nama', Kategori='$Kategori' , Langkah='$Langkah' WHERE Id_Resep=$Id_Resep"; 

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil diperbarui.";
    header("Location: admenusarapan.php");
    exit; 
} else {
    echo "Error: " . mysqli_error($koneksi);
}
exit;
?>
</body>
</html>
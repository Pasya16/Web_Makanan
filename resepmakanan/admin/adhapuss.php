<?php
include 'adkoneksi.php';

$id = $_GET['id'];
$table = "makanan_berat"; // Menentukan nama tabel
// Selanjutnya, Anda dapat menggunakan variabel $table dalam kode Anda

// Daftar tabel yang valid
$valid_tables = array('cemilan', 'makanan_berat');

// Periksa apakah tabel yang dimaksud ada dalam daftar yang valid
if (in_array($table, $valid_tables)) {
    // Tabel valid, buat query sesuai dengan tabel yang dimaksud
    $query = "DELETE FROM $table WHERE Id_Resep='$id'";
    $admenusarapan= "admenusarapan.php"; // Ganti dengan halaman yang sesuai
} else {
    echo "Tabel tidak valid";
    exit();
}

mysqli_query($koneksi, $query);

header("location:$admenusarapan");
?>

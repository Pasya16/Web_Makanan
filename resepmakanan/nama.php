<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Resep</title>
</head>
<body>
    <h1>Detail Resep</h1>

    <?php
    if (isset($_GET['nama'])) {
        $nama_resep = urldecode($_GET['nama']); // Mendapatkan nama resep dari parameter URL
        include 'koneksi.php.php'; // Sertakan file koneksi database

        // Query database untuk mendapatkan detail resep berdasarkan nama
        $nama_resep = mysqli_real_escape_string($koneksi, $nama_resep);
        $sql = "SELECT * FROM resep WHERE Nama = '$nama_resep'";
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            // Tampilkan informasi resep di sini, misalnya:
            echo "<h2>Nama Resep: " . $row['Nama'] . "</h2>";
            // Tambahkan lebih banyak detail yang Anda inginkan
        } else {
            echo "Tidak ditemukan resep dengan nama ini.";
        }
    } else {
        echo "Nama resep tidak ditemukan dalam parameter URL.";
    }
    ?>
</body>
</html>

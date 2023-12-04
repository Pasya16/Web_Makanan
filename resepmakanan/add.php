<?php
include 'koneksi.php.php';

$Id_Resep = isset($_POST['Id_Resep']) ? $_POST['Id_Resep'] : '';
$Nama = isset($_POST['Nama']) ? $_POST['Nama'] : '';
$Id_Kategori = isset($_POST['Id_Kategori']) ? $_POST['Id_Kategori'] : '';

if(isset($_POST['submit'])){
$Id_Resep = mysqli_real_escape_string($koneksi, $Id_Resep);
$Nama = mysqli_real_escape_string($koneksi, $Nama);
$Id_Kategori = mysqli_real_escape_string($koneksi, $Id_Kategori);


$query = "INSERT INTO resep (Id_Resep, Nama, Id_Kategori) VALUES ('$Id_Resep', '$Nama', '$Id_Kategori')";
$result = mysqli_query($koneksi, $query);
}
if ($result) {
    session_start();
    $_SESSION['success_message'] = "Resep berhasil ditambahkan!";
    
    header("location:nyoba.php");
    exit();
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
<script>
    function showNotification(message) {
        const notification = document.createElement("div");
        notification.className = "notification";
        notification.textContent = message;
        document.body.appendChild(notification);
        
        setTimeout(function() {
            document.body.removeChild(notification);
        }, 4000);
    }
</script>

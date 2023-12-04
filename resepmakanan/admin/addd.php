<?php
// Hubungkan ke database
include 'adkoneksi.php';

// Cek apakah tombol SIMPAN telah ditekan
if (isset($_POST['SIMPAN'])) {
    // Ambil data dari formulir
    $Nama = $_POST['Nama'];
    $Kategori = $_POST['Kategori'];
    $Langkah = $_POST['Langkah'];
    $Gambar = $_POST['Gambar']; // Anda perlu menambahkan input file untuk mengunggah gambar

    // Validasi kategori
    if ($Kategori !== 'makanan_berat' && $Kategori !== 'cemilan') {
        echo "Kategori tidak valid";
        // Tambahkan kode lain sesuai dengan tindakan yang diperlukan jika kategori tidak valid
    } else {
        // Buat query SQL untuk menyimpan data resep ke dalam tabel yang sesuai berdasarkan kategori
        if ($Kategori === 'makanan_berat') {
            $query = "INSERT INTO makanan_berat (Nama, Kategori, Langkah, Gambar) VALUES ('$Nama', '$Kategori', '$Langkah', '$Gambar')";
        } elseif ($Kategori === 'cemilan') {
            $query = "INSERT INTO cemilan (Nama, Kategori, Langkah, Gambar) VALUES ('$Nama', '$Kategori', '$Langkah', '$Gambar')";
        }

        // Eksekusi query
        if (mysqli_query($koneksi, $query)) {
            // Data berhasil disimpan, mungkin tambahkan pesan sukses
            header("Location: adnyoba.php"); // Alihkan ke halaman yang sesuai
            exit();
        } else {
            // Terjadi kesalahan dalam eksekusi query, mungkin tambahkan pesan error
            echo "Error: " . mysqli_error($koneksi);
        }
    }

    // Tutup koneksi ke database jika diperlukan
    mysqli_close($koneksi);
}
?>
<!-- Tampilkan formulir HTML di sini -->

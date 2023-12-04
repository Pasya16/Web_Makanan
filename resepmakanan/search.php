<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hasil Pencarian</title>
</head>
<style>
.p3 {
  font-family: "High Tower Text";
}
</style>
<body>
  <h1 class="p3">Hasil Pencarian</h1>
  
  <?php
  if (isset($_GET['query'])) {
    $search_query = $_GET['query'];
    
    include 'koneksi.php.php';
    $search_query = mysqli_real_escape_string($koneksi, $search_query);
    $sql = "SELECT * FROM resep WHERE Nama LIKE '%$search_query%'";
    $result = mysqli_query($koneksi, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      echo "<ul>";
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<li><a href='" . $row['Nama'] . ".php'>" . $row['Nama'] . "</a></li>";
      }
      echo "</ul>";
    } else {
      echo "<div class='p3'>Tidak ditemukan hasil.</div>";
    }
  } else {
    echo "Silakan masukkan kueri pencarian.";
  }
  ?>
  
</body>
</html>

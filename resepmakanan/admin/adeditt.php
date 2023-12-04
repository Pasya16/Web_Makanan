<!DOCTYPE html>
<html lang="en">
<div id="notification" class="notification"></div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Makanan</title>
</script>
</head>
</head>
<body background="bgblue.jpg">
<head>
  <title>MasakMakan!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
  a.font-high-tower {
  font-family: "High Tower Text", sans-serif;
  }
  td.font-high-tower {
  font-family: "High Tower Text", sans-serif;
  }
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link font-high-tower" href="adnyoba.php">Home~ &#127969;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-high-tower" href="adMenuSarapan.php">Makanan Berat~ &#127835;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-high-tower" href="adCemilan.php">Cemilan~ &#127839;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-high-tower" href="#">Minuman~ &#127865;</a>
      </li>
    </ul>
  </div>
</nav>
<html>
	<h3>Edit data</h3>
	<?php
include "adkoneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM cemilan WHERE Id_Resep = $id";
$result = mysqli_query($koneksi, $query);

if ($result) {
    $data = mysqli_fetch_assoc($result);
} else {
    // Tampilkan pesan kesalahan jika query tidak berhasil
    echo "Error: " . mysqli_error($koneksi);
}

?>
	<form action="adupdate.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="Id_Resep" value="<?php echo $data['Id_Resep'] ?>">
					<input type="text" name="Nama" value="<?php echo $data['Nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="Kategori" value="<?php echo $data['Kategori'] ?>"></td>					
			</tr>	
      <tr>
				<td>Langkah</td>
				<td><input type="text" name="Langkah" value="<?php echo $data['Langkah'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
        <?php
        ?>
	</form>
</body>
</html>
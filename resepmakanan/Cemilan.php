<!DOCTYPE html>
<html>
<head>
<html lang="en"></html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #fd0c0c;
  }
  </style>
  <style>
  .font-high-tower {
  font-family: "High Tower Text", sans-serif;
  }
  </style>
  <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    table, th, td {
        border: 1px solid black;
    }
</style>
<style>
    table {
        border-collapse: collapse;
        width: 45%;
        border-color: white;
    }

    table, th, td {
        border: 1px solid white; 
    }
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
.p3 {
  font-family: "High Tower Text";
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
.p3 {
  font-family: "High Tower Text";
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link font-high-tower" href="nyoba.php">Home~ 🍟</a>
        </li>
      <li class="nav-item">
        <a class="nav-link active font-high-tower" href="MenuSarapan.php">Makanan Berat~ &#127835;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-high-tower" href="Cemilan.php">Cemilan~ &#127839;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-high-tower" href="#">Minuman~ &#127865;</a>
      </li>
    </ul>
  </div>
  <form action="search.php" method="GET">
  <input type="text" class="p3" name="query" placeholder="Cari...">
  <button type="submit" class="p3" >Cari</button>
</form>
</nav>
</body>
<table border="1" class="bg-dark text-white text-center" style="margin-left: auto; margin-right: auto;">
	<tr>
  <div style="text-align: center;">
  </div>
			<th class="p3">Nomor &#127807;</th>
			<th class="p3">ID Resep &#127806;</th>
			<th class="p3">Nama &#127857;</th>
			<th class="p3">Kategori &#127880;</th>
      <th class="p3">Langkah &#127880;</th>
		</tr>
		<?php 
		include 'koneksi.php.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from cemilan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td class="p3"><?php echo $no++; ?></td>
				<td class="p3"><?php echo $d['Id_Resep']; ?></td>
				<td class="p3"><?php echo $d['Nama']; ?></td>
				<td class="p3"><?php echo $d['Kategori']; ?></td>
        <td class="p3"><?php echo $d['Langkah']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</div>
</html>
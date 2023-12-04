<html>
<head>
	<title>Masak Makan Asik!!</title>
</head>
<body background="pokemonn.jpg">
	<h2>MAKANANNN~</h2>
	<a href="tambah.php">+ Tambah Makanan</a>
	<br/>
	<table border="1">
		<tr>
			<th>Nomor</th>
			<th>ID Resep</th>
			<th>Nama</th>
			<th>ID Kategori</th>
            <th>Bahan</th>
            <th>Opsi</th>
		</tr>
		<?php 
		include 'koneksi.php.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from resep_makanan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Id_Resep']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['Id_Kategori']; ?></td>
                <td><?php echo $d['Bahan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['Id_Resep']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['Id_Resep']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
<?php
	include_once('koneksi.php');

	$id = $_GET['id'];

	$query = mysqli_query($koneksi, "SELECT * FROM sewa WHERE id_sewa='$id'");
	$row = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Form Edit Sewa</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<h2 class="text-center mb-4">Form Edit Data Sewa Buku</h2>
			<form action="prosesEditSewa.php?id=<?=$id?>" method="post">
				<label>Judul Buku</label>
				<div class="form-grup">
					<input type="text" name="judul" value="<?=$row['judul']?>" class="form-control" required>
				</div>

				<label>Nama Penyewa</label>
				<div class="form-grup">
					<input type="text" name="penyewa" value="<?=$row['penyewa']?>" class="form-control" required>
				</div>

				<label>Durasi</label>
				<div class="form-grup">
					<input type="text" name="durasi" value="<?=$row['durasi']?>" class="form-control" required>
				</div>
				
				<div>
					<input type="submit" name="sewa" value="Edit Sewa Buku" class="btn btn-success mt-4">
				</div>
			</form>
		</div>
	</body>
</html>
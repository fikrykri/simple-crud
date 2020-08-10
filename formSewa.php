<!DOCTYPE html>
<html>
	<head>
		<title>Form Sewa</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<h2 class="text-center mb-4">Form Sewa Buku</h2>
			<form action="prosesSewa.php" method="post">
				<label>Judul Buku</label>
				<div class="form-grup">
					<input type="text" name="judul" class="form-control" required>
				</div>

				<label>Nama Penyewa</label>
				<div class="form-grup">
					<input type="text" name="penyewa" class="form-control" required>
				</div>

				<label>Durasi</label>
				<div class="form-grup">
					<input type="text" name="durasi" class="form-control" required>
				</div>
				
				<div>
					<input type="submit" name="sewa" value="Sewa Buku" class="btn btn-success mt-4">
				</div>
			</form>
		</div>
	</body>
</html>
<!--Memanggil koneksi database-->
<?php
	include_once('koneksi.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Read Sewa</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>

		<h2 class="text-center">Daftar Sewa Buku</h2>
		<div class="container">
		<a href="formSewa.php" class="btn btn-primary mt-4 mb-4">Tambah Sewa</a>
		<table class="table table-bordered table-striped">

			<tr>
				<th>No</th>
				<th>Judul Buku</th>
				<th>Nama Penyewa</th>
				<th>Tanggal Sewa</th>
				<th>Durasi</th>
				<th>Tanggal Selesai</th>
				<th>Action</th>
			</tr>

			<!--Menampilkan data dari tabel sewa-->
			<?php  
				$query = mysqli_query($koneksi, "SELECT * FROM sewa");
				$no = 1;
				while ($row =  mysqli_fetch_array($query)):
					
					// Proses penghitungan deadline tanggal pengembalian sewa
					$tanggal_selesai = date('Y-m-d', strtotime($row['tanggal_sewa']."+ $row[durasi] days"));

			?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$row['judul']?></td>
					<td><?=$row['penyewa']?></td>
					<td><?=$row['tanggal_sewa']?></td>
					<td><?=$row['durasi']?></td>
					<td><?=$tanggal_selesai?></td>
					<td>
						<a href="formEditSewa.php?id=$row['id_sewa']" class="btn btn-success">Edit</a>
						<a href="prosesDeleteSewa.php?id=$row['id_sewa']" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ini?')">Delete</a>
					</td>
				<?php endwhile;?>
		</table>
		</div>
	</body>
</html>
<?php 

	include_once('koneksi.php');

	$id = $_GET['id'];

	$hapus = mysqli_query($koneksi, "DELETE FROM sewa WHERE id_sewa = '$id'");
	if ($hapus) {
				echo "<script>
						alert('Hapus data sukses!');
						document.location='index.php';
					</script>";
	}
?>
<?php
include '../../koneksi.php';

$id = $_GET['id'];
$sql = mysqli_query($dbh,"delete from tanaman where id_tanaman='$id'") or die(mysqli_error($dbh));

	if ($sql) {
			echo "<script>alert('Data Berhasil Dihapus');document.location='data-tanaman.php' </script> ";
		}else {
			echo "<script>alert('Data Gagal Dihapus');document.location='data-tanaman.php' </script> ";
		}
?>

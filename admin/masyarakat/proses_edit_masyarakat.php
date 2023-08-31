<?php
include "../../koneksi.php";

$id = $_GET['dia'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];


$sql=mysqli_query($dbh,"UPDATE pengguna set nama_pengguna = '$nama', alamat_pengguna='$alamat' where id_pengguna ='$id'");


if ($sql) {
    echo "<script>alert('Data berhasil Ditambahkan');document.location='data-masyarakat.php' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal ditambahkan');document.location='data-masyarakat.php' </script> ";
}

 ?>

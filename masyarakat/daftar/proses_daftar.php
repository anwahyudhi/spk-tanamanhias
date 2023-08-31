<?php
include "../../koneksi.php";


$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['password'];
$alamat= $_POST['alamat'];




$sql=mysqli_query($dbh,"INSERT INTO pengguna (nama_pengguna, username, password, alamat_pengguna, peran) VALUES ('$nama', '$username', '$pass','$alamat','Masyarakat')");


if ($sql) {
    echo "<script>alert('Data berhasil Ditambahkan');document.location='../../login.php' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal ditambahkan');document.location='../../login.php' </script> ";
}

 ?>

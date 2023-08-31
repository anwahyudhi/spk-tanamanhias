<?php
include "../../koneksi.php";

$id = $_GET['tanaman'];
$nama = $_POST['nama'];

$tinggi = $_POST['tinggi'];
$cahaya = $_POST['cahaya'];
$tahan= $_POST['tahan'];
$lembab = $_POST['lembab'];
$tanam = $_POST['tanam'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];
$perawatan = $_POST['rawat'];


$sql=mysqli_query($dbh,"UPDATE tanaman set nama_tanaman = '$nama', tinggi_tanaman='$tinggi', pencahayaan = '$cahaya', daya_tahan='$tahan', kelembapan='$lembab', media_tanam='$tanam', warna='$warna', harga='$harga', perawatan='$perawatan' where id_tanaman='$id'");


if ($sql) {
    echo "<script>alert('Data berhasil Ditambahkan');document.location='data-tanaman.php' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal ditambahkan');document.location='data-tanaman.php' </script> ";
}

 ?>

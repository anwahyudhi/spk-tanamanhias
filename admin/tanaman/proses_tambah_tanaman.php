<?php
include "../../koneksi.php";


$nama = $_POST['nama'];

$tinggi = $_POST['tinggi'];
$cahaya = $_POST['cahaya'];
$tahan= $_POST['tahan'];
$lembab = $_POST['lembab'];
$tanam = $_POST['tanam'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];
$perawatan = $_POST['rawat'];




$sql=mysqli_query($dbh,"INSERT INTO tanaman (nama_tanaman,tinggi_tanaman, pencahayaan, daya_tahan, kelembapan, media_tanam, warna, harga, perawatan) VALUES ('$nama', '$tinggi', '$cahaya', '$tahan', '$lembab', '$tanam', '$warna', '$harga', '$perawatan')");


if ($sql) {
    echo "<script>alert('Data berhasil Ditambahkan');document.location='data-tanaman.php' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal ditambahkan');document.location='data-tanaman.php' </script> ";
}

 ?>

<?php 
include "../../koneksi.php";
$id = $_GET['subkriteria'];
$bobot=$_POST['bobot'];
$nama = $_POST['nama'];



$sql=mysqli_query($dbh,"UPDATE subkriteria set nama_subkriteria = '$nama', nilai_subkriteria='$bobot' where id_subkriteria='$id'");
    
 
if ($sql) {
    echo "<script>alert('Data berhasil Diubah');document.location='data-subkriteria.php' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal Diubah');document.location='data-subkriteria.php' </script> ";
}

 ?>
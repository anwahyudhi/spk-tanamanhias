<?php
session_start();
include ('koneksi.php');


$username = $_POST['username'];
$password = $_POST['password'];
$query = "select * from pengguna where username = '$username' and password = '$password'";
$execute = mysqli_query($dbh,$query);
$count = mysqli_num_rows($execute);
$hasil = mysqli_fetch_array($execute);
$nama = $hasil['nama_pengguna'];
$jabatan = $hasil['peran'];

if($count == 0) { // jika salah, redirect ke login
    ?><script language="JavaScript">alert('Login Gagal  !'); 
            document.location='login.php'</script><?php
}
else { // jika benar, redirec ke halaman utama
    $_SESSION['id_pengguna'] = $hasil['id_pengguna'];
    
    $_SESSION['nama_user'] = $nama;

    if ($jabatan == 'admin') {
       ?>
       <script language="JavaScript">
            alert('Masuk');
            document.location='admin/index-admin.php'; 
        </script>

       <?php 
    }else{
       ?>
       <script language="JavaScript">
            alert('Selamat Datang');
            document.location='masyarakat/index-masyarakat.php'; 
        </script>

       <?php 
    }
    ?>



        
    <?php
   
    
    
}
?>
    


<!doctype html>

<?php 

include "../../koneksi.php";
session_start();

$id = $_GET['tanaman'];
$query=mysqli_query($dbh,"select * from tanaman where id_tanaman='$id'");
$data=mysqli_fetch_array($query);

 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Halaman Admin - Sistem Pendukung Keputusan Pemilihan Tanaman Hias untuk didalam Ruangan</title>

    
  <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="../../assets/index.css" rel="stylesheet">

  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Sistem Pendukung Keputusan Pemilihan Tanaman Hias untuk didalam Ruangan</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">

      <a class="nav-link px-3" href="../keluar.php">keluar</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column nav-pills">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../index-admin.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Beranda
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../kriteria/data-kriteria.php">
              <span data-feather="file" class="align-text-bottom"></span>
              Kriteria
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../subkriteria/data-subkriteria.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Subkriteria
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../masyarakat/data-masyarakat.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Data Masyarakat
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="data-tanaman.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Data Tanaman
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../perhitungan/data-nilai.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Hasil Perhitungan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../perhitungan/perangkingan.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Perankingan
            </a>
          </li>
          
          
        </ul>

        
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Tanaman</h1>
        
      </div>
     <form class="form" action="proses_edit_tanaman.php?tanaman=<?php echo $data['id_tanaman'] ?>" method="POST" enctype="multipart/form-data">
                    
                    <div class="form-group">
                      <label>Nama Tanaman</label>
                      <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_tanaman'] ?>">
                    </div>
                    

                    
                    <div class="form-group">
                      <label>Tinggi Tanaman</label>
                      <select class="form-select form-select-sm" name = "tinggi">
                        <?php 
                        $sql2 = "SELECT * from subkriteria where id_kriteria='1'";
                        foreach ($dbh->query($sql2) as $data2) :
                        if ($data2['nama_subkriteria'] == $data['tinggi_tanaman']) {
                         ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>" selected><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php  
                        }
                        else{
                        ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>"><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php   
                        }
                         
                      endforeach;
                         ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Pencahayaan</label>
                      <select class="form-select form-select-sm" name = "cahaya">
                        <?php 

                        $sql2 = "SELECT * from subkriteria where id_kriteria='2'";
                    foreach ($dbh->query($sql2) as $data2) :

                        if ($data2['nama_subkriteria'] == $data['pencahayaan']) {
                         ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>" selected><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php  
                        }
                        else{
                        ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>"><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php   
                        } 
                      endforeach;
                         ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Daya Tahan</label>
                      <select class="form-select form-select-sm" name = "tahan">
                        <?php 

                        $sql2 = "SELECT * from subkriteria where id_kriteria='3'";
                    foreach ($dbh->query($sql2) as $data2) :

                         if ($data2['nama_subkriteria'] == $data['daya_tahan']) {
                         ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>" selected><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php  
                        }
                        else{
                        ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>"><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php   
                        } 
                      endforeach;
                         ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Kelembapan udara</label>
                      <select class="form-select form-select-sm" name = "lembab">
                        <?php 

                        $sql2 = "SELECT * from subkriteria where id_kriteria='4'";
                    foreach ($dbh->query($sql2) as $data2) :

                        if ($data2['nama_subkriteria'] == $data['kelembapan']) {
                         ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>" selected><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php  
                        }
                        else{
                        ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>"><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php   
                        }
                      endforeach;
                         ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Media Tanam</label>
                      <select class="form-select form-select-sm" name = "tanam">
                        <?php 

                        $sql2 = "SELECT * from subkriteria where id_kriteria='5'";
                    foreach ($dbh->query($sql2) as $data2) :

                         if ($data2['nama_subkriteria'] == $data['media_tanam']) {
                         ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>" selected><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php  
                        }
                        else{
                        ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>"><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php   
                        } 
                      endforeach;
                         ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Warna</label>
                      <select class="form-select form-select-sm" name = "warna">
                        <?php 

                        $sql2 = "SELECT * from subkriteria where id_kriteria='6'";
                    foreach ($dbh->query($sql2) as $data2) :

                         if ($data2['nama_subkriteria'] == $data['warna']) {
                         ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>" selected><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php  
                        }
                        else{
                        ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>"><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php   
                        }
                      endforeach;
                         ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Harga Tanaman</label>
                      <select class="form-select form-select-sm" name = "harga">
                        <?php 

                        $sql2 = "SELECT * from subkriteria where id_kriteria='7'";
                    foreach ($dbh->query($sql2) as $data2) :

                        if ($data2['nama_subkriteria'] == $data['harga']) {
                         ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>" selected><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php  
                        }
                        else{
                        ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>"><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php   
                        }
                      endforeach;
                         ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Perawatan</label>
                      <select class="form-select form-select-sm" name = "rawat">
                        <?php 

                        $sql2 = "SELECT * from subkriteria where id_kriteria='8'";
                    foreach ($dbh->query($sql2) as $data2) :

                         if ($data2['nama_subkriteria'] == $data['perawatan']) {
                         ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>" selected><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php  
                        }
                        else{
                        ?>
                        <option value ="<?php echo $data2['nama_subkriteria'] ?>"><?php echo $data2['nama_subkriteria'] ?></option>
                        <?php   
                        }
                      endforeach;
                         ?>
                      </select>
                    </div>
            



                    <br>
                    
            <div class="form-group">
              <input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
              <input type="submit" required name="nanam" value = "Simpan" class="btn btn-success btn-fill pull-left" onclick="return confirm('Apa anda yakin dengan perubahan data Kriteria?');">
        </div>
                  </form>
          
       
    </main>
  </div>
</div>


    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

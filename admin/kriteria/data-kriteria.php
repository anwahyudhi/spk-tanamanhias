<!doctype html>

<?php 

include "../../koneksi.php";
session_start();



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

      <a class="nav-link px-3" href="#">Sign out</a>
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
            <a class="nav-link active" href="data-kriteria.php">
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
            <a class="nav-link" href="../tanaman/data-tanaman.php">
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
        <h1 class="h2">Data Kriteria</h1>
        
      </div>
       <a href="perbandingan_kriteria.php" class="btn btn-success btn-fill">
    <span>Ubah Bobot Kriteria</span>
    </a>
     <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Kriteria</th>
              <th scope="col">Jenis Kriteria</th>
              <th scope="col">Bobot Kriteria</th>
              <th scope="col">Aksi</th>
              
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            $sql = "SELECT * FROM kriteria";
            foreach ($dbh->query($sql) as $data) :
            ?>
            <tr>
            	<td><?php echo $i ?></td>
            	<td><?php echo $data['nama_kriteria'] ?></td>
            	<td><?php echo $data['jenis'] ?></td>
            	<td><?php echo $data['bobot_kriteria'] ?></td>
            	<td>
              	<a href="ubah_kriteria.php?kriteria=<?php echo $data['id_kriteria'] ?>" class="btn btn-warning btn-sm btn-fill btn-block">
			    <span>ubah</span>
            	</a>   
            	
			 </td>
            </tr>
            <?php 
            $i++;
        	endforeach;
             ?>
            
          </tbody>
        </table>
      </div>
      <hr>

      
    </main>
  </div>
</div>


    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

<!doctype html>

<?php 

include "../../koneksi.php";
session_start();
$query=mysqli_query($dbh,"select * from ahp where id_ahp='1'");
$data=mysqli_fetch_array($query);

$ahp1 = array();
$ahp2 = array();
$ahp3 = array();
$ahp4 = array();
$ahp5 = array();
$ahp6= array();
$ahp7 = array();
$ahp8 = array();

$tahp = array();

$normal = array();

$total1 = "SELECT * FROM ahp where id_ahp=1";
foreach ($dbh -> query($total1) as $totalan) :

$ahp1[0] = $totalan['c11'];
$ahp1[1] = $totalan['c12'];
$ahp1[2] = $totalan['c13'];
$ahp1[3] = $totalan['c14'];
$ahp1[4] = $totalan['c15'];
$ahp1[5] = $totalan['c16'];
$ahp1[6] = $totalan['c17'];
$ahp1[7] = $totalan['c18'];

$ahp2[0] = $totalan['c21'];
$ahp2[1] = $totalan['c22'];
$ahp2[2] = $totalan['c23'];
$ahp2[3] = $totalan['c24'];
$ahp2[4] = $totalan['c25'];
$ahp2[5] = $totalan['c26'];
$ahp2[6] = $totalan['c27'];
$ahp2[7] = $totalan['c28'];

$ahp3[0] = $totalan['c31'];
$ahp3[1] = $totalan['c32'];
$ahp3[2] = $totalan['c33'];
$ahp3[3] = $totalan['c34'];
$ahp3[4] = $totalan['c35'];
$ahp3[5] = $totalan['c36'];
$ahp3[6] = $totalan['c37'];
$ahp3[7] = $totalan['c38'];

$ahp4[0] = $totalan['c41'];
$ahp4[1] = $totalan['c42'];
$ahp4[2] = $totalan['c43'];
$ahp4[3] = $totalan['c44'];
$ahp4[4] = $totalan['c45'];
$ahp4[5] = $totalan['c46'];
$ahp4[6] = $totalan['c47'];
$ahp4[7] = $totalan['c48'];

$ahp5[0] = $totalan['c51'];
$ahp5[1] = $totalan['c52'];
$ahp5[2] = $totalan['c53'];
$ahp5[3] = $totalan['c54'];
$ahp5[4] = $totalan['c55'];
$ahp5[5] = $totalan['c56'];
$ahp5[6] = $totalan['c57'];
$ahp5[7] = $totalan['c58'];

$ahp6[0] = $totalan['c61'];
$ahp6[1] = $totalan['c62'];
$ahp6[2] = $totalan['c63'];
$ahp6[3] = $totalan['c64'];
$ahp6[4] = $totalan['c65'];
$ahp6[5] = $totalan['c66'];
$ahp6[6] = $totalan['c67'];
$ahp6[7] = $totalan['c68'];

$ahp7[0] = $totalan['c71'];
$ahp7[1] = $totalan['c72'];
$ahp7[2] = $totalan['c73'];
$ahp7[3] = $totalan['c74'];
$ahp7[4] = $totalan['c75'];
$ahp7[5] = $totalan['c76'];
$ahp7[6] = $totalan['c77'];
$ahp7[7] = $totalan['c78'];

$ahp8[0] = $totalan['c81'];
$ahp8[1] = $totalan['c82'];
$ahp8[2] = $totalan['c83'];
$ahp8[3] = $totalan['c84'];
$ahp8[4] = $totalan['c85'];
$ahp8[5] = $totalan['c86'];
$ahp8[6] = $totalan['c87'];
$ahp8[7] = $totalan['c88'];

endforeach;


$tahp[0] = $ahp1[0]+$ahp2[0]+$ahp3[0]+$ahp4[0]+$ahp5[0]+$ahp6[0]+$ahp7[0]+$ahp8[0];
$tahp[1] = $ahp1[1]+$ahp2[1]+$ahp3[1]+$ahp4[1]+$ahp5[1]+$ahp6[1]+$ahp7[1]+$ahp8[1];
$tahp[2] = $ahp1[2]+$ahp2[2]+$ahp3[2]+$ahp4[2]+$ahp5[2]+$ahp6[2]+$ahp7[2]+$ahp8[2];
$tahp[3] = $ahp1[3]+$ahp2[3]+$ahp3[3]+$ahp4[3]+$ahp5[3]+$ahp6[3]+$ahp7[3]+$ahp8[3];
$tahp[4] = $ahp1[4]+$ahp2[4]+$ahp3[4]+$ahp4[4]+$ahp5[4]+$ahp6[4]+$ahp7[4]+$ahp8[4];
$tahp[5] = $ahp1[5]+$ahp2[5]+$ahp3[5]+$ahp4[5]+$ahp5[5]+$ahp6[5]+$ahp7[5]+$ahp8[5];
$tahp[6] = $ahp1[6]+$ahp2[6]+$ahp3[6]+$ahp4[6]+$ahp5[6]+$ahp6[6]+$ahp7[6]+$ahp8[6];
$tahp[7] = $ahp1[7]+$ahp2[7]+$ahp3[7]+$ahp4[7]+$ahp5[7]+$ahp6[7]+$ahp7[7]+$ahp8[7];

$totalkolom[0] = array_sum($ahp1);
$totalkolom[1] = array_sum($ahp2);
$totalkolom[2] = array_sum($ahp3);
$totalkolom[3] = array_sum($ahp4);
$totalkolom[4] = array_sum($ahp5);
$totalkolom[5] = array_sum($ahp6);
$totalkolom[6] = array_sum($ahp7);
$totalkolom[7] = array_sum($ahp8);

$cm1[0] = $ahp1[0]/$tahp[0];   
$cm1[1] = $ahp1[1]/$tahp[1];    
$cm1[2] = $ahp1[2]/$tahp[2];    
$cm1[3] = $ahp1[3]/$tahp[3];    
$cm1[4] = $ahp1[4]/$tahp[4];    
$cm1[5] = $ahp1[5]/$tahp[5];    
$cm1[6] = $ahp1[6]/$tahp[6];    
$cm1[7] = $ahp1[7]/$tahp[7];    

$cm2[0] = $ahp2[0]/$tahp[0];   
$cm2[1] = $ahp2[1]/$tahp[1];    
$cm2[2] = $ahp2[2]/$tahp[2];    
$cm2[3] = $ahp2[3]/$tahp[3];    
$cm2[4] = $ahp2[4]/$tahp[4];    
$cm2[5] = $ahp2[5]/$tahp[5];    
$cm2[6] = $ahp2[6]/$tahp[6];    
$cm2[7] = $ahp2[7]/$tahp[7];  

$cm3[0] = $ahp3[0]/$tahp[0];   
$cm3[1] = $ahp3[1]/$tahp[1];    
$cm3[2] = $ahp3[2]/$tahp[2];    
$cm3[3] = $ahp3[3]/$tahp[3];    
$cm3[4] = $ahp3[4]/$tahp[4];    
$cm3[5] = $ahp3[5]/$tahp[5];    
$cm3[6] = $ahp3[6]/$tahp[6];    
$cm3[7] = $ahp3[7]/$tahp[7];  

$cm4[0] = $ahp4[0]/$tahp[0];   
$cm4[1] = $ahp4[1]/$tahp[1];    
$cm4[2] = $ahp4[2]/$tahp[2];    
$cm4[3] = $ahp4[3]/$tahp[3];    
$cm4[4] = $ahp4[4]/$tahp[4];    
$cm4[5] = $ahp4[5]/$tahp[5];    
$cm4[6] = $ahp4[6]/$tahp[6];    
$cm4[7] = $ahp4[7]/$tahp[7];  

$cm5[0] = $ahp5[0]/$tahp[0];   
$cm5[1] = $ahp5[1]/$tahp[1];    
$cm5[2] = $ahp5[2]/$tahp[2];    
$cm5[3] = $ahp5[3]/$tahp[3];    
$cm5[4] = $ahp5[4]/$tahp[4];    
$cm5[5] = $ahp5[5]/$tahp[5];    
$cm5[6] = $ahp5[6]/$tahp[6];    
$cm5[7] = $ahp5[7]/$tahp[7];

$cm6[0] = $ahp6[0]/$tahp[0];   
$cm6[1] = $ahp6[1]/$tahp[1];    
$cm6[2] = $ahp6[2]/$tahp[2];    
$cm6[3] = $ahp6[3]/$tahp[3];    
$cm6[4] = $ahp6[4]/$tahp[4];    
$cm6[5] = $ahp6[5]/$tahp[5];    
$cm6[6] = $ahp6[6]/$tahp[6];    
$cm6[7] = $ahp6[7]/$tahp[7];

$cm7[0] = $ahp7[0]/$tahp[0];   
$cm7[1] = $ahp7[1]/$tahp[1];    
$cm7[2] = $ahp7[2]/$tahp[2];    
$cm7[3] = $ahp7[3]/$tahp[3];    
$cm7[4] = $ahp7[4]/$tahp[4];    
$cm7[5] = $ahp7[5]/$tahp[5];    
$cm7[6] = $ahp7[6]/$tahp[6];    
$cm7[7] = $ahp7[7]/$tahp[7];  

$cm8[0] = $ahp8[0]/$tahp[0];   
$cm8[1] = $ahp8[1]/$tahp[1];    
$cm8[2] = $ahp8[2]/$tahp[2];    
$cm8[3] = $ahp8[3]/$tahp[3];    
$cm8[4] = $ahp8[4]/$tahp[4];    
$cm8[5] = $ahp8[5]/$tahp[5];    
$cm8[6] = $ahp8[6]/$tahp[6];    
$cm8[7] = $ahp8[7]/$tahp[7];    

$baris[0]=array_sum($cm1);
$eigen[0]=$baris[0]/8;

$baris[1]=array_sum($cm2);
$eigen[1]=$baris[1]/8;

$baris[2]=array_sum($cm3);
$eigen[2]=$baris[2]/8;

$baris[3]=array_sum($cm4);
$eigen[3]=$baris[3]/8;

$baris[4]=array_sum($cm5);
$eigen[4]=$baris[4]/8;

$baris[5]=array_sum($cm6);
$eigen[5]=$baris[5]/8;

$baris[6]=array_sum($cm7);
$eigen[6]=$baris[6]/8;

$baris[7]=array_sum($cm8);
$eigen[7]=$baris[7]/8;


$cme1=(($ahp1[0]*$eigen[0])+($ahp1[1]*$eigen[1])+($ahp1[2]*$eigen[2])+($ahp1[3]*$eigen[3])+($ahp1[4]*$eigen[4])+($ahp1[5]*$eigen[5])+($ahp1[6]*$eigen[6])+($ahp1[7]*$eigen[7]))/$eigen[0];

$cme2=(($ahp2[0]*$eigen[0])+($ahp2[1]*$eigen[1])+($ahp2[2]*$eigen[2])+($ahp2[3]*$eigen[3])+($ahp2[4]*$eigen[4])+($ahp2[5]*$eigen[5])+($ahp2[6]*$eigen[6])+($ahp2[7]*$eigen[7]))/$eigen[1];

$cme3=(($ahp3[0]*$eigen[0])+($ahp3[1]*$eigen[1])+($ahp3[2]*$eigen[2])+($ahp3[3]*$eigen[3])+($ahp3[4]*$eigen[4])+($ahp3[5]*$eigen[5])+($ahp3[6]*$eigen[6])+($ahp3[7]*$eigen[7]))/$eigen[2];

$cme4=(($ahp4[0]*$eigen[0])+($ahp4[1]*$eigen[1])+($ahp4[2]*$eigen[2])+($ahp4[3]*$eigen[3])+($ahp4[4]*$eigen[4])+($ahp4[5]*$eigen[5])+($ahp4[6]*$eigen[6])+($ahp4[7]*$eigen[7]))/$eigen[3];

$cme5=(($ahp5[0]*$eigen[0])+($ahp5[1]*$eigen[1])+($ahp5[2]*$eigen[2])+($ahp5[3]*$eigen[3])+($ahp5[4]*$eigen[4])+($ahp5[5]*$eigen[5])+($ahp5[6]*$eigen[6])+($ahp5[7]*$eigen[7]))/$eigen[4];

$cme6=(($ahp6[0]*$eigen[0])+($ahp6[1]*$eigen[1])+($ahp6[2]*$eigen[2])+($ahp6[3]*$eigen[3])+($ahp6[4]*$eigen[4])+($ahp6[5]*$eigen[5])+($ahp6[6]*$eigen[6])+($ahp6[7]*$eigen[7]))/$eigen[5];

$cme7=(($ahp7[0]*$eigen[0])+($ahp7[1]*$eigen[1])+($ahp7[2]*$eigen[2])+($ahp7[3]*$eigen[3])+($ahp7[4]*$eigen[4])+($ahp7[5]*$eigen[5])+($ahp7[6]*$eigen[6])+($ahp7[7]*$eigen[7]))/$eigen[6];

$cme8=(($ahp8[0]*$eigen[0])+($ahp8[1]*$eigen[1])+($ahp8[2]*$eigen[2])+($ahp8[3]*$eigen[3])+($ahp8[4]*$eigen[4])+($ahp8[5]*$eigen[5])+($ahp8[6]*$eigen[6])+($ahp8[7]*$eigen[7]))/$eigen[7];

$lambdaMax = ($cme1+$cme2+$cme3+$cme4+$cme5+$cme6+$cme7+$cme8)/8;
$ci = ($lambdaMax-8)/(8-1);

$cr = $ci/1.41;



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
            <a class="nav-link " href="../kriteria/data-kriteria.php">
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
            <a class="nav-link " href="../tanaman/data-tanaman.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Data Tanaman
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="data-nilai.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Hasil Perhitungan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perangkingan.php">
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
        <h1 class="h1">Perhitungan</h1>
        
      </div>
      

     <h1 class="h1">Perhitungan AHP Kriteria</h1>
     <div class="table-responsive">
        <table class="table table-sm table-bordered">
          <thead>
            <tr>
              <th scope="col"></th>
            <?php 
            $i = 1;
            $sql = "SELECT * FROM kriteria";
            foreach ($dbh->query($sql) as $data) :
            ?>
            
              <th scope="col"><?php echo $data['nama_kriteria']?></th>
          <?php 
            $i++;
          endforeach;
             ?>
            </tr>
          </thead>
          
          <tbody>
            
            
              
             
             <tr>
             <!-- inputan -->
             <td>Tinggi Tanaman</td>
             <td><?php echo $ahp1[0];?></td>
             <td><?php echo $ahp1[1]?></td>
             <td><?php echo $ahp1[2]?></td>
             <td><?php echo $ahp1[3]?></td>
             <td><?php echo $ahp1[4]?></td>
             <td><?php echo $ahp1[5]?></td>
             <td><?php echo $ahp1[6]?></td>
             <td><?php echo $ahp1[7]?></td>
             
             
              </tr> 

             <tr>

             <!-- inputan -->
             <td>Pencahayaan</td>
             <td><?php echo $ahp2[0]?></td>
             <td><?php echo $ahp2[1]?></td>
             <td><?php echo $ahp2[2]?></td>
             <td><?php echo $ahp2[3]?></td>
             <td><?php echo $ahp2[4]?></td>
             <td><?php echo $ahp2[5]?></td>
             <td><?php echo $ahp2[6]?></td>
             <td><?php echo $ahp2[07]?></td>
             </tr>

             
             <!-- inputan -->
             <td>Daya Tahan</td>
             <td><?php echo $ahp3[0]?></td>
             <td><?php echo $ahp3[1]?></td>
             <td><?php echo $ahp3[2]?></td>
             <td><?php echo $ahp3[3]?></td>
             <td><?php echo $ahp3[4]?></td>
             <td><?php echo $ahp3[5]?></td>
             <td><?php echo $ahp3[6]?></td>
             <td><?php echo $ahp3[07]?></td>
             </tr> 

              <tr>
             <!-- inputan -->
             <td>Kelembapan Udara</td>
             <td><?php echo $ahp4[0]?></td>
             <td><?php echo $ahp4[1]?></td>
             <td><?php echo $ahp4[2]?></td>
             <td><?php echo $ahp4[3]?></td>
             <td><?php echo $ahp4[4]?></td>
             <td><?php echo $ahp4[5]?></td>
             <td><?php echo $ahp4[6]?></td>
             <td><?php echo $ahp4[07]?></td>
             </tr>

              <tr>
             <!-- inputan -->
             <td>Media Tanam</td>
             <td><?php echo $ahp5[0]?></td>
             <td><?php echo $ahp5[1]?></td>
             <td><?php echo $ahp5[2]?></td>
             <td><?php echo $ahp5[3]?></td>
             <td><?php echo $ahp5[4]?></td>
             <td><?php echo $ahp5[5]?></td>
             <td><?php echo $ahp5[6]?></td>
             <td><?php echo $ahp5[07]?></td>
             </tr> 

              <tr>
             <!-- inputan -->
             <td>Warna</td>
             <td><?php echo $ahp6[0]?></td>
             <td><?php echo $ahp6[1]?></td>
             <td><?php echo $ahp6[2]?></td>
             <td><?php echo $ahp6[3]?></td>
             <td><?php echo $ahp6[4]?></td>
             <td><?php echo $ahp6[5]?></td>
             <td><?php echo $ahp6[6]?></td>
             <td><?php echo $ahp6[07]?></td>
             </tr> 

              <tr>
             <!-- inputan -->
             <td>Harga</td>
             <td><?php echo $ahp7[0]?></td>
             <td><?php echo $ahp7[1]?></td>
             <td><?php echo $ahp7[2]?></td>
             <td><?php echo $ahp7[3]?></td>
             <td><?php echo $ahp7[4]?></td>
             <td><?php echo $ahp7[5]?></td>
             <td><?php echo $ahp7[6]?></td>
             <td><?php echo $ahp7[07]?></td>
             </tr> 

              <tr>
             <!-- inputan -->
             <td>Perawatan</td>
             <td><?php echo $ahp8[0]?></td>
             <td><?php echo $ahp8[1]?></td>
             <td><?php echo $ahp8[2]?></td>
             <td><?php echo $ahp8[3]?></td>
             <td><?php echo $ahp8[4]?></td>
             <td><?php echo $ahp8[5]?></td>
             <td><?php echo $ahp8[6]?></td>
             <td><?php echo $ahp8[07]?></td>
             </tr> 

             <tr class="bg-info">
               <td>Jumlah Baris</td>
               <td><?php echo $tahp[0]; ?></td>
               <td><?php echo $tahp[1]; ?></td>
               <td><?php echo $tahp[2]; ?></td>
               <td><?php echo $tahp[3]; ?></td>
               <td><?php echo $tahp[4]; ?></td>
               <td><?php echo $tahp[5]; ?></td>
               <td><?php echo $tahp[6]; ?></td>
               <td><?php echo $tahp[7]; ?></td>
             </tr>
          </tbody>
        </table>
      
      </div>
      <hr>

      <div>
        <h3>Mencari Konsistensi Matriks</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th></th>
               <?php 
            $i = 0;
            $sql = "SELECT * FROM kriteria";
            foreach ($dbh->query($sql) as $data) :
            ?>
            
              <th scope="col"><?php echo $data['nama_kriteria']?></th>
          <?php 
            $i++;
          endforeach;
             ?>
             <th>Bobot Prioritas</th>

            </tr>
          </thead>
          <tbody>
           
            
             <tr> 
              <td>Tinggi Tanaman</td>
              <td><?php 
              echo number_format($cm1[0],3); ?></td>
              <td><?php 
              echo number_format($cm1[1],3); ?></td>
              <td><?php 
              echo number_format($cm1[2],3); ?></td>
              <td><?php 
              echo number_format($cm1[3],3); ?></td>
              <td><?php 
              echo number_format($cm1[4],3); ?></td>
              <td><?php 
              echo number_format($cm1[5],3); ?></td>
              <td><?php 
              echo number_format($cm1[6],3); ?></td>
              <td><?php 
              echo number_format($cm1[7],3); ?></td>
              <td>
                <?php echo number_format($eigen[0],3) ?>
              </td>
            </tr>

            <tr> 
              <td>Pencahayaan</td>
              <td><?php 
              echo number_format($cm2[0],3); ?></td>
              <td><?php 
              echo number_format($cm2[1],3); ?></td>
              <td><?php 
              echo number_format($cm2[2],3); ?></td>
              <td><?php 
              echo number_format($cm2[3],3); ?></td>
              <td><?php 
              echo number_format($cm2[4],3); ?></td>
              <td><?php 
              echo number_format($cm2[5],3); ?></td>
              <td><?php 
              echo number_format($cm2[6],3); ?></td>
              <td><?php 
              echo number_format($cm2[7],3); ?></td>
              <td>
                <?php echo number_format($eigen[1],3) ?>
              </td>
            </tr>

            <tr> 
              <td>Daya Tahan</td>
              <td><?php 
              echo number_format($cm3[0],3); ?></td>
              <td><?php 
              echo number_format($cm3[1],3); ?></td>
              <td><?php 
              echo number_format($cm3[2],3); ?></td>
              <td><?php 
              echo number_format($cm3[3],3); ?></td>
              <td><?php 
              echo number_format($cm3[4],3); ?></td>
              <td><?php 
              echo number_format($cm3[5],3); ?></td>
              <td><?php 
              echo number_format($cm3[6],3); ?></td>
              <td><?php 
              echo number_format($cm3[7],3); ?></td>
              <td>
                <?php echo number_format($eigen[2],3) ?>
              </td>
            </tr>

            <tr> 
              <td>Kelembapan Udara</td>
              <td><?php 
              echo number_format($cm4[0],3); ?></td>
              <td><?php 
              echo number_format($cm4[1],3); ?></td>
              <td><?php 
              echo number_format($cm4[2],3); ?></td>
              <td><?php 
              echo number_format($cm4[3],3); ?></td>
              <td><?php 
              echo number_format($cm4[4],3); ?></td>
              <td><?php 
              echo number_format($cm4[5],3); ?></td>
              <td><?php 
              echo number_format($cm4[6],3); ?></td>
              <td><?php 
              echo number_format($cm4[7],3); ?></td>
              <td>
                <?php echo number_format($eigen[3],3) ?>
              </td>
            </tr>

            <tr> 
              <td>Media Tanam</td>
              <td><?php 
              echo number_format($cm5[0],3); ?></td>
              <td><?php 
              echo number_format($cm5[1],3); ?></td>
              <td><?php 
              echo number_format($cm5[2],3); ?></td>
              <td><?php 
              echo number_format($cm5[3],3); ?></td>
              <td><?php 
              echo number_format($cm5[4],3); ?></td>
              <td><?php 
              echo number_format($cm5[5],3); ?></td>
              <td><?php 
              echo number_format($cm5[6],3); ?></td>
              <td><?php 
              echo number_format($cm5[7],3); ?></td>
              <td>
                <?php echo number_format($eigen[4],3) ?>
              </td>
            </tr>

            <tr> 
              <td>Warna</td>
              <td><?php 
              echo number_format($cm6[0],3); ?></td>
              <td><?php 
              echo number_format($cm6[1],3); ?></td>
              <td><?php 
              echo number_format($cm6[2],3); ?></td>
              <td><?php 
              echo number_format($cm6[3],3); ?></td>
              <td><?php 
              echo number_format($cm6[4],3); ?></td>
              <td><?php 
              echo number_format($cm6[5],3); ?></td>
              <td><?php 
              echo number_format($cm6[6],3); ?></td>
              <td><?php 
              echo number_format($cm6[7],3); ?></td>
              <td>
                <?php echo number_format($eigen[5],3) ?>
              </td>
            </tr>

            <tr> 
              <td>Harga</td>
              <td><?php 
              echo number_format($cm7[0],3); ?></td>
              <td><?php 
              echo number_format($cm7[1],3); ?></td>
              <td><?php 
              echo number_format($cm7[2],3); ?></td>
              <td><?php 
              echo number_format($cm7[3],3); ?></td>
              <td><?php 
              echo number_format($cm7[4],3); ?></td>
              <td><?php 
              echo number_format($cm7[5],3); ?></td>
              <td><?php 
              echo number_format($cm7[6],3); ?></td>
              <td><?php 
              echo number_format($cm7[7],3); ?></td>
              <td>
                <?php echo number_format($eigen[6],3) ?>
              </td>
            </tr>

            <tr> 
              <td>Perawatan</td>
              <td><?php 
              echo number_format($cm8[0],3); ?></td>
              <td><?php 
              echo number_format($cm8[1],3); ?></td>
              <td><?php 
              echo number_format($cm8[2],3); ?></td>
              <td><?php 
              echo number_format($cm8[3],3); ?></td>
              <td><?php 
              echo number_format($cm8[4],3); ?></td>
              <td><?php 
              echo number_format($cm8[5],3); ?></td>
              <td><?php 
              echo number_format($cm8[6],3); ?></td>
              <td><?php 
              echo number_format($cm8[7],3); ?></td>
              <td>
                <?php echo number_format($eigen[7],3); ?>
              </td>
            </tr>
            
            
          </tbody>
        </table>
      </div>

      <div>
        <table class="table table-bordered table-sm">
          <thead>
            <tr>
            <th>CI</th>
            <th>CR</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo number_format($ci,4) ?></td>
            <td><?php echo number_format($cr,4) ?></td>
          </tr>
          
        </tbody>
        </table>
      </div>
      <div>
        <center><a href="topsis.php" class="btn btn-success">Ke Perhitungan TOPSIS</a></center>
      </div>
      
    </main>
  </div>
</div>


    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    



  </body>
</html>

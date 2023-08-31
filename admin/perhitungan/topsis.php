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
    <title>Halaman Admin - Sistem Pendukung Keputusan Pemilihan alternatif Hias untuk didalam Ruangan</title>

    
  <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    

    
    <!-- Custom styles for this template -->
    <link href="../../assets/index.css" rel="stylesheet">

    



  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Sistem Pendukung Keputusan Pemilihan alternatif Hias untuk didalam Ruangan</a>
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
            <a class="nav-link " href="../alternatif/data-alternatif.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Data alternatif
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="data-nilai.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Hasil Perhitungan
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
      <h1>Perhitungan TOPSIS</h1>
      <hr>
      <div>
        <h3>Perhitungan Alternatif</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama alternatif</th>
              <?php 
            $i = 0;
            $sql = "SELECT * FROM kriteria";
            foreach ($dbh->query($sql) as $data) :
            ?>
            
              <th scope="col"><?php echo $data['nama_kriteria']?></th>
              <th>Nilai</th>
          <?php 
            $i++;
          endforeach;
             ?>

            </tr>
          </thead>
          <tbody>
            <?php 
           
            $x = 0;
             $i = 1;
            $sql = "SELECT * FROM alternatif";
            foreach ($dbh->query($sql) as $data) :
            ?>
            
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $data['nama_alternatif'] ?></td>

              <td><?php echo $data['tinggi_alternatif'] ?></td>
              <td><?php 
                if ($data['tinggi_alternatif'] == "> 31 cm") {
                  $sub1[$x] =  3;
                  echo $sub1[$x];
                }elseif ($data['tinggi_alternatif'] == "16 cm - 31 cm") {
                  $sub1[$x] =  2;
                  echo $sub1[$x];
                }elseif ($data['tinggi_alternatif'] == "< 15 cm") {
                  $sub1[$x] =  1;
                  echo $sub1[$x];
                }

               ?></td>
              <td><?php echo $data['pencahayaan'] ?></td>
              <td><?php 
                if ($data['pencahayaan'] == "Terbatas") {
                  $sub2[$x] =  3;
                  echo $sub2[$x];
                }elseif ($data['pencahayaan'] == "Sedang") {
                  $sub2[$x] =  2;
                  echo $sub2[$x];
                }elseif ($data['pencahayaan'] == "Kuat") {
                  $sub2[$x] =  1;
                  echo $sub2[$x];
                }

               ?></td>
              <td><?php echo $data['daya_tahan'] ?></td>
              <td><?php 
                if ($data['daya_tahan'] == "Kuat") {
                  $sub3[$x] =  3;
                  echo $sub3[$x];
                }elseif ($data['daya_tahan'] == "Sedang") {
                  $sub3[$x] =  2;
                  echo $sub3[$x];
                }elseif ($data['daya_tahan'] == "Lemah") {
                  $sub3[$x] =  1;
                  echo $sub3[$x];
                }

               ?></td>
              <td><?php echo $data['kelembapan'] ?></td>
              <td><?php 
                if ($data['kelembapan'] == "Kuat") {
                  $sub4[$x] =  3;
                  echo $sub4[$x];
                }elseif ($data['kelembapan'] == "Sedang") {
                  $sub4[$x] =  2;
                  echo $sub4[$x];
                }elseif ($data['kelembapan'] == "Lemah") {
                  $sub4[$x] =  1;
                  echo $sub4[$x];
                }

               ?></td>
              <td><?php echo $data['media_tanam'] ?></td>
              <td><?php 
                if ($data['media_tanam'] == "Tanah Campur Sekam Padi") {
                  $sub5[$x] =  3;
                  echo $sub5[$x];
                }elseif ($data['media_tanam'] == "Tanah Sabut Kelapa") {
                  $sub5[$x] =  2;
                  echo $sub5[$x];
                }elseif ($data['media_tanam'] == "Tanah") {
                  $sub5[$x] =  1;
                  echo $sub5[$x];
                }

               ?></td>
              <td><?php echo $data['warna'] ?></td>
              <td><?php 
                if ($data['warna'] == "3 Warna") {
                  $sub6[$x] =  3;
                  echo $sub6[$x];
                }elseif ($data['warna'] == "2 Warna") {
                  $sub6[$x] =  2;
                  echo $sub6[$x];
                }elseif ($data['warna'] == "1 Warna") {
                  $sub6[$x] =  1;
                  echo $sub6[$x];
                }

               ?></td>
              <td><?php echo $data['harga'] ?></td>
              <td><?php 
                if ($data['harga'] == "< Rp. 50.000,00") {
                  $sub7[$x] =  3;
                  echo $sub7[$x];
                }elseif ($data['harga'] == "Rp. 51.000,00 - Rp. 300.000,00
") {
                  $sub7[$x] =  2;
                  echo $sub7[$x];
                }elseif ($data['harga'] == "> Rp. 300.000,00") {
                  $sub7[$x] =  1;
                  echo $sub7[$x];
                }

               ?></td>
              <td><?php echo $data['perawatan'] ?></td>
              <td><?php 
                if ($data['perawatan'] == "Mudah") {
                  $sub8[$x] =  3;
                  echo $sub8[$x];
                }elseif ($data['perawatan'] == "Sedang") {
                  $sub8[$x] =  2;
                  echo $sub8[$x];
                }elseif ($data['perawatan'] == "Sulit") {
                  $sub8[$x] =  1;
                  echo $sub8[$x];
                }

               ?></td>
            </tr>
          <?php 
            $i++;
            $x++;
          endforeach;
             ?>
          </tbody>
        </table>
      </div>

      <div>
        <h3>Normalisasi</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th></th>
              <?php 
            $sql = "SELECT * FROM kriteria";
            foreach ($dbh->query($sql) as $data) :
            ?>
            
              <th scope="col"><?php echo $data['nama_kriteria']?></th>
          
          <?php 
          endforeach;
             ?>
            </tr>
          </thead>
          <tbody>
            <?php 
            $powtal1 = 0;
            $powtal2 = 0;
            $powtal3 = 0;
            $powtal4 = 0;
            $powtal5 = 0;
            $powtal6 = 0;
            $powtal7 = 0;
            $powtal8 = 0; 
            $x = 0;
            $sql = "SELECT * FROM alternatif";
            foreach ($dbh->query($sql) as $data) :
            ?>
            <tr>
              <td><?php echo $data['nama_alternatif'] ?></td>
              <td><?php 
              $pow1[$x] = pow($sub1[$x], 2);
              $powtal1 += $pow1[$x]; 
              echo  $pow1[$x] ?></td>
              
              <td><?php 
              $pow2[$x] = pow($sub2[$x], 2);
              $powtal2 += $pow2[$x];
              echo  $pow2[$x] ?></td>
              
              <td><?php 
              $pow3[$x] = pow($sub3[$x], 2);
              $powtal3 += $pow3[$x];
              echo  $pow3[$x] ?></td>
              
              <td><?php 
              $pow4[$x] = pow($sub4[$x], 2);
              $powtal4 += $pow4[$x];
              echo  $pow4[$x] ?></td>
              
              <td><?php 
              $pow5[$x] = pow($sub5[$x], 2);
              $powtal5 += $pow5[$x];
              echo  $pow5[$x] ?></td>
              
              <td><?php 
              $pow6[$x] = pow($sub6[$x], 2);
              $powtal6 += $pow6[$x];
              echo  $pow6[$x] ?></td>
              
              <td><?php 
              $pow7[$x] = pow($sub7[$x], 2);
              $powtal7 += $pow7[$x];
              echo  $pow7[$x] ?></td>
              
              <td><?php 
              $pow8[$x] = pow($sub8[$x], 2);
              $powtal8 += $pow8[$x];
              echo  $pow7[$x] ?></td>
              
            </tr>
            <?php 
            $x++;
            endforeach;
             ?>
             <tr>
               <td>TOTAL</td>
               <td>
                <?php echo $powtal1; ?>
               </td>
               <td>
                <?php echo $powtal2; ?>
               </td>
               <td>
                <?php echo $powtal3; ?>
               </td>
               <td>

                <?php echo $powtal4; ?>
               </td>
               <td>
                <?php echo $powtal5; ?>
               </td>
               <td>
                <?php echo $powtal6; ?>
               </td>
               <td>
                <?php echo $powtal7; ?>
               </td>
               <td>
                <?php echo $powtal8; ?>
               </td>
             </tr>
          </tbody>
        </table>
      </div>

      <div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th></th>  
              <?php 
            $sql = "SELECT * FROM kriteria";
            foreach ($dbh->query($sql) as $data) :
            ?>
            
              <th scope="col"><?php echo $data['nama_kriteria']?></th>
          
          <?php 
          endforeach;
             ?>
            </tr>
            
          </thead>
          <tbody>
            <?php 
            $x = 0;
            $sql = "SELECT * FROM alternatif";
            foreach ($dbh->query($sql) as $data) :
            ?>
            <tr>
              <td><?php echo $data['nama_alternatif'] ?></td>
              <td><?php
              $ntp1[$x] = $sub1[$x]/sqrt($powtal1);
              echo number_format($ntp1[$x],4);?></td>
              <td><?php
              $ntp2[$x] = $sub2[$x]/sqrt($powtal2);
              echo number_format($ntp2[$x],4);?></td>
              <td><?php
              $ntp3[$x] = $sub3[$x]/sqrt($powtal3);
              echo number_format($ntp3[$x],4);?></td>
              <td><?php
              $ntp4[$x] = $sub4[$x]/sqrt($powtal4);
              echo number_format($ntp4[$x],4);?></td>
              <td><?php
              $ntp5[$x] = $sub5[$x]/sqrt($powtal5);
              echo number_format($ntp5[$x],4);?></td>
              <td><?php
              $ntp6[$x] = $sub6[$x]/sqrt($powtal6);
              echo number_format($ntp6[$x],4);?></td>
              <td><?php
              $ntp7[$x] = $sub7[$x]/sqrt($powtal7);
              echo number_format($ntp7[$x],4);?></td>
              <td><?php
              $ntp8[$x] = $sub8[$x]/sqrt($powtal8);
              echo number_format($ntp8[$x],4);?></td>
            </tr>
            <?php 
            $x++;
          endforeach;
             ?>
          </tbody>
        </table>
      </div>
      <hr>
      <h3>Normalisasi Terbobot</h3>
      <div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th></th>
              <?php 
              $b = 0;
            $sql = "SELECT * FROM kriteria";
            foreach ($dbh->query($sql) as $data) :
            ?>
            
              <th scope="col"><?php echo $data['nama_kriteria']?></th>
              
          <?php
          $bobot[$b] = $data['bobot_kriteria'];
          $b++;
          endforeach;
          $bobotal = array_sum($bobot);

            $b = 0;
            $sql = "SELECT * FROM kriteria";
            foreach ($dbh->query($sql) as $data) :
              $normbot[$b] = $bobot[$b]/$bobotal;

              $b++; 
            endforeach;
          
             ?>
            </tr>
          </thead>
          <tbody>
            <?php 
            $x = 0;
            $sql = "SELECT * FROM alternatif";
            foreach ($dbh->query($sql) as $data) :
            ?>
            <tr>
              <td><?php echo $data['nama_alternatif'] ?></td>
              <td><?php 
                $nb1[$x] = $normbot[$x]*$ntp1[$x];
                echo number_format($nb1[$x],4); 
               ?></td>
               <td><?php 
                $nb2[$x] = $normbot[$x]*$ntp2[$x];
                echo number_format($nb2[$x],4); 
               ?></td>
               <td><?php 
                $nb3[$x] = $normbot[$x]*$ntp3[$x];
                echo number_format($nb3[$x],4); 
               ?></td>
               <td><?php 
                $nb4[$x] = $normbot[$x]*$ntp4[$x];
                echo number_format($nb4[$x],4); 
               ?></td>
               <td><?php 
                $nb5[$x] = $normbot[$x]*$ntp5[$x];
                echo number_format($nb5[$x],4); 
               ?></td>
               <td><?php 
                $nb6[$x] = $normbot[$x]*$ntp6[$x];
                echo number_format($nb6[$x],4); 
               ?></td>
               <td><?php 
                $nb7[$x] = $normbot[$x]*$ntp7[$x];
                echo number_format($nb7[$x],4); 
               ?></td>
               <td><?php 
                $nb8[$x] = $normbot[$x]*$ntp8[$x];
                echo number_format($nb8[$x],4); 
               ?></td>

            </tr>
            <?php 
            $x++;
            endforeach;
             ?>
          </tbody>
        </table>
      </div>
      <hr>

      <h3>Matriks Solusi Ideal</h3>
      <div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th></th>
              <?php 
              $x = 0;
            $sql = "SELECT * FROM kriteria";
            foreach ($dbh->query($sql) as $data) :
            $jenis[$x] = $data['jenis'];
            ?>
              
              <th scope="col"><?php echo $data['nama_kriteria']." (".$data['jenis'].")" ?></th>
          
            <?php 
            $x++;
            endforeach;
               ?>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Positif</td>
              <td><?php 
              if ($jenis[0] == "Benefit") {
                $pos1 = max($nb1);
                echo number_format(max($nb1),4);
              }elseif ($jenis[0] == "Cost") {
                $pos1 = min($nb1);
                echo number_format(min($nb1),4);
              }

               ?></td>
               <td><?php 
              if ($jenis[1] == "Benefit") {
                $pos2 = max($nb2);
                echo number_format(max($nb2),4);
              }elseif ($jenis[1] == "Cost") {
                $pos2= min($nb2);
                echo number_format(min($nb2),4);
              }

               ?></td>

               <td><?php 
              if ($jenis[2] == "Benefit") {
                $pos3 = max($nb3);
                echo number_format(max($nb3),4);
              }elseif ($jenis[2] == "Cost") {
                $pos3 = min($nb3);
                echo number_format(min($nb3),4);
              }

               ?></td>
               <td><?php 
              if ($jenis[3] == "Benefit") {
                $pos4 = max($nb4);
                echo number_format(max($nb4),4);
              }elseif ($jenis[3] == "Cost") {
                $pos4 = min($nb4);
                echo number_format(min($nb4),4);
              }

               ?></td>
               <td><?php 
              if ($jenis[4] == "Benefit") {
                $pos5 = max($nb5);
                echo number_format(max($nb5),4);
              }elseif ($jenis[4] == "Cost") {
                $pos5 = min($nb5);
                echo number_format(min($nb5),4);
              }

               ?></td>
               <td><?php 
              if ($jenis[5] == "Benefit") {
                $pos6 = max($nb6);
                echo number_format(max($nb6),4);

              }elseif ($jenis[5] == "Cost") {
                $pos6= min($nb6);
                echo number_format(min($nb6),4);
              }

               ?></td>
               <td><?php 
              if ($jenis[6] == "Benefit") {
                echo number_format(max($nb7),4);
                $pos7= max($nb7);
              }elseif ($jenis[6] == "Cost") {
                $pos7 = min($nb7);
                echo number_format(min($nb7),4);
              }

               ?></td>
               <td><?php 
              if ($jenis[7] == "Benefit") {
                $pos8 = max($nb8);
                echo number_format(max($nb8),4);
              }elseif ($jenis[7] == "Cost") {
                $pos8 = min($nb8);
                echo number_format(min($nb8),4);
              }

               ?></td>
            </tr>

            <tr>
              <td>Negatif</td>
              <td><?php 
              if ($jenis[0] == "Benefit") {
                $neg1 = min($nb1);
                echo number_format(min($nb1),4);
              }elseif ($jenis[0] == "Cost") {
                $neg1 = max($nb1);
                echo number_format(max($nb1),4);
              }

               ?></td>
               <td><?php 
              if ($jenis[1] == "Benefit") {
                $neg2 = min($nb2);
                echo number_format(min($nb2),4);
              }elseif ($jenis[1] == "Cost") {
                $neg2 = max($nb2);
                echo number_format(max($nb2),4);
              }

               ?></td>

               <td><?php 
              if ($jenis[2] == "Benefit") {
                $neg3 = min($nb3);
                echo number_format(min($nb3),4);
              }elseif ($jenis[2] == "Cost") {
                $neg3 = max($nb3);
                echo number_format(max($nb3),4);
              }

               ?></td>
               <td><?php 
              if ($jenis[3] == "Benefit") {
                $neg4 = min($nb4);
                echo number_format(min($nb4),4);
              }elseif ($jenis[3] == "Cost") {
                $neg4 = max($nb4);
                echo number_format(max($nb4),4);
              }

               ?></td>
               <td><?php 
              if ($jenis[4] == "Benefit") {
                $neg5 = min($nb5);
                echo number_format(min($nb5),4);
              }elseif ($jenis[4] == "Cost") {
                $neg5 = max($nb5);
                echo number_format(max($nb5),4);
              }

               ?></td>
               <td><?php 
              if ($jenis[5] == "Benefit") {
                $neg6= min($nb6);
                echo number_format(min($nb6),4);
              }elseif ($jenis[5] == "Cost") {
                $neg6= max($nb6);
                echo number_format(max($nb6),4);
              }

               ?></td>
               <td><?php 
              if ($jenis[6] == "Benefit") {
                $neg7= min($nb7);
                echo number_format(min($nb7),4);
              }elseif ($jenis[6] == "Cost") {
                $neg7= max($nb7);
                echo number_format(max($nb7),4);
              }

               ?></td>
               <td><?php 
              if ($jenis[7] == "Benefit") {
                $neg8= min($nb8);
                echo number_format(min($nb8),4);
              }elseif ($jenis[7] == "Cost") {
                $neg8= max($nb8);
                echo number_format(max($nb8),4);
              }

               ?></td>
            </tr>
            
          </tbody>
        </table>
      </div>
      <hr>

      <h3>Jarak Solusi Ideal</h3>
      <br>
      <h4>Jarak Solusi Positif</h4>
      <div>
        <table class="table table-bordered">
         <thead>
            <tr>
              <th></th>  
              <?php 
            $sql = "SELECT * FROM kriteria";
            foreach ($dbh->query($sql) as $data) :
            ?>
            
              <th scope="col"><?php echo $data['nama_kriteria']?></th>
          
          <?php 
          endforeach;
             ?>
            </tr>
            
          </thead>
          <tbody>
             <?php 
            $x = 0;
            $sql = "SELECT * FROM alternatif";
            foreach ($dbh->query($sql) as $data) :
            ?>
            <tr>
              <td><?php echo $data['nama_alternatif'] ?></td>
              <td><?php

              $jarpos1[$x] = pow($nb1[$x] - $pos1,2)  ;   
              echo number_format($jarpos1[$x],4); ?>
                
              </td>
              
               <td><?php

              $jarpos2[$x] = pow($nb2[$x] - $pos2,2);   
              echo number_format($jarpos2[$x],4); ?>
                
              </td>
               <td><?php

              $jarpos3[$x] = pow($nb3[$x] - $pos3,2);   
              echo number_format($jarpos3[$x],4); ?>
                
              </td>
               <td><?php

              $jarpos4[$x] = pow($nb4[$x] - $pos4,2);   
              echo number_format($jarpos4[$x],4); ?>
                
              </td>
               <td><?php

              $jarpos5[$x] = pow($nb5[$x] - $pos5,2);   
              echo number_format($jarpos5[$x],4); ?>
                
              </td>
               <td><?php

              $jarpos6[$x] = pow($nb6[$x] - $pos6,2);   
              echo number_format($jarpos6[$x],4); ?>
                
              </td>
               <td><?php

              $jarpos7[$x] = pow($nb7[$x] - $pos7,2);   
              echo number_format($jarpos7[$x],4); ?>
                
              </td>
               <td><?php

              $jarpos8[$x] = pow($nb8[$x] - $pos8,2);   
              echo number_format($jarpos8[$x],4); ?>
                
              </td>
            </tr>
            <?php 
            $x++;
          endforeach;

             ?>
          </tbody>
        </table>
      </div>

      <br>
      <h4>Jarak Solusi Negatif</h4>
      <div>
        <table class="table table-bordered">
         <thead>
            <tr>
              <th></th>  
              <?php 
            $sql = "SELECT * FROM kriteria";
            foreach ($dbh->query($sql) as $data) :
            ?>
            
              <th scope="col"><?php echo $data['nama_kriteria']?></th>
          
          <?php 
          endforeach;
             ?>
            </tr>
            
          </thead>
          <tbody>
             <?php 
            $x = 0;
            $sql = "SELECT * FROM alternatif";
            foreach ($dbh->query($sql) as $data) :
            ?>
            <tr>
              <td><?php echo $data['nama_alternatif'] ?></td>
              
              <td><?php

              $jarneg1[$x] = pow($nb1[$x] - $neg1,2)  ;   
              echo number_format($jarneg1[$x],4); ?>
                
              </td>
              
               <td><?php

              $jarneg2[$x] = pow($nb2[$x] - $neg2,2);   
              echo number_format($jarneg2[$x],4); ?>
                
              </td>
               <td><?php

              $jarneg3[$x] = pow($nb3[$x] - $neg3,2);   
              echo number_format($jarneg3[$x],4); ?>
                
              </td>
               <td><?php

              $jarneg4[$x] = pow($nb4[$x] - $neg4,2);   
              echo number_format($jarneg4[$x],4); ?>
                
              </td>
               <td><?php

              $jarneg5[$x] = pow($nb5[$x] - $neg5,2);   
              echo number_format($jarneg5[$x],4); ?>
                
              </td>
               <td><?php

              $jarneg6[$x] = pow($nb6[$x] - $neg6,2);   
              echo number_format($jarneg6[$x],4); ?>
                
              </td>
               <td><?php

              $jarneg7[$x] = pow($nb7[$x] - $neg7,2);   
              echo number_format($jarneg7[$x],4); ?>
                
              </td>
               <td><?php

              $jarneg8[$x] = pow($nb8[$x] - $neg8,2);   
              echo number_format($jarneg8[$x],4); ?>
                
              </td>
            </tr>
            <?php 
            $x++;
          endforeach;

             ?>
          </tbody>
        </table>
      </div>
 

      <br>

      <table class="table table-bordered">
        <thead>
          <thead>
            <tr>
              <th>Alternatif</th>
              <th>Positif</th>
              <th>Negatiff</th>
            </tr>
        </thead>
        <tbody>
           <?php 
            $x = 0;
            $sql = "SELECT * FROM alternatif";
            foreach ($dbh->query($sql) as $data) :
            ?>
            <tr>
              <td><?php echo $data['nama_alternatif'] ?></td>
              <td><?php 
              $jarposideal[$x] = sqrt($jarpos1[$x]+$jarpos2[$x]+$jarpos3[$x]+$jarpos4[$x]+$jarpos5[$x]+$jarpos6[$x]+$jarpos7[$x]+$jarpos8[$x]);
              echo number_format($jarposideal[$x],4);

               ?></td>
               <td><?php 
              $jarnegideal[$x] = sqrt($jarneg1[$x]+$jarneg2[$x]+$jarneg3[$x]+$jarneg4[$x]+$jarneg5[$x]+$jarneg6[$x]+$jarneg7[$x]+$jarneg8[$x]);
              echo number_format($jarnegideal[$x],4);

               ?></td>
            </tr>
            <?php 
            $x++;
            endforeach;
             ?>
        </tbody>
      </table>
      <hr>
      <h4>Nilai Preferensi</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Alternatif</th>
            <th>Hasil</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $x = 0;
            $sql = "SELECT * FROM alternatif";
            foreach ($dbh->query($sql) as $data) :
            ?>
          <tr>
            <td><?php echo $data['nama_alternatif'] ?></td>
            <td><?php 
            $hasil[$x] = $jarnegideal[$x]/($jarnegideal[$x]+$jarposideal[$x]);
            echo number_format($hasil[$x],4);

            $sql=mysqli_query($dbh,"UPDATE alternatif set nilai_topsis = '$hasil[$x]' WHERE id_alternatif = '$data[id_alternatif]'");
             ?></td>
          </tr>
          <?php 
          $x++;
        endforeach;
           ?>
        </tbody>
      </table>


      <div>
        <center><a href="data-nilai.php" class="btn btn-success">Ke Perhitungan AHP</a></center>
        <center><a href="perangkingan.php" class="btn btn-success">Ke Hasil Ranking</a></center>
      </div>
     
    </main>
  </div>
</div>


    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    



  </body>
</html>

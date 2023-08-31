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

$tahp[0] = $ahp1[0]+$ahp2[0]+$ahp3[0]+$ahp4[0]+$ahp5[0]+$ahp6[0]+$ahp7[0]+$ahp8[0];
$tahp[1] = $ahp1[1]+$ahp2[1]+$ahp3[1]+$ahp4[1]+$ahp5[1]+$ahp6[1]+$ahp7[1]+$ahp8[1];
$tahp[2] = $ahp1[2]+$ahp2[2]+$ahp3[2]+$ahp4[2]+$ahp5[2]+$ahp6[2]+$ahp7[2]+$ahp8[2];
$tahp[3] = $ahp1[3]+$ahp2[3]+$ahp3[3]+$ahp4[3]+$ahp5[3]+$ahp6[3]+$ahp7[3]+$ahp8[3];
$tahp[4] = $ahp1[4]+$ahp2[4]+$ahp3[4]+$ahp4[4]+$ahp5[4]+$ahp6[4]+$ahp7[4]+$ahp8[4];
$tahp[5] = $ahp1[5]+$ahp2[5]+$ahp3[5]+$ahp4[5]+$ahp5[5]+$ahp6[5]+$ahp7[5]+$ahp8[5];
$tahp[6] = $ahp1[6]+$ahp2[6]+$ahp3[6]+$ahp4[6]+$ahp5[6]+$ahp6[6]+$ahp7[6]+$ahp8[6];
$tahp[7] = $ahp1[7]+$ahp2[7]+$ahp3[7]+$ahp4[7]+$ahp5[7]+$ahp6[7]+$ahp7[7]+$ahp8[7];



endforeach;

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
      

     
     <div class="table-responsive">
        <table class="table table-striped table-sm table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
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
          <form class="form" action="ahp.php?hitung=1" method="post">
    
          <tbody>
            
            
              
             
             <tr>
             <!-- inputan -->
             <td>Tinggi Tanaman</td>
             <td><input type="number" name="c11" value="1" step="0.00001" max="9" disabled class="form-control"></td>
             <td><input type="number" name="c12" value="<?php echo $totalan['c12']?>" id = "c12" step="0.00001" max="9"  onchange="updateValuec12()" class="form-control" required></td>
             <td><input type="number" name="c13" value="<?php echo $totalan['c13']?>"id = "c13" step="0.00001" max="9"  onchange="updateValuec13()" class="form-control" required></td> 
             <td><input type="number" name="c14" value="<?php echo $totalan['c14']?>"id = "c14" step="0.00001" max="9"  onchange="updateValuec14()" class="form-control" required></td>
             <td><input type="number" name="c15" value="<?php echo $totalan['c15']?>"id = "c15" step="0.00001" max="9"  onchange="updateValuec15()" class="form-control" required></td>
             <td><input type="number" name="c16" value="<?php echo $totalan['c16']?>"id = "c16" step="0.00001" max="9"  onchange="updateValuec16()" class="form-control" required></td>
             <td><input type="number" name="c17" value="<?php echo $totalan['c17']?>"id = "c17" step="0.00001" max="9"  onchange="updateValuec17()" class="form-control" required></td>
             <td><input type="number" name="c18" value="<?php echo $totalan['c18']?>" id = "c18" step="0.00001" max="9"  onchange="updateValuec18()" class="form-control" required></td>
              </tr> 

             <tr>

             <!-- inputan -->
             <td>Pencahayaan</td>
             <td><input type="number" name="c21" value="<?php echo $totalan['c21']?>"id = "c21" step="0.00001" max="9"  class="form-control" onchange="updateValuec21()" required></td>
             <td><input type="number" name="c22" value="1"step="0.00001" max="9" disabled class="form-control"></td>
             <td><input type="number" name="c23" value="<?php echo $totalan['c23']?>"id = "c23" step="0.00001" max="9"  class="form-control" onchange="updateValuec23()" required></td>
             <td><input type="number" name="c24" value="<?php echo $totalan['c24']?>"id = "c24" step="0.00001" max="9"  class="form-control" onchange="updateValuec24()" required></td>
             <td><input type="number" name="c25" value="<?php echo $totalan['c25']?>"id = "c25" step="0.00001" max="9"  class="form-control" onchange="updateValuec25()" required></td>
             <td><input type="number" name="c26" value="<?php echo $totalan['c26']?>"id = "c26" step="0.00001" max="9"  class="form-control" onchange="updateValuec26()" required></td>
             <td><input type="number" name="c27" value="<?php echo $totalan['c27']?>"id = "c27" step="0.00001" max="9"  class="form-control" onchange="updateValuec27()" required></td>
             <td><input type="number" name="c28" value="<?php echo $totalan['c28']?>"id = "c28" step="0.00001" max="9"  class="form-control" onchange="updateValuec28()" required></td>
             </tr>

             <tr>
             <!-- inputan -->
             <td>Daya Tahan</td>
             <td><input type="number" name="c31" value="<?php echo $totalan['c31']?>" id = "c31" step="0.00001" max="9"   class="form-control" onchange="updateValuec31()" required></td>
             <td><input type="number" name="c32" value="<?php echo $totalan['c32']?>" id = "c32" step="0.00001" max="9"   class="form-control" onchange="updateValuec32()" required></td>
             <td><input type="number" name="c33" value="1"  step="0.00001" max="9" disabled class="form-control" ></td>
             <td><input type="number" name="c34" value="<?php echo $totalan['c34']?>" id = "c34" step="0.00001" max="9"  class="form-control" onchange="updateValuec34()" required></td>
             <td><input type="number" name="c35" value="<?php echo $totalan['c35']?>" id = "c35" step="0.00001" max="9"  class="form-control" onchange="updateValuec35()" required></td>
             <td><input type="number" name="c36" value="<?php echo $totalan['c36']?>" id = "c36" step="0.00001" max="9"  class="form-control" onchange="updateValuec36()" required></td>
             <td><input type="number" name="c37" value="<?php echo $totalan['c37']?>" id = "c37" step="0.00001" max="9"  class="form-control" onchange="updateValuec37()" required></td>
             <td><input type="number" name="c38" value="<?php echo $totalan['c38']?>" id = "c38" step="0.00001" max="9"  class="form-control" onchange="updateValuec38()" required></td>
              </tr> 

              <tr>
             <!-- inputan -->
             <td>Kelembapan Udara</td>
             <td><input type="number" name="c41" value="<?php echo $totalan['c41']?>" id = "c41" step="0.00001" max="9"  class="form-control"  onchange="updateValuec41()" required></td>
             <td><input type="number" name="c42" value="<?php echo $totalan['c42']?>" id = "c42" step="0.00001" max="9"  class="form-control" onchange="updateValuec42()" required></td>
             <td><input type="number" name="c43" value="<?php echo $totalan['c43']?>" id = "c43" step="0.00001" max="9"  class="form-control" onchange="updateValuec43()" required></td>
             <td><input type="number" name="c44" value="1" step="0.00001" max="9" disabled  class="form-control"></td>
             <td><input type="number" name="c45" value="<?php echo $totalan['c45']?>" id = "c45" step="0.00001" max="9"  class="form-control" onchange="updateValuec45()" required></td>
             <td><input type="number" name="c46"value="<?php echo $totalan['c46']?>" id = "c46" step="0.00001" max="9"  class="form-control" onchange="updateValuec46()" required></td>
             <td><input type="number" name="c47" value="<?php echo $totalan['c47']?>" id = "c47" step="0.00001" max="9"  class="form-control" onchange="updateValuec47()" required></td>
             <td><input type="number" name="c48" value="<?php echo $totalan['c48']?>" id = "c48" step="0.00001" max="9"  class="form-control" onchange="updateValuec48()" required></td>
              </tr> 

              <tr>
             <!-- inputan -->
             <td>Media Tanam</td>
             <td><input type="number" name="c51" value="<?php echo $totalan['c51']?>" id = "c51" step="0.00001" max="9"  class="form-control" onchange="updateValuec51()" required></td>
             <td><input type="number" name="c52" value="<?php echo $totalan['c52']?>" id = "c52" step="0.00001" max="9"  class="form-control" onchange="updateValuec52()" required></td>
             <td><input type="number" name="c53" value="<?php echo $totalan['c53']?>" id = "c53" step="0.00001" max="9"  class="form-control" onchange="updateValuec53()" required></td>
             <td><input type="number" name="c54" value="<?php echo $totalan['c54']?>" id = "c54" step="0.00001" max="9"  class="form-control" onchange="updateValuec54()" required></td>
             <td><input type="number" name="c55" value="1"  step="0.00001" max="9" disabled class="form-control"></td>
             <td><input type="number" name="c56" value="<?php echo $totalan['c56']?>" id = "c56" step="0.00001" max="9"  class="form-control" onchange="updateValuec56()" required></td>
             <td><input type="number" name="c57" value="<?php echo $totalan['c57']?>" id = "c57" step="0.00001" max="9"  class="form-control" onchange="updateValuec57()" required></td>
             <td><input type="number" name="c58" value="<?php echo $totalan['c58']?>" id = "c58" step="0.00001" max="9"  class="form-control" onchange="updateValuec58()" required></td>
              </tr> 

              <tr>
             <!-- inputan -->
             <td>Warna</td>
             <td><input type="number" name="c61" value="<?php echo $totalan['c61']?>"id = "c61" step="0.00001" max="9"  class="form-control" onchange="updateValuec61()" required></td>
             <td><input type="number" name="c62" value="<?php echo $totalan['c62']?>"id = "c62" step="0.00001" max="9"  class="form-control" onchange="updateValuec62()" required></td>
             <td><input type="number" name="c63" value="<?php echo $totalan['c63']?>"id = "c63"  step="0.00001" max="9"  class="form-control" onchange="updateValuec63()" required></td>
             <td><input type="number" name="c64" value="<?php echo $totalan['c64']?>"id = "c64" step="0.00001" max="9"  class="form-control" onchange="updateValuec64()" required></td>
             <td><input type="number" name="c65" value="<?php echo $totalan['c65']?>"id = "c65" step="0.00001" max="9"  class="form-control" onchange="updateValuec65()" required></td>
             <td><input type="number" name="c66" value="1"step="0.00001" max="9" disabled class="form-control"></td>
             <td><input type="number" name="c67" value="<?php echo $totalan['c67']?>"id = "c67" step="0.00001" max="9"  class="form-control" onchange="updateValuec67()" required></td>
             <td><input type="number" name="c68" value="<?php echo $totalan['c68']?>"id = "c68" step="0.00001" max="9"  class="form-control" onchange="updateValuec68()" required></td>
              </tr> 

              <tr>
             <!-- inputan -->
             <td>Harga</td>
             <td><input type="number" name="c71"  value="<?php echo $totalan['c71']?>" id = "c71" step="0.00001" max="9"  class="form-control" onchange="updateValuec71()" required></td>
             <td><input type="number" name="c72"  value="<?php echo $totalan['c72']?>" id = "c72" step="0.00001" max="9"  class="form-control" onchange="updateValuec72()" required></td>
             <td><input type="number" name="c73"  value="<?php echo $totalan['c73']?>" id = "c73" step="0.00001" max="9"  class="form-control" onchange="updateValuec73()" required></td>
             <td><input type="number" name="c74"  value="<?php echo $totalan['c74']?>" id = "c74" step="0.00001" max="9"  class="form-control" onchange="updateValuec74()" required></td>
             <td><input type="number" name="c75"  value="<?php echo $totalan['c75']?>" id = "c75" step="0.00001" max="9"  class="form-control" onchange="updateValuec75()" required></td>
             <td><input type="number" name="c76"  value="<?php echo $totalan['c76']?>" id = "c76" step="0.00001" max="9"  class="form-control" onchange="updateValuec76()" required></td>
             <td><input type="number" name="c77"  value="1" step="0.00001" max="9" disabled class="form-control"></td>
             <td><input type="number" name="c78" value="<?php echo $totalan['c78']?>" id = "c78" step="0.00001" max="9"  class="form-control" onchange="updateValuec78()" required></td>
              </tr> 

              <tr>
             <!-- inputan -->
             <td>Perawatan</td>
             <td><input type="number" name="c81"  value="<?php echo $totalan['c81']?>" id = "c81" step="0.00001" max="9"  class="form-control" onchange="updateValuec81()" required></td>
             <td><input type="number" name="c82"  value="<?php echo $totalan['c82']?>" id = "c82" step="0.00001" max="9"  class="form-control" onchange="updateValuec82()" required></td>
             <td><input type="number" name="c83"  value="<?php echo $totalan['c83']?>" id = "c83" step="0.00001" max="9"  class="form-control" onchange="updateValuec83()" required></td>
             <td><input type="number" name="c84"  value="<?php echo $totalan['c84']?>" id = "c84" step="0.00001" max="9"  class="form-control" onchange="updateValuec84()" required></td>
             <td><input type="number" name="c85"  value="<?php echo $totalan['c85']?>" id = "c85" step="0.00001" max="9"  class="form-control" onchange="updateValuec85()" required></td>
             <td><input type="number" name="c86"  value="<?php echo $totalan['c86']?>" id = "c86" step="0.00001" max="9"  class="form-control" onchange="updateValuec86()" required></td>
             <td><input type="number" name="c87"  value="<?php echo $totalan['c87']?>" id = "c87" step="0.00001" max="9"  class="form-control" onchange="updateValuec87()" required></td>
             <td><input type="number" name="c88"  value="1" step="0.00001" max="9" disabled class="form-control"></td>
            </tr> 

         
               
          </tbody>
        </table>
      <div class="form-group">
              <input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
              <input type="submit" required name="ubah" value = "Simpan" class="btn btn-success btn-fill pull-left" onclick="return confirm('Apa anda yakin dengan perubahan data Kriteria?');">
        </div>
    </form>
      </div>
      <hr>


    </main>
  </div>
</div>


    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    

    <!-- isi option berdasarkan option pertama-->
    <script type="text/javascript">
      var kriteriaList ={
        "Tinggi Tanaman" : ['Pencahayaan', 'Daya Tahan', 'Kelembapan Udara', 'Media Tanam', 'Warna', 'Harga', 'Perawatan'],

      };

      lkriteria1 = document.getElementById("kriteria1");
      lkriteria2 = document.getElementById("kriteria2");

      for (key in kriteriaList) {
        lkriteria1.innerHTML = lkriteria1.innerHTML + '<option>' + key + '</option';
      }

      kriteria1.addEventListener('change',function tampil_kriteria2(e){
        lkriteria2.innerHTML = '';
        itm = e.target.value;
        if(itm in kriteriaList){
          for(i=0;i<kriteriaList[itm].length;i++){
            kriteria2.innerHTML = kriteria2.innerHTML + '<option>' + kriteriaList[itm][i] + '</option';
          }
        }
      });


      c12 = document.getElementById('c12');
      c21 = document.getElementById('c21');

      // kriteria 1
      c12.addEventListener('input', updateValue12);
      document.getElementById('c13').addEventListener('input', updateValue13);
      document.getElementById('c14').addEventListener('input', updateValue14);
      document.getElementById('c15').addEventListener('input', updateValue15);
      document.getElementById('c16').addEventListener('input', updateValue16);
      document.getElementById('c17').addEventListener('input', updateValue17);
      document.getElementById('c18').addEventListener('input', updateValue18);

      document.getElementById('c21').addEventListener('input', updateValue21);
      document.getElementById('c23').addEventListener('input', updateValue23);
      document.getElementById('c24').addEventListener('input', updateValue24);
      document.getElementById('c25').addEventListener('input', updateValue25);
      document.getElementById('c26').addEventListener('input', updateValue26);
      document.getElementById('c27').addEventListener('input', updateValue27);
      document.getElementById('c28').addEventListener('input', updateValue28);

      document.getElementById('c31').addEventListener('input', updateValue31);
      document.getElementById('c32').addEventListener('input', updateValue32);
      document.getElementById('c34').addEventListener('input', updateValue34);
      document.getElementById('c35').addEventListener('input', updateValue35);
      document.getElementById('c36').addEventListener('input', updateValue36);
      document.getElementById('c37').addEventListener('input', updateValue37);
      document.getElementById('c38').addEventListener('input', updateValue38);

      document.getElementById('c41').addEventListener('input', updateValue41);
      document.getElementById('c42').addEventListener('input', updateValue42);
      document.getElementById('c43').addEventListener('input', updateValue43);
      document.getElementById('c45').addEventListener('input', updateValue45);
      document.getElementById('c46').addEventListener('input', updateValue46);
      document.getElementById('c47').addEventListener('input', updateValue47);
      document.getElementById('c48').addEventListener('input', updateValue48);

      document.getElementById('c51').addEventListener('input', updateValue51);
      document.getElementById('c52').addEventListener('input', updateValue52);
      document.getElementById('c53').addEventListener('input', updateValue53);
      document.getElementById('c54').addEventListener('input', updateValue54);
      document.getElementById('c56').addEventListener('input', updateValue56);
      document.getElementById('c57').addEventListener('input', updateValue57);
      document.getElementById('c58').addEventListener('input', updateValue58);

      document.getElementById('c61').addEventListener('input', updateValue61);
      document.getElementById('c62').addEventListener('input', updateValue62);
      document.getElementById('c63').addEventListener('input', updateValue63);
      document.getElementById('c64').addEventListener('input', updateValue64);
      document.getElementById('c65').addEventListener('input', updateValue65);
      document.getElementById('c67').addEventListener('input', updateValue67);
      document.getElementById('c68').addEventListener('input', updateValue68);

      document.getElementById('c71').addEventListener('input', updateValue71);
      document.getElementById('c72').addEventListener('input', updateValue72);
      document.getElementById('c73').addEventListener('input', updateValue73);
      document.getElementById('c74').addEventListener('input', updateValue74);
      document.getElementById('c75').addEventListener('input', updateValue75);
      document.getElementById('c76').addEventListener('input', updateValue76);
      document.getElementById('c78').addEventListener('input', updateValue78);

      document.getElementById('c81').addEventListener('input', updateValue81);
      document.getElementById('c82').addEventListener('input', updateValue82);
      document.getElementById('c83').addEventListener('input', updateValue83);
      document.getElementById('c84').addEventListener('input', updateValue84);
      document.getElementById('c85').addEventListener('input', updateValue85);
      document.getElementById('c86').addEventListener('input', updateValue86);
      document.getElementById('c87').addEventListener('input', updateValue87);


      function updateValuec12(){
        document.getElementById('c21').value = (1/ document.getElementById('c12').value).toFixed(4);
      }
      function updateValuec13(){
        document.getElementById('c31').value = (1/ document.getElementById('c13').value).toFixed(4);
      }
      function updateValuec14(){
        document.getElementById('c41').value = (1/ document.getElementById('c14').value).toFixed(4);
      }
      function updateValuec15(){
        document.getElementById('c51').value = (1/ document.getElementById('c15').value).toFixed(4);
      }
      function updateValuec16(){
       document.getElementById('c61').value = (1/ document.getElementById('c16').value).toFixed(4);
      }
      function updateValuec17(){
        document.getElementById('c71').value = (1/ document.getElementById('c17').value).toFixed(4);
      }

      function updateValuec18(){
        document.getElementById('c81').value = (1/ document.getElementById('c18').value).toFixed(4);
      }
      

      function updateValuec21(){
        document.getElementById('c12').value = (1/ document.getElementById('c21').value).toFixed(4);
      }
      function updateValuec23(){
        document.getElementById('c32').value = (1/ document.getElementById('c23').value).toFixed(4);
      }
      function updateValuec24(){
        document.getElementById('c42').value = (1/ document.getElementById('c24').value).toFixed(4);
      }
      function updateValuec25(){
        document.getElementById('c52').value = (1/ document.getElementById('c25').value).toFixed(4);
      }
      function updateValuec26(){
        document.getElementById('c62').value = (1/ document.getElementById('c26').value).toFixed(4);
      }
      function updateValuec27(){
        document.getElementById('c72').value = (1/ document.getElementById('c27').value).toFixed(4);
      }
      function updateValuec28(){
        document.getElementById('c82').value = (1/ document.getElementById('c28').value).toFixed(4);
      }

      // 3
      function updateValuec31(){
        document.getElementById('c13').value = (1/ document.getElementById('c31').value).toFixed(4);
      }
      function updateValuec32(){
        document.getElementById('c23').value = (1/ document.getElementById('c32').value).toFixed(4);
      }
      function updateValuec34(){
        document.getElementById('c43').value = (1/ document.getElementById('c34').value).toFixed(4);
      }
      function updateValuec35(){
        document.getElementById('c53').value = (1/ document.getElementById('c35').value).toFixed(4);
      }
      function updateValuec36(){
        document.getElementById('c63').value = (1/ document.getElementById('c36').value).toFixed(4);
      }
      function updateValuec37(){
        document.getElementById('c73').value = (1/ document.getElementById('c37').value).toFixed(4);
      }
      function updateValuec38(){
        document.getElementById('c83').value = (1/ document.getElementById('c38').value).toFixed(4);
      }

      // 3
      function updateValuec41(){
        document.getElementById('c14').value = (1/ document.getElementById('c41').value).toFixed(4);
      }
      function updateValuec42(){
        document.getElementById('c24').value = (1/ document.getElementById('c42').value).toFixed(4);
      }
      function updateValuec43(){
        document.getElementById('c34').value = (1/ document.getElementById('c43').value).toFixed(4);
      }
      function updateValuec45(){
        document.getElementById('c54').value = (1/ document.getElementById('c45').value).toFixed(4);
      }
      function updateValuec46(){
        document.getElementById('c64').value = (1/ document.getElementById('c46').value).toFixed(4);
      }
      function updateValuec47(){
        document.getElementById('c74').value = (1/ document.getElementById('c47').value).toFixed(4);
      }
      function updateValuec48(){
        document.getElementById('c84').value = (1/ document.getElementById('c48').value).toFixed(4);
      }

      // 3
      function updateValuec51(){
        document.getElementById('c15').value = (1/ document.getElementById('c51').value).toFixed(4);
      }
      function updateValuec52(){
        document.getElementById('c25').value = (1/ document.getElementById('c52').value).toFixed(4);
      }
      function updateValuec53(){
        document.getElementById('c35').value = (1/ document.getElementById('c53').value).toFixed(4);
      }
      function updateValuec54(){
        document.getElementById('c45').value = (1/ document.getElementById('c54').value).toFixed(4);
      }
      function updateValuec56(){
        document.getElementById('c65').value = (1/ document.getElementById('c56').value).toFixed(4);
      }
      function updateValuec57(){
        document.getElementById('c75').value = (1/ document.getElementById('c57').value).toFixed(4);
      }
      function updateValuec58(){
        document.getElementById('c85').value = (1/ document.getElementById('c58').value).toFixed(4);
      }
      

      // 3
      function updateValuec61(){
       document.getElementById('c16').value = (1/ document.getElementById('c61').value).toFixed(4);
      }
      function updateValuec62(){
       document.getElementById('c26').value = (1/ document.getElementById('c62').value).toFixed(4);
      }
      function updateValuec63(){
       document.getElementById('c36').value = (1/ document.getElementById('c63').value).toFixed(4);
      }
      function updateValuec64(){
       document.getElementById('c46').value = (1/ document.getElementById('c64').value).toFixed(4);
      }
      function updateValuec65(){
       document.getElementById('c56').value = (1/ document.getElementById('c65').value).toFixed(4);
      }
      function updateValuec67(){
       document.getElementById('c76').value = (1/ document.getElementById('c67').value).toFixed(4);
      }
      function updateValuec68(){
       document.getElementById('c86').value = (1/ document.getElementById('c68').value).toFixed(4);
      }

      // 3
      function updateValuec71(){
        document.getElementById('c17').value = (1/ document.getElementById('c71').value).toFixed(4);
      }
      function updateValuec72(){
        document.getElementById('c27').value = (1/ document.getElementById('c72').value).toFixed(4);
      }
      function updateValuec73(){
        document.getElementById('c37').value = (1/ document.getElementById('c73').value).toFixed(4);
      }
      function updateValuec74(){
        document.getElementById('c47').value = (1/ document.getElementById('c74').value).toFixed(4);
      }
      function updateValuec75(){
        document.getElementById('c57').value = (1/ document.getElementById('c75').value).toFixed(4);
      }
      function updateValuec76(){
        document.getElementById('c67').value = (1/ document.getElementById('c76').value).toFixed(4);
      }
      function updateValuec78(){
        document.getElementById('c87').value = (1/ document.getElementById('c78').value).toFixed(4);
      }

      // 3
      function updateValuec81(){
        document.getElementById('c18').value = (1/ document.getElementById('c81').value).toFixed(4);
      }
      function updateValuec82(){
        document.getElementById('c28').value = (1/ document.getElementById('c82').value).toFixed(4);
      }
      function updateValuec83(){
        document.getElementById('c38').value = (1/ document.getElementById('c83').value).toFixed(4);
      }
      function updateValuec84(){
        document.getElementById('c48').value = (1/ document.getElementById('c84').value).toFixed(4);
      }
      function updateValuec85(){
        document.getElementById('c58').value = (1/ document.getElementById('c85').value).toFixed(4);
      }
      function updateValuec86(){
        document.getElementById('c68').value = (1/ document.getElementById('c86').value).toFixed(4);
      }
      function updateValuec87(){
        document.getElementById('c78').value = (1/ document.getElementById('c87').value).toFixed(4);
      }
      

    </script>



  </body>
</html>

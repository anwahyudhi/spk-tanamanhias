<?php 
include '../../koneksi.php';

$id = $_GET['hitung'];


$c11 = 1;
$c12 = $_POST['c12'];
$c13 = $_POST['c13'];
$c14 = $_POST['c14'];
$c15 = $_POST['c15'];
$c16 = $_POST['c16'];
$c17 = $_POST['c17'];
$c18 = $_POST['c18'];

$c21 = $_POST['c21'];
$c22 = 1;
$c23 = $_POST['c23'];
$c24 = $_POST['c24'];
$c25 = $_POST['c25'];
$c26 = $_POST['c26'];
$c27 = $_POST['c27'];
$c28 = $_POST['c28'];

$c31 = $_POST['c31'];
$c32 = $_POST['c32'];
$c33 = 1;
$c34 = $_POST['c34'];
$c35 = $_POST['c35'];
$c36 = $_POST['c36'];
$c37 = $_POST['c37'];
$c38 = $_POST['c38'];

$c41 = $_POST['c41'];
$c42 = $_POST['c42'];
$c43 = $_POST['c43'];
$c44 = 1;
$c45 = $_POST['c45'];
$c46 = $_POST['c46'];
$c47 = $_POST['c47'];
$c48 = $_POST['c48'];

$c51 = $_POST['c51'];
$c52 = $_POST['c52'];
$c53 = $_POST['c53'];
$c54 = $_POST['c54'];
$c55 = 1;
$c56 = $_POST['c56'];
$c57 = $_POST['c57'];
$c58 = $_POST['c58'];
 
$c61 = $_POST['c61'];
$c62 = $_POST['c62'];
$c63 = $_POST['c63'];
$c64 = $_POST['c64'];
$c65 = $_POST['c65'];
$c66 = 1;
$c67 = $_POST['c67'];
$c68 = $_POST['c68'];

$c71 = $_POST['c71'];
$c72 = $_POST['c72'];
$c73 = $_POST['c73'];
$c74 = $_POST['c74'];
$c75 = $_POST['c75'];
$c76 = $_POST['c76'];
$c77 = 1;
$c78 = $_POST['c78'];

$c81 = $_POST['c81'];
$c82 = $_POST['c82'];
$c83 = $_POST['c83'];
$c84 = $_POST['c84'];
$c85 = $_POST['c85'];
$c86 = $_POST['c86'];
$c87 = $_POST['c87'];
$c88 = 1;

$tahp = array();

$cm1 = array();
$cm2 = array();
$cm3 = array();
$cm4 = array();
$cm5 = array();
$cm6 = array();
$cm7 = array();
$cm8 = array();
$baris= array();
$eigen= array();

$tahp[0] = $c11+$c21+$c31+$c41+$c51+$c61+$c71+$c81;
$tahp[1] = $c12+$c22+$c32+$c42+$c52+$c62+$c72+$c82;
$tahp[2] = $c13+$c23+$c33+$c43+$c53+$c63+$c73+$c83;
$tahp[3] = $c14+$c24+$c34+$c44+$c54+$c64+$c74+$c84;
$tahp[4] = $c15+$c25+$c35+$c45+$c55+$c65+$c75+$c85;
$tahp[5] = $c16+$c26+$c36+$c46+$c56+$c66+$c76+$c86;
$tahp[6] = $c17+$c27+$c37+$c47+$c57+$c67+$c77+$c87;
$tahp[7] = $c18+$c28+$c38+$c48+$c58+$c68+$c78+$c88;

$cm1[0] = $c11/$tahp[0];   
$cm1[1] = $c12/$tahp[1];    
$cm1[2] = $c13/$tahp[2];    
$cm1[3] = $c14/$tahp[3];    
$cm1[4] = $c15/$tahp[4];    
$cm1[5] = $c16/$tahp[5];    
$cm1[6] = $c17/$tahp[6];    
$cm1[7] = $c18/$tahp[7];    

$cm2[0] = $c21/$tahp[0];   
$cm2[1] = $c22/$tahp[1];    
$cm2[2] = $c23/$tahp[2];    
$cm2[3] = $c24/$tahp[3];    
$cm2[4] = $c25/$tahp[4];    
$cm2[5] = $c26/$tahp[5];    
$cm2[6] = $c27/$tahp[6];    
$cm2[7] = $c28/$tahp[7];  

$cm3[0] = $c31/$tahp[0];   
$cm3[1] = $c32/$tahp[1];    
$cm3[2] = $c33/$tahp[2];    
$cm3[3] = $c34/$tahp[3];    
$cm3[4] = $c35/$tahp[4];    
$cm3[5] = $c36/$tahp[5];    
$cm3[6] = $c37/$tahp[6];    
$cm3[7] = $c38/$tahp[7];  

$cm4[0] = $c41/$tahp[0];   
$cm4[1] = $c42/$tahp[1];    
$cm4[2] = $c43/$tahp[2];    
$cm4[3] = $c44/$tahp[3];    
$cm4[4] = $c45/$tahp[4];    
$cm4[5] = $c46/$tahp[5];    
$cm4[6] = $c47/$tahp[6];    
$cm4[7] = $c48/$tahp[7];  

$cm5[0] = $c51/$tahp[0];   
$cm5[1] = $c52/$tahp[1];    
$cm5[2] = $c53/$tahp[2];    
$cm5[3] = $c54/$tahp[3];    
$cm5[4] = $c55/$tahp[4];    
$cm5[5] = $c56/$tahp[5];    
$cm5[6] = $c57/$tahp[6];    
$cm5[7] = $c58/$tahp[7];

$cm6[0] = $c61/$tahp[0];   
$cm6[1] = $c62/$tahp[1];    
$cm6[2] = $c63/$tahp[2];    
$cm6[3] = $c64/$tahp[3];    
$cm6[4] = $c65/$tahp[4];    
$cm6[5] = $c66/$tahp[5];    
$cm6[6] = $c67/$tahp[6];    
$cm6[7] = $c68/$tahp[7];

$cm7[0] = $c71/$tahp[0];   
$cm7[1] = $c72/$tahp[1];    
$cm7[2] = $c73/$tahp[2];    
$cm7[3] = $c74/$tahp[3];    
$cm7[4] = $c75/$tahp[4];    
$cm7[5] = $c76/$tahp[5];    
$cm7[6] = $c77/$tahp[6];    
$cm7[7] = $c78/$tahp[7];  

$cm8[0] = $c81/$tahp[0];   
$cm8[1] = $c82/$tahp[1];    
$cm8[2] = $c83/$tahp[2];    
$cm8[3] = $c84/$tahp[3];    
$cm8[4] = $c85/$tahp[4];    
$cm8[5] = $c86/$tahp[5];    
$cm8[6] = $c87/$tahp[6];    
$cm8[7] = $c88/$tahp[7];    

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


if ($cr < 0.1) {
    $sql=mysqli_query($dbh,"UPDATE ahp set 
     c11='$c11', c12 = '$c12', c13 = '$c13', c14 = '$c14', c15 = '$c15',c16 = '$c16',c17 = '$c17',c18 = '$c18',
     c21 = '$c21', c22 = '$c22', c23 = '$c23', c24 = '$c24',c25 = '$c25',c26 = '$c26',c27 = '$c27',c28 = '$c28', 
     c31 = '$c31', c32 = '$c32', c33 = '$c33', c34 = '$c34',c35 = '$c35',c36 = '$c36',c37 = '$c37',c38 = '$c38',         
     c41 = '$c41', c42 = '$c42', c43 = '$c43', c44 = '$c44',c45 = '$c45',c46 = '$c46',c47 = '$c47',c48 = '$c48',         
     c51 = '$c51', c52 = '$c52', c53 = '$c53', c54 = '$c54',c55 = '$c55',c56 = '$c56',c57 = '$c57',c58 = '$c58',   
     c61 = '$c61', c62 = '$c62', c63 = '$c63', c64 = '$c64',c65 = '$c65',c66 = '$c66',c67 = '$c67',c68 = '$c68',
     c71 = '$c71', c72 = '$c72', c73 = '$c73', c74 = '$c74',c75 = '$c75',c76 = '$c76',c77 = '$c77',c78 = '$c78',
     c81 = '$c81', c82 = '$c82', c83 = '$c83', c84 = '$c84',c85 = '$c85',c86 = '$c86',c87 = '$c87',c88 = '$c88'
     WHERE id_ahp = '$id'");

    $sql=mysqli_query($dbh,"UPDATE kriteria set 
     bobot_kriteria = '$eigen[0]'
     WHERE id_kriteria = '1'");

    $sql=mysqli_query($dbh,"UPDATE kriteria set 
     bobot_kriteria = '$eigen[1]'
     WHERE id_kriteria = '2'");

    $sql=mysqli_query($dbh,"UPDATE kriteria set 
     bobot_kriteria = '$eigen[2]'
     WHERE id_kriteria = '3'");


    $sql=mysqli_query($dbh,"UPDATE kriteria set 
     bobot_kriteria = '$eigen[3]'
     WHERE id_kriteria = '4'");

    $sql=mysqli_query($dbh,"UPDATE kriteria set 
         bobot_kriteria = '$eigen[4]'
         WHERE id_kriteria = '5'");
    $sql=mysqli_query($dbh,"UPDATE kriteria set 
         bobot_kriteria = '$eigen[5]'
         WHERE id_kriteria = '6'");
    $sql=mysqli_query($dbh,"UPDATE kriteria set 
         bobot_kriteria = '$eigen[6]'
         WHERE id_kriteria = '7'");
    $sql=mysqli_query($dbh,"UPDATE kriteria set 
         bobot_kriteria = '$eigen[7]'
         WHERE id_kriteria = '8'");



    echo "<script>alert('Bobot berhasil Diubah');document.location='data-kriteria.php' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Bobot gagal diubah karena CR lebih besar dari 0.1');document.location='perbandingan_kriteria.php?hitung=$id' </script> ";
}

 ?>
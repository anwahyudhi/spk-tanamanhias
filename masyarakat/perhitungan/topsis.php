<div>
        <h3>Perhitungan Alternatif</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Tanaman</th>
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
            $i = 1;
            $sql = "SELECT * FROM tanaman";
            foreach ($dbh->query($sql) as $data) :
            ?>
            
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $data['nama_tanaman'] ?></td>

              <td><?php echo $data['tinggi_tanaman'] ?></td>
              <td><?php 
                if ($data['tinggi_tanaman'] == "> 31 cm") {
                  $normalc1 = 
                }

               ?></td>
              <td><?php echo $data['pencahayaan'] ?></td>
              <td><?php echo $data['daya_tahan'] ?></td>
              <td><?php echo $data['kelembapan'] ?></td>
              <td><?php echo $data['media_tanam'] ?></td>
              <td><?php echo $data['warna'] ?></td>
              <td><?php echo $data['harga'] ?></td>
              <td><?php echo $data['perawatan'] ?></td>
            </tr>
          <?php 
            $i++;
          endforeach;
             ?>
          </tbody>
        </table>
      </div>

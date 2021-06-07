<?php require('header.php'); ?>

<h3>Tabel Mobil</h3>
      <table>
         <thead>
            <tr>
               <th>ID Mobil</th>
               <th>No Plat</th>
               <th>Jenis</th>
               <th>Merek</th>
               <th>Tahun</th>
               <th>Warna</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM mobil';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
               <td><?php echo $row[3] ?></td>
               <td><?php echo $row[4] ?></td>
               <td><?php echo $row[5] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>

<?php require('footer.php'); ?>
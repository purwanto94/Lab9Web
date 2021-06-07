<?php require('header.php'); ?>
      <h3>Tabel Customer</h3>
      <table>
         <thead>
            <tr>
               <th>ID Pelnggan</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>No HP</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM pelanggan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_pelanggan'] ?></td>
               <td><?php echo $row['nama_pelanggan'] ?></td>
               <td><?php echo $row['alamat'] ?></td>
               <td><?php echo $row['no_hp'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>

<?php require('footer.php'); ?>
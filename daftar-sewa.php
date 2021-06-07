<?php require('header.php'); ?>

<h3>Tabel Sewa</h3>
      <table>
         <thead>
            <tr>
               <th>ID Sewa</th>
               <th>Petugas</th>
               <th>Pelanggan</th>
               <th>Mobil</th>
               <th>Tanggal Pinjam</th>
               <th>Tanggal Kembali</th>
               <th>Total Bayar</th>
            </tr>
         </thead>
         <?php
            $sql = "SELECT * FROM sewa
            INNER JOIN petugas ON sewa.id_petugas = petugas.id_petugas
            INNER JOIN pelanggan ON sewa.id_pelanggan = pelanggan.id_pelanggan
            INNER JOIN mobil ON sewa.id_mobil = mobil.id_mobil";
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_sewa'] ?></td>
               <td><?php echo $row['nama_petugas'] ?></td>
               <td><?php echo $row['nama_pelanggan'] ?></td>
               <td><?php echo $row['merk'] ?></td>
               <td><?php echo $row['tgl_pinjam'] ?></td>
               <td><?php echo $row['tgl_kembali'] ?></td>
               <td><?php echo $row['total_bayar'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>

<?php require('footer.php'); ?>
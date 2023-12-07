<h2>Kelas</h2>

<a href="<?php echo URL; ?>/kelas/input" class="btn">Input Kelas</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>WARNA</th>
            <th>JUMLAH</th>
            <th>ANGKATAN</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama_kelas']; ?></td>
                  <td><?php echo $row['warna_kelas']; ?></td>
                  <td><?php echo $row['jumlah_kelas']; ?></td>
                  <td><?php echo $row['angkatan_kelas']; ?></td>
                  <td><a href="<?php echo URL; ?>/kelas/edit/<?php echo $row['id_kelas']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/kelas/delete/<?php echo $row['id_kelas']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>

            </tr>
      <?php $no++;
      } ?>

</table>
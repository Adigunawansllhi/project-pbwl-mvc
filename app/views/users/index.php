<h2>Users</h2>

<a href="<?php echo URL; ?>/users/input" class="btn" style="background-color:#eebbc3;"><i class="fas fa-plus-circle"></i> Input Golongan</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>EMAIL</th>
                  <th>NAMA</th>
                  <th>ALAMAT</th>
                  <th>NO HP</th>
                  <th>POS</th>
                  <th>ROLE</th>
                  <th>AKTIF</th>
                  <th>AKSI</th>
            </tr>
      </thead>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['user_email']; ?></td>
                  <td><?php echo $row['user_name']; ?></td>
                  <td><?php echo $row['user_alamat']; ?></td>
                  <td><?php echo $row['user_hp']; ?></td>
                  <td><?php echo $row['user_pos']; ?></td>
                  <td><?php echo $row['user_role']; ?></td>
                  <td><?php echo $row['user_aktif']; ?></td>
                  <td class="d-flex gap-2">
                        <a href="<?php echo URL; ?>/users/edit/<?php echo $row['user_id']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo URL; ?>/users/delete/<?php echo $row['user_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></a>
                  </td>
            </tr>
      <?php $no++;
      } ?>

</table>
<h2 class="mt-3"><i class="fas fa-users"></i> Pelanggan</h2>

<a href="<?php echo URL; ?>/posts/input" class="btn mt-3" style="background-color:#eebbc3;"><i class="fas fa-plus-circle"></i> Input Pelangan</a>
<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th style="width : 100px;">GOLONGAN</th>
                  <th>NAMA</th>
                  <th>NO PELANGGAN</th>
                  <th>ALAMAT</th>
                  <th>NO HP</th>
                  <th>NO KTP</th>
                  <th>SERI</th>
                  <th>METERAN</th>
                  <th>STATUS AKTIF</th>
                  <th>USER</th>
                  <th style="width : 90px;">AKSI</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['gol_name']; ?></td>
                        <td><?php echo $row['pel_name']; ?></td>
                        <td><?php echo $row['pel_no']; ?></td>
                        <td><?php echo $row['pel_alamat']; ?></td>
                        <td><?php echo $row['pel_hp']; ?></td>
                        <td><?php echo $row['pel_ktp']; ?></td>
                        <td><?php echo $row['pel_seri']; ?></td>
                        <td><?php echo $row['pel_meteran']; ?></td>
                        <td><?php echo $row['pel_aktif']; ?></td>
                        <td><?php echo $row['user_name']; ?></td>
                        <td class="d-flex gap-2">
                              <a href="<?php echo URL; ?>/posts/edit/<?php echo $row['pel_id']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                              <a href="<?php echo URL; ?>/posts/delete/<?php echo $row['pel_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></a>
                        </td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>
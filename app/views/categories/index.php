<h2 class="mb-3"> <i class="fas fa-list"></i> Golongan</h2>

<a href="<?php echo URL; ?>/categories/input" class="btn" style="background-color:#eebbc3;"><i class="fas fa-plus-circle"></i> Input Golongan</a>

<table id="dtb">
      <thead>
            <tr>
                  <th style="width : 50px;">NO</th>
                  <th>KODE</th>
                  <th>NAME</th>
                  <th style="width : 80px;">AKSI</th>
            </tr>
      </thead>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['gol_kode']; ?></td>
                  <td><?php echo $row['gol_name']; ?></td>
                  <td>
                        <a href="<?php echo URL; ?>/categories/edit/<?php echo $row['gol_id']; ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo URL; ?>/categories/delete/<?php echo $row['gol_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></a>
                  </td>
            </tr>
      <?php $no++;
      } ?>

</table>
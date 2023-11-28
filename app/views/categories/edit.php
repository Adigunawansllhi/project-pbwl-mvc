<div class="card col-10 m-3">
    <div class="card-header">
        <h5>Input Golongan</h5>
        <form action="<?php echo URL; ?>/categories/update" method="post" class="mt-3" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?php echo isset($data['row']['gol_id']) ? $data['row']['gol_id'] : ''; ?>">


            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Kode Golongan</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kode Golongan" name="gol_kode" value="<?php echo $data['row']['gol_kode']; ?>">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nama Golongan</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Golongan" name="gol_name" value="<?php echo $data['row']['gol_name']; ?>">
            </div>
            <button class="btn m-3" style="background-color: #eebbc3; color: #121629;" type="submit" name="btn_update">Submit</button>
        </form>
    </div>
</div>






<!-- <h2>Edit Golongan</h2>

<form action="<?php echo URL; ?>/categories/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['gol_id']; ?>">
    <table>
    <tr>
            <td>KODE</td>
            <td><input type="text" name="gol_kode" value="<?php echo $data['row']['gol_kode']; ?>" required></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="gol_name" value="<?php echo $data['row']['gol_name']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> -->
<div class="card col-10 m-3">
    <div class="card-header">
        <h5>Input Golongan</h5>
        <form action="<?php echo URL; ?>/categories/save" method="post" class="mt-3">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Kode Golongan</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Kode Golongan" name="gol_kode">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nama Golongan</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Golongan" name="gol_name">
            </div>
            <button class="btn m-3" style="background-color : #eebbc3; color : #121629" type="submit" name="btn_save">Submit</button>
        </form>
    </div>
</div>
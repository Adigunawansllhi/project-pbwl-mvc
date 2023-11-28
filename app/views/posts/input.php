<div class="card p-3" style="background-color : #f8f8f8">
    <div class="card-header">
        <h5>Input Pelanggan</h5>
    </div>
    <form action="<?php echo URL; ?>/posts/save" method="post" class="row g-3 mt-3 mb-3">
        <div class="col-md-6">
            <label for="inputState" class="form-label">Golongan</label>
            <select id="inputState" class="form-select" name="gol_id">
                <option selected>Pilih Golongan</option>
                <?php foreach ($data['optcat'] as $opt) { ?>
                    <option value="<?php echo $opt['gol_id']; ?>"><?php echo $opt['gol_name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">No Pelanggan</label>
            <input type="text" class="form-control" id="inputPassword4" name="pel_no">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Nama Pelanggan" name="pel_name">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Alamat" name="pel_alamat">
        </div>
        <div class="col-md-4">
            <label for="inputCity" class="form-label">No Hp</label>
            <input type="text" class="form-control" id="inputCity" placeholder="No Hp" name="pel_hp">
        </div>
        <div class="col-md-4">
            <label for="inputCity" class="form-label">No KTP</label>
            <input type="text" class="form-control" id="inputCity" placeholder="No KTP" name="pel_ktp">
        </div>
        <div class="col-md-4">
            <label for="inputZip" class="form-label">No Seri</label>
            <input type="text" class="form-control" placeholder="No Seri" name="pel_seri">
        </div>
        <div class="col-md-4">
            <label for="inputCity" class="form-label">No Meteran</label>
            <input type="text" class="form-control" id="inputCity" placeholder="No Meteran" name="pel_meteran">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Pilih status</label>
            <select id="inputState" class="form-select" name="pel_aktif">
                <option value="" selected>Pilih Status</option>
                <option value="Y">Ya</option>
                <option value="N">Tidak</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">User</label>
            <select id="inputState" class="form-select" name="user_id">
                <option selected>Pilih User</option>
                <?php foreach ($data['optuser'] as $opt) { ?>
                    <option value="<?php echo $opt['user_id']; ?>"><?php echo $opt['user_name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-12 mt-3">
            <button class="btn" style="background-color: #eebbc3; color: #121629" type="submit" name="btn_save">Submit</button>
        </div>
    </form>
</div>

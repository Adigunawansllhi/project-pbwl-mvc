<div class="card p-3">
    <div class="card-header">
        <h5>Input Pelanggan</h5>
    </div>
    <form class="row g-3 mt-3 mb-3">
        <div class="col-md-6">
            <label for="inputState" class="form-label">Golongan</label>
            <select id="inputState" class="form-select">
                <option selected>Pilih Golongan</option>\
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
                <option selected>Pilih Status</option>
                <option>Ya</option>
                <option>Tidak</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Golongan</label>
            <select id="inputState" class="form-select" name="gol_id">
                <option selected>Pilih User</option>
                <?php foreach ($data['optUser'] as $opt) { ?>
                    <option value="<?php echo $opt['user_id']; ?>"><?php echo $opt['user_name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <button class="btn m-3" style="background-color : #eebbc3; color : #121629" type="submit" name="btn_save">Submit</button>
    </form>
</div>





<!-- <h2>Input Post</h2>

<form action="<?php echo URL; ?>/posts/save" method="post">
    <table>
        <tr>
            <td>GOLONGAN</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['optcat'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>"><?php echo $opt['gol_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_name" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td>
                <textarea name="pel_alamat" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
        <td>NO HP</td>
            <td><input type="text" name="pel_hp" required></td>
        </tr>
        <tr>
            <td>NO KTP</td>
            <td><input type="text" name="pel_ktp" required></td>
        </tr>
        <tr>
            <td>SERI</td>
            <td><input type="text" name="pel_seri" required></td>
        </tr>
        <tr>
            <td>METERAN</td>
            <td><input type="text" name="pel_meteran" required></td>
        </tr>
        <tr>
            <td>STATUS AKTIF</td>
            <td>
                <select name="pel_aktif">
                        <option value="Y">YA</option>
                        <option value="N">TIDAK</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form> -->
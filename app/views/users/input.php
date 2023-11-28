<div class="card m-3">
    <div class="card-header p-3">
        <h5>Input Users</h5>
    </div>
    <form action="<?php echo URL; ?>/users/save" method="post" class="row g-3 mt-3 mb-3 p-3">
        <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="inputPassword4" name="email">
        </div>
        <div class="col-md-6">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="col-12">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" placeholder="Alamat" name="name">
        </div>
        <div class="col-12">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat">
        </div>
        <div class="col-md-3">
            <label class="form-label">No Hp</label>
            <input type="text" class="form-control" placeholder="No Hp" name="hp">
        </div>
        <div class="col-md-3">
            <label class="form-label">Pos</label>
            <input type="text" class="form-control" placeholder="Pos" name="pos">
        </div>
        <div class="col-md-3">
            <label class="form-label">Role</label>
            <input type="text" class="form-control" placeholder="Role" name="role">
        </div>
        <div class="col-md-3">
            <label class="form-label">Aktif</label>
            <input type="text" class="form-control" placeholder="Status" name="aktif">
        </div>
        <button class="btn m-3" style="background-color : #eebbc3; color : #121629" type="submit" name="btn_save">Submit</button>

    </form>
</div>






<!-- <h2>Input User</h2>

<form action="<?php echo URL; ?>/users/save" method="post">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="hp" required></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input type="text" name="pos" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form> -->
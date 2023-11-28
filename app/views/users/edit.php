<div class="card m-3">
    <div class="card-header p-3">
        <h5>Edit Users</h5>
    </div>
    <form action="<?php echo URL; ?>/users/update" method="post" class="row g-3 mt-3 mb-3 p-3">
        <input type="hidden" name="id" value="<?php echo $data['row']['user_id']; ?>">
        <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="inputPassword4" name="email" value="<?php echo $data['row']['user_email']; ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $data['row']['user_password']; ?>">
        </div>
        <div class="col-12">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" value="<?php echo $data['row']['user_name']; ?>" name="name">
        </div>
        <div class="col-12">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" value="<?php echo $data['row']['user_alamat']; ?>" name="alamat">
        </div>
        <div class="col-md-3">
            <label class="form-label">No Hp</label>
            <input type="text" class="form-control" value="<?php echo $data['row']['user_hp']; ?>" name="hp">
        </div>
        <div class="col-md-3">
            <label class="form-label">Pos</label>
            <input type="text" class="form-control" value="<?php echo $data['row']['user_pos']; ?>" name="pos">
        </div>
        <div class="col-md-3">
            <label class="form-label">Role</label>
            <input type="text" class="form-control" value="<?php echo $data['row']['user_role']; ?>" name="role">
        </div>
        <div class="col-md-3">
            <label class="form-label">Aktif</label>
            <input type="text" class="form-control" value="<?php echo $data['row']['user_aktif']; ?>" name="aktif">
        </div>
        <button class="btn m-3" style="background-color : #eebbc3; color : #121629" type="submit" name="btn_update">Submit</button>

    </form>
</div>


<!-- <h2>Edit User</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['user_id']; ?>">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" value="<?php echo $data['row']['user_email']; ?>" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="name" value="<?php echo $data['row']['user_name']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['user_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="hp" value="<?php echo $data['row']['user_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input type="text" name="pos" value="<?php echo $data['row']['user_pos']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> -->
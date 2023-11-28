<div class="card m-3" style="background-color : #f8f8f8">
    <div class="card-header p-3">
        <h5>Input Users</h5>
    </div>
    <form action="<?php echo URL; ?>/users/save" method="post" class="row g-3 mt-2 mb-3 p-3">
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
        <div class="col-12 mt-3">
            <button class="btn" style="background-color: #eebbc3; color: #121629" type="submit" name="btn_save">Submit</button>
        </div>
    </form>
</div>
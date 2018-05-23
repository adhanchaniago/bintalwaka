<!-- button tambah -->
<div class"row">
    <p>
        <button type="button" class="btn btn-primary" id="btntambah" data-toggle="modal" data-target="#tambah-user" id="btntambahuser"><i class="fa fa-plus"></i> Tambah</button>
    </p>
</div>

<!-- Tabel User-->
<table width="100%" class="table table-striped table-bordered table-hover" id="tabel-user">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<!-- Modal Tambah -->
<div class="modal fade" id="tambah-user" tabindex="-1" role="dialog" aria-labelledby="tambah-user" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('c_user/create') ?>" method="post">
        <div class="modal-body">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="edit-user" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('c_user/update'); ?>" method="post">
        <div class="modal-body">
            <div class="form-group">
                <input type="hidden" name="id-user-edit" class="form-control">
                <label>Username</label>
                <input type="text" name="user-edit" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass-edit" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
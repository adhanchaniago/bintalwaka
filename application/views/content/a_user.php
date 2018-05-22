<!-- button tambah -->
<div class"row">
    <p>
        <button type="button" class="btn btn-primary" id="btntambah"><i class="fa fa-plus"></i> Tambah</button>
    </p>
</div>
<!-- MODAL Start -->
<div class="modal fade" id="modal-user">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Title</h3>
            </div>
                <!-- Modal body -->
                <!-- Form tambah -->
                <form role="form" action="#" method="post" id="form-tambah">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="usr" class="form-control txtusername" data-validation="length required alphanumeric" data-validation-length="min4">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="pwd" class="form-control txtpass" data-validation="required" data-validation-length="min4">
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <select name="level" class="form-control txtlevel">
                                        <option value="Guest">Guest</option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="Dekan">Dekan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control txtstatus">
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btnsimpan">Simpan</button>
                </div>
                </form>
                <!-- Form edit -->
                <form role="form" action="#" method="post" id="form-edit" style="display: none;">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control txtusername" disabled>
                                    <input type="hidden" name="edit-usr" class="form-control txtusername" >
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="edit-pwd" class="form-control txtpass" data-validation="length required" data-validation-length="min4">
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <select name="edit-level" class="form-control txtlevel">
                                        <option value="Guest">Guest</option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="Dekan">Dekan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="edit-status" class="form-control txtstatus">
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btnsimpan">Simpan</button>
                </div>
                </form>
        </div>
    </div>
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
<!-- ISI KONTEN MULAI DARI BAWAH SINI -->
<!-- /.panel-heading -->
<div class="row" >
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a data-toggle="tab" href="#bintalwaka" class="nav-link active">Bintalwaka <i class="fa fa-university"></i></a></li>
            <li class="nav-item"><a data-toggle="tab" href="#kelompok" class="nav-link">Kelompok <i class="fa fa-users"></i></a></li>
        </ul>
        <!-- /.nav-tabs -->
        <div class="tab-content" style="margin-top: 8px;">
            <!-- Bintalwaka -->
            <div id="bintalwaka" class="tab-pane fade show active">
                <div class"row">
                    <p>
                        <button type="button" class="btn btn-primary tambah-bintalwaka" style="margin-top:15px" data-toggle="modal" data-target="#tambah-bintalwaka" id="btntambahbintalwaka"><i class="fa fa-plus"></i> Tambah</button>
                    </p>
                </div>
                <!-- Tabel Bintalwaka -->
                <table width="100%" class="table table-striped table-bordered table-hover" id="tabel-bintalwaka">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Tanggal</th>
                            <th>Lokasi</th>
                            <th>Tema</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
            <!-- Kelompok -->
            <div id="kelompok" class="tab-pane fade">
                <!-- button tambah -->
                <div class"row">
                    <p>
                        <button type="button" class="btn btn-primary tambah-kelompok" style="margin-top:15px" data-toggle="modal" data-target="#tambah-kelompok" id="btntambahkelompok"><i class="fa fa-plus"></i> Tambah</button>
                    </p>
                </div>
                <table width="100%" class="table table-striped table-bordered table-hover" id="tabel-kelompok">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kelompok</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
        </div>
        <!-- /.tab-content -->
    </div>
</div>

<!-- Modal Tambah Kelompok -->
<div class="modal fade" id="tambah-kelompok" tabindex="-1" role="dialog" aria-labelledby="tambah-kelompok" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kelompok</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('c_kelompok/create') ?>" method="post">
        <div class="modal-body">
            <div class="form-group">
                <label>Nama Kelompok</label>
                <input type="text" name="kelompok" class="form-control" required>
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

<!-- Modal Edit Kelompok -->
<div class="modal fade" id="edit-kelompok" tabindex="-1" role="dialog" aria-labelledby="edit-kelompok" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Kelompok</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('c_kelompok/update'); ?>" method="post">
        <div class="modal-body">
            <div class="form-group">
                <label>Nama Kelompok</label>
                <input type="text" name="kelompok-edit" class="form-control" required>
                <input type="hidden" name="id-kelompok-edit" class="form-control">
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

<!-- Modal Tambah Bintalwaka-->
<div class="modal fade" id="tambah-bintalwaka" tabindex="-1" role="dialog" aria-labelledby="tambah-bintalwaka" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Bintalwaka</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('c_bintalwaka/create') ?>" method="post">
        <div class="modal-body">
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input class="form-control" type="date" name="tanggal" id="tanggal" required>
                <input type="hidden" name="tahun" value="<?php echo date("Y")?>" required>
            </div>
            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Tema</label>
                <input type="text" name="tema" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit Bintalwaka-->
<div class="modal fade" id="edit-bintalwaka" tabindex="-1" role="dialog" aria-labelledby="edit-bintalwaka" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('c_bintalwaka/update'); ?>" method="post">
        <div class="modal-body">
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input class="form-control" type="date" name="tanggal" id="tanggal" required>
                <input type="hidden" name="tahun" id="tahun">
            </div>
            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Tema</label>
                <input type="text" name="tema" class="form-control" required>
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


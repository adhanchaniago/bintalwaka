<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#absensi"><i class="fa fa-fw fa-list"></i> Absensi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#idcard"><i class="fa fa-fw fa-id-card"></i> ID Card</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#sertifikat"><i class="fa fa-fw fa-certificate"></i> Sertifikat</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <!-- Absensi -->
  <div id="absensi" class="container tab-pane active"><br>
    <div class="row mb-3">
      <!-- Kelompok -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header bg-secondary text-white">Tiap Kelompok</div>
          <div class="card-body">
            <form action="<?php echo base_url('c_cetak/idcard')?>" target="blank" method="post" id="cetak-id">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label>Tahun :</label>
                    <select class="form-control">
                      <option value="">- Semua -</option>
                      <option>Fakultas Hukum</option>
                      <option>Fakultas Teknik</option>
                      <option>Fakultas Ekonomi dan Bisnis</option>
                      <option>Fakultas Teknologi Informasi</option>
                      <option>Fakultas Ilmu Sosial dan Politik</option>
                      <option>Fakultas Psikologi</option>
                      <option>Fakultas Pariwisata</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label>Kelompok :</label>
                    <select class="form-control">
                      <option value="">- Semua -</option>
                      <option>Fakultas Hukum</option>
                      <option>Fakultas Teknik</option>
                      <option>Fakultas Ekonomi dan Bisnis</option>
                      <option>Fakultas Teknologi Informasi</option>
                      <option>Fakultas Ilmu Sosial dan Politik</option>
                      <option>Fakultas Psikologi</option>
                      <option>Fakultas Pariwisata</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <button type="submit" class="btn btn-success btn-block" >Cetak</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Fakultas -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header bg-secondary text-white">Tiap Fakultas</div>
          <div class="card-body">
            <form action="<?php echo base_url('c_cetak/idcard')?>" target="blank" method="post" id="cetak-id">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label>Tahun :</label>
                    <select class="form-control">
                      <option value="">- Semua -</option>
                      <option>Fakultas Hukum</option>
                      <option>Fakultas Teknik</option>
                      <option>Fakultas Ekonomi dan Bisnis</option>
                      <option>Fakultas Teknologi Informasi</option>
                      <option>Fakultas Ilmu Sosial dan Politik</option>
                      <option>Fakultas Psikologi</option>
                      <option>Fakultas Pariwisata</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label>Fakultas :</label>
                    <select class="form-control">
                      <option value="">- Semua -</option>
                      <option>Fakultas Hukum</option>
                      <option>Fakultas Teknik</option>
                      <option>Fakultas Ekonomi dan Bisnis</option>
                      <option>Fakultas Teknologi Informasi</option>
                      <option>Fakultas Ilmu Sosial dan Politik</option>
                      <option>Fakultas Psikologi</option>
                      <option>Fakultas Pariwisata</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <button type="submit" class="btn btn-success btn-block" >Cetak</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <!-- Semua -->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header bg-secondary text-white">Cetak Semua</div>
          <div class="card-body">
            <form action="<?php echo base_url('c_cetak/idcard')?>" target="blank" method="post" id="cetak-id">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label>Tahun :</label>
                    <select class="form-control">
                      <option>Fakultas Hukum</option>
                      <option>Fakultas Teknik</option>
                      <option>Fakultas Ekonomi dan Bisnis</option>
                      <option>Fakultas Teknologi Informasi</option>
                      <option>Fakultas Ilmu Sosial dan Politik</option>
                      <option>Fakultas Psikologi</option>
                      <option>Fakultas Pariwisata</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <button type="submit" class="btn btn-success btn-block" >Cetak</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ID Card -->
  <div id="idcard" class="container tab-pane fade"><br>
    <div class="row mb-3">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header bg-secondary text-white"><i class="fa fa-fw fa-id-card"></i><strong> ID Card</strong></div>
          <div class="card-body">
            <form action="<?php echo base_url('c_cetak/idcard')?>" target="blank" method="post" id="cetak-id">
              <div class="row">
                <div class="col-lg-9">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" id="id-card" name="nim" required>
                  </div>
                </div>
                <div class="col-lg-3">
                  <button type="submit" class="btn btn-success btn-block" >Cetak</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Sertifikat -->
  <div id="sertifikat" class="container tab-pane fade"><br>
    <div class="row mb-3">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header bg-secondary text-white"><i class="fa fa-fw fa-certificate"></i><strong> Sertifikat</strong></div>
          <div class="card-body">
            <form action="<?php echo base_url('c_cetak/sertifikat')?>" target="blank" method="post" id="cetak-sertifikat">
              <div class="row">
                <div class="col-lg-9">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" id="sertifikat" name="nim" required>
                  </div>
                </div>
                <div class="col-lg-3">
                  <button type="submit" class="btn btn-success btn-block" >Cetak</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






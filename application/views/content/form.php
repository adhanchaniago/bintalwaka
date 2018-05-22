    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-12">

          <h3 class="my-4"><b>Form Pendaftaran</b></h3>
          <hr>
          <form method="post" action="" id="form-pendaftaran">
            <div class="row">
              <div class="col-lg-8">

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Nomor Induk Mahasiswa (NIM)</label>
                        <input type="text" name="nim" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Upload Foto</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01"><i>Pilih Foto</i></label>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nl" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Nama Panggilan</label>
                        <input type="text" name="np" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" value="laki">
                            <label class="form-check-label">Laki</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" value="perempuan">
                            <label class="form-check-label">Perempuan</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="example-date-input">Tanggal Lahir</label>
                      <input class="form-control" type="date" name="tgl" id="example-date-input">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Fakultas</label>
                        <select class="form-control" name="fakultas" id="fakultas">
                            <option>--</option>  
                        <?php foreach ($fakultas as $fak) { ?>
                            <option value="<?php echo $fak->id_fakultas;?>"><?php echo $fak->nama_fakultas;?></option>
                          <?php } ?>
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                        </select>
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Hobi</label>
                        <input type="text" name="hobi" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>No. HP</label>
                        <input type="text" name="no-hp" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                </div>
               <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <label>Riwayat Pendidikan (SD, SMP dan SMA)</label>                        
                        <textarea name="riwayat-pendidikan" class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                </div>
               <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <label>Prestasi</label>                        
                        <textarea name="prestasi" class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <label>Motivasi Mengikuti BINTALWAKA</label>                        
                        <textarea name="motivasi" class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="row">
                  <div class="col-lg-6">
                    <button type="submit" class="btn btn-success btn-block">Daftar</button>
                  </div>
                  <div class="col-lg-6">
                    <button type="reset" class="btn btn-primary btn-block">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
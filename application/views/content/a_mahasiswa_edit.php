    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <?php foreach ($mahasiswa as $mhs) { ?>
          
          <h3 class="my-4"><b>Update Data Mahasiswa</b></h3>
          <hr>
          <form enctype="multipart/form-data" method="post" action="<?php echo base_url('c_mahasiswa/update')?>" id="form-pendaftaran">
          <div class="row">
            <div class="col-lg-4">
                <div class="form-check">
                    <input class="form-check-input" type="hidden" name="biaya" id="cek-biaya-hidden" value="belum">
                    <input class="form-check-input" type="checkbox" name="biaya" id="cek-biaya" value="lunas" <?php if ($mhs->biaya=='lunas') echo "checked=checked"; ?>>
                    <label class="form-check-label" for="cek-biaya">
                        Biaya Lunas
                    </label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-check">
                    <input class="form-check-input" type="hidden" name="idcard" id="cek-idcard-hidden" value="belum" <?php if ($mhs->idcard=='sudah') echo "checked=checked"; ?>>
                    <input class="form-check-input" type="checkbox" name="idcard" id="cek-idcard" value="sudah" <?php if ($mhs->idcard=='sudah') echo "checked=checked"; ?>>
                    <label class="form-check-label" for="cek-idcard">
                        Cetak ID-Card
                    </label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-check">
                    <input class="form-check-input" type="hidden" name="sertifikat" id="cek-sertifikat-hidden" value="belum" <?php if ($mhs->sertifikat=='sudah') echo "checked=checked"; ?>>
                    <input class="form-check-input" type="checkbox" name="sertifikat" id="cek-sertifikat" value="sudah" <?php if ($mhs->sertifikat=='sudah') echo "checked=checked"; ?>>
                    <label class="form-check-label" for="cek-sertifikat">
                        Cetak Sertifikat
                    </label>
                </div>
            </div>
          </div>
            
            
          <hr>
            <div class="row">
              <div class="col-lg-8">

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Nomor Induk Mahasiswa (NIM)</label>
                        <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>" readonly>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Upload Foto</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" name="foto">
                          <label class="custom-file-label" for="inputGroupFile01"><i>Pilih Foto</i></label>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nl" class="form-control" value="<?php echo $mhs->nama_lengkap ?>">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Nama Panggilan</label>
                        <input type="text" name="np" class="form-control" value="<?php echo $mhs->nama_panggilan ?>">
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
                            <input class="form-check-input" type="radio" name="jk" value="laki" <?php if ($mhs->jenis_kelamin=='laki') echo "checked=checked"; ?>>
                            <label class="form-check-label">Laki</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" value="perempuan" <?php if ($mhs->jenis_kelamin=='perempuan') echo "checked=checked"; ?>>
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
                        <input type="text" name="tempat" class="form-control" value="<?php echo $mhs->tempat ?>">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="example-date-input">Tanggal Lahir</label>
                      <input class="form-control" type="date" name="tgl" id="example-date-input" value="<?php echo $mhs->tanggal_lahir ?>">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Fakultas</label>
                        <select class="form-control" name="fakultas" id="fakultas">
                            <option ><?php echo $mhs->fakultas;?></option>  
                        </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option value="<?php echo $mhs->id_jurusan;?>"><?php echo $mhs->jurusan;?></option>  
                        </select>
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Hobi</label>
                        <input type="text" name="hobi" class="form-control" value="<?php echo $mhs->hobi ?>">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>No. HP</label>
                        <input type="text" name="no-hp" class="form-control" value="<?php echo $mhs->no_HP ?>">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3"><?php echo $mhs->alamat ?></textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <label>Riwayat Pendidikan (SD, SMP dan SMA)</label>                        
                        <textarea name="riwayat-pendidikan" class="form-control" rows="3"><?php echo $mhs->riwayat_pendidikan ?></textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <label>Prestasi</label>                        
                        <textarea name="prestasi" class="form-control" rows="3"><?php echo $mhs->prestasi ?></textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <label>Motivasi Mengikuti BINTALWAKA</label>                        
                        <textarea name="motivasi" class="form-control" rows="3"><?php echo $mhs->motivasi ?></textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <label>Riwayat Penyakit</label>                        
                        <textarea name="riwayat-penyakit" class="form-control" rows="3"><?php echo $mhs->riwayat_penyakit ?></textarea>
                    </div>
                  </div>
                </div>

              </div>

            </div>

            <div class="row" style="margin-bottom: 15px;">
              <div class="col-lg-8">
                <div class="row">
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-success btn-block">SIMPAN</button>
                  </div>
                </div>
              </div>
            </div>

          </form>
        <?php } ?>
        </div>


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

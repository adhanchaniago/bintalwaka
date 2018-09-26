    <!-- Tabel User-->
    <div class="row">
        <div class="col-lg-12 ">
            <div class="form-group">
                <label>Tahun Bintalwaka :</label>
                <select class="form-control">
                    <option value="">- Semua -</option>
                    <?php foreach ($tahun as $thn) { ?>
                        <option value="<?php echo $thn->tahun; ?>"><?php echo $thn->tahun; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>Fakultas :</label>
                <select class="form-control">
                    <option value="">- Semua -</option>
                    <?php foreach ($fakultas as $fak) { ?>
                        <option value="<?php echo $fak->id_fakultas; ?>"><?php echo $fak->nama_fakultas; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
    <hr/>
    <table width="100%" class="table table-striped table-bordered table-hover" id="tabel-mahasiswa">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>No Hp</th>
                <th>Biaya</th>
                <th>Sertifikat</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>

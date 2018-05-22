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
                <!-- Tabel Bintalwaka -->
                <table width="100%" class="table table-striped table-bordered table-hover" id="tabel-bintalwaka">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIM</th>
                            <th>Nama Kelompok</th>
                            <th>Tanggal</th>
                            <th>Tahun</th>
                            <th>Lokasi</th>
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
                        <button type="button" class="btn btn-primary tambah-kelompok" style="margin-top:15px" id="btntambahkelompok"><i class="fa fa-plus"></i> Tambah</button>
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
                            <tr>
                            <td></td>
                            <td></td>
                            <td style="text-align:center">
                                <button type="button" class="btn btn-primary" onclick="editLantai('')"><i class="fa fa-pencil-square"></i> Edit</button>
                                <button type="button" class="btn btn-danger" onclick="hapusLantai('')"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                            </tr>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
        </div>
        <!-- /.tab-content -->
    </div>
</div>

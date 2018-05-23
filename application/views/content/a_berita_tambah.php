<div class"row">
    <div class="col-lg-10">
        <form enctype="multipart/form-data" action="<?= base_url('c_berita/do_upload')?>" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="tgl" readonly>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="user" value="1" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="judul" placeholder="Judul">
            </div>
            <div class="form-group">
                <textarea name="isi" rows="10" class="form-control" placeholder="Isi Berita"></textarea>
            </div>
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="banner" required>
                    <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= base_url('admin/berita') ?>" class="btn btn-primary">Batal</a>
        </form>
    </div>
</div>

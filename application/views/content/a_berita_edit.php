<div class"row">
    <div class="col-lg-10">
        <form method="post" action="<?= base_url('c_berita/update')?>">
            <?php foreach ($berita as $brt) { ?>
            <input type="text" name="id" value="<?php echo $brt->id_berita; ?>" hidden>
            <input type="text" name="user" value="<?php echo $brt->id_user; ?>" hidden>
            <div class="form-group">
                <input type="text" class="form-control" name="judul" value="<?php echo $brt->judul; ?>" >
            </div>
            <div class="form-group">
                <textarea name="isi" rows="10" class="form-control"><?php echo $brt->isi; ?></textarea>
            </div>
            <!-- <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="banner">
                    <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                </div>
            </div> -->
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= base_url('admin/berita') ?>" class="btn btn-primary">Batal</a>
            <?php } ?>
        </form>
    </div>
</div>

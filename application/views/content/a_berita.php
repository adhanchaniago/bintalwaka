<!-- button tambah -->
<div class"row">
    <p>
        <a href="<?= base_url('admin/berita_tambah')?>" class="btn btn-primary" id="btntambah"><i class="fa fa-plus"></i> Tambah</a>
    </p>
</div>
<!-- Tabel Berita-->
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-user">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Slug</th>
            <th>Tanggal Post</th>
            <th>Penulis</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($berita as $b) { ?>
            <tr>
                <td><?= $b->id_berita?></td>
                <td><?= $b->judul?></td>
                <td><?= $b->slug?></td>
                <td><?= $b->tanggal?></td>
                <td><?= $b->id_user?></td>
                <td class="text-center">
                <a class="btn btn-primary btnedit" href="<?php echo base_url('admin/berita_edit/').$b->id_berita;?>">Edit</a>
                <button type="button" class="btn btn-danger btnhapus" onclick="hapusberita(<?= $b->id_berita?>)">Hapus</button>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>
    <!-- Page Content -->
    <div class="container content">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h2 class="my-4">Selamat Datang
            <!-- <small>Secondary Text</small> -->
          </h2>

          <!-- Blog Post -->
          <?php foreach ($berita as $b) { ?>
            <div class="card mb-4">
              <img class="card-img-top" src="<?= base_url('assets/image/berita/').$b->image;?>" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title"><?= $b->judul; ?></h2>
                <p class="card-text"><?= $b->slug; ?></p>
                <a href="<?php echo base_url('home/berita/'.$b->id_berita)?>" class="btn btn-primary">Read More &rarr;</a>
              </div>
              <div class="card-footer text-muted">
                Posted on <?= $b->tanggal; ?> by
                <a href="#"><?= $b->id_user; ?></a>
              </div>
            </div>
          <?php } ?>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          
          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">About Us</h5>
            <div class="card-body">
              BINTALWAKA<br>
              Bina Iman, Mental, Watak dan Karakter. <br>Kegiatan wajib untuk semua Mahasiswa Katolik Universitas Merdeka Malang. Daftarkan diri anda sekarang disini !<br>
              <br>
              <i class="fas fa-fw fa-map-marker"></i> Sekretariat UKMK St. Ignatius Loyola Unmer Malang<br>
              Jl. Terusan Raya Dieng No. 62-64 Sukun, Malang<br>
              Basement DIII Perbankan<br>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
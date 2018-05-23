<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UKMK St. Ignatius Loyola</title>

    
    
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets')?>/vendor/font-awesome/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets')?>/css/blog-home.css" rel="stylesheet">
    <style>
      html {
        height: 100%;
      }
      body {
        min-height: 100%;
        display: grid;
        grid-template-rows: 1fr auto;
      }
      .footer {
        grid-row-start: 2;
        grid-row-end: 3;
      }
    </style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"> BINTALWAKA UKM Katolik St. Ignatius Loyola UNMER Malang</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url()?>home">Home
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url()?>home/foto">Foto</a>
                <a class="dropdown-item" href="<?= base_url()?>home/video">Video</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('pendaftaran')?>">Pendaftaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('login')?>">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php echo $contents;?>

    
    <!-- Footer -->
    <footer class="py-3 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets')?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets')?>/js/sweetalert2.all.js"></script>
    
    <script>
      $("#hasil-ada").hide();
      $("#hasil-kosong").hide();

      $(document).ready(function () {
        //cek nim
        $("#cek-nim").submit(function (e) { 
          $("#hasil-ada").hide();
          $("#hasil-kosong").hide();

          e.preventDefault();
          $.ajax({
              type : "POST",
              url : "<?php echo base_url('c_mahasiswa/read3');?>",
              cache : false,
              data : $(this).serialize(),
              success : function(response){
                if (response.message === 'berhasil') {
                  var data = response.mhs[0];
                  var nama = data.nama_lengkap;
                  // $("input[name=tahun]").val(data.tahun);
                  swal({
                    type: 'success',
                    title: 'Selamat!',
                    html: '</br><h3><small>"' + nama + '"</small></h3>'+'<br/><p>Kamu telah terdaftar.</p>',
                  })
                } else if (response.message == 'kosong') {
                  swal({
                    type: 'error',
                    title: 'Oops!',
                    html: 'Kamu belum terdaftar',
                    footer: '<a href="<?= base_url("pendaftaran/daftar")?>">Daftar sekarang!</a>',
                    showConfirmButton: false,
                  })
                }
              },
              error : function(){
                  console.log("ERROR : Terjadi kesalahan koneksi");
              }
          });
        });
        //read data jurusan
        $('#fakultas').on('change', function() {
          var id_jur = this.value;
          $.ajax({
            url:'<?php echo base_url('pendaftaran/jurusan')?>',
            type:'POST',
            data: {id: id_jur},
            success: function( json ) {
                $('#jurusan').find('option').remove().end()
                var jurusan = json.berita;
                var jur_length = jurusan.length;
                for (let i = 0; i < jur_length; i++) {
                  var jur = jurusan[i];
                  // console.log(jur.nama_jurusan);
                  $('#jurusan').append($('<option>').text(jur.nama_jurusan).attr('value', jur.id_jurusan));
                }

            }
          });
        })

        $('#form-pendaftaran').submit(function (e) { 
          e.preventDefault();
          
          var formData = new FormData($(this)[0]);

          $.ajax({
            url:'<?php echo base_url('c_mahasiswa/do_upload')?>',
            type:'POST',
            enctype: 'multipart/form-data',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
              if (response.message === 'sukses') {
                swal({
                  type: 'success',
                  title: 'Selamat!',
                  text: 'Kamu berhasil mendaftar.',
                }).then((result) => {
                  if (result.value) {
                    window.location.href = "<?php echo base_url('pendaftaran');?>";
                  }
                })
              } else {
                swal({
                  type: 'error',
                  title: 'Oops!',
                  text: 'Kamu tidak bisa mendaftar.',
                })
              }
            }
          });
        });
      
      });
      
      
    </script>
  </body>

</html>

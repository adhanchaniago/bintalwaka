<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SI Bintalwaka</title>
  <!-- Bootstrap core CSS-->
  <link href="<?= base_url('assets')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets')?>/vendor/font-awesome/css/fontawesome-all.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?= base_url('assets')?>/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets')?>/css/sb-admin.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link href="<?php echo base_url('assets');?>/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url('admin')?>">Sistem Informasi Bintalwaka</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('admin')?>">
            <i class="fa fa-fw fa-tachometer-alt"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Berita">
          <a class="nav-link" href="<?php echo base_url('admin/berita')?>">
            <i class="fa fa-fw fa-newspaper"></i>
            <span class="nav-link-text">Berita</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Peserta">
          <a class="nav-link" href="<?php echo base_url('admin/mahasiswa')?>">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Mahasiswa</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bintalwaka">
          <a class="nav-link" href="<?php echo base_url('admin/bintalwaka')?>">
            <i class="fa fa-fw fa-university"></i>
            <span class="nav-link-text">Bintalwaka</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User">
          <a class="nav-link" href="<?php echo base_url('admin/user')?>">
            <i class="fa fa-fw fa-user-circle"></i>
            <span class="nav-link-text">User</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cetak">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-print"></i>
            <span class="nav-link-text">Cetak</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html"><i class="fa fa-fw fa-certificate"></i> Sertifikat</a>
            </li>
            <li>
              <a href="cards.html"><i class="fa fa-fw fa-id-card"></i> ID Card</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out-alt"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><?php echo ucfirst($this->uri->segment('2'));?></li>
      </ol>
    
      <?php echo $contents; ?>
    
    </div>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url('login');?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets')?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets')?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?= base_url('assets')?>/vendor/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('assets')?>/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets')?>/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets')?>/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?= base_url('assets')?>/js/sb-admin-datatables.min.js"></script>
    <script src="<?= base_url('assets')?>/js/sb-admin-charts.min.js"></script>
    <script src="<?= base_url('assets')?>/js/sweetalert2.all.js"></script>
  </div>
</body>
<script>
  $(document).ready(function () {
    $('input[name=tgl]').val(DateNow());
    $('#tabel-mahasiswa').DataTable({
			  "pageLength" : 10,
        "ajax": {
            url : "<?php echo base_url("c_mahasiswa/read2") ?>",
            type : 'GET'
        },
        'columnDefs': [
          {
            "targets": "_all", // your case first column
            "className": "text-center"
          }
        ]
		});
    $('#tabel-bintalwaka').DataTable({
			  "pageLength" : 10,
        "ajax": {
            url : "<?php echo base_url("c_bintalwaka/read2") ?>",
            type : 'GET'
        },
        'columnDefs': [
                {
                  "targets": "_all", // your case first column
                  "className": "text-center"
                }
        ]
		});
    $('#tabel-kelompok').DataTable({
			  "pageLength" : 10,
        "ajax": {
            url : "<?php echo base_url("c_kelompok/read2") ?>",
            type : 'GET'
        },
        'columnDefs': [
                {
                  "targets": "_all", // your case first column
                  "className": "text-center"
                }
        ]
		});
    $('#tabel-user').DataTable({
			  "pageLength" : 10,
        "ajax": {
            url : "<?php echo base_url("c_user/read2") ?>",
            type : 'GET'
        },
        'columnDefs': [
                {
                  "targets": "_all", // your case first column
                  "className": "text-center"
                }
        ]
		});
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
    
  });

  function DateNow() { 
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10) {
        dd = '0'+dd
    } 
    if(mm<10) {
        mm = '0'+mm
    } 
    today = yyyy + '-' + mm + '-' + dd;
    return today;
  }

  function hapusberita(id_berita) {
    swal({
      title: 'Anda yakin?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url:'<?php echo base_url('c_berita/delete')?>',
          type:'POST',
          data: {id: id_berita},
          success: function(response) {
            if (response.message === 'sukses') {
              swal({
                type: 'success',
                title: 'Terhapus!',
                text: 'Berhasil dihapus.',
              }).then((result) => {
                if (result.value) {
                  window.location.href = "<?php echo base_url('admin/berita');?>";
                }
              })
            } else {
              swal({
                type: 'error',
                title: 'Oops!',
                text: 'Gagal menghapus.',
              })
            }
          }
        });
      }
    })
  }

  function hapusmhs(nim) {
    swal({
      title: 'Anda yakin?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url:'<?php echo base_url('c_mahasiswa/delete')?>',
          type:'POST',
          data: {nim: nim},
          success: function(response) {
            if (response.message === 'sukses') {
              swal({
                type: 'success',
                title: 'Terhapus!',
                text: 'Berhasil dihapus.',
              }).then((result) => {
                if (result.value) {
                  window.location.href = "<?php echo base_url('admin/mahasiswa');?>";
                }
              })
            } else {
              swal({
                type: 'error',
                title: 'Oops!',
                text: 'Gagal menghapus.',
              })
            }
          }
        });
      }
    })
  }
  
  function hapusbintalwaka(id) {
    swal({
      title: 'Anda yakin?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url:'<?php echo base_url('c_bintalwaka/delete')?>',
          type:'POST',
          data: {id: id},
          success: function(response) {
            if (response.message === 'sukses') {
              swal({
                type: 'success',
                title: 'Terhapus!',
                text: 'Berhasil dihapus.',
              }).then((result) => {
                if (result.value) {
                  window.location.href = "<?php echo base_url('admin/mahasiswa');?>";
                }
              })
            } else {
              swal({
                type: 'error',
                title: 'Oops!',
                text: 'Gagal menghapus.',
              })
            }
          }
        });
      }
    })
  }
  
  function hapususer(id) {
    swal({
      title: 'Anda yakin?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url:'<?php echo base_url('c_user/delete')?>',
          type:'POST',
          data: {id: id},
          success: function(response) {
            if (response.message === 'sukses') {
              swal({
                type: 'success',
                title: 'Terhapus!',
                text: 'Berhasil dihapus.',
              }).then((result) => {
                if (result.value) {
                  window.location.href = "<?php echo base_url('admin/user');?>";
                }
              })
            } else {
              swal({
                type: 'error',
                title: 'Oops!',
                text: 'Gagal menghapus.',
              })
            }
          }
        });
      }
    })
  }

  function editmhs(nim) {
    // window.location.href = "<?php echo base_url('admin/mahasiswa_edit/');?>.nim";
    var base_url = "<?php echo base_url('admin/mahasiswa_edit/');?>";
    window.location = base_url + nim;
  }


 </script>
</html>

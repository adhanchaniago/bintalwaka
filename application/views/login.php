<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="<?=base_url('assets')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?=base_url('assets')?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?=base_url('assets')?>/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><b>Login</b></div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('login/aksi_login')?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" type="text" name="username" aria-describedby="emailHelp" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
      </div>
      <div class="card-footer text-center"><a href="<?php echo base_url()?>">Back to home</a></div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('assets')?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('assets')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('assets')?>/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

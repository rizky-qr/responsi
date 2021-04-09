<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMAN 1 HU'U | <?php echo $title ?></title>

  <link rel="icon" href="<?php echo base_url() ?>assets/foto/1_logo.jpg">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>SMAN 1 HU'U</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>

        <?php
        if ($this->session->flashdata('pesan') != '') {
          echo $this->session->flashdata('pesan');
        } ?>

        <!-- perbaiki -->
        <?php
        if ($this->session->flashdata('errors') != '') { ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="fas fa-exclamation-triangle"></i> Alert!</h5>
            <?php echo $this->session->flashdata('errors'); ?>
          </div>
        <?php } ?>


        <form action="<?php echo base_url('auth/login') ?>" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="username" name="username" placeholder="username" value="<?php echo set_value('username'); ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <button type="submit" class="btn btn-sm btn-primary btn-block">Login</button>
            </div>
            <div class="col-6">
              <a href="<?php echo base_url('') ?>" class="btn btn-success btn-sm btn-block">Halaman Utama</a>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });

    }, 3000);
  </script>
</body>

</html>
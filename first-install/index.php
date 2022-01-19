<?php

    // global $wp_manga_template;
    // delete_transient( 'wp_manga_welcome_redirect', false );
include '../config/conn.php';
include 'functions.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>First Install</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo BASE_URL?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo BASE_URL?>/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition lockscreen">


<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="<?php echo BASE_URL?>"><b>Installasi</b>APP</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">Code Perusahaan</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->

    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" action="functions.php" method="POST">
      <div class="input-group">
        <div class="input-group-append">
        <input type="password" class="form-control" placeholder="1.0.3">
          <button type="submit" class="btn" name='go2'>
            <i class="fas fa-arrow-right"></i>
          </button>

        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
  
  </div>
  <div class="text-center">
    <a href="panduan.html">Baca Panduan</a>
  </div>

</div>
<center>!! Pengaturan database tidak ditemukan,Masukkan Kode Perusahaan/Instansi Lalu lanjutkan untuk Masuk Ke menu Setting !!</center>
<!-- /.center -->



<!-- jQuery -->
<script src="<?php echo BASE_URL?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo BASE_URL?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

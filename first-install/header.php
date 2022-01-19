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
    <a href="<?php echo BASE_URL?>"><b>Installasi</b>SIPKU</a>
  </div>
  <!-- User name -->
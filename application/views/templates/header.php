<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta itemprop="image" content="<?= base_url('assets/img/') ?>favicon.ico" />
  <title><?= $title; ?></title>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- icon -->
  <link rel="shortcut icon" href="<?php print base_url(''); ?>/favv.ico" type="image/x-icon">
  <link rel="icon" href="<?php print base_url(''); ?>/favv.ico" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

  <!-- lightbox -->
  <link href="<?php print base_url('lightbox'); ?>/dist/css/lightbox.css" rel="stylesheet">

  <!-- Data table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

  <style type="text/css">
    #map-canvas {
      height: 100%;
    }
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    
    .my-custom-scrollbar {
      position: relative;
      /*height: 350px;*/
      overflow: auto;
    }
    .table-wrapper-scroll-y {
      display: inline-flex;
    }
  </style>

</head>
<body id="page-top">
  <div id="wrapper">
    
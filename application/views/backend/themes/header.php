<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title; ?> - Desa Jayi</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/'); ?>css/simple-sidebar.css" rel="stylesheet">

  <!-- Custom Style -->
  <link href="<?= base_url('assets/'); ?>css/custom.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-warning text-white border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-uppercase font-weight-bold">
        ADMIN Desa Jayi
      </div>
      <div class="list-group list-group-flush">
        <a href="<?= base_url('admin') ?>" class="list-group-item list-group-item-action bg-transparent text-white"><i class="fas fa-fw fa-tachometer-alt mr-2"></i> Dashboard</a>
        <a href="<?= base_url() ?>" class="list-group-item list-group-item-action bg-transparent text-white"><i class="fas fa-fw fa-paper-plane mr-2"></i> Postingan</a>
        <a href="<?= base_url() ?>" class="list-group-item list-group-item-action bg-transparent text-white"><i class="fas fa-fw fa-folder mr-2"></i> Data Penduduk</a>
        <a href="<?= base_url() ?>" class="list-group-item list-group-item-action bg-transparent text-white"><i class="fas fa-fw fa-sign-out-alt mr-2"></i> Logout</a>
      </div>
    </div> 
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <!-- Topbar  -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-warning border-bottom">
        <button class="btn btn-light" id="menu-toggle"><i class="fas fa-fw fa-bars"></i></button>
        <div class="navbar-nav ml-auto">
            <a href="" class="nav-link nav-item active">Administrator</a>
        </div>
      </nav>
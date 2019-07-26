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

  <!-- Custom Style -->
  <link href="<?= base_url('assets/'); ?>css/custom.css" rel="stylesheet">

</head>

<body style="background:rgba(0,0,0,0.1);">

<div class="container pt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5 mt-2">
            <div class="card card-login shadow">
                <div class="card-header bg-warning text-center text-white">
                    <h2>Login Admin</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-warning text-white btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>

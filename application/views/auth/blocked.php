<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Halaman Error</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="<?= base_url('asset/'); ?>dashio/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('asset/'); ?>dashio/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url('asset/'); ?>dashio/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?= base_url('asset/'); ?>dashio/css/style.css" rel="stylesheet">
    <link href="<?= base_url('asset/'); ?>dashio/css/style-responsive.css" rel="stylesheet">

    <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 p404 centered">
                <img src="<?= base_url('asset/'); ?>dashio/img/404.png" alt="">
                <h1>Maaf</h1>
                <h3>Menu ini hanya untuk Level ADMIN</h3>
                <br>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <a href="<?= base_url('admin'); ?>" class="btn btn-theme mt">Kembali</a>
                    </div>
                </div>
                <h5 class="mt">Silahkan hubungi admin untuk mengubah level anda</h5>

            </div>
        </div>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('asset/'); ?>dashio/lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url('asset/'); ?>dashio/lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard <?= $user['level']; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet"
        href="<?= base_url('asset/'); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet"
        href="<?= base_url('asset/'); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <style>
    .swal2-popup {
        width: 500px;
        height: 500px;
    }

    .swal2-icon {
        font-size: 30px;

        margin-top: -30px;
    }



    .swal2-title {
        font-size: 30px;
    }

    .swal2-content {
        font-size: 25px;
    }

    .swal2-footer a {
        color: #fff;

    }

    .content-wrapper {
        background: #fff;
    }
    </style>
</head>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>

        <h1>
            Dashboard <?= $user['level']; ?>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php if ($user['level'] == "Admin") : ?>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua" style="height:110px;border:5px solid rgba(100,100,100,0.3);">
                    <div class="inner">
                        <h4><?= $ac ?> Unit</h4>
                        <p>Total Air Conditioner</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-laptop"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green" style="height:110px;border:5px solid rgba(100,100,100,0.3);">
                    <div class="inner">
                        <h4>0<sup style="font-size: 20px">%</sup></h4>
                        <p>???</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow" style="height:110px;border:5px solid rgba(100,100,100,0.3);">
                    <div class="inner">
                        <h4><?= $total_users; ?> Pengguna</h4>
                        <p>Total Pengguna</p>
                    </div>
                    <div class="icon" style="margin-top: 14px;">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red" style="height:110px;border:5px solid rgba(100,100,100,0.3);">
                    <div class="inner">
                        <h4><?= $apart; ?> Unit</h4>
                        <p>Total Apart</p>
                    </div>
                    <div class="icon" style="margin-top: 12px">
                        <i class="fa fa-fire-extinguisher"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <?php endif; ?>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- jQuery 3 -->
<script src="<?= base_url('asset/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?= base_url('asset/'); ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?= base_url('asset/'); ?>bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('asset/'); ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= base_url('asset/'); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url('asset/'); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('asset/'); ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('asset/'); ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url('asset/'); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url('asset/'); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
</script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url('asset/'); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url('asset/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('asset/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/'); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('asset/'); ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/'); ?>dist/js/demo.js"></script>
<!-- Sweetalert -->
<script src="<?= base_url('asset/'); ?>sweetalert/sweetalert2.all.min.js"></script>
<script>
const flashdata = $('.flash-data').data('flashdata');

if (flashdata) {
    Swal.fire({
        type: 'success',
        title: 'Sukses',
        text: flashdata,
        footer: '<a href>WEBTEK</a>'
    });
}
</script>
</body>

</html>
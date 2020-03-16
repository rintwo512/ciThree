<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Apart</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet"
        href="<?= base_url('asset/'); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="<?= base_url('asset/'); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>dist/css/skins/_all-skins.min.css">


</head>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Quick Example</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?= base_url('chart_ac/ubah/') . $data['id']; ?>" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="tahun">Tahun *</label>
                            <input type="hidden" name="id" id="id" value="<?= $data['id']; ?>">
                            <select type="text" class="form-control" name="tahun" id="tahun">
                                <option value='<?= $data['tahun']; ?>'><?= $data['tahun']; ?></option>
                                <option value="">----Pilih----</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                            </select>
                            <!-- <?= form_error('tahun', '<small class="text-danger">, </small>'); ?> -->
                        </div>
                        <div class="form-group">
                            <label for="bulan">Bulan *</label>
                            <select type="text" class="form-control" name="bulan" id="bulan">
                                <option value='<?= $data['bulan']; ?>'><?= $data['bulan']; ?></option>
                                <option value="">----Pilih----</option>
                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>Novemver</option>
                                <option>Desember</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="unit">Unit *</label>
                            <input type="number" class="form-control" name="unit" id="unit"
                                value="<?= $data['unit']; ?>">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('chart_ac'); ?>" class="btn btn-danger pull-right">Kembali</a>
                    </div>
                </form>
            </div>
            <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->





<!-- jQuery 3 -->
<script src="<?= base_url('asset/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('asset/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('asset/'); ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url('asset/'); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?= base_url('asset/'); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
</script>
<!-- SlimScroll -->
<script src="<?= base_url('asset/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('asset/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/'); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/'); ?>dist/js/demo.js"></script>
<script src="<?= base_url('asset/'); ?>sweetalert/sweetalert2.all.min.js"></script>
<script src="<?= base_url('asset/'); ?>sweetalert/skripsukses.js"></script>
<!-- page script -->

</body>

</html>
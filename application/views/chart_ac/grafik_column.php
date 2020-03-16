<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= base_url('asset/') ?>bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>dist/css/skins/_all-skins.min.css">
    <!-- Pace style -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/pace/pace.min.css">

</head>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="col-md-3 pull-right">
                            <select name="tahun" id="tahun" class="form-control">
                                <option value="">----Pilih Tahun----</option>
                                <?php
                                foreach ($year_list->result_array() as $row) {

                                    echo '<option value="' . $row['tahun'] . '">' . $row['tahun'] . '</option>';
                                }
                                ?>

                            </select>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="chart_area" style="width:100%; height:500px;">

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>


        </div>
        <!-- /.row -->


    </section>

</div>
<!-- /.content-wrapper -->





<!-- jQuery 3 -->
<script src="<?= base_url('asset/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('asset/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('asset/') ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/') ?>dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('asset/') ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?= base_url('asset/') ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url('asset/') ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url('asset/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('asset/') ?>bower_components/chart.js/Chart.js"></script>
<!-- PACE -->
< <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('asset/') ?>dist/js/pages/dashboard2.js"></script>

    <script src="<?= base_url('asset/') ?>dist/js/demo.js"></script>
    <script src="<?= base_url('asset/'); ?>bower_components/moment/min/moment.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('asset/'); ?>dist/js/demo.js"></script>
    <script src="<?= base_url('asset/'); ?>sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('asset/'); ?>sweetalert/skripsukses.js"></script>
    <script src="<?= base_url('asset/') ?>bower_components/charts/loader.js"></script>
    <!-- page script -->

    <script type="text/javascript">
    google.charts.load('current', {
        packages: ['corechart', 'bar']
    });
    google.charts.setOnLoadCallback();

    function load_montwise_data(tahun, title) {
        var temp_title = title + ' ' + tahun;
        $.ajax({
            url: "<?php echo base_url(); ?>Chart_ac/ambil_data_chart",
            method: "POST",
            data: {
                tahun: tahun
            },
            dataType: "JSON",
            success: function(data) {
                drawMonthwiseChart(data, temp_title);
            }
        })
    }

    function drawMonthwiseChart(chart_data, chart_main_title) {
        var jsonData = chart_data;
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'bulan');
        data.addColumn('number', 'Unit');

        $.each(jsonData, function(i, jsonData) {
            var bulan = jsonData.bulan;
            var unit = jsonData.unit;
            data.addRows([
                [bulan, unit]
            ]);
        });

        var options = {
            title: chart_main_title,
            hAxis: {
                title: "Bulan"
            },
            vAxis: {
                title: 'Rata-rata'
            }
        }

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));
        chart.draw(data, options);
    }
    </script>

    <script>
    $(document).ready(function() {
        $('#tahun').change(function() {
            var tahun = $(this).val();
            if (tahun != '') {
                load_montwise_data(tahun, 'Grafik Maintenance Ac Tahun');
            }
        });
    });
    </script>



    </body>

</html>
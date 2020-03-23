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

    <style>
    thead {
        background-color: darkred;
        color: #fff;
    }

    th {
        border: 1px solid #000 !important;
    }

    #tbl:hover,
    #td:hover {
        background-color: rgba(100, 100, 100, 0.2)
    }

    .box-title {
        font-size: 40px !important;
        font-weight: bold;
        -webkit-text-stroke: 1px red;
        text-shadow: 0px 5px 2px rgba(0, 0, 0, 0.5);
    }

    .but {
        color: #000;
        margin: 3px;
        border-radius: 45%;
        box-shadow: 0px 5px 2px rgba(0, 0, 0, 0.5);
        transition: 0.4s;
    }

    .but:hover {
        box-shadow: 0px -2px 2px rgba(0, 0, 0, 0.5);
    }

    .tombol_tambah {
        box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.8);
        transition: 0.5s;
    }

    .tombol_tambah:hover {
        box-shadow: -2px -2px 3px rgba(0, 0, 0, 0.5);
    }

    .swal2-popup {
        width: 400px;
        height: 400px;
    }

    .swal2-icon {
        font-size: 20px;
        margin-top: -30px;
    }

    .swal2-title {
        font-size: 25px;
    }

    .swal2-content {
        font-size: 20px;
    }

    .swal2-footer a {
        color: #fff;

    }
    </style>
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
            <div class="col-xs-8">

                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>

                <div class="box">
                    <div class="box-header">
                        <a data-toggle="modal" data-target="#modal-tambah"
                            class="btn btn-primary btn-sm pull-right tombol_tambah"><i class="fa fa-plus"></i> Tambah
                            Data</a>
                        <h3 class="box-title" style="padding-left: 38%">Data Grafik</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Tahun</th>
                                    <th style="text-align: center">Bulan</th>
                                    <th style="text-align: center">Unit</th>
                                    <th style="text-align: center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($chart_ac as $chart) : ?>
                                <tr id="td" style="text-align: center">
                                    <?php if ($chart['tahun'] == "2020") : ?>
                                    <td style="background-color: grey;"><?= $chart['tahun']; ?></td>
                                    <?php else : ?>
                                    <td style="background-color: yellow;"><?= $chart['tahun']; ?></td>
                                    <?php endif; ?>
                                    <td><?= $chart['bulan']; ?></td>
                                    <td><?= $chart['unit']; ?></td>
                                    <td>
                                        <a href="<?= base_url('chart_ac/ubah/') . $chart['id']; ?>"
                                            class="btn btn-success btn-sm but"><i class="fa fa-pencil"></i></a>


                                        <a id="btn_delete" href="<?= base_url('chart_ac/hapus/') . $chart['id']; ?>"
                                            class="btn btn-danger btn-sm but"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center">Form Tambah Data</h4>
            </div>
            <div class="modal-body">

                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?= base_url('chart_ac/tambah'); ?>" method="post" role="form">
                    <div class="box-body" id="add">
                        <div class="form-group">
                            <label for="tahun">Tahun *</label>
                            <select type="text" class="form-control" id="tahun" name="tahun" required
                                oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                                <option value=""> ----Pilih---- </option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bulan">Bulan *</label>
                            <select type="text" class="form-control" id="bulan" name="bulan" required
                                oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                                <option value=""> ----Pilih---- </option>
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
                            <label for="tahun">Unit *</label>
                            <input type="number" class="form-control" name="unit" id="unit" placeholder="Jumlah Unit..."
                                required oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary  pull-left">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


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
<script>
$(document).on('click', '#btn_delete', function(e) {
    const href = $(this).attr('href')
    e.preventDefault();
    Swal.fire({
        title: 'Apa kamu yakin?',
        text: "Kamu tidak dapat mengembalikan ini!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Iya, hapus itu!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
            Swal.fire(
                'Deleted!',
                'File berhasil dihapus',
                'success'
            )
        }
    });
});

$(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
    })
})
</script>

</body>

</html>
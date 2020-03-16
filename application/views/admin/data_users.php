<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Users</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
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

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
    #tbl:hover {
        background-color: rgba(100, 100, 100, 0.2);
        transition: 0.5s;
        cursor: pointer;
    }

    .img-thumbnail {
        width: 50px;
        height: 50px;

    }

    .head {
        background-color: darkred;
        color: #fff;
        font-weight: bold;
    }

    th {
        border: 1px solid #000 !important;

    }

    .box-title {
        font-size: 40px !important;
        font-weight: bold;
        -webkit-text-stroke: 1px red;
        text-shadow: 0px 5px 2px rgba(0, 0, 0, 0.5);
        padding-left: 38%;
    }

    .but {
        color: #000;
        box-shadow: 0px 5px 3px rgba(0, 0, 0, 0.5);
        border: none;
    }

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
    </style>
</head>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('popbox'); ?>"></div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header">
                        <h3 class="box-title">Data Users</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="head">
                                    <th style="text-align:center">Nama</th>
                                    <th style="text-align:center">Email</th>
                                    <th style="text-align:center">Nik</th>
                                    <th style="text-align:center">Level</th>
                                    <th style="text-align:center">Status Akun</th>
                                    <th style="text-align:center">Foto</th>
                                    <th style="text-align:center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user) : ?>


                                <tr id="tbl" style="text-align:center">
                                    <td><?= $user['nama']; ?></td>
                                    <td><?= $user['email']; ?></td>
                                    <td><?= $user['nik']; ?></td>
                                    <td><?= $user['level']; ?></td>
                                    <?php if ($user['status'] == "Aktif") : ?>
                                    <td><span class="label label-success"><?= $user['status']; ?></span></td>
                                    <?php else : ?>
                                    <td><span class="label label-warning"><?= $user['status']; ?></span></td>
                                    <?php endif; ?>
                                    <td><img class="img-thumbnail"
                                            src="<?= base_url('asset/dist/img/' . $user['foto']); ?>"></td>
                                    <td>
                                        <a href="<?= base_url('data_users/update/') . $user['id']; ?>"
                                            class="btn btn-primary btn-sm but"><i class="fa fa-pencil"></i>
                                            Update</a>
                                        <a id="btn_detail" data-toggle="modal" data-target="#details"
                                            class="btn btn-info btn-sm but"
                                            data-tgl_bergabung="<?= date('d M Y', $user['tanggal']); ?>"
                                            data-posisi="<?= $user['posisi']; ?>" data-loker="<?= $user['loker']; ?>"><i
                                                class="fa fa-eye"></i> Detail</a>
                                        <?php if ($user['level'] != "Admin") : ?>
                                        <a id="btn-del" href="<?= base_url('data_users/hapus/') . $user['id']; ?>"
                                            class="btn btn-danger btn-sm but"><i class="fa fa-trash"></i> Delete</a>
                                        <?php endif; ?>
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
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>



<div class="modal fade" id="details">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center">Detail User</h4>
            </div>
            <form>
                <div class="modal-body" id="detail-body">


                    <table class="table table-striped">
                        <tr id="tbl" align="center">
                            <td>Tanggal Bergabung</td>
                            <td id="tgl_bergabung"></td>
                        </tr>
                        <tr id="tbl" align="center">
                            <td>Posisi</td>
                            <td id="posisi"></td>
                        </tr>
                        <tr id="tbl" align="center">
                            <td>Loker</td>
                            <td id="loker"></td>
                        </tr>
                    </table>


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
$(document).ready(function() {
    $(document).on("click", "#btn_detail", function() {
        const tgl_bergabung = $(this).data('tgl_bergabung');
        const posisi = $(this).data('posisi');
        const loker = $(this).data('loker');

        $("#detail-body #tgl_bergabung").text(tgl_bergabung);
        $("#detail-body #posisi").text(posisi);
        $("#detail-body #loker").text(loker);

    });




    $(document).on('click', '#btn-del', function(e) {
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

});
</script>
<script>
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
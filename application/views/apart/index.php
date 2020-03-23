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

    #bt-tmb,
    .prt {
        box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.8);
        transition: 0.5s;
    }

    #bt-tmb:hover {
        box-shadow: -2px -2px 3px rgba(0, 0, 0, 0.5);
    }

    .prt:hover {
        box-shadow: -1px -1px 2px rgba(0, 0, 0, 0.5);

    }

    .box-title {
        font-size: 40px !important;
        font-weight: bold;
        -webkit-text-stroke: 1px red;
        text-shadow: 0px -5px 2px rgba(0, 0, 0, 0.5);


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

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>

                <div class="box">
                    <div class="box-header">
                        <?php if ($user['level'] == "Admin") : ?>
                        <a id="bt-tmb" data-toggle="modal" data-target="#modal-tambah"
                            class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Tambah Data</a>
                        <?php endif; ?>
                        <a href="<?= base_url('apart/print'); ?>" target="_blank" class="btn btn-default prt"><i
                                class="fa fa-print"></i>
                            Print</a>

                        <h3 class="box-title" style="padding-left: 35%">
                            DATA APART
                        </h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Wing</th>
                                    <th style="text-align: center">Lantai</th>
                                    <th style="text-align: center">Lokasi</th>
                                    <th style="text-align: center">Merk</th>
                                    <th style="text-align: center">Jenis</th>
                                    <th style="text-align: center">Status</th>
                                    <th style="text-align: center">No seri</th>
                                    <th style="text-align: center">Tanggal Update</th>
                                    <th style="text-align: center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($apar as $apr) : ?>
                                <tr id="td" style="text-align: center">
                                    <td><?= $apr['wing']; ?></td>
                                    <td><?= $apr['lantai']; ?></td>
                                    <td><?= $apr['lokasi']; ?></td>
                                    <td><?= $apr['merk']; ?></td>
                                    <td><?= $apr['jenis']; ?></td>

                                    <?php if ($apr['status'] == "Normal") : ?>

                                    <td><a data-toggle="tooltip" title="<?= $apr['catatan']; ?>"
                                            class="label label-info "><?= $apr['status']; ?></td></a>

                                    <?php else : ?>

                                    <td><a data-toggle="tooltip" title="<?= $apr['catatan']; ?>"
                                            class="label label-danger"><?= $apr['status']; ?></td></a>

                                    <?php endif; ?>

                                    <td><?= $apr['no_seri']; ?></td>
                                    <td><?= date('d M Y', $apr['tanggal_update']); ?></td>
                                    <td>

                                        <a href="<?= base_url('apart/ubah/') . $apr['id']; ?>"
                                            class="btn btn-success btn-sm but"> <i class="fa fa-pencil"></i>
                                        </a>


                                        <a id="btn_detail" data-toggle="modal" data-target="#details"
                                            class="btn btn-warning btn-sm but" data-berat="<?= $apr['berat']; ?>"
                                            data-aset="<?= $apr['aset']; ?>"
                                            data-expire="<?= date('d M Y', $apr['tanggal_expire']); ?>"
                                            data-catatan="<?= $apr['catatan']; ?>"><i class="fa fa-eye"></i></a>


                                        <?php if ($user['level'] == "Admin") : ?>
                                        <a id="btn_delete" href="<?= base_url('apart/hapus/') . $apr['id']; ?>"
                                            class="btn btn-danger btn-sm but"><i class="fa fa-trash"></i></a>
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
                <form action="<?= base_url('apart/tambah'); ?>" method="post" role="form">
                    <div class="box-body" id="add">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="aset">Pemiliki Aset *</label>
                                <input type="hidden" class="form-control" name="telegram_id" value="-381779502">
                                <input type="text" class="form-control" id="aset" name="aset"
                                    placeholder="Masukan lokasi..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="wing">Wing *</label>
                                <select type="text" class="form-control" id="wing" name="wing" required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')">
                                    <option value=""> ----Pilih---- </option>
                                    <option value="Wing A">Wing A</option>
                                    <option value="Wing B">Wing B</option>
                                    <option value="Wing C">Wing C</option>
                                    <option value="Wing D">Wing D</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lantai">Lantai *</label>
                                <select type="text" class="form-control" id="lantai" name="lantai" required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')">
                                    <option value=""> ----Pilih---- </option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lokasi">Lokasi *</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi"
                                    placeholder="Masukan lokasi..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk *</label>
                                <input type="text" class="form-control" id="merk" name="merk"
                                    placeholder="Masukan merk apart..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis *</label>
                                <input type="text" class="form-control" id="jenis" name="jenis"
                                    placeholder="Masukan jenis apart..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="berat">Berat *</label>
                                <input type="text" class="form-control" id="berat" name="berat"
                                    placeholder="Berat Apart..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">

                            </div>
                            <div class="form-group">
                                <label for="status">Status *</label>
                                <select type="text" class="form-control" id="status" name="status" required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')">
                                    <option value=""> ----Pilih---- </option>
                                    <option value="Normal">Normal</option>
                                    <option value="Expire">Expire</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_seri">No.Seri</label>
                                <input type="text" class="form-control" id="no_seri" name="no_seri"
                                    placeholder="Masukan No Seri Apart.." autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="tgl_expire">Tanggal Expire</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tgl_expire" class="form-control pull-right" id="datepicker"
                                        name="tgl_expire" autocomplete="off" required
                                        oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                        oninput="setCustomValidity('')" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="catatan">Catatan</label>
                                <textarea type="text" class="form-control" name="catatan" id="catatan"
                                    placeholder="Silahkan di isi jika ada catatan"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary  pull-left" id="sendToGroup">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->







<div class="modal fade" id="details">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center">Detail Apart</h4>
            </div>
            <form>
                <div class="modal-body" id="detail-body">

                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <tr id="tbl" align="center">
                                <td>Pemilik Aset</td>
                                <td id="aset"></td>
                            </tr>
                            <tr id="tbl" align="center">
                                <td>Berat</td>
                                <td id="berat"></td>
                            </tr>

                            <tr id="tbl" align="center">
                                <td>Tanggal Expire</td>
                                <td id="tanggal_expire"></td>
                            </tr>
                            <tr id="tbl" align="center">
                                <td>Catatan</td>
                                <td id="catatan"></td>
                            </tr>
                        </table>
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
$(function() {
    $('#wing').change(function() {
        const wing = $('#wing option:selected').val();
        if (wing == "Lainnya") {
            document.getElementById('lantai').innerHTML =
                "<option value='Area Luar Gedung'>Area Luar Gedung</option>";
        } else if (wing == "Wing C" || wing == "Wing D") {
            document.getElementById('lantai').innerHTML =
                "<option value='Lantai 1'>Lantai 1</option><option value='Lantai 2'>Lantai 2</option>";
        } else if (wing == "Wing A" || wing == "Wing B") {
            document.getElementById('lantai').innerHTML =
                "<option value='Lantai 1'>Lantai 1</option><option value='Lantai 2'>Lantai 2</option><option value='Lantai 3'>Lantai 3</option>";
        }
    })
})
</script>

<script>
$(function() {

    //Date range picker
    $('#reservation').daterangepicker()
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    })
})
</script>

<script>
$(document).ready(function() {
    $(document).on('click', '#btn_detail', function(e) {
        e.preventDefault();
        const aset = $(this).data('aset');
        const berat = $(this).data('berat');
        const tgl_expire = $(this).data('expire');
        const catatan = $(this).data('catatan');
        $("#detail-body #aset").text(aset);
        $("#detail-body #berat").text(berat);
        $("#detail-body #tanggal_expire").text(tgl_expire);
        $("#detail-body #catatan").text(catatan);
    })

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
})
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
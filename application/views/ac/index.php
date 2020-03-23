<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Air Conditioner</title>
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
    <!-- daterange picker -->
    <link rel="stylesheet"
        href="<?= base_url('asset/'); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet"
        href="<?= base_url('asset/'); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
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



    th {
        border: 1px solid #000 !important;

    }



    thead {
        background: darkred;
        color: #fff;
        font-weight: bold !important;
    }

    #deta {
        border: 1px solid #000;
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

    .tombol_tambah,
    .prt {
        box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.8);
        transition: 0.5s;
    }



    .tombol_tambah:hover {

        box-shadow: -2px -2px 3px rgba(0, 0, 0, 0.5);
    }

    .prt:hover {
        box-shadow: -1px -1px 2px rgba(0, 0, 0, 0.5);

    }

    .box-title {
        font-size: 40px !important;
        font-weight: bold;
        -webkit-text-stroke: 1px red;
        text-shadow: 0px 5px 2px rgba(0, 0, 0, 0.5);

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
    <!-- <section class="content-header">
        <h1>Data Tables</h1>
    </section> -->

    <!-- Main content -->
    <section class="content">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header">
                        <?php if ($user['level'] == "Admin") : ?>
                        <a href="" data-toggle="modal" data-target="#modal-add"
                            class="btn btn-success pull-right tombol_Tambah"><i class="fa fa-plus"></i> Tambah
                            Data</a>
                        <?php endif; ?>
                        <a href="<?= base_url('ac/print'); ?>" target="_blank" class="btn btn-default prt"><i
                                class="fa fa-print"></i>
                            Print</a>

                        <h3 class="box-title" style="padding-left: 28%">Data Air Conditioner</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align:center">Wing</th>
                                    <th style="text-align:center">Lantai</th>
                                    <th style="text-align:center">Lokasi</th>
                                    <th style="text-align:center">Merk</th>
                                    <th style="text-align:center">Type</th>
                                    <th style="text-align:center">Jenis</th>
                                    <th style="text-align:center">Status</th>
                                    <th style="text-align:center">Tanggal Update</th>
                                    <th style="text-align:center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($airco as $ac) : ?>
                                <tr id="tbl" style="text-align:center">
                                    <td><?= $ac['wing']; ?></td>
                                    <td><?= $ac['lantai']; ?></td>
                                    <td><?= $ac['lokasi']; ?></td>
                                    <td><?= $ac['merk']; ?></td>
                                    <td><?= $ac['type']; ?></td>
                                    <td><?= $ac['jenis']; ?></td>
                                    <?php if ($ac['status'] == "Normal") : ?>
                                    <td><a href="#" class="label label-info" title="<?= $ac['jenis_kerusakan'] ?>"
                                            data-toggle="tooltip">
                                            <?= $ac['status'] ?></a>
                                    </td>
                                    <?php else : ?>
                                    <td><a href="#" class="label label-danger" title="<?= $ac['jenis_kerusakan'] ?>"
                                            data-toggle="tooltip">
                                            <?= $ac['status'] ?></a>
                                    </td>
                                    <?php endif; ?>
                                    <td><?= date(' d M Y',  $ac['tanggal']); ?></td>
                                    <td>
                                        <a href="<?= base_url('ac/update/') . $ac['id']; ?>"
                                            class="btn btn-primary btn-sm but"><i class="fa fa-pencil"></i>
                                        </a>


                                        <a id="btn_detail" data-toggle="modal" data-target="#details"
                                            class="btn btn-warning btn-sm but" data-aset="<?= $ac['asset']; ?>"
                                            data-kapasitas="<?= $ac['kapasitas']; ?>"
                                            data-refrigerant="<?= $ac['refrigerant']; ?>"
                                            data-pembuat="<?= $ac['negara_pembuat']; ?>"
                                            data-tgl_pemasangan="<?= $ac['tgl_pemasangan']; ?>"
                                            data-tgl_maint="<?= $ac['tgl_maint']; ?>"
                                            data-st_kompresor="<?= $ac['st_kompresor']; ?>"
                                            data-catatan="<?= $ac['catatan'] ?>"><i class="fa fa-eye"></i></a>

                                        <?php if ($user['level'] == "Admin") : ?>
                                        <a id="btn-del" href="<?= base_url('ac/delete/') . $ac['id']; ?>"
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
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>


<div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="title">Form Tambah Data</h4>
            </div>
            <div class="modal-body">

                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?= base_url('ac/tambah'); ?>" method="post" role="form">
                    <div class="box-body" id="add">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="asset">Pemilik Aset *</label>
                                <input type="hidden" id="id" name="id">
                                <input type="text" class="form-control" id="asset" name="asset"
                                    placeholder="Masukan pemilik asset..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="wing">Wing *</label>
                                <select type="text" class="form-control" id="wing" name="wing" required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">
                                    <option value="">--PILIH--</option>
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
                                    oninput="setCustomValidity('')" autocomplete="off">
                                    <option value="">--PILIH--</option>
                                    <option value="Lantai 1">Lantai 1</option>
                                    <option value="Lantai 2">Lantai 2</option>
                                    <option value="Lantai">Lantai 3</option>
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
                                <select type="text" class="form-control" id="merk" name="merk"
                                    placeholder="Masukan merk AC..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">
                                    <option value="">--PILIH--</option>
                                    <option value="Daikin">Daikin</option>
                                    <option value="General">General</option>
                                    <option value="Panasonic">Panasonic</option>
                                    <option value="Sharp">Sharp</option>
                                    <option value="LG">LG</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="type">Type *</label>
                                <select type="text" class="form-control" id="type" name="type"
                                    placeholder="Masukan type AC..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">
                                    <option value="">--PILIH--
                                    <option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kapasitas">Kapasitas *</label>
                                <select type="text" class="form-control" id="kapasitas" name="kapasitas"
                                    placeholder="Masukan Kapasitas AC..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">
                                    <option value="">--PILIH--
                                    <option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis *</label>
                                <select type="text" class="form-control" id="jenis" name="jenis"
                                    placeholder="Masukan jenis AC..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">
                                    <option value="">--PILIH--</option>
                                    <option value="Inverter">Inverter</option>
                                    <option value="Convensional">Convensional</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="refrigerant">Refrigerant *</label>
                                <select type="text" class="form-control" id="refrigerants" name="refrigerant"
                                    placeholder="Masukan Refigerant AC..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">
                                    <option value="">--PILIH--</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="negara_pembuat">Negara Pembuat *</label>
                                <select type="text" class="form-control" id="negara_pembuat" name="negara_pembuat"
                                    placeholder="Masukan Negara Pembuat..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">
                                    <option value="">--PILIH--</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Malaysa">Malaysa</option>
                                    <option value="China">China</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Pemasangan</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker"
                                        name="tgl_pemasangan" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tanggal Maintenance *</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="reservation" name="tgl_maint"
                                        required oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                        oninput="setCustomValidity('')" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="st_kompresor">Status Kompresor *</label>
                                <select type="text" class="form-control" id="st_kompresor" name="st_kompresor"
                                    placeholder="Masukan Status Kompresor..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')" autocomplete="off">
                                    <option value="">--PILIH--</option>
                                    <option> Sudah Diganti </option>
                                    <option> Belum Pernah Diganti </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Status *</label>
                                <select type="text" class="form-control" id="status" name="status"
                                    placeholder="Masukan status AC..." required
                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                    oninput="setCustomValidity('')">
                                    <option value="">--PILIH--</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Rusak">Rusak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kerusakan">Jenis Kerusakan</label>
                                <textarea type="text" class="form-control" id="jenis_kerusakan" name="jenis_kerusakan"
                                    autocomplete="off"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="catatan">Catatan</label>
                                <textarea type="text" class="form-control" name="catatan" id="catatan"
                                    autocomplete="off"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal"
                            style="width:100px">Kembali</button>

                        <button type="submit" class="btn btn-primary pull-left" style="width:100px">Simpan</button>
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
                <h4 class="modal-title text-center">Detail Unit</h4>
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
                                <td>Kapasitas</td>
                                <td id="kapasitas"></td>
                            </tr>
                            <tr id="tbl" align="center">
                                <td>Refrigerant</td>
                                <td id="refrigerant"></td>
                            </tr>
                            <tr id="tbl" align="center">
                                <td>Negara Pembuat</td>
                                <td id="negara_pembuat"></td>
                            </tr>
                            <tr id="tbl" align="center">
                                <td>Tanggal Pemasangan</td>
                                <td id="tgl_pemasangan"></td>
                            </tr>
                            <tr id="tbl" align="center">
                                <td>Tanggal Maintenance</td>
                                <td id="tgl_maint"></td>
                            </tr>
                            <tr id="tbl" align="center">
                                <td>Status Kompresor</td>
                                <td id="st_kompresor"></td>
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
<script src="<?= base_url('asset/'); ?>myjquery/jqueryku.js"></script>
<!-- page script -->

<script>
$(document).on("click", "#btn_detail", function() {

    const aset = $(this).data('aset');
    const kapasitas = $(this).data('kapasitas');
    const refrigerant = $(this).data('refrigerant');
    const ngr_pembuat = $(this).data('pembuat');
    const tgl_pemasangan = $(this).data('tgl_pemasangan');
    const tgl_maint = $(this).data('tgl_maint');
    const st_kompresor = $(this).data('st_kompresor');
    const catatan = $(this).data('catatan');

    $("#detail-body #aset").text(aset);
    $("#detail-body #kapasitas").text(kapasitas);
    $("#detail-body #refrigerant").text(refrigerant);
    $("#detail-body #negara_pembuat").text(ngr_pembuat);
    $("#detail-body #tgl_pemasangan").text(tgl_pemasangan);
    $("#detail-body #tgl_maint").text(tgl_maint);
    $("#detail-body #st_kompresor").text(st_kompresor);
    $("#detail-body #catatan").text(catatan);
});
</script>

<script>
$(function() {

    //Date range picker
    $('#reservation').daterangepicker()
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    });

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
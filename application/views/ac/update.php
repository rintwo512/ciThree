<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Update Data AC</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet"
        href="<?= base_url('asset/'); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet"
        href="<?= base_url('asset/'); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>dist/css/skins/_all-skins.min.css">
    <style>
    .navbar-brand {
        font-family: 'Courier New', Courier, monospace;
        font-size: 50px;
        text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.8);
    }

    .navbar-brand b {
        color: red;
    }

    thead {
        background: darkred;
        color: #fff;
        font-weight: bold !important;
    }

    .content-wrapper {
        background: #aeaeae !important;
    }
    </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand"><b>Web</b>Tech</a>
                    </div>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">


                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="<?= base_url('asset/dist/img/') . $user['foto']; ?>" class="user-image"
                                        alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs"><?= $user['nama']; ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">


                <!-- Main content -->
                <section class="content">


                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title" style="padding-left:40%">Update Data</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" method="post" action="<?= base_url('ac/update/') . $air['id']; ?>">
                                <div class="box-body">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="asset">Pemilik Aset *</label>
                                            <input type="hidden" name="id" id="id" value="<?= $air['id']; ?>">
                                            <input type="text" class="form-control" id="asset" name="asset"
                                                value="<?= $air['asset']; ?>">
                                            <?= form_error('asset', '<small class="label label-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="wing">Wing *</label>
                                            <select type="text" class="form-control" id="wing" name="wing">
                                                <option value="<?= $air['wing']; ?>"><?= $air['wing']; ?></option>
                                                <option value="">----PILIH----</option>
                                                <option value="Wing A">Wing A</option>
                                                <option value="Wing B">Wing B</option>
                                                <option value="Wing C">Wing C</option>
                                                <option value="Wing D">Wing D</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                            <?= form_error('wing', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="lantai">Lantai *</label>
                                            <select type="text" class="form-control" id="lantai" name="lantai">
                                                <option value="<?= $air['lantai']; ?>"><?= $air['lantai']; ?></option>
                                                <option value="">----PILIH----</option>
                                            </select>
                                            <?= form_error('lantai', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="lokasi">Lokasi *</label>
                                            <input type="text" class="form-control" id="lokasi" name="lokasi"
                                                value="<?= $air['lokasi']; ?>">
                                            <?= form_error('lokasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="merk">Merk *</label>
                                            <select type="text" class="form-control" id="merk" name="merk">
                                                <option value="<?= $air['merk']; ?>"><?= $air['merk']; ?></option>
                                                <option value="">----PILIH----</option>
                                                <option>Daikin</option>
                                                <option>General</option>
                                                <option>Panasonic</option>
                                                <option>Sharp</option>
                                                <option>LG</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="type">Type *</label>
                                            <select type="text" class="form-control" id="type" name="type">
                                                <option value="<?= $air['type']; ?>"><?= $air['type']; ?></option>
                                                <option value="">----PILIH----</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="kapasitas">Kapasitas *</label>
                                            <select type="text" class="form-control" id="kapasitas" name="kapasitas">

                                                <option value="<?= $air['kapasitas']; ?>"><?= $air['kapasitas']; ?>
                                                </option>
                                                <option value="">----PILIH----</option>
                                                <?php foreach ($kapasitas as $kps) : ?>
                                                <option><?= $kps ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis">Jenis *</label>
                                            <select type="text" class="form-control" id="jenis" name="jenis">
                                                <option value="<?= $air['jenis']; ?>"><?= $air['jenis']; ?></option>
                                                <option value="">----PILIH----</option>
                                                <option>Convensional</option>
                                                <option>Inverter</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="refrigerant">Refrigerant *</label>
                                            <select type="text" class="form-control" id="refrigerant"
                                                name="refrigerant">
                                                <option value="<?= $air['refrigerant']; ?>"><?= $air['refrigerant']; ?>
                                                </option>
                                                <option value="">----PILIH----</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="negara_pembuat">Negara Pembuat *</label>
                                            <select type="text" class="form-control" id="negara_pembuat"
                                                name="negara_pembuat" placeholder="Masukan Negara Pembuat..." required
                                                oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                                oninput="setCustomValidity('')" autocomplete="off">
                                                <option value="<?= $air['negara_pembuat']; ?>">
                                                    <?= $air['negara_pembuat']; ?>
                                                </option>
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
                                                    name="tgl_pemasangan" value="<?= $air['tgl_pemasangan']; ?>">
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
                                                <input type="text" value="<?= $air['tgl_maint']; ?>"
                                                    class="form-control pull-right" id="reservation" name="tgl_maint"
                                                    required
                                                    oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                                    oninput="setCustomValidity('')">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="st_kompresor">Status Kompresor *</label>
                                            <select type="text" class="form-control" id="st_kompresor"
                                                name="st_kompresor">
                                                <option value="<?= $air['st_kompresor']; ?>">
                                                    <?= $air['st_kompresor']; ?>
                                                </option>
                                                <option value="">----PILIH----</option>
                                                <option> Sudah Diganti </option>
                                                <option> Belum Pernah Diganti </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status *</label>
                                            <select type="text" class="form-control" id="status" name="status">

                                                <option value='<?= $air['status']; ?>' selected><?= $air['status']; ?>
                                                </option>
                                                <option value="">----PILIH----</option>
                                                <option value='Rusak'>Rusak</option>
                                                <option value='Normal'>Normal
                                                </option>


                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kerusakan">Jenis Kerusakan</label>
                                            <textarea type="text" class="form-control" name="jenis_kerusakan"
                                                id="jenis_kerusakan"><?= $air['jenis_kerusakan']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="catatan">Catatan</label>
                                            <textarea class="form-control catatan" name="catatan"
                                                id="catatan"><?= $air['catatan']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="<?= base_url('ac'); ?>" type="submit"
                                        class="btn btn-danger pull-right">Kembali</a>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer text-center">
            <strong>Copyright &copy; <?= date('Y') ?> <a href="#">WEBTECH</a>.</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?= base_url('asset/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
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
        $('#status').on('change', function() {
            var status = $('#status').val();
            if (status == "Normal") {
                document.getElementById('jenis_kerusakan').value = "";
                document.getElementById('catatan').value = "";
                $('#jenis_kerusakan').attr('readonly', true);

            } else if (status == "Rusak") {
                $('#jenis_kerusakan').attr('required', true);
                $('#jenis_kerusakan').removeAttr('readonly', true);
                $('#catatan').removeAttr('readonly', true);
            }
        });

        $('#jenis').change(function() {
            var uptd = $('#jenis option:selected').val();
            if (uptd == "Inverter") {
                document.getElementById('refrigerant').innerHTML =
                    "<option value='R410'>R410</option><option value='R32'>R32</option>";
            } else {
                document.getElementById('refrigerant').innerHTML =
                    "<option value='R22'>R22</option><option value='Musicool'>Musicool</option>";
            }
        });

        $('#merk').change(function() {
            var merk = $('#merk option:selected').val();
            if (merk == "Daikin") {
                document.getElementById('type').innerHTML =
                    "<option value='Cassete'>Cassete</option><option value='Splite'>Splite</option><option value='Sentral'>Sentral</option><option value='Standing Floor'>Standing Floor</option>";
                document.getElementById('kapasitas').innerHTML =
                    "<option value='1/2 PK'>1/2 PK</option><option value='3/4 PK'>3/4 PK</option><option value='1 PK'>1 PK</option><option value='1,5 PK'>1,5 PK</option><option value='2 PK PK'>2 PK</option><option value='2,5 PK'>2,5 PK</option><option value='3 PK'>3 PK</option><option value='5 PK'>5 PK</option><option value='10 PK'>10 PK</option>";
            } else if (merk == "Panasonic" || merk == "Sharp" || merk == "LG") {
                document.getElementById('type').innerHTML = "<option value='Splite'>Splite</option>";
                document.getElementById('kapasitas').innerHTML =
                    "<option value='1/2 PK'>1/2 PK</option><option value='3/4 PK'>3/4 PK</option><option value='1 PK'>1 PK</option><option value='1,5 PK'>1,5 PK</option><option value='2 PK PK'>2 PK</option>";
            } else if (merk == "General") {
                document.getElementById('type').innerHTML =
                    "<option value='Cassete'>Cassete</option><option value='Splite'>Splite</option>";
                document.getElementById('kapasitas').innerHTML =
                    "<option value='2 PK PK'>2 PK</option><option value='3 PK'>3 PK</option><option value='5 PK'>5 PK</option>";
            }
        })

        $('#wing').change(function() {
            var wing = $('#wing option:selected').val();
            if (wing == "Lainnya") {
                $('#lantai').attr('required', true);
                document.getElementById('lantai').innerHTML =
                    "<option value='Area Luar Gedung'>Area Luar Gedung</option>";
            } else if (wing == "Wing C" || wing == "Wing D") {
                document.getElementById('lantai').innerHTML =
                    "<option value='Lantai 1'>Lantai 1</option><option value='Lantai 2'>Lantai 2</option>";
                $('#lantai').attr('required', true);
            } else if (wing == "Wing A" || wing == "Wing B") {
                document.getElementById('lantai').innerHTML =
                    "<option value='Lantai 1'>Lantai 1</option><option value='Lantai 2'>Lantai 2</option><option value='Lantai 3'>Lantai 3</option>";
                $('#lantai').attr('required', true);
            }
        })
    });
    </script>

</body>

</html>
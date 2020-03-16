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
        background-color: darkred;
        color: #fff;
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
                <!-- Content Header (Page header) -->
                <!-- <section class="content-header">
                    <h1>
                        Top Navigation
                        <small>Example 2.0</small>
                    </h1>
                </section> -->

                <!-- Main content -->
                <section class="content">


                    <!-- general form elements -->
                    <div class="col-md-6" style="left:25%">
                        <div class="box box-primary">
                            <div class="box-header with-border" style="padding-left: 38%">
                                <h3 class="box-title">Update data apart</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" method="post" action="<?= base_url('apart/ubah/') . $apart['id']; ?>">
                                <div class="box-body">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="asset">Pemilik Aset *</label>
                                            <input type="hidden" name="id" id="id" value="<?= $apart['id']; ?>">
                                            <input type="hidden" class="form-control" name="telegram_id"
                                                value="212366589">
                                            <input type="text" value="<?= $apart['aset']; ?>" class="form-control"
                                                id="aset" name="aset" placeholder="Masukan pemilik asset..." required
                                                oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                                oninput="setCustomValidity('')">
                                        </div>

                                        <div class="form-group">
                                            <label for="wing">Wing *</label>
                                            <select type="text" class="form-control" id="wing" name="wing" required
                                                oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                                oninput="setCustomValidity('')">

                                                <option value='<?= $apart['wing']; ?>'>
                                                    <?= $apart['wing']; ?></option>
                                                <option value=""> ----Pilih---- </option>
                                                <option>Wing A</option>
                                                <option>Wing B</option>
                                                <option>Wing C</option>
                                                <option>Wing D</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="lantai">Lantai *</label>
                                            <select type="text" class="form-control" id="lantai" name="lantai" required
                                                oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                                oninput="setCustomValidity('')">
                                                <option value='<?= $apart['lantai']; ?>'>
                                                    <?= $apart['lantai']; ?>
                                                </option>
                                                <option value=""> ----Pilih---- </option>
                                                <option>Lantai 1</option>
                                                <option>Lantai 2</option>
                                                <option>Lantai 3</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="lokasi">Lokasi *</label>
                                            <input type="text" value="<?= $apart['lokasi']; ?>" class="form-control"
                                                id="lokasi" name="lokasi" placeholder="Masukan lokasi..." required
                                                oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label for="merk">Merk *</label>
                                            <input type="text" value="<?= $apart['merk']; ?>" class="form-control"
                                                id="merk" name="merk" placeholder="Masukan merk apart..." required
                                                oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis">Jenis *</label>
                                            <input type="text" value="<?= $apart['jenis']; ?>" class="form-control"
                                                id="jenis" name="jenis" placeholder="Masukan jenis apart..." required
                                                oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                                oninput="setCustomValidity('')">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="berat">Berat *</label>
                                            <input type="text" value="<?= $apart['berat']; ?>" class="form-control"
                                                id="berat" name="berat" placeholder="Berat Apart..." required
                                                oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                                oninput="setCustomValidity('')">

                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status *</label>
                                            <select type="text" class="form-control" id="status" name="status" required
                                                oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                                oninput="setCustomValidity('')">
                                                <option value='<?= $apart['status']; ?>'>
                                                    <?= $apart['status']; ?>
                                                </option>
                                                <option value=""> ----Pilih---- </option>
                                                <option value="Normal">Normal</option>
                                                <option value="Expire">Expire</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_seri">No.Seri</label>
                                            <input type="text" value="<?= $apart['no_seri']; ?>" class="form-control"
                                                id="no_seri" name="no_seri" placeholder="Masukan No Seri Apart..">
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_expire">Tanggal Expire</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="tgl_expire" class="form-control pull-right"
                                                    id="datepicker" name="tgl_expire"
                                                    value="<?= date('d M Y', $apart['tanggal_expire']); ?>"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="catatan">Catatan</label>
                                            <textarea type="text" class="form-control" name="catatan" id="catatan"
                                                placeholder="Silahkan di isi jika ada catatan"><?= $apart['catatan']; ?></textarea>
                                        </div>
                                    </div>


                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary"
                                            style="margin-left:15px">Simpan</button>
                                        <a href="<?= base_url('apart'); ?>" class="btn btn-danger pull-right">
                                            Kembali</a>
                                    </div>
                            </form>
                        </div>
                        <!-- /.box -->
                    </div>



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
    <!-- SlimScroll -->
    <script src="<?= base_url('asset/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?= base_url('asset/'); ?>bower_components/moment/min/moment.min.js"></script>
    <script src="<?= base_url('asset/'); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="<?= base_url('asset/'); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
    </script>
    <!-- FastClick -->
    <script src="<?= base_url('asset/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('asset/'); ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('asset/'); ?>dist/js/demo.js"></script>
    <script src="<?= base_url('asset/'); ?>sweetalert/sweetalert2.all.min.js"></script>

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

</body>

</html>
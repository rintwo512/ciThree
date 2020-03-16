<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Update User</title>
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
    <style>
    .navbar-brand {
        font-family: 'Courier New', Courier, monospace;
        font-size: 50px;
        text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.8);
    }

    .navbar-brand b {
        color: red;
    }

    .content-wrapper {
        background: #aeaeae !important;
    }

    .form-group label {
        color: #000;
        font-size: 15px;
        padding-left: 5px;
    }

    .form-control {
        color: #000 !important;
        font-size: 15px;
        outline: none;
        border: 1px solid #aeaeae;
        border-radius: 5px;

    }

    .box {
        box-shadow: -5px -5px 10px rgba(255, 255, 255, 0.05),
            5px 5px 15px rgba(0, 0, 0, 0.8);
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


                    <!-- left column -->
                    <div class="col-md-6" style="left: 25%">
                        <!-- general form elements -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title" style="padding-left:40%">Update Data User</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" method="post"
                                action="<?= base_url('data_users/update/') . $users_update['id']; ?>">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="hidden" name="id" id="id" value="<?= $users_update['id']; ?>">
                                        <input type="text" name="nama" class="form-control" id="nama"
                                            value="<?= $users_update['nama']; ?>" required
                                            oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                            oninput="setCustomValidity('')">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="loker">Loker</label>
                                        <input type="text" name="loker" class="form-control" id="loker"
                                            value="<?= $users_update['loker']; ?>" required
                                            oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                            oninput="setCustomValidity('')">
                                        <?= form_error('loker', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" name="nik" class="form-control" id="nik"
                                            value="<?= $users_update['nik']; ?>" required
                                            oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                            oninput="setCustomValidity('')" readonly>
                                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="posisi">Posisi</label>
                                        <input type="text" name="posisi" class="form-control" id="posisi"
                                            value="<?= $users_update['posisi']; ?>" required
                                            oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                            oninput="setCustomValidity('')">
                                        <?= form_error('posisi', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="level">Level</label>
                                        <select type="text" name="level" class="form-control" id="level" required
                                            oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                            oninput="setCustomValidity('')">
                                            <?php if ($users_update['level'] == "Admin") : ?>
                                            <option value="<?= $users_update['level']; ?>">
                                                <?= $users_update['level']; ?></option>
                                            <option>User</option>
                                            <?php else : ?>
                                            <option value="<?= $users_update['level']; ?>">
                                                <?= $users_update['level']; ?></option>
                                            <option>Admin</option>
                                            <?php endif; ?>
                                        </select>
                                        <?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select type="text" name="status" class="form-control" id="status" required
                                            oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                            oninput="setCustomValidity('')">
                                            <?php if ($users_update['status'] == "Aktif") : ?>
                                            <option value='<?= $users_update['status']; ?>'>
                                                <?= $users_update['status']; ?></option>
                                            <option>Tidak Aktif</option>
                                            <?php else : ?>
                                            <option value='<?= $users_update['status']; ?>'>
                                                <?= $users_update['status']; ?></option>
                                            <option>Aktif</option>
                                            <?php endif; ?>
                                        </select>
                                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="<?= base_url('data_users'); ?>" type="submit"
                                        class="btn btn-danger pull-right">Back</a>
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
    <!-- SlimScroll -->
    <script src="<?= base_url('asset/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url('asset/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('asset/'); ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('asset/'); ?>dist/js/demo.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Profile <?= $user['level']; ?></title>
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
        <h1>
            <?= $user['level']; ?> Profile
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>

        <?php if ($this->session->has_userdata('alert')) { ?>
        <div class="alert alert-danger alert-dismissible" id="alert">
            <h5><i class="icon fa fa-ban"></i> <?= $this->session->flashdata('alert'); ?></h5>
        </div>
        <?php } ?>


        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle"
                            src="<?= base_url('asset/dist/img/') . $user['foto']; ?>" alt="User profile picture">

                        <h3 class="profile-username text-center"><?= $user['nama']; ?></h3>

                        <p class="text-muted text-center"><?= $user['posisi']; ?></p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tentang Saya</h3>
                    </div>
                    <!-- /.box-header -->
                    <form action="<?= base_url('admin/tentang/') . $user['id']; ?>" method="post">
                        <div class="box-body">

                            <strong><i class="fa fa-book margin-r-5"></i> Pendidikan</strong>
                            <p class="text-muted"><input style="outline: none; border:none;" type="text"
                                    name="pendidikan" id="pendidikan" value="<?= $user['pendidikan']; ?>"
                                    autocomplete="off"></p>
                            <hr>
                            <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
                            <p class="text-muted"><input style="outline: none; border:none;" type="text" name="alamat"
                                    id="alamat" value="<?= $user['alamat']; ?>" autocomplete="off"></p>
                            <hr>
                            <strong><i class="fa fa-phone margin-r-5"></i> No.Hp</strong>
                            <p class="text-muted"><input style="outline: none; border:none;" type="text" name="hp"
                                    id="hp" value="<?= $user['hp']; ?>" autocomplete="off"></p>
                            <?= form_error('hp', '<small class="text-danger pl-3">', '</small>'); ?>
                            <hr>
                            <strong><i class="fa fa-pencil margin-r-5" style="margin-bottom:10px;"></i> Skills</strong>
                            <p>
                                <input style="outline: none; border:none;" type="text" name="skil" id="skil"
                                    value="<?= $user['skil']; ?>" autocomplete="off">
                            </p>
                            <hr>
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Catatan</strong>
                            <p><input style="outline: none; border:none;" type="text" name="catatan" id="catatan"
                                    value="<?= $user['catatan']; ?>" autocomplete="off"></p>

                        </div>
                        <!-- /.box-body -->
                        <hr style="width: 90%">
                        <div class="box-footer">

                            <button type="submit" class="btn btn-primary" style="width: 100%">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <!-- <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li> -->
                        <li class="active"><a href="#profile" data-toggle="tab">Edit Profile</a></li>
                        <li><a href="#password" data-toggle="tab">Edit Password</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="profile">


                            <?= form_open_multipart('admin/profile'); ?>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                        value="<?= $user['email']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama"
                                        value="<?= $user['nama']; ?>" required
                                        oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-1">Foto</div>
                                    <div class="col-sm-11">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img style="margin-bottom:10px"
                                                    src="<?= base_url('asset/dist/img/') . $user['foto']; ?>"
                                                    class="img-thumbnail">

                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="foto" id="foto">
                                                    <label for="foto" class="custom-file-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="box-footer">

                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>





                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="password">
                            <form class="form-horizontal" method="post"
                                action="<?= base_url('admin/ubah_password'); ?>">
                                <div class="form-group">
                                    <label for="password_lama" class="col-sm-2 control-label">Password Lama</label>

                                    <div class="col-sm-10">
                                        <input type="password" name="password_lama" class="form-control"
                                            id="password_lama" placeholder="*************" required
                                            oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                            oninput="setCustomValidity('')">

                                        <?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password_baru" class="col-sm-2 control-label">Password Baru</label>

                                    <div class="col-sm-10">
                                        <input type="password" name="password_baru" class="form-control"
                                            id="password_baru" placeholder="*************" required
                                            oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                            oninput="setCustomValidity('')">
                                        <?= form_error('password_baru', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="konfirmasi_password" class="col-sm-2 control-label">Konfirmasi
                                        Password</label>

                                    <div class="col-sm-10">
                                        <input type="password" name="konfirmasi_password" class="form-control"
                                            id="konfirmasi_password" placeholder="*************" required
                                            oninvalid="this.setCustomValidity('Field tidak boleh kosong')"
                                            oninput="setCustomValidity('')">
                                        <?= form_error('konfirmasi_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->



    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url('asset/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('asset/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/'); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/'); ?>dist/js/demo.js"></script>
<script src="<?= base_url('asset/'); ?>sweetalert/sweetalert2.all.min.js"></script>
<script src="<?= base_url('asset/'); ?>sweetalert/skripsukses.js"></script>

<script>
$(document).ready(function() {
    $('#alert').on('click', function() {
        $('#alert').hide(2000);
    });


});
</script>
</body>

</html>
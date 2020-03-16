<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Page</title>
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
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>plugins/iCheck/square/blue.css">


</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="<?= base_url('asset/'); ?>index2.html"><b>Register</b></a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="<?= base_url('auth/register'); ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" value="<?= set_value('nama'); ?>" name="nama"
                        placeholder="Full name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" value="<?= set_value('email'); ?>" name="email"
                        placeholder="Email Addres">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" value="<?= set_value('password1'); ?>" name="password1"
                        placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" value="<?= set_value('password2'); ?>" name="password2"
                        placeholder="Confirm password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <script src="<?= base_url('asset/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url('asset/'); ?>plugins/iCheck/icheck.min.js"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
    </script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrasi</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>bower_components/Ionicons/css/ionicons.min.css">

    <style>
    * {
        margin: 0;
        padding: 0;
        /* box-sizing: border-box; */
        font-family: 'Courier New', Courier, monospace;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url('../asset/dist/img/bg.jpg');
        /* background-position: center; */
        background-repeat: no-repeat;
        background-size: cover;


    }

    .form {
        position: absolute;
        top: 10%;
        margin-bottom: 10px;
        width: 500px;
        padding: 40px 40px 60px;
        background: rgba(100, 100, 100, 0.5);
        border-top-left-radius: 100px;
        border-bottom-right-radius: 100px;
        border-top-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border: 2px solid red;
        text-align: center;
        box-shadow: -5px -5px 10px rgba(255, 255, 255, 0.05),
            5px 5px 15px rgba(0, 0, 0, 0.5);
    }


    .form .input {
        text-align: left;
        margin-top: 50px;
    }

    .form .input .inputBox {
        margin-bottom: 10px;

    }

    .form .input .inputBox input {
        width: 100%;
        height: 35px;
        background: none;
        background: rgba(10, 10, 10, 0.5);
        outline: none;
        border-radius: 40px;
        padding: 5px 15px;
        color: #fff;
        font-size: 18px;
        color: #fff;
        box-shadow: inset -2px -2px 6px rgba(255, 255, 255, 0.05),
            inset 2px 2px 6px rgba(0, 0, 0, 0.8);
    }

    .form .input .inputBox select {
        width: 100%;
        height: 35px;
        background: rgba(10, 10, 10, 0.5);
        border: none;
        outline: none;
        border-radius: 40px;
        padding: 5px 15px;
        text-align: center;
        color: red;
        font-size: 18px;
        color: #fff;
        box-shadow: inset -2px -2px 6px rgba(255, 255, 255, 0.1),
            inset 2px 2px 6px rgba(0, 0, 0, 0.8);
    }

    .opt {
        text-align: center !important;
        color: red !important;
    }

    .form .input .inputBox input[type="submit"] {
        margin-top: 20px;
        background: rgba(200, 0, 0, 0.6);
        box-shadow: -2px -2px 6px rgba(255, 255, 255, 0.1),
            2px 2px 6px rgba(0, 0, 0, 0.8);
    }

    .form .input .inputBox input[type="submit"]:active {
        color: #000;
        margin-top: 20px;
        background: rgba(0, 200, 0, 0.6);
        box-shadow: inset -2px -2px 6px rgba(255, 255, 255, 0.1),
            inset 2px 2px 6px rgba(0, 0, 0, 0.8);
    }

    .form .input .inputBox input::placeholder {
        color: #fff;
        font-size: 18px;
    }

    .forgot {
        font-size: 20px;
        margin-left: 100px;
        color: #000;
    }

    .forgot a {
        color: red;
        text-decoration: none;

    }

    .cb2 {
        position: relative;
        display: block;
        left: 40%;
        margin-top: -30px;
    }

    .checkbox {
        color: red;

    }
    </style>

</head>

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>

<body>
    <div class="form">

        <form action="<?= base_url('auth/register'); ?>" method="post">
            <div class="input">
                <div class="inputBox">
                    <input type="text" value="<?= set_value('nama'); ?>" placeholder="Nama" name="nama" required
                        oninvalid="this.setCustomValidity('Field nama tidak boleh kosong')"
                        oninput="setCustomValidity('')" autocomplete="off">
                    <span id="nama" class="form-control-feedback"></span>
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="inputBox">
                    <input type="text" value="<?= set_value('email'); ?>" placeholder="Alamat Email" name="email"
                        required oninvalid="this.setCustomValidity('Field email tidak boleh kosong')"
                        oninput="setCustomValidity('')" autocomplete="off">
                    <span id="loker" class="form-control-feedback"></span>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="inputBox">
                    <input type="text" value="<?= set_value('loker'); ?>" placeholder="Lokasi Kerja" name="loker"
                        required oninvalid="this.setCustomValidity('Field loker tidak boleh kosong')"
                        oninput="setCustomValidity('')" autocomplete="off">
                    <span id="email" class="form-control-feedback"></span>
                    <?= form_error('loker', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="inputBox">
                    <input type="text" value="<?= set_value('nik'); ?>" placeholder="NIK" name="nik" required
                        oninvalid="this.setCustomValidity('Field NIK tidak boleh kosong')"
                        oninput="setCustomValidity('')" autocomplete="off">
                    <span id="nik" class="form-control-feedback"></span>
                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="inputBox">
                    <input type="text" value="<?= set_value('posisi'); ?>" placeholder="Posisi saat ini" name="posisi"
                        required oninvalid="this.setCustomValidity('Field posisi tidak boleh kosong')"
                        oninput="setCustomValidity('')" autocomplete="off">
                    <span id="posisi" class="form-control-feedback"></span>
                    <?= form_error('posisi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="inputBox">
                    <select type="checkbox" name="level" required
                        oninvalid="this.setCustomValidity('Field level tidak boleh kosong')"
                        oninput="setCustomValidity('')" autocomplete="off">
                        <option class="opt" value=""> ---- Pilih Level ---- </option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                    <?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="inputBox">
                    <input type="password" name="password1" placeholder="Password" required
                        oninvalid="this.setCustomValidity('Field password tidak boleh kosong')"
                        oninput="setCustomValidity('')">
                    <span class="form-control-feedback"></span>
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="inputBox">
                    <input type="password" name="password2" placeholder="Konfirmasi Password" required
                        oninvalid="this.setCustomValidity('Field konfirmasi password tidak boleh kosong')"
                        oninput="setCustomValidity('')">
                    <span class="form-control-feedback"></span>
                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="inputBox">
                    <input type="submit" value="Submit">
                </div>

                <p class="forgot">Kembali ke <a href="<?= base_url('admin'); ?>">Dashboard</a></p>
        </form>
    </div>
    <script src="<?= base_url('asset/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('asset/'); ?>sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('asset/'); ?>sweetalert/skripsaya.js"></script>



</body>

</html>
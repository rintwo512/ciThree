<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/') ?>bower_components/Ionicons/css/ionicons.min.css">

    <style>
    * {
        outline: none;
        font-family: 'Courier New', Courier, monospace;

    }

    body {

        background-image: url(asset/dist/img/jem.jpg);
        background-position: center;
        background-size: cover;

    }

    .form {
        background: rgba(0, 0, 0, 0.7);
        margin: 60px 60px;
        width: 380px;
        height: 510px;
        border-top-right-radius: 10%;
        border-bottom-left-radius: 10%;

    }

    .box {
        position: relative;
        background: rgba(155, 155, 155, 0.5);
        margin: 10px;
        top: 10px;
        box-shadow: inset -5px -5px 10px rgba(10, 10, 10, 0.5),
            inset 5px 5px 10px rgba(0, 0, 0, 0.8);
        border-top-right-radius: 10%;
        border-bottom-left-radius: 10%;
    }

    .box img {
        margin: 15px 115px;
        left: 50%;
        width: 140px;
        height: 140px;
    }

    .box h1 {
        text-transform: uppercase;
        text-align: center;
        font-size: 40px;
        color: #f00;
        -webkit-text-stroke: 2px #000;
        font-weight: bold;
        letter-spacing: 0.2em;
    }

    input[type="text"],
    input[type="password"] {
        width: 90%;
        text-align: center;
        padding: 10px 15px;
        margin: 5px 20px;
        font-size: 20px;
        border: none;
        border-radius: 24px;
        background: #333;
        box-shadow: inset -3px -3px 5px rgba(255, 255, 255, 0.05),
            inset 3px 3px 5px rgba(0, 0, 0, 0.8);
        color: #4169E1;
        font-weight: bolder;

    }

    input[type="submit"] {
        margin: 15px 55px 30px;
        padding: 10px 12px;
        border-radius: 24px;
        font-size: 20px;
        font-weight: bold;
        width: 70%;
        letter-spacing: 0.3em;
        color: #fff;
        cursor: pointer;
        background: red;
        box-shadow: -3px -3px 6px rgba(255, 255, 255, 0.1),
            3px 3px 6px rgba(0, 0, 0, 0.8);
    }


    input[type="submit"]:active {
        background-color: #00FF7F;
        color: transparent;
        box-shadow: inset -2px -2px 6px rgba(255, 255, 255, 0.1),
            inset 2px 2px 6px rgba(0, 0, 0, 0.8);
    }

    .forget {
        text-align: center;
        margin-top: 18px;
        color: #fff;
        font-size: 20px;
    }

    .forget a {
        color: #4169E1;
        font-weight: bold;
        font-size: 20px;
        text-decoration: none;
    }

    ::placeholder {
        letter-spacing: 0.3em;
        font-size: 20px;
        color: #333;
        text-shadow: -1px -1px 2px rgba(255, 255, 255, 0.05),
            1px 1px 2px rgba(0, 0, 0, 0.8);
    }


    </style>

</head>

<body>

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
    <form class="form" action="<?= base_url('auth'); ?>" method="post">
        <div class="box">
            <img src="<?= base_url('asset/dist/img/logo-webtech.png'); ?>" alt="">
            <h1>login</h1>

            <input type="text" value="<?= set_value('email'); ?>" placeholder="Username" name="email" required
                oninvalid="this.setCustomValidity('Masukan Username Anda !')" oninput="setCustomValidity('')"
                autocomplete="off">
            <!-- <?= form_error('email', '<small class="text-default pl-5">', '</small>'); ?> -->

            <div>
                <input type="password" name="password" placeholder="********" required
                    oninvalid="this.setCustomValidity('Masukan Password Anda !')" oninput="setCustomValidity('')">
                <!-- <?= form_error('password', '<small class="text-danger ml-3">', '</small>'); ?> -->
            </div>
            <input type="submit" value="Sign In">
        </div>
        <p class="forget">Lupa Password ? <a href="" id="forgot_pass">Disini</a></p>
    </form>

    <script src="<?= base_url('asset/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('asset/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('asset/'); ?>sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('asset/'); ?>sweetalert/skripsaya.js"></script>

    <script>
    $(document).ready(function() {
        $(document).on('click', '#forgot_pass', function(e) {
            e.preventDefault();
            Swal.fire({
                type: 'error',
                title: 'Maaf...',
                text: 'Silahkan Hubungi Admin !'
            });
        });
    });
    </script>


</body>

</html>
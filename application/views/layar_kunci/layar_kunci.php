<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Layar Kunci</title>



    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('asset/'); ?>dashio/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url('asset/'); ?>dashio/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?= base_url('asset/'); ?>dashio/css/style.css" rel="stylesheet">
    <link href="<?= base_url('asset/'); ?>dashio/css/style-responsive.css" rel="stylesheet">


</head>

<body onload="getTime()">
    <div class="container">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
        <div id="showtime"></div>
        <div class="col-lg-4 col-lg-offset-4">
            <div class="lock-screen">
                <h2><a data-toggle="modal" href="#myModal"><i class="fa fa-lock"></i></a></h2>
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"
                    class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><?= $user['nama']; ?></h4>
                            </div>
                            <form action="<?= base_url('kunci_layar'); ?>" method="post">
                                <div class="modal-body">
                                    <p class="centered"><img class="img-circle" width="80"
                                            src="<?= base_url('asset/dist/img/') . $user['foto']; ?>"></p>
                                    <input type="password" name="password" placeholder="Password" id="password"
                                        autocomplete="off" class="form-control placeholder-no-fix" required
                                        oninvalid="this.setCustomValidity('Harus di isi !')"
                                        oninput="setCustomValidity('')">
                                </div>
                                <div class="modal-footer centered">
                                    <button data-dismiss="modal" class="btn btn-theme04" type="button">Batal</button>
                                    <button class="btn btn-theme03" type="submit">Buka Kunci</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- modal -->
            </div>
            <!-- /lock-screen -->
        </div>
        <!-- /col-lg-4 -->
    </div>
    <!-- /container -->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('asset/'); ?>dashio/lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url('asset/'); ?>dashio/lib/bootstrap/js/bootstrap.min.js"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?= base_url('asset/'); ?>dashio/lib/jquery.backstretch.min.js"></script>
    <script src="<?= base_url('asset/'); ?>sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('asset/'); ?>sweetalert/skripsaya.js"></script>
    <script>
    $.backstretch("<?= base_url('asset/'); ?>dashio/img/bg2.jpg", {
        speed: 500
    });
    </script>
    <script>
    function getTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        // add a zero in front of numbers<10
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('showtime').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function() {
            getTime()
        }, 500);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    </script>
</body>

</html>
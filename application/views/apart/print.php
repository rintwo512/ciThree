<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>print</title>
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

    <style>
    thead {
        border: 1px solid #000;
        background-color: rgba(10, 10, 10, 0.5);
    }

    th {
        border: 1px solid #000;
        color: #fff;
    }

    #td {

        border: 1px solid #000;
        background-color: #fff;
    }

    #total1 {
        border-left: 1px solid #000;
        border-bottom: 1px solid #000;
    }

    #total2 {
        border-bottom: 1px solid #000;

    }

    #total3 {
        border-bottom: 1px solid #000;
        border-right: 1px solid #000;

    }
    </style>


</head>

<body onload="window.print();">
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">


            <h3 style="padding-left:40%">Data Apart</h3>
            <p>Gedung Tireg 7</p>
            <p>A.P Pettarani No.02</p>
            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="text-align: center">Pemilik Asset</th>
                                <th style="text-align: center">Wing</th>
                                <th style="text-align: center">Lantai</th>
                                <th style="text-align: center">Lokasi</th>
                                <th style="text-align: center">Merk</th>
                                <th style="text-align: center">Jenis</th>
                                <th style="text-align: center">Kapasitas</th>
                                <th style="text-align: center">Seri</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Keterangan</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $ap) : ?>
                            <tr style="text-align: center">
                                <td id="td"><?= $ap['aset']; ?></td>
                                <td id="td"><?= $ap['wing']; ?></td>
                                <td id="td"><?= $ap['lantai']; ?></td>
                                <td id="td"><?= $ap['lokasi']; ?></td>
                                <td id="td"><?= $ap['merk']; ?></td>
                                <td id="td"><?= $ap['jenis']; ?></td>
                                <td id="td"><?= $ap['berat']; ?></td>
                                <td id="td"><?= $ap['no_seri']; ?></td>
                                <td id="td"><?= $ap['status']; ?></td>
                                <td id="td"><?= $ap['catatan']; ?></td>

                            </tr>
                            <?php endforeach; ?>
                            <tr style="text-align: center">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td id="total1" style="background-color: red;color:#fff;">Total</td>
                                <td id="total2" style="background-color: red;color:#fff;"></td>
                                <td id="total3" style="background-color: red; color:#fff;"><?= $total; ?> Unit</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->


        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
</body>

</html>
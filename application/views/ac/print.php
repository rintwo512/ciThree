<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Print</title>
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

    td {

        border: 1px solid #000;
        background-color: #fff;
    }

    #tr {
        border: none;
    }
    </style>


</head>

<body onload="window.print();">
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">

            <h3 style="padding-left:40%">Data Air Conditioner</h3>
            <p>Gedung Tireg 7</p>


            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12">
                    <table class=" table">
                        <thead>
                            <tr>
                                <th style="text-align: center">Asset</th>
                                <th style="text-align: center">Wing</th>
                                <th style="text-align: center">Lantai</th>
                                <th style="text-align: center">Lokasi</th>
                                <th style="text-align: center">Merk</th>
                                <th style="text-align: center">Type</th>
                                <th style="text-align: center">Jenis</th>
                                <th style="text-align: center">Status</th>
                                <th style="text-align: center">Kapasitas</th>
                                <th style="text-align: center">Refrigerant</th>
                                <th style="text-align: center">Status Kompresor</th>
                                <th style="text-align: center">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $ac) : ?>
                            <tr style="text-align: center">
                                <td><?= $ac['asset']; ?></td>
                                <td><?= $ac['wing']; ?></td>
                                <td><?= $ac['lantai']; ?></td>
                                <td><?= $ac['lokasi']; ?></td>
                                <td><?= $ac['merk']; ?></td>
                                <td><?= $ac['type']; ?></td>
                                <td><?= $ac['jenis']; ?></td>
                                <td><?= $ac['status']; ?></td>
                                <td><?= $ac['kapasitas']; ?></td>
                                <td><?= $ac['refrigerant']; ?></td>
                                <td><?= $ac['st_kompresor']; ?></td>
                                <td></td>
                            </tr>
                            <?php endforeach; ?>
                            <tr style="text-align: center">
                                <td id="tr"></td>
                                <td id="tr"></td>
                                <td id="tr"></td>
                                <td id="tr"></td>
                                <td id="tr"></td>
                                <td id="tr"></td>
                                <td id="tr"></td>
                                <td id="tr"></td>
                                <td id="tr"></td>
                                <td id="tr"></td>
                                <td style="background:red; color:#fff">TOTAL</td>
                                <td style="background:red; color:#fff"><?= $total_apart; ?> Unit</td>
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
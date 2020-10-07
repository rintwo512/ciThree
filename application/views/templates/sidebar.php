<style>
#li:hover {
    color: greenyellow !important;
    border-left: 3px solid greenyellow;
    border-right: 3px solid greenyellow;

}

.logout:hover {
    color: red !important;
    border-left: 3px solid red;
    border-right: 3px solid red;
}

.aktif {
    color: greenyellow !important;
    border-left: 3px solid greenyellow !important;
    border-right: 3px solid greenyellow;
}
</style>
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url('asset/dist/img/') . $user['foto']; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p style="font-family: 'Courier New'"><?= $user['nama'] ?></p>
                <a href=""><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header text-center" style="color:aqua; font-size:20px; font-family:Courier">Menu
                <?= $user['level']; ?>
            </li>

            <li id="li">
                <a href="<?= base_url('admin'); ?>">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
            </li>
            <li id="li">
                <a href="<?= base_url('admin/profile'); ?>">
                    <i class="fa fa-user"></i> <span>Profile</span>
                </a>
            </li>
            <li class="treeview" id="li">
                <a href="#">
                    <i class="fa fa-laptop"></i> <span>Data Perangkat</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url('ac'); ?>"><i class="fa fa-circle-o  text-aqua"></i> Air Conditioner</a>
                    </li>
                    <li><a href="<?= base_url('apart'); ?>"><i class="fa fa-circle-o text-aqua"></i> Apart </a>
                    </li>
                </ul>
            </li>
            <?php if ($user['level'] == "Admin") : ?>
            <li class="treeview" id="li">
                <a href="#">
                    <i class="fa fa-bar-chart"></i> <span>Grafik</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="<?= base_url('chart_ac'); ?>"><i class="fa fa-circle-o  text-aqua"></i>Update
                            Grafik</a>
                    </li>
                    <li><a href="<?= base_url('chart_ac/tampil'); ?>"><i class="fa fa-circle-o text-aqua"></i>Grafik
                            Maintenance AC</a>
                    </li>
                </ul>
            </li>
            <li class="treeview" id="li">
                <a href="#">
                    <i class="fa fa-user-plus"></i> <span>Pengguna</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url('data_users'); ?>"><i class="fa fa-circle-o text-aqua"></i> Data
                            Pengguna</a>

                    </li>
                    <li><a href="<?= base_url('auth/register'); ?>"><i class="fa fa-circle-o text-aqua"></i>
                            <span>Tambah Pengguna</span></a></li>
                </ul>
            </li>
            <?php endif; ?>
            <?php if ($user['level'] != "Admin") : ?>
            <li class="treeview" id="li">
                <a href="#">
                    <i class="fa fa-bar-chart"></i> <span>Grafik</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">


                    <li><a href="<?= base_url('chart_ac/tampil'); ?>"><i class="fa fa-circle-o text-aqua"></i>Grafik
                            Maintenance AC</a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>

            <li id="li"><a href="<?= base_url('kunci_layar'); ?>"><i class="fa fa-lock"></i><span>Kunci Layar</span></a>
            </li>

            <li class="logout">
                <a id="logout" href="<?= base_url('auth/logout'); ?>"><i
                        class="fa fa-sign-out"></i><span>Keluar</span></a>
            </li>


            <li id="time" class="header text-center" style="color:aqua;  font-size:25px; font-family:'Courier New'">
            </li>
            <li class="text-center" style="color:aqua;  font-size:15px; font-family:'Courier New'">
                <?= date('l,d M Y'); ?>
            </li>
            <!-- data-toggle="modal" data-target="#modal-default" -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<script src="<?= base_url('asset/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('asset/'); ?>sweetalert/sweetalert2.all.min.js"></script>
<script>
$(document).ready(function() {
    $(document).on('click', '#logout', function(e) {
        const href = $(this).attr('href')
        e.preventDefault();
        Swal.fire({
            title: 'Yakin ingin keluar ?',
            imageUrl: "<?= base_url('asset/dist/img/jem.jpg'); ?>",
            imageWidth: 500,
            imageHeight: 250,
            imageAlt: 'Custom image'

        }).then((result) => {
            if (result.value) {
                document.location.href = href;

            }
        });
    });
});
</script>
<script type="text/javascript">
function showTime() {
    var a_p = "";
    var today = new Date();
    var curr_hour = today.getHours();
    var curr_minute = today.getMinutes();
    var curr_second = today.getSeconds();

    if (curr_hour < 12) {
        a_p = "AM";
    } else {
        a_p = "PM";
    }

    if (curr_hour == 0) {
        curr_hour = 12;
    }

    // if (curr_hour == 12) {
    //     curr_hour = curr_hour + 12;
    // }
    curr_hour = checkTime(curr_hour);
    curr_minute = checkTime(curr_minute);
    curr_second = checkTime(curr_second);
    document.getElementById('time').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

setInterval(showTime, 500);
</script>
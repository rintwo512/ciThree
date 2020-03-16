<style>
.logo-mini,
.logo-lg {
    font-family: 'Courier New', Courier, monospace;
    font-size: 50px;
    text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.8);

}


.logo-lg b {
    color: red;
}

.logo-mini b {
    color: red;
}

.navbar-static-top {
    background: greenyellow !important;
}

.logo {
    background: greenyellow !important;

}
</style>

<body class="hold-transition skin-blue fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?= base_url('asset/'); ?>index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>W</b>T</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Web</b>Tech</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" style="color:black" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i style="color:black" class="fa fa-envelope-o"></i>
                                <span class="label label-danger">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?= base_url('asset/dist/img/') . $user['foto']; ?>"
                                                        class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    <?= $user['nama']; ?>
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->

                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="#" style="color:black" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span class="hidden-xs"><?= $user['nama']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?= base_url('asset/dist/img/') . $user['foto']; ?>" class="img-circle"
                                        alt="User Image">
                                    <p>
                                        <?= $user['nama']; ?> - Admin
                                        <small>Bergabung Sejak <?= date('M Y') ?></small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?= base_url('admin/profile'); ?>" class="btn btn-info">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" data-toggle="modal" data-target="#modal-default"
                                            class="btn btn-danger">Keluar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" style="color: black" data-toggle="control-sidebar"><i
                                    class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
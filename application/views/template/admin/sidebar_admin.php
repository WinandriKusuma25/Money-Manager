<style>
nav-treeview:hover {
    color: #28a745;
}
</style>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo base_url() . 'admin/home' ?>" class="nav-link">Home</a>
                </li>
            </ul>

            <!--<ul class="navbar-nav ml-auto">
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <img src="<?php echo base_url() . 'asset/images/logo_admin.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
    <span class="m-0 text-light">Admin</span>
        
    </ul> -->

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo base_url() . 'login/logout' ?>" class="m-0 text-light">
                        <mute><span class="m-0 text-light">Logout</span></mute>
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                </li>

        </nav>



        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-blue elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url() . 'admin/home' ?>" class="brand-link">
                <img src="<?php echo base_url() . 'asset/images/logo_money_manager.png' ?>" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Money Manager</span>
            </a>

            <!-- Brand Logo -->
            <a href="<?php echo base_url() . 'admin/profile' ?>" class="brand-link">
                <?php foreach ($user as $pmj) : ?>
                <img src="<?= base_url('asset/upload/admin/') . $pmj->foto_profil ?>" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <?php endforeach ?>
                <span class="brand-text font-weight-light">Hallo, <?php echo
                                                            $this->session->userdata('username');
                                                          ?></span>
            </a>



            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'admin/home' ?>"
                                class="nav-link <?= activate_menu('home') ?>" id="navHome">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>

                        </li>

                        <li class="nav-item ">
                            <a href="<?php echo base_url() . 'admin/profile' ?>"
                                class="nav-link <?= activate_menu('profile') ?>" id="navHome">
                                <i class="nav-icon fas fa-user-tie"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>

                        <li class="nav-item <?= activate_menu('user') ?>">
                            <a href="<?php echo base_url() . 'admin/user' ?>"
                                class="nav-link <?= activate_menu('user') ?>" id="navHome">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    User
                                </p>
                            </a>
                        </li>


                        <li class="nav-item <?= activate_menu('berita') ?>">
                            <a href="<?php echo base_url() . 'admin/berita' ?>"
                                class="nav-link <?= activate_menu('berita') ?>" id="navHome">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Berita
                                </p>
                            </a>
                        </li>



                        <!--<li class="nav-item">
           <a href="<?php echo base_url() . 'login/logout'; ?>" class="nav-link" id="navHome">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li> -->



                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
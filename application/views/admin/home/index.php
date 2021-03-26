<link rel="icon" href="<?php echo base_url() . 'asset/images/logo_money_manager.png' ?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-primary"><i class="nav-icon fas fa-chart-line"></i>&nbsp;Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="m-0 text-muted"><a>Home /&nbsp; </a></li>
                        <li class="m-0 text-primary">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5><i class="fas fa-info"></i> Selamat Datang</h5>
                        <div class="alert alert-secondary" role="alert">
                            Berikut merupakan dashboard Admin Website Money Manager
                            <?php
              echo "<br/>";

              //kombinasi format tanggal dan jam
              echo date('l, d-m-Y');
              ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?php echo $this->db->get_where('user', array('level' => 'user'))->num_rows() ?>
                                </h3>
                                <p>Registrasi User</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-stalker"></i>
                            </div>
                            <a href="<?php echo base_url() . 'admin/user/' ?>" class="small-box-footer">Detail Info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?php echo $this->db->get_where('user', array('level' => 'user', 'status' => 'pasif'))->num_rows() ?>
                                </h3>
                                <p>User Belum Aktif</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                            <a href="<?php echo base_url() . 'register/tabel_register/' ?>"
                                class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?php echo $this->db->get_where('user', array('level' => 'user', 'status' => 'aktif'))->num_rows() ?>
                                </h3>

                                <p>User Aktif</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="<?php echo base_url() . 'register/tabel_register_aktif/' ?>"
                                class="small-box-footer">Detail info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?php echo $this->db->get('berita')->num_rows() ?></h3>
                                <p>Berita</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-clipboard"></i>
                            </div>
                            <a href="<?php echo base_url() . 'admin/berita/' ?>" class="small-box-footer">Detail info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->











                <!-- Main content -->

            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">

                            <div class="card">

                                <div class="d-flex justify-content-between">

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
</div>
<!-- /.content-wrapper -->
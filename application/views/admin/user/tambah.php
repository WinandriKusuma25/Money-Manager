<!-- Favicon -->
<link rel="icon" href="<?php echo base_url() . 'asset/images/logo_money_manager.png' ?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-primary"><i class="fas fa-users"></i>&nbsp;User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="m-0 text-muted"><a>Dashboard /&nbsp; </a></li>
                        <li class="m-0 text-muted">&nbsp;User /&nbsp; </li>
                        <li class="m-0 text-primary">&nbsp;Form Tambah Data User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="callout callout-info">
                                <div class="alert alert-secondary" role="alert">
                                    Berikut merupakan form tambah user yang ada dalam Website Money Manager, pastikan
                                    data terisi dengan lengkap !
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card card-primary">
                            <div class="card-header">
                                Form Tambah Data User
                            </div>
                            <div class="card-body">


                                <!--<?php if (validation_errors()) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= validation_errors(); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  
                  <?php endif; ?> -->
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nim">Nama</label>
                                        <div class="m-0 text-danger"> <small><?= form_error('nama') ?></small></div>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            value="<?= set_value('nama') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nim">Email</label>
                                        <div class="m-0 text-danger"> <small><?= form_error('email') ?></small></div>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="<?= set_value('email') ?>">
                                    </div>


                                    <div class="form-group">
                                        <label for="nim">No Telp</label>
                                        <div class="m-0 text-danger"> <small><?= form_error('no_telp') ?></small></div>
                                        <input type="number" class="form-control" id="email" name="no_telp"
                                            value="<?= set_value('no_telp') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nim">Foto Profil</label>
                                        <div class="m-0 text-danger"> <small><?= form_error('foto_profil') ?></small>
                                        </div>
                                        <input type="file" class="form-control" id="foto_profil" name="foto_profil"
                                            required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="nim">Foto KTP</label>
                                        <!--<div class="m-0 text-danger"> <small><?= form_error('foto_ktp') ?></small></div>-->
                                        <input type="file" class="form-control" id="foto_ktp" name="foto_ktp" required
                                            autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="nim">Username</label>
                                        <!-- <div class="m-0 text-danger"> <small><?= form_error('username') ?></small></div> -->
                                        <input type="text" class="form-control" id="username" name="username"
                                            value="<?= set_value('username') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nim">Password</label>
                                        <!-- <div class="m-0 text-danger"> <small><?= form_error('password') ?></small></div>-->
                                        <input type="password" class="form-control" id="password" name="password"
                                            value="<?= set_value('username') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nim">Level</label>
                                        <div class="form-check">
                                            <input type="radio" name="level" value="admin" required> Admin
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="level" value="user" required> User
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nim">Status</label>
                                        <div class="form-check">
                                            <input type="radio" name="status" value="aktif" required> Aktif
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="status" value="pasif" required> Pasif
                                        </div>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-success "> <i
                                            class="fas fa-save"></i>&nbsp;Simpan</button>
                                    <button type="reset" name="reset" class="btn btn-warning "><i
                                            class="fas fa-sync-alt"></i>&nbsp;Reset</button>
                                    <a href="<?php echo base_url("admin/user"); ?>" class="btn btn-primary"> <i
                                            class="fas fa-arrow-left"></i>&nbsp;Kembali </a>
                                </form>
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
<link rel="icon" href="<?php echo base_url() . 'asset/images/logo_money_manager.png' ?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-primary"><i class="fas fa-user-check"></i>&nbsp;Daftar Users Aktif</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="m-0 text-muted"><a>Dashboard /&nbsp; </a></li>
                        <li class="m-0 text-muted"><a>Users /&nbsp; </a></li>
                        <li class="m-0 text-primary">Daftar User Aktif</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <!-- Tabel -->
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">

                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="callout callout-info">
                                                <h5><i class="fas fa-user-check"></i> Data Users Aktif</h5>
                                                <div class="alert alert-secondary" role="alert">
                                                    Berikut merupakan data user yang sudah aktif dalam Website Money
                                                    Manager
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class='card-header'>

                                </div>
                                <span>
                                    <br>
                                    <?php
                  if (!empty($this->session->flashdata('pesan'))) {
                  ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?= $this->session->flashdata('pesan'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php
                  }
                  ?>

                                    <?php
                  if (!empty($this->session->flashdata('pesan2'))) {
                  ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?= $this->session->flashdata('pesan2'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php
                  }
                  ?>

                                    <?php
                  if (!empty($this->session->flashdata('pesan3'))) {
                  ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <?= $this->session->flashdata('pesan3'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php
                  }
                  ?>
                                </span>

                                <table id="tabel" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                    foreach ($Registered as $reg) : ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $reg->nama  ?></td>
                                            <td><?php echo $reg->username  ?></td>
                                            <td><?php echo $reg->email  ?></td>
                                            <?php if ($reg->status == "aktif") : ?>
                                            <td class="project-state">
                                                <span class="badge badge-success"><?= $reg->status ?></span>
                                            </td>
                                            <?php else : ?>
                                            <td class="project-state">
                                                <span class="badge badge-danger"><?= $reg->status ?></span>
                                            </td>
                                            <?php endif ?>
                                            <td>
                                                <a class='btn btn-info'
                                                    href='<?= base_url() . 'admin/user/detail_aktif/' . $reg->id_user ?>'
                                                    class='btn btn-biru'>
                                                    <i class="fas fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>

                                <a href="<?= base_url("register/tabel_register") ?>" class="btn btn-primary"><i
                                        class="fas fa-user-edit"></i> &nbsp;Validasi User</a>
                                <a href="<?= base_url("admin/user") ?>" class="btn btn-primary"><i
                                        class="fas fa-arrow-left"></i> &nbsp;Kembali</a>
                                <!-- /.card-body -->
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
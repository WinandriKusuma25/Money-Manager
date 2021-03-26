<!--<br><br>
<div class="container" align="center" style="margin-left: 15rem">
    <div class="col-md-11">
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

    <h2 class="header-title" align=center style="color: #000000"> Data User yang Belum Disetujui</h2>
    <br>
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-light">
        <tr>
          <th scope="col" style="width:5%">ID</th>
          <th scope="col" style="width:10%">USERNAME</th>
          <th scope="col" style="width:10%">NAME</th>
          <th scope="col" style="width:10%">TANGGAL LAHIR</th>
          <th scope="col" style="width:10%">EMAIL</th>
          <th scope="col" style="width:10%">FOTO KTP</th>
          <th scope="col" style="width:10%">AKSI</th>
        </tr>
      </thead>
    
      <tbody style="color: #000000">
        <?php $no = 1;
        foreach ($Unreg as $un) : ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo str_word_count($un->username) > 5 ? substr($un->username, 0, 10) . "[...]" : $un->username; ?></td>
            <td><?php echo str_word_count($un->nama) > 5 ? substr($un->nama, 0, 10) . "[...]" : $un->nama; ?></td>
            <td><?php echo str_word_count($un->email) > 5 ? substr($un->email, 0, 10) . "[...]" : $un->email; ?></td>
            <td><?php echo str_word_count($un->foto_ktp) > 5 ? substr($un->foto_ktp, 0, 10) . "[...]" : $un->foto_ktp; ?></td>
            <td>
            <form action ="<?php echo base_url(); ?>register/editStatus/ <?= $un->id_user; ?>" method="post">
                <input type ="hidden" name="id_user" value="<?= $un->id_user; ?>">
                <input type ="hidden" name="status" value="aktif">
                <button class="btn btn-success" type="submit"><i class="fa fa-check"></i></button>
            </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
</div>

<br><br><br>

<div class="container" align="center" style="margin-left: 15rem">
    <div class="col-md-11">
    <h2 class="header-title" align=center style="color: #000000">Data User yang Sudah Disetujui</h2>
    <br>
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-light">
        <tr>
          <th scope="col" style="width:5%">ID</th>
          <th scope="col" style="width:10%">USERNAME</th>
          <th scope="col" style="width:10%">NAME</th>
          <th scope="col" style="width:10%">TANGGAL LAHIR</th>
          <th scope="col" style="width:10%">EMAIL</th>
          <th scope="col" style="width:10%">FOTO KTP</th>
        </tr>
      </thead>
    
      <tbody style="color: #000000">
        <?php $no = 1;
        foreach ($Registered as $reg) : ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo str_word_count($reg->username) > 5 ? substr($reg->username, 0, 10) . "[...]" : $reg->username; ?></td>
            <td><?php echo str_word_count($reg->nama) > 5 ? substr($reg->nama, 0, 10) . "[...]" : $reg->nama; ?></td>
            <td><?php echo str_word_count($reg->email) > 5 ? substr($reg->email, 0, 10) . "[...]" : $reg->email; ?></td>
            <td><?php echo str_word_count($reg->foto_ktp) > 5 ? substr($reg->foto_ktp, 0, 10) . "[...]" : $reg->foto_ktp; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>    
    </table>
  </div>
</div>
</div>
<br><br><br><br>-->

<link rel="icon" href="<?php echo base_url() . 'asset/images/logo_money_manager.png' ?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-primary"><i class="fas fa-user-edit"></i>&nbsp;Validasi Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="m-0 text-muted"><a>Dashboard /&nbsp; </a></li>
                        <li class="m-0 text-muted"><a>Users /&nbsp; </a></li>
                        <li class="m-0 text-primary">Validasi Users</li>
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
                                                <h5><i class="fas fa-user-edit"></i> Data Users Belum Aktif</h5>
                                                <div class="alert alert-secondary" role="alert">
                                                    Berikut merupakan data user yang belum di validasi / belum di
                                                    aktifkan dalam Website Money Manager
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
                    foreach ($Unreg as $un) : ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $un->nama ?>
                                            </td>
                                            <td><?php echo $un->username ?>
                                            </td>
                                            <td><?php echo $un->email ?>
                                            </td>
                                            <?php if ($un->status == "aktif") : ?>
                                            <td class="project-state">
                                                <span class="badge badge-success"><?= $un->status ?></span>
                                            </td>
                                            <?php else : ?>
                                            <td class="project-state">
                                                <span class="badge badge-danger"><?= $un->status ?></span>
                                            </td>
                                            <?php endif ?>
                                            <td>
                                                <form
                                                    action="<?php echo base_url(); ?>register/editStatus/ <?= $un->id_user; ?>"
                                                    method="post">
                                                    <input type="hidden" name="id_user" value="<?= $un->id_user; ?>">
                                                    <input type="hidden" name="status" value="aktif">
                                                    <button class="btn btn-success" type="submit">Aktifkan&nbsp;<i
                                                            class="fas fa-user-edit"></i></button>
                                                </form>


                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                                <a href="<?= base_url("register/tabel_register_aktif") ?>" class="btn btn-info"><i
                                        class="fas fa-user-check"></i> &nbsp;Daftar User Aktif</a>
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
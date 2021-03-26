<link rel="icon" href="<?php echo base_url() . 'asset/images/logo_money_manager.png' ?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-primary"><i class="fas fa-newspaper"></i>&nbsp;Berita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="m-0 text-muted"><a>Dashboard /&nbsp; </a></li>
                        <li class="m-0 text-primary">Berita</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5><i class="fas fa-newspaper"></i> Data Berita</h5>
                        <div class="alert alert-secondary" role="alert">
                            Berikut merupakan data berita yang ada dalam Website Money Manager
                        </div>
                    </div>
                </div>
            </div>
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
                                <div class='card-header'>
                                    <a class='btn btn-success' href="berita/tambah">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <span>
                                            Tambah
                                        </span>
                                    </a>

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
                                            <th>Judul</th>
                                            <th>Tgl Berita </th>
                                            <th>Pengaturan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                    foreach ($berita as $pmj) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $pmj->judul ?></td>
                                            <td><?= date('d F Y', strtotime($pmj->tgl_berita)); ?></td>
                                            <td>
                                                <!-- <a class='btn btn-danger' onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')" href="<?= base_url() . 'admin/berita/hapus/' . $pmj->id_berita ?>">
                                <i class="fa fa-trash" aria-hidden="true"></i> -->
                                                </a>
                                                <a class='btn btn-warning'
                                                    href="<?= base_url() . 'admin/berita/edit/' . $pmj->id_berita ?>">
                                                    <i class="fas fa-edit" aria-hidden="true"></i>
                                                </a>
                                                <a class='btn btn-info'
                                                    href='<?= base_url() . 'admin/berita/detail/' . $pmj->id_berita ?>'
                                                    class='btn btn-biru'>
                                                    <i class="fas fa-eye" aria-hidden="true"></i>
                                                </a>

                                                <a href="#modalDelete" data-toggle="modal"
                                                    onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/berita/hapus/' . $pmj->id_berita) ?>')"
                                                    class='btn btn-danger'>
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>

                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
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


<!-- Modal -->
<div class="modal fade" id="modalDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Konfirmasi Hapus Data</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin akan menghapus data ini?
            </div>
            <div class="modal-footer">
                <form id="formDelete" action="" method="post">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
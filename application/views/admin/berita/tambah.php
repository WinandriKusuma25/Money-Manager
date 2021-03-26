<!-- Favicon -->
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
                        <li class="m-0 text-muted">&nbsp;Berita /&nbsp; </li>
                        <li class="m-0 text-primary">&nbsp;Form Tambah Data Berita</li>
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
                                    Berikut merupakan form tambah berita yang ada dalam Website Money Manager, pastikan
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
                                Form Tambah Data Berita
                            </div>
                            <div class="card-body">



                                <!--<?php if (validation_errors()) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= validation_errors(); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  
                  <?php endif; ?>-->



                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nim">Judul</label>
                                        <input type="text" class="form-control" id="judul" name="judul" required
                                            autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="nim">Tanggal Berita</label>
                                        <input type="date" class="form-control" id="tgl_berita" name="tgl_berita"
                                            required autofocus>

                                    </div>

                                    <div class="form-group">
                                        <label for="nim">Foto Berita</label>
                                        <input type="file" class="form-control" id="foto_berita" name="foto_berita"
                                            required autofocus>

                                    </div>

                                    <div class="form-group">
                                        <label for="nim">Deskripsi</label>
                                        <textarea name="deskripsi" id="deskripsi" cols="50" rows="" class="form-control"
                                            required autofocus></textarea>
                                    </div>

                                    <!-- tools box -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove"
                                            title="Remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- /. tools -->


                                    <button type="submit" name="submit" class="btn btn-success "> <i
                                            class="fas fa-save"></i>&nbsp;Simpan</button>
                                    <button type="reset" name="reset" class="btn btn-warning "><i
                                            class="fas fa-sync-alt"></i>&nbsp;Reset</button>
                                    <a href="<?php echo base_url("admin/berita"); ?>" class="btn btn-primary"> <i
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
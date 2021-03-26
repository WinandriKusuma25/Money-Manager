<link rel="icon" href="<?php echo base_url().'asset/images/logo_money_manager.png'?>">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-primary"><i class="fas fa-newspaper"></i>&nbsp;Detail Berita</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li  class="m-0 text-muted"><a>Dashboard /&nbsp; </a></li>
              <li class="m-0 text-muted">&nbsp;Berita /&nbsp; </li>
              <li class="m-0 text-primary">&nbsp;Detail Berita</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
            <div class="alert alert-secondary" role="alert">
              Berikut merupakan detail berita yang ada dalam Website Money Manager
            </div>
            </div>
            </div>
            </div>
            </div>

        <div class="row">
          <div class="col">
              <div class ="card card-primary">
                    <div class="card-header">
                        Detail Data Berita
                    </div>
                    <div class ="card-body">
              <!-- Tabel -->
              <!-- /.card-header -->
               <?php $no=1; foreach ($berita as $pmj): ?>
                <div class="card-body">
                <center><th><b>Foto Berita</b></th></center>
                <br>
                <center><img src="<?= base_url('asset/upload/berita/') . $pmj->foto_berita ?>" style= "width:300px; height:200px;" ></td></center>
                <p>    
                <table class="table">
                      <tr>
                        <th>Judul</th>
                        <td><?= $pmj->judul?></td>
                      </tr>

                      <tr>
                        <th>Tanggal Berita</th>
                        <td><?= date('d F Y', strtotime($pmj->tgl_berita)); ?></td>
                      </tr>
                  
                      <tr>
                        <th>Deskripsi</th>
                        <td><?= $pmj->deskripsi?></td>
                      </tr>
                    
                    </table>
                    <br>
                    <a href="<?= base_url("admin/berita")?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> &nbsp;Kembali</a>
                  </div>
                <?php endforeach ?>
                </div>
                <!-- /.card-body -->
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
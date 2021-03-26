<!-- Favicon -->
<link rel="icon" href="<?php echo base_url().'asset/images/logo_money_manager.png'?>">
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
          <li  class="m-0 text-muted"><a>Dashboard /&nbsp; </a></li>
              <li class="m-0 text-muted">&nbsp;Berita /&nbsp; </li>
              <li class="m-0 text-primary">&nbsp;Form Edit Data Berita</li>
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
              Berikut merupakan form edit berita yang ada dalam Website Money Manager, pastikan data terisi dengan benar !
            </div>
            </div>
            </div>
            </div>
            </div>

        <div class="row">
          <div class="col">
            
          <div class ="card card-primary">
                    <div class="card-header">
                        Form Edit Data Berita
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                      <div class="alert alert-danger" role="alert">
                          <?= validation_errors(); ?>
                      </div>  
                    <?php endif; ?>
                    <?php foreach($berita as $jns):?>
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_berita" value="<?= $jns->id_berita;?>">
                    
                    <div class="form-group">
                            <label for="merk">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required autofocus
                            value="<?=$jns->judul;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Tanggal Berita</label>
                            <input type="date" class="form-control" id="tgl_berita" name="tgl_berita" required autofocus
                            value="<?=$jns->tgl_berita;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Foto Berita</label>
                            <br>
                            <img src="<?= base_url('asset/upload/berita/') . $jns->foto_berita ?>" style= "width:300px; height:200px;" >
                            <div class="m-0 text-danger"><small>*Foto Berita lama</small></div>

                            <!-- Menyimpan Foto lama -->
                            <input type="hidden" class="form-control" id="foto_berita_lama" name="foto_berita_lama"  
                            value="<?php echo base_url('asset/upload/berita').$jns->foto_berita ?>">

                            <!-- Foto baru -->
                            <input type="file" class="form-control" id="foto_berita" name="foto_berita"
                            value="<?php echo base_url('asset/upload/berita').$jns->foto_berita ?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi"  cols="30" rows="5"  
                           > <?=$jns->deskripsi;?></textarea>  
                    </div>
                    
                    

                    <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="<?php echo base_url("admin/berita");?>" class="btn btn-info">Cancel</a>
                        </form>
                        <?php endforeach ?>
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
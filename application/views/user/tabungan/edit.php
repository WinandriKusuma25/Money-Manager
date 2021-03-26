<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tabungan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Form Edit Tabungan</div>
            </div>
          </div>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
              <div class ="card card-primary">
                    <div class="card-header"><h3>Form Edit Data Tabungan</h3></div>
                        <div class ="card-body">
                            <?php if (validation_errors()): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_tabungan" value="<?= $tabungan['id_tabungan'];?>">
                        <input type="hidden" name="id_user" value="<?= $tabungan['id_user'];?>">

                            <div class="form-group">
                                <label for="tanggal">Tanggal tabungan</label>
                                <div class="m-0 text-danger"> <small><?=form_error('tanggal')?></small></div>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?=$tabungan['tanggal'];?>">

                            </div>

                            <div class="form-group">
                                <label for="nominal">Nominal</label>
                                <div class="m-0 text-danger"> <small><?=form_error('jumlah')?></small></div>
                                <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?=$tabungan['jumlah'];?>">
                            </div>

                          <div class="form-group">
                                <label for="deskripsi">Deskripsi</label> 
                                <div class="m-0 text-danger"> <small><?=form_error('deskripsi')?></small></div>
                                <textarea type="text" name="deskripsi" id="deskripsi"  cols="50" rows="" class="form-control" required=""></textarea>                       
                            </div>      

                                <button type="submit" name="submit" class="btn btn-success "> <i class="fas fa-save"></i>&nbsp;Simpan</button>
                                <button type="reset" name="reset" class="btn btn-warning "><i class="fas fa-sync-alt"></i>&nbsp;Reset</button>
                                <a href="<?php echo base_url("user/tabungan");?>" class="btn btn-primary" > <i class="fas fa-arrow-left"></i>&nbsp;Kembali  </a>
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
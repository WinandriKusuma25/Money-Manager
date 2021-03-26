<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pengeluaran</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Form Edit Pengeluaran</div>
            </div>
          </div>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
              <div class ="card card-primary">
                    <div class="card-header"><h3>Form Edit Data Pengeluaran</h3></div>
                        <div class ="card-body">
                            <?php if (validation_errors()): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_pengeluaran" value="<?= $pengeluaran['id_pengeluaran'];?>">
                        <input type="hidden" name="id_user" value="<?= $pengeluaran['id_user'];?>">

                            <div class="form-group">
                                <label for="nim">Tanggal pengeluaran</label>
                                <div class="m-0 text-danger"> <small><?=form_error('tgl_pengeluaran')?></small></div>
                                <input type="date" class="form-control" id="tgl_pengeluaran" name="tgl_pengeluaran" value="<?=$pengeluaran['tgl_pengeluaran'];?>">

                            </div>

                            <!-- <div class="form-group">
                                <label for="jenis">Jenis</label>
                                <div class="m-0 text-"> <small><?=form_error('jenis')?></small></div>
                                <select name="jenis" id="jenis" class="form-control">
                                    <option value="" disabled selected>Pilih</option>
                                    <option value="pengeluaran">pengeluaran</option>
                                    <option value="pengeluaran">Pengeluaran</option>
                                </select>
                            </div> -->

                            <div class="form-group">
                                <label for="nim">Nominal</label>
                                <div class="m-0 text-danger"> <small><?=form_error('nominal')?></small></div>
                                <input type="text" class="form-control" id="nominal" name="nominal" value="<?=$pengeluaran['nominal'];?>">
                            </div>

                          <div class="form-group">
                                <label for="nim">Keterangan</label> 
                                <div class="m-0 text-danger"> <small><?=form_error('keterangan')?></small></div>
                                <textarea type="text" name="keterangan" id="keterangan"  cols="50" rows="" class="form-control" required=""></textarea>                       
                            </div>      

                                <button type="submit" name="submit" class="btn btn-success "> <i class="fas fa-save"></i>&nbsp;Simpan</button>
                                <button type="reset" name="reset" class="btn btn-warning "><i class="fas fa-sync-alt"></i>&nbsp;Reset</button>
                                <a href="<?php echo base_url("user/pengeluaran");?>" class="btn btn-primary" > <i class="fas fa-arrow-left"></i>&nbsp;Kembali  </a>
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
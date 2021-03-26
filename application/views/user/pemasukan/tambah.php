<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pemasukan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Form Tambah Pemasukan</div>
            </div>
          </div>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
              <div class ="card card-primary">
                  <div class="card-header"><h3>Form Tambah Data pemasukan</h3></div>
                    <div class ="card-body">
                      <form action="" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="tgl_pemasukan">Tanggal pemasukan</label>
                            <div class="m-0 text-danger"> <small><?=form_error('tgl_pemasukan')?></small></div>
                            <input type="date" class="form-control" id="tgl_pemasukan" name="tgl_pemasukan" value="<?=date('Y-m-d');?>" required="">

                        </div>

                        <div class="form-group">
                            <label for="nominal">Nominal</label>
                            <div class="m-0 text-danger"> <small><?=form_error('nominal')?></small></div>
                            <input type="text" class="form-control" id="nominal" name="nominal" value="<?=set_value('nominal') ?>">
                        </div>

                       <div class="form-group">
                            <label for="keterangan">Keterangan</label> 
                            <div class="m-0 text-danger"> <small><?=form_error('keterangan')?></small></div>
                            <textarea name="keterangan" id="keterangan"  cols="50" rows="" class="form-control" value="<?=set_value('keterangan') ?>"></textarea>                       
                        </div>                        
                        <button type="submit" name="submit" class="btn btn-success "> <i class="fas fa-save"></i>&nbsp;Simpan</button>
                        <button type="reset" name="reset" class="btn btn-warning "><i class="fas fa-sync-alt"></i>&nbsp;Reset</button>
                        <a href="<?php echo base_url("user/pemasukan");?>" class="btn btn-primary" > <i class="fas fa-arrow-left"></i>&nbsp;Kembali  </a>
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
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
              <div class="breadcrumb-item">Form Tambah Tabungan</div>
            </div>
          </div>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
              <div class ="card card-primary">
                    <div class="card-header"><h3>Form Tambah Data Tabungan</h3></div>
                    <div class ="card-body">

                    <form action="" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="tanggal">Tanggal tabungan</label>
                            <div class="m-0 text-danger"> <small><?=form_error('tanggal')?></small></div>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?=date('Y-m-d');?>" required="">

                        </div>

                        <!-- <div class="form-group">
                            <label for="nim">Foto Berita</label>
                            <div class="m-0 text-danger"> <small><?=form_error('foto_berita')?></small></div>
                            <input type="file" class="form-control" id="foto_berita" name="foto_berita" >
                            
                        </div> -->

                        <!-- <div class="form-group">
                            <label for="nim">Jenis</label>
                            <div class="m-0 text-"> <small><?=form_error('jenis')?></small></div>
                            <select name="jenis" id="jenis" class="form-control">
                            <option value="" disabled selected>Pilih</option>
                            <option value="tabungan">tabungan</option>
                            <option value="pengeluaran">Pengeluaran</option>
                          </select>
                        </div> -->

                        <div class="form-group">
                            <label for="jumlah">Nominal</label>
                            <div class="m-0 text-danger"> <small><?=form_error('jumlah')?></small></div>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?=set_value('jumlah') ?>">
                        </div>

                       <div class="form-group">
                            <label for="deskripsi">Keterangan</label> 
                            <div class="m-0 text-danger"> <small><?=form_error('deskripsi')?></small></div>
                            <textarea name="deskripsi" id="deskripsi"  cols="50" rows="" class="form-control" value="<?=set_value('deskripsi') ?>"></textarea>                       
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
  <!-- /.content-wrapper -->
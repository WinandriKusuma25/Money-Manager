<!-- Favicon -->
<link rel="icon" href="<?php echo base_url().'asset/images/logo_money_manager.png'?>">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-primary"><i class="fas fa-user-tie"></i>&nbsp;Edit Profile Admin</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li  class="m-0 text-muted"><a>Dashboard /&nbsp; </a></li>
              <li class="m-0 text-muted">&nbsp;Profile /&nbsp; </li>
              <li class="m-0 text-primary">&nbsp;Form Edit Profile Admin</li>
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
              Berikut merupakan form edit profile Admin yang ada dalam Website Money Manager, pastikan data terisi dengan benar !
            </div>
            </div>
            </div>
            </div>
            </div>

        <div class="row">
          <div class="col">
            
          <div class ="card card-primary">
                    <div class="card-header">
                        Form Edit Profile Admin
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                      <div class="alert alert-danger" role="alert">
                          <?= validation_errors(); ?>
                      </div>  
                    <?php endif; ?>
                    <?php foreach($user as $jns):?>
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_user" value="<?= $jns->id_user;?>">
                    <input type="hidden" name="email" value="<?= $jns->email;?>">
                    <input type="hidden" name="username" value="<?= $jns->username;?>">
                    <input type="hidden" name="level" value="<?= $jns->level;?>">
                    <input type="hidden" name="status" value="<?= $jns->status;?>">
                    <input type="hidden" name="foto_ktp" value="<?= $jns->foto_ktp;?>">
                    
                    <div class="form-group">
                            <label for="merk">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required autofocus
                            value="<?=$jns->nama;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">No Telp</label>
                            <input type="number" class="form-control" id="no_telp" name="no_telp" required autofocus
                            value="<?=$jns->no_telp;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Foto Profil</label>
                            <br>
                            <img src="<?= base_url('asset/upload/admin/') . $jns->foto_profil ?>" style= "width:300px; height:200px;" >
                            <div class="m-0 text-danger"><small>*Foto Profil lama</small></div>

                            <!-- Menyimpan Foto lama -->
                            <input type="hidden" class="form-control" id="foto_profil_lama" name="foto_profil_lama"  
                            value="<?php echo base_url('asset/upload/admin').$jns->foto_profil ?>">

                            <!-- Foto baru -->
                            <input type="file" class="form-control" id="foto_profil" name="foto_profil"
                            value="<?php echo base_url('asset/upload/admin').$jns->foto_profil ?>">
                    </div>

                  <div class="form-group">
                            <label for="merk">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required autofocus
                            value="<?=$jns->password;?>">
                  </div>
                    
                    <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="<?php echo base_url("admin/profile");?>" class="btn btn-info">Cancel</a>
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
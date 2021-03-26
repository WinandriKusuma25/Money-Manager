<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item "> <a href="#">Dashboard</a></div>
              <div class="breadcrumb-item ">Profile</div>
              <div class="breadcrumb-item active">Edit ProfileProfile</div>
            </div>
          </div>

          <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                    <h5><i class=""></i> Edit Profil User</h5>
                    Berikut merupakan form edit profil user yang ada dalam Website Money Manager
                    </div>
                </div>
                </div>
            </div>
            </section> <br>

        <div class="row">
          <div class="col">    
            <div class ="card card-primary">
                <div class="card-header">
                    Form Edit Profile User
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
                            <img src="<?= base_url('asset/upload/user/') . $jns->foto_profil ?>" style= "width:300px; height:200px;" >
                            <div class="m-0 text-danger"><small>*Foto Profil lama</small></div>

                            <!-- Menyimpan Foto lama -->
                            <input type="hidden" class="form-control" id="foto_profil_lama" name="foto_profil_lama"  
                            value="<?php echo base_url('asset/upload/user').$jns->foto_profil ?>">

                            <!-- Foto baru -->
                            <input type="file" class="form-control" id="foto_profil" name="foto_profil"
                            value="<?php echo base_url('asset/upload/user').$jns->foto_profil ?>">
                    </div>

                  <div class="form-group">
                            <label for="merk">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required autofocus
                            value="<?=$jns->password;?>">
                  </div>
                    
                    <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="<?php echo base_url("user/profile");?>" class="btn btn-info">Cancel</a>
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
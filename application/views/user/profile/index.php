<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"> <a href="<?php echo base_url("user/home");?>">Dashboard</a></div>
              <div class="breadcrumb-item ">Profile</div>
            </div>
          </div>

          <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                    <h5>Data Profil &nbsp;<i class="far fa-user"></i></h5>
                    Ini merupakan detail user yang ada dalam Website Money Manager
                    </div>
                </div>
                </div>
            </div>
            </section> <br>

        <div class="row">
          <div class="col">
              <div class ="card card-primary">
                    <div class="card-header">
                        <b>Detail Data User</b>
                    </div>
                    <div class ="card-body">
              <!-- Tabel -->
              <!-- /.card-header -->
               <?php $no=1; foreach ($user as $pmj): ?>
                <div class="card-body">
                <center><th><b>Foto User</b></th></center>
                <br>
                <center><img src="<?= base_url('asset/upload/user/') . $pmj->foto_profil ?>" style= "width:300px; height:200px;" ></td></center>
                <p>    
                <table class="table">
                      <tr>
                        <th>Nama</th>
                        <td><?= $pmj->nama?></td>
                      </tr>

                      <tr>
                        <th>Email</th>
                        <td><?= $pmj->email ?></td>
                      </tr>

                      <tr>
                        <th>No Telp</th>
                        <td><?= $pmj->no_telp ?></td>
                      </tr>
                        
                  
                      <tr>
                        <th>Foto KTP</th>
                        <td><img src="<?= base_url('asset/upload/user/') . $pmj->foto_ktp ?>" style= "width:300px; height:180px;" ></td>
                      </tr>

                      <tr>
                        <th>password</th>
                        <td><?= $pmj->password ?></td>
                      </tr>

                      <tr>
                        <th>Level</th>
                        <td><?= $pmj->level ?></td>
                      </tr>
                      <tr>
                        <th>Status</th>
                        <td><?= $pmj->status ?></td>
                      </tr>
                    
                    </table>
                    <br>
                    <a href="<?= base_url("user/profile/edit")?>" class="btn btn-warning"><i class="fas fa-user-edit"></i> &nbsp;Edit Profile</a>
                    <a href="<?= base_url("user/home")?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> &nbsp;Kembali</a>
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
<link rel="icon" href="<?php echo base_url().'asset/images/logo_money_manager.png'?>">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-primary"><i class="fas fa-user-tie"></i>&nbsp;Profile Admin</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="m-0 text-muted">&nbsp;Dashboard /&nbsp; </li>
              <li class="m-0 text-primary">&nbsp;Profile</li>
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
              Berikut merupakan profile admin yang ada dalam Website Money Manager
            </div>
            </div>
            </div>
            </div>
            </div>

        <div class="row">
          <div class="col">
              <div class ="card card-primary">
                    <div class="card-header">
                        Detail Profile
                    </div>
                    <div class ="card-body">
              <!-- Tabel -->
              <!-- /.card-header -->

             

               <?php $no=1; foreach ($user as $pmj): ?>
                <div class="card-body">
                <center><th><b>Foto Admin</b></th></center>
                <br>
                <center><img src="<?= base_url('asset/upload/admin/') . $pmj->foto_profil ?>" style= "width:300px; height:200px;" ></td></center>
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
                        <td><img src="<?= base_url('asset/upload/admin/') . $pmj->foto_ktp ?>" style= "width:300px; height:180px;" ></td>
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
                    <a href="<?= base_url("admin/profile/edit")?>" class="btn btn-warning"><i class="fas fa-user-edit"></i> &nbsp;Edit Profile</a>
                    <a href="<?= base_url("admin/home")?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> &nbsp;Kembali</a>
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
<link rel="icon" href="<?php echo base_url().'asset/images/logo_money_manager.png'?>">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-primary"><i class="fas fa-users"></i>&nbsp;Users</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li  class="m-0 text-muted"><a>Dashboard /&nbsp; </a></li>
              <li class="m-0 text-primary">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-users"></i>  Data Users</h5>
              <div class="alert alert-secondary" role="alert">
             Ini merupakan data user yang ada dalam Website Money Manager
             </div>
            

            </div>
            </div>
            </div>
            </div>

    
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
        <div class="row">
          <div class="col"> 
              
              <!-- Tabel -->
              <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div class='card-header'>
                    <a class='btn btn-success' href="<?php echo base_url(); ?>admin/user/tambah">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span>
                        Tambah
                    </span>
                    </a>

                    <a class='btn btn-primary' href="<?php echo base_url(); ?>register/tabel_register">
                    <i class="fas fa-user-edit"></i>
                    <span>
                        Validasi User
                    </span>
                    </a>

                    <a class='btn btn-info' href="<?php echo base_url(); ?>register/tabel_register_aktif">
                    <i class="fas fa-user-check"></i>
                    <span>
                        Daftar User Aktif
                    </span>
                    </a>

                    </div>   
                  <span>
                  <br>
                    <?php
                   if (!empty($this->session->flashdata('pesan')))
                   {
                     ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('pesan');?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <?php   
                  }
                  ?>

                  <?php
                   if (!empty($this->session->flashdata('pesan2')))
                   {
                     ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('pesan2');?>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                 <?php   
                 }
                 ?>

                  <?php
                   if (!empty($this->session->flashdata('pesan3')))
                   {
                     ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('pesan3');?>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                 <?php   
                 }
                 ?>
                 </span> 
                 
              <table id="tabel" class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No Telp</th>
                  <th>Status</th>
                  <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($user as $pmj): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $pmj->nama ?></td>
                        <td><?= $pmj->email ?></td>
                        <td><?= $pmj->no_telp ?></td>
                        <?php if($pmj->status == "aktif") :?>
                        <td class="project-state">
                          <span class="badge badge-success"><?= $pmj->status ?></span>
                        </td>
                        <?php else : ?>
                        <td class="project-state">
                          <span class="badge badge-danger"><?= $pmj->status ?></span>
                        </td>
                        <?php endif ?>
                        <td>
                            <!--<a class='btn btn-danger' onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')" href="<?= base_url().'Admin/user/hapus/'.$pmj->id_user ?>">
                                <i class="fa fa-trash" aria-hidden="true"></i> -->
                            </a>
                            <!--<a class='btn btn-warning' href="<?= base_url().'Admin/user/edit/'.$pmj->id_user ?>">
                                <i class="fas fa-edit" aria-hidden="true"></i>-->
                            </a>
                            <a class='btn btn-info' href ='<?= base_url().'admin/user/detail/'.$pmj->id_user?>' class='btn btn-biru'>
                                 <i class="fas fa-eye" aria-hidden="true"></i>
                            </a>


                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
              </table>             
            <!-- /.card-body -->
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

  
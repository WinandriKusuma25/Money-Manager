<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pemasukan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"> <a href="<?php echo base_url("user/home");?>">Dashboard</a></div>
              <div class="breadcrumb-item "><a href="#">Transaksi</a></div>
              <div class="breadcrumb-item ">Pemasukan</div>
            </div>
          </div>

          <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                    <h5>Data Pemasukan &nbsp;<i class="fas fa-wallet"></i></h5>
                    Ini merupakan data pemasukan yang ada dalam Website Money Manager
                    </div>
                </div>
                </div>
            </div>
            </section> <br>

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

      <?php

      $this->db->select('tgl_pemasukan,nominal');
                  
      $dataPemasukanChart = 
      $this->db->get_where("pemasukan",array('id_user'=> $this->session->userdata('id_user')))->result();

      foreach ($dataPemasukanChart as $k => $v){
        $arrPemasukan[] = ['label' =>$v->tgl_pemasukan , 'y'=>$v->nominal ];
      }
      //print_r($arrPemasukan);die();
      ?>
      <!DOCTYPE HTML>
      <html>
      <head>
      <script type="text/javascript">
      window.onload = function () {

      var chart = new CanvasJS.Chart("chartContainer", {
      theme: "light3", // "light2", "dark1", "dark2"
      animationEnabled: true, // change to true		
      title:{
        text: "Grafik Pemasukan"
      },
      data: [
      {
        // Change type to "bar", "area", "spline", "pie",etc.
        type: "spline",

        /*dataPoints: [
          { label: "apple",  y: 10  },
          { label: "orange", y: 15  },
          { label: "banana", y: 25  },
          { label: "mango",  y: 30  },
          { label: "grape",  y: 28  }
        ]*/

        
        dataPoints: 
        
          <?=json_encode($arrPemasukan, JSON_NUMERIC_CHECK); ?>       
        
        
      }
      ]
      });
      chart.render();

      }
      </script>
      </head>
      <body>
      <div id="chartContainer" style="height: 370px; width: 100%;"></div>
      <script src="<?php echo base_url(); ?>asset/canvasjs/js/canvas.min.js"> </script>
      </body>
      </html>
      <hr>

            <!-- Main content -->
    <div class="content">
      <div class="container-fluid">      
        <div class="row">

        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                <i class="fas fa-hand-holding-usd"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Pemasukan</h4>
                  </div>
                  <div class="card-body">
                  <?php echo $this->db->get_where('pemasukan',array('id_user'=> $this->session->userdata('id_user')))->num_rows() ?>
                  
                  </div>
                </div>
              </div>
            </div>
            
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                <i class="fas fa-money-check-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Pemasukan</h4>
                  </div>
                  <div class="card-body">
                  <?php foreach ($pemasukan6 as $pmj): ?>
                    Rp.<?=number_format($pmj->nominal,2,',','.');?>
                    <?php endforeach ?>
                  </div>
                </div>
              </div>
            </div>



                 
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                <i class="fas fa-money-check-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Pemasukan Terbesar</h4>
                  </div>
                  <div class="card-body">
               
                  
                  <?php foreach ($pemasukan2 as $pmj): ?>
                    Rp.<?=number_format($pmj->nominal,2,',','.');?>
                    <?php endforeach ?>
                  
                       
                       
                      
                  </div>
                </div>
              </div>
            </div>


                       
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                <i class="fas fa-money-check-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Pemasukan Terkecil</h4>
                  </div>
                  <div class="card-body">
                  <?php foreach ($pemasukan3 as $pmj): ?>
                    Rp.<?=number_format($pmj->nominal,2,',','.');?>
                    <?php endforeach ?>
                  
                      
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                <i class="fas fa-money-check-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Rata-rata Pemasukan</h4>
                  </div>
                  <div class="card-body">
     
                  <?php foreach ($pemasukan4 as $pmj): ?>
                    Rp.<?=number_format($pmj->nominal,2,',','.');?>
                    <?php endforeach ?>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                <i class="fas fa-money-check-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Keterangan pemasukan paling sering</h4>
                  </div>
                  <div class="card-body">
     
                  <?php foreach ($pemasukan7 as $pmj): ?>
                    <?= $pmj->keterangan ?>
                    <?php endforeach ?>

                  </div>
                </div>
              </div>
            </div>

          <div class="col"> 
          <!-- Tabel -->
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div class='card-header'>
                    <a class='btn btn-success'href="pemasukan/tambah">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span>
                        Tambah
                    </span>
                    </a>
                </div>  
                 
                 <table id="tabel" class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal pemasukan</th>
                  <th>Nominal</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($pemasukan as $pmj): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= date('d F Y', strtotime($pmj->tgl_pemasukan)); ?></td>
                        <td>Rp <?=number_format($pmj->nominal,2,',','.');?></td>
                        <td><?= $pmj->keterangan ?></td>
                        
                        <td>
                            <a class='btn btn-warning' href="<?= base_url().'user/pemasukan/edit/'.$pmj->id_pemasukan ?>">
                                <i class="fas fa-edit" aria-hidden="true">&nbsp;Edit</i>
                            </a>
                            <a href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action', '<?=site_url('user/pemasukan/hapus/'.$pmj->id_pemasukan)?>')" class='btn btn-danger'  >
                                <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i> 
                            </a>

                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
                <!-- <thead>
                    <?php
                        error_reporting(0);
                        foreach ($pemasukan as $total_pemasukkan) {
                            $nominal += $total_pemasukkan->nominal;
                        }
                    ?>
                        <tr>
                            <th colspan="2" scope="col">TOTAL <small>(pemasukan)</small></th>
                            <th scope="col">Rp. <?=number_format($nominal,2,',','.');?></th>
                            <th scope="col">&nbsp;</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                </thead> -->
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


<!-- Modal -->
<div class="modal fade" id="modalDelete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Konfirmasi Hapus Data</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin akan menghapus data ini?
      </div>
      <div class="modal-footer">
        <form id="formDelete" action="" method="post">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
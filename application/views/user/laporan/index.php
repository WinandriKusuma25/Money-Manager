<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Laporan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"> <a href="<?php echo base_url("user/home"); ?>">Dashboard</a></div>
                <div class="breadcrumb-item ">Laporan</div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="callout callout-info">
                            <h5>Laporan Keuangan &nbsp;<i class="fas fa-file-pdf"></i></h5>
                            Ini merupakan data pemasukan dan pengeluaran yang ada dalam Website Money Manager
                        </div>
                    </div>
                </div>
            </div>
        </section> <br>

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
                                    <a class='btn btn-primary' href="laporan/filter_cetak">
                                        <i class="fas fa-file-pdf" aria-hidden="true"></i>
                                        <span>
                                            Cetak Laporan
                                        </span>
                                    </a>
                                </div>

                                <table id="tabel" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="normal">Tanggal</th>
                                            <th class="normal">Jenis</th>
                                            <th class="normal">Nominal</th>
                                            <th class="normal">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($datafilter as $pem) : ?>
                                        <tr>
                                            <td> <?= $pem->tgl_pemasukan; ?></td>
                                            <td style="color : #4169E1"><b>Pemasukan</b></td>
                                            <td> Rp <?= number_format($pem->nominal, 2, ',', '.'); ?></td>
                                            <td> <?= $pem->keterangan; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php foreach ($datafilter2 as $pen) : ?>
                                        <tr>
                                            <td> <?= $pen->tgl_pengeluaran; ?></td>
                                            <td style="color: #FF0000"><b>Pengeluaran</b></td>
                                            <td> Rp <?= number_format($pen->nominal, 2, ',', '.'); ?></td>
                                            <td> <?= $pen->keterangan; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <thead>
                                        <?php
                    error_reporting(0);
                    foreach ($datafilter as $total_masuk) {
                      $nominal_masuk += $total_masuk->nominal;
                    }
                    foreach ($datafilter2 as $total_keluar) {
                      $nominal_keluar += $total_keluar->nominal;
                    }
                    $nominal = $nominal_masuk - $nominal_keluar;
                    ?>
                                        <tr>
                                            <th colspan="2" scope="col">Total <small>(Pemasukan dan Pengeluaran)</small>
                                            </th>
                                            <th scope="col">Rp. <?= number_format($nominal, 2, ',', '.'); ?></th>
                                            <th scope="col">&nbsp;</th>
                                        </tr>
                                    </thead>
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
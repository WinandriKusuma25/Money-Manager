<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>



<div class="main-content">
    <section class="section">
        <!-- Main Content -->
        <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            </div>
        </div>


        <div class="alert alert-primary" role="alert">
            Selamat Datang <?php echo
                            $this->session->userdata('username'); ?> di Website Money Manager. Atur Keuangan Anda
            Sebelum
            Terlambat
        </div>


        <h2 class="section-title">Rekap Pemasukan</h2>
        <p class="section-lead">Berikut merupakan rekap pemasukan anda di website money manager</p>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Pemasukan Hari Ini</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            error_reporting(0);
                            foreach ($pemasukan7 as $total_pemasukkan) {
                                $nominalpem7 += $total_pemasukkan->nominal;
                            }
                            ?>

                            Rp. <?= number_format($nominalpem7, 2, ',', '.'); ?>
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
                            <h4>Pemasukan Bulan Ini</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            error_reporting(0);
                            foreach ($pemasukan8 as $total_pemasukkan) {
                                $nominalpem8 += $total_pemasukkan->nominal;
                            }
                            ?>

                            Rp. <?= number_format($nominalpem8, 2, ',', '.'); ?>


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
                            <h4>Pemasukan Tahun Ini</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            error_reporting(0);
                            foreach ($pemasukan9 as $total_pemasukkan) {
                                $nominalpem9 += $total_pemasukkan->nominal;
                            }
                            ?>

                            Rp. <?= number_format($nominalpem9, 2, ',', '.'); ?>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Pemasukan</h4>
                        </div>
                        <div class="card-body">
                            <?php foreach ($pemasukan6 as $pmj6) : ?>
                            Rp. <?= number_format($pmj6->nominal, 2, ',', '.'); ?>
                            <?php endforeach ?>

                        </div>
                        <div class="col">
                            <div class="col-md-8 col-md-offset-3 box">
                                <div class="progress progress-sm mr-2">
                                    <?php
                                    if ($pmj6->nominal < 1) {
                                        $warna = 'danger';
                                        $value = 0;
                                    } else if ($pmj6->nominal >= 1 && $pmj6->nominal < 1000000) {
                                        $warna = 'warning';
                                        $value = 1;
                                    } else {
                                        $warna = 'info';
                                        $value = $pmj6->nominal / 10000;
                                    };

                                    ?>
                                    <div class="progress-bar bg-<?= $warna ?>" role="progressbar" style="width: 100%"
                                        aria-valuenow="<?= $value ?>" aria-valuemin="0" aria-valuemax="100">
                                        <span><?= $value ?> % </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--pengeluaran -->


        <h2 class="section-title">Rekap Pengeluaran</h2>
        <p class="section-lead">Berikut merupakan rekap pengeluaran anda di website money manager</p>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Pengeluaran Hari Ini</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            error_reporting(0);
                            foreach ($pengeluaran7 as $total_pengeluaran) {
                                $nominalpen7 += $total_pengeluaran->nominal;
                            }
                            ?>

                            Rp. <?= number_format($nominalpen7, 2, ',', '.'); ?>

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
                            <h4>Pengeluaran Bulan Ini</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            error_reporting(0);
                            foreach ($pengeluaran8 as $total_pengeluaran) {
                                $nominalpen8 += $total_pengeluaran->nominal;
                            }
                            ?>

                            Rp. <?= number_format($nominalpen8, 2, ',', '.'); ?>

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
                            <h4>Pengeluaran Tahun Ini</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            error_reporting(0);
                            foreach ($pengeluaran9 as $total_pengeluaran) {
                                $nominalpen9 += $total_pengeluaran->nominal;
                            }
                            ?>

                            Rp. <?= number_format($nominalpen9, 2, ',', '.'); ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Pengeluaran</h4>
                        </div>
                        <div class="card-body">
                            <?php foreach ($pengeluaran6 as $pmj) : ?>
                            Rp. <?= number_format($pmj->nominal, 2, ',', '.'); ?>
                            <?php endforeach ?>

                        </div>
                        <div class="col">
                            <div class="col-md-8 col-md-offset-3 box">
                                <div class="progress progress-sm mr-2">
                                    <?php
                                    if ($pmj->nominal < 1) {
                                        $warna = 'danger';
                                        $value = 0;
                                    } else if ($pmj->nominal >= 1 && $pmj->nominal < 1000000) {
                                        $warna = 'warning';
                                        $value = 1;
                                    } else {
                                        $warna = 'info';
                                        $value = $pmj->nominal / 10000;
                                    };

                                    ?>
                                    <div class="progress-bar bg-<?= $warna ?>" role="progressbar" style="width: 100%"
                                        aria-valuenow="<?= $value ?>" aria-valuemin="0" aria-valuemax="100">
                                        <span><?= $value ?> % </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>




        <h2 class="section-title">Grafik Pemasukan dan Pengeluaran</h2>
        <p class="section-lead">Berikut merupakan rekap pemasukan anda di website money manager</p>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Grafik Pemasukan</h4>
                    </div>
                    <div class="card-body">
                        <?php

                        $this->db->select('tgl_pemasukan,nominal');

                        $dataPemasukanChart =
                            $this->db->get_where("pemasukan", array('id_user' => $this->session->userdata('id_user')))->result();

                        foreach ($dataPemasukanChart as $k => $v) {
                            $arrPemasukan[] = ['y' => $v->nominal];
                        }
                        //print_r($arrHutang);die();
                        ?>

                        <?php

                        $this->db->select('tgl_pengeluaran,nominal');

                        $dataPengeluaranChart =
                            $this->db->get_where("pengeluaran", array('id_user' => $this->session->userdata('id_user')))->result();

                        foreach ($dataPengeluaranChart as $k => $v) {
                            $arrPengeluaran[] = ['y' => $v->nominal];
                        }
                        //print_r($arrHutang);die();
                        ?>
                        <!DOCTYPE HTML>
                        <html>

                        <head>
                            <script>
                            window.onload = function() {

                                var chart = new CanvasJS.Chart("chartContainer", {
                                    animationEnabled: true,
                                    theme: "light2",
                                    title: {
                                        text: "Pemasukan dan Pengeluaran"
                                    },
                                    axisX: {
                                        //valueFormatString: "DD MMM",
                                        crosshair: {
                                            enabled: true,
                                            snapToDataPoint: true
                                        }
                                    },
                                    axisY: {
                                        title: "Nominal",
                                        includeZero: true,
                                        crosshair: {
                                            enabled: true
                                        }
                                    },
                                    toolTip: {
                                        shared: true
                                    },
                                    legend: {
                                        cursor: "pointer",
                                        verticalAlign: "top",
                                        horizontalAlign: "left",
                                        dockInsidePlotArea: false,
                                        itemclick: toogleDataSeries
                                    },
                                    data: [{
                                            type: "line",
                                            showInLegend: true,
                                            name: "Pemasukan",
                                            markerType: "square",
                                            //xValueFormatString: "DD MMM, YYYY",
                                            color: "#F08080",
                                            /*dataPoints: [
                                                { x: new Date(2017, 0, 3), y: 650 },
                                                { x: new Date(2017, 0, 4), y: 700 },
                                                { x: new Date(2017, 0, 5), y: 710 },
                                                { x: new Date(2017, 0, 6), y: 658 },
                                                { x: new Date(2017, 0, 7), y: 734 },
                                                { x: new Date(2017, 0, 8), y: 963 },
                                                { x: new Date(2017, 0, 9), y: 847 },
                                                { x: new Date(2017, 0, 10), y: 853 },
                                                { x: new Date(2017, 0, 11), y: 869 },
                                                { x: new Date(2017, 0, 12), y: 943 },
                                                { x: new Date(2017, 0, 13), y: 970 },
                                                { x: new Date(2017, 0, 14), y: 869 },
                                                { x: new Date(2017, 0, 15), y: 890 },
                                                { x: new Date(2017, 0, 16), y: 930 }
                                            ]*/
                                            dataPoints:

                                                <?= json_encode($arrPemasukan, JSON_NUMERIC_CHECK); ?>

                                        },
                                        {
                                            type: "line",
                                            showInLegend: true,
                                            name: "Pengeluaran",
                                            lineDashType: "dash",
                                            /*dataPoints: [{
                                                    x: new Date(2017, 0, 3),
                                                    y: 510
                                                },
                                                {
                                                    x: new Date(2017, 0, 4),
                                                    y: 560
                                                },
                                                {
                                                    x: new Date(2017, 0, 5),
                                                    y: 540
                                                },
                                                {
                                                    x: new Date(2017, 0, 6),
                                                    y: 558
                                                },
                                                {
                                                    x: new Date(2017, 0, 7),
                                                    y: 544
                                                },
                                                {
                                                    x: new Date(2017, 0, 8),
                                                    y: 693
                                                },
                                                {
                                                    x: new Date(2017, 0, 9),
                                                    y: 657
                                                },
                                                {
                                                    x: new Date(2017, 0, 10),
                                                    y: 663
                                                },
                                                {
                                                    x: new Date(2017, 0, 11),
                                                    y: 639
                                                },
                                                {
                                                    x: new Date(2017, 0, 12),
                                                    y: 673
                                                },
                                                {
                                                    x: new Date(2017, 0, 13),
                                                    y: 660
                                                },
                                                {
                                                    x: new Date(2017, 0, 14),
                                                    y: 562
                                                },
                                                {
                                                    x: new Date(2017, 0, 15),
                                                    y: 643
                                                },
                                                {
                                                    x: new Date(2017, 0, 16),
                                                    y: 570
                                                }
                                            ]*/
                                            dataPoints:

                                                <?= json_encode($arrPengeluaran, JSON_NUMERIC_CHECK); ?>

                                        }
                                    ]
                                });
                                chart.render();

                                function toogleDataSeries(e) {
                                    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                        e.dataSeries.visible = false;
                                    } else {
                                        e.dataSeries.visible = true;
                                    }
                                    chart.render();
                                }

                            }
                            </script>
                        </head>

                        <body>
                            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                        </body>

                        </html>
                    </div>
                </div>
            </div>







        </div>
</div>



<div>
</div>
</section>
</div>
</section>
</div>
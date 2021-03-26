<!DOCTYPE html>
<html>

<head>
    <title>Laporan Keuangan</title>
    <style type="text/css">
    #outtable {
        padding: 20px;
        border: 1px solid #e3e3e3;
        width: 667px;
        border-radius: 5px;
    }

    .short {
        width: 50px;
    }

    .normal {
        width: 150px;
    }

    table {
        border-collapse: collapse;
        font-family: arial;
        color: #5E5B5C;
    }

    thead th {
        text-align: left;
        padding: 10px;
    }

    tbody td {
        border-top: 1px solid #e3e3e3;
        padding: 10px;
    }

    tbody tr:nth-child(even) {
        background: #F6F5FA;
    }

    tbody tr:hover {
        background: #EAE9F5;
    }
    </style>
</head>

<body>
    <div id="outtable">
        <center>
            <b>
                <h3><?php echo $title ?> <br></h3>
                <h4><?php echo $subtitle ?> <br></h4>
            </b>
        </center>
        <table>
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
                    <td style="color : #4169E1">Pemasukan</td>
                    <td> Rp <?= number_format($pem->nominal, 2, ',', '.'); ?></td>
                    <td> <?= $pem->keterangan; ?></td>
                </tr>
                <?php endforeach; ?>
                <?php foreach ($datafilter2 as $pen) : ?>
                <tr>
                    <td> <?= $pen->tgl_pengeluaran; ?></td>
                    <td style="color: #FF0000">Pengeluaran</td>
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
                    <th colspan="2" scope="col">Total <small>(Pemasukan dan Pengeluaran)</small></th>
                    <th scope="col">Rp. <?= number_format($nominal, 2, ',', '.'); ?></th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
        </table>
    </div>
</body>

</html>
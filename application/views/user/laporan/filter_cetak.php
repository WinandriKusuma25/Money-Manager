<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Laporan Pemasukan dan Pengeluaran</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url("user/home"); ?>">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Laporan</a></div>
                <div class="breadcrumb-item">Cetak laporan</div>
            </div>
        </div>

        <!-- row satu  -->


        <!--Content -->
        <div class="content" id="tanggalfilter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3>Form Filter by Tanggal</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url("user/laporan/filter"); ?>" method="POST"
                                    target='_blank'>
                                    <input type="hidden" name="nilaifilter" value="1">
                                    <input name="valnilai" type="hidden">
                                    <div class="form-group">
                                        <label for="tgl_pemasukan">Tanggal Awal</label>
                                        <input type="date" class="form-control" name="tanggalawal" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_pemasukan">Tanggal Akhir</label>
                                        <input type="date" class="form-control" name="tanggalakhir" required="">
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-success"><i
                                            class="fa fa-print"></i>&nbsp;Print</button>
                                    <button type="reset" name="reset" class="btn btn-warning "><i
                                            class="fas fa-sync-alt"></i>&nbsp;Reset</button>
                                    <a href="<?php echo base_url("user/laporan"); ?>" class="btn btn-primary"> <i
                                            class="fas fa-arrow-left"></i>&nbsp;Kembali </a>
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

        <!--Content -->
        <div class="content" id="bulanfilter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3>Form Filter by Bulan</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url("user/laporan/filter"); ?>" method="POST"
                                    target='_blank'>
                                    <input type="hidden" name="nilaifilter" value="2">
                                    <input name="valnilai" type="hidden">
                                    <div class="form-group">
                                        <label for="">Pilih Tahun</label>
                                        <select name="tahun1" required="">
                                            <?php foreach ($tahun as $th) : ?>
                                            <option value="<?php echo $th->tahun ?>">
                                                <?php echo $th->tahun ?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_pemasukan">Bulan Awal</label>
                                        <select name="bulanawal" id="bulanawal" class="form-control form-control-user"
                                            title="Pilih Bulan">
                                            <option value="">-PILIH-</option>
                                            <option value="1">JANUARI</option>
                                            <option value="2">FEBRUARI</option>
                                            <option value="3">MARET</option>
                                            <option value="4">APRIL</option>
                                            <option value="5">MEI</option>
                                            <option value="6">JUNI</option>
                                            <option value="7">JULI</option>
                                            <option value="8">AGUSTUS</option>
                                            <option value="9">SEPTEMBER</option>
                                            <option value="10">OKTOBER</option>
                                            <option value="11">NOVEMBER</option>
                                            <option value="12">DESEMBER</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_pemasukan">Bulan Akhir</label>
                                        <select name="bulanakhir" id="bulanakhir" class="form-control form-control-user"
                                            title="Pilih Bulan">
                                            <option value="">-PILIH-</option>
                                            <option value="1">JANUARI</option>
                                            <option value="2">FEBRUARI</option>
                                            <option value="3">MARET</option>
                                            <option value="4">APRIL</option>
                                            <option value="5">MEI</option>
                                            <option value="6">JUNI</option>
                                            <option value="7">JULI</option>
                                            <option value="8">AGUSTUS</option>
                                            <option value="9">SEPTEMBER</option>
                                            <option value="10">OKTOBER</option>
                                            <option value="11">NOVEMBER</option>
                                            <option value="12">DESEMBER</option>
                                        </select>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-success"><i
                                            class="fa fa-print"></i>&nbsp;Print</button>
                                    <button type="reset" name="reset" class="btn btn-warning "><i
                                            class="fas fa-sync-alt"></i>&nbsp;Reset</button>
                                    <a href="<?php echo base_url("user/laporan"); ?>" class="btn btn-primary"> <i
                                            class="fas fa-arrow-left"></i>&nbsp;Kembali </a>
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

        <!--Content -->
        <div class="content" id="tahunfilter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3>Form Filter by Tahun</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url("user/laporan/filter"); ?>" method="POST"
                                    target='_blank'>
                                    <input name="valnilai" type="hidden">
                                    <input type="hidden" name="nilaifilter" value="3">
                                    <div class="form-group">
                                        <label for="">Pilih Tahun</label>
                                        <select name="tahun2" required="">
                                            <?php foreach ($tahun as $th) : ?>
                                            <option value="<?php echo $th->tahun ?>">
                                                <?php echo $th->tahun ?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-success"><i
                                            class="fa fa-print"></i>&nbsp;Print</button>
                                    <button type="reset" name="reset" class="btn btn-warning "><i
                                            class="fas fa-sync-alt"></i>&nbsp;Reset</button>
                                    <a href="<?php echo base_url("user/laporan"); ?>" class="btn btn-primary"> <i
                                            class="fas fa-arrow-left"></i>&nbsp;Kembali </a>
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


    </section>
    <!-- section -->
</div>
<!-- /.content-wrapper -->


<script type="text/javascript">
/*digunakan untuk menyembunyikan form tanggal, bulan dan tahun saat halaman di load */
$(document).ready(function() {

    $("#tanggalfilter").hide();
    $("#tahunfilter").hide();
    $("#bulanfilter").hide();

});

/*digunakan untuk menampilkan form tanggal, bulan dan tahun*/

function prosesPeriode() {
    var periode = $("[name='periode']").val();

    if (periode == "tanggal") {
        $("#btnproses").hide();
        $("#tanggalfilter").show();
        $("[name='valnilai']").val('tanggal');

    } else if (periode == "bulan") {
        $("#btnproses").hide();
        $("[name='valnilai']").val('bulan');
        $("#bulanfilter").show();

    } else if (periode == "tahun") {
        $("#btnproses").hide();
        $("[name='valnilai']").val('tahun');
        $("#tahunfilter").show();
    }
}

/*digunakan untuk menytembunyikan form tanggal, bulan dan tahun*/

function prosesReset() {
    $("#btnproses").show();

    $("#tanggalfilter").hide();
    $("#tahunfilter").hide();
    $("#bulanfilter").hide();

    $("#periode").val('');
    $("#tanggalawal").val('');
    $("#tanggalakhir").val('');
    $("#tahun1").val('');
    $("#bulanawal").val('');
    $("#bulanakhir").val('');
    $("#tahun2").val('');

}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js"></script>
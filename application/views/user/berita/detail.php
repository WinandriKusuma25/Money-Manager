<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Berita</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Berita</a></div>
              <div class="breadcrumb-item">Detail Berita</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Berita</h2>
            <p class="section-lead">
              Berikut merupakankan detail berita dalam Website Money Manager 
            </p>

            <div class="card">
                  <div class="card-header">
                    <h4>Detail Artikel Berita</h4>
                    <div class="card-header-action">
                      <a href="<?= base_url("user/berita")?>" class="btn btn-primary">Kembali</a>
                    </div>
                  </div>
                  <?php foreach ($berita as $brt): ?>   
                  <div class="card-body">
                    <div class="chocolat-parent">


                    <div class="article-title">
                      <h2><a href="#"><?= $brt->judul ?></a></h2>
                      <div class="mb-2 text-muted">Di publikasikan&nbsp;<?= date('d F Y', strtotime($brt->tgl_berita)); ?></div>
                    </div>

                      <a href="<?= base_url('asset/upload/berita/') . $brt->foto_berita ?>" class="chocolat-image" title="Just an example">
                        <div>
                          <img alt="image" src="<?= base_url('asset/upload/berita/') . $brt->foto_berita ?>" class="img-fluid">
                        </div>

                      </a>
                      <p><?= $brt->deskripsi?> </p>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
              
              
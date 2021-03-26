<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Article</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo base_url("user/home");?>">Dashboard</a></div>
              <div class="breadcrumb-item">Berita</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Artikel Berita</h2>
            <p class="section-lead">Berikut merupakan Artikel-artikel berita dalam Website Money Manager</p>

            <?php foreach ($berita as $brt): ?>
              <div class="ml-3 mr-3 col-12 col-sm-12 col-md-6 col-lg-12 d-flex flex-wrap ">
                <article class="article">
                  <div class="article-header">
                    <div class="article-image" data-background="<?= base_url('asset/upload/berita/') . $brt->foto_berita ?>">
                    </div>
                    <div class="article-title">
                      <h2><a href="#"><?= $brt->judul ?></a></h2>
                      <h2><?= date('d F Y', strtotime($brt->tgl_berita)); ?><h2>
                    </div>
                  </div>
                  <div class="article-details">
                    <p><?php echo word_limiter($brt->deskripsi,30 ); ?> </p>
                      <a href="<?= base_url().'user/berita/detail/'.$brt->id_berita?>"  class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                </article>
              </div>
              <?php endforeach ?>
              </div>
            </div>  
        </div>
    </div>
</div>            
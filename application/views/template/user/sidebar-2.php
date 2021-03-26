<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
          <a href="<?php echo base_url().'user/home' ?>" class="brand-link">
            <img src="<?php echo base_url().'asset/images/logo_money_manager.png' ?>" height="40px" weight="40px" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
            <span class="brand-text font-weight-light">Money Manager</span>
          </a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>dist/index">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>user/home"><i class="nav-icon fas fa-chart-line"></i> <span>Dashboard</span></a></li>
            <li class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>user/berita"><i class="nav-icon fas fa-newspaper"></i> <span>Artikel Berita</span></a></li>
           
            </li>
            <li class="menu-header">Main Menu</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Transaksi</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>user/pemasukan"><i class="fas fa-wallet"></i> <span>Pemasukan</span></a></li>
                <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>user/pengeluaran"><i class="fas fa-wallet"></i> <span>Pengeluaran</span></a></li>
              </ul>
            </li>
            <!-- <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>user/transaksi"><i class="fas fa-comment-dollar"></i> <span>Transaksi</span></a></li> -->
            <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>user/tabungan"><i class="fas fa-piggy-bank"></i> <span>Data Tabungan</span></a></li>
            <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>user/hutang"><i class="fas fa-hand-holding-usd"></i> <span>Hutang</span></a></li>
            <li>
              <li class="menu-header">Documentation</li>
              <li class="<?php echo $this->uri->segment(2) == 'components_article' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>user/laporan"><i class="fas fa-file-pdf"></i> <span>Laporan</span></a></li>
            </li>
        </aside>
      </div>

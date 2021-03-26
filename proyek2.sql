-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 01:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek2`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl_berita` date NOT NULL,
  `foto_berita` varchar(500) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tgl_berita`, `foto_berita`, `deskripsi`) VALUES
(2, 'Tips Perencanaan Keuangan untuk Keluarga Muda', '2020-08-25', 'berita_rumah_tangga.jpg', 'Tidak sedikit mereka yang menikah muda bingung dalam merencanakan keuangan untuk tujuan-tujuan mereka di masa depan.Satu hal yang dihadapi para keluarga muda ini adalah kekurangan dana segar karena sebagian besar dana mereka telah digunakan untuk menggelar pesta pernikahan atau bulan madu impian.\r\n\r\nJika dipikir-pikir, beban keuangan yang harus ditanggung keluarga muda justru sangat berat. Mereka harus memperhitungkan biaya persalinan, biaya hidup anak, biaya pendidikan anak, menabung beli rumah, kendaraan, dana pensiun, hingga memenuhi ketersediaan dana darurat. Seperti apakah perencanaan keuangan yang baik bagi keluarga muda? Berikut tips dari Lifepal.co.id\r\n\r\nBersikaplah lebih transparan mengenai urusan keuangan\r\n\r\nHidup seseorang yang sudah menikah tentu berbeda dengan saat masih melajang. Bersama pasangan, kita harus berkomunikasi secara terbuka mengenai penghasilan yang diperoleh bersama hingga pengeluaran-pengeluaran yang ditanggung bersama. Ketika besaran penghasilan dan pengel');

-- --------------------------------------------------------

--
-- Table structure for table `hutang`
--

CREATE TABLE `hutang` (
  `id_hutang` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `tgl_hutang` date NOT NULL,
  `nominal` int(20) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hutang`
--

INSERT INTO `hutang` (`id_hutang`, `id_user`, `tgl_hutang`, `nominal`, `keterangan`) VALUES
(3, 2, '2020-10-03', 150000, 'rekreasi'),
(4, 2, '2020-10-06', 320000, 'keperluan sekolah'),
(5, 2, '2020-10-02', 30000, 'alat dapur masak');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `tgl_pemasukan` date NOT NULL,
  `nominal` int(15) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `id_user`, `tgl_pemasukan`, `nominal`, `keterangan`) VALUES
(1, 2, '2020-10-08', 90000, 'gaji'),
(2, 2, '2020-10-16', 120000, 'Gaji lembur'),
(3, 3, '2020-10-16', 320000, 'Tunjangan hari raya'),
(4, 3, '2020-10-18', 5000000, 'Gaji bulan oktober'),
(5, 3, '2020-10-02', 25000, 'hadiah'),
(6, 3, '2020-09-16', 150000, 'rezeki'),
(7, 2, '2020-10-20', 150000, 'pendapatan bulanan'),
(8, 2, '2020-10-31', 25000, 'uang saku'),
(9, 2, '2020-10-31', 30000, 'uang jajan'),
(10, 2, '2020-10-31', 4500000, 'gaji bulanan'),
(11, 2, '2020-09-22', 150000, 'sisa tabungan'),
(12, 2, '2019-02-20', 250000, 'pemasukan');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `tgl_pengeluaran` date NOT NULL,
  `nominal` int(15) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `id_user`, `tgl_pengeluaran`, `nominal`, `keterangan`) VALUES
(2, 2, '2020-10-17', 50000, 'membeli sepeda motor'),
(3, 2, '2020-10-17', 25000, 'membeli bensin'),
(4, 3, '2020-10-18', 250000, 'membeli sepeda'),
(5, 3, '2020-08-09', 320000, 'membayar listrik'),
(6, 3, '2020-10-12', 25000, 'membeli minyak'),
(7, 2, '2020-10-19', 30000, 'beli baju'),
(8, 2, '2020-10-31', 320000, 'membeli peralatan masak');

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `id_tabungan` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`id_tabungan`, `id_user`, `deskripsi`, `jumlah`, `tanggal`) VALUES
(1, 2, 'menabung gaji', 120000, '2020-09-03 17:11:10'),
(2, 2, 'masa depan', 300000, '2020-10-05 17:14:01'),
(4, 2, 'tabungan hari raya', 150000, '2020-10-08 16:25:36'),
(5, 2, 'nabung', 2000, '2020-10-08 16:39:22'),
(6, 2, 'tabungan tahun baru', 270000, '2020-10-12 00:00:00'),
(8, 3, 'nabung', 3000000, '2020-10-07 00:00:00'),
(9, 3, 'tabungan hari raya', 550000, '2020-10-18 00:00:00'),
(10, 2, 'tabungan haji', 550000, '2020-10-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jenis` enum('pengeluaran','pemasukan') NOT NULL,
  `nominal` int(15) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `tgl_transaksi`, `jenis`, `nominal`, `keterangan`) VALUES
(1, 2, '2020-10-13', 'pemasukan', 50000, 'gaji bulanan'),
(2, 2, '2020-09-27', 'pemasukan', 50000, 'eee'),
(5, 15, '2020-10-16', 'pemasukan', 5000, 'tabung'),
(6, 2, '2020-10-16', 'pemasukan', 5000, 'nemu duwik'),
(19, 2, '2020-10-09', 'pemasukan', 50000, 'llloo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `foto_profil` varchar(500) NOT NULL,
  `foto_ktp` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pasif',
  `level` varchar(50) NOT NULL DEFAULT 'user',
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `no_telp`, `foto_profil`, `foto_ktp`, `status`, `level`, `username`, `password`) VALUES
(1, 'admin', 'Admin@gmail.com', '081239012877', 'bayu.jpg', 'foto_ktp.png', 'aktif', 'admin', 'admin', 'admin'),
(2, 'user', 'zelinamarli@gmail.com', '085701854512', 'nadin.jpg', 'foto_ktp.png', 'aktif', 'user', 'user', 'user'),
(3, 'dina', 'dina1@gmail.com', '081187036101', '55583751.jpg', 'foto_ktp.png', 'aktif', 'user', 'dina', 'dina'),
(5, 'joko', 'jokoagus@gmail.com', '123', 'nadin.jpg', 'foto_ktp.png', 'pasif', 'user', 'joko', 'joko'),
(12, 'bela', 'bela@gmail.com', '4466768', 'nadin.jpg', 'foto_ktp.png', 'aktif', 'user', 'bela', '123'),
(14, 'reza', 'rezaa@gmail.com', '3546576', 'nadin.jpg', 'foto_ktp.png', 'pasif', 'user', 'reza', '123'),
(15, 'salsa', 'salsabila@gmail.com', '08123936654', 'PicsArt_10-14-07_42_44.png', 'PicsArt_10-14-07_42_441.png', 'aktif', 'user', 'salsa', 'salsa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `hutang`
--
ALTER TABLE `hutang`
  ADD PRIMARY KEY (`id_hutang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`),
  ADD KEY `pemasukan_ibfk_1` (`id_user`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `pengeluaran_ibfk_1` (`id_user`);

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id_tabungan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hutang`
--
ALTER TABLE `hutang`
  MODIFY `id_hutang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pemasukan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `id_tabungan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hutang`
--
ALTER TABLE `hutang`
  ADD CONSTRAINT `hutang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD CONSTRAINT `pemasukan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaran_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD CONSTRAINT `tabungan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

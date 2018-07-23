-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 09:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catring`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `idAbsen` int(11) NOT NULL,
  `idKaryawan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jamDatang` time NOT NULL,
  `jamPulanng` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bahanbaku`
--

CREATE TABLE `bahanbaku` (
  `id_bb` int(11) NOT NULL,
  `idPemasok` int(11) NOT NULL,
  `nama_bb` varchar(15) NOT NULL,
  `hargasatuan` int(15) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahanbaku`
--

INSERT INTO `bahanbaku` (`id_bb`, `idPemasok`, `nama_bb`, `hargasatuan`, `jumlah`) VALUES
(1, 0, 'beras', 11000, 200),
(2, 0, 'daging', 45000, 100),
(3, 0, 'sayuranBayam', 5000, 50),
(4, 0, 'Cabai', 30, 100),
(5, 0, 'garam', 3000, 50),
(6, 0, 'penyedap rasa', 2500, 50),
(7, 0, 'bawang Bombay', 20000, 30),
(10, 0, 'wadahMakanan', 1225, 3000),
(12, 0, 'gula', 10000, 50),
(13, 0, 'mie', 10000, 50),
(14, 0, 'air botolan', 300, 3000),
(16, 0, 'coba', 8, 8),
(17, 0, 'cobakkk', 909, 9090),
(18, 0, 'mmm', 909, 909),
(19, 0, 'ddddd', 33, 33),
(20, 0, 'iidifid', 78, 34),
(21, 0, 'barulaig', 8888, 8888),
(22, 0, 'dfdfdfdfdfdfdfd', 1000, 12);

-- --------------------------------------------------------

--
-- Table structure for table `barangjual`
--

CREATE TABLE `barangjual` (
  `idBrngJual` int(11) NOT NULL,
  `NamaPaket` varchar(50) NOT NULL,
  `isi` varchar(50) NOT NULL,
  `hargaSatuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangjual`
--

INSERT INTO `barangjual` (`idBrngJual`, `NamaPaket`, `isi`, `hargaSatuan`) VALUES
(1, 'paket1', 'ayam goreng, nasi es teh', 13000),
(4, 'paket 2', 'ayam kampus dan paha minum susu', 20000),
(5, 'Paket 4', 'isa gak onk isine', 250000),
(6, 'paket5', 'nasi sambal', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `cashflow`
--

CREATE TABLE `cashflow` (
  `id_flow` int(11) NOT NULL,
  `idLabaSetelahPJK` int(11) NOT NULL,
  `idPenyusutan` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashflow`
--

INSERT INTO `cashflow` (`id_flow`, `idLabaSetelahPJK`, `idPenyusutan`, `total`) VALUES
(1, 1, 1, 11381250);

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `idGaji` int(11) NOT NULL,
  `NamaKaryawan` int(11) NOT NULL,
  `jumlahJamKerja` int(11) NOT NULL,
  `totalGaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `jual`
--

CREATE TABLE `jual` (
  `idJual` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenisPaket` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jual`
--

INSERT INTO `jual` (`idJual`, `nama`, `jenisPaket`, `harga`, `jumlah`) VALUES
(61, '0', '20000', 0, 12),
(62, '0', '20000', 240000, 12),
(63, '0', 'paket 2', 20000, 1),
(64, '0', 'Paket 4', 2500000, 10),
(65, '0', 'paket1', 26000, 2),
(66, '0', 'paket5', 18000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_kar` int(11) NOT NULL,
  `nama_kar` varchar(15) NOT NULL,
  `alamat_kar` varchar(20) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `telp_kar` int(15) NOT NULL,
  `gajiKaryawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_kar`, `nama_kar`, `alamat_kar`, `jabatan`, `telp_kar`, `gajiKaryawan`) VALUES
(1, 'arum', 'lumajang', 'juru masak', 123, 2000000),
(2, 'dimas', 'depok', 'chef', 242, 2000000),
(3, 'yoga', 'malang', 'asisten chef', 4434, 2000000),
(4, 'isal', 'dawareeeee', 'sopir', 2424, 2000000),
(5, 'baru', 'baru', 'baru', 34, 34);

-- --------------------------------------------------------

--
-- Table structure for table `lababersih`
--

CREATE TABLE `lababersih` (
  `idLabBersih` int(11) NOT NULL,
  `idLabKotor` int(11) NOT NULL,
  `idBiaya` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lababersih`
--

INSERT INTO `lababersih` (`idLabBersih`, `idLabKotor`, `idBiaya`, `total`) VALUES
(1, 1, 1, 33100000);

-- --------------------------------------------------------

--
-- Table structure for table `labakotor`
--

CREATE TABLE `labakotor` (
  `idLabKotor` int(11) NOT NULL,
  `idPendapatan` int(11) NOT NULL,
  `idPenyusutan` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labakotor`
--

INSERT INTO `labakotor` (`idLabKotor`, `idPendapatan`, `idPenyusutan`, `total`) VALUES
(1, 1, 1, 44100000);

-- --------------------------------------------------------

--
-- Table structure for table `lainlain`
--

CREATE TABLE `lainlain` (
  `id_lain` int(11) NOT NULL,
  `nama_ll` varchar(15) NOT NULL,
  `hargasatuan_ll` int(15) NOT NULL,
  `jumlah_ll` int(15) NOT NULL,
  `hargatotal_ll` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lainlain`
--

INSERT INTO `lainlain` (`id_lain`, `nama_ll`, `hargasatuan_ll`, `jumlah_ll`, `hargatotal_ll`) VALUES
(1, 'bensin', 25000, 10, 250000),
(3, 'gas', 100000, 10, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `laporanlaba`
--

CREATE TABLE `laporanlaba` (
  `idLabaRugi` int(11) NOT NULL,
  `idLabaBersih` int(11) NOT NULL,
  `idLabaKotor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporanlaba`
--

INSERT INTO `laporanlaba` (`idLabaRugi`, `idLabaBersih`, `idLabaKotor`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pel` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pel`, `nama`, `password`, `alamat`, `pekerjaan`) VALUES
(1, 'dimas@gmail.com', 'dimas', 'depok', 'mhs'),
(5, 'isal@gmail.com', 'isal', 'isal', 'mhs'),
(6, 'admin@com.com', 'admin123', 'coli', 'coli'),
(9, 'lala@gmail.com', '123', 'mlng', 'mahasiswa'),
(10, 'cok@cok.com', 'cok', 'sudo', 'siswa'),
(12, 'admin@admin.com', 'user', 'user', 'user'),
(13, 'admin@admin.com', 'user', 'user', 'user'),
(14, 'admin@admin.com', 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pemasok`
--

CREATE TABLE `pemasok` (
  `idPemasok` int(11) NOT NULL,
  `namaPemasok` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `noTelfon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `idPengeluaran` int(11) NOT NULL,
  `idSewa` int(11) NOT NULL,
  `idPeralatan` int(11) NOT NULL,
  `id_perlengkapan` int(11) NOT NULL,
  `id_bb` int(11) NOT NULL,
  `id_lain` int(11) NOT NULL,
  `idKaryawan` int(11) NOT NULL,
  `totalPengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`idPengeluaran`, `idSewa`, `idPeralatan`, `id_perlengkapan`, `id_bb`, `id_lain`, `idKaryawan`, `totalPengeluaran`) VALUES
(1, 1, 2, 1, 14, 1, 1, 34250000);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_transaksi` int(11) NOT NULL,
  `idPelanggan` int(11) NOT NULL,
  `NamaBarang` varchar(255) NOT NULL,
  `isiPaket` text NOT NULL,
  `JumlahSatuan` int(11) NOT NULL,
  `hargaSatuan` int(11) NOT NULL,
  `totalPenjualan` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_transaksi`, `idPelanggan`, `NamaBarang`, `isiPaket`, `JumlahSatuan`, `hargaSatuan`, `totalPenjualan`, `tanggal`) VALUES
(1, 1, 'Paket Makanan 1', '', 3000, 15000, 45000000, '2018-04-11'),
(3, 14, 'dfffdf', '', 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `penyusutan`
--

CREATE TABLE `penyusutan` (
  `idPenyusutan` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `nominalPenyusutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyusutan`
--

INSERT INTO `penyusutan` (`idPenyusutan`, `keterangan`, `nominalPenyusutan`) VALUES
(1, 'alatMasak', 900000);

-- --------------------------------------------------------

--
-- Table structure for table `peralatan`
--

CREATE TABLE `peralatan` (
  `id_alat` int(11) NOT NULL,
  `nama_alat` varchar(15) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tgl_beli` date NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peralatan`
--

INSERT INTO `peralatan` (`id_alat`, `nama_alat`, `jumlah`, `tgl_beli`, `harga`) VALUES
(1, 'pisau', 5, '2018-04-11', 20000),
(2, 'open', 1, '2018-04-04', 400000),
(3, 'kompor', 2, '2018-04-10', 100000),
(4, 'wajan', 5, '2018-04-30', 10000),
(5, 'panci dll', 5, '2018-04-14', 40000),
(6, 'sabun', 2, '2018-05-09', 200);

-- --------------------------------------------------------

--
-- Table structure for table `perubahanmodal`
--

CREATE TABLE `perubahanmodal` (
  `idperubahan` int(11) NOT NULL,
  `modalawal` int(11) NOT NULL,
  `lababersih` int(11) NOT NULL,
  `privecatering` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perubahanmodal`
--

INSERT INTO `perubahanmodal` (`idperubahan`, `modalawal`, `lababersih`, `privecatering`, `total`) VALUES
(1, 1, 1, 3000000, 70350000);

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_Sewa` int(11) NOT NULL,
  `HargaBangunanPerTahun` int(11) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `tanggalMulai` date NOT NULL,
  `tangalSelesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_Sewa`, `HargaBangunanPerTahun`, `alamat`, `tanggalMulai`, `tangalSelesai`) VALUES
(1, 8000000, 'malang kec lowokwaru', '2018-04-20', '2019-04-20'),
(2, 200000, 'desa gleagah', '2018-05-01', '2018-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `itemId` int(11) NOT NULL,
  `itemHeader` varchar(512) NOT NULL COMMENT 'Heading',
  `itemSub` varchar(1021) NOT NULL COMMENT 'sub heading',
  `itemDesc` text COMMENT 'content or description',
  `itemImage` varchar(80) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`itemId`, `itemHeader`, `itemSub`, `itemDesc`, `itemImage`, `isDeleted`, `createdBy`, `createdDtm`, `updatedDtm`, `updatedBy`) VALUES
(1, 'jquery.validation.js', 'Contribution towards jquery.validation.js', 'jquery.validation.js is the client side javascript validation library authored by Jörn Zaefferer hosted on github for us and we are trying to contribute to it. Working on localization now', 'validation.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL),
(2, 'CodeIgniter User Management', 'Demo for user management system', 'This the demo of User Management System (Admin Panel) using CodeIgniter PHP MVC Framework and AdminLTE bootstrap theme. You can download the code from the repository or forked it to contribute. Usage and installation instructions are provided in ReadMe.MD', 'cias.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@codeinsect.com', '$2y$10$WQQRBQDkxV/98bqK.24Dp.uMVS6KcztVqdwwTrOBLIWLSeSqE2gii', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2017-03-03 12:08:39'),
(2, 'manager@codeinsect.com', '$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2017-02-10 17:23:53'),
(3, 'employee@codeinsect.com', '$2y$10$M3ttjnzOV2lZSigBtP0NxuCtKRte70nc8TY5vIczYAQvfG/8syRze', 'Employee', '9890098900', 3, 0, 1, '2016-12-09 17:50:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksii`
--

CREATE TABLE `transaksii` (
  `idPemasukan` int(11) NOT NULL,
  `idPenjualan` int(11) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `kredit` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `PemasukanSetelahPajak` int(11) NOT NULL,
  `PemasukanSebelumPajak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksii`
--

INSERT INTO `transaksii` (`idPemasukan`, `idPenjualan`, `keterangan`, `kredit`, `debit`, `PemasukanSetelahPajak`, `PemasukanSebelumPajak`) VALUES
(1, 1, 'tagihan keluar', 23, 323, 10481250, 10750000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1528420297, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`idAbsen`),
  ADD KEY `idKaryawan` (`idKaryawan`);

--
-- Indexes for table `bahanbaku`
--
ALTER TABLE `bahanbaku`
  ADD PRIMARY KEY (`id_bb`),
  ADD KEY `idPemasok` (`idPemasok`);

--
-- Indexes for table `barangjual`
--
ALTER TABLE `barangjual`
  ADD PRIMARY KEY (`idBrngJual`);

--
-- Indexes for table `cashflow`
--
ALTER TABLE `cashflow`
  ADD PRIMARY KEY (`id_flow`),
  ADD KEY `idPemasukan` (`idLabaSetelahPJK`),
  ADD KEY `idPengeluaran` (`idPenyusutan`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`idGaji`),
  ADD KEY `NamaKaryawan` (`NamaKaryawan`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jual`
--
ALTER TABLE `jual`
  ADD PRIMARY KEY (`idJual`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_kar`);

--
-- Indexes for table `lababersih`
--
ALTER TABLE `lababersih`
  ADD PRIMARY KEY (`idLabBersih`),
  ADD KEY `idLabKotor` (`idLabKotor`),
  ADD KEY `idBiaya` (`idBiaya`);

--
-- Indexes for table `labakotor`
--
ALTER TABLE `labakotor`
  ADD PRIMARY KEY (`idLabKotor`),
  ADD KEY `idPenyusutan` (`idPenyusutan`),
  ADD KEY `idPendapatan` (`idPendapatan`);

--
-- Indexes for table `lainlain`
--
ALTER TABLE `lainlain`
  ADD PRIMARY KEY (`id_lain`);

--
-- Indexes for table `laporanlaba`
--
ALTER TABLE `laporanlaba`
  ADD PRIMARY KEY (`idLabaRugi`),
  ADD KEY `idLabaBersih` (`idLabaBersih`),
  ADD KEY `idLabaKotor` (`idLabaKotor`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pel`);

--
-- Indexes for table `pemasok`
--
ALTER TABLE `pemasok`
  ADD PRIMARY KEY (`idPemasok`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`idPengeluaran`),
  ADD KEY `idSewa` (`idSewa`),
  ADD KEY `idPeralatan` (`idPeralatan`),
  ADD KEY `idKaryawan` (`idKaryawan`),
  ADD KEY `id_bb` (`id_bb`),
  ADD KEY `idKaryawan_2` (`idKaryawan`),
  ADD KEY `id_lain` (`id_lain`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `idPelanggan` (`idPelanggan`);

--
-- Indexes for table `penyusutan`
--
ALTER TABLE `penyusutan`
  ADD PRIMARY KEY (`idPenyusutan`);

--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `perubahanmodal`
--
ALTER TABLE `perubahanmodal`
  ADD PRIMARY KEY (`idperubahan`),
  ADD KEY `modalawal` (`modalawal`,`lababersih`),
  ADD KEY `lababersih` (`lababersih`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_Sewa`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `transaksii`
--
ALTER TABLE `transaksii`
  ADD PRIMARY KEY (`idPemasukan`),
  ADD KEY `idTransaksi` (`idPenjualan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `idAbsen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bahanbaku`
--
ALTER TABLE `bahanbaku`
  MODIFY `id_bb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `barangjual`
--
ALTER TABLE `barangjual`
  MODIFY `idBrngJual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `idGaji` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jual`
--
ALTER TABLE `jual`
  MODIFY `idJual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_kar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lababersih`
--
ALTER TABLE `lababersih`
  MODIFY `idLabBersih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `labakotor`
--
ALTER TABLE `labakotor`
  MODIFY `idLabKotor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lainlain`
--
ALTER TABLE `lainlain`
  MODIFY `id_lain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporanlaba`
--
ALTER TABLE `laporanlaba`
  MODIFY `idLabaRugi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pemasok`
--
ALTER TABLE `pemasok`
  MODIFY `idPemasok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `idPengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penyusutan`
--
ALTER TABLE `penyusutan`
  MODIFY `idPenyusutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peralatan`
--
ALTER TABLE `peralatan`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perubahanmodal`
--
ALTER TABLE `perubahanmodal`
  MODIFY `idperubahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_Sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksii`
--
ALTER TABLE `transaksii`
  MODIFY `idPemasukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`idKaryawan`) REFERENCES `karyawan` (`id_kar`);

--
-- Constraints for table `cashflow`
--
ALTER TABLE `cashflow`
  ADD CONSTRAINT `cashflow_ibfk_1` FOREIGN KEY (`idPenyusutan`) REFERENCES `penyusutan` (`idPenyusutan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cashflow_ibfk_2` FOREIGN KEY (`idLabaSetelahPJK`) REFERENCES `transaksii` (`idPemasukan`);

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`NamaKaryawan`) REFERENCES `absensi` (`idKaryawan`),
  ADD CONSTRAINT `gaji_ibfk_2` FOREIGN KEY (`idGaji`) REFERENCES `pengeluaran` (`idKaryawan`);

--
-- Constraints for table `lababersih`
--
ALTER TABLE `lababersih`
  ADD CONSTRAINT `lababersih_ibfk_1` FOREIGN KEY (`idLabKotor`) REFERENCES `labakotor` (`idLabKotor`),
  ADD CONSTRAINT `lababersih_ibfk_2` FOREIGN KEY (`idBiaya`) REFERENCES `sewa` (`id_Sewa`),
  ADD CONSTRAINT `lababersih_ibfk_3` FOREIGN KEY (`idBiaya`) REFERENCES `lainlain` (`id_lain`);

--
-- Constraints for table `labakotor`
--
ALTER TABLE `labakotor`
  ADD CONSTRAINT `labakotor_ibfk_2` FOREIGN KEY (`idPenyusutan`) REFERENCES `penyusutan` (`idPenyusutan`),
  ADD CONSTRAINT `labakotor_ibfk_3` FOREIGN KEY (`idPendapatan`) REFERENCES `penjualan` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporanlaba`
--
ALTER TABLE `laporanlaba`
  ADD CONSTRAINT `laporanlaba_ibfk_1` FOREIGN KEY (`idLabaBersih`) REFERENCES `lababersih` (`idLabBersih`),
  ADD CONSTRAINT `laporanlaba_ibfk_2` FOREIGN KEY (`idLabaKotor`) REFERENCES `labakotor` (`idLabKotor`);

--
-- Constraints for table `pemasok`
--
ALTER TABLE `pemasok`
  ADD CONSTRAINT `pemasok_ibfk_1` FOREIGN KEY (`idPemasok`) REFERENCES `bahanbaku` (`idPemasok`);

--
-- Constraints for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaran_ibfk_1` FOREIGN KEY (`idPeralatan`) REFERENCES `peralatan` (`id_alat`),
  ADD CONSTRAINT `pengeluaran_ibfk_2` FOREIGN KEY (`idSewa`) REFERENCES `sewa` (`id_Sewa`),
  ADD CONSTRAINT `pengeluaran_ibfk_5` FOREIGN KEY (`id_lain`) REFERENCES `lainlain` (`id_lain`),
  ADD CONSTRAINT `pengeluaran_ibfk_6` FOREIGN KEY (`id_bb`) REFERENCES `bahanbaku` (`id_bb`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`idPelanggan`) REFERENCES `pelanggan` (`id_pel`);

--
-- Constraints for table `perubahanmodal`
--
ALTER TABLE `perubahanmodal`
  ADD CONSTRAINT `perubahanmodal_ibfk_1` FOREIGN KEY (`modalawal`) REFERENCES `pengeluaran` (`idPengeluaran`),
  ADD CONSTRAINT `perubahanmodal_ibfk_2` FOREIGN KEY (`lababersih`) REFERENCES `lababersih` (`idLabBersih`);

--
-- Constraints for table `transaksii`
--
ALTER TABLE `transaksii`
  ADD CONSTRAINT `transaksii_ibfk_1` FOREIGN KEY (`idPenjualan`) REFERENCES `penjualan` (`id_transaksi`);

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

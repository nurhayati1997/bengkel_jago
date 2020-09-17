-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 12:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel_jago`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `merk_barang` varchar(255) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `pagu` int(11) NOT NULL,
  `harga_kulak` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `distributor` varchar(255) NOT NULL,
  `jenis` int(2) NOT NULL,
  `hapus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `kode_barang`, `nama_barang`, `merk_barang`, `stok_barang`, `pagu`, `harga_kulak`, `harga_jual`, `distributor`, `jenis`, `hapus`) VALUES
(1, '91823', 'ban', 'astra', 18, 20, 2000, 3000, 'test', 0, 0),
(2, '9080123', 'gear', 'astra', -76, 0, 90000, 100000, 'yte', 1, 0),
(3, '090123', 'ban depan', 'astra', -1, 0, 90000, 150000, 'test', 1, 0),
(5, '0902okK', 'rem', 'astra', 0, 0, 2000, 40000, 'test', 0, 0),
(6, '6768hggjghj', 'test', 'astra', 0, 0, 80000, 900000, 'test', 0, 0),
(7, 'ioieq90083jk', 'cek', 'cek', -5, 0, 900000, 1000000, 'cek', 0, 0),
(8, 'a1a1a', 'test', 'test', 10, 10, 90000, 100000, 'test', 0, 1),
(9, '12312', 'aki', 'astra', 10, 5, 100000, 120000, 'astraa', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id_client` int(11) NOT NULL,
  `nama_client` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `hapus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id_client`, `nama_client`, `no_telp`, `no_ktp`, `alamat`, `hapus`) VALUES
(1, 'si A', '2147483647', '', 'bilaporah', 0),
(2, 'si B', '12312314', '3243423423', '', 0),
(3, 'tes', '085954971672', '3526020705970003', 'bilaporah', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jasa`
--

CREATE TABLE `tbl_jasa` (
  `id_jasa` int(11) NOT NULL,
  `nama_jasa` varchar(255) NOT NULL,
  `harga_jasa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jasa`
--

INSERT INTO `tbl_jasa` (`id_jasa`, `nama_jasa`, `harga_jasa`) VALUES
(1, 'Tambal Ban', 10000),
(2, 'Tap Oli', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembelian`
--

CREATE TABLE `tbl_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `tgl_pembelian` datetime NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_pembelian` int(11) NOT NULL,
  `harga_kulak` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembelian`
--

INSERT INTO `tbl_pembelian` (`id_pembelian`, `tgl_pembelian`, `id_barang`, `jumlah_pembelian`, `harga_kulak`, `id_pengguna`) VALUES
(9, '2020-09-01 20:52:53', 2, 2, 100000, 1),
(10, '2020-09-12 00:11:10', 2, 12, 100000, 1),
(11, '2020-09-12 00:11:10', 5, 1, 40000, 1),
(12, '2020-09-13 01:15:07', 9, 10, 120000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `rule` int(2) NOT NULL,
  `hapus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `nama`, `password`, `rule`, `hapus`) VALUES
(1, 'inas', '$2y$10$AHaNOR2NdQ0zLKphO/kxV.xJmm.QRzrLUgd8hFvUahLfpTEk4JF/C', 2, 0),
(2, 'moham', '$2y$10$68xDjkJ/U2F/DvtI.M2hc.Z9yv2ZpqrOc2XzjRakTbevi7xypN/cu', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_penjualan` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_kulak` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`id_penjualan`, `id_barang`, `jumlah_penjualan`, `harga_jual`, `harga_kulak`, `id_transaksi`) VALUES
(1, 2, 10, 100000, 90000, 3),
(2, 2, 10, 100000, 90000, 4),
(3, 2, 10, 100000, 90000, 5),
(4, 2, 10, 100000, 90000, 6),
(5, 6, 12, 900000, 80000, 8),
(6, 3, 11, 150000, 90000, 9),
(7, 3, 12, 150000, 90000, 9),
(8, 2, 10, 100000, 90000, 10),
(9, 2, 10, 100000, 90000, 11),
(10, 3, 11, 150000, 90000, 12),
(11, 6, 1212, 900000, 80000, 13),
(12, 3, 10, 150000, 90000, 14),
(13, 5, 12, 40000, 2000, 18),
(14, 5, 2147483647, 40000, 2000, 19),
(15, 2, 10, 100000, 0, 21),
(16, 7, 2, 1000000, 0, 22),
(17, 3, 3, 150000, 0, 23),
(18, 7, 3, 1000000, 0, 23),
(19, 3, 3, 150000, 0, 24),
(20, 5, 1, 40000, 0, 28),
(21, 2, 1, 100000, 0, 28),
(22, 2, 100, 100000, 0, 29);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan_jasa`
--

CREATE TABLE `tbl_penjualan_jasa` (
  `id_penjualan_jasa` int(11) NOT NULL,
  `id_jasa` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penjualan_jasa`
--

INSERT INTO `tbl_penjualan_jasa` (`id_penjualan_jasa`, `id_jasa`, `id_transaksi`) VALUES
(1, 1, 7),
(2, 1, 8),
(3, 2, 14),
(4, 1, 15),
(5, 2, 16),
(6, 1, 17),
(7, 1, 20),
(8, 2, 22),
(9, 1, 25),
(10, 2, 26),
(11, 1, 27);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_piutang`
--

CREATE TABLE `tbl_piutang` (
  `id_piutang` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  `status_piutang` varchar(255) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_piutang`
--

INSERT INTO `tbl_piutang` (`id_piutang`, `id_transaksi`, `tgl_jatuh_tempo`, `status_piutang`, `id_client`) VALUES
(1, 9, '2020-09-10', '1', 1),
(2, 10, '2020-09-30', '0', 1),
(3, 11, '2020-09-01', '0', 1),
(4, 12, '2020-09-10', '0', 1),
(5, 13, '2020-09-16', '0', 1),
(6, 19, '2020-09-16', '1', 2),
(7, 24, '2020-09-15', '0', 1),
(8, 27, '2020-09-14', '0', 2),
(9, 29, '2020-09-21', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `tgl_transaksi`, `id_pengguna`) VALUES
(1, '2020-09-06', 1),
(2, '2020-09-06', 1),
(3, '2020-09-06', 1),
(4, '2020-09-06', 1),
(5, '2020-09-06', 1),
(6, '2020-09-06', 1),
(7, '2020-09-06', 1),
(8, '2020-09-06', 1),
(9, '2020-09-06', 1),
(10, '2020-09-07', 1),
(11, '2020-09-07', 1),
(12, '2020-09-07', 1),
(13, '2020-09-07', 1),
(14, '2020-09-07', 1),
(15, '2020-09-07', 1),
(16, '2020-09-07', 1),
(17, '2020-09-07', 1),
(18, '2020-09-07', 1),
(19, '2020-09-07', 1),
(20, '2020-09-07', 1),
(21, '2020-09-07', 1),
(22, '2020-09-13', 1),
(23, '2020-09-13', 1),
(24, '2020-09-13', 1),
(25, '2020-09-13', 1),
(26, '2020-09-13', 1),
(27, '2020-09-13', 1),
(28, '2020-09-13', 1),
(29, '2020-09-13', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pembelian`
-- (See below for the actual view)
--
CREATE TABLE `view_pembelian` (
`id_pembelian` int(11)
,`id_barang` int(11)
,`jumlah_pembelian` int(11)
,`tgl_pembelian` datetime
,`harga_kulak` int(11)
,`kode_barang` varchar(100)
,`nama_barang` varchar(255)
,`stok_barang` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_penjualan`
-- (See below for the actual view)
--
CREATE TABLE `view_penjualan` (
`id_penjualan` int(11)
,`id_transaksi` int(11)
,`id_barang` int(11)
,`kode_barang` varchar(100)
,`nama_barang` varchar(255)
,`merk_barang` varchar(255)
,`distributor` varchar(255)
,`jenis` int(2)
,`jumlah_penjualan` int(11)
,`harga_jual` int(11)
,`harga_kulak` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_penjualan_jasa`
-- (See below for the actual view)
--
CREATE TABLE `view_penjualan_jasa` (
`id_penjualan_jasa` int(11)
,`id_transaksi` int(11)
,`id_jasa` int(11)
,`nama_jasa` varchar(255)
,`harga_jasa` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_piutang`
-- (See below for the actual view)
--
CREATE TABLE `view_piutang` (
`id_piutang` int(11)
,`tgl_jatuh_tempo` date
,`status_piutang` varchar(255)
,`id_transaksi` int(11)
,`tgl_transaksi` date
,`id_client` int(11)
,`nama_client` varchar(255)
,`no_telp` varchar(13)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_penjualan`
-- (See below for the actual view)
--
CREATE TABLE `vw_penjualan` (
`jumlah_penjualan` int(11)
,`harga_jual` int(11)
,`id_barang` int(11)
,`harga_kulak` int(11)
,`kode_barang` varchar(100)
,`nama_barang` varchar(255)
,`merk_barang` varchar(255)
,`stok_barang` int(11)
,`pagu` int(11)
,`tgl_transaksi` date
,`nama` varchar(50)
,`status_piutang` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_penjualan_jasa`
-- (See below for the actual view)
--
CREATE TABLE `vw_penjualan_jasa` (
`id_jasa` int(11)
,`tgl_transaksi` date
,`nama` varchar(50)
,`nama_jasa` varchar(255)
,`harga_jasa` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_piutang`
-- (See below for the actual view)
--
CREATE TABLE `vw_piutang` (
`id_piutang` int(11)
,`id_transaksi` int(11)
,`tgl_jatuh_tempo` date
,`status_piutang` varchar(255)
,`tgl_transaksi` date
,`nama` varchar(50)
,`nama_client` varchar(255)
,`no_telp` varchar(13)
,`harga_jual` int(11)
,`harga_kulak` int(11)
,`jumlah_penjualan` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `view_pembelian`
--
DROP TABLE IF EXISTS `view_pembelian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pembelian`  AS  select `tbl_pembelian`.`id_pembelian` AS `id_pembelian`,`tbl_pembelian`.`id_barang` AS `id_barang`,`tbl_pembelian`.`jumlah_pembelian` AS `jumlah_pembelian`,`tbl_pembelian`.`tgl_pembelian` AS `tgl_pembelian`,`tbl_pembelian`.`harga_kulak` AS `harga_kulak`,`tbl_barang`.`kode_barang` AS `kode_barang`,`tbl_barang`.`nama_barang` AS `nama_barang`,`tbl_barang`.`stok_barang` AS `stok_barang` from (`tbl_pembelian` left join `tbl_barang` on((`tbl_barang`.`id_barang` = `tbl_pembelian`.`id_barang`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_penjualan`
--
DROP TABLE IF EXISTS `view_penjualan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_penjualan`  AS  select `tbl_penjualan`.`id_penjualan` AS `id_penjualan`,`tbl_penjualan`.`id_transaksi` AS `id_transaksi`,`tbl_penjualan`.`id_barang` AS `id_barang`,`tbl_barang`.`kode_barang` AS `kode_barang`,`tbl_barang`.`nama_barang` AS `nama_barang`,`tbl_barang`.`merk_barang` AS `merk_barang`,`tbl_barang`.`distributor` AS `distributor`,`tbl_barang`.`jenis` AS `jenis`,`tbl_penjualan`.`jumlah_penjualan` AS `jumlah_penjualan`,`tbl_penjualan`.`harga_jual` AS `harga_jual`,`tbl_penjualan`.`harga_kulak` AS `harga_kulak` from (`tbl_penjualan` left join `tbl_barang` on((`tbl_barang`.`id_barang` = `tbl_penjualan`.`id_barang`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_penjualan_jasa`
--
DROP TABLE IF EXISTS `view_penjualan_jasa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_penjualan_jasa`  AS  select `tbl_penjualan_jasa`.`id_penjualan_jasa` AS `id_penjualan_jasa`,`tbl_penjualan_jasa`.`id_transaksi` AS `id_transaksi`,`tbl_penjualan_jasa`.`id_jasa` AS `id_jasa`,`tbl_jasa`.`nama_jasa` AS `nama_jasa`,`tbl_jasa`.`harga_jasa` AS `harga_jasa` from (`tbl_penjualan_jasa` left join `tbl_jasa` on((`tbl_jasa`.`id_jasa` = `tbl_penjualan_jasa`.`id_jasa`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_piutang`
--
DROP TABLE IF EXISTS `view_piutang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_piutang`  AS  select `tbl_piutang`.`id_piutang` AS `id_piutang`,`tbl_piutang`.`tgl_jatuh_tempo` AS `tgl_jatuh_tempo`,`tbl_piutang`.`status_piutang` AS `status_piutang`,`tbl_piutang`.`id_transaksi` AS `id_transaksi`,`tbl_transaksi`.`tgl_transaksi` AS `tgl_transaksi`,`tbl_piutang`.`id_client` AS `id_client`,`tbl_client`.`nama_client` AS `nama_client`,`tbl_client`.`no_telp` AS `no_telp` from ((`tbl_piutang` left join `tbl_transaksi` on((`tbl_transaksi`.`id_transaksi` = `tbl_piutang`.`id_transaksi`))) left join `tbl_client` on((`tbl_client`.`id_client` = `tbl_piutang`.`id_client`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_penjualan`
--
DROP TABLE IF EXISTS `vw_penjualan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_penjualan`  AS  select `penjualan`.`jumlah_penjualan` AS `jumlah_penjualan`,`penjualan`.`harga_jual` AS `harga_jual`,`penjualan`.`id_barang` AS `id_barang`,`penjualan`.`harga_kulak` AS `harga_kulak`,`barang`.`kode_barang` AS `kode_barang`,`barang`.`nama_barang` AS `nama_barang`,`barang`.`merk_barang` AS `merk_barang`,`barang`.`stok_barang` AS `stok_barang`,`barang`.`pagu` AS `pagu`,`transaksi`.`tgl_transaksi` AS `tgl_transaksi`,`pengguna`.`nama` AS `nama`,`piutang`.`status_piutang` AS `status_piutang` from ((((`tbl_penjualan` `penjualan` join `tbl_transaksi` `transaksi` on((`penjualan`.`id_transaksi` = `transaksi`.`id_transaksi`))) join `tbl_pengguna` `pengguna` on((`transaksi`.`id_pengguna` = `pengguna`.`id_pengguna`))) join `tbl_barang` `barang` on((`barang`.`id_barang` = `penjualan`.`id_barang`))) left join `tbl_piutang` `piutang` on((`piutang`.`id_transaksi` = `penjualan`.`id_transaksi`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_penjualan_jasa`
--
DROP TABLE IF EXISTS `vw_penjualan_jasa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_penjualan_jasa`  AS  select `penjualan_jasa`.`id_jasa` AS `id_jasa`,`transaksi`.`tgl_transaksi` AS `tgl_transaksi`,`pengguna`.`nama` AS `nama`,`jasa`.`nama_jasa` AS `nama_jasa`,`jasa`.`harga_jasa` AS `harga_jasa` from (((`tbl_penjualan_jasa` `penjualan_jasa` join `tbl_jasa` `jasa` on((`penjualan_jasa`.`id_jasa` = `jasa`.`id_jasa`))) join `tbl_transaksi` `transaksi` on((`penjualan_jasa`.`id_transaksi` = `transaksi`.`id_transaksi`))) join `tbl_pengguna` `pengguna` on((`pengguna`.`id_pengguna` = `transaksi`.`id_pengguna`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_piutang`
--
DROP TABLE IF EXISTS `vw_piutang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_piutang`  AS  select `piutang`.`id_piutang` AS `id_piutang`,`piutang`.`id_transaksi` AS `id_transaksi`,`piutang`.`tgl_jatuh_tempo` AS `tgl_jatuh_tempo`,`piutang`.`status_piutang` AS `status_piutang`,`transaksi`.`tgl_transaksi` AS `tgl_transaksi`,`pengguna`.`nama` AS `nama`,`client`.`nama_client` AS `nama_client`,`client`.`no_telp` AS `no_telp`,`penjualan`.`harga_jual` AS `harga_jual`,`penjualan`.`harga_kulak` AS `harga_kulak`,`penjualan`.`jumlah_penjualan` AS `jumlah_penjualan` from ((((`tbl_piutang` `piutang` join `tbl_transaksi` `transaksi` on((`piutang`.`id_transaksi` = `transaksi`.`id_transaksi`))) join `tbl_pengguna` `pengguna` on((`pengguna`.`id_pengguna` = `transaksi`.`id_pengguna`))) join `tbl_client` `client` on((`client`.`id_client` = `piutang`.`id_client`))) join `tbl_penjualan` `penjualan` on((`penjualan`.`id_transaksi` = `piutang`.`id_transaksi`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `tbl_jasa`
--
ALTER TABLE `tbl_jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indexes for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tbl_penjualan_jasa`
--
ALTER TABLE `tbl_penjualan_jasa`
  ADD PRIMARY KEY (`id_penjualan_jasa`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tbl_piutang`
--
ALTER TABLE `tbl_piutang`
  ADD PRIMARY KEY (`id_piutang`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jasa`
--
ALTER TABLE `tbl_jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_penjualan_jasa`
--
ALTER TABLE `tbl_penjualan_jasa`
  MODIFY `id_penjualan_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_piutang`
--
ALTER TABLE `tbl_piutang`
  MODIFY `id_piutang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  ADD CONSTRAINT `tbl_pembelian_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`),
  ADD CONSTRAINT `tbl_pembelian_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `tbl_pengguna` (`id_pengguna`);

--
-- Constraints for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD CONSTRAINT `tbl_penjualan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`),
  ADD CONSTRAINT `tbl_penjualan_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `tbl_transaksi` (`id_transaksi`);

--
-- Constraints for table `tbl_penjualan_jasa`
--
ALTER TABLE `tbl_penjualan_jasa`
  ADD CONSTRAINT `tbl_penjualan_jasa_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tbl_transaksi` (`id_transaksi`);

--
-- Constraints for table `tbl_piutang`
--
ALTER TABLE `tbl_piutang`
  ADD CONSTRAINT `tbl_piutang_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `tbl_client` (`id_client`),
  ADD CONSTRAINT `tbl_piutang_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `tbl_transaksi` (`id_transaksi`);

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tbl_pengguna` (`id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

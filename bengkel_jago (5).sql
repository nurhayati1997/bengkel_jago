-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 05:14 PM
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
  `keterangan` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `pagu` int(11) NOT NULL,
  `harga_kulak` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `distributor` varchar(255) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `hapus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `kode_barang`, `nama_barang`, `merk_barang`, `keterangan`, `lokasi`, `stok_barang`, `pagu`, `harga_kulak`, `harga_jual`, `distributor`, `jenis`, `hapus`) VALUES
(1, '750-16', 'Ban', 'Dunlop', '-', '-', 0, 0, 0, 1120000, 'gajah mada ', 'Ban Truk', 0),
(2, '750-16', 'Ban', 'Aspira', '-', '-', 0, 0, 0, 1242572, 'astra tbk', 'Ban Truk', 0),
(3, '750-16', 'Ban', 'Aspira', '-', '-', 0, 0, 0, 1475000, 'astra tbk', 'Ban Truk', 0),
(4, '750-16', 'Ban', 'Gajah Tunggal', '-', '-', 0, 0, 0, 1210000, 'gajah mada ', 'Ban Truk', 0),
(5, '750-16', 'Ban', 'swallow Vmiller', '-', '-', 0, 0, 0, 1370000, 'gajah mada ', 'Ban Truk', 0),
(6, '750-16', 'Ban', 'Swallow HD', '-', '-', 0, 0, 0, 1170000, 'gajah mada ', 'Ban Truk', 0),
(7, '750-16', 'Ban', 'Aulus Halus', '-', '-', 0, 0, 0, 1850000, 'gajah mada ', 'Ban Truk', 0),
(8, '750-16', 'Ban', 'Aulus Kasar', '-', '-', 0, 0, 0, 1800000, 'gajah mada ', 'Ban Truk', 0),
(9, '750-16', 'Ban', 'Sailun', '-', '-', 0, 0, 0, 1700000, 'sailun ', 'Ban Truk', 0),
(10, '750-16', 'Ban', 'Giti Radial', '-', '-', 0, 0, 0, 1685000, 'gajah mada ', 'Ban Truk', 0),
(11, '750-16', 'Ban', 'Giti Radial', '-', '-', 0, 0, 0, 1685000, 'gajah mada ', 'Ban Truk', 0),
(12, '750-16', 'Ban', 'Goodyear', '-', '-', 0, 0, 0, 1100000, 'gajah mada ', 'Ban Truk', 0),
(13, '825-16', 'Ban', 'Gajah Tunggal', '-', '-', 0, 0, 0, 1410000, 'gajah mada ', 'Ban Truk', 0),
(14, '825-16', 'Ban', 'Swallow HD', '-', '-', 0, 0, 0, 1410000, 'gajah mada ', 'Ban Truk', 0),
(15, '750-15', 'Ban', 'gajah tunggal', '-', '-', 0, 0, 0, 1090000, 'gajah mada ', 'Ban Truk', 0),
(16, '235-75-15', 'Ban', 'Bridgestone Dueler', '-', '-', 0, 0, 0, 905000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(17, '195-14', 'Ban', 'Bridgestone Durafis', '-', '-', 0, 0, 0, 775000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(18, '185-14', 'Ban', 'Bridgestone  Durafis', '-', '-', 0, 0, 0, 675000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(19, '175-13', 'Ban', 'Bridgestone Durafis', '-', '-', 0, 0, 0, 610000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(20, '165-13', 'Ban', 'Bridgestone Durafis', '-', '-', 0, 0, 0, 580000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(21, '185-55-16', 'Ban', 'Bridgestone Tecno', '-', '-', 0, 0, 0, 0, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(22, '205-65-15', 'Ban', 'Bridgestone Ecopia', '-', '-', 0, 0, 0, 700000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(23, '195-65-15', 'Ban', 'Bridgestone Ecopia', '-', '-', 0, 0, 0, 650000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(24, '185-65-15', 'Ban', 'Bridgestone Ecopia', '-', '-', 0, 0, 0, 625000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(25, '195-70-14', 'Ban', 'Bridgestone Ecopia', '-', '-', 0, 0, 0, 600000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(26, '185-70-14', 'Ban', 'Bridgestone Ecopia', '-', '-', 0, 0, 0, 575000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(27, '175-65-14', 'Ban', 'Bridgestone Ecopia', '-', '-', 0, 0, 0, 550000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(28, '205-65-16', 'Ban', 'bridgestone Ecopia', '-', '-', 0, 0, 0, 775000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(29, '205-65-15', 'Ban', 'Bridgestone B390', '-', '-', 0, 0, 0, 800000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(30, '235-75-16', 'Ban', 'Bridgestone Durafis', '-', '-', 0, 0, 0, 1005000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(31, '175-70-12', 'Ban', 'Bridgestone Ecopia', '-', '-', 0, 0, 0, 400000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(32, '155-80-12', 'Ban', 'Bridgestone Ecopia', '-', '-', 0, 0, 0, 350000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(33, '225-75-16', 'Ban', 'Bridgestone Durafis', '-', '-', 0, 0, 0, 1050000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(34, '195-15', 'Ban', 'Bridgestone Durafis', '-', '-', 0, 0, 0, 950000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(35, '600-13', 'Ban', 'Gajah Tunggal', '-', '-', 0, 0, 0, 470000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(36, '640-13', 'Ban', 'Gajah Tunggal', '-', '-', 0, 0, 0, 420000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(37, '550-13', 'Ban', 'Gajah Tunggal', '-', '-', 0, 0, 0, 345000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(38, '500-12', 'Ban', 'Gajah Tunggal', '-', '-', 0, 0, 0, 300000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(39, '175-13', 'Ban', 'Gajah Tunggal Maximiler', '-', '-', 0, 0, 0, 458000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(40, '155-12', 'Ban', 'Gajah Tunggal Maximiler', '-', '-', 0, 0, 0, 370000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(41, '185-65-15', 'Ban', 'Gajah Tunggal Champiro', '-', '-', 0, 0, 0, 500000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(42, '175-65-14', 'Ban', 'Gajah Tunggal Champiro', '-', '-', 0, 0, 0, 450000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(43, '175-70-13', 'Ban', 'Gajah Tunggal Radial', '-', '-', 0, 0, 0, 385000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(44, '175-70-12', 'Ban', 'Gajah Tunggal Radial', '-', '-', 0, 0, 0, 338000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(45, '165-13', 'Ban', 'Gajah Tunggal Maximiler', '-', '-', 0, 0, 0, 438000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(46, '185-65-15', 'Ban', 'Gajah Tunggal Champiro', '-', '-', 0, 0, 0, 490000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(47, '175-65-14', 'Ban', 'Gajah Tunggal', '-', '-', 0, 0, 0, 450000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(48, '195-65-15', 'Ban', 'Gajah Tunggal Champiro', '-', '-', 0, 0, 0, 485680, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(49, '195-70-14', 'Ban', 'Gajah Tunggal Champiro', '-', '-', 0, 0, 0, 495000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(50, '185-14', 'Ban', 'Gajah Tunggal Maximiler', '-', '-', 0, 0, 0, 520000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(51, '165-55-13', 'Ban', 'Gajah Tunggal', '-', '-', 0, 0, 0, 345000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(52, '155-70-12', 'Ban', 'Gajah Tunggal', '-', '-', 0, 0, 0, 295000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(53, '175-70-12', 'Ban', 'Gajah Tunggal', '-', '-', 0, 0, 0, 360000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(54, '700-14', 'Ban', 'Gajah Tunggal', '-', '-', 0, 0, 0, 520000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(55, '205-65-15', 'Ban', 'Gajah Tunggal Champiro', '-', '-', 0, 0, 0, 575000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(56, '155-80-12', 'Ban', 'Gajah Tunggal Radial', '-', '-', 0, 0, 0, 320000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(57, '185-70-14', 'Ban', 'Gajah Tunggal Champiro', '-', '-', 0, 0, 0, 450000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(58, '205-65-15', 'Ban', 'Dunlop D80', '-', '-', 0, 0, 0, 685000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(59, '185-65-15', 'Ban', 'Dunlop Sport300', '-', '-', 0, 0, 0, 650000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(60, '195-70-14', 'Ban', 'Dunlop SpTouring', '-', '-', 0, 0, 0, 500000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(61, '185-70-14', 'Ban', 'Dunlop Sp10', '-', '-', 0, 0, 0, 485000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(62, '185-55-15', 'Ban', 'Dunlop', '-', '-', 0, 0, 0, 570000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(63, '185-80-13', 'Ban', 'Dunlop', '-', '-', 0, 0, 0, 425000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(64, '175-70-12', 'Ban', 'Dunlop Himex', '-', '-', 0, 0, 0, 425000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(65, '165-80-13', 'Ban', 'Dunlop Himex', '-', '-', 0, 0, 0, 440000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(66, '175-70-12', 'Ban', 'Dunlop', '-', '-', 0, 0, 0, 360000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(67, '205-65-16', 'Ban', 'Dunlop Enasive', '-', '-', 0, 0, 0, 670000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(68, '185-55-16', 'Ban', 'Dunlop Enasive', '-', '-', 0, 0, 0, 600000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(69, '175-65-14', 'Ban', 'Dunlop Enasive', '-', '-', 0, 0, 0, 450000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(70, '185-14', 'Ban', 'Dunlop', '-', '-', 0, 0, 0, 650000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(71, '640-13', 'Ban', 'Goodyear', '-', '-', 0, 0, 0, 445000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(72, '700-14', 'Ban', 'Goodyear', '-', '-', 0, 0, 0, 570000, 'gajah mada ', 'Ban Mobil Pribadi', 0),
(73, 'tmo b 1', 'oli ', 'toyota ', '-', '-', 0, 0, 0, 66000, 'agis', 'universal', 0),
(74, 'tmo b 4', 'oli ', 'toyota', '-', '-', 0, 0, 0, 256000, 'agis', 'universal', 0),
(75, 'tmo d 1', 'oli ', 'toyota ', '-', '-', 0, 0, 0, 67000, 'agis ', 'universal', 0),
(76, 'tmo d 4', 'oli ', 'toyota', '-', '-', 0, 0, 0, 260000, 'agis', 'universal', 0),
(77, 's71 ', 'oli ', 'shell ', '-', '-', 0, 0, 0, 75000, 'agis ', 'universal', 0),
(78, 's74', 'oli ', 'shell ', '-', '-', 0, 0, 0, 295000, 'agis ', 'universal', 0),
(79, 's61 ', 'oli ', 'shell ', '-', '-', 0, 0, 0, 63000, 'agis ', 'universal', 0),
(80, 's64', 'oli ', 'shell ', '-', '-', 0, 0, 0, 240000, 'agis', 'universal', 0),
(81, 's51', 'oli ', 'shell ', '-', '-', 0, 0, 0, 53500, 'agis ', 'universal', 0),
(82, 's54', 'oli ', 'shell ', '-', '-', 0, 0, 0, 209000, 'agis ', 'universal', 0),
(83, 'r41', 'oli ', 'shell ', '-', '-', 0, 0, 0, 44000, 'agis', 'universal', 0),
(84, 'r45', 'oli ', 'shell ', '-', '-', 0, 0, 0, 200000, 'agis', 'universal', 0),
(85, 'sgo 10/40 1', 'oli ', 'suzuki ', '-', '-', 0, 0, 0, 66000, 'agis ', 'universal', 0),
(86, 'sgo 10/40 4 ', 'oli ', 'suzuki', '-', '-', 0, 0, 0, 275000, 'agis', 'universal', 0),
(87, 'sgo 5/30 1 ', 'oli ', 'suzuki', '-', '-', 0, 0, 0, 78000, 'agis ', 'universal', 0),
(88, 'top diesel 1', 'oli ', 'top 1', '-', '-', 0, 0, 0, 48000, 'agis', 'universal', 0),
(89, 'top diesel 5', 'oli ', 'top 1', '-', '-', 0, 0, 0, 230000, 'agis', 'universal', 0),
(90, 'p11', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 33000, 'trimangun', 'mesran super', 0),
(91, 'p14', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 115275, 'trimangun', 'mesran super ', 0),
(92, 'p21', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 36975, 'trimangun', 'prima xp', 0),
(93, 'p24', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 139200, 'trimangun', 'prima xp', 0),
(94, 'p31', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 31320, 'trimangun', 'meditran s', 0),
(95, 'p35', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 141375, 'trimangun', 'meditran s', 0),
(96, 'p310', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 279270, 'trimangun', 'meditran s', 0),
(97, 'p41', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 34365, 'trimangun', 'meditran sc', 0),
(98, 'p45', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 153550, 'trimangun', 'meditran sc', 0),
(99, 'p410', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 302325, 'trimangun', 'meditran sc', 0),
(100, 'p51', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 43065, 'trimangun', 'meditran sx', 0),
(101, 'p54', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 157905, 'trimangun', 'meditran sx', 0),
(102, 'p510', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 382365, 'trimangun', 'meditran sx', 0),
(103, 'p61', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 0, 'trimangun', 'mesran b40', 0),
(104, 'p64', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 0, 'trimangun', 'mesrab b40', 0),
(105, 'p65', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 137025, 'trimangun', 'mesran b40', 0),
(106, 'p7', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 153555, 'trimangun', 'rored 90', 0),
(107, 'p8', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 157905, 'trimangun', 'rored 140', 0),
(108, 'cas 10/40 1', 'oli ', 'castrol', '-', '-', 0, 0, 0, 0, 'agis/spm', 'universal', 0),
(109, 'cas 10/40 4', 'oli ', 'castrol', '-', '-', 0, 0, 0, 0, 'agis/spm ', 'universal', 0),
(110, 'cas 15/50 1', 'oli ', 'castrol', '-', '-', 0, 0, 0, 0, 'agis/spm', 'universal', 0),
(111, 'cas 15/50 4', 'oli ', 'castrol', '-', '-', 0, 0, 0, 0, 'agis/spm', 'universal', 0),
(112, 'cas15/40 1', 'oli ', 'castrol', '-', '-', 0, 0, 0, 0, 'agis/spm', 'universal', 0),
(113, 'cas15/40 4', 'oli ', 'castrol', '-', '-', 0, 0, 0, 0, 'agis/spm', 'universal', 0),
(114, 'man 90', 'oli ', 'castrol', '-', '-', 0, 0, 0, 56700, 'agis/spm', 'universal', 0),
(115, 'ax 140', 'oli ', 'castrol', '-', '-', 0, 0, 0, 0, 'agis/spm', 'universal', 0),
(116, 'fas 10/40 1 ', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 66755, 'trimangun', 'universal', 0),
(117, 'fas 10/40 4', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 0, 'trimangun', 'universal', 0),
(118, 'fas 10/30 1', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 69915, 'trimangun', 'universal', 0),
(119, 'fas 10/30 4', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 0, 'trimangun', 'universal', 0),
(120, 'fas dis 1', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 0, 'trimangun', 'universal', 0),
(121, 'fas dis 4', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 0, 'trimangun', 'universal', 0),
(122, 'fas 0/20', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 0, 'trimangun', 'mobil lcgc', 0),
(123, 'fas 5/30', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 184166, 'trimangun', 'mobil lcgc', 0),
(124, 'fas 15/50 1', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 0, 'trimangun', 'universal', 0),
(125, 'fas 15/50 4', 'oli ', 'pertamina ', '-', '-', 0, 0, 0, 0, 'trimangun', 'universal', 0),
(126, 'vel10/40 1', 'oli ', 'jumbo ', '-', '-', 0, 0, 0, 0, 'jumbo power tbk', 'universal', 0),
(127, 'vel10/40 4', 'oli ', 'jumbo ', '-', '-', 0, 0, 0, 0, 'jumbo power tbk', 'universal', 0),
(128, 'ide10/40 1', 'oli ', 'idiemetsu', '-', '-', 0, 0, 0, 0, 'idiemetsu', 'universal', 0),
(129, 'ide10/40 4', 'oli ', 'idiemetsu', '-', '-', 0, 0, 0, 0, 'idiemetsu', 'universal', 0),
(130, 'ide15/40 1', 'oli ', 'idiemetsu', '-', '-', 0, 0, 0, 0, 'idiemetsu', 'universal', 0),
(131, 'ide15/40 4', 'oli ', 'idiemetsu', '-', '-', 0, 0, 0, 0, 'idiemetsu', 'universal', 0),
(132, 'shl15/40 1', 'oli ', 'shellhellix', '-', '-', 0, 0, 0, 0, 'agis/fatmajaya', 'universal', 0),
(133, 'shl15/40 4', 'oli ', 'shellhellix', '-', '-', 0, 0, 0, 0, 'agis/fatmajaya', 'universal', 0),
(134, 'shl10/40 1', 'oli ', 'shellhellix', '-', '-', 0, 0, 0, 756000, 'agis/fatmajaya', 'universal', 0),
(135, 'shl10/40 4', 'oli ', 'shellhellix', '-', '-', 0, 0, 0, 0, 'agis/fatmajaya', 'universal', 0),
(136, 'shl5/40 1', 'oli ', 'shellhellix', '-', '-', 0, 0, 0, 900000, 'agis/fatmajaya', 'universal', 0),
(137, 'shl5/40 4', 'oli ', 'shellhellix', '-', '-', 0, 0, 0, 1180000, 'agis/fatmajaya', 'universal', 0),
(138, 'mbls10/40 1', 'oli ', 'mobil super', '-', '-', 0, 0, 0, 0, 'mobil1', 'universal', 0),
(139, 'mbls10/40', 'oli ', 'mobil super', '-', '-', 0, 0, 0, 0, 'mobil1', 'universal', 0),
(140, 'mtroil 0/20', 'oli ', 'motor oil', '-', '-', 0, 0, 0, 0, 'motor oil', 'universal', 0),
(141, 'unitrb15/40 5', 'oli ', 'unioil', '-', '-', 0, 0, 0, 0, 'fatmajaya', 'universal', 0),
(142, 'uni20/50 1', 'oli ', 'unioil', '-', '-', 0, 0, 0, 0, 'fatmajaya', 'universal', 0),
(143, 'uni20/50 4', 'oli ', 'unioil', '-', '-', 0, 0, 0, 0, 'fatmajaya', 'universal', 0),
(144, 'lpx 5/30 1', 'oli ', 'lupromax', '-', '-', 0, 0, 0, 0, 'lupromax', 'universal', 0),
(145, 'lpx5/30 4', 'oli ', 'lupromax', '-', '-', 0, 0, 0, 0, 'lupromax', 'universal', 0),
(146, 'fuso15/40 5', 'oli ', 'fuso', '-', '-', 0, 0, 0, 200000, 'bumen', 'universal', 0),
(147, 'fd10/40 4', 'oli ', 'federal', '-', '-', 0, 0, 0, 0, 'federal', 'universal', 0),
(148, 'fd15/40 1', 'oli ', 'federal', '-', '-', 0, 0, 0, 0, 'federal', 'universal', 0),
(149, 'rd h 1', 'air radiator', 'megacools', '-', '-', 0, 0, 0, 0, 'yuasa', 'universal', 0),
(150, 'rd m 1', 'air radiator', 'megacools', '-', '-', 0, 0, 0, 0, 'yuasa', 'universal', 0),
(151, 'rd h 5', 'air radiator', 'vegacools', '-', '-', 0, 0, 0, 0, 'jumbo power tbk', 'universal', 0),
(152, 'rd m 5', 'air radiator', 'vegacools', '-', '-', 0, 0, 0, 0, 'jumbo power tbk', 'universal', 0),
(153, 'mst h 5', 'air radiator', 'master', '-', '-', 0, 0, 0, 0, 'master', 'universal', 0),
(154, 'mst m 5', 'air radiator', 'master', '-', '-', 0, 0, 0, 0, 'master', 'universal', 0),
(155, 'jmb140 1', 'oli gardan', 'jumbo ', '-', '-', 0, 0, 0, 575000, 'jumbo power tbk', 'universal', 0),
(156, 'jmb90 1', 'oli vers', 'jumbo ', '-', '-', 0, 0, 0, 574181, 'jumbo power tbk', 'universal', 0),
(157, 'tgb 1', 'oli ', 'tiga berlian', '-', '-', 0, 0, 0, 0, 'bumen', 'universal', 0),
(158, 'Prs m 1', 'minyak rem', 'prestone', '-', '-', 0, 0, 0, 0, 'prestone', 'universal', 0),
(159, 'prs p 1', 'minyak rem', 'prestone', '-', '-', 0, 0, 0, 0, 'prestone', 'universal', 0),
(160, 'tp cvt 1', 'oli ', 'top 1', '-', '-', 0, 0, 0, 0, 'top 1', 'universal', 0),
(161, 'tp atf 1', 'oli ', 'top 1', '-', '-', 0, 0, 0, 0, 'top 1', 'universal', 0),
(162, 'prs atf 1', 'oli ', 'prestone', '-', '-', 0, 0, 0, 6950000, 'prestone', 'universal', 0),
(163, 'jmbPsf 1', 'power stering', 'jumbo ', '-', '-', 0, 0, 0, 440909, 'jumbo power tbk', 'universal', 0),
(164, 'jmbpsf300ml', 'power stering', 'jumbo ', '-', '-', 0, 0, 0, 0, 'jumbo power tbk', 'universal', 0),
(165, 'rdx p 300ml', 'minyak rem', 'redex', '-', '-', 0, 0, 0, 0, 'redex', 'universal', 0),
(166, 'rdx m 300ml', 'minyak rem', 'redex', '-', '-', 0, 0, 0, 0, 'redex', 'universal', 0),
(167, 'jmb p 300ml', 'minyak rem', 'jumbo ', '-', '-', 0, 0, 0, 0, 'jumbo power tbk', 'universal', 0),
(168, 'jmb m 300ml', 'minyak rem', 'jumbo ', '-', '-', 0, 0, 0, 0, 'jumbo power tbk', 'universal', 0),
(169, 'cvtbelt', 'minyak fanbel', 'master', '-', '-', 0, 0, 0, 0, 'prestone', 'universal', 0),
(170, 'contactclener', 'contactclener', 'wealthy', '-', '-', 0, 0, 0, 0, 'wealthy', 'universal', 0),
(171, 'injector cleaner', 'injectorclener', 'wealthy', '-', '-', 0, 0, 0, 0, 'wealthy', 'universal', 0),
(172, 'ryl 250ml', 'minyak pintu', 'master', '-', '-', 0, 0, 0, 0, 'master', 'universal', 0),
(173, 'chainlube 300ml', 'minyak rantai', 'megacools', '-', '-', 0, 0, 0, 0, 'yuasa', 'universal', 0),
(174, 'chainlube 170ml', 'minyak rantai', 'megacools', '-', '-', 0, 0, 0, 0, 'yuasa', 'universal', 0),
(175, 'carbuclener', 'minyak karat', 'redex', '-', '-', 0, 0, 0, 0, 'redex', 'universal', 0),
(176, 'firestop400ml', 'pedam api', 'fire', '-', '-', 0, 0, 0, 0, 'sjm', 'universal', 0),
(177, 'jmbdiesel', 'oli diesel treatment', 'jumbo ', '-', '-', 0, 0, 0, 0, 'jumbo power tbk', 'diesel', 0),
(178, 'ac cleaner', 'ac cleaner', 'zegen', '-', '-', 0, 0, 0, 60000, 'zegen', 'universal', 0),
(179, 'injector cleaner diesel', 'injectorclener', 'zegen', '-', '-', 0, 0, 0, 125000, 'zegen', 'diesel', 0),
(180, '750-16', 'Ban', 'Bridgestone', '-', '-', 0, 0, 0, 1340000, 'gajah mada ', 'Ban Truk', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jasa`
--

CREATE TABLE `tbl_jasa` (
  `id_jasa` int(11) NOT NULL,
  `nama_jasa` varchar(255) NOT NULL,
  `harga_jasa` int(11) NOT NULL,
  `hapus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'moham', '$2y$10$68xDjkJ/U2F/DvtI.M2hc.Z9yv2ZpqrOc2XzjRakTbevi7xypN/cu', 1, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan_jasa`
--

CREATE TABLE `tbl_penjualan_jasa` (
  `id_penjualan_jasa` int(11) NOT NULL,
  `id_jasa` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
,`jenis` varchar(100)
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
,`jenis` varchar(100)
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_penjualan`  AS  select `penjualan`.`jumlah_penjualan` AS `jumlah_penjualan`,`penjualan`.`harga_jual` AS `harga_jual`,`penjualan`.`id_barang` AS `id_barang`,`penjualan`.`harga_kulak` AS `harga_kulak`,`barang`.`kode_barang` AS `kode_barang`,`barang`.`nama_barang` AS `nama_barang`,`barang`.`merk_barang` AS `merk_barang`,`barang`.`jenis` AS `jenis`,`barang`.`stok_barang` AS `stok_barang`,`barang`.`pagu` AS `pagu`,`transaksi`.`tgl_transaksi` AS `tgl_transaksi`,`pengguna`.`nama` AS `nama`,`piutang`.`status_piutang` AS `status_piutang` from ((((`tbl_penjualan` `penjualan` join `tbl_transaksi` `transaksi` on((`penjualan`.`id_transaksi` = `transaksi`.`id_transaksi`))) join `tbl_pengguna` `pengguna` on((`transaksi`.`id_pengguna` = `pengguna`.`id_pengguna`))) join `tbl_barang` `barang` on((`barang`.`id_barang` = `penjualan`.`id_barang`))) left join `tbl_piutang` `piutang` on((`piutang`.`id_transaksi` = `penjualan`.`id_transaksi`))) ;

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
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jasa`
--
ALTER TABLE `tbl_jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penjualan_jasa`
--
ALTER TABLE `tbl_penjualan_jasa`
  MODIFY `id_penjualan_jasa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_piutang`
--
ALTER TABLE `tbl_piutang`
  MODIFY `id_piutang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

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

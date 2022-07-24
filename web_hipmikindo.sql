-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 01:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_hipmikindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `status_verfikasi`
--

CREATE TABLE `status_verfikasi` (
  `id_status_verfikasi` int(11) NOT NULL,
  `status_verifikasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(256) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `id_user_level` int(10) NOT NULL,
  `id_user_detail` varchar(256) NOT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `no_telp`, `id_user_level`, `id_user_detail`, `token`) VALUES
('06aeebeac840c20b995e71da2e602ae7', 'baru', '123', 'baru@gmail.com', '0812712671', 2, '06aeebeac840c20b995e71da2e602ae7', NULL),
('0f49d8519cb0233a78a143460f18d061', 'kresna123', '123', 'malian123@gmail.com', '0812781728', 2, '0f49d8519cb0233a78a143460f18d061', NULL),
('805970851350129b90d436fc887f1740', 'tes', 'tes', 'taufiiqulhakim23@gmail.com', '+62812781728', 2, '805970851350129b90d436fc887f1740', NULL),
('9cfe6b2a690f026c5d0531709354ac71', 'tes', '123', 'tespupr@gmail.com', '0812781728', 2, '9cfe6b2a690f026c5d0531709354ac71', NULL),
('d41d8cd98f00b204e9800998ecf8427e', 'admin', 'admin', 'admin@gmail.com', '081217812', 1, 'd41d8cd98f00b204e9800998ecf8427e', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user_detail` varchar(256) NOT NULL,
  `nama_lengkap` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nik` varchar(40) DEFAULT NULL,
  `tempat_lahir` varchar(40) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `penanggung_jawab` varchar(40) DEFAULT NULL,
  `jenis_usaha` varchar(40) DEFAULT NULL,
  `nama_usaha` varchar(50) DEFAULT NULL,
  `jenis_produk_jasa` varchar(40) DEFAULT NULL,
  `merk_produk_jasa` varchar(40) DEFAULT NULL,
  `kapasitas_usaha` varchar(40) DEFAULT NULL,
  `pendapatan` int(100) DEFAULT NULL,
  `mulai_usaha` date DEFAULT NULL,
  `jumlah_karyawan` varchar(40) DEFAULT NULL,
  `mesin_produksi` varchar(40) DEFAULT NULL,
  `luas_lahan_ruang` varchar(40) DEFAULT NULL,
  `ijin_dimiliki` varchar(40) DEFAULT NULL,
  `logo_usaha` varchar(250) DEFAULT NULL,
  `keluhan_usaha` text DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `id_status_verifikasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user_detail`, `nama_lengkap`, `alamat`, `nik`, `tempat_lahir`, `tanggal_lahir`, `penanggung_jawab`, `jenis_usaha`, `nama_usaha`, `jenis_produk_jasa`, `merk_produk_jasa`, `kapasitas_usaha`, `pendapatan`, `mulai_usaha`, `jumlah_karyawan`, `mesin_produksi`, `luas_lahan_ruang`, `ijin_dimiliki`, `logo_usaha`, `keluhan_usaha`, `ktp`, `id_status_verifikasi`) VALUES
('d41d8cd98f00b204e9800998ecf8427e', NULL, NULL, '', '', '0000-00-00', '', '', NULL, '', '', '', 0, '0000-00-00', '', '', '', '', '', NULL, NULL, 1),
('0f49d8519cb0233a78a143460f18d061', 'Kripik Ubi', 'Jl. Sekip', '', '', '0000-00-00', '', '', NULL, '', '', '', 0, '0000-00-00', '', '', '', '', 'f851d1543c51fba6a8498d376f1db9b4.png', NULL, NULL, 4),
('06aeebeac840c20b995e71da2e602ae7', 'Cuciyok', 'Jl. Sekip', '', '', '0000-00-00', '', '', NULL, '', '', '', 0, '0000-00-00', '', '', '', '', '3aa830525fafca3d727df2add62f6484.png', NULL, NULL, 1),
('9cfe6b2a690f026c5d0531709354ac71', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
('805970851350129b90d436fc887f1740', 'Taufiiqulhakim 10219021', 'Jl. Sekip', '061827182871812', 'Palembang', '1111-02-23', '2019220028', 'tes', 'Cuciyok', 'tes', 'tes', 'tes', 100, '1291-02-23', '100', 'ye', 'ey', 'eh', 'ed29ec9973639509f70e54f0ca96c32f_logo_usaha.png', 'eh', 'ed29ec9973639509f70e54f0ca96c32f_ktp.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id_user_level` int(30) NOT NULL,
  `user_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id_user_level`, `user_level`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `status_verfikasi`
--
ALTER TABLE `status_verfikasi`
  ADD PRIMARY KEY (`id_status_verfikasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `status_verfikasi`
--
ALTER TABLE `status_verfikasi`
  MODIFY `id_status_verfikasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

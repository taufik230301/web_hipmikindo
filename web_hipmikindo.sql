-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 03:44 AM
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
('0f49d8519cb0233a78a143460f18d061', 'kresna123', '123', 'malian123@gmail.com', '0812781728', 2, '0f49d8519cb0233a78a143460f18d061', NULL),
('324cc16f5879fe7c22145281456f2bc8', 'malian', '123', 'malian123@gmail.com', '+62812781728', 2, '324cc16f5879fe7c22145281456f2bc8', NULL),
('50207cacbc9af45e566eb638f8ed12b2', 'malas', '1234', 'taufiiqul.hakim@binus.ac.id', '0812781728', 2, '50207cacbc9af45e566eb638f8ed12b2', '93989f35fdf51a3e152b5bb627036686'),
('d41d8cd98f00b204e9800998ecf8427e', 'admin', 'admin', 'admin@gmail.com', '081217812', 1, 'd41d8cd98f00b204e9800998ecf8427e', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user_detail` varchar(256) NOT NULL,
  `nama_lengkap` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `logo_usaha` varchar(250) NOT NULL,
  `id_status_verifikasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user_detail`, `nama_lengkap`, `alamat`, `logo_usaha`, `id_status_verifikasi`) VALUES
('d41d8cd98f00b204e9800998ecf8427e', NULL, NULL, '', 1),
('0f49d8519cb0233a78a143460f18d061', 'Kripik Ubi', 'Jl. Sekip', 'f851d1543c51fba6a8498d376f1db9b4.png', 4),
('50207cacbc9af45e566eb638f8ed12b2', 'Malas Koding', 'Jl.Belanti', 'de419f84840fab46835e738bd233e696.png', 4),
('324cc16f5879fe7c22145281456f2bc8', NULL, NULL, '', 3);

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

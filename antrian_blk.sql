-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 10:26 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian_blk`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id` int(5) NOT NULL,
  `no_antrian` int(5) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `perusahaan` varchar(200) NOT NULL,
  `qr_code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `no_antrian`, `email`, `password`, `nama`, `perusahaan`, `qr_code`) VALUES
(1, 1, 'davidsetya24@gmail.com', '$2y$10$f73zTBIECUTauZVgyEiqAupZPPcMz1E1WtSK.0/RuLurUgxy1QhVa', 'David Setya', '2,4', '1636442772'),
(2, 2, 'david@gmail.com', '$2y$10$yuR.ZQYdSmJJ5NsR4TY4eOSechBVRHHKZCwnF1QNQ5XUDMJLqkcM.', 'david', '2,3,5,19', '1636449469');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama`) VALUES
(1, 'PT. Tristar'),
(2, 'Bina Avia Persada'),
(3, 'Jember Roxy Square'),
(4, 'Indosat Oredoo'),
(5, 'Nico Busana'),
(6, 'JNE Express Cabang Jember'),
(7, 'Mandiri Utama Finance'),
(8, 'PT. BPR Cinde Wilis'),
(9, 'PT. East West Seed Indonesia'),
(10, 'PT. First Indo Group'),
(11, 'PT. HOME CENTER Indonesia'),
(12, 'PT. INDOMARCO PRISMATAMA'),
(13, 'PT. MICRO MADANI INSTITUE'),
(14, 'PT SUMBER ALFARIA TRIJAYA, TBK'),
(15, 'PT. TEKAD KARYA PUTERA JEMBER'),
(16, 'PT. VAGANZA INTERNATIONAL'),
(17, 'PT. VICTORY INTERNATIONAL FUTURES'),
(18, 'YAMAHA SIP SUMBERSARI'),
(19, 'Mandala Finance'),
(20, 'PT BENTENG PERSADA MULTINDO'),
(21, 'ARYACOM GROUP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

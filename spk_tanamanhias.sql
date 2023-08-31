-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 02:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_tanamanhias`
--

-- --------------------------------------------------------

--
-- Table structure for table `ahp`
--

CREATE TABLE `ahp` (
  `id_ahp` int(11) NOT NULL,
  `c11` double NOT NULL,
  `c12` double NOT NULL,
  `c13` double NOT NULL,
  `c14` double NOT NULL,
  `c15` double NOT NULL,
  `c16` double NOT NULL,
  `c17` double NOT NULL,
  `c18` double NOT NULL,
  `c21` double NOT NULL,
  `c22` double NOT NULL,
  `c23` double NOT NULL,
  `c24` double NOT NULL,
  `c25` double NOT NULL,
  `c26` double NOT NULL,
  `c27` double NOT NULL,
  `c28` double NOT NULL,
  `c31` double NOT NULL,
  `c32` double NOT NULL,
  `c33` double NOT NULL,
  `c34` double NOT NULL,
  `c35` double NOT NULL,
  `c36` double NOT NULL,
  `c37` double NOT NULL,
  `c38` double NOT NULL,
  `c41` double NOT NULL,
  `c42` double NOT NULL,
  `c43` double NOT NULL,
  `c44` double NOT NULL,
  `c45` double NOT NULL,
  `c46` double NOT NULL,
  `c47` double NOT NULL,
  `c48` double NOT NULL,
  `c61` double NOT NULL,
  `c62` double NOT NULL,
  `c63` double NOT NULL,
  `c64` double NOT NULL,
  `c65` double NOT NULL,
  `c66` double NOT NULL,
  `c67` double NOT NULL,
  `c68` double NOT NULL,
  `c71` double NOT NULL,
  `c72` double NOT NULL,
  `c73` double NOT NULL,
  `c74` double NOT NULL,
  `c75` double NOT NULL,
  `c76` double NOT NULL,
  `c77` double NOT NULL,
  `c78` double NOT NULL,
  `c51` double NOT NULL,
  `c52` double NOT NULL,
  `c53` double NOT NULL,
  `c54` double NOT NULL,
  `c55` double NOT NULL,
  `c56` double NOT NULL,
  `c57` double NOT NULL,
  `c58` double NOT NULL,
  `c81` double NOT NULL,
  `c82` double NOT NULL,
  `c83` double NOT NULL,
  `c84` double NOT NULL,
  `c85` double NOT NULL,
  `c86` double NOT NULL,
  `c87` double NOT NULL,
  `c88` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ahp`
--

INSERT INTO `ahp` (`id_ahp`, `c11`, `c12`, `c13`, `c14`, `c15`, `c16`, `c17`, `c18`, `c21`, `c22`, `c23`, `c24`, `c25`, `c26`, `c27`, `c28`, `c31`, `c32`, `c33`, `c34`, `c35`, `c36`, `c37`, `c38`, `c41`, `c42`, `c43`, `c44`, `c45`, `c46`, `c47`, `c48`, `c61`, `c62`, `c63`, `c64`, `c65`, `c66`, `c67`, `c68`, `c71`, `c72`, `c73`, `c74`, `c75`, `c76`, `c77`, `c78`, `c51`, `c52`, `c53`, `c54`, `c55`, `c56`, `c57`, `c58`, `c81`, `c82`, `c83`, `c84`, `c85`, `c86`, `c87`, `c88`) VALUES
(1, 1, 2, 1, 1, 1, 1, 1, 1, 0.5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `jenis`, `bobot_kriteria`) VALUES
(1, 'Tinggi Tanaman', 'Benefit', 0.13819444444444),
(2, 'Pencahayaan', 'Benefit', 0.11597222222222),
(3, 'Daya Tahan', 'Benefit', 0.12430555555556),
(4, 'Kelembapan udara', 'Benefit', 0.12430555555556),
(5, 'Media Tanam', 'Benefit', 0.12430555555556),
(6, 'Warna', 'Benefit', 0.12430555555556),
(7, 'Harga', 'Cost', 0.12430555555556),
(8, 'Perawatan', 'Cost', 0.12430555555556);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `alamat_pengguna` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `peran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `alamat_pengguna`, `username`, `password`, `peran`) VALUES
(1, 'Ash Kecup', '', 'ironman', 'ironman', 'admin'),
(2, 'Broke Lesmar', 'Jalan Kenangan', 'spiderman', 'spiderman', 'masyarakat'),
(4, 'mama mia', 'rumah mama            	', 'mama', 'mamamia', 'Masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `nama_subkriteria` varchar(255) NOT NULL,
  `nilai_subkriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `nama_subkriteria`, `nilai_subkriteria`, `id_kriteria`) VALUES
(1, '> 31 cm', 3, 1),
(2, '16 cm - 31 cm', 2, 1),
(3, '< 15 cm', 1, 1),
(4, 'Terbatas', 3, 2),
(5, 'Sedang', 2, 2),
(6, 'Kuat', 1, 2),
(7, 'Kuat', 3, 3),
(8, 'Sedang', 2, 3),
(9, 'Lemah', 1, 3),
(10, 'Kuat', 3, 4),
(11, 'Sedang', 2, 4),
(12, 'Lemah', 1, 4),
(13, 'Tanah Campur Sekam Padi', 3, 5),
(14, 'Tanah Sabut Kelapa', 2, 5),
(15, 'Tanah', 1, 5),
(16, '3 Warna', 3, 6),
(17, '2 Warna', 2, 6),
(18, '1 Warna', 1, 6),
(19, 'Mudah', 3, 8),
(20, 'Sedang', 2, 8),
(21, 'Sulit', 1, 8),
(22, '< Rp. 50.000,00', 1, 7),
(23, 'Rp. 51.000,00 - Rp. 300.000,00', 2, 7),
(24, '> Rp. 300.000,00', 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `id_tanaman` int(11) NOT NULL,
  `nama_tanaman` varchar(255) NOT NULL,
  `tinggi_tanaman` varchar(255) NOT NULL,
  `pencahayaan` varchar(255) NOT NULL,
  `daya_tahan` varchar(255) NOT NULL,
  `kelembapan` varchar(255) NOT NULL,
  `media_tanam` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `perawatan` varchar(255) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`id_tanaman`, `nama_tanaman`, `tinggi_tanaman`, `pencahayaan`, `daya_tahan`, `kelembapan`, `media_tanam`, `warna`, `harga`, `perawatan`, `nilai`) VALUES
(2, 'vb', '> 31 cm', 'Sedang', 'Kuat', 'Sedang', 'Tanah', '1 Warna', '> Rp. 300.000,00', 'Sulit', 0.52395060965179),
(3, 'cvv', '16 cm - 31 cm', 'Terbatas', 'Kuat', 'Kuat', 'Tanah Campur Sekam Padi', '3 Warna', '< Rp. 50.000,00', 'Mudah', 0.47604939034821);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahp`
--
ALTER TABLE `ahp`
  ADD PRIMARY KEY (`id_ahp`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id_tanaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ahp`
--
ALTER TABLE `ahp`
  MODIFY `id_ahp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

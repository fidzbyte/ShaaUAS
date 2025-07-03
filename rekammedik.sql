-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 01:41 PM
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
-- Database: `rekammedik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `norm` varchar(50) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rekammedik`
--

CREATE TABLE `rekammedik` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `visum` varchar(255) DEFAULT NULL,
  `tindakan` varchar(255) DEFAULT NULL,
  `norm` varchar(50) DEFAULT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `id_tindakan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`norm`);

--
-- Indexes for table `rekammedik`
--
ALTER TABLE `rekammedik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `norm` (`norm`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_tindakan` (`id_tindakan`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekammedik`
--
ALTER TABLE `rekammedik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rekammedik`
--
ALTER TABLE `rekammedik`
  ADD CONSTRAINT `rekammedik_ibfk_1` FOREIGN KEY (`norm`) REFERENCES `pasien` (`norm`),
  ADD CONSTRAINT `rekammedik_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id`),
  ADD CONSTRAINT `rekammedik_ibfk_3` FOREIGN KEY (`id_tindakan`) REFERENCES `tindakan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

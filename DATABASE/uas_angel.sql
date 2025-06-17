-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2025 at 02:13 PM
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
-- Database: `uas_syifa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `iddokter` int(150) NOT NULL,
  `nama_dokter` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`iddokter`, `nama_dokter`) VALUES
(0, 'dr. Fahmi - Jantung'),
(1, 'dr. Intan - Gigi');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `idpasien` int(200) NOT NULL,
  `nama_pasien` varchar(200) NOT NULL,
  `nama_dokter` varchar(150) NOT NULL,
  `jadwal_pasien` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `idpendaftaran` int(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `telp` int(150) NOT NULL,
  `keluhan` text NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `waktu_kunjung` datetime NOT NULL,
  `iddokter` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`idpendaftaran`, `nama`, `tgl_lahir`, `alamat`, `telp`, `keluhan`, `tgl_kunjung`, `waktu_kunjung`, `iddokter`, `status`) VALUES
(1, 'Suci', '2025-06-06', 'Cikoya', 8975423, 'Paru Paru', '2025-06-03', '0000-00-00 00:00:00', '0', 'disetujui'),
(2, ' syifa indah nur afni', '2025-06-13', 'Perum Griya Lestari Permai Blok D1/17 De. Sindang Panon Kec. Sindang Jaya Kab. Tangerang', 2147483647, 'batuk', '2025-06-25', '0000-00-00 00:00:00', '1', ''),
(3, 'lina', '2025-06-25', 'knfdkjjjdsj', 2147483647, 'lemah', '2025-06-18', '0000-00-00 00:00:00', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user','') NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `create_at`) VALUES
(1, 'www', '$2y$10$sf0Inr5/13GRT/wlUyaLZ.UrmKkxeWF3475Bc.QrPJM4lt.iymuPG', '', '2025-03-18 03:02:27'),
(2, 'ss', '$2y$10$UombJFOw9o5v4jftJ1.LDeDnesXugfRfTjIN1QB7k9outIMfXUtM6', '', '2025-03-18 03:16:40'),
(3, 'vika', '$2y$10$TX2aOM4DDw9Mu6soqqiofOF1xsbQELylBHdNXL27FiQ6t7Pi2lokm', 'user', '2025-05-06 01:42:40'),
(4, 'persib', '$2y$10$i8JXFLCB/Eh70csSiaKtgupy50fh7r3oKArgvtU7G.ZkR6P3SVnFC', 'admin', '2025-05-06 01:37:27'),
(5, 'viking', '$2y$10$8h.w/SWnj5fBiz55a8ynz.ASEjeC3bqrDyQlQrNzvNR9zjqQpMMA.', 'user', '2025-05-06 01:44:01'),
(6, 'vikachu', '$2y$10$NWLx9l72myxM4N2q4EBz8OGXAEBy/PIcj2EnAhJBiK60NmX6ykAY.', 'admin', '2025-06-06 12:11:09'),
(7, 'syifa', '$2y$10$.OYpu7YXGWXW22b18Isyf.LgVNDqUD6aJ0I.S35bVhTQ/RRBkqMNa', 'admin', '2025-06-10 06:06:12'),
(8, 'cantik', '$2y$10$KHnOElFsC87As.1XX7Kmo.zoZe947eqwNaCiqz9UmVr9hMiL5WZsC', 'user', '2025-06-10 08:25:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`iddokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`idpendaftaran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `idpendaftaran` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

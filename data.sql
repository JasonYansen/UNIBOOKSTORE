-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 04:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `penerbit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `kategori`, `nama`, `harga`, `stok`, `penerbit`) VALUES
('B1001', 'Bisnis', 'Bisnis Online', '75.000', 7, 'Penerbit Informatika'),
('B1002', 'Bisnis', 'Etika Bisnis dan Tanggung Jawab Sosial', '67.500', 20, 'Penerbit Informatika'),
('K1001', 'Keilmuan', 'Analisi & Perancangan Sistem Informasi', '50.000', 60, 'Penerbit Informatika\r\n'),
('K1002', 'Keilmuan', 'Artificial Intelligence', '45.000', 60, 'Penerbit Informatika'),
('K2003', 'Keilmuan', 'Autocad 3 Dimensi', '40.000', 25, 'Penerbit Informatika'),
('K3004', 'Keilmuan', 'Cloud Computing Technology', '85.000', 15, 'Penerbit Informatika'),
('N1001', 'Novel', 'Cahaya Di Penjuru Hati', '68.000', 10, 'Andi Offset'),
('N1013', 'Bisnis', 'Manajemen Perikanan', '15.000', 9, 'Danendra'),
('N1015', 'Bisnis', 'Manajemen', '75.000', 9, 'Danendra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 12:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2106015_agus`
--

-- --------------------------------------------------------

--
-- Table structure for table `agus_aeo`
--

CREATE TABLE `agus_aeo` (
  `id` int(11) NOT NULL,
  `banner` varchar(200) NOT NULL,
  `namaEvent` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `penyelenggara` varchar(100) NOT NULL,
  `kontak` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kategori` text NOT NULL,
  `biaya` int(10) NOT NULL,
  `linkPendaftaran` varchar(200) NOT NULL,
  `thb` varchar(200) NOT NULL,
  `tambahan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agus_aeo`
--

INSERT INTO `agus_aeo` (`id`, `banner`, `namaEvent`, `deskripsi`, `penyelenggara`, `kontak`, `email`, `tanggal`, `alamat`, `kategori`, `biaya`, `linkPendaftaran`, `thb`, `tambahan`) VALUES
(1, 'https://aisarchery.github.io/', 'KEJUARAAN PANAHAN Drs. H. Dede Satibi Cup Ke-2 Tingkat SD & SMP Sederajat se-Jawa Barat', '\"Amazing Inspiration for Coloring the World\"', 'Mochammad Agus Dharma Kilin', '082130939820', '2106015@itg.ac.id', '2024-04-04', 'Rabbany', '1. SD 5 Meter\r\n2. SMP 15 Meter\r\n3. SMA 30 Meter', 100000, 'https://aisarchery.github.io/', 'https://aisarchery.github.io/', '\"... wa maa romaita idz romaita, walakinnallaha romaa.\"\r\n\"... dan bukan kamu yang melempar ketika kamu melempar, tetapi Allah-lah yang melempar.\"\r\n\r\n(Al-Anfal: 17)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agus_aeo`
--
ALTER TABLE `agus_aeo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agus_aeo`
--
ALTER TABLE `agus_aeo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

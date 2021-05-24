-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 05:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siagam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Muhammad Nurifai', 'rifai@mhs.unsyiah.ac.id', 'lifeofrifai'),
(2, 'Asdar', 'asdar@mhs.unsyiah.ac.id', 'asdarganteng');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `dusun` varchar(255) NOT NULL,
  `keperluan` text NOT NULL,
  `tanggal` date NOT NULL,
  `sesi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `nama`, `nik`, `dusun`, `keperluan`, `tanggal`, `sesi`) VALUES
(2, 'asd', '98082817212231', 'Dusun 3', 'Mengurus Surat Masuk', '2021-05-21', 'Sesi 2 (10.00-12.00)'),
(3, 'Ripai', '1106101005020003', 'Dusun 4', 'Mengurus Surat Pengantar', '2021-05-28', 'Sesi 4 (15.00-17.00)'),
(4, 'mahmudin', '98082817212231', 'Dusun 3', 'Mengurus KTP', '2021-05-27', 'Sesi 3 (13.00-15.00)'),
(5, 'burhan', '93810983912830912089', 'Dusun 2', 'Mengurus Surat Pengantar', '2021-05-29', 'Sesi 3 (13.00-15.00)'),
(6, 'Asdar', '231142123312', 'Dusun 4', 'Mengurus Surat Miskin', '2021-05-21', 'Sesi 1 (08.00-10.00)'),
(7, 'imam naufal', '93810983912830912089', 'Dusun 1', 'Mengurus Surat Masuk', '2021-05-19', 'Sesi 2 (10.00-12.00)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

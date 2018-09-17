-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2018 at 05:31 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arisankita`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `parent` varchar(120) NOT NULL,
  `urutan` varchar(20) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `alamat`, `ttl`, `nohp`, `email`, `status`, `gender`, `parent`, `urutan`, `kode`, `username`, `password`) VALUES
(49, 'wahyu', 'jayapura', '2018-08-15', '09120380185', 'Wahyu123@gmail.com', 'Kakek', 'pria', '-', '-', 'miaw123', 'ryan', '123'),
(50, 'kiky', 'madura', '2018-08-09', '06878678456', 'Kiky@gmail.com', 'Nenek', 'wanita', '-', '-', 'miaw123', 'kiky', '123'),
(51, 'yulia', 'jakarta', '1996-08-13', '0878653123', 'yulia123@gmail.com', 'Anak', 'wanita', 'ryan', '1', 'miaw123', 'yulia', '123'),
(54, 'sari', 'pamekasan', '2000-06-14', '08765432123', '', 'Cucu', 'wanita', 'yulia', '1', 'miaw123', 'sari', '123'),
(55, 'kiku', 'pamekasan', '2015-11-04', '', '', 'Cicit', 'wanita', 'sari', '1', 'miaw123', 'kiku', '123'),
(56, 'koko', 'jakarta', '2018-08-15', '0812345678', 'koko@gmail.com', 'Anak', 'pria', 'ryan', '2', 'miaw123', 'koko', '123'),
(57, 'robert', 'jakarta', '2018-08-02', '0876543212', 'robert@gmail.com', 'Cucu', 'pria', 'koko', '2', 'miaw123', 'doni', '123'),
(58, 'Rehanul', 'Depok', '1995-09-17', '081385751160', 'Frayhands@gmail.com', 'Kakek', 'pria', 'Astimen', '2', 'Eaea', 'Rehanul', '123'),
(59, 'Ulfa syariyah', 'Bsd', '1996-10-17', '081357568465', 'Ulfa@gmail.com', 'Nenek', 'wanita', 'Gatot', '2', 'Eaea', 'Ulfa', '123'),
(60, 'firdaus', 'depok', '1996-09-18', '081258976484', 'firdaus@gmail.com', 'Cucu', 'pria', 'yulia', '4', 'miaw123', 'dausmini', '123'),
(61, 'usman', 'kalibata', '2018-09-10', '08546879513', 'usman@gmail.com', 'Cicit', 'pria', 'firdaus', '5', 'miaw123', 'usman', '123'),
(64, 'akbar', 'Jakarta Selatan', '1990-09-17', '0813864816988', 'akbar@gmail.com', 'Kakek', 'pria', '', '', 'mplusoftware', 'akbar', '123'),
(65, 'lathifa', 'Jakarta', '1994-09-22', '081378454984', 'lathifa@gmail.com', 'Nenek', 'wanita', '', '', 'mplusoftware', 'lathifa', '123');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `agenda` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `host` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `agenda`, `lokasi`, `waktu`, `host`) VALUES
(8, 'sunatan', 'hj mali', '2018-09-21', 'ryan'),
(9, 'Arisan', 'Curug ', '2018-09-19', 'Astimen '),
(10, 'sunatan', 'hj mali', '2018-09-21', 'ryan');

-- --------------------------------------------------------

--
-- Table structure for table `reg_keluarga`
--

CREATE TABLE `reg_keluarga` (
  `kode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_keluarga`
--

INSERT INTO `reg_keluarga` (`kode`) VALUES
('Eaea'),
('miaw123'),
('mplusoftware');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nohp` (`nohp`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_keluarga`
--
ALTER TABLE `reg_keluarga`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

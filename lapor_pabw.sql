-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 05:44 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor_pabw`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `email`, `password`) VALUES
('iyuy', 'iyuy@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `aspek` varchar(15) NOT NULL,
  `isi_laporan` text NOT NULL,
  `tanggal` date NOT NULL,
  `lampiran` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `aspek`, `isi_laporan`, `tanggal`, `lampiran`, `username`) VALUES
(6, '4', 'qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwerqwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert ', '2019-12-14', 'angkasa.jpg', 'iyuy'),
(7, '3', '', '1990-12-12', 'edit.png', 'iyuy'),
(8, '1', '', '1990-12-12', '301.png', 'iyuy'),
(9, '2', 'qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty qwerty ', '0000-00-00', '303.png', 'iyuy'),
(10, '3', 'qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert qwert ', '2019-12-14', '305.png', 'iyuy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

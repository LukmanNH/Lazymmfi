-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 04:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_zakat`
--

CREATE TABLE `data_zakat` (
  `id_zakat` int(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `jenis_zakat` varchar(255) NOT NULL,
  `nominal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_zakat`
--

INSERT INTO `data_zakat` (`id_zakat`, `nama_lengkap`, `alamat`, `email`, `no_hp`, `metode_pembayaran`, `jenis_zakat`, `nominal`) VALUES
(9, 'Lukman Nur Hakim', 'Jl.Penggilingan No.19E', 'luckmanhakim004@gmail.com', '081297242408', 'BCA', 'Zakat Maal', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_zakat`
--
ALTER TABLE `data_zakat`
  ADD PRIMARY KEY (`id_zakat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_zakat`
--
ALTER TABLE `data_zakat`
  MODIFY `id_zakat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

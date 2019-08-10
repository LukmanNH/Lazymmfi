-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 10:06 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

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
  `nominal` int(255) NOT NULL,
  `status_verif` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_zakat`
--

INSERT INTO `data_zakat` (`id_zakat`, `nama_lengkap`, `alamat`, `email`, `no_hp`, `metode_pembayaran`, `jenis_zakat`, `nominal`, `status_verif`) VALUES
(14106, 'alsidjalfij', 'alsifjalfij', '012930123', '09123124', 'BCA', 'Zakat Maal', 121290, 'Yes'),
(29729, 'Lukman Nur Hakim', 'Jl.Penggilingan ', 'luckmanhakim004@gmail.com', '081297242408', 'BCA', 'Zakat Maal', 90000, 'Yes'),
(85784, 'Galih Putra Windawan', 'jl.Menteng ', 'galihgila@gmail.com', '081292230912', 'BCA', 'Zakat Maal', 90000, 'Yes'),
(91216, 'Maulana', 'Jl.Penggilingan No.19E', 'maulana@gmail.com', '0819238293', 'BCA', 'Zakat Penghasilan', 90000, NULL),
(190053, 'uuuuu', 'aslifjaslfij', 'liasjfalsifj', '10283123', 'BCA', 'Zakat Maal', 123910, NULL),
(199054, 'asdasd', 'alfijwafli', 'laisjfaslifj', '1283012312', 'BCA', 'Zakat Maal', 91023912, NULL),
(243301, 'asdasd', 'asd', 'asdasd', '123123', 'BCA', 'Zakat Maal', 123910, NULL),
(288554, 'aliwjfalwifj', 'laisjfalsifj', 'alsifjaslifj', '08123123', '', 'Zakat Maal', 900000, NULL),
(309883, 'Nurul', 'Jl.Penggilingan No.19E', 'nurul@gmail.com', '01239123', 'BCA', 'Zakat Penghasilan', 200000, NULL),
(521227, 'asdasd', '123asd', 'asd@asd', '1231231', '', 'Zakat Maal', 123123, NULL),
(521563, 'Kiki', 'Jl.Raya', 'kiki@gmail.com', '089123123', 'BCA', 'Fidyah', 100000, NULL),
(607065, 'lasifajslfij', 'laisjfaslfij', 'liasjfalsifj', '01923123', 'BNI', 'Zakat Maal', 9000, NULL),
(709838, 'Julaiha Yuim', 'Jl.Amerika', 'juliaheha@gmail.com', '0819289232957', 'BCA', 'Sedekah', 100000, NULL),
(756738, 'Lukman Nur Hakim', 'Jl.Penggilingan No.19E', 'luckmanhakim004@gmail.com', '081297242408', 'BCA', 'Zakat Maal', 1200000, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `upload_file`
--

CREATE TABLE `upload_file` (
  `id_upload` int(3) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `ukuran_file` int(100) NOT NULL,
  `kode_zakat` text,
  `direktori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_file`
--

INSERT INTO `upload_file` (`id_upload`, `nama_file`, `ukuran_file`, `kode_zakat`, `direktori`) VALUES
(11, 'Lukman.jpg', 88361, ' 756738', 'files/Lukman.jpg'),
(12, 'J.jpg', 88091, ' 85784', 'files/J.jpg'),
(13, 'Lukman.jpg', 88361, ' 85784', 'files/Lukman.jpg'),
(14, 'Lukman.jpg', 88361, ' 29729', 'files/Lukman.jpg'),
(15, 'Lukman.jpg', 88361, ' 29729', 'files/Lukman.jpg'),
(16, 'Lukman.jpg', 88361, ' 29729', 'files/Lukman.jpg'),
(17, 'penguin.jpg', 82294, ' 29729', 'files/penguin.jpg'),
(18, 'rose.jpg', 773577, ' 29729', 'files/rose.jpg'),
(19, 'WhatsApp Image 2019-07-21 at 7.49.04 PM.jpeg', 88361, ' 29729', 'files/WhatsApp Image 2019-07-21 at 7.49.04 PM.jpeg'),
(20, 'WhatsApp Image 2019-06-30 at 8.01.26 PM.jpeg', 176433, ' 14106', 'files/WhatsApp Image 2019-06-30 at 8.01.26 PM.jpeg'),
(21, 'WhatsApp Image 2019-06-30 at 8.01.26 PM.jpeg', 176433, ' 14106', 'files/WhatsApp Image 2019-06-30 at 8.01.26 PM.jpeg'),
(22, 'WhatsApp Image 2019-06-30 at 8.01.26 PM.jpeg', 176433, ' 14106', 'files/WhatsApp Image 2019-06-30 at 8.01.26 PM.jpeg'),
(23, 'WhatsApp Image 2019-07-21 at 7.49.04 PM.jpeg', 88361, ' 14106', 'files/WhatsApp Image 2019-07-21 at 7.49.04 PM.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_zakat`
--
ALTER TABLE `data_zakat`
  ADD PRIMARY KEY (`id_zakat`);

--
-- Indexes for table `upload_file`
--
ALTER TABLE `upload_file`
  ADD PRIMARY KEY (`id_upload`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_zakat`
--
ALTER TABLE `data_zakat`
  MODIFY `id_zakat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=797324;

--
-- AUTO_INCREMENT for table `upload_file`
--
ALTER TABLE `upload_file`
  MODIFY `id_upload` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

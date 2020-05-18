-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 01:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040125`
--

-- --------------------------------------------------------

--
-- Table structure for table `apparel`
--

CREATE TABLE `apparel` (
  `no` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama_Pakaian` varchar(20) NOT NULL,
  `Bahan_Pakaian` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apparel`
--

INSERT INTO `apparel` (`no`, `foto`, `nama_Pakaian`, `Bahan_Pakaian`, `merk`, `harga`) VALUES
(1, '1.jpg', 'v neck dress', 'cotton viscose', 'H&M', 350000),
(2, '2.jpg', 'crossed midi dress', 'polyester', 'ZARA', 899900),
(3, '3.jpg', 'Softspun double-V dr', 'rajut polyester rayon spandek ', 'GAP', 750100),
(4, '4.jpg', 'Wonenn romper', 'rayon ', 'uniqlo', 625231),
(5, '5.jpg', 'womens long shirt', 'katun', 'triset', 499900),
(6, '6.jpg', 'stapless jersey maxi', 'polyester dan elastane ', 'Ralph lauren ', 2475187),
(7, '7.jpg', 'Nude Embellished', 'nilon viscore dan elastane', 'NEXT', 1579922),
(8, '8.jpg', 'Aliyah lace up dress', 'polyester', 'Guess', 1462500),
(9, '9.jpg', 'the feminine lacoste', 'rayon', 'lacoste', 1470923),
(10, '10.jpg', 'manggo silk flower d', 'polyester', 'manggo', 2999720);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(0, 'alita', '$2y$10$d57Gj4.bI9Vmv.F/58Ejqerci0U8Xf1niNUYKUm7B0lXTAIDtcMuq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apparel`
--
ALTER TABLE `apparel`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apparel`
--
ALTER TABLE `apparel`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

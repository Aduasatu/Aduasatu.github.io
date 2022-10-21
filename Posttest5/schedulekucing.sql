-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 11:37 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schedulekucing`
--

-- --------------------------------------------------------

--
-- Table structure for table `kucing`
--

CREATE TABLE `kucing` (
  `id` int(11) NOT NULL,
  `bnama` varchar(50) NOT NULL,
  `bjenis` varchar(50) NOT NULL,
  `knama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kucing`
--

INSERT INTO `kucing` (`id`, `bnama`, `bjenis`, `knama`) VALUES
(5, 'Mith', 'SEMUA PERAWATAN', 'Ajuji'),
(7, 'Alan Nuzulan', 'VACCINATION', 'Poci'),
(8, 'Lolo', 'SEMUA PERAWATAN', 'Koma'),
(10, 'Mitha Amalia', 'STERILIZATION', 'Muezza'),
(11, 'Alan Nuzulan', 'GROOMING', 'Dona'),
(12, 'Mahesa Pangaribuan', 'VACCINATION', 'Noona');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kucing`
--
ALTER TABLE `kucing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kucing`
--
ALTER TABLE `kucing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

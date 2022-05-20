-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 06:43 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibir_sumbing`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_logdasb`
--

CREATE TABLE `db_logdasb` (
  `id_logdsb` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_logdasb`
--

INSERT INTO `db_logdasb` (`id_logdsb`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$2vTbH3UeTstUEGjbewyfBuk4PlfMKKt3VVi/S.OSfwrLWesui3Ks2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_logdasb`
--
ALTER TABLE `db_logdasb`
  ADD PRIMARY KEY (`id_logdsb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_logdasb`
--
ALTER TABLE `db_logdasb`
  MODIFY `id_logdsb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

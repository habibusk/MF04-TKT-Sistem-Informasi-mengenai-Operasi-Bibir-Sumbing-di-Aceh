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
-- Table structure for table `db_testi`
--

CREATE TABLE `db_testi` (
  `id_testi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `komen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_testi`
--

INSERT INTO `db_testi` (`id_testi`, `id_user`, `komen`) VALUES
(1, 11, 'oke mantap'),
(3, 11, 'au ah capek bet'),
(4, 11, 'dah lah gatau lagi'),
(5, 11, 'ok ok ok'),
(6, 11, 'hiya hiya hiya'),
(7, 14, 'aduh mantap sekali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_testi`
--
ALTER TABLE `db_testi`
  ADD PRIMARY KEY (`id_testi`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_testi`
--
ALTER TABLE `db_testi`
  MODIFY `id_testi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_testi`
--
ALTER TABLE `db_testi`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `db_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

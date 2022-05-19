-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 11:57 AM
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
-- Table structure for table `db_dokumentasi`
--

CREATE TABLE `db_dokumentasi` (
  `id_foto` int(11) NOT NULL,
  `nama_foto` varchar(100) NOT NULL,
  `title_foto` varchar(100) NOT NULL,
  `desc_foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_dokumentasi`
--

INSERT INTO `db_dokumentasi` (`id_foto`, `nama_foto`, `title_foto`, `desc_foto`) VALUES
(1, 'baksos.jpeg', 'Bakti Sosial Full Senyum Masseh', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, et minima dignissimos quod consectetur reiciendis deserunt inventore. Eligendi nulla voluptate repudiandae quasi veniam. Maiores provident unde impedit quia iusto quis?'),
(3, 'Habib.jpg', 'Profil pimpinan yayasan full senyum', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, voluptatum ducimus? Nisi a illum amet quasi esse, sunt pariatur quisquam hic nesciunt suscipit reiciendis, officiis, rerum eos quia perspiciatis eveniet.\r\n\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, voluptatum ducimus? Nisi a illum amet quasi esse, sunt pariatur quisquam hic nesciunt suscipit reiciendis, officiis, rerum eos quia perspiciatis eveniet.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_dokumentasi`
--
ALTER TABLE `db_dokumentasi`
  ADD PRIMARY KEY (`id_foto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_dokumentasi`
--
ALTER TABLE `db_dokumentasi`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

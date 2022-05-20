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
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `id_user` int(11) NOT NULL,
  `foto_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id_user`, `foto_user`, `username`, `email`, `password`, `jenis_user`) VALUES
(10, 'logo.png', 'siuser', 'usercoba@mail.com', '$2y$10$PTQZpwUr0mJ/4NbnIt9JDu.1t6b1Lusap5/aaFsDv3tMPWTzSe7se', 'Relawan'),
(11, 'logo.png', 'dono', 'dono@mail.com', '$2y$10$HXVudcX2RuwgeMJAkrbs.OHDfvxps4cmnW4zRkeremdJliNUG3HWy', 'pasien'),
(12, 'logo.png', 'heker', 'heker234@mail.com', '$2y$10$t/RHoKsu9XBByNiDuJuVGeYYJgLjiGAVm8DcULJpcRqMkB/VGqorq', 'masyarakat'),
(13, 'logo.png', 'udin', 'Udintakingintersakiti@mail.com', '$2y$10$zKJpJc7CS3H0jE27gSJnA.W2B3dPs3iDqV74KwAKP0wGLI9qlJx5O', 'Relawan'),
(14, 'logo.png', 'eca', 'eca@mail.com', '$2y$10$xjhrKOl0tP8HD8grkgD29uCVI3lIqursCCkEklmCcmfr.J4i4Nefe', 'Masyarakat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

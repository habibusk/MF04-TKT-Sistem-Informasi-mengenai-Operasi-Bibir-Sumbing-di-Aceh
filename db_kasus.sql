-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 10:54 AM
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
-- Table structure for table `db_kasus`
--

CREATE TABLE `db_kasus` (
  `id_kasus` int(10) NOT NULL,
  `nama_pasien` varchar(40) NOT NULL,
  `umur_pasien` varchar(40) NOT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `deskripsi_kasus` varchar(100) NOT NULL,
  `foto_pasien` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_kasus`
--

INSERT INTO `db_kasus` (`id_kasus`, `nama_pasien`, `umur_pasien`, `alamat_pasien`, `deskripsi_kasus`, `foto_pasien`) VALUES
(1, 'mamat', '35 Tahun', 'Jeulingke', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\n                Asperiores perferendis ame', 'image 6.png'),
(2, 'mamat', '35 Tahun', 'Jeulingke', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\n                Asperiores perferendis ame', 'image 4.png'),
(7, 'udin', '28 Tahun ', 'Lampeunerut', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\n                Asperiores perferendis ame', 'logo.png'),
(8, 'udin', '28 Tahun ', 'Lampeunerut', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.\r\n                Asperiores perferendis ame', 'logo.png'),
(9, 'ridho', '35 Tahun', 'Darussalam', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod perferendis hic, iste suscipit numquam', 'logo.png'),
(10, 'Dono', '34 tahun', 'langsa', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit ab, nesciunt iure officiis vero offic', 'logo.png'),
(11, 'jenudin', '34 tahun', 'langsa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur interdum nibh vel hendre', 'logo.png'),
(14, 'fasafs', 'affas', 'afssfas', 'sagfkAGFAHGDAGSGD', 'Habib.jpg'),
(15, 'sdfdaFS', 'afsS', 'ASFasfFSAA', 'FasfhjAVCcvhjvajcvvjvhvavcvascjhjvjvVCVACVJAVCJVASCJVAJCVAVCAVCAVCVXJVJX', 'Habib.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_kasus`
--
ALTER TABLE `db_kasus`
  ADD PRIMARY KEY (`id_kasus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_kasus`
--
ALTER TABLE `db_kasus`
  MODIFY `id_kasus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

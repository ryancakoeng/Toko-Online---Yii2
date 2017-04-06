-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 08:06 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokopedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'Fashion'),
(2, 'Elektronika'),
(3, 'Alat Tulis Kerja'),
(4, 'Makanan dan Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `kategori` int(10) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `detail_produk` varchar(255) NOT NULL,
  `stock` tinyint(4) NOT NULL,
  `status_barang` enum('NEW','SECOND') NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `kategori`, `harga`, `detail_produk`, `stock`, `status_barang`, `foto`) VALUES
(1, 'XIAOMI MI4I', 2, '1999999', 'Xiaomi Mi 4i merupakan sebuah affordable flagship. Hadir dengan prosesor octa-core terbaru dari Qualcomm, performa Mi 4i tidak perlu diragukan lagi dalam menjalankan berbagai aplikasi dan games. ', 20, 'NEW', 'uploads/52xiaomi mi4i.jpg'),
(2, 'Samsung Galaxy S7 edge', 2, '7000000', 'Samsung Galaxy S7 merupakan sebuah flagship masa kini dengan berbagai keunggulan', 70, 'NEW', 'uploads/21s7.jpg'),
(3, 'Samyang Goreng', 4, '15000', 'Samyang goreng adalah mie asli korea kudu na mah', 60, 'NEW', 'uploads/93samyang.jpg'),
(4, 'Celana Jogger VANS', 1, '35000', 'Celana Jogger VANS cocok digunakan untuk santai kudu na mah', 80, 'NEW', 'uploads/53jogger.jpg'),
(5, 'Kaos Polo SIX', 1, '45000', 'Kaos POLO SIX cocok digunaka untuk formal maupun casual', 15, 'NEW', 'uploads/12six.jpg'),
(6, 'Buku Tulis TIARA', 3, '25000', 'Buku Tulis TIARA merupakan buku tulis berkualitas yang mengandung bahan alami', 60, 'NEW', 'uploads/11tiara.jpg'),
(7, 'Pulpen PILOT', 3, '6500', 'Pulpen PILOT adalah salah satu pulpen yang sangat populer dikalangan pelajar', 80, 'NEW', 'uploads/87pilot.jpg'),
(8, 'Spidol SNOWHITE', 3, '25000', 'Spidol yang satu ini adalah spidol yang paling terkenal di kalangan masyarakat umum', 90, 'NEW', 'uploads/46spidol.jpg'),
(9, 'Iphone 5', 2, '3000000', 'salah satu produk besutan apple', 70, 'NEW', 'uploads/36ip7.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

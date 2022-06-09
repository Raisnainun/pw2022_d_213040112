-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 01:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blasomee`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `gambar`, `deskripsi`, `harga`, `stok`, `kategori`) VALUES
(1, 'ROSES GOLD', 'rose.jpg', 'Produk terbuat dari campuran bungan roses dengan aroma bungan roses dengan warna yang cantik.', 'RP.150.000', 20, 'Parfum Bunga'),
(2, 'DUSKY LILAC', 'lilac.jpg', 'Produk parfum dengan campuran aroma dari bungan lilac yang menyegarkan', 'RP.135.000', 15, 'Parfum Bunga'),
(4, 'BLOSOME JASMINE', 'jasmine.jpg', 'Parfum original yang terbuat dari tambahan bungan jasmine dengan tambahan tekstur dari bungan jasmine .', 'RP.145.000', 20, 'Parfum Bunga'),
(7, 'MAGNOLIA ASTER', 'aster.jpg ', 'Produk series bungan. parfum ini terbuat dari campuran bunga- bungan dengan aroma yang elegan.', 'RP.125.000', 15, 'Parfum Bunga'),
(11, 'CALA LILY', 'lily.jpg', 'Produk parfum dengan dengan campuran lily yg berwarna ungu.', 'RP.135.000', 10, 'Parfum Bunga'),
(21, 'SWEET CHERRY', '62a0f85741f0d.jpg', 'Produk terbaru dengan series buah , Parfum ini terbuat dari  campuran buah cherry dengan warna sli buah cherry dan aroma menyegarkan dari buah asli .', 'RP.135.000', 10, 'Parfum Buah'),
(22, 'STABELLY', '62a0f8e38423b.jpg', 'Produk terbaru dengan series buah. Parfum ini terbuat dari campuran buah asli dengan aroma buah strawberry .', 'RP.120.000', 10, 'Parfum Buah'),
(24, 'COCO', '62a10b980b567.jpg ', 'Produk terbaru series buah . parfum dengan aroma menyegarkan yang terbuat dari campuran buah yang menyegarkan.', 'RP.135.000', 20, 'Parfum Buah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(10, 'una', '$2y$10$7Z2Y8SgwY.aw2kB8EuAOkOTrGMnpxJw007gmC6G6A7Vu8RfpGTSWS', 'user'),
(11, 'admin', '$2y$10$kxhTvZt1AYFYZt5Y7I484..a5ZOm8P1XnwmohapQdJlhVKdkhKtNC', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

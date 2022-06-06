-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 06:27 PM
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
-- Database: `i'sparkly`
--

-- --------------------------------------------------------

--
-- Table structure for table `parfum`
--

CREATE TABLE `parfum` (
  `stok` int(11) NOT NULL,
  `nama_parfum` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `kategori_parfum` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parfum`
--

INSERT INTO `parfum` (`stok`, `nama_parfum`, `gambar`, `deskripsi`, `harga`, `kategori_parfum`, `id`) VALUES
(20, 'ROSES GOLD', 'rose gold.jpg', 'Parfum original bunga mawar yang mempunyai bentuk yang cantik.Varian warna yang melambang kan kasih sayang,dan memiliki banyak manfaat untuk kecantikan. mempunyai aroma klasik.', '150.000', 'parfum bunga', 1),
(20, 'MAGNOLIA ASTER', 'aster.jpg', 'Parfum terbuat dari bunga &quot;ASTER&quot; memiliki arti kebijaksanaan, keberanian, dan keyakin . memiliki aroma yang sangat segar cocok untuk anak remaja dan dewasa.', '145.000', 'parfum bunga', 2),
(15, ' DUSKY LILAC', 'lilac.jpg', 'parfum terbuat dari bunga lilac yang bermakna bunga antik berwarna ungu yang melambangkan kepolosan, cinta pertama, ketenangan dan kebahagian sebagai mana parfum ini dibuat sangat cocok untuk remaja remaja.', '300.000', 'parfum bunga', 3),
(15, 'CALA LILY', 'lily.jpg', 'parfu original buga LILY yang mempunyai berbagai warna dan makna cocok untuk keseharian ', '250.000', 'parfum bunga', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(0, 'raisnaainun', 'raisaisnaainun@gmail.com', '741bf0625cdd7c61554737abf7b274a0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parfum`
--
ALTER TABLE `parfum`
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
-- AUTO_INCREMENT for table `parfum`
--
ALTER TABLE `parfum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 17, 2023 at 04:13 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simulasi_bnsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `harga`) VALUES
(1, 'standard', 500000),
(2, 'deluxe', 1200000),
(3, 'family', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tipe_kamar` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `durasi_menginap` int(11) NOT NULL,
  `breakfast` tinyint(1) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama_pemesan`, `jk`, `nik`, `tipe_kamar`, `harga`, `tgl_pesan`, `durasi_menginap`, `breakfast`, `total_bayar`) VALUES
(1, 'Dimas', 'laki-laki', '98712712167281097', 'standard', 500000, '2023-03-15', 3, 1, 522000),
(2, 'Dimas', 'laki-laki', '98712712167281097', 'standard', 500000, '2023-03-16', 4, 1, 1880000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `tipe`, `image`, `harga`) VALUES
(1, 'standar', 'hotel-standard1.jpeg', 1000000),
(2, 'standar', 'hotel-standard2.jpeg', 1350000),
(3, 'deluxe', 'hotel-delux.jpeg', 2500000),
(4, 'deluxe', 'hotel-delux2.jpeg', 2350000),
(5, 'executive', 'hotel-executive.jpeg', 1750000),
(6, 'executive', 'hotel-executive2.jpeg', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `profile_hotel`
--

CREATE TABLE `profile_hotel` (
  `id` int(11) NOT NULL,
  `nama_hotel` varchar(255) NOT NULL,
  `alamat_hotel` text NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile_hotel`
--

INSERT INTO `profile_hotel` (`id`, `nama_hotel`, `alamat_hotel`, `no_telp`, `alamat_email`) VALUES
(1, 'Padjadjaran Suites Resort & Convention Hotel', 'Jl. Bogor Inner Ring Road Lot XIX C-2 No. 17 Bogor, 16132 West Java, Indonesia', '+62 251 756 9000', 'reservation@padjadjaransuitesresort.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_hotel`
--
ALTER TABLE `profile_hotel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile_hotel`
--
ALTER TABLE `profile_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

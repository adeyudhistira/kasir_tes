-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 10:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(150) NOT NULL,
  `harga_satuan` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `harga_satuan`, `created_at`, `updated_at`) VALUES
(1, 'sabun batang', 3000, '2022-09-03 06:04:41', '2022-09-03 06:04:41'),
(2, 'mi instan', 2000, '2022-09-03 06:07:25', '2022-09-03 06:07:25'),
(3, 'kopi sachet', 1500, '2022-09-03 06:07:51', '2022-09-03 06:07:51'),
(4, 'Air minum galon', 20000, '2022-09-03 06:08:12', '2022-09-03 06:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pembelian`
--

CREATE TABLE `transaksi_pembelian` (
  `id` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_pembelian`
--

INSERT INTO `transaksi_pembelian` (`id`, `total_harga`, `created_at`, `updated_at`) VALUES
(21, 29000, '2022-09-03 00:37:44', '2022-09-03 00:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pembelian_barang`
--

CREATE TABLE `transaksi_pembelian_barang` (
  `id` int(11) NOT NULL,
  `transaksi_pembelian_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_satuan` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `master_barang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_pembelian_barang`
--

INSERT INTO `transaksi_pembelian_barang` (`id`, `transaksi_pembelian_id`, `jumlah`, `harga_satuan`, `created_at`, `updated_at`, `master_barang_id`) VALUES
(14, 21, 1, 3000, '2022-09-03 07:37:44', '2022-09-03 07:37:44', 1),
(15, 21, 13, 2000, '2022-09-03 07:37:52', '2022-09-03 07:37:52', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_pembelian_barang`
--
ALTER TABLE `transaksi_pembelian_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi_pembelian`
--
ALTER TABLE `transaksi_pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `transaksi_pembelian_barang`
--
ALTER TABLE `transaksi_pembelian_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

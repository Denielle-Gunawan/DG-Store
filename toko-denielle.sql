-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 07:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko-denielle`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `type` enum('elemental','beast','natural','gamepass') NOT NULL,
  `stok` int(10) UNSIGNED NOT NULL,
  `harga_beli` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `harga_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `type`, `stok`, `harga_beli`, `created_at`, `updated_at`, `harga_jual`) VALUES
(56, 'Kitsune', 'elemental', 4, 0, '2024-03-22 03:31:05', '2024-04-18 05:28:14', 72000),
(57, 'Dough', 'elemental', 9, 0, '2024-03-22 03:56:12', '2024-04-18 05:28:11', 20000),
(58, 'Dragon', 'beast', 9, 0, '2024-03-22 03:56:29', '2024-03-22 04:06:43', 35000),
(59, 'Leopard', 'elemental', 6, 0, '2024-03-22 03:56:52', '2024-03-22 04:09:05', 40000),
(60, 'Venom', 'elemental', 6, 0, '2024-03-22 03:57:20', '2024-04-18 05:30:14', 18000),
(61, 'Buddha', 'beast', 5, 0, '2024-03-22 03:57:50', '2024-04-18 05:30:04', 12000),
(62, 'Blizzard', 'elemental', 5, 0, '2024-03-22 03:58:08', NULL, 7000),
(63, 'Shadow', 'natural', 4, 0, '2024-03-22 03:58:25', NULL, 13000),
(64, 'Spirit', 'natural', 4, 0, '2024-03-22 03:58:41', '2024-03-22 04:07:15', 10000),
(65, 'Mammoth', 'beast', 3, 0, '2024-03-22 03:59:00', '2024-03-22 04:06:27', 25000),
(66, 'Light', 'elemental', 6, 0, '2024-03-22 03:59:19', NULL, 2000),
(67, 'magma', 'elemental', 2, 0, '2024-03-22 03:59:41', '2024-04-18 06:02:12', 3000),
(68, 'Rumble', 'elemental', 7, 0, '2024-03-22 03:59:56', NULL, 7000),
(69, 'Portal', 'natural', 4, 0, '2024-03-22 04:00:16', NULL, 10000),
(70, 'Phoenix', 'gamepass', 2, 0, '2024-03-22 04:00:37', '2024-03-22 04:08:28', 6000),
(71, '1+ Fruit Storage', 'gamepass', 11, 42000, '2024-03-22 04:02:44', '2024-04-18 06:11:38', 45000),
(72, 'Dark Blade', 'gamepass', 7, 100000, '2024-03-22 04:03:10', '2024-03-22 04:06:56', 105000),
(73, 'Fast Boat', 'gamepass', 6, 40000, '2024-03-22 04:03:33', '2024-03-22 04:05:55', 45000),
(74, 'Fruit Notifier', 'gamepass', 6, 162000, '2024-03-22 04:04:05', '2024-03-22 04:05:59', 170000),
(75, '2x Boss Drop', 'gamepass', 11, 32000, '2024-03-22 04:04:39', '2024-03-22 04:06:03', 37000),
(76, 'Gravity', 'natural', 3, 0, '2024-03-22 05:09:57', NULL, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` bigint(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `nomor_telepon`, `created_at`, `updated_at`) VALUES
(5, 'Nightmare', 'Random Land, no.77', 8123465789, '2024-04-18 05:11:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `total_harga` int(10) UNSIGNED NOT NULL,
  `id_staff` int(10) UNSIGNED NOT NULL,
  `id_pelanggan` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_barang`, `jumlah`, `total_harga`, `id_staff`, `id_pelanggan`, `created_at`, `updated_at`) VALUES
(15, 57, 1, 20000, 8, NULL, '2024-04-18 05:28:11', NULL),
(16, 56, 1, 72000, 8, NULL, '2024-04-18 05:28:14', NULL),
(17, 71, 1, 45000, 8, NULL, '2024-04-18 05:29:48', NULL),
(18, 61, 1, 12000, 8, NULL, '2024-04-18 05:30:04', NULL),
(19, 60, 1, 18000, 8, NULL, '2024-04-18 05:30:14', NULL),
(24, 71, 1, 45000, 8, 5, '2024-04-18 06:11:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` enum('admin','kasir','logistik') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(8, 'denil', '$2y$10$64gk1VQJJ.kKMOplNv6.3u7dXO72/yj/4.Eyi5E1G0ntPNhByUhlO', 'admin', '2024-02-15 02:20:10', '2024-02-22 05:57:14'),
(10, 'denil g', '$2a$12$eiIlNsecyfNkXUZIwWq7X.NYeFOQLmCayHINZOW0Vr054TaXRa2kC', 'logistik', '2024-02-15 02:21:05', NULL),
(14, 'denielle', '$2y$10$2YsQAffr7uw4fWSNe3pFau/PqbSsr9i5CXqNPru9OD8KUYg.HapgC', 'kasir', '2024-04-19 03:57:54', NULL),
(16, 'Nightmare', '$2y$10$/ig0ZcpAeImsGTPVk7qKY.8iaAkP7OKRDDybKuWUrwXBrALTj8xXe', 'admin', '2024-04-19 04:29:17', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_staff` (`id_staff`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_staff`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `penjualan_ibfk_3` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

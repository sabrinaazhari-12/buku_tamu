-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 06:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `asal` varchar(50) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `tanggal`, `asal`, `tujuan`, `email`, `no_hp`) VALUES
(1, 'sarah', '2024-08-22', 'llllllllllllllll', 'llllllllllllllllll', 'llllllllllllll', 2222222),
(2, 'genta', '2024-08-22', 'padang', 'ppppp', 'q@gmail.com', 976734),
(3, 'isfa', '2024-08-22', 'pasaman barat', 'bbbbbbbbbbbb', 'isfa@gmail.com', 12345678),
(4, 'taufik', '2024-08-09', 'bukittinggi', 'magang', 'taufik@gmail.com', 8888888),
(5, 'pppppp', '2024-08-02', 'ppppppp', 'pppppppp', 'ppppppp', 999999),
(6, 'sabrina', '2024-08-29', 'padangpanjang', 'bbbbbbbbbbbb', 'sabrina@gmail.com', 2147483647),
(7, 'attaqiyya', '2024-08-29', 'jakarta', 'lllllllll', 'attaqqiya@gmail.com', 9999),
(8, 'sabrina', '2024-08-02', 'padang', 'qqqqqqq', 'sabrina@gmail.com', 33333),
(9, 'dirga', '2024-08-29', 'padang', 'bbbbbbbbbbbb', 'dirga@gmail.com', 55555),
(10, 'sabrina', '2024-08-10', 'Padang Panjang Sumatera Barat', 'penelitian', 'sabrina@gmail.com', 999999),
(12, 'sabrina', '2024-08-30', 'padang', 'ppppp', 'sabrina@gmail.com', 99999),
(13, 'sabrina', '2024-08-01', 'padang', 'ppppp', 'sabrina@gmail.com', 1233),
(14, 'syifa', '2024-08-30', 'Padang Panjang, Sumatera Barat', 'ppppp', 'syifa@gmail.com', 3333333);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Aplikasi', 'admin@admin.com', NULL, '$2y$10$AkABcRYF0PYnKTVEgHBMTu6Ale3kgOd7S7SoFWAiUhhch4j3x/Bxa', 'RV5Y4SqtodcvzTkrFbYUqaKbiht9toN5LjsUdgSUrcKGUSjCL8n4bbw3lWUX', '2024-08-27 00:07:57', '2024-08-27 00:07:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

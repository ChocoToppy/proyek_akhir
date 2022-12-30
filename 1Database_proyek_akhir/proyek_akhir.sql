-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 09:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `nama`, `umur`, `jenis_kelamin`, `alamat`, `kota`, `negara`, `created_at`, `updated_at`) VALUES
('00123456', 'Annaz Darmawan', 19, 'Pria', 'Jl. Mega Putri No. 40', 'Semarang', 'Indonesia', '2022-12-30 10:05:50', '2022-12-30 10:08:31'),
('00123457', 'Adi Ahmad', 32, 'Pria', 'Jl. Klentengsari 2 No. 7', 'Cepu', 'Indonesia', '2022-12-30 10:08:14', '2022-12-30 10:08:14'),
('00123458', 'Ikhsandy Nugraha', 20, 'Pria', 'Perumahan Mega Anugrah Blok C No.3', 'Jakarta', 'Indonesia', '2022-12-30 10:07:26', '2022-12-30 10:08:41'),
('00123468', 'Sarah Restianti', 20, 'Wanita', 'Jl. Rumah Merdeka No. 4', 'Salatiga', 'Indonesia', '2022-12-30 10:18:38', '2022-12-30 10:18:38'),
('00234567', 'Robert Irwin', 25, 'Pria', '4 Church Street', 'Sydney', 'Australia', '2022-12-30 10:09:47', '2022-12-30 10:09:57'),
('00234568', 'Jacob Rotschild', 30, 'Pria', 'Grove Street', 'New York', 'Amerika Serikat', '2022-12-30 10:11:18', '2022-12-30 10:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_30_124318_create_buyers_table', 1),
(6, '2022_12_30_124347_create_sellers_table', 1),
(7, '2022_12_30_124356_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `tanggal_kedatangan` date NOT NULL,
  `seller` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order`, `tanggal_pembelian`, `tanggal_kedatangan`, `seller`, `seller_id`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'O123456', '2022-12-24', '2022-12-31', 'Ahmadi Adila', 'M123451', 'Dalam Perjalanan', '2022-12-30 09:58:51', '2022-12-30 09:58:51'),
(2, 'O123457', '2022-12-31', '2023-01-07', 'Rachel Pho', 'M123450', 'Diproses', '2022-12-30 10:15:31', '2022-12-30 10:15:31'),
(3, 'O123458', '2022-11-27', '2022-12-18', 'Rachel Pho', 'M123450', 'Pesanan Sudah Sampai di Tujuan', '2022-12-30 10:16:12', '2022-12-30 10:16:12'),
(4, 'O123459', '2022-12-31', '2023-01-05', 'Akmal Adi', 'M123458', 'Dalam Perjalanan', '2022-12-30 10:16:41', '2022-12-30 10:16:41'),
(5, 'O323459', '2022-12-30', '2023-01-06', 'Ali Simanjuntak', 'M123459', 'Diproses', '2022-12-30 10:17:36', '2022-12-30 10:17:36'),
(6, 'O233456', '2022-12-31', '2023-01-03', 'Ali Simanjuntak', 'M123557', 'Dalam Perjalanan', '2022-12-30 12:24:26', '2022-12-30 12:24:26'),
(7, 'O223456', '2022-12-30', '2023-01-03', 'Akmal Adi', 'M123458', 'Diproses', '2022-12-30 12:45:09', '2022-12-30 12:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `mid` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`mid`, `nama`, `umur`, `jenis_kelamin`, `produk`, `kota`, `negara`, `created_at`, `updated_at`) VALUES
('M123450', 'Rachel Pho', 19, 'Wanita', 'Kosmetik Pria Lansia', 'Bangkok', 'Thailand', '2022-12-30 10:14:39', '2022-12-30 11:28:22'),
('M123456', 'Ida Bagus Parthayana', 30, 'Pria', 'Tempe Presto', 'Semarang', 'Indonesia', '2022-12-30 09:20:13', '2022-12-30 09:20:13'),
('M123458', 'Akmal Adi', 19, 'Pria', 'Hoodie Pria XL', 'Cirebon', 'Indonesia', '2022-12-30 10:12:04', '2022-12-30 10:12:04'),
('M123477', 'Ahmadi adila', 45, 'Pria', 'Pemanas Listrik', 'Kota', 'Malaysia', '2022-12-30 11:27:40', '2022-12-30 11:27:40'),
('M123497', 'Ali Umrow', 36, 'Pria', 'Tempe Presto', 'Kuala Lumpur', 'Malaysia', '2022-12-30 10:19:42', '2022-12-30 10:19:42'),
('M123557', 'Ali Simanjuntak', 30, 'Pria', 'Pemanas Listrik', 'Nusantara', 'Indonesia', '2022-12-30 11:25:34', '2022-12-30 11:28:11'),
('M223497', 'Elisa', 20, 'Wanita', 'Kosmetik', 'Semarang', 'Indonesia', '2022-12-30 12:43:35', '2022-12-30 12:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Annaz Darmawan', 'annaz@gmail.com', 'AnzBooch', NULL, '$2y$10$n5bF4mGtRCswgmrTidxSBekbwrmwpj2MywTrWppclSlv99bNYnymO', NULL, '2022-12-30 08:13:22', '2022-12-30 08:49:56'),
(2, 'Abilawa', 'abilawa@gmail.com', 'Abi', NULL, '$2y$10$kFkWVqABtRrYyjtGJlQ6x.q6kdxWnXj/AvraoOV8g7kOvD0NDNnkS', NULL, '2022-12-30 11:51:45', '2022-12-30 11:51:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

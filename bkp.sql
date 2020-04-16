-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 02:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `datareward`
--

CREATE TABLE `datareward` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datareward`
--

INSERT INTO `datareward` (`id`, `kode`, `keterangan`, `point`, `created_at`, `updated_at`) VALUES
(1, 'H5.5', 'Memberi Hadiah', 150, NULL, NULL),
(2, 'H5.1', 'Solat Tepat Waktu', 200, NULL, NULL),
(3, 'H5.10', 'Menemukan Barang', 75, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(4, '2019_12_18_070115_create_rewards_table', 1),
(5, '2019_12_19_033921_create_punishment_table', 2),
(6, '2019_12_19_034255_create_punishments_table', 3),
(7, '2019_12_19_035514_create_punishments_table', 4),
(8, '2020_01_27_021837_create_siswa_table', 5),
(9, '2020_01_27_065610_create_siswa_table', 6),
(10, '2020_01_28_064427_create_siswas_table', 7),
(11, '2020_01_28_071035_create_rewards_table', 8),
(12, '2020_01_28_074947_create_rewards_table', 9),
(13, '2020_01_28_080418_create_datareward_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `punishments`
--

CREATE TABLE `punishments` (
  `id` int(10) UNSIGNED NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rayon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punishment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `punishments`
--

INSERT INTO `punishments` (`id`, `nis`, `nama`, `rombel`, `rayon`, `punishment`, `created_at`, `updated_at`) VALUES
(13, 11706251, 'Muhammad Ridho Irgiansyah', 'RPL XII-1', 'CIB 3', 'P4.13', '2020-01-27 18:28:31', '2020-01-27 18:28:31'),
(14, 11706114, 'Lingga Aksara Adiyatma', 'RPL XII-4', 'CIB 3', 'P1.10', '2020-01-27 18:32:33', '2020-01-27 18:32:33'),
(15, 11706079, 'Zahra Helmia', 'RPL XII-3', 'CIB 1', 'P3.1', '2020-01-27 18:35:12', '2020-01-27 18:35:12'),
(16, 11706251, 'Muhammad Ridho Irgiansyah', 'RPL XII-1', 'CIB 3', 'P1.10', '2020-01-27 20:12:02', '2020-01-27 20:12:02'),
(17, 11706114, 'Lingga Aksara Adiyatma', 'RPL XII-4', 'CIB 3', 'P1.9', '2020-01-27 21:24:14', '2020-01-27 21:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` int(10) UNSIGNED NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rayon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reward` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `saksi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `nis`, `nama`, `rombel`, `rayon`, `reward`, `keterangan`, `point`, `tanggal`, `saksi`, `created_at`, `updated_at`) VALUES
(1, 11706251, 'Muhammad Ridho Irgiansyah', 'RPL XII-1', 'CIB 3', 'H5.2', 'Memberi makan', 150, '2020-10-22', 'ACEP', '2020-01-28 00:56:08', '2020-01-28 00:56:08'),
(4, 11706114, 'Lingga Aksara Adiyatma', 'RPL XII-3', 'CIB 3', 'H5.10', 'Tidak Melanggar Peraturan Selama 4 Minggu', 25, '2020-02-19', 'GDS', '2020-02-01 01:00:29', '2020-02-01 01:00:29'),
(5, 11706224, 'Muhammad Febrian Arrasyid', 'RPL XII-2', 'CIS 1', 'H5.1', 'Solat Tepat Waktu', 200, '2020-02-27', 'Hapid', '2020-02-01 01:41:22', '2020-02-01 01:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rayon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nis`, `nama`, `rombel`, `rayon`, `created_at`, `updated_at`) VALUES
(1, 11706251, 'Muhammad Ridho Irgiansyah', 'RPL XII-1', 'CIB 3', NULL, NULL),
(2, 11706030, 'Dwi Febryansyah', 'RPL XII-2', 'CIC 5', NULL, NULL),
(3, 11706224, 'Muhammad Febrian Arrasyid', 'RPL XII-2', 'CIS 1', NULL, NULL),
(4, 11706162, 'Muchtarom', 'RPL XII-4', 'CIS 3', NULL, NULL),
(5, 11706114, 'Lingga Aksara Adiyatma', 'RPL XII-3', 'CIB 3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'kesiswaan', 'Muhammad Ridho Irgiansyah', 'irgiansyah@gmail.com', NULL, '$2y$10$6a/HkNVydjWxQk/J4t5aUeV3nXHmfQ2u2Ivz5vHqTkaxNyYHCZgTy', NULL, '2019-12-18 00:31:57', '2019-12-18 00:31:57'),
(3, 'pembimbing', 'Muslih', 'muslih@gmail.com', NULL, '$2y$10$6nQNG781W5HNWuXUEkVX6uY4hOtZk.SH0E7nTotA40MhyYN7tQlIa', NULL, '2019-12-19 21:08:23', '2019-12-19 21:08:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datareward`
--
ALTER TABLE `datareward`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `punishments`
--
ALTER TABLE `punishments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
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
-- AUTO_INCREMENT for table `datareward`
--
ALTER TABLE `datareward`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `punishments`
--
ALTER TABLE `punishments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

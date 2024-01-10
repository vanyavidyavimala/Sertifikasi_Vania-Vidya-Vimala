-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 01:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_collections`
--

CREATE TABLE `book_collections` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_code` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_collections`
--

INSERT INTO `book_collections` (`id`, `book_code`, `book_title`, `author`, `cover`, `status`) VALUES
(1, '001', 'Sang Pelajar', 'Billy', '1704881164.png', 'In Stock'),
(2, '002', 'Bumi Manusia', 'Rami', '1704882757.png', 'In Stock'),
(3, '003', 'Sang Pemimpi', 'Kasih', '1704886276.jpg', 'Out Of Stock'),
(4, '004', 'Laskar pelangi', 'Lisa S', '1704886753.jpg', 'Out Of Stock');

-- --------------------------------------------------------

--
-- Table structure for table `daftarpeminjam`
--

CREATE TABLE `daftarpeminjam` (
  `id` int(11) NOT NULL,
  `book_title` varchar(35) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `rent_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftarpeminjam`
--

INSERT INTO `daftarpeminjam` (`id`, `book_title`, `name`, `rent_date`, `return_date`) VALUES
(1, 'Ada Apa Dengan Cinta', 'titi', '2024-01-01', '2024-01-13'),
(4, 'Sang Pelajar', 'kiki', '2024-01-07', '2024-01-14'),
(5, 'Sang Pusaka', 'kuku', '2024-01-07', '2024-01-14'),
(7, 'Bumi Manusia', 'toto', '2024-01-08', '2024-01-15'),
(8, 'Laskar pelangi', 'vanes', '2024-01-09', '2024-01-16'),
(9, 'Sang Pelajar', 'billy', '2024-01-10', '2024-01-17');

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
(5, '2024_01_06_130155_create__book_collections_table', 2),
(6, '2024_01_10_085022_create_renterlist_table', 3),
(7, '2024_01_10_100348_create_book_collections_table', 4);

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
-- Table structure for table `renterlist`
--

CREATE TABLE `renterlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `book_title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `renterlist`
--

INSERT INTO `renterlist` (`id`, `book_id`, `book_title`, `name`, `rent_date`, `return_date`) VALUES
(5, 1, 'Sang Pelajar', 'Vannes', '2024-01-10', '2024-01-17'),
(7, 2, 'Bumi Manusia', 'Gege', '2024-01-10', '2024-01-17'),
(10, 3, 'Sang Pemimpi', 'Manuela', '2024-01-10', '2024-01-17'),
(11, 4, 'Laskar pelangi', 'Kiki', '2024-01-10', '2024-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `_book_collections`
--

CREATE TABLE `_book_collections` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_code` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_book_collections`
--

INSERT INTO `_book_collections` (`id`, `book_code`, `book_title`, `author`, `cover`, `status`) VALUES
(1, '011', 'Laskar pelangi', 'Ria S', '1704549002.png', 'In Stock'),
(2, '012', 'Bumi Manusia', 'Bara N', '1704549392.jpg', 'In Stock'),
(3, '013', 'Sang Pemimpi', 'Bagas', '1704549606.png', 'In Stock'),
(4, '014', 'Sang Pelajar', 'Rama', '1704549825.png', 'In Stock'),
(5, '015', 'Sang Gigih', 'Randi', '1704551393.png', 'In Stock'),
(9, '017', 'Pejuang Tangguh', 'Vanya', '1704878613.jpg', 'In Stock');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_collections`
--
ALTER TABLE `book_collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftarpeminjam`
--
ALTER TABLE `daftarpeminjam`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `renterlist`
--
ALTER TABLE `renterlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_book_collections`
--
ALTER TABLE `_book_collections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_collections`
--
ALTER TABLE `book_collections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daftarpeminjam`
--
ALTER TABLE `daftarpeminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `renterlist`
--
ALTER TABLE `renterlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `_book_collections`
--
ALTER TABLE `_book_collections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD CONSTRAINT `failed_jobs_ibfk_1` FOREIGN KEY (`id`) REFERENCES `personal_access_tokens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

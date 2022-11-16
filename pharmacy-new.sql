-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 12:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy-new`
--

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `request_quotation_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `created_at`, `updated_at`, `request_quotation_id`) VALUES
(1, '1663451978_download.jpg', '2022-09-17 16:29:38', '2022-09-17 16:29:38', 1),
(2, '1663451978_images (1).jpg', '2022-09-17 16:29:38', '2022-09-17 16:29:38', 1),
(3, '1663451978_images (2).jpg', '2022-09-17 16:29:38', '2022-09-17 16:29:38', 1),
(4, '1663451978_images.jpg', '2022-09-17 16:29:38', '2022-09-17 16:29:38', 1),
(5, '1663452066_download.jpg', '2022-09-17 16:31:06', '2022-09-17 16:31:06', 2),
(6, '1663452066_images (1).jpg', '2022-09-17 16:31:06', '2022-09-17 16:31:06', 2),
(7, '1663452066_images (2).jpg', '2022-09-17 16:31:06', '2022-09-17 16:31:06', 2),
(8, '1663452773_download.jpg', '2022-09-17 16:42:53', '2022-09-17 16:42:53', 3),
(9, '1663452773_images (1).jpg', '2022-09-17 16:42:53', '2022-09-17 16:42:53', 3),
(10, '1663452773_images (2).jpg', '2022-09-17 16:42:53', '2022-09-17 16:42:53', 3),
(11, '1663452773_images.jpg', '2022-09-17 16:42:53', '2022-09-17 16:42:53', 3),
(12, '1663452845_images (2).jpg', '2022-09-17 16:44:05', '2022-09-17 16:44:05', 4),
(13, '1663452845_images.jpg', '2022-09-17 16:44:05', '2022-09-17 16:44:05', 4);

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `drug_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drug_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `drug_name`, `drug_code`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 'kdkf fkdnf', '#54f5dfd', '100', '2022-09-17 16:44:53', '2022-09-17 16:44:53'),
(2, 'ef fef', '@mdemle', '855', '2022-09-17 16:45:06', '2022-09-17 16:45:06');

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
(5, '2022_09_15_202645_create_request_quotations_table', 2),
(6, '2022_09_15_203107_create_images_table', 3),
(7, '2022_09_15_205008_create_request_quotations_table', 4),
(8, '2022_09_15_210031_add_status_to_request_quotations', 5),
(9, '2022_09_16_052925_change_delivery_time_type_request_quotations', 6),
(10, '2022_09_16_161031_add_user_id_to_request_quotations', 7),
(11, '2022_09_16_192308_remove_request_quotation_id_from_images', 8),
(12, '2022_09_17_070923_create_medicines_table', 9),
(13, '2022_09_17_102713_create_quotations_table', 10),
(14, '2022_09_17_194629_create_notifications_table', 11);

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
-- Table structure for table `quotations`
--

CREATE TABLE `quotations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `drug_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_quotation_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotations`
--

INSERT INTO `quotations` (`id`, `drug_name`, `quantity`, `price`, `request_quotation_id`, `created_at`, `updated_at`) VALUES
(1, 'kdkf fkdnf', '9', '900', 2, '2022-09-17 16:45:28', '2022-09-17 16:45:28'),
(2, 'ef fef', '4', '3420', 2, '2022-09-17 16:45:37', '2022-09-17 16:45:37'),
(3, 'kdkf fkdnf', '4', '400', 1, '2022-09-17 16:46:09', '2022-09-17 16:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `request_quotations`
--

CREATE TABLE `request_quotations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_quotations`
--

INSERT INTO `request_quotations` (`id`, `note`, `address`, `delivery_time`, `created_at`, `updated_at`, `status`, `user_id`) VALUES
(1, 'jiiii', '3/88, Vijayapura, Dadayamthalawa.', '2', '2022-09-17 16:29:38', '2022-09-17 16:46:56', 'Accepted', 2),
(2, 'jdd', '3/88, Vijayapura, Dadayamthalawa.', '4', '2022-09-17 16:31:06', '2022-09-17 16:47:09', 'Rejected', 2),
(3, 'fjndnd cndkcdl', '215/155, bygy, hhu', '6', '2022-09-17 16:42:53', '2022-09-17 16:42:53', 'pending', 2),
(4, 'ece grgr', '215/155, bygy, hhucece', '4', '2022-09-17 16:44:05', '2022-09-17 16:44:05', 'pending', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `date_of_birth`, `user_type`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', '123456789', '1999-02-25', 1, 'ishanijayasekara04@gmail.com', '2022-09-17 16:19:33', '$2y$10$7D4IsuhWmiV/9Q/NKSRbFeHr9KZwEvHPjTmfAMwnp9Qt82JWk6Qrq', 'Qd7YoLGTj3tTiZFiAcxHbjEgx6QhRHPpef79CwsQtNSp6IduQUJwKqqEDk7o', '2022-09-17 16:19:33', '2022-09-17 16:19:33'),
(2, 'Manilka DIlshan', '+94718536539', '1999-12-28', 0, 'phrmanilkadilshan@gmail.com', NULL, '$2y$10$R.a7eZ0Hvid7eUhdGy0bou9D1hSH6ZFupjo2UhrmFeCxMgFbhYlX6', NULL, '2022-09-17 16:22:30', '2022-09-17 16:22:30'),
(3, 'user2', '4342525252', '1998-02-15', 0, 'user2@gmail.com', NULL, '$2y$10$cPjn0AWupbmcS78nvu5Kt.F/TyNsyAy10xzstWd9Df1iBwQVDunOC', NULL, '2022-09-17 16:43:39', '2022-09-17 16:43:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quotations`
--
ALTER TABLE `quotations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_quotations`
--
ALTER TABLE `request_quotations`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotations`
--
ALTER TABLE `quotations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request_quotations`
--
ALTER TABLE `request_quotations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

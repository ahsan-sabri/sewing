-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2020 at 02:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewing`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_text1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_text2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_text3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mini_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Men\'s Wear', 'men', NULL, '2020-04-14 05:48:54', '2020-04-14 05:48:54'),
(2, 'Women\'s Wear', 'women', NULL, '2020-04-14 05:48:54', '2020-04-14 05:48:54'),
(3, 'Kid\'s Zone', 'kid', NULL, '2020-04-14 05:48:54', '2020-04-14 05:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `mobile`, `address`, `website`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Sewing', 'info@sewing.com', '+8801756074374', 'Dhaka, Bangladesh', 'www.sewing.com.bd', 'iWZc5a2irs.png', '2020-04-14 05:48:54', '2020-09-07 00:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_12_145959_create_permission_tables', 1),
(4, '2020_03_19_044114_create_categories_table', 1),
(5, '2020_03_19_044114_create_modules_table', 1),
(6, '2020_03_19_044114_create_products_table', 1),
(7, '2020_03_23_113124_create_companies_table', 1),
(8, '2020_03_24_105001_create_banners_table', 1),
(9, '2020_04_10_124056_create_sub_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'users_manage', 'web', '2020-04-14 05:48:52', '2020-04-14 05:48:52'),
(2, 'products_manage', 'web', '2020-04-14 05:48:52', '2020-04-14 05:48:52'),
(3, 'categories_manage', 'web', '2020-04-14 05:48:52', '2020-04-14 05:48:52'),
(4, 'subcategories_manage', 'web', '2020-04-14 05:48:52', '2020-04-14 05:48:52'),
(5, 'modules_manage', 'web', '2020-04-14 05:48:52', '2020-04-14 05:48:52'),
(6, 'frontend_manage', 'web', '2020-04-14 05:48:53', '2020-04-14 05:48:53'),
(7, 'companies_manage', 'web', '2020-04-14 05:48:53', '2020-04-14 05:48:53'),
(8, 'banners_manage', 'web', '2020-04-14 05:48:53', '2020-04-14 05:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) DEFAULT NULL,
  `category_id` smallint(6) NOT NULL,
  `subcategory_id` mediumint(9) DEFAULT NULL,
  `short_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`other_images`)),
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `is_latest` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `category_id`, `subcategory_id`, `short_desc`, `long_desc`, `featured_image`, `other_images`, `is_featured`, `is_latest`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'Trouser', 'Ts-01', NULL, 2, 9, '100 % Cotton', 'Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit.', 'F04MQrZlLi.jpg', '[\"wc7itwghwQ.jpg\",\"1vPnA6twGW.jpg\"]', 1, 1, 1, '2020-04-14 07:49:38', '2020-09-07 02:56:27'),
(5, 'Trouser1', 'Ts-02', NULL, 2, 9, '100 % Cotton', 'Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit.', 'F04MQrZlLi.jpg', '[\"wc7itwghwQ.jpg\",\"1vPnA6twGW.jpg\"]', 1, 1, 1, '2020-04-14 07:49:38', '2020-09-07 02:56:27'),
(6, 'Trouser2', 'Ts-03', NULL, 2, 9, '100 % Cotton', 'Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit.', 'F04MQrZlLi.jpg', '[\"wc7itwghwQ.jpg\",\"1vPnA6twGW.jpg\"]', 1, 1, 1, '2020-04-14 07:49:38', '2020-09-07 02:56:27'),
(7, 'Trouser3', 'Ts-04', NULL, 2, 9, '100 % Cotton', 'Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit.', 'F04MQrZlLi.jpg', '[\"wc7itwghwQ.jpg\",\"1vPnA6twGW.jpg\"]', 1, 1, 1, '2020-04-14 07:49:38', '2020-09-07 02:56:27'),
(8, 'Trouser4', 'Ts-05', NULL, 2, 9, '100 % Cotton', 'Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit.', 'F04MQrZlLi.jpg', '[\"wc7itwghwQ.jpg\",\"1vPnA6twGW.jpg\"]', 1, 1, 1, '2020-04-14 07:49:38', '2020-09-07 02:56:27'),
(9, 'Trouser5', 'Ts-06', NULL, 2, 9, '100 % Cotton', 'Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit.', 'F04MQrZlLi.jpg', '[\"wc7itwghwQ.jpg\",\"1vPnA6twGW.jpg\"]', 1, 1, 1, '2020-04-14 07:49:38', '2020-09-07 02:56:27'),
(10, 'Trouser6', 'Ts-07', NULL, 2, 9, '100 % Cotton', 'Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit.', 'F04MQrZlLi.jpg', '[\"wc7itwghwQ.jpg\",\"1vPnA6twGW.jpg\"]', 1, 1, 1, '2020-04-14 07:49:38', '2020-09-07 02:56:27'),
(11, 'Trouser7', 'Ts-08', NULL, 2, 9, '100 % Cotton', 'Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit.', 'F04MQrZlLi.jpg', '[\"wc7itwghwQ.jpg\",\"1vPnA6twGW.jpg\"]', 1, 1, 1, '2020-04-14 07:49:38', '2020-09-07 02:56:27'),
(12, 'Trouser8', 'Ts-09', NULL, 2, 9, '100 % Cotton', 'Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit.', 'F04MQrZlLi.jpg', '[\"wc7itwghwQ.jpg\",\"1vPnA6twGW.jpg\"]', 1, 1, 1, '2020-04-14 07:49:38', '2020-09-07 02:56:27'),
(13, 'Trouser9', 'Ts-10', NULL, 2, 9, '100 % Cotton', 'Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit.', 'F04MQrZlLi.jpg', '[\"wc7itwghwQ.jpg\",\"1vPnA6twGW.jpg\"]', 1, 1, 1, '2020-04-14 07:49:38', '2020-09-07 02:56:27'),
(14, 'Trouser10', 'Ts-11', NULL, 2, 9, '100 % Cotton', 'Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit. Lorem ipsum dolores sit amit.', 'F04MQrZlLi.jpg', '[\"wc7itwghwQ.jpg\",\"1vPnA6twGW.jpg\"]', 1, 1, 1, '2020-04-14 07:49:38', '2020-09-07 02:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'web', '2020-04-14 05:48:53', '2020-04-14 05:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` mediumint(9) NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `slug`, `category_id`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Shirt', 'srt', 2, NULL, '2020-04-14 05:48:54', '2020-04-14 05:48:54'),
(2, 'Pant', 'pnt', 1, NULL, '2020-04-14 05:48:54', '2020-04-14 05:48:54'),
(3, 'Jacket', 'jkt', 2, NULL, '2020-04-14 05:48:54', '2020-04-14 05:48:54'),
(4, 'Swetter', 'swt', 2, NULL, '2020-04-14 05:48:54', '2020-04-14 05:48:54'),
(5, 'Glass', 'gls', 2, NULL, '2020-04-14 05:48:54', '2020-04-14 05:48:54'),
(6, 'Watch', 'wtc', 3, NULL, '2020-04-14 05:48:54', '2020-04-14 05:48:54'),
(7, 'T-Shirt', 'tsrt', 3, NULL, '2020-04-14 05:48:54', '2020-04-14 05:48:54'),
(8, 'Sports', 'spt', 3, NULL, '2020-04-14 05:48:54', '2020-04-14 05:48:54'),
(9, 'Trouser', 'trouser', 2, NULL, '2020-09-07 02:52:02', '2020-09-07 02:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$oww9ZtiCPpKtY0Yj/iE7AuE13D9TKMe625kt96p4eYP0V4jm.e8MO', NULL, '2020-04-14 05:48:54', '2020-04-14 05:48:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

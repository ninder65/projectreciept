-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 03:50 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recieptdb`
--

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
(3, '2017_06_08_155336_create_tbl_vendors_table', 1),
(4, '2017_06_08_155529_create_tbl_categories_table', 1),
(5, '2017_06_08_155607_create_tbl_reciepts_table', 1),
(6, '2017_06_14_035142_tbl_items', 1);

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
-- Table structure for table `reciepts`
--

CREATE TABLE `reciepts` (
  `id` int(11) NOT NULL,
  `reciept_name` varchar(100) DEFAULT NULL,
  `reciept_total` float DEFAULT NULL,
  `vendor_name` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `item1_name` varchar(100) DEFAULT NULL,
  `item1_quantity` int(11) DEFAULT NULL,
  `item1_price` float DEFAULT NULL,
  `item2_name` varchar(100) DEFAULT NULL,
  `item2_quantity` int(11) DEFAULT NULL,
  `item2_price` float DEFAULT NULL,
  `item3_name` varchar(100) DEFAULT NULL,
  `item3_quantity` int(11) DEFAULT NULL,
  `item3_price` float DEFAULT NULL,
  `item4_name` varchar(100) DEFAULT NULL,
  `item4_quantity` int(11) DEFAULT NULL,
  `item4_price` float DEFAULT NULL,
  `item5_name` varchar(100) DEFAULT NULL,
  `item5_quantity` int(11) DEFAULT NULL,
  `item5_price` float DEFAULT NULL,
  `item6_name` varchar(100) DEFAULT NULL,
  `item6_quantity` int(11) DEFAULT NULL,
  `item6_price` float DEFAULT NULL,
  `item7_name` varchar(100) DEFAULT NULL,
  `item7_quantity` int(11) DEFAULT NULL,
  `item7_price` float DEFAULT NULL,
  `item8_name` varchar(100) DEFAULT NULL,
  `item8_quantity` int(11) DEFAULT NULL,
  `item8_price` float DEFAULT NULL,
  `item9_name` varchar(100) DEFAULT NULL,
  `item9_quantity` int(11) DEFAULT NULL,
  `item9_price` float DEFAULT NULL,
  `item10_name` varchar(100) DEFAULT NULL,
  `item10_quantity` int(11) DEFAULT NULL,
  `item10_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reciepts`
--

INSERT INTO `reciepts` (`id`, `reciept_name`, `reciept_total`, `vendor_name`, `date`, `item1_name`, `item1_quantity`, `item1_price`, `item2_name`, `item2_quantity`, `item2_price`, `item3_name`, `item3_quantity`, `item3_price`, `item4_name`, `item4_quantity`, `item4_price`, `item5_name`, `item5_quantity`, `item5_price`, `item6_name`, `item6_quantity`, `item6_price`, `item7_name`, `item7_quantity`, `item7_price`, `item8_name`, `item8_quantity`, `item8_price`, `item9_name`, `item9_quantity`, `item9_price`, `item10_name`, `item10_quantity`, `item10_price`) VALUES
(10, 'thurday eve', 204, 'walmart', '2017-06-06', 'tires', 1, 104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'eve', 206, 'walmart', '2017-06-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'sadc v', 200, 'walmart', '2017-06-20', 'sadf', 10, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `iname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iquantity` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itotal` double(8,2) NOT NULL,
  `reciept_id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reciepts`
--

CREATE TABLE `tbl_reciepts` (
  `id` int(10) UNSIGNED NOT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL,
  `items_total_cost` double(8,2) NOT NULL,
  `date` datetime NOT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendors`
--

CREATE TABLE `tbl_vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `vname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test', '289-200-0165', 'test@gmail.com', '$2y$10$ATCqlA3Q8y/u6WKuDJ9qe.SxYCA4DpnB1pmPYduyhaq25TeX6dQl.', 'oFngEPbqm2Ou60gqJBc8S2Ya1GJhjKtQoOsMHU7G4TK7iBzLtHynVfBF759q', '2017-06-26 21:34:07', '2017-06-26 21:34:07');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `reciepts`
--
ALTER TABLE `reciepts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_items_reciept_id_foreign` (`reciept_id`),
  ADD KEY `tbl_items_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `tbl_reciepts`
--
ALTER TABLE `tbl_reciepts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_reciepts_vendor_id_foreign` (`vendor_id`),
  ADD KEY `tbl_reciepts_user_id_foreign` (`user_id`);

--
-- Indexes for table `tbl_vendors`
--
ALTER TABLE `tbl_vendors`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reciepts`
--
ALTER TABLE `reciepts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_reciepts`
--
ALTER TABLE `tbl_reciepts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_vendors`
--
ALTER TABLE `tbl_vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD CONSTRAINT `tbl_items_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `tbl_categories` (`id`),
  ADD CONSTRAINT `tbl_items_reciept_id_foreign` FOREIGN KEY (`reciept_id`) REFERENCES `tbl_reciepts` (`id`);

--
-- Constraints for table `tbl_reciepts`
--
ALTER TABLE `tbl_reciepts`
  ADD CONSTRAINT `tbl_reciepts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tbl_reciepts_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `tbl_vendors` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

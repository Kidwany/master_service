-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 01:13 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `master_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `mission_image_id` int(10) UNSIGNED DEFAULT NULL,
  `vision_image_id` int(10) UNSIGNED DEFAULT NULL,
  `values_image_id` int(10) UNSIGNED DEFAULT NULL,
  `approach_image_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `image_id`, `mission_image_id`, `vision_image_id`, `values_image_id`, `approach_image_id`, `created_at`, `updated_at`) VALUES
(1, 57, 37, 38, 39, 6, '2019-07-09 22:00:00', '2019-07-22 20:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `created_by`, `created_at`, `updated_at`) VALUES
(6, 2, '2019-06-25 12:57:58', '2019-06-25 12:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(10) NOT NULL,
  `image_id` int(10) DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `image_id`, `created_by`, `created_at`, `updated_at`) VALUES
(3, 48, 2, '2019-07-22 20:44:54', '2019-07-22 20:44:54'),
(4, 49, 2, '2019-07-22 20:46:09', '2019-07-22 20:46:09'),
(5, 50, 2, '2019-07-22 20:46:39', '2019-07-22 20:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_alt` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pintrest` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behance` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `phone`, `phone_alt`, `address_en`, `address_ar`, `location`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `pintrest`, `behance`, `updated_at`, `created_at`) VALUES
(1, 'info@master-service.com', '+2009586412', NULL, 'Cairo, Egypt', 'القاهرة, مصر', NULL, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com/allawy_festival/', 'https://www.youtube.com/channel/UCBBgH55Ky7H8tg0RmTe9o9g/featured', NULL, NULL, NULL, '2019-07-22 20:37:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_id`, `created_at`, `updated_at`) VALUES
(5, 51, '2019-07-22 20:50:15', '2019-07-22 20:50:15'),
(6, 52, '2019-07-22 20:50:15', '2019-07-22 20:50:15'),
(7, 53, '2019-07-22 20:50:15', '2019-07-22 20:50:15'),
(8, 54, '2019-07-22 20:50:15', '2019-07-22 20:50:15'),
(9, 55, '2019-07-22 20:50:15', '2019-07-22 20:50:15'),
(10, 56, '2019-07-22 20:50:15', '2019-07-22 20:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `album_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `path`, `album_id`, `created_at`, `updated_at`) VALUES
(1, '1563784444therachat_dribbble_2.jpg', 'dashboardImages/slider/1563784444therachat_dribbble_2.jpg', NULL, '2019-07-22 06:34:04', '2019-07-22 06:34:04'),
(2, '1563784553therachat_dribbble_2.jpg', 'dashboardImages/slider/1563784553therachat_dribbble_2.jpg', NULL, '2019-07-22 06:35:53', '2019-07-22 06:35:53'),
(3, '1563784765therachat_dribbble_2.jpg', 'dashboardImages/slider/1563784765therachat_dribbble_2.jpg', NULL, '2019-07-22 06:39:25', '2019-07-22 06:39:25'),
(4, '1563784878therachat_dribbble_2.jpg', 'dashboardImages/slider/1563784878therachat_dribbble_2.jpg', NULL, '2019-07-22 06:41:18', '2019-07-22 06:41:18'),
(5, '1563785015therachat_dribbble_2.jpg', 'dashboardImages/slider/1563785015therachat_dribbble_2.jpg', NULL, '2019-07-22 06:43:35', '2019-07-22 06:43:35'),
(6, '1563785064picture.png', 'dashboardImages/slider/1563785064picture.png', NULL, '2019-07-22 06:44:24', '2019-07-22 06:44:24'),
(7, '1563785194picture.png', 'dashboardImages/slider/1563785194picture.png', NULL, '2019-07-22 06:46:34', '2019-07-22 06:46:34'),
(30, '1563800323118-1188811_psychotherapist-cartoon-psychologist-illustration-mental-psychologist-clipart-png.png', 'dashboardImages/about/1563800323118-1188811_psychotherapist-cartoon-psychologist-illustration-mental-psychologist-clipart-png.png', NULL, '2019-07-22 10:58:43', '2019-07-22 10:58:43'),
(31, '1563800323Aljanadriyah (1).jpg', 'dashboardImages/about/1563800323Aljanadriyah (1).jpg', NULL, '2019-07-22 10:58:43', '2019-07-22 10:58:43'),
(32, '1563800323setting.jpg', 'dashboardImages/about/1563800323setting.jpg', NULL, '2019-07-22 10:58:43', '2019-07-22 10:58:43'),
(33, '1563800565118-1188811_psychotherapist-cartoon-psychologist-illustration-mental-psychologist-clipart-png.png', 'dashboardImages/about/1563800565118-1188811_psychotherapist-cartoon-psychologist-illustration-mental-psychologist-clipart-png.png', NULL, '2019-07-22 11:02:45', '2019-07-22 11:02:45'),
(34, '1563800565Aljanadriyah (1).jpg', 'dashboardImages/about/1563800565Aljanadriyah (1).jpg', NULL, '2019-07-22 11:02:45', '2019-07-22 11:02:45'),
(35, '1563800565setting.jpg', 'dashboardImages/about/1563800565setting.jpg', NULL, '2019-07-22 11:02:45', '2019-07-22 11:02:45'),
(36, '1563800637118-1188811_psychotherapist-cartoon-psychologist-illustration-mental-psychologist-clipart-png.png', 'dashboardImages/about/1563800637118-1188811_psychotherapist-cartoon-psychologist-illustration-mental-psychologist-clipart-png.png', NULL, '2019-07-22 11:03:57', '2019-07-22 11:03:57'),
(37, '1563800731118-1188811_psychotherapist-cartoon-psychologist-illustration-mental-psychologist-clipart-png.png', 'dashboardImages/about/1563800731118-1188811_psychotherapist-cartoon-psychologist-illustration-mental-psychologist-clipart-png.png', NULL, '2019-07-22 11:05:31', '2019-07-22 11:05:31'),
(38, '1563800731Aljanadriyah (1).jpg', 'dashboardImages/about/1563800731Aljanadriyah (1).jpg', NULL, '2019-07-22 11:05:31', '2019-07-22 11:05:31'),
(39, '1563800732setting.jpg', 'dashboardImages/about/1563800732setting.jpg', NULL, '2019-07-22 11:05:32', '2019-07-22 11:05:32'),
(40, '1563823156picture.png', 'dashboardImages/setting/1563823156picture.png', NULL, '2019-07-22 17:19:16', '2019-07-22 17:19:16'),
(41, '1563828033picture.png', 'dashboardImages/gallery/1563828033picture.png', NULL, '2019-07-22 18:40:33', '2019-07-22 18:40:33'),
(42, '1563828033user.png', 'dashboardImages/gallery/1563828033user.png', NULL, '2019-07-22 18:40:33', '2019-07-22 18:40:33'),
(47, '1563833910logo.png', 'dashboardImages/setting/1563833910logo.png', NULL, '2019-07-22 20:18:30', '2019-07-22 20:18:30'),
(48, '15638354942.png', 'dashboardImages/client/15638354942.png', NULL, '2019-07-22 20:44:54', '2019-07-22 20:44:54'),
(49, '15638355693.png', 'dashboardImages/client/15638355693.png', NULL, '2019-07-22 20:46:09', '2019-07-22 20:46:09'),
(50, '15638355984.png', 'dashboardImages/client/15638355984.png', NULL, '2019-07-22 20:46:38', '2019-07-22 20:46:38'),
(51, '15638358151.jpg', 'dashboardImages/gallery/15638358151.jpg', NULL, '2019-07-22 20:50:15', '2019-07-22 20:50:15'),
(52, '15638358152.jpg', 'dashboardImages/gallery/15638358152.jpg', NULL, '2019-07-22 20:50:15', '2019-07-22 20:50:15'),
(53, '15638358153.jpg', 'dashboardImages/gallery/15638358153.jpg', NULL, '2019-07-22 20:50:15', '2019-07-22 20:50:15'),
(54, '15638358154.jpg', 'dashboardImages/gallery/15638358154.jpg', NULL, '2019-07-22 20:50:15', '2019-07-22 20:50:15'),
(55, '15638358155.jpg', 'dashboardImages/gallery/15638358155.jpg', NULL, '2019-07-22 20:50:15', '2019-07-22 20:50:15'),
(56, '15638358156.jpg', 'dashboardImages/gallery/15638358156.jpg', NULL, '2019-07-22 20:50:15', '2019-07-22 20:50:15'),
(57, '1563836355mission.png', 'dashboardImages/about/1563836355mission.png', NULL, '2019-07-22 20:59:15', '2019-07-22 20:59:15'),
(58, '1563836772slide-1.jpg', 'dashboardImages/slider/1563836772slide-1.jpg', NULL, '2019-07-22 21:06:12', '2019-07-22 21:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'teacher', NULL, NULL),
(3, 'student', NULL, NULL),
(4, 'Support', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `image_id` int(10) DEFAULT NULL,
  `video_id` int(10) DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(10) NOT NULL,
  `logo` int(10) UNSIGNED NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `default_lang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `logo`, `status`, `default_lang`, `created_at`, `updated_at`) VALUES
(1, 47, 0, 'en', '2019-07-23 22:00:00', '2019-07-22 20:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `video_id` int(10) DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image_id`, `video_id`, `url`, `created_by`, `created_at`, `updated_at`) VALUES
(9, 58, NULL, 'https://www.google.com/search?q=detach+laravel&oq=detach+la&aqs=chrome.1.69i57j0l5.6068j0j7&sourceid=chrome&ie=UTF-8', 2, '2019-07-22 21:06:12', '2019-07-22 21:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ahmed Kidwany', 'ahmed@gmail.com', 1, NULL, '$2y$10$nKEdHs80k0y8iezFBtWVOODsFXlvxX4Y2ezYDY2f1HQ8hpFPTrdbO', 'Vfb0U8Xo9NFA5wdl50HdcDZmxLij6PwRNSWDURapIS77jIqtgW0aFOc348Of', '2019-06-18 15:45:49', '2019-06-18 16:12:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_image_id` (`image_id`),
  ADD KEY `misson_image_id` (`mission_image_id`),
  ADD KEY `vision_image_id` (`vision_image_id`),
  ADD KEY `values_image_id` (`values_image_id`),
  ADD KEY `approach_image_id` (`approach_image_id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_created_by_user` (`created_by`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_image_id` (`image_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_album_id` (`album_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `webiste_logo_image_id` (`logo`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slide_created_by` (`created_by`),
  ADD KEY `slide_image_id` (`image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `user_role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about`
--
ALTER TABLE `about`
  ADD CONSTRAINT `about_image_id` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `approach_image_id` FOREIGN KEY (`approach_image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `misson_image_id` FOREIGN KEY (`mission_image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `values_image_id` FOREIGN KEY (`values_image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `vision_image_id` FOREIGN KEY (`vision_image_id`) REFERENCES `image` (`id`);

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_created_by_user` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_image_id` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `album_id_fk` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `setting`
--
ALTER TABLE `setting`
  ADD CONSTRAINT `webiste_logo_image_id` FOREIGN KEY (`logo`) REFERENCES `image` (`id`);

--
-- Constraints for table `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `slide_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `slide_image_id` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_role_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

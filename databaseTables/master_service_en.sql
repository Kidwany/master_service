-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 02:52 PM
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
-- Database: `master_service_en`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `about_id` int(10) NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci,
  `vision` text COLLATE utf8mb4_unicode_ci,
  `value` text COLLATE utf8mb4_unicode_ci,
  `approach` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_id`, `mission`, `vision`, `value`, `approach`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Am facing a problem updating user profile for my application. I followed Laracasts&#39;s user profile lesson and am using form model binding. When I filled and submit the form I get &quot;Creating default object from empty value&quot;. I don&#39;t know what am doing wrong. Here is my controller update method', '<p>Am facing a problem updating user profile for my application. I followed Laracasts&#39;s user profile lesson and am using form model binding. When I filled and submit the form I get &quot;Creating default object from empty value&quot;. I don&#39;t know what am doing wrong. Here is my controller update method:</p>', '<p>Am facing a problem updating user profile for my application. I followed Laracasts&#39;s user profile lesson and am using form model binding. When I filled and submit the form I get &quot;Creating default object from empty value&quot;. I don&#39;t know what am doing wrong. Here is my controller update ==========</p>', 'Am facing a problem updating user profile for my application. I followed Laracasts\'s user profile lesson and am using form model binding. When I filled and submit the form I get \"Creating default object from empty value\". I don\'t know what am doing wrong. Here is my controller update method:', 'We take a multifaceted approach to health care that allows us to provide superior care, across multiple disciplines, to treat the whole person. Our services include family medicine, dentistry, behavioral health, and a full-service pharmacy, all under one roof.\r\n\r\nWe take a multifaceted approach to health care that allows us to provide superior care, across multiple disciplines, to treat the whole person. Our services include family medicine, dentistry, behavioral health, and a full-service pharmacy, all under one roof.', '2019-07-17 22:00:00', '2019-07-23 09:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(10) NOT NULL,
  `album_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `client_id`, `name`, `created_at`, `updated_at`) VALUES
(3, 3, 'Al Ahly', '2019-07-22 20:44:54', '2019-07-22 20:44:54'),
(4, 4, 'Misr', '2019-07-22 20:46:10', '2019-07-22 20:46:10'),
(5, 5, 'Baraka', '2019-07-22 20:46:39', '2019-07-22 20:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `service_id` int(10) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_id`, `title`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(4, 7, 'Manufacturing and Wrapping Illuminated Letters', 'Manufacturing and Wrapping Illuminated Letters', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and', '2019-07-23 08:14:41', '2019-07-23 08:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `setting_id` int(10) NOT NULL,
  `website_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `setting_id`, `website_name`, `website_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Master Service', 'Master ServiceMaster ServiceMaster ServiceMaster ServiceMaster ServiceMaster ServiceMaster ServiceMaster ServiceMaster ServiceMaster', '2019-07-30 22:00:00', '2019-07-23 08:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `slide_id` int(10) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `button` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slide_id`, `title`, `sub_title`, `description`, `button`, `created_at`, `updated_at`) VALUES
(8, 9, 'New Banking', NULL, 'Better Master Services For Better World', 'download brochure', '2019-07-22 21:06:12', '2019-07-22 21:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) NOT NULL,
  `testimonial_id` int(10) NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `testimonial_id`, `username`, `text`, `created_at`, `updated_at`) VALUES
(2, 2, 'Mohamed Kidwany', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-07-23 08:02:57', '2019-07-23 08:11:40'),
(3, 3, 'Ahmed Fathi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-07-23 08:03:31', '2019-07-23 08:11:48'),
(4, 4, 'Ameer Ahmed', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-07-23 08:04:06', '2019-07-23 08:11:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_ar_id` (`about_id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id_en` (`album_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_en_id` (`client_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_ar_id` (`service_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_en_id` (`setting_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slide_id_en` (`slide_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonial_en_fk` (`testimonial_id`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about`
--
ALTER TABLE `about`
  ADD CONSTRAINT `about_ar_id` FOREIGN KEY (`about_id`) REFERENCES `master_service`.`about` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_id_en` FOREIGN KEY (`album_id`) REFERENCES `master_service`.`album` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_en_id` FOREIGN KEY (`client_id`) REFERENCES `master_service`.`client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ar_id` FOREIGN KEY (`service_id`) REFERENCES `master_service`.`service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `setting`
--
ALTER TABLE `setting`
  ADD CONSTRAINT `setting_en_id` FOREIGN KEY (`setting_id`) REFERENCES `master_service`.`setting` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `slide_id_en` FOREIGN KEY (`slide_id`) REFERENCES `master_service`.`slider` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `testimonial_en_fk` FOREIGN KEY (`testimonial_id`) REFERENCES `master_service`.`testimonial` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

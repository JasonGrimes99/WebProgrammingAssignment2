-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 03:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shout`
--

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `meet_id` int(11) NOT NULL,
  `meet_from` int(11) NOT NULL,
  `meet_to` int(11) NOT NULL,
  `meet_location` varchar(60) NOT NULL,
  `meet_time` time NOT NULL,
  `meet_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`meet_id`, `meet_from`, `meet_to`, `meet_location`, `meet_time`, `meet_date`) VALUES
(13, 3, 3, 'fsfd', '04:04:00', '2019-04-01'),
(14, 3, 2, 'assaaadddd', '11:11:00', '2019-04-01'),
(16, 3, 4, 'aasada', '04:44:00', '2019-04-01'),
(17, 3, 4, 'asdddddddd', '04:04:00', '2019-04-01'),
(18, 3, 1, 'aaaaaaaa', '04:04:00', '2019-04-01'),
(19, 3, 2, 'assssssss', '04:44:00', '2019-04-01'),
(20, 3, 4, 'AAAAAAAAA', '04:44:00', '2019-04-01'),
(21, 3, 4, 'Somwhere 55', '11:11:00', '2019-04-01'),
(22, 3, 2, 'asdfsdfsdf', '11:11:00', '2019-04-01'),
(23, 3, 2, 'asdasdasd', '05:55:00', '2019-04-01'),
(24, 3, 1, '677777', '07:07:00', '2019-04-01'),
(25, 3, 2, 'asdasd', '11:01:00', '2019-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `m_id` int(11) NOT NULL,
  `m_from` int(11) NOT NULL,
  `m_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Johne', 'TheDoctor@bournemouth.ac.uk', '1234', NULL, NULL, NULL),
(2, 'Bob', 'something@aol.com', '$2y$10$pROYjny20hmE4MGW/bUBDebcA7RDpycIZlmUn9U12s3C/ynqIjQG2', 'oEclLjGbuUjdw2HEWQrKfqO6bj5dBeGYJZ1bQAtE32nbN1CTI3UHFJSszXYF', '2019-03-25 23:47:43', '2019-03-25 23:47:43'),
(3, 'admin', 'admin@admin.com', '$2y$10$QI6xU5rXwk8xoPDwPG.NmuQGZBNrAmAaTZ1KhgUqUBxWF0702wylC', '1ucw3y2B1Eb5jK1t4r7omuLmkSi8jNyCRLwL6eEmrO4tDoynrFx4wYmzi351', '2019-03-26 00:50:09', '2019-03-26 00:50:09'),
(4, 'John', 'john@smith.com', '$2y$10$2dFC5KLtL.OyEU/qIxTxuu/um3D7rX8ZkK7ITQMmxBS1EAGFF5J7C', 'iVMprJTKiXabW8In8vJW1y0iNPhYsj4gUoX4rksxmLFfZL0OeTcLVqf40aSG', '2019-04-01 08:45:41', '2019-04-01 08:45:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`meet_id`),
  ADD KEY `fk` (`meet_to`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `meet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `meetings`
--
ALTER TABLE `meetings`
  ADD CONSTRAINT `fk` FOREIGN KEY (`meet_to`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 09:24 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories_name` varchar(100) NOT NULL,
  `categories_descript` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `categories_descript`) VALUES
(1, 'ask', ''),
(2, 'soft', ''),
(3, 'hard', ''),
(4, 'baru', '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'karyawan_asking', 'General User'),
(3, 'user', 'user'),
(4, 'karyawan_soft', 'general user'),
(5, 'karyawan_hard', 'general user'),
(6, 'karyawan', 'general');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `id_problem` int(11) NOT NULL,
  `problem_details` varchar(100) NOT NULL,
  `value` int(11) NOT NULL,
  `id_catogories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`id_problem`, `problem_details`, `value`, `id_catogories`) VALUES
(1, 'askq', 3, 1),
(2, 'hardq', 2, 3),
(3, 'softq', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `point_priority` int(11) NOT NULL,
  `details` text NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_problem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text,
  `ktp` varchar(10) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `pict_ktp` varchar(100) DEFAULT NULL,
  `pict` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `address`, `ktp`, `birth`, `pict_ktp`, `pict`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$5dYBLihR0suRizAXUIhkX.ikc0CeOM6oDjU1.aKn9pahX2inl.FGy', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1562819265, 1, 'Admin', 'istrator', 'ADMIN', '0', NULL, NULL, NULL, NULL, NULL),
(2, '::1', 'qoyyim@qoyyim.com', '$2y$10$YzNpBkyrvQ0Oc8KZsFlz8eVE1Zzp8/BQBqxR0t8IRucpQ2YAoDms2', 'qoyyim@qoyyim.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1562551423, 1562818748, 1, 'qoyim', '123', 'user', '123123123', NULL, NULL, NULL, NULL, NULL),
(3, '::1', 'rudi@rudi.com', '$2y$10$YzNpBkyrvQ0Oc8KZsFlz8eVE1Zzp8/BQBqxR0t8IRucpQ2YAoDms2', 'rudi@rudi.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1562551423, 1562806658, 1, 'rudi', '123', 'user', '123321123', NULL, NULL, NULL, NULL, NULL),
(4, '::1', 'asking@asking.com', '$2y$10$YzNpBkyrvQ0Oc8KZsFlz8eVE1Zzp8/BQBqxR0t8IRucpQ2YAoDms2', 'asking@asking.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1562551423, 1562819281, 1, 'asking', '123', 'asking', '123123123123', NULL, NULL, NULL, NULL, NULL),
(5, '::1', 'soft@soft.com', '$2y$10$YzNpBkyrvQ0Oc8KZsFlz8eVE1Zzp8/BQBqxR0t8IRucpQ2YAoDms2', 'soft@soft.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1562551423, 1562819308, 1, 'soft', '123', 'soft', '123123123', NULL, NULL, NULL, NULL, NULL),
(6, '::1', 'hard@hard.com', '$2y$10$YzNpBkyrvQ0Oc8KZsFlz8eVE1Zzp8/BQBqxR0t8IRucpQ2YAoDms2', 'hard@hard.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1562551423, 1562819327, 1, 'hard', '123', 'hard', '123123123', NULL, NULL, NULL, NULL, NULL),
(7, '::1', 'user@user.com', '$2y$10$YzNpBkyrvQ0Oc8KZsFlz8eVE1Zzp8/BQBqxR0t8IRucpQ2YAoDms2', 'user@user.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1562551423, 1562819401, 1, 'user', '123', 'user', '123123123', NULL, NULL, NULL, NULL, NULL),
(8, '::1', 'new@new.com', '$2y$10$YzNpBkyrvQ0Oc8KZsFlz8eVE1Zzp8/BQBqxR0t8IRucpQ2YAoDms2', 'new@new.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1562551423, 1562819365, 1, 'new', '123', 'new', '123123123', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL,
  `id_categories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`, `id_categories`) VALUES
(1, 1, 1, NULL),
(2, 2, 2, 1),
(3, 3, 3, NULL),
(4, 4, 2, 1),
(5, 5, 4, 2),
(6, 6, 5, 3),
(7, 7, 3, NULL),
(8, 8, 6, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id_problem`),
  ADD KEY `id_catogories` (`id_catogories`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `fk_id_user` (`id_user`),
  ADD KEY `fk_id_problem` (`id_problem`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`) USING BTREE,
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`) USING BTREE,
  ADD KEY `id_categories` (`id_categories`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `id_problem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `problem`
--
ALTER TABLE `problem`
  ADD CONSTRAINT `problem_ibfk_1` FOREIGN KEY (`id_catogories`) REFERENCES `categories` (`id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users_groups` (`id`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_problem`) REFERENCES `problem` (`id_problem`);

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_groups_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

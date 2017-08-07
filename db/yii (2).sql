-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 07:04 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1502022513);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1501834593, 1501834593),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1501762064, 1501762064),
('/admin/rule/*', 2, NULL, NULL, NULL, 1501762202, 1501762202),
('/admin/user/*', 2, NULL, NULL, NULL, 1501749622, 1501749622),
('admin', 1, 'admin', NULL, NULL, 1501762126, 1501762126);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', '/*');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filesize` int(11) NOT NULL,
  `mimetype` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `filesize`, `mimetype`, `extension`, `path`) VALUES
(1, '', 0, '', 'jpg', ''),
(2, '', 0, '', 'jpg', ''),
(5, 'IRJET-Mukul Rathi-1502124462.jpg', 477990, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\IRJET-Mukul Rathi-1502124462.jpg'),
(6, 'IRJET-Mukul Rathi-1502124750.jpg', 477990, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\IRJET-Mukul Rathi-1502124750.jpg'),
(7, '', 0, '', 'jpg', ''),
(8, 'Interview information letter 28th June 2017-1502124841.jpg', 58738, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\Interview information letter 28th June 2017-1502124841.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES
(3, 'admin', NULL, '/admin/assignment/index', 1, 0x3132);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1501691717),
('m130524_201442_init', 1501691723),
('m140506_102106_rbac_init', 1501695115),
('m140602_111327_create_menu_table', 1501694970),
('m160312_050000_create_user', 1501694970);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'mukulrathi', 'V0pz_zPZ5qa0aoCH-5CJk1GtucPZLTnF', '$2y$13$TtNh9yqEfTV08lsZro1Wm.EdHGlsiv5WHX4tZfVoh.VKO669qGFWy', NULL, 'mukulrathi8@gmail.com', 10, 1501693005, 1501693005),
(2, 'manish', '', '', '', 'manishrth06@gmail.com', 0, 1501914802, 1501914802),
(3, 'yogesh', '', '', NULL, 'yogesh@gmail.com', 1, 1501945718, 1501945718),
(4, 'manish123', '', '', NULL, 'manish@gmal.com', 0, 1501947895, 1501947895),
(6, 'rahul ganguk', '', '', NULL, '32132132131', 0, 1502000441, 1502000441),
(7, '3321', '', '', NULL, '313', 0, 1502001697, 1502001697),
(8, 'kirajhbj', '', '', NULL, 'mukul@gmaill.com', 0, 1502011159, 1502011159),
(9, 'jkjhkjhkj', '', '', NULL, 'h@gmail.com', 1, 1502014308, 1502014308),
(13, 'raman', '', '', NULL, 'raman@gmail.com', 1, 1502014816, 1502014816),
(24, 'anikaet', '', '', NULL, 'aki@gmail.com', 1, 1502123449, 1502123449),
(25, 'mmmm', '', '', NULL, 'manishrtkh06@gmail.com', 0, 1502123890, 1502123890),
(28, 'kjhkjkjhkjh', '', '', NULL, 'h12@gmail.com', 1, 1502124462, 1502124462),
(29, '131432333', '', '', NULL, '3@GMAIL.COM', 0, 1502124750, 1502124750),
(30, '4322433', '', '', NULL, '3243@GMAILL.com', 0, 1502124841, 1502124841);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `first_name`, `last_name`, `mobile`, `address`, `state`, `city`, `landmark`) VALUES
(4, 'mukul', '1311', 959511168, '154321321', '31231321', '2132121', '2147483647'),
(6, '3131321', '31231', 1313, '1321', '31', '3132', '131'),
(7, '1321', '321', 321, '3132113131311321', '313', '132', '1321'),
(8, '1231321', '31321', 3213, '1321', '321', '21321', '321'),
(9, '2132132', '1321', 313, '1321', '321', '321', '3132'),
(13, 'raman', 'raman', 23115451, '123456', '123456', '123456', 'niramal nak'),
(24, 'ankir', 'jhdjh gjh', 120, 'kjhk', 'jhkjh', 'kjh', 'kjhkj'),
(25, 'HYFHFHGF', 'HGFHGFFH', 132132, 'HFH', 'FHGF', 'HGF', 'HGFHGF'),
(28, 'hghghg', 'j45435435', 3543, '535', '435', '353', '543'),
(29, '432432', '432', 4324, '2432', '43243', '2432', '432'),
(30, '65654', '65465', 465, '4654', '654', '654', '6546');

-- --------------------------------------------------------

--
-- Table structure for table `user_shop`
--

CREATE TABLE `user_shop` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_category_id` int(11) NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_shop`
--

INSERT INTO `user_shop` (`id`, `user_id`, `shop_name`, `shop_category_id`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 8, '321', 1, 321321, 321, NULL, NULL),
(2, 9, '132', 3, 132, 1321, NULL, NULL),
(6, 13, '000', 3, 1, 2, NULL, NULL),
(17, 24, 'hkjh', 1, 120, 12, NULL, NULL),
(18, 25, 'HGFHG', 3, 321231, 321221, NULL, NULL),
(21, 28, '33', 3, 535543, 5435, NULL, NULL),
(22, 29, '432342', 1, 4324324, 32424324, NULL, NULL),
(23, 30, '546', 3, 546, 54654, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_shop_address`
--

CREATE TABLE `user_shop_address` (
  `shop_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal_code` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_shop_address`
--

INSERT INTO `user_shop_address` (`shop_id`, `address`, `city`, `state`, `country`, `postal_code`) VALUES
(1, '321', '321', '321', '231', 3132),
(6, '09876', '09876', '0976', '09876', 9876),
(17, '12112', 'kjhk', '12121', 'jhkh', 12420),
(18, 'H', 'FHGF', 'GFH', 'HGFHGF', 3211),
(21, '354', '3555', '35435', '53', 535353),
(22, '324', '24', '24', '2432', 432),
(23, '654', '654', '64', '6546', 5465);

-- --------------------------------------------------------

--
-- Table structure for table `user_shop_category`
--

CREATE TABLE `user_shop_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_shop_category`
--

INSERT INTO `user_shop_category` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'medical', 1, NULL, 1502004401),
(2, 'kiranian', 0, 1502004426, 1502005006),
(3, 'kiranian', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_shop_file_mapping`
--

CREATE TABLE `user_shop_file_mapping` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_shop_file_mapping`
--

INSERT INTO `user_shop_file_mapping` (`id`, `shop_id`, `file_id`) VALUES
(1, 17, 1),
(2, 18, 2),
(5, 21, 5),
(6, 22, 6),
(7, 22, 7),
(8, 23, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_shop`
--
ALTER TABLE `user_shop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_shop_address`
--
ALTER TABLE `user_shop_address`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `user_shop_category`
--
ALTER TABLE `user_shop_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_shop_file_mapping`
--
ALTER TABLE `user_shop_file_mapping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`),
  ADD KEY `file_id` (`file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user_shop`
--
ALTER TABLE `user_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user_shop_address`
--
ALTER TABLE `user_shop_address`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user_shop_category`
--
ALTER TABLE `user_shop_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_shop_file_mapping`
--
ALTER TABLE `user_shop_file_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_shop`
--
ALTER TABLE `user_shop`
  ADD CONSTRAINT `user_shop_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_shop_address`
--
ALTER TABLE `user_shop_address`
  ADD CONSTRAINT `user_shop_address_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `user_shop` (`id`);

--
-- Constraints for table `user_shop_file_mapping`
--
ALTER TABLE `user_shop_file_mapping`
  ADD CONSTRAINT `user_shop_file_mapping_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `user_shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_shop_file_mapping_ibfk_2` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

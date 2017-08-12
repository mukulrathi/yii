-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2017 at 05:40 AM
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
  `path` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `filesize`, `mimetype`, `extension`, `path`, `url`) VALUES
(8, 'Interview information letter 28th June 2017-1502124841.jpg', 58738, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\Interview information letter 28th June 2017-1502124841.jpg', ''),
(9, 'WIN_20170726_18_27_03_Pro-1502421525.jpg', 54410, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\WIN_20170726_18_27_03_Pro-1502421525.jpg', ''),
(10, 'WIN_20170802_12_56_03_Pro-1502421525.jpg', 66556, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\WIN_20170802_12_56_03_Pro-1502421525.jpg', ''),
(11, 'WIN_20170802_12_56_06_Pro-1502421525.jpg', 67176, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\WIN_20170802_12_56_06_Pro-1502421525.jpg', ''),
(12, 'photo-1502467491.jpg', 122714, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\photo-1502467491.jpg', ''),
(13, 'Sketch-1502467491.png', 583013, 'image/png', 'png', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\Sketch-1502467491.png', ''),
(14, 'issue _build_freshsopy-1502501921.png', 207746, 'image/png', 'png', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\issue _build_freshsopy-1502501921.png', ''),
(15, 'photo-1502508338.jpg', 122714, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\photo-1502508338.jpg', 'http://yiip.local/uploads/shop_folder/photo-1502508338.jpg'),
(16, 'Sketch-1502508338.png', 583013, 'image/png', 'png', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\Sketch-1502508338.png', 'http://yiip.local/uploads/shop_folder/Sketch-1502508338.png');

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
(30, '4322433', '', '', NULL, '3243@GMAILL.com', 0, 1502124841, 1502124841),
(31, '111', 'uF-MmyXGxyhUD7ZgbFmdZOGWZ832FLKa', '$2y$13$MUKXSM3ReaY0wYhDwJTxruNVoR1FcTpgg6/lRg6/MTt6WEXSyPvlC', NULL, '111@gmail.com', 1, 1502421280, 1502421280),
(32, 'RAJJ', 'nJjRrXTqfFDnuO2XiZy44uKDtMTS7_kb', '$2y$13$LtWCklBE9nM4i/ioQR4pBOWgppFxbbLZ2SRoB45nkCNVScYyldbP6', NULL, 'RAH@GMAIL.COM', 0, 1502421525, 1502421525),
(33, 'gajanan', 'FsRpz2aJICIVRZPv2OecePr6kAbhQ_uv', '$2y$13$t9/jUr7bqRtsEnRAmm0b4uezjv60l/dmD8wZb0m9DUo39DOPJMQee', NULL, 'aj@gmail.com', 1, 1502467491, 1502467491),
(34, 'uytuytuytu', 'FA9k5waCyVZo1EoUoH2d-G6cTeosAhJX', '$2y$13$rF6yrVRtxewMhGZc2lz2xe1e6hAYobvE4XpugnuEnNzras4TpMaB.', NULL, 'gt@gmail.com', 1, 1502467814, 1502467814),
(35, 'yytryt', '', '', NULL, 'ryt@gmail.com', 0, 1502501921, 1502501921),
(36, 'jhgfsjhgjh gf', '', '', NULL, 'GH@GMAIL.COM', 0, 1502503200, 1502503200),
(41, 'ytr', '', '', NULL, 'ytr@gmail.com', 0, 1502503556, 1502503556),
(42, 'REWREWRErewrwTRTET', '', '', NULL, 'JHG@GMAIL.COM', 0, 1502504056, 1502504056),
(43, 'tre', '', '', NULL, 'tre@gmail.com', 0, 1502508338, 1502508338);

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
(30, '65654', '65465', 465, '4654', '654', '654', '6546'),
(31, '11', '1', 11, '1', '11', '1', '1'),
(32, '122212', '1212', 21, '21', '21', '12', '12'),
(33, 'gjanajnan', 'naannajnkjkjn', 2147483647, 'Nanterre, France', 'Île-de-France', 'Nanterre', 'nagrjhgjhh'),
(34, 'utuyt', 'uyt', 654654654, '654654', '6546', '546', '546'),
(35, 'uytuytuyt', 'uyu', 65451, 'uyttuytu', '', '', ''),
(36, 'FHGFHGV', 'HGFHGF', 6546546, 'GFGFHGFHG', '', '', ''),
(41, 'yt', 'tuyt', 321321, 'fy', '', '', ''),
(42, 'uytuytuyt', 'rytr', 2147483647, 'YTRETYRytrytrYTRY', '', '', ''),
(43, 'ttretr', 'tretre5435435', 5435435, 'srtret', '', '', '');

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
  `deescription` longtext,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_shop`
--

INSERT INTO `user_shop` (`id`, `user_id`, `shop_name`, `shop_category_id`, `start_time`, `end_time`, `deescription`, `created_at`, `updated_at`) VALUES
(1, 8, '321', 1, 321321, 321, NULL, NULL, NULL),
(2, 9, '132', 3, 132, 1321, NULL, NULL, NULL),
(6, 13, '000', 3, 1, 2, NULL, NULL, NULL),
(17, 24, 'hkjh', 1, 120, 12, NULL, NULL, NULL),
(18, 25, 'HGFHG', 3, 321231, 321221, NULL, NULL, NULL),
(21, 28, '33', 3, 535543, 5435, NULL, NULL, NULL),
(22, 29, '432342', 1, 4324324, 32424324, NULL, NULL, NULL),
(23, 30, '546', 3, 546, 54654, NULL, NULL, NULL),
(24, 31, '1', 3, 11, 1, NULL, NULL, NULL),
(25, 32, 'RELESIF MAEICCL', 1, 12, 12, NULL, NULL, NULL),
(26, 33, '121', 3, 10, 110, NULL, NULL, NULL),
(27, 34, '546', 3, 5465, 465, NULL, NULL, NULL),
(28, 35, '313131321', 1, 313131332, 132131, NULL, NULL, NULL),
(29, 36, '54654', 1, 654, 6546, NULL, NULL, NULL),
(34, 41, 'uyt', 3, 31321, 21321, NULL, NULL, NULL),
(35, 42, '3213132', 3, 13213, 32313, '<ul>\r\n<li style=\"text-align: left;\">321\r\n<ul>\r\n<li style=\"text-align: left;\"><strong>kjhkjhjkh</strong></li>\r\n</ul>\r\n</li>\r\n</ul>', NULL, NULL),
(36, 43, '543543', 1, 543543, 543543, '<p>4354</p>', NULL, NULL);

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
(23, '654', '654', '64', '6546', 5465),
(24, '1', '1', '11', '1', 1),
(25, '12', '12', '12', '121', 21),
(26, '12121154.', '2121', '213212132', 'France', 92000),
(27, '465', '4', '465', '654', 654),
(28, '31321', '213', '213', '132', 1321321),
(29, '54', '654', '654', 'HGK SHKH', 6545454),
(34, 'Nanded, Maharashtra, India', 'Nanded', 'MH', 'India', 65465),
(35, '213213', '321321', '21321321', 'inknkn', 645432),
(36, '543', '435', '5435', '354', 35435);

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
(8, 23, 8),
(9, 25, 9),
(10, 25, 10),
(11, 25, 11),
(12, 26, 12),
(13, 26, 13),
(14, 28, 14),
(15, 36, 15),
(16, 36, 16);

-- --------------------------------------------------------

--
-- Table structure for table `user_shop_orders`
--

CREATE TABLE `user_shop_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(11) NOT NULL,
  `orders` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_shop_orders`
--

INSERT INTO `user_shop_orders` (`id`, `shop_id`, `orders`, `created_at`, `updated_at`) VALUES
(1, 22, 'JHGHGJHG', 1502505227, 1502505227),
(2, 23, '120120', 1502505264, 1502505264);

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
  ADD PRIMARY KEY (`user_id`),
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
-- Indexes for table `user_shop_orders`
--
ALTER TABLE `user_shop_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `user_shop`
--
ALTER TABLE `user_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `user_shop_address`
--
ALTER TABLE `user_shop_address`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `user_shop_category`
--
ALTER TABLE `user_shop_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_shop_file_mapping`
--
ALTER TABLE `user_shop_file_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_shop_orders`
--
ALTER TABLE `user_shop_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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

--
-- Constraints for table `user_shop_orders`
--
ALTER TABLE `user_shop_orders`
  ADD CONSTRAINT `user_shop_orders_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `user_shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

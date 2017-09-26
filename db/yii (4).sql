-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 07:46 PM
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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `shop_id`, `username`, `rating`, `comment`) VALUES
(1, 0, '1212455', NULL, 'muukl'),
(2, 0, '120', NULL, 'mukul'),
(3, 37, '120', NULL, '120'),
(4, 37, '120', NULL, '231321'),
(5, 37, '120', NULL, '120'),
(6, 37, '120', NULL, '120'),
(7, 37, '1', NULL, '01.2'),
(8, 37, '120', NULL, '12012'),
(9, 37, '231321321', NULL, '321321321321'),
(10, 39, 'mukul', '3.5', 'kfhs kjfhsa jfhsakj hfaj');

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
(16, 'Sketch-1502508338.png', 583013, 'image/png', 'png', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\Sketch-1502508338.png', 'http://yiip.local/uploads/shop_folder/Sketch-1502508338.png'),
(17, 'WIN_20170726_18_27_03_Pro-1502607372.jpg', 54410, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\WIN_20170726_18_27_03_Pro-1502607372.jpg', 'http://yiip.local/uploads/shop_folder/WIN_20170726_18_27_03_Pro-1502607372.jpg'),
(18, 'WIN_20170802_12_56_03_Pro-1502607373.jpg', 66556, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\WIN_20170802_12_56_03_Pro-1502607373.jpg', 'http://yiip.local/uploads/shop_folder/WIN_20170802_12_56_03_Pro-1502607373.jpg'),
(19, 'WIN_20170802_12_56_06_Pro-1502607373.jpg', 67176, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\WIN_20170802_12_56_06_Pro-1502607373.jpg', 'http://yiip.local/uploads/shop_folder/WIN_20170802_12_56_06_Pro-1502607373.jpg'),
(20, '', 0, '', 'jpg', '', 'http://yiip.local/uploads/shop_folder/IMG_20170715_105448-1503225200.jpg'),
(21, 'IMG_20170715_105847-1503225255.jpg', 1350969, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\IMG_20170715_105847-1503225255.jpg', 'http://yiip.local/uploads/shop_folder/IMG_20170715_105847-1503225255.jpg'),
(22, 'IMG_20170715_105919-1503225255.jpg', 1480415, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\IMG_20170715_105919-1503225255.jpg', 'http://yiip.local/uploads/shop_folder/IMG_20170715_105919-1503225255.jpg'),
(23, 'IMG_20170715_110007-1503225255.jpg', 1373875, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\IMG_20170715_110007-1503225255.jpg', 'http://yiip.local/uploads/shop_folder/IMG_20170715_110007-1503225255.jpg'),
(24, 'IMG_20170715_110018-1503225255.jpg', 1412891, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\IMG_20170715_110018-1503225255.jpg', 'http://yiip.local/uploads/shop_folder/IMG_20170715_110018-1503225255.jpg'),
(25, 'WIN_20170726_18_27_03_Pro-1503226353.jpg', 54410, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\WIN_20170726_18_27_03_Pro-1503226353.jpg', 'http://yiip.local/uploads/shop_folder/WIN_20170726_18_27_03_Pro-1503226353.jpg'),
(26, 'WIN_20170802_12_56_03_Pro-1503226353.jpg', 66556, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\WIN_20170802_12_56_03_Pro-1503226353.jpg', 'http://yiip.local/uploads/shop_folder/WIN_20170802_12_56_03_Pro-1503226353.jpg'),
(27, 'WIN_20170802_12_56_06_Pro-1503226353.jpg', 67176, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\WIN_20170802_12_56_06_Pro-1503226353.jpg', 'http://yiip.local/uploads/shop_folder/WIN_20170802_12_56_06_Pro-1503226353.jpg'),
(28, 'phantomPDF-1503227553.png', 6018, 'image/png', 'png', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\phantomPDF-1503227553.png', 'http://yiip.local/uploads/shop_folder/phantomPDF-1503227553.png'),
(29, 'scan_ocr_pdf-1503227553.jpg', 6969, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\scan_ocr_pdf-1503227553.jpg', 'http://yiip.local/uploads/shop_folder/scan_ocr_pdf-1503227553.jpg'),
(30, 'sharereview_pdf-1503227553.jpg', 7563, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\sharereview_pdf-1503227553.jpg', 'http://yiip.local/uploads/shop_folder/sharereview_pdf-1503227553.jpg'),
(31, 'sign_pdf-1503227553.jpg', 7629, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\sign_pdf-1503227553.jpg', 'http://yiip.local/uploads/shop_folder/sign_pdf-1503227553.jpg'),
(32, 'kiity-1506438546.jpg', 48464, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\kiity-1506438546.jpg', 'http://yiip.local/uploads/shop_folder/kiity-1506438546.jpg');

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
(44, 'manish', '', '', NULL, 'mansish@gmail.com', 1, 1503225200, 1503225200),
(45, 'rahul', '', '', NULL, 'r@gmail.com', 1, 1503227553, 1503227553),
(46, 'ssfsa', '', '', NULL, 's@gmail.com', 1, 1506438546, 1506438546);

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
(44, 'manish', 'rathi', 876343553, 'nandanvan', '', '', ''),
(45, 'manish', 'rathi', 232365632, 'nandanvan', '', '', ''),
(46, 'manis', 'rathi', 2147483647, 'nandanvan', '', '', '');

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
  `order_status` tinyint(1) DEFAULT '0',
  `deescription` longtext,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_shop`
--

INSERT INTO `user_shop` (`id`, `user_id`, `shop_name`, `shop_category_id`, `start_time`, `end_time`, `order_status`, `deescription`, `created_at`, `updated_at`) VALUES
(37, 44, 'relief', 1, 12, 22, 0, '<p>wanjari</p>', NULL, NULL),
(38, 45, 'nishu kidwear', 1, 10, 11, 0, '', NULL, NULL),
(39, 46, 'reliebckjh', 3, 102201, 12121, 0, '', NULL, NULL);

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
(37, 'Nagpur Bus Stand, Medical College Colony, Jabalpur, Madhya Pradesh, India', 'Jabalpur', 'MP', 'India', 482003),
(38, 'Nandanvanam Main Road, Jawahar Nagar, Nagpur, Maharashtra, India', 'Nagpur', 'MH', 'India', 440009),
(39, 'Nandambakkam, Chennai, Tamil Nadu, India', 'Chennai', 'TN', 'India', 440000);

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
(3, 'kiranian', 1, NULL, NULL),
(4, 'spa', 1, NULL, NULL);

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
(25, 37, 25),
(26, 37, 26),
(27, 37, 27),
(28, 38, 28),
(29, 38, 29),
(30, 38, 30),
(31, 38, 31),
(32, 39, 32);

-- --------------------------------------------------------

--
-- Table structure for table `user_shop_orders`
--

CREATE TABLE `user_shop_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(11) NOT NULL,
  `orders` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_shop_orders`
--

INSERT INTO `user_shop_orders` (`id`, `shop_id`, `orders`, `amount`, `created_at`, `updated_at`) VALUES
(1, 37, '120', '', 1504339640, 1504339640),
(2, 38, 'sadas', '', 1504339945, 1504339945),
(3, 37, '123', '', NULL, NULL),
(4, 37, '1245', '', NULL, NULL),
(5, 38, 'aaaa', 'aad safasdf as', 1506447160, 1506447160);

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
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `user_shop`
--
ALTER TABLE `user_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `user_shop_address`
--
ALTER TABLE `user_shop_address`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `user_shop_category`
--
ALTER TABLE `user_shop_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_shop_file_mapping`
--
ALTER TABLE `user_shop_file_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user_shop_orders`
--
ALTER TABLE `user_shop_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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

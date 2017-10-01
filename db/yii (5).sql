-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2017 at 03:37 PM
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
  `shop_id` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `shop_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `shop_id`, `name`, `rating`, `comment`, `created_at`, `updated_at`, `shop_name`) VALUES
(21, 41, 'mukul1``', '4', 'shop listing', 1506859725, 1506859725, NULL),
(22, 42, 'my commen', '4', 't', 1506860348, 1506860348, NULL),
(23, 42, '120', '1.5', '354351', 1506861095, 1506861095, 'shahu kirana');

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
(32, 'kiity-1506438546.jpg', 48464, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\kiity-1506438546.jpg', 'http://yiip.local/uploads/shop_folder/kiity-1506438546.jpg'),
(33, 'photo-1506705116.jpg', 122714, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\photo-1506705116.jpg', 'http://yiip.local/uploads/shop_folder/photo-1506705116.jpg'),
(34, 'photo-1506857138.jpg', 122714, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\photo-1506857138.jpg', 'http://yiip.local/uploads/shop_folder/photo-1506857138.jpg'),
(35, 'endicia-1506864929.png', 26375, 'image/png', 'png', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\endicia-1506864929.png', 'http://yiip.local/uploads/shop_folder/endicia-1506864929.png'),
(36, 'kiity-1506864929.jpg', 48464, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\kiity-1506864929.jpg', 'http://yiip.local/uploads/shop_folder/kiity-1506864929.jpg'),
(37, 'photo-1506864929.jpg', 122714, 'image/jpeg', 'jpg', 'C:\\xampp\\htdocs\\advanced\\yiiplus\\uploads\\shop_folder\\photo-1506864929.jpg', 'http://yiip.local/uploads/shop_folder/photo-1506864929.jpg');

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
(47, 'yogesh', '', '', NULL, 'yogeshphp@alkurngmail.com', 1, 1506705036, 1506705036),
(48, 'manish', '', '', NULL, 'manisn@gmail.com', 10, 1506706585, 1506706585),
(49, 'mayuri', '', '', NULL, 'rautmayuri204@gmail.com', 10, 1506857066, 1506857066),
(50, 'UYGJHGJ', '', '', NULL, 'GJHG@GMAIL.COM', 10, 1506864929, 1506864929);

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
(47, 'manis', 'rathi', 2147483647, 'Nandambakkam, Chennai, Tamil Nadu, India', '', '', ''),
(48, 'manis', 'rathi', 2147483647, 'Nandambakkam, Chennai, Tamil Nadu, India', '', '', ''),
(49, 'mayuri', 'raut', 2147483647, '110/4,pension nagar, nagpur', '', '', ''),
(50, 'KJHKJH', 'KJ', 3431, 'KJHKJH', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_shop`
--

CREATE TABLE `user_shop` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_category_id` int(11) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `deescription` longtext,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_shop`
--

INSERT INTO `user_shop` (`id`, `user_id`, `shop_name`, `shop_category_id`, `start_time`, `end_time`, `status`, `deescription`, `created_at`, `updated_at`) VALUES
(40, 47, 'lotus dry cleanrs', 4, '101212', '1245', 1, '', NULL, NULL),
(41, 48, 'relef medical', 3, '1020', '252', 1, '', NULL, NULL),
(42, 49, 'shahu kirana', 3, '10', '6', 1, '<div>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>&nbsp;</div>', NULL, NULL),
(43, 50, '43', 3, '12:00 PM', '07:00 PM', 1, '<p>LHLKJLKJLKJLKJVWOIHO IWO OWIRJWER WJRLKJLKEJ RLKWJER;JWQ\'R\'WEJ R\'OWJ ORWQPRUPU`</p>', NULL, NULL);

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
(40, 'Nandambakkam, Chennai, Tamil Nadu, India', 'Chennai', 'TN', 'India', 440000),
(41, 'Nandambakkam, Chennai, Tamil Nadu, India', 'Chennai', 'TN', 'India', 440000),
(42, '110/4,pension nagar, nagpur', 'nagpur', 'maharastra', 'India', 44013),
(43, 'Tristar Aishwarya Apartments, Whitefield, Bengaluru, Karnataka, India', 'Bengaluru', 'KA', 'LKJLKJ', 560066);

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
(4, 'spa', 1, NULL, NULL),
(5, 'KJHKJH', 0, NULL, NULL),
(6, 'khgkjhkjhkjh', 0, NULL, NULL),
(7, 'Restaurants', 1, NULL, NULL);

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
(1, 40, 33),
(2, 42, 34),
(3, 43, 35),
(4, 43, 36),
(5, 43, 37);

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
(1, 40, 'sarres', '120', 1506769292, 1506769292),
(2, 40, 'akjhdakh', '120', 1506856044, 1506856044);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `user_shop`
--
ALTER TABLE `user_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `user_shop_address`
--
ALTER TABLE `user_shop_address`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `user_shop_category`
--
ALTER TABLE `user_shop_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_shop_file_mapping`
--
ALTER TABLE `user_shop_file_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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

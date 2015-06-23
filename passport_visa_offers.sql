-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2015 at 05:39 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `passport_visa_offers`
--

CREATE TABLE IF NOT EXISTS `passport_visa_offers` (
  `passport_visa_offer_code` int(11) NOT NULL,
  `passport_visa_code` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `passport_visa_offers`
--

INSERT INTO `passport_visa_offers` (`passport_visa_offer_code`, `passport_visa_code`, `title`, `description`, `content`, `image`, `update_at`, `create_at`) VALUES
(1, 1, 'VISA TRUNG QUỐC', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '2015-06-23 22:35:55', '2015-06-23 21:36:47'),
(2, 1, 'VISA ĐÀI LOAN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '2015-06-23 22:36:20', '2015-06-23 21:37:12'),
(3, 1, 'VISA ẤN ĐỘ', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '2015-06-23 22:36:34', '2015-06-23 21:37:37'),
(4, 1, 'Visa MYANMAR', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 21:38:04'),
(5, 1, 'Visa BANGLADESH', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 21:38:44'),
(6, 1, 'VISA SRI LANKA', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 21:39:16'),
(7, 1, 'VISA IRAN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 21:39:34'),
(8, 1, 'VISA HỒNG KÔNG', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 21:39:53'),
(9, 1, 'VISA HÀN QUỐC', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 21:40:13'),
(10, 1, 'VISA NHẬT BẢN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 21:40:56'),
(11, 1, 'VISA MACAO', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 21:41:16'),
(12, 2, 'VISA ANH', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:21:20'),
(13, 2, 'VISA ĐỨC', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:21:45'),
(14, 2, 'VISA UKRAINA', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:22:04'),
(15, 2, 'VISA NGA', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:22:21'),
(16, 2, 'VISA THỔ NHĨ KỲ', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:22:36'),
(17, 2, 'VISA THỤY SỸ', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:22:53'),
(18, 2, 'VISA ĐAN MẠCH', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '2015-06-23 22:37:33', '2015-06-23 22:23:06'),
(19, 2, 'VISA ICELAND', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:23:21'),
(20, 2, 'VISA HUNGARY', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:23:52'),
(21, 2, 'VISA PHẦN LAN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:30:26'),
(22, 2, 'VISA BỒ ĐÀO NHA', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:30:42'),
(23, 2, 'VISA TÂY BAN NHA', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:30:59'),
(24, 2, 'VISA BỈ', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:31:21'),
(25, 2, 'VISA CỘNG HÒA SEC', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:31:46'),
(26, 2, 'VISA BA LAN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:32:17'),
(27, 2, 'VISA HÀ LAN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:33:00'),
(28, 2, 'VISA Ý', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:33:25'),
(29, 2, 'VISA THỤY ĐIỂN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:33:44'),
(30, 2, 'VISA ÁO', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:34:05'),
(31, 2, 'VISA NAUY', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:34:28'),
(32, 2, 'VISA PHÁP', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '0000-00-00 00:00:00', '2015-06-23 22:34:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passport_visa_offers`
--
ALTER TABLE `passport_visa_offers`
  ADD PRIMARY KEY (`passport_visa_offer_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passport_visa_offers`
--
ALTER TABLE `passport_visa_offers`
  MODIFY `passport_visa_offer_code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

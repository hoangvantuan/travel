-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2015 at 06:18 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

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
-- Table structure for table `tour_region`
--

CREATE TABLE IF NOT EXISTS `tour_region` (
  `tour_region_code` int(11) NOT NULL AUTO_INCREMENT,
  `tour_region_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tour_country_code` int(11) NOT NULL,
  PRIMARY KEY (`tour_region_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tour_region`
--

INSERT INTO `tour_region` (`tour_region_code`, `tour_region_name`, `tour_country_code`) VALUES
(1, 'Du Lịch Miền Bắc', 1),
(3, 'Du lịch miền trung', 1),
(4, 'Du lịch miền tây', 1),
(5, 'Du lịch miền đông', 1),
(6, 'Du lịch châu á', 2),
(7, 'Du lịch châu âu', 2),
(8, 'Du lịch châu phi', 2),
(9, 'Di lịch châu mỹ', 2),
(10, 'Du lịch châu úc', 2),
(11, 'Du Lịch Hạ Long', 1),
(12, 'Du Lịch Đà Nẵng', 1),
(13, 'Du Lịch Phú Quốc', 1),
(14, 'Du Lịch Côn Đảo', 1),
(15, 'Du Lịch Sơn La', 1),
(16, 'Du Lịch Hà Giang', 1),
(17, 'Du Lịch Điện Biên Phủ', 1),
(18, 'Du Lịch Sapa', 1),
(19, 'Du Lịch Hà Nội', 1),
(21, 'Du Lịch Tây Bắc', 1),
(22, 'Du Lịch Tây Nguyên', 1),
(23, 'Du lịch Mê-Kông', 1),
(24, 'Du Lịch Mũi Né', 1),
(25, 'Du Lịch TP HCM', 1),
(26, 'Du Lịch Huế', 1),
(27, 'Du Lịch Ninh Bình', 1),
(28, 'Du Lịch Hòa Bình', 1),
(29, 'Du Lịch Cao Bằng', 1),
(30, 'Du Lịch Đà Lạt', 1),
(31, 'Du Lịch Lạng Sơn', 1),
(32, 'Du Lịch Hội An', 1),
(33, 'Du Lịch Tam Đảo ', 1),
(34, 'Du Lịch Xuyên Việt', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

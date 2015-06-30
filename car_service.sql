-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2015 at 04:22 AM
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
-- Table structure for table `car_service`
--

CREATE TABLE IF NOT EXISTS `car_service` (
  `msdd` text COLLATE utf8_unicode_ci NOT NULL,
  `mshx` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tenhangxe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diemden` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diemdi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soghe` int(4) NOT NULL,
  `gia` int(11) NOT NULL,
  `lienhe` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tenhangxe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_service`
--

INSERT INTO `car_service` (`msdd`, `mshx`, `tenhangxe`, `diemden`, `diemdi`, `soghe`, `gia`, `lienhe`) VALUES
('HP01', 'HP011', 'Hoa phượng đỏ', 'Hải phòng', 'Hải phòng', 4, 12, '01234567898'),
('HN01', 'HN012', 'Kim mã phố cổ', 'Hà nội', 'Hà Nội', 3, 13, '0123456789'),
('HD01', 'HD011', 'Mê linh', 'Hải Dương', 'Hải Hương', 5, 9, '0123456789'),
('HN01', 'HN011', 'Thanh xuân', 'Hà Nội', 'Hà Nội', 4, 100, '0123456789');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

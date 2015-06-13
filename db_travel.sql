-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2015 at 08:02 PM
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
-- Table structure for table `abroads`
--

CREATE TABLE IF NOT EXISTS `abroads` (
  `abroad_code` int(11) NOT NULL AUTO_INCREMENT,
  `abroad_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`abroad_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `abroad_offers`
--

CREATE TABLE IF NOT EXISTS `abroad_offers` (
  `abroad_offer_code` int(11) NOT NULL AUTO_INCREMENT,
  `abroad_code` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL,
  `create_at` datetime NOT NULL,
  PRIMARY KEY (`abroad_offer_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `car_service`
--

CREATE TABLE IF NOT EXISTS `car_service` (
  `car_service_code` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`car_service_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news_event`
--

CREATE TABLE IF NOT EXISTS `news_event` (
  `news_event_code` int(11) NOT NULL AUTO_INCREMENT,
  `new_event_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`news_event_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news_event_content`
--

CREATE TABLE IF NOT EXISTS `news_event_content` (
  `news_event_content_code` int(11) NOT NULL AUTO_INCREMENT,
  `news_event_code` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL,
  `create_at` datetime NOT NULL,
  PRIMARY KEY (`news_event_content_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `passport_visa`
--

CREATE TABLE IF NOT EXISTS `passport_visa` (
  `passport_visa_code` int(11) NOT NULL AUTO_INCREMENT,
  `passport_visa_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`passport_visa_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `passport_visa_offers`
--

CREATE TABLE IF NOT EXISTS `passport_visa_offers` (
  `passport_visa_offer_code` int(11) NOT NULL AUTO_INCREMENT,
  `passport_visa_code` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL,
  `create_at` datetime NOT NULL,
  PRIMARY KEY (`passport_visa_offer_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tour_content`
--

CREATE TABLE IF NOT EXISTS `tour_content` (
  `tour_content_code` int(11) NOT NULL AUTO_INCREMENT,
  `tour_region_code` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `total_cost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `content_cost` text COLLATE utf8_unicode_ci,
  ` content_policy` text COLLATE utf8_unicode_ci,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_at` datetime NOT NULL,
  `create_at` datetime NOT NULL,
  `tour_country_code` int(11) NOT NULL,
  PRIMARY KEY (`tour_content_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tour_country`
--

CREATE TABLE IF NOT EXISTS `tour_country` (
  `tour_country_code` int(11) NOT NULL AUTO_INCREMENT,
  `tour_country_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tour_country_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tour_country`
--

INSERT INTO `tour_country` (`tour_country_code`, `tour_country_name`) VALUES
(1, 'Du lịch trong nước'),
(2, 'Du lịch nước ngoài');

-- --------------------------------------------------------

--
-- Table structure for table `tour_region`
--

CREATE TABLE IF NOT EXISTS `tour_region` (
  `tour_region_code` int(11) NOT NULL AUTO_INCREMENT,
  `tour_region_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tour_country_code` int(11) NOT NULL,
  PRIMARY KEY (`tour_region_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tour_region`
--

INSERT INTO `tour_region` (`tour_region_code`, `tour_region_name`, `tour_country_code`) VALUES
(1, 'Tour miền bắc', 1),
(3, 'Du lịch miền trung', 1),
(4, 'Du lịch miền tây', 1),
(5, 'Du lịch miền đông', 1),
(6, 'Du lịch châu á', 2),
(7, 'Du lịch châu âu', 2),
(8, 'Du lịch châu phi', 2),
(9, 'Di lịch châu mỹ', 2),
(10, 'Du lịch châu úc', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

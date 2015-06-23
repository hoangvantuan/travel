-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2015 at 08:04 PM
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
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`email`, `password`) VALUES
('adtourist@gmail.com', 'adtourist'),
('adtourist@gmail.com', 'adtourist');

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
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `partner_code` int(11) NOT NULL AUTO_INCREMENT,
  `partner_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `partner_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`partner_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partner_code`, `partner_image`, `partner_link`) VALUES
(1, 'asset/image/partner/1.png', '#'),
(2, 'asset/image/partner/2.png', '#'),
(3, 'asset/image/partner/3.png', '#'),
(4, 'asset/image/partner/4.png', '#'),
(5, 'asset/image/partner/5.png', '#'),
(6, 'asset/image/partner/6.png', '#');

-- --------------------------------------------------------

--
-- Table structure for table `passport_visa`
--

CREATE TABLE IF NOT EXISTS `passport_visa` (
  `passport_visa_code` int(11) NOT NULL AUTO_INCREMENT,
  `passport_visa_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`passport_visa_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `passport_visa`
--

INSERT INTO `passport_visa` (`passport_visa_code`, `passport_visa_name`) VALUES
(1, 'Dịch vụ làm visa hộ chiếu'),
(2, 'Dịch vụ làm thẻ cư trú - tạm trú'),
(3, 'Dịch vụ xin giấy phép lao động'),
(4, 'Dịch vụ xin gia hạn Visa');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `passport_visa_offers`
--

INSERT INTO `passport_visa_offers` (`passport_visa_offer_code`, `passport_visa_code`, `title`, `description`, `content`, `image`, `update_at`, `create_at`) VALUES
(1, 1, 'Dịch vụ làm visa - hộ chiếu', 'Hỗ trợ làm visa , hộ chiếu', '<div class="col-md-8">\n\n            <h2>\n                Dịch vụ làm visa hộ chiếu\n            </h2>\n                <div class="contentDetails">\n                    <p><span style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Ngày nay <strong>dịch vụ làm visa</strong> hộ chiếụ ngày càng phát triển mạnh ở nước ta, để giúp quý khách hàng có được những giấy tờ cần thiết và hợp pháp khi xuất nhập cảnh thì AD Tourist</span></span><span style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); line-height: 20px; text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 14px;">&nbsp;</span><span style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">chúng tôi đã và đang hỗ trợ quý khách hàng 24/24. Để hiểu rõ hơn khái niệm thế nào là hộ chiếu và visa chúng tôi xin đưa ra khái niệm sau.</span></span></p><br><br>\n\n\n<h2 style="margin: 0px; padding: 0px; font-weight: bold; color: rgb(3, 160, 73); font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">1.PASSPORT</span></span></h2>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Passport (hộ chiếu) là do chính quyền quốc gia của bạn cấp phát để chứng minh bạn là công dân của đất nước đó.</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: center;"><img alt="" src="asset/image/visa/passport.jpg" style="width: 515px; height: 360px;" /></p>\n<br><br>\n\n<h2 style="margin: 0px; padding: 0px; font-weight: bold; color: rgb(3, 160, 73); font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">2.VISA</span></span></h2>\n\n<p>&nbsp;</p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Visa (thị thực) là do quốc gia bạn đến cấp cho phép bạn vào nước họ tạm trú một thời gian (sojoun), được dán tem hoặc đóng dấu vào trong cuốn hộ chiếu.</span></span></p>\n<br>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: center;"><img alt="" src="asset/image/visa/vietnam_visa.png" style="width: 600px; height: 409px;" /></p>\n<br><br>\n\n<h2 style="margin: 0px; padding: 0px; font-weight: bold; color: rgb(3, 160, 73); font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 18px;"><strong style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">3. Những <a href="index.php?controller=visa&action=servicevisa" target="_blank">dịch vụ làm visa</a> hộ chiếu của chúng tôi :</span></strong></span></h2>\n\n<p><span style="font-family: ''times new roman'', times, serif; font-size: 16px; color: rgb(0, 0, 0); line-height: 20px; text-align: justify;">- Dịch vụ visa xuất cảnh, visa nhập cảnh</span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ tư vấn và hỗ trợ ,thủ tục làm visa, thủ tục gia hạn visa, các điều kiện gia hạn visa...</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ tư vấn và hỗ trợ làm thủ tục xin visa đi các quốc gia trên thế giới từ châu Á đến châu Âu, châu Mỹ, Châu Úc: Visa Trung Quốc, Visa Hồng Kông, Visa Macao, Visa Pháp, Visa Mỹ, Visa Úc...</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ làm chứng minh thư khẩn, hộ chiếu nhanh, các giấy tờ liên quan đi kèm</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ làm thủ tục các giấy tờ liên quan như làm thẻ tạm trú, làm thẻ lao động...</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">-Và nhiều dịch vụ hỗ trợ và liên quan đến làm visa hộ chiếu đi các quốc gia trên thế giới...</span></span></p>\n<br>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Đến với công ty chúng tôi quý khách hàng hoàn toàn yên tâm về dịch vụ của công ty chúng tôi! Liên Hệ Ngay HOTLINE  : </span></span><span class="hotlienSpanTop" style="margin: 0px; padding: 0px; color: rgb(242, 0, 0);">0462 60 48 38 - 0987 647 504</span></p>\n\n                </div>\n\n        </div>', 'asset/image/visa/vi/vietnam_visa.png', '2015-06-13 00:00:00', '0000-00-00 00:00:00');

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
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_at` datetime NOT NULL,
  `create_at` datetime NOT NULL,
  `tour_country_code` int(11) NOT NULL,
  `possition` text COLLATE utf8_unicode_ci NOT NULL,
  `image_relate` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tour_content_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tour_content`
--

INSERT INTO `tour_content` (`tour_content_code`, `tour_region_code`, `title`, `time`, `total_cost`, `content`, `content_cost`, `description`, `image`, `update_at`, `create_at`, `tour_country_code`, `possition`, `image_relate`) VALUES
(12, 3, 'Đảo Ngọc Phú Quốc', '3 Ngày 2 Đêm', '11.500.000', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/du-lich-phu-quoc-67.png', '2015-06-22 23:59:10', '2015-06-22 22:27:15', 1, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14898.666451596955!2d105.842974!3d21.005997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7030dea9a0b16d02!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1426309165584', '<img src="http://i.imgur.com/UHUs8nJ.jpg" width="220"><img src="http://i.imgur.com/W4f9KU3.jpg" width="220"><img src="http://i.imgur.com/CG7zWVu.jpg" width="220">');

-- --------------------------------------------------------

--
-- Table structure for table `tour_country`
--

CREATE TABLE IF NOT EXISTS `tour_country` (
  `tour_country_code` int(11) NOT NULL AUTO_INCREMENT,
  `tour_country_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tour_country_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

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

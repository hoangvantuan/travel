-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2015 at 09:21 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `passport_visa_offers`
--

INSERT INTO `passport_visa_offers` (`passport_visa_offer_code`, `passport_visa_code`, `title`, `description`, `content`, `image`, `update_at`, `create_at`) VALUES
(1, 1, 'Dịch vụ làm visa - hộ chiếu', 'Hỗ trợ làm visa , hộ chiếu', '<div class="col-md-8">\r\n\r\n            <h2>\r\n                Dịch vụ làm visa hộ chiếu\r\n            </h2>\r\n                <div class="contentDetails">\r\n                    <p><span style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Ngày nay <strong>dịch vụ làm visa</strong> hộ chiếụ ngày càng phát triển mạnh ở nước ta, để giúp quý khách hàng có được những giấy tờ cần thiết và hợp pháp khi xuất nhập cảnh thì AD Tourist</span></span><span style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); line-height: 20px; text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 14px;">&nbsp;</span><span style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">chúng tôi đã và đang hỗ trợ quý khách hàng 24/24. Để hiểu rõ hơn khái niệm thế nào là hộ chiếu và visa chúng tôi xin đưa ra khái niệm sau.</span></span></p><br><br>\r\n\r\n\r\n<h2 style="margin: 0px; padding: 0px; font-weight: bold; color: rgb(3, 160, 73); font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">1.PASSPORT</span></span></h2>\r\n\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Passport (hộ chiếu) là do chính quyền quốc gia của bạn cấp phát để chứng minh bạn là công dân của đất nước đó.</span></span></p>\r\n\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: center;"><img alt="" src="asset/image/visa/passport.jpg" style="width: 515px; height: 360px;" /></p>\r\n<br><br>\r\n\r\n<h2 style="margin: 0px; padding: 0px; font-weight: bold; color: rgb(3, 160, 73); font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">2.VISA</span></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Visa (thị thực) là do quốc gia bạn đến cấp cho phép bạn vào nước họ tạm trú một thời gian (sojoun), được dán tem hoặc đóng dấu vào trong cuốn hộ chiếu.</span></span></p>\r\n<br>\r\n\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: center;"><img alt="" src="asset/image/visa/vietnam_visa.png" style="width: 600px; height: 409px;" /></p>\r\n<br><br>\r\n\r\n<h2 style="margin: 0px; padding: 0px; font-weight: bold; color: rgb(3, 160, 73); font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 18px;"><strong style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">3. Những <a href="index.php?controller=visa&action=servicevisa" target="_blank">dịch vụ làm visa</a> hộ chiếu của chúng tôi :</span></strong></span></h2>\r\n\r\n<p><span style="font-family: ''times new roman'', times, serif; font-size: 16px; color: rgb(0, 0, 0); line-height: 20px; text-align: justify;">- Dịch vụ visa xuất cảnh, visa nhập cảnh</span></p>\r\n\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ tư vấn và hỗ trợ ,thủ tục làm visa, thủ tục gia hạn visa, các điều kiện gia hạn visa...</span></span></p>\r\n\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ tư vấn và hỗ trợ làm thủ tục xin visa đi các quốc gia trên thế giới từ châu Á đến châu Âu, châu Mỹ, Châu Úc: Visa Trung Quốc, Visa Hồng Kông, Visa Macao, Visa Pháp, Visa Mỹ, Visa Úc...</span></span></p>\r\n\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ làm chứng minh thư khẩn, hộ chiếu nhanh, các giấy tờ liên quan đi kèm</span></span></p>\r\n\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ làm thủ tục các giấy tờ liên quan như làm thẻ tạm trú, làm thẻ lao động...</span></span></p>\r\n\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">-Và nhiều dịch vụ hỗ trợ và liên quan đến làm visa hộ chiếu đi các quốc gia trên thế giới...</span></span></p>\r\n<br>\r\n\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Đến với công ty chúng tôi quý khách hàng hoàn toàn yên tâm về dịch vụ của công ty chúng tôi! Liên Hệ Ngay HOTLINE  : </span></span><span class="hotlienSpanTop" style="margin: 0px; padding: 0px; color: rgb(242, 0, 0);">0462 60 48 38 - 0987 647 504</span></p>\r\n\r\n                </div>\r\n\r\n        </div>', '', '2015-06-13 00:00:00', '0000-00-00 00:00:00');

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
  MODIFY `passport_visa_offer_code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

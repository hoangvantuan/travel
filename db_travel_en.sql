-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 07:11 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_travel_en`
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
(1, 1, 'Dịch vụ làm visa - hộ chiếu', 'Hỗ trợ làm visa , hộ chiếu của chúng tôi', '<div class="col-md-8">\n\n            <h2>\n                Dịch vụ làm visa hộ chiếu\n            </h2>\n                <div class="contentDetails">\n                    <p><span style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Ngày nay <strong>dịch vụ làm visa</strong> hộ chiếụ ngày càng phát triển mạnh ở nước ta, để giúp quý khách hàng có được những giấy tờ cần thiết và hợp pháp khi xuất nhập cảnh thì AD Tourist</span></span><span style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); line-height: 20px; text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 14px;">&nbsp;</span><span style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">chúng tôi đã và đang hỗ trợ quý khách hàng 24/24. Để hiểu rõ hơn khái niệm thế nào là hộ chiếu và visa chúng tôi xin đưa ra khái niệm sau.</span></span></p><br><br>\n\n\n<h2 style="margin: 0px; padding: 0px; font-weight: bold; color: rgb(3, 160, 73); font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">1.PASSPORT</span></span></h2>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Passport (hộ chiếu) là do chính quyền quốc gia của bạn cấp phát để chứng minh bạn là công dân của đất nước đó.</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: center;"><img alt="" src="asset/image/visa/passport.jpg" style="width: 515px; height: 360px;" /></p>\n<br><br>\n\n<h2 style="margin: 0px; padding: 0px; font-weight: bold; color: rgb(3, 160, 73); font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">2.VISA</span></span></h2>\n\n<p>&nbsp;</p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Visa (thị thực) là do quốc gia bạn đến cấp cho phép bạn vào nước họ tạm trú một thời gian (sojoun), được dán tem hoặc đóng dấu vào trong cuốn hộ chiếu.</span></span></p>\n<br>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: center;"><img alt="" src="asset/image/visa/vietnam_visa.png" style="width: 600px; height: 409px;" /></p>\n<br><br>\n\n<h2 style="margin: 0px; padding: 0px; font-weight: bold; color: rgb(3, 160, 73); font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 18px;"><strong style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">3. Những <a href="index.php?controller=visa&action=servicevisa" target="_blank">dịch vụ làm visa</a> hộ chiếu của chúng tôi :</span></strong></span></h2>\n\n<p><span style="font-family: ''times new roman'', times, serif; font-size: 16px; color: rgb(0, 0, 0); line-height: 20px; text-align: justify;">- Dịch vụ visa xuất cảnh, visa nhập cảnh</span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ tư vấn và hỗ trợ ,thủ tục làm visa, thủ tục gia hạn visa, các điều kiện gia hạn visa...</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ tư vấn và hỗ trợ làm thủ tục xin visa đi các quốc gia trên thế giới từ châu Á đến châu Âu, châu Mỹ, Châu Úc: Visa Trung Quốc, Visa Hồng Kông, Visa Macao, Visa Pháp, Visa Mỹ, Visa Úc...</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ làm chứng minh thư khẩn, hộ chiếu nhanh, các giấy tờ liên quan đi kèm</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ làm thủ tục các giấy tờ liên quan như làm thẻ tạm trú, làm thẻ lao động...</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">-Và nhiều dịch vụ hỗ trợ và liên quan đến làm visa hộ chiếu đi các quốc gia trên thế giới...</span></span></p>\n<br>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Đến với công ty chúng tôi quý khách hàng hoàn toàn yên tâm về dịch vụ của công ty chúng tôi! Liên Hệ Ngay HOTLINE  : </span></span><span class="hotlienSpanTop" style="margin: 0px; padding: 0px; color: rgb(242, 0, 0);">0462 60 48 38 - 0987 647 504</span></p>\n\n                </div>\n\n        </div>', 'asset/image/visa/en/vietnam_visa.png', '2015-06-17 23:16:09', '0000-00-00 00:00:00');

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
  `policy` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tour_content_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tour_content`
--

INSERT INTO `tour_content` (`tour_content_code`, `tour_region_code`, `title`, `time`, `total_cost`, `content`, `content_cost`, ` content_policy`, `description`, `image`, `update_at`, `create_at`, `tour_country_code`, `policy`) VALUES
(1, 1, 'Đảo Ngọc Phú Quốc', '3 Ngày 2 Đêm', 'Liên Hệ', ' <table>\n 	<tr>\n 		<td>Alo</td>\n 	</tr>\n 	<tr>\n 		Alo 2\n 	</tr>\n </table>', '   <table align="left" border="1" cellpadding="0" cellspacing="0" class="table">\n	<tbody>\n		<tr>\n			<td colspan="3">\n			<p align="center"><strong>GI&Aacute; TOUR TRỌN G&Oacute;I CHO 1 KH&Aacute;CH</strong></p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:291px;height:21px;">\n			<p align="center"><strong>Người lớn</strong></p>\n\n			<p align="center">Từ 12 tuổi trở l&ecirc;n</p>\n			</td>\n			<td style="width:160px;height:21px;">\n			<p align="center"><strong>Trẻ em</strong></p>\n\n			<p align="center">Từ 02 &agrave;11 tuổi</p>\n			</td>\n			<td style="width:157px;height:21px;">\n			<p align="center"><strong>Trẻ em</strong></p>\n\n			<p align="center">Dưới 02 tuổi</p>\n			</td>\n		</tr>\n		<tr>\n			<td rowspan="2" style="width:291px;height:26px;">\n			<p align="center"><strong>11.990.000 </strong><strong>vnđ</strong></p>\n			</td>\n			<td style="width:160px;height:26px;">\n			<p><strong>9.750.000 </strong><strong>vnđ</strong></p>\n			</td>\n			<td style="width:157px;height:26px;">\n			<p align="center"><strong>3.590.000 </strong><strong>vnđ</strong></p>\n			</td>\n		</tr>\n		<tr>\n			<td colspan="2" style="width:317px;height:7px;">\n			<p align="center"><strong>Ngủ chung với người lớn đi k&egrave;m</strong></p>\n			</td>\n		</tr>\n		<tr>\n			<td colspan="3" style="width:607px;height:21px;">\n			<p align="center"><strong>Phụ thu ph&ograve;ng đơn : 4.620.000 vnđ / trọn tour</strong></p>\n			</td>\n		</tr>\n	</tbody>\n</table>', NULL, 'Đến sân bay Changi (Singapore), xe và HDV địa phương đón đoàn đi tham quan thành phố Singapore ngang qua Toà Án Tối Cao, Trung Tâm tài Chánh, Nhà hát Esplanade….Dùng cơm chiều .Sau đó về khách sạn nhận phòng nghỉ đêm tại Singapore', 'asset/image/tour/en/incountry/du-lich-da-nang.jpg', '2015-06-15 00:00:00', '0000-00-00 00:00:00', 1, '<p style=""><strong><u>GI&Aacute; TOUR BAO GỒM :</u></strong></p>\n\n<p style=""><strong>● V&eacute; m&aacute;y bay khứ hồi&nbsp; SGN &ndash; SIN/KUL &ndash; SGN </strong></p>\n\n<p style="">●&nbsp; Xe du lịch m&aacute;y lạnh đời mới v&agrave; v&eacute; tham quan theo chương tr&igrave;nh đ&atilde; n&ecirc;u.</p>\n\n<p style="">●&nbsp; Kh&aacute;ch Sạn ti&ecirc;u chuẩn 3, 4 sao &amp; c&aacute;c bữa ăn theo chương tr&igrave;nh.</p>\n\n<p style="">● Hướng dẫn vi&ecirc;n nhiệt t&igrave;nh theo đo&agrave;n suốt tuyến.</p>\n\n<p style=""><strong>●Thuế s&acirc;n bay, ph&iacute; An ninh v&agrave; xăng dầu. </strong></p>\n\n<p style=""><strong>● Bảo hiểm du lịch quốc tế với mức bồi thường tối đa 200.000.000vnd. </strong></p>\n\n<p style=""><strong>● Qu&agrave; tặng: N&oacute;n, bao hộ chiếu.</strong></p>\n\n<p style=""><strong><u>KH&Ocirc;NG BAO GỒM :</u></strong></p>\n\n<ul>\n	<li>Hộ chiếu (c&ograve;n gi&aacute; trị &iacute;t nhất 6 th&aacute;ng, chi ph&iacute; c&aacute; nh&acirc;n, điện thoại, giặt ủi &amp; nước uống trong kh&aacute;ch sạn. H&agrave;nh l&yacute; qu&aacute; cước (tối đa 1 kh&aacute;ch l&agrave; 15 kg).</li>\n	<li>Đối với Quốc tịch nước ngo&agrave;i, nếu sử dụng Visa Vietnam một lần phải phụ thu th&ecirc;m <strong>1.290.000đ/Kh&aacute;ch</strong> hoặc <strong>60USD/ kh&aacute;ch.</strong></li>\n	<li>Tiền &ldquo;Tip&rdquo; cho hướng dẫn vi&ecirc;n v&agrave; t&agrave;i xế tại địa phương <strong>400.000 vnđ/kh&aacute;ch</strong> hoặc <strong>18 USD/kh&aacute;ch.</strong></li>\n</ul>\n\n<p><strong><u>TRƯỜNG HỢP HỦY TOUR</u></strong>:</p>\n\n<ul>\n	<li>Nếu hủy tour trước 10 ng&agrave;y khởi h&agrave;nh sẽ mất tiền cọc (5 triệu đồng)</li>\n	<li>Nếu hủy tour trước 06&nbsp; ng&agrave;y khởi h&agrave;nh sẽ chi trả 50% tổng gi&aacute; trị tour.</li>\n	<li>Nếu hủy tour trước 03 ng&agrave;y&nbsp; khởi h&agrave;nh sẽ chi trả&nbsp; 70% tổng gi&aacute; trị tour.</li>\n	<li>Nếu hủy tour trong v&ograve;ng 72h trước ng&agrave;y khởi h&agrave;nh sẽ chi trả&nbsp; 100% tổng gi&aacute; trị tour.</li>\n</ul>\n\n<p style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (C&aacute;c ng&agrave;y tr&ecirc;n chỉ t&iacute;nh theo ng&agrave;y l&agrave;m việc, kh&ocirc;ng t&iacute;nh thứ 7 chủ nhật)</p>\n\n<p style=""><strong><u>LƯU &Yacute;</u></strong><strong>:</strong></p>\n\n<p style="">● Ch&uacute;ng t&ocirc;i xin kh&ocirc;ng chịu tr&aacute;ch nhiệm trong trường hợp qu&yacute; kh&aacute;ch bị từ chối nhập cảnh tại nước sở tại v&igrave; l&yacute; do nh&acirc;n th&acirc;n (mất 100% tiền Tour).</p>\n\n<p style="">● C&ocirc;ng ty <strong>Du lịch Mỹ &Uacute;c &Aacute;</strong> được ph&eacute;p thay đổi lịch tr&igrave;nh chuyến đi, sử dụng c&aacute;c h&atilde;ng h&agrave;ng kh&ocirc;ng thay thế nhưng vẫn đảm bảo tham quan đầy đủ c&aacute;c tuyến điểm theo chương tr&igrave;nh.</p>\n\n<p style="">● Do t&iacute;nh chất l&agrave; đo&agrave;n gh&eacute;p kh&aacute;ch lẻ, <strong>Du lịch Mỹ &Uacute;c &Aacute;</strong> sẽ có tr&aacute;ch nhiệm nhận kh&aacute;ch cho đủ đo&agrave;n (15 kh&aacute;ch người lớn trở l&ecirc;n) th&igrave; đo&agrave;n sẽ khởi h&agrave;nh đ&uacute;ng lịch tr&igrave;nh. Nếu số lượng đo&agrave;n dưới 15 kh&aacute;ch, cty sẽ c&oacute; tr&aacute;ch nhiệm th&ocirc;ng b&aacute;o cho kh&aacute;ch trước ng&agrave;y khởi h&agrave;nh 4 ng&agrave;y v&agrave; sẽ thỏa thuận lại ng&agrave;y khởi h&agrave;nh mới, hoặc ho&agrave;n trả lại to&agrave;n bộ số tiền cọc, kh&aacute;ch đ&atilde; đăng k&yacute; trước đ&oacute;.</p>\n\n<p style=""><strong>● Thuế &amp; phụ thu ph&iacute; xăng dầu c&oacute; thể thay đổi tuỳ v&agrave;o thời điểm xuất v&eacute; của h&atilde;ng h&agrave;ng kh&ocirc;ng.</strong></p>\n\n<p style="">● Trong những trường hợp kh&aacute;ch quan như : thi&ecirc;n tai, khủng bố&hellip; hoặc do sự cố hay c&oacute; sự thay đổi lịch tr&igrave;nh của c&aacute;c phương tiện vận chuyển c&ocirc;ng cộng như : m&aacute;y bay, t&agrave;u hỏa &hellip; th&igrave; c&ocirc;ng ty sẽ giữ quyền thay đổi lộ tr&igrave;nh bất cứ l&uacute;c n&agrave;o v&igrave; sự thuận tiện, an t&ograve;an cho Qu&yacute; kh&aacute;ch h&agrave;ng v&agrave; sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm bồi thường những thiệt hại ph&aacute;t sinh.</p>\n\n<p align="center"><strong><em><u>Mọi thắc mắc xin vui l&ograve;ng li&ecirc;n hệ:</u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em>Mr Minh Thiện &ndash; 0907.696.315</strong></p>\n');

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
(1, 'Owner Country'),
(2, 'Other Country');

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
(1, 'Tour Northern', 1),
(3, 'Tour Central', 1),
(4, 'Tour West', 1),
(5, 'Tour Eastern', 1),
(6, 'Tour Asia', 2),
(7, 'Tour Europe', 2),
(8, 'Tour Africa', 2),
(9, 'Tour America', 2),
(10, 'Tour Australian ', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

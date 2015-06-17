-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 01:24 PM
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
(1, 1, 'Dịch vụ làm visa - hộ chiếu', 'Hỗ trợ làm visa , hộ chiếu', '<div class="col-md-8">\n\n            <h2>\n                Dịch vụ làm visa hộ chiếu\n            </h2>\n                <div class="contentDetails">\n                    <p><span style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Ngày nay <strong>dịch vụ làm visa</strong> hộ chiếụ ngày càng phát triển mạnh ở nước ta, để giúp quý khách hàng có được những giấy tờ cần thiết và hợp pháp khi xuất nhập cảnh thì AD Tourist</span></span><span style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); line-height: 20px; text-align: justify; font-family: arial, helvetica, sans-serif; font-size: 14px;">&nbsp;</span><span style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">chúng tôi đã và đang hỗ trợ quý khách hàng 24/24. Để hiểu rõ hơn khái niệm thế nào là hộ chiếu và visa chúng tôi xin đưa ra khái niệm sau.</span></span></p><br><br>\n\n\n<h2 style="margin: 0px; padding: 0px; font-weight: bold; color: rgb(3, 160, 73); font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">1.PASSPORT</span></span></h2>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Passport (hộ chiếu) là do chính quyền quốc gia của bạn cấp phát để chứng minh bạn là công dân của đất nước đó.</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: center;"><img alt="" src="asset/image/visa/passport.jpg" style="width: 515px; height: 360px;" /></p>\n<br><br>\n\n<h2 style="margin: 0px; padding: 0px; font-weight: bold; color: rgb(3, 160, 73); font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px;"><span style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">2.VISA</span></span></h2>\n\n<p>&nbsp;</p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Visa (thị thực) là do quốc gia bạn đến cấp cho phép bạn vào nước họ tạm trú một thời gian (sojoun), được dán tem hoặc đóng dấu vào trong cuốn hộ chiếu.</span></span></p>\n<br>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: center;"><img alt="" src="asset/image/visa/vietnam_visa.png" style="width: 600px; height: 409px;" /></p>\n<br><br>\n\n<h2 style="margin: 0px; padding: 0px; font-weight: bold; color: rgb(3, 160, 73); font-size: 16px; font-family: Arial, Helvetica, sans-serif; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 18px;"><strong style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">3. Những <a href="index.php?controller=visa&action=servicevisa" target="_blank">dịch vụ làm visa</a> hộ chiếu của chúng tôi :</span></strong></span></h2>\n\n<p><span style="font-family: ''times new roman'', times, serif; font-size: 16px; color: rgb(0, 0, 0); line-height: 20px; text-align: justify;">- Dịch vụ visa xuất cảnh, visa nhập cảnh</span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ tư vấn và hỗ trợ ,thủ tục làm visa, thủ tục gia hạn visa, các điều kiện gia hạn visa...</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ tư vấn và hỗ trợ làm thủ tục xin visa đi các quốc gia trên thế giới từ châu Á đến châu Âu, châu Mỹ, Châu Úc: Visa Trung Quốc, Visa Hồng Kông, Visa Macao, Visa Pháp, Visa Mỹ, Visa Úc...</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ làm chứng minh thư khẩn, hộ chiếu nhanh, các giấy tờ liên quan đi kèm</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">- Dịch vụ làm thủ tục các giấy tờ liên quan như làm thẻ tạm trú, làm thẻ lao động...</span></span></p>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">-Và nhiều dịch vụ hỗ trợ và liên quan đến làm visa hộ chiếu đi các quốc gia trên thế giới...</span></span></p>\n<br>\n\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: medium; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; font-size: 16px;"><span style="margin: 0px; padding: 0px; font-family: ''times new roman'', times, serif;">Đến với công ty chúng tôi quý khách hàng hoàn toàn yên tâm về dịch vụ của công ty chúng tôi! Liên Hệ Ngay HOTLINE  : </span></span><span class="hotlienSpanTop" style="margin: 0px; padding: 0px; color: rgb(242, 0, 0);">0462 60 48 38 - 0987 647 504</span></p>\n\n                </div>\n\n        </div>', 'asset/image/visa/vietnam_visa.png', '2015-06-13 00:00:00', '0000-00-00 00:00:00');

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
  `policy` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tour_content_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tour_content`
--

INSERT INTO `tour_content` (`tour_content_code`, `tour_region_code`, `title`, `time`, `total_cost`, `content`, `content_cost`, `description`, `image`, `update_at`, `create_at`, `tour_country_code`, `policy`) VALUES
(2, 8, 'Du Lịch Singapore', '5 ngày 4 đêm', 'Liên hệ', 'Làm lâu éo chịu được<br><table><tbody><tr><td><br></td></tr><tr></tr></tbody></table>', '   <table align="left" border="1" cellpadding="0" cellspacing="0" class="table">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="3">\r\n			<p align="center"><strong>GIÁ TOUR TRỌN GÓI CHO 1 KHÁCH</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:291px;height:21px;">\r\n			<p align="center"><strong>Người lớn</strong></p>\r\n\r\n			<p align="center">Từ 12 tuổi trở lên</p>\r\n			</td>\r\n			<td style="width:160px;height:21px;">\r\n			<p align="center"><strong>Trẻ em</strong></p>\r\n\r\n			<p align="center">Từ 02 à11 tuổi</p>\r\n			</td>\r\n			<td style="width:157px;height:21px;">\r\n			<p align="center"><strong>Trẻ em</strong></p>\r\n\r\n			<p align="center">Dưới 02 tuổi</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="2" style="width:291px;height:26px;">\r\n			<p align="center"><strong>11.990.000 </strong><strong>vnđ</strong></p>\r\n			</td>\r\n			<td style="width:160px;height:26px;">\r\n			<p><strong>9.750.000 </strong><strong>vnđ</strong></p>\r\n			</td>\r\n			<td style="width:157px;height:26px;">\r\n			<p align="center"><strong>3.590.000 </strong><strong>vnđ</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2" style="width:317px;height:7px;">\r\n			<p align="center"><strong>Ngủ chung với người lớn đi kèm</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="3" style="width:607px;height:21px;">\r\n			<p align="center"><strong>Phụ thu phòng đơn : 4.620.000 vnđ / trọn tour</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'Đến sân bay Changi (Singapore), xe và HDV địa phương đón đoàn đi tham quan thành phố Singapore ngang qua Toà Án Tối Cao, Trung Tâm tài Chánh, Nhà hát Esplanade….Dùng cơm chiều .Sau đó về khách sạn nhận phòng nghỉ đêm tại Singapore', 'asset/image/tour/outcountry/du-lich-phu-quoc-67.png', '2015-06-17 15:49:19', '2015-06-15 00:00:00', 2, '<p style=""><strong><u>GIÁ TOUR BAO GỒM :</u></strong></p>\r\n\r\n<p style=""><strong>● Vé máy bay khứ hồi&nbsp; SGN – SIN/KUL – SGN </strong></p>\r\n\r\n<p style="">●&nbsp; Xe du lịch máy lạnh đời mới và vé tham quan theo chương trình đã nêu.</p>\r\n\r\n<p style="">●&nbsp; Khách Sạn tiêu chuẩn 3, 4 sao &amp; các bữa ăn theo chương trình.</p>\r\n\r\n<p style="">● Hướng dẫn viên nhiệt tình theo đoàn suốt tuyến.</p>\r\n\r\n<p style=""><strong>●Thuế sân bay, phí An ninh và xăng dầu. </strong></p>\r\n\r\n<p style=""><strong>● Bảo hiểm du lịch quốc tế với mức bồi thường tối đa 200.000.000vnd. </strong></p>\r\n\r\n<p style=""><strong>● Quà tặng: Nón, bao hộ chiếu.</strong></p>\r\n\r\n<p style=""><strong><u>KHÔNG BAO GỒM :</u></strong></p>\r\n\r\n<ul>\r\n	<li>Hộ chiếu (còn giá trị ít nhất 6 tháng, chi phí cá nhân, điện thoại, giặt ủi &amp; nước uống trong khách sạn. Hành lý quá cước (tối đa 1 khách là 15 kg).</li>\r\n	<li>Đối với Quốc tịch nước ngoài, nếu sử dụng Visa Vietnam một lần phải phụ thu thêm <strong>1.290.000đ/Khách</strong> hoặc <strong>60USD/ khách.</strong></li>\r\n	<li>Tiền “Tip” cho hướng dẫn viên và tài xế tại địa phương <strong>400.000 vnđ/khách</strong> hoặc <strong>18 USD/khách.</strong></li>\r\n</ul>\r\n\r\n<p><strong><u>TRƯỜNG HỢP HỦY TOUR</u></strong>:</p>\r\n\r\n<ul>\r\n	<li>Nếu hủy tour trước 10 ngày khởi hành sẽ mất tiền cọc (5 triệu đồng)</li>\r\n	<li>Nếu hủy tour trước 06&nbsp; ngày khởi hành sẽ chi trả 50% tổng giá trị tour.</li>\r\n	<li>Nếu hủy tour trước 03 ngày&nbsp; khởi hành sẽ chi trả&nbsp; 70% tổng giá trị tour.</li>\r\n	<li>Nếu hủy tour trong vòng 72h trước ngày khởi hành sẽ chi trả&nbsp; 100% tổng giá trị tour.</li>\r\n</ul>\r\n\r\n<p style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Các ngày trên chỉ tính theo ngày làm việc, không tính thứ 7 chủ nhật)</p>\r\n\r\n<p style=""><strong><u>LƯU Ý</u></strong><strong>:</strong></p>\r\n\r\n<p style="">● Chúng tôi xin không chịu trách nhiệm trong trường hợp quý khách bị từ chối nhập cảnh tại nước sở tại vì lý do nhân thân (mất 100% tiền Tour).</p>\r\n\r\n<p style="">● Công ty <strong>Du lịch Mỹ Úc Á</strong> được phép thay đổi lịch trình chuyến đi, sử dụng các hãng hàng không thay thế nhưng vẫn đảm bảo tham quan đầy đủ các tuyến điểm theo chương trình.</p>\r\n\r\n<p style="">● Do tính chất là đoàn ghép khách lẻ, <strong>Du lịch Mỹ Úc Á</strong> sẽ có trách nhiệm nhận khách cho đủ đoàn (15 khách người lớn trở lên) thì đoàn sẽ khởi hành đúng lịch trình. Nếu số lượng đoàn dưới 15 khách, cty sẽ có trách nhiệm thông báo cho khách trước ngày khởi hành 4 ngày và sẽ thỏa thuận lại ngày khởi hành mới, hoặc hoàn trả lại toàn bộ số tiền cọc, khách đã đăng ký trước đó.</p>\r\n\r\n<p style=""><strong>● Thuế &amp; phụ thu phí xăng dầu có thể thay đổi tuỳ vào thời điểm xuất vé của hãng hàng không.</strong></p>\r\n\r\n<p style="">● Trong những trường hợp khách quan như : thiên tai, khủng bố… hoặc do sự cố hay có sự thay đổi lịch trình của các phương tiện vận chuyển công cộng như : máy bay, tàu hỏa … thì công ty sẽ giữ quyền thay đổi lộ trình bất cứ lúc nào vì sự thuận tiện, an tòan cho Quý khách hàng và sẽ không chịu trách nhiệm bồi thường những thiệt hại phát sinh.</p>\r\n\r\n<p align="center"><strong><em><u>Mọi thắc mắc xin vui lòng liên hệ:</u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em>Mr Minh Thiện – 0907.696.315</strong></p>\r\n'),
(3, 2, 'Du Lịch Đà nẵng', '5 ngày 5 đêm', 'liên hệ', 'Đây là nội dung của tour du lịch', '   <table align="left" border="1" cellpadding="0" cellspacing="0" class="table">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="3">\r\n			<p align="center"><strong>GIÁ TOUR TRỌN GÓI CHO 1 KHÁCH</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:291px;height:21px;">\r\n			<p align="center"><strong>Người lớn</strong></p>\r\n\r\n			<p align="center">Từ 12 tuổi trở lên</p>\r\n			</td>\r\n			<td style="width:160px;height:21px;">\r\n			<p align="center"><strong>Trẻ em</strong></p>\r\n\r\n			<p align="center">Từ 02 à11 tuổi</p>\r\n			</td>\r\n			<td style="width:157px;height:21px;">\r\n			<p align="center"><strong>Trẻ em</strong></p>\r\n\r\n			<p align="center">Dưới 02 tuổi</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan="2" style="width:291px;height:26px;">\r\n			<p align="center"><strong>11.990.000 </strong><strong>vnđ</strong></p>\r\n			</td>\r\n			<td style="width:160px;height:26px;">\r\n			<p><strong>9.750.000 </strong><strong>vnđ</strong></p>\r\n			</td>\r\n			<td style="width:157px;height:26px;">\r\n			<p align="center"><strong>3.590.000 </strong><strong>vnđ</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2" style="width:317px;height:7px;">\r\n			<p align="center"><strong>Ngủ chung với người lớn đi kèm</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="3" style="width:607px;height:21px;">\r\n			<p align="center"><strong>Phụ thu phòng đơn : 4.620.000 vnđ / trọn tour</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'Đến sân bay Changi (Singapore), xe và HDV địa phương đón đoàn đi tham quan thành phố Singapore ngang qua Toà Án Tối Cao, Trung Tâm tài Chánh, Nhà hát Esplanade….Dùng cơm chiều .Sau đó về khách sạn nhận phòng nghỉ đêm tại Singapore', 'asset/image/tour/incountry/du-lich-da-nang.jpg', '2015-06-16 13:31:02', '2015-06-08 00:00:00', 1, '<p style=""><strong><u>GIÁ TOUR BAO GỒM :</u></strong></p>\r\n\r\n<p style=""><strong>● Vé máy bay khứ hồi&nbsp; SGN – SIN/KUL – SGN </strong></p>\r\n\r\n<p style="">●&nbsp; Xe du lịch máy lạnh đời mới và vé tham quan theo chương trình đã nêu.</p>\r\n\r\n<p style="">●&nbsp; Khách Sạn tiêu chuẩn 3, 4 sao &amp; các bữa ăn theo chương trình.</p>\r\n\r\n<p style="">● Hướng dẫn viên nhiệt tình theo đoàn suốt tuyến.</p>\r\n\r\n<p style=""><strong>●Thuế sân bay, phí An ninh và xăng dầu. </strong></p>\r\n\r\n<p style=""><strong>● Bảo hiểm du lịch quốc tế với mức bồi thường tối đa 200.000.000vnd. </strong></p>\r\n\r\n<p style=""><strong>● Quà tặng: Nón, bao hộ chiếu.</strong></p>\r\n\r\n<p style=""><strong><u>KHÔNG BAO GỒM :</u></strong></p>\r\n\r\n<ul>\r\n	<li>Hộ chiếu (còn giá trị ít nhất 6 tháng, chi phí cá nhân, điện thoại, giặt ủi &amp; nước uống trong khách sạn. Hành lý quá cước (tối đa 1 khách là 15 kg).</li>\r\n	<li>Đối với Quốc tịch nước ngoài, nếu sử dụng Visa Vietnam một lần phải phụ thu thêm <strong>1.290.000đ/Khách</strong> hoặc <strong>60USD/ khách.</strong></li>\r\n	<li>Tiền “Tip” cho hướng dẫn viên và tài xế tại địa phương <strong>400.000 vnđ/khách</strong> hoặc <strong>18 USD/khách.</strong></li>\r\n</ul>\r\n\r\n<p><strong><u>TRƯỜNG HỢP HỦY TOUR</u></strong>:</p>\r\n\r\n<ul>\r\n	<li>Nếu hủy tour trước 10 ngày khởi hành sẽ mất tiền cọc (5 triệu đồng)</li>\r\n	<li>Nếu hủy tour trước 06&nbsp; ngày khởi hành sẽ chi trả 50% tổng giá trị tour.</li>\r\n	<li>Nếu hủy tour trước 03 ngày&nbsp; khởi hành sẽ chi trả&nbsp; 70% tổng giá trị tour.</li>\r\n	<li>Nếu hủy tour trong vòng 72h trước ngày khởi hành sẽ chi trả&nbsp; 100% tổng giá trị tour.</li>\r\n</ul>\r\n\r\n<p style="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Các ngày trên chỉ tính theo ngày làm việc, không tính thứ 7 chủ nhật)</p>\r\n\r\n<p style=""><strong><u>LƯU Ý</u></strong><strong>:</strong></p>\r\n\r\n<p style="">● Chúng tôi xin không chịu trách nhiệm trong trường hợp quý khách bị từ chối nhập cảnh tại nước sở tại vì lý do nhân thân (mất 100% tiền Tour).</p>\r\n\r\n<p style="">● Công ty <strong>Du lịch Mỹ Úc Á</strong> được phép thay đổi lịch trình chuyến đi, sử dụng các hãng hàng không thay thế nhưng vẫn đảm bảo tham quan đầy đủ các tuyến điểm theo chương trình.</p>\r\n\r\n<p style="">● Do tính chất là đoàn ghép khách lẻ, <strong>Du lịch Mỹ Úc Á</strong> sẽ có trách nhiệm nhận khách cho đủ đoàn (15 khách người lớn trở lên) thì đoàn sẽ khởi hành đúng lịch trình. Nếu số lượng đoàn dưới 15 khách, cty sẽ có trách nhiệm thông báo cho khách trước ngày khởi hành 4 ngày và sẽ thỏa thuận lại ngày khởi hành mới, hoặc hoàn trả lại toàn bộ số tiền cọc, khách đã đăng ký trước đó.</p>\r\n\r\n<p style=""><strong>● Thuế &amp; phụ thu phí xăng dầu có thể thay đổi tuỳ vào thời điểm xuất vé của hãng hàng không.</strong></p>\r\n\r\n<p style="">● Trong những trường hợp khách quan như : thiên tai, khủng bố… hoặc do sự cố hay có sự thay đổi lịch trình của các phương tiện vận chuyển công cộng như : máy bay, tàu hỏa … thì công ty sẽ giữ quyền thay đổi lộ trình bất cứ lúc nào vì sự thuận tiện, an tòan cho Quý khách hàng và sẽ không chịu trách nhiệm bồi thường những thiệt hại phát sinh.</p>\r\n\r\n<p align="center"><strong><em><u>Mọi thắc mắc xin vui lòng liên hệ:</u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em>Mr Minh Thiện – 0907.696.315</strong></p>\r\n'),
(10, 3, 'Du lịch quảng ninh', '3 Ngày 2 Đêm', 'Liên hệ', 'Nội dung tour du lịch', 'Chi tiết giá của tour di lịch', 'Miêu tả tour du lịch', 'asset/image/tour/incountry/dao_binh_ba.png', '0000-00-00 00:00:00', '2015-06-17 18:09:40', 1, 'Các chính sách');

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

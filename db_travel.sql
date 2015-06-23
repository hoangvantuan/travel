-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2015 at 09:18 PM
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
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `tel`, `email`, `title`, `content`) VALUES
('hoàng văn tuấn', '0989278582', 'hoangtuanbka93@gmail.com', 'kiểm tra lỗi', 'kiểm tra lỗi của website'),
('Tuan Hoang Van', '0989278582', 'yeu.em.roi@facebook.com', 'Hà Nội – Vịnh Hạ Long 1 ngày', 'không đăng kí được');

-- --------------------------------------------------------

--
-- Table structure for table `news_event`
--

CREATE TABLE IF NOT EXISTS `news_event` (
  `news_event_code` int(11) NOT NULL AUTO_INCREMENT,
  `new_event_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`news_event_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `news_event`
--

INSERT INTO `news_event` (`news_event_code`, `new_event_name`) VALUES
(23, 'Cơm dẻo, thơm xứ Huế '),
(24, 'Du lịch biển và những điều cần biết');

-- --------------------------------------------------------

--
-- Table structure for table `news_event_content`
--

CREATE TABLE IF NOT EXISTS `news_event_content` (
  `news_event_content_code` int(11) NOT NULL AUTO_INCREMENT,
  `news_event_code` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `update_at` datetime NOT NULL,
  `create_at` datetime NOT NULL,
  PRIMARY KEY (`news_event_content_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news_event_content`
--

INSERT INTO `news_event_content` (`news_event_content_code`, `news_event_code`, `title`, `description`, `content`, `image`, `update_at`, `create_at`) VALUES
(1, 23, 'Dẻo thơm bánh Huế ngon tuyệt', 'Dẻo thơm bánh Huế ngon tuyệt', '<p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Bánh mặn có nhân đậu xanh nấu chín, tán nhuyễn trộn với dầu ăn hoặc mỡ, hành, muối, tiêu như cách làm nhân bánh chưng, bánh tét. Làm bánh ngọt thì trộn một ít đường vào bột, và thường là đường vàng (ngày trước, loại đường đổ thành bánh màu đen gọi là đường cối hay đường xe rất thích hợp để làm món bánh nhà quê này), nhân cũng là đậu xanh nhưng trộn với đường, tương tự chè đậu xanh đánh. Bánh sắn được gói bằng lá chuối, đem hấp chín.<br><br>Bánh sắn mặn ăn khi còn nóng sẽ ngon hơn: bột sắn vừa chín nóng hổi, mềm, dẻo, lột lớp lá ra vẫn còn bốc khói, thoảng vị hăng hăng, nhân nhẩn của sắn cùng mùi lá chuối tươi; nhân đậu xanh thơm và bùi, hành ta ngọt ngào và chút tiêu cay cay. Bánh ngọt săn chắc, vị ngọt đậm đà. Thường thì các bà các cô xứ Huế làm luôn hai loại: bánh mặn ăn trước, bánh ngọt sau như món tráng miệng.<br><br>Thường các gia đình tự làm bánh sắn chứ ít thấy bán món ăn này ngoài chợ. Bánh sắn được chế biến từ các nguyên liệu đơn giản và rẻ tiền nhưng ai đã từng nếm qua loại bánh quê này hẳn sẽ nhớ lâu.</p><div><br></div><script>img_find(''contents'');</script>', 'asset/image/news/vi/com.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 24, 'Dẻo thơm bánh Huế ngon tuyệt', '<span style="color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18px; text-align: justify; background-color: rgb(243, 243, 243);">Nói đến Sóc Trăng người ta thường nghĩ ngay đến Chùa Dơi, Lễ hội Ok Om Bok hay vườ', '<p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);"><span style="font-size: 13px; margin: 0px; padding: 0px; border: 0px;">Nói đến Sóc Trăng người ta thường nghĩ ngay đến Chùa Dơi, Lễ hội Ok Om Bok hay vườn cò Tân Long…nhưng còn một địa điểm vô cùng đặc sắc khác ở Sóc Trăng không nên bỏ qua đó là chợ nổi Ngã Năm.</span></p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Là một tỉnh thuộc vùng sông nước đồng bằng Sông Cửu Long, cũng giống như một vài tỉnh khác nét đặc trưng chung tại vùng đất này là những khu chợ nổi. Tuy nhiên khác với miệt vườn ở vùng trên, miệt vườn tại Sóc Trăng, Bạc Liêu xưa kia vốn là vùng trũng phèn mặn, nên khi muốn khai phá phải đào kênh. Tên gọi Ngã Năm xuất hiện khi người Pháp đào kênh quản lộ Phụng Hiệp. Kênh này cùng kênh Xáng cắt nganh kênh Xẻo Chính tạo thành năm nhánh sông, từ Ngã năm xuôi về các tỉnh Bạc Liêu, Hậu Giang, Kiên Giang.</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: center; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">&nbsp;</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: center; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);"><em style="margin: 0px; padding: 0px; border: 0px;">Buổi sáng nhộn nhịp ở khu chợ nổi Ngã Năm (Nguồn: Internet)</em></p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Ngay khi mới hình thành Ngã Năm, người dân nơi đây cũng đã nhanh chóng tụ họp giao thương buôn bán tại khu vực này và chợ nổi Ngã Năm xuất hiện kể từ đó. Gọi là “Chợ nổi” bởi các hoạt động buôn bán, trao đổi đều diễn ra trên mặt sông thay vì mặt đất như ở các vùng, miền khác. Người bán, kẻ mua đều dùng xuồng, ghe để di chuyển và thực hiện các giao dịch trên sông. Đến với chợ Ngã Năm vào đúng thời điểm họp chợ, du khách sẽ thấy toàn cảnh khu chợ như một bức tranh tả thực sống động, nhiều màu sắc. Màu sắc từ các loại rau củ, hoa quả; màu của những chiếc áo bà bà phất phơ trong gió; những chiếc ghe lớn, nhỏ, xuồng năm lá, ba lá xuôi ngược nhộn nhịp; âm thanh náo động cả một vùng sông nước.</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Miền Tây Nam bộ với đặc điểm khí hậu nhiệt đới gió mùa, cộng thêm đất đai khá phì nhiêu do lượng phù sa màu mỡ từ sông Mekong bồi đắp hàng năm, đã tạo điều kiện thuận lợi cho các loại cây nông sản phát triển. Các loại cây trái, rau củ, quả ở đây rất đa dạng và phong phú cả về trữ lượng và chất lượng, nên nông dân thường không dùng hết sau khi thu hoạch, hơn nữa mặt hàng này có thời gian bảo quản ngắn, từ đó xuất phát nhu cầu trao đổi, buôn bán giữa các tiểu nông. Họ thường chở các loại hoa màu thu hoạch được, tụ họp lại trên một đoạn sông để trao đổi, mua bán. Lâu dần, thói quen tự phát này đã trở thành cái nghề thứ 2 của họ trong những lúc nhà rỗi, có người đã chuyển hẳn sang nghề thương lái và tiếp tục truyền cho con cháu.</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Nếu như ở những khu chợ khác, thường họp chợ vào khi trời sáng và nhộn nhịp từ sáng đến trưa thì chợ nổi Ngã Năm đặc biệt hơn bởi chợ họp vào khoảng thời gian trời đất còn đang mờ ảo, lúc 3-4 giờ sáng. Đến khi mặt trời lên cao, 7-8 giờ sáng chợ cũng đã gần tàn. Lúc này chỉ còn những ghe xuồng chất hàng chở đi các vùng lân cận còn hoạt động.</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: center; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">&nbsp;</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: center; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);"><em style="margin: 0px; padding: 0px; border: 0px;">nét mặt thân thiện của người dân chợ nổi Sóc Trăng (Nguồn: Internet)</em></p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Một đặc điểm nữa cũng rất thú vị tại chợ nổi Ngã Năm đó là những cây bẹo quảng cáo. Ở mỗi ghe đều có cây bẹo treo lủng lẳng phía trước ghe. Trên cây bẹo treo thứ gì là ghe đó bán món hàng đấy. Điều này giúp du khách và người mua hàng dễ dàng tìm thấy món hàng mình cần giữa một vùng sông nước bao la. Với người dân tại đây, những cây bẹo quảng cáo này có thể không cần thiết nhưng với những du khách mới đến lần đầu còn nhiều bỡ ngỡ trước cảnh mua bán trên sông nước thì việc này giúp ích không nhỏ trong việc xác định phương hướng và tìm thứ mình cần.</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Là khu chợ chính phục vụ nhu cầu thực phẩm thiết yếu của người dân, bên cạnh đó từ nhiều năm nay còn là một địa điểm thăm quan hấp dẫn đối với khách du lịch, chợ Ngã Năm vì vậy buôn bán đủ mọi mặt hàng. Từ rau củ quả, thực phẩm gạo, muối, thịt cá cho đến quần áo, vải vóc và cả những hàng cà phê, ăn sáng cũng đều có hết. Trước kia, những người buôn bán ở đây còn lạ lẫm với khách du lịch thì nay những tiểu thương ở khu chợ này đã quen với những vị khách hàng ngày đến thăm quan chợ. Vì thế mà đến với chợ nổi Ngã Năm ngày hôm nay, du khách có thể bắt gặp những nụ cười rất thân thiện của người bán hàng. Trong chiếc áo bà ba, cái nón đội nghiêng nghiêng, những nụ cười không lẫn vào đâu được của người dân miền Tây, khách du lịch được phục vụ những món ăn đặc trưng của vùng sông nước, được ném thử những thứ quả tươi ngon mới hái…sự thanh bình, yên ả hiện diện trong chính những ồn ào của khu chợ.</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Dù đến nay, hoạt động buôn bán ngày càng nhộn nhịp hơn, khách thăm quan du lịch cũng tìm đến đây đông hơn song chợ nổi Ngã Năm vẫn giữ được vẻ mộc mạc trong cả cách buôn bán, cho đến lời mời gọi của người bán hàng. Sự hấp dẫn của điểm du lịch này có lẽ đến từ chính những điều bình dị đó, cũng vì thế mà nếu có dịp đến với Sóc Trăng, chợ nổi Ngã Năm là một địa điểm mà du khách cần trải nghiệm.</p><script>img_find(''contents'');</script>', 'asset/image/news/vi/soctrang.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `passport_visa`
--

INSERT INTO `passport_visa` (`passport_visa_code`, `passport_visa_name`) VALUES
(1, 'Visa Châu Á'),
(2, 'Visa Châu Âu'),
(5, 'Visa Châu Úc'),
(6, 'Visa Châu Phi'),
(7, 'Visa Châu Mỹ'),
(8, 'Visa Trung Đông'),
(9, 'Dịch vụ làm hộ chiếu nhanh');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `passport_visa_offers`
--

INSERT INTO `passport_visa_offers` (`passport_visa_offer_code`, `passport_visa_code`, `title`, `description`, `content`, `image`, `update_at`, `create_at`) VALUES
(1, 1, 'VISA TRUNG QUỐC', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport.jpg', '2015-06-23 22:35:55', '2015-06-23 21:36:47'),
(2, 1, 'VISA ĐÀI LOAN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport1.jpg', '2015-06-23 22:36:20', '2015-06-23 21:37:12'),
(3, 1, 'VISA ẤN ĐỘ', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport2.jpg', '2015-06-23 22:36:34', '2015-06-23 21:37:37'),
(4, 1, 'Visa MYANMAR', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport3.jpg', '0000-00-00 00:00:00', '2015-06-23 21:38:04'),
(5, 1, 'Visa BANGLADESH', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport4.jpg', '0000-00-00 00:00:00', '2015-06-23 21:38:44'),
(6, 1, 'VISA SRI LANKA', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport5.jpg', '0000-00-00 00:00:00', '2015-06-23 21:39:16'),
(7, 1, 'VISA IRAN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport6.jpg', '0000-00-00 00:00:00', '2015-06-23 21:39:34'),
(8, 1, 'VISA HỒNG KÔNG', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport7.jpg', '0000-00-00 00:00:00', '2015-06-23 21:39:53'),
(9, 1, 'VISA HÀN QUỐC', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport8.jpg', '0000-00-00 00:00:00', '2015-06-23 21:40:13'),
(10, 1, 'VISA NHẬT BẢN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport9.jpg', '0000-00-00 00:00:00', '2015-06-23 21:40:56'),
(11, 1, 'VISA MACAO', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport10.jpg', '0000-00-00 00:00:00', '2015-06-23 21:41:16'),
(12, 2, 'VISA ANH', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport11.jpg', '0000-00-00 00:00:00', '2015-06-23 22:21:20'),
(13, 2, 'VISA ĐỨC', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport12.jpg', '0000-00-00 00:00:00', '2015-06-23 22:21:45'),
(14, 2, 'VISA UKRAINA', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport13.jpg', '0000-00-00 00:00:00', '2015-06-23 22:22:04'),
(15, 2, 'VISA NGA', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport14.jpg', '0000-00-00 00:00:00', '2015-06-23 22:22:21'),
(16, 2, 'VISA THỔ NHĨ KỲ', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport15.jpg', '0000-00-00 00:00:00', '2015-06-23 22:22:36'),
(17, 2, 'VISA THỤY SỸ', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport16.jpg', '0000-00-00 00:00:00', '2015-06-23 22:22:53'),
(18, 2, 'VISA ĐAN MẠCH', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport17.jpg', '2015-06-23 22:37:33', '2015-06-23 22:23:06'),
(19, 2, 'VISA ICELAND', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport18.jpg', '0000-00-00 00:00:00', '2015-06-23 22:23:21'),
(20, 2, 'VISA HUNGARY', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport19.jpg', '0000-00-00 00:00:00', '2015-06-23 22:23:52'),
(21, 2, 'VISA PHẦN LAN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport20.jpg', '0000-00-00 00:00:00', '2015-06-23 22:30:26'),
(22, 2, 'VISA BỒ ĐÀO NHA', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport21.jpg', '0000-00-00 00:00:00', '2015-06-23 22:30:42'),
(23, 2, 'VISA TÂY BAN NHA', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport22.jpg', '0000-00-00 00:00:00', '2015-06-23 22:30:59'),
(24, 2, 'VISA BỈ', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport23.jpg', '0000-00-00 00:00:00', '2015-06-23 22:31:21'),
(25, 2, 'VISA CỘNG HÒA SEC', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport24.jpg', '0000-00-00 00:00:00', '2015-06-23 22:31:46'),
(26, 2, 'VISA BA LAN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport25.jpg', '0000-00-00 00:00:00', '2015-06-23 22:32:17'),
(27, 2, 'VISA HÀ LAN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport26.jpg', '0000-00-00 00:00:00', '2015-06-23 22:33:00'),
(28, 2, 'VISA Ý', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport27.jpg', '0000-00-00 00:00:00', '2015-06-23 22:33:25'),
(29, 2, 'VISA THỤY ĐIỂN', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport28.jpg', '0000-00-00 00:00:00', '2015-06-23 22:33:44'),
(30, 2, 'VISA ÁO', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport29.jpg', '0000-00-00 00:00:00', '2015-06-23 22:34:05'),
(31, 2, 'VISA NAUY', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/passport30.jpg', '0000-00-00 00:00:00', '2015-06-23 22:34:28'),
(32, 2, 'VISA PHÁP', '<br>', '<script>img_find(''contents'');</script>', 'asset/image/visa/vi/vinh-ha-long.jpg', '2015-06-24 01:58:54', '2015-06-23 22:34:47'),
(33, 6, 'Làm Visa Châu phi', 'Dịch vụ làm visa hộ chiếu tại châu phi', 'trong đây boa gồm nội dung của dịch vụ làm visa hộ chiếu tại châu phi<script>img_find(''contents'');</script>', 'asset/image/visa/vi/images.jpg', '2015-06-24 01:57:55', '2015-06-24 01:35:51');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tour_content`
--

INSERT INTO `tour_content` (`tour_content_code`, `tour_region_code`, `title`, `time`, `total_cost`, `content`, `content_cost`, `description`, `image`, `update_at`, `create_at`, `tour_country_code`, `possition`, `image_relate`) VALUES
(17, 11, 'Hà Nội – Vịnh Hạ Long', '1 Ngày', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', '<font size="4">Miêu tả tour du lịch test</font>', 'asset/image/tour/vi/incountry/test_edit_img.jpg', '2015-06-24 02:01:56', '2015-06-23 22:34:00', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29818.278603257022!2d107.02280317564806!3d20.900857463028117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x6e17fd5c3dee33af!2zxJDhu5luZyBUaGnDqm4gQ3VuZw!5e0!3m2!1svi!2s!4v1435073618573', 'Hiện tại chưa có ảnh liên quan'),
(18, 11, 'Hà Nội - Du Thuyền Hạ Long', '2 Ngày 1 Đêm', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/vinh-ha-long.jpg', '0000-00-00 00:00:00', '2015-06-23 22:35:05', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29818.278603257022!2d107.02280317564806!3d20.900857463028117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x6e17fd5c3dee33af!2zxJDhu5luZyBUaGnDqm4gQ3VuZw!5e0!3m2!1svi!2s!4v1435073618573', 'Ảnh liên quan'),
(19, 11, 'Hạ Long – Bãi Cháy', '2 Ngày 1 Đêm', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/images.jpg', '0000-00-00 00:00:00', '2015-06-23 22:39:36', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29807.73686225815!2d107.0473516281468!3d20.953836013750642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a5896bfde7551%3A0xa242a0cf37455a5a!2zQsOjaSBDaMOheSwgdHAuIEjhuqEgTG9uZywgUXXhuqNuZyBOaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1435073962845', 'Ảnh liên quan'),
(20, 11, 'Du Thuyền Hạ Long - Đảo Tuần Châu', '3 Ngày 2 Đêm', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/images-halong-9.jpg', '2015-06-23 22:42:59', '2015-06-23 22:40:44', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29812.85315144502!2d106.98540410000001!3d20.92813960000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a5ec2bff2b109%3A0x5612e1db2b191630!2zxJBhzIlvIFR1w6LMgG4gQ2jDonUsIFR14bqnbiBDaMOidSwgdHAuIEjhuqEgTG9uZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1435074032642', 'Ảnh liên quan'),
(21, 11, 'Du Lịch Hạ Long: Hà Nội - Hạ Long - Yên Tử', '2 Ngày 1 Đêm', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/images-halong-8.jpg', '0000-00-00 00:00:00', '2015-06-23 22:44:16', 1, 'Địa chỉ bản đồ', 'Ảnh liên quan'),
(22, 11, 'Du Lịch Hạ Long: Du Thuyền Paradise', '2 Ngày 1 Đêm', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/images-halong-7.jpg', '0000-00-00 00:00:00', '2015-06-23 22:44:44', 1, 'Địa chỉ bản đồ', 'Ảnh liên quan'),
(23, 11, 'Du Lịch Hạ Long: Du Thuyền Emotion Hạ long ', '2 Ngày 1 Đêm', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/images-halong-6.jpg', '0000-00-00 00:00:00', '2015-06-23 22:45:35', 1, 'Địa chỉ bản đồ', 'Ảnh liên quan'),
(24, 11, 'Du Lịch Hạ Long: Du Thuyền Emeraude', '2 Ngày 1 Đêm', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/images-halong-5.jpg', '0000-00-00 00:00:00', '2015-06-23 22:46:00', 1, 'Địa chỉ bản đồ', 'Ảnh liên quan'),
(25, 11, 'Du Lịch Hạ Long: Du Thuyền Bhaya', '2 Ngày 1 Đêm', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/images-halong-4.jpg', '0000-00-00 00:00:00', '2015-06-23 22:46:18', 1, 'Địa chỉ bản đồ', 'Ảnh liên quan'),
(26, 11, 'Du Lịch Hạ Long: Hà Nội - Vịnh Hạ Long - Đảo Cát Bà', '3 Ngày 2 Đêm', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/images-halong-3.jpg', '0000-00-00 00:00:00', '2015-06-23 22:46:44', 1, 'Địa chỉ bản đồ', 'Ảnh liên quan'),
(27, 11, 'Du Lịch Hạ Long: TP HCM– Hạ Long – Tuần Châu - Yên Tử – Hà Nội', 'Liên Hệ', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/images-halong-2.jpg', '0000-00-00 00:00:00', '2015-06-23 22:47:28', 1, 'Địa chỉ bản đồ', 'Ảnh liên quan'),
(28, 12, 'Di sản miền trung 2015 Đà nẵng - Hội an - Huế - Động thiên đường', 'Liên Hệ', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/Da-nang-Hoi-an-vietsense.jpg', '2015-06-23 22:51:30', '2015-06-23 22:50:31', 1, 'Địa chỉ bản đồ', 'Ảnh liên quan'),
(29, 12, 'Di sản miền trung Đà nẵng - Hội an - Huế - Động thiên đường - Quảng bình', 'Liên Hệ', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/vietsense-cung-dinh-hue.jpg', '0000-00-00 00:00:00', '2015-06-23 22:53:31', 1, 'Địa chỉ bản đồ', 'Ảnh liên quan'),
(30, 12, 'Di Sản Miền Trung: Đà Nẵng - Hội An - Huế', '4 Ngày 3 Đêm', 'Liên Hệ', 'Nội dung tour du lịch', 'Giá tour và dịch vụ', 'Miêu tả tour du lịch', 'asset/image/tour/vi/incountry/Ban-Dao-Son-Tra-Da-NangVietsense_1418782480.jpg', '0000-00-00 00:00:00', '2015-06-23 22:54:37', 1, 'Địa chỉ bản đồ', 'Ảnh liên quan');

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

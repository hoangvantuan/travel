-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2015 at 08:36 PM
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
-- Table structure for table `news_event_content`
--

CREATE TABLE IF NOT EXISTS `news_event_content` (
  `news_event_code` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_event_content`
--

INSERT INTO `news_event_content` (`news_event_code`, `title`, `description`, `content`, `image`) VALUES
(2402, 'Dẻo thơm bánh Huế', 'Dẻo thơm bánh Huế ngon tuyệt', '<p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Bánh mặn có nhân đậu xanh nấu chín, tán nhuyễn trộn với dầu ăn hoặc mỡ, hành, muối, tiêu như cách làm nhân bánh chưng, bánh tét. Làm bánh ngọt thì trộn một ít đường vào bột, và thường là đường vàng (ngày trước, loại đường đổ thành bánh màu đen gọi là đường cối hay đường xe rất thích hợp để làm món bánh nhà quê này), nhân cũng là đậu xanh nhưng trộn với đường, tương tự chè đậu xanh đánh. Bánh sắn được gói bằng lá chuối, đem hấp chín.<br><br>Bánh sắn mặn ăn khi còn nóng sẽ ngon hơn: bột sắn vừa chín nóng hổi, mềm, dẻo, lột lớp lá ra vẫn còn bốc khói, thoảng vị hăng hăng, nhân nhẩn của sắn cùng mùi lá chuối tươi; nhân đậu xanh thơm và bùi, hành ta ngọt ngào và chút tiêu cay cay. Bánh ngọt săn chắc, vị ngọt đậm đà. Thường thì các bà các cô xứ Huế làm luôn hai loại: bánh mặn ăn trước, bánh ngọt sau như món tráng miệng.<br><br>Thường các gia đình tự làm bánh sắn chứ ít thấy bán món ăn này ngoài chợ. Bánh sắn được chế biến từ các nguyên liệu đơn giản và rẻ tiền nhưng ai đã từng nếm qua loại bánh quê này hẳn sẽ nhớ lâu.</p><div><br></div><script>img_find(''contents'');</script>', 'asset/image/vi_news/com.jpg'),
(0, 'Đến Sóc Trăng khám phá chợ nổi Ngã Năm', '<span style="color: rgb(0, 0, 0); font-family: Helvetica, Arial, sans-serif; font-size: 13px; line-height: 18px; text-align: justify; background-color: rgb(243, 243, 243);">Nói đến Sóc Trăng người ta thường nghĩ ngay đến Chùa Dơi, Lễ hội Ok Om Bok hay vườ', '<p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);"><span style="font-size: 13px; margin: 0px; padding: 0px; border: 0px;">Nói đến Sóc Trăng người ta thường nghĩ ngay đến Chùa Dơi, Lễ hội Ok Om Bok hay vườn cò Tân Long…nhưng còn một địa điểm vô cùng đặc sắc khác ở Sóc Trăng không nên bỏ qua đó là chợ nổi Ngã Năm.</span></p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Là một tỉnh thuộc vùng sông nước đồng bằng Sông Cửu Long, cũng giống như một vài tỉnh khác nét đặc trưng chung tại vùng đất này là những khu chợ nổi. Tuy nhiên khác với miệt vườn ở vùng trên, miệt vườn tại Sóc Trăng, Bạc Liêu xưa kia vốn là vùng trũng phèn mặn, nên khi muốn khai phá phải đào kênh. Tên gọi Ngã Năm xuất hiện khi người Pháp đào kênh quản lộ Phụng Hiệp. Kênh này cùng kênh Xáng cắt nganh kênh Xẻo Chính tạo thành năm nhánh sông, từ Ngã năm xuôi về các tỉnh Bạc Liêu, Hậu Giang, Kiên Giang.</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: center; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">&nbsp;</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: center; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);"><em style="margin: 0px; padding: 0px; border: 0px;">Buổi sáng nhộn nhịp ở khu chợ nổi Ngã Năm (Nguồn: Internet)</em></p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Ngay khi mới hình thành Ngã Năm, người dân nơi đây cũng đã nhanh chóng tụ họp giao thương buôn bán tại khu vực này và chợ nổi Ngã Năm xuất hiện kể từ đó. Gọi là “Chợ nổi” bởi các hoạt động buôn bán, trao đổi đều diễn ra trên mặt sông thay vì mặt đất như ở các vùng, miền khác. Người bán, kẻ mua đều dùng xuồng, ghe để di chuyển và thực hiện các giao dịch trên sông. Đến với chợ Ngã Năm vào đúng thời điểm họp chợ, du khách sẽ thấy toàn cảnh khu chợ như một bức tranh tả thực sống động, nhiều màu sắc. Màu sắc từ các loại rau củ, hoa quả; màu của những chiếc áo bà bà phất phơ trong gió; những chiếc ghe lớn, nhỏ, xuồng năm lá, ba lá xuôi ngược nhộn nhịp; âm thanh náo động cả một vùng sông nước.</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Miền Tây Nam bộ với đặc điểm khí hậu nhiệt đới gió mùa, cộng thêm đất đai khá phì nhiêu do lượng phù sa màu mỡ từ sông Mekong bồi đắp hàng năm, đã tạo điều kiện thuận lợi cho các loại cây nông sản phát triển. Các loại cây trái, rau củ, quả ở đây rất đa dạng và phong phú cả về trữ lượng và chất lượng, nên nông dân thường không dùng hết sau khi thu hoạch, hơn nữa mặt hàng này có thời gian bảo quản ngắn, từ đó xuất phát nhu cầu trao đổi, buôn bán giữa các tiểu nông. Họ thường chở các loại hoa màu thu hoạch được, tụ họp lại trên một đoạn sông để trao đổi, mua bán. Lâu dần, thói quen tự phát này đã trở thành cái nghề thứ 2 của họ trong những lúc nhà rỗi, có người đã chuyển hẳn sang nghề thương lái và tiếp tục truyền cho con cháu.</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Nếu như ở những khu chợ khác, thường họp chợ vào khi trời sáng và nhộn nhịp từ sáng đến trưa thì chợ nổi Ngã Năm đặc biệt hơn bởi chợ họp vào khoảng thời gian trời đất còn đang mờ ảo, lúc 3-4 giờ sáng. Đến khi mặt trời lên cao, 7-8 giờ sáng chợ cũng đã gần tàn. Lúc này chỉ còn những ghe xuồng chất hàng chở đi các vùng lân cận còn hoạt động.</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: center; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">&nbsp;</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: center; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);"><em style="margin: 0px; padding: 0px; border: 0px;">nét mặt thân thiện của người dân chợ nổi Sóc Trăng (Nguồn: Internet)</em></p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Một đặc điểm nữa cũng rất thú vị tại chợ nổi Ngã Năm đó là những cây bẹo quảng cáo. Ở mỗi ghe đều có cây bẹo treo lủng lẳng phía trước ghe. Trên cây bẹo treo thứ gì là ghe đó bán món hàng đấy. Điều này giúp du khách và người mua hàng dễ dàng tìm thấy món hàng mình cần giữa một vùng sông nước bao la. Với người dân tại đây, những cây bẹo quảng cáo này có thể không cần thiết nhưng với những du khách mới đến lần đầu còn nhiều bỡ ngỡ trước cảnh mua bán trên sông nước thì việc này giúp ích không nhỏ trong việc xác định phương hướng và tìm thứ mình cần.</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Là khu chợ chính phục vụ nhu cầu thực phẩm thiết yếu của người dân, bên cạnh đó từ nhiều năm nay còn là một địa điểm thăm quan hấp dẫn đối với khách du lịch, chợ Ngã Năm vì vậy buôn bán đủ mọi mặt hàng. Từ rau củ quả, thực phẩm gạo, muối, thịt cá cho đến quần áo, vải vóc và cả những hàng cà phê, ăn sáng cũng đều có hết. Trước kia, những người buôn bán ở đây còn lạ lẫm với khách du lịch thì nay những tiểu thương ở khu chợ này đã quen với những vị khách hàng ngày đến thăm quan chợ. Vì thế mà đến với chợ nổi Ngã Năm ngày hôm nay, du khách có thể bắt gặp những nụ cười rất thân thiện của người bán hàng. Trong chiếc áo bà ba, cái nón đội nghiêng nghiêng, những nụ cười không lẫn vào đâu được của người dân miền Tây, khách du lịch được phục vụ những món ăn đặc trưng của vùng sông nước, được ném thử những thứ quả tươi ngon mới hái…sự thanh bình, yên ả hiện diện trong chính những ồn ào của khu chợ.</p><p style="margin-top: 5px; margin-bottom: 5px; text-align: justify; font-size: 12px; color: rgb(0, 0, 0); padding: 0px; border: 0px; font-family: Helvetica, Arial, sans-serif; line-height: 18px; background-color: rgb(243, 243, 243);">Dù đến nay, hoạt động buôn bán ngày càng nhộn nhịp hơn, khách thăm quan du lịch cũng tìm đến đây đông hơn song chợ nổi Ngã Năm vẫn giữ được vẻ mộc mạc trong cả cách buôn bán, cho đến lời mời gọi của người bán hàng. Sự hấp dẫn của điểm du lịch này có lẽ đến từ chính những điều bình dị đó, cũng vì thế mà nếu có dịp đến với Sóc Trăng, chợ nổi Ngã Năm là một địa điểm mà du khách cần trải nghiệm.</p><script>img_find(''contents'');</script>', 'asset/image/vi_news/soctrang.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

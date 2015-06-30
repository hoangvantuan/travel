-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2015 at 01:38 PM
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
-- Table structure for table `labor_content`
--

CREATE TABLE IF NOT EXISTS `labor_content` (
  `labor_content_id` int(11) NOT NULL,
  `labor_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `labor_content`
--

INSERT INTO `labor_content` (`labor_content_id`, `labor_id`, `title`, `content`) VALUES
(1, 1, 'Lao động cơ khí', '<script>img_find(''contents'');</script>'),
(2, 1, 'Lao động nông nghiệp', '<script>img_find(''contents'');</script>'),
(3, 1, 'Lao động điện tử', '<script>img_find(''contents'');</script>'),
(4, 1, 'Lao động dệt may', '<script>img_find(''contents'');</script>'),
(5, 1, 'Lao động xây dựng', '<script>img_find(''contents'');</script>'),
(6, 1, 'Lao động kỹ sư - kỹ thuật viên', '<script>img_find(''contents'');</script>'),
(7, 2, 'Lao động cơ khí', '<script>img_find(''contents'');</script>'),
(8, 2, 'Lao động dệt may', '<script>img_find(''contents'');</script>'),
(9, 2, 'Lao động nông nghiệp', '<script>img_find(''contents'');</script>'),
(10, 2, 'Lao động kỹ sư - kỹ thuật viên', '<script>img_find(''contents'');</script>'),
(11, 2, 'Lao động xây dựng', '<script>img_find(''contents'');</script>'),
(12, 2, 'Lao động điện tử', '<script>img_find(''contents'');</script>'),
(13, 3, 'Lao động làm việc tại khách sạn MACAU', '<script>img_find(''contents'');</script>'),
(14, 3, 'Lao động giúp việc gia đình', '<script>img_find(''contents'');</script>'),
(15, 4, 'Lao động cơ khí', '<script>img_find(''contents'');</script>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `labor_content`
--
ALTER TABLE `labor_content`
  ADD PRIMARY KEY (`labor_content_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `labor_content`
--
ALTER TABLE `labor_content`
  MODIFY `labor_content_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

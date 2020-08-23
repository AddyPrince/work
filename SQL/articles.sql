-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 01:15 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `sub_title` text NOT NULL,
  `image` text NOT NULL,
  `detail` text NOT NULL,
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `language` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `subject`, `sub_title`, `image`, `detail`, `date_create`, `date_update`, `language`) VALUES
(122, 'english content', 'english content', '1598177094.png', '<p>english content</p>\r\n\r\n<p><strong>english contentenglish content</strong></p>\r\n\r\n<div id=\"simple-translate\">\r\n<div>\r\n<div class=\"isShow simple-translate-button\" style=\"background-image:url(&quot;moz-extension://546a68e1-2fef-4133-aaa0-5313a8ced9a5/icons/512.png&quot;); height:22px; left:168px; top:69px; width:22px\">&nbsp;</div>\r\n\r\n<div class=\" simple-translate-panel\" style=\"background-color:#ffffff; font-size:13px; height:200px; left:0px; top:0px; width:300px\">\r\n<div class=\"simple-translate-result-wrapper\" style=\"overflow:hidden\">\r\n<div class=\"simple-translate-move\" draggable=\"true\">&nbsp;</div>\r\n\r\n<div class=\"simple-translate-result-contents\">\r\n<p class=\"simple-translate-result\" style=\"color:#000000\">&nbsp;</p>\r\n\r\n<p class=\"simple-translate-candidate\" style=\"color:#737373\">&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', '2020-08-23 16:53:21', '2020-08-23 17:04:53', 'en'),
(123, 'บทความภาษาไทย', 'testt', '1598177119.jpg', '<p>บทความภาษาไทยบ</p>\r\n', '2020-08-23 17:00:27', '2020-08-23 17:05:19', 'th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

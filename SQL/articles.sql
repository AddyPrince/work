-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 09:34 AM
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
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `subject`, `sub_title`, `image`, `detail`) VALUES
(1, 'test1', 'test2', 'test3', 'ttttt'),
(3, '', '', 'filpath', '<p>test 12333 1455a5sdasd</p>\r\n\r\n<div id=\"simple-translate\">\r\n<div>\r\n<div class=\"simple-translate-button isShow\" style=\"background-image: url(&quot;moz-extension://546a68e1-2fef-4133-aaa0-5313a8ced9a5/icons/512.png&quot;); height: 22px; width: 22px; top: 74px; left: 168px;\">&nbsp;</div>\r\n\r\n<div class=\"simple-translate-panel \" style=\"width: 300px; height: 200px; top: 0px; left: 0px; font-size: 13px; background-color: rgb(255, 255, 255);\">\r\n<div class=\"simple-translate-result-wrapper\" style=\"overflow: hidden;\">\r\n<div class=\"simple-translate-move\" draggable=\"true\">&nbsp;</div>\r\n\r\n<div class=\"simple-translate-result-contents\">\r\n<p class=\"simple-translate-result\" style=\"color: rgb(0, 0, 0);\">&nbsp;</p>\r\n\r\n<p class=\"simple-translate-candidate\" style=\"color: rgb(115, 115, 115);\">&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n'),
(4, 'test subject', 'test sub title', 'filpath', '<p>This is my Contents</p>\r\n\r\n<p>test cosad</p>\r\n\r\n<p>awqdasd</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>as</p>\r\n\r\n<p>d</p>\r\n');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

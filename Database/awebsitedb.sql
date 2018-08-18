-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 08:22 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awebsitedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner_name` varchar(200) NOT NULL,
  `banner_type` varchar(50) NOT NULL,
  `banner_url` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(100) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_name`, `banner_type`, `banner_url`, `status`, `username`, `data`) VALUES
(1, '1521-04-18_g7cr-slider1-M4L.jpg', 'slider', 'uplooad/1521-04-18_g7cr-slider1-M4L.jpg', 1, 'ahmed safwat', '2018-04-21 05:24:15'),
(2, '6921-04-18_4079228351488371954.png', 'slider', 'uplooad/6921-04-18_4079228351488371954.png', 1, 'ahmed safwat', '2018-04-21 05:25:05'),
(3, '121-04-18_slide.jpg', 'slider', 'uplooad/121-04-18_slide.jpg', 1, 'ahmed safwat', '2018-04-21 05:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `main_settings`
--

CREATE TABLE `main_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(200) NOT NULL,
  `site_url` varchar(200) NOT NULL,
  `site_description` text NOT NULL,
  `site_email` varchar(100) NOT NULL,
  `site_tages` text NOT NULL,
  `site_homepanel` text NOT NULL,
  `fb` varchar(250) NOT NULL,
  `fw` varchar(250) NOT NULL,
  `rss` varchar(2500) NOT NULL,
  `yt` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_settings`
--

INSERT INTO `main_settings` (`id`, `site_name`, `site_url`, `site_description`, `site_email`, `site_tages`, `site_homepanel`, `fb`, `fw`, `rss`, `yt`, `username`, `date`) VALUES
(13, 'test', 'http://www.test.com', 'test', 'test', 'test', 'test', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.fa.com', '', '2018-04-15 20:19:38'),
(16, 'test555', 'http://www.test.com', 'test555\r\n', 'test', 'test', 'test', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.fa.com', '', '2018-04-15 22:04:14'),
(17, 'test555', 'http://www.test.com', 'test555\r\n', 'test', 'test', 'test', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.fa.com', '', '2018-04-15 22:04:14'),
(18, 'test555', 'http://www.test.com', 'test555\r\n', 'test', 'test', 'test', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.fa.com', '', '2018-04-15 22:05:38'),
(19, 'test555', 'http://www.test.com', 'test555\r\n', 'test', 'test', 'test', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.fa.com', '', '2018-04-15 22:08:35'),
(20, 'test555', 'http://www.test.com', 'test555\r\n', 'test', 'test', 'test', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.fa.com', '', '2018-04-15 22:09:04'),
(21, 'test555', 'http://www.test.com', 'test555\r\n', 'test', 'test', 'test', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.fa.com', '', '2018-04-15 22:09:22'),
(22, 'test555', 'http://www.test.com', 'test555\r\n', 'test', 'test', 'test', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.facebook.com', 'http://www.fa.com', '', '2018-04-15 22:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `page_content` longtext NOT NULL,
  `page_status` varchar(50) NOT NULL,
  `page_visite` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `page_image` varchar(250) NOT NULL,
  `page_date` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_content`, `page_status`, `page_visite`, `section_id`, `page_image`, `page_date`, `username`) VALUES
(1, 'arabiangerman.com', '                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident harum accusantium quibusdam alias quod. ', 'active', 10, 12, 'uplooad/621-04-18_proj.png', '21-04-18', 'ahmed safwat'),
(2, 'arabiangerman.com', '    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident harum accusantium quibusdam alias quod.    ', 'active', 10, 12, 'uplooad/321-04-18_proj.png', '21-04-18', 'ahmed safwat'),
(3, 'arabiangerman.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident harum accusantium quibusdam alias quod.', 'active', 10, 12, 'uplooad/9821-04-18_proj.png', '21-04-18', 'ahmed safwat'),
(4, 'arabiangerman.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident harum accusantium quibusdam alias quod.', 'active', 10, 12, 'uplooad/5521-04-18_proj.png', '21-04-18', 'ahmed safwat'),
(5, 'arabiangerman.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident harum accusantium quibusdam alias quod.', 'active', 10, 12, 'uplooad/721-04-18_proj.png', '21-04-18', 'ahmed safwat'),
(6, 'portfolio', 'hello this our page ', 'active', 10, 13, 'uplooad/9921-04-18_proj.png', '21-04-18', 'ahmed safwat'),
(7, 'Contact Us', 'To contaact With Me', 'active', 10, 13, 'uplooad/5121-04-18_slide.jpg', '21-04-18', 'ahmed safwat'),
(8, 'Test', 'hello', 'active', 10, 10, 'uplooad/4621-04-18_header_bg.jpg', '21-04-18', 'ahmed safwat');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(100) NOT NULL,
  `section_status` varchar(20) NOT NULL,
  `section_location` varchar(20) NOT NULL,
  `section_desc` varchar(250) NOT NULL,
  `section_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`, `section_status`, `section_location`, `section_desc`, `section_data`, `username`) VALUES
(10, 'Our Services', 'active', 'side', 'kolklklklkl', '2018-04-20 03:39:59', 'ahmed safwat'),
(11, 'Product', 'active', 'side', 'lllll', '2018-04-20 03:40:34', 'ahmed safwat'),
(12, 'Our Project', 'active', 'body', '        ', '2018-04-20 03:41:37', 'ahmed safwat'),
(13, 'general page', 'active', 'side', 'general page', '2018-04-21 15:04:28', 'ahmed safwat');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, 'ahmed safwat', 'ahmed safwat', '123', 'ahmedjalljajk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_settings`
--
ALTER TABLE `main_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `main_settings`
--
ALTER TABLE `main_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

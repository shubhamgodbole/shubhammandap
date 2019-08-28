-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 28, 2019 at 05:24 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shubham_mandap`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Marriage', 1, NULL, '2019-08-25 00:00:00', NULL, NULL),
(2, 'Birth Day', 1, NULL, '2019-08-25 00:00:00', NULL, NULL),
(3, 'Engagement', 1, NULL, '2019-08-25 00:00:00', NULL, NULL),
(4, 'Baby Shower', 1, NULL, '2019-08-25 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `title` varchar(300) NOT NULL,
  `description` longtext NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `category_id`, `image`, `title`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '1501537457860-the-photo-full-version-is-76x-higher-resolution.jpeg', 'Guest', '<p>sdfdfdf</p>\r\n', 1, 1, NULL, NULL, NULL),
(2, 2, 'Changes.png', 'sds', '<p>fgfggfg</p>\r\n', 1, NULL, NULL, NULL, NULL),
(3, 3, 'AwesomeScreenshot-reputeinfo--2019-07-31_11_48.png', 'sdd', '<p>sdsdsdsds</p>\r\n', 1, NULL, NULL, NULL, NULL),
(4, 1, '1501537457860-the-photo-full-version-is-76x-higher-resolution.jpeg', 'ddf', '<p>ddfdf</p>\r\n', 1, NULL, NULL, NULL, NULL),
(5, 1, 'contact_us_validation.png', 'ss', '<p>dfdfd</p>\r\n', 1, NULL, NULL, NULL, NULL),
(6, 2, '1501537457860-the-photo-full-version-is-76x-higher-resolution.jpeg', 'dfddf', '<p>dsdsdd</p>\r\n', 1, NULL, NULL, NULL, NULL),
(7, 2, '1501537457860-the-photo-full-version-is-76x-higher-resolution.jpeg', 'dfdf', '<p>scsfsfdsfds</p>\r\n', 1, NULL, NULL, NULL, NULL),
(8, 1, '1501537457860-the-photo-full-version-is-76x-higher-resolution.jpeg', 'df', '<p>asadd</p>\r\n', 1, NULL, NULL, NULL, NULL),
(9, 1, 'Changes.png', 'sffds gfg fgfg', '<p>ddfdf ddf dfdf</p>\r\n', 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `phone`, `gender`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'shubham', 'godbole', 'shubham@gmail.com', '123567890', 'male', 'admin@123', '2019-08-24', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

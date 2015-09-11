-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2015 at 04:42 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `slavka2015`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `admin_token` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_token`) VALUES
(1, 'slavka', '5449abce9417344bb63eb38fa6d7419f', 'hDR7wfVyJe');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE IF NOT EXISTS `categorys` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`category_id`, `category_name`) VALUES
(1, 'brosevi'),
(3, 'pojasevi'),
(4, 'za bebe');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `products_about` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `products_image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`products_id`),
  KEY `fk_categorys` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_name`, `products_about`, `products_image`, `category_id`) VALUES
(3, 'beli', 'sdfsdfsdf', 'qweqweqwe', 1),
(4, 'zeleni pojas', 'sdfsdsdf', 'sdfsdfsdf', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categorys` (`category_id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

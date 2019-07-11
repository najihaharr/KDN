-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2018 at 01:02 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f34ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `custID` mediumint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`custID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`custID`, `name`, `contact`, `email`, `time`) VALUES
(81, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 09:22:02'),
(82, 'Melly', 97212185, 'najihah.arr@gmail.com', '2018-11-13 09:23:30'),
(83, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 09:35:16'),
(84, 'Najihah', 1231, 'najihah.arr@gmail.com', '2018-11-13 10:44:35'),
(85, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 10:45:37'),
(86, 'Najihah', 1231, 'najihah.arr@gmail.com', '2018-11-13 10:50:58'),
(87, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 10:52:14'),
(88, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 10:54:37'),
(89, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 10:55:57'),
(90, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 10:58:36'),
(91, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 11:00:14'),
(92, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 11:02:32'),
(93, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 16:26:49'),
(94, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 16:35:25'),
(95, 'MARY', 97212185, 'najihah.arr@gmail.com', '2018-11-13 16:40:43'),
(96, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 16:47:22'),
(97, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 16:47:57'),
(98, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 16:49:11'),
(99, 'Najihah', 1231, 'najihah.arr@gmail.com', '2018-11-13 16:50:26'),
(100, 'Najihah', 1231, 'najihah.arr@gmail.com', '2018-11-13 16:55:18'),
(101, 'Najihah', 1231, 'najihah.arr@gmail.com', '2018-11-13 16:56:31'),
(102, 'Najihah', 97212185, 'najihah.arr@gmail.com', '2018-11-13 17:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `paymentinfo`
--

CREATE TABLE IF NOT EXISTS `paymentinfo` (
  `custID` mediumint(4) NOT NULL AUTO_INCREMENT,
  `cardname` varchar(50) NOT NULL,
  `cardnumber` varchar(19) NOT NULL,
  `expmonth` varchar(25) NOT NULL,
  `expyear` int(4) NOT NULL,
  `cvv` int(3) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`custID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `paymentinfo`
--

INSERT INTO `paymentinfo` (`custID`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`, `time`) VALUES
(38, '', '', '', 0, 0, '2018-11-13 10:44:48'),
(39, '', '', '', 0, 0, '2018-11-13 10:46:02'),
(40, '', '', '', 0, 0, '2018-11-13 10:51:20'),
(41, '', '', '', 0, 0, '2018-11-13 10:52:31'),
(42, '', '', '', 0, 0, '2018-11-13 10:55:19'),
(43, '', '', '', 0, 0, '2018-11-13 10:56:10'),
(44, '', '', '', 0, 0, '2018-11-13 10:59:01'),
(45, '', '', '', 0, 0, '2018-11-13 11:00:30'),
(46, '', '', '', 0, 0, '2018-11-13 16:27:12'),
(47, '', '', '', 0, 0, '2018-11-13 16:37:02'),
(48, '', '', '', 0, 0, '2018-11-13 16:40:58'),
(49, 'NAJIHAH', '1111-1111-1111-1111', 'September', 2020, 333, '2018-11-13 16:49:26'),
(50, '', '', '', 0, 0, '2018-11-13 16:50:47'),
(51, '', '', '', 0, 0, '2018-11-13 16:55:37'),
(52, 'najihah', '1111-1111-1111-1111', 'november', 2020, 111, '2018-11-13 17:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `sales5`
--

CREATE TABLE IF NOT EXISTS `sales5` (
  `index` mediumint(4) NOT NULL AUTO_INCREMENT,
  `CAT1` int(2) NOT NULL,
  `CAT2` int(2) NOT NULL,
  `CAT3` int(2) NOT NULL,
  `CAT4` int(2) NOT NULL,
  `CAT5` int(2) NOT NULL,
  `CAT6` int(2) NOT NULL,
  `totalqty` int(2) NOT NULL,
  `totalPrice` int(6) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `sales5`
--

INSERT INTO `sales5` (`index`, `CAT1`, `CAT2`, `CAT3`, `CAT4`, `CAT5`, `CAT6`, `totalqty`, `totalPrice`, `time`) VALUES
(61, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-11 05:22:44'),
(62, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-11 05:23:49'),
(63, 2, 0, 0, 0, 0, 0, 2, 696, '2018-11-11 05:24:53'),
(64, 0, 0, 0, 0, 0, 0, 0, 0, '2018-11-11 05:25:31'),
(65, 0, 1, 0, 0, 0, 0, 1, 288, '2018-11-11 05:25:49'),
(66, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-11 18:28:53'),
(67, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-11 18:32:23'),
(68, 0, 1, 0, 0, 0, 0, 1, 288, '2018-11-11 18:32:43'),
(69, 1, 1, 0, 0, 0, 0, 2, 636, '2018-11-13 05:13:36'),
(70, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 09:16:39'),
(71, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 09:18:42'),
(72, 0, 1, 0, 0, 0, 0, 1, 288, '2018-11-13 09:22:02'),
(73, 2, 0, 0, 0, 0, 0, 2, 696, '2018-11-13 09:23:30'),
(74, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 09:35:16'),
(75, 0, 2, 0, 0, 0, 0, 2, 576, '2018-11-13 10:44:35'),
(76, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 10:45:37'),
(77, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 10:50:58'),
(78, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 10:52:14'),
(79, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 10:54:37'),
(80, 0, 2, 0, 0, 0, 0, 2, 576, '2018-11-13 10:55:57'),
(81, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 10:58:36'),
(82, 0, 0, 1, 0, 0, 0, 1, 228, '2018-11-13 11:00:14'),
(83, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 11:02:32'),
(84, 2, 0, 0, 0, 0, 0, 2, 696, '2018-11-13 16:26:49'),
(85, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 16:35:25'),
(86, 0, 2, 0, 0, 0, 0, 2, 576, '2018-11-13 16:40:43'),
(87, 0, 1, 0, 0, 0, 0, 1, 288, '2018-11-13 16:47:22'),
(88, 0, 1, 0, 0, 0, 0, 1, 288, '2018-11-13 16:47:57'),
(89, 0, 1, 0, 0, 0, 0, 1, 288, '2018-11-13 16:49:11'),
(90, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 16:50:26'),
(91, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 16:55:18'),
(92, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 16:56:31'),
(93, 1, 0, 0, 0, 0, 0, 1, 348, '2018-11-13 17:00:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2018 at 10:07 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_nature`
--
CREATE DATABASE IF NOT EXISTS `php_nature` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php_nature`;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `s_id` int(1) NOT NULL AUTO_INCREMENT,
  `s_name` text NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_phone` bigint(20) NOT NULL,
  `gender` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `s_password` varchar(30) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`s_id`, `s_name`, `s_email`, `s_phone`, `gender`, `address`, `s_password`) VALUES
(1, 'pavi', 'havi@gmail.com', 9900990099, 'female', 'mlore', '12345'),
(2, 'pavi', 'pavi25pc@gmail.com', 9448788190, 'female', 'sullia', 'pavi'),
(4, 'pavi', 'pavi25pc@gmail.com', 9448788190, 'female', 'puttur', 'pavi'),
(5, 'pavi', 'pavi25pc@gmail.com', 9448788190, 'female', 'puttur', 'pavi'),
(6, 'pavi', 'pavi25pc@gmail.com', 9448788190, 'female', 'rajaston', 'ppp'),
(7, 'pavi', 'pavi25pc@gmail.com', 9448788190, 'female', 'rajaston', 'ppp'),
(8, 'pavi', 'pavi25pc@gmail.com', 9448788190, 'female', 'rajaston', 'ppp'),
(9, 'pavi', 'pavi25pc@gmail.com', 9448788190, 'female', 'rajaston', 'ppp'),
(10, '9448788160', 'pavi25pc@gmail.com', 0, 'female', 'guthigar', 'pavi'),
(11, '9448788160', 'pavi25pc@gmail.com', 0, 'female', 'guthigar', 'pavi'),
(12, 'havi', 'havi@gmail.com', 9449936523, 'female', 'sullia', 'pavi'),
(13, 'naveen', 'n@gmail.com', 99999999999, 'male', 'sullia', 'naveen'),
(14, 'sam', 'sam@gmail.com', 9448788190, 'male', 'harihara', 'sam');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

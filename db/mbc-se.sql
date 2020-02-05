-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 12:08 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mbc-se`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_set`
--

CREATE TABLE IF NOT EXISTS `question_set` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(10) NOT NULL,
  `question` varchar(200) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` varchar(5) NOT NULL,
  `difficulty` varchar(10) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `question_set`
--

INSERT INTO `question_set` (`sl_no`, `category`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `difficulty`) VALUES
(1, 'physics', 'Who is SI unit of Power?', 'Watt', 'Tesla', 'Joule', 'Ohm', 'c', 'easy'),
(2, 'chemistry', 'Who is father of Chemistry?', 'Antonie Lavoisier', 'JJ Thomson', 'Rudyard Kiplin', 'Bose', 'a', 'easy'),
(3, 'maths', 'What is square of 11?', '129', '121', '110', '111', 'b', 'easy'),
(4, 'gk', 'Who is PM of India?', 'Manmohan Singh', 'Amit Shah', 'Ramnath Kovind', 'Narendra Modi', 'd', 'easy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 10:00 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `question_set`
--

INSERT INTO `question_set` (`sl_no`, `category`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `difficulty`) VALUES
(1, 'physics', 'jhhg', 'jhg', 'jhg', 'jhg', 'jhg', 'a', 'easy'),
(2, 'physics', 'jhg', 'jhg', 'jhg', 'jh', 'gnn', 'a', 'easy'),
(3, 'physics', 'jhg', 'hjg', 'jh', 'gjh', 'g', 'a', 'easy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

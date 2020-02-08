-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 10:11 AM
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
-- Table structure for table `chemistry_questions`
--

CREATE TABLE IF NOT EXISTS `chemistry_questions` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(300) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `difficulty` varchar(10) NOT NULL,
  `entered_by` varchar(20) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gk_questions`
--

CREATE TABLE IF NOT EXISTS `gk_questions` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(300) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `difficulty` varchar(10) NOT NULL,
  `entered_by` varchar(20) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `maths_questions`
--

CREATE TABLE IF NOT EXISTS `maths_questions` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(300) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `difficulty` varchar(10) NOT NULL,
  `entered_by` varchar(20) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `physics_questions`
--

CREATE TABLE IF NOT EXISTS `physics_questions` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `difficulty` varchar(10) NOT NULL,
  `entered_by` varchar(20) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `physics_questions`
--

INSERT INTO `physics_questions` (`sl_no`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `difficulty`, `entered_by`) VALUES
(1, 'The absorption of ink by blotting paper involves', 'viscosity of ink', 'capillary action phenomenon', 'diffusion of ink through the blotting', 'siphon action', 'b', 'easy', 'Test_user'),
(2, 'Nuclear sizes are expressed in a unit named', 'fermi', 'angstrom', 'newton', 'tesla', 'a', 'easy', 'Test_user'),
(3, 'Light year is a unit of', 'time', 'distance', 'light', 'intensity of light', 'b', 'easy', 'Test_user'),
(4, 'Light from the Sun reaches us in nearly', '2 minutes', '4 minutes', '8 minutes', '16 minutes', 'c', 'average', 'Test_user'),
(5, 'Pa(Pascal) is the unit for', 'thrust', 'pressure', 'frequency', 'conductivity', 'b', 'average', 'Test_user'),
(6, 'Let a thin capillary tube be replaced with another tube of insufficient length then, we find water', 'will overflow', 'depressed', 'change its meniscus', 'will not rise', 'd', 'average', 'Test_user'),
(7, 'Pick out the scalar quantity', 'pressure', 'force', 'velocity', 'acceleration', 'a', 'average', 'Test_user'),
(8, 'out of the following, which is not emitted by radioactive substance?', 'Electrons', 'Electromagnetic radiations', 'Alpha particles', 'Neutrons', 'd', 'hard', 'Test_user'),
(9, 'Sound waves in air are', 'transverse', 'longitudinal', 'electromagnetic', 'polarised', 'b', 'hard', 'Test_user'),
(10, 'Magnetism at the centre of a bar magnet is', 'minimum', 'maximum', 'zero', 'minimum or maximum', 'c', 'hard', 'Test_user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

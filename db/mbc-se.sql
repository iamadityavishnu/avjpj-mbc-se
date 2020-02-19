-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2020 at 04:20 PM
-- Server version: 5.7.23
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbc-se`
--

-- --------------------------------------------------------

--
-- Table structure for table `chemistry_questions`
--

DROP TABLE IF EXISTS `chemistry_questions`;
CREATE TABLE IF NOT EXISTS `chemistry_questions` (
  `sl_no` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `difficulty` varchar(10) NOT NULL,
  `entered_by` varchar(20) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemistry_questions`
--

INSERT INTO `chemistry_questions` (`sl_no`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `difficulty`, `entered_by`) VALUES
(1, 'The nucleus of an atom consists of', 'electrons and neutrons', 'electrons and protons', 'protons and neutrons', 'All of the above', 'c', 'easy', 'Test_user'),
(2, 'The number of moles of solute present in 1 kg of a solvent is called its', 'molality', 'molarity', 'normality', 'formality', 'a', 'easy', 'Test_user'),
(3, 'The most electronegative element among the following is', 'sodium', 'bromine', 'fluorine', 'oxygen', 'c', 'easy', 'Test_user'),
(4, 'The metal used to recover copper from a solution of copper sulphate is', 'Na', 'Ag', 'Hg', 'Fe', 'd', 'average', 'Test_user'),
(5, 'The number of d-electrons in Fe2  (Z = 26) is not equal to that of', 'p-electrons in Ne(Z = 10)', 's-electrons in Mg(Z = 12)', 'd-electrons in Fe(Z = 26)', 'p-electrons in CI(Z = 17)', 'd', 'average', 'Test_user'),
(6, 'The metallurgical process in which a metal is obtained in a fused state is called', 'smelting', 'roasting', 'calcinations', 'froth floatation', 'a', 'average', 'Test_user'),
(7, 'The gas present in the stratosphere which filters out some of the sun\'s ultraviolet light and provides an effective shield against radiation damage to living things is', 'oxygen', 'helium', 'ozone', 'methane', 'b', 'average', 'Test_user'),
(8, 'The most commonly used bleaching agent is', 'carbon dioxide', 'alcohol', 'chlorine', 'sodium chlorine', 'c', 'hard', 'Test_user'),
(9, 'The nucleus of a hydrogen atom consists of', '1 proton   2 neutron', '1 proton only', '1 neutron only', '1 electron only', 'a', 'hard', 'Test_user'),
(10, 'The heat required to raise the temperature of body by 1 K is called', 'thermal capacity', 'specific heat', 'water equivalent', 'None of the above', 'b', 'hard', 'Test_user');

-- --------------------------------------------------------

--
-- Table structure for table `gk_questions`
--

DROP TABLE IF EXISTS `gk_questions`;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maths_questions`
--

DROP TABLE IF EXISTS `maths_questions`;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `physics_questions`
--

DROP TABLE IF EXISTS `physics_questions`;
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

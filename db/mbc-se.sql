-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 07:02 PM
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
  `question` varchar(500) NOT NULL,
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
-- Dumping data for table `chemistry_questions`
--

INSERT INTO `chemistry_questions` (`sl_no`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `difficulty`, `entered_by`) VALUES
(1, 'The nucleus of an atom consists of', 'electrons and neutrons', 'electrons and protons', 'protons and neutrons', 'All of the above', 'c', 'easy', 'Test_user'),
(2, 'The number of moles of solute present in 1 kg of a solvent is called its', 'molality', 'molarity', 'normality', 'formality', 'a', 'easy', 'Test_user'),
(3, 'The most electronegative element among the following is', 'sodium', 'bromine', 'fluorine', 'oxygen', 'c', 'easy', 'Test_user'),
(4, 'The metal used to recover copper from a solution of copper sulphate is', 'Na', 'Ag', 'Hg', 'Fe', 'd', 'average', 'Test_user'),
(5, 'The number of d-electrons in Fe2  (Z = 26) is not equal to that of', 'p-electrons in Ne(Z = 10)', 's-electrons in Mg(Z = 12)', 'd-electrons in Fe(Z = 26)', 'p-electrons in CI(Z = 17)', 'd', 'average', 'Test_user'),
(6, 'The metallurgical process in which a metal is obtained in a fused state is called', 'smelting', 'roasting', 'calcinations', 'froth floatation', 'a', 'average', 'Test_user'),
(7, 'The gas present in the stratosphere which filters out some of the sun''s ultraviolet light and provides an effective shield against radiation damage to living things is', 'oxygen', 'helium', 'ozone', 'methane', 'b', 'average', 'Test_user'),
(8, 'The most commonly used bleaching agent is', 'carbon dioxide', 'alcohol', 'chlorine', 'sodium chlorine', 'c', 'hard', 'Test_user'),
(9, 'The nucleus of a hydrogen atom consists of', '1 proton   2 neutron', '1 proton only', '1 neutron only', '1 electron only', 'a', 'hard', 'Test_user'),
(10, 'The heat required to raise the temperature of body by 1 K is called', 'thermal capacity', 'specific heat', 'water equivalent', 'None of the above', 'b', 'hard', 'Test_user');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `gk_questions`
--

INSERT INTO `gk_questions` (`sl_no`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `difficulty`, `entered_by`) VALUES
(1, 'Who Resigns as a President of The World Bank?', 'Kristalina Georgieva', 'Joaquim Levy', 'David Rubenstein', 'Jim Yong Kim', 'd', 'easy', 'Test_user'),
(2, 'Which country topped the Global Climate Risk Index 2020?', 'Japan', 'Philippines', 'Germany', 'Madagascar', 'b', 'easy', 'Test_user'),
(3, 'In which place the Indian Army has successfully test-fired two Spike long-range anti-tank missiles?', 'Pokhran, Rajasthan', 'Jodhpur, Rajasthan', 'Pune, Maharashtra', 'Mhow, Madhya Pradesh', 'd', 'easy', 'Test_user'),
(4, 'Which moon of Jupiter has been found to have the presence of water vapor?', 'Deimos', 'Europa', 'Ariel', 'Titania', 'a', 'average', 'Test_user'),
(5, 'Which of the following prize is given in the field of Medical Science?', 'Iqwal Samman', 'Vyas Samman', 'Homi Bhabha Award', 'Dhanwantari Award', 'd', 'average', 'Test_user'),
(6, 'Who is the Indian Air Force chief?', 'Birender Singh Dhanoa', 'S. Prabhakaran', 'Amit Dev', 'V. R. Chaudhari', 'b', 'average', 'Test_user'),
(7, 'In May 2019, India delivered a pair of Mi-24 attack helicopters to which country?', 'Bangladesh', 'Afghanistan', 'Nepal', 'Qatar', 'a', 'average', 'Test_user'),
(8, 'Who is called the beacon of light of Asia?', 'Subhash Chandra Bose', 'Mahatma Gandhi', 'Jawaharlal Nehru', 'Aurobindo Ghosh', 'c', 'hard', 'Test_user'),
(9, 'Bharat Ratna and Padma Vibhushan awards in India were instituted in the year', '1968', '1958', '1964', '1954', 'd', 'hard', 'Test_user'),
(10, 'Name the player who won the ''Player of the Tournament'' award in ICC Cricket World Cup 2019', 'Kane Williamson', 'Rohit Sharma ', 'Shakib Al Hasan', 'Jaspreet Bumrah', 'b', 'hard', 'Test_user');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `maths_questions`
--

INSERT INTO `maths_questions` (`sl_no`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `difficulty`, `entered_by`) VALUES
(1, ' I am a number. I have 7 in the ones place. I am less than 80 but greater than 70. What is my number?', '73', '71', '75', '77', 'd', 'easy', 'Test_user'),
(2, ' (9321   5406   1001) Ã· (498   929   660) =', '4.5', '3.5', '16.5', '7.5', 'd', 'average', 'Test_user'),
(3, 'If 6 is 50% of a number, what is the number?', '11', '10', '12', '13', 'c', 'easy', 'Test_user'),
(4, 'The quotient in a division sum is 403. The divisor is 100 and the remainder is 58. The dividend is', '34058', '40458', '43058', '40358', 'd', 'hard', 'Test_user'),
(5, 'Which least number should be added to 2600 to make it a perfect square?', '39', '3', '1', '5', 'c', 'average', 'Test_user'),
(6, 'How many months are equal to 45 days?', '1 Â¼ months', '1 Â½ months', 'Â¼ months', '2 Â¼ months', 'a', 'average', 'Test_user'),
(7, 'How much water is added to 750 g milk to get a 1-kilogram mixture of liquid?', '0.25 kg', '2.5 kg', '20.5 kg', '25.0 kg', 'b', 'hard', 'Test_user'),
(8, 'If 5 boys take 7 hours to pack 35 cartoons, then how many boys can pack 65 cartoons in 3 hours?', '39', '26', '45', 'None of these', 'd', 'hard', 'Test_user'),
(9, 'The value of 1.07 Ã— 65   1.07 Ã— 26   1.07 Ã— 9 is', '10.7', '10.73', '10.70', '107', 'd', 'average', 'Test_user'),
(10, 'What is 121 times 11?', '1313', '1331', '1133', '3131', 'a', 'easy', 'Test_user');

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

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `sl_no` int(11) DEFAULT NULL,
  `question` varchar(300) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `result` int(11) DEFAULT NULL,
  `topic` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`sl_no`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `result`, `topic`) VALUES
(1, 'Pa(Pascal) is the unit for', 'thrust', 'pressure', 'frequency', 'conductivity', 'b', NULL, 'physics'),
(2, 'Magnetism at the centre of a bar magnet is', 'minimum', 'maximum', 'zero', 'minimum or maximum', 'c', NULL, 'physics'),
(3, 'The absorption of ink by blotting paper involves', 'viscosity of ink', 'capillary action phenomenon', 'diffusion of ink through the blotting', 'siphon action', 'b', NULL, 'physics'),
(4, 'Light year is a unit of', 'time', 'distance', 'light', 'intensity of light', 'b', NULL, 'physics'),
(5, 'Light from the Sun reaches us in nearly', '2 minutes', '4 minutes', '8 minutes', '16 minutes', 'c', NULL, 'physics'),
(6, 'out of the following, which is not emitted by radioactive substance?', 'Electrons', 'Electromagnetic radiations', 'Alpha particles', 'Neutrons', 'd', NULL, 'physics'),
(7, 'Pick out the scalar quantity', 'pressure', 'force', 'velocity', 'acceleration', 'a', NULL, 'physics'),
(8, 'Sound waves in air are', 'transverse', 'longitudinal', 'electromagnetic', 'polarised', 'b', NULL, 'physics'),
(9, 'Nuclear sizes are expressed in a unit named', 'fermi', 'angstrom', 'newton', 'tesla', 'a', NULL, 'physics'),
(10, 'Let a thin capillary tube be replaced with another tube of insufficient length then, we find water', 'will overflow', 'depressed', 'change its meniscus', 'will not rise', 'd', NULL, 'physics');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

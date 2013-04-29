-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2013 at 12:58 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `question1`
--

CREATE TABLE IF NOT EXISTS `question1` (
  `question1` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question1`
--

INSERT INTO `question1` (`question1`, `time`, `user`) VALUES
('1', '0000-00-00 00:00:00', 'Devin'),
('Hello!', '0000-00-00 00:00:00', ''),
('Hey!', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `question2`
--

CREATE TABLE IF NOT EXISTS `question2` (
  `question2` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question2`
--

INSERT INTO `question2` (`question2`, `time`, `user`) VALUES
('2', '0000-00-00 00:00:00', ''),
('Hey!', '2013-04-22 14:57:12', 'Bill');

-- --------------------------------------------------------

--
-- Table structure for table `question3`
--

CREATE TABLE IF NOT EXISTS `question3` (
  `question3` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question3`
--

INSERT INTO `question3` (`question3`, `time`, `user`) VALUES
('3', '0000-00-00 00:00:00', ''),
('Awesome!', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `question4`
--

CREATE TABLE IF NOT EXISTS `question4` (
  `question4` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question4`
--

INSERT INTO `question4` (`question4`, `time`, `user`) VALUES
('4', '0000-00-00 00:00:00', ''),
('AnchorDown', '2013-04-22 14:59:46', 'James');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `date` varchar(8) NOT NULL,
  `venue` varchar(4) NOT NULL,
  `opp` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`date`, `venue`, `opp`) VALUES
('11/02/12', 'Home', 'St. Xavier'),
('11/05/12', 'Home', 'Delta State'),
('11/10/12', 'Home', 'Nicholls State'),
('11/16/12', 'Away', 'Oregon'),
('11/22/12', 'Home', 'Davidson'),
('11/23/12', 'Home', 'Marist'),
('11/25/12', 'Home', 'UTEP'),
('12/01/12', 'Home', 'Villanova'),
('12/06/12', 'Away', 'Xavier'),
('12/15/12', 'Home', 'Alabama A&M'),
('12/17/12', 'Home', 'Cornell'),
('12/21/12', 'Home', 'MTSU'),
('12/29/12', 'Home', 'Butler'),
('01/02/13', 'Home', 'William & Mary'),
('01/10/13', 'Home', 'Kentucky'),
('01/12/13', 'Away', 'Arkansas'),
('01/15/13', 'Home', 'Ole Miss'),
('01/19/13', 'Away', 'South Carolina'),
('01/23/13', 'Home', 'Auburn'),
('01/26/13', 'Away', 'Missouri'),
('01/29/13', 'Away', 'Tennessee'),
('02/02/13', 'Home', 'Alabama'),
('02/06/13', 'Away', 'LSU'),
('02/09/13', 'Home', 'Arkansas'),
('02/13/13', 'Home', 'Tennessee'),
('02/16/13', 'Home', 'Texas A&M'),
('02/20/13', 'Away', 'Kentucky'),
('02/23/13', 'Away', 'Mississippi State'),
('02/27/13', 'Home', 'Georgia'),
('03/02/13', 'Away', 'Auburn'),
('03/16/13', 'Away', 'Florida');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE IF NOT EXISTS `statistics` (
  `name` varchar(90) NOT NULL,
  `points` decimal(11,2) NOT NULL,
  `minutes` decimal(11,2) NOT NULL,
  `number` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`name`, `points`, `minutes`, `number`) VALUES
('A. J. Astroth', 0.40, 4.70, 20),
('Kevin Bright', 6.90, 29.30, 15),
('Kyle Fuller', 4.30, 17.50, 11),
('Josh Henderson', 4.80, 18.20, 40),
('Kedren Johnson', 8.00, 22.70, 2),
('Carter Josephs', 0.30, 1.00, 14),
('Shelby Moats', 2.20, 12.30, 34),
('Rod Odum', 5.50, 19.90, 0),
('Dai-Jon Parker', 4.00, 18.20, 24),
('James Siakam', 1.50, 6.50, 35),
('Nathan Watkins', 0.00, 1.00, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` varchar(20) NOT NULL,
  `activation` varchar(256) NOT NULL,
  `verified` varchar(5) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `lastName`, `city`, `state`, `email`, `username`, `password`, `role`, `activation`, `verified`) VALUES
('Devin', 'Brooks', 'Memphis', 'TN', 'devin.m.brooks@gmail.com', 'Devin', '4f926a3ab91943cda655a137b34ba61a', 'admin', '', 'Yes'),
('James', 'Franklin', 'Nashville', 'TN', 'vucommodores@aol.com', 'James', '58d72e8e4929313bdba8dc247ef3aa5f', 'member', '2160d6a75fa12295ae465a7bb4a1150f7e2a495d', 'No'),
('Bill', 'Gates', 'Seattle', 'WA', 'bill.gates@microsoft.com', 'Bill', '446a6ffccab1019a825c2b0fbb925452', 'member', '084845fb31dd4e49b4d3d53e28e80866b642878d', 'Yes');

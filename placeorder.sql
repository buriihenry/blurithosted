-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2016 at 07:12 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blurit`
--

-- --------------------------------------------------------

--
-- Table structure for table `placeorder`
--

CREATE TABLE IF NOT EXISTS `placeorder` (
  `index` int(255) NOT NULL AUTO_INCREMENT,
  `uniqueid` varchar(255) NOT NULL,
  `confirmed` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `laptop/desktop` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `placeorder`
--

INSERT INTO `placeorder` (`index`, `uniqueid`, `confirmed`, `fname`, `sname`, `phonenumber`, `email`, `laptop/desktop`, `model`) VALUES
(1, 'henry10', 'no', 'henry', 'burii', '0700223146', 'buriihenry@gmail.com', 'laptop', 'hp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

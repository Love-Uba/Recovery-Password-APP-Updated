-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2019 at 06:15 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emailactivation`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `code` varchar(20) NOT NULL,
  `verify` int(1) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `password`, `firstname`, `lastname`, `code`, `verify`) VALUES
(31, 'sesan@yahoo.com', '4854eb12955f54f3edf5a6d55198d186', 'Adebayo', 'Sesan', 'ntf58J4wezMD', 1),
(32, 'hope@gmail.com', 'd38b4fc35204ffcc25f974a9d894d067', 'Tammy', 'Hope', 'FMmKx5B7ydlo', 0),
(38, 'mcgamma04@yahoo.com', '3c709b10a5d47ba33d85337dd9110917', 'Adebayo', 'Michael', 'hj3vKVxRWXI4', 0),
(40, 'king@yahoo.com', '18126e7bd3f84b3f3e4df094def5b7de', 'Nwah', 'King', 'QSEdyVKbowXp', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

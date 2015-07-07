-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2015 at 06:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leave_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave_apply`
--

CREATE TABLE IF NOT EXISTS `leave_apply` (
  `leave_no` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`leave_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `leave_apply`
--

INSERT INTO `leave_apply` (`leave_no`, `staff_id`, `date`, `reason`, `status`) VALUES
(1, '110948', '06/12/2015 - 06/13/2015', 'holiday', 'waiting for approval'),
(2, '110948', '06/12/2015 - 06/13/2015', 'holiday', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_no` int(100) NOT NULL AUTO_INCREMENT,
  `staff_id` varchar(100) NOT NULL,
  `staff_pass` varchar(100) NOT NULL,
  `staff_fname` varchar(100) NOT NULL,
  `staff_lname` varchar(100) NOT NULL,
  `staff_ic` varchar(100) NOT NULL,
  `staff_address` varchar(100) NOT NULL,
  `staff_pnumber` varchar(100) NOT NULL,
  `staff_unique` int(11) NOT NULL,
  `staff_title` varchar(100) NOT NULL,
  PRIMARY KEY (`staff_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_no`, `staff_id`, `staff_pass`, `staff_fname`, `staff_lname`, `staff_ic`, `staff_address`, `staff_pnumber`, `staff_unique`, `staff_title`) VALUES
(52, '110948', 'b032b7f3656e65ec4b97c7cb5d853b6fa40f3362', 'khairol nadzrin', 'saufi', '921011135899', 'lot 205, kpg sg alo, 96400 mukah sarawak', '01132566779', 1, 'software engineer'),
(53, '110992', 'a9b833c50dde9c30815f58244455f495f1578034', 'norhanizah', 'minin', '9208468191', '4-12 PDCC LAB SCHOOL OF COMPUTER\r\nSCIENCE USM', '0135678978', 2, 'manager');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

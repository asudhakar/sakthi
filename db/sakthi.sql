-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2016 at 09:32 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sakthi`
--

-- --------------------------------------------------------

--
-- Table structure for table `reference_list`
--

CREATE TABLE IF NOT EXISTS `reference_list` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone_number` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `refered_by` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `reference_list`
--

INSERT INTO `reference_list` (`id`, `customer_name`, `customer_phone_number`, `customer_email`, `event_date`, `refered_by`) VALUES
(1, 'ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(2, 'ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(3, 'ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(4, 'ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(5, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(6, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(7, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(8, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(9, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(10, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(11, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(12, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(13, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(14, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(15, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(16, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(17, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(18, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(19, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(20, 'Ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(21, 'suresh', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(22, 'suresh', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(23, 'ranjan', '8056095256', 'rnjn1992@gmail.com', '2016-08-12', 4),
(24, 'vignesh', '9962938844', 'jaleel_17130@yahoo.com', '2016-08-12', 4),
(25, 'solomon', '9962244432', 'jaleel_17130@yahoo.com', '2016-08-12', 4),
(35, 'Ashif', '9962938844', 'jaleel_17130@yahoo.com', '2016-08-13', 4),
(36, 'sakthi', '7708100013', 'jaleel_17130@yahoo.com', '2016-08-17', 4),
(37, 'Suresh', '9043844486', 'sureshd.vj@gmail.com', '2016-08-18', 5),
(38, 'Suresh Test', '9962938844', 'jaleel17130@gnail.com', '2016-08-21', 6),
(39, 'suresh', '9043844486', 'sureshd.vj@gmail.com', '2016-08-22', 8),
(41, 'Suresh test', '9043844486', 'sureshd.vj@gmail.com', '2016-08-23', 10),
(42, 'sampath ', '8754488313', '', '2016-08-19', 13),
(43, 'sribal chopra', '9840856143', '', '2016-08-19', 13),
(44, 'Suresh test', '9043844486', 'sureshd.vj@gmail.com', '2016-10-29', 14),
(45, 'meena', '9840586857', '', '2016-09-06', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `institution/company` varchar(255) NOT NULL,
  `total_refered_count` int(50) NOT NULL,
  `total_paid_count` int(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `catagory`, `institution/company`, `total_refered_count`, `total_paid_count`) VALUES
(4, 'jaleel17130@gmail.com', 'Abdul', 'Abdul123', 'Employee', 'the6.in', 27, 0),
(5, 'lachocolatettk@gmail.com', 'Fouzan', 'Lachocolate', 'Cake shop', 'Lachocolate - TTK Road ', 1, 0),
(6, 'arunkarthik.v@gmail.com', 'Arun', 'Moonlight', 'Cake shop', 'Moonlight - Anna agar', 1, 0),
(8, 'mastercakez555@gmail.com', 'selvaraj', 'Mastercakez', 'Cake shop', 'Mastercakez- villivakam', 1, 0),
(10, 'paul.doss84@yahoo.com', 'pauldoss', 'divinecakes', 'cake shop', 'divine cakes - kilpauk', 1, 0),
(11, 'cakessquarechennai@gmail.com', 'micky', 'cakessquare', 'cake shop', 'cakes square - anna nagar', 0, 0),
(13, 'cakesquarechennai@gmail.com', 'micky', 'cakesquare', 'cake shop', 'cake square - anna nagar', 3, 0),
(14, 'dessertdestiny@gmail.com', 'Shilpa', 'dessertdestiny1234', 'Home bakers', 'Dessert destiny- thousand lights', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

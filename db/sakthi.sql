-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2016 at 11:04 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sakthi`
--

-- --------------------------------------------------------

--
-- Table structure for table `reference_list`
--

CREATE TABLE `reference_list` (
  `id` int(50) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone_number` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `refered_by` int(50) NOT NULL,
  `refered_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference_list`
--

INSERT INTO `reference_list` (`id`, `customer_name`, `customer_phone_number`, `customer_email`, `event_date`, `refered_by`, `refered_date`) VALUES
(1, 'sudhakar', '9842972047', 'asudhakar@live.in', '2016-08-29', 1, '2016-08-29 04:34:36pm'),
(2, 'gautham', '7200714723', 'gauthamrg@gmail.com', '2016-08-29', 1, '2016-08-29 04:58:40pm'),
(3, 'sudhakarq', '9842972047', 'asdfuisadf@asdf.com', '2016-08-29', 2, '2016-08-29 05:12:11pm'),
(4, 'kishore', '752232552', 'kishore@gmail.com', '2016-08-29', 2, '2016-08-29 05:15:17pm'),
(6, 'sudhaka', '9842972047', 'ausdhakar@live.in', '2016-08-30', 1, '2016-08-30 07:46:22am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `institution/company` varchar(255) NOT NULL,
  `total_refered_count` int(50) NOT NULL,
  `total_paid_count` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `catagory`, `institution/company`, `total_refered_count`, `total_paid_count`) VALUES
(1, 'asudhakar@live.in', 'sudhakar', 'p.nandhu', 'student', 'KIOT', 4, 0),
(2, 'rubak@gmail.com', 'rubak', '123456', 'Student', 'ssclg', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reference_list`
--
ALTER TABLE `reference_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reference_list`
--
ALTER TABLE `reference_list`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
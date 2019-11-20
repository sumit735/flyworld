-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 11:58 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flyworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `pickupbooking`
--

CREATE TABLE `pickupbooking` (
  `id` int(11) NOT NULL,
  `first` text NOT NULL,
  `last` text NOT NULL,
  `mob` int(11) NOT NULL,
  `altmob` int(11) NOT NULL,
  `source` text NOT NULL,
  `destination` text NOT NULL,
  `city` text NOT NULL,
  `passenger` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `fullname` text NOT NULL,
  `emailid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickupbooking`
--

INSERT INTO `pickupbooking` (`id`, `first`, `last`, `mob`, `altmob`, `source`, `destination`, `city`, `passenger`, `date`, `fullname`, `emailid`) VALUES
(1, 'satya', 'prakash', 2147483647, 2147483647, 'Railway Station', 'cuttack', 'bbs', 3, '11/29/2019', 'satya prakash', 'sumitkumar1999@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pickupbooking`
--
ALTER TABLE `pickupbooking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pickupbooking`
--
ALTER TABLE `pickupbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

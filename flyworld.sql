-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 10:17 AM
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
-- Table structure for table `luxurybooking`
--

CREATE TABLE `luxurybooking` (
  `id` int(11) NOT NULL,
  `first` text NOT NULL,
  `last` text NOT NULL,
  `mob` int(11) NOT NULL,
  `altmob` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `passenger` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `fullname` text NOT NULL,
  `emailid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `weddingbooking`
--

CREATE TABLE `weddingbooking` (
  `id` int(11) NOT NULL,
  `first` text NOT NULL,
  `last` text NOT NULL,
  `mob` int(11) NOT NULL,
  `altmob` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `passenger` int(11) NOT NULL,
  `cartype` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `fullname` text NOT NULL,
  `emailid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `luxurybooking`
--
ALTER TABLE `luxurybooking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `luxurybooking`
--
ALTER TABLE `luxurybooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

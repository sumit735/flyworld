-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 08:33 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

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
-- Table structure for table `featured_odisha`
--

CREATE TABLE `featured_odisha` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_odisha`
--

INSERT INTO `featured_odisha` (`id`, `name`, `details`, `image`, `price`) VALUES
(4, 'PURI - KONARK - SAKHIGOPAL', 'Puri is a city and a Municipality in the state of Odisha in eastern India. It is the district headquarters of Puri district and is situated on the Bay of Bengal, 60 kilometres south of the state capital of Bhubaneswar', 'images/puri.jpg', 2500),
(5, 'PURI - KONARK - RAMCHANDI', 'Konark is a medium town in the Puri district in the state of Odisha, India. It lies on the coast by the Bay of Bengal, 60 kilometers from the capital of the state, Bhubaneswar. It is the site of the 7th-century Sun Temple, also known as the Black Pagoda, built in black granite during the reign of Narasimhadeva-I', 'images/puri.jpg', 2500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `featured_odisha`
--
ALTER TABLE `featured_odisha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `featured_odisha`
--
ALTER TABLE `featured_odisha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

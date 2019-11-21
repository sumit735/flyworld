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
-- Table structure for table `featured_india`
--

CREATE TABLE `featured_india` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_india`
--

INSERT INTO `featured_india` (`id`, `name`, `details`, `image`, `price`) VALUES
(1, 'KATRA - GOLDEN TEMPLE - WAGHA BORDER', 'Vaishno Devi, also known as Mata Rani, Trikuta and Vaishnavi, is a manifestation of the Hindu Goddess Mata Adi Shakti/Adi Parashakti. The words \"Maa\" and \"Mata\" are commonly used in India for mother, and thus are often heavily used in connection with Vaishno Devi.', 'images/v.jpg', 15000),
(2, 'VAISHNODEVI - GOLDEN TEMPLE - WAGHA BORDER', 'Vaishno Devi, also known as Mata Rani, Trikuta and Vaishnavi, is a manifestation of the Hindu Goddess Mata Adi Shakti/Adi Parashakti. The words \"Maa\" and \"Mata\" are commonly used in India for mother, and thus are often heavily used in connection with Vaishno Devi.', 'images/g.jpg', 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `featured_india`
--
ALTER TABLE `featured_india`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `featured_india`
--
ALTER TABLE `featured_india`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

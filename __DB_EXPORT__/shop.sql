-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2021 at 03:26 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `dresses`
--

CREATE TABLE `dresses` (
  `id` int(11) NOT NULL,
  `model` varchar(20) NOT NULL,
  `size` tinyint(4) NOT NULL,
  `color` varchar(20) NOT NULL,
  `fabric` varchar(50) NOT NULL,
  `availability` tinyint(4) NOT NULL,
  `stock` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dresses`
--

INSERT INTO `dresses` (`id`, `model`, `size`, `color`, `fabric`, `availability`, `stock`) VALUES
(1, 'giuditta', 9, 'red', 'cotton', 1, 10),
(2, 'giuditta', 10, 'red', 'cotton', 1, 15),
(3, 'giuditta', 11, 'red', 'cotton', 0, 1),
(4, 'giuditta', 9, 'yellow', 'cotton', 1, 10),
(5, 'giuditta', 10, 'yellow', 'cotton', 1, 15),
(6, 'giuditta', 11, 'yellow', 'cotton', 0, 1),
(7, 'gelsomina', 9, 'red', 'linen', 1, 10),
(8, 'gelsomina', 10, 'red', 'linen', 1, 15),
(9, 'gelsomina', 11, 'red', 'linen', 0, 1),
(10, 'gelsomina', 9, 'yellow', 'linen', 1, 10),
(11, 'gelsomina', 10, 'yellow', 'linen', 1, 15),
(12, 'gelsomina', 11, 'yellow', 'linen', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dresses`
--
ALTER TABLE `dresses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dresses`
--
ALTER TABLE `dresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

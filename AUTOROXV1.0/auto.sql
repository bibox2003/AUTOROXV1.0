-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 07:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `gender`, `password`) VALUES
(1, 'rwigamba', 'remy', 'viobiboris12@gmail.com', 'M', 'kigali');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carid` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carid`, `id`, `name`, `model`, `make`, `year`, `size`, `transmission`) VALUES
(2, NULL, 'toyota', 'hjhjj', 'jhhjhjk', 7689, 'ytui', 'ytuio'),
(3, 4, 'toyota', 'hjhjj', 'jhhjhjk', 2431, '45', 'ytrweq'),
(4, 5, 'toyota', 'fghjkl', 'uityuio', 2010, 'dfghjk', 'oato'),
(5, 5, 'hiace', 'van', 'toyota', 2010, '14 seats', 'manual'),
(6, 5, 'toyota', 'benz', 'toyota', 2010, '3 saets', 'manual'),
(7, 5, 'toyota', 'benz', 'toyota', 2010, '3 saets', 'manual'),
(8, 1, 'toyota', 'mazda', 'hyundai', 2010, '4 seats', 'manual'),
(9, 1, 'toyota', 'hjhjj', 'hyundai', 34521, '14 seats', 'manual'),
(12, 1, 'toyota', 'hjhjj', 'jhhjhjk', 7689, '14 seats', 'manual'),
(13, 1, 'toyota', 'hjhjj', 'jhhjhjk', 7689, '14 seats', 'manual'),
(14, 1, 'toyota', 'hjhjj', 'jhhjhjk', 7689, '14 seats', 'manual'),
(15, 1, 'toyota', 'hjhjj', 'jhhjhjk', 7689, '14 seats', 'manual'),
(16, 1, 'toyota', 'hjhjj', 'jhhjhjk', 7689, '14 seats', 'manual'),
(17, 1, 'toyota', 'hjhjj', 'jhhjhjk', 7689, '14 seats', 'manual'),
(18, 1, 'toyota', 'hjhjj', 'jhhjhjk', 7689, '14 seats', 'manual');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `cid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telnbr` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`cid`, `username`, `email`, `telnbr`, `comment`, `created_at`) VALUES
(1, 'bio', 'viobiboris12@gmail.com', '0788317867', 'good', '2024-01-06 18:22:14'),
(2, 'bio', 'viobiboris12@gmail.com', '0788317867', 'good', '2024-01-06 18:22:50'),
(3, 'bio', 'viobiboris12@gmail.com', '0788317867', 'good', '2024-01-06 18:24:59'),
(4, 'bio', 'viobiboris12@gmail.com', '0788317867', 'good', '2024-01-06 18:28:17'),
(5, 'bio', 'viobiboris12@gmail.com', '0788317867', 'good', '2024-01-06 18:30:22'),
(6, 'bio', 'viobiboris12@gmail.com', '0788317867', 'good', '2024-01-06 18:31:45'),
(7, 'bio', 'viobiboris12@gmail.com', '0788317867', 'good', '2024-01-06 18:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `firstname`, `lastname`, `gender`, `password`, `email`, `province`, `district`, `dob`) VALUES
(1, 'rwigamba', 'remy', 'M', 'kigali12', 'viobiboris12@gmail.com', 'kigali', 'kicukiro', '0000-00-00'),
(4, 'rwigamba', 'remy', 'F', 'oprty', 'viobiboris12@gmail.com', '', '', '0000-00-00'),
(5, '', '', '', 'kigali12', 'boris12@gmail.com', 'north', 'nyga', '2024-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `mechanics`
--

CREATE TABLE `mechanics` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `specialization` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mechanics`
--

INSERT INTO `mechanics` (`id`, `firstname`, `lastname`, `gender`, `password`, `email`, `specialization`) VALUES
(6, 'rwigamba', 'remy', 'M', 'kigali12', 'viobiboris12@gmail.com', 'engine '),
(7, 'rwigamba', 'remy', 'M', 'kigali13', 'viobiboris12@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanics`
--
ALTER TABLE `mechanics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mechanics`
--
ALTER TABLE `mechanics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`id`) REFERENCES `drivers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

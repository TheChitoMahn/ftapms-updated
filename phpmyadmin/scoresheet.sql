-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 11:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fta pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `scoresheet`
--

CREATE TABLE `scoresheet` (
  `id` int(11) NOT NULL,
  `orgname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `p_contact` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `p_phone` int(11) NOT NULL,
  `dateofassessment` date NOT NULL,
  `carriedoutby` varchar(255) NOT NULL,
  `strategic` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `risk` int(11) NOT NULL,
  `summary` int(11) NOT NULL,
  `UID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scoresheet`
--

INSERT INTO `scoresheet` (`id`, `orgname`, `address`, `p_contact`, `p_email`, `p_phone`, `dateofassessment`, `carriedoutby`, `strategic`, `capacity`, `risk`, `summary`, `UID`) VALUES
(2, 'Chap Chap Shuttle', 'P.O. Box 581 20200 Kericho', 'Joab', 'j.rogony@fairtradeafrica.net', 714742526, '2022-09-15', 'Joab', 60, 48, 53, 160, 291);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scoresheet`
--
ALTER TABLE `scoresheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scoresheet`
--
ALTER TABLE `scoresheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

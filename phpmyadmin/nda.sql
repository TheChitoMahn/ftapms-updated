-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 03:01 PM
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
-- Table structure for table `nda`
--

CREATE TABLE `nda` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `partner` varchar(255) NOT NULL,
  `proposal` varchar(255) NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `termination` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `timelimit` varchar(255) NOT NULL,
  `goals` longtext NOT NULL,
  `w_name` varchar(255) NOT NULL,
  `w_designation` varchar(255) NOT NULL,
  `w_address` varchar(255) NOT NULL,
  `fta_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nda`
--

INSERT INTO `nda` (`id`, `date`, `name`, `partner`, `proposal`, `delivery`, `termination`, `country`, `time`, `timelimit`, `goals`, `w_name`, `w_designation`, `w_address`, `fta_name`) VALUES
(4, '2022-06-02', 'Chap Chap Shuttle', 'Washington', 'KING', '5 weeks', '2022-06-15', 'Cape town', '1 week', '3 days', 'a', 'GoGo', 'Jaguar', 'P.O. Box 581 20200 Kericho', 'King');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nda`
--
ALTER TABLE `nda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nda`
--
ALTER TABLE `nda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

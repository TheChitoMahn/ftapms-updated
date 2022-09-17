-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 11:01 AM
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
-- Table structure for table `ddchecklist`
--

CREATE TABLE `ddchecklist` (
  `id` int(11) NOT NULL,
  `orgname` varchar(255) NOT NULL,
  `bginfo` varchar(255) NOT NULL,
  `financeSTD` varchar(255) NOT NULL,
  `Governance` varchar(255) NOT NULL,
  `two` varchar(255) NOT NULL,
  `three` varchar(255) NOT NULL,
  `four` varchar(255) NOT NULL,
  `five` varchar(255) NOT NULL,
  `six` varchar(255) NOT NULL,
  `funding` varchar(255) NOT NULL,
  `management` varchar(255) NOT NULL,
  `eight` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ddchecklist`
--

INSERT INTO `ddchecklist` (`id`, `orgname`, `bginfo`, `financeSTD`, `Governance`, `two`, `three`, `four`, `five`, `six`, `funding`, `management`, `eight`) VALUES
(1, 'A', 'May become Acceptable', 'Acceptable', 'Insufficient Info', 'May become Acceptable', 'Acceptable', 'May become Acceptable', 'Not Acceptable', 'Not Acceptable', 'Acceptable', 'Acceptable', 'Acceptable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ddchecklist`
--
ALTER TABLE `ddchecklist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ddchecklist`
--
ALTER TABLE `ddchecklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

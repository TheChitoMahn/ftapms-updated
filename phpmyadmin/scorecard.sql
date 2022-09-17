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
-- Table structure for table `scorecard`
--

CREATE TABLE `scorecard` (
  `id` int(11) NOT NULL,
  `orgname` varchar(255) NOT NULL,
  `dev1` int(11) NOT NULL,
  `dev2` int(11) NOT NULL,
  `dev3` int(11) NOT NULL,
  `dev4` int(11) NOT NULL,
  `dev5` int(11) NOT NULL,
  `devTotal` int(11) NOT NULL,
  `biz1` int(11) NOT NULL,
  `biz2` int(11) NOT NULL,
  `biz3` int(11) NOT NULL,
  `biztotal` int(11) NOT NULL,
  `gov1` int(11) NOT NULL,
  `gov2` int(11) NOT NULL,
  `govtotal` int(11) NOT NULL,
  `rsk1` int(11) NOT NULL,
  `rsk2` int(11) NOT NULL,
  `rsk3` int(11) NOT NULL,
  `rsk4` int(11) NOT NULL,
  `rsk5` int(11) NOT NULL,
  `rsktotal` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scorecard`
--

INSERT INTO `scorecard` (`id`, `orgname`, `dev1`, `dev2`, `dev3`, `dev4`, `dev5`, `devTotal`, `biz1`, `biz2`, `biz3`, `biztotal`, `gov1`, `gov2`, `govtotal`, `rsk1`, `rsk2`, `rsk3`, `rsk4`, `rsk5`, `rsktotal`, `total`) VALUES
(1, 'A', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scorecard`
--
ALTER TABLE `scorecard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scorecard`
--
ALTER TABLE `scorecard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

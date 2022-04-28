-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 11:52 AM
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
-- Table structure for table `users_approved`
--

CREATE TABLE `users_approved` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `companyemail` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_approved`
--

INSERT INTO `users_approved` (`id`, `fullname`, `companyemail`, `department`, `password`) VALUES
(1, 'Joab Rogony', 'jobjesus22@gmail.com', 'IT', '$2y$10$UEjrDWoB5xOWG.6QvmJfw.n88dTNCPSK6Y71XMAxjN3TtMXjHn5hu'),
(5, 'Jim Carry', 'jimcarrey@gmail.com', 'admin', '$2y$10$6AUmIOqkNDcHigyEjxmQ6OryHfYqoErcti/Ryia4G3eERuJ41evfq'),
(6, 'Brian Songok Revised', 'wandui@fairtradeafrica.com', 'admin', '$2y$10$.n0iZzE.RNEaks8MzbCusu7h/.sYWwac.19Uyuz61o1uMeFH/c3vi'),
(7, 'Brian Songok', 'brian@fairtradeafrica.com', 'admin', '$2y$10$OgnrqLR2PbLr3KB0iWjju.W89NCscFfsw7Uv2Gtc7GQxIXu8aJiEG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_approved`
--
ALTER TABLE `users_approved`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_approved`
--
ALTER TABLE `users_approved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

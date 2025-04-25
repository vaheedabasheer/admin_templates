-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2025 at 05:27 AM
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
-- Database: `admin_template`
--

-- --------------------------------------------------------

--
-- Table structure for table `fileup`
--

CREATE TABLE `fileup` (
  `fid` int(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `rid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fileup`
--

INSERT INTO `fileup` (`fid`, `file`, `rid`) VALUES
(1, '1932708742.jpeg', 2),
(2, '172854767.jpeg', 1),
(3, '905361331.jpeg', 3),
(4, '1065298813.jpg', 6),
(5, '20643310.jpeg', 7),
(6, '283813484.jpeg', 5),
(7, '117944621.png', 8);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rid` int(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `rid`, `type`) VALUES
(1, 'fareeda@gmail.com', 'lamih', 1, 'staff'),
(2, 'anupama@gmail.com', 'anu', 2, 'admin'),
(3, 'dd@gmail.com', 'abc', 3, 'staff'),
(4, 'dd@gmail.com', 'abc', 4, 'staff'),
(5, 'aravind@gmail.com', 'jkm', 5, 'staff'),
(6, 'ayaan@gmail.com', 'abc', 6, 'staff'),
(7, 'a@gmail.com', 'abc', 7, 'admin'),
(8, 'j@gmail.com', 'jm', 8, 'staff'),
(9, 'ayaan@gmail.com', 'fff', 9, 'staff'),
(10, 'dd@gmail.com', 'ko', 10, 'staff'),
(11, 'dd@gmail.com', 'df', 11, 'staff'),
(12, 'ayaan@gmail.com', 'ww', 12, 'admin'),
(13, 'anupama@gmail.com', 'ff', 13, 'admin'),
(14, 'ayaan@gmail.com', 'dfsdf', 14, 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `rid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rid`, `name`, `dob`, `gender`, `status`) VALUES
(1, 'fareeda', '1999-02-23', 'female', 'Approved'),
(2, 'anu', '2019-09-13', 'female', 'Approved'),
(3, 'djm', '8898-07-09', 'male', 'Approved'),
(4, 'djm', '8898-07-09', 'male', 'Approved'),
(5, 'lm', '9999-09-09', 'male', 'Approved'),
(6, 'abc', '9999-09-09', 'female', 'Approved'),
(7, 'abc', '1991-12-12', 'female', 'Approved'),
(8, 'jami', '9888-08-09', 'female', 'Approved'),
(9, 'f', '3333-03-03', 'male', 'pending'),
(10, 'kp', '9999-01-09', 'female', 'pending'),
(11, 'lm', '3333-03-31', 'female', 'pending'),
(12, 'vaheeda koodathamkandi', '2222-02-02', 'male', 'pending'),
(13, 'f', '4444-05-04', 'female', 'Approved'),
(14, 'vaheeda koodathamkandi', '1111-11-12', 'female', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `sid` int(100) NOT NULL,
  `rid` int(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL,
  `job` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`sid`, `rid`, `month`, `salary`, `job`) VALUES
(1, 1, 'january', 1200, 'sales'),
(2, 8, '2025-01', 1200, 'sales'),
(3, 5, '2025-01', 12000, 'sales'),
(4, 8, '2222-02', 67788, 'sales');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fileup`
--
ALTER TABLE `fileup`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fileup`
--
ALTER TABLE `fileup`
  MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

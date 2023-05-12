-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 02:23 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questions`
--

-- --------------------------------------------------------

--
-- Table structure for table `a-series`
--

CREATE TABLE `a-series` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `a1` text NOT NULL,
  `a2` text NOT NULL,
  `a3` text NOT NULL,
  `a4` text NOT NULL,
  `a5` text NOT NULL,
  `a6` text NOT NULL,
  `a7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a-series`
--

INSERT INTO `a-series` (`id`, `username`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`) VALUES
(1, 'shahan', '2', '1', '3', '2', '1', '2', '2'),
(2, 'Kashan', '3', '0', '3', '0', '3', '0', '3'),
(3, 'shayan', '3', '0', '3', '0', '2', '0', '0'),
(4, 'taqdees', '3', '3', '3', '3', '3', '3', '3'),
(5, 'ali', '0', '0', '0', '0', '0', '0', '0'),
(6, 'ali', '0', '0', '0', '0', '0', '0', '0'),
(7, 'zain', '1', '2', '0', '0', '0', '2', '1'),
(8, 'kashif', '0', '0', '3', '0', '3', '0', '2'),
(9, 'ali', '0', '3', '0', '3', '0', '2', '0'),
(10, 'ali', '0', '3', '3', '0', '3', '0', '0'),
(11, 'shahan', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `d-series`
--

CREATE TABLE `d-series` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `d1` text NOT NULL,
  `d2` text NOT NULL,
  `d3` text NOT NULL,
  `d4` text NOT NULL,
  `d5` text NOT NULL,
  `d6` text NOT NULL,
  `d7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `d-series`
--

INSERT INTO `d-series` (`id`, `username`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`) VALUES
(1, 'shahan', '1', '3', '1', '1', '1', '1', '4'),
(2, 'shahan', '1', '3', '1', '1', '1', '1', '4'),
(3, 'shahan', '1', '3', '1', '1', '1', '1', '4'),
(4, 'Kashan', '0', '3', '0', '3', '0', '3', '0'),
(5, 'shayan', '2', '3', '0', '2', '0', '3', '0'),
(6, 'taqdees', '3', '3', '3', '3', '3', '3', '3'),
(7, 'ali', '2', '3', '0', '0', '0', '0', '0'),
(8, 'ali', '0', '0', '0', '0', '0', '0', '0'),
(9, 'kashif ', '0', '0', '0', '0', '0', '0', '0'),
(10, 'Ayaan', '0', '0', '0', '0', '0', '0', '0'),
(11, 'Ayaan', '0', '0', '0', '0', '0', '0', '0'),
(12, 'Ayaan', '0', '0', '0', '0', '0', '0', '0'),
(13, 'okasha', '0', '', '3', '', '', '', ''),
(14, 'zain', '0', '0', '0', '0', '2', '2', '0'),
(15, 'kashif', '0', '0', '1', '0', '0', '2', '0'),
(16, 'ali', '0', '0', '3', '0', '3', '0', '3'),
(17, 'ali', '1', '0', '0', '2', '3', '3', '0'),
(18, 'shahan', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `lifescale`
--

CREATE TABLE `lifescale` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `ls1` text NOT NULL,
  `ls2` text NOT NULL,
  `ls3` text NOT NULL,
  `ls4` text NOT NULL,
  `ls5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lifescale`
--

INSERT INTO `lifescale` (`id`, `username`, `ls1`, `ls2`, `ls3`, `ls4`, `ls5`) VALUES
(1, 'ali', '7', '1', '3', '5', '7'),
(2, 'shahan', '1', '3', '1', '7', '7'),
(3, 'Kashan', '5', '2', '1', '7', '3'),
(4, 'shayan', '7', '2', '2', '7', '2'),
(5, 'taqdees', '7', '7', '7', '7', '7'),
(6, 'ali', '1', '1', '1', '1', '1'),
(7, 'ali', '1', '1', '1', '1', '1'),
(8, 'kashif', '7', '2', '1', '7', '1'),
(9, 'ali', '1', '6', '', '', ''),
(10, 'ali', '1', '7', '5', '7', '7');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `dob` text NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`id`, `name`, `dob`, `email`, `gender`) VALUES
(1, 'ali', '', 'ali@gmail.com', 'Male'),
(2, 'shahan', '', 'SHAH@GMAIL.COM', 'Male'),
(3, 'Kashan', '1998-02-12', 'kashaan@gmail.com', 'Male'),
(4, 'shayan', '2023-12-31', 'shayan123@gmail.com', 'Male'),
(5, 'taqdees', '2023-12-31', 'taqdees@gmail.com', 'Male'),
(6, 'ali', '2023-12-31', 'ali@gmil.com', 'Male'),
(7, 'ali', '1998-02-10', 'ali@gmail.com', 'Male'),
(8, 'kashif ', '2023-01-25', 'ka@gmail.com', 'Male'),
(9, 'Ayaan', '2023-01-03', 'ayan@gmail.com', 'Male'),
(10, 'okasha', '1998-11-12', 'okasha@gmail.com', 'Male'),
(11, 'zain', '1998-02-10', 'zain@gmail.com', 'Male'),
(12, 'kashif', '1998-02-12', 'kashif@mai.com', 'Male'),
(13, 'ali', '7777-07-25', 'ali@gmail.com', 'Male'),
(14, 'ali', '1988-01-12', 'ali@gmail.com', 'Male'),
(15, 'shahan', '1998-02-12', 'shahan@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `workplacestress`
--

CREATE TABLE `workplacestress` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `ws1` text NOT NULL,
  `ws2` text NOT NULL,
  `ws3` text NOT NULL,
  `ws4` text NOT NULL,
  `ws5` text NOT NULL,
  `ws6` text NOT NULL,
  `ws7` text NOT NULL,
  `ws8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workplacestress`
--

INSERT INTO `workplacestress` (`id`, `username`, `ws1`, `ws2`, `ws3`, `ws4`, `ws5`, `ws6`, `ws7`, `ws8`) VALUES
(1, 'ali', '1', '5', '1', '1', '1', '1', '1', '1'),
(2, 'shahan', '1', '5', '1', '5', '1', '5', '1', '1'),
(3, 'Kashan', '3', '5', '1', '5', '3', '5', '3', '1'),
(4, 'shayan', '5', '2', '4', '4', '1', '1', '5', '1'),
(5, 'taqdees', '5', '5', '5', '5', '5', '1', '1', '1'),
(6, 'ali', '1', '1', '1', '1', '1', '5', '5', '5'),
(7, 'ali', '1', '1', '1', '1', '1', '5', '5', '5'),
(8, 'kashif', '2', '4', '', '1', '2', '5', '1', '5'),
(9, 'ali', '1', '1', '1', '', '', '', '', ''),
(10, 'ali', '5', '4', '5', '5', '4', '3', '3', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a-series`
--
ALTER TABLE `a-series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d-series`
--
ALTER TABLE `d-series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lifescale`
--
ALTER TABLE `lifescale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workplacestress`
--
ALTER TABLE `workplacestress`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a-series`
--
ALTER TABLE `a-series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `d-series`
--
ALTER TABLE `d-series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lifescale`
--
ALTER TABLE `lifescale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `workplacestress`
--
ALTER TABLE `workplacestress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 01:49 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `akash`
--

CREATE TABLE `akash` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `subCode` int(10) NOT NULL,
  `subjectName` varchar(10) NOT NULL,
  `t` int(5) NOT NULL,
  `p` int(5) NOT NULL,
  `c` int(5) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `point` int(5) NOT NULL,
  `is_active` int(1) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akash`
--

INSERT INTO `akash` (`id`, `subCode`, `subjectName`, `t`, `p`, `c`, `grade`, `point`, `is_active`) VALUES
(00000000001, 1234, 'english', 0, 0, 0, '', 0, 0),
(00000000002, 12345, 'Chemistry', 3, 4, 5, 'A+', 4, 0),
(00000000003, 12345, 'Programmin', 2, 2, 2, 'A+', 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akash`
--
ALTER TABLE `akash`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akash`
--
ALTER TABLE `akash`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 11:20 AM
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
  `sroll` varchar(50) NOT NULL,
  `subCode` int(10) NOT NULL,
  `subjectName` varchar(50) NOT NULL,
  `t` int(5) NOT NULL,
  `p` int(5) NOT NULL,
  `c` int(5) NOT NULL,
  `mark` varchar(50) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `point` varchar(5) NOT NULL,
  `is_active` int(1) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akash`
--

INSERT INTO `akash` (`id`, `sroll`, `subCode`, `subjectName`, `t`, `p`, `c`, `mark`, `grade`, `point`, `is_active`) VALUES
(00000000012, '348036', 4243, 'Programmin', 4, 2, 3, '56', 'B-', '2.75', 0),
(00000000013, '348036', 3233, 'Sequential', 3, 4, 3, '70', 'B+', '3.25', 0),
(00000000014, '348036', 3233, 'Surveillan', 3, 2, 5, '54', 'C+', '2.5', 0),
(00000000015, '348036', 123444, 'Accounting', 3, 4, 3, '76', 'A', '3.75', 0),
(00000000016, '348036', 54433, 'Web develo', 4, 4, 4, '80', 'A', '3.75', 0),
(00000000018, '348036', 6346, 'Operating ', 4, 5, 4, '76', 'A', '3.75', 0),
(00000000019, '348010', 66658, 'Operating system', 5, 5, 4, '76', 'A', '3.75', 0),
(00000000020, '348010', 45454, 'Programming in java', 5, 6, 4, '56', 'B-', '2.75', 0),
(00000000021, '348010', 21323, 'Surveillance security system', 5, 4, 4, '78', 'A', '3.75', 0),
(00000000022, '348021', 74364, 'Programming in java', 3, 4, 6, '70', 'B+', '3.25', 0),
(00000000023, '348021', 21323, 'Sequential logic system', 3, 3, 3, '87', 'A+', '4', 0),
(00000000024, '348021', 21323, 'Surveillance security system', 3, 3, 4, '78', 'A', '3.75', 0),
(00000000025, '74635', 73475465, 'Programming in java', 4, 5, 3, '76', 'A', '3.75', 0),
(00000000026, '924266', 21323, 'Programming in java', 6, 4, 5, '78', 'A', '3.75', 0),
(00000000027, '10101010', 32123, 'PCB calcite making', 6, 4, 5, '60', 'B-', '2.75', 0),
(00000000028, '10101010', 2344, 'Programming in java', 6, 4, 5, '80', 'A', '3.75', 0),
(00000000029, '10101010', 2344, 'Sequential logic system', 6, 4, 5, '70', 'B+', '3.25', 0),
(00000000030, '10101010', 32123, 'Accounting and theory', 6, 4, 5, '54', 'C+', '2.5', 0),
(00000000031, '10101010', 32123, 'Operating system', 6, 4, 5, '77', 'A', '3.75', 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `sname` varchar(50) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `reg` varchar(50) NOT NULL,
  `ssession` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `sname`, `rollno`, `reg`, `ssession`) VALUES
(00000000006, 'Satyajit Biswas', '924266', '875794', '2016-2017'),
(00000000007, 'Satyajit Biswas', '924266', '875794', '2016-2017'),
(00000000008, 'Satyajit Biswas', '924266', '875794', '2016-2017'),
(00000000009, 'test', '924266', '875794', '2016-2017'),
(00000000010, 'myNme', '10101010', '10000000000', '2016-2017'),
(00000000011, 'testResult', '123456', '875794', '2016-2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akash`
--
ALTER TABLE `akash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akash`
--
ALTER TABLE `akash`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

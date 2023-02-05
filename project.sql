-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:5001
-- Generation Time: Feb 05, 2023 at 07:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `job_id` int(4) DEFAULT NULL,
  `s_mail` varchar(100) DEFAULT NULL,
  `c_mail` varchar(100) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `app_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`job_id`, `s_mail`, `c_mail`, `status`, `app_id`) VALUES
(3, 'aaaa@gmail.com', 'aaaa@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `companys`
--

CREATE TABLE `companys` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `location` varchar(50) NOT NULL,
  `ceo` varchar(100) NOT NULL,
  `cto` varchar(50) NOT NULL,
  `hr` varchar(100) NOT NULL,
  `worth` int(10) NOT NULL,
  `found` varchar(5) NOT NULL,
  `founder` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companys`
--

INSERT INTO `companys` (`name`, `email`, `pwd`, `phone`, `location`, `ceo`, `cto`, `hr`, `worth`, `found`, `founder`) VALUES
('w', 'aaaa@gmail.com', '123456', 43533155, 'delhi', 'sc', 'sc', 'asc', 12, '2001', 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dob` date NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` int(4) NOT NULL,
  `cpi` int(2) NOT NULL,
  `twp` varchar(5) NOT NULL,
  `tenp` varchar(5) NOT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `degree` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `email`, `dob`, `branch`, `year`, `cpi`, `twp`, `tenp`, `pwd`, `phone`, `degree`) VALUES
('shubham', 'aaa@gmail.com', '2023-01-01', 'IT', 2012, 5, '84', '84', 'Shubham', 2147483647, 'MCA'),
('kar', 'aaaa@gmail.com', '2023-01-06', 'CSE', 2508, 5, '84', '84', '123456', 2147483647, 'B.Tech');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `company_name` varchar(100) DEFAULT NULL,
  `job_title` varchar(100) NOT NULL,
  `salary` int(7) NOT NULL,
  `location` varchar(80) NOT NULL,
  `deadline` date NOT NULL,
  `bond` varchar(20) NOT NULL,
  `age_e` int(5) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `cpi_e` int(5) NOT NULL,
  `year_e` int(5) NOT NULL,
  `12p_e` int(5) NOT NULL,
  `10p_e` int(5) NOT NULL,
  `job_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`company_name`, `job_title`, `salary`, `location`, `deadline`, `bond`, `age_e`, `degree`, `cpi_e`, `year_e`, `12p_e`, `10p_e`, `job_id`) VALUES
('w', 'as', 23, 'delhi', '2023-01-13', '3', 23, 'B.Tech', 5, 23, 84, 84, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `app_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `job_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

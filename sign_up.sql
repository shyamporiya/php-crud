-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 08:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_structure`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `unique_id` int(11) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `mothers_name` varchar(25) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `address` varchar(25) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `state` varchar(11) NOT NULL,
  `city` varchar(11) NOT NULL,
  `dob` text NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `email_id` varchar(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `date_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`unique_id`, `f_name`, `l_name`, `mothers_name`, `father_name`, `address`, `gender`, `state`, `city`, `dob`, `pincode`, `email_id`, `password`, `status`, `date_time`) VALUES
(1, 'Erich Vinson', 'Donovan Lane', 'Armand Joyner', 'Otto Simpson', 'Aliquid lorem maxime', 'male', '0', '3', 'Minim veniam dolore', 'Quod sit d', 'zuhec@maili', 'Pa$$w0rd!', '1', '04/03/2023 00:13:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

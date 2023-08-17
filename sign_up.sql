-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 11:42 PM
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
-- Table structure for table `sign_ups`
--

CREATE TABLE `sign_ups` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` int(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_ups`
--

INSERT INTO `sign_ups` (`id`, `fname`, `lname`, `email`, `mobile`, `password`, `image`, `status`, `date_time`) VALUES
(1, 'test', 'admin', '', 0, '', '', 1, '2023-08-17 00:02:25'),
(2, 'helo', 'helo', '', 0, '', 'uploads/Screenshot_20230212_140322.png', 1, '2023-08-17 00:02:25'),
(3, 'Hamilton Curry', 'James Wilson', 'dozomys@mailinator.c', 0, '', '', 1, '2023-08-17 00:02:25'),
(4, 'Venus Levy', 'Carly tst', 'tyloduhabo@mailinato', 0, '', '', 1, '2023-08-17 00:02:25'),
(5, 'Venus Levy', 'Carly Collins', 'tyloduhabo@mailinato', 0, '', '', 1, '2023-08-17 00:02:25'),
(6, 'Lila Jackson', 'Demetrius Howell', 'zisyta@mailinator.co', 0, '', '', 1, '2023-08-17 00:02:25'),
(7, 'Brynn Marshall', 'Savannah Shaffer', 'pegiwituva@mailinato', 0, '', '', 1, '2023-08-17 00:02:25'),
(8, 'Callum Nunez', 'Sierra Fischer', 'rahekat@mailinator.c', 0, '', '', 1, '2023-08-17 00:02:25'),
(9, 'Kirby Webster', 'Benjamin Flowers', 'xenidaho@mailinator.', 0, '', '', 1, '2023-08-17 00:02:48'),
(10, 'Melissa Mcdowell', 'Nicole Bradshaw', 'tobepyxyt@mailinator', 0, '', '', 1, '2023-08-17 00:10:18'),
(11, 'Clark Meadows', 'Addison Merrill', 'jubo@mailinator.com', 0, 'Eu optio culpa qui', 'uploads/1131274.jpg', 1, '2023-08-17 21:58:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_ups`
--
ALTER TABLE `sign_ups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_ups`
--
ALTER TABLE `sign_ups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

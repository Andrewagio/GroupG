-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2025 at 04:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `memberID` varchar(20) NOT NULL,
  `program` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `name`, `contact`, `email`, `memberID`, `program`, `date`) VALUES
(1, 'Osei Asibey John', '0553388214', 'ostenetto@gmail.com', 'XCH9867', 'Sunday Service', '2025-03-08 08:14:58'),
(2, 'Osei Asibey John', '0553388214', 'ostenetto@gmail.com', 'XCH9867', 'Sunday Service', '2025-03-08 08:16:17'),
(3, 'Osei Asibey John', '0553388214', 'ostenetto@gmail.com', 'XCH9867', 'Friday Miracle and Annointing Service', '2025-03-08 08:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `messagefrom` varchar(70) NOT NULL,
  `messageto` varchar(20) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `message` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user`, `messagefrom`, `messageto`, `subject`, `message`, `date`) VALUES
(1, '', '1', 'Admin', 'Church enquiries', 'TESTING THE MESSAGE 123', '2025-04-04 12:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `memberID` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `access` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `memberID`, `username`, `password`, `email`, `contact`, `dob`, `address`, `access`, `gender`, `date`) VALUES
(1, 'Osei Asibey John', 'XCH9867', 'xbay', '827ccb0eea8a706c4c34a16891f84e7b', 'johnoseiz@gmail.com', '0596299182', '2025-01-08', 'AE-0754-3475', 'User', 'Male', '2025-03-08 07:40:58'),
(2, 'Augustine Ofosu', 'XCH2930', 'ostenetto', '25f9e794323b453885f5181f1b624d0b', 'ostenetto@gmail.com', '0596299182', '2025-03-08', 'AE-0754-3475', 'Admin', 'Male', '2025-03-08 14:40:27'),
(3, 'adwoa', 'XCH7997', 'adwoa', '81dc9bdb52d04dc20036dbd8313ed055', 'ostenetto@gmail.com', '0553388214', '2025-03-20', 'AE-0754-3475', 'Admin', 'Female', '2025-03-20 12:03:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

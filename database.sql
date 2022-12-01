-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2022 at 05:33 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u705067868_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Authers`
--

CREATE TABLE `Authers` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Authers`
--

INSERT INTO `Authers` (`ID`, `Name`, `created_date`, `updated_data`) VALUES
(1, 'Isak Azimov', '2022-11-30 10:51:41', '2022-11-30 10:51:41'),
(2, 'Alex Dem', '2022-11-30 10:51:41', '2022-11-30 10:51:41'),
(3, 'Isak Dem', '2022-11-30 10:51:41', '2022-11-30 10:51:41'),
(4, 'Jon Azimov', '2022-11-30 10:51:41', '2022-11-30 10:51:41'),
(5, '3', '2022-11-30 10:51:41', '2022-11-30 10:51:41'),
(6, 'Isak Azimov 1', '2022-11-30 10:51:41', '2022-11-30 10:51:41'),
(7, 'Isak Dem 1', '2022-11-30 10:51:41', '2022-11-30 10:51:41'),
(8, 'Jon Azimov 1', '2022-11-30 10:51:41', '2022-11-30 10:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE `Books` (
  `ID` int(11) NOT NULL,
  `auther_id` int(11) DEFAULT NULL,
  `BookName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`ID`, `auther_id`, `BookName`, `created_date`, `updated_data`) VALUES
(1, 1, 'End of spirit', '2022-11-30 10:51:41', '2022-11-30 10:51:41'),
(2, 2, 'Test', '2022-11-30 10:51:41', '2022-11-30 10:51:41'),
(3, 5, 'Standard', '2022-11-30 10:51:41', '2022-11-30 10:51:41'),
(4, 6, 'End of spirit 1', '2022-11-30 10:51:41', '2022-11-30 10:51:41'),
(5, 2, 'Test 22', '2022-11-30 10:51:41', '2022-11-30 10:51:41'),
(6, 7, 'End of spirit 2', '2022-11-30 10:51:41', '2022-11-30 10:51:41'),
(7, 5, 'Standard 2', '2022-11-30 10:51:41', '2022-11-30 10:51:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Authers`
--
ALTER TABLE `Authers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `auther_id` (`auther_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Authers`
--
ALTER TABLE `Authers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Books`
--
ALTER TABLE `Books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Books`
--
ALTER TABLE `Books`
  ADD CONSTRAINT `Books_ibfk_1` FOREIGN KEY (`auther_id`) REFERENCES `Authers` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

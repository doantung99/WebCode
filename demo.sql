-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 02:20 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `targets`
--

CREATE TABLE `targets` (
  `TargetID` int(10) NOT NULL,
  `IP` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Domain` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CompanyName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `targets`
--

INSERT INTO `targets` (`TargetID`, `IP`, `Domain`, `CompanyName`) VALUES
(1, '54.183.136.100', 'https://www.fpt-software.com/', 'FPT'),
(2, '118.69.201.208', 'https://www.fis.com.vn/', 'FPT'),
(3, '210.245.10.69', 'https://www.fpt.com.vn/', 'FPT'),
(4, '111.65.249.145', 'https://www.fptonline.net/', 'FPT'),
(5, '210.245.80.30', 'http://fpt.edu.vn', 'FPT'),
(6, '210.245.94.48', 'http://www.phanphoi.fpt.com.vn', 'FPT'),
(7, '45.32.43.88', 'http://frt.vn/', 'FPT'),
(8, '115.146.122.151', 'http://www.fpthanoi.com.vn/', 'FPT'),
(9, '113.164.235.52', 'http://www.vinaphone.com.vn/', 'VNPT'),
(10, '123.29.68.73', 'http://vnptmedia.vn/', 'VNPT'),
(11, '222.255.224.145', 'http://vnpti.vn/', 'VNPT'),
(12, '203.190.171.28', 'https://www.vietteltelecom.vn/', 'Viettel'),
(13, '203.190.170.225', 'http://viettel.com.vn/vi', 'Viettel'),
(14, '49.213.67.130', 'https://www.vng.com.vn/', 'VinaGame'),
(15, '117.103.197.90', 'https://www.vtcgame.vn/', 'VTCGame');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `duongdan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `duongdan`, `UserID`) VALUES
(11, 'upload/29597360_738850013170283_9182814181051538313_n.jpg', 1),
(12, 'upload/aaa.jpg', 0),
(13, 'upload/b.png', 0),
(18, '/upload/aaa.jpg', 0),
(19, '/upload/29597360_738850013170283_9182814181051538313_n.jpg', 0),
(20, '/upload/29597360_738850013170283_9182814181051538313_n.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(10) NOT NULL,
  `FullName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FullName`, `Username`, `Password`, `Email`) VALUES
(1, 'Doan Le Manh Tung  Asd', 'tungdlmhe130247', '123456789', 'tungdlm@fpt.vn'),
(2, 'Nguyen Anh Tuan', 'tuanna122', 'Nguyenanhtuan98', 'tuanna122@fpt.vn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `targets`
--
ALTER TABLE `targets`
  ADD PRIMARY KEY (`TargetID`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `targets`
--
ALTER TABLE `targets`
  MODIFY `TargetID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

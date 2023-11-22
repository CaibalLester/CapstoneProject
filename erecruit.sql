-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2023 at 03:36 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erecruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `aial`
--

CREATE TABLE `aial` (
  `nonlife` varchar(255) DEFAULT NULL,
  `life` varchar(255) DEFAULT NULL,
  `varlife` varchar(255) DEFAULT NULL,
  `accaAndHealth` varchar(255) DEFAULT NULL,
  `othercb` varchar(255) DEFAULT NULL,
  `othertb` varchar(255) DEFAULT NULL,
  `agencyname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `placeOfBirth` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `bloodType` varchar(5) DEFAULT NULL,
  `homeAddress` varchar(255) DEFAULT NULL,
  `mobileNo` varchar(15) DEFAULT NULL,
  `landline` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `othersCitizenship` varchar(255) DEFAULT NULL,
  `naturalizationInfo` varchar(255) DEFAULT NULL,
  `maritalStatus` varchar(20) DEFAULT NULL,
  `maidenName` varchar(255) DEFAULT NULL,
  `spouseName` varchar(255) DEFAULT NULL,
  `sssNo` varchar(20) DEFAULT NULL,
  `tin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aial`
--

INSERT INTO `aial` (`nonlife`, `life`, `varlife`, `accaAndHealth`, `othercb`, `othertb`, `agencyname`, `fname`, `nickname`, `birthdate`, `placeOfBirth`, `gender`, `bloodType`, `homeAddress`, `mobileNo`, `landline`, `email`, `citizenship`, `othersCitizenship`, `naturalizationInfo`, `maritalStatus`, `maidenName`, `spouseName`, `sssNo`, `tin`) VALUES
('N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
('N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '123', '123', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `lifechangerform`
--

CREATE TABLE `lifechangerform` (
  `id` int NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `preferredArea` varchar(255) DEFAULT NULL,
  `referral` varchar(255) DEFAULT NULL,
  `referralBy` varchar(255) DEFAULT NULL,
  `onlineAd` varchar(255) DEFAULT NULL,
  `walkIn` varchar(255) DEFAULT NULL,
  `othersRef` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `placeOfBirth` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `bloodType` varchar(255) DEFAULT NULL,
  `homeAddress` varchar(255) DEFAULT NULL,
  `mobileNo` varchar(255) DEFAULT NULL,
  `landline` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `othersCitizenship` varchar(255) DEFAULT NULL,
  `naturalizationInfo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'N/A',
  `maritalStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `maidenName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'N/A',
  `spouseName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'N/A',
  `sssNo` varchar(255) DEFAULT NULL,
  `tin` varchar(255) DEFAULT NULL,
  `lifeInsuranceExperience` varchar(50) DEFAULT NULL,
  `traditional` varchar(50) DEFAULT NULL,
  `variable` varchar(50) DEFAULT NULL,
  `recentInsuranceCompany` varchar(50) DEFAULT NULL,
  `highSchool` varchar(50) NOT NULL,
  `highSchoolCourse` varchar(50) NOT NULL,
  `highSchoolYear` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `collegeCourse` varchar(50) NOT NULL,
  `collegeYear` varchar(50) NOT NULL,
  `graduateSchool` varchar(50) NOT NULL,
  `graduateCourse` varchar(50) NOT NULL,
  `graduateYear` varchar(50) NOT NULL,
  `companyName1` varchar(50) NOT NULL,
  `position1` varchar(50) NOT NULL,
  `employmentFrom1` varchar(50) NOT NULL,
  `employmentTo1` varchar(50) NOT NULL,
  `reason1` varchar(50) NOT NULL,
  `companyName2` varchar(50) NOT NULL,
  `position2` varchar(50) NOT NULL,
  `employmentFrom2` varchar(50) NOT NULL,
  `employmentTo2` varchar(50) NOT NULL,
  `reason2` varchar(50) NOT NULL,
  `companyName3` varchar(50) NOT NULL,
  `position3` varchar(50) NOT NULL,
  `employmentFrom3` varchar(50) NOT NULL,
  `employmentTo3` varchar(50) NOT NULL,
  `reason3` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `resposition` varchar(50) NOT NULL,
  `contactName` varchar(50) NOT NULL,
  `contactPosition` varchar(50) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `contactNumber` varchar(50) NOT NULL,
  `yescuremployed` varchar(50) NOT NULL,
  `nocuremployed` varchar(50) NOT NULL,
  `allowed` varchar(50) NOT NULL,
  `notallowed` varchar(50) NOT NULL,
  `ifnoProvdtls` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL,
  `status` text NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `status`, `token`) VALUES
(67, 'Tisoy123@gmail.com', '$2y$10$ZY3/YiPu78Dj7NpQLQcCLulfvrjGHX5sa2Ke/kQomWQQAkJZU.UnO', 'applicant', 'active', 'rtXOU7AC5HYfGcIbSxquaK0e1TPjLy4lgFpwZzdkRBni3Jh29Q'),
(68, 'Tisoy@gmail.com', '$2y$10$7EuM0SrA5GKQTm7HlchwC.HMU77BixsXKvWt639At5HPV7B6fXLJS', 'admin', 'active', '7gzLP5w8xC3d9OU02mkEBYAs4aGFZqlNSiKfobhjQDIcWTyrMn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lifechangerform`
--
ALTER TABLE `lifechangerform`
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
-- AUTO_INCREMENT for table `lifechangerform`
--
ALTER TABLE `lifechangerform`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

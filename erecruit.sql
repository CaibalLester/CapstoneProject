-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2023 at 07:04 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `admin_id` int NOT NULL,
  `Adminfullname` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `agents` varchar(255) NOT NULL,
  `applicants` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int NOT NULL,
  `agent_id` int DEFAULT NULL,
  `AgentCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `Agentfullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `birthday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `rank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `agentprofile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `FA` int DEFAULT NULL,
  `branch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `agent_id`, `AgentCode`, `email`, `username`, `Agentfullname`, `birthday`, `number`, `address`, `rank`, `agentprofile`, `FA`, `branch`) VALUES
(30, 103, 'TYT454', 'ellen@gmail.com', NULL, 'Ellen Leido Afable', NULL, '', NULL, NULL, NULL, NULL, 'Calapan'),
(33, 102, 'OKC32H', 'jandeleido@gmail.com', 'Jandel123', 'Escalera, Jandel L.', '01/26/2003', '09366581432', 'Lumangbayan Calapan City', 'Diamond\r\n', '1702140511_b07ec347fa2c28deea57.jpg', 103, 'Calapan'),
(34, 106, 'OCAR39', 'jansen@gmail.com', 'Jansen', 'Jansen L. Afable', '04/28/2013', '09366581432', 'Lumangbayan Calapan City', NULL, '1702170998_824c36db020d0813d117.jpg', 102, 'Calapan City');

-- --------------------------------------------------------

--
-- Table structure for table `aial`
--

CREATE TABLE `aial` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `nonlife` varchar(255) DEFAULT NULL,
  `life` varchar(255) DEFAULT NULL,
  `varlife` varchar(255) DEFAULT NULL,
  `accaAndHealth` varchar(255) DEFAULT NULL,
  `othercb` varchar(255) DEFAULT NULL,
  `othertb` varchar(255) DEFAULT NULL,
  `agencyname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) NOT NULL,
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

INSERT INTO `aial` (`id`, `user_id`, `nonlife`, `life`, `varlife`, `accaAndHealth`, `othercb`, `othertb`, `agencyname`, `fname`, `nickname`, `birthday`, `placeOfBirth`, `gender`, `bloodType`, `homeAddress`, `mobileNo`, `landline`, `email`, `citizenship`, `othersCitizenship`, `naturalizationInfo`, `maritalStatus`, `maidenName`, `spouseName`, `sssNo`, `tin`) VALUES
(1, NULL, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
(2, NULL, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '123', '123', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int NOT NULL,
  `applicant_id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `profile` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `applicant_id`, `username`, `number`, `email`, `birthday`, `branch`, `status`, `profile`, `created_at`) VALUES
(14, 102, 'Escalera Jandel Leido', '09366581432', 'jandeleido@gmail.com', '04/23/1971', 'Calapan', 'confirmed', '1702140511_b07ec347fa2c28deea57.jpg', '2023-12-09 16:14:41'),
(18, 105, 'Jeff', '09366581432', 'jefframos@gmail.com', '04/23/1971', 'Calapan', 'confirmed', '1702169305_eb9da4b981fca946528e.jpg', '2023-12-10 00:26:50'),
(20, 106, 'Jansen', '09366581432', 'jansen@gmail.com', '04/28/2013', 'Calapan', 'confirmed', '1702170998_824c36db020d0813d117.jpg', '2023-12-10 01:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `lifechangerform`
--

CREATE TABLE `lifechangerform` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `position` varchar(255) DEFAULT NULL,
  `preferredArea` varchar(255) DEFAULT NULL,
  `referralBy` int DEFAULT NULL,
  `referral` varchar(255) DEFAULT NULL,
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
  `maidenName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `spouseName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
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

--
-- Dumping data for table `lifechangerform`
--

INSERT INTO `lifechangerform` (`id`, `user_id`, `created_at`, `position`, `preferredArea`, `referralBy`, `referral`, `onlineAd`, `walkIn`, `othersRef`, `fname`, `nickname`, `birthdate`, `placeOfBirth`, `gender`, `bloodType`, `homeAddress`, `mobileNo`, `landline`, `email`, `citizenship`, `othersCitizenship`, `naturalizationInfo`, `maritalStatus`, `maidenName`, `spouseName`, `sssNo`, `tin`, `lifeInsuranceExperience`, `traditional`, `variable`, `recentInsuranceCompany`, `highSchool`, `highSchoolCourse`, `highSchoolYear`, `college`, `collegeCourse`, `collegeYear`, `graduateSchool`, `graduateCourse`, `graduateYear`, `companyName1`, `position1`, `employmentFrom1`, `employmentTo1`, `reason1`, `companyName2`, `position2`, `employmentFrom2`, `employmentTo2`, `reason2`, `companyName3`, `position3`, `employmentFrom3`, `employmentTo3`, `reason3`, `companyName`, `resposition`, `contactName`, `contactPosition`, `emailAddress`, `contactNumber`, `yescuremployed`, `nocuremployed`, `allowed`, `notallowed`, `ifnoProvdtls`) VALUES
(135, 102, '2023-12-09 16:14:41', 'Agent', 'Calapan', 103, 'yes', 'No', 'No', 'No', 'Escalera Jandel Leido', 'Jandel', '2003-01-26', 'Laguna', 'Male', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'jandeleido@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', ''),
(137, 105, '2023-12-10 00:26:50', 'Agent', 'Calapan', 102, 'yes', 'No', 'No', 'No', 'Jeff Ramos', 'Jeff', '2023-12-13', 'Laguna', 'Male', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'jefframos@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', ''),
(138, 106, '2023-12-10 01:15:07', 'Agent', 'Calapan City', 102, 'yes', 'No', 'No', 'No', 'Jansen L. Afable', 'Jansen', '2013-04-28', 'Lumangbayan', 'Male', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'jansen@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'yes', 'No', 'variable', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` text NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL,
  `branch` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `role`, `branch`, `status`, `token`, `created_at`) VALUES
(92, 'chris@gmail.com', 'Chris', '$2y$10$cSz/RSTqT3EJtLgpErhBEOvfzbBsLPog1rbzOrg0XfsRIupR8z3uu', 'admin', 'Calapan', 'active', NULL, '2023-12-09 16:58:18'),
(102, 'jandeleido@gmail.com', 'Jandel', '$2y$10$eiq.H.gMbdb7yLGmevN7T.y8NSTsllc.fjl21vWEPoe4BrtihsOKS', 'agent', 'Calapan', 'active', NULL, '2023-12-09 16:58:18'),
(103, 'ellen@gmail.com', 'Ellen', '123123', 'agent', 'Calapan', 'active', NULL, '2023-12-09 16:58:18'),
(105, 'jefframos@gmail.com', 'Jeff', '$2y$10$OfGZYKOXkC.bMd7.PuuouuRqtCu4Vhu2BSQS9yrTz8O1gmleULKBa', 'agent', 'Calapan', 'active', NULL, '2023-12-10 00:26:50'),
(106, 'jansen@gmail.com', 'Jansen', '$2y$10$eMvTGRqwIQq79yxC0ULFquuKOqn9XaBmRgCgwzBThiGatFaHFTAy.', 'agent', 'Calapan', 'active', NULL, '2023-12-10 01:15:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_admin_user_id` (`admin_id`),
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_agent_user_id` (`agent_id`),
  ADD KEY `subagents` (`FA`,`branch`),
  ADD KEY `fk_agent_branch` (`branch`);

--
-- Indexes for table `aial`
--
ALTER TABLE `aial`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD UNIQUE KEY `user_id_3` (`user_id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_applicant_user_id` (`applicant_id`),
  ADD KEY `fk_applicant_branch` (`branch`);

--
-- Indexes for table `lifechangerform`
--
ALTER TABLE `lifechangerform`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_referralBy` (`referralBy`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `aial`
--
ALTER TABLE `aial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lifechangerform`
--
ALTER TABLE `lifechangerform`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_user_id` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `fk_agent_user_id` FOREIGN KEY (`agent_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_foreign_agent` FOREIGN KEY (`FA`) REFERENCES `agent` (`agent_id`);

--
-- Constraints for table `aial`
--
ALTER TABLE `aial`
  ADD CONSTRAINT `fk_applicant_id` FOREIGN KEY (`user_id`) REFERENCES `applicant` (`applicant_id`);

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `fk_applicant_user_id` FOREIGN KEY (`applicant_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `lifechangerform`
--
ALTER TABLE `lifechangerform`
  ADD CONSTRAINT `fk_referralBy` FOREIGN KEY (`referralBy`) REFERENCES `agent` (`agent_id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `applicant` (`applicant_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

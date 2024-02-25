-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2024 at 01:12 PM
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
  `admin_id` int DEFAULT NULL,
  `adminCode` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Adminfullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `adminProfile` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `birthday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `branch` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `adminCode`, `username`, `Adminfullname`, `email`, `adminProfile`, `number`, `address`, `birthday`, `division`, `branch`, `token`) VALUES
(1, 92, 'RTRV24', 'Chris123', 'Chrispin Tabirara', 'chris@gmail.com', '1702373569_7941ed27b651b5754d09.jpg', '09366581432', 'Lumangbayan Calapan City', '2024-02-17', 'Mindoro', 'Calapan', '');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int NOT NULL,
  `agent_id` int DEFAULT NULL,
  `AgentCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Agentfullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agentprofile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'def.jpg',
  `FA` int DEFAULT NULL,
  `branch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `agent_id`, `AgentCode`, `email`, `username`, `Agentfullname`, `birthday`, `number`, `address`, `rank`, `agentprofile`, `FA`, `branch`, `created_at`, `token`) VALUES
(30, 103, 'TYT454', 'ellen@gmail.com', 'Ellen', 'Ellen Leido Afable', NULL, '', NULL, NULL, 'def.jpg', NULL, 'Calapan', '2023-12-12 11:39:08', ''),
(33, 102, 'OKC32H', 'jandeleido@gmail.com', 'Jandel123', 'Jandel Escalera', '2024-02-17', '09366581432', '123 street', 'Diamond\r\n', '1702140511_b07ec347fa2c28deea57.jpg', 103, 'Calapan', '2023-12-12 11:39:08', ''),
(34, 106, 'OCAR39', 'jansen@gmail.com', 'Jansen', 'Jansen L. Afable', '04/28/2013', '09366581432', 'Lumangbayan Calapan City', NULL, '1702170998_824c36db020d0813d117.jpg', 102, 'Calapan', '2023-12-12 11:39:08', ''),
(37, 108, '8CUXDJ', 'Lester@gmail.com', 'Lester', 'Lester Caibal', '2023-12-12', '09366581432', 'Lumangbayan calapan City', NULL, '1702299921_3d6289ce70e0f1850862.jpg', 102, 'Calapan', '2023-12-12 11:39:08', ''),
(38, 123, 'PFK1DR', 'alejandrogino950@gmail.com', 'Gino', 'Gino Alejandro', '2003-01-26', '09366581432', 'Lumangbayan calapan City', NULL, 'def.jpg', 102, 'Calapan', '2023-12-23 12:11:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `aial`
--

CREATE TABLE `aial` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `nonlife` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `life` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `varlife` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `accaAndHealth` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `othercb` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `othertb` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agencyname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `placeOfBirth` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bloodType` varchar(5) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `homeAddress` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobileNo` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `landline` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `othersCitizenship` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `naturalizationInfo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `maritalStatus` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `maidenName` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `spouseName` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sssNo` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tin` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `applicantfullname` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'def.jpg',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `applicant_id`, `username`, `applicantfullname`, `number`, `email`, `birthday`, `branch`, `status`, `profile`, `created_at`, `token`) VALUES
(14, 102, 'Escalera Jandel Leido', '', '09366581432', 'jandeleido@gmail.com', '', 'Calapan', 'confirmed', '1702140511_b07ec347fa2c28deea57.jpg', '2023-12-09 16:14:41', ''),
(18, 105, 'Jeff', '', '09366581432', 'jefframos@gmail.com', '', 'Calapan', 'confirmed', '1702169305_eb9da4b981fca946528e.jpg', '2023-12-10 00:26:50', ''),
(22, 108, 'Lester', '', '09366581432', 'Lester@gmail.com', '', 'Calapan', 'confirmed', '1702299921_3d6289ce70e0f1850862.jpg', '2023-12-11 13:04:44', ''),
(37, 123, 'Gino', '', '09366581432', 'alejandrogino950@gmail.com', '', 'Calapan', 'confirmed', 'def.jpg', '2023-12-23 12:07:09', ''),
(38, 124, 'Jansen1', '', '09366581432', 'escalerajandel@gmail.com', '2003-01-26', 'Calapan', 'pending', '1708178522_888f94df79b88c411264.webp', '2024-02-02 12:03:03', '2c146a1f23cfa6e8e414b8f112466bef'),
(41, 129, 'ap', 'Applicant Lednaj', '09366581432', 'qwe@gmail.com', '2003-01-26', 'Calapan', 'pending', 'def.jpg', '2024-02-17 13:12:40', '3d195daf9fbdc3f10a8bdfe2e4d7d149');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int NOT NULL,
  `sender` int NOT NULL,
  `message` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `recipient` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender`, `message`, `recipient`, `created_at`) VALUES
(1, 92, 'Hi', 107, '2024-02-24 16:18:58'),
(2, 92, 'This Is Admin', 107, '2024-02-24 16:19:05'),
(3, 107, 'Hi Admin this Is other user', 92, '2024-02-24 16:20:13'),
(4, 92, 'Welcome ALLIANZ PNB', 107, '2024-02-24 16:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `lifechangerform`
--

CREATE TABLE `lifechangerform` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `position` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `preferredArea` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referralBy` int DEFAULT NULL,
  `referral` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `onlineAd` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `walkIn` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `othersRef` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `placeOfBirth` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bloodType` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `homeAddress` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobileNo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `landline` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `othersCitizenship` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `naturalizationInfo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'N/A',
  `maritalStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `maidenName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `spouseName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sssNo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tin` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lifeInsuranceExperience` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `traditional` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `variable` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `recentInsuranceCompany` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `highSchool` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `highSchoolCourse` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `highSchoolYear` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `college` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `collegeCourse` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `collegeYear` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `graduateSchool` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `graduateCourse` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `graduateYear` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `companyName1` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `position1` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `employmentFrom1` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `employmentTo1` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `reason1` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `companyName2` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `position2` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `employmentFrom2` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `employmentTo2` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `reason2` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `companyName3` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `position3` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `employmentFrom3` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `employmentTo3` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `reason3` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `companyName` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `resposition` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `contactName` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `contactPosition` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `emailAddress` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `contactNumber` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `yescuremployed` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nocuremployed` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `allowed` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `notallowed` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ifnoProvdtls` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lifechangerform`
--

INSERT INTO `lifechangerform` (`id`, `user_id`, `token`, `created_at`, `position`, `preferredArea`, `referralBy`, `referral`, `onlineAd`, `walkIn`, `othersRef`, `fname`, `nickname`, `birthdate`, `placeOfBirth`, `gender`, `bloodType`, `homeAddress`, `mobileNo`, `landline`, `email`, `citizenship`, `othersCitizenship`, `naturalizationInfo`, `maritalStatus`, `maidenName`, `spouseName`, `sssNo`, `tin`, `lifeInsuranceExperience`, `traditional`, `variable`, `recentInsuranceCompany`, `highSchool`, `highSchoolCourse`, `highSchoolYear`, `college`, `collegeCourse`, `collegeYear`, `graduateSchool`, `graduateCourse`, `graduateYear`, `companyName1`, `position1`, `employmentFrom1`, `employmentTo1`, `reason1`, `companyName2`, `position2`, `employmentFrom2`, `employmentTo2`, `reason2`, `companyName3`, `position3`, `employmentFrom3`, `employmentTo3`, `reason3`, `companyName`, `resposition`, `contactName`, `contactPosition`, `emailAddress`, `contactNumber`, `yescuremployed`, `nocuremployed`, `allowed`, `notallowed`, `ifnoProvdtls`) VALUES
(135, 102, NULL, '2023-12-09 16:14:41', 'Agent', 'Calapan', 103, 'yes', 'No', 'No', 'No', 'Escalera Jandel Leido', 'Jandel', '2003-01-26', 'Laguna', 'Male', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'jandeleido@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', ''),
(137, 105, NULL, '2023-12-10 00:26:50', 'Agent', 'Calapan', 102, 'yes', 'No', 'No', 'No', 'Jeff Ramos', 'Jeff', '2023-12-13', 'Laguna', 'Male', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'jefframos@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', ''),
(138, 106, NULL, '2023-12-10 01:15:07', 'Agent', 'Calapan City', 102, 'yes', 'No', 'No', 'No', 'Jansen L. Afable', 'Jansen', '2013-04-28', 'Lumangbayan', 'Male', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'jansen@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'yes', 'No', 'variable', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', ''),
(140, 108, NULL, '2023-12-11 13:04:44', 'Agent', 'Calapan', 102, 'yes', 'No', 'No', 'No', 'Lester Caibal', 'Lester', '2023-12-12', 'Laguna', 'Male', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'Lester@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', ''),
(152, 123, NULL, '2023-12-23 12:07:09', 'Agent', 'Calapan', 102, 'yes', 'No', 'No', 'No', 'Gino Alejandro', 'Gino', '2003-01-26', 'Laguna', 'Male', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'alejandrogino950@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', ''),
(153, 124, '2c146a1f23cfa6e8e414b8f112466bef', '2024-02-02 12:03:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(155, 129, '3d195daf9fbdc3f10a8bdfe2e4d7d149', '2024-02-21 14:32:30', 'Agent', 'asd', 102, 'No', 'No', 'No', 'No', 'asd', 'asd', '2024-02-23', 'ad', 'Male', 'O+', 'Lumangbayan calapan City', '09366581432', '123', 'qwe@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123123', '123123', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `role` text COLLATE utf8mb4_general_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` text COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `verification_token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `role`, `branch`, `status`, `token`, `verification_token`, `created_at`) VALUES
(92, 'chris@gmail.com', 'Chris', '$2y$10$ggzG3p6epFA1KwsNK3Hx7.TP0xAdweahPtxGHLnqP10pk91pRgxuu', 'admin', 'Calapan', 'verified', NULL, '', '2023-12-09 16:58:18'),
(102, 'jandeleido@gmail.com', 'Jandel', '$2y$10$VYW4ZrxQdmqwo4Y/VFMFNOPaH0Ds1XYJBH7/ZP53.4OC.U8hGQRPe', 'agent', 'Calapan', 'verified', NULL, '', '2023-12-09 16:58:18'),
(103, 'ellenleido@gmail.com', 'Ellen', '$2y$10$DSUPPIBHTNLGTrlG7NBtx.CboXb9RER5.3VimJVRaLeEuDik5LU26', 'agent', 'Calapan', 'verified', '5f1b5bcc9cbaedd571cf2444295a823d', '', '2023-12-09 16:58:18'),
(105, 'jefframos@gmail.com', 'Jeff', '$2y$10$OfGZYKOXkC.bMd7.PuuouuRqtCu4Vhu2BSQS9yrTz8O1gmleULKBa', 'agent', 'Calapan', 'verified', NULL, '', '2023-12-10 00:26:50'),
(108, 'Lester@gmail.com', 'Lester', '$2y$10$0pmJA1g4hfxCOVUsh0EZLOoZlG2qNcLasmRRyv6lYlVCCGoYcf8.y', 'agent', 'Calapan', 'verified', NULL, '', '2023-12-11 13:04:44'),
(123, 'alejandrogino950@gmail.com', 'Gino', '$2y$10$oEEDwC5rGI56xiQp6gj6AeFqjE6G7LV/qgDmAnELclYf6yW25wX3S', 'agent', 'Calapan', 'verified', NULL, '', '2023-12-23 12:07:09'),
(124, 'escalerajandel@gmail.com', 'Jansen123123', '$2y$10$gjpsPbZEdnxz4v0URYBlUOZsYuB1/Jvb4LVv8cdaPVECd50Y3.vQK', 'applicant', 'Calapan', 'verified', '2c146a1f23cfa6e8e414b8f112466bef', '', '2024-02-02 12:03:03'),
(125, 'test@gmail.com', 'test123', '$2y$10$is9GRwv55RVeVCK.G/cGq.jDxqWbIFlrMLJeAMbt8SuvRNlZkcGZq', 'applicant', 'Calapan', 'verified', '5646424aa32b9bf8fead8343ad49d9cd', '', '2024-02-04 11:33:15'),
(129, 'qwe@gmail.com', 'qwe', '$2y$10$tNFMlc5lq2hZ2wW3wRtfOuj0Oz.Pyt3hCp53G34y49zk1T7KBM.x2', 'applicant', 'Calapan', 'verified', '3d195daf9fbdc3f10a8bdfe2e4d7d149', '', '2024-02-17 13:12:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_admin_user_id` (`admin_id`);

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
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `aial`
--
ALTER TABLE `aial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lifechangerform`
--
ALTER TABLE `lifechangerform`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

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

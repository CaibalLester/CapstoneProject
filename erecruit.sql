-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2024 at 11:16 PM
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
  `firstname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `adminProfile` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `birthday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `barangay` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `branch` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `admin_token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `adminCode`, `username`, `Adminfullname`, `firstname`, `lastname`, `middlename`, `email`, `adminProfile`, `number`, `address`, `birthday`, `region`, `province`, `city`, `barangay`, `street`, `division`, `branch`, `admin_token`) VALUES
(1, 92, 'RTRV24', 'Chris123', 'Chrispin Tabirara', 'Crispin', 'Tabirara', 'M', 'chris@gmail.com', '1709393806_d613a70a78cdeff37c9a.jpg', '09366581432', 'Lumangbayan Calapan City', '2024-02-17', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Lumang Bayan', '', NULL, 'Calapan', 'b4b04a70c98c20b83760f941b5686a06d5747af61d5be197');

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
  `firstname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `barangay` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agentprofile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'def.jpg',
  `FA` int DEFAULT NULL,
  `branch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `agent_token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `agent_id`, `AgentCode`, `email`, `username`, `Agentfullname`, `firstname`, `lastname`, `middlename`, `birthday`, `region`, `province`, `city`, `barangay`, `street`, `number`, `address`, `rank`, `agentprofile`, `FA`, `branch`, `created_at`, `agent_token`) VALUES
(1, 135, 'CBF556', 'ellenleido@gmail.com', 'Ellen', 'Ellen Leido Afable', NULL, NULL, NULL, '2024-03-01', NULL, NULL, NULL, NULL, NULL, '09366581432', 'Lumanbayan', 'Silver', '1709395970_95d866c1ae43570ab923.jpg', NULL, 'Calapan', '2024-02-29 16:57:36', '6c3e88bb1714b7a07d4fa2f9f87540a3677cbd810713d8cc'),
(2, 133, 'YREP63', 'jandeleido@gmail.com', 'janz', 'Escalera Jandel Leido', 'Jandel', 'Escalera', 'L', '2003-01-26', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Tibag', 'Asturias', '09366581432', 'Lumangbayan calapan City', NULL, '1709393944_676e93ab4bbbd6e68983.jpg', 135, 'Calapan', '2024-02-29 17:12:37', 'e2ff0af21d4126cf2c272e3749ddabc3b00be727122b1fa8');

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

-- --------------------------------------------------------

--
-- Table structure for table `aonff`
--

CREATE TABLE `aonff` (
  `id` int NOT NULL,
  `applicant_id` int DEFAULT NULL,
  `app_aonff_token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `day` int DEFAULT NULL,
  `affiant` varchar(255) DEFAULT NULL,
  `ctc_no` int DEFAULT NULL,
  `ctc_issue_date` date DEFAULT NULL,
  `ctc_issue_place` varchar(255) DEFAULT NULL,
  `sworn_day` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int NOT NULL,
  `applicant_id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `applicantfullname` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `barangay` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `branch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'def.jpg',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `app_token` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `applicant_id`, `username`, `applicantfullname`, `firstname`, `lastname`, `middlename`, `number`, `email`, `birthday`, `region`, `province`, `city`, `barangay`, `street`, `branch`, `status`, `profile`, `created_at`, `app_token`) VALUES
(2, 133, 'janz', 'Jandel Escalera', NULL, NULL, NULL, '09366581432', 'jandeleido@gmail.com', '', NULL, NULL, NULL, NULL, NULL, 'Calapan', 'confirmed', '1702140342_0f4bffae9348708e674c.jpg', '2024-02-29 16:41:42', 'e2ff0af21d4126cf2c272e3749ddabc3b00be727122b1fa8'),
(3, 134, 'Jansen', '', 'Jansen', 'Afable', 'L.', '09366581432', 'jansenafable@gmail.com', '2013-04-28', 'MIMAROPA', 'Oriental Mindoro', 'Calapan City', 'Lumangbayan', 'street 123', 'Calapan', 'pending', '1709394150_a815fc9df645e369a39b.jpg', '2024-02-29 16:46:28', 'fe1acc0f7424c413008113258112a2171d08f3e149b4933b'),
(6, 138, 'jandel', '', 'Jandel', 'Escalera', 'L', '09366581432', 'escalerajandel@gmail.com', '2003-01-26', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Tibag', '', 'Calapan', 'pending', '1710051491_6b8980d7d5f1379ae034.jpg', '2024-03-10 06:15:55', '678bc581b50ea68cd98743d9394190b3b9dbf313e9dd3efc'),
(8, 145, 'Lineth', '', 'May Lineth', 'Candolita', 'F', '09366588812', 'alejandrogino950@gmail.com', '', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Calero (Pob.)', 'Nable', 'Calapan', 'pending', 'def.jpg', '2024-03-11 16:53:33', 'd6d3ad49b3e64fc98f7cbe16adba3b38894438faa9841df4');

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
(1, 92, 'hi', 107, '2024-03-23 13:10:14'),
(2, 92, '', 107, '2024-03-23 13:20:01'),
(3, 92, 'Hi', 107, '2024-03-23 13:20:04'),
(4, 92, 'asd', 107, '2024-03-24 13:25:25'),
(5, 92, 'qasd', 107, '2024-03-24 13:25:39'),
(8, 138, 'Hi', 107, '2024-03-24 14:01:19'),
(9, 138, 'qwe', 107, '2024-03-24 16:33:26'),
(10, 138, 'try', 107, '2024-03-24 16:36:24'),
(11, 138, 'qwe', 107, '2024-03-24 16:36:45'),
(12, 138, 'qwe', 107, '2024-03-24 16:37:21'),
(13, 138, 'Hi', 107, '2024-03-24 16:42:45'),
(14, 138, 'dapat makuha ko ang chat ko', 138, '2024-03-24 16:46:35'),
(15, 138, 'ge', 107, '2024-03-24 17:08:40'),
(16, 134, 'Hi po', 138, '2024-03-24 17:09:40'),
(17, 138, 'hi', 138, '2024-03-24 17:10:38'),
(18, 138, 'qwe', 92, '2024-03-24 17:13:55'),
(19, 138, 'dapat makuha ko ang chat ko', 92, '2024-03-24 17:14:19'),
(20, 138, 'Hi', 92, '2024-03-24 17:17:13'),
(21, 92, 'Hi applicant', 92, '2024-03-28 07:56:44'),
(22, 138, 'sir', 92, '2024-03-28 15:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int NOT NULL,
  `client_id` int NOT NULL,
  `client_token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `middleName` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `barangay` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `client_id`, `client_token`, `username`, `lastName`, `firstName`, `middleName`, `email`, `number`, `birthday`, `region`, `province`, `city`, `barangay`, `street`, `created_at`, `profile`) VALUES
(3, 154, 'caea8b6ef08e510cbc71ff9ebff4fb88252f2de265af93cc', 'zapnu', '', '', '', 'jhonloyd@gmail.com', '09366581432', '', '', '', '', '', '', '2024-03-27 06:09:01', '');

-- --------------------------------------------------------

--
-- Table structure for table `gli`
--

CREATE TABLE `gli` (
  `id` int NOT NULL,
  `applicant_id` int DEFAULT NULL,
  `app_gli_token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `companyName` varchar(255) DEFAULT NULL,
  `businessNature` varchar(255) DEFAULT NULL,
  `sex` varchar(255) NOT NULL,
  `civilStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `residenceAddress` varchar(255) DEFAULT NULL,
  `residenceTelephone` int DEFAULT NULL,
  `businessAddress` varchar(255) DEFAULT NULL,
  `businessTelephone` int DEFAULT NULL,
  `firstName1` varchar(255) DEFAULT NULL,
  `mi1` varchar(255) DEFAULT NULL,
  `lastName1` varchar(255) DEFAULT NULL,
  `month1` int DEFAULT NULL,
  `day1` int DEFAULT NULL,
  `year1` int DEFAULT NULL,
  `relationship1` varchar(255) DEFAULT NULL,
  `remarks1` varchar(255) DEFAULT NULL,
  `firstName2` varchar(255) DEFAULT NULL,
  `mi2` varchar(255) DEFAULT NULL,
  `lastName2` varchar(255) DEFAULT NULL,
  `month2` int DEFAULT NULL,
  `day2` int DEFAULT NULL,
  `year2` int DEFAULT NULL,
  `relationship2` varchar(255) DEFAULT NULL,
  `remarks2` varchar(255) DEFAULT NULL,
  `firstName3` varchar(255) DEFAULT NULL,
  `mi3` varchar(255) DEFAULT NULL,
  `lastName3` varchar(255) DEFAULT NULL,
  `month3` int DEFAULT NULL,
  `day3` int DEFAULT NULL,
  `year3` int DEFAULT NULL,
  `relationship3` varchar(255) DEFAULT NULL,
  `remarks3` varchar(255) DEFAULT NULL,
  `firstName4` varchar(255) DEFAULT NULL,
  `mi4` varchar(255) DEFAULT NULL,
  `lastName4` varchar(255) DEFAULT NULL,
  `month4` int DEFAULT NULL,
  `day4` int DEFAULT NULL,
  `year4` int DEFAULT NULL,
  `relationship4` varchar(255) DEFAULT NULL,
  `remakrs4` varchar(255) DEFAULT NULL,
  `trusteeMinorBeneficiary` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `day` int DEFAULT NULL,
  `month` int DEFAULT NULL,
  `year` int DEFAULT NULL,
  `applicantSignature` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gli`
--

INSERT INTO `gli` (`id`, `applicant_id`, `app_gli_token`, `lastName`, `firstName`, `middleName`, `dateOfBirth`, `occupation`, `companyName`, `businessNature`, `sex`, `civilStatus`, `nationality`, `residenceAddress`, `residenceTelephone`, `businessAddress`, `businessTelephone`, `firstName1`, `mi1`, `lastName1`, `month1`, `day1`, `year1`, `relationship1`, `remarks1`, `firstName2`, `mi2`, `lastName2`, `month2`, `day2`, `year2`, `relationship2`, `remarks2`, `firstName3`, `mi3`, `lastName3`, `month3`, `day3`, `year3`, `relationship3`, `remarks3`, `firstName4`, `mi4`, `lastName4`, `month4`, `day4`, `year4`, `relationship4`, `remakrs4`, `trusteeMinorBeneficiary`, `place`, `day`, `month`, `year`, `applicantSignature`) VALUES
(1, 145, 'd6d3ad49b3e64fc98f7cbe16adba3b38894438faa9841df4', 'Candolita', 'Lieth', NULL, '2024-03-07', 'Nothing', 'ABC Compony', 'Ewan', 'Female', 'single', 'Filipino', 'Calero', 123, 'Calero nablle', 321, 'Mama', 'ko', NULL, 1, 26, 2000, 'mother', NULL, NULL, NULL, NULL, 0, 0, 0, '', '', NULL, NULL, NULL, 0, 0, 0, NULL, NULL, '', NULL, '', 0, 0, 0, '', NULL, 'Sya', NULL, 26, 1, 2000, 'qweqwe');

-- --------------------------------------------------------

--
-- Table structure for table `lifechangerform`
--

CREATE TABLE `lifechangerform` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `app_life_token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
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

INSERT INTO `lifechangerform` (`id`, `user_id`, `app_life_token`, `created_at`, `position`, `preferredArea`, `referralBy`, `referral`, `onlineAd`, `walkIn`, `othersRef`, `fname`, `nickname`, `birthdate`, `placeOfBirth`, `gender`, `bloodType`, `homeAddress`, `mobileNo`, `landline`, `email`, `citizenship`, `othersCitizenship`, `naturalizationInfo`, `maritalStatus`, `maidenName`, `spouseName`, `sssNo`, `tin`, `lifeInsuranceExperience`, `traditional`, `variable`, `recentInsuranceCompany`, `highSchool`, `highSchoolCourse`, `highSchoolYear`, `college`, `collegeCourse`, `collegeYear`, `graduateSchool`, `graduateCourse`, `graduateYear`, `companyName1`, `position1`, `employmentFrom1`, `employmentTo1`, `reason1`, `companyName2`, `position2`, `employmentFrom2`, `employmentTo2`, `reason2`, `companyName3`, `position3`, `employmentFrom3`, `employmentTo3`, `reason3`, `companyName`, `resposition`, `contactName`, `contactPosition`, `emailAddress`, `contactNumber`, `yescuremployed`, `nocuremployed`, `allowed`, `notallowed`, `ifnoProvdtls`) VALUES
(2, 133, 'e2ff0af21d4126cf2c272e3749ddabc3b00be727122b1fa8', '2024-02-29 16:41:42', 'Agent', 'Calapan', 135, 'yes', 'No', 'No', 'No', 'Escalera Jandel Leido', 'Jandel', '2003-01-26', 'Laguna', 'Male', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'jandeleido@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', ''),
(3, 134, 'fe1acc0f7424c413008113258112a2171d08f3e149b4933b', '2024-02-29 16:46:28', 'Agent', 'Calapan', 133, 'yes', 'No', 'No', 'No', 'Jansen L. Afable', 'Jansen', '2013-04-28', 'Lumangbayan', 'Male', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'jansenafable@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', ''),
(6, 138, '678bc581b50ea68cd98743d9394190b3b9dbf313e9dd3efc', '2024-03-10 06:15:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 145, 'd6d3ad49b3e64fc98f7cbe16adba3b38894438faa9841df4', '2024-03-11 16:53:33', 'Agent', 'Calapan', 133, 'yes', 'No', 'No', 'No', 'Candolita, May Lineth F.', 'May', '2024-03-13', 'Laguna', 'Female', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'alejandrogino950@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', '');

-- --------------------------------------------------------

--
-- Table structure for table `sou`
--

CREATE TABLE `sou` (
  `id` int NOT NULL,
  `applicant_id` int DEFAULT NULL,
  `app_sou_token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `token` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `role` text COLLATE utf8mb4_general_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `accountStatus` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `verification_token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pass_token` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `token`, `email`, `username`, `password`, `role`, `branch`, `status`, `accountStatus`, `verification_token`, `created_at`, `pass_token`) VALUES
(92, 'b4b04a70c98c20b83760f941b5686a06d5747af61d5be197', 'chris@gmail.com', 'Chris', '$2y$10$ggzG3p6epFA1KwsNK3Hx7.TP0xAdweahPtxGHLnqP10pk91pRgxuu', 'admin', 'Calapan', 'verified', '', '', '2023-12-09 16:58:18', ''),
(133, 'e2ff0af21d4126cf2c272e3749ddabc3b00be727122b1fa8', 'jandeleido@gmail.com', 'janz', '$2y$10$InnVEdfcCUJvJVYF8rKKh.irMaytabAao9Md2Np02bV9vfckUz/16', 'agent', 'Calapan', 'verified', 'active', '99', '2024-02-29 16:41:42', ''),
(134, 'fe1acc0f7424c413008113258112a2171d08f3e149b4933b', 'jansenafable@gmail.com', 'Jansen', '$2y$10$15KatkX.X04sUNVaUauONutwK8FMzGb4casktDC5ldtP8aDWX.NJG', 'applicant', 'Calapan', 'verified', 'active', 'eedc19e7c7097173fd847a42d9a19623', '2024-02-29 16:46:28', ''),
(135, '6c3e88bb1714b7a07d4fa2f9f87540a3677cbd810713d8cc', 'ellenleido@gmail.com', 'Ellen', '$2y$10$Ypotf4Rphg/pUfGrE8XKOOD94spI5IX01xlRjwsiWv9zsJV5vNUby', 'agent', 'Calapan', 'verified', 'active', '', '2024-02-29 16:55:53', ''),
(138, '678bc581b50ea68cd98743d9394190b3b9dbf313e9dd3efc', 'escalerajandel@gmail.com', 'jandel', '$2y$10$a8OaE2qHCOXkzWPCrrMLY.1zHWXrGnPnnMJhy2Xk/oimvgZBsQz.S', 'applicant', 'Calapan', 'verified', 'active', '921932e9c00eba63493b1226d1491998', '2024-03-10 06:15:55', ''),
(145, 'd6d3ad49b3e64fc98f7cbe16adba3b38894438faa9841df4', 'alejandrogino950@gmail.com', 'Lineth', '$2y$10$XD54H8NJd2BC4Src4V1IguDbzR5NrClVNvN/Vr9ERYXDlimnMWDze', 'applicant', 'Calapan', 'verified', 'active', '43bd99ce34b88bc2a3ed5a4079dd6ec2', '2024-03-11 16:53:33', ''),
(154, 'caea8b6ef08e510cbc71ff9ebff4fb88252f2de265af93cc', 'jhonloyd@gmail.com', 'zapnu', '$2y$10$mi0ar9IWq5buMC6HJdSnMuzBun3f7PwSHV92Vo5SvTJVji/HmKJWa', 'client', 'Calapan', 'verified', 'active', '', '2024-03-27 06:09:01', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_admin_user_id` (`admin_id`),
  ADD KEY `fk_admin_token` (`admin_token`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_agent_user_id` (`agent_id`),
  ADD KEY `subagents` (`FA`,`branch`),
  ADD KEY `fk_agent_branch` (`branch`),
  ADD KEY `agent_token` (`agent_token`);

--
-- Indexes for table `aial`
--
ALTER TABLE `aial`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD UNIQUE KEY `user_id_3` (`user_id`);

--
-- Indexes for table `aonff`
--
ALTER TABLE `aonff`
  ADD KEY `applicant_id` (`applicant_id`,`app_aonff_token`),
  ADD KEY `fk_aonff_app_token` (`app_aonff_token`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_applicant_user_id` (`applicant_id`),
  ADD KEY `fk_applicant_branch` (`branch`),
  ADD KEY `fk_app_token` (`app_token`),
  ADD KEY `fk_appusername` (`username`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_id` (`client_id`,`client_token`),
  ADD KEY `fk_client_token` (`client_token`);

--
-- Indexes for table `gli`
--
ALTER TABLE `gli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gli_app_id` (`applicant_id`),
  ADD KEY `app_token` (`app_gli_token`);

--
-- Indexes for table `lifechangerform`
--
ALTER TABLE `lifechangerform`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_referralBy` (`referralBy`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_life_app_token` (`app_life_token`);

--
-- Indexes for table `sou`
--
ALTER TABLE `sou`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sou_app_id` (`applicant_id`),
  ADD KEY `app_sou_token` (`app_sou_token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_user_token` (`token`),
  ADD UNIQUE KEY `username` (`username`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aial`
--
ALTER TABLE `aial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gli`
--
ALTER TABLE `gli`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lifechangerform`
--
ALTER TABLE `lifechangerform`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sou`
--
ALTER TABLE `sou`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_id` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_admin_token` FOREIGN KEY (`admin_token`) REFERENCES `users` (`token`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `fk_agent_id` FOREIGN KEY (`agent_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_agent_token` FOREIGN KEY (`agent_token`) REFERENCES `users` (`token`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_FA` FOREIGN KEY (`FA`) REFERENCES `agent` (`agent_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `aonff`
--
ALTER TABLE `aonff`
  ADD CONSTRAINT `fk_aonff_app_id` FOREIGN KEY (`applicant_id`) REFERENCES `applicant` (`applicant_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_aonff_app_token` FOREIGN KEY (`app_aonff_token`) REFERENCES `applicant` (`app_token`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `fk_app_id` FOREIGN KEY (`applicant_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_app_token` FOREIGN KEY (`app_token`) REFERENCES `users` (`token`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_client_id` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_client_token` FOREIGN KEY (`client_token`) REFERENCES `users` (`token`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gli`
--
ALTER TABLE `gli`
  ADD CONSTRAINT `fk_gli_app_id` FOREIGN KEY (`applicant_id`) REFERENCES `applicant` (`applicant_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_gli_app_token` FOREIGN KEY (`app_gli_token`) REFERENCES `applicant` (`app_token`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lifechangerform`
--
ALTER TABLE `lifechangerform`
  ADD CONSTRAINT `fk_life_app_id` FOREIGN KEY (`user_id`) REFERENCES `applicant` (`applicant_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_life_app_token` FOREIGN KEY (`app_life_token`) REFERENCES `applicant` (`app_token`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_referal` FOREIGN KEY (`referralBy`) REFERENCES `agent` (`agent_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sou`
--
ALTER TABLE `sou`
  ADD CONSTRAINT `fk_sou_app_id` FOREIGN KEY (`applicant_id`) REFERENCES `applicant` (`applicant_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_sou_app_token` FOREIGN KEY (`app_sou_token`) REFERENCES `applicant` (`app_token`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

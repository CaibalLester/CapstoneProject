-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2024 at 05:55 PM
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
(1, 92, 'RTRV24', 'Chris123', 'Chrispin Tabirara', 'Crispin', 'Tabirara', 'M', 'chris@gmail.com', '1709393806_d613a70a78cdeff37c9a.jpg', '09366581432', 'Lumangbayan Calapan City', '2024-02-17', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Lumang Bayan', '', NULL, 'Calapan', '61da7cf3e778297e58c4c60774bb26e47ddc7771a9aa1cc833');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int NOT NULL,
  `agent_id` int DEFAULT NULL,
  `AgentCode` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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
  `agentprofile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `FA` int DEFAULT NULL,
  `branch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `agent_token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `agent_id`, `AgentCode`, `email`, `username`, `Agentfullname`, `firstname`, `lastname`, `middlename`, `birthday`, `region`, `province`, `city`, `barangay`, `street`, `number`, `address`, `rank`, `agentprofile`, `FA`, `branch`, `created_at`, `agent_token`) VALUES
(1, 135, 'CBF556', 'ellenleido@gmail.com', 'Ellen', 'Ellen Leido Afable', 'Eleanor', 'Afable', 'L', '2024-03-01', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Tibag', 'Asturias', '09366581432', 'Lumanbayan', 'Silver', '1709395970_95d866c1ae43570ab923.jpg', NULL, 'Calapan', '2024-02-29 16:57:36', 'd000fd7c8315f1964e7e4a6e755daed0bd8ee44ef37d278597'),
(2, 133, 'YREP63', 'jandeleido@gmail.com', 'janz', 'Escalera Jandel Leido', 'Jandel', 'Escalera', 'L', '2003-01-26', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Tibag', 'Asturias', '09366581432', 'Lumangbayan calapan City', 'Bronze', '1709393944_676e93ab4bbbd6e68983.jpg', 135, 'Calapan', '2024-02-29 17:12:37', 'e75e323fe40fab8c5e3cb19316f8670f35c8af44ed07ac59fc'),
(5, 145, 'EJE9WK', 'alejandrogino950@gmail.com', 'Lineth', NULL, 'May Lineth', 'Candolita', 'F', '', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Calero (Pob.)', 'Nable', '09366588812', NULL, NULL, '', 133, NULL, '2024-04-05 13:09:36', '05fd60d38fc468347b4122a5685a0dfca55de4b78721435de9'),
(6, 203, 'RVLATV', 'smithlednaj@gmail.com', 'Lednaj123', NULL, 'Lednaj', 'Arelacse', 'O', '', 'MIMAROPA', 'Oriental Mindoro', NULL, 'Canubing I', '', '09366581432', NULL, NULL, NULL, 133, NULL, '2024-05-14 16:41:42', 'ae8abbfd6ae5348573cb45ce4c94adc6acff2e74f6ba562a6c');

-- --------------------------------------------------------

--
-- Table structure for table `aial`
--

CREATE TABLE `aial` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int DEFAULT NULL,
  `aial_token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nonLife` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `life` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `variableLife` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `accidentAndHealth` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `others` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `othersSpecification` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agencyName` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `surname` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `firstName` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `middleName` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agentType` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `homeAddress` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `zipCode` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `businessAddress` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tin` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobileNumber` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `birthPlace` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `citizenship` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sex` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `civilStatus` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `maidenName` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `husbandsName` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `naturalizationDetails` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foreignerDetails` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `certifiedCopyDetails` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `filipinoParticipation` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company1` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `licenseType1` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `licenseNo1` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `yearIssued1` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company2` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `licenseType2` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `licenseNo2` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `yearIssued2` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company3` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `licenseType3` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `licenseNo3` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `yearIssued3` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `taxReturnFiled` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `taxReturnNotFiledReason` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `employer1` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `position1` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dates1` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `employer2` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `position2` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dates2` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `insuranceEmployee` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `positionHeld` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `governmentEmployee` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `month2` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `year` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `place` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `applicantName` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `provinceCity` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `affiant` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tin2` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sss` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `day` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `month` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `year2` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `exhibit` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `applicant` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `companyName` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `place2` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date2` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `authorizedRepresentative` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aial`
--

INSERT INTO `aial` (`id`, `username`, `user_id`, `aial_token`, `nonLife`, `life`, `variableLife`, `accidentAndHealth`, `others`, `othersSpecification`, `agencyName`, `surname`, `firstName`, `middleName`, `agentType`, `homeAddress`, `zipCode`, `businessAddress`, `tin`, `email`, `mobileNumber`, `birthDate`, `birthPlace`, `citizenship`, `sex`, `civilStatus`, `maidenName`, `husbandsName`, `naturalizationDetails`, `foreignerDetails`, `certifiedCopyDetails`, `filipinoParticipation`, `company1`, `licenseType1`, `licenseNo1`, `yearIssued1`, `company2`, `licenseType2`, `licenseNo2`, `yearIssued2`, `company3`, `licenseType3`, `licenseNo3`, `yearIssued3`, `taxReturnFiled`, `taxReturnNotFiledReason`, `employer1`, `position1`, `dates1`, `employer2`, `position2`, `dates2`, `insuranceEmployee`, `positionHeld`, `governmentEmployee`, `date`, `month2`, `year`, `place`, `applicantName`, `provinceCity`, `affiant`, `tin2`, `sss`, `day`, `month`, `year2`, `exhibit`, `applicant`, `companyName`, `place2`, `date2`, `authorizedRepresentative`, `created_at`) VALUES
(1, 'Jandel', 138, '84a4c1dbbf9ea65aa0ec88ffb8ddeb7c733df4bc3971424d64', 'nonLife', 'life', 'variableLife', 'accidentAndHealth', 'others', '123', '123', '123', '123', '123', 'OrdinaryAgent', '123', '123', '123', '123', 'jan@gmail.com', '123123', '2024-04-03', '123', '123123', 'Male', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', 'NO', 'PANDEMIC', '123', '123', '2024-04-10', '123', '123', '2024-04-10', 'NO', 'N/A', 'NO', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '132', '123', '123', '132', 'ALLIANZ PNB LIFE INSURANCE, INC.', '123', '123', '123', '2024-04-09 15:15:22'),
(9, '', 203, 'ae8abbfd6ae5348573cb45ce4c94adc6acff2e74f6ba562a6c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 14:54:29');

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
  `refcode` varchar(60) COLLATE utf8mb4_general_ci DEFAULT NULL,
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
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `app_token` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `applicant_id`, `username`, `refcode`, `firstname`, `lastname`, `middlename`, `number`, `email`, `birthday`, `region`, `province`, `city`, `barangay`, `street`, `branch`, `status`, `profile`, `created_at`, `app_token`) VALUES
(2, 133, 'janz', NULL, NULL, NULL, NULL, '09366581432', 'jandeleido@gmail.com', '', NULL, NULL, NULL, NULL, NULL, 'Calapan', 'confirmed', '1702140342_0f4bffae9348708e674c.jpg', '2024-02-29 16:41:42', 'e75e323fe40fab8c5e3cb19316f8670f35c8af44ed07ac59fc'),
(3, 134, 'Jansen', NULL, 'Jansen', 'Afable', 'L.', '09366581432', 'jansenafable@gmail.com', '2013-04-28', 'MIMAROPA', 'Oriental Mindoro', 'Calapan City', 'Lumangbayan', 'street 123', 'Calapan', 'pending', '1709394150_a815fc9df645e369a39b.jpg', '2024-02-29 16:46:28', 'fe1acc0f7424c413008113258112a2171d08f3e149b4933b'),
(6, 138, 'jandel', 'YREP63', 'Jandel', 'Escalera', 'L', '09366581432', 'escalerajandel@gmail.com', '2003-01-26', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Tibag', '', 'Calapan', 'pending', '1710051491_6b8980d7d5f1379ae034.jpg', '2024-03-10 06:15:55', '84a4c1dbbf9ea65aa0ec88ffb8ddeb7c733df4bc3971424d64'),
(8, 145, 'Lineth', 'YREP63', 'May Lineth', 'Candolita', 'F', '09366588812', 'alejandrogino950@gmail.com', '', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Calero (Pob.)', 'Nable', 'Calapan', 'confirmed', 'def.jpg', '2024-03-11 16:53:33', '05fd60d38fc468347b4122a5685a0dfca55de4b78721435de9'),
(42, 176, 'Les', 'YREP63', 'Lester', 'Caibal', 'M', '09366581432', 'Lester@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, 'pending', '', '2024-04-06 13:11:01', 'f90d700cb8e2c779da224bc8422f8c0766e0c0d8c71f3f43'),
(54, 203, 'Lednaj123', 'YREP63', 'Lednaj', 'Arelacse', 'O', '09366581432', 'smithlednaj@gmail.com', '', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Canubing I', '', NULL, 'confirmed', NULL, '2024-05-14 14:54:29', 'ae8abbfd6ae5348573cb45ce4c94adc6acff2e74f6ba562a6c');

--
-- Triggers `applicant`
--
DELIMITER $$
CREATE TRIGGER `update_lifechangerform` AFTER UPDATE ON `applicant` FOR EACH ROW BEGIN
    IF NEW.app_token <> OLD.app_token OR NEW.username <> OLD.username THEN
        UPDATE lifechangerform
        SET app_life_token = NEW.app_token,
            username = NEW.username
        WHERE app_token = OLD.app_token
          AND username = OLD.username;
    END IF;
END
$$
DELIMITER ;

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
(22, 138, 'sir', 92, '2024-03-28 15:18:40'),
(23, 92, 'hi', 92, '2024-04-02 14:34:37'),
(24, 92, 'Hi', 92, '2024-04-02 14:35:57'),
(25, 92, 'test', 92, '2024-04-02 14:37:49'),
(26, 92, 'qasd', 92, '2024-04-02 14:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int NOT NULL,
  `client_id` int NOT NULL,
  `client_token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `applicationNo` int NOT NULL,
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
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'def.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `client_id`, `client_token`, `applicationNo`, `username`, `lastName`, `firstName`, `middleName`, `email`, `number`, `birthday`, `region`, `province`, `city`, `barangay`, `street`, `created_at`, `profile`) VALUES
(4, 196, '0ac8fc72bd4fe444a0a3ce5e2c80feaaef30ca1a46681dd89b', 581039807, 'client', 'Escalera', 'Jandel', 'L', 'client@gmail.com', '09366581432', '2003-01-26', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Tibag', 'Asturias', '2024-04-15 17:05:10', 'def.png'),
(8, 197, '53b9f97948d1b77cb60f145038acb24b94e59fe6ade2514f2b', 581039808, 'client2', 'client2', 'client', 'client', 'client2@gmail.com', '09366581432', '2024-04-28', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Canubing I', '', '2024-04-15 17:33:08', 'def.png'),
(9, 201, '7ccdaf5a8ead0cd16d4993d50d21d11a1d03a8ed56f24612dd', 581039809, 'test', 'Test', 'Test', 'T', 'test@gmail.com', '0909', '2024-04-18', 'MIMAROPA', 'Oriental Mindoro', 'City Of Calapan (Capital)', 'Bayanan I', 'Asturias', '2024-04-18 12:22:32', 'def.png');

-- --------------------------------------------------------

--
-- Table structure for table `client_plan`
--

CREATE TABLE `client_plan` (
  `id` int NOT NULL,
  `token` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `client_id` int NOT NULL,
  `agent` int NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mode_payment` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `term` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  `applicationNo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `commission` float NOT NULL,
  `receipt` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_plan`
--

INSERT INTO `client_plan` (`id`, `token`, `client_id`, `agent`, `plan`, `mode_payment`, `term`, `created_at`, `updated_at`, `applicationNo`, `status`, `commission`, `receipt`) VALUES
(26, '7e4069c62e0a130ab184a063c016981e4171c3cb1949000131', 196, 133, '62951ea5e91e573d76bbf6ad8d0e874c53eb4404343cebae527a2a0dffcb52378288230ea70a61dbe19ed987e79102c83560', 'Semi-Annual', 10, '2024-05-14 17:50:12', '2024-05-14 17:50:46', '581039807', 'paid', 30000, '1715709012_32f3fd863e12893939ef.png');

-- --------------------------------------------------------

--
-- Table structure for table `client_scheduler`
--

CREATE TABLE `client_scheduler` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `clientName` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `applicationNo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `complteaddress` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `selected_date` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `schedule_time` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `meeting_type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_scheduler`
--

INSERT INTO `client_scheduler` (`id`, `username`, `clientName`, `number`, `applicationNo`, `email`, `complteaddress`, `selected_date`, `agent`, `plan`, `schedule_time`, `meeting_type`, `status`, `created_at`, `client_id`) VALUES
(38, 'client', 'Escalera, Jandel L.', '09366581432', '581039807', 'client@gmail.com', 'MIMAROPA, Oriental Mindoro, City Of Calapan (Capital), Tibag, Asturias', '2024-4-16', '133', '62951ea5e91e573d76bbf6ad8d0e874c53eb4404343cebae527a2a0dffcb52378288230ea70a61dbe19ed987e79102c83560', '01:49', 'office-meeting', 'completed', '2024-05-14 17:49:43', 196);

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

CREATE TABLE `commissions` (
  `id` int NOT NULL,
  `token` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `agent_id` int NOT NULL,
  `client_id` int NOT NULL,
  `commi` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commissions`
--

INSERT INTO `commissions` (`id`, `token`, `agent_id`, `client_id`, `commi`, `created_at`) VALUES
(17, 'd20e49f4af240752b928f0100e67e9ec6556a5fec002e555e9', 133, 196, 15000, '2024-05-14 17:50:12'),
(18, 'a95e60d82a0645dac4be2e06b66d8692dddfe00cf92462e6ea', 133, 196, 15000, '2024-05-14 17:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `fback`
--

CREATE TABLE `fback` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content` varchar(1000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fback`
--

INSERT INTO `fback` (`id`, `name`, `email`, `content`, `created_at`) VALUES
(1, 'Jandel', 'jandeleido@gmail.com', 'Smooth', '2024-04-10 18:09:09'),
(2, 'sprite', 'chris@gmail.com', 'Nice Capstone 3 ka saakin', '2024-04-13 00:32:44');

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
  `remarks4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
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

INSERT INTO `gli` (`id`, `applicant_id`, `app_gli_token`, `lastName`, `firstName`, `middleName`, `dateOfBirth`, `occupation`, `companyName`, `businessNature`, `sex`, `civilStatus`, `nationality`, `residenceAddress`, `residenceTelephone`, `businessAddress`, `businessTelephone`, `firstName1`, `mi1`, `lastName1`, `month1`, `day1`, `year1`, `relationship1`, `remarks1`, `firstName2`, `mi2`, `lastName2`, `month2`, `day2`, `year2`, `relationship2`, `remarks2`, `firstName3`, `mi3`, `lastName3`, `month3`, `day3`, `year3`, `relationship3`, `remarks3`, `firstName4`, `mi4`, `lastName4`, `month4`, `day4`, `year4`, `relationship4`, `remarks4`, `trusteeMinorBeneficiary`, `place`, `day`, `month`, `year`, `applicantSignature`) VALUES
(1, 145, '05fd60d38fc468347b4122a5685a0dfca55de4b78721435de9', 'Candolita', 'Lieth', 'l', '2024-03-07', 'Nothing', 'ABC Compony', 'Ewan', 'Female', 'Married', 'Filipino', 'Calero', 123, 'Calero nablle', 321, 'Mama', 'ko', '123123123', 1, 26, 2000, 'mother', '123123', '123123', 'asd', '123123123', 2, 2, 0, 'qwe', 'qwe', '123123', 'asd', 'asd', 2, 2, 2, 'qwe', '123123', 'qwe', 'asd', 'qwe', 2, 2, 2, 'qwe', 'qwe', 'Sya', 'asd', 26, 1, 2000, 'qweqwe'),
(2, 133, 'e75e323fe40fab8c5e3cb19316f8670f35c8af44ed07ac59fc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 134, 'fe1acc0f7424c413008113258112a2171d08f3e149b4933b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 138, '84a4c1dbbf9ea65aa0ec88ffb8ddeb7c733df4bc3971424d64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 176, 'f90d700cb8e2c779da224bc8422f8c0766e0c0d8c71f3f43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 203, 'ae8abbfd6ae5348573cb45ce4c94adc6acff2e74f6ba562a6c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lifechangerform`
--

CREATE TABLE `lifechangerform` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int DEFAULT NULL,
  `app_life_token` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `position` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `preferredArea` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referralBy` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
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
  `ifnoProvdtls` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `persontonotif` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `moNo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `n1` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `p1` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `c1` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `e1` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `n2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `p2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `c2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `e2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `n3` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `p3` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `c3` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `e3` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `g1y` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `g1n` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `accused` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `g2y` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `g2n` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bankruptcy` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `g3y` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `g3n` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `investigated` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `g4y` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `g4n` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `terminat` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `printedName` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `botdate` date DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lifechangerform`
--

INSERT INTO `lifechangerform` (`id`, `username`, `user_id`, `app_life_token`, `created_at`, `position`, `preferredArea`, `referralBy`, `referral`, `onlineAd`, `walkIn`, `othersRef`, `fname`, `nickname`, `birthdate`, `placeOfBirth`, `gender`, `bloodType`, `homeAddress`, `mobileNo`, `landline`, `email`, `citizenship`, `othersCitizenship`, `naturalizationInfo`, `maritalStatus`, `maidenName`, `spouseName`, `sssNo`, `tin`, `lifeInsuranceExperience`, `traditional`, `variable`, `recentInsuranceCompany`, `highSchool`, `highSchoolCourse`, `highSchoolYear`, `college`, `collegeCourse`, `collegeYear`, `graduateSchool`, `graduateCourse`, `graduateYear`, `companyName1`, `position1`, `employmentFrom1`, `employmentTo1`, `reason1`, `companyName2`, `position2`, `employmentFrom2`, `employmentTo2`, `reason2`, `companyName3`, `position3`, `employmentFrom3`, `employmentTo3`, `reason3`, `companyName`, `resposition`, `contactName`, `contactPosition`, `emailAddress`, `contactNumber`, `yescuremployed`, `nocuremployed`, `allowed`, `notallowed`, `ifnoProvdtls`, `persontonotif`, `moNo`, `n1`, `p1`, `c1`, `e1`, `n2`, `p2`, `c2`, `e2`, `n3`, `p3`, `c3`, `e3`, `g1y`, `g1n`, `accused`, `g2y`, `g2n`, `bankruptcy`, `g3y`, `g3n`, `investigated`, `g4y`, `g4n`, `terminat`, `printedName`, `botdate`, `signature`) VALUES
(2, 'janz', 133, 'e75e323fe40fab8c5e3cb19316f8670f35c8af44ed07ac59fc', '2024-02-29 16:41:42', 'Agent', 'Calapan', 'Afable, Eleanor L', 'yes', 'No', 'No', 'No', 'Escalera Jandel Leido', 'Jandel', '2003-01-26', 'Laguna', 'Male', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'jandeleido@gmail.com', 'Filipino', 'N/A', '', 'Single', 'test', 'asdasd', '123', '123', 'No', 'traditional', 'variable', 'sa bahay namin', 'asd', 'asd', '2024-04-08', 'asd', 'asd', '2024-04-16', 'asd', 'asd', '2024-04-08', 'asd', 'asd', '2024-04-08', '2024-04-09', 'asdasd', 'asd', 'asd', '2024-04-08', '2024-04-02', 'asdasdasd', 'asd', 'asd', '2024-04-09', '2024-04-08', 'asdasdasd', 'asdasd', 'N/A', 'asdasd', 'asdasd', 'test@gmail.com', '123', 'no', 'N/A', 'no', 'N/A', 'asd', 'asdasd', 'asd', 'asd1', 'asd1', 'asd1', 'asd1', 'asd2', 'asd2', 'asd2', 'asd2', 'asd3', 'asd3', 'asd3', 'asd3', 'yes', 'no', 'asd', 'yes', 'no', 'asd', 'yes', 'no', 'asdasd', 'yes', 'no', 'asd', 'Jandel L. Escalera', '2024-04-08', 'signature_1715702930.png'),
(3, 'Jansen', 134, 'fe1acc0f7424c413008113258112a2171d08f3e149b4933b', '2024-02-29 16:46:28', 'Agent', 'Calapan', '133', 'yes', 'No', 'No', 'No', 'Jansen L. Afable', 'Jansen', '2013-04-28', 'Lumangbayan', 'Male', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'jansenafable@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'jandel', 138, '84a4c1dbbf9ea65aa0ec88ffb8ddeb7c733df4bc3971424d64', '2024-03-10 06:15:55', 'Agent', 'Calapan City', 'Escalera, Jandel L', 'yes', 'No', 'No', 'No', 'Escalera Jandel Leido', 'Jandel', '2024-04-07', 'Laguna', 'Male', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'jandeleido@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'No', 'traditional', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', '', 'aasd', 'asd', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, 'asdasd', 'Jandel L. Escalera', '2024-04-08', 'signature_1712559038.png'),
(8, 'Lineth', 145, '05fd60d38fc468347b4122a5685a0dfca55de4b78721435de9', '2024-03-11 16:53:33', 'Agent', 'Calapan', '133', 'yes', 'No', 'No', 'No', 'Candolita, May Lineth F.', 'May', '2024-03-13', 'Laguna', 'Female', 'N/A', 'Lumangbayan calapan City', '09366581432', '123', 'alejandrogino950@gmail.com', 'Filipino', 'N/A', '', 'Single', '', '', '123', '123', 'No', 'No', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Les', 176, 'f90d700cb8e2c779da224bc8422f8c0766e0c0d8c71f3f43', '2024-04-06 13:11:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Lednaj123', 203, 'ae8abbfd6ae5348573cb45ce4c94adc6acff2e74f6ba562a6c', '2024-05-14 14:54:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N/A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int NOT NULL,
  `plan_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `brief_description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `com_percentage` int NOT NULL,
  `coverage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `plan_name`, `brief_description`, `description`, `price`, `token`, `created_at`, `image`, `com_percentage`, `coverage`) VALUES
(25, 'Allianz Well', 'A health insurance plan offered by Allianz that provides coverage for medical expenses, including hospitalization, surgeries, and consultations, ensuring you\'re financially protected against unexpected healthcare costs.', 'A health insurance plan offered by Allianz that provides coverage for medical expenses, including hospitalization, surgeries, and consultations, ensuring you\'re financially\r\nprotected against unexpected healthcare costs.', 100000, '62951ea5e91e573d76bbf6ad8d0e874c53eb4404343cebae527a2a0dffcb52378288230ea70a61dbe19ed987e79102c83560', '2024-04-13 11:51:40', '1715704016_0f86942b7642a8c62f4a.png', 30, 100000),
(26, 'Allianz Compass', 'An insurance plan designed to guide you through life\'s uncertainties, offering a range of                             coverage options tailored to your needs, including health, life, and property insurance,                             providing peace of m', 'An insurance plan designed to guide you through life\'s uncertainties, offering a range of coverage options tailored to your needs, including health, life, and property insurance, providing peace of mind for you and your family.', 100000, 'e87752f8a2c53bd4e3b99ac5a11b998edbf761944ef7b0680a1a8aa35cae179e7534f895a53971a312130fe954b6d364fc66', '2024-04-13 11:53:28', '1715704023_47d949e23e4c6e6b0290.png', 30, 10000),
(27, 'eAZy Health Blue', 'A basic health insurance package from Allianz, offering essential coverage for medical                             expenses such as doctor visits, prescription drugs, and diagnostic tests, ensuring                             affordable access to healthca', 'A basic health insurance package from Allianz, offering essential coverage for medical expenses such as doctor visits, prescription drugs, and diagnostic tests, ensuring affordable access to healthcare services when you need them most.', 100000, '533c3ce8dda4169936bf14547b8806aa6b945218cad18243b73b2163b3170958d4c4927bd0ce3fb30562e265d0a733fffebf', '2024-04-13 11:54:55', '1713009295_4520944f2bf09e6fdcb3.png', 30, 100000),
(28, 'eAZy Health Silver', 'A mid-tier health insurance plan by Allianz, providing broader coverage than the basic                             package, including additional benefits like specialist consultations, outpatient procedures,                             and wellness progra', 'A mid-tier health insurance plan by Allianz, providing broader coverage than the basic\r\npackage, including additional benefits like specialist consultations, outpatient procedures, and wellness programs, offering enhanced protection for your health and well-being.', 10000, '5efa711ec22d2c36d2a4e5662a31834f5425e9f590849e750c7f752e6ce974b107774c9481c4cfd00343adcebddb56533fb0', '2024-04-13 11:55:40', '1713009340_9c0f4833a3b57d7c4067.png', 30, 100000),
(29, 'eAZy Health Gold', 'A health insurance option from Allianz, offering extensive coverage for medical expenses,                             including hospitalization, surgeries, maternity care, and chronic disease management,                             ensuring you receive to', 'A health insurance option from Allianz, offering extensive coverage for medical expenses, including hospitalization, surgeries, maternity care, and chronic disease management, ensuring you receive top-quality healthcare without financial worries.', 100000, '69209f2ebe713c1613e1b94c0d57b976075bb368941c457a87737706c643f8fb683da2a48afc667e7bf40364141ee5909920', '2024-04-13 11:56:27', '1713009387_d4171fd161aae7aebbd4.png', 30, 100000),
(30, 'eAZy Health platinum', 'The highest level of health insurance coverage offered by Allianz, providing premium benefits                             such as worldwide medical coverage, VIP hospital accommodations, advanced treatments, and                             personalized he', 'The highest level of health insurance coverage offered by Allianz, providing premium benefits such as worldwide medical coverage, VIP hospital accommodations, advanced treatments, and personalized health services, ensuring you receive the best possible care wherever you are.', 100000, '7c5cf99bbd71b7c49e13e73d0afbcccf614d554681d932b5f9fa63579702e323d8677c69976fea42bd51e61d516e3d346365', '2024-04-13 11:57:14', '1713009434_886401b891eee0b14937.png', 30, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(1, 'T', 'asd', '2024-04-17 12:41:00', '2024-04-17 23:40:00');

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
-- Table structure for table `to_confirm`
--

CREATE TABLE `to_confirm` (
  `id` int NOT NULL,
  `applicant_id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `middlename` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `refcode` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `time_log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `accountStatus` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `confirm` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `verification_token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pass_token` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `token`, `email`, `username`, `password`, `time_log`, `role`, `status`, `accountStatus`, `confirm`, `verification_token`, `created_at`, `pass_token`) VALUES
(92, '61da7cf3e778297e58c4c60774bb26e47ddc7771a9aa1cc833', 'chris@gmail.com', 'Chris', '$2y$10$ggzG3p6epFA1KwsNK3Hx7.TP0xAdweahPtxGHLnqP10pk91pRgxuu', '2024-05-14 16:40:49', 'admin', 'verified', '', 'true', '', '2023-12-09 16:58:18', ''),
(133, 'e75e323fe40fab8c5e3cb19316f8670f35c8af44ed07ac59fc', 'jandeleido@gmail.com', 'janz', '$2y$10$LI1W4xM0wac5oXkVy9P9YeuD8uihYhZE7K9i.PICUKVQ.iFq25NyW', '2024-05-14 16:46:41', 'agent', 'verified', 'active', 'true', '99', '2024-02-29 16:41:42', ''),
(134, 'fe1acc0f7424c413008113258112a2171d08f3e149b4933b', 'jansenafable@gmail.com', 'Jansen', '$2y$10$15KatkX.X04sUNVaUauONutwK8FMzGb4casktDC5ldtP8aDWX.NJG', '2024-04-14 17:11:05', 'applicant', 'verified', 'active', 'true', 'eedc19e7c7097173fd847a42d9a19623', '2024-02-29 16:46:28', ''),
(135, 'd000fd7c8315f1964e7e4a6e755daed0bd8ee44ef37d278597', 'ellenleido@gmail.com', 'Ellen', '$2y$10$Ypotf4Rphg/pUfGrE8XKOOD94spI5IX01xlRjwsiWv9zsJV5vNUby', '2024-05-12 16:45:32', 'agent', 'verified', 'active', 'true', '', '2024-02-29 16:55:53', ''),
(138, '84a4c1dbbf9ea65aa0ec88ffb8ddeb7c733df4bc3971424d64', 'escalerajandel@gmail.com', 'jandel', '$2y$10$a8OaE2qHCOXkzWPCrrMLY.1zHWXrGnPnnMJhy2Xk/oimvgZBsQz.S', '2024-05-08 16:49:56', 'applicant', 'verified', 'active', 'true', '921932e9c00eba63493b1226d1491998', '2024-03-10 06:15:55', ''),
(145, '05fd60d38fc468347b4122a5685a0dfca55de4b78721435de9', 'alejandrogino950@gmail.com', 'Lineth', '$2y$10$XD54H8NJd2BC4Src4V1IguDbzR5NrClVNvN/Vr9ERYXDlimnMWDze', '2024-05-05 03:43:29', 'agent', 'verified', 'active', 'true', '43bd99ce34b88bc2a3ed5a4079dd6ec2', '2024-03-11 16:53:33', ''),
(176, 'f90d700cb8e2c779da224bc8422f8c0766e0c0d8c71f3f43', 'Lester@gmail.com', 'Les', '$2y$10$MssN7JDnVyZki4UkZ5ShVumbCZvGT74HLFvN0BqnLk5TOxAwZFKjq', '2024-04-06 16:42:37', 'applicant', 'verified', 'active', 'true', 'db85b52bef570b057b11747327fc56dc', '2024-04-06 13:08:03', ''),
(196, '0ac8fc72bd4fe444a0a3ce5e2c80feaaef30ca1a46681dd89b', 'client@gmail.com', 'client', '$2y$10$SX.IR0nW8HFyxMzq..yCLeIPI2wQlL9NVEYKsd0WDMAzKaahQysli', '2024-05-14 17:43:12', 'client', 'verified', 'active', 'true', '', '2024-04-15 16:36:17', ''),
(197, '53b9f97948d1b77cb60f145038acb24b94e59fe6ade2514f2b', 'client2@gmail.com', 'client2', '$2y$10$8fdJQ3L2buJqIw7F/VRjFOSvjnV75wH2xSAf11gmsI6DlRCCK1JYW', '2024-05-14 16:46:27', 'client', 'verified', 'active', 'true', '', '2024-04-15 17:29:25', ''),
(201, '7ccdaf5a8ead0cd16d4993d50d21d11a1d03a8ed56f24612dd', 'test@gmail.com', 'test', '$2y$10$lugkVMUPGu93iEOO2Ra4g.k8JLoifsZWA8uVw80jq6ZM7WkS5W.sC', '2024-04-25 13:03:42', 'client', 'verified', 'active', 'true', 'e33bfae66f2d5d64186120a9d0df64b2a2cea57402494c8a97', '2024-04-18 12:22:10', ''),
(203, 'ae8abbfd6ae5348573cb45ce4c94adc6acff2e74f6ba562a6c', 'smithlednaj@gmail.com', 'Lednaj123', '$2y$10$3hIlydLttiyIsvwKeM5SrOoRdbV3OYSwWT/zZUiE0CfK3LTyYbkG.', '2024-05-14 14:54:54', 'agent', 'verified', 'active', 'true', '', '2024-05-14 14:53:24', '');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `update_account_status` BEFORE UPDATE ON `users` FOR EACH ROW BEGIN
    IF NEW.time_log < DATE_SUB(NOW(), INTERVAL 30 DAY) THEN
        SET NEW.accountStatus = 'inactive';
    END IF;
END
$$
DELIMITER ;

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
  ADD UNIQUE KEY `AgentCode` (`AgentCode`),
  ADD KEY `fk_agent_user_id` (`agent_id`),
  ADD KEY `subagents` (`FA`,`branch`),
  ADD KEY `fk_agent_branch` (`branch`),
  ADD KEY `agent_token` (`agent_token`),
  ADD KEY `fk_agent_username` (`username`);

--
-- Indexes for table `aial`
--
ALTER TABLE `aial`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aial_token` (`aial_token`),
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
  ADD KEY `fk_app_username` (`username`);

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
-- Indexes for table `client_plan`
--
ALTER TABLE `client_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_scheduler`
--
ALTER TABLE `client_scheduler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commissions`
--
ALTER TABLE `commissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fback`
--
ALTER TABLE `fback`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `fk_app_life_token` (`app_life_token`),
  ADD KEY `fk_life_username` (`username`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sou`
--
ALTER TABLE `sou`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sou_app_id` (`applicant_id`),
  ADD KEY `app_sou_token` (`app_sou_token`);

--
-- Indexes for table `to_confirm`
--
ALTER TABLE `to_confirm`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aial`
--
ALTER TABLE `aial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client_plan`
--
ALTER TABLE `client_plan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `client_scheduler`
--
ALTER TABLE `client_scheduler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `commissions`
--
ALTER TABLE `commissions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `fback`
--
ALTER TABLE `fback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gli`
--
ALTER TABLE `gli`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lifechangerform`
--
ALTER TABLE `lifechangerform`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sou`
--
ALTER TABLE `sou`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `to_confirm`
--
ALTER TABLE `to_confirm`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

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
-- Constraints for table `aial`
--
ALTER TABLE `aial`
  ADD CONSTRAINT `fk_aial_token` FOREIGN KEY (`aial_token`) REFERENCES `applicant` (`app_token`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_aial_userId` FOREIGN KEY (`user_id`) REFERENCES `applicant` (`applicant_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

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
  ADD CONSTRAINT `fk_app_life_token` FOREIGN KEY (`app_life_token`) REFERENCES `applicant` (`app_token`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_life_app_id` FOREIGN KEY (`user_id`) REFERENCES `applicant` (`applicant_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_life_username` FOREIGN KEY (`username`) REFERENCES `applicant` (`username`) ON DELETE RESTRICT ON UPDATE RESTRICT;

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

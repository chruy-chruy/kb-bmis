-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 03:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `northdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay_clearance`
--

CREATE TABLE `barangay_clearance` (
  `id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date_issued` date NOT NULL,
  `cedula_number` varchar(255) NOT NULL,
  `cedula_place` varchar(255) NOT NULL,
  `cedula_date` date NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `img_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangay_clearance`
--

INSERT INTO `barangay_clearance` (`id`, `resident_id`, `name`, `address`, `purpose`, `date_issued`, `cedula_number`, `cedula_place`, `cedula_date`, `date_created`, `img_url`) VALUES
(151, 47, 'troy Michael  Ancino  Garidos ', '2 qweq 11', 'scholar', '2021-12-26', '1231', 'general santos city', '2021-12-15', '2021-12-26', '0'),
(152, 47, 'troy Michael  Ancino  Garidos ', '2 qweq 11', 'wda', '2021-12-26', '11231', 'qewwq', '2021-12-29', '2021-12-26', '0'),
(153, 0, '', '', '', '2021-12-26', '', '', '0000-00-00', '2021-12-26', '0'),
(154, 0, '', '', '', '2021-12-26', '', '', '0000-00-00', '2021-12-26', '0'),
(155, 0, 'Troy Michael Garidos', '', '', '2021-12-26', '', '', '0000-00-00', '2021-12-26', '0'),
(156, 0, 'Troy Michael Garidos', '', '', '2021-12-26', '', '', '0000-00-00', '2021-12-26', '0'),
(157, 7, 'Lee   sqwe  Heeseung ', 'Purok 12 Sampaguita St. 003', 'we', '2021-12-29', '123211', 'qwe', '2021-12-02', '2021-12-29', '0'),
(158, 7, 'Lee   sqwe  Heeseung ', 'Purok 12 Sampaguita St. 003', 'qwe', '2021-12-29', '1232131', 'tae', '2021-12-02', '2021-12-29', '0'),
(159, 62, 'qwe  eqe  wqewq qeq', '131 3123 12321', 'sda', '2021-12-29', '1231', 'dasd', '2021-12-02', '2021-12-29', '0'),
(160, 62, 'qwe  eqe  wqewq qeq', '131 3123 12321', 'qwe', '2021-12-29', '3', '123', '2021-12-28', '2021-12-29', '__1640785064.png'),
(161, 62, 'qwe  eqe  wqewq qeq', '131 3123 12321', 'qwe', '2021-12-29', '3', '123', '2021-12-28', '2021-12-29', '__1640785095.png'),
(162, 62, 'qwe  eqe  wqewq qeq', '131 3123 12321', 'qwe', '2021-12-29', '3', '123', '2021-12-28', '2021-12-29', '__1640785183.png'),
(163, 62, 'qwe  eqe  wqewq qeq', '131 3123 12321', 'qwe', '2021-12-29', '3', '123', '2021-12-28', '2021-12-29', 'qwe  eqe  wqewq qeq_1640785248.png'),
(164, 62, 'qwe  eqe  wqewq qeq', '131 3123 12321', 'qwe', '2021-12-29', '3', '123', '2021-12-28', '2021-12-29', 'qwe  eqe  wqewq qeq_1640785298.png'),
(165, 62, 'qwe  eqe  wqewq qeq', '131 3123 12321', 'qweqw', '2021-12-29', '12321312', 'ewqew', '2021-12-22', '2021-12-29', 'qwe  eqe  wqewq qeq_1640785326.png'),
(166, 7, 'Leesss  sqwe  Heeseung ', 'Purok 12 Sampaguita St. 003', 'qweqwe', '2021-12-29', '12312', 'eqewq', '2021-12-20', '2021-12-29', 'Leesss  sqwe  Heeseung _1640785400.png'),
(167, 7, 'Leesss  sqwe  Heeseung ', 'Purok 12 Sampaguita St. 003', 'qweqwe', '2021-12-29', '12312', 'eqewq', '2021-12-20', '2021-12-29', '1640785603'),
(168, 62, 'qwe  eqe  wqewq qeq', '131 3123 12321', '1231', '2021-12-29', '1231', 'qwe', '2021-12-31', '2021-12-29', '1640785637'),
(169, 62, 'qwe  eqe  wqewq qeq', '131 3123 12321', '1231', '2021-12-29', '1231', 'qwe', '2021-12-31', '2021-12-29', '1640785725'),
(170, 62, 'qwe  eqe  wqewq qeq', '131 3123 12321', '12321', '2021-12-29', '1231', '312321', '2021-12-22', '2021-12-29', '1640785732'),
(171, 62, 'qwe  eqe  wqewq qeq', '131 3123 12321', '123', '2021-12-29', '123', '12321', '2021-12-29', '2021-12-29', 'qwe  eqe  wqewq qeq_1640785989.png'),
(172, 62, 'qwe  eqe  wqewq qeq', '131 3123 12321', '123', '2021-12-29', '123', '12321', '2021-12-29', '2021-12-29', 'qwe  eqe  wqewq qeq_1640786095.png'),
(173, 62, 'qwe  eqe  wqewq qeq', '131 3123 12321', '12321', '2021-12-29', '2312', '23131', '2021-12-21', '2021-12-29', 'qwe  eqe  wqewq qeq_1640786105.png'),
(174, 63, 'q  eqeqe  qwe qeq', 'eq qeq qwe', 'qwe', '2021-12-29', '12321', 'qweq', '2021-12-14', '2021-12-29', 'q  eqeqe  qwe qeq_1640786136.png'),
(175, 63, 'q  eqeqe  qwe qeq', 'eq qeq qwe', 'qwe', '2021-12-29', '12321', 'qweq', '2021-12-14', '2021-12-29', 'images/q  eqeqe  qwe qeq_1640786669.png'),
(176, 7, 'Leesss  sqwe  Heeseung ', 'Purok 12 Sampaguita St. 003', '12321', '2021-12-29', '213', '12321', '2021-12-29', '2021-12-29', 'images/Leesss  sqwe  Heeseung _1640786711.png'),
(177, 7, 'Leesss  sqwe  Heeseung ', 'Purok 12 Sampaguita St. 003', '12321', '2021-12-29', '213', '12321', '2021-12-29', '2021-12-29', 'images/Leesss  sqwe  Heeseung _1640786715.png'),
(178, 7, 'Leesss  sqwe  Heeseung ', 'Purok 12 Sampaguita St. 003', '12312', '2021-12-29', '1231', '12321', '2021-12-23', '2021-12-29', 'images/Leesss  sqwe  Heeseung _1640786725.png'),
(179, 7, 'Leesss  sqwe  Heeseung ', 'Purok 12 Sampaguita St. 003', '12312', '2021-12-29', '1231', '12321', '2021-12-23', '2021-12-29', 'images/Leesss  sqwe  Heeseung _1640786771.png'),
(180, 7, 'Leesss  sqwe  Heeseung ', 'Purok 12 Sampaguita St. 003', '12321', '2021-12-29', '132131', '1232', '2022-01-07', '2021-12-29', 'images/Leesss  sqwe  Heeseung _1640786880.png'),
(181, 7, 'Leesss  sqwe  Heeseung ', 'Purok 12 Sampaguita St. 003', '123', '2021-12-29', '312321', '12312', '2021-12-31', '2021-12-29', 'images/Leesss  sqwe  Heeseung _1640786945.png'),
(182, 7, 'Leesss  sqwe  Heeseung ', 'Purok 12 Sampaguita St. 003', '1231', '2021-12-29', '12312', '1312', '2021-12-08', '2021-12-29', 'images/Leesss  sqwe  Heeseung _1640787304.png'),
(183, 7, 'Leesss  sqwe  Heeseung ', 'Purok 12 Sampaguita St. 003', '2132', '2021-12-29', '321321', '1312', '2021-12-22', '2021-12-29', 'images/Leesss  sqwe  Heeseung _1640787381.png'),
(184, 63, 'q  eqeqe  qwe qeq', 'eq qeq qwe', 'qweqwe', '2021-12-29', '123', 'asad', '2021-12-02', '2021-12-29', 'images/q  eqeqe  qwe qeq_1640787810.png');

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `id` int(11) NOT NULL,
  `off_position` varchar(255) NOT NULL,
  `off_name` varchar(255) NOT NULL,
  `off_contact` varchar(255) NOT NULL,
  `off_address` varchar(255) NOT NULL,
  `termStart` date NOT NULL,
  `termEnd` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`id`, `off_position`, `off_name`, `off_contact`, `off_address`, `termStart`, `termEnd`, `status`, `img_url`) VALUES
(6, 'Barangay Kagawad', 'GENESAN A. SAULON', '1231232131', 'North', '2021-04-01', '2021-04-28', '', '1629250023849_ahnjeongwon.jpg'),
(7, 'Barangay Kagawad', 'RAFAEL D. BALAGTAS', '12321', 'North', '2021-04-15', '2021-04-29', '', '1629249985546_yongseokmin.jpg'),
(10, 'Barangay Secretary', 'JONA CARIÃ‘O', '12321', 'North', '2021-04-16', '2021-04-29', '', '1619160979926_suzy.jpg'),
(12, 'Barangay Kagawad', 'RODOLFO O. PASCUAL JR.', '010', 'North', '2021-04-14', '2021-04-22', '', '1629250071243_leeikjun.jpg'),
(13, 'Barangay Treasurer', 'JEROME JORDAN', '123', 'North', '2021-04-14', '2021-04-15', '', '1619160996486_doyeon.jpg'),
(14, 'Barangay Kagawad', 'NOEL T. BAUTISTA', 'bsthb', 'North', '2021-04-16', '2021-04-30', '', '1619160935128_kwangsoo.jpg'),
(15, 'Barangay Kagawad', 'IRVIN L. BALIGASA', '123456789', 'North', '2021-04-17', '2021-05-01', '', '1619160946993_mooyeol.jpg'),
(16, 'Barangay Kagawad', 'ANDREA SHANENIAH M. MEJIA', '789', 'North', '2021-04-03', '2021-05-08', '', '1629249969996_chaesonghwa.jpg'),
(17, 'SK Chairperson', 'REA PAULA P. DOMINGUEZ', '123', 'North', '2021-04-07', '2021-05-06', '', '1618834743986_yoojung.jpg'),
(18, 'Barangay Kagawad', 'GRACE B. ALFANTA', '123', 'North', '2021-04-03', '2021-04-09', '', '1619161009478_iu.jpg'),
(22, 'Barangay Captain', 'RENIEL A. GONATO', '12321', 'Dagohoy', '2021-04-28', '2021-04-30', '', '1620931325324_1618669499472_yjg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `officials_archive`
--

CREATE TABLE `officials_archive` (
  `officials_archive_id` int(11) NOT NULL,
  `official_id` int(11) NOT NULL,
  `off_position` varchar(255) NOT NULL,
  `off_name` varchar(255) NOT NULL,
  `off_contact` varchar(255) NOT NULL,
  `off_address` varchar(255) NOT NULL,
  `termStart` date NOT NULL,
  `termEnd` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `mid_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `sex` varchar(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `purok` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `voter_status` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `tel_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `alien_status` varchar(55) NOT NULL,
  `senior_status` varchar(55) NOT NULL,
  `disability_status` varchar(50) NOT NULL,
  `type_disability` varchar(50) NOT NULL,
  `4ps_status` varchar(55) NOT NULL,
  `deceased_status` varchar(55) NOT NULL,
  `voter_id` varchar(55) NOT NULL,
  `precinct_number` varchar(55) NOT NULL,
  `national_id` varchar(55) NOT NULL,
  `vaccine_admin` varchar(55) NOT NULL,
  `emergency_person` varchar(255) NOT NULL,
  `relationship` varchar(55) NOT NULL,
  `emergency_address` varchar(255) NOT NULL,
  `emergency_contact` varchar(55) NOT NULL,
  `date_of_death` date NOT NULL,
  `education_status` varchar(100) NOT NULL,
  `place_of_birth` varchar(100) NOT NULL,
  `religion` varchar(55) NOT NULL,
  `blood_type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `first_name`, `mid_name`, `last_name`, `suffix`, `sex`, `date_of_birth`, `house_number`, `street`, `purok`, `occupation`, `citizenship`, `civil_status`, `voter_status`, `phone_number`, `tel_number`, `email`, `img_url`, `alien_status`, `senior_status`, `disability_status`, `type_disability`, `4ps_status`, `deceased_status`, `voter_id`, `precinct_number`, `national_id`, `vaccine_admin`, `emergency_person`, `relationship`, `emergency_address`, `emergency_contact`, `date_of_death`, `education_status`, `place_of_birth`, `religion`, `blood_type`) VALUES
(8, 'Park ', 'Sung', 'Hoon', '', 'Male', '2002-12-02', '003', 'Sampaguita St.', 'Purok 9', 'Singer', 'Filipino', 'Single', 'Registered', '09268187409', '244-4233-233', 'sung123@gmail.com', '1634656956910_tumblr_6555ef84bbab4e5ba08d4a87d947505f_1b4f5575_1280.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(9, 'Ryu-jin', '', 'Shin ', '', 'Female', '2014-04-17', '003', 'Sampaguita St.', 'Purok 9', 'Singer', 'Filipino', 'Married', 'Not Registered', '09268187409', '244-32-3222', 'ryujin@gmail.com', '1635268857014_EqNSmlxXcAEX9nY.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(15, 'Min-A', '', 'Shin ', '', 'Female', '2005-03-02', '003', 'Sampaguita St.', 'Purok 3', 'Singer', 'Filipino', 'Single', 'Registered', '09268187409', '244', 'herzliabarangan@gmail.com', '1635268963881_jCVxpph5_400x400.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(16, 'Juan', 'Reyes', 'Dela Cruz', 'Sr.', 'Male', '1960-07-11', '15', 'Santa Cruz', 'Purok 6', 'Businessman', 'Filipino', 'Single', 'Registered', '09123456789', '877000', 'juandelacruz@email.com', '1623913790.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(39, 'qwe', 'qwe', 'qew', 'qwe', 'female', '2021-12-11', 'qwe', 'qweq', 'eqe', 'qwe', 'eq', 'married', 'yes', 'qweq', 'qweq', 'newacc.troy@gmail.com', '', 'yes', 'yes', '', 'Chronic I llness', 'yes', 'yes', '123', '12313', '12321', 'qweqew', '123', '123', '1321', '32131', '2021-12-30', 'ewqeq', 'qeq', 'qeq', 'ab-'),
(40, 'qwe', 'eqeq', 'qeq', 'qweq', 'female', '2021-12-09', '123', '131', '3132', 'ewqe', 'qweq', 'married', '', 'qewq', 'ewqeqw', 'newacc.troy@gmail.com', '', 'yes', '', 'on', 'Learning Disability', 'yes', 'yes', 'qd', 'asda', 'ada', 'asd', 'ad', 'asd', 'ada', 'a', '2021-12-15', 'eqwewq', '2131qqe', 'qw', 'b+'),
(41, '21312', '1232', '123', '1312', 'female', '2021-12-09', '12', 'qwe', 'qq', '', '', 'married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'qwewq', '', ''),
(47, 'troy Michael', 'Ancino', 'Garidos', '', 'Male', '2021-12-28', '11', 'qweq', '2', 'student', '', 'married', 'Registered Voter', '09531023180', '2321312', 'newacc.troy@gmail.com', '', 'Outside of the Philippines', 'Senior Citizen', 'Person with Disability', 'Psychosocial Disability', '4Ps', '', '123213', '123', '1231', '123', 'tedmergaridos', 'father', 'Purok 15 Zone 4 Lagao. General Santos City', 'Purok 15 Zone 4 Lagao. General Santos City', '0000-00-00', 'college', 'General Santos City', 'catholic', 'o+'),
(48, '123', '312321', '131', '1233', 'Female', '2021-12-03', 'wqe', '2', 'qwe', '', 'qwe', 'married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '123', 'qweqwewq', 'qweq', ''),
(49, '123', '312321', '131', '1233', 'Female', '2021-12-03', 'wqe', '2', 'qwe', '', 'qwe', 'married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '123', 'qweqwewq', 'qweq', ''),
(50, '123', '312321', '131', '1233', 'Female', '2021-12-03', 'wqe', '2', 'qwe', '', 'qwe', 'married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '123', 'qweqwewq', 'qweq', ''),
(51, '123', '312321', '131', '1233', 'Female', '2021-12-03', 'wqe', '2', 'qwe', '', 'qwe', 'married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '123', 'qweqwewq', 'qweq', ''),
(52, '123', '312321', '131', '1233', 'Female', '2021-12-03', 'wqe', '2', 'qwe', '', 'qwe', 'married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '123', 'qweqwewq', 'qweq', ''),
(53, '123', '312321', '131', '1233', 'Female', '2021-12-03', 'wqe', '2', 'qwe', '', 'qwe', 'married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '123', 'qweqwewq', 'qweq', ''),
(54, '123', '312321', '131', '1233', 'Female', '2021-12-03', 'wqe', '2', 'qwe', '', 'qwe', 'married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '123', 'qweqwewq', 'qweq', ''),
(55, 'troy', '312321', '131', '1233', 'Female', '2021-12-03', 'wqe', '2', 'qwe', '', 'qwe', 'married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '123', 'qweqwewq', 'qweq', ''),
(56, 'troy', '312321', 'tae', '1233', 'Female', '2021-12-03', 'wqe', '2', 'qwe', '', 'qwe', 'married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '123', 'qweqwewq', 'qweq', ''),
(57, 'troy', '312321', 'tae', '1233', 'Female', '2021-12-03', 'wqe', '2', 'qwe', '', 'qwe', 'married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '123', 'qweqwewq', 'qweq', ''),
(58, 'qwe111111', 'qwewqe', 'qwe', 'wqeq', 'Female', '2021-12-03', 'qeq', 'wqe', 'eqw', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'qweq', '', ''),
(59, 'sssss', 's', 'zcx', 'ss', 'Female', '2021-12-10', '12321', 'sad', 'qwe', '', '', '', '', '', '', '', 'sssss_zcx_1640774204.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'q1232112', '', ''),
(60, 'qwe', 'eqe', 'wqeq', 'qeqe', 'Male', '2021-12-09', 'qweq', 'eq', 'weqe', '', '', '', '', '', '', '', 'qwe_wqeq_1640783665.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'qeqeqw', '', ''),
(61, 'qwe', 'qwewq', 'qwe', 'ewqeqw', 'Male', '2021-12-02', '123', '21321', '3213', '', '', '', '', '', '', '', 'default-img.sv', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '12312', '', ''),
(62, 'qwe', 'eqe', 'wqewq', 'qeq', 'Female', '2021-12-02', '12321', '3123', '131', '', '', '', '', '', '', '', 'default-img.svg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '321', '', ''),
(63, 'q', 'eqeqe', 'qwe', 'qeq', 'Female', '2021-12-03', 'qwe', 'qeq', 'eq', '', '', '', '', '', '', '', 'default-img.svg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'eqeq', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `residents_archive`
--

CREATE TABLE `residents_archive` (
  `residents_archive_id` int(11) NOT NULL,
  `resident_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `mid_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `sex` varchar(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `purok` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `health_status` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `voter_status` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `tel_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `role`) VALUES
(1, 'admin', '1', 'admin', 'Admin'),
(2, 'sec', '123', 'Vanessa Pascual', 'Secretary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay_clearance`
--
ALTER TABLE `barangay_clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials_archive`
--
ALTER TABLE `officials_archive`
  ADD PRIMARY KEY (`officials_archive_id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents_archive`
--
ALTER TABLE `residents_archive`
  ADD PRIMARY KEY (`residents_archive_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangay_clearance`
--
ALTER TABLE `barangay_clearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `officials_archive`
--
ALTER TABLE `officials_archive`
  MODIFY `officials_archive_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `residents_archive`
--
ALTER TABLE `residents_archive`
  MODIFY `residents_archive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

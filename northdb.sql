-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 11:13 AM
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
  `url_image` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangay_clearance`
--

INSERT INTO `barangay_clearance` (`id`, `resident_id`, `name`, `address`, `purpose`, `date_issued`, `cedula_number`, `cedula_place`, `cedula_date`, `url_image`, `date_created`) VALUES
(1, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-10', '../image/1623500622.jpg', '2021-06-12'),
(2, 145, '2313 12312123 12312 qwe', 'purok 13 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312', 'barangay North', '2021-06-29', '../image/1623500808.jpg', '2021-06-12'),
(3, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312', 'qweq', '2021-06-29', '../image/1623501306.jpg', '2021-06-12'),
(4, 91, 'tase', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-21', '../image/1623501706.jpg', '2021-06-12'),
(5, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623501886.jpg', '2021-06-12'),
(6, 91, 'tase', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-21', '../image/1623501886.jpg', '2021-06-12'),
(7, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623501909.jpg', '2021-06-12'),
(8, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623501916.jpg', '2021-06-12'),
(9, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-15', '../image/1623501916.jpg', '2021-06-12'),
(10, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623501966.jpg', '2021-06-12'),
(11, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623501968.jpg', '2021-06-12'),
(12, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623501971.jpg', '2021-06-12'),
(13, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'wqe', '2021-06-12', 'qwe', 'qweq', '2021-06-22', '../image/1623501971.jpg', '2021-06-12'),
(14, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'wqe', '2021-06-12', 'qwe', 'qweq', '2021-06-22', '../image/1623501999.jpg', '2021-06-12'),
(15, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'wqe', '2021-06-12', 'qwe', 'qweq', '2021-06-22', '../image/1623502032.jpg', '2021-06-12'),
(16, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502037.jpg', '2021-06-12'),
(17, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'wqe', '2021-06-12', 'qwe', 'qweq', '2021-06-22', '../image/1623502037.jpg', '2021-06-12'),
(18, 91, 'tae', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qweq', '2021-06-12', 'qew', 'qweq', '2021-06-22', '../image/1623502081.jpg', '2021-06-12'),
(19, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502111.jpg', '2021-06-12'),
(20, 91, 'tae', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qweq', '2021-06-12', 'qew', 'qweq', '2021-06-22', '../image/1623502111.jpg', '2021-06-12'),
(21, 91, 'tae', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qweq', '2021-06-12', 'qew', 'qweq', '2021-06-22', '../image/1623502114.jpg', '2021-06-12'),
(22, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwe', '2021-06-12', 'qwe', 'qwe', '2021-06-29', '../image/1623502187.jpg', '2021-06-12'),
(23, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502201.jpg', '2021-06-12'),
(24, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwe', '2021-06-12', 'qwe', 'qwe', '2021-06-29', '../image/1623502201.jpg', '2021-06-12'),
(25, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502272.jpg', '2021-06-12'),
(26, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502275.jpg', '2021-06-12'),
(27, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502275.jpg', '2021-06-12'),
(28, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502306.jpg', '2021-06-12'),
(29, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502311.jpg', '2021-06-12'),
(30, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502311.jpg', '2021-06-12'),
(31, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502350.jpg', '2021-06-12'),
(32, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502370.jpg', '2021-06-12'),
(33, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502370.jpg', '2021-06-12'),
(34, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502437.jpg', '2021-06-12'),
(35, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502437.jpg', '2021-06-12'),
(36, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502464.jpg', '2021-06-12'),
(37, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502475.jpg', '2021-06-12'),
(38, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502475.jpg', '2021-06-12'),
(39, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502482.jpg', '2021-06-12'),
(40, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502498.jpg', '2021-06-12'),
(41, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502501.jpg', '2021-06-12'),
(42, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502505.jpg', '2021-06-12'),
(43, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502505.jpg', '2021-06-12'),
(44, 91, 'asda', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', 'eqw', 'qwe', '2021-06-07', '../image/1623502507.jpg', '2021-06-12'),
(45, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sasd', '2021-06-12', 'asdas', 'sada', '2021-05-31', '../image/1623502547.jpg', '2021-06-12'),
(46, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sasd', '2021-06-12', 'asdas', 'sada', '2021-05-31', '../image/1623502588.jpg', '2021-06-12'),
(47, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sasd', '2021-06-12', 'asdas', 'sada', '2021-05-31', '../image/1623502599.jpg', '2021-06-12'),
(48, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sasd', '2021-06-12', 'asdas', 'sada', '2021-05-31', '../image/1623502629.jpg', '2021-06-12'),
(49, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502705.jpg', '2021-06-12'),
(50, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502712.jpg', '2021-06-12'),
(51, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '../image/1623502715.jpg', '2021-06-12'),
(52, 91, '123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwe', '2021-06-12', '12312312', 'barangay North', '2021-06-01', '../image/1623502776.jpg', '2021-06-12'),
(53, 91, 'troy', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwe', '2021-06-12', '12312312', 'barangay North', '2021-06-01', '../image/1623502790.jpg', '2021-06-12'),
(54, 91, 'wew', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', '12312', '2021-06-12', '12321321', 'qweq', '2021-06-08', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(55, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(56, 91, 'wew', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', '12312', '2021-06-12', '12321321', 'qweq', '2021-06-08', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(57, 91, 'wew', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', '12312', '2021-06-12', '12321321', 'qweq', '2021-06-08', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(58, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(59, 91, 'wew', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', '12312', '2021-06-12', '12321321', 'qweq', '2021-06-08', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(60, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(61, 91, '123123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sada', '2021-06-12', 'asdsa', 'qweq', '2021-06-16', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(62, 91, '123123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sada', '2021-06-12', 'asdsa', 'qweq', '2021-06-16', '../image/1623503211.jpg', '2021-06-12'),
(63, 91, '123123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sada', '2021-06-12', 'asdsa', 'qweq', '2021-06-16', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(64, 91, '123123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'sada', '2021-06-12', 'asdsa', 'qweq', '2021-06-16', '../image/1623503223.jpg', '2021-06-12'),
(65, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(66, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(67, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(68, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503282.jpg', '2021-06-12'),
(69, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(70, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503376.jpg', '2021-06-12'),
(71, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503434.jpg', '2021-06-12'),
(72, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(73, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503440.jpg', '2021-06-12'),
(74, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503466.jpg', '2021-06-12'),
(75, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(76, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503470.jpg', '2021-06-12'),
(77, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503487.jpg', '2021-06-12'),
(78, 91, '123rttr', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503490.jpg', '2021-06-12'),
(79, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(80, 91, 'troyyyyyyyyyyy', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'Tuli', '2021-06-12', '12312312', 'qweq', '2021-06-01', '../image/1623503514.jpg', '2021-06-12'),
(81, 91, 'qwe 12312123 12312 123', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qweq', '2021-06-12', 'qweq', 'qqwewq', '2021-06-01', '../../n_residents/image/1623237928815_aada989c8caadbde87cdce7b7bc53dbd.jpg', '2021-06-12'),
(82, 91, 'qweqeq', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', '12312312', 'qweq', '2021-06-10', '../image/1623503572.jpg', '2021-06-12'),
(83, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(84, 91, 'qweqeq', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', '12312312', 'qweq', '2021-06-10', '../image/1623503653.jpg', '2021-06-12'),
(85, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(86, 91, 'scasdca', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City 123', 'qwewq', '2021-06-12', '12312312', 'qweq', '2021-06-10', '../image/1623503660.jpg', '2021-06-12'),
(87, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(88, 55, 'troy Michael Ancino Garidos ', '15 wew 555', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-03', '../image/1623503710.jpg', '2021-06-12'),
(89, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(90, 55, 'troy Michael Ancino Garidos ', '15 wew 555', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-03', '../image/1623503732.jpg', '2021-06-12'),
(91, 55, 'troy Michael Ancino Garidos ', '15 wew 555', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-03', '../image/1623503754.jpg', '2021-06-12'),
(92, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(93, 55, 'troy Michael Ancino Garidos ', '15 wew 555', 'Tuli', '2021-06-12', '12312312', 'barangay North', '2021-06-03', '../image/1623503766.jpg', '2021-06-12'),
(94, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '', '2021-06-12'),
(95, 55, 'chroy Michael Ancino Garidos ', '15 wew 555', 'qweq', '2021-06-12', 'eqw', 'qweq', '2021-06-04', '../image/1623503893.jpg', '2021-06-12'),
(96, 55, 'chruy', '15 wew 555', '12321', '2021-06-18', 'eqw', 'qweq', '2021-06-10', '../image/1623504126.jpg', '2021-06-12'),
(97, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'sd', '2021-06-12', 'asdas', 'sda', '2021-06-02', '../../n_residents/image/1620903124262_162033562_440007637078575_2173182379989910500_n.jpg', '2021-06-12'),
(98, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'qwewq', '2021-06-12', '12312312', 'barangay North', '2021-06-03', '../image/1623504478.jpg', '2021-06-12'),
(99, 147, 'Troy Michael Garidos ', 'purok 10 laurel 123', 'Tuli', '2021-06-13', '12312312', 'barangay North', '2021-06-01', '../../n_residents/image/1623492603.jpg', '2021-06-13'),
(100, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'Tuli', '2021-06-13', '12312312', 'qweq', '2021-06-07', '../../n_residents/image/1620903124262_162033562_440007637078575_2173182379989910500_n.jpg', '2021-06-13'),
(101, 131, '2313 qweqw qweqwe qwe', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City qeqw', 'qwewq', '2021-06-13', '12312312', 'qweq', '2021-06-01', '../../n_residents/image/1623244723.jpg', '2021-06-13'),
(102, 131, '2313 qweqw qweqwe qwe', 'purok 11 Purok 15 Zone 4 Lagao. General Santos City qeqw', 'qwewq', '2021-06-13', '12312312', 'qweq', '2021-06-01', '../../n_residents/image/1623244723.jpg', '2021-06-13'),
(103, 68, 'wqeqw qwe qwe qew', 'purok 11 qwe qeqw', 'qweq', '2021-06-13', 'eqw', 'qweq', '2021-05-31', '../../n_residents/image/default.png', '2021-06-13'),
(104, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'Tuli', '2021-06-17', '12312312', 'barangay North', '2021-07-07', '../../n_residents/image/1623913790.jpg', '2021-06-17'),
(105, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'qweqw', '2021-06-17', '12312312', 'barangay North', '2021-06-21', '../../n_residents/image/1623913790.jpg', '2021-06-17'),
(106, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'qweqw', '2021-06-17', '12312312', 'barangay North', '2021-06-21', '../image/1623939831.jpg', '2021-06-17'),
(107, 61, 'Ghorl Pren Bhoi Jr.', '8 Apple street 120', 'qwewq', '2021-06-17', 'qewqqweqw', 'qeq', '2021-06-14', '../image/1623941769.jpg', '2021-06-17'),
(108, 55, 'troy Michael Ancino Garidos ', '15 wew 555', '1231', '2021-06-17', '12321321', '1231', '2021-07-01', '../../n_residents/image/default.png', '2021-06-17'),
(109, 55, 'troy Michael Ancino Garidos ', '15 wew 555', '1231', '2021-06-17', '12321321', '1231', '2021-07-01', '../../n_residents/image/default.png', '2021-06-17'),
(110, 55, 'troy Michael Ancino Garidos ', '15 wew 555', '1231', '2021-06-17', '12321321', '1231', '2021-07-01', '../../n_residents/image/default.png', '2021-06-17'),
(111, 44, 'reijan12312312 pangit BAYOT 21', 'asd asdada dasdac', 'qwewq', '2021-06-17', 'qwewqqwe', 'qweqw', '2021-06-15', '../../n_residents/image/1623913790.jpg', '2021-06-17'),
(112, 55, 'Troy Michael Ancino Garidos Jr.', '555 Lemon Street, Purok 15', 'Job Application', '2021-07-11', '789456123', 'Barangay North', '2021-07-10', '../../n_residents/image/1625992418779_leeikjun.jpg', '2021-07-11'),
(113, 44, 'Juan Reyes Dela Cruz Sr.', 'purok 6 Santa Cruz 15', 'hehe', '2021-09-03', '434241', '5646', '2021-09-01', '../../n_residents/image/1623913790.jpg', '2021-09-03'),
(114, 66, 'Andres Bonifacio Rizal Jr.', 'purok 7 Mangga 55', 'hehe', '2021-09-06', '434241', '5646', '2021-09-02', '../../n_residents/image/1629248178181_ahnjeongwon.jpg', '2021-09-06'),
(115, 66, 'Andres Bonifacio Rizal Jr.', 'purok 7 Mangga 55', 'hehe', '2021-09-06', '434241', '5646', '2021-09-01', '../../n_residents/image/1629248178181_ahnjeongwon.jpg', '2021-09-06'),
(116, 66, 'Andres Bonifacio Rizal Jr.', 'purok 7 Mangga 55', 'a', '2021-09-21', '21', 'ad', '2021-09-22', '../../n_residents/image/1629248178181_ahnjeongwon.jpg', '2021-09-22'),
(117, 66, 'Andres Bonifacio Rizal Jr.', 'purok 7 Mangga 55', 'dfsfsf', '2021-10-03', '231', 'dasddsda', '2021-10-01', '../../n_residents/image/1629248178181_ahnjeongwon.jpg', '2021-10-04'),
(118, 87, 'Enrique Dela Cruz Gil Jr.', 'purok 11 Alerta 21', 'dfsfsfaasasasas', '2021-10-03', 'ty', 'yt', '2021-09-29', '../../n_residents/image/1629249001338_kimjunwan.jpg', '2021-10-04'),
(119, 66, 'Andres Bonifacio Rizal Jr.', 'purok 7 Mangga 55', 'hehe', '2021-10-04', '434241', '5646', '2021-09-30', '../../n_residents/image/1629248178181_ahnjeongwon.jpg', '2021-10-04'),
(120, 66, 'Andres Bonifacio Rizal Jr.', 'purok 7 Mangga 55', 'hehe', '2021-10-04', '434241', '5646', '2021-10-04', '../../n_residents/image/1629248178181_ahnjeongwon.jpg', '2021-10-04'),
(121, 44, 'Juan Reyes Dela Cruz Sr.', 'purok 6 Santa Cruz 15', 'hehe', '2021-10-04', '434241', '5646', '2021-10-01', '../../n_residents/image/1633361753541_right.png', '2021-10-04'),
(122, 44, 'Juan Reyes Dela Cruz Sr.', 'Kurok 6 Santa Cruz 15', 'hehe', '2021-10-04', '434241', '5646', '2021-10-01', '../../n_residents/image/1633361753541_right.png', '2021-10-04'),
(123, 72, 'Daniel Santos Padilla III', 'purok 3 Recto 32', 'hehe', '2021-10-04', '434241', 'npt', '2021-10-01', '../../n_residents/image/1629248402756_yangseokhyung.jpg', '2021-10-04'),
(124, 72, 'Daniel Santos Padilla III', 'purok 3 Recto 32', 'Job', '2021-10-04', '434241', 'North', '2021-10-01', '../../n_residents/image/1629248402756_yangseokhyung.jpg', '2021-10-04'),
(125, 130, 'Lia Gomez Barangan ', 'purok 13 Macopa 12', 'Job', '2021-10-04', '1111', 'Sa May Bahay', '2021-10-01', '../../n_residents/image/1629249349689_chuminha.jpg', '2021-10-04'),
(126, 150, 'herzlia Jane ertert Ramos asdadsa', 'Purok 1  gdfg sfsdf', 'hehe', '2021-10-04', '434241', 'North', '2021-10-04', '../../n_residents/image/1633362289593_FAk9BcfUcBc24f4.jpg', '2021-10-04'),
(127, 150, 'herzlia Jane ertert Ramos asdadsa', 'Purok 1  gdfg sfsdf', 'Aehe', '2021-10-04', '434241', 'North', '2021-10-04', '../../n_residents/image/1633362289593_FAk9BcfUcBc24f4.jpg', '2021-10-04'),
(128, 81, 'Charo Santos Concio ', 'purok 7 Mangga 74', 'Job', '2021-10-04', '434241', '5646', '2021-10-01', '../../n_residents/image/1629248639009_heoseonbin.jpg', '2021-10-04'),
(129, 55, 'Troy Michael Ancino Garidos Jr.', '15 Lemon 555', 'fvfsdf', '2021-10-04', '434241', '5646', '2021-09-30', '../../n_residents/image/1625992418779_leeikjun.jpg', '2021-10-04'),
(130, 92, 'Eunice Tiblani Cunanan ', 'purok 7 Mangga 25', 'hehe', '2021-10-04', '43424', 'npt', '2021-10-01', '../../n_residents/image/1629249231020_janggyeoul.jpg', '2021-10-04'),
(131, 81, 'Charo Santos Concio ', 'purok 7 Mangga 74', 'hehe', '2021-10-09', '434241', '5646', '2021-10-10', '../../n_residents/image/1629248639009_heoseonbin.jpg', '2021-10-10'),
(132, 4, 'Aeri Kim Uchinaga ', 'Purok 7 Sampaguita St. 32', 'Trip', '2021-10-19', '231', 'North', '2021-10-20', '../../n_residents/image/1634655345505_354cd0eb23c4439b3d9a4a44ecc9885b.jpg', '2021-10-20'),
(133, 6, 'Jake Jaeyun Sim ', 'Purok 11 Sampaguita St. 003', 'Trip', '2021-10-19', '231', 'North', '2021-10-19', '../../n_residents/image/1634656788445_tumblr_d637b9fca7afc39f76cc3b0c7e515b10_36b993f3_400.jpg', '2021-10-20'),
(134, 4, 'Aeri Kim Uchinaga ', 'Purok 7 Sampaguita St. 32', 'Job', '2021-10-26', '434241', '5646', '2021-10-27', '../../n_residents/image/1634655345505_354cd0eb23c4439b3d9a4a44ecc9885b.jpg', '2021-10-27');

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
(7, 'Lee ', '', 'Heeseung', '', 'Male', '2001-10-15', '003', 'Sampaguita St.', 'Purok 12', 'Singer', 'Filipino', 'Single', 'Not Registered', '09268187409', '5354', 'heeseung@gmail.com', '1634656776509_E_vBcOCUUAQeybi.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(8, 'Park ', 'Sung', 'Hoon', '', 'Male', '2002-12-02', '003', 'Sampaguita St.', 'Purok 9', 'Singer', 'Filipino', 'Single', 'Registered', '09268187409', '244-4233-233', 'sung123@gmail.com', '1634656956910_tumblr_6555ef84bbab4e5ba08d4a87d947505f_1b4f5575_1280.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(9, 'Ryu-jin', '', 'Shin ', '', 'Female', '2014-04-17', '003', 'Sampaguita St.', 'Purok 9', 'Singer', 'Filipino', 'Married', 'Not Registered', '09268187409', '244-32-3222', 'ryujin@gmail.com', '1635268857014_EqNSmlxXcAEX9nY.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(15, 'Min-A', '', 'Shin ', '', 'Female', '2005-03-02', '003', 'Sampaguita St.', 'Purok 3', 'Singer', 'Filipino', 'Single', 'Registered', '09268187409', '244', 'herzliabarangan@gmail.com', '1635268963881_jCVxpph5_400x400.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(16, 'Juan', 'Reyes', 'Dela Cruz', 'Sr.', 'Male', '1960-07-11', '15', 'Santa Cruz', 'Purok 6', 'Businessman', 'Filipino', 'Single', 'Registered', '09123456789', '877000', 'juandelacruz@email.com', '1623913790.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(39, 'qwe', 'qwe', 'qew', 'qwe', 'female', '2021-12-11', 'qwe', 'qweq', 'eqe', 'qwe', 'eq', 'married', 'yes', 'qweq', 'qweq', 'newacc.troy@gmail.com', '', 'yes', 'yes', '', 'Chronic I llness', 'yes', 'yes', '123', '12313', '12321', 'qweqew', '123', '123', '1321', '32131', '2021-12-30', 'ewqeq', 'qeq', 'qeq', 'ab-'),
(40, 'qwe', 'eqeq', 'qeq', 'qweq', 'female', '2021-12-09', '123', '131', '3132', 'ewqe', 'qweq', 'married', '', 'qewq', 'ewqeqw', 'newacc.troy@gmail.com', '', 'yes', '', 'on', 'Learning Disability', 'yes', 'yes', 'qd', 'asda', 'ada', 'asd', 'ad', 'asd', 'ada', 'a', '2021-12-15', 'eqwewq', '2131qqe', 'qw', 'b+'),
(41, '21312', '1232', '123', '1312', 'female', '2021-12-09', '12', 'qwe', 'qq', '', '', 'married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'qwewq', '', ''),
(42, 'qwe', 'eqe', 'qeq', 'qeqeq', 'female', '2021-12-03', 'qwe', 'qeq', 'eqe', '', '', '', '', '', '', '', '', 'yes', 'on', 'on', '', 'yes', 'yes', '', '', '', '', '', '', '', '', '0000-00-00', '', 'q', '', ''),
(43, '123', '131', '13', '313', 'female', '2021-12-03', 'eqe', 'qeq', 'eqeq', '', '', '', 'on', '', '', '', '', 'yes', 'yes', 'yes', 'Learning Disability', 'yes', 'yes', '', '', '', '', '', '', '', '', '0000-00-00', '', 'qsedqedq', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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

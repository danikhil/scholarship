-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 03:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarshipdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Mobile No` int(10) NOT NULL,
  `Course` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Branch` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Year` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Rollnumber` int(20) NOT NULL,
  `UPRollnumber` int(20) NOT NULL,
  `Category` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Rank` int(10) NOT NULL,
  `CatRank` int(6) NOT NULL,
  `CAddress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PAddress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `State` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Pincode` int(20) NOT NULL,
  `Fathername` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Mothername` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Fatherocc` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Motherocc` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `FIncome` int(10) NOT NULL,
  `MIncome` int(10) NOT NULL,
  `Income` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_account`
--

CREATE TABLE `student_account` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_account`
--

INSERT INTO `student_account` (`ID`, `Email`, `Password`) VALUES
(1, '1605213001', '1605213001'),
(2, '1605213002', '1605213002'),
(3, '1605213003', '1605213003'),
(4, '1605213004', '1605213004'),
(5, '1605213005', '1605213005'),
(6, '1605213006', '1605213006'),
(7, '1605213007', '1605213007'),
(8, '1605213008', '1605213008'),
(9, '1605213009', '1605213009'),
(10, '1605213010', '1605213010'),
(11, '1605213011', '1605213011'),
(12, '1605213012', '1605213012'),
(13, '1605213013', '1605213013'),
(14, '1605213014', '1605213014'),
(15, '1605213015', '1605213015'),
(16, '1605213016', '1605213016'),
(17, '1605213017', '1605213017'),
(18, '1605213018', '1605213018'),
(19, '1605213019', '1605213019'),
(20, '1605213020', '1605213020'),
(21, '1605213021', '1605213021'),
(22, '1605213022', '1605213022'),
(23, '1605213023', '1605213023'),
(24, '1605213024', '1605213024'),
(25, '1605213025', '1605213025'),
(26, '1605213026', '1605213026'),
(27, '1605213027', '1605213027'),
(28, '1605213028', '1605213028'),
(29, '1605213029', '1605213029'),
(30, '1605213030', '1605213030'),
(31, '1605213031', '1605213031'),
(32, '1605213032', '1605213032'),
(33, '1605213033', '1605213033'),
(34, '1605213034', '1605213034'),
(35, '1605213035', '1605213035'),
(36, '1605213036', '1605213036'),
(37, '1605213037', '1605213037'),
(38, '1605213038', '1605213038'),
(39, '1605213039', '1605213039'),
(40, '1605213040', '1605213040'),
(41, '1605213041', '1605213041'),
(42, '1605213042', '1605213042'),
(43, '1605213043', '1605213043'),
(44, '1605213044', '1605213044'),
(45, '1605213045', '1605213045'),
(46, '1605213046', '1605213046'),
(47, '1605213047', '1605213047'),
(48, '1605213048', '1605213048'),
(49, '1605213049', '1605213049'),
(50, '1605213050', '1605213050'),
(51, '1605213051', '1605213051'),
(52, '1605213052', '1605213052'),
(53, '1605213053', '1605213053'),
(54, '1605213054', '1605213054'),
(55, '1605213055', '1605213055'),
(56, '1605213056', '1605213056'),
(57, '1605213057', '1605213057'),
(58, '1605213058', '1605213058'),
(59, '1605213059', '1605213059');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Mobile No` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Designation` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Department` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_account`
--

CREATE TABLE `teacher_account` (
  `ID` int(11) NOT NULL,
  `Email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher_account`
--

INSERT INTO `teacher_account` (`ID`, `Email`, `Password`) VALUES
(1, 'dsw@ietlucknow.ac.in', 'dswatiet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_account`
--
ALTER TABLE `student_account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacher_account`
--
ALTER TABLE `teacher_account`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_account`
--
ALTER TABLE `student_account`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_account`
--
ALTER TABLE `teacher_account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

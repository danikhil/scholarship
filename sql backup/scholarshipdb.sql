-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 04:28 PM
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
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Gender` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Mobile No` int(10) NOT NULL,
  `Course` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Branch` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Year` int(10) NOT NULL,
  `Rollnumber` int(20) NOT NULL,
  `UPRollnumber` int(20) NOT NULL,
  `Category` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Rank` int(10) NOT NULL,
  `CatRank` int(6) NOT NULL,
  `CAddress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PAddress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `City` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `State` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Pincode` int(20) NOT NULL,
  `Fathername` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Mothername` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Fatherocc` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `Motherocc` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `FIncome` int(30) NOT NULL,
  `MIncome` int(30) NOT NULL,
  `Income` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

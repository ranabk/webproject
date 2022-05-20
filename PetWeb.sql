-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2022 at 04:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PetWeb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Appointments`
--

CREATE TABLE `Appointments` (
  `ID` int(11) UNSIGNED NOT NULL,
  `petName` varchar(100) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Notes` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Rating` int(10) NOT NULL,
  `Review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Manager`
--

CREATE TABLE `Manager` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `PetOwner`
--

CREATE TABLE `PetOwner` (
  `ID` int(10) UNSIGNED NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Phone_no` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Pic` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Pets`
--

CREATE TABLE `Pets` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Avatar` text NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Birth_date` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Bread` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Vaccination` varchar(100) NOT NULL,
  `Med_History` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Services`
--

CREATE TABLE `Services` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Manager`
--
ALTER TABLE `Manager`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `PetOwner`
--
ALTER TABLE `PetOwner`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Pets`
--
ALTER TABLE `Pets`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Services`
--
ALTER TABLE `Services`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appointments`
--
ALTER TABLE `Appointments`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Manager`
--
ALTER TABLE `Manager`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PetOwner`
--
ALTER TABLE `PetOwner`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Pets`
--
ALTER TABLE `Pets`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Services`
--
ALTER TABLE `Services`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

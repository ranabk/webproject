-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 20, 2022 at 11:48 PM
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
-- Table structure for table `AboutUs`
--

CREATE TABLE `AboutUs` (
  `background` varchar(100) NOT NULL,
  `AboutUs` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `AboutUs`
--

INSERT INTO `AboutUs` (`background`, `AboutUs`) VALUES
('petclinic1.jpeg', 'Our clinic was founded in January 2021 in Saudi Arabia. Since it was established, our staff have been providing unique veterinary medical services and compassionate animal care in Riyadh city. \r\n\r\nHere at the Clinic, we treat every client as they were family and each pet as if they were our own. We try our best to provide complete high quality veterinary care with emphasis on exceptional client service and patient care. We believe that you and your pet should feel as comfortable as possible, that\'s why we offer an online reservation service and manage appointments before your first service begins.');

-- --------------------------------------------------------

--
-- Table structure for table `Appointments`
--

CREATE TABLE `Appointments` (
  `ID` int(11) UNSIGNED NOT NULL,
  `petName` varchar(100) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `ApptDate` date NOT NULL,
  `ApptTime` time NOT NULL,
  `Notes` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Pending',
  `Rating` varchar(10) NOT NULL,
  `Review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Appointments`
--

INSERT INTO `Appointments` (`ID`, `petName`, `Service`, `ApptDate`, `ApptTime`, `Notes`, `Status`, `Rating`, `Review`) VALUES
(5, 'kkjnj', 'mkkj', '2022-05-11', '18:22:54', 'nnjnjn', 'Pending', '0.7', 'wgw');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `Email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `ID` int(10) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Email`, `password`, `ID`, `Created_at`) VALUES
('admin@pet.care', 'admin123', 1, '2022-05-10 19:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `petowner`
--

CREATE TABLE `petowner` (
  `ID` int(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Picture` varchar(255) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Pets`
--

CREATE TABLE `Pets` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Avatar` text NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Birth_date` date NOT NULL,
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
  `Image` varchar(100) NOT NULL,
  `serdate` varchar(100) NOT NULL,
  `sertime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vetAppt`
--

CREATE TABLE `vetAppt` (
  `ID` int(11) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `serviceDate` varchar(100) NOT NULL,
  `serviceTime` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `notes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `WhatWeDo`
--

CREATE TABLE `WhatWeDo` (
  `ID` int(10) UNSIGNED NOT NULL,
  `pic` varchar(100) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `WhatWeDo`
--

INSERT INTO `WhatWeDo` (`ID`, `pic`, `Service`, `Description`) VALUES
(1, 'petgrooming.jpeg', 'Pet Grooming', 'Does your little love need a haircut or nail trim? We offer a full-service pet grooming that puts your pet\'s health first. Book a grooming visit with us now '),
(2, 'petbathing.jpeg', 'Pet Bathing', 'Did Spot get dirty after a trip to the park? Our pet bath will make your furry friend shiny and clean again. Call us today to schedule a professional bath'),
(3, 'petvacinating.jpg', 'Pet Vaccinating', 'Do you want to protect your pet against different diseases? We offer a whole vaccination schedule to make sure your pet as healthy as ever.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appointments`
--
ALTER TABLE `Appointments`
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
-- Indexes for table `vetAppt`
--
ALTER TABLE `vetAppt`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `WhatWeDo`
--
ALTER TABLE `WhatWeDo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appointments`
--
ALTER TABLE `Appointments`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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

--
-- AUTO_INCREMENT for table `vetAppt`
--
ALTER TABLE `vetAppt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `WhatWeDo`
--
ALTER TABLE `WhatWeDo`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

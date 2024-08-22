-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 03:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sls`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryName`) VALUES
('Breakboxes'),
('Conloured pencils'),
('Empty notebooks'),
('Erases'),
('Pencils'),
('Pens'),
('Rulers'),
('Sharpeners'),
('Sweatshirts'),
('T-shirts'),
('Water bottles');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(3) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `emailID` varchar(100) NOT NULL,
  `mobileNumber` bigint(12) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `firstName`, `emailID`, `mobileNumber`, `message`) VALUES
(1, 'Nyah', 'nyahgauribhat@gmail.com', 9819804211, 'how do i '),
(3, 'nyah', 'hi@gmail.com', 9876, 'hi'),
(4, 'nyah', 'hi@gmail.com', 1831, 'sbvunvbw');

-- --------------------------------------------------------

--
-- Table structure for table `contributor`
--

CREATE TABLE `contributor` (
  `ID` int(3) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `oName` varchar(200) NOT NULL,
  `emailID` varchar(200) NOT NULL,
  `mobNum` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contributor`
--

INSERT INTO `contributor` (`ID`, `firstName`, `oName`, `emailID`, `mobNum`, `address`) VALUES
(1, 'prianca', 'RC', 'rc@gmail.com', 999, 'bvi'),
(2, 'nyah', 'NB', 'nb@gmail.com', 999, 'kk'),
(3, 'kishan', 'RC1', 'kc@gmail.com', 9090, 'kk'),
(4, 'rehan', 'RB', 'rb@gmail.com', 9999, 'kk');

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `ID` int(3) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `oName` varchar(200) NOT NULL,
  `emailID` varchar(200) NOT NULL,
  `mobNum` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`ID`, `firstName`, `oName`, `emailID`, `mobNum`, `address`) VALUES
(0, 'pankaj', 'WCWW', 'pk@gmail.com', 98998, 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `ID` int(11) NOT NULL,
  `categoryName` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `contributorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`ID`, `categoryName`, `qty`, `contributorID`) VALUES
(2, 'Breakboxes', 10, 1),
(3, 'Erases', 15, 1),
(4, 'Pens', 10, 3),
(5, 'Pens', 10, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryName`);

--
-- Indexes for table `contributor`
--
ALTER TABLE `contributor`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `emailID` (`emailID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `contributorID_FK` (`contributorID`),
  ADD KEY `categoryName_FK` (`categoryName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contributor`
--
ALTER TABLE `contributor`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `categoryName_FK` FOREIGN KEY (`categoryName`) REFERENCES `categories` (`categoryName`),
  ADD CONSTRAINT `contributorID_FK` FOREIGN KEY (`contributorID`) REFERENCES `contributor` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

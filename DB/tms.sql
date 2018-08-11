-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2018 at 10:39 AM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'c6df0d42e69033b5b7c4195c35f3be51', '2018-08-09 10:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `FromDate` varchar(100) NOT NULL,
  `ToDate` varchar(100) NOT NULL,
  `Comment` mediumtext NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `CancelledBy` varchar(5) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`BookingId`, `PackageId`, `UserEmail`, `FromDate`, `ToDate`, `Comment`, `RegDate`, `status`, `CancelledBy`, `UpdationDate`) VALUES
(2, 1, 'anuj@gmail.com', '05/18/2017', '05/31/2017', '"Lorem ipsum dolor sit amet, cpariatur. Excepteur sint ', '2017-05-13 19:01:10', 2, 'u', '2017-05-13 21:30:23'),
(9, 1, 'demo@test.com', '05/19/2017', '05/21/2017', 'demo test demo test', '2017-05-14 07:45:11', 1, NULL, '2017-05-14 07:47:45'),
(10, 5, 'abc@g.com', '05/22/2017', '05/24/2017', 'test test t test test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test t', '2017-05-14 07:56:26', 1, NULL, '2017-05-14 07:58:19'),
(11, 7, 'kimeualexis@gmail.com', '2018-08-08', '2018-08-17', 'Looking forward to this!', '2018-08-07 15:10:22', 0, NULL, NULL),
(12, 1, 'kimeualexis@gmail.com', '2018-08-15', '2018-08-24', 'koooooooo', '2018-08-07 21:16:58', 0, NULL, NULL),
(13, 2, 'test@gmail.com', '2018-08-08', '2018-08-17', 'Looking forward to this!', '2018-08-10 10:59:29', 2, 'u', '2018-08-10 12:23:46'),
(14, 1, 'test@gmail.com', '2018-08-22', '2018-08-30', 'ssssss', '2018-08-10 11:00:15', 0, NULL, NULL),
(15, 1, 'test@gmail.com', '2018-08-23', '2018-08-23', 'Looking forward to this!', '2018-08-10 11:01:28', 0, NULL, NULL),
(16, 1, 'test@gmail.com', '2018-08-23', '2018-08-23', 'Looking forward to this!', '2018-08-10 11:01:35', 0, NULL, NULL),
(17, 2, 'test@gmail.com', '2018-08-08', '2018-08-17', 'Looking forward to this!', '2018-08-10 11:01:45', 0, NULL, NULL),
(18, 2, 'test@gmail.com', '2018-08-08', '2018-08-24', 'koooooooo', '2018-08-10 11:01:59', 0, NULL, NULL),
(19, 2, 'test@gmail.com', '2018-08-08', '2018-08-24', 'koooooooo', '2018-08-10 11:02:30', 0, NULL, NULL),
(20, 1, 'test@gmail.com', '2018-08-08', '2018-08-24', 'Looking forward to this!', '2018-08-10 11:03:58', 0, NULL, NULL),
(21, 7, 'test@gmail.com', '2018-08-08', '2018-08-17', 'Looking forward to this!', '2018-08-10 12:07:05', 0, NULL, NULL),
(22, 1, 'test@gmail.com', '2018-08-23', '2018-08-23', 'Suck it!', '2018-08-10 12:40:35', 0, NULL, NULL),
(23, 1, 'test@gmail.com', '2018-08-08', '2018-08-30', 'Noma sana!', '2018-08-10 13:57:17', 0, NULL, NULL),
(24, 1, 'kama@gmail.com', '2018-08-23', '2018-08-24', 'Dearest!', '2018-08-11 07:50:47', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `MobileNumber` char(10) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`id`, `FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`, `PostingDate`, `Status`) VALUES
(1, 'ALEX KIMEU', 'kimeualexis@gmail.com', '4723494571', 'Tickets', 'Kindly, confirm my tickets.', '2018-08-08 13:35:49', 1),
(2, 'ALEX KIMEU', 'kimeualexis@gmail.com', '4723494571', 'Tickets', 'Kindly, confirm my tickets.', '2018-08-08 13:36:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblhotels`
--

CREATE TABLE `tblhotels` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) NOT NULL,
  `PackageType` varchar(150) NOT NULL,
  `PackageLocation` varchar(100) NOT NULL,
  `PackagePrice` int(11) NOT NULL,
  `PackageFetures` varchar(255) NOT NULL,
  `PackageDetails` mediumtext NOT NULL,
  `PackageImage` varchar(100) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhotels`
--

INSERT INTO `tblhotels` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Sarova', '5 star', 'Nairobi', 4500, 'Free pick up and Drop.', 'Awesome!', 'sarova.jpeg', '2018-08-07 20:06:59', '2018-08-07 20:06:59'),
(2, 'Continental', '5 star', 'Nairobi', 3500, 'Free pick up and Drop.', 'Amazing!', 'sarova.jpeg', '2018-08-08 12:38:35', '2018-08-08 12:38:35'),
(3, 'Mama Safi', '5 star', 'Mathare', 2300, 'Free pick up and Drop.', 'hagahaha', 'sarova.jpeg', '2018-08-10 08:50:22', '2018-08-10 08:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblissues`
--

CREATE TABLE `tblissues` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `Issue` varchar(100) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `AdminRemark` mediumtext,
  `AdminremarkDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) NOT NULL,
  `PackageType` varchar(150) NOT NULL,
  `PackageLocation` varchar(100) NOT NULL,
  `PackagePrice` int(11) NOT NULL,
  `PackageFetures` varchar(255) NOT NULL,
  `PackageDetails` mediumtext NOT NULL,
  `PackageImage` varchar(100) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(7, 'Soda', 'Couple', 'Nairobi', 4500, 'Free pick up and Drop.', 'This package is awesome. It has pretty amazing offers.', 'sarova.jpeg', '2018-08-07 15:03:26', '2018-08-07 15:03:26'),
(8, 'Travail', 'Family', 'Mombasa', 3500, 'Free pick up and Drop.', 'This is a family package. This is amazing.', 'subaru.jpeg', '2018-08-07 16:01:24', '2018-08-07 16:01:24'),
(9, 'Sarova', '5 star', 'Nairobi', 4500, 'Free pick up and Drop.', 'This is amazing!', 'sarova.jpeg', '2018-08-07 18:30:24', '2018-08-07 18:30:24'),
(10, 'Sarova', '5 star', 'Nairobi', 4500, 'Free pick up and Drop.', 'This is amazing!', 'sarova.jpeg', '2018-08-07 19:03:18', '2018-08-07 19:03:18'),
(11, 'Fanta', 'Executive', 'Mombasa', 5678, 'Free pick up and Drop.', 'This is a great tour!', 'continental.jpeg', '2018-08-10 11:28:13', '2018-08-10 11:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `MobileNumber` char(10) NOT NULL,
  `EmailId` varchar(70) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`, `UpdationDate`) VALUES
(12, 'ALEX', '4723494571', 'kimeualexis@gmail.com', '6ab76758556a509110fd3a74c562318a', '2018-08-07 14:55:37', '2018-08-07 14:55:37'),
(13, 'Ben Godi', '0708567526', 'godi@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2018-08-09 10:39:49', '2018-08-09 10:39:49'),
(14, 'Godi', '0876725242', 'ben@gmail.com', '6b87f329629f3dd72ae7798fcde60839', '2018-08-09 19:59:52', '2018-08-09 19:59:52'),
(15, 'soda', '4723494571', 'soda@gmail.com', 'c6df0d42e69033b5b7c4195c35f3be51', '2018-08-10 06:22:29', '2018-08-10 06:22:29'),
(16, 'Wendy', '0713517569', 'wendy@yahoo.com', '7f5d360462ca2b49fe29bd8f66f2abe5', '2018-08-10 06:53:06', '2018-08-10 06:53:06'),
(17, 'JUma', '089762425', 'juma@gmail.com', '7f5d360462ca2b49fe29bd8f66f2abe5', '2018-08-10 07:06:05', '2018-08-10 07:06:05'),
(18, 'Kimeu', '0896724525', 'test@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2018-08-10 07:40:18', '2018-08-10 07:40:18'),
(19, 'Mbithe', '2345677181', 'mbithe@gmail.com', '33883aeb7f1893629ce8616ad655389c', '2018-08-10 08:44:16', '2018-08-10 08:44:16'),
(20, 'Mike Nandwa', '0708976543', 'mike@yahoo.com', '1ac6984d782ddef1362e8586630aca0b', '2018-08-10 13:05:22', '2018-08-10 13:05:22'),
(21, 'Nema', '6578245', 'nema@gmail.com', '701d4711784523d7886dd66e1bff6b92', '2018-08-11 07:37:14', '2018-08-11 07:37:14'),
(22, 'Kamau', '62527298', 'kama@gmail.com', '7f5d360462ca2b49fe29bd8f66f2abe5', '2018-08-11 07:41:36', '2018-08-11 07:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) NOT NULL,
  `PackageType` varchar(150) NOT NULL,
  `PackagePrice` int(11) NOT NULL,
  `PackageFetures` varchar(255) NOT NULL,
  `PackageDetails` mediumtext NOT NULL,
  `PackageImage` varchar(100) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`PackageId`, `PackageName`, `PackageType`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Subaru', 'Impreza', 4500, 'Free pick up and Drop.', 'Great!', 'subaru.jpeg', '2018-08-07 20:08:15', '2018-08-07 20:08:15'),
(2, 'Impreza', 'Subaru', 3500, 'Free pick up and Drop.', 'Great car!', 'subaru.jpeg', '2018-08-08 12:37:11', '2018-08-08 12:37:11'),
(3, 'Impreza', 'Subaru', 4500, 'Free pick up and Drop.', 'Great car!', 'subaru.jpeg', '2018-08-08 12:37:37', '2018-08-08 12:37:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhotels`
--
ALTER TABLE `tblhotels`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblissues`
--
ALTER TABLE `tblissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- Indexes for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  ADD PRIMARY KEY (`PackageId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblhotels`
--
ALTER TABLE `tblhotels`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblissues`
--
ALTER TABLE `tblissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

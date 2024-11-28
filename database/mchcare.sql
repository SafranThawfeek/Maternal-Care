-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 07:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mchcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--

CREATE TABLE `adminaccount` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `ContactNo` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminaccount`
--

INSERT INTO `adminaccount` (`Id`, `Name`, `Password`, `Email`, `ContactNo`) VALUES
(1, 'Admin', 'admin123', 'ad12@gmail.com', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `cdetails`
--

CREATE TABLE `cdetails` (
  `Date` date NOT NULL,
  `Id` int(11) NOT NULL,
  `mname` text NOT NULL,
  `fname` text NOT NULL,
  `Area` varchar(100) NOT NULL,
  `cname` text NOT NULL,
  `DOB` date NOT NULL,
  `gender` text NOT NULL,
  `bw` varchar(6) NOT NULL,
  `reg` int(11) NOT NULL,
  `Hospital` varchar(100) NOT NULL,
  `vdate` date NOT NULL,
  `Month` varchar(50) NOT NULL,
  `Weight` varchar(50) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `Expected` date NOT NULL,
  `Actual` date NOT NULL,
  `Illness` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cdetails`
--

INSERT INTO `cdetails` (`Date`, `Id`, `mname`, `fname`, `Area`, `cname`, `DOB`, `gender`, `bw`, `reg`, `Hospital`, `vdate`, `Month`, `Weight`, `vname`, `Expected`, `Actual`, `Illness`) VALUES
('2020-04-27', 1, 'mother', 'father', 'modipada,sbp', 'child', '2020-04-27', 'on', '3kg', 3456002, 'govt hospital,sbp', '2020-05-03', '3', '3', 'polioA', '2020-05-03', '2020-05-03', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Area` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Complaint` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`Id`, `Name`, `Area`, `Email`, `Contact`, `Complaint`) VALUES
(1, 'maternal', 'modipada,sbp', 'm12@gmail.com', 8914563244, 'I have a problem');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Contact`, `Message`) VALUES
(1, 'hworker', 'h12@gmail.com', 1234567890, 'how i register myself on your website');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL,
  `usertype` text NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `suggestions` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `usertype`, `name`, `email`, `phone`, `feedback`, `suggestions`) VALUES
(1, 'Health worker', 'hwork', 'hw12@gmail.com', 1234567890, 'good', 'hii'),
(2, 'Maternal', 'Anamika Sahu', 'm12@gmail.com', 1234567890, 'good', 'bye');

-- --------------------------------------------------------

--
-- Table structure for table `hworkeraccount`
--

CREATE TABLE `hworkeraccount` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `AdhaarNo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hworkeraccount`
--

INSERT INTO `hworkeraccount` (`Id`, `Name`, `Password`, `Address`, `Email`, `Contact`, `AdhaarNo`) VALUES
(1, 'hworker', 'hw123', 'modipada,sbp', 'h12@gmail.com', 99546553210, '2174-8364-5655');

-- --------------------------------------------------------

--
-- Table structure for table `immunization`
--

CREATE TABLE `immunization` (
  `Id` int(11) NOT NULL,
  `Vaccine` varchar(200) NOT NULL,
  `give` varchar(500) NOT NULL,
  `Dose` varchar(100) NOT NULL,
  `Route` text NOT NULL,
  `Site` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `immunization`
--

INSERT INTO `immunization` (`Id`, `Vaccine`, `give`, `Dose`, `Route`, `Site`) VALUES
(2, 'For infants', '', '', '', ''),
(3, 'BCG', 'at birth or as early as possible till one year of age', '0.1ml', 'intra-dermal', 'Left upper arm'),
(4, 'Hepatitis B birth dose', 'at birth (within 24 hours)', '0.5 ml', 'intramuscular', 'Anterolateral side of mid thigh-LEFT'),
(5, 'OPV birth dose', 'at birth or within 15 days', '2 drops', 'oral', '-'),
(6, 'OPV 1, 2 and 3', 'at 6 weeks, 10 weeks or 14 weeks', '2 drops', 'oral', '-'),
(7, 'Rota virus vaccine', 'at 6 weeks, 10 weeks or 14 weeks', '5 drops', 'oral', '-'),
(8, 'For children', '', '', '', ''),
(9, 'DPT first booster', '16-24 months', '0.5 ml ', 'intamuscular', 'Anterolateral side of mid thigh-LEFT'),
(10, 'OPV booster', '16-24 months', '2 drops', 'oral', ''),
(11, 'Measles 2nd dose ', '16-24 months', '0.5 ml', 'Subcutaneous', 'Right upper arm');

-- --------------------------------------------------------

--
-- Table structure for table `mamata`
--

CREATE TABLE `mamata` (
  `Id` int(11) NOT NULL,
  `Conditionality` varchar(500) NOT NULL,
  `Responsibility` varchar(200) NOT NULL,
  `Verification` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mamata`
--

INSERT INTO `mamata` (`Id`, `Conditionality`, `Responsibility`, `Verification`) VALUES
(4, 'First Installment (Rs.3000/-)', '', ''),
(5, '1. Pregnancy registered at the AWC/Mini AWC', 'AWW(Anganwadi Worker)/ANM(Auxilary Nursing Midwifery)', '(Mother and Child Protection)MCP Card, Scheme and ICDS Register'),
(6, '2. Received at least 2 antenatal check-up(ANC)', 'ANM', 'MCP Card and Mother andChild Tracking System(MCTS)/Reproductive and Child Helath System(RCHS)'),
(7, '3. Received IFA tablets', 'ANM', 'MCP Card and MCTS/RCHS'),
(8, '4. Received at least one TT vaccination (Out of optimal 2)', 'ANM', 'MCP Card and MCTS/RCHS'),
(9, '5. Received at least one counselling session at the AWC/Village Health and Nutrition Day (VHND)/Home Visit', 'AWW/ANM', 'Scheme and ICDS Register'),
(10, 'Second Installment (Rs.2000/-)', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `maternalaccount`
--

CREATE TABLE `maternalaccount` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `w/o` varchar(50) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maternalaccount`
--

INSERT INTO `maternalaccount` (`Id`, `Name`, `w/o`, `Area`, `Email`, `Contact`) VALUES
(1, 'maternal', 'husband', 'modipada,sbp', 'm12@gmail.com', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `mdetails`
--

CREATE TABLE `mdetails` (
  `Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Name` text NOT NULL,
  `Age` int(11) NOT NULL,
  `wo` text NOT NULL,
  `Area` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `period` date NOT NULL,
  `delivery` date NOT NULL,
  `Pregnancies` varchar(5) NOT NULL,
  `destination` text NOT NULL,
  `person` text NOT NULL,
  `anb` text NOT NULL,
  `CHC` text NOT NULL,
  `PHC` text NOT NULL,
  `Hospital` varchar(100) NOT NULL,
  `cdate` date NOT NULL,
  `Month` varchar(50) NOT NULL,
  `ANC` varchar(50) NOT NULL,
  `BP` varchar(50) NOT NULL,
  `Weight` varchar(50) NOT NULL,
  `TT` varchar(50) NOT NULL,
  `Iron` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mdetails`
--

INSERT INTO `mdetails` (`Id`, `Date`, `Name`, `Age`, `wo`, `Area`, `Email`, `Contact`, `period`, `delivery`, `Pregnancies`, `destination`, `person`, `anb`, `CHC`, `PHC`, `Hospital`, `cdate`, `Month`, `ANC`, `BP`, `Weight`, `TT`, `Iron`) VALUES
(1, '2020-05-12', 'maternal', 25, 'husband', 'modipada,sbp', 'm12@gmail.com', 1234567890, '2020-05-12', '2020-05-12', '2/2', 'Institution', 'Trained person', 'modipada anb', 'chc', 'phc', 'modipada chc', '2020-05-21', '1st', 'done', '65mnb', '34kg', '1done', '2done');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Notification` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`Id`, `Name`, `Area`, `Subject`, `Notification`) VALUES
(1, 'hworker', 'modipada,sbp', 'immunization', 'send monthly immunization report');

-- --------------------------------------------------------

--
-- Table structure for table `notification1`
--

CREATE TABLE `notification1` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Area` text NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Notification` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification1`
--

INSERT INTO `notification1` (`Id`, `Name`, `Area`, `Subject`, `Notification`) VALUES
(1, 'hworker', 'modipada,sbp', 'health report', 'modipada area maternal report');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaccount`
--
ALTER TABLE `adminaccount`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cdetails`
--
ALTER TABLE `cdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hworkeraccount`
--
ALTER TABLE `hworkeraccount`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `immunization`
--
ALTER TABLE `immunization`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mamata`
--
ALTER TABLE `mamata`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `maternalaccount`
--
ALTER TABLE `maternalaccount`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mdetails`
--
ALTER TABLE `mdetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `notification1`
--
ALTER TABLE `notification1`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminaccount`
--
ALTER TABLE `adminaccount`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cdetails`
--
ALTER TABLE `cdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hworkeraccount`
--
ALTER TABLE `hworkeraccount`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `immunization`
--
ALTER TABLE `immunization`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mamata`
--
ALTER TABLE `mamata`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `maternalaccount`
--
ALTER TABLE `maternalaccount`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mdetails`
--
ALTER TABLE `mdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification1`
--
ALTER TABLE `notification1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

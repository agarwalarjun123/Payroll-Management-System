-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2017 at 08:34 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payrollmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_ID` int(5) NOT NULL,
  `D_NAME` varchar(200) NOT NULL,
  `D_HEAD_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_ID`, `D_NAME`, `D_HEAD_ID`) VALUES
(0, 'FINANCE', 2),
(1, 'RESEARCH', 4);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `DID` int(5) NOT NULL,
  `DESIGNATION` varchar(200) NOT NULL,
  `BASIC_PAY` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`DID`, `DESIGNATION`, `BASIC_PAY`) VALUES
(3, 'ADMIN', 70000),
(5, 'area manager', 120000),
(2, 'ASS_MANAGER', 85000),
(4, 'Junior developer', 90000),
(1, 'MANAGER', 125000);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(5) NOT NULL,
  `E_NAME` varchar(200) NOT NULL,
  `AGE` int(5) NOT NULL,
  `SEX` varchar(2) NOT NULL,
  `Designation` varchar(200) NOT NULL,
  `Educational_Qualification` varchar(200) NOT NULL,
  `WORK_EXP` int(20) NOT NULL,
  `DOJ` date NOT NULL,
  `DEP_ID` int(5) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `E_NAME`, `AGE`, `SEX`, `Designation`, `Educational_Qualification`, `WORK_EXP`, `DOJ`, `DEP_ID`, `Username`, `Password`) VALUES
(1, 'ADMIN', 30, 'M', 'ADMIN', 'BE', 6, '2017-09-06', 0, 'admin', 'admin'),
(2, 'arjun agarwal', 25, 'M', 'MANAGER', 'BE,MBA', 3, '2016-10-03', 0, 'arjun1234', 'arjun'),
(4, 'MIKE JONAS', 25, 'M', 'MANAGER', 'BE', 3, '2017-09-05', 1, 'aaaa', 'aaaa'),
(5, 'aaaas', 24, 'M', 'ASS_MANAGER', 'BE CS', 2, '2017-09-13', 1, 'wdd', 'dds'),
(6, 'dsjdjf', 26, 'M', 'ASS_MANAGER', 'BE', 3, '2017-04-21', 1, 'kfkd', 'dkfdlfk'),
(7, 'kernel', 25, 'F', 'ASS_MANAGER', 'DOCTOR', 3, '2010-03-21', 1, 'JDFKDFJ', 'kkaaa'),
(8, 'ayush', 23, 'M', 'ASS_MANAGER', 'PHD', 1, '1997-11-10', 1, 'ayush', 'aaa'),
(9, 'dkfdfk', 32, 'M', 'ASS_MANAGER', 'btech', 2, '0000-00-00', 1, 'askd', 'df');

-- --------------------------------------------------------

--
-- Table structure for table `payslip_history`
--

CREATE TABLE `payslip_history` (
  `P_ID` int(5) NOT NULL,
  `UID` int(5) NOT NULL,
  `MONTH` varchar(200) NOT NULL,
  `YEAR` int(6) NOT NULL,
  `NET_SALARY` int(255) NOT NULL,
  `deductions` int(10) NOT NULL,
  `STATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payslip_history`
--

INSERT INTO `payslip_history` (`P_ID`, `UID`, `MONTH`, `YEAR`, `NET_SALARY`, `deductions`, `STATUS`) VALUES
(4, 2, 'JANUARY', 2017, 121667, 8333, 'PAYSLIP GENERATED'),
(10, 1, 'JANUARY', 2017, 71000, 0, 'PAYSLIP GENERATED'),
(14, 4, 'JANUARY', 2017, 123833, 4167, 'PAYSLIP GENERATED'),
(16, 5, 'JANUARY', 2017, 89333, 5667, 'PAYSLIP GENERATED'),
(18, 4, 'FEBRUARY', 2017, 126667, 8333, 'PAYSLIP GENERATED'),
(19, 6, 'FEBRUARY', 2017, 79333, 5667, 'PAYSLIP GENERATED'),
(20, 4, 'JANUARY', 2017, 118667, 8333, 'PAYSLIP GENERATED'),
(21, 1, 'JANUARY', 2017, 68000, 7000, 'PAYSLIP GENERATED'),
(22, 2, 'JANUARY', 2017, 121667, 8333, 'PAYSLIP GENERATED');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `U_ID` int(5) NOT NULL,
  `BASIC_PAY` int(255) NOT NULL,
  `DEPID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`U_ID`, `BASIC_PAY`, `DEPID`) VALUES
(1, 70000, 0),
(2, 125000, 0),
(4, 125000, 1),
(5, 85000, 1),
(6, 85000, 1),
(7, 85000, 1),
(8, 85000, 1),
(9, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_ID`,`D_NAME`) USING BTREE,
  ADD KEY `D_HEAD_ID` (`D_HEAD_ID`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`DESIGNATION`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`,`DEP_ID`,`Designation`) USING BTREE,
  ADD KEY `Designation` (`Designation`),
  ADD KEY `DEP_ID` (`DEP_ID`);

--
-- Indexes for table `payslip_history`
--
ALTER TABLE `payslip_history`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`U_ID`),
  ADD KEY `DEPID` (`DEPID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payslip_history`
--
ALTER TABLE `payslip_history`
  MODIFY `P_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `U_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`Designation`) REFERENCES `designation` (`DESIGNATION`),
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`DEP_ID`) REFERENCES `department` (`dept_ID`);

--
-- Constraints for table `payslip_history`
--
ALTER TABLE `payslip_history`
  ADD CONSTRAINT `payslip_history_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `employee` (`ID`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`DEPID`) REFERENCES `department` (`dept_ID`),
  ADD CONSTRAINT `salary_ibfk_2` FOREIGN KEY (`U_ID`) REFERENCES `employee` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

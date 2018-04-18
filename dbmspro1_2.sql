-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 06:59 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmspro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(30) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `pwd` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `fname`, `lname`, `pwd`) VALUES
('Admin1', 'Hello', 'World', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `title` varchar(30) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `regprice` int(11) DEFAULT NULL,
  `evtime` time DEFAULT NULL,
  `adminid` varchar(30) DEFAULT NULL,
  `cashprize` int(11) DEFAULT NULL,
  `evdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`title`, `description`, `regprice`, `evtime`, `adminid`, `cashprize`, `evdate`) VALUES
('Testinng', 'This', 1000, '00:00:00', 'Admin1', 1000, '2018-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `evtitle` varchar(30) DEFAULT NULL,
  `uid` varchar(15) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `name` varchar(50) DEFAULT NULL,
  `evtitle` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regpeople`
--

CREATE TABLE `regpeople` (
  `uid` int(11) NOT NULL,
  `evtitle` varchar(30) DEFAULT NULL,
  `cno` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `college` varchar(30) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sponsordata`
--

CREATE TABLE `sponsordata` (
  `evtitle` varchar(30) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(50) DEFAULT NULL,
  `evtitle` varchar(30) DEFAULT NULL,
  `enrollmentno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `evtitle`, `enrollmentno`) VALUES
('MyName', 'Testinng', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`title`),
  ADD KEY `fk_adminid` (`adminid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `evtitle` (`evtitle`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD KEY `evtitle` (`evtitle`);

--
-- Indexes for table `regpeople`
--
ALTER TABLE `regpeople`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `fk_regevent` (`evtitle`);

--
-- Indexes for table `sponsordata`
--
ALTER TABLE `sponsordata`
  ADD KEY `ev_title_sponsor` (`evtitle`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`enrollmentno`),
  ADD KEY `evtitle` (`evtitle`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_adminid` FOREIGN KEY (`adminid`) REFERENCES `admin` (`adminid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`evtitle`) REFERENCES `events` (`title`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_ibfk_1` FOREIGN KEY (`evtitle`) REFERENCES `events` (`title`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `regpeople`
--
ALTER TABLE `regpeople`
  ADD CONSTRAINT `fk_regevent` FOREIGN KEY (`evtitle`) REFERENCES `events` (`title`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sponsordata`
--
ALTER TABLE `sponsordata`
  ADD CONSTRAINT `ev_title_sponsor` FOREIGN KEY (`evtitle`) REFERENCES `events` (`title`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`evtitle`) REFERENCES `events` (`title`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 05:51 PM
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
CREATE DATABASE IF NOT EXISTS `dbmspro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbmspro`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `adminid` varchar(30) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `pwd` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `admin`:
--

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `fname`, `lname`, `pwd`) VALUES
('Admin1', 'Hello', 'World', '123456'),
('admin2', 'Alpha', 'beta', '123456'),
('Admin3', 'Alpha', 'Guy', 'abcd1234');

-- --------------------------------------------------------

--
-- Table structure for table `busdata`
--

DROP TABLE IF EXISTS `busdata`;
CREATE TABLE `busdata` (
  `bus_no` int(11) NOT NULL,
  `drive_name` varchar(50) DEFAULT NULL,
  `cno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `busdata`:
--

--
-- Dumping data for table `busdata`
--

INSERT INTO `busdata` (`bus_no`, `drive_name`, `cno`) VALUES
(0, '', 0),
(12, 'NewGuhy', 9872),
(14, 'aaa', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `busstop`
--

DROP TABLE IF EXISTS `busstop`;
CREATE TABLE `busstop` (
  `busno` int(11) DEFAULT NULL,
  `stop` varchar(30) DEFAULT NULL,
  `arrival` time DEFAULT NULL,
  `departure` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `busstop`:
--   `busno`
--       `busdata` -> `bus_no`
--

--
-- Dumping data for table `busstop`
--

INSERT INTO `busstop` (`busno`, `stop`, `arrival`, `departure`) VALUES
(12, 'Dan', '00:00:00', '00:00:00'),
(12, 'New thing', '00:00:00', '00:00:00'),
(14, 'Rau', '00:00:00', '00:00:00'),
(14, 'Katni', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `demands`
--

DROP TABLE IF EXISTS `demands`;
CREATE TABLE `demands` (
  `name_of_sponser` varchar(255) DEFAULT NULL,
  `demand` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `demands`:
--   `name_of_sponser`
--       `sponser` -> `name_of_sponser`
--

--
-- Dumping data for table `demands`
--

INSERT INTO `demands` (`name_of_sponser`, `demand`) VALUES
('Google', 'postr'),
('Adarsh', 'Certificates');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
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
-- RELATIONSHIPS FOR TABLE `events`:
--   `adminid`
--       `admin` -> `adminid`
--

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`title`, `description`, `regprice`, `evtime`, `adminid`, `cashprize`, `evdate`) VALUES
('CodeGeeks', 'A Coding Contest', 100, '12:00:00', 'Admin3', 5000, '2018-03-21'),
('hh', 'hh', 199, '00:00:00', 'Admin1', 10000, '2018-04-05'),
('Testinng', 'This', 1000, '00:00:00', 'Admin1', 1000, '2018-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE `faculty` (
  `evtitle` varchar(30) DEFAULT NULL,
  `uid` varchar(15) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `faculty`:
--   `evtitle`
--       `events` -> `title`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations` (
  `name` varchar(50) DEFAULT NULL,
  `evtitle` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `locations`:
--   `evtitle`
--       `events` -> `title`
--

-- --------------------------------------------------------

--
-- Table structure for table `regpeople`
--

DROP TABLE IF EXISTS `regpeople`;
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

--
-- RELATIONSHIPS FOR TABLE `regpeople`:
--   `evtitle`
--       `events` -> `title`
--

--
-- Dumping data for table `regpeople`
--

INSERT INTO `regpeople` (`uid`, `evtitle`, `cno`, `email`, `address1`, `address2`, `city`, `college`, `semester`, `branch`, `course`, `name`) VALUES
(1, 'Testinng', 2147483647, 'a@g.com', '11', 'aa', 'Indore', 'Medicaps', 4, 'IT', 'Btech', 'Anurag'),
(2, 'Testinng', 2147483647, 'sdarsgj@gmail.com', 'pinaki hostel', '', 'indore', 'Medicaps', 4, 'IT', 'b.tech', 'adrsh'),
(3, 'Testinng', 2147483647, 'a@c.com', '221B', 'Baker Street', 'London', 'Medicaps', 4, 'Mech', 'BTECH', 'Arpit');

-- --------------------------------------------------------

--
-- Table structure for table `sponser`
--

DROP TABLE IF EXISTS `sponser`;
CREATE TABLE `sponser` (
  `name_of_sponser` varchar(233) NOT NULL,
  `event_title` varchar(244) DEFAULT NULL,
  `sponsership` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `sponser`:
--   `event_title`
--       `events` -> `title`
--

--
-- Dumping data for table `sponser`
--

INSERT INTO `sponser` (`name_of_sponser`, `event_title`, `sponsership`) VALUES
('Adarsh', 'hh', 1000),
('Google', 'Testinng', 12000),
('Micro', 'Testinng', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `sponsordata`
--

DROP TABLE IF EXISTS `sponsordata`;
CREATE TABLE `sponsordata` (
  `evtitle` varchar(30) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `sponsordata`:
--   `evtitle`
--       `events` -> `title`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentreq`
--

DROP TABLE IF EXISTS `studentreq`;
CREATE TABLE `studentreq` (
  `material_list` varchar(255) DEFAULT NULL,
  `number_of_material` int(11) DEFAULT NULL,
  `event_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `studentreq`:
--

--
-- Dumping data for table `studentreq`
--

INSERT INTO `studentreq` (`material_list`, `number_of_material`, `event_title`) VALUES
('0', NULL, NULL),
('Computer', 0, 'Testinng'),
('Computer', 29, 'Testinng');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `name` varchar(50) DEFAULT NULL,
  `evtitle` varchar(30) DEFAULT NULL,
  `enrollmentno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `students`:
--   `evtitle`
--       `events` -> `title`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `busdata`
--
ALTER TABLE `busdata`
  ADD PRIMARY KEY (`bus_no`);

--
-- Indexes for table `busstop`
--
ALTER TABLE `busstop`
  ADD KEY `fk_bus` (`busno`);

--
-- Indexes for table `demands`
--
ALTER TABLE `demands`
  ADD KEY `fk` (`name_of_sponser`);

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
-- Indexes for table `sponser`
--
ALTER TABLE `sponser`
  ADD PRIMARY KEY (`name_of_sponser`),
  ADD KEY `fk_sponsor` (`event_title`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regpeople`
--
ALTER TABLE `regpeople`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `busstop`
--
ALTER TABLE `busstop`
  ADD CONSTRAINT `fk_bus` FOREIGN KEY (`busno`) REFERENCES `busdata` (`bus_no`);

--
-- Constraints for table `demands`
--
ALTER TABLE `demands`
  ADD CONSTRAINT `fk` FOREIGN KEY (`name_of_sponser`) REFERENCES `sponser` (`name_of_sponser`);

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
-- Constraints for table `sponser`
--
ALTER TABLE `sponser`
  ADD CONSTRAINT `fk_sponsor` FOREIGN KEY (`event_title`) REFERENCES `events` (`title`) ON DELETE CASCADE ON UPDATE CASCADE;

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

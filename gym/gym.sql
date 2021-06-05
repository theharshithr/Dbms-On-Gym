-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 06:14 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` varchar(20) NOT NULL,
  `ddid` varchar(20) NOT NULL,
  `camt` varchar(20) DEFAULT NULL,
  `wtype` varchar(30) NOT NULL,
  `cduration` varchar(30) DEFAULT NULL,
  `ttid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `ddid`, `camt`, `wtype`, `cduration`, `ttid`) VALUES
('c1', 'd1', '10000', 'cardio', '3 months', '100'),
('c2', 'd2', '10000', 'strength', '6 months', '100'),
('c3', 'd3', '30000', 'fitness', '12 months', '100'),
('c4', 'd2', '7000', 'aerobics', '6 months', '100');

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

CREATE TABLE `diet` (
  `did` varchar(10) NOT NULL,
  `dtype` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`did`, `dtype`) VALUES
('d1', 'veg'),
('d2', 'non veg'),
('d3', 'mix');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `design` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `design`) VALUES
('100', 'qwerty', 'trainer'),
('200', 'qwerty', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mtid` varchar(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `dietid` varchar(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `courseid` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mtid`, `name`, `gender`, `dob`, `dietid`, `address`, `courseid`) VALUES
('1234', 'vaishnavi', 'female', '10-10-2000', 'd2', 'Bangalore', 'c3'),
('420', 'kanni', 'female', '23/11/98', 'd3', 'Delhi', 'c2'),
('500', 'arun', 'male', '10-02-1998', 'd3', 'Bengaluru', 'c1');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `tid` varchar(20) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `qual` varchar(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`tid`, `pswd`, `name`, `gender`, `dob`, `qual`, `address`) VALUES
('100', 'qwerty', 'Utkarsh', 'Male', '12-12-1999', 'Mr.universe', 'Bengaluru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `ddid` (`ddid`),
  ADD KEY `ttid` (`ttid`);

--
-- Indexes for table `diet`
--
ALTER TABLE `diet`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mtid`),
  ADD KEY `dietid` (`dietid`),
  ADD KEY `courseid` (`courseid`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`tid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`ddid`) REFERENCES `diet` (`did`),
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`ttid`) REFERENCES `trainer` (`tid`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`dietid`) REFERENCES `diet` (`did`),
  ADD CONSTRAINT `member_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `course` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

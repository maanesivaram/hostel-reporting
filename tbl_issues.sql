-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2018 at 07:32 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbl_issues`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminid` varchar(20) NOT NULL DEFAULT 'abhi',
  `password` varchar(20) NOT NULL DEFAULT '1234567'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminid`, `password`) VALUES
('abhi', '1234567'),
('admin', '1234567'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issue`
--

CREATE TABLE `tbl_issue` (
  `user_id` int(5) NOT NULL,
  `issueid` int(5) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `discription` text NOT NULL,
  `solution` varchar(10) NOT NULL DEFAULT 'not solved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_issue`
--

INSERT INTO `tbl_issue` (`user_id`, `issueid`, `subject`, `discription`, `solution`) VALUES
(0, 4, 'maintanence', 'fans are not working', 'YES'),
(0, 5, 'maintanence', 'rooms are not clean', 'YES'),
(0, 6, 'fans', 'not working', 'NO'),
(0, 7, 'water', 'dust is coming', 'YES'),
(0, 8, 'net', 'low connection of lan', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(5) NOT NULL,
  `name` char(20) DEFAULT NULL,
  `regnumber` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `regnumber`, `email`, `password`) VALUES
(3, 'Bhargav', '10232', 'bhargav.kiran', '1234'),
(4, 'chaitanya', '16pa5a0503', 'chaitucme@gmail.com', '12345'),
(5, 'sriram', '16pa5a0502', 'sriram@gmail.com', '123456'),
(6, 'ram', '16pa5a0508', 'sivarammaane@gmail.com', 'ram123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_issue`
--
ALTER TABLE `tbl_issue`
  ADD PRIMARY KEY (`issueid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_issue`
--
ALTER TABLE `tbl_issue`
  MODIFY `issueid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

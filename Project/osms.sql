-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 09:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Admin', 'admin@osms.com', 'jk');

-- --------------------------------------------------------

--
-- Table structure for table `assets_tb`
--

CREATE TABLE `assets_tb` (
  `pid` int(11) NOT NULL,
  `pname` varchar(60) COLLATE utf8_bin NOT NULL,
  `pdop` date NOT NULL,
  `pavail` int(11) NOT NULL,
  `ptotal` int(11) NOT NULL,
  `poriginalcost` int(11) NOT NULL,
  `psellingcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assets_tb`
--

INSERT INTO `assets_tb` (`pid`, `pname`, `pdop`, `pavail`, `ptotal`, `poriginalcost`, `psellingcost`) VALUES
(1, 'Condenser', '2020-03-05', 5, 6, 150, 170),
(2, 'Motor', '2020-03-20', 9, 10, 200, 230),
(3, 'Moving Blades for Mixer', '2020-05-15', 6, 10, 60, 75),
(5, 'Motor Pipe', '2020-05-16', 10, 10, 70, 80);

-- --------------------------------------------------------

--
-- Table structure for table `assignwork_tb`
--

CREATE TABLE `assignwork_tb` (
  `rno` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `request_info` text COLLATE utf8_bin NOT NULL,
  `request_desc` text COLLATE utf8_bin NOT NULL,
  `requester_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_add1` text COLLATE utf8_bin NOT NULL,
  `requester_add2` text COLLATE utf8_bin NOT NULL,
  `requester_city` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_state` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_mobile` bigint(20) NOT NULL,
  `assign_tech` varchar(60) COLLATE utf8_bin NOT NULL,
  `assign_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assignwork_tb`
--

INSERT INTO `assignwork_tb` (`rno`, `request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `assign_tech`, `assign_date`) VALUES
(9, 14, 'Washing Machine Problem', 'Washing machine not working properly', 'Shaan Rao', 'Jamner Road Jalgaon', 'Shanti Nagar Jalgaon', 'Jalgaon', 'Maharashtra', 425203, 'shaan@gmail.com', 7869769744, 'Prem bajaj', '2020-04-12'),
(10, 17, 'AC problem', 'Our AC not working properly', 'Kajal Sinha', 'Shasan Nagar Pune', 'Flora Height Pune', 'Pune', 'Maharashtra', 457281, 'kajal@gmail.com', 98675757567, 'Amit Batheja', '2020-05-11'),
(11, 20, 'Fan Problem', 'Our home fan not working properly . It does not give enough air.', 'Hema Jadhav', 'Nanak Nagar Bhusawal', 'Sindhi Colony Bhusawal', 'Bhusawal', 'Maharashtra', 425201, 'hemajadhav@gmail.com', 9796864535, 'Krishna Talreja', '2020-05-15'),
(12, 21, 'Cooler Problem', 'Our Cooler does not working properly . It does not give enou', 'Ritik Kumar', 'Panchvati Nasik', 'Near Flora Heights Nasik', 'Nasik', 'Maharashtra', 420003, 'ritikkumar@gmail.com', 8978453627, 'Deepak Kalange', '2020-05-12'),
(13, 22, 'Mixer Problem', 'Our home mixer does not work properly. It takes much time to', 'Sumit Talreja', 'Shanti Nagar Mumbai', 'Near Ashoka building Mumbai', 'Mumbai', 'Maharshtra', 453457, 'sumit@gmail.com', 9857452476, 'Krishna Talreja', '2020-05-17'),
(14, 23, 'Mixer Problem', 'Our mixer does not work properly. It takes much time to grin', 'Amrita Ahuja', 'Sindhi Colony Mumbai', 'Near Ashoka Society Mumbai', 'Mumbai', 'Maharashtra', 453452, 'amrita@gmail.com', 9896748352, 'Rupesh Deore', '2020-05-17'),
(15, 24, 'Washing Machine Problem', 'Washing machine do not work properly. It can not dry clothes', 'Pooja Sharma', 'Shanti Colony Delhi', 'Near Ashoka building Delhi', 'Delhi', 'Uttar Pradesh', 767362, 'pooja@gmail.com', 9857463572, 'Rupesh Deore', '2020-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `custid` int(11) NOT NULL,
  `custname` varchar(60) COLLATE utf8_bin NOT NULL,
  `custadd` varchar(60) COLLATE utf8_bin NOT NULL,
  `cpname` varchar(60) COLLATE utf8_bin NOT NULL,
  `cpquantity` int(11) NOT NULL,
  `cpeach` int(11) NOT NULL,
  `cptotal` int(11) NOT NULL,
  `cpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`custid`, `custname`, `custadd`, `cpname`, `cpquantity`, `cpeach`, `cptotal`, `cpdate`) VALUES
(13, 'Ritik Kumar', 'Panchvati Nasik', 'Condenser', 1, 170, 170, '2020-05-12'),
(14, 'Sumit Talreja', 'Shanti Nagar Mumbai', 'Moving Blades for Mixer', 2, 75, 150, '2020-05-14'),
(15, 'Amrita Ahuja', 'Sindhi Colony Mumbai', 'Moving Blades for Mixer', 2, 75, 150, '2020-05-17'),
(16, 'Pooja Sharma', 'Shanti Colony Delhi', 'Motor', 1, 230, 230, '2020-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `requesterlogin_tb`
--

CREATE TABLE `requesterlogin_tb` (
  `r_login_id` int(11) NOT NULL,
  `r_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `requesterlogin_tb`
--

INSERT INTO `requesterlogin_tb` (`r_login_id`, `r_name`, `r_email`, `r_password`) VALUES
(14, 'Shaan Rao', 'shaan@gmail.com', 'shaan'),
(17, 'Kajal Sinha', 'kajal@gmail.com', 'kajal'),
(20, 'Hema Jadhav', 'hemajadhav@gmail.com', 'hemajadhav'),
(22, 'Ritik Kumar', 'ritikkumar@gmail.com', 'ritik'),
(23, 'Sumit Talreja', 'sumit@gmail.com', 'sumit'),
(24, 'Amrita Ahuja', 'amrita@gmail.com', 'amrita'),
(25, 'Pooja Sharma', 'pooja@gmail.com', 'pooja');

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest_tb`
--

CREATE TABLE `submitrequest_tb` (
  `request_id` int(11) NOT NULL,
  `request_info` varchar(60) COLLATE utf8_bin NOT NULL,
  `request_desc` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_add` varchar(100) COLLATE utf8_bin NOT NULL,
  `requester_add2` varchar(100) COLLATE utf8_bin NOT NULL,
  `requester_city` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_state` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_mobile` bigint(20) NOT NULL,
  `requester_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `contact_id` int(11) NOT NULL,
  `user_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `user_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `subject` varchar(60) COLLATE utf8_bin NOT NULL,
  `content` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `technician_tb`
--

CREATE TABLE `technician_tb` (
  `empid` int(11) NOT NULL,
  `empName` varchar(60) COLLATE utf8_bin NOT NULL,
  `empCity` varchar(60) COLLATE utf8_bin NOT NULL,
  `empMobile` bigint(20) NOT NULL,
  `empEmail` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `technician_tb`
--

INSERT INTO `technician_tb` (`empid`, `empName`, `empCity`, `empMobile`, `empEmail`) VALUES
(1, 'Prem Bajaj', 'Jalgaon', 9865748473, 'prem@gmail.com'),
(2, 'Amit Batheja', 'Pune', 9857452356, 'amit@gmail.com'),
(3, 'Krishna Talreja', 'Bhusawal', 8796754326, 'krishna@gmail.com'),
(4, 'Deepak Kalange', 'Nasik', 8947271284, 'deepak@gmail.com'),
(5, 'Rupesh Deore', 'Mumbai', 6756498764, 'rupesh@gmail.com'),
(6, 'Rajesh Bajaj', 'Thane', 8698545789, 'rajesh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `assets_tb`
--
ALTER TABLE `assets_tb`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  ADD PRIMARY KEY (`r_login_id`);

--
-- Indexes for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `technician_tb`
--
ALTER TABLE `technician_tb`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assets_tb`
--
ALTER TABLE `assets_tb`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  MODIFY `r_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `technician_tb`
--
ALTER TABLE `technician_tb`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

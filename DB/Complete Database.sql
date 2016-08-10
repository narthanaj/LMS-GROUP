-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2016 at 08:53 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT 'nsbm@123'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`username`, `password`) VALUES
('chula', 'nsbm@123'),
('irushaedu', 'nsbm@123'),
('narj', 'nsbm@123'),
('nippa', 'nsbm@123'),
('raveen', 'nsbm@123');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `stid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`stid`, `firstname`, `lastname`, `gender`, `address`, `nic`, `email`, `pno`, `degree`, `username`) VALUES
(1000, 'Irusha', 'Hasantha', 'M', '100/2,Biyagama Rd,Kelaniya', '953103168V', 'irushaedu@gmail.com', '0757210221', 'Computing', 'irushaedu'),
(1001, 'Nipuna', 'Perera', 'M', '78/2,Badulla Rd,Bandarawela', '952731424V', 'nipunaperer@hotmail.com', '0717762065', 'Computing', 'nippa'),
(1002, 'Raveen', 'Karunapala', 'M', '411B,Mahawatta,Pamunugama,Ja-Ela', '962862993V', 'raveenprabodh@gmail.com', '0755918632', 'Computing', 'raveen'),
(1003, 'Narthana', 'Jananjaya', 'M', '70/48,Rohala place,Embilipitiya', '943654395V', 'narthanaj@gmail.com', '0702398676', 'Computing', 'narj'),
(1004, 'Chulangani', 'Niroshani', 'F', '3 mail post,pasara rd,Ella', '955931998V', 'chulanganiniro@gmail.com', '0702398679', 'Management', 'chula');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`stid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

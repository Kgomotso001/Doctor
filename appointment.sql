-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2020 at 05:53 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `admin_id` int(11) NOT NULL,
  `ad_username` varchar(30) NOT NULL,
  `ad_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`admin_id`, `ad_username`, `ad_pass`) VALUES
(1, 'admin', 'admin'),
(2, 'edward98', 'E@981130d');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `b_date` date NOT NULL,
  `b_time` time NOT NULL,
  `b_contact` varchar(10) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `b_name` varchar(30) NOT NULL,
  `b_surname` varchar(30) NOT NULL,
  `b_id` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `b_date`, `b_time`, `b_contact`, `purpose`, `b_name`, `b_surname`, `b_id`) VALUES
(1, '2020-01-15', '09:00:00', '0724908350', 'consult', 'thabang', 'njana', '9806155121083'),
(4, '2020-01-15', '09:30:00', '0791504873', 'checkup', 'Kethabile', 'Mafoko', '9808155121083'),
(5, '2020-01-16', '16:30:00', '0724908350', 'checkup', 'thabang', 'njana', '9805155121085'),
(6, '2020-01-16', '09:00:00', '0791504873', 'consult', 'thabang', 'njana', '9806155121083'),
(7, '2020-01-18', '09:00:00', '0785917773', 'check up', '1', 'sekhobana', '9806250702082');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `id_num` varchar(13) NOT NULL,
  `gender` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `name`, `surname`, `address`, `id_num`, `gender`) VALUES
(1, 'thabang98', '12345', 'njana@gmail.com', 'thabang', 'njana', '1853 Mostumi street ,Soshanguve', '9711305616089', 'Male'),
(2, '1', '35d19bcfeef71b45e39cf5cddf71663e', 'ontonda57@gmail.com', '1', 'SEKHOBANA', 'soshanguve block l', '9806250702082', 'female'),
(3, 'percymohale9@gmail.com', '4679ac10a90b9fc5ebfcb0f5645d4d0c', 'nyambenimphogiven@gmail.com', 'mpho given', 'nyambeni', '1117 zone k soshanguve 0152', '9607185121083', 'mpho give');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

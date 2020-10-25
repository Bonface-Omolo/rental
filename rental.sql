-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 06:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(15) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `idnumber`, `user`, `contact`, `gender`, `email`, `password`, `cpassword`) VALUES
(1, 'Bonface', 'Omolo', 31072375, '', 703605642, 'Male', 'omollobonface01@gmail.com', 'admin1234', 'admin1234'),
(2, 'Kevin', 'Ouma', 6676767, '', 764243872, 'Female', 'oumakevin@gmail.com', '12345678', '12345678'),
(3, 'Nicholas', 'arwa', 898989889, '', 12313434, 'Others', 'araw@gmail.com', '12345678', '12345678'),
(4, 'hyline', 'Omolo', 67676767, 'Agent', 642438709, 'Others', 'hyline@boni.com', '12345678', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `damage`
--

CREATE TABLE `damage` (
  `id` int(15) NOT NULL,
  `rcode` varchar(50) NOT NULL,
  `damage` varchar(50) NOT NULL,
  `floor` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `damage`
--

INSERT INTO `damage` (`id`, `rcode`, `damage`, `floor`, `status`) VALUES
(1, 't45', 'Door', 'tenth', 'Occupied'),
(8, '10', 'Roof', 'First', 'Vacant'),
(9, '54', 'water', 'fifthy', 'Occupied');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(15) NOT NULL,
  `idnumber` int(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `date` date NOT NULL,
  `mode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `idnumber`, `rname`, `amount`, `date`, `mode`) VALUES
(1, 78778, 'yellow', 5, '0000-00-00', 'Mpesa'),
(2, 89898989, 'yellow', 10, '2020-05-15', 'Mpesa'),
(3, 99909090, 'red', 5000, '2020-05-01', 'Check');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(15) NOT NULL,
  `rcode` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `floor` varchar(50) NOT NULL,
  `cost` int(15) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `rcode`, `type`, `floor`, `cost`, `status`) VALUES
(14, '2', 'Tiled', 'second', 8000, 'Vacant'),
(15, '3', 'Tiled', 'First', 8000, 'Vacant'),
(16, '1', 'Tiled', 'First', 8000, 'Vacant'),
(17, '6', 'Tiled', 'First', 8000, 'Vacant'),
(18, '4', 'Tiled', 'First', 8000, 'Vacant'),
(19, '5', 'Tiled', 'First', 8000, 'Vacant'),
(20, '7', 'Tiled', 'Sixth', 10000, 'Occupied'),
(21, '8', 'Tiled', 'First', 8000, 'Vacant');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` int(15) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `contact` int(15) NOT NULL,
  `idnumber` int(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `fname`, `lname`, `contact`, `idnumber`, `gender`, `email`, `password`, `cpassword`) VALUES
(7, 'Kenneth', 'WABWIRE', 755653434, 765463348, 'Female', 'oundoken@gmail.com', '12345678', '12345678'),
(8, 'Constant', 'Nyangweso', 7875455, 56565656, 'Male', 'nyangwesoconstant@gmail.com', '12345678', '12345678'),
(9, 'james', 'Ochieng', 756565656, 56565656, 'female', 'keyajames@gmail.com', '12345678', '12345678'),
(10, 'Nicholas', 'omolo', 6424387, 999999, 'Male', 'omaribonface01@gmail.com', '12983476', '12983476');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `idnumber` int(15) NOT NULL,
  `user` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `idnumber`, `user`, `contact`, `gender`, `email`, `password`, `cpassword`) VALUES
(1, 'Bonface', 'Omolo', 23089111, 'Agent', 6424387, 'female', 'omollobonface01@gmail.com', '12345678', '12345678'),
(5, 'Benson', 'Omolo', 67766556, 'Caretaker', 12313434, 'Others', 'oumakevin@gmail.com', '12345678', '12345678'),
(8, 'kevin', 'omondi', 32233232, 'admin', 784637536, 'Male', 'omondikevo@gmail.com', '12345678', '12345678'),
(9, 'bonventure', 'omondi', 32233232, 'Caretaker', 784637536, 'female', 'omollokevo@gmail.com', '12345678', '12345678'),
(11, 'Nicholas', 'Omolo', 9999976, 'Admin', 2147480647, 'Female', 'tumbo@gmail.com', '12345678', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `damage`
--
ALTER TABLE `damage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `damage`
--
ALTER TABLE `damage`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

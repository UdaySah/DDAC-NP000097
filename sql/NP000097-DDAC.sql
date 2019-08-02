-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: June 16, 2019 at 12:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NP000097-DDAC`
--

-- --------------------------------------------------------

--
-- Table structure for table `container`
--

CREATE TABLE `container` (
  `container_id` int(10) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `container`
--

INSERT INTO `container` (`container_id`, `Model`, `Description`,`status`) VALUES
(1, 'CONTAINER1', 'Maximum Weight 500 KG' , 'INILIZED'),
(2, 'CONTAINER2', 'Maximum Weight 1000 KG' , 'DELIVERED'),
(3, 'CONTAINER3', 'Maximum Weight 1500 KG' , 'LOADED'),
(4, 'CONTAINER4', 'Maximum Weight 2000 KG' , 'DELIVERED'),
(5, 'CONTAINER5', 'Maximum Weight 2500 KG' , 'LOADED');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(10) NOT NULL,
  `Depature` varchar(20) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `Sender_name` varchar(20) NOT NULL,
  `Sender_Phone` varchar(20) NOT NULL,
  `Receiver_name` varchar(20) NOT NULL,
  `Receiver_Phone` varchar(20) NOT NULL,
  `container_model` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `Depature`, `Destination`, `Sender_name`, `Sender_Phone`, `Receiver_name`, `Receiver_Phone`, `container_model`, `status`) VALUES
(1, 'Asia', 'Europe', 'Ranjit', '9815339431', 'uday', '9813151323', 'CONTAINER1', 'INILIZED'),
(2, 'Europe', 'America', 'Abhushan', '9801561497', 'Shalinee', '9845761497', 'CONTAINER2', 'DELIVERED'),
(3, 'Europe', 'Asia', 'Amar', '9854264860', 'Sunny', '9806704726', 'CONTAINER3', 'LOADEED');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Schedule_id` int(10) NOT NULL,
  `Warehouse_Location` varchar(20) NOT NULL,
  `Depart` time NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `Arrival` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Schedule_id`, `Warehouse_Location`, `Depart`, `Destination`, `Arrival`) VALUES
(1, 'Asia', '11:00:00', 'Australia', '05:09:00'),
(2, 'Africa', '11:00:00', 'Europe', '09:09:00'),
(3, 'Australia', '11:00:00', 'Europe', '01:30:00'),
(4, 'Europe', '05:00:00', 'Asia', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `role`) VALUES
(1, 'uday', 'uday', 'udaysah8@gmail.com', '1'),
(2, 'ram', 'ram', 'ram@gmail.com', '2'),
(3, 'rahul', 'rahul', 'rahul@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`container_id`),
  ADD UNIQUE KEY `Model` (`Model`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Schedule_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `container`
--
ALTER TABLE `container`
  MODIFY `container_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Schedule_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

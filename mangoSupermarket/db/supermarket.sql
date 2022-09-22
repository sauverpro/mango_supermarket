-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 10:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `name`, `username`, `password`) VALUES
(1, 'sauveur', 'sauve', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `pin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `name`, `phone`, `address`, `pin`) VALUES
(1, 'tuyizere j sauveur', '0785241562', 'nyakabanda', 'c20ad4d76fe97759aa27a0c99bff6710'),
(2, 'Mutisiga Sana', '0791364602', 'kuryanyuma', '202cb962ac59075b964b07152d234b70'),
(4, 'prince', '0780683028', 'cyumbati', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `ProductName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `ProductName`) VALUES
(3, 'Biscuit'),
(5, 'Juice'),
(6, 'bread'),
(7, 'cake'),
(8, 'coocks');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stockId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` text NOT NULL,
  `unitPrice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stockId`, `productId`, `quantity`, `unitPrice`) VALUES
(1, 1, '23', '1000'),
(2, 5, '-5', '500'),
(3, 3, '26', '200'),
(4, 3, '45', '300'),
(5, 6, '50', '1500'),
(6, 6, '4', '1000'),
(7, 7, '-3', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `stockslip`
--

CREATE TABLE `stockslip` (
  `slipId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `stockId` text NOT NULL,
  `quantity` text NOT NULL,
  `totalprice` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stockslip`
--

INSERT INTO `stockslip` (`slipId`, `customerId`, `stockId`, `quantity`, `totalprice`, `status`) VALUES
(1, 1, '2', '5', '2500', 0),
(2, 1, '6', '23', '23000', 0),
(3, 2, '3', '12', '2400', 1),
(5, 3, '5', '5', '7500', 0),
(6, 3, '3', '12', '2400', 0),
(7, 3, '6', '23', '23000', 0),
(8, 3, '2', '12', '6000', 1),
(9, 3, '7', '5', '5000', 1),
(10, 4, '2', '3', '1500', 1),
(11, 4, '7', '5', '5000', 1),
(12, 3, '2', '2', '1000', 1),
(13, 4, '6', '23', '23000', 1),
(14, 4, '4', '5', '1500', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stockId`);

--
-- Indexes for table `stockslip`
--
ALTER TABLE `stockslip`
  ADD PRIMARY KEY (`slipId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stockId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stockslip`
--
ALTER TABLE `stockslip`
  MODIFY `slipId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

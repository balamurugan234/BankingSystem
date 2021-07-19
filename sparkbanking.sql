-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 08:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkbanking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile No.` bigint(10) NOT NULL,
  `Balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `Name`, `Email`, `Mobile No.`, `Balance`) VALUES
(10001, 'Vengai', 'vengai@gmail.com', 9767234589, 5523),
(10002, 'Pradeep', 'pradeep@gmail.com', 9478231976, 4100),
(10003, 'Kishan', 'kishan@gmail.com', 6367459082, 7000),
(10004, 'Gowtham', 'gowtham@gmail.com', 6702401291, 6313),
(10005, 'Karthi', 'karthi@gmail.com', 9843367562, 8600),
(10006, 'Surendhar', 'surendhar@gmail.com', 6500265791, 3734),
(10007, 'Santhosh', 'santhosh@gmail.com', 9038204441, 7300),
(10008, 'Aswin', 'aswin@gmail.com', 9786871152, 8642),
(10009, 'Jack', 'jack@gmail.com', 9472107634, 10112),
(10010, 'Bharath', 'bharath@gmail.com', 6700216129, 10500),
(10011, 'Hariram', 'hari@gmail.com', 9036668109, 8909),
(10012, 'Jeeva', 'jeeva@gmail.com', 6395784189, 4300),
(10013, 'Gowsick', 'gowsick@gmail.com', 6300817308, 4874);

-- --------------------------------------------------------

--
-- Table structure for table `transactionhistory`
--

CREATE TABLE `transactionhistory` (
  `S.No.` int(5) NOT NULL,
  `Sender` text NOT NULL,
  `Receiver` text NOT NULL,
  `Amount` int(10) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionhistory`
--

INSERT INTO `transactionhistory` (`S.No.`, `Sender`, `Receiver`, `Amount`, `Date`, `Time`) VALUES
(1, 'Pradeep', 'Jack', 500, '2021-07-16', '20:57:58'),
(2, 'Bharath', 'Pradeep', 1000, '2021-07-16', '21:02:32'),
(3, 'Jack', 'Karthi', 700, '2021-07-18', '16:42:08'),
(4, 'Pradeep', 'Gowtham', 4963, '2021-07-18', '16:56:41'),
(5, 'Gowtham', 'Pradeep', 4000, '2021-07-18', '16:57:19'),
(6, 'Surendhar', 'Karthi', 400, '2021-07-19', '10:06:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Mobile No.` (`Mobile No.`);

--
-- Indexes for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  ADD PRIMARY KEY (`S.No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  MODIFY `S.No.` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

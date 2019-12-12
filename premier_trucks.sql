-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2018 at 10:08 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `premier_trucks`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `deliveryName` varchar(15) NOT NULL,
  `Userid` int(11) NOT NULL,
  `client` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `type_of_delivery` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`deliveryName`),
  KEY `Userid` (`Userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`deliveryName`, `Userid`, `client`, `contact`, `type_of_delivery`, `location`, `Date`) VALUES
('chairs', 1, 'Mary', '0789123652', 'Scholastics', 'Gayaza', '2018-11-07'),
('chalk', 2, 'micheal', '078324578', 'posho', 'kabale', '2018-11-07'),
('dusters', 1, 'Malcom', '0789123678', 'Scholastic', 'Kampala', '2018-11-06'),
('Ink', 8, 'John', '0786345765', 'Scholastic', 'Masaka', '2018-11-07'),
('rulers', 1, 'Leo mad', '0705987654', 'posho', 'kabale', '2018-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `mgrID` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `contact` int(15) NOT NULL,
  `residence` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`mgrID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`mgrID`, `name`, `contact`, `residence`, `email`, `password`) VALUES
(1, 'Shadad Mugabi', 772587234, 'Mutungo', 'shad@gmail.com', '12345shad');

-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

DROP TABLE IF EXISTS `truck`;
CREATE TABLE IF NOT EXISTS `truck` (
  `truckID` int(15) NOT NULL AUTO_INCREMENT,
  `brand` varchar(30) NOT NULL,
  `numberPlate` varchar(30) NOT NULL,
  `numberOfTyres` int(20) NOT NULL,
  PRIMARY KEY (`truckID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`truckID`, `brand`, `numberPlate`, `numberOfTyres`) VALUES
(1, 'Isuzu', 'UBA 123Q', 10),
(2, 'Tata', 'UBB 374J', 12),
(3, 'Mitsubishi', 'UAZ 128V', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(12) NOT NULL,
  `lname` varchar(12) NOT NULL,
  `contact` int(15) NOT NULL,
  `residence` varchar(30) NOT NULL,
  `email` varchar(24) NOT NULL,
  `pwd` varchar(24) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `contact`, `residence`, `email`, `pwd`) VALUES
(1, 'John', 'Musoke', 782123789, 'Mutungo', 'jmusoke@gmail.com', '12345j'),
(2, 'Moses', 'Kabiswa', 790126345, 'Ntinda', 'mkabiswa@gmail.com', '12345m'),
(3, 'Stuart', 'Asiimwe', 701342125, 'Nansana', 'sasiimwe@gmail.com', '12345s'),
(4, 'Peter', 'Mukasa', 702157453, 'kawempe', 'pmukasa@gmail.com', '12345p'),
(5, 'Isaac', 'Okello', 756956237, 'Mukono', 'iokello@gmail.com', '12345i'),
(6, 'Solomon', 'Makanga', 789123674, 'Busega', 'smakanga@gmail.com', '12345maka'),
(7, 'Ivan', 'Mugagga', 721364526, 'Kiwatule', 'imugagga@gmail.com', '12345ivan'),
(8, 'tom', 'cruise', 789234198, 'Kyanamukaka', 'a@gmail.com', 'qwerty'),
(9, 'Sarah', 'Aleta', 786225326, 'Kampala', 'sarah@gmail.com', '12345s');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`Userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2018 at 10:44 AM
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(15) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Contact` int(15) NOT NULL,
  `Residence` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `Name`, `Contact`, `Residence`, `email`, `password`) VALUES
(1, 'Mungu Elvis', 782127346, 'Bukoto', 'elvis@gmail.com', '12345elvis');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `deliveryID` int(15) NOT NULL AUTO_INCREMENT,
  `Userid` int(11) NOT NULL,
  `client` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `type_of_delivery` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`deliveryID`),
  KEY `Userid` (`Userid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`deliveryID`, `Userid`, `client`, `contact`, `type_of_delivery`, `location`, `Date`) VALUES
(1, 3, 'Bosco', '0745623743', 'Scholastic', 'Mukono', '2018-11-07'),
(2, 3, 'Micheal', '0756253826', 'Posho', 'Mayuge', '2018-11-07'),
(3, 5, 'Vicent', '0702143627', 'Rice', 'Makerere', '2018-11-06'),
(4, 7, 'Lambert', '07536273547', 'Books', 'Kyambogo', '2018-11-01'),
(5, 1, 'Sarah', '0724514636', 'Chalk', 'Gayaza', '2018-11-03'),
(6, 2, 'Vicky', '0792167246', 'Tables', 'Nakawa', '2018-11-01'),
(7, 10, 'Joshua', '0702634857', 'Chairs', 'Masaka', '2018-11-04');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

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
(9, 'Sarah', 'Aleta', 786225326, 'Kampala', 'sarah@gmail.com', '12345s'),
(10, 'Frank', 'Mugisha', 772345120, 'Mbuya', 'fmugisha@gmail.com', '12345f'),
(11, 'Arafat', 'Magezi', 789362416, 'Beverly', 'a@gmail.com', '12345a'),
(12, 'Simon', 'Mubeezi', 783514373, 'Mbuya', 'simon@gmail.com', '12345'),
(13, 'Peter', 'kakembo', 785253651, 'Kawempe', 'kakembo@gmail.com', '1234p'),
(14, 'Brian', 'Male', 746352738, 'Maya', 'brian@gmail.com', '1234b');

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

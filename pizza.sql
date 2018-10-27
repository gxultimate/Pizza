-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2018 at 05:09 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `finalorder`
--

DROP TABLE IF EXISTS `finalorder`;
CREATE TABLE IF NOT EXISTS `finalorder` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `orderName` varchar(40) NOT NULL,
  `orderPizza` varchar(40) NOT NULL,
  `orderQty` varchar(4) NOT NULL,
  `orderPrice` varchar(10) NOT NULL,
  `orderSize` varchar(4) NOT NULL,
  `orderCheese` varchar(20) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pizzainfo`
--

DROP TABLE IF EXISTS `pizzainfo`;
CREATE TABLE IF NOT EXISTS `pizzainfo` (
  `pizzaID` int(2) NOT NULL DEFAULT '1',
  `pizzaType` varchar(100) NOT NULL,
  `cheeseType` varchar(100) NOT NULL,
  `size` int(1) NOT NULL,
  `price` int(4) NOT NULL,
  PRIMARY KEY (`pizzaID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizzainfo`
--

INSERT INTO `pizzainfo` (`pizzaID`, `pizzaType`, `cheeseType`, `size`, `price`) VALUES
(1, 'Hawaiian', 'Quickmelt', 9, 120);

-- --------------------------------------------------------

--
-- Table structure for table `temporder`
--

DROP TABLE IF EXISTS `temporder`;
CREATE TABLE IF NOT EXISTS `temporder` (
  `temp_orderID` int(3) NOT NULL AUTO_INCREMENT,
  `pizzaname` varchar(40) NOT NULL,
  `temp_price` varchar(10) NOT NULL,
  `temp_dtime` varchar(10) NOT NULL,
  `temp_cheese` varchar(20) NOT NULL,
  `temp_size` varchar(4) NOT NULL,
  `temp_userID` varchar(20) DEFAULT NULL,
  `temp_qty` varchar(4) NOT NULL,
  PRIMARY KEY (`temp_orderID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temporder`
--

INSERT INTO `temporder` (`temp_orderID`, `pizzaname`, `temp_price`, `temp_dtime`, `temp_cheese`, `temp_size`, `temp_userID`, `temp_qty`) VALUES
(1, 'Yummy Hotdog Pizza', '95.00', '1', 'mozarella', '9', NULL, '1'),
(2, 'Yummy Hotdog Pizza', '190.00', '3', 'mozarella', '9', NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `userpassword` varchar(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `contactno` int(11) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `userpassword`, `fullname`, `address`, `contactno`) VALUES
(1, 'admin', 'admin', 'ralph', 'san isdiro', 123),
(2, 'admin', 'admin', 'ralph', 'san isdiro', 123),
(3, 'april', 'april', 'april', 'san jose', 890),
(4, 'ralph', 'ralph', 'ralph', 'sas sad', 1234556);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

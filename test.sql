-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2017 at 04:02 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE IF NOT EXISTS `addtocart` (
  `PRODUCT` varchar(20) NOT NULL,
  `CATEGORY` varchar(20) NOT NULL,
  `BRAND` varchar(20) NOT NULL,
  `COST` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `USERNAME` varchar(20) NOT NULL,
  `PRODUCT` varchar(20) NOT NULL,
  `CATEGORY` varchar(20) NOT NULL,
  `BRAND` varchar(20) NOT NULL,
  `COST` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`USERNAME`, `PRODUCT`, `CATEGORY`, `BRAND`, `COST`) VALUES
('Vijeta', 'Laptop', 'Computing', 'Lenovo', 60000),
('Vijeta', 'Cellphone', 'Communication', 'Motorolla', 19000),
('Vijeta', 'Television', 'Entertainment', 'Samsung', 40000),
('Vijeta', 'Microwave', 'KitchenApplines', 'Faber', 42000),
('Vijeta', 'Cellphone', 'Communication', 'Motorolla', 19000),
('Vijeta', 'Camera', 'Photography', 'Canon', 12000),
('Vijeta', 'Laptop', 'Computing', 'Lenovo', 60000),
('Vijeta', 'Cellphone', 'Communication', 'Motorolla', 19000),
('vijeta', 'AirConditioner', 'Home Appliances', 'Whirlpool', 31000),
('vijeta', 'Television', 'Entertainment', 'Samsung', 40000),
('vijeta', 'AirConditioner', 'Home Appliances', 'Whirlpool', 31000),
('vijeta', 'Television', 'Entertainment', 'Samsung', 40000),
('abc', 'AirConditioner', 'Home Appliances', 'Whirlpool', 31000),
('abc', 'Television', 'Entertainment', 'Samsung', 40000),
('abc', 'Laptop', 'Computing', 'Lenovo', 60000),
('pqr', 'Laptop', 'Computing', 'Lenovo', 60000),
('pqr', 'Microwave', 'KitchenApplines', 'Faber', 42000),
('pqr', 'AirConditioner', 'Home Appliances', 'Whirlpool', 31000),
('pqr', 'Laptop', 'Computing', 'Lenovo', 60000),
('xyz', 'AirConditioner', 'Home Appliances', 'Whirlpool', 31000),
('xyz', 'Laptop', 'Computing', 'Lenovo', 60000),
('abc', 'AirConditioner', 'Home Appliances', 'Whirlpool', 31000),
('abc', 'Cellphone', 'Communication', 'Motorolla', 19000),
('abc', 'Television', 'Entertainment', 'Samsung', 40000),
('abc', 'Cellphone', 'Communication', 'Motorolla', 19000),
('urvi', 'AirConditioner', 'Home Appliances', 'Whirlpool', 31000),
('urvi', 'Cellphone', 'Communication', 'Motorolla', 19000),
('isha', 'AirConditioner', 'Home Appliances', 'Whirlpool', 31000),
('isha', 'Camera', 'Photography', 'Canon', 12000),
('isha', 'Laptop', 'Computing', 'Lenovo', 60000),
('jai', 'Laptop', 'Computing', 'Lenovo', 60000),
('jai', 'Cellphone', 'Communication', 'Motorolla', 19000),
('qwerty', 'AirConditioner', 'Home Appliances', 'Whirlpool', 31000),
('qwerty', 'Television', 'Entertainment', 'Samsung', 40000),
('abc', 'Microwave', 'KitchenApplines', 'Faber', 42000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `NAME` varchar(20) NOT NULL,
  `EMAILID` varchar(40) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `CONTACT` varchar(20) NOT NULL,
  `CARDNO` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`NAME`, `EMAILID`, `ADDRESS`, `CONTACT`, `CARDNO`, `PASSWORD`, `ID`) VALUES
('Vijeta', 'vijetamariwalla@gmail.com', 'santacruz', '9821004900', '111', 'vijeta', 1),
('abc', 'abc@gmail.com', 'Andheri', '998346734', '411', 'abc', 2),
('def', 'def@gmail.com', 'Parle', '8798373', '734', 'def', 3),
('ghi', 'ghi@gmail.com', 'Andheri', '957334472', '374', 'ghi', 4),
('jkl', 'jkl@gmail.com', 'MumbaiCentral', '97849233', '736', 'jkl', 5),
('mno', 'mno@gmail.com', 'juhu', '976136437', '823', 'mno', 6),
('qpr', 'qpr@gmail.com', 'Dombivali', '99812734', '348', 'qpr', 7),
('stu', 'stu@gmail.com', 'Khar', '9172373298', '989', 'stu', 8),
('vwx', 'vwx@gmail.com', 'Bandra', '94872364', '347', 'vwx', 9),
('yz', 'yz@gmail.com', 'Dadar', '9389327982', '344', 'yz', 10),
('pqr', 'pqr@gmail.com', 'Bandra', '1234567890', '123456', 'pqr', NULL),
('xyz', 'xyz@gmail.com', 'Andheri', '1234567890', '123456`', 'xyz', NULL),
('urvi', 'urvi@gmail.com', 'Malad', '1234567890', '123456', 'urvi', NULL),
('isha', 'isha@gmail.com', 'Malad', '1234567890', '123456', 'isha', NULL),
('jai', 'jai@gmail.com', 'kandivali', '2345', '1234', 'jai', NULL),
('sss', 'sss@gmail.com', 'abc', '567', '1', 'hfhdj', NULL),
('sss', 'sss@gmail.com', 'abc', '567', '1', '123', NULL),
('qwerty', 'qwerty@gmail.com', 'abc', '567', '1', 'qwerty', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ulike`
--

CREATE TABLE IF NOT EXISTS `ulike` (
  `USERNAME` varchar(20) NOT NULL,
  `PRODUCT` varchar(20) NOT NULL,
  `CATEGORY` varchar(20) NOT NULL,
  `BRAND` varchar(20) NOT NULL,
  `COST` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ulike`
--

INSERT INTO `ulike` (`USERNAME`, `PRODUCT`, `CATEGORY`, `BRAND`, `COST`) VALUES
('Vijeta', 'Camera', 'Photography', 'Canon', '12000'),
('Vijeta', 'AirConditioner', 'Home Appliances', 'Whirlpool', '31000'),
('abc', 'AirConditioner', 'Home Appliances', 'Whirlpool', '31000'),
('abc', 'Television', 'Entertainment', 'Samsung', '40000'),
('abc', 'Cellphone', 'Communication', 'Motorolla', '19000'),
('pqr', 'Laptop', 'Computing', 'Lenovo', '60000'),
('pqr', 'Cellphone', 'Communication', 'Motorolla', '19000'),
('xyz', 'AirConditioner', 'Home Appliances', 'Whirlpool', '31000'),
('xyz', 'Television', 'Entertainment', 'Samsung', '40000'),
('abc', 'Cellphone', 'Communication', 'Motorolla', '19000'),
('abc', 'Television', 'Entertainment', 'Samsung', '40000'),
('urvi', 'Cellphone', 'Communication', 'Motorolla', '19000'),
('isha', 'AirConditioner', 'Home Appliances', 'Whirlpool', '31000'),
('isha', 'Laptop', 'Computing', 'Lenovo', '60000'),
('jai', 'AirConditioner', 'Home Appliances', 'Whirlpool', '31000'),
('jai', 'Television', 'Entertainment', 'Samsung', '40000'),
('jai', 'Laptop', 'Computing', 'Lenovo', '60000'),
('qwerty', 'Laptop', 'Computing', 'Lenovo', '60000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

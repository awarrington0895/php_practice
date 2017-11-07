-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 01:40 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ch11db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` char(1) NOT NULL,
  `salary` decimal(6,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `sex`, `salary`) VALUES
(100, 'John', 'M', '1001.00'),
(200, 'Kim', 'F', '1002.00'),
(300, 'Tom', 'M', '1003.00'),
(400, 'Linda', 'F', '1004.00'),
(500, 'Al', 'M', '1005.00'),
(600, 'Chris', 'M', '1006.00'),
(700, 'Steve', 'M', '1007.00'),
(800, 'Michelle', 'F', '1014.00'),
(900, 'Adam', 'M', '1009.00'),
(110, 'Tony', 'M', '1010.00'),
(120, 'Ema', 'F', '1011.00'),
(130, 'Ralph', 'M', '1012.00'),
(140, 'Debbie', 'F', '1013.00'),
(150, 'Dan', 'M', '1014.00'),
(160, 'Jack', 'M', '1014.00'),
(170, 'Tim', 'M', '1015.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

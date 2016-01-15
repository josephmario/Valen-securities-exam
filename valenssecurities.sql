-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2016 at 11:49 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `valenssecurities`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car`
--

CREATE TABLE IF NOT EXISTS `tbl_car` (
  `car_id` bigint(20) NOT NULL,
  `car_name` varchar(50) NOT NULL DEFAULT '0',
  `car_color` varchar(50) NOT NULL DEFAULT '0',
  `car_image` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_car`
--

INSERT INTO `tbl_car` (`car_id`, `car_name`, `car_color`, `car_image`) VALUES
(1, 'Car A', 'blue', '1'),
(2, 'Car B', 'red', '2'),
(3, 'Car C', 'blue', '1'),
(4, 'Car D', 'red', '2'),
(5, 'Car E', 'blue', '1'),
(6, 'Car F', 'red', '0'),
(7, 'Car H', 'red', '0'),
(8, 'Car G', 'blue', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_car`
--
ALTER TABLE `tbl_car`
  ADD PRIMARY KEY (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_car`
--
ALTER TABLE `tbl_car`
  MODIFY `car_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

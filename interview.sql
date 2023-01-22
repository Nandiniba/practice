-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2023 at 03:30 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `inserted`
--

DROP TABLE IF EXISTS `inserted`;
CREATE TABLE IF NOT EXISTS `inserted` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `photo` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inserted`
--

INSERT INTO `inserted` (`id`, `photo`, `name`, `description`) VALUES
(28, 'images/Furie_Elements (13).jpg', 'swdfghjk', 'qwert5yuijhgfdsa14578956213485623'),
(23, 'images/images.jfif', '34tyyhgbvgrfv', 'qewrtyuiosxdcvbgnhzxcvb'),
(24, 'images/Screenshot (1).png', 'awertyhgf', 'aretyuiioiuytrewqwerthyjkhgfdsaawdefrtyu'),
(25, 'images/Screenshot (3).png', 'pooja hegde', 'sdefrtgyuikjhgfdsdfghgfdsadfgh'),
(26, 'Screenshot (23).png', 'ergfthfd', 'mnbvcxzlkjhgfdsapoiuytrewq'),
(27, 'images/Screenshot (58).png', 'sdfghyjukilo', 'wert5y67u8iolikjhgfdefgrthyjkhngbfds'),
(29, '2733564.jpg', 'rtyujhgfdsadfgh', '12457845612356895623856413284561246512'),
(30, 'images/Furie_Elements (9).jpg', '123456', 'njkhgftryghfvthvftyuhfthyujuy'),
(31, 'images/download.jpg', '987456', 'hgvftryuhjbgyuhjbgyjukjhgyjuikjhyuk'),
(32, 'images/3544220 (3).jpg', 'sdfrtgyujhgfdwert', 'ertyukjhgfdsaw8456128654');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'nandiniba', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

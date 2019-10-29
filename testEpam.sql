-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2019 at 02:50 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testEpam`
--

-- --------------------------------------------------------

--
-- Table structure for table `Action`
--

CREATE TABLE `Action` (
  `id` int(11) NOT NULL,
  `area` varchar(10) NOT NULL,
  `timestamp` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Action`
--

INSERT INTO `Action` (`id`, `area`, `timestamp`) VALUES
(51738, 'News', 1572347544),
(51738, 'Main', 1572347546),
(51738, 'News', 1572347591),
(51738, 'Main', 1572347592),
(51738, 'Nav', 1572347592),
(51738, 'News', 1572347703),
(51738, 'News', 1572347704),
(51738, 'News', 1572347704),
(51738, 'News', 1572353146),
(51738, 'News', 1572353147),
(51738, 'News', 1572353147),
(51738, 'Main', 1572353148),
(51738, 'Main', 1572353148),
(51738, 'Nav', 1572353150),
(51738, 'News', 1572353173),
(51738, 'Main', 1572353174),
(51738, 'Nav', 1572353175),
(51738, 'News', 1572353227),
(51738, 'Nav', 1572353228),
(51738, 'News', 1572353228),
(51738, 'Main', 1572353229),
(6925, 'News', 1572353247),
(6925, 'News', 1572353249);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

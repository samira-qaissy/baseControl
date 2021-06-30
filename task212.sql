-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 12:09 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task212`
--

-- --------------------------------------------------------

--
-- Table structure for table `ccontrolbuttonss`
--

CREATE TABLE `ccontrolbuttonss` (
  `forword` varchar(20) NOT NULL,
  `leftt` varchar(20) NOT NULL,
  `stop` varchar(20) NOT NULL,
  `rightt` varchar(20) NOT NULL,
  `backword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ccontrolbuttonss`
--

INSERT INTO `ccontrolbuttonss` (`forword`, `leftt`, `stop`, `rightt`, `backword`) VALUES
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('forword', '', '', '', ''),
('', '', 'stop', '', ''),
('', '', '', 'rightt', ''),
('', '', '', '', 'backword'),
('', 'leftt', '', '', ''),
('forword', '', '', '', ''),
('forword', '', '', '', ''),
('', '', 'stop', '', ''),
('', '', 'stop', '', ''),
('', '', 'stop', '', ''),
('', '', '', '', 'backword');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

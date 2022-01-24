-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 11:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `language`
--

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `ENGLISH` varchar(40) NOT NULL,
  `KINYARWANDA` varchar(40) NOT NULL,
  `FRANCE` varchar(40) NOT NULL,
  `KISWAHILE` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`, `ENGLISH`, `KINYARWANDA`, `FRANCE`, `KISWAHILE`) VALUES
(1, 'kurya', 'eat', 'kurya', 'manger', 'futura'),
(2, 'isoko', 'eat', 'isoko', 'marcher', 'sokoni'),
(32, 'i am Rwandan', 'i am Rwandan', 'ndi umunyarwanda', 'je suis Rwandais', 'toka rwanda'),
(41, 'country', 'country', 'igihugu', 'pair', 'gihug'),
(67, 'example', 'example', 'urugero', 'examples', 'kuhuka'),
(72, 'Good morning', 'Good morning', 'igitondo kiza', 'bonjour', 'Habari za asubuhi'),
(82, '', '', '', '', ''),
(83, '', '', '', '', ''),
(84, '', '', '', '', ''),
(85, '', '', '', '', ''),
(86, '', '', '', '', ''),
(87, '', '', '', '', ''),
(88, '', '', '', '', ''),
(89, '', '', '', '', ''),
(90, '', '', '', '', ''),
(91, '', '', '', '', ''),
(92, '', '', '', '', ''),
(93, 'hy', 'jj', 'hh', 'yh', 'kk'),
(94, '', '', '', '', ''),
(95, '', '', '', '', ''),
(96, '', '', '', '', ''),
(97, '', '', '', '', ''),
(98, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

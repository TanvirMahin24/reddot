-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 12:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_tanvirmahincse18`
--
CREATE DATABASE IF NOT EXISTS `dev_tanvirmahincse18` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dev_tanvirmahincse18`;

-- --------------------------------------------------------

--
-- Table structure for table `blood_donors`
--

CREATE TABLE `blood_donors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `group` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `count` int(11) NOT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donors`
--

INSERT INTO `blood_donors` (`id`, `name`, `group`, `email`, `phone`, `address`, `count`, `del`) VALUES
(1, 'mahin', 'B+', 'tanvirmahin@gmail.com', '01676708851', 'rangpur', 3, 0),
(2, 'angkon', 'A+', 'angkon@gmail.com', '01676708851', 'rangpur', 6, 0),
(3, 'mukit', 'A+', 'mukit@gmail.com', '0166666666', 'Chittagong', 4, 0),
(4, 'tamim', 'A+', 'tamim@gmail.com', '0111111111', 'Nilphamari', 4, 0),
(5, 'Taj', 'A+', 'tj@gmail.com', '01242424242', 'Dhaka', 4, 0),
(6, 'utshab', 'O-', 'utshab@gmail.com', '01676708851', 'rangpur', 4, 0),
(7, 'musfiq	vai', 'AB-', 'musfiq@gmail.com', '01676708851', 'rangpur', 7, 0),
(8, 'Maisha', 'B-', 'ridu@gmail.com', '01676708851', 'dhap, rangpur', 1, 0),
(9, 'rahim', 'O-', 'r@gmail.com', '01676708851', 'rangpur', 1, 1),
(10, 'istiyak', 'B+', 'ist@gmail.com', '01676708851', 'dinajpur', 2, 0),
(11, 'Noor Solaiman', 'B+', 'seomahin24@gmail.com', '01676708851', 'dhap, house: 23, road: 01 (CS road)', 3, 0),
(12, 'Tanvir', 'O+', 'seomahin24@gmail.com', '01676708851', 'dhap, house: 23, road: 01 (CS road)', 1, 1),
(14, 'ifti', 'O+', 'Ifti@gmail.com', '01111111111', 'Saidpur', 2, 1),
(15, 'Chinmoy', 'B-', 'chinu@gmail.com', '011212112212', 'Rajshahi', 3, 0),
(16, 'Plabon', 'A-', 'pl@gmail.com', '014535453535', 'Chadpur', 1, 0),
(17, 'Emon', 'O+', 'emon@gmail.com', '012121212121', 'Dhaka', 1, 1),
(18, 'Mondol', 'A+', 'mond@gmail.com', '01676708851', 'Lalmonirhat', 2, 0),
(19, 'Noor', 'B+', 'mahin24@gmail.com', '01676708851', 'dhap, house: 23, road: 01 (CS road)', 3, 0),
(20, 'Tanvir mahin', 'O+', 'mahin@gmail.com', '01676708851', 'dhap, house: 23, road: 01 (CS road)', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Tanvir Mahin', 'tm24', 'tanvirmahin24@gmail.com', '$2y$10$37x6z.oX0XcekCE2Pe2gMeBt3h6A/dzsWiZK/jPzpKDkjRRZ79Goq'),
(2, 'Noor Ajmir Tanvir', 'tanvir', 'test@test.com', '$2y$10$NSWiETxwKJDBHCYCCpjzxOoFbBKnGNN/p5JM1bRt1efm8b0vxAT8q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donors`
--
ALTER TABLE `blood_donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donors`
--
ALTER TABLE `blood_donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

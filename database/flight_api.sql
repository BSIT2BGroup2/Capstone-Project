-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 11:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `airline_id` int(11) NOT NULL,
  `airline_name` varchar(255) NOT NULL,
  `iata_code` varchar(255) NOT NULL,
  `icao_code` varchar(255) NOT NULL,
  `airline_img` varchar(255) NOT NULL,
  `airline_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`airline_id`, `airline_name`, `iata_code`, `icao_code`, `airline_img`, `airline_description`) VALUES
(1, 'Cebgo', 'DG', 'SRQ', '', ''),
(2, 'Cebu Pacific', '5J', 'CEB', '', ''),
(3, 'PAL Express', '2P', 'GAP', '', ''),
(4, 'Pan Pacific Airlines', '8Y', 'AAV', '', ''),
(5, 'Philippine Airlines', 'PR', 'PAL', '', ''),
(6, 'Philippine AirAsia', 'Z2', 'APG', '', ''),
(7, 'Sunlight', 'ST', 'SEA', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `airport_id` int(11) NOT NULL,
  `airline_id` int(11) NOT NULL,
  `airport_name` varchar(255) NOT NULL,
  `iata_code` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `airport_img` varchar(255) NOT NULL,
  `airport_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`airport_id`, `airline_id`, `airport_name`, `iata_code`, `city`, `airport_img`, `airport_description`) VALUES
(1, 0, 'Ninoy Aquino International Airport', 'MNL', 'Manila', '', ''),
(2, 0, 'Mactan Cebu International Airport', 'CEB', 'Lapu-Lapu City', '', ''),
(3, 0, 'Clark International Airport', 'CRK', 'Pampanga', '', ''),
(4, 0, 'Francisco Bangoy International Airport', 'DVO', 'Davao City', '', ''),
(5, 0, 'Laguindingan Airport', 'CGY', 'Cagayan De Oro City', '', ''),
(6, 0, 'Bacolod-Silay Airport', 'BCD', 'Negros Occidental', '', ''),
(7, 0, 'Puerto Princesa Airport', 'PPS', 'Puerto Princesa City', '', ''),
(8, 0, 'Daniel Z. Romuladez Airport', 'TAC', 'Tacloban City', '', ''),
(9, 0, 'Iloilo International Airport', 'ILO', 'IloIlo', '', ''),
(10, 0, 'Zamboanga Airport', 'ZAM', 'Zamboanga Del Sur', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `account_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `address`, `contact`, `email`, `user_type`, `user_img`, `account_id`, `password`, `confirm_password`) VALUES
(1, 'Clive Saludes', 'Luisiana, Laguna', 9602642636, 'saludescleave26@gmail.com', 'student', '', '0119-4064', 'denzer16', 'denzer16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`airline_id`);

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`airport_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `airline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `airport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

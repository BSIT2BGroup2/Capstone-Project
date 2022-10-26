-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 04:40 AM
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
  `iata_prefix_accounting` int(11) NOT NULL,
  `icao_code` varchar(255) NOT NULL,
  `callsign` varchar(255) NOT NULL,
  `types` varchar(255) NOT NULL,
  `statused` varchar(255) NOT NULL,
  `fleet_size` int(11) NOT NULL,
  `fleet_average_age` float NOT NULL,
  `date_founded` year(4) NOT NULL,
  `hub_code` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `country_iso2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`airline_id`, `airline_name`, `iata_code`, `iata_prefix_accounting`, `icao_code`, `callsign`, `types`, `statused`, `fleet_size`, `fleet_average_age`, `date_founded`, `hub_code`, `country_name`, `country_iso2`) VALUES
(1, 'American Airlines', 'AA', 1, 'AAL', 'AMERICAN', 'scheduled', 'active', 963, 10.9, 1934, 'DFW', 'United States', 'US'),
(2, 'Delta Air Lines', 'DL', 6, 'DAL', 'DELTA', 'scheduled,division', 'active', 823, 17, 1928, 'ATL', 'United States', 'US'),
(3, 'United Airlines', 'UA', 16, 'UAL', 'UNITED', 'scheduled,division', 'active', 715, 13.8, 1931, 'ORD', 'United States', 'US'),
(4, 'Southwest Airlines Co.', 'WN', 526, 'SWA', 'SOUTHWEST', 'scheduled', 'active', 712, 12.3, 1967, 'DAL', 'United States Minor Outlying Islands', 'UM'),
(5, 'China Southern Airlines', 'CZ', 784, 'CSN', 'CHINA SOUTHERN', 'scheduled', 'active', 498, 6.9, 2004, 'CAN', 'China', 'CN'),
(6, 'China Eastern', 'MU', 781, 'CES', 'CHINA EASTERN', 'scheduled', 'active', 407, 8.4, 1988, 'PVG', 'China', 'CN'),
(7, 'SkyWest Airlines', 'OO', 302, 'SKW', 'SKYWEST', 'scheduled', 'active', 382, 11.1, 1972, 'SLC', 'United States Minor Outlying Islands', 'UM'),
(8, 'Air China Limited', 'CA', 999, 'CCA', 'AIR CHINA', 'scheduled', 'active', 369, 6.2, 1988, 'PEK', 'China', 'CN'),
(9, 'Federal Express', 'FX', 23, 'FDX', 'FEDEX', 'scheduled,cargo', 'active', 367, 21.9, 1971, 'MEM', 'United States', 'US'),
(10, 'Ryanair Ltd.', 'FR', 224, 'RYR', 'RYANAIR', 'scheduled', 'active', 353, 6.4, 1985, 'STN', 'Ireland', 'IE'),
(11, 'Expressjet', 'XE', 0, 'BTA', 'JET LINK', '', 'active', 319, 13.2, 0000, '', 'United States Minor Outlying Islands', 'UM'),
(12, 'THY - Turkish Airlines', 'TK', 235, 'THY', 'TURKISH', 'scheduled', 'active', 285, 6.3, 1933, 'IST', 'Turkey', 'TR'),
(13, 'Lufthansa Cargo', 'LH', 20, 'GEC', 'LUFTHANSA', 'scheduled,cargo', 'active', 276, 10.9, 1994, 'FRA', 'Germany', 'DE'),
(14, 'British Airways', 'BA', 125, 'BAW', 'SPEEDBIRD', 'scheduled', 'active', 265, 12.7, 1974, 'LHR', 'United Kingdom', 'GB'),
(15, 'Emirates', 'EK', 176, 'UAE', 'EMIRATES', 'scheduled', 'active', 249, 6.1, 1985, 'DXB', 'United Arab Emirates', 'AE'),
(16, 'UPS Airlines', '5X', 406, 'UPS', 'UPS', 'cargo', 'active', 237, 17.5, 1907, 'SDF', 'United States', 'US'),
(17, 'Easyjet Airline Company Limited', 'U2', 0, 'EZY', 'EASY', 'scheduled', 'active', 228, 6.6, 1995, 'LGW', 'United Kingdom', 'GB'),
(18, 'Air France', 'AF', 57, 'AFR', 'AIRFRANS', 'scheduled', 'active', 226, 11.7, 1933, 'CDG', 'France', 'FR'),
(19, 'JetBlue', 'B6', 279, 'JBU', 'JETBLUE', 'scheduled', 'active', 218, 8.7, 2000, 'JFK', 'United States', 'US'),
(20, 'All Nippon Airways', 'NH', 205, 'ANA', 'ALL NIPPON', 'scheduled', 'active', 206, 9.5, 1952, 'HND', 'Japan', 'JP'),
(21, 'Qatar Airways', 'QR', 157, 'QTR', 'QATARI', 'scheduled', 'active', 176, 5.7, 1994, 'DOH', 'Qatar', 'QA'),
(22, 'Envoy Air Inc.', 'MQ', 93, 'ENY', 'ENVOY', 'scheduled', 'active', 171, 11.6, 2014, 'DFW', 'United States Minor Outlying Islands', 'UM'),
(23, 'Aeroflot', 'SU', 555, 'AFL', 'AEROFLOT', 'scheduled', 'active', 168, 4.3, 1923, 'SVO', 'Russia', 'RU'),
(24, 'Shenzhen Airlines', 'ZH', 479, 'CSZ', 'SHENZHEN AIR', 'scheduled', 'active', 165, 5.8, 1992, 'SZX', 'China', 'CN'),
(25, 'Air Canada', 'AC', 14, 'ACA', 'AIR CANADA', 'scheduled', 'active', 164, 25, 2001, 'YYZ', 'Canada', 'CA'),
(26, 'TAM Linhas Aereas', 'JJ', 957, 'TAM', 'TAM', 'scheduled', 'active', 163, 7.4, 1976, 'CGH', 'Brazil', 'BR'),
(27, 'Japan Airlines', 'JL', 131, 'JAL', 'JAPANAIR', 'scheduled', 'active', 163, 9, 1951, 'HND', 'Japan', 'JP'),
(28, 'Korean Air', 'KE', 180, 'KAL', 'KOREANAIR', 'scheduled', 'active', 159, 9.5, 1962, 'ICN', 'South Korea', 'KR'),
(29, 'Alaska Airlines', 'AS', 27, 'ASA', 'ALASKA', 'scheduled', 'active', 156, 9.5, 1932, 'SEA', 'United States', 'US'),
(30, 'Hainan Airlines', 'HU', 880, 'CHH', 'HAINAN', 'scheduled', 'active', 155, 4.9, 1989, 'HAK', 'China', 'CN'),
(31, 'SAS', 'SK', 117, 'SAS', 'SCANDINAVIAN', 'scheduled', 'active', 155, 11.1, 1946, 'CPH', 'Sweden', 'SE'),
(32, 'Garuda', 'GA', 126, 'GIA', 'INDONESIA', 'scheduled', 'active', 148, 5, 1949, 'CGK', 'Indonesia', 'ID'),
(33, 'Cathay Pacific', 'CX', 160, 'CPA', 'CATHAY', 'scheduled', 'active', 143, 8.3, 1946, 'HKG', 'Hong Kong', 'HK'),
(34, 'Republic Airlines', 'RW', 52, 'RPA', 'BRICKYARD', 'scheduled', 'active', 139, 5.9, 2003, 'IND', 'United States', 'US'),
(35, 'Saudi Arabian Airlines', 'SV', 65, 'SVA', 'SAUDIA', 'scheduled', 'active', 138, 7.8, 1945, 'JED', 'Saudi Arabia', 'SA'),
(36, 'Azul Brazilian Airlines', 'AD', 577, 'AZU', 'AZUL', 'scheduled', 'active', 132, 4.3, 2008, 'VCP', 'Brazil', 'BR'),
(37, 'Xiamen Airlines', 'MF', 731, 'CXA', 'XIAMEN AIR', 'scheduled', 'active', 132, 5.2, 1984, 'XMN', 'China', 'CN'),
(38, 'VRG Linhas Aereas S.A. - Grupo GOL', 'G3', 127, 'GLO', 'GOL', 'scheduled', 'active', 127, 7.8, 2000, 'CGH', 'Brazil', 'BR'),
(39, 'Jazz Aviation LP', 'QK', 983, 'JZA', 'JAZZ', 'scheduled', 'active', 127, 16.8, 0000, 'YHZ', 'Canada', 'CA'),
(40, 'Etihad Airways', 'EY', 607, 'ETD', 'ETIHAD', 'scheduled', 'active', 126, 5.8, 2003, 'AUH', 'United Arab Emirates', 'AE'),
(41, 'Lan Airlines', 'LA', 45, 'LAN', 'LAN', 'scheduled', 'active', 126, 5.1, 2004, 'SCL', 'Chile', 'CL'),
(42, 'Endeavor Air', '9E', 430, 'FLG', 'FLAGSHIP', 'scheduled', 'active', 122, 7.5, 2013, 'MSP', 'United States Minor Outlying Islands', 'UM'),
(43, 'Mesa Airlines, Inc.', 'YV', 533, 'ASH', 'AIR SHUTTLE', 'scheduled', 'active', 122, 7.4, 1980, 'PHX', 'United States Minor Outlying Islands', 'UM'),
(44, 'Qantas', 'QF', 81, 'QFA', 'Q LINK', 'scheduled', 'active', 118, 9.2, 1920, 'TMW', 'Australia', 'AU'),
(45, 'Lion Airlines', 'JT', 990, 'LNI', 'LION INTER', 'scheduled', 'active', 117, 5.7, 1999, 'CGK', 'Indonesia', 'ID'),
(46, 'WestJet', 'WS', 838, 'WJA', 'WESTJET', 'scheduled', 'active', 117, 8.4, 1995, 'YYC', 'Canada', 'CA'),
(47, 'KLM', 'KL', 74, 'KLM', 'KLM', 'scheduled', 'active', 116, 11.1, 1919, 'AMS', 'Netherlands', 'NL'),
(48, 'SIA Cargo', 'SQ', 618, 'SIA', 'SINGAPORE', 'scheduled', 'active', 111, 8.1, 1972, 'SIN', 'Singapore', 'SG'),
(49, 'PSA Airlines', 'OH', 320, 'JIA', 'BLUE STREAK', 'scheduled', 'active', 109, 7.1, 1979, 'DAY', 'United States', 'US'),
(50, 'Air India', 'AI', 98, 'AIC', 'AIR INDIA', 'scheduled', 'active', 108, 9.4, 1948, 'DEL', 'India', 'IN'),
(51, 'Sichuan Airlines', '3U', 876, 'CSC', 'SICHUAN', 'scheduled', 'active', 107, 4.8, 1986, 'CTU', 'China', 'CN'),
(52, 'Interglobe Aviation Ltd. dba Indigo', '6E', 312, 'IGO', 'IFLY', 'scheduled', 'active', 107, 4.7, 2006, 'DEL', 'India', 'IN'),
(53, 'Vueling', 'VY', 30, 'VLG', 'VUELING', 'scheduled', 'active', 105, 6.7, 2004, 'BCN', 'Spain', 'ES'),
(54, 'Alitalia', 'AZ', 55, 'AZA', 'ALITALIA', 'scheduled', 'active', 102, 10.5, 1957, 'FCO', 'Italy', 'IT'),
(55, 'AVIANCA', 'AV', 134, 'AVA', 'AVIANCA', 'scheduled', 'active', 99, 4.5, 1933, 'BOG', 'Colombia', 'CO'),
(56, 'Virgin Australia', 'VA', 795, 'VAU', 'VIRGIN', 'scheduled', 'active', 98, 6.3, 2011, 'BNE', 'Australia', 'AU'),
(57, 'Shuttle America', 'S5', 919, 'TCF', 'MERCURY', 'scheduled', 'active', 95, 11.5, 0000, 'FWA', 'United States Minor Outlying Islands', 'UM'),
(58, 'Shandong Airlines', 'SC', 324, 'CDG', 'SHANDONG', 'scheduled', 'active', 93, 4.6, 1994, 'TNA', 'China', 'CN'),
(59, 'Jet Airways', '9W', 589, 'JAI', 'JET AIRWAYS', 'scheduled', 'active', 92, 6.7, 1992, 'BOM', 'India', 'IN'),
(60, 'Tianjin Airlines', 'GS', 826, 'GCR', 'CHINA DRAGON', 'scheduled', 'active', 91, 5.2, 2009, 'TSN', 'China', 'CN'),
(61, 'Vietnam Airlines', 'VN', 738, 'HVN', 'VIETNAM AIRLINES', 'scheduled', 'active', 89, 5.4, 1951, 'SGN', 'Vietnam', 'VN'),
(62, 'COPA Airlines', 'CM', 230, 'CMP', 'COPA', 'scheduled', 'active', 88, 6.1, 1947, 'PTY', 'Panama', 'PA'),
(63, 'Shanghai Airlines', 'FM', 774, 'CSH', 'SHANGHAI AIR', 'scheduled', 'active', 86, 5.7, 1985, 'SHA', 'China', 'CN'),
(64, 'Air Berlin', 'AB', 745, 'BER', 'AIR BERLIN', 'scheduled', 'active', 85, 8.1, 1978, 'TXL', 'Germany', 'DE'),
(65, 'Austrian', 'OS', 257, 'AUA', 'AUSTRIAN', 'scheduled', 'active', 85, 15.8, 1957, 'VIE', 'Austria', 'AT'),
(66, 'Spirit Airlines', 'NK', 487, 'NKS', 'SPIRIT WINGS', 'scheduled', 'active', 84, 5.2, 1980, 'FLL', 'United States Minor Outlying Islands', 'UM'),
(67, 'Asiana', 'OZ', 988, 'AAR', 'ASIANA', 'scheduled', 'active', 84, 10.3, 1988, 'ICN', 'South Korea', 'KR'),
(68, 'China Airlines', 'CI', 297, 'CAL', 'DYNASTY', 'scheduled', 'active', 83, 9.6, 1959, 'TPE', 'Chinese Taipei', 'TW'),
(69, 'Allegiant Air LLC', 'G4', 268, 'AAY', 'ALLEGIANT', 'scheduled', 'active', 83, 21.6, 1997, 'LAS', 'United States Minor Outlying Islands', 'UM'),
(70, 'Malaysia Airlines', 'MH', 232, 'MAS', 'MALAYSIAN', 'scheduled', 'active', 83, 4.3, 1971, 'KUL', 'Malaysia', 'MY'),
(71, 'AirAsia Berhad dba AirAsia', 'AK', 807, 'AXM', 'ASIAN EXPRESS', 'scheduled', 'active', 82, 5.6, 1993, 'KUL', 'Malaysia', 'MY'),
(72, 'Thai Airways International', 'TG', 217, 'THA', 'THAI', 'scheduled', 'active', 81, 9.5, 1959, 'BKK', 'Thailand', 'TH'),
(73, 'IBERIA', 'IB', 75, 'IBE', 'IBERIA', 'scheduled', 'active', 78, 9.9, 1927, 'MAD', 'Spain', 'ES'),
(74, 'flybe', 'BE', 267, 'BEE', 'JERSEY', 'scheduled', 'historical/administration', 63, 11.7, 2002, 'EXT', 'United Kingdom', 'GB'),
(75, 'Ethiopian Airlines', 'ET', 71, 'ETH', 'ETHIOPIAN', 'scheduled', 'active', 69, 5.9, 1945, 'ADD', 'Ethiopia', 'ET'),
(76, 'Jetstar Airways Pty Limited', 'JQ', 41, 'JST', 'JETSTAR', 'scheduled', 'active', 69, 6.2, 2004, 'MEL', 'Australia', 'AU'),
(77, 'Wizz Air Hungary Ltd.', 'W6', 0, 'WZZ', 'WIZZ AIR', 'scheduled', 'active', 68, 4.2, 2004, 'BUD', 'Hungary', 'HU'),
(78, 'Air Wisconsin Airlines Corporation (AWAC)', 'ZW', 303, 'AWI', 'AIR WISCONSIN', 'scheduled', 'active', 68, 13.8, 1965, 'ATW', 'United States Minor Outlying Islands', 'UM'),
(79, 'SWISS', 'LX', 724, 'SWR', 'SWISS', 'scheduled', 'active', 67, 12.9, 2002, 'ZRH', 'Switzerland', 'CH'),
(80, 'Trans States Airlines, LLC', 'AX', 414, 'LOF', 'WATERSKI', 'scheduled', 'active', 65, 14.4, 1982, 'STL', 'United States', 'US'),
(81, 'EVA Air', 'BR', 695, 'EVA', 'EVA', 'scheduled', 'active', 65, 6.8, 1989, 'TPE', 'Chinese Taipei', 'TW'),
(82, 'S7 Airlines', 'S7', 421, 'SBI', 'SIBERIAN AIRLINES', 'scheduled', 'active', 65, 9.3, 1992, 'DME', 'Russia', 'RU'),
(83, 'Aeromexico', 'AM', 139, 'AMX', 'AEROMEXICO', 'scheduled', 'active', 64, 7.2, 1972, 'MEX', 'Mexico', 'MX'),
(84, 'Interjet', '4O', 837, 'AIJ', 'INTERJET', 'scheduled', 'active', 63, 6.4, 2005, 'TLC', 'Mexico', 'MX'),
(85, 'Aerolitoral S.A. de C.V.', '5D', 642, 'SLI', 'COSTERA', 'scheduled', 'active', 63, 8.9, 2007, 'MTY', 'Mexico', 'MX'),
(86, 'Capital Airlines', 'JD', 898, 'CBJ', 'CAPITAL JET', 'scheduled', 'active', 63, 8.1, 1995, 'HAK', 'China', 'CN'),
(87, 'Pegasus Airlines', 'PC', 624, 'PGT', 'SUNTURK', 'scheduled', 'active', 63, 5.2, 1990, 'SAW', 'Turkey', 'TR'),
(88, 'UTair', 'UT', 298, 'UTA', 'TJUMAVI', 'scheduled', 'active', 63, 14.2, 1991, 'SGC', 'Russia', 'RU'),
(89, 'TUI Airways Limited', 'BY', 754, 'TOM', 'TOMJET', 'scheduled,charter', 'active', 58, 8.6, 1962, 'LTN', 'United Kingdom', 'GB'),
(90, 'Compass Airlines LLC', 'CP', 3, 'CPZ', 'COMPASS', 'scheduled', 'active', 62, 5.8, 2007, 'MSP', 'United States Minor Outlying Islands', 'UM'),
(91, 'TAP Portugal', 'TP', 47, 'TAP', 'AIR PORTUGAL', 'scheduled', 'active', 62, 14.9, 1945, 'LIS', 'Portugal', 'PT'),
(92, 'Virgin America', 'VX', 984, 'VRD', 'REDWOOD', 'scheduled', 'active', 62, 6.3, 2006, 'SFO', 'United States', 'US'),
(93, 'Volaris', 'Y4', 36, 'VOI', 'VOLARIS', 'scheduled', 'active', 62, 4.5, 2006, 'TLC', 'Mexico', 'MX'),
(94, 'Germanwings GmbH', '4U', 51, 'GWI', 'GERMAN WINGS', 'scheduled', 'active', 61, 14.6, 2002, 'CGN', 'Germany', 'DE'),
(95, 'Jet2.com Limited', 'LS', 949, 'EXS', 'CHANNEX', 'scheduled,cargo', 'active', 61, 21.9, 2002, 'LBA', 'United Kingdom', 'GB'),
(96, 'Philippine Airlines', 'PR', 79, 'PAL', 'PHILIPPINE', 'scheduled', 'active', 59, 4.7, 1941, 'MNL', 'Philippines', 'PH'),
(97, 'Spring Airlines Limited Corporation', '9C', 89, 'CQH', 'AIR SPRING', 'scheduled', 'active', 58, 3.5, 2005, 'SHA', 'China', 'CN'),
(98, 'Frontier Airlines, Inc.', 'F9', 422, 'FFT', 'FRONTIER FLIGHT', 'scheduled', 'active', 58, 7.7, 1994, 'DEN', 'United States Minor Outlying Islands', 'UM'),
(99, 'Cebu Pacific Air', '5J', 203, 'CEB', 'CEBU AIR', 'scheduled', 'active', 57, 5, 1996, 'MNL', 'Philippines', 'PH'),
(100, 'Norwegian Air Shuttle A.S.', 'DY', 328, 'NAX', 'NOR SHUTTLE', 'scheduled', 'active', 57, 3.7, 1993, 'OSL', 'Norway', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `airport_id` int(11) NOT NULL,
  `airport_name` varchar(255) NOT NULL,
  `iata_code` varchar(255) NOT NULL,
  `icao_code` varchar(255) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `geoname_id` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `gmt` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `country_iso2` varchar(255) NOT NULL,
  `city_iata_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`airport_id`, `airport_name`, `iata_code`, `icao_code`, `latitude`, `longitude`, `geoname_id`, `timezone`, `gmt`, `phone_number`, `country_name`, `country_iso2`, `city_iata_code`) VALUES
(1, 'Anaa', 'AAA', 'NTGA', -17.05, -145.417, 6947726, 'Pacific/Tahiti', -10, 0, 'French Polynesia', 'PF', 'AAA'),
(2, 'Arrabury', 'AAB', 'YARY', -26.7, 141.042, 7730796, 'Australia/Brisbane', 10, 0, 'Australia', 'AU', 'AAB'),
(3, 'El Arish International Airport', 'AAC', 'HEAR', 31.1333, 33.75, 6297289, 'Africa/Cairo', 2, 0, 'Egypt', 'EG', 'AAC'),
(4, 'Les Salines', 'AAE', 'DABB', 36.8214, 7.81186, 2570559, 'Africa/Algiers', 1, 0, '', 'DZ', 'AAE'),
(5, 'Apalachicola Regional', 'AAF', 'KAAF', 29.7333, -84.9833, 4146153, 'America/New_York', -5, 0, 'United States', 'US', 'AAF'),
(6, 'Arapoti', 'AAG', 'SSYA', -24.1036, -49.79, 3471795, 'America/Sao_Paulo', -3, 0, 'Brazil', 'BR', 'AAG'),
(7, 'Aachen/Merzbruck', 'AAH', 'EDKA', 50.75, 6.13333, 3247449, 'Europe/Berlin', 1, 0, 'Germany', 'DE', 'AAH'),
(8, 'Arraias', 'AAI', 'SWRA', -12.9167, -46.9333, 7668483, 'America/Araguaina', -3, 0, 'Brazil', 'BR', 'AAI'),
(9, 'Aranuka', 'AAK', 'NGUK', 0.166667, 173.583, 7521791, 'Pacific/Tarawa', 12, 0, 'Kiribati', 'KI', 'AAK'),
(10, 'Aalborg', 'AAL', 'EKYT', 57.0866, 9.87224, 2624887, 'Europe/Copenhagen', 1, 0, 'Denmark', 'DK', 'AAL'),
(11, 'Mala Mala', 'AAM', 'FAMD', -24.8, 31.5333, 7668229, 'Africa/Johannesburg', 2, 0, 'South Africa', 'ZA', 'AAM'),
(12, 'Al Ain', 'AAN', 'OMAL', 24.2602, 55.6166, 6300095, 'Asia/Dubai', 4, 0, 'United Arab Emirates', 'AE', 'AAN'),
(13, 'Anapa', 'AAQ', 'URKA', 44.9, 37.3167, 6300989, 'Europe/Moscow', 3, 0, 'Russia', 'RU', 'AAQ'),
(14, 'Aarhus Airport', 'AAR', 'EKAH', 56.3082, 10.6264, 2611665, 'Europe/Copenhagen', 1, 0, 'Denmark', 'DK', 'AAR'),
(15, 'Altay', 'AAT', 'ZWAT', 47.7504, 88.0844, 7910421, 'Asia/Shanghai', 8, 0, 'China', 'CN', 'AAT'),
(16, 'Araxa', 'AAX', 'SBAX', -19.5681, -46.9292, 7668431, 'America/Sao_Paulo', -3, 0, 'Brazil', 'BR', 'AAX'),
(17, 'Al Ghaydah', 'AAY', 'OYGD', 16.196, 52.1733, 7668412, 'Asia/Aden', 3, 0, 'Yemen', 'YE', 'AAY'),
(18, 'Quetzaltenango', 'AAZ', 'MGQZ', 14.87, -91.5, 6299804, 'America/Guatemala', -6, 0, 'Guatemala', 'GT', 'AAZ'),
(19, 'Abakan', 'ABA', 'UNAA', 53.7167, 91.5, 6300982, 'Asia/Krasnoyarsk', 7, 0, 'Russia', 'RU', 'ABA'),
(20, 'Asaba International', 'ABB', 'DNAS', 6.20333, 6.65888, 7668214, 'Africa/Lagos', 1, 0, 'Nigeria', 'NG', 'ABB'),
(21, 'Los Llanos', 'ABC', 'LEAB', 38.9483, -1.86333, 6299323, 'Europe/Madrid', 1, 0, 'Spain', 'ES', 'ABC'),
(22, 'Abadan', 'ABD', 'OIAA', 30.3639, 48.2266, 6300034, 'Asia/Tehran', 3, 0, 'Iran', 'IR', 'ABD'),
(23, 'Lehigh Valley International', 'ABE', 'KABE', 40.6516, -75.4344, 5200013, 'America/New_York', -5, 0, 'United States', 'US', 'ABE'),
(24, 'Alpha', 'ABH', 'YAPH', -23.65, 146.633, 7668679, 'Australia/Brisbane', 10, 0, 'Australia', 'AU', 'ABH'),
(25, 'Municipal', 'ABI', 'KABI', 32.4094, -99.6797, 4669647, 'America/Chicago', -6, 0, 'United States', 'US', 'ABI'),
(26, 'Felix Houphouet Boigny', 'ABJ', 'DIAP', 5.25488, -3.93302, 6296433, 'Africa/Abidjan', 0, 0, '', 'CI', 'ABJ'),
(27, 'Kabri Dar', 'ABK', 'HADK', 6.73389, 44.2661, 6297274, 'Africa/Addis_Ababa', 3, 0, 'Ethiopia', 'ET', 'ABK'),
(28, 'Ambler', 'ABL', 'PAFM', 67.0875, -157.846, 5879298, 'America/Anchorage', -9, 0, 'United States', 'US', 'ABL'),
(29, 'Bamaga Injinoo', 'ABM', 'YBAM', -10.9426, 142.45, 7730800, 'Australia/Brisbane', 10, 0, 'Australia', 'AU', 'ABM'),
(30, 'Aboisso', 'ABO', 'DIAO', 5.43333, -3.21667, 8260695, 'Africa/Abidjan', 0, 0, '', 'CI', 'ABO'),
(31, 'Albuquerque International', 'ABQ', 'KABQ', 35.0496, -106.617, 5454724, 'America/Denver', -7, 505, 'United States', 'US', 'ABQ'),
(32, 'Municipal', 'ABR', 'KABR', 45.4525, -98.4261, 5225860, 'America/Chicago', -6, 0, 'United States', 'US', 'ABR'),
(33, 'Abu Simbel', 'ABS', 'HEBL', 22.3676, 31.6098, 6452622, 'Africa/Cairo', 2, 0, 'Egypt', 'EG', 'ABS'),
(34, 'Al-Aqiq', 'ABT', 'OEBA', 20.294, 41.64, 6300010, 'Asia/Riyadh', 3, 0, 'Saudi Arabia', 'SA', 'ABT'),
(35, 'Atambua', 'ABU', 'WATA', -9.13333, 124.883, 7730801, 'Asia/Makassar', 8, 0, 'Indonesia', 'ID', 'ABU'),
(36, 'Nnamdi Azikiwe International Airport', 'ABV', 'DNAA', 9.00461, 7.27045, 7649170, 'Africa/Lagos', 1, 0, 'Nigeria', 'NG', 'ABV'),
(37, 'Albury', 'ABX', 'YMAY', -36.0696, 146.955, 6301309, 'Australia/Sydney', 10, 0, 'Australia', 'AU', 'ABX'),
(38, 'Dougherty County', 'ABY', 'KABY', 31.5322, -84.1961, 4223821, 'America/New_York', -5, 0, 'United States', 'US', 'ABY'),
(39, 'Dyce', 'ABZ', 'EGPD', 57.2003, -2.20419, 6296624, 'Europe/London', 0, 0, 'United Kingdom', 'GB', 'ABZ'),
(40, 'General Juan N. Alvarez International', 'ACA', 'MMAA', 16.7624, -99.7546, 6299826, 'America/Mexico_City', -6, 0, 'Mexico', 'MX', 'ACA'),
(41, 'Antrim County', 'ACB', 'KACB', 44.9833, -85.2167, 4985583, 'America/Detroit', -5, 0, 'United States', 'US', 'ACB'),
(42, 'Kotoka', 'ACC', 'DGAA', 5.60737, -0.171769, 2306104, 'Africa/Accra', 0, 0, 'Ghana', 'GH', 'ACC'),
(43, 'Acandi', 'ACD', 'SKAD', 8.51667, -77.3, 7668454, 'America/Bogota', -5, 0, 'Colombia', 'CO', 'ACD'),
(44, 'Lanzarote', 'ACE', 'GCRR', 28.9507, -13.6091, 6297189, 'Atlantic/Canary', 0, 902, 'Spain', 'ES', 'ACE'),
(45, 'Altenrhein', 'ACH', 'LSZR', 47.4833, 9.56667, 6299723, 'Europe/Zurich', 1, 0, 'Switzerland', 'CH', 'ACH'),
(46, 'The Blaye', 'ACI', 'EGJA', 49.7093, -2.21537, 6296593, 'Europe/Guernsey', 0, 0, 'Guernsey', 'GG', 'ACI'),
(47, 'Anuradhapura', 'ACJ', 'VCCA', 8.35, 80.3833, 1251081, 'Asia/Colombo', 5, 0, 'Sri Lanka', 'LK', 'ACJ'),
(48, 'Nantucket Memorial', 'ACK', 'KACK', 41.2567, -70.0597, 4944927, 'America/New_York', -5, 0, 'United States', 'US', 'ACK'),
(49, 'Ciudad Acuña International Airport', 'ACN', 'MMCC', 29.3, -100.917, 7668344, 'America/Matamoros', -6, 0, 'Mexico', 'MX', 'ACN'),
(50, 'Sahand', 'ACP', 'OITM', 37.3472, 46.1451, 17839, 'Asia/Tehran', 3, 0, 'Iran', 'IR', 'ACP'),
(51, 'Araracuara', 'ACR', 'SKAC', -0.383333, -72.3, 7730802, 'America/Bogota', -5, 0, 'Colombia', 'CO', 'ACR'),
(52, 'Achinsk', 'ACS', 'UNKS', 56.2667, 90.5667, 7668523, 'Asia/Krasnoyarsk', 7, 0, 'Russia', 'RU', 'ACS'),
(53, 'Municipal', 'ACT', 'KACT', 31.6091, -97.2232, 4739545, 'America/Chicago', -6, 0, 'United States', 'US', 'ACT'),
(54, 'Arcata', 'ACV', 'KACV', 40.9709, -124.107, 5558955, 'America/Los_Angeles', -8, 0, 'United States', 'US', 'ACV'),
(55, 'Atlantic City International', 'ACY', 'KACY', 39.4507, -74.5722, 4500551, 'America/New_York', -5, 0, 'United States', 'US', 'AIY'),
(56, 'Zabol Airport', 'ACZ', 'OIZB', 31.0877, 61.5422, 6300083, 'Asia/Tehran', 3, 0, 'Iran', 'IR', 'ACZ'),
(57, 'Adana', 'ADA', 'LTAF', 36.985, 35.2974, 6299727, 'Europe/Istanbul', 3, 0, 'Turkey', 'TR', 'ADA'),
(58, 'Adnan Menderes Airport', 'ADB', 'LTBJ', 38.2944, 27.1476, 6299750, 'Europe/Istanbul', 3, 0, 'Turkey', 'TR', 'IZM'),
(59, 'Bole International', 'ADD', 'HAAB', 8.98376, 38.7959, 6297257, 'Africa/Addis_Ababa', 3, -425, 'Ethiopia', 'ET', 'ADD'),
(60, 'Aden International Airport', 'ADE', 'OYAA', 12.8261, 45.0375, 6300134, 'Asia/Aden', 3, 0, 'Yemen', 'YE', 'ADE'),
(61, 'Adiyaman', 'ADF', 'LTCP', 37.75, 38.2667, 6457345, 'Europe/Istanbul', 3, 0, 'Turkey', 'TR', 'ADF'),
(62, 'Lenawee County', 'ADG', 'KADG', 41.9, -84.0333, 4999082, 'America/Detroit', -5, 0, 'United States', 'US', 'ADG'),
(63, 'Aldan', 'ADH', 'UEEA', 58.6, 125.4, 7730803, 'Asia/Yakutsk', 9, 0, 'Russia', 'RU', 'ADH'),
(64, 'Arandis', 'ADI', 'FYAR', -22.4, 15, 7668263, 'Africa/Windhoek', 2, 0, 'Namibia', 'NA', 'ADI'),
(65, 'Marka International Airport', 'ADJ', 'OJAM', 31.9753, 35.9828, 250437, 'Asia/Amman', 2, 0, 'Jordan', 'JO', 'AMM'),
(66, 'Adak Island Ns', 'ADK', 'PADK', 51.8828, -176.645, 6300161, 'America/Adak', -10, 0, 'United States', 'US', 'ADK'),
(67, 'Adelaide International Airport', 'ADL', 'YPAD', -34.9382, 138.537, 6301322, 'Australia/Adelaide', 9, 61, 'Australia', 'AU', 'ADL'),
(68, 'Ardmore Municipal Airport', 'ADM', 'KADM', 34.3031, -97.0194, 4529475, 'America/Chicago', -6, 0, 'United States', 'US', 'ADM'),
(69, 'Andamooka', 'ADO', 'YAMK', -31.0167, 137.15, 7730805, 'Australia/Adelaide', 9, 0, 'Australia', 'AU', 'ADO'),
(70, 'Kodiak Airport', 'ADQ', 'PADQ', 57.7553, -152.513, 5866583, 'America/Anchorage', -9, 0, 'United States', 'US', 'ADQ'),
(71, 'Andrews', 'ADR', 'KPHH', 33.45, -79.5667, 4569376, 'America/New_York', -5, 0, 'United States', 'US', 'ADR'),
(72, 'Addison Airport', 'ADS', 'KADS', 32.7833, -97.3, 4669829, 'America/Chicago', -6, 0, 'United States', 'US', 'DFW'),
(73, 'Ada Municipal', 'ADT', 'KADH', 34.8, -96.6667, 4529103, 'America/Chicago', -6, 0, 'United States', 'US', 'ADT'),
(74, 'Ardabil', 'ADU', 'OITL', 38.3238, 48.4212, 6300077, 'Asia/Tehran', 3, 0, 'Iran', 'IR', 'ADU'),
(75, 'Leuchars', 'ADX', 'EGQL', 56.3667, -2.86667, 6296639, 'Europe/London', 0, 0, 'United Kingdom', 'GB', 'ADX'),
(76, 'Alldays', 'ADY', 'FAAL', -22.6667, 29.05, 7668227, 'Africa/Johannesburg', 2, 0, 'South Africa', 'ZA', 'ADY'),
(77, 'San Andres Island', 'ADZ', 'SKSP', 12.586, -81.7022, 6300759, 'America/Bogota', -5, 0, 'Colombia', 'CO', 'ADZ'),
(78, 'Abemama Atoll', 'AEA', 'NGTB', 0.483333, 173.85, 7521789, 'Pacific/Tarawa', 12, 0, 'Kiribati', 'KI', 'AEA'),
(79, 'Aek Godang', 'AEG', 'WIME', 1.39972, 99.4167, 8298724, 'Asia/Jakarta', 7, 0, 'Indonesia', 'ID', 'AEG'),
(80, 'Abéché', 'AEH', 'FTTC', 13.8514, 20.8508, 245786, 'Africa/Ndjamena', 1, 0, '', 'TD', 'AEH'),
(81, 'Albert Lea', 'AEL', 'KAEL', 43.65, -93.3667, 5016033, 'America/Chicago', -6, 0, 'United States', 'US', 'AEL'),
(82, 'Aioun El Atrouss', 'AEO', 'GQNA', 16.7092, -9.63556, 6297233, 'Africa/Nouakchott', 0, 0, 'Mauritania', 'MR', 'AEO'),
(83, 'Aeroparque Jorge Newbery', 'AEP', 'SABE', -34.5562, -58.4167, 6301847, 'America/Argentina/Buenos_Aires', -3, 0, 'Argentina', 'AR', 'BUE'),
(84, 'Sochi/Adler International Airport', 'AER', 'URSS', 43.4488, 39.9411, 6300995, 'Europe/Moscow', 3, 0, 'Russia', 'RU', 'AER'),
(85, 'Vigra', 'AES', 'ENAL', 62.5596, 6.1166, 6296719, 'Europe/Oslo', 1, 0, 'Norway', 'NO', 'AES'),
(86, 'Allakaket', 'AET', 'PFAL', 66.5617, -152.658, 5879223, 'America/Anchorage', -9, 0, 'United States', 'US', 'AET'),
(87, 'Abu Musa', 'AEU', 'OIBA', 25.8875, 55.0417, 6300041, 'Asia/Tehran', 3, 0, 'Iran', 'IR', 'AEU'),
(88, 'Alexandria International', 'AEX', 'KAEX', 31.3213, -92.5396, 8113669, 'America/Chicago', -6, 0, 'United States', 'US', 'AEX'),
(89, 'Akureyri', 'AEY', 'BIAR', 65.6546, -18.0751, 6295706, 'Atlantic/Reykjavik', 0, 0, 'Iceland', 'IS', 'AEY'),
(90, 'San Rafael', 'AFA', 'SAMR', -34.5892, -68.4006, 6300529, 'America/Argentina/Mendoza', -3, 0, 'Argentina', 'AR', 'AFA'),
(91, 'Port Alfred', 'AFD', 'FAPA', -33.5833, 26.8833, 964433, 'Africa/Johannesburg', 2, 0, 'South Africa', 'ZA', 'AFD'),
(92, 'USAF Academy Airstrip', 'AFF', 'KAFF', 38.8333, -104.7, 5442475, 'America/Denver', -7, 0, 'United States', 'US', 'COS'),
(93, 'Amalfi', 'AFI', 'SKAM', 6.91667, -75.0667, 7730806, 'America/Bogota', -5, 0, 'Colombia', 'CO', 'AFI'),
(94, 'Alta Floresta', 'AFL', 'SBAT', -9.87246, -56.1048, 6316343, 'America/Cuiaba', -4, 0, 'Brazil', 'BR', 'AFL'),
(95, 'Municipal', 'AFN', 'KAFN', 42.8333, -72.0667, 5088066, 'America/New_York', -5, 0, 'United States', 'US', 'AFN'),
(96, 'Municipal', 'AFO', 'KAFO', 42.7333, -110.933, 5816866, 'America/Denver', -7, 0, 'United States', 'US', 'AFO'),
(97, 'Zarafshan', 'AFS', 'UTSN', 41.6136, 64.2331, 7730807, 'Asia/Samarkand', 5, 0, 'Uzbekistan', 'UZ', 'AFS'),
(98, 'Afutara Aerodrome', 'AFT', 'AGAF', -9.2, 160.85, 8298931, 'Pacific/Guadalcanal', 11, 0, 'Solomon Islands', 'SB', 'AFT'),
(99, 'Fort Worth Alliance', 'AFW', 'KAFW', 32.9867, -97.3167, 4691932, 'America/Chicago', -6, 0, 'United States', 'US', 'DFW'),
(100, 'Afyon', 'AFY', 'LTAH', 38.7333, 30.6, 6299728, 'Europe/Istanbul', 3, 0, 'Turkey', 'TR', 'AFY');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `airline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `airport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

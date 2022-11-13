-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 01:54 PM
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
  `airline_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`airline_id`, `airline_name`, `iata_code`, `icao_code`, `airline_img`, `airline_description`) VALUES
(1, 'Cebgo', 'DG', 'SRQ', '', 'Cebgo, Inc., operating as Cebgo (stylized in all lowercase as cebgo), is the regional brand of Cebu Pacific. It is the successor company to SEAIR, Inc., which previously operated as South East Asian Airlines and Tigerair Philippines. It is now owned by JG Summit, the parent company of Cebu Pacific which operates the airline. The airline\'s main base has been transferred from Clark International Airport in Angeles City to Ninoy Aquino International Airport in Metro Manila. On April 30, 2017, Cebgo planned to move out from Manila and transfer its main base to Mactan–Cebu International Airport in Cebu City because NAIA has already maxed out its capacity. Currently, it operates an all-ATR fleet, with a total of 16 in service.'),
(2, 'Cebu Pacific', '5J', 'CEB', '', 'Cebu Pacific Air, Inc., operating as Cebu Pacific (PSE: CEB), is a Philippine low-cost airline based on the grounds of Mactan–Cebu International Airport (Terminal 2), Lapu-Lapu City, Metro Cebu, Philippines. Founded in 1988, it is Asia\'s oldest low-cost airline. It offers scheduled flights to both domestic and international destinations. Its main hubs are Cebu and Manila, with focus cities at Cagayan de Oro, Clark, Davao, Iloilo, Kalibo, and Zamboanga.\r\n\r\nThe airline is a subsidiary of JG Summit Holdings. Cebu Pacific is currently headed by Lance Gokongwei, presumptive heir of John Gokongwei, the chairman emeritus of JG Summit. As of January 2013, the company has 3,297 employees. 2,565 were from operations, 429 from the commercial departments, and 303 from the support departments. In October 2010, the airline completed an IPO of 30.4% of outstanding shares.'),
(3, 'PAL Express', '2P', 'GAP', '', 'PAL Express, legally known as Air Philippines Corporation and formerly branded as Air Philippines and Airphil Express, is a wholly owned subsidiary airline of Philippine Airlines which is under its ownership. It is PAL\'s regional brand, with services from its hubs in Manila, Clark, Cebu, and Davao.\r\n\r\nThe airline has been re-branded a number of times, first as Air Philippines, then Airphil Express, and is now known as PAL Express. After a series of financial losses, Air Philippines ceased operations until it was acquired by investors from Philippine Airlines. After the acquisition, the airline was re-launched as PAL Express, operating some routes and slot assignments of its sister company Philippine Airlines until its management decided to re-brand the carrier as a budget airline known as Airphil Express. However, in March 2013, the company\'s CEO announced that the name would be reverted to PAL Express. As a codeshare partner of Philippine Airlines, PAL Express operates as a full service carrier within a low-cost model.'),
(4, 'Pan Pacific Airlines', '8Y', 'AAV', '', 'Astro Air International, Inc., doing business as Pan Pacific Airlines, is a full-service airline based in the Philippines. It was established in 1973 under the name Astro Air International but was renamed as Spirit of Manila Airlines in 2011 and ceased commercial flights after three months of operations. In 2016, the airline relaunched under the current brand after it began operating to serve the South Korean market. The airline commenced operations on April 27, 2017, with its inaugural flight between Kalibo and Seoul. Its current main hubs are Mactan–Cebu International Airport and Kalibo International Airport with flights going to Seoul, Busan and Muan.'),
(5, 'Philippine Airlines', 'PR', 'PAL', '', 'Philippine Airlines (PAL), a trade name of PAL Holdings, Inc. (PSE: PAL) and also known historically as Philippine Air Lines until 1970, is the flag carrier of the Philippines. Headquartered at the PNB Financial Center in Pasay, the airline was founded in 1941 and is the first and oldest commercial airline in Asia operating under its original name.\r\n\r\nThe primary hub of Philippine Airlines is Ninoy Aquino International Airport in Manila. It also operates from three secondary hubs: Mactan–Cebu International Airport, Cebu; Francisco Bangoy International Airport, Davao; and Clark International Airport which covers portions of the cities of Angeles and Mabalacat within the Clark Freeport Zone in the province of Pampanga. Its subsidiary PAL Express operates only regional routes while PAL operates both domestic (Cebu, Davao, General Santos, Kalibo, Manila and Zamboanga) and international routes. The airline operates both narrow-body and wide-body fleets of Airbus aircraft and a widebody fleet of Boeing aircraft.'),
(6, 'Philippine AirAsia', 'Z2', 'APG', '', 'Philippines AirAsia, Inc. is a low-cost airline based at Ninoy Aquino International Airport in Metro Manila in the Philippines. The airline is the Philippine affiliate of AirAsia, a low-cost airline based in Malaysia. The airline started as a joint venture among three Filipino investors and AirAsia Investments Ltd. (later AirAsia Aviation Limited), a subsidiary of AirAsia Berhad.\r\n\r\nIt is a successor to Zest Airways, Inc. Zest Airways was rebranded as AirAsia Zest and operated as a separate brand from AirAsia until merged into Philippines AirAsia in 2015.'),
(7, 'Sunlight', 'ST', 'SEA', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `airport_id` int(11) NOT NULL,
  `airline_id` varchar(255) NOT NULL,
  `airport_name` varchar(255) NOT NULL,
  `iata_code` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `airport_img` longblob NOT NULL,
  `airport_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`airport_id`, `airline_id`, `airport_name`, `iata_code`, `city`, `airport_img`, `airport_description`) VALUES
(1, '0', 'Ninoy Aquino International Airport', 'MNL', 'Manila', '', 'Ninoy Aquino International Airport or NAIA (IATA: MNL, ICAO: RPLL), also known as Manila International Airport or simply Manila Airport, is one of the two international airports serving the Metro Manila Area and the main international gateway to the Philippines.\r\nIt is named after Senator Benigno \"Ninoy\" Aquino Jr., who was murdered at the airport in 1983. NAIA is located along the border between Pasay and Parañaque cities in Metro Manila, about 7 km (3.4 miles) south of the city and southwest of Makati Central Business District. MNL Airport is a hub for Cebu Pacific, Cebgo, Philippine Airlines, PAL Express and a focus city for Philippines AirAsia.'),
(2, '0', 'Mactan Cebu International Airport', 'CEB', 'Lapu-Lapu City', '', 'Mactan–Cebu International Airport (Cebuano: Tugpahanang Pangkalibutan sa Mactan–Sugbo; Filipino: Paliparang Pandaigdig ng Mactan–Cebu; IATA: CEB, ICAO: RPVM) is the second busiest international airport in the Philippines. It is located on a 797-hectare (1,970-acre) site in the city of Lapu-Lapu on Mactan, a part of Metro Cebu and serves the Central Visayas region. The airport is managed by the Mactan–Cebu International Airport Authority and serves as a hub for Cebu Pacific, Pan Pacific Airlines, and Royal Air Philippines.'),
(3, '0', 'Clark International Airport', 'CRK', 'Pampanga', '', 'Clark International Airport (Kapampangan: Pangyatung Sulapawan ning Clark; Filipino: Paliparang Pandaigdig ng Clark; IATA: CRK, ICAO: RPLC), known as Diosdado Macapagal International Airport from 2003 to 2012, is an international airport covering portions of the cities of Angeles and Mabalacat within the Clark Freeport Zone in the province of Pampanga, Philippines. It is located 43.2 nautical miles (80.0 km; 49.7 mi) northwest of Manila. It is accessible through the Subic–Clark–Tarlac Expressway (SCTEX).\r\n\r\nThe airport serves Central Luzon, Northern Luzon, and to an extent, Metro Manila. The name is derived from the former American Clark Air Base which was the largest overseas base of the United States Air Force until it was closed in 1991 and handed over to the Government of the Philippines.'),
(4, '0', 'Francisco Bangoy International Airport', 'DVO', 'Davao City', '', 'Francisco Bangoy International Airport (Cebuano: Tugpahanang Pangkalibutanon sa Francisco Bangoy; Filipino: Paliparang Pandaigdig ng Francisco Bangoy; IATA: DVO, ICAO: RPMD), also commonly known as Davao International Airport, is the main airport serving Davao City and the entire Davao Region in the Philippines. It is the busiest airport on the island of Mindanao and the third busiest in the Philippines after Ninoy Aquino International Airport in Metro Manila and Mactan–Cebu International Airport in Lapu-Lapu City.'),
(5, '0', 'Laguindingan Airport', 'CGY', 'Cagayan De Oro City', '', ''),
(6, '0', 'Bacolod-Silay Airport', 'BCD', 'Negros Occidental', '', 'Bacolod–Silay Airport, also referred to as Bacolod–Silay International Airport (Hiligaynon: Hulugpaan sang Bacolod–Silay; Filipino: Paliparan ng Bacolod–Silay; IATA: BCD, ICAO: RPVB), is the main airport serving the general area of Metro Bacolod, in the Western Visayas region of the Philippines.\r\n\r\nThe airport is located 15 kilometers (9.3 mi) northeast of Bacolod on a 181-hectare (450-acre) site in Barangay Bagtic, Silay, Negros Occidental. The facility inherited its IATA and ICAO airport codes from Bacolod City Domestic Airport, which it replaced in 2008. Capable of handling international air traffic, the airport is the busier of the two major airports serving Negros Island, the other being Dumaguete Airport in Sibulan, Negros Oriental.'),
(7, '0', 'Puerto Princesa Airport', 'PPS', 'Puerto Princesa City', '', 'Puerto Princesa International Airport (Filipino: Paliparang Pandaigdig ng Puerto Princesa; IATA: PPS, ICAO: RPVP) is an airport serving the general area of Puerto Princesa, located in the province of Palawan in the Philippines. It is classified as an international airport by the Civil Aviation Authority of the Philippines.\r\n\r\nThe airport is the main gateway to the Puerto Princesa Underground River, a UNESCO World Heritage Site and one of the New 7 Wonders of Nature.'),
(8, '0', 'Daniel Z. Romuladez Airport', 'TAC', 'Tacloban City', '', 'Daniel Z. Romualdez Airport (Waray: Luparan Daniel Z. Romualdez, Filipino: Paliparang Daniel Z. Romualdez; IATA: TAC, ICAO: RPVA), also known as Tacloban City Airport, is an airport serving the general area of Tacloban, a highly urbanized city in Leyte island in the Philippines. It is the main gateway from Manila and Cebu to Eastern Visayas. It is classified as a Class 1 principal (major domestic) airport by the Civil Aviation Authority of the Philippines, the agency responsible for the operations of all the airports in the Philippines excluding the major international airports. As of 2017, Daniel Z. Romualdez Airport is ranked as the eighth-busiest and the third-fastest growing airport by passenger volume out of the 45 commercial airports in the Philippines.'),
(9, '0', 'Iloilo International Airport', 'ILO', 'IloIlo', '', 'Iloilo International Airport (Hiligaynon: Pangkalibutan nga Hulugpaan sang Iloilo, Filipino: Paliparang Pandaigdig ng Iloilo; IATA: ILO, ICAO: RPVI), also known as Iloilo Airport, and as Cabatuan Airport, after the municipality of Cabatuan, Iloilo where it is located, is the airport serving the province of Iloilo in the Philippines, including its capital city, Iloilo City, the regional center of the Western Visayas region. It opened its doors to commercial traffic on June 14, 2007, after a decade of planning and construction, replacing Mandurriao Airport in Mandurriao, Iloilo City which had been in service for over seventy years. As a result, the new airport inherited its IATA and ICAO airport codes, as well as its position as the fourth-busiest airport in the Philippines, from its predecessor. It is currently the seventh-busiest airport in the Philippines as of 2021. It is the first airport in both Western Visayas and the island of Panay to be built to international standards, and it is also considered to be the primary gateway into the region. It is classified as an international airport by the Civil Aviation Authority of the Philippines.'),
(10, '0', 'Zamboanga Airport', 'ZAM', 'Zamboanga Del Sur', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
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

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `address`, `contact`, `email`, `user_type`, `user_img`, `account_id`, `password`, `confirm_password`) VALUES
(1, 'Clive', 'Zaide', 'Saludes', 'Brgy. San Buenaventura Luisiana, Laguna', 9602642636, 'saludescleave26@gmail.com', 'Student', '', '0119-4064', 'cleave26', 'cleave26'),
(2, 'Dreico Karlo', 'Sesdoyro', 'Librodo', '647 Mabini St. Poblacion II, Pagsanjan, Laguna', 9052823465, 'lkd11242000@gmail.com', 'Student', '', '0119-4639', '0119-4639', '0119-4639'),
(3, 'Nikko', 'Deona', 'Rosano', 'Villa Blanco Street, Cavinti, Laguna', 9310662711, 'nikko.rosano08@gmail.com', 'Student', '', '0119-5521', '0119-5521', '0119-5521');

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
  MODIFY `airline_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `airport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

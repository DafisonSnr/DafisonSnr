-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 15, 2022 at 08:25 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courierDataBase`
--

-- --------------------------------------------------------

--
-- Table structure for table `arrival`
--

CREATE TABLE `arrival` (
  `id` int(11) UNSIGNED NOT NULL,
  `userRef` varchar(500) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `body` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arrival`
--

INSERT INTO `arrival` (`id`, `userRef`, `heading`, `body`, `time`, `date`) VALUES
(1, 'REF44997', 'Departs China(Taiwan)', 'Shipment departs Taiwan International Airport,China', '09:30 PM', '20 Jan, 2022'),
(2, 'REF44997', 'Arrived US(J FK)', 'Shipment Arrived John F Kennedy Int Airport New York', '11:20 PM', '1 Feb,2022'),
(3, 'REF44997', 'ON HOLD', 'Shipment on hold requires attention', '12:40 PM', '2 Feb,2022'),
(4, 'REF44997', 'Departs Warriton', 'Shipment departs warriton Int Airport UK', '11:20 PM', '2 Feb,2022'),
(5, 'REF44997', 'Available for pick upJ FK)', 'Shipment is available for pick', '12:40 PM', '2 Feb,2022'),
(6, 'REF44997', 'ON HOLD', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '2 Feb,2022'),
(7, 'REF44997', 'Departs Warriton', 'Shipment departs warriton Int Airport UK', '12:40 PM', '2 Feb,2022'),
(8, 'REF44997', 'ON HOLD', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '2 Feb,2022'),
(13, 'REF19125', 'Departs Warriton', 'Shipment departs warriton Int Airport UK', '12:40 PM', '14 JAN,2020'),
(14, 'REF19125', 'Available for pick upJ FK)', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(15, 'REF19125', 'ON HOLD', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(16, 'REF19125', 'Available for pick upJ FK)', 'Shipment departs warriton Int Airport US', '12:40 PM', '20 Jan, 2022'),
(17, 'REF19125', 'Available for pick upJ FK)', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(18, 'REF19125', 'Available for pick upJ FK)', 'Shipment departs warriton Int Airport China', '11:20 PM', '20 Jan, 2022'),
(19, 'REF19125', 'ON HOLD', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(20, 'REF19125', 'Available for pick upJ FK)', 'Shipment departs warriton Int Airport China', '11:20 PM', '20 Jan, 2022'),
(21, 'REF19125', 'Available for pick upJ FK)', 'Shipment departs warriton Int Airport UK', '11:20 PM', '14 JAN,2020'),
(26, 'REF19125', 'Available for pick upJ FK)', 'Shipment departs warriton Int Airport China', '12:40 PM', '20 Jan, 2022'),
(27, 'REF19125', 'Departs Warriton', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(28, 'REF838584', 'Departs Warriton', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(29, 'REF838584', 'Available for pick upJ FK)', 'Shipment departs Taiwan International Airport,China', '11:20 PM', '14 JAN,2020'),
(30, 'REF838584', 'Available for pick upJ FK)', 'Shipment departs warriton Int Airport UK', '12:40 PM', '14 JAN,2020'),
(31, 'REF838584', 'Available for pick upJ FK)', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(32, 'REF838584', 'Departs Warriton TESTED', 'Shipment departs Taiwan International Airport,China', '11:20 PM', '14 JAN,2020'),
(33, 'REF838584', 'Available for pick upJ FK)', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(34, 'REF838584', 'ON HOLD', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(35, 'REF838584', 'wilson john ', 'Shipment departs warriton Int Airport UK', '12:40 PM', '14 JAN,2020'),
(36, 'REF586025', 'Departs Warriton', 'Shipment departs warriton Int Airport UK', '12:40 PM', '14 JAN,2020'),
(37, 'REF586025', 'ON HOLD', 'Shipment departs warriton Int Airport UK', '12:40 PM', '14 JAN,2020'),
(38, 'REF586025', 'wilson john ', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '20 Jan, 2022'),
(39, 'REF586025', 'ON HOLD', 'Shipment departs warriton Int Airport UK', '12:40 PM', '20 Jan, 2022'),
(40, 'REF586025', 'Available for pick upJ FK)', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(41, 'REF586025', 'Departs Warriton', 'Shipment departs Taiwan International Airport,China', '11:20 PM', '20 Jan, 2022'),
(42, 'REF928198', 'Departs Warriton', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(43, 'REF928198', 'Departs Warriton', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(44, 'REF928198', 'Available for pick upJ FK)', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(45, 'REF928198', 'ON HOLD', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(46, 'REF928198', 'Available for pick upJ FK)', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(47, 'REF928198', 'Departs Warriton', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(48, 'REF928198', 'ON HOLD', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(49, 'REF928198', 'Departs Warriton', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(50, 'REF928198', 'ON HOLD', 'Shipment departs warriton Int Airport UK', '12:40 PM', '14 JAN,2020'),
(51, 'REF928198', 'Available for pick upJ FK)', 'Shipment departs Taiwan International Airport,China', '12:40 PM', '14 JAN,2020'),
(52, 'REF579675', 'Departs Warriton', 'Shipment departs Lagos International Airport,Nigeria', '12:40 PM', '15 Sept,2022'),
(53, 'REF579675', 'Arrived US(J FK)', 'Shipment Arrived John F Kennedy Int Airport New York', '12:40 PM', '20 Jan, 2022');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `latitude` varchar(500) NOT NULL,
  `longitude` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `latitude`, `longitude`) VALUES
(1, '6.64387', '3.37792');

-- --------------------------------------------------------

--
-- Table structure for table `updateTrk`
--

CREATE TABLE `updateTrk` (
  `id` int(11) UNSIGNED NOT NULL,
  `heading` varchar(500) NOT NULL,
  `body` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `userRef` varchar(500) NOT NULL,
  `wayBilNo` varchar(500) NOT NULL,
  `senderPhoto` varchar(500) NOT NULL,
  `city_Depart` varchar(50) NOT NULL,
  `city_deliver` varchar(100) NOT NULL,
  `latitude` varchar(500) NOT NULL,
  `longitude` varchar(500) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `dimen` varchar(50) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `sender_phone` varchar(100) NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `receiver_email` varchar(100) NOT NULL,
  `receiver_phone` varchar(100) NOT NULL,
  `receiver_address` varchar(500) NOT NULL,
  `del_Status` varchar(500) NOT NULL,
  `time` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `week` varchar(500) NOT NULL,
  `deliver_date` varchar(500) NOT NULL,
  `ship_Ref` varchar(500) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userRef`, `wayBilNo`, `senderPhoto`, `city_Depart`, `city_deliver`, `latitude`, `longitude`, `weight`, `dimen`, `sender_name`, `sender_email`, `sender_phone`, `receiver_name`, `receiver_email`, `receiver_phone`, `receiver_address`, `del_Status`, `time`, `date`, `week`, `deliver_date`, `ship_Ref`, `reg_date`) VALUES
(4, 'REF586025', 'STF9570569', 'uploads/skills.jpg', 'London', 'Los Angeles', '', '', '100kg', '100cm', 'Wis Paul', 'newman21@gmail.com', '16313439599', 'Receiver man', 'sender@gmail.com', '16313439599', '8208 HOOPER AVE', 'In Transit', '07:50 PM', '15 Jan, 2020', 'Monday', '5/10/2022 at 11:20 pm', 'SRN754837514273STS', '2022-09-14 15:02:32'),
(5, 'REF928198', 'STF3031998', 'uploads/SeniorInterestChecking.jpg', 'London', 'Los Angeles', '', '', '57kg', '100cm', 'white man', 'white@gmail.com', '1631343000', 'Black Man', 'black@gmail.com', '8990000', 'Lagos lekki vitoria Island', 'In Transit', '07:50 PM', '20 Dec,2022', 'Sunday', '5/10/2022 at 11:20 pm', 'SRN349232545279STS', '2022-09-14 15:02:32'),
(7, 'REF579675', 'STF1199814', 'uploads/accounting (1).png', 'Lagos city Nig', 'Victoria Island Lagos City Nigeria', '', '', '500kg', '100cm', 'Peter Obina', 'Obina@gmail.com', '45668011', 'Buhari Muhamed', 'bubu@gmail.com', '56784844', 'Wase street Abuja, Nigeria', 'Available for Pickup', '07:50 PM', '15 Mar, 2022', 'Wednesday', '20/03/2022 at 12:20 pm', 'SRN362396456430STS', '2022-09-15 19:24:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrival`
--
ALTER TABLE `arrival`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
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
-- AUTO_INCREMENT for table `arrival`
--
ALTER TABLE `arrival`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

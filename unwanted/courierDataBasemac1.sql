-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 09, 2022 at 08:37 PM
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
(3, 'REF44997', 'ON HOLD', 'Shipment on hold requires attention', '12:40 PM', '2 Feb,2022');

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
  `weight` varchar(50) NOT NULL,
  `dimen` varchar(50) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `sender_phone` varchar(100) NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `receiver_email` varchar(100) NOT NULL,
  `receiver_phone` varchar(100) NOT NULL,
  `receiver_address` varchar(500) NOT NULL,
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

INSERT INTO `users` (`id`, `userRef`, `wayBilNo`, `senderPhoto`, `city_Depart`, `city_deliver`, `weight`, `dimen`, `sender_name`, `sender_email`, `sender_phone`, `receiver_name`, `receiver_email`, `receiver_phone`, `receiver_address`, `time`, `date`, `week`, `deliver_date`, `ship_Ref`, `reg_date`) VALUES
(1, 'REF19125', 'STF3682855', 'uploads/team.jpg', 'New York', 'Los Angeles', '57kg', '100cm', 'John john', 'collins@gmail.com', '16313439591', 'Lydia Peters', 'sender@gmail.com', '16313439599', '8208 HOOPER AVE', '07:50 PM', '15 Jan, 2020', '', '', 'GLB055855983286-GLB', '2022-09-09 17:12:07'),
(2, 'REF44997', 'STF755295', 'uploads/cash-cent.jpg', 'China Internation Airport', 'John F Kennedy Int Airport New York', '100kg', '200cm', 'Prince Rukevwe', 'princeho@gmail.com', '0906789000', 'Amaka Julius', 'amakajul@gmail.com', '08141678800', 'Victoria Island, Lagos City Nigeria', '07:50 PM', '15 Jan, 2022', 'Monday', '5/10/2022 at 11:20 pm', 'SRN360956846263STS', '2022-09-09 18:08:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrival`
--
ALTER TABLE `arrival`
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

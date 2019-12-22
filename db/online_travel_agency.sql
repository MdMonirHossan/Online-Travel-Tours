-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2019 at 12:55 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `online_travel_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `airplane`
--

CREATE TABLE `airplane` (
  `id` varchar(20) NOT NULL,
  `flight_type` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airplane`
--

INSERT INTO `airplane` (`id`, `flight_type`, `company`) VALUES
('1170', 'B738', 'Boeing'),
('1201', 'A320', 'Airbus');

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(60) NOT NULL,
  `country` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`id`, `code`, `name`, `city`, `state`, `country`) VALUES
(1, 'DAC', 'Dhaka Int airport', 'Dhaka', 'Dhaka', 'Bangladesh'),
(2, 'CTG', 'Chittagong Int airport', 'Chittagong', 'Chittagong', 'Bangladesh'),
(3, 'COX', 'Cox\'s Int airport', 'Chittagong', 'Chittagong', 'Bangladesh'),
(4, 'KHU', 'Khulna airport', 'Khulna', 'Khulna', 'Bangladesh'),
(5, 'DAL', 'Dallas Love Field', 'Dallas', 'Texas', 'USA'),
(6, 'DFW', 'Dallas Fort Worth Airport', 'Dallas', 'Texas', 'USA'),
(7, 'LAX', 'Los Angeles International Airport', 'Los Angeles', 'California', 'USA'),
(8, 'SEA', 'Seattle-Tacoma International Airport', 'Seattle', 'Washington', 'USA'),
(9, 'SFO', 'San Francisco International', 'San Fransciso', 'California', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `air_class`
--

CREATE TABLE `air_class` (
  `id` int(11) NOT NULL,
  `flight_num` varchar(15) NOT NULL,
  `flight_name` varchar(25) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `air_class`
--

INSERT INTO `air_class` (`id`, `flight_num`, `flight_name`, `capacity`, `price`) VALUES
(3, 'AA100', 'Economy', 2, 2499),
(4, 'AA100', 'Business', 20, 2499);

-- --------------------------------------------------------

--
-- Table structure for table `bookng_request`
--

CREATE TABLE `bookng_request` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `cu_address` varchar(150) NOT NULL,
  `arrival_date` varchar(20) NOT NULL,
  `depart_date` varchar(20) NOT NULL,
  `num_of_person` varchar(10) NOT NULL,
  `rooms` varchar(10) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `paid_status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookng_request`
--

INSERT INTO `bookng_request` (`id`, `fullname`, `email`, `phone`, `cu_address`, `arrival_date`, `depart_date`, `num_of_person`, `rooms`, `amount`, `paid_status`) VALUES
(1, 'MD Monir', 'mdraju01820@gmail.com', 1782372054, 'Bashundhara, Block c, Road 07 , House 123', '2019-11-21', '2019-11-14', '2', 'delux', '0', 0),
(4, 'MD Monir', 'mdraju01820@gmail.com', 1782372054, 'Bashundhara, Block c, Road 07 , House 123', '2019-11-22', '2019-11-30', '4', 'presidenti', '0', 0),
(5, 'MD Monir', 'mdraju01820@gmail.com', 1782372054, 'Bashundhara, Block c, Road 07 , House 123', '2019-11-28', '2019-11-21', '2', 'double', '0', 0),
(6, 'MD Monir', 'mdraju01820@gmail.com', 1782372054, 'Bashundhara, Block c, Road 07 , House 123', '2019-11-23', '2019-11-30', '3', 'presidenti', '0', 0),
(7, 'MD Monir', 'mdraju01820@gmail.com', 1782372054, 'Bashundhara, Block c, Road 07 , House 123', '2019-11-23', '2019-11-30', '3', 'presidenti', '0', 0),
(8, 'MD Monir', 'mdraju01820@gmail.com', 1782372054, 'Bashundhara, Block c, Road 07 , House 123', '2019-11-22', '2019-11-21', '2', 'delux', '0', 0),
(9, 'MD Moni', 'admin@b.com', 1838344119, 'Road 3', '2019-12-25', '2019-12-20', '3', 'double', '3', 0),
(10, 'MD Moni', 'admin@b.com', 1838344119, 'Road 3', '2019-12-25', '2019-12-20', '3', 'double', '3', 0),
(11, 'MD Moni', 'admin@b.com', 1838344119, 'Road 3', '2019-12-25', '2019-12-20', '3', 'double', '3', 0),
(12, 'MD Moni', 'admin@b.com', 1838344119, 'Bashundhara, Block c, Road 07 , House 123', '2019-12-20', '2019-12-20', '5', 'presidenti', '4', 0),
(13, 'MD Moni', 'admin@b.com', 1838344119, 'Bashundhara, Block c, Road 07 , House 123', '2019-12-20', '2019-12-20', '5', 'presidenti', '4,500.00', 0),
(14, 'MD Monir', 'admin@gmail.com', 1782372054, 'Bashundhara, Block c, Road 07 , House 123', '2019-12-14', '2019-12-20', '3', 'delux', '$3,600.00', 0),
(15, 'MD Monir', 'taif@gmail.com', 1676537681, 'dhaka', '2010-10-23', '2011-12-23', '1', 'single', '$3,600.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `email`, `comment`, `time`) VALUES
(1, 'mdraju01820@gmail.com', 'Hello this is raju. Your web is very good..', '2019-11-21 21:06:50'),
(2, 'mdraju01820@gmail.com', 'Hello sakib how are you', '2019-11-26 15:01:46'),
(3, 'taifdroid@gmail.com', 'You can do this', '2019-12-10 13:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int(11) NOT NULL,
  `flight_num` varchar(20) NOT NULL,
  `air_id` varchar(15) NOT NULL,
  `departure` varchar(20) NOT NULL,
  `depart_time` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `arrival_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `flight_num`, `air_id`, `departure`, `depart_time`, `arrival`, `arrival_time`) VALUES
(12, 'AA102', '1101', 'DAK', '05:02', 'CTG', '02:01'),
(15, 'AA111', '1101', 'DAK', '2019-11-23T19:10', 'RAJ', '2019-11-23T20:00'),
(20, 'AA101', '1201', 'COX', '2019-11-23T14:01', 'DAC', '2019-11-23T15:01'),
(22, 'AA100', '1201', 'CTG', '2019-11-23T02:00', 'DAC', '2019-11-22T13:00');

-- --------------------------------------------------------

--
-- Table structure for table `flight_booked`
--

CREATE TABLE `flight_booked` (
  `id` int(11) NOT NULL,
  `flight_time` time NOT NULL,
  `flight_date` date NOT NULL,
  `flight_num` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `class` varchar(20) NOT NULL,
  `paid_status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flight_booked`
--

INSERT INTO `flight_booked` (`id`, `flight_time`, `flight_date`, `flight_num`, `email`, `class`, `paid_status`) VALUES
(21, '06:53:55', '2019-12-24', 'AA100', 'admin@gmail.com', 'Business', 0),
(26, '07:59:40', '2019-12-17', 'AA100', 'admin@gmail.com', 'Business', 0),
(29, '02:48:20', '2020-01-02', 'AA100', 'mdraju01820@gmail.com', 'Economy', 0),
(31, '02:51:35', '2019-12-05', 'AA100', 'mdraju01820@gmail.com', 'Business', 0);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `detail` varchar(800) NOT NULL,
  `price` varchar(40) NOT NULL,
  `image_direct` varchar(120) NOT NULL DEFAULT 'default.jpg',
  `up_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `detail`, `price`, `image_direct`, `up_time`) VALUES
(8, 'World Heritage Coxs Bazar', 'A most modern concept , a combination of design style , space & peaceful farway outlook of garden & swimmingpool. The room is 764 sqft in size featuring 32\'\' LCD TV with numerious channel. A large writing desk with eronomic chair and free wifi access.', '3500/- per day', '../uploads/roombackground.jpg', '2019-11-20 00:00:00'),
(9, 'World Heritage Coxs Bazar', 'A most modern concept , a combination of design style , space & peaceful farway outlook of garden & swimmingpool. The room is 764 sqft in size featuring 32\'\' LCD TV with numerious channel. A large writing desk with eronomic chair and free wifi access.', '4500/- per day', '../uploads/searchback.jpg', '2019-11-20 00:00:00'),
(10, 'World Heritage Coxs Bazar', 'A most modern concept , a combination of design style , space & peaceful farway outlook of garden & swimmingpool. The room is 764 sqft in size featuring 32\'\' LCD TV with numerious channel. A large writing desk with eronomic chair and free wifi access.', '45600/- per day', '../uploads/slide1.jpg', '2019-11-20 00:00:00'),
(11, 'World Heritage Coxs Bazar', 'A most modern concept , a combination of design style , space & peaceful farway outlook of garden & swimmingpool. The room is 764 sqft in size featuring 32\'\' LCD TV with numerious channel. A large writing desk with eronomic chair and free wifi access.', '45600/- per day', '../uploads/slide3.jpg', '2019-11-20 00:00:00'),
(12, 'World Heritage Coxs Bazar', 'A most modern concept , a combination of design style , space & peaceful farway outlook of garden & swimmingpool. The room is 764 sqft in size featuring 32\'\' LCD TV with numerious channel. A large writing desk with eronomic chair and free wifi access.', '3000/- BDT', 'RR2.jpg', '2019-11-20 00:00:00'),
(13, 'World Heritage Coxs Bazar', 'A most modern concept , a combination of design style , space & peaceful farway outlook of garden & swimmingpool. The room is 764 sqft in size featuring 32\'\' LCD TV with numerious channel. A large writing desk with eronomic chair and free wifi access.', '3000/- BDT', 'contactback.jpg', '2019-11-20 00:00:00'),
(14, 'World Heritage Coxs Bazar', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '3600/-', 'Resort.jpg', '2019-11-21 21:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(200) NOT NULL,
  `expire_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `email`, `token`, `expire_token`) VALUES
(14, 'mdraju01820@gmail.com', '75f6beadb4841c1f8c528a78efb46cc1f428236e08f15922ecaef0a31e6a8e74f38bccac0e2a8a5473e188d6eba8a2929f5b', '1576089786');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(10) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `picture` varchar(40) NOT NULL DEFAULT 'default.jpg',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `fullName`, `email`, `pass`, `picture`, `is_admin`) VALUES
(8, 'Monir', 'MD Monir', 'admin@gmail.com', '$2y$10$lA2lgkBeP0Il3g27nhO5reJZgnd8aQL4onDtbmrTmslU/d1aa8DkS', 'image.jpeg', 1),
(9, 'Raju12', 'Md Raju', 'mdraju01820@gmail.com', '$2y$10$q6tPYIqFFGnh3fwmkDsPPeLcmXzWNNh1aHBFnAgzmgic2NAHVEnqa', 'image.jpeg', 0),
(10, 'sakib2233', 'sakib', 'sazid.alam@northsouth.edu', '$2y$10$8qe6g1LV1MZXB..hRTyEMe7hASIjGvaWCMX5JeTWF.BmKQaWk1ohO', 'default.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airplane`
--
ALTER TABLE `airplane`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `air_class`
--
ALTER TABLE `air_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookng_request`
--
ALTER TABLE `bookng_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_booked`
--
ALTER TABLE `flight_booked`
  ADD PRIMARY KEY (`id`,`email`,`flight_num`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
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
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `air_class`
--
ALTER TABLE `air_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookng_request`
--
ALTER TABLE `bookng_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `flight_booked`
--
ALTER TABLE `flight_booked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

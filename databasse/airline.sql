-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 11:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `ag_id` int(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `mobileNumber` varchar(15) NOT NULL,
  `address` varchar(60) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`ag_id`, `name`, `Email`, `mobileNumber`, `address`, `Country`, `password`) VALUES
(1, 'karim', 'karim@gmail.com', '12345665432', 'tongi, dhaka', 'japam', '2222'),
(2, 'akash', ' mzzk4568@gmail.com ', '12312312312', 'gulshan, dhaka', 'japan', '9999');

-- --------------------------------------------------------

--
-- Table structure for table `flight_schedule`
--

CREATE TABLE `flight_schedule` (
  `sch_id` int(11) NOT NULL,
  `w_id` int(11) NOT NULL,
  `departureDate` date NOT NULL,
  `departureTime` time NOT NULL,
  `arrivalTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_schedule`
--

INSERT INTO `flight_schedule` (`sch_id`, `w_id`, `departureDate`, `departureTime`, `arrivalTime`) VALUES
(1, 1, '2019-04-25', '16:14:00', '14:00:00'),
(2, 2, '2019-04-27', '19:00:00', '16:00:00'),
(3, 3, '2019-04-29', '11:00:00', '08:00:00'),
(4, 4, '2019-04-27', '21:00:00', '17:00:00'),
(5, 1, '2019-04-25', '13:00:00', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `p_id` int(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `passport_number` varchar(40) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `mobileNumber` varchar(15) NOT NULL,
  `address` varchar(60) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`p_id`, `name`, `passport_number`, `Email`, `mobileNumber`, `address`, `Country`, `password`) VALUES
(1, 'minhaj', ' 675435778 ', ' minhaj0231@gmail.com ', '00112233445', 'bashundhara , dhaka,', 'BD', '3333'),
(2, 'rahim', '0122664455667', 'rahim@gmail.com', '12344321142', 'mirpur, dhaka', 'China', '7777'),
(3, 'ashik', '12212112', 'ashik@gmail.com', '12344321123', 'khilkhet, dhaka ', 'bangladesh', '7777'),
(4, 'john', '098890098', 'john@gmail.com', '78907890789', 'banani, dhaka', 'bangladesh', '8888'),
(5, 'jack ', '0987654321', 'jack@yahoo.com', '1234567890', 'banani, dhaka', 'bangladesh', '2222'),
(6, 'sami ', '12212112', 'sami@gmail.com', '1212121212', 'khilkhet, dhaka ', 'bangladesh', '1212'),
(7, 'robi', '3232323232', 'robi@gmail.com', '3232323232', 'tongi, dhaka', 'bangladesh', '4343'),
(8, 'sani', '654456654567', 'sani@gmail.com', '01293847564', 'bashundhara , dhaka,', 'bangladesh', '777');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `tk_id` int(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `class` varchar(40) NOT NULL,
  `sch_id` int(255) NOT NULL,
  `p_id` int(255) DEFAULT NULL,
  `seatNo` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `OnBoard` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`tk_id`, `price`, `class`, `sch_id`, `p_id`, `seatNo`, `status`, `OnBoard`) VALUES
(1, '8000', 'bcs', 1, 2, 1, 1, 0),
(2, '8000', 'bcs', 1, 3, 2, 1, 1),
(3, '6000', 'ecs', 1, 1, 3, 1, 0),
(4, '6000', 'ecs', 1, 5, 4, 1, 1),
(5, '12000', 'fcs', 1, NULL, 5, 0, 0),
(6, '12000', 'fcs', 1, NULL, 6, 0, 0),
(7, '6000', 'ecs', 1, 4, 7, 1, 0),
(8, '120000', 'bcs', 2, 1, 1, 1, 0),
(9, '120000', 'bcs', 2, NULL, 2, 0, 0),
(10, '80000', 'ecs', 2, 8, 3, 1, 0),
(11, '80000', 'ecs', 2, NULL, 4, 0, 0),
(12, '80000', 'ecs', 2, NULL, 5, 0, 0),
(13, '8000', 'bcs', 5, 6, 1, 1, 1),
(14, '8000', 'bcs', 5, 7, 2, 1, 1),
(15, '8000', 'bcs', 4, NULL, 3, 0, 0),
(16, '80000', 'bcs', 1, NULL, 8, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `way`
--

CREATE TABLE `way` (
  `w_id` int(255) NOT NULL,
  `source` varchar(40) NOT NULL,
  `destination` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `way`
--

INSERT INTO `way` (`w_id`, `source`, `destination`) VALUES
(1, 'dhaka', 'kolkalta'),
(2, 'dhaka ', 'newyork'),
(3, 'dubai ', 'dhaka '),
(4, 'london', ' maxico');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`ag_id`) USING BTREE;

--
-- Indexes for table `flight_schedule`
--
ALTER TABLE `flight_schedule`
  ADD PRIMARY KEY (`sch_id`),
  ADD KEY `w_id` (`w_id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`p_id`) USING BTREE;

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`tk_id`),
  ADD KEY `sch_id` (`sch_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `way`
--
ALTER TABLE `way`
  ADD PRIMARY KEY (`w_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight_schedule`
--
ALTER TABLE `flight_schedule`
  ADD CONSTRAINT `flight_schedule_ibfk_1` FOREIGN KEY (`w_id`) REFERENCES `way` (`w_id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `passenger` (`p_id`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`sch_id`) REFERENCES `flight_schedule` (`sch_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

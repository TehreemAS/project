-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 03:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(10) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'faizann518@gmail.com', 'faizanaa');

-- --------------------------------------------------------

--
-- Table structure for table `agent_login`
--

CREATE TABLE `agent_login` (
  `agent_id` int(10) NOT NULL,
  `agent_name` varchar(100) NOT NULL,
  `agent_email` varchar(100) NOT NULL,
  `agent_password` varchar(100) NOT NULL,
  `agent_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent_login`
--

INSERT INTO `agent_login` (`agent_id`, `agent_name`, `agent_email`, `agent_password`, `agent_phone`) VALUES
(2, 'Faizan Nawaz', 'faizann518@gmail.com', 'pakistantruefan82', '03114326115'),
(3, 'Faizan Ahmed', 'faizann518@gmail.com', 'faizanaa', '03214826115'),
(4, 'Faizan Ahmed', 'faizann518@gmail.com', 'faizanaa', '03214826115'),
(6, 'Faizan Ahmed', 'faizann518@gmail.com', 'faizanaa', '03214826115'),
(7, 'Faizan Ahmed', 'faizann518@gmail.com', 'faizanaa', '03214826115'),
(8, 'Faizan Ahmed', 'faizann518@gmail.com', 'faizanaa', '03214826115'),
(10, 'Faizan Ahmed', 'faizann518@gmail.com', 'faizanaa', '03214826115'),
(11, 'Ali', 'faizann518@gmail.com', 'faizanan', '03214826115'),
(13, 'Waqas Ali', 'sunnyrathore12@gmail.com', 'sunny', '03321234567'),
(14, 'saeeed', 'faizann518@gmail.com', 'faizanaa', '03214826115'),
(15, 'Faizan Ahmed', 'faizan@gmail.com', 'faizanaa', '03214826115');

-- --------------------------------------------------------

--
-- Table structure for table `company_login`
--

CREATE TABLE `company_login` (
  `company_id` int(10) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_password` varchar(100) NOT NULL,
  `c_img` varchar(100) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_login`
--

INSERT INTO `company_login` (`company_id`, `company_name`, `company_email`, `company_password`, `c_img`, `phone_number`, `city`, `description`) VALUES
(9, 'Star Marketing Private', 'Faizann518@gmail.com', 'faizanaa', 'property2.jpg', '0321482611', 'Islamabad', 'We provide good services across the Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(10) NOT NULL,
  `property_title` varchar(100) NOT NULL,
  `property_email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `rooms` int(10) NOT NULL,
  `bathroom` int(10) NOT NULL,
  `area` int(10) NOT NULL,
  `property_category` varchar(100) NOT NULL,
  `property_person` varchar(100) NOT NULL,
  `min_price` varchar(100) NOT NULL,
  `max_price` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `img4` varchar(100) NOT NULL,
  `property_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_title`, `property_email`, `city`, `address`, `date`, `rooms`, `bathroom`, `area`, `property_category`, `property_person`, `min_price`, `max_price`, `img1`, `img2`, `img3`, `img4`, `property_description`) VALUES
(22, 'DHA Phase 5', 'faizann518@gmail.com', 'Islamabad', 'House no 5 St #3A Daroghawala Lahore', '2017-12-21', 2, 2, 300, 'Commercial', 'Habib Construction Company', '350K', '750K', '3 (2).jpg', '2.jpg', 'form.jpg', 'property2.jpg', 'A very Good Attractive Site in the middle of the GT Road.'),
(23, 'Askari 10', '1234@gmail.com', 'Karachi', 'House no 5 St #3A Daroghawala Lahore', '2017-12-22', 2, 4, 400, 'Rent', 'Star Marketing Private', '250K', '550K', 'property1.jpg', 'property2.jpg', 'property3.jpg', 'property4.jpg', 'A very good site for living.'),
(30, 'DHA Phase 5', 'Faizann518@gmail.com', 'Islamabad', '', '2017-12-23', 3, 3, 100, 'Rent', 'Star Marketing Private', '200K', '250K', 'f20.JPG', 'f20.JPG', 'f12.jpg', 'f20.JPG', 'cascasc'),
(31, 'DHA Phase 5', 'Faizann518@gmail.com', 'Karachi', 'House no 5 St #3A Daroghawala Lahore', '2017-12-24', 4, 3, 300, 'Rent', 'Habib Construction Company', '350K', '900K', 'f7.jpg', 'f20.JPG', 'f16.jpg', 'f18.jpg', 'a very good site for ;living');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agent_login`
--
ALTER TABLE `agent_login`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `company_login`
--
ALTER TABLE `company_login`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `agent_login`
--
ALTER TABLE `agent_login`
  MODIFY `agent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `company_login`
--
ALTER TABLE `company_login`
  MODIFY `company_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

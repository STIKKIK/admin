-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 01:06 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Drinks'),
(2, 'Foods');

-- --------------------------------------------------------

--
-- Table structure for table `channel_login`
--

CREATE TABLE `channel_login` (
  `channel_id` int(11) NOT NULL,
  `channel` varchar(100) NOT NULL,
  `datetime_create` datetime NOT NULL,
  `is_actived` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `channel_login`
--

INSERT INTO `channel_login` (`channel_id`, `channel`, `datetime_create`, `is_actived`) VALUES
(1, 'Email', '2018-08-20 00:00:00', 1),
(2, 'Facebook', '2018-08-20 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_code` varchar(10) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `product_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_code`, `product_name`, `product_price`, `product_category_id`) VALUES
('1', 'water', 10, 2),
('2', 'lay', 11, 2),
('3', 'sfs', 11, 1),
('4', 'lay', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `channel_id` int(11) DEFAULT NULL,
  `datetime_create` datetime DEFAULT NULL,
  `is_actived` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_name`, `user_email`, `user_password`, `channel_id`, `datetime_create`, `is_actived`) VALUES
(1, 'stik', 't@t', 'stik123', 1, '2018-08-01 00:00:00', 1),
(2, 'test', 'test@test', '123', 1, '2018-08-01 00:00:00', 1),
(3, 't1', 't1@t1', '123', 1, '2018-08-08 00:00:00', 1),
(4, 't2', 't2@t2', '123', 1, '2018-08-13 00:00:00', 1),
(8, 't3', 't@t', '123', 1, '2018-08-14 00:00:00', 1),
(9, 'tik', 'tik@t', '123', 1, '2018-08-19 12:14:48', 1),
(10, 'ssss', 'ttt@tt', '123', 1, '2018-08-19 17:17:22', 1),
(12, 'Stik Thanawat', 'tik_thanawat@hotmail.com', NULL, 2, '2018-08-21 11:33:56', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `channel_login`
--
ALTER TABLE `channel_login`
  ADD PRIMARY KEY (`channel_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_code`),
  ADD KEY `product_category_id` (`product_category_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `channel_id` (`channel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `channel_login`
--
ALTER TABLE `channel_login`
  MODIFY `channel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_category_id`) REFERENCES `categories` (`category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_login`
--
ALTER TABLE `user_login`
  ADD CONSTRAINT `user_login_ibfk_1` FOREIGN KEY (`channel_id`) REFERENCES `channel_login` (`channel_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

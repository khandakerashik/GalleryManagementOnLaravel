-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 04:24 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagehome`
--

CREATE TABLE `imagehome` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `image_type` varchar(100) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imagestore`
--

CREATE TABLE `imagestore` (
  `id` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `image_type` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imagestore`
--

INSERT INTO `imagestore` (`id`, `username`, `image`, `image_type`, `description`) VALUES
(33, 'test', 'shoppy.jpg', 'people', 'hh'),
(38, 'test', 'bmw-i8-m-rendering.jpg', 'cars', 'bmw'),
(39, 'test', 'land-rover-range-rover.jpg', 'cars', 'Land Rover Range Rove'),
(40, 'test', 'hqdefault.jpg', 'travel', 'jj');

-- --------------------------------------------------------

--
-- Table structure for table `layout`
--

CREATE TABLE `layout` (
  `id` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `layout` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layout`
--

INSERT INTO `layout` (`id`, `username`, `layout`) VALUES
(1, 'polin', 'standard'),
(3, 'ashik1', 'img'),
(4, 'ashik', 'standard'),
(5, 'test', 'standard');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(1, 'farhan', '123', 'admin'),
(7, 'customer', 'pass', 'customer'),
(9, 'ashik', 'pass\r\n', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagehome`
--
ALTER TABLE `imagehome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagestore`
--
ALTER TABLE `imagestore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layout`
--
ALTER TABLE `layout`
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
-- AUTO_INCREMENT for table `imagehome`
--
ALTER TABLE `imagehome`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imagestore`
--
ALTER TABLE `imagestore`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `layout`
--
ALTER TABLE `layout`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

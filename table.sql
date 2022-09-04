-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 04, 2022 at 06:55 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `junior`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `sku` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `switch` varchar(40) NOT NULL COMMENT 'size',
  `size` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`sku`, `name`, `price`, `switch`, `size`, `height`, `width`, `length`, `weight`) VALUES
('asdfg', 'War and Peach', 20, 'Weight', 0, 0, 0, 0, 2),
('asdfg2', 'War and Peach 2', 21, 'Weight', 0, 0, 0, 0, 43),
('qwert', 'Acme DISC', 100, 'Size', 34, 0, 0, 0, 0),
('qwerty2', 'Acme DISC 2', 600, 'Size', 700, 0, 0, 0, 0),
('zxcvbn123', 'Chair', 33224, 'Dimention', 0, 24, 45, 15, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`sku`),
  ADD UNIQUE KEY `sku` (`sku`);

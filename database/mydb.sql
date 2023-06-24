-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 07:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `admin_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `admin_name`) VALUES
(1, 'admin', 'admin', ' Onwe Onyedikachi Smart');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(28) NOT NULL,
  `full_name` varchar(300) NOT NULL,
  `region` varchar(500) NOT NULL,
  `industry` varchar(500) NOT NULL,
  `income` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(22) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `full_name`, `region`, `industry`, `income`, `email`, `status`, `created_at`) VALUES
(6, 'great mcjolly', 'australia', 'energy', 2000, 'mcjolly@gmail.com', 'pending', '2023-03-29 17:02:53'),
(9, 'felicity Uzoma', '2', 'Information Technology', 40000, 'felicity@gmail.com', 'pending', '2023-03-31 05:08:01'),
(10, 'felicity Uzoma', 'America', 'Entertainment', 30000, 'felicity@gmail.com', 'pending', '2023-03-31 05:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_region` varchar(100) NOT NULL,
  `product_return_rate` decimal(5,2) NOT NULL,
  `product_min_investment` varchar(116) NOT NULL,
  `product_status` enum('active','inactive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_type`, `product_region`, `product_return_rate`, `product_min_investment`, `product_status`, `created_at`) VALUES
(2, 'WWE', 'Entertainment', 'America', '12.00', 'N100,000', 'active', '2023-03-30 06:33:56'),
(3, 'FOOTBALL', 'Sports', 'England', '4.00', 'N10,000,000', 'active', '2023-03-30 09:00:33'),
(6, 'HollyWood', 'Entertainment', 'America', '5.00', 'N1,000,000', 'inactive', '2023-03-30 09:04:04'),
(7, 'Bitcoin', 'Foreign Exchange', 'World Wide', '10.00', 'N300,000', 'active', '2023-03-30 11:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `r_manager`
--

CREATE TABLE `r_manager` (
  `id` int(11) NOT NULL,
  `username` varchar(259) NOT NULL,
  `password` varchar(575) NOT NULL,
  `rm_name` varchar(989) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_manager`
--

INSERT INTO `r_manager` (`id`, `username`, `password`, `rm_name`, `photo`) VALUES
(1, 'admin', 'admin', 'mcjolly Great', 'upload/IMG-20211210-WA0001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` char(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(400) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('client','rm') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `address`, `password`, `role`, `created_at`, `photo`) VALUES
(7, 'great', 'mcjolly', '09037826716', 'mcjolly@gmail.com', 'canada', 'mmmmm', 'rm', '2023-03-29 13:55:58', '../upload/FB_IMG_16586921200633838.jpg'),
(8, 'felicity', 'Uzoma', '090387281', 'felicity@gmail.com', 'Igbo-Etche LGA', 'mmmmm', 'client', '2023-03-30 15:36:51', '../upload/20221021-231352 (2).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `r_manager`
--
ALTER TABLE `r_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(28) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `r_manager`
--
ALTER TABLE `r_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

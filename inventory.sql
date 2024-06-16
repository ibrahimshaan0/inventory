-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 04:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `inv_customers`
--

CREATE TABLE `inv_customers` (
  `id` bigint(20) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `customerType` varchar(255) NOT NULL,
  `customerStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inv_customers`
--

INSERT INTO `inv_customers` (`id`, `customerName`, `customerType`, `customerStatus`) VALUES
(1, 'Ibrahim', 'Regular', 'Active'),
(2, 'Sakila', 'Regular', 'Active'),
(3, 'Siam', 'Regular', 'Active'),
(4, 'IShaan', 'Regular', 'Active'),
(5, 'Nadim', 'Regular', 'Active'),
(6, 'Foysal', 'Irregular', 'Active'),
(7, 'Siddik', 'Regular', 'Inactive'),
(8, 'Shadman Sakib', 'Regular', 'Active'),
(9, 'Sakib', 'Regular', 'Active'),
(10, 'Khan', 'Irregular', 'Inactive'),
(11, 'Dhrubo', 'Irregular', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `inv_pcs`
--

CREATE TABLE `inv_pcs` (
  `id` bigint(20) NOT NULL,
  `pcName` varchar(255) NOT NULL,
  `pcType` varchar(255) NOT NULL,
  `pcQuality` varchar(255) NOT NULL,
  `pcStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inv_pcs`
--

INSERT INTO `inv_pcs` (`id`, `pcName`, `pcType`, `pcQuality`, `pcStatus`) VALUES
(1, 'PC1', 'Desktop', 'Grade C', 'Working'),
(2, 'PC2', 'Desktop', 'Grade C', 'Working'),
(3, 'PC3', 'Desktop', 'Grade C', 'Not Working'),
(4, 'PC4', 'Desktop', 'Grade B', 'Working'),
(5, 'PC5', 'Desktop', 'Grade C', 'Working'),
(6, 'LP6', 'Laptop', 'Grade C', 'Working'),
(7, 'LP7', 'Laptop', 'Grade C', 'Working'),
(8, 'PC8', 'Desktop', 'Grade B', 'Working'),
(9, 'PC9', 'Desktop', 'Grade C', 'Not Working'),
(10, 'PC10', 'Desktop', 'Grade A', 'Working');

-- --------------------------------------------------------

--
-- Table structure for table `inv_users`
--

CREATE TABLE `inv_users` (
  `id` bigint(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inv_users`
--

INSERT INTO `inv_users` (`id`, `user_name`, `username`, `password`) VALUES
(1, 'Ibrahim', 'ibrahim', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inv_customers`
--
ALTER TABLE `inv_customers`
  ADD UNIQUE KEY `inv_customer_id` (`id`);

--
-- Indexes for table `inv_pcs`
--
ALTER TABLE `inv_pcs`
  ADD UNIQUE KEY `inv_pcs_id` (`id`);

--
-- Indexes for table `inv_users`
--
ALTER TABLE `inv_users`
  ADD UNIQUE KEY `inv_user_id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inv_customers`
--
ALTER TABLE `inv_customers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inv_pcs`
--
ALTER TABLE `inv_pcs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inv_users`
--
ALTER TABLE `inv_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

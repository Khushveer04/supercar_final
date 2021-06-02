-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 05:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supercar`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'khushveer', '$2y$10$.O/ZhqnlWPrqluXwvfsWeOtStA620FCPUKUWc6h.yqhMMWjPG21XW', '2020-12-08 04:48:48'),
(2, 'dischan', '$2y$10$eKuD8QIinlTqU7TE1/SBS.WGARthAvvD9LveIlT3yrjYcQMPRppC2', '2020-12-08 16:47:49'),
(3, 'trilesh', '$2y$10$gG6JBGA3UJFh6G66VMgXaufbURj0b8p/1mCGymbmm.uxKQSMzNPry', '2020-12-09 21:29:13'),
(4, 'lola', '$2y$10$Eu23fjfKtEztwMCA0nQQh.QJYWUaoherMws/oepU8Tub3YP1lIIze', '2020-12-09 21:49:20'),
(5, 'new', '$2y$10$jBiIx0Ux109E4uFb7gabFO5Ega5W/lszNE2gmm0iccVDqVCp5mMK6', '2020-12-09 22:00:30'),
(6, 'dischanarmooz', '$2y$10$zc3QZeXmTeJeKbcOv2FuvOKg3SViQ0FFGTMcaIlVojOA6AFqm2.DC', '2021-03-08 08:12:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 07:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthtech`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'root', '$2y$10$Qa0ut8ODEteQyL.HjIwLz.1W2ANG3SvpdzgNah/h5z.ZuQD6eOrom', '2022-02-19 13:44:53'),
(2, 'test', '$2y$10$6hliyG6R/faWQh1Cvg92feXEQALuOHZPbM59//.vSJhqIfOYVeEMy', '2022-02-21 13:08:18'),
(3, 'jack', '$2y$10$FT2IuN81d44M4rSbSLKj9e1jv6S/uWY5f8BQzgM.kk0xGkXWwzxlW', '2022-02-21 13:10:26'),
(7, 'kiran', '$2y$10$Ysr7o90kvmmRPXVCU//7U.ccqnyw2ExdM3iKYN3v2Ivtkd.Yx5ohW', '2022-02-21 17:39:38'),
(8, 'kiran123', '$2y$10$EFwnfaLjYvIwmJcsqurrBOzyDSZI9IECp735MhwpwhvTfb4vbbecu', '2022-02-21 17:42:35'),
(9, 'kiran1232', '$2y$10$ho7LlLNpPs1xBU5KFldUcuM0xpngNqHvtY1qkcwat/PZ8VAD8KTcq', '2022-02-21 17:43:10'),
(10, '123456', '$2y$10$HKGQliCJ3NdJOvzoQn47DeScCiK1afH8mQ9X6PzlMHa0gKpUG3Zxi', '2022-02-21 18:14:32'),
(11, 'testabc', '$2y$10$CFtoyJTSSBrm/.twHhK3sO6QZ8Fs4xGBUBaiG8EtbaKr/wdnVw2qa', '2022-02-21 18:15:12'),
(12, 'amm123', '$2y$10$JSrG/0LYIGuF1PPPQ/.eae06Ui66hDFq7pdvixKL74pKVjbHI2zpi', '2022-02-24 15:52:59'),
(13, 'Audrian', '$2y$10$wvDbgrk.5Dhwuh71oFY.LOIGTxOpDAOPSHS4ZOI255yPzNH5ZxMxa', '2022-02-24 16:05:24'),
(14, 'ammm', '$2y$10$gUdEgU8n/lVH8kyXKceB6.OtgN8r7H4URclWLJkS5Q86AyRnhetAy', '2022-02-24 16:25:08');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

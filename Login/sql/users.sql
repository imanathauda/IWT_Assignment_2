-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 02, 2021 at 07:00 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phoneNo`, `email`, `password`, `userType`) VALUES
(37, 'saman', 415623147, 'samaan@gmail.com', '202cb962ac59075b964b07152d234b70', 'customer'),
(38, 'saman', 112545789, 'samaan1@gmail.com', '0c74b7f78409a4022a2c4c5a5ca3ee19', 'customer'),
(39, 'saman77', 114525789, 'samaan99@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', 'customer'),
(40, 'pasan', 774589635, 'pasan@gmail.com', '202cb962ac59075b964b07152d234b70', 'customer'),
(41, 'pasan99', 774512369, 'pasan99@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', 'customer'),
(42, 'admin', 412536987, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(43, 'sachin', 774585963, 'sachin@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', 'customer'),
(44, 'Nimal De sliva', 745689321, 'nimalde@gmail.com', '2e65f2f2fdaf6c699b223c61b1b5ab89', 'customer'),
(45, 'kalum', 784512369, 'kalum@gmail.com', '1c1d4df596d01da60385f0bb17a4a9e0', 'customer'),
(46, 'sunimal', 415623147, 'saman@gmail.com', '1ce927f875864094e3906a4a0b5ece68', 'customer'),
(47, 'kasun', 714582369, 'kasun@gmail.com', 'ab233b682ec355648e7891e66c54191b', 'customer'),
(48, 'suni', 415823698, 'suni98@gmail.com', '1ce927f875864094e3906a4a0b5ece68', 'customer'),
(49, 'gddhj', 145287963, 'asadsd@gmail.com', '202cb962ac59075b964b07152d234b70', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

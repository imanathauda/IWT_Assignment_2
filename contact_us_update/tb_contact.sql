-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 02:43 AM
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
-- Database: `db_contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `ID` int(10) NOT NULL,
  `U_name` varchar(50) NOT NULL,
  `U_mail` varchar(50) NOT NULL,
  `Sub` varchar(150) NOT NULL,
  `Msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`ID`, `U_name`, `U_mail`, `Sub`, `Msg`, `date`) VALUES
(8, 'sachin', 'sachin@gmail.com', 'Delay', 'My food order was delayed yesterday', '0000-00-00 00:00:00'),
(9, 'sachin', 'sachin@gmail.com', 'adasd', 'asdasdad', '0000-00-00 00:00:00'),
(10, 'sachin', 'sachin@gmail.com', 'no_name', 'I orderd a pizza', '0000-00-00 00:00:00'),
(11, 'sachin lakshan', 'slsachinlakshan@gmail.com', 'food order', 'i orderd but it delayed\r\n', '0000-00-00 00:00:00'),
(12, 'pasan', 'pasan@gmail', 'asdalklkas', 'asflskdfkadsnfk', '0000-00-00 00:00:00'),
(13, 'sachin', 'slsachinlakshan@gmailcom', 'sachin', 'test the time', '2021-10-04 18:30:00'),
(14, 'ASas', 'asad@asda', 'asdasdaddadsa', 'asdasd', '2021-10-04 18:30:00'),
(15, 'sachin', 'slsachinlakshan@gmailcom', 'sachin', 'test the time', '2021-10-04 18:30:00'),
(16, 'sachin', 'slsachinlakshan@gmailcom', 'sachin', 'test the time', '2021-10-06 00:40:44'),
(17, 'sachin', 'sachin@gmail.com', 'time test', 'cuttent time\r\n', '2021-10-06 00:42:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

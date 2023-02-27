-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 01:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mptour_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(60) NOT NULL,
  `Age` int(3) NOT NULL,
  `mobile` int(15) NOT NULL,
  `EmailId` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `Age`, `mobile`, `EmailId`, `Password`) VALUES
('Abhishek', 22, 2147483647, 'abhi123@gmail.com', '11223344'),
('Aman', 21, 2147483647, 'aman@gmail.com', '12345678'),
('Arjun', 25, 2147483647, 'arjun@gmail.com', '123123123'),
('Arun', 26, 2147483647, 'arun34@gmail.com', '56785678'),
('Jai', 20, 2147483647, 'jai32@gmail.com', '12341234'),
('Karan', 24, 2147483647, 'karan22@gmail.com', '90909090'),
('Niya', 19, 2147483647, 'niya78@gmail.com', '89898989'),
('Ram', 22, 2147483647, 'ramram@gmail.com', '43214321'),
('Ritu', 23, 2147483647, 'ritu@gmail.com', 'ritu1234'),
('Tarun', 25, 2147483647, 'tarun@gmail.com', '90787867');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`EmailId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

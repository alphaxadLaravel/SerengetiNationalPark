-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 08:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serengeti`
--

-- --------------------------------------------------------

--
-- Table structure for table `wanyama_free`
--

CREATE TABLE `wanyama_free` (
  `id` int(11) NOT NULL,
  `mnyama` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `picha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wanyama_free`
--

INSERT INTO `wanyama_free` (`id`, `mnyama`, `location`, `picha`) VALUES
(1, 'Buffalo', 'Serengeti - Geti II', 'free/bufa.jpg'),
(2, 'Giraffe', 'Serengeti - Pori kuu', 'free/a-11.jpg'),
(3, 'Zebra', 'Serengeti - Geti I', 'free/a-7.jpg'),
(4, 'Gorilla', 'Serengeti - Pori Kuu', 'free/a-28.jpg'),
(5, 'Kangaroo', 'Serengeti - geti II', 'free/a-20.jpg'),
(6, 'Hippopotamus', 'Serengeti - Guruneti river', 'free/a-21.jpg'),
(7, 'Wolf', 'Serengeti - Milimani', 'free/a-3.jpg'),
(8, 'Hyena', 'Serengeti - milimani', 'free/a-16.jpg'),
(9, 'Crocodile', 'Serengeti - Guruneti river', 'free/a-35.jpg'),
(10, 'Monkey', 'Serengeti - Pori Kuu', 'free/a-27.jpg'),
(11, 'Ostritch', 'Serengeti - Geti III', 'free/a-29.jpg'),
(12, 'Rabbit', 'Serengeti - Miti mirefu', 'free/a-32.jpg'),
(13, 'Monitor Lizard', 'Serengeti - Nkuruma Pori', 'free/a-31.jpg'),
(14, 'Eagle', 'Serengeti - Mbuga Kuu', 'free/a-14.jpg'),
(15, 'Warthog', 'Serengeti - milimani', 'free/a-24.jpg'),
(16, 'Deer', 'Serengeti - Seronera', 'free/a-5.jpg'),
(17, 'Tortoise', 'Serengeti - Porii', 'free/a-19.jpg'),
(18, 'Fox', 'Serengeti - Get II', 'free/a-23.jpg'),
(19, 'Nungu Nungu', 'Serengeti - Pori II', 'free/a-9.jpg'),
(20, 'Horse', 'Serengeti - Seronera', 'free/paid-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wanyama_license`
--

CREATE TABLE `wanyama_license` (
  `id` int(11) NOT NULL,
  `mnyama` varchar(30) NOT NULL,
  `bei_tzsh` bigint(20) NOT NULL,
  `bei_dollar` bigint(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `picha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wanyama_license`
--

INSERT INTO `wanyama_license` (`id`, `mnyama`, `bei_tzsh`, `bei_dollar`, `location`, `picha`) VALUES
(1, 'Tembo', 9200000, 4000, 'Serengeti - Seronera', 'paid/paid-5.jpg'),
(2, 'Tiger', 4600000, 2000, 'Serengeti - Pori kuu', 'paid/paid-2.jpg'),
(3, 'Lion', 4600000, 2000, 'Serengeti - Seronera', 'paid/paid-1.jpg'),
(4, 'Antelope', 1150000, 1500, 'Serengeti - Geti I', 'paid/a-36.jpg'),
(5, 'Rhino', 6900000, 3000, 'Serengeti - Seronera', 'paid/a-34.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wanyama_free`
--
ALTER TABLE `wanyama_free`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wanyama_license`
--
ALTER TABLE `wanyama_license`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wanyama_free`
--
ALTER TABLE `wanyama_free`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wanyama_license`
--
ALTER TABLE `wanyama_license`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

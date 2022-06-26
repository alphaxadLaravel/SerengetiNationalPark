-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 04:43 PM
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
-- Table structure for table `wanyama_license`
--

CREATE TABLE `wanyama_license` (
  `id` int(11) NOT NULL,
  `mnyama` varchar(20) NOT NULL,
  `bei` varchar(20) NOT NULL,
  `dollar` bigint(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `picha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wanyama_license`
--

INSERT INTO `wanyama_license` (`id`, `mnyama`, `bei`, `dollar`, `location`, `picha`) VALUES
(1, 'Simba Imara', '200000', 100, 'Serengeti - Seronera', 'paid/paid-1.jpg'),
(2, 'Tiger Claw', '500000', 50, 'Serengeti - Mtoni', 'paid/paid-2.jpg'),
(3, 'Chui Madoa', '300000', 500, 'Serengeti - Guruneti', 'paid/paid-3.jpg'),
(4, 'Farasi', '150000', 30, 'Serengeti -gurumeti', 'paid/paid-4.jpg'),
(5, 'Swala Pori', '200000', 100, 'Serengeti - get I', 'paid/a-36.jpg'),
(6, 'Mamba', '50000', 20, 'Serengeti - Gurumrti', 'paid/a-35.jpg'),
(7, 'Kiboko', '50000', 20, 'Serengeti - Mto kaye', 'paid/a-21.jpg'),
(8, 'Ngedere', '40000', 18, 'Serengeti - Pori Kuu', 'paid/a-24.jpg'),
(9, 'Mbuni', '500000', 200, 'Serengeti - Geti II', 'paid/a-29.jpg'),
(10, 'Pundamilia', '40000', 39, 'Serengeti - Getini', 'paid/a-37.jpg'),
(11, 'Kifaru', '5000000', 2500, 'Serengeti - Seronera', 'paid/a-22.jpg'),
(14, 'Duma', '200000', 150, 'Serengeti - Seronera', 'paid/a-10.jpg'),
(15, 'Tai', '50000', 20, 'Serengeti - Pori Kuu', 'paid/a-14.jpg'),
(16, 'Cheeter', '150000', 100, 'Serengeti - Kisembo ', 'paid/a-6.jpg'),
(17, 'Kima', '40000', 34, 'Serengeti - Miti mir', 'paid/a-30.jpg'),
(18, 'Fisi', '6000', 4, 'Serengeti - Nkuruma ', 'paid/a-16.jpg'),
(19, 'Kobe', '50000', 20, 'Serengeti - Mbuga Ku', 'paid/a-19.jpg'),
(20, 'Kicheche', '10000', 8, 'Serengeti - milimani', 'paid/a-33.jpg'),
(21, 'Sungura', '30000', 15, 'Serengeti - get I', 'paid/a-32.jpg'),
(22, 'Kakakuona', '300000', 150, 'Serengeti - Guruneti', 'paid/a-15.jpg'),
(23, 'Twiga', '200000', 100, 'Serengeti - Pori Kuu', 'paid/a-11.jpg'),
(24, 'Nungunungu', '50000', 25, 'Serengeti - Geti II', 'paid/a-9.jpg'),
(25, 'Mbwa mwitu', '140000', 70, 'Serengeti - Pori Kuu', 'paid/a-23.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wanyama_license`
--
ALTER TABLE `wanyama_license`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wanyama_license`
--
ALTER TABLE `wanyama_license`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 09:02 AM
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
-- Database: `anoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `anp`
--

CREATE TABLE `anp` (
  `id` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `medium` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anp`
--

INSERT INTO `anp` (`id`, `class`, `name`, `date`, `phone`, `medium`) VALUES
(3, 'Class8', 'Anoop kumar c', '2022-03-03', '9044289502', 'CBSC'),
(5, 'Class1', 'Anoop ch', '2022-04-01', '90442895022', 'Hindi'),
(6, 'Class1', 'kumar', '2022-02-09', '9044289502', 'English'),
(9, 'Class1', 'Anoop j', '2022-03-09', '90442895022', 'SEMI'),
(10, 'Class1', 'Anoop', '2023-04-14', '9792509502', 'CBSC'),
(11, 'Class10', 'Anoop', '2022-03-09', '90442895022', 'SEMI'),
(12, 'Class10', 'Anoop', '2022-03-09', '90442895022', 'SEMI'),
(16, 'Class8', 'Anoop kumar', '2022-03-11', '9044289502', 'CBSC'),
(17, 'Class8', 'usman', '2022-02-09', '9044289502', 'SEMI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anp`
--
ALTER TABLE `anp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anp`
--
ALTER TABLE `anp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

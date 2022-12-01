-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 06:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `entrimatakuliah`
--

CREATE TABLE `entrimatakuliah` (
  `id` int(11) NOT NULL,
  `mk` varbinary(300) NOT NULL,
  `ds` varbinary(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entrimatakuliah`
--

INSERT INTO `entrimatakuliah` (`id`, `mk`, `ds`) VALUES
(1, 0xadea0c4d3d731e6bf7aff24771d64f73, 0xfe3580b843954ff5aa536a25e824c929),
(2, 0x731d9e9fc1dd5cbaf3e6bcfa6ed4b445, 0xeb1d81bf67ba17ebec5d961af9a33b55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entrimatakuliah`
--
ALTER TABLE `entrimatakuliah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entrimatakuliah`
--
ALTER TABLE `entrimatakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

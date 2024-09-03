-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 07:01 AM
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
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `mno` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `password`, `mno`, `email`) VALUES
('Swamy', 'Swamhy#333', '9963748270', 'Swamy@gmail.com'),
('ruthvik', 'Ruthvik@20', '7386393040', 'ruthvik@gmail.com'),
('harsha rangiset', 'Harsha@123', '1322346561', 'haresha@gmail.com'),
('chay', 'Chay@12345', '8977870607', 'nivas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `name` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `guests` int(20) NOT NULL,
  `mno` int(10) DEFAULT NULL,
  `hotel` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`name`, `date`, `time`, `guests`, `mno`, `hotel`, `email`) VALUES
('swamy', '2023-07-10', '12:59:00', 9, 2147483647, 'platform 65', 'Swamy@gmail.com'),
('swamy', '2023-07-10', '12:59:00', 9, 2147483647, 'platform 65', 'Swamy@gmail.com'),
('harsha', '2023-07-19', '12:30:00', 10, 2147483647, 'platform 65', 'harsha@gamil.com'),
('NIVAS', '2023-07-20', '02:06:00', 3, 2147483647, 'pista house', 'nivas@gmail.com'),
('NIVAS', '2023-07-20', '02:06:00', 3, 2147483647, 'pista house', 'nivas@gmail.com'),
('harsha', '2023-07-21', '18:52:00', 5, 2147483647, 'pista house', 'Swamy@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

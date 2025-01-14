-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 04:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `d_details`
--

CREATE TABLE `d_details` (
  `d_name` varchar(50) DEFAULT NULL,
  `d_f_name` varchar(70) DEFAULT NULL,
  `d_m_name` varchar(80) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `b_group` varchar(5) DEFAULT NULL,
  `p_no` varchar(30) DEFAULT NULL,
  `e_mail` varchar(75) DEFAULT NULL,
  `addr` varchar(100) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `state` varchar(60) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `weight` decimal(3,2) DEFAULT NULL,
  `pulse` decimal(5,2) DEFAULT NULL,
  `haemo` decimal(5,2) DEFAULT NULL,
  `bp` int(11) DEFAULT NULL,
  `temp` int(11) DEFAULT NULL,
  `ques` varchar(100) DEFAULT NULL,
  `d_pwd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `d_details`
--

INSERT INTO `d_details` (`d_name`, `d_f_name`, `d_m_name`, `dob`, `b_group`, `p_no`, `e_mail`, `addr`, `city`, `state`, `pincode`, `weight`, `pulse`, `haemo`, `bp`, `temp`, `ques`, `d_pwd`) VALUES
('Harsh Tripathi  ', 'Arun Kumar Tripathi ', 'Urmila Tripathi ', '2002-06-12', 'A+', '07017553402', 'harshtripathi.153354@gmail.com', '31/166c/1b Madhuban Nagar Rajpur chungi Agra', 'Agra ', 'Uttar Pradesh', 282001, 9.99, 56.60, 85.50, 95, 45, '2023-09-27', NULL),
('Harsh Tripathi  ', 'Arun Kumar Tripathi ', 'Urmila Tripathi ', '2002-06-12', 'A+', '7017553402', 'harshtripathi.153354@gmail.com', '31/166c/1b Madhuban Nagar Rajpur chungi Agra', 'Agra ', 'Uttar Pradesh', 282001, 9.99, 45.00, 64.00, 85, 87, '2023-09-11', '12345'),
('Love sharma', '123', '456', '2023-11-23', 'B+', '9997524171', 'sharma05love@gmail.com', '', '', '', 0, 0.00, 0.00, 0.00, 0, 0, '', '9997'),
('', '', '', '0000-00-00', 'Selec', '', '', '', '', '', 0, 0.00, 0.00, 0.00, 0, 0, '', ''),
('Sagar Jain', 'Devendra kumar Jain', 'Ganga Jain', '2001-12-18', 'B+', '8307255076', 'sj563135@gmail.com', '13/160 paktola tajganj', 'Agra ', 'Uttar Pradesh', 282001, 9.99, 152.00, 45.50, 85, 7, '', 'Sagar@123'),
('Himanshu Pawar', 'xyz', 'xyz', '2023-11-24', 'A+', '1', 'Himanshu@123', 'xyz', 'Agra ', 'Uttar Pradesh', 282001, 0.00, 0.00, 0.00, 0, 0, '', 'XYZ'),
('Harsh Tripathi  ', 'Arun Kumar Tripathi ', 'Urmila Tripathi ', '2023-11-26', 'O-', '7017553402', 'harshtripathi.153354@gmail.com', '31/166c/1b Madhuban Nagar Rajpur chungi Agra', 'Agra ', 'Uttar Pradesh', 282001, 0.00, 0.00, 0.00, 0, 0, '', '12345'),
('Harsh Tripathi  ', 'Arun Kumar Tripathi ', 'Urmila Tripathi ', '2023-12-07', 'AB+', '7017553402', 'harshtripathi.153354@gmail.com', '31/166c/1b Madhuban Nagar Rajpur chungi Agra', 'Agra ', 'Uttar Pradesh', 282001, 0.00, 0.00, 0.00, 0, 0, '', '123'),
('Sagar Jain', 'Devendra kumar Jain', 'Ganga Jain', '2001-12-18', 'B+', '8307255076', 'sj563135@gmail.com', '13/160 paktola tajgnaj agra', 'Agra ', 'Uttar Pradesh', 282001, 0.00, 0.00, 0.00, 0, 0, '', '12345678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

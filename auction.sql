-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 12:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `userstbl`
--

CREATE TABLE `userstbl` (
  `fname` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pnumber` varchar(20) NOT NULL,
  `pasword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userstbl`
--

INSERT INTO `userstbl` (`fname`, `email`, `pnumber`, `pasword`) VALUES
('shiro wangu', 'shiro@gmail.com', '90909090999', '40bd001563085fc35165329ea1ff5c'),
('test2', 'test2@gmail.com', '444444', 'b59c67bf196a4758191e42f76670ce'),
('test', 'test@gmail.com', '00000', '011c945f30ce2cbafc452f39840f02'),
('Francis', 'USERNAME@GMAIL.COM', 'username', 'password'),
('Francis gitau mwangi', 'username@yahoo.com', '909090', '5baa61e4c9b93f3f0682250b6cf833'),
('harriet', 'wanjiku@gmail.com', '12341234', '601f1889667efaebb33b8c12572835');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userstbl`
--
ALTER TABLE `userstbl`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

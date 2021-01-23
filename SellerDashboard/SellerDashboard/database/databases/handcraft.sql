-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 04:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT ;
40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS ;
40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION ;
40101 SET NAMES utf8mb4 ;

--
-- Database: `handcraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `email`, `title`, `price`, `description`, `quantity`, `location`, `image`) VALUES
('GCFviZm', 'test@gmail.com', 'Test', 10000, 'TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest', 100, 'Delhi', 'GCFviZmimg_1.jpg'),
('dME5fJ4', 'test@gmail.com', 'Test2', 100, 'vvTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest', 20, 'Delhi', 'dME5fJ4img_2.jpg'),
('3O1Be2t', 'test@gmail.com', 'Test3', 100, 'TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest', 20, 'Delhi', '3O1Be2timg_3.jpg'),
('40pA0Cf', 'test@gmail.com', 'test5', 2500, 'TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest1111111111\r\n', 20, 'Noida', '40pA0Cfimg_4.jpg'),
('IfrArI4', 'test123@gmail.com', 'Handloom', 500, 'Saree', 100, 'Delhi', 'IfrArI4cat1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) DEFAULT NULL,
  `emailId` varchar(50) NOT NULL,
  `sellerPwd` varchar(80) NOT NULL,
  `org_name` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT 'avatar.jfif',
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`f_name`, `l_name`, `emailId`, `sellerPwd`, `org_name`, `image`, `address`, `city`) VALUES
('raman', 'scc', 'test123@gmail.com', '$2y$10$a6hVx3Rx2BP0ftV8w5QjWu3ynMojA.mWs8mBaGLHClIthqnpdlqqi', 'test org', 'avatar.jfif', NULL, NULL),
('test', 'test', 'test1@gmail.com', '$2y$10$890YXHK/k94JX0rz6R.jdetuHW/KgsSpVEcnqX3qijgn.GLvlwxES', 'testtt', 'avatar.jfif', NULL, NULL),
('Test', 'test', 'test@gmail.com', '$2y$10$PkmA7Nhxu133pe6.1lIjf.pgKjJa31OSw/TYW1TrUi.1JssT8h6H2', 'test organization', 'avatar.jfif', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`emailId`);
COMMIT;

40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT ;
40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS ;
40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION ;

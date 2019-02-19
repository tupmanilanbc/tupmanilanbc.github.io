-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 02:55 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(1, 'jed', 'jed@sample.com', '0d1d7be1716d1fa2e1c27d98aabd4d96'),
(2, 'jed', 'jed@sample.com', '76d80224611fc919a5d54f0ff9fba446');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `department` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `department`) VALUES
(18, 'jeje', 'jeje@sample.com', '76d80224611fc919a5d54f0ff9fba446', 'cos'),
(19, 'maia', 'maia@sample.com', '39ad2a1609b0e7f7a7a6537b54aae7d9', 'CAFA'),
(20, 'maia', 'maia@sample.com', '0d1d7be1716d1fa2e1c27d98aabd4d96', 'COS'),
(21, 'ana', 'ana@sample.com', '76d80224611fc919a5d54f0ff9fba446', 'CIT');

-- --------------------------------------------------------

--
-- Table structure for table `usersprof`
--

CREATE TABLE `usersprof` (
  `id` int(13) NOT NULL,
  `Teacher_Name` varchar(255) NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `CStatus` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Home_Address` varchar(255) NOT NULL,
  `Mailing_Address` varchar(255) NOT NULL,
  `Tphone` int(15) NOT NULL,
  `Mphone` int(15) NOT NULL,
  `College` varchar(40) NOT NULL,
  `Prank` varchar(30) NOT NULL,
  `Dment` varchar(40) NOT NULL,
  `SAppoint` varchar(30) NOT NULL,
  `DLAP` date NOT NULL,
  `Dsubmit` date NOT NULL,
  `Ssign` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersprof`
--
ALTER TABLE `usersprof`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `usersprof`
--
ALTER TABLE `usersprof`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

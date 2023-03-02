-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 08:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expense_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` varchar(30) NOT NULL,
  `parent_id` varchar(30) NOT NULL,
  `transac_id` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `created_on` date NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` varchar(30) NOT NULL,
  `parent_id` varchar(30) NOT NULL,
  `transac_id` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `created_on` date NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `voucher_no` int(11) NOT NULL,
  `voucher_id` varchar(30) NOT NULL,
  `voucher_type` varchar(30) NOT NULL,
  `narration` varchar(50) DEFAULT NULL,
  `acc_head` varchar(30) NOT NULL,
  `transac_date` date NOT NULL,
  `debit` float DEFAULT NULL,
  `credit` float DEFAULT NULL,
  `is_opening` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `transac_id` (`transac_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `transac_id` (`transac_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `income` (`id`),
  ADD CONSTRAINT `expense_ibfk_2` FOREIGN KEY (`transac_id`) REFERENCES `transaction` (`id`);

--
-- Constraints for table `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `income_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `income` (`id`),
  ADD CONSTRAINT `income_ibfk_2` FOREIGN KEY (`transac_id`) REFERENCES `transaction` (`id`);

--
-- Constraints for table `transaction`




CREATE TABLE `transaction` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `acc_head` varchar(30) NOT NULL,
  `voucher_no` int(11) NOT NULL,
  `voucher_id` varchar(30) NOT NULL,
  `voucher_type` varchar(30) NOT NULL,
  `narration` varchar(50) DEFAULT NULL,
  `transac_date` date NOT NULL,
  `debit` float DEFAULT NULL,
  `credit` float DEFAULT NULL,
   is_opening boolean,
   PRIMARY KEY(id),
   FOREIGN KEY(user_id) REFERENCES user(id),
   FOREIGN KEY(acc_head) REFERENCES account_head(head_code)
    )
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2015 at 06:23 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `greatleafv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cashvoucher`
--

CREATE TABLE IF NOT EXISTS `cashvoucher` (
`id` int(11) NOT NULL,
  `filedby` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filedate` datetime DEFAULT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `particular` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `receiptno` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `remarks` tinytext COLLATE utf8_unicode_ci,
  `total` decimal(10,2) NOT NULL,
  `less_cash_advance` decimal(10,2) NOT NULL,
  `amount_return` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dtr`
--

CREATE TABLE IF NOT EXISTS `dtr` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `login` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`id` int(11) NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobacc`
--

CREATE TABLE IF NOT EXISTS `jobacc` (
`id` int(11) NOT NULL,
  `filedby` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filedate` datetime DEFAULT NULL,
  `department` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `reason` text COLLATE utf8_unicode_ci NOT NULL,
  `office_timein` time NOT NULL,
  `office_timeout` time NOT NULL,
  `site_timein` time NOT NULL,
  `site_timeout` time NOT NULL,
  `destination` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `purpose` text COLLATE utf8_unicode_ci NOT NULL,
  `accomplishment` text COLLATE utf8_unicode_ci,
  `remarks` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE IF NOT EXISTS `leave` (
`id` int(11) NOT NULL,
  `filedby` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filedate` datetime DEFAULT NULL,
  `reason` text COLLATE utf8_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `duration` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `officialbusiness`
--

CREATE TABLE IF NOT EXISTS `officialbusiness` (
`id` int(11) NOT NULL,
  `filedby` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filedate` datetime DEFAULT NULL,
  `department` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `reason` text COLLATE utf8_unicode_ci NOT NULL,
  `office_timein` time NOT NULL,
  `office_timeout` time NOT NULL,
  `site_timein` time NOT NULL,
  `site_timeout` time NOT NULL,
  `destination` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `purpose` text COLLATE utf8_unicode_ci NOT NULL,
  `accomplishment` text COLLATE utf8_unicode_ci,
  `remarks` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE IF NOT EXISTS `overtime` (
`id` int(11) NOT NULL,
  `filedby` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `reason` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'acbalutan', '6tsqEfqARo2GC8dk3cwbyZBtIecip-5w', '$2y$13$0wZnwU9WDsXoi4GNQotALeku58pBJuo8jCXP9vfZkStxt55yTaa96', NULL, 'acbalutan@student.apc.edu.ph', 10, 1443710622, 1443710622);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
 ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
 ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `cashvoucher`
--
ALTER TABLE `cashvoucher`
 ADD PRIMARY KEY (`id`), ADD KEY `filedby` (`filedby`);

--
-- Indexes for table `dtr`
--
ALTER TABLE `dtr`
 ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobacc`
--
ALTER TABLE `jobacc`
 ADD PRIMARY KEY (`id`), ADD KEY `filedby` (`filedby`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
 ADD PRIMARY KEY (`id`), ADD KEY `filedby` (`filedby`);

--
-- Indexes for table `officialbusiness`
--
ALTER TABLE `officialbusiness`
 ADD PRIMARY KEY (`id`), ADD KEY `filedby` (`filedby`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
 ADD PRIMARY KEY (`id`), ADD KEY `filedby` (`filedby`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashvoucher`
--
ALTER TABLE `cashvoucher`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dtr`
--
ALTER TABLE `dtr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobacc`
--
ALTER TABLE `jobacc`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `officialbusiness`
--
ALTER TABLE `officialbusiness`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cashvoucher`
--
ALTER TABLE `cashvoucher`
ADD CONSTRAINT `filedby_cashvoucher` FOREIGN KEY (`filedby`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dtr`
--
ALTER TABLE `dtr`
ADD CONSTRAINT `username_dtr` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jobacc`
--
ALTER TABLE `jobacc`
ADD CONSTRAINT `filedby_jobacc` FOREIGN KEY (`filedby`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leave`
--
ALTER TABLE `leave`
ADD CONSTRAINT `filedby_leave` FOREIGN KEY (`filedby`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `officialbusiness`
--
ALTER TABLE `officialbusiness`
ADD CONSTRAINT `filedby_officialbusiness` FOREIGN KEY (`filedby`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `overtime`
--
ALTER TABLE `overtime`
ADD CONSTRAINT `filedby_overtime` FOREIGN KEY (`filedby`) REFERENCES `user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

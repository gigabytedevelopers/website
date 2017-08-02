-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 06:10 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `email_code` varchar(32) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `password_recover` int(11) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0',
  `allow_email` int(11) NOT NULL DEFAULT '0',
  `profile` varchar(55) NOT NULL DEFAULT 'user/images/profile/user_male_1.jpg',
  `country` varchar(100) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `sex` varchar(20) NOT NULL DEFAULT 'Unspecified'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `email_code`, `active`, `password_recover`, `type`, `allow_email`, `profile`, `country`, `phonenumber`, `sex`) VALUES
(1, 'gigabyte', 'db02cda1496afded3fe782a4e412525f', 'Emmanuel', 'Nwokoma', 'gigabytedevelopers@gmail.com', '', 1, 0, 1, 1, 'user/images/profile/756767cad2.jpg', 'Nigeria', '+2348104309369', 'Male'),
(2, 'emmanuel', '3a09f0e5969af09a38dd61175acd1c17', 'Emmanuel', 'Nwokoma', 'nwokomaemmanuel@gmail.com', 'dd3335ebe178620c6d99ae9ebdaa9561', 1, 0, 0, 0, 'user/images/profile/user_male_1.jpg', '', '', 'Male'),
(3, 'ebube', '9ed0f4a41c815d54ac29ca7847c377ac', 'Ebube', 'Okocha', 'okochaebube@gmail.com', 'a6cbf91762e4882e0f56174f496aaac1', 1, 0, 0, 1, 'user/images/profile/b0c4786a7e.jpg', 'Nigeria', '+2347017314521', 'Male'),
(4, 'ceejay', '3a09f0e5969af09a38dd61175acd1c17', 'Ceejay', 'Mezue', 'mezueceejay8@gmail.com', '13e720f3cc8265e3c35089bf4f353c19', 1, 0, 0, 0, 'user/images/profile/user_male_1.jpg', 'Nigeria', '', 'Male'),
(5, 'sandy', '83d6566a66215df6c03e011021418a08', 'Sandra', 'Alozie', 'aloziesandra@gmail.com', '48981dee78ab471c740d539f5d3a2e06', 1, 0, 0, 0, 'user/images/profile/user_male_1.jpg', 'Nigeria', '', 'Female'),
(6, 'hello', '2c2630766f927e49d068dd55726a99d3', 'user', 'hello', 'hellouser@gmail.com', '0db4d06f0fe026560212cda77a6e5a25', 1, 0, 0, 0, 'user/images/profile/9109ff0ba7.png', 'Nigeria', '08104309369', 'Male'),
(7, 'Hayomydeh', '89760fae4ce20c6bbe263adc773ab2e0', 'Ayomide', 'Abdulkadir', 'ayomideabdulkadir00@gmail.com', '9130528de979580afa51b0dbdb8730d3', 1, 0, 0, 0, 'user/images/profile/user_male_1.jpg', 'Nigeria', '08140090981', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

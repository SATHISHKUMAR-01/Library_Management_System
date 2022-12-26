-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 01:43 PM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `isbn` varchar(32) NOT NULL,
  `title` varchar(64) NOT NULL,
  `author` varchar(64) NOT NULL,
  `subject` varchar(64) NOT NULL,
  `year` varchar(18) NOT NULL,
  `borrow_status` int(11) NOT NULL DEFAULT 0,
  `return_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `title`, `author`, `subject`, `year`, `borrow_status`, `return_status`, `created_at`) VALUES
(1, 'ISBN20010123', 'Problem Solving Python', 'Nagapan', 'Computer Science', '2017', 0, 0, '2022-11-08 16:42:18'),
(3, 'ISBN20010980', 'C++ Programming', 'Velu', 'Computer Science', '2019', 0, 0, '2022-11-08 19:59:33'),
(4, 'ISBN20010111', 'Microprocessor', 'Uma', 'Electronics', '2000', 0, 0, '2022-11-08 20:00:00'),
(5, 'ISBN20010786', 'Comics Tale', 'Surya', 'Children Story', '2004', 0, 0, '2022-11-08 20:00:33'),
(6, 'ISBN20010156', 'abc', 'abc', 'abc', '1011', 0, 0, '2022-11-09 04:10:43'),
(7, 'ISBN20010981', 'def', 'def', 'def', '2001', 0, 0, '2022-11-09 04:11:59'),
(30, 'ISBN20010125', 'Hello World', 'name', 'Computer Science', '123', 0, 0, '2022-11-14 05:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `isbn` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `isbn`, `name`, `created_at`) VALUES
(24, 'ISBN20010111', 'Saveetha', '2022-11-11 15:45:51'),
(25, 'ISBN20010111', 'Saveetha', '2022-11-11 15:47:57'),
(26, 'ISBN20010111', 'Saveetha', '2022-11-11 15:50:10'),
(27, 'ISBN20010111', 'Saveetha', '2022-11-11 15:50:13'),
(28, 'ISBN20010156', 'Saveetha', '2022-11-11 15:50:16'),
(29, 'ISBN20010156', 'Saveetha', '2022-11-11 15:50:18'),
(30, 'ISBN20010980', 'Saveetha', '2022-11-11 15:50:20'),
(31, 'ISBN20010981', 'Saveetha', '2022-11-11 15:50:24'),
(32, 'ISBN20010111', 'Saveetha', '2022-11-11 15:52:10'),
(33, 'ISBN20010123', 'Saveetha', '2022-11-11 15:52:15'),
(34, 'ISBN20010111', 'Saveetha', '2022-11-11 15:54:22'),
(35, 'ISBN20010123', 'Saveetha', '2022-11-11 15:54:28'),
(36, 'ISBN20010111', 'Saveetha', '2022-11-11 15:55:11'),
(37, 'ISBN20010123', 'Saveetha', '2022-11-11 15:55:15'),
(38, 'ISBN20010111', 'Saveetha', '2022-11-11 15:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` varchar(18) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `confirm_password` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `name`, `email`, `password`, `confirm_password`, `created_at`) VALUES
('utCcOhr8', 'Sathish', 'sathishprakash233@gmail.com', '123', '123', '2022-11-14 05:08:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

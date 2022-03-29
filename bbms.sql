-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 11:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Tayyab Ullah', 'mehran@gmail.com', 'Testing', 'Message');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(20) NOT NULL,
  `name` varchar(70) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bgroup` varchar(50) NOT NULL,
  `img` varchar(500) NOT NULL,
  `address` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `mobile`, `email`, `age`, `gender`, `bgroup`, `img`, `address`, `message`, `time`) VALUES
(33, 'Huzaifa', 890430909, 'loading@gmail.com', 43, 'Male', 'A+', 'uploads/adil.PNG', 'umarzai', 'message ', '2021-02-05 19:36:58'),
(34, 'Zakir Ullah', 2147483647, 'zakir@gmail.com', 20, 'Male', 'A+', 'uploads/me.jpg', 'charsadda', 'Save Life ', '2022-02-05 19:48:09'),
(35, 'Abbas', 2147483647, 'abbas@gmail.com', 45, 'Male', 'A+', 'uploads/abbas.PNG', 'Para Chinar', 'Save Life , Donate Blood ', '2022-02-10 08:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'abbas@gmail.com', 'abbas@110');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `usertype`, `image`) VALUES
(1, 'Salman', 'salman@gmail.com', 'khan', 'user', ''),
(2, 'Mansoor', 'mansoor@gmail.com', 'mansoor', 'admin', ''),
(3, 'Farman', 'farman@gmail.com', 'farman', 'user', ''),
(4, 'Mehran', 'mehran@gmail.com', 'mehran', 'user\r\n\r\n', ''),
(5, 'Zeeshan', 'zeeshan@gmail.com', 'zeeshan', 'user', ''),
(6, 'haneef', 'haneef@gmail.com', 'haneef', 'user', ''),
(7, 'jawad', 'jawad@gmail.com', 'jawad', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `requestors`
--

CREATE TABLE `requestors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bgroup` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestors`
--

INSERT INTO `requestors` (`id`, `name`, `mobile`, `email`, `bgroup`, `address`, `message`, `time`) VALUES
(1, 'Farooq', 2147483647, ' farooq@gmail.com', '', 'charsadda', ' Highly needed blood, please contact.', '2022-02-05 15:34:16'),
(2, 'Jawad', 2147483647, ' jawad@gmail.com', '', 'charsadda', 'Needed ', '2022-02-05 15:39:17'),
(3, 'Tayyab Ullah', 94394093, ' tayyab@gmail.com', '', 'Peshawar', ' Highly needed.', '2022-02-10 08:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `bid` int(11) NOT NULL,
  `btype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestors`
--
ALTER TABLE `requestors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `requestors`
--
ALTER TABLE `requestors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

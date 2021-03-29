-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 07:22 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gfg`
--

-- --------------------------------------------------------

--
-- Table structure for table `descq`
--

CREATE TABLE `descq` (
  `q_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `descq`
--

INSERT INTO `descq` (`q_id`, `question`, `answer`, `creator_id`) VALUES
(4, 'daf', 'dfa', 13),
(5, 'goegraph question', 'goegraphy answer', 13),
(6, 'All tags question', 'All tags Answer', 13);

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE `mcq` (
  `q_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option_1` text NOT NULL,
  `option_2` text NOT NULL,
  `option_3` text NOT NULL,
  `option_4` text NOT NULL,
  `answer` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcq`
--

INSERT INTO `mcq` (`q_id`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `answer`, `creator_id`) VALUES
(1, 'mcq all tags question', 'option 1', 'option 2', 'option 3', 'option 4', 1, 13),
(2, 'mcq question 2', '1', '2', '3', '4', 2, 13),
(3, 'all tags mcq 2', 'op 1', 'op 2', 'op 3', 'op 4', 2, 13),
(4, 'no tags', 'op1', 'op2', 'op3', 'op4', 4, 13),
(5, 'quesion 1', '1', '23', '3', '4', 4, 13),
(6, 'geography', '1', '2', '3', '4', 1, 13),
(7, 'quion2', '1', '1', '1', '1', 1, 13),
(8, 'df', '1', '2', '2', '2', 1, 13),
(9, 'da', '1', '1', '1', '1', 1, 13),
(10, '1', '1', '1', '1', '1', 1, 13),
(11, '1', '1', '1', '1', '1', 1, 13),
(12, 'mcq Question', 'option 1', 'option 2', 'option 3', 'option 4', 2, 13),
(13, 'Is True = True', 'True', 'False', '', '', 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `q_id` int(11) NOT NULL,
  `q_type` varchar(20) NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`q_id`, `q_type`, `tag`) VALUES
(12, 'mcq', 'Geography'),
(12, 'mcq', 'Maths'),
(12, 'mcq', 'Physics'),
(12, 'mcq', 'History'),
(13, 'mcq', 'General_Science'),
(13, 'mcq', 'Literature'),
(13, 'mcq', 'PrevYearQuestion'),
(13, 'mcq', 'Reasoning'),
(13, 'mcq', 'Aptitude');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `description` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zipcode` char(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `biodata` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `city`, `state`, `zipcode`, `email`, `dob`, `biodata`, `password`, `user_type`, `age`) VALUES
(8, 'Lokesh', '', 'Chikkula', 'avp', 'Tel', '506349', 'lokeshchikkula2000@gmail.com', '2019-03-03', 'IIT kharagpur', 'Kfc@7890', 'user', 2),
(13, 'Lokesh', '', 'Chikkula', 'avp', 'Tel', '506349', 'lokeshchikkula2000@gmail.com', '2000-02-04', 'amdin', 'Kfc@7890', 'admin', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `descq`
--
ALTER TABLE `descq`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `mcq`
--
ALTER TABLE `mcq`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`description`,`time`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `descq`
--
ALTER TABLE `descq`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mcq`
--
ALTER TABLE `mcq`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

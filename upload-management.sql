-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
-- by Naseem Amjad (urdujini@gmail.com)
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 06:24 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upload-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `First_Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Last_Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Email` varchar(255) COLLATE utf8_bin NOT NULL,
  `Video_Type` varchar(255) COLLATE utf8_bin NOT NULL,
  `Video_Title` varchar(255) COLLATE utf8_bin NOT NULL,
  `Status` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `downloads`, `is_deleted`, `First_Name`, `Last_Name`, `Email`, `Video_Type`, `Video_Title`, `Status`) VALUES
(16, 'Beware_The_Cat.wmv', 656560, 0, 1, 'Naseem', 'Amjad', 'test@ok.com', 'Funny Video', 'CAT', 'Pending'),
(17, 'GP-Game-Intro.mp4', 19867465, 0, 0, 'John', 'Doe', 'test@ok.com', 'Teaching Video', 'Doc', 'Pending'),
(18, 'GP-BP-Check.mp4', 19855138, 0, 0, 'Mickey', 'Mouse', 'mick@ey.com', 'Teaching Video', 'BP', 'Pending'),
(19, 'GP-Game-Intro3.mp4', 8326304, 0, 0, 'Naseem Amjad', 'Khan', 'naseem@technologist.com', 'Introduction Video', 'Intro', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

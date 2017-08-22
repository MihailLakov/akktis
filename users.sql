-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 04:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `color` enum('white','black','green','blue','red','yellow') NOT NULL DEFAULT 'white'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `color`) VALUES
(1, 'Mihail', 'Lakov', 'white'),
(2, 'John', 'Smith', 'green'),
(3, 'John', 'Atanasov', 'red'),
(4, 'Ivan', 'Ivanov', 'yellow'),
(5, 'Elon', 'Musk', 'blue'),
(6, 'Peter', 'Ivanov', 'green'),
(7, 'Krasi', 'Stanev', 'red'),
(8, 'Kuncho', 'Petkov', 'white'),
(9, 'Denis', 'Atanasov', 'black'),
(10, 'Denis', 'Stanev', 'white'),
(11, 'Ivan', 'Draganov', 'blue'),
(12, 'Ivan', 'Stoyanov', 'green'),
(13, 'Mihail', 'Ivanov', 'yellow'),
(14, 'Denis', 'Draganov', 'white');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

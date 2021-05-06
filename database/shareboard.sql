-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 01:10 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shareboard`
--
CREATE DATABASE IF NOT EXISTS `shareboard` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shareboard`;

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `user_id`, `title`, `body`, `link`, `create_date`) VALUES
(1, 1, 'First Share', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec viverra augue. Donec et commodo nisl. Aliquam blandit scelerisque dolor, in aliquet diam maximus ut. Maecenas vel dictum purus. Aenean eu turpis lorem. Etiam a aliquam nunc, quis facilisis diam. Suspendisse lorem tortor, suscipit quis rutrum vitae, dignissim vitae tellus. Aliquam sit amet eros velit. Ut eu eros et sapien faucibus tincidunt eget eu augue. Vestibulum molestie non nisl ac lacinia. Vestibulum tellus nibh, mattis eget urna non, rutrum iaculis ligula.', 'http://google.com', '2021-05-04 00:13:20'),
(2, 1, 'Second Share', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec viverra augue. Donec et commodo nisl. Aliquam blandit scelerisque dolor, in aliquet diam maximus ut. Maecenas vel dictum purus. Aenean eu turpis lorem. Etiam a aliquam nunc, quis facilisis diam. Suspendisse lorem tortor, suscipit quis rutrum vitae, dignissim vitae tellus. Aliquam sit amet eros velit. Ut eu eros et sapien faucibus tincidunt eget eu augue. Vestibulum molestie non nisl ac lacinia. Vestibulum tellus nibh, mattis eget urna non, rutrum iaculis ligula.', 'http://facebook.com', '2021-05-04 00:13:20'),
(3, 1, 'Third Share', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec viverra augue. Donec et commodo nisl. Aliquam blandit scelerisque dolor, in aliquet diam maximus ut. Maecenas vel dictum purus. Aenean eu turpis lorem. Etiam a aliquam nunc, quis facilisis diam. Suspendisse lorem tortor, suscipit quis rutrum vitae, dignissim vitae tellus. Aliquam sit amet eros velit. Ut eu eros et sapien faucibus tincidunt eget eu augue. Vestibulum molestie non nisl ac lacinia. Vestibulum tellus nibh, mattis eget urna non, rutrum iaculis ligula.', 'http://something.com', '2021-05-05 15:05:36'),
(4, 1, 'Fourth Share', 'Lorem ipsum...', 'http://facebook.com', '2021-05-06 12:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `register_date`) VALUES
(1, 'Test User', 'test.user@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-05-05 15:32:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

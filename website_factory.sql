-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 12:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `username`, `profile_picture`, `review`) VALUES
(1, 'John Doe', 'review-1.jpg', 'Vestibulum pulvinar augue mauris, at cursus quam vehicula at. Maecenas id accumsan tortor. Nulla mattis sapien et justo elementum, sed porta purus varius. Suspendisse potenti. Cras porttitor condimentum massa, a porta tortor faucibus at. Proin nec est arc'),
(2, 'Michael Smilga', 'review-2.jpg', 'Integer congue felis tortor, quis tincidunt orci tristique vel. Mauris ullamcorper placerat arcu, sed porttitor odio facilisis nec. Morbi auctor blandit sem in pretium. Sed vel leo luctus, elementum augue efficitur, rhoncus nunc. Curabitur a.\r\n'),
(3, 'Robert Shaw', 'review-3.jpg', 'Fusce imperdiet in mi nec interdum. Nullam non metus sodales, molestie tortor scelerisque, bibendum enim. Ut egestas, enim ut ornare vehicula, dolor metus suscipit nisl, at dictum sapien eros eget dolor. Proin porttitor lacus eget risus congue aliquam. Pe'),
(4, 'Mark Felix', 'review-4.jpg', 'Donec eu aliquet leo, cursus semper velit. Quisque in mi vitae ligula lobortis pellentesque vel in ante. Donec viverra a nisl a blandit. Donec porta.'),
(5, 'Jack Stewie', 'review-5.jpg', 'Sed a porttitor magna. Duis aliquam felis risus, in ultrices mi malesuada eget. Nunc erat enim, maximus vitae lorem vitae, ultricies vulputate dui. Morbi fermentum arcu non nisi scelerisque, vitae pellentesque tortor gravida. Aliquam in.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `user_email`, `user_password`) VALUES
(3, 'Lukman', 'Rambe', 'Rambe', 'rambe@gmail.com', '$2y$10$Am1Au5PPP16yE2zAgqNIHOWbcxqknXjcdcePRk65e41A/dqvAWbsi'),
(4, 'Naga', 'Emas', 'Si Naga Emas', 'nagaemas@gmail.com', '$2y$10$Dfk8Jq6z.gO0gpcVrvw3aO3m9.rdRUmdx5QltuSDAGhwh2iy6eQlK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2023 at 12:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `annonces`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `superficie` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `client_id`, `title`, `price`, `category`, `type`, `superficie`, `address`, `postal_code`, `city`, `created_at`, `updated_at`) VALUES
(7, 2, 'Belle Maison', 45000000, 'Vente', 'Maison', 205, 'Jbl Kbir 45', '90060', 'Tanger', '2023-02-27 09:12:22', '2023-02-27 09:12:22'),
(8, 3, 'Joli appart en location', 3500, 'Location', 'Appartement', 65, 'Borgonne Résidence Anpha 56', '45000', 'Casablanca', '2023-02-27 09:38:58', '2023-02-27 12:13:17'),
(9, 3, 'Bureau dans une maison', 2500, 'Location', 'Bureau', 25, 'Agdal Rue des FARS', '70000', 'Rabat', '2023-02-27 09:40:57', '2023-02-27 09:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Ilyasse', 'ETTAMRI', 'ilyasse.ettamri@gmail.com', '26bfcf08a6fcd218ab36b474361b273b', '0661307265', '2023-02-27 00:36:14', '2023-02-27 00:36:14'),
(2, 'Amine', 'BKHIT', 'bkhit.amine@gmail.com', '38ad5ccc4e1904c3a784e1c025a068bf', '0612345678', '2023-02-27 09:11:42', '2023-02-27 09:11:42'),
(3, 'Ilyasse', 'ETTAMRI', 'ilyasse.ettamri@gmail.com', 'f336c2f0af85fd41bfd07883371fb5d9', '0612345679', '2023-02-27 09:38:05', '2023-02-27 09:38:05'),
(4, 'Amine', 'LAMCHATTAB', 'lamchattab.amine@gmail.com', 'd67c4dd34a45f346130a9d7b62b4686e', '0677853412', '2023-02-27 14:53:05', '2023-02-27 14:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `file_name` varchar(400) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `announcement_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `file_name`, `type`, `announcement_id`, `created_at`, `updated_at`) VALUES
(1, '63fbedaf07696.jpg', 'primary', 1, '2023-02-27 00:39:27', '2023-02-27 00:39:27'),
(2, '63fbedaf079f6.jpg', NULL, 1, '2023-02-27 00:39:27', '2023-02-27 00:39:27'),
(3, '63fbee132ab54.jpg', 'primary', 2, '2023-02-27 00:41:07', '2023-02-27 00:41:07'),
(4, '63fbee132ae41.jpg', NULL, 2, '2023-02-27 00:41:07', '2023-02-27 00:41:07'),
(5, '63fbefc17470d.jpg', 'primary', 3, '2023-02-27 00:48:17', '2023-02-27 00:48:17'),
(6, '63fbefc174943.jpg', NULL, 3, '2023-02-27 00:48:17', '2023-02-27 00:48:17'),
(11, '63fc65e6212d9.jpg', 'primary', 7, '2023-02-27 09:12:22', '2023-02-27 09:12:22'),
(12, '63fc65e621cfd.jpg', NULL, 7, '2023-02-27 09:12:22', '2023-02-27 09:12:22'),
(13, '63fc6c22e3a15.jpeg', NULL, 8, '2023-02-27 09:38:58', '2023-02-27 09:38:58'),
(14, '63fc6c22e3f97.jpeg', 'primary', 8, '2023-02-27 09:38:58', '2023-02-27 09:38:58'),
(15, '63fc6c99ddcb2.jpg', 'primary', 9, '2023-02-27 09:40:57', '2023-02-27 09:40:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `N__client` (`client_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `N__d_annonce` (`announcement_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

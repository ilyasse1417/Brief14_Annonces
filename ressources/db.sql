-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 03:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestatetwho`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

CREATE TABLE `annonce` (
  `annonce-id` int(11) NOT NULL,
  `Price` int(11) DEFAULT NULL,
  `Date_pub` date DEFAULT NULL,
  `Date_der_modif` date DEFAULT NULL,
  `category` varchar(50) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Adresse` varchar(50) DEFAULT NULL,
  `Code_Pos` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `superficie` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `annonce`
--

INSERT INTO `annonce` (`annonce-id`, `Price`, `Date_pub`, `Date_der_modif`, `category`, `city`, `Type`, `Adresse`, `Code_Pos`, `title`, `client_id`, `superficie`) VALUES
(1, 10, '2023-02-15', '2023-02-24', 'house', 'oujda', 'sale', 'mmmmm', 5555, 'hjkhjkhjkhjkhjkhjkhjk', 11, 0),
(2, 66, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 22, 'kkkkkkk', 5, 0),
(3, 66, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 99, 'kkkkkkk', 5, 0),
(4, 3635, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 22, 'kkkkkkk', 5, 0),
(5, 2, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 22, 'kkkkkkk', 5, 0),
(6, 77, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 22, 'kkkkkkk', 5, 0),
(7, 55, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 22, 'kkkkkkk', 5, 0),
(8, 66, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 22, 'kkkkkkk', 5, 0),
(9, 66, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 99, 'kkkkkkk', 2, 0),
(10, 66, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 99, 'kkkkkkk', 2, 0),
(11, 66, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 99, 'kkkkkkk', 2, 0),
(12, 66, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 99, 'kkkkkkk', 2, 0),
(13, 66, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 99, 'kkkkkkk', 2, 0),
(14, 66, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 99, 'kkkkkkk', 2, 0),
(15, 66, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 99, 'kkkkkkk', 2, 0),
(16, 66, '2023-02-15', '2023-02-24', 'kkkkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 99, 'kkkkkkk', 2, 0),
(17, 12, '2023-02-01', '2023-02-24', 'kkkklllkkkkk', 'kkkk', 'kkkk', 'kkkkk', 6, 'kkkkkkk', 4, 0),
(18, 13, '2023-02-14', '2023-02-24', 'kkkllllkkkkkk', 'kkkk', 'kkkk', 'kkkkk', 788, 'kkkkkkk', 4, 0),
(19, 14, '2023-02-19', '2023-02-24', 'lll', 'kkkk', 'kkkk', 'kkkkk', 2, 'kkkkkkk', 4, 0),
(20, 999, '2023-02-15', '2023-02-20', 'mmm', 'mmm', 'mmm', 'mmm', 888, 'mmm', 1, 999);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Mot_de_passe` varchar(255) DEFAULT NULL,
  `phoneNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `firstname`, `lastname`, `Email`, `Mot_de_passe`, `phoneNumber`) VALUES
(1, 'amine', 'zine', 'amine.zine@gmail.com', 'motdepasslolxd', 685858746),
(2, 'narjiss', 'bsra', 'narjiss.zina@gmail.com', 'narjiss.zina@gmail.com', 855856558),
(3, 'Blake', 'Maynard', 'qogoqu@mailinator.com', 'Pa$$w0rd!', 1),
(4, 'Emi', 'Mullins', 'fakucab@mailinator.com', 'Pa$$w0rd!', 1),
(5, 'Emi', 'Mullins', 'fakucab@mailinator.com', 'Pa$$w0rd!', 1),
(6, 'Jamalia', 'Knapp', 'juvovadoco@mailinator.com', 'Pa$$w0rd!', 1),
(7, 'Shelly', 'Macias', 'gymoxej@mailinator.com', 'Pa$$w0rd!', 1),
(8, 'Genevieve', 'Noble', 'kaxikudude@mailinator.com', 'Pa$$w0rd!', 1),
(9, 'Alec', 'Leonard', 'ruzevavu@mailinator.com', 'Pa$$w0rd!', 1),
(10, 'Danielle', 'Nunez', 'bytulujom@mailinator.com', 'Pa$$w0rd!', 1),
(11, 'Adam', 'Bass', 'nytynujely@mailinator.com', 'Pa$$w0rd!', 1),
(12, 'Michael', 'Sheppard', 'varusadili@mailinator.com', 'Pa$$w0rd!', 1),
(13, 'Hilel', 'Kidd', 'farojax@mailinator.com', 'Pa$$w0rd!', 1),
(14, 'Ina', 'Guy', 'peqygud@mailinator.com', 'Pa$$w0rd!', 1),
(15, 'Paki', 'Armstrong', 'cecaqyc@mailinator.com', 'Pa$$w0rd!', 1),
(16, 'Faith', 'Franks', 'runivisu@mailinator.com', 'Pa$$w0rd!', 1),
(17, 'Tanisha', 'Haley', 'biqejyg@mailinator.com', 'Pa$$w0rd!', 1),
(18, 'Aiko', 'Michael', 'fazuw@mailinator.com', 'Pa$$w0rd!', 1),
(19, 'Destiny', 'Munoz', 'gybapac@mailinator.com', 'Pa$$w0rd!', 1),
(20, 'Lars', 'Davenport', 'xacyf@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1),
(21, 'Lars', 'Davenport', 'x@x.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1),
(22, 'ilyass', 'tamri', 'tamri@gmail.com', '7432564c62bcf819470820fb0df3d871', 656557688),
(23, 'Tucker', 'Jenkins', 'wivav@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1),
(24, 'Zelenia', 'Wise', 'cosywi@mailinator.com', 'e4f528ae4a9051dd6335a3218003f0eb', 1),
(25, 'Buffy', 'Obrien', 'puku@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1),
(26, 'AMINE', 'LAMCHATAB', 'y@y.y', 'a0499fc0ad3aaeefd2d8458a8e1d279a', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `galerie`
--

CREATE TABLE `galerie` (
  `ID_Image` int(11) NOT NULL,
  `Img_Url` varchar(400) DEFAULT NULL,
  `Img_type` varchar(50) DEFAULT NULL,
  `announceid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galerie`
--

INSERT INTO `galerie` (`ID_Image`, `Img_Url`, `Img_type`, `announceid`) VALUES
(3, 'https://images.unsplash.com/photo-1633109956509-5303bda0cd7c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80', 'principale', 16),
(4, 'https://images.unsplash.com/photo-1617850687395-620757feb1f3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80', 'principale', 5),
(5, 'https://images.unsplash.com/photo-1633109956509-5303bda0cd7c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80', 'secondaire', 16),
(6, 'https://images.unsplash.com/photo-1633109956509-5303bda0cd7c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80', 'secondaire', 16),
(7, 'https://images.unsplash.com/photo-1633109956509-5303bda0cd7c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80', 'secondaire', 16),
(8, 'https://images.unsplash.com/photo-1633109956509-5303bda0cd7c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80', 'secondaire', 16),
(9, 'https://images.unsplash.com/photo-1622015663319-e97e697503ee?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1677&q=80', 'principale', 18),
(10, 'https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8&w=1000&q=80', 'principale', 20),
(11, 'kkkkkk', 'principale', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`annonce-id`),
  ADD KEY `N__client` (`client_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`ID_Image`),
  ADD KEY `N__d_annonce` (`announceid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `annonce-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `ID_Image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `announceCreatedBYuser` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `galerie`
--
ALTER TABLE `galerie`
  ADD CONSTRAINT `galerieofannounce` FOREIGN KEY (`announceid`) REFERENCES `annonce` (`annonce-id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

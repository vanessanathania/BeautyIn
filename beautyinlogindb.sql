-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 12:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautyinlogindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `id` int(8) NOT NULL,
  `to_user` varchar(200) NOT NULL,
  `from_user` varchar(200) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`id`, `to_user`, `from_user`, `chat_message`, `timestamp`) VALUES
(12, 'JasmineRusell@gmail.com', 'a@a.com', 'Hai saya ingin booking', '2020-05-29 13:02:39'),
(13, 'JasmineRusell@gmail.com', 'Vaness@gmail.com', 'Halo Jasmine saya mau pesan', '2020-06-22 14:15:27'),
(14, 'Vaness@gmail.com', 'JasmineRusell@gmail.com', 'Ok hub saya aja di wa ya ', '2020-06-22 14:17:21'),
(15, 'JasmineRusell@gmail.com', 'Vaness@gmail.com', 'ok bisa', '2020-06-22 14:17:27'),
(16, 'CamassiaDorine@gmail.com', 'Vaness@gmail.com', 'Halo saya mau pesan', '2020-06-23 09:46:54'),
(17, 'Vaness@gmail.com', 'CamassiaDorine@gmail.com', 'Ya bisa hub saya ', '2020-06-23 09:47:52'),
(18, 'CamassiaDorine@gmail.com', 'Vaness@gmail.com', 'ok makasih', '2020-06-23 09:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `ID` varchar(5) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `City` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`ID`, `Name`, `City`) VALUES
('BY001', 'Briza Luzule', 'Tangerang'),
('BY002', 'Gaure Roseau', 'Jakarta'),
('BY003', 'Mauve Yucca', 'Depok'),
('BY004', 'Acaena Bambou', 'Bogor'),
('BY005', 'Camassia Dorine', 'Bekasi'),
('BY006', 'Jasmine Rusell', 'Jakarta'),
('BY007', 'Elyme Freesia', 'Bogor'),
('BY008', 'Hosta Ismene', 'Depok'),
('BY009', 'Jacinthe Niveole', 'Tangerang'),
('BY010', 'Prunelle Souchet', 'Bekasi'),
('BY011', 'Tritome Veratre', 'Jakarta'),
('BY012', 'Muscari Polystic', 'Bogor'),
('BY013', 'Galane Bouteloua', 'Depok'),
('BY014', 'Cotula Erodium', 'Tangerang'),
('BY015', 'Niveole Rue', 'Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `mua`
--

CREATE TABLE `mua` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mua`
--

INSERT INTO `mua` (`name`, `email`, `password`, `image`) VALUES
('Acaena Bambou', 'AcaenaBambou@gmail.com', '1', ''),
('Briza Luzule', 'BrizaLuzule@gmail.com', '1', ''),
('Camassia Dorine', 'CamassiaDorine@gmail.com', '1', ''),
('Cotula Erodium', 'CotulaErodium@gmail.com', '1', ''),
('Elyme Freesia', 'ElymeFreesia@gmail.com', '1', ''),
('Galane Bouteloua', 'GalaneBouteloua@gmail.com', '1', ''),
('Gaure Roseau', 'GaureRoseau@gmail.com', '1', ''),
('Hosta Ismene', 'HostaIsmene@gmail.com', '1', ''),
('Jacinthe Niveole', 'JacintheNiveole@gmail.com', '1', ''),
('Jasmine Rusell', 'JasmineRusell@gmail.com', '1', ''),
('Mauve Yucca', 'MauveYucca@gmail.com', '1', ''),
('Muscari Polystic', 'MuscariPolystic@gmail.com', '1', ''),
('Niveole Rue', 'NiveoleRue@gmail.com', '1', ''),
('Prunelle Souchet', 'PrunelleSouchet@gmail.com', '1', ''),
('Tritome Veratre', 'TritomeVeratre@gmail.com', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `bio` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `image`, `bio`) VALUES
('Vanessa', 'Vaness@gmail.com', '1', 'images/userVaness@gmail.com.jpg', 'Saya suka makeup');

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

CREATE TABLE `user_reviews` (
  `user_email` varchar(200) NOT NULL,
  `mua_email` varchar(200) NOT NULL,
  `rating` int(5) DEFAULT NULL,
  `review` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `mua`
--
ALTER TABLE `mua`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD PRIMARY KEY (`user_email`,`mua_email`),
  ADD KEY `mua_email` (`mua_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD CONSTRAINT `user_reviews_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `user` (`email`),
  ADD CONSTRAINT `user_reviews_ibfk_2` FOREIGN KEY (`mua_email`) REFERENCES `mua` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 18, 2022 at 01:47 PM
-- Server version: 8.0.25
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upstream`
--

-- --------------------------------------------------------

--
-- Table structure for table `acting`
--

DROP TABLE IF EXISTS `acting`;
CREATE TABLE IF NOT EXISTS `acting` (
  `id_actor` int NOT NULL,
  `id_movie` int NOT NULL,
  PRIMARY KEY (`id_actor`,`id_movie`),
  KEY `id_actor` (`id_actor`,`id_movie`),
  KEY `id_movie` (`id_movie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `acting`
--

INSERT INTO `acting` (`id_actor`, `id_movie`) VALUES
(2, 20),
(4, 20),
(6, 20),
(9, 20),
(6, 21),
(8, 21),
(9, 21),
(12, 21),
(15, 21);

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

DROP TABLE IF EXISTS `actor`;
CREATE TABLE IF NOT EXISTS `actor` (
  `id_actor` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_actor`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`id_actor`, `first_name`, `last_name`, `last_update`) VALUES
(1, 'Leonardo ', 'DiCaprio', '2022-04-17 21:32:55'),
(2, 'Johnny', 'Depp', '2022-04-17 21:39:06'),
(3, 'Margot', 'Robbie', '2022-04-17 21:39:06'),
(4, 'Tom', 'Cruise', '2022-04-17 21:39:06'),
(5, 'Jonah', 'Hill', '2022-04-17 21:39:06'),
(6, 'Tom', 'Hardy', '2022-04-17 21:39:06'),
(7, 'Angelina', 'Jolie', '2022-04-17 21:39:06'),
(8, 'Jennifer', 'Aniston', '2022-04-17 21:39:06'),
(9, 'Salma', 'Hayek', '2022-04-17 21:39:06'),
(10, 'Scarlett', 'Hohansson', '2022-04-17 21:39:06'),
(11, 'Ryan', 'Reynolds', '2022-04-17 21:39:06'),
(12, 'Elizabeth', 'Olsen', '2022-04-17 21:39:06'),
(13, 'Robert', 'Downey Jr', '2022-04-17 21:39:06'),
(14, 'Chris', 'Hemsworth', '2022-04-17 21:39:06'),
(15, 'Andrew ', 'Garfield', '2022-04-17 22:13:21'),
(16, 'Benedict ', 'Cumberbatch', '2022-04-17 22:13:21'),
(17, 'Jamie ', 'Foxx', '2022-04-17 22:13:21'),
(18, 'Al ', 'Pacino', '2022-04-17 22:13:21'),
(19, 'Robert ', 'De Niro', '2022-04-17 22:13:21'),
(20, 'Joe ', 'Pesci', '2022-04-17 22:13:21'),
(21, 'Adam ', 'Driver', '2022-04-17 22:13:21'),
(22, 'Jack ', 'Nicholson', '2022-04-17 22:13:21'),
(23, 'Andy ', 'Garcia', '2022-04-17 22:13:21'),
(24, 'Denzel ', 'Washington', '2022-04-17 22:13:21'),
(25, 'John David', 'Washington', '2022-04-17 22:13:21'),
(26, 'Will ', 'Smith', '2022-04-17 22:13:21'),
(27, 'Samuel ', 'L. Jackson', '2022-04-17 22:13:21'),
(28, 'Tyler ', 'Perry', '2022-04-17 22:13:21'),
(29, 'Tom ', 'Hanks', '2022-04-17 22:13:21'),
(30, 'Bradley ', 'Cooper', '2022-04-17 22:13:21'),
(31, 'Ethan ', 'Hawke', '2022-04-17 22:13:21'),
(32, 'Jessica ', 'Chastain', '2022-04-17 22:13:21'),
(33, 'Idris ', 'Elba', '2022-04-17 22:13:21'),
(34, 'Christoph ', 'Waltz', '2022-04-17 22:13:21'),
(35, 'Emma ', 'Stone', '2022-04-17 22:14:29'),
(36, 'Eddie ', 'Murphy', '2022-04-17 22:14:29'),
(37, 'Sylvester ', 'Stallone', '2022-04-17 22:14:29'),
(38, 'Arnold ', 'Schwarzenegger', '2022-04-17 22:14:29'),
(39, 'Jason ', 'Statham', '2022-04-17 22:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int NOT NULL,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name`) VALUES
(1, 'Action'),
(2, 'Crime'),
(3, 'Comedy'),
(4, 'Adventures'),
(5, 'Horror'),
(6, 'Drama'),
(7, 'Fantasia'),
(8, 'Fiction'),
(9, 'Romantic');

-- --------------------------------------------------------

--
-- Table structure for table `contain`
--

DROP TABLE IF EXISTS `contain`;
CREATE TABLE IF NOT EXISTS `contain` (
  `id_movie` int NOT NULL,
  `id_category` int NOT NULL,
  KEY `id_movie` (`id_movie`),
  KEY `id_category` (`id_category`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contain`
--

INSERT INTO `contain` (`id_movie`, `id_category`) VALUES
(15, 1),
(16, 2),
(17, 5),
(18, 4),
(19, 3),
(19, 4),
(20, 1),
(20, 2),
(20, 3),
(20, 4),
(20, 6),
(21, 2),
(21, 4);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `id_language` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id_language`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id_language`, `name`) VALUES
(1, 'Arabic'),
(2, 'English'),
(3, 'Spanish'),
(4, 'French'),
(5, 'Italian'),
(6, 'Japonese'),
(7, 'Chinese'),
(8, 'German');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `id_movie` int NOT NULL AUTO_INCREMENT,
  `title` varchar(254) NOT NULL,
  `date` int NOT NULL,
  `description` text NOT NULL,
  `language` int NOT NULL,
  `link_trailer` text NOT NULL,
  `movie_file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `duration` float NOT NULL,
  `cover` text NOT NULL,
  `director` text NOT NULL,
  `id_user` int NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_movie`),
  KEY `id_user` (`id_user`),
  KEY `language` (`language`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id_movie`, `title`, `date`, `description`, `language`, `link_trailer`, `movie_file`, `duration`, `cover`, `director`, `id_user`, `last_update`) VALUES
(15, 'inception', 2000, 'test bach nchouf languagetest bach nchouf languagetest bach nchouf languagetest bach nchouf language', 1, 'https://www.google.com/', '../uploads/movie/test_bach_nchouf_language_1704221650211093.mp4', 0, '../uploads/cover/test_bach_nchouf_language_1704221650211093.jpg', '', 1, '2022-04-17 20:30:09'),
(16, 'Star Wars', 2013, 'kuyjgukhijkl', 2, 'https://www.google.com/', '../uploads/movie/yow_test_id_1704221650211486.mp4', 0, '../uploads/cover/yow_test_id_1704221650211486.jpg', '', 9, '2022-04-17 20:30:09'),
(17, 'Avengers', 2001, 'rtdygkuijmok;lùm:', 1, 'https://www.google.com/', '../uploads/movie/rdytfugihljo_1704221650226482.mp4', 0, '../uploads/cover/rdytfugihljo_1704221650226482.jpg', '', 1, '2022-04-17 20:30:09'),
(18, 'Inception', 2014, 'bbbbbbbbbbbbbbbb', 3, 'https://www.google.com/', '../uploads/movie/aaaaaaaaaaaaaaaa_1704221650226985.mp4', 16.55, '../uploads/cover/aaaaaaaaaaaaaaaa_1704221650226985.jpg', '', 1, '2022-04-17 20:30:09'),
(19, 'Avengers 1', 2012, 'aaaaaaaaaaaaaaaaaaaaaaaa', 4, 'https://www.google.com/', '../uploads/movie/1aaaaaaaaaaaaaaaaaa_1704221650227041.mp4', 449.375, '../uploads/cover/1aaaaaaaaaaaaaaaaaa_1704221650227041.jpg', '', 1, '2022-04-17 20:30:09'),
(20, 'Star Wars 1', 2022, 'ktyjguhujyguhuoylik', 2, 'https://www.google.com/', '../uploads/movie/spiderman_1704221650231843.mp4', 204.9, '../uploads/cover/spiderman_1704221650231843.jpg', 'abdelghafour aouad', 1, '2022-04-17 21:44:03'),
(21, 'Godzilla', 2010, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaa', 8, 'https://www.google.com/', '../uploads/movie/test_dyal_actor_1804221650240018.mp4', 449.375, '../uploads/cover/test_dyal_actor_1804221650240018.jpg', 'AOUAD abdelghafour', 1, '2022-04-18 00:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `picture` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `admin` tinyint(1) DEFAULT NULL,
  `super` tinyint(1) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `picture`, `admin`, `super`, `last_update`) VALUES
(1, 'abdelghafour', 'miso.abdo@gmail.com', '$2y$10$N0uycKS0VmvBNdvVlh9GU.Wt2S6PsOIh29fHwVYSmAkIafIDNdJzu', 'aouad_abdo.jpg', 1, 1, '2022-04-17 20:29:29'),
(9, 'alooo', 'test@gmail.com', '$2y$10$PwFfUUYAjxzwKyi10SKj0uElSOSHqdzWrzHU3Vbpu0YRh15Mif2Xu', 'tttt_1704221650208084.png', NULL, NULL, '2022-04-17 20:29:29');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acting`
--
ALTER TABLE `acting`
  ADD CONSTRAINT `acting_ibfk_1` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id_actor`),
  ADD CONSTRAINT `acting_ibfk_2` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id_movie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contain`
--
ALTER TABLE `contain`
  ADD CONSTRAINT `contain_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id_movie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contain_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`language`) REFERENCES `language` (`id_language`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

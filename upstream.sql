-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 19 avr. 2022 à 05:45
-- Version du serveur :  8.0.25
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `upstream`
--

-- --------------------------------------------------------

--
-- Structure de la table `acting`
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
-- Déchargement des données de la table `acting`
--

INSERT INTO `acting` (`id_actor`, `id_movie`) VALUES
(1, 15),
(6, 15),
(44, 15),
(45, 15),
(22, 16),
(13, 17),
(14, 17),
(30, 17),
(47, 17),
(49, 17),
(50, 17),
(51, 17),
(52, 17),
(40, 19),
(41, 19),
(42, 19),
(43, 19),
(42, 20),
(53, 21),
(54, 21),
(55, 21),
(56, 21),
(57, 21),
(58, 22),
(59, 22),
(60, 22);

-- --------------------------------------------------------

--
-- Structure de la table `actor`
--

DROP TABLE IF EXISTS `actor`;
CREATE TABLE IF NOT EXISTS `actor` (
  `id_actor` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_actor`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `actor`
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
(39, 'Jason ', 'Statham', '2022-04-17 22:14:29'),
(40, 'Timothée', 'Chalamet', '2022-04-19 04:53:26'),
(41, 'Zendaya', '', '2022-04-19 04:53:26'),
(42, 'Oscar', 'Isaac', '2022-04-19 04:54:29'),
(43, 'Jason', 'Momoa', '2022-04-19 04:54:29'),
(44, 'Joseph', 'Gordon-Levitt', '2022-04-19 04:58:36'),
(45, 'Cillian', 'Murphy', '2022-04-19 04:58:36'),
(46, 'Bradley', 'Cooper', '2022-04-19 05:04:00'),
(47, 'Chris', 'Evans', '2022-04-19 05:04:00'),
(48, 'Dave', 'Bautista', '2022-04-19 05:04:00'),
(49, 'Jeremy', 'Renner', '2022-04-19 05:04:00'),
(50, 'Mark', 'Ruffalo', '2022-04-19 05:04:00'),
(51, 'Brie', 'Larson', '2022-04-19 05:04:00'),
(52, 'Tom', 'Holland', '2022-04-19 05:04:00'),
(53, 'Millie', 'Bobby Brown', '2022-04-19 05:16:56'),
(54, 'Vera', 'Farmiga', '2022-04-19 05:16:56'),
(55, 'Kyle', 'Chandler', '2022-04-19 05:16:56'),
(56, 'O\'Shea', 'Jackson Jr.', '2022-04-19 05:16:56'),
(57, 'Aisha', 'Hinds', '2022-04-19 05:16:56'),
(58, 'Daniel', 'Kaluuya', '2022-04-19 05:25:42'),
(59, 'Allison', 'Williams', '2022-04-19 05:25:42'),
(60, 'Catherine', 'Keener', '2022-04-19 05:25:42');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int NOT NULL,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
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
(9, 'Romantic'),
(10, 'family'),
(11, 'Thriller');

-- --------------------------------------------------------

--
-- Structure de la table `contain`
--

DROP TABLE IF EXISTS `contain`;
CREATE TABLE IF NOT EXISTS `contain` (
  `id_movie` int NOT NULL,
  `id_category` int NOT NULL,
  KEY `id_movie` (`id_movie`),
  KEY `id_category` (`id_category`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contain`
--

INSERT INTO `contain` (`id_movie`, `id_category`) VALUES
(19, 1),
(19, 4),
(19, 7),
(19, 8),
(15, 1),
(15, 4),
(15, 8),
(16, 7),
(16, 8),
(17, 1),
(17, 8),
(20, 1),
(21, 1),
(21, 8),
(22, 2),
(22, 5),
(22, 11);

-- --------------------------------------------------------

--
-- Structure de la table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `id_language` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id_language`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `language`
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
-- Structure de la table `movie`
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `movie`
--

INSERT INTO `movie` (`id_movie`, `title`, `date`, `description`, `language`, `link_trailer`, `movie_file`, `duration`, `cover`, `director`, `id_user`, `last_update`) VALUES
(15, 'inception', 2010, 'Cobb steals information from his targets by entering their dreams. Saito offers to wipe clean Cobb\'s criminal history as payment for performing an inception on his sick competitor\'s son.', 1, 'https://www.youtube.com/watch?v=YoHD9XEInc0', '../uploads/movie/test_bach_nchouf_language_1704221650211093.mp4', 10000, '../uploads/cover/test_bach_nchouf_language_1704221650211093.jpg', 'Christopher Nolan', 1, '2022-04-17 20:30:09'),
(16, 'Star Wars', 2019, 'The revival of Emperor Palpatine resurrects the battle between the Resistance and the First Order while the Jedi\'s legendary conflict with the Sith Lord comes to a head.', 2, 'https://www.youtube.com/watch?v=8Qn_spdM5Zg', '../uploads/movie/yow_test_id_1704221650211486.mp4', 900, '../uploads/cover/yow_test_id_1704221650211486.jpg', 'Irvin Kershner', 1, '2022-04-17 20:30:09'),
(17, 'Avengers: Endgame', 2019, 'After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.', 2, 'https://www.youtube.com/watch?v=TcMBFSGVi1c', '../uploads/movie/rdytfugihljo_1704221650226482.mp4', 807, '../uploads/cover/rdytfugihljo_1704221650226482.jpg', 'Anthony Russo, Joe Russo', 1, '2022-04-17 20:30:09'),
(19, 'Dune', 2021, 'Paul Atreides arrives on Arrakis after his father accepts the stewardship of the dangerous planet. However, chaos ensues after a betrayal as forces clash to control melange, a precious resource.', 2, 'https://www.youtube.com/watch?v=8g18jFHCLXk', '../uploads/movie/1aaaaaaaaaaaaaaaaaa_1704221650227041.mp4', 449.375, '../uploads/cover/1aaaaaaaaaaaaaaaaaa_1704221650227041.jpg', 'Denis Villeneuve', 1, '2022-04-17 20:30:09'),
(20, 'spider-man into the spider-verse', 2018, 'After gaining superpowers from a spider bite, Miles Morales protects the city as Spider-Man. Soon, he meets alternate versions of himself and gets embroiled in an epic battle to save the multiverse.', 2, 'https://www.youtube.com/watch?v=g4Hbz2jLxvQ', '../uploads/movie/spiderman_1704221650231843.mp4', 204.9, '../uploads/cover/spiderman_1704221650231843.jpg', 'Peter Ramsey, Bob Persichetti, Rodney Rothman', 1, '2022-04-17 21:44:03'),
(21, 'Godzilla: King of the Monsters', 2019, 'A legendary monster named King Ghidorah awakens Rodan, as well as other titans, to destroy the world. To defeat them, the crypto-zoological organisation Monarch must rely on the almighty Godzilla.', 2, 'https://www.youtube.com/watch?v=QFxN2oDKk0E', '../uploads/movie/test_dyal_actor_1804221650240018.mp4', 449.375, '../uploads/cover/test_dyal_actor_1804221650240018.jpg', 'Michael Dougherty', 1, '2022-04-18 00:00:18'),
(22, 'Get out', 2017, 'Chris, an African-American man, decides to visit his Caucasian girlfriend\'s parents during a weekend getaway. Although they seem normal at first, he is not prepared to experience the horrors ahead.', 2, 'https://www.youtube.com/watch?v=DzfpyUB60YY', '../uploads/movie/Get_out_1904221650331021.mp4', 449.375, '../uploads/cover/Get_out_1904221650331021.jpg', 'Jordan Peele', 1, '2022-04-19 01:17:01');

-- --------------------------------------------------------

--
-- Structure de la table `my_list`
--

DROP TABLE IF EXISTS `my_list`;
CREATE TABLE IF NOT EXISTS `my_list` (
  `id_list` int NOT NULL AUTO_INCREMENT,
  `id_movie` int NOT NULL,
  `id_user` int NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_list`),
  KEY `id_movie` (`id_movie`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
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
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `picture`, `admin`, `super`, `last_update`) VALUES
(1, 'abdelghafour', 'miso.abdo@gmail.com', '$2y$10$N0uycKS0VmvBNdvVlh9GU.Wt2S6PsOIh29fHwVYSmAkIafIDNdJzu', 'aouad_abdo.jpg', 1, 1, '2022-04-17 20:29:29'),
(9, 'alooo', 'test@gmail.com', '$2y$10$PwFfUUYAjxzwKyi10SKj0uElSOSHqdzWrzHU3Vbpu0YRh15Mif2Xu', 'tttt_1704221650208084.png', NULL, NULL, '2022-04-17 20:29:29');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `acting`
--
ALTER TABLE `acting`
  ADD CONSTRAINT `acting_ibfk_1` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id_actor`),
  ADD CONSTRAINT `acting_ibfk_2` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id_movie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `contain`
--
ALTER TABLE `contain`
  ADD CONSTRAINT `contain_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id_movie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contain_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`language`) REFERENCES `language` (`id_language`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `my_list`
--
ALTER TABLE `my_list`
  ADD CONSTRAINT `my_list_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id_movie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `my_list_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

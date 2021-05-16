-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 16 mai 2021 à 11:41
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `meetic`
--

-- --------------------------------------------------------

--
-- Structure de la table `ed_interest`
--

DROP TABLE IF EXISTS `ed_interest`;
CREATE TABLE IF NOT EXISTS `ed_interest` (
  `interest_id` int(10) NOT NULL AUTO_INCREMENT,
  `interest_name` varchar(50) NOT NULL,
  `interest_user` int(10) NOT NULL,
  PRIMARY KEY (`interest_id`),
  KEY `interest_user` (`interest_user`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ed_interest`
--

INSERT INTO `ed_interest` (`interest_id`, `interest_name`, `interest_user`) VALUES
(26, 'cinéma', 21),
(27, 'sport', 21),
(28, 'cinéma', 22),
(29, 'sport', 22),
(30, 'jeu video', 22),
(31, 'tourisme', 22);

-- --------------------------------------------------------

--
-- Structure de la table `ed_message`
--

DROP TABLE IF EXISTS `ed_message`;
CREATE TABLE IF NOT EXISTS `ed_message` (
  `message_id` int(10) NOT NULL AUTO_INCREMENT,
  `message_sender` int(10) NOT NULL,
  `message_receiver` int(10) NOT NULL,
  `message_date` date NOT NULL,
  `message_text` varchar(5000) NOT NULL,
  PRIMARY KEY (`message_id`),
  KEY `message_sender` (`message_sender`),
  KEY `message_receiver` (`message_receiver`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ed_picture`
--

DROP TABLE IF EXISTS `ed_picture`;
CREATE TABLE IF NOT EXISTS `ed_picture` (
  `picture_id` int(10) NOT NULL AUTO_INCREMENT,
  `picture_name` varchar(255) NOT NULL,
  `picture_profile` tinyint(1) NOT NULL,
  `picture_user` int(11) NOT NULL,
  PRIMARY KEY (`picture_id`),
  KEY `picture_user` (`picture_user`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ed_picture`
--

INSERT INTO `ed_picture` (`picture_id`, `picture_name`, `picture_profile`, `picture_user`) VALUES
(11, '21.jpg', 1, 21),
(12, '22.jpg', 1, 22);

-- --------------------------------------------------------

--
-- Structure de la table `ed_user`
--

DROP TABLE IF EXISTS `ed_user`;
CREATE TABLE IF NOT EXISTS `ed_user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_age` int(10) NOT NULL,
  `user_position` varchar(255) NOT NULL,
  `user_bio` varchar(255) NOT NULL,
  `user_gender` tinyint(1) NOT NULL,
  `user_sexuality` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_mail` (`user_mail`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ed_user`
--

INSERT INTO `ed_user` (`user_id`, `user_firstname`, `user_lastname`, `user_mail`, `user_password`, `user_age`, `user_position`, `user_bio`, `user_gender`, `user_sexuality`) VALUES
(21, 'Armando', 'Carter', 'armando.carter@exemple.com', '$2y$10$Yy5N4BmT9RtgNF6fszkXQefFXav0Oc5uVGTIaN11D1qj7UEBfqRqO', 32, '6303 Spring St', 'Moi', 1, 0),
(22, 'Wesley', 'James', 'wesley.james@example.com', '$2y$10$S/70XGWuAw5ZbHIbE0ctquI2YjQvGRWhapt2tF2B9YiFMuN.WddVu', 31, '7995 Frances Ct', 'bio', 1, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ed_interest`
--
ALTER TABLE `ed_interest`
  ADD CONSTRAINT `ed_interest_ibfk_1` FOREIGN KEY (`interest_user`) REFERENCES `ed_user` (`user_id`);

--
-- Contraintes pour la table `ed_message`
--
ALTER TABLE `ed_message`
  ADD CONSTRAINT `ed_message_ibfk_1` FOREIGN KEY (`message_receiver`) REFERENCES `ed_user` (`user_id`),
  ADD CONSTRAINT `ed_message_ibfk_2` FOREIGN KEY (`message_sender`) REFERENCES `ed_user` (`user_id`);

--
-- Contraintes pour la table `ed_picture`
--
ALTER TABLE `ed_picture`
  ADD CONSTRAINT `ed_picture_ibfk_1` FOREIGN KEY (`picture_user`) REFERENCES `ed_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

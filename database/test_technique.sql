-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 22 juil. 2022 à 10:43
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test_technique`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `message_sujet` varchar(10000) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_message`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_message`, `message_sujet`, `id_sujet`, `date`) VALUES
(1, '1er message du sujet 1', 1, '2022-07-21 14:17:02'),
(2, '2ème message du sujet 1', 1, '2022-07-21 14:17:12'),
(3, '1er message du sujet 2', 2, '2022-07-21 14:17:02'),
(4, '2ème message du sujet 2', 2, '2022-07-21 14:17:02'),
(6, 'ajout d&#039;un nouveau message', 1, '2022-07-21 15:55:41'),
(7, '1er message du sujet 3', 13, '2022-07-22 09:31:21'),
(8, '2ème message du sujet 3', 13, '2022-07-22 09:35:41'),
(9, '3ème message du sujet 3', 13, '2022-07-22 09:41:43'),
(10, '4ème message du sujet 3', 13, '2022-07-22 09:45:57'),
(21, '1er message du sujet 5', 15, '2022-07-22 10:08:49'),
(20, '1er message du sujet 4', 14, '2022-07-22 10:01:33');

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

DROP TABLE IF EXISTS `sujet`;
CREATE TABLE IF NOT EXISTS `sujet` (
  `id_sujet` int(11) NOT NULL AUTO_INCREMENT,
  `titre_sujet` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_sujet`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sujet`
--

INSERT INTO `sujet` (`id_sujet`, `titre_sujet`) VALUES
(1, 'sujet 1'),
(2, 'sujet 2'),
(15, 'sujet 5'),
(14, 'sujet 4'),
(13, 'sujet 3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

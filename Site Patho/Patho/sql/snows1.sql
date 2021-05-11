-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 15 fév. 2021 à 10:50
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `snows_travail`
--

-- --------------------------------------------------------

--
-- Structure de la table `snows`
--

DROP TABLE IF EXISTS `snows`;
CREATE TABLE IF NOT EXISTS `snows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(4) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `snowLength` int(4) UNSIGNED NOT NULL,
  `qtyAvailable` smallint(6) NOT NULL DEFAULT '0',
  `description` varchar(200) NOT NULL DEFAULT '0',
  `dailyPrice` float UNSIGNED NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `active` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `snow_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `snows`
--

INSERT INTO `snows` (`id`, `code`, `brand`, `model`, `snowLength`, `qtyAvailable`, `description`, `dailyPrice`, `photo`, `active`) VALUES
(1, 'B101', 'Burton', 'Custom', 160, 22, 'La board la plus fiable de tous les temps, la solution snowboard pour tous les terrains. (Homme)', 29, 'view/content/images/B101_small.jpg', 1),
(2, 'B126', 'Burton', 'Free Thinker', 165, 2, '?largissez votre vision gr?ce son interpr?tation du ride tout terrain dynamique sur la poudreuse. (Homme)', 45, 'view/content/images/B126_small.jpg', 1),
(3, 'B327', 'Burton', 'Day Trader', 155, 6, 'Flottabilit? sans effort et un contr?le qui renforce la confiance en soi. (Femme)', 25, 'view/content/images/B327_small.jpg', 0),
(4, 'K266', 'K2', 'Wildheart', 152, 2, 'Keeping in versatile style (Femme)', 29, 'view/content/images/K266_small.jpg', 1),
(5, 'N100', 'Nidecker', 'Tracer', 164, 11, 'Une exp?rience de carve hors du commun. Id?al pour carver comme jamais (Homme et femme)', 39, 'view/content/images/N100_small.jpg', 1),
(6, 'N754', 'Nidecker', 'Ultralight', 166, 26, 'A la pointe de la technologie. Id?al pour le freeride sur les faces engag?es (Homme et femme)', 59, 'view/content/images/N754_small.jpg', 1),
(7, 'P067', 'Prior', 'Brandwine 153', 154, 9, 'High performance, directional Freeride board, draws a smooth, stable and fast line through all snow conditions. (Femme)', 49, 'view/content/images/P067_small.jpg', 1),
(8, 'P165', 'Prior', 'BC Split 161', 169, 1, 'Sa forme directionnelle Freeride offre une ride plut?t douce et stable dans une vari?t? de conditions', 35, 'view/content/images/P165_small.jpg', 1),
(9, 'K409', 'K2', 'Lime Lite', 149, 15, 'Best For Freestyle Evolution with a Focus on Fun (Femme)', 55, 'view/content/images/K409_small.jpg', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

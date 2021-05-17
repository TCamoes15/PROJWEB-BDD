-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 08 mars 2021 à 09:54
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
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userEmailAddress` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `userPsw` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userHashPsw` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'xx',
  `userType` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `userEmailAddress` (`userEmailAddress`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `userEmailAddress`, `userPsw`, `userHashPsw`, `userType`) VALUES
(10, 'vendeur@cpnv.ch', NULL, '$2y$10$id831YpVAgstOdYiz0bykOBBFhUXJM4lwTvSbf.b8TXuDjMN9doHq', 2),
(12, 'client@cpnv.ch', NULL, '$2y$10$1rOCok.w51AOMI8Q2CXFuu2LbNJtq8U7G0ZhfOrTU2VJDLve1P06K', 1),
(18, 'cpnv@cpnv.ch', NULL, '$2y$10$/6jFMuWjBy9kPOi79FJS9esY3WXJ.YUI2XLTqWWARRijharKT9HBa', 1),
(19, 'q@cpnv.ch', NULL, '$2y$10$1/YhpoX9ygC17hkJlQX8fuKN.h6HAI1QI24qwTqP0kMw3BJ24WVYS', 1),
(20, 'b@cpnv.ch', NULL, '$2y$10$CYA5iFMPVejh2D8XHc9kd.On1GPKA7wDwCW66iS4hPtqzt7R88S9u', 1),
(21, 'c@cpnv.ch', NULL, '$2y$10$KhHJ/cKo/xZbPYWfQz7Kl.6FqerDBc892W6GpkXOgNQJZNmmxRHNi', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

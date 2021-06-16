-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           8.0.18 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour projetwebbdd
CREATE DATABASE IF NOT EXISTS `projetwebbdd` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `projetwebbdd`;

-- Listage de la structure de la table projetwebbdd. movies
CREATE TABLE IF NOT EXISTS `movies` (
  `idMovies` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(45) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `Image` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idMovies`),
  UNIQUE KEY `Title_UNIQUE` (`Title`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Listage des données de la table projetwebbdd.movies : ~7 rows (environ)
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` (`idMovies`, `Title`, `Description`, `Image`) VALUES
	(1, 'Star Wars 4', 'Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l\'Empire galactique et l\'Alliance rebelle. Capturée par les troupes de choc de l\'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l\'Etoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi. Accompagné de son fidèle compagnon, le droïde de protocole C-3PO, R2-D2 s\'échoue sur la planète Tatooine et termine sa quête chez le jeune Luke Skywalker. Rêvant de devenir pilote mais confiné aux travaux de la ferme, ce dernier se lance à la recherche de ce mystérieux Obi-Wan Kenobi, devenu ermite au coeur des montagnes désertiques de Tatooine..', 'view/content/image/AfficheFilm/StarWars4.jpeg'),
	(2, 'Metropolis', 'En 2026, Metropolis est une mégapole dans une société dystopique divisée en une ville haute, où vivent les familles intellectuelles dirigeantes, dans l\'oisiveté, le luxe et le divertissement, et une ville basse, où les travailleurs font fonctionner la ville et sont opprimés par la classe dirigeante. Un savant fou, l’hybride Rotwang (Rudolf Klein-Rogge), met au point un androïde à l’apparence féminine, lequel sera chargé d\'exhorter les ouvriers à se rebeller contre le maître de la cité, Joh Fredersen (Alfred Abel), ce qui permettra à celui-ci de les mater. ', 'view/content/image/AfficheFilm/Metropolis.jpg'),
	(3, 'Matrix', 'Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l\'un des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par d\'étranges songes et des messages cryptés provenant d\'un certain Morpheus. Celui-ci l\'exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu\'est-ce que la Matrice ? Nul ne le sait, et aucun homme n\'est encore parvenu à en percer les defenses. Mais Morpheus est persuadé que Neo est l\'Elu, le libérateur mythique de l\'humanité annoncé selon la prophétie. Ensemble, ils se lancent dans une lutte sans retour contre la Matrice et ses terribles agents...', 'view/content/image/AfficheFilm/Matrix.jpg'),
	(4, 'StarWars The Last Jedi', 'Emmené par le grand méchant Snoke et son sbire Kylo Ren, le Premier Ordre règne en maître. La République, dirigée par la Princesse Leïa, a été décimée et attend désespérément le retour de Luke Skywalker. La valeureuse Rey, pilote hors pair et nouvelle héroïne de la saga, est partie le chercher sur son île.', 'view/content/image/AfficheFilm/StarWarsTheLastJedi.jpg'),
	(5, 'JurassicPark', 'Ne pas réveiller le chat qui dort... C\'est ce que le milliardaire John Hammond aurait dû se rappeler avant de se lancer dans le "clonage" de dinosaures. C\'est à partir d\'une goutte de sang absorbée par un moustique fossilisé que John Hammond et son équipe ont réussi à faire renaître une dizaine d\'espèces de dinosaures. Il s\'apprête maintenant avec la complicité du docteur Alan Grant, paléontologue de renom, et de son amie Ellie, à ouvrir le plus grand parc à thème du monde. Mais c\'était sans compter la cupidité et la malveillance de l\'informaticien Dennis Nedry, et éventuellement des dinosaures, seuls maîtres sur l\'île...', 'view/content/image/AfficheFilm/JurassicPark.jpg'),
	(6, 'Iron Man', 'Tony Stark, inventeur de génie, vendeur d\'armes et playboy milliardaire, est kidnappé en Aghanistan. Forcé par ses ravisseurs de fabriquer une arme redoutable, il construit en secret une armure high-tech révolutionnaire qu\'il utilise pour s\'échapper. Comprenant la puissance de cette armure, il décide de l\'améliorer et de l\'utiliser pour faire régner la justice et protéger les innocents. ', 'view/content/image/AfficheFilm/IronMan.jpg'),
	(7, 'Demon Slayer', 'Le groupe de Tanjirô a terminé son entraînement de récupération au domaine des papillons et embarque à présent en vue de sa prochaine mission à bord du train de l\'infini, d\'où quarante personnes ont disparu en peu de temps. Tanjirô et Nezuko, accompagnés de Zen\'itsu et Inosuke, s\'allient à l\'un des plus puissants épéistes de l\'armée des pourfendeurs de démons, le Pilier de la Flamme Kyôjurô Rengoku, afin de contrer le démon qui a engagé le train de l\'Infini sur une voie funeste.', 'view/content/image/AfficheFilm/DemonSlayer.jpg');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;

-- Listage de la structure de la table projetwebbdd. planning
CREATE TABLE IF NOT EXISTS `planning` (
  `idPlanning` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Movies_idMovies` int(11) NOT NULL,
  `Rooms_idRooms` int(11) NOT NULL,
  PRIMARY KEY (`idPlanning`),
  KEY `fk_Planning_Movies1_idx` (`Movies_idMovies`),
  KEY `fk_Planning_Rooms1_idx` (`Rooms_idRooms`),
  CONSTRAINT `fk_Planning_Movies1` FOREIGN KEY (`Movies_idMovies`) REFERENCES `movies` (`idMovies`),
  CONSTRAINT `fk_Planning_Rooms1` FOREIGN KEY (`Rooms_idRooms`) REFERENCES `rooms` (`idRooms`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Listage des données de la table projetwebbdd.planning : ~10 rows (environ)
/*!40000 ALTER TABLE `planning` DISABLE KEYS */;
INSERT INTO `planning` (`idPlanning`, `Date`, `Movies_idMovies`, `Rooms_idRooms`) VALUES
	(1, '2021-06-13', 1, 1),
	(2, '2021-06-17', 3, 2),
	(3, '2021-06-15', 2, 2),
	(4, '2021-06-08', 4, 1),
	(5, '2021-06-13', 1, 2),
	(6, '2021-06-03', 5, 3),
	(7, '2021-06-25', 2, 2),
	(8, '2021-06-11', 7, 4),
	(9, '2021-06-14', 6, 1),
	(10, '2021-06-30', 4, 4);
/*!40000 ALTER TABLE `planning` ENABLE KEYS */;

-- Listage de la structure de la table projetwebbdd. reservation
CREATE TABLE IF NOT EXISTS `reservation` (
  `idRéservation` int(11) NOT NULL AUTO_INCREMENT,
  `Users_idUser` int(11) NOT NULL,
  `Planning_idPlanning` int(11) NOT NULL,
  PRIMARY KEY (`idRéservation`),
  UNIQUE KEY `idRéservation_UNIQUE` (`idRéservation`),
  KEY `fk_Reservation_Users_idx` (`Users_idUser`),
  KEY `fk_Reservation_Planning1_idx` (`Planning_idPlanning`),
  CONSTRAINT `fk_Reservation_Planning1` FOREIGN KEY (`Planning_idPlanning`) REFERENCES `planning` (`idPlanning`),
  CONSTRAINT `fk_Reservation_Users` FOREIGN KEY (`Users_idUser`) REFERENCES `users` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table projetwebbdd.reservation : ~0 rows (environ)
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;

-- Listage de la structure de la table projetwebbdd. rooms
CREATE TABLE IF NOT EXISTS `rooms` (
  `idRooms` int(11) NOT NULL AUTO_INCREMENT,
  `RoomCapacity` int(11) DEFAULT NULL,
  PRIMARY KEY (`idRooms`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Listage des données de la table projetwebbdd.rooms : ~4 rows (environ)
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` (`idRooms`, `RoomCapacity`) VALUES
	(1, 244),
	(2, 40),
	(3, 340),
	(4, 200);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;

-- Listage de la structure de la table projetwebbdd. users
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `autorisation` tinyint(4) DEFAULT NULL,
  `phoneNumber` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Listage des données de la table projetwebbdd.users : ~2 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`idUser`, `firstname`, `lastname`, `email`, `password`, `autorisation`, `phoneNumber`) VALUES
	(12, '3', '2', 'jean-amedee.bosch@cpnv.ch', '$2y$10$VeOEGPSS37Oj83OM3ZvkZ.AtyWxJq3Q8t5p1tAwVgD2nrGgCeUkwi', 1, 1),
	(13, '3', '2', 'toto@cpnv.ch', '$2y$10$6.cMNrl7GlFfzPAycTxb3O/cdaZEhslvbJ7fE43YGYJreb1KFTDA6', 1, 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

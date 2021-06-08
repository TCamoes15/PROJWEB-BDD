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
CREATE DATABASE IF NOT EXISTS `projetwebbdd` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `projetwebbdd`;

-- Listage de la structure de la table projetwebbdd. movies
CREATE TABLE IF NOT EXISTS `movies` (
  `idMovies` int(11) NOT NULL,
  `Title` varchar(45) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `Image` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idMovies`),
  UNIQUE KEY `Title_UNIQUE` (`Title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table projetwebbdd.movies : ~0 rows (environ)
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;

-- Listage de la structure de la table projetwebbdd. planning
CREATE TABLE IF NOT EXISTS `planning` (
  `idPlanning` int(11) NOT NULL,
  `Date` datetime DEFAULT NULL,
  `Movies_idMovies` int(11) NOT NULL,
  `Rooms_idRooms` int(11) NOT NULL,
  PRIMARY KEY (`idPlanning`),
  KEY `fk_Planning_Movies1_idx` (`Movies_idMovies`),
  KEY `fk_Planning_Rooms1_idx` (`Rooms_idRooms`),
  CONSTRAINT `fk_Planning_Movies1` FOREIGN KEY (`Movies_idMovies`) REFERENCES `movies` (`idMovies`),
  CONSTRAINT `fk_Planning_Rooms1` FOREIGN KEY (`Rooms_idRooms`) REFERENCES `rooms` (`idRooms`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table projetwebbdd.planning : ~0 rows (environ)
/*!40000 ALTER TABLE `planning` DISABLE KEYS */;
/*!40000 ALTER TABLE `planning` ENABLE KEYS */;

-- Listage de la structure de la table projetwebbdd. reservation
CREATE TABLE IF NOT EXISTS `reservation` (
  `idRéservation` int(11) NOT NULL,
  `Users_idUser` int(11) NOT NULL,
  `Planning_idPlanning` int(11) NOT NULL,
  PRIMARY KEY (`idRéservation`),
  UNIQUE KEY `idRéservation_UNIQUE` (`idRéservation`),
  KEY `fk_Reservation_Users_idx` (`Users_idUser`),
  KEY `fk_Reservation_Planning1_idx` (`Planning_idPlanning`),
  CONSTRAINT `fk_Reservation_Planning1` FOREIGN KEY (`Planning_idPlanning`) REFERENCES `planning` (`idPlanning`),
  CONSTRAINT `fk_Reservation_Users` FOREIGN KEY (`Users_idUser`) REFERENCES `users` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table projetwebbdd.reservation : ~0 rows (environ)
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;

-- Listage de la structure de la table projetwebbdd. rooms
CREATE TABLE IF NOT EXISTS `rooms` (
  `idRooms` int(11) NOT NULL,
  `RoomCapacity` int(11) DEFAULT NULL,
  PRIMARY KEY (`idRooms`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table projetwebbdd.rooms : ~4 rows (environ)
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` (`idRooms`, `RoomCapacity`) VALUES
	(1, 255),
	(2, 400),
	(3, 120),
	(4, 30);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;

-- Listage de la structure de la table projetwebbdd. users
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `e-mail` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `autorisation` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table projetwebbdd.users : ~2 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`idUser`, `firstname`, `lastname`, `e-mail`, `password`, `autorisation`) VALUES
	(1, 'Jean', 'Boech', 'jean-amedee.bosch@cpnv.ch', 'Pa$$w0rd', 1),
	(2, 'machin', 'truc', 'machin.truc@gmail.ch', 'Pa$$w0rd', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

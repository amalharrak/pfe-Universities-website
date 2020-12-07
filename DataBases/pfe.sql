-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 11 juil. 2019 à 10:05
-- Version du serveur :  8.0.13
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `admis`
--

DROP TABLE IF EXISTS `admis`;
CREATE TABLE IF NOT EXISTS `admis` (
  `ID1` int(5) NOT NULL AUTO_INCREMENT,
  `NOM1` varchar(20) NOT NULL,
  `PRENOM1` varchar(20) NOT NULL,
  `EMAIL1` varchar(30) NOT NULL,
  `ID2` int(5) NOT NULL,
  `NOM2` varchar(20) NOT NULL,
  `PRENOM2` varchar(20) NOT NULL,
  `EMAIL2` varchar(30) NOT NULL,
  PRIMARY KEY (`ID1`,`ID2`),
  UNIQUE KEY `ID1` (`ID1`),
  UNIQUE KEY `ID2` (`ID2`)
) ENGINE=InnoDB AUTO_INCREMENT=40578 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admis`
--

INSERT INTO `admis` (`ID1`, `NOM1`, `PRENOM1`, `EMAIL1`, `ID2`, `NOM2`, `PRENOM2`, `EMAIL2`) VALUES
(61, 'amal', 'harrak', 'amalharrak@gmail.com', 88, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(40577, 'amal', 'harrak', 'amalharrak@gmail.com', 41961, 'idrissi', 'hajar', 'hajaridrissi@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `binome`
--

DROP TABLE IF EXISTS `binome`;
CREATE TABLE IF NOT EXISTS `binome` (
  `ID1` int(5) NOT NULL,
  `NOM1` varchar(20) NOT NULL,
  `PRENOM1` varchar(20) NOT NULL,
  `EMAIL1` varchar(30) NOT NULL,
  `ID2` int(5) NOT NULL,
  `NOM2` varchar(20) NOT NULL,
  `PRENOM2` varchar(20) NOT NULL,
  `EMAIL2` varchar(30) NOT NULL,
  PRIMARY KEY (`ID1`,`ID2`),
  UNIQUE KEY `ID1` (`ID1`),
  UNIQUE KEY `ID2` (`ID2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `binome`
--

INSERT INTO `binome` (`ID1`, `NOM1`, `PRENOM1`, `EMAIL1`, `ID2`, `NOM2`, `PRENOM2`, `EMAIL2`) VALUES
(1, 'amaloo', 'harrak', 'amalharrak@gmail.com', 2, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(3, 'amall', 'harrak', 'amalharrak@gmail.com', 4, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(5, 'amal', 'harrak', 'amalharrak@gmail.com', 6, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(61, 'amal', 'harrak', 'amalharrak@gmail.com', 88, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(66, 'amal', 'amal', 'amalharrak@gmail.com', 55, 'idrissi', 'bouchra', 'hajaridrissi@gmail.com'),
(77, 'harrak', 'harrak', 'amalharrak@gmail.com', 78, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(4057, 'amal', 'harrak', 'amalharrak@gmail.com', 4196, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(40577, 'amal', 'harrak', 'amalharrak@gmail.com', 41961, 'idrissi', 'hajar', 'hajaridrissi@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `ID` int(5) NOT NULL,
  `NOM` varchar(100) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `Nbr_binome` int(10) NOT NULL,
  `ETAT` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`ID`, `NOM`, `PRENOM`, `EMAIL`, `Nbr_binome`, `ETAT`) VALUES
(1, 'harrak', 'meryem', '', 2, 1),
(3, 'harrak', 'meryem', 'amalharrak@gmail.com', 1, 1),
(4, 'harrakkk', 'meryem', 'amalharrak@gmail.com', 3, 1),
(5, 'harrak', 'rayan', 'amalharrak@gmail.com', 0, 1),
(56, 'harrakKK', 'meryemMMMM', 'amalharrak@gmail.com', 0, 1),
(58, 'harrakk', 'meryem', 'amalharrak@gmail.com', 1, 1),
(88, 'harrak', 'wafae', 'amalharrak@gmail.com', 1, 1),
(89, 'harrak', 'meryem', 'amalharrak@gmail.com', 0, 1),
(408, 'harrak', 'meryem', 'amalharrak@gmail.com', 0, 1),
(40577, 'harrak', 'meryem', 'amalharrak@gmail.com', 1, 1),
(88888, 'harrak', 'meryem', 'amalharrak@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `fil1admis`
--

DROP TABLE IF EXISTS `fil1admis`;
CREATE TABLE IF NOT EXISTS `fil1admis` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(20) NOT NULL,
  `PRENOM` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `AFFECTER` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=41962 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fil1admis`
--

INSERT INTO `fil1admis` (`ID`, `NOM`, `PRENOM`, `EMAIL`, `AFFECTER`) VALUES
(1, 'amaloo', 'harrak', 'amalharrak@gmail.com', 0),
(4, 'amall', 'harrak', 'amalharrak@gmail.com', 0),
(77, 'harrak', 'harrak', 'amalharrak@gmail.com', 0);

-- --------------------------------------------------------

--
-- Structure de la table `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE IF NOT EXISTS `file` (
  `ID1` int(5) NOT NULL AUTO_INCREMENT,
  `NOM1` varchar(20) NOT NULL,
  `PRENOM1` varchar(20) NOT NULL,
  `EMAIL1` varchar(30) NOT NULL,
  PRIMARY KEY (`ID1`),
  UNIQUE KEY `ID1` (`ID1`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `file`
--

INSERT INTO `file` (`ID1`, `NOM1`, `PRENOM1`, `EMAIL1`) VALUES
(2, 'amaloo', 'harrak', 'amalharrak@gmail.com'),
(3, 'amall', 'harrak', 'amalharrak@gmail.com'),
(5, 'amal', 'harrak', 'amalharrak@gmail.com'),
(6, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(55, 'amal', 'amal', 'amalharrak@gmail.com'),
(66, 'amal', 'amal', 'amalharrak@gmail.com'),
(78, 'idrissi', 'hajar', 'hajaridrissi@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `filenon`
--

DROP TABLE IF EXISTS `filenon`;
CREATE TABLE IF NOT EXISTS `filenon` (
  `ID1` int(5) NOT NULL AUTO_INCREMENT,
  `NOM1` varchar(20) NOT NULL,
  `PRENOM1` varchar(20) NOT NULL,
  `EMAIL1` varchar(30) NOT NULL,
  `ID2` varchar(5) NOT NULL,
  `NOM2` varchar(20) NOT NULL,
  `PRENOM2` varchar(20) NOT NULL,
  `EMAIL2` varchar(30) NOT NULL,
  PRIMARY KEY (`ID1`,`ID2`),
  UNIQUE KEY `ID1` (`ID1`),
  UNIQUE KEY `ID2` (`ID2`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `filenon`
--

INSERT INTO `filenon` (`ID1`, `NOM1`, `PRENOM1`, `EMAIL1`, `ID2`, `NOM2`, `PRENOM2`, `EMAIL2`) VALUES
(2, 'idrissi', 'hajar', 'hajaridrissi@gmail.com', 'null', 'null', 'null', 'null');

-- --------------------------------------------------------

--
-- Structure de la table `non-admis`
--

DROP TABLE IF EXISTS `non-admis`;
CREATE TABLE IF NOT EXISTS `non-admis` (
  `ID1` int(5) NOT NULL,
  `NOM1` varchar(20) NOT NULL,
  `PRENOM1` varchar(20) NOT NULL,
  `EMAIL1` varchar(30) NOT NULL,
  `ID2` int(5) NOT NULL,
  `NOM2` varchar(20) NOT NULL,
  `PRENOM2` varchar(20) NOT NULL,
  `EMAIL2` varchar(30) NOT NULL,
  PRIMARY KEY (`ID2`,`ID1`),
  UNIQUE KEY `ID1` (`ID1`),
  UNIQUE KEY `ID2` (`ID2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `non-admis`
--

INSERT INTO `non-admis` (`ID1`, `NOM1`, `PRENOM1`, `EMAIL1`, `ID2`, `NOM2`, `PRENOM2`, `EMAIL2`) VALUES
(1, 'amal', 'harrak', 'amalharrak@gmail.com', 2, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(3, 'amal', 'harrak', 'amalharrak@gmail.com', 4, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(5, 'amal', 'harrak', 'amalharrak@gmail.com', 6, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(9, 'amal', 'harrak', 'amalharrak@gmail.com', 8, 'idrissi', 'amal', 'hajaridrissi@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `nonadmis`
--

DROP TABLE IF EXISTS `nonadmis`;
CREATE TABLE IF NOT EXISTS `nonadmis` (
  `ID1` int(5) NOT NULL,
  `NOM1` varchar(20) NOT NULL,
  `PRENOM1` varchar(20) NOT NULL,
  `EMAIL1` varchar(30) NOT NULL,
  `ID2` int(5) NOT NULL,
  `NOM2` varchar(20) NOT NULL,
  `PRENOM2` varchar(20) NOT NULL,
  `EMAIL2` varchar(30) NOT NULL,
  PRIMARY KEY (`ID1`,`ID2`),
  UNIQUE KEY `ID1` (`ID1`),
  UNIQUE KEY `ID2` (`ID2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `nonadmis`
--

INSERT INTO `nonadmis` (`ID1`, `NOM1`, `PRENOM1`, `EMAIL1`, `ID2`, `NOM2`, `PRENOM2`, `EMAIL2`) VALUES
(1, 'amaloo', 'harrak', 'amalharrak@gmail.com', 2, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(3, 'amall', 'harrak', 'amalharrak@gmail.com', 4, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(5, 'amal', 'harrak', 'amalharrak@gmail.com', 6, 'idrissi', 'hajar', 'hajaridrissi@gmail.com'),
(66, 'amal', 'amal', 'amalharrak@gmail.com', 55, 'idrissi', 'bouchra', 'hajaridrissi@gmail.com'),
(77, 'harrak', 'harrak', 'amalharrak@gmail.com', 78, 'idrissi', 'hajar', 'hajaridrissi@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `semestre`
--

DROP TABLE IF EXISTS `semestre`;
CREATE TABLE IF NOT EXISTS `semestre` (
  `ID` int(5) NOT NULL,
  `S1` int(1) DEFAULT NULL,
  `note_eliminatoire1` int(11) NOT NULL,
  `MOYENNE_S1` double DEFAULT NULL,
  `S2` int(1) DEFAULT NULL,
  `note_eliminatoire2` int(11) NOT NULL,
  `MOYENNE_S2` double DEFAULT NULL,
  `S3` int(1) DEFAULT NULL,
  `note_eliminatoire3` int(11) NOT NULL,
  `MOYENNE_S3` double DEFAULT NULL,
  `S4` int(1) DEFAULT NULL,
  `note_eliminatoire4` int(11) NOT NULL,
  `MOYENNE_S4` double DEFAULT NULL,
  `S5` int(1) DEFAULT NULL,
  `note_eliminatoire5` int(11) NOT NULL,
  `MOYENNE_S5` double DEFAULT NULL,
  `S6` int(1) DEFAULT NULL,
  `note_eliminatoire6` int(11) NOT NULL,
  `MOYENNE_S6` double DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `semestre`
--

INSERT INTO `semestre` (`ID`, `S1`, `note_eliminatoire1`, `MOYENNE_S1`, `S2`, `note_eliminatoire2`, `MOYENNE_S2`, `S3`, `note_eliminatoire3`, `MOYENNE_S3`, `S4`, `note_eliminatoire4`, `MOYENNE_S4`, `S5`, `note_eliminatoire5`, `MOYENNE_S5`, `S6`, `note_eliminatoire6`, `MOYENNE_S6`) VALUES
(1, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10),
(2, 0, 0, 10, 0, 0, 8, 2, 0, 9, 2, 0, 8, 0, 0, 10, 0, 0, 10),
(3, 0, 0, 10, 0, 0, 6, 2, 0, 9, 2, 0, 9, 0, 0, 10, 0, 0, 10),
(4, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10),
(5, 0, 0, 10, 0, 0, 9, 2, 0, 9, 2, 0, 6, 0, 0, 10, 0, 0, 10),
(6, 0, 0, 10, 0, 0, 8, 2, 0, 8, 2, 0, 8, 0, 0, 10, 0, 0, 10),
(55, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 1, 10, 0, 0, 10),
(61, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10),
(66, 0, 0, 10, 0, 0, 10, 0, 1, 10, 0, 1, 10, 0, 0, 10, 0, 0, 10),
(77, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10),
(78, 0, 0, 9, 0, 0, 9, 3, 0, 10, 3, 0, 9, 0, 1, 10, 0, 0, 0),
(88, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10),
(40577, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10),
(41961, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `LOGIN` varchar(100) NOT NULL,
  `PWD` varchar(255) NOT NULL,
  `ROLE` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `ETAT` int(1) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `LOGIN`, `PWD`, `ROLE`, `EMAIL`, `ETAT`) VALUES
(1, 'admis', '202cb962ac59075b964b07152d234b70', 'ADMIN', 'amalharrak77@gmail.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 29 mars 2021 à 11:09
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Cutsy`
--

-- --------------------------------------------------------

--
-- Structure de la table `CLIENT`
--

CREATE TABLE `CLIENT` (
  `PSEUDO` char(32) NOT NULL,
  `PASSWORD` varchar(128) NOT NULL,
  `MAIL` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Creneau`
--

CREATE TABLE `Creneau` (
  `id_creneau` int(11) NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `laDate` datetime NOT NULL,
  `email` varchar(40) NOT NULL,
  `image` varchar(100) NOT NULL,
  `commentaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Creneau`
--

INSERT INTO `Creneau` (`id_creneau`, `pseudo`, `laDate`, `email`, `image`, `commentaire`) VALUES
(1, '', '0000-00-00 00:00:00', '', '', ''),
(2, 'paul', '2021-02-08 16:00:00', 'ktevot@gmail.com', 'zz.jpg', 'ljohligkufhjcgxb'),
(13, 'err', '2021-02-09 16:00:00', 'ktevot@gmail.com', 'matrix.jpg', 'comment'),
(14, 'err', '2021-02-09 16:30:00', 'ktevot@gmail.com', 'nwbCropped.jpg', 'commentaire'),
(17, 'err', '2021-02-08 18:00:00', 'ktevot@gmail.com', 'nwbCropped.jpg', 'comùlk:');

-- --------------------------------------------------------

--
-- Structure de la table `SERVICE`
--

CREATE TABLE `SERVICE` (
  `LIBELLE_SERVICE` varchar(128) NOT NULL,
  `PRIX` char(32) NOT NULL,
  `DESCRIPTION` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `CLIENT`
--
ALTER TABLE `CLIENT`
  ADD PRIMARY KEY (`PSEUDO`);

--
-- Index pour la table `Creneau`
--
ALTER TABLE `Creneau`
  ADD PRIMARY KEY (`id_creneau`);

--
-- Index pour la table `SERVICE`
--
ALTER TABLE `SERVICE`
  ADD PRIMARY KEY (`LIBELLE_SERVICE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Creneau`
--
ALTER TABLE `Creneau`
  MODIFY `id_creneau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

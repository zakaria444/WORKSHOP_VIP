-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 31 mars 2021 à 17:43
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `school`
--

-- --------------------------------------------------------

--
-- Structure de la table `brief`
--

CREATE TABLE `brief` (
  `id_brief` int(5) NOT NULL,
  `name_b` varchar(30) NOT NULL,
  `date_b` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `former`
--

CREATE TABLE `former` (
  `id_former` int(2) NOT NULL,
  `name_f` varchar(30) NOT NULL,
  `email_f` varchar(50) NOT NULL,
  `password_f` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `id_student` int(3) NOT NULL,
  `name_s` varchar(30) NOT NULL,
  `email_s` varchar(50) NOT NULL,
  `password_s` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `validation`
--

CREATE TABLE `validation` (
  `id_validation` int(11) NOT NULL,
  `date_validation` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `validation` tinyint(1) NOT NULL,
  `id_f` int(11) DEFAULT NULL,
  `id_s` int(11) DEFAULT NULL,
  `id_b` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `brief`
--
ALTER TABLE `brief`
  ADD PRIMARY KEY (`id_brief`);

--
-- Index pour la table `former`
--
ALTER TABLE `former`
  ADD PRIMARY KEY (`id_former`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`);

--
-- Index pour la table `validation`
--
ALTER TABLE `validation`
  ADD PRIMARY KEY (`id_validation`),
  ADD KEY `id_f` (`id_f`),
  ADD KEY `id_s` (`id_s`),
  ADD KEY `id_b` (`id_b`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `brief`
--
ALTER TABLE `brief`
  MODIFY `id_brief` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `former`
--
ALTER TABLE `former`
  MODIFY `id_former` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `validation`
--
ALTER TABLE `validation`
  MODIFY `id_validation` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `validation`
--
ALTER TABLE `validation`
  ADD CONSTRAINT `validation_ibfk_1` FOREIGN KEY (`id_f`) REFERENCES `former` (`id_former`),
  ADD CONSTRAINT `validation_ibfk_2` FOREIGN KEY (`id_s`) REFERENCES `student` (`id_student`),
  ADD CONSTRAINT `validation_ibfk_3` FOREIGN KEY (`id_b`) REFERENCES `brief` (`id_brief`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

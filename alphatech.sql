-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 15 mars 2023 à 21:00
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
-- Base de données :  `alphatech`
--

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `id_employes` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `date_naiss` varchar(50) NOT NULL,
  `tel` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `localisation` varchar(30) NOT NULL,
  PRIMARY KEY (`id_employes`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id_employes`, `nom`, `date_naiss`, `tel`, `email`, `localisation`) VALUES
(1, 'Arthur leroy', '2005-12-22', 699952252, 'arthur@gmail.com', 'Nsimeyong'),
(2, 'Arthur leroy', '2005-12-22', 699952252, 'arthur@gmail.com', 'Nsimeyong');

-- --------------------------------------------------------

--
-- Structure de la table `employeurs`
--

DROP TABLE IF EXISTS `employeurs`;
CREATE TABLE IF NOT EXISTS `employeurs` (
  `id_employeurs` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `nom_entrep` varchar(20) NOT NULL,
  `secteur` varchar(20) NOT NULL,
  `localisation` varchar(25) NOT NULL,
  `lien` varchar(30) NOT NULL,
  PRIMARY KEY (`id_employeurs`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employeurs`
--

INSERT INTO `employeurs` (`id_employeurs`, `nom`, `nom_entrep`, `secteur`, `localisation`, `lien`) VALUES
(1, 'Arthur', 'AC', 'Agro indsustrie', 'YaoundÃ©/Nsimeyong', 'arthur@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

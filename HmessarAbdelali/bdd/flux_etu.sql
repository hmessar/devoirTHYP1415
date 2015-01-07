-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 07 Janvier 2015 à 14:43
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `flux_etu`
--

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

CREATE TABLE IF NOT EXISTS `absence` (
  `id_etudiant` int(11) NOT NULL,
  `Abs_pre` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `absence`
--

INSERT INTO `absence` (`id_etudiant`, `Abs_pre`, `date`) VALUES
(2, '0', '0000-00-00'),
(2, 'absence', '2014-12-06'),
(6, 'absence', '2015-01-02'),
(9, 'absence', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`) VALUES
(1, 'Zamel', 'Mouhaned'),
(2, 'Boukella', 'Rafik'),
(3, 'Masseix Kavin', 'Mouhaned'),
(4, 'Guellouz', 'Moudhafer'),
(5, 'Ameur Mansour', 'saad'),
(6, 'Cherfaoui', 'Wafae'),
(7, 'Abbou', 'Nisrine'),
(8, 'Lansari', 'Achraf'),
(9, 'Slaoui', 'Zineb'),
(10, 'Raiss', 'Anass'),
(11, 'Amaskane', 'Mehdi'),
(12, 'Hajbelgacem', 'Mahmoud'),
(13, 'Hmessar', 'Abdelali'),
(14, 'Lamlih', 'Zakaria'),
(15, 'Benmakhlouf', 'saad'),
(16, 'hajjari', 'karima');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

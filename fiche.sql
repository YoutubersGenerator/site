-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 07 Mai 2015 à 00:00
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `fichesytbers`
--

-- --------------------------------------------------------

--
-- Structure de la table `fiche`
--

CREATE TABLE IF NOT EXISTS `fiche` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `duree` int(11) NOT NULL,
  `categorie` text CHARACTER SET utf8 NOT NULL,
  `nbreVuesCumul` int(11) NOT NULL,
  `nbreVideos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `fiche`
--

INSERT INTO `fiche` (`id`, `nom`, `duree`, `categorie`, `nbreVuesCumul`, `nbreVideos`) VALUES
(1, 'Salut les Geeks(Mathieu Sommet)', 2011, 'Humour, review de vidéo du web.', 161567959, 120),
(2, 'Minute Papillon (Kriss)', 2010, 'Humour et philosophie', 81262959, 276),
(3, 'Joueur du Grenier', 2010, 'Humour et tests de jeux', 289135938, 81),
(4, 'What The Cut (Antoine Daniel)', 2012, 'Humour, review de vidéos du web', 160960111, 64),
(5, 'BenzaieTV', 2011, 'Humour et jeux vidéos', 56806279, 228),
(6, 'Bob Lennon', 2011, 'Humour et jeux vidéos', 350528137, 1818),
(7, 'Connasse (Camille Cottin)', 2013, 'Humour, caméra caché', 48627921, 43),
(8, 'Cyprien', 2009, 'Humour', 830643618, 71);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

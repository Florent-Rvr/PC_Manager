-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Juin 2020 à 19:58
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pc_manager`
--

-- --------------------------------------------------------

--
-- Structure de la table `authentification`
--

CREATE TABLE IF NOT EXISTS `authentification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supervisorname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `authentification`
--

INSERT INTO `authentification` (`id`, `supervisorname`, `password`) VALUES
(1, 'admin', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `util_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `util_nom` varchar(50) NOT NULL,
  `util_prenom` varchar(50) NOT NULL,
  `util_telephone` char(10) NOT NULL,
  `util_pseudo` varchar(20) NOT NULL,
  `util_poste_attribue` int(10) unsigned NOT NULL,
  `util_motdepasse` varchar(10) NOT NULL,
  PRIMARY KEY (`util_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`util_id`, `util_nom`, `util_prenom`, `util_telephone`, `util_pseudo`, `util_poste_attribue`, `util_motdepasse`) VALUES
(2, 'Corenthin', 'Techer', '0692000000', 'CTecher', 1, '0000'),
(8, 'Viledeman', 'Theo', '0693000000', 'Vileo', 2, '159753');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

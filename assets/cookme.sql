-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 06 août 2023 à 16:33
-- Version du serveur : 5.7.24
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

 
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cookme`
--
CREATE DATABASE IF NOT EXISTS `cookme` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cookme`;

-- --------------------------------------------------------

--
-- Structure de la table `recipies`
--

DROP TABLE IF EXISTS `recipies`;
CREATE TABLE `recipies` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `difficulty` int(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recipies`
--

INSERT INTO `recipies` (`id`, `title`, `description`, `image`, `difficulty`, `price`, `likes`, `active`, `author`) VALUES
(1,'Poulet Basquaise','Une délicieuse recette de poulet au poivrons :)','https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fauvraidelice.fr%2Fwp-content%2Fuploads%2F2020%2F06%2FIMG-AuVraiDelice-6.jpg',  4, '€',8, 1, 'Jane Doe'),
(2,'Poulet Curry','Une délicieuse recette de poulet au curry :)','https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fsunandgreen.fr%2Fwp-content%2Fuploads%2F2019%2F10%2Fpoulet_au_curry_et_oignons_recette_epices-768x768.jpg', 2, '€',18,1,'John Doe'),
(3,'Boeuf bourguignon','Une délicieuse recette de ragout de boeuf au petit légumes :)', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.Dy-vJKL-Tvuukd1LQTVYpQHaHI%26pid%3DApi&f=1&ipt=3f5034e774af25e68a885a8c6676911387100d64b500a075f94dd67a47936082&ipo=images', 5, '€€',23,1, 'Jane Doe'),
(4,'Pasta Carbonara','Une délicieuse recette de pates aux oeufs et petit lardons généreuse','https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.ilgiornalebg.it%2Fwp-content%2Fuploads%2F2020%2F12%2Fcarbonara.jpg',2, '€',43,0,'John Doe'),
(5,'Pizza Calzone','Une délicieuse pizza dans un chauson de pâte à dévorer','https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.periodistadigital.com%2Fwp-content%2Fuploads%2F2020%2F05%2Fcalzone-tradicional-3.jpg', 7,'€', 12, 1, 'Jane Doe'),
(6,'Omelette au champignons','Des oeufs et de bon champignons frais, une recette pas chers et réconfortante','https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.dexsa.de%2Fwp-content%2Fuploads%2F2019%2F08%2FAdobeStock_246243488-1.jpeg',2,'€',17, 0,'John Doe'),
(7,'Bar au beurre blanc','Un délicieux poisson au beurre blanc, une recette pour les grand jours !','https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.ensauce.com%2Fwp-content%2Fuploads%2F2015%2F10%2Fbar-grill%25C3%25A9-au-beurre-blanc.jpg',6,'€€€', 8, 1,'Jane Doe'),
(8,'Forêt Noire', 'Un délicieux gateaux pour les amoureux de chocolat', 'https://media.istockphoto.com/id/1148468700/fr/photo/g%C3%A2teau-for%C3%AAt-noire-tarte-schwarzwald-chocolat-noir-et-dessert-cerise-sur-fond-blanc-en-bois.jpg?s=2048x2048&w=is&k=20&c=8GSeFG1FWC1tIsv_C0HFwdDLLMvzGRZ94GCE8YdxyGw=',7, '€€', 19,0,'John Doe'),
(9,'Boeuf au oignons','Un délicieux plat asiatique pour toute la famille','https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.Dy-vJKL-Tvuukd1LQTVYpQHaHI%26pid%3DApi&f=1&ipt=3f5034e774af25e68a885a8c6676911387100d64b500a075f94dd67a47936082&ipo=images',4, '€€', 10,1,'Jane Doe'),
(10, 'Sushis','Un délicieux plat traditionnel asiatique pour satisfaire les palets les plus éxigent','https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.nippon.com%2Ffr%2Fncommon%2Fcontents%2Fjapan-data%2F174999%2F174999.jpg', 8,'€€€', 37,1, 'John Doe');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `imageUrl` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `imageUrl`, `sexe`, `birthdate`) VALUES
(1, 'john', 'doe', 'john@mail.com', 'john.doe', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.jennstrends.com%2Fwp-content%2Fuploads%2F2013%2F10%2FBad-profile-pic-6.jpg&f=1&nofb=1&ipt=523bf8860ab462cba0563278454b31e9783f5f45a1dd3816572ee4993d882bfa&ipo=images', 'homme', '1989-10-18'),
(2, 'jane', 'doe', 'jane@mail.com', 'jane.doe', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flouisem.com%2Fwp-content%2Fuploads%2F2013%2F02%2Fbest-profile-picture-facebook.png&f=1&nofb=1&ipt=7dd0950b01990fff2e4780be8610d04cc63aa9d77650f85392e70ced2fda671c&ipo=images', 'femme', '1995-10-18'),
(3, 'test', 'test', 'test@mail.com', 'test', 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Ffree-profile-pics.com%2Fprofile-pictures%2F01232014%2Fdownload%2Fmr-bean-profile-picture-180x180.png&f=1&nofb=1&ipt=bedc69dcbd46ceccc906b9ab7a3bb57641a67c7695f3acd155007483280df0c4&ipo=images', 'homme', '1990-03-21'),
(4, 'Anakin', 'Skywalker', 'vador@etoilenoir.sw', 'vador', 'etoile_de_la_mort.jpg', 'o', '1978-01-01');


--
-- Index pour les tables déchargées
--

--
-- Index pour la table `recipies`
--
ALTER TABLE `recipies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `recipies`
--
ALTER TABLE `recipies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

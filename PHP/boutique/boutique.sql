-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 30 Juin 2017 à 17:33
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(3) NOT NULL,
  `id_membre` int(3) DEFAULT NULL,
  `montant` int(3) NOT NULL,
  `date_enregistrement` datetime DEFAULT NULL,
  `etat` enum('en cours de traitement','envoyé','livré') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_membre`, `montant`, `date_enregistrement`, `etat`) VALUES
(23, NULL, 176, '2017-06-08 10:25:49', 'livré'),
(24, NULL, 278, '2017-06-08 10:30:47', 'envoyé'),
(25, NULL, 203, '2017-06-08 10:33:52', 'en cours de traitement'),
(26, 31, 14, '2017-06-08 12:46:26', 'en cours de traitement');

-- --------------------------------------------------------

--
-- Structure de la table `details_commande`
--

CREATE TABLE `details_commande` (
  `id_details_commande` int(3) NOT NULL,
  `id_commande` int(3) NOT NULL,
  `id_produit` int(3) DEFAULT NULL,
  `quantite` int(3) NOT NULL,
  `prix` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `details_commande`
--

INSERT INTO `details_commande` (`id_details_commande`, `id_commande`, `id_produit`, `quantite`, `prix`) VALUES
(30, 23, 40, 4, 17),
(31, 23, 43, 3, 36),
(32, 24, 42, 5, 34),
(33, 24, 39, 3, 16),
(34, 24, 44, 2, 30),
(35, 25, 45, 3, 45),
(36, 25, 39, 2, 16),
(37, 25, 43, 1, 36),
(38, 26, 37, 1, 14);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(3) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(60) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `civilite` enum('m','f') NOT NULL,
  `ville` varchar(20) NOT NULL,
  `code_postal` int(5) UNSIGNED ZEROFILL NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `ville`, `code_postal`, `adresse`, `statut`) VALUES
(30, 'admin', '$2y$10$tpseBRM0.cZynQqmbqkrgOQQNbJjnxe.Rl2Qfa3HbepnxVnSrjR8O', 'rfrrfrfrfrf', 'rfrfrfrfrfrf', 'a@aa.fr', 'm', 'aaaaaa', 75012, 'rjrururfhrfuhrfuhurfrhfurf', 1),
(31, 'doud94', '$2y$10$s35Km7y4QclUZ03gnadR4OLtW8.C2q/JIDRAuwf0MJtnn7KC7BYFG', 'ANTHONY', 'Edouard', 'doud75@gmail.com', 'm', 'Charenton', 94220, '154 rue de Paris', 0);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(3) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `taille` varchar(5) NOT NULL,
  `public` enum('m','f','mixte') NOT NULL,
  `photo` varchar(250) NOT NULL,
  `prix` int(3) NOT NULL,
  `stock` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `reference`, `categorie`, `titre`, `description`, `couleur`, `taille`, `public`, `photo`, `prix`, `stock`) VALUES
(37, 'R001', 'tshirt', 'Thisrt bleu', 'Super thisrt bleu !', 'bleu', 'L', 'm', 'bleu.jpg', 14, 97),
(38, 'R002', 'tshirt', 'Thisrt vert', 'Super thisrt vert !', 'vert', 'M', 'm', 'vert.png', 15, 83),
(39, 'R003', 'tshirt', 'Thisrt jaune', 'Super thisrt jaune !', 'jaune', 'XL', 'f', 'jaune.png', 16, 68),
(40, 'R004', 'tshirt', 'Thisrt rouge', 'Super thisrt rouge !', 'rouge', 'S', 'f', 'rouge.png', 17, 60),
(41, 'R005', 'tshirt', 'Thisrt noir', 'Super thisrt noir !', 'noir', 'XXL', 'mixte', 'noir.jpg', 18, 54),
(42, 'R006', 'chemise', 'Chemise rayée', 'Superbe chemise !', 'noir', 'L', 'm', 'chemisenoirm.jpg', 34, 39),
(43, 'R007', 'chemise', 'Chemise blanche', 'Superbe chemise !', 'blanche', 'M', 'm', 'chemiseblanchem.jpg', 36, 29),
(44, 'R008', 'divers', 'Pull', 'Superbe pull !', 'gris', 'L', 'm', 'pullgrism2.jpg', 30, 20),
(45, 'R009', 'divers', 'Bottes', 'Superbes bottes !', 'marron', 'S', 'f', 'bottenoirf.jpg', 45, 8);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_membre` (`id_membre`);

--
-- Index pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD PRIMARY KEY (`id_details_commande`),
  ADD KEY `details_commande_ibfk_1` (`id_commande`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD UNIQUE KEY `reference` (`reference`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `details_commande`
--
ALTER TABLE `details_commande`
  MODIFY `id_details_commande` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id_membre`) ON DELETE SET NULL;

--
-- Contraintes pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD CONSTRAINT `details_commande_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE CASCADE,
  ADD CONSTRAINT `details_commande_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

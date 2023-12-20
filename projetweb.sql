-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 20 déc. 2023 à 18:18
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(5) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `pseudo`, `email`, `motdepasse`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin#mdp');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `ID` int(5) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `alias` varchar(80) NOT NULL,
  `dateNaissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`ID`, `nom`, `alias`, `dateNaissance`) VALUES
(1, 'Tiakola', 'Tiakola', '1994-08-05'),
(2, 'Diakité Ibrahima', 'Gazo', '1994-08-05'),
(3, 'Ambroise Germain Louis', 'La fève', '0199-06-26'),
(4, 'Curry Denzel', 'Denzel Curry ', '1995-02-16'),
(5, 'Pierrick Bofenda Henoc', 'Leto', '1997-11-27'),
(6, 'Drake Graham', 'Drake', '1986-08-29'),
(7, 'Menace Santana', 'Menace Santana', '1998-12-05'),
(8, 'Joubite Dessalines', 'K-dilac', '1993-04-07'),
(9, 'SweepersENT', 'blake', '1993-04-07'),
(10, 'Lil mabu', 'Matthew Peter DeLuca', '1993-04-07'),
(11, 'Jordan Terrell Carter', 'Playboi Carti', '1993-04-07'),
(12, 'beendo z', 'beendo z', '1998-12-05'),
(13, 'H.LA DROGUE', 'H.LA DROGUE', '1998-12-05'),
(14, 'Noah Smith', 'Yeat', '1993-04-07'),
(15, 'DJ Hamida, Cheb rayan, RJ', 'DJ Hamida, Cheb rayan, RJ', '1993-04-07');

-- --------------------------------------------------------

--
-- Structure de la table `cd`
--

CREATE TABLE `cd` (
  `IDcd` int(5) NOT NULL,
  `nomCD` varchar(80) NOT NULL,
  `dateSortie` date NOT NULL,
  `imagePochette` varchar(2000) NOT NULL,
  `prix` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cd`
--

INSERT INTO `cd` (`IDcd`, `nomCD`, `dateSortie`, `imagePochette`, `prix`) VALUES
(1, 'Mélo', '2023-12-01', 'https://static.fnac-static.com/multimedia/Images/FR/NR/d2/88/db/14387410/1540-1/tsp20220504115136/Melo-Edition-1.jpg', 18),
(2, 'Drill FR', '2021-02-01', 'https://static.fnac-static.com/multimedia/Images/FR/NR/bd/1e/ca/13246141/1540-1/tsp20210201140132/Drill-FR.jpg', 55),
(3, 'ERRRR', '2021-12-17', 'https://images.genius.com/1f1644744e853ba20c1f0659c6994988.1000x1000x1.jpg', 4555),
(4, 'Melt My Eyez See Your Future\r\n', '2022-09-01', 'https://www.goutemesdisques.com/uploads/tx_gmdchron/pi1/ab67616d0000b2735b924aa009b61b6b9d831eec.jpg', 222),
(5, '17%', '2021-09-01', 'https://static.fnac-static.com/multimedia/Images/FR/NR/0e/fb/d1/13761294/1540-1/tsp20210831115225/17.jpg', 111),
(6, 'Scorpion', '2018-06-29', 'https://m.media-amazon.com/images/I/81fpG8LkWkL._UF1000,1000_QL80_.jpg', 69),
(7, 'Guapman', '2022-06-29', 'https://cdns-images.dzcdn.net/images/cover/6b9735f47cf4b3f394721fa260de0521/264x264.jpg', 55),
(8, 'MANVI BOW', '2023-09-11', 'https://cdns-images.dzcdn.net/images/cover/b6c34016465d73f17db28d77cbb18e2c/264x264.jpg', 400),
(9, 'Sdot Go - WNA', '2017-04-17', 'https://i1.sndcdn.com/artworks-xQM0APcj0rU8yxvf-eI5xhQ-t500x500.png', 40),
(10, 'MATHEMATICAL DISRESPECT', '2017-04-17', 'https://i1.sndcdn.com/artworks-NjL6KRSbqmBSGzP7-2z44NQ-t240x240.jpg', 20),
(11, 'Playboi Carti', '2018-06-29', 'https://cdns-images.dzcdn.net/images/cover/0ae8e05f734268cbe5aae06f96f2b1f2/500x500.jpg', 50),
(12, 'L&#039;élu', '2018-06-29', 'https://cdns-images.dzcdn.net/images/cover/cae89f595d3f4e98f866292f1476b1af/264x264.jpg', 40),
(13, 'H', '2017-04-17', 'https://cdns-images.dzcdn.net/images/cover/9f48afad0ee515b7ea8f65cb189eba16/500x500.jpg', 50),
(14, 'Out thë way', '2018-06-29', 'https://cdns-images.dzcdn.net/images/cover/7f3f001774806c8d3e62b42cc41a5a2e/500x500.jpg', 30),
(15, 'N&#039;Brik N&#039;Brik', '2018-06-29', 'https://cdns-images.dzcdn.net/images/cover/bd0825f61ac6f6f5dd5b5a3342851481/350x350.jpg', 58888);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `IDcdpanier` int(5) NOT NULL,
  `nomCD` varchar(80) NOT NULL,
  `dateSortie` date NOT NULL,
  `imagePochette` varchar(500) NOT NULL,
  `prix` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`IDcdpanier`, `nomCD`, `dateSortie`, `imagePochette`, `prix`) VALUES
(1, 'ass', '2023-12-01', 'asas', 4);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `motdepasse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`nom`, `prenom`, `email`, `motdepasse`) VALUES
('test', 'test', 'test@gmail.com', 'test');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `cd`
--
ALTER TABLE `cd`
  ADD PRIMARY KEY (`IDcd`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`IDcdpanier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD CONSTRAINT `auteur_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `cd` (`IDcd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Jeu 15 Décembre 2016 à 16:27
-- Version du serveur :  5.5.49-log
-- Version de PHP :  7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_potter`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` varchar(255) NOT NULL,
  `bois` varchar(255) NOT NULL,
  `coeur` varchar(255) NOT NULL,
  `longueur` varchar(255) NOT NULL,
  `confirm` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `titre`, `image`, `description`, `prix`, `bois`, `coeur`, `longueur`, `confirm`) VALUES
(5, 'Brontius', 'bag01.png', 'Idéale pour le duel, cette baguette conviendra parfaitement aux sorciers à l\'esprit vif et adaptable. Le coeur en crin de licorne permettra à son sorcier de réaliser rapidement des sorts de puissance modérée. ', '9 Gallions et 3 mornilles', 'Ebène', 'Crin de licorne', '22', 1),
(22, 'Yannus', 'bag02.png', 'Grâce à son bois docile il est conseillé de mettre cette baguette entre les mains d\'inventeurs et d\'innovateurs. La puissance résidant en son cœur donnera vie à tous les souhaits de son propriétaire.\r\n', ' 12 Gallions et 6 mornilles', 'Hêtre', 'Ventricule de dragon', '28', 1),
(24, 'Monteirus', 'bag03.png', 'Cette baguette en acacia ne conviendra qu’aux sorciers les plus rigoureux et pointus. Légère et maniable elle sera un parfait instrument fidèle.', '8 Gallions et 12 mornilles', 'Acacia', 'Plume de phénix', '19', 1),
(25, 'Roccus', 'bag04.png', 'Cette baguette est très fidèle mais peu puissante. Elle convient à tout type de sorciers.', '9 Gallions et 25 mornilles', 'Ebène', 'Crin de licorne', '27', 1),
(26, 'Ugus', 'bag05.png', 'Une baguette puissante mais peu fidèle seuls les grands sorciers peuvent contrôler cette baguette.', '7 Gallions et 10 mornilles', 'Acacia', 'Plume de phoenix', '23', 1),
(27, 'Fannya', 'bag06.png', 'Une baguette qui convient aux sorciers possédant des talent cachés.', '8 Gallions et 13 mornilles', 'Hêtre', 'Crin de licorne', '25', 1),
(28, 'Lanna', 'bag07.png', 'Cette baguette est utilisée par les sorciers et sorcières pour affûter leurs sortilèges et obtenir de meilleurs résultats.', '6 Gallions et 3 mornilles', 'Hêtre', 'Coeur de dragon', '22', 1),
(29, 'Benedictus', 'bag08.png', 'Cette baguette est idéale pour les débutants voulant s’initier à la magie.', '5 Gallions et 5 mornilles', 'Acacia', 'Plume de phoenix', '17', 1),
(30, 'Mounus', 'bag09.png', 'Cette baguette en Ébène ne conviendra qu’aux sorciers les plus aguerri. Lourde et peu maniable mais très puissante.', '3 Gallions et 6 mornilles', 'Ebène', 'Crin de licorne', '21', 1),
(31, 'Benchus', 'bag10.png', 'Cette baguette conviendra particulièrement aux sorciers aguerris ayant de l\'expérience. Peu maniable elle sera de piètre utilité au combat mais se révélera fantastique pour la métamorphose.', '10 Gallions et 5 mornilles', 'Acacia', 'Ventricule de dragon', '32', 1),
(32, 'Heticus', 'bag11.png', 'Très maniable, cette baguette saura contenter les sorciers les plus vivaces.', '8 Gallions et 15 mornilles', 'Chêne', 'Crin de licorne', '18', 1),
(33, 'Heisenbergus', 'bag12.png', 'Cette baguette est particulièrement recommandée pour les sortilèges de défense. Son cœur en plume de phénix se révélera très efficace pour les sorts curatifs. ', '18 Gallions et 2 mornilles', 'Hêtre', 'Plume de phénix', '21', 1),
(34, 'Hagridus', 'bag13.png', 'Cette baguette au bois solide saura passer les épreuves du temps avec son sorcier. ', '11 Gallions et 4 mornilles', 'Acacia', 'Ventricule de dragon', '23', 1),
(35, 'Pottus', 'bag14.png', 'Crée dans la plus grande tradition des Ollivanders cette baguette est polyvalente. Réservée aux sorciers expérimentés elle pourra toutefois convenir aux apprentis sorciers ambitieux.', '10 Gallions et 9 mornilles.', 'Ebène', 'Plume de phénix', '20', 1),
(36, 'Ronus', 'bag15.png', 'La courbure particulière de cette baguette la rend excellente en métamorphose. ', '7 Gallions et 14 mornilles', 'Hêtre', 'Crin de licorne', '17', 1),
(37, 'Hermiona', 'bag16.png', 'La combinaison du bois et du cœur de cette baguette suit le modèle du grand sorcier Dumbledore. Réputée fiable elle est polyvalente.', '10 Gallions et 2 mornilles', 'Acacia', 'Plume de Phénix', '19', 1),
(38, 'GitHubus', 'bag17.png', 'Dernière née de l\'atelier Ollivander cette baguette est parfaite pour les apprentis sorciers débutant leur formation.', '9 Gallions et 5 mornilles', 'Ebène', 'Ventricule de Dragon', '20', 1),
(39, 'Hordus', 'bag18.png', 'Solide et maniable cette baguette sera particulièrement utile face aux créatures maléfiques. Elle augmente l\'efficacité des sorts de patronus.', '14 Gallions et 12 mornilles', 'Hêtre', 'Plume de phéinx', '21', 1),
(40, 'Alliancia', 'bag19.png', 'Cette baguette légère puise sa force dans son cœur pur. Elle convient particulièrement aux femmes.', '11 Gallions et 6 mornilles', 'Hêtre', 'Crin de licorne', '17', 1),
(41, 'Rogue Onus', 'bag20.png', 'Parmi les plus fines de la boutique, cette baguette se destine aux sorciers les plus agiles. ', '11 Gallions et 7 mornilles', 'Ebène', 'Plume de phénix', '20', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

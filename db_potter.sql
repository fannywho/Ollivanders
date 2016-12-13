-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2016 at 02:26 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_potter`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` varchar(255) NOT NULL,
  `bois` varchar(255) NOT NULL,
  `coeur` varchar(255) NOT NULL,
  `longueur` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `titre`, `image`, `description`, `prix`, `bois`, `coeur`, `longueur`) VALUES
(5, 'TITRE1', 'bag01.jpg', 'Idéale pour le duel, cette baguette conviendra parfaitement aux sorciers à l''esprit vif et adaptable. Le coeur en crin de licorne permettra à son sorcier de réaliser rapidement des sorts de puissance modérée. ', '9 Gallions et 3 mornilles', 'Ebène', 'Crin de licorne', '22cm'),
(22, 'TITRE2', 'bag02.jpg', 'Grâce à son bois docile il est conseillé de mettre cette baguette entre les mains d''inventeurs et d''innovateurs. La puissance résidant en son cœur donnera vie à tous les souhaits de son propriétaire.\r\n', ' 12 Gallions et 6 mornilles', 'Hêtre', 'Ventricule de dragon', '28cm'),
(24, 'TITRE3', 'bag03.jpg', 'Cette baguette en acacia ne conviendra qu’aux sorciers les plus rigoureux et pointus. Légère et maniable elle sera un parfait instrument fidèle.', '8 Gallions et 12 mornilles', 'Acacia', 'Plume de phénix', '19cm'),
(25, 'TITRE4', 'bag04.jpg', 'Cette baguette est très fidèle mais peu puissante. Elle convient à tout type de sorciers.', '9 Gallions et 25 mornilles', 'Ebène', 'Crin de licorne', '27,5cm'),
(26, 'TITRE5', 'bag05.jpg', 'Une baguette puissante mais peu fidèle seuls les grands sorciers peuvent contrôler cette baguette.', '7 Gallions et 10 mornilles', 'Acacia', 'Plume de phoenix', '23,5cm'),
(27, 'TITRE6', 'bag06.jpg', 'Une baguette qui convient aux sorciers possédant des talent cachés.', '8 Gallions et 13 mornilles', 'Hêtre', 'Crin de licorne', '25,5cm'),
(28, 'TITRE7', 'bag07.jpg', 'Cette baguette est utilisée par les sorciers et sorcières pour affûter leurs sortilèges et obtenir de meilleurs résultats.', '6 Gallions et 3 mornilles', 'Hêtre', 'Coeur de dragon', '22,5cm'),
(29, 'TITRE8', 'bag08.jpg', 'Cette baguette est idéale pour les débutants voulant s’initier à la magie.', '5 Gallions et 5 mornilles', 'Acacia', 'Plume de phoenix', '17,5cm'),
(30, 'TITRE9', 'bag09.jpg', 'Cette baguette en Ébène ne conviendra qu’aux sorciers les plus aguerri. Lourde et peu maniable mais très puissante.', '3 Gallions et 6 mornilles', 'Ebène', 'Crin de licorne', '21,5cm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

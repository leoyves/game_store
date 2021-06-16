-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 16 juin 2021 à 13:16
-- Version du serveur :  5.7.19
-- Version de PHP :  7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `game_store`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-06-10-152445', 'App\\Database\\Migrations\\CreateProducts', 'default', 'App', 1623339359, 1),
(2, '2021-06-11-151855', 'App\\Database\\Migrations\\CreateUsers', 'default', 'App', 1623424990, 2);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,0) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`) VALUES
(1, 'test', 'tout est bon ', '12'),
(2, 'aze', 'ndustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '13'),
(3, 'ituu', 'ndustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '36'),
(4, 'uyjugy', 'ndustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5'),
(5, 'kyghyu', 'ndustry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '8'),
(6, 'test du titre a voir', 'dfgdif efiofydf fuofuy fdifoifudo ff ffifofy fdf f frpo ffiopfdf dfp df dfpoff d ggdgpg d fpfufpo oe e eepupoepoie ffurpigyrgroig roigirgpr oi goirgur oprei gfupo fe pfrfo oog yfidofhdi o g yfhdfudh fdifuogdfduf dfd fdopfidyfod iufdff odi fd pfdyig odipgy odp gdpgu pdg', '12'),
(7, 'kjfhdjkdf dflkdfyd fdlfydhfid hffdiflf', 'diufiudfoi dfposiuf sfiofu pfouf pfuos fposufsfopiiu oisqpdfuyi odsff  feezpofieyufop azifupoiez udfi yfzpiudf opf poc yfuheoffi azeyfoi yf fopae zifyoiu do îfyazfgherufi oe gfoa uiygfoe fo oergyrhfa iohe  furioez', '10');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `created_at`) VALUES
(1, 'test@test.com', '$2y$10$6l7UYsvXWjcPia5tm0rKguLJi4BrJGOT5zM2M8KvqmG.0p9D5fPVm', NULL),
(2, 'test@test.com', '$2y$10$zJI3Ey/RTsAw5uSwiZmSKuQP7kerH3.RtWfXERvE9/ZeRqFo1oXGG', NULL),
(3, 'test1@try.com', '$2y$10$z0PM9G8YOMucXiP4j/wW0uZiigpn3.PNT40OQb38pofPx4/lUxNnW', NULL),
(4, 'test3@test.com', '$2y$10$rj4tXmnfh4TG5F4xYa.Ho.Hu9uLWJHFuquLaH0qIzAo/HMOznb0ES', NULL),
(5, 'test4@test.com', '$2y$10$y/L774.Cg9fu3pR5MxSZK.85UXn9NbbfgqDQq.5whoOky8SnhFB/O', NULL),
(6, 'lnerd937@gmail.com', '$2y$10$ybGHpmKo07SBW4MD0c7MqO4YTO5XTJI63rmtmT56DGkWSObgMK4iC', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

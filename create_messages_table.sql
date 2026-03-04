-- Création de la base de données si elle n'existe pas
CREATE DATABASE IF NOT EXISTS `mohammed_abdou` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mohammed_abdou`;

-- Création de la table messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_enregistrement` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

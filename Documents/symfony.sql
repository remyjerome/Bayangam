-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mer 18 Mai 2016 à 22:02
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `symfony`
--
CREATE DATABASE IF NOT EXISTS `symfony` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `symfony`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `Auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Article` longtext COLLATE utf8_unicode_ci NOT NULL,
  `DateAjout` datetime NOT NULL,
  `DateEvenement` date NOT NULL,
  `Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Contenu` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `Auteur`, `Titre`, `Article`, `DateAjout`, `DateEvenement`, `Type`, `Contenu`) VALUES
(2, 'Admin', 'Le grand départ', 'Nous décolleront de Roissy ce soir à 22h. Chaque jour, vous pourrez vivre le voyage comme nous à travers notre blog.', '2016-05-06 14:59:31', '2011-07-01', '', ''),
(3, 'Admin', 'Les élèves!', 'Nous avons une idée plus précise des élèves, grâce aux fiches d''inscription diffusées puis collectées par M. Méli. \r\nDeux groupes seront constitués : les plus jeunes (CM1 - 5 ème) suivront nos cours le matin, les plus âgés (3ème - 1ere) l''après midi.', '2016-05-06 15:15:19', '2011-07-04', '', ''),
(4, 'Admin', 'Les photos des élèves...', 'Retrouvez ici la liste définitive des deux groupes. Mais surtout, les voici les voilà..les trombinoscopes! Voici le groupe du Matin et celui de l''après-midi\r\n\r\nDevant le nombre de personnes désirant rejoindre nos cours, nous décidons d''étaler cette première session de cours sur trois semaines et de réserver la quatrième à d''autres élèves... qui eux aussi participeront à un nouveau trombinoscope?', '2016-05-06 15:16:50', '2011-07-06', '', ''),
(6, 'Admin', 'Connectés à nouveau', 'Nous avons remis en ligne des trombinoscopes un brin plus présentables (matin, aprem), et surtout la liste des élèves de la semaine passée. Nous avons corrigés les copies et apporterons donc quelques modifications aux groupes.', '2016-05-06 15:17:53', '2011-07-08', '', ''),
(7, 'Admin', 'Escapade matinale à Yaoundé.', 'Tous les hôtels du monde se ressemblent.. ou presque. \r\nFrancis nous a parlé d''un musée, le Musée National du Cameroun.\r\nMais voilà, ce matin Francis n''est pas là. Il est allé retrouver sa famille pour quelques heures. Sortir, rester à l''hôtel?\r\nAllez, c''est parti. Mettons donc le nez dehors.\r\n\r\nPour ceux qui ont le goût de l''impromptu, retrouvez un bref aperçu de cette matinée sur mon blog.\r\nEn attendant, nous nous permettons juste de passer un p''tit salut amical à Naomie et Pascal. \r\n\r\nMerci pour votre accueil,.. et pour la saveur acidulée du ''Top Citron''!', '2016-05-06 15:18:30', '2011-07-17', '', ''),
(8, 'Admin', 'Merci pour votre soutien', 'Vous êtes revenu plus de 400 fois sur le site en Juillet pour suivre nos aventures et nous en sommes très touchés. En espérant qu''à travers nous vous ayez pu voyager aussi.', '2016-05-06 15:23:35', '2012-01-01', '', ''),
(9, 'Admin', 'Creation du nouveau site web', 'Création du nouveau site web dans le cadre d''un projet de licence informatique.', '2016-05-06 15:24:57', '2016-05-09', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id` int(11) NOT NULL,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `auteur`
--

INSERT INTO `auteur` (`id`, `Nom`, `Prenom`) VALUES
(1, 'jerome', 'remy'),
(2, 'weinkopf', 'nicolas'),
(3, 'Smith', 'Smith');

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `Titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Article` longtext COLLATE utf8_unicode_ci NOT NULL,
  `DateAjout` datetime NOT NULL,
  `DateEvenement` date NOT NULL,
  `Photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Video` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `time_line`
--

CREATE TABLE `time_line` (
  `id` int(11) NOT NULL,
  `Annee` date NOT NULL,
  `Commentaire` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `wp_user`
--

CREATE TABLE `wp_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `wp_user`
--

INSERT INTO `wp_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'admin', 'admin', 'admin@local.info', 'admin@local.info', 1, 'i4ja0su5l7kgcwgcww0ogso4cc48o8s', '$2y$13$i4ja0su5l7kgcwgcww0ogeBOLVUu402wlX4hV.Mj/6h.SjhaFExPi', '2016-05-18 21:42:21', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `time_line`
--
ALTER TABLE `time_line`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wp_user`
--
ALTER TABLE `wp_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_A9156D5592FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_A9156D55A0D96FBF` (`email_canonical`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `time_line`
--
ALTER TABLE `time_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `wp_user`
--
ALTER TABLE `wp_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

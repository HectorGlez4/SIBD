-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2016 a las 16:59:16
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `horsefarm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(5) NOT NULL AUTO_INCREMENT,
  `datee` date NOT NULL,
  `time` time NOT NULL,
  `description` varchar(300) NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(5) NOT NULL AUTO_INCREMENT,
  `title` int(24) NOT NULL,
  `texte` int(255) NOT NULL,
  `image` varchar(64) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automatic_task`
--

CREATE TABLE IF NOT EXISTS `automatic_task` (
  `id_autTask` int(5) NOT NULL AUTO_INCREMENT,
  `frequence` int(3) NOT NULL,
  `id_task` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_autTask`),
  KEY `id_task` (`id_task`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bank_account`
--

CREATE TABLE IF NOT EXISTS `bank_account` (
  `id_bank_account` int(5) NOT NULL AUTO_INCREMENT,
  `id_account` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_bank_account`),
  KEY `id_account` (`id_account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bank_historic`
--

CREATE TABLE IF NOT EXISTS `bank_historic` (
  `id_bank_hist` int(5) NOT NULL AUTO_INCREMENT,
  `transaction` varchar(255) NOT NULL,
  `id_account` int(5) DEFAULT NULL,
  `id_bank_account` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_bank_hist`),
  KEY `id_account` (`id_account`),
  KEY `id_bank_account` (`id_bank_account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categ_items`
--

CREATE TABLE IF NOT EXISTS `categ_items` (
  `id_categ` int(5) NOT NULL AUTO_INCREMENT,
  `group` int(3) NOT NULL,
  `id_item` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_categ`),
  KEY `id_item` (`id_item`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competition`
--

CREATE TABLE IF NOT EXISTS `competition` (
  `id_comp` int(5) NOT NULL AUTO_INCREMENT,
  `involved_item` varchar(64) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `id_manager` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_comp`),
  KEY `id_manager` (`id_manager`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equestrain_center`
--

CREATE TABLE IF NOT EXISTS `equestrain_center` (
  `id_center` int(5) NOT NULL AUTO_INCREMENT,
  `capacity` int(5) NOT NULL,
  `id_account` int(5) DEFAULT NULL,
  `id_infrastucture` int(5) DEFAULT NULL,
  `id_shop` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_center`),
  KEY `id_account` (`id_account`),
  KEY `id_infrastucture` (`id_infrastucture`),
  KEY `id_shop` (`id_shop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horse`
--

CREATE TABLE IF NOT EXISTS `horse` (
  `id_horse` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `general_state` varchar(64) NOT NULL,
  `description` varchar(64) NOT NULL,
  `race` varchar(64) NOT NULL,
  `level` int(5) NOT NULL,
  `experience` int(5) NOT NULL,
  `id_sickness` int(5) DEFAULT NULL,
  `id_injury` int(5) DEFAULT NULL,
  `id_parasite` int(5) DEFAULT NULL,
  `id_infrastucture` int(5) DEFAULT NULL,
  `id_state` int(5) DEFAULT NULL,
  `id_item` int(5) DEFAULT NULL,
  `id_horse_attrib` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_horse`),
  KEY `id_sickness` (`id_sickness`),
  KEY `id_injury` (`id_injury`),
  KEY `id_parasite` (`id_parasite`),
  KEY `id_infrastucture` (`id_infrastucture`),
  KEY `id_state` (`id_state`),
  KEY `id_item` (`id_item`),
  KEY `id_horse_attrib` (`id_horse_attrib`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `horse`
--

INSERT INTO `horse` (`id_horse`, `name`, `general_state`, `description`, `race`, `level`, `experience`, `id_sickness`, `id_injury`, `id_parasite`, `id_infrastucture`, `id_state`, `id_item`, `id_horse_attrib`) VALUES
(1, 'pony', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'caballito', 'very good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'caballito', 'very good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'hello', 'very good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'caballito', 'sick', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'caballito', 'sick', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'caballito', 'sick', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'richard', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'caballito', 'good', 'caballito', 'good', 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horse_attrib`
--

CREATE TABLE IF NOT EXISTS `horse_attrib` (
  `id_horse_attrib` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_horse_attrib`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horse_club`
--

CREATE TABLE IF NOT EXISTS `horse_club` (
  `id_club` int(5) NOT NULL AUTO_INCREMENT,
  `capacity` int(5) NOT NULL,
  `infrastucture_list` varchar(200) DEFAULT NULL,
  `competition_list` varchar(200) DEFAULT NULL,
  `id_account` int(5) DEFAULT NULL,
  `id_manager` int(5) DEFAULT NULL,
  `id_comp` int(5) DEFAULT NULL,
  `id_shop` int(5) DEFAULT NULL,
  `id_infrastucture` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_club`),
  KEY `id_account` (`id_account`),
  KEY `id_manager` (`id_manager`),
  KEY `id_comp` (`id_comp`),
  KEY `id_shop` (`id_shop`),
  KEY `id_infrastucture` (`id_infrastucture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infrastructure`
--

CREATE TABLE IF NOT EXISTS `infrastructure` (
  `id_infrastucture` int(5) NOT NULL AUTO_INCREMENT,
  `price` int(5) NOT NULL,
  `level` int(5) NOT NULL,
  `group` int(5) NOT NULL,
  `ressource_consumption` int(5) NOT NULL,
  `items_capacity` int(5) NOT NULL,
  `horses_capacity` int(5) NOT NULL,
  `type` varchar(64) NOT NULL,
  `description` varchar(64) NOT NULL,
  `id_item` int(5) DEFAULT NULL,
  `id_shop` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_infrastucture`),
  KEY `id_item` (`id_item`),
  KEY `id_shop` (`id_shop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `injury`
--

CREATE TABLE IF NOT EXISTS `injury` (
  `id_injury` int(5) NOT NULL AUTO_INCREMENT,
  `description` varchar(64) NOT NULL,
  PRIMARY KEY (`id_injury`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventary`
--

CREATE TABLE IF NOT EXISTS `inventary` (
  `id_inventary` int(5) NOT NULL AUTO_INCREMENT,
  `id_item` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_inventary`),
  KEY `id_item` (`id_item`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id_item` int(5) NOT NULL AUTO_INCREMENT,
  `level` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `description` varchar(64) NOT NULL,
  `type` varchar(64) NOT NULL,
  `id_shop` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_item`),
  KEY `id_shop` (`id_shop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `id_manager` int(5) NOT NULL AUTO_INCREMENT,
  `id_account` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_manager`),
  KEY `id_account` (`id_account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mental_attrib`
--

CREATE TABLE IF NOT EXISTS `mental_attrib` (
  `id_mental` int(5) NOT NULL AUTO_INCREMENT,
  `sociability` int(3) NOT NULL,
  `intelligence` int(3) NOT NULL,
  `humeur` int(3) NOT NULL,
  `id_horse_attrib` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_mental`),
  KEY `id_horse_attrib` (`id_horse_attrib`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newspaper`
--

CREATE TABLE IF NOT EXISTS `newspaper` (
  `id_newspaper` int(5) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `news` varchar(300) NOT NULL,
  `specific_key_point` varchar(300) NOT NULL,
  `id_agenda` int(5) DEFAULT NULL,
  `id_article` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_newspaper`),
  KEY `id_agenda` (`id_agenda`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `other`
--

CREATE TABLE IF NOT EXISTS `other` (
  `id_other` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` varchar(300) NOT NULL,
  `id_article` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_other`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parasite`
--

CREATE TABLE IF NOT EXISTS `parasite` (
  `id_parasite` int(5) NOT NULL AUTO_INCREMENT,
  `description` varchar(300) NOT NULL,
  PRIMARY KEY (`id_parasite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `physical_attrib`
--

CREATE TABLE IF NOT EXISTS `physical_attrib` (
  `id_physical` int(5) NOT NULL AUTO_INCREMENT,
  `resistance` int(3) NOT NULL,
  `endurance` int(3) NOT NULL,
  `detente` int(3) NOT NULL,
  `speed` int(3) NOT NULL,
  `id_horse_attrib` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_physical`),
  KEY `id_horse_attrib` (`id_horse_attrib`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planning`
--

CREATE TABLE IF NOT EXISTS `planning` (
  `id_planning` int(5) NOT NULL AUTO_INCREMENT,
  `id_autTask` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_planning`),
  KEY `id_autTask` (`id_autTask`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id_account` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(24) NOT NULL,
  `lastname` varchar(24) NOT NULL,
  `sex` binary(1) NOT NULL,
  `birthday` date NOT NULL,
  `phone` int(10) NOT NULL,
  `mail_address` varchar(100) NOT NULL,
  `avatar` varchar(64) NOT NULL,
  `description` varchar(300) NOT NULL,
  `website` varchar(64) NOT NULL,
  `ip_address` varchar(64) NOT NULL,
  `inscription_date` date NOT NULL,
  `last_login_date` date NOT NULL,
  `pseudonym` varchar(24) NOT NULL,
  `id_infrastucture` int(5) DEFAULT NULL,
  `id_club` int(5) DEFAULT NULL,
  `id_inventary` int(5) DEFAULT NULL,
  `id_task` int(5) DEFAULT NULL,
  `id_bank_account` int(5) DEFAULT NULL,
  `id_horse` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_account`),
  KEY `id_infrastucture` (`id_infrastucture`),
  KEY `id_club` (`id_club`),
  KEY `id_bank_account` (`id_bank_account`),
  KEY `id_horse` (`id_horse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicity`
--

CREATE TABLE IF NOT EXISTS `publicity` (
  `id_pub` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` varchar(300) NOT NULL,
  `id_article` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_pub`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `race`
--

CREATE TABLE IF NOT EXISTS `race` (
  `id_race` int(5) NOT NULL AUTO_INCREMENT,
  `description` varchar(64) NOT NULL,
  `id_article` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_race`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id_shop` int(5) NOT NULL AUTO_INCREMENT,
  `element` enum('equestrian_center','horse_club','infrastructure','item') NOT NULL,
  PRIMARY KEY (`id_shop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sickness`
--

CREATE TABLE IF NOT EXISTS `sickness` (
  `id_sickness` int(5) NOT NULL AUTO_INCREMENT,
  `description` varchar(64) NOT NULL,
  PRIMARY KEY (`id_sickness`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id_state` int(5) NOT NULL AUTO_INCREMENT,
  `health` int(3) NOT NULL,
  `moral` int(3) NOT NULL,
  `stress` int(3) NOT NULL,
  `tiredness` int(3) NOT NULL,
  `hunger` int(3) NOT NULL,
  `cleanliness` int(3) NOT NULL,
  PRIMARY KEY (`id_state`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id_task` int(5) NOT NULL AUTO_INCREMENT,
  `action` varchar(64) NOT NULL,
  PRIMARY KEY (`id_task`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `weather`
--

CREATE TABLE IF NOT EXISTS `weather` (
  `id_weather` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` varchar(64) NOT NULL,
  `id_article` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_weather`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `automatic_task`
--
ALTER TABLE `automatic_task`
  ADD CONSTRAINT `automatic_task_ibfk_1` FOREIGN KEY (`id_task`) REFERENCES `task` (`id_task`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `bank_account`
--
ALTER TABLE `bank_account`
  ADD CONSTRAINT `bank_account_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `player` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `bank_historic`
--
ALTER TABLE `bank_historic`
  ADD CONSTRAINT `bank_historic_ibfk_2` FOREIGN KEY (`id_bank_account`) REFERENCES `bank_account` (`id_bank_account`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bank_historic_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `player` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `categ_items`
--
ALTER TABLE `categ_items`
  ADD CONSTRAINT `categ_items_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `item` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `competition`
--
ALTER TABLE `competition`
  ADD CONSTRAINT `competition_ibfk_1` FOREIGN KEY (`id_manager`) REFERENCES `manager` (`id_manager`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `equestrain_center`
--
ALTER TABLE `equestrain_center`
  ADD CONSTRAINT `equestrain_center_ibfk_3` FOREIGN KEY (`id_shop`) REFERENCES `shop` (`id_shop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `equestrain_center_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `player` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `equestrain_center_ibfk_2` FOREIGN KEY (`id_infrastucture`) REFERENCES `infrastructure` (`id_infrastucture`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horse`
--
ALTER TABLE `horse`
  ADD CONSTRAINT `horse_ibfk_1` FOREIGN KEY (`id_sickness`) REFERENCES `sickness` (`id_sickness`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horse_ibfk_2` FOREIGN KEY (`id_injury`) REFERENCES `injury` (`id_injury`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horse_ibfk_3` FOREIGN KEY (`id_parasite`) REFERENCES `parasite` (`id_parasite`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horse_ibfk_4` FOREIGN KEY (`id_infrastucture`) REFERENCES `infrastructure` (`id_infrastucture`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horse_ibfk_5` FOREIGN KEY (`id_state`) REFERENCES `state` (`id_state`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horse_ibfk_6` FOREIGN KEY (`id_item`) REFERENCES `item` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horse_ibfk_7` FOREIGN KEY (`id_horse_attrib`) REFERENCES `horse_attrib` (`id_horse_attrib`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horse_club`
--
ALTER TABLE `horse_club`
  ADD CONSTRAINT `horse_club_ibfk_5` FOREIGN KEY (`id_infrastucture`) REFERENCES `infrastructure` (`id_infrastucture`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horse_club_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `player` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horse_club_ibfk_2` FOREIGN KEY (`id_manager`) REFERENCES `manager` (`id_manager`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horse_club_ibfk_3` FOREIGN KEY (`id_comp`) REFERENCES `competition` (`id_comp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horse_club_ibfk_4` FOREIGN KEY (`id_shop`) REFERENCES `shop` (`id_shop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `infrastructure`
--
ALTER TABLE `infrastructure`
  ADD CONSTRAINT `infrastructure_ibfk_2` FOREIGN KEY (`id_shop`) REFERENCES `shop` (`id_shop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `infrastructure_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `item` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventary`
--
ALTER TABLE `inventary`
  ADD CONSTRAINT `inventary_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `item` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`id_shop`) REFERENCES `shop` (`id_shop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `player` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mental_attrib`
--
ALTER TABLE `mental_attrib`
  ADD CONSTRAINT `mental_attrib_ibfk_1` FOREIGN KEY (`id_horse_attrib`) REFERENCES `horse_attrib` (`id_horse_attrib`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `newspaper`
--
ALTER TABLE `newspaper`
  ADD CONSTRAINT `newspaper_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `newspaper_ibfk_1` FOREIGN KEY (`id_agenda`) REFERENCES `agenda` (`id_agenda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `other`
--
ALTER TABLE `other`
  ADD CONSTRAINT `other_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `physical_attrib`
--
ALTER TABLE `physical_attrib`
  ADD CONSTRAINT `physical_attrib_ibfk_1` FOREIGN KEY (`id_horse_attrib`) REFERENCES `horse_attrib` (`id_horse_attrib`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `planning`
--
ALTER TABLE `planning`
  ADD CONSTRAINT `planning_ibfk_1` FOREIGN KEY (`id_autTask`) REFERENCES `automatic_task` (`id_autTask`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_4` FOREIGN KEY (`id_horse`) REFERENCES `horse` (`id_horse`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`id_infrastucture`) REFERENCES `infrastructure` (`id_infrastucture`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `player_ibfk_2` FOREIGN KEY (`id_club`) REFERENCES `horse_club` (`id_club`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `player_ibfk_3` FOREIGN KEY (`id_bank_account`) REFERENCES `bank_account` (`id_bank_account`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `publicity`
--
ALTER TABLE `publicity`
  ADD CONSTRAINT `publicity_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `race`
--
ALTER TABLE `race`
  ADD CONSTRAINT `race_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `weather`
--
ALTER TABLE `weather`
  ADD CONSTRAINT `weather_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

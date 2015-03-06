-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-03-2015 a las 19:21:14
-- Versión del servidor: 5.5.41-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `rad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `action`
--

CREATE TABLE IF NOT EXISTS `action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `action`
--

INSERT INTO `action` (`id`, `action`, `create_at`, `update_at`) VALUES
(1, 'Entrada', '0000-00-00 00:00:00', '2015-02-09 03:16:18'),
(2, 'Salida', '0000-00-00 00:00:00', '2015-02-09 03:16:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departament`
--

CREATE TABLE IF NOT EXISTS `departament` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `departament`
--

INSERT INTO `departament` (`id`, `name`, `create_at`, `update_at`) VALUES
(1, 'Docente', '2015-02-08 18:01:06', '2015-02-09 03:01:06'),
(3, 'Administración', '2015-02-08 18:01:54', '2015-02-09 03:01:54'),
(4, 'Ambiente', '2015-02-08 18:01:54', '2015-02-09 03:01:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `slug` varchar(255) NOT NULL,
  `cedula` int(11) NOT NULL,
  `departament_id` int(11) NOT NULL,
  `hours` int(11) DEFAULT NULL,
  `code` varchar(6) NOT NULL,
  `fingerprint` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `departament_id` (`departament_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `employee`
--

INSERT INTO `employee` (`id`, `name`, `birthday`, `slug`, `cedula`, `departament_id`, `hours`, `code`, `fingerprint`, `create_at`, `update_at`) VALUES
(1, 'Luis Carlos Pinzón', '1997-10-21', 'luis-carlos-pinzon', 24214875, 1, 48, 'L47C26', '', '2015-02-08 18:04:16', '2015-03-02 22:19:16'),
(2, 'Carmen Maura Peralta', '1997-02-03', 'carmen-maura-peralta', 26474236, 3, NULL, 'C2014M', '', '2015-02-08 18:05:46', '2015-03-02 22:16:14'),
(3, 'Angel de Jesús Quilarque', '1997-07-23', 'angel-de-jesus-quilarque', 25974120, 1, 28, 'A54895', '', '2015-02-08 18:07:34', '2015-03-02 22:17:08'),
(4, 'Kevin Alexander Chourio', '1997-01-01', 'kevin-alexander-chourio', 25471369, 4, NULL, 'K14879', '', '2015-02-08 18:08:57', '2015-03-02 22:17:26'),
(5, 'Elis Alexander Sánchez', '1997-10-12', 'elis-alexander-sanchez', 26148736, 3, NULL, 'E21496', '', '2015-02-08 18:10:56', '2015-03-02 22:18:20'),
(6, 'Armando Daniel Fernández', '1996-10-13', 'armando-daniel-fernandez', 24228586, 1, 24, 'A21215', '', '2015-02-08 18:12:53', '2015-03-02 22:18:35'),
(7, 'Ivan Eduardo Mancebo', '1997-05-18', 'ivan-eduardo-mancebo', 27145639, 1, 31, 'R52165', '', '2015-02-08 18:14:08', '2015-03-02 22:19:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `input_method`
--

CREATE TABLE IF NOT EXISTS `input_method` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `method_id` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `method_id` (`method_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `input_method`
--

INSERT INTO `input_method` (`id`, `method_id`, `create_at`, `update_at`) VALUES
(1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, '0000-00-00 00:00:00', '2015-02-08 09:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `max_user`
--

CREATE TABLE IF NOT EXISTS `max_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_limit` tinyint(4) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `max_user`
--

INSERT INTO `max_user` (`id`, `user_limit`, `create_at`, `update_at`) VALUES
(1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `method`
--

CREATE TABLE IF NOT EXISTS `method` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_At` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `method`
--

INSERT INTO `method` (`id`, `name`, `create_at`, `update_At`) VALUES
(1, 'Reconocimiento Dactilar ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Inserción de Código Especial', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hour` datetime NOT NULL,
  `action_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `action_id` (`action_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `report`
--

INSERT INTO `report` (`id`, `hour`, `action_id`, `employee_id`, `create_at`, `update_at`) VALUES
(1, '2015-02-09 03:22:31', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `right_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `right_id` (`right_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `image`, `username`, `name`, `right_id`, `password`, `slug`, `create_at`, `update_at`) VALUES
(2, NULL, 'murloc21', 'Flavio Ruiz', 0, '123456789', 'flavio-ruiz', '2015-02-08 17:26:17', '2015-03-02 03:11:04'),
(3, NULL, 'aalehidalgo', 'Alexandra Hidalgo', 0, '*0D578E10D9054AC19A243071462C907352E594CA', 'alexandra-hidalgo', '2015-02-08 18:18:45', '2015-02-28 21:38:03'),
(4, NULL, 'estebanquito2', 'Esteban Rosales', 0, '20162504', 'esteban-rosales', '2015-02-28 22:46:42', '2015-03-01 03:30:04'),
(5, NULL, 'hecto9321', 'Hector Jose ', 0, '20162504', 'hector-jose', '2015-02-28 22:53:00', '2015-03-01 03:30:16'),
(6, NULL, 'ITempestira', 'Illidan Tempestira', 0, 'rawr1', 'illidan-tempestira', '2015-03-01 22:02:28', '2015-03-02 02:32:28');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`departament_id`) REFERENCES `departament` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `input_method`
--
ALTER TABLE `input_method`
  ADD CONSTRAINT `input_method_ibfk_1` FOREIGN KEY (`method_id`) REFERENCES `method` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-02-2015 a las 00:25:39
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

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
`id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `action`
--

INSERT INTO `action` (`id`, `action`, `create_at`, `update_at`) VALUES
(1, 'Entrada', '0000-00-00 00:00:00', '2015-02-08 22:46:18'),
(2, 'Salida', '0000-00-00 00:00:00', '2015-02-08 22:46:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departament`
--

CREATE TABLE IF NOT EXISTS `departament` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departament`
--

INSERT INTO `departament` (`id`, `name`, `create_at`, `update_at`) VALUES
(1, 'Docente', '2015-02-08 18:01:06', '2015-02-08 22:31:06'),
(3, 'Administración', '2015-02-08 18:01:54', '2015-02-08 22:31:54'),
(4, 'Ambiente', '2015-02-08 18:01:54', '2015-02-08 22:31:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `cedula` int(11) NOT NULL,
  `departament_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `fingerprint` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `employee`
--

INSERT INTO `employee` (`id`, `image`, `name`, `cedula`, `departament_id`, `code`, `fingerprint`, `create_at`, `update_at`) VALUES
(1, NULL, 'Luis Carlos PInzón', 24214875, 1, 'L47C26P11', '', '2015-02-08 18:04:16', '2015-02-08 22:34:16'),
(2, NULL, 'Carmen Maura Peralta', 26474236, 3, 'C2014M6947P1475D187489', '', '2015-02-08 18:05:46', '2015-02-08 22:35:46'),
(3, NULL, 'Angel de Jesús Quilarque', 25974120, 1, 'A54895J36841Q48799P12354', '', '2015-02-08 18:07:34', '2015-02-08 22:37:52'),
(4, NULL, 'Kevin Alexander Chourio', 25471369, 4, 'K14879A369421CGF54S64682', '', '2015-02-08 18:08:57', '2015-02-08 22:40:04'),
(5, NULL, 'Elis Alexander Sánchez', 26148736, 3, 'E214966A318G458S239KH', '', '2015-02-08 18:10:56', '2015-02-08 22:44:40'),
(6, NULL, 'Armando Daniel Fernández', 24228586, 1, 'A21215D31865F2315965C315255ADFC', '', '2015-02-08 18:12:53', '2015-02-08 22:44:40'),
(7, NULL, 'Rosibel Bastidas', 27145639, 1, 'R5216545AYY36742B263453', '', '2015-02-08 18:14:08', '2015-02-08 22:44:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `input_method`
--

CREATE TABLE IF NOT EXISTS `input_method` (
`id` int(11) NOT NULL,
  `method_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `input_method`
--

INSERT INTO `input_method` (`id`, `method_id`, `create_at`, `update_at`) VALUES
(1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, '0000-00-00 00:00:00', '2015-02-08 04:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `max_user`
--

CREATE TABLE IF NOT EXISTS `max_user` (
`id` int(11) NOT NULL,
  `user_limit` tinyint(4) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

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
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_At` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
`id` int(11) NOT NULL,
  `hour` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `action_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `report`
--

INSERT INTO `report` (`id`, `hour`, `action_id`, `employee_id`, `create_at`, `update_at`) VALUES
(1, '2015-02-08 22:52:31', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `image`, `username`, `name`, `password`, `create_at`, `update_at`) VALUES
(1, NULL, 'admin', 'Administrador', '1234', '2015-02-08 17:25:24', '2015-02-08 21:55:24'),
(2, NULL, 'scottap', 'Flavio Ruiz', '123456789', '2015-02-08 17:26:17', '2015-02-08 21:56:17'),
(3, NULL, 'aalehidalgo', 'Alexandra Hidalgo', '*0D578E10D9054AC19A243071462C907352E594CA', '2015-02-08 18:18:45', '2015-02-08 22:48:45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `action`
--
ALTER TABLE `action`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departament`
--
ALTER TABLE `departament`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`id`), ADD KEY `departament_id` (`departament_id`);

--
-- Indices de la tabla `input_method`
--
ALTER TABLE `input_method`
 ADD PRIMARY KEY (`id`), ADD KEY `method_id` (`method_id`);

--
-- Indices de la tabla `max_user`
--
ALTER TABLE `max_user`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `method`
--
ALTER TABLE `method`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `report`
--
ALTER TABLE `report`
 ADD PRIMARY KEY (`id`), ADD KEY `action_id` (`action_id`), ADD KEY `employee_id` (`employee_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `action`
--
ALTER TABLE `action`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `departament`
--
ALTER TABLE `departament`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `employee`
--
ALTER TABLE `employee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `input_method`
--
ALTER TABLE `input_method`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `max_user`
--
ALTER TABLE `max_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `method`
--
ALTER TABLE `method`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `report`
--
ALTER TABLE `report`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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

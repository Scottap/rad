-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-03-2015 a las 04:17:44
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

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
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

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
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `slug` varchar(255) NOT NULL,
  `action_id` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `departament_id` int(11) NOT NULL,
  `hours` int(11) DEFAULT NULL,
  `code` varchar(6) NOT NULL,
  `fingerprint` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `employee`
--

INSERT INTO `employee` (`id`, `name`, `birthday`, `slug`, `action_id`, `cedula`, `departament_id`, `hours`, `code`, `fingerprint`, `create_at`, `update_at`) VALUES
(1, 'Luis Carlos Pinzón', '1997-10-21', 'luis-carlos-pinzon', 2, 24214875, 1, 48, 'L47C26', '', '2015-02-08 18:04:16', '2015-03-08 03:08:40'),
(2, 'Carmen Maura Peralta', '1997-02-03', 'carmen-maura-peralta', 1, 26474236, 3, NULL, 'C2014M', '', '2015-02-08 18:05:46', '2015-03-11 01:13:32'),
(3, 'Angel de Jesús Quilarque', '1997-07-23', 'angel-de-jesus-quilarque', 2, 25974120, 1, 28, 'A54895', '', '2015-02-08 18:07:34', '2015-03-08 03:00:05'),
(4, 'Kevin Alexander Chourio', '1997-01-01', 'kevin-alexander-chourio', 2, 25471369, 4, NULL, 'K14879', '', '2015-02-08 18:08:57', '2015-03-08 03:00:05'),
(5, 'Elis Alexander Sánchez', '1997-10-12', 'elis-alexander-sanchez', 2, 26148736, 3, NULL, 'E21496', '', '2015-02-08 18:10:56', '2015-03-08 05:47:20'),
(6, 'Armando Daniel Fernández', '1996-10-13', 'armando-daniel-fernandez', 2, 24228586, 1, 24, 'A21215', '', '2015-02-08 18:12:53', '2015-03-11 02:50:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `input_method`
--

CREATE TABLE IF NOT EXISTS `input_method` (
`id` int(11) NOT NULL,
  `method_id` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
`id` int(11) NOT NULL,
  `user_limit` tinyint(4) NOT NULL,
  `create_at` datetime NOT NULL,
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
  `hour` time NOT NULL,
  `date` date NOT NULL,
  `action_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `report`
--

INSERT INTO `report` (`id`, `hour`, `date`, `action_id`, `employee_id`, `create_at`, `update_at`) VALUES
(10, '04:03:14', '0000-00-00', 1, 2, '2015-03-08 00:00:00', '2015-03-08 03:14:42'),
(11, '04:03:14', '0000-00-00', 2, 2, '2015-03-08 00:00:00', '2015-03-08 03:14:47'),
(12, '06:03:47', '2015-03-08', 1, 5, '2015-03-08 00:00:00', '2015-03-08 05:47:17'),
(13, '06:03:47', '2015-03-08', 2, 5, '2015-03-08 00:00:00', '2015-03-08 05:47:20'),
(14, '06:03:56', '2015-03-08', 1, 6, '2015-03-08 00:00:00', '2015-03-08 05:56:26'),
(15, '06:03:58', '2015-03-08', 2, 6, '2015-03-08 00:00:00', '2015-03-08 05:58:03'),
(16, '07:03:38', '2015-03-10', 1, 2, '2015-03-10 00:00:00', '2015-03-11 00:08:48'),
(17, '07:03:38', '2015-03-10', 2, 2, '2015-03-10 00:00:00', '2015-03-11 00:08:56'),
(18, '07:03:39', '2015-03-10', 1, 2, '2015-03-10 00:00:00', '2015-03-11 00:09:02'),
(19, '07:03:39', '2015-03-10', 2, 2, '2015-03-10 00:00:00', '2015-03-11 00:09:07'),
(20, '08:03:43', '2015-03-10', 1, 2, '2015-03-10 00:00:00', '2015-03-11 01:13:15'),
(21, '08:03:43', '2015-03-10', 2, 2, '2015-03-10 00:00:00', '2015-03-11 01:13:23'),
(22, '08:03:43', '2015-03-10', 1, 2, '2015-03-10 00:00:00', '2015-03-11 01:13:32'),
(23, '10:03:20', '2015-03-10', 1, 6, '2015-03-10 00:00:00', '2015-03-11 02:50:03'),
(24, '10:03:20', '2015-03-10', 2, 6, '2015-03-10 00:00:00', '2015-03-11 02:50:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `right_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `image`, `username`, `name`, `right_id`, `password`, `slug`, `create_at`, `update_at`) VALUES
(2, NULL, 'murloc21', 'Flavio Ruiz', 0, '123456789', 'flavio-ruiz', '2015-02-08 17:26:17', '2015-03-02 03:11:04'),
(3, NULL, 'aalehidalgo2', 'Alexandra Hidalgo', 0, '1234', 'alexandra-hidalgo', '2015-02-08 18:18:45', '2015-03-06 05:19:47'),
(4, NULL, 'estebanquito2', 'Esteban Rosales', 0, '20162504', 'esteban-rosales', '2015-02-28 22:46:42', '2015-03-01 03:30:04'),
(5, NULL, 'hecto9321', 'Hector Jose ', 0, '20162504', 'hector-jose', '2015-02-28 22:53:00', '2015-03-01 03:30:16'),
(6, NULL, 'murloc22', 'Illidan Tempestira', 0, 'rawr23', 'illidan-tempestira', '2015-03-01 22:02:28', '2015-03-06 22:04:10'),
(7, NULL, 'oriru92', 'Oriana Ruiz', 0, '21032766', 'oriana-ruiz', '0000-00-00 00:00:00', '2015-03-08 19:21:45');

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
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `code` (`code`), ADD KEY `departament_id` (`departament_id`), ADD KEY `code_2` (`code`), ADD KEY `state` (`action_id`);

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
 ADD PRIMARY KEY (`id`), ADD KEY `action_id` (`action_id`), ADD KEY `employee_id` (`employee_id`), ADD KEY `employee_id_2` (`employee_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD KEY `right_id` (`right_id`);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `employee`
--
ALTER TABLE `employee`
ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`departament_id`) REFERENCES `departament` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`) ON DELETE CASCADE;

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

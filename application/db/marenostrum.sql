-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2020 a las 20:12:14
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marenostrum`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartamentos`
--

CREATE TABLE `apartamentos` (
  `idap` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `preciotachado` float DEFAULT NULL,
  `habitaciones` int(11) DEFAULT NULL,
  `habitacionesdobles` int(11) DEFAULT NULL,
  `wc` int(11) DEFAULT NULL,
  `oferta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `apartamentos`
--

INSERT INTO `apartamentos` (`idap`, `nombre`, `descripcion`, `precio`, `preciotachado`, `habitaciones`, `habitacionesdobles`, `wc`, `oferta`) VALUES
(1, 'Apartamento num 3', 'Este apartamento esta reformado y este texto es un texto de prueba para pruebas en la web.', 52, NULL, 2, 0, 2, 0),
(2, 'Apartamento num 2', 'Este texto es de prueba para probar la funcionalidad de los apartamentos en la web.', 48, 52, 1, 1, 2, 0),
(3, 'Apartamento num 1', 'Este texto es de prueba para probar la funcionalidad de los apartamentos en la web.', 52, 55, 2, 1, 2, 0),
(4, 'Apartamento num 4', 'Este texto es una prueba para probar la funcionalidad de los apartamentos en la web.', 42, 45, 2, 0, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenesap`
--

CREATE TABLE `imagenesap` (
  `idap` int(11) NOT NULL,
  `imagen1` varchar(100) DEFAULT NULL,
  `imagen2` varchar(100) DEFAULT NULL,
  `imagen3` varchar(100) DEFAULT NULL,
  `imagen4` varchar(100) DEFAULT NULL,
  `imagen5` varchar(100) DEFAULT NULL,
  `imagen6` varchar(100) DEFAULT NULL,
  `imagen7` varchar(100) DEFAULT NULL,
  `imagen8` varchar(100) DEFAULT NULL,
  `imagen9` varchar(100) DEFAULT NULL,
  `imagen10` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `idmsg` int(11) NOT NULL,
  `nombrecli` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `fechamsg` date NOT NULL,
  `msg` text NOT NULL,
  `idap` int(11) DEFAULT 0,
  `leido` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`idmsg`, `nombrecli`, `apellidos`, `fechamsg`, `msg`, `idap`, `leido`) VALUES
(1, 'Raul', 'Fernandez Tirado', '2020-10-19', 'Este es un mensaje de pruebas para comprobar funcionamiento en la pagina web.', NULL, 1),
(2, 'Maria ', 'Aguilera', '2020-10-13', 'Este es un mensaje de prueba para probar el funcionamiento de la pagina web.', NULL, 0),
(3, 'Mario', 'Cañas', '2020-10-17', 'Este es un mensaje de prueba para probar el funcionamiento de la pagina web', 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_ap`
--

CREATE TABLE `reservas_ap` (
  `idres` int(11) NOT NULL,
  `nombrecli` varchar(50) NOT NULL,
  `fechaini` date NOT NULL,
  `fechafin` date NOT NULL,
  `iduser` int(11) NOT NULL,
  `idap` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas_ap`
--

INSERT INTO `reservas_ap` (`idres`, `nombrecli`, `fechaini`, `fechafin`, `iduser`, `idap`) VALUES
(1, 'Raul Fernandez', '2020-10-19', '2020-10-24', 1, 1),
(4, 'Antonio Hernandez', '2020-10-04', '2020-10-10', 1, 2),
(5, 'Julia Garcia', '2020-10-18', '2020-10-24', 1, 4),
(6, 'Javier Garrido', '2020-10-25', '2020-10-31', 1, 3),
(7, 'Ana Jimenez', '2020-09-01', '2020-09-05', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `iduser` int(11) NOT NULL,
  `nombreusu` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `group` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`iduser`, `nombreusu`, `pass`, `group`) VALUES
(1, 'admin', 'df7eacd1dc412e94bf0742d2027a7114f64b62fcbef37057a4daddcfd06774e9', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
  ADD PRIMARY KEY (`idap`);

--
-- Indices de la tabla `imagenesap`
--
ALTER TABLE `imagenesap`
  ADD UNIQUE KEY `idap` (`idap`) USING BTREE;

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`idmsg`),
  ADD KEY `idap` (`idap`);

--
-- Indices de la tabla `reservas_ap`
--
ALTER TABLE `reservas_ap`
  ADD PRIMARY KEY (`idres`),
  ADD KEY `fk_res_usu` (`iduser`),
  ADD KEY `idap` (`idap`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`iduser`,`nombreusu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
  MODIFY `idap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `idmsg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reservas_ap`
--
ALTER TABLE `reservas_ap`
  MODIFY `idres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenesap`
--
ALTER TABLE `imagenesap`
  ADD CONSTRAINT `fk_img_ap` FOREIGN KEY (`idap`) REFERENCES `apartamentos` (`idap`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `mensajes_ibfk_1` FOREIGN KEY (`idap`) REFERENCES `apartamentos` (`idap`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas_ap`
--
ALTER TABLE `reservas_ap`
  ADD CONSTRAINT `fk_res_usu` FOREIGN KEY (`iduser`) REFERENCES `usuarios` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservas_ap_ibfk_1` FOREIGN KEY (`idap`) REFERENCES `apartamentos` (`idap`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

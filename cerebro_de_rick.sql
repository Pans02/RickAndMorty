-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2024 a las 03:00:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ciudadela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cerebro_de_rick`
--

CREATE TABLE `cerebro_de_rick` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `rut` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `f_nacimiento` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `adicional` varchar(100) NOT NULL,
  `personaje` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cerebro_de_rick`
--

INSERT INTO `cerebro_de_rick` (`id`, `rol`, `rut`, `nombre`, `apellido`, `f_nacimiento`, `telefono`, `email`, `usuario`, `contraseña`, `foto`, `adicional`, `personaje`) VALUES
(1, 'RICK', 207074454, 'Roberto', 'Carrasco', '2001-02-17', 937097175, 'carrasco010217@gmail.com', 'Pans02', 'roberto2001', 'img/rick-and-morty-season-7-evil-morty-origin.webp', 'felix', 'Morty Smith'),
(2, 'RICK', 211350210, 'Mauricio', 'Varas', '2002-09-12', 212121, 'm.xchoko1x@gmail.com', 'Choko', 'hola12345', 'img/f1456x819-1529777_1700147_5050.webp', 'palermo', 'Rick Sanchez'),
(6, 'RICK', 115470647, 'Roberto', 'Carrasco', '2024-01-02', 31231, 'carrasco010217@gmail.com', 'Papa', '12345', 'img/rick-and-morty-season-7-adult-morty-grows-up.webp', 'tiana', 'Rick Sanchez'),
(7, 'MORTY', 106515611, 'Esmeralda', 'Abarca', '2024-01-03', 212121, 'carrasco010217@gmail.com', 'Mama', '12345', 'img/rick-and-morty-season-7-evil-morty-origin.webp', 'tiana', 'Summer Smith');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cerebro_de_rick`
--
ALTER TABLE `cerebro_de_rick`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cerebro_de_rick`
--
ALTER TABLE `cerebro_de_rick`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

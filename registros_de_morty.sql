-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2024 a las 03:02:10
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
-- Estructura de tabla para la tabla `registros_de_morty`
--

CREATE TABLE `registros_de_morty` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registros_de_morty`
--

INSERT INTO `registros_de_morty` (`id`, `usuario`, `contraseña`) VALUES
(1, 'Pans02', 'roberto2001'),
(2, 'Pans02', 'roberto2001'),
(3, 'Pans02', 'roberto2001'),
(4, 'Pans02', 'roberto2001'),
(5, 'Pans02', 'roberto2001'),
(6, 'Pans02', 'roberto2001'),
(7, 'pans02', 'roberto2001'),
(8, 'fsdf', ''),
(9, 'fsdf', ''),
(10, 'fsdf', ''),
(11, 'fsdf', ''),
(12, 'fsdf', ''),
(13, '12345', ''),
(14, '', ''),
(15, 'Pans02', ''),
(16, 'Pans02', ''),
(17, 'choko', 'hola12345'),
(18, 'Pans02', 'roberto2001'),
(19, 'Pans02', 'roberto2001'),
(20, 'choko', 'hola12345'),
(21, 'heidi', '12345'),
(22, 'mama', '12345'),
(23, 'papa', '12345'),
(24, 'papa', '12345'),
(25, 'papa', '12345'),
(26, 'mama', '12345'),
(27, 'mama', '12345'),
(28, 'Pans02', 'roberto2001'),
(29, 'Pans02', 'roberto2001'),
(30, 'Pans02', 'roberto2001'),
(31, 'Pans02', 'roberto2001');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros_de_morty`
--
ALTER TABLE `registros_de_morty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros_de_morty`
--
ALTER TABLE `registros_de_morty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

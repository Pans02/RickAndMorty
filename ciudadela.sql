-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2024 a las 06:13:08
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
(7, 'MORTY', 106515611, 'Esmeralda', 'Abarca', '2024-01-03', 212121, 'carrasco010217@gmail.com', 'Mama', '12345', 'img/rick-and-morty-season-7-evil-morty-origin.webp', 'tiana', 'Summer Smith'),
(8, 'MORTY', 211350210, 'mati', 'mati', '2024-01-02', 212121, 'ma@as', '12345678', '12345678', 'img/rick-and-morty-season-7-evil-morty-origin.webp', 'palermo', 'Beth Smith'),
(9, 'MORTY', 207074454, 'choko', 'choko', '2024-01-03', 252252, 'm.xchoko@gmail.com', 'Choko', '12345', 'img/rick-and-morty-season-7-evil-morty-origin.webp', 'palermo', 'Morty Smith'),
(10, 'MORTY', 207074454, 'asdasd', 'ASDASD', '2024-01-02', 0, 'carrasco010217@gmail.com', 'Pans02', 'roberto2001', 'img/rick-and-morty-season-7-evil-morty-origin.webp', 'felix', 'Jerry Smith'),
(11, 'MORTY', 207074454, 'asf', 'wafda', '2024-01-02', 212121, 'carrasco010217@gmail.com', 'Pans02', 'roberto2001', 'img/rick-and-morty-season-7-evil-morty-origin.webp', 'felix', 'Rick Sanchez'),
(12, 'MORTY', 207074454, 'Roberto', 'Carrasco', '2024-01-05', 252252, 'carrasco010217@gmail.com', 'Pans02', 'roberto2001', 'img/rick-and-morty-season-7-evil-morty-origin.webp', 'felix', 'Rick Sanchez'),
(13, 'MORTY', 207074454, 'Roberto', 'Carrasco', '2024-01-02', 252252, 'carrasco010217@gmail.com', 'Pans02', 'roberto2001', 'img/rick-and-morty-season-7-evil-morty-origin.webp', 'felix', 'Rick Sanchez'),
(14, 'MORTY', 207074454, 'Roberto', 'Carrasco', '2024-01-02', 252252, 'carrasco010217@gmail.com', 'Pans02', 'roberto2001', 'img/rick-and-morty-season-7-evil-morty-origin.webp', 'felix', 'Rick Sanchez'),
(15, 'MORTY', 211350210, 'choko', '212', '2024-01-05', 252252, 'm.xchoko1x@gmail.com', 'Choko1', '12345', 'img/rick-and-morty-season-7-preview-evil-summer.webp', 'palermo', 'Rick Sanchez'),
(16, 'MORTY', 211350210, 'hola', '123', '2024-01-04', 252252, 'ma@as', 'choko2', 'hola12345', 'img/rick-and-morty-season-7-preview-evil-summer.webp', 'palermo', 'Glexo Slimslom');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias_de_rick`
--

CREATE TABLE `noticias_de_rick` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `resumen` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias_de_rick`
--

INSERT INTO `noticias_de_rick` (`id`, `titulo`, `resumen`, `link`, `img`) VALUES
(1, 'No creerás cómo serían Rick y Morty en la vida real', 'Los internautas le pidieron a Midjourney crear imágenes con las versiones más reales posibles de los míticos personajes animados.', 'https://www.mdzol.com/napsix/2023/12/29/no-creeras-como-serian-rick-morty-en-la-vida-real-segun-la-i', 'img/f1456x819-1529777_1700147_5050.webp'),
(2, 'El nuevo actor de Rick revela cuánta improvisación hubo en la temporada 7.', '¡Ian Cardoni de Rick y Morty habló sobre cuánta improvisación hubo en los episodios de la temporada 7!', 'https://comicbook.com/anime/news/rick-and-morty-seson-7-improv-ian-cardoni-interview/', 'img/rick-and-morty-season-7-adult-morty-grows-up.webp'),
(3, 'El nuevo actor de Morty reacciona a ser el malvado Morty', 'El nuevo actor de voz de Rick y Morty, Harry Belden, compartió su reacción al interpretar a Evil Morty por primera vez.', 'https://comicbook.com/anime/news/rick-and-morty-harry-belden-evil-morty-interview/', 'img/rick-and-morty-season-7-evil-morty-origin.webp'),
(4, 'La estrella de Rick y Morty presenta la historia perfecta del verano malvado', '¡Spencer Grammer de Rick y Morty tiene grandes ideas para los episodios de Evil Summer!', 'https://comicbook.com/anime/news/rick-and-morty-evil-summer-spencer-grammer-interview/', 'img/rick-and-morty-season-7-preview-evil-summer.webp');

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
(31, 'Pans02', 'roberto2001'),
(32, 'Pans02', 'roberto2001'),
(33, 'mama', '12345'),
(34, 'Pans02', 'roberto2001'),
(35, 'Pans02', 'roberto2001'),
(36, 'Pans02', 'roberto2001'),
(37, 'Pans02', 'roberto2001'),
(38, 'Pans02', 'roberto2001'),
(39, 'Pans02', 'roberto2001'),
(40, 'Pans02', 'roberto2001'),
(41, 'Pans02', 'roberto2001'),
(42, 'Pans02', 'roberto2001'),
(43, 'choko', '12345'),
(44, 'choko', '12345'),
(45, 'Pans02', 'roberto2001'),
(46, 'choko', '12345'),
(47, 'mama', '12345'),
(48, 'choko1', '12345'),
(49, 'choko1', '12345'),
(50, 'choko2', 'hola12345'),
(51, 'Pans02', 'roberto2001');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cerebro_de_rick`
--
ALTER TABLE `cerebro_de_rick`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros_de_morty`
--
ALTER TABLE `registros_de_morty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cerebro_de_rick`
--
ALTER TABLE `cerebro_de_rick`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `registros_de_morty`
--
ALTER TABLE `registros_de_morty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

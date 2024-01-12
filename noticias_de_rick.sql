-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2024 a las 03:01:56
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

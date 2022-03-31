-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql:3306
-- Tiempo de generación: 18-01-2022 a las 01:05:11
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `streaming`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generes`
--

CREATE TABLE `generes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `generes`
--

INSERT INTO `generes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Accion', '2022-01-18 00:50:26', '2022-01-18 00:50:26'),
(2, 'Aventuras', '2022-01-18 00:50:26', '2022-01-18 00:50:26'),
(3, 'Comedia', '2022-01-18 00:50:26', '2022-01-18 00:50:26'),
(4, 'Fantasía', '2022-01-18 00:50:26', '2022-01-18 00:50:26'),
(5, 'Musical', '2022-01-18 00:50:26', '2022-01-18 00:50:26'),
(6, 'Suspense', '2022-01-18 00:50:26', '2022-01-18 00:50:26'),
(7, 'Animación', '2022-01-18 00:50:26', '2022-01-18 00:50:26'),
(8, 'Cine pornográfico ', '2022-01-18 00:50:26', '2022-01-18 00:50:26'),
(9, 'Bélicas', '2022-01-18 00:50:26', '2022-01-18 00:50:26'),
(10, 'Western', '2022-01-18 00:50:26', '2022-01-18 00:50:26'),
(11, 'Thriller', '2022-01-18 00:57:54', '2022-01-18 00:57:54'),
(12, 'Ciencia ficcion', '2022-01-18 00:58:25', '2022-01-18 00:58:25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `generes`
--
ALTER TABLE `generes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `generes`
--
ALTER TABLE `generes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

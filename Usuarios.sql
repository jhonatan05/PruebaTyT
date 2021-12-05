-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-12-2021 a las 14:20:04
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `career` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `date`, `career`, `created_at`, `updated_at`) VALUES
(1, 'Jhonatan Arevalo', '2018-07-01', 'Ingenieria de sistemas', '2021-12-05 19:17:52', '2021-12-05 19:17:52'),
(2, 'Alejandro Arevalo', '2015-08-31', 'Ingeneria de Software', '2021-12-05 19:18:08', '2021-12-05 19:18:08'),
(3, 'Gloria Nocua', '2019-02-21', 'Gastronomia', '2021-12-05 19:19:08', '2021-12-05 19:19:08'),
(4, 'Roberto Arevalo', '2013-12-01', 'Aviacion', '2021-12-05 19:20:08', '2021-12-05 19:25:38'),
(5, 'Fernanda Moreno', '2016-04-21', 'Diseño Industrial', '2021-12-05 19:21:08', '2021-12-05 19:21:08'),
(6, 'Pablo Cardozo', '2018-07-05', 'Ingenieria Mecanica', '2021-12-05 08:06:04', '2021-12-05 08:45:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

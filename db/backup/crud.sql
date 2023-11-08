-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2023 a las 21:19:00
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_backend`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `crud`
--

INSERT INTO `crud` (`id`, `nombre`, `correo`, `celular`, `contraseña`) VALUES
(1, 'carlos', 'carlo@gmail.com', '54156165', '165165'),
(4, 'cristian', 'crist@gmail.com', '4154651', '1425'),
(5, 'carolina', 'carolina4@yahoo.com', '41564654', '1515'),
(6, 'felipe', 'fp@hotmail.com', '12484651', '742'),
(8, 'pepito', 'pt@outlook.com', '456484', 'efsd1g3s21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

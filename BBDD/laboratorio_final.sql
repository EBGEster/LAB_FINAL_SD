-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2023 a las 12:24:53
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
-- Base de datos: `laboratorio_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido1`, `apellido2`, `email`, `login`, `password`) VALUES
(1, 'Juan', 'García', 'López', 'juan@example.com', 'juang', 'pass123'),
(2, 'María', 'Martínez', 'Sánchez', 'maria@example.com', 'mariam', 'pass456'),
(3, 'Pedro', 'Rodríguez', 'Gómez', 'pedro@example.com', 'pedror', 'pass789'),
(4, 'Laura', 'Fernández', 'Hernández', 'laura@example.com', 'lauraf', 'passabc'),
(5, 'Carlos', 'González', 'Pérez', 'carlos@example.com', 'carlosg', 'passdef'),
(6, 'Ana', 'López', 'Ramírez', 'ana@example.com', 'anar', 'passghi'),
(7, 'David', 'Sánchez', 'Torres', 'david@example.com', 'davids', 'passjkl'),
(8, 'Sofía', 'Flores', 'Vargas', 'sofia@example.com', 'sofiaf', 'passmno'),
(9, 'Javier', 'Mendoza', 'Rojas', 'javier@example.com', 'javierm', 'passpqr'),
(10, 'Paula', 'Gómez', 'Díaz', 'paula@example.com', 'paulag', 'passtu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:4999
-- Tiempo de generación: 11-03-2024 a las 02:29:23
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
-- Base de datos: `crud_mysql`
--
CREATE DATABASE IF NOT EXISTS `crud_mysql` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `crud_mysql`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) UNSIGNED NOT NULL,
  `documento_identidad` varchar(20) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `direccion` varchar(191) NOT NULL,
  `telefono` int(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `documento_identidad`, `nombre`, `apellido`, `email`, `direccion`, `telefono`, `fecha_nacimiento`) VALUES
(1, '31996652', 'Andres ', 'Caicedo', 'andrespripra@hotmail.com', 'Calle 14a # 80 - 96', 3366378, '2013-07-10'),
(2, '3333666', 'cristian ', 'Artiaga ', 'criss@gmail.com', 'Calle 15 # 13 - 25', 318446259, '2015-03-13'),
(18, '109494994', 'aleja', 'Hidalgo ', 'aleja@GMAIL.COM', 'calle 165 #45-67', 95996969, '2024-03-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documento_identidad` (`documento_identidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

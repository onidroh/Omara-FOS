-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2019 a las 12:18:12
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `fecha_nac` date NOT NULL,
  `correo` varchar(60) DEFAULT NULL,
  `fecha_crea` date DEFAULT NULL,
  `fecha_edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `rut`, `pass`, `fecha_nac`, `correo`, `fecha_crea`, `fecha_edit`) VALUES
(9, 'Oscar David', 'Escobar Moraga', '18746193', '2ce518699373ae57c7868a65c4c16d869de5e99b', '1995-03-14', 'onidroh@gmail.com', '2019-06-05', '2019-06-05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rut` (`rut`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

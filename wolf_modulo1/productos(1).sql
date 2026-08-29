-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-08-2026 a las 21:05:54
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ProductosDB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int(10) UNSIGNED NOT NULL,
  `stock` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `nombre`, `precio`, `stock`) VALUES
(873, 'Alfajor Jorgito x3', 1900, 300),
(874, 'Alfajor Jorgito Simple', 1000, 90),
(1007, 'Barra de Cereal Proteica Integra', 2100, 145),
(1110, 'Barra de Chocolate Cofler', 1200, 75),
(1113, 'Inca Cola', 225, 45),
(1115, 'Lays 200g', 3200, 400),
(1116, 'Queso Pategrás 150g - La Paulina', 1900, 70),
(1117, 'Ricota 80g - Tregar', 1300, 35),
(1118, 'Saquito Tang sabor Frutilla', 120, 132),
(1119, 'Manaos Uva', 400, 30),
(1120, 'Cunnington Cola 2.25l', 2700, 400),
(1124, 'Caramelos Sugus', 120, 400),
(1126, 'Alfajor Terrabussi', 2000, 200),
(1127, 'Cerveza Quilmes 591ml', 3800, 421);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

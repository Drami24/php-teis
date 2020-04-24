-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2020 a las 13:55:47
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pedidos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`codigo`, `nombre`, `descripcion`) VALUES
(1, 'refrescos', 'bebidas carbonatadas y zumos'),
(2, 'vinos', 'bebidas alcohólicas'),
(3, 'alimentos', 'alimenta que da gusto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `codigo` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `enviado` int(11) NOT NULL,
  `restaurante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`codigo`, `fecha`, `enviado`, `restaurante`) VALUES
(2, '2020-02-20 10:32:15', 0, 1),
(3, '2020-02-20 10:33:50', 0, 1),
(4, '2020-02-21 08:44:41', 0, 1),
(5, '2020-02-21 09:27:59', 0, 1),
(9, '2020-02-21 09:43:36', 0, 1),
(10, '2020-04-16 12:32:25', 0, 1),
(11, '2020-04-16 12:33:55', 0, 1),
(12, '2020-04-16 12:34:50', 0, 1),
(13, '2020-04-16 12:35:20', 0, 1),
(14, '2020-04-16 14:20:35', 0, 1),
(15, '2020-04-16 14:25:15', 0, 1),
(16, '2020-04-16 14:32:35', 0, 1),
(17, '2020-04-16 14:43:26', 0, 1),
(18, '2020-04-16 14:52:09', 0, 1),
(19, '2020-04-16 14:57:16', 0, 1),
(20, '2020-04-16 14:58:15', 0, 1),
(21, '2020-04-16 14:58:37', 0, 1),
(22, '2020-04-16 15:03:13', 0, 1),
(23, '2020-04-16 15:05:53', 0, 1),
(24, '2020-04-16 15:09:27', 0, 1),
(25, '2020-04-16 15:14:15', 0, 1),
(26, '2020-04-16 15:15:02', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_productos`
--

CREATE TABLE `pedidos_productos` (
  `codigo` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `unidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pedidos_productos`
--

INSERT INTO `pedidos_productos` (`codigo`, `pedido`, `producto`, `unidades`) VALUES
(1, 2, 2, 1),
(2, 2, 3, 1),
(3, 3, 3, 5),
(4, 3, 1, 3),
(5, 4, 3, 5),
(6, 4, 1, 3),
(7, 5, 5, 3),
(8, 5, 1, 2),
(10, 9, 4, 5),
(11, 10, 1, 1),
(12, 11, 3, 2),
(13, 12, 3, 2),
(14, 13, 3, 2),
(15, 14, 3, 1),
(16, 15, 3, 1),
(17, 16, 3, 1),
(18, 16, 1, 2),
(19, 17, 1, 2),
(20, 17, 2, 3),
(21, 17, 3, 2),
(22, 17, 4, 3),
(23, 17, 5, 2),
(24, 18, 1, 4),
(25, 18, 2, 6),
(26, 18, 4, 3),
(27, 19, 1, 1),
(28, 20, 1, 1),
(29, 21, 1, 1),
(30, 22, 1, 6),
(31, 23, 2, 3),
(32, 24, 5, 1),
(33, 25, 2, 1),
(34, 26, 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `peso` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo`, `nombre`, `descripcion`, `peso`, `stock`, `categoria`) VALUES
(1, 'Coca Cola', '50 latas de 33cl', 16, 0, 1),
(2, 'Kas de Naranja', '30 latas de 33cl', 10, 0, 1),
(3, 'Albariño Condes de Albarei', '12 botellas de 0.75L', 12, 4, 2),
(4, 'Albariño Paco y Loca', '6 botellas de 1L', 6, 5, 2),
(5, 'Albariño Martín Códax', '6 botellas de 1L', 6, 6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--

CREATE TABLE `restaurantes` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(90) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pais` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ciudad` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(120) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo_postal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`codigo`, `nombre`, `email`, `password`, `pais`, `ciudad`, `direccion`, `codigo_postal`) VALUES
(1, 'Goiko', 'pedidos@goiko.com', '$2y$10$T5drZDYhXlPJ08NZHYONhO0LfjemFzVdgFH7tsKA7fiNbd4CjcLfa', 'España', 'Vigo', 'Rúa de Rosalía de Castro, 9', 36201),
(2, 'La Pepita', 'pedidos@lapepita.com', 'lapepita', 'España', 'Vigo', 'Rúa de Oporto, 15', 36201),
(4, 'Galipizza', 'pedidos@galipizza.com', 'galipizza', 'España', 'Vigo', 'Rúa de Rosalía de Castro, 48', 36201);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `u_categorias` (`nombre`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_restaurante` (`restaurante`);

--
-- Indices de la tabla `pedidos_productos`
--
ALTER TABLE `pedidos_productos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_pedidos` (`pedido`),
  ADD KEY `fk_producto` (`producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_categorias` (`categoria`);

--
-- Indices de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `u_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `pedidos_productos`
--
ALTER TABLE `pedidos_productos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_restaurante` FOREIGN KEY (`restaurante`) REFERENCES `restaurantes` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidos_productos`
--
ALTER TABLE `pedidos_productos`
  ADD CONSTRAINT `fk_pedidos` FOREIGN KEY (`pedido`) REFERENCES `pedidos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_producto` FOREIGN KEY (`producto`) REFERENCES `productos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_categorias` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

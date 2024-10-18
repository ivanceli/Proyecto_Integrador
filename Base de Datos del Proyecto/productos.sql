-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2019 a las 13:41:56
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `descripcion`) VALUES
(1, 'Lacteos Enteros'),
(2, 'Lacteos Descremados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `mensaje` varchar(100) NOT NULL,
  `eliminado` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `nombre`, `apellido`, `email`, `motivo`, `mensaje`, `eliminado`) VALUES
(1, 'Ivan', 'Celi', 'ivanceli@gmail.com', 'Compra Mínima para el envio', 'Cuantos productos debo comprar como minimo para que me envien mi pedido', 'NO'),
(2, 'Ivan', 'Celi', 'iv@gmail.com', 'Ninguno', 'Hoa', 'SI'),
(3, 'sonia', 'celi', 'sonia@gmail.com', 'hola', 'hola', 'NO'),
(4, 'ivan', 'celi', 'ivc@hotmail.com', 'ninguno', 'prueba consulta', 'SI'),
(5, 'Ivan', 'Celi', 'ivan@gmail.com', 'ninguno', 'ninguno', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `categoria_id` int(10) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `precio_costo` double(7,2) NOT NULL,
  `precio_venta` double(7,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `stock_min` int(11) NOT NULL,
  `eliminado` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `descripcion`, `categoria_id`, `imagen`, `precio_costo`, `precio_venta`, `stock`, `stock_min`, `eliminado`) VALUES
(1, 'Leche  Nestle', 1, 'assets/img/productos/caja-leche-nido-nestle.jpg', 30.00, 50.50, 33, 15, 'NO'),
(2, 'Yogurt Frutiila', 1, 'assets/img/productos/big__267.png', 23.00, 21.00, 21, 5, 'NO'),
(3, 'Manteca ', 1, 'assets/img/productos/100gr.jpg', 50.00, 50.00, 7, 3, 'NO'),
(4, 'Queso Cremoso', 1, 'assets/img/productos/q_cremoso.jpg', 30.00, 24.00, 1, 8, 'NO'),
(5, 'Queso Cremoso', 1, 'assets/img/productos/queso-cremoso.jpg', 50.00, 40.00, 21, 4, 'NO'),
(6, 'Leche ', 1, 'assets/img/productos/caja-leche-nido-listo-para-be', 50.00, 40.00, 20, 5, 'SI'),
(7, 'Leche Milkaut', 1, 'assets/img/productos/producto_lecheentera2.png', 45.00, 40.00, 9, 6, 'NO'),
(8, 'Yogur de Litro Tregar', 1, 'assets/img/productos/big__276.png', 60.00, 60.00, 37, 4, 'NO'),
(9, 'Dulce de Leche', 1, 'assets/img/productos/dulce-de-leche-sancor-400g-D_', 30.00, 30.00, 19, 3, 'SI'),
(10, 'Manteca', 1, 'assets/img/productos/manteca_221_2.png', 40.00, 40.00, 22, 5, 'NO'),
(11, 'Dulce de Leche', 1, 'assets/img/productos/DDL_400gr_granja-de-oro.jpg', 25.00, 25.00, 40, 10, 'NO'),
(12, 'Dulce de Leche Sancor', 1, 'assets/img/productos/dulce-de-leche-sancor.jpg', 30.00, 30.00, 18, 4, 'NO'),
(13, 'Leche Chocolatada', 1, 'assets/img/productos/presentacion_chocolatada.jpg', 36.00, 34.00, 22, 4, 'NO'),
(14, 'Leche En Polvo', 2, 'assets/img/productos/lecheentera_descremada.jpg', 34.00, 36.00, 8, 6, 'NO'),
(15, 'Yogurt Vainilla Milkaut', 2, 'assets/img/productos/potevainilla_21.jpg', 21.00, 20.00, 28, 5, 'NO'),
(16, 'Yogur de Litro de Frutilla Milkaut', 2, 'assets/img/productos/yogurLitroMilkaut.png', 35.00, 35.00, 20, 5, 'NO'),
(17, 'Leche Ilolay', 2, 'assets/img/productos/18_s.png', 50.00, 50.00, 37, 6, 'NO'),
(18, 'Yogur de Litro de Vainilla ', 2, 'assets/img/productos/yogurtvainilla.png', 30.00, 30.00, 20, 4, 'NO'),
(19, 'Yogur Sancor', 1, 'assets/img/productos/yogurSancor.jpg', 15.00, 15.00, 30, 4, 'NO'),
(20, 'Leche Chocolatada Manfrey', 1, 'assets/img/productos/Leche_chocolatada.jpg', 45.00, 45.00, 21, 4, 'NO'),
(21, 'Yogur Manfrey', 2, 'assets/img/productos/Yofrey.png', 17.00, 17.00, 30, 4, 'NO'),
(22, 'Leche en Polvo', 1, 'assets/img/productos/povloga.png', 49.00, 49.00, 30, 6, 'NO'),
(23, 'Yogurt Frutlla  ', 1, 'assets/img/productos/Yogurt-frutilla.jpg', 32.00, 32.00, 12, 4, 'NO'),
(24, 'Manteca', 1, 'assets/img/productos/imgmanteca.jpg', 39.00, 39.00, 30, 5, 'NO'),
(25, 'Yogurt Frutilla', 1, 'assets/img/productos/presentacion_frutilla_2.png', 15.00, 15.00, 12, 4, 'NO'),
(26, 'Leche Chocolatada', 1, 'assets/img/productos/chocolatada.jpg', 29.00, 29.00, 29, 7, 'NO'),
(27, 'Yogurt Vainilla', 1, 'assets/img/productos/ilolay-firme.png', 16.00, 16.00, 23, 4, 'NO'),
(28, 'Yogurt de Litro', 1, 'assets/img/productos/yogurtilolay.png', 25.00, 25.00, 21, 4, 'NO'),
(29, 'Yogurt', 2, 'assets/img/productos/Yogurt-frutilla-descr.jpg', 29.00, 29.00, 38, 4, 'NO'),
(30, 'Leche en Povo', 2, 'assets/img/productos/Leches_polvo-descremada.jpg', 35.00, 35.00, 23, 5, 'NO'),
(31, 'Dulce de leche repostero', 1, 'assets/img/productos/producto_dulcedeleche_respost', 32.00, 32.00, 13, 4, 'SI'),
(32, 'Yogurt 2', 1, 'assets/img/productos/433284-Kycb.jpg', 12.00, 12.00, 15, 6, 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT '2',
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `usuario`, `pass`, `perfil_id`, `baja`) VALUES
(1, 'Ivan ', 'Celi Seminario', 'ivancs@gmail.com', 'ic', '1234', 1, 'NO'),
(2, 'Juan', 'Perez', 'juanperez19@gmail.com', 'juanperrez', '1234', 2, 'SI'),
(3, 'Ivan', 'Arrua', 'ivanarrua@gmail.com', 'ivanarrua', '1234', 2, 'NO'),
(4, 'Ivan ', 'Celi Seminario', 'ivancelisemi@gmail.com', 'ivanceli', '1234', 2, 'NO'),
(5, 'Mariano', 'Flores', 'floresmariano@gmail.com', 'marianofl', '789', 2, 'NO'),
(6, 'Cristian', 'Zacariaz', 'criszaca@gmai.coml', 'criz', '1234', 2, 'NO'),
(7, 'Leo', 'Celi', 'leoceli19@gmail.com', 'leo', '1111', 2, 'NO'),
(8, 'Fede', 'Celi', 'fede@gmail,com', 'fd', '1234', 2, 'NO'),
(9, 'Sonia', 'Celi ', 'sonia@gmail.com', 'scs', '1234', 2, 'NO'),
(10, 'Juan', 'Martinez', 'jm@gmail.com', 'jm', '1234', 2, 'NO'),
(11, 'ivan', 'ce', 'iv@gmail.com', 'iv', '123', 2, 'NO'),
(12, 'ivan', 'celi', '@mail.com', 'i', '12', 2, 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_cabecera`
--

CREATE TABLE `ventas_cabecera` (
  `id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `usuario_id` int(10) NOT NULL,
  `total_venta` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas_cabecera`
--

INSERT INTO `ventas_cabecera` (`id`, `fecha`, `usuario_id`, `total_venta`) VALUES
(2, '2019-05-30', 1, 104.00),
(3, '2019-05-31', 3, 124.00),
(4, '2019-05-31', 3, 124.00),
(5, '2019-05-31', 3, 40.00),
(6, '2019-05-31', 6, 40.00),
(7, '2019-05-31', 6, 40.00),
(8, '2019-05-31', 3, 130.00),
(9, '2019-05-31', 3, 100.00),
(10, '2019-05-31', 3, 30.00),
(11, '2019-05-31', 6, 84.00),
(12, '2019-06-01', 3, 88.00),
(13, '2019-06-01', 3, 24.00),
(14, '2019-06-03', 6, 51.00),
(15, '2019-06-07', 7, 111.00),
(16, '2019-06-07', 7, 41.00),
(17, '2019-06-10', 3, 44.00),
(18, '2019-06-11', 9, 17.00),
(19, '2019-06-12', 8, 100.00),
(20, '2019-06-12', 7, 55.00),
(21, '2019-06-12', 8, 21.00),
(22, '2019-06-12', 8, 21.00),
(23, '2019-06-12', 8, 21.00),
(24, '2019-06-12', 8, 126.00),
(25, '2019-06-12', 8, 50.50),
(26, '2019-06-12', 8, 50.00),
(27, '2019-06-13', 7, 120.00),
(28, '2019-06-13', 7, 71.00),
(29, '2019-06-13', 7, 480.00),
(30, '2019-06-13', 7, 480.00),
(31, '2019-06-23', 7, 147.00),
(32, '2019-06-23', 7, 67.00),
(33, '2019-06-23', 3, 50.50),
(34, '2019-06-23', 3, 34.00),
(35, '2019-06-23', 10, 80.00),
(36, '2019-06-26', 7, 456.00),
(37, '2019-06-26', 10, 540.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_detalle`
--

CREATE TABLE `ventas_detalle` (
  `id` int(10) NOT NULL,
  `venta_id` int(10) NOT NULL,
  `producto_id` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas_detalle`
--

INSERT INTO `ventas_detalle` (`id`, `venta_id`, `producto_id`, `cantidad`, `precio`, `total`) VALUES
(1, 2, 7, 2, 40.00, 80.00),
(2, 2, 4, 1, 24.00, 24.00),
(3, 3, 10, 1, 40.00, 40.00),
(4, 3, 4, 1, 24.00, 24.00),
(5, 3, 8, 1, 60.00, 60.00),
(6, 4, 10, 1, 40.00, 40.00),
(7, 4, 4, 1, 24.00, 24.00),
(8, 4, 8, 1, 60.00, 60.00),
(9, 5, 7, 1, 40.00, 40.00),
(10, 6, 7, 1, 40.00, 40.00),
(11, 7, 10, 1, 40.00, 40.00),
(12, 8, 9, 1, 30.00, 30.00),
(13, 8, 8, 1, 60.00, 60.00),
(14, 8, 7, 1, 40.00, 40.00),
(15, 9, 7, 1, 40.00, 40.00),
(16, 9, 8, 1, 60.00, 60.00),
(17, 10, 9, 1, 30.00, 30.00),
(18, 11, 8, 1, 60.00, 60.00),
(19, 11, 4, 1, 24.00, 24.00),
(20, 12, 7, 1, 40.00, 40.00),
(21, 12, 4, 2, 24.00, 48.00),
(22, 13, 4, 1, 24.00, 24.00),
(23, 14, 12, 1, 30.00, 30.00),
(24, 14, 2, 1, 21.00, 21.00),
(25, 15, 12, 1, 30.00, 30.00),
(26, 15, 8, 1, 60.00, 60.00),
(27, 15, 2, 1, 21.00, 21.00),
(28, 16, 15, 1, 20.00, 20.00),
(29, 16, 2, 1, 21.00, 21.00),
(30, 17, 26, 1, 29.00, 29.00),
(31, 17, 19, 1, 15.00, 15.00),
(32, 18, 21, 1, 17.00, 17.00),
(33, 19, 17, 1, 50.00, 50.00),
(34, 19, 3, 1, 50.00, 50.00),
(35, 20, 15, 1, 20.00, 20.00),
(36, 20, 16, 1, 35.00, 35.00),
(37, 21, 2, 1, 21.00, 21.00),
(38, 22, 2, 1, 21.00, 21.00),
(39, 23, 2, 1, 21.00, 21.00),
(40, 24, 2, 6, 21.00, 126.00),
(41, 25, 1, 1, 50.50, 50.50),
(42, 26, 3, 1, 50.00, 50.00),
(43, 27, 4, 5, 24.00, 120.00),
(44, 28, 2, 1, 21.00, 21.00),
(45, 28, 3, 1, 50.00, 50.00),
(46, 29, 4, 20, 24.00, 480.00),
(47, 31, 2, 7, 21.00, 147.00),
(48, 32, 21, 1, 17.00, 17.00),
(49, 32, 17, 1, 50.00, 50.00),
(50, 33, 1, 1, 50.50, 50.50),
(51, 34, 13, 1, 34.00, 34.00),
(52, 35, 7, 2, 40.00, 80.00),
(53, 36, 4, 19, 24.00, 456.00),
(54, 37, 14, 15, 36.00, 540.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `categoria_id_2` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- Indices de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venta_id` (`venta_id`,`producto_id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`);

--
-- Filtros para la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD CONSTRAINT `ventas_cabecera_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD CONSTRAINT `ventas_detalle_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `ventas_cabecera` (`id`),
  ADD CONSTRAINT `ventas_detalle_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2019 a las 08:19:46
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sael`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_proveedor` (IN `id` INT(11))  NO SQL
SELECT id_proveedor FROM proveedor WHERE id_proveedor=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_proveedor` (IN `id` INT(11))  NO SQL
DELETE FROM proveedor WHERE id_proveedor=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar_proveedor` (IN `na` VARCHAR(50), IN `p` CHAR(10), IN `g` VARCHAR(50), IN `e` VARCHAR(70), IN `sta` VARCHAR(30), IN `ci` VARCHAR(30), IN `co` VARCHAR(20), IN `str` VARCHAR(50), IN `nu` VARCHAR(10))  NO SQL
INSERT INTO proveedor(nombre,telefono,giro,correo,estado,ciudad,colonia,calle,numero) VALUES(na,p,g,e,sta,ci,co,str,nu)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `revisar_proveedores` ()  NO SQL
SELECT *FROM proveedor$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_proveedor` (IN `id` INT(11), IN `na` VARCHAR(50), IN `p` CHAR(10), IN `g` VARCHAR(50), IN `e` VARCHAR(70), IN `sta` VARCHAR(30), IN `ci` VARCHAR(30), IN `co` VARCHAR(20), IN `str` VARCHAR(50), IN `nu` VARCHAR(10))  NO SQL
UPDATE proveedor SET nombre=na, telefono=p, giro=g, estado=sta, ciudad=ci, colonia=co, calle=str, numero=nu WHERE id_proveedor=id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anticipo`
--

CREATE TABLE `anticipo` (
  `id_anticipo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `fecha_anticipo` date NOT NULL,
  `hora_anticipo` time NOT NULL,
  `monto` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `paterno_cliente` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `materno_cliente` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correo_cliente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_cliente` char(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_agente` int(11) NOT NULL,
  `id_paquete` int(11) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `duracion_evento` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id_mensajes` int(11) NOT NULL,
  `nombre_mensajes` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `correo_mensajes` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_mensajes` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje_mensajes` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

CREATE TABLE `paquete` (
  `id_paquete` int(11) NOT NULL,
  `nombre_paquete` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `costo_paquete` double NOT NULL,
  `descuento` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `paquete`
--

INSERT INTO `paquete` (`id_paquete`, `nombre_paquete`, `costo_paquete`, `descuento`) VALUES
(1, 'BÃ¡sico', 10000, 0),
(2, 'D\' LeÃ³n', 15000, 2250),
(3, 'D\' LeÃ³n Plus', 20000, 0),
(4, 'D\' LeÃ³n Especial', 25000, 0),
(5, 'Hora Extra', 1000, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paq_serv`
--

CREATE TABLE `paq_serv` (
  `id_paquete` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id_promocion` int(11) NOT NULL,
  `nombre_promocion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_promocion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `costo_promocion` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_proveedor` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `giro_proveedor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo_proveedor` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `estado_proveedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad_proveedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `colonia_proveedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `calle_proveedor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `numero_proveedor` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `nombre_servicio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `costo_servicio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id_sesion` int(11) NOT NULL,
  `nombre_sesion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_sesion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_sesion` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Agente',
  `estado_sesion` varchar(5) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'On'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id_sesion`, `nombre_sesion`, `fecha_sesion`, `tipo_sesion`, `estado_sesion`) VALUES
(1, 'Israel', '2019-05-06 22:51:57', 'Administrador', 'Off'),
(2, 'Israel', '2019-05-06 22:53:15', 'Administrador', 'Off'),
(3, 'Israel', '2019-05-06 23:08:45', 'Administrador', 'Off'),
(4, 'Israel', '2019-05-06 23:10:19', 'Administrador', 'Off'),
(5, 'Israel', '2019-05-07 21:55:26', 'Administrador', 'Off'),
(6, 'Israel', '2019-05-07 22:03:20', 'Administrador', 'Off'),
(7, 'Israel', '2019-05-07 22:13:26', 'Administrador', 'Off'),
(8, 'Israel', '2019-05-07 22:14:11', 'Administrador', 'Off'),
(9, 'Israel', '2019-05-07 22:24:01', 'Administrador', 'Off'),
(10, 'Israel', '2019-05-07 22:28:20', 'Administrador', 'Off'),
(11, 'Israel', '2019-05-07 22:35:28', 'Administrador', 'Off'),
(12, 'Israel', '2019-05-07 23:19:33', 'Administrador', 'Off'),
(13, 'Israel', '2019-05-07 23:22:11', 'Administrador', 'Off'),
(14, 'Israel', '2019-05-07 23:22:15', 'Administrador', 'Off'),
(15, 'Israel', '2019-05-07 23:22:24', 'Administrador', 'Off'),
(16, 'Israel', '2019-05-07 23:22:39', 'Administrador', 'Off'),
(17, 'Israel', '2019-05-07 23:24:21', 'Administrador', 'Off'),
(18, 'Israel', '2019-05-07 23:26:44', 'Administrador', 'Off'),
(19, 'Israel', '2019-05-07 23:27:56', 'Administrador', 'Off'),
(20, 'Israel', '2019-05-07 23:28:27', 'Administrador', 'Off'),
(21, 'Israel', '2019-05-07 23:36:51', 'Administrador', 'Off'),
(22, 'Jorge Armando', '2019-05-08 00:23:57', 'Agente', 'Off'),
(23, 'Jorge Armando', '2019-05-08 00:26:32', 'Agente', 'Off'),
(24, 'Israel', '2019-05-08 01:11:35', 'Administrador', 'Off'),
(25, 'Israel', '2019-05-08 01:14:45', 'Administrador', 'Off'),
(26, 'Jorge Armando', '2019-05-08 01:36:23', 'Agente', 'Off'),
(27, 'Israel', '2019-05-08 01:37:15', 'Administrador', 'Off'),
(28, 'Israel', '2019-05-08 08:36:45', 'Administrador', 'Off'),
(29, 'Israel', '2019-05-08 23:45:55', 'Administrador', 'Off'),
(30, 'Israel', '2019-05-09 14:30:06', 'Administrador', 'Off'),
(31, 'Israel', '2019-05-09 15:28:24', 'Administrador', 'Off'),
(32, 'Israel', '2019-05-15 16:32:27', 'Administrador', 'Off'),
(33, 'Israel', '2019-05-16 21:13:56', 'Administrador', 'Off');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `paterno_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `materno_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_usuario` date NOT NULL,
  `correo_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Agente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `paterno_usuario`, `materno_usuario`, `fecha_usuario`, `correo_usuario`, `password_usuario`, `tipo_usuario`) VALUES
(1, 'Israel', 'MartÃ­nez', 'JimÃ©nez', '1996-03-03', 'israelmartinezj96@gmail.com', 'kaiser123qwe', 'Administrador'),
(2, 'Jorge Armando', 'MartÃ­nez', 'JimÃ©nez', '2019-05-15', 'Armando2510_6@hotmail.com', '123', 'Agente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anticipo`
--
ALTER TABLE `anticipo`
  ADD PRIMARY KEY (`id_anticipo`,`id_cliente`,`id_evento`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_evento` (`id_evento`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`,`id_cliente`,`id_agente`,`id_paquete`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_agente` (`id_agente`),
  ADD KEY `id_paquete` (`id_paquete`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id_mensajes`);

--
-- Indices de la tabla `paquete`
--
ALTER TABLE `paquete`
  ADD PRIMARY KEY (`id_paquete`);

--
-- Indices de la tabla `paq_serv`
--
ALTER TABLE `paq_serv`
  ADD PRIMARY KEY (`id_paquete`,`id_servicio`),
  ADD KEY `paq_serv_ibfk_2` (`id_servicio`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id_promocion`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`,`id_proveedor`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id_sesion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anticipo`
--
ALTER TABLE `anticipo`
  MODIFY `id_anticipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id_mensajes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paquete`
--
ALTER TABLE `paquete`
  MODIFY `id_paquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id_promocion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id_sesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anticipo`
--
ALTER TABLE `anticipo`
  ADD CONSTRAINT `anticipo_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `anticipo_ibfk_2` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`);

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `evento_ibfk_2` FOREIGN KEY (`id_agente`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `evento_ibfk_3` FOREIGN KEY (`id_paquete`) REFERENCES `paquete` (`id_paquete`);

--
-- Filtros para la tabla `paq_serv`
--
ALTER TABLE `paq_serv`
  ADD CONSTRAINT `paq_serv_ibfk_1` FOREIGN KEY (`id_paquete`) REFERENCES `paquete` (`id_paquete`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paq_serv_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

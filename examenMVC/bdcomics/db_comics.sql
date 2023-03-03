-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2022 a las 17:30:39
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_comics`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE `tbl_categorias` (
  `ID_CAT` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clasificacion`
--

CREATE TABLE `tbl_clasificacion` (
  `ID_CLAS` int(11) NOT NULL,
  `CLASIFICACION` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_direcciones`
--

CREATE TABLE `tbl_direcciones` (
  `ID_DIRECCION` int(11) NOT NULL,
  `CALLE` varchar(30) DEFAULT NULL,
  `NUM_EXT` varchar(10) DEFAULT NULL,
  `NUM_INT` varchar(10) DEFAULT NULL,
  `COLONIA` varchar(30) DEFAULT NULL,
  `CIUDAD` varchar(30) DEFAULT NULL,
  `PAIS` varchar(30) DEFAULT NULL,
  `CP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_obras`
--

CREATE TABLE `tbl_obras` (
  `ID_OBRAS` int(11) NOT NULL,
  `FECHA` date DEFAULT NULL,
  `PRECIO` float DEFAULT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `EDITORIAL` varchar(30) DEFAULT NULL,
  `ESTADO` varchar(30) DEFAULT NULL,
  `CANTIDAD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tarjetas`
--

CREATE TABLE `tbl_tarjetas` (
  `NUM_TARJETA` int(11) NOT NULL,
  `FECHA_EXP` varchar(5) DEFAULT NULL,
  `NOMBRE_TITULAR` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `ID_USUARIO` int(11) NOT NULL,
  `NOMBRE_US` varchar(20) DEFAULT NULL,
  `FECHA_NAC` date DEFAULT NULL,
  `PRIVILEGIO` varchar(20) DEFAULT NULL,
  `CORREO` varchar(30) DEFAULT NULL,
  `CONTRASEÑA` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ventas`
--

CREATE TABLE `tbl_ventas` (
  `NUMERO_VENTA` int(11) NOT NULL,
  `FECHA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`ID_CAT`);

--
-- Indices de la tabla `tbl_clasificacion`
--
ALTER TABLE `tbl_clasificacion`
  ADD PRIMARY KEY (`ID_CLAS`);

--
-- Indices de la tabla `tbl_direcciones`
--
ALTER TABLE `tbl_direcciones`
  ADD PRIMARY KEY (`ID_DIRECCION`);

--
-- Indices de la tabla `tbl_obras`
--
ALTER TABLE `tbl_obras`
  ADD PRIMARY KEY (`ID_OBRAS`);

--
-- Indices de la tabla `tbl_tarjetas`
--
ALTER TABLE `tbl_tarjetas`
  ADD PRIMARY KEY (`NUM_TARJETA`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Indices de la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  ADD PRIMARY KEY (`NUMERO_VENTA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  MODIFY `ID_CAT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_clasificacion`
--
ALTER TABLE `tbl_clasificacion`
  MODIFY `ID_CLAS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_direcciones`
--
ALTER TABLE `tbl_direcciones`
  MODIFY `ID_DIRECCION` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_obras`
--
ALTER TABLE `tbl_obras`
  MODIFY `ID_OBRAS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  MODIFY `NUMERO_VENTA` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

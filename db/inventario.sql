-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2021 a las 20:16:49
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
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_pro` int(11) NOT NULL COMMENT 'id producto',
  `nom_pro` varchar(500) NOT NULL COMMENT 'nombre producto',
  `ref_pro` varchar(500) NOT NULL,
  `pre_pro` int(11) NOT NULL COMMENT 'precio producto',
  `pes_pro` int(11) NOT NULL COMMENT 'peso producto',
  `cat_pro` varchar(100) NOT NULL COMMENT 'categoria producto',
  `sto_pro` int(11) NOT NULL COMMENT 'stock producto',
  `fec_cre` date NOT NULL COMMENT 'fecha creacion producto',
  `fec_ult_ven` datetime DEFAULT NULL COMMENT 'fecha ultima venta'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_pro`, `nom_pro`, `ref_pro`, `pre_pro`, `pes_pro`, `cat_pro`, `sto_pro`, `fec_cre`, `fec_ult_ven`) VALUES
(2, 'AAA', '5454', 6, 8, 'ERTERT', 88, '2021-06-12', NULL),
(3, 'gdsfg', 'gsdfg', 5, 6, 'gsdfg', 65, '2021-06-12', NULL),
(4, 'sdafasf', '6', 6, 6, 'gsdg', 6456, '2021-06-12', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_pro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id producto', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

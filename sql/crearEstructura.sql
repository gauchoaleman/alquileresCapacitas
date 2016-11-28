CREATE DATABASE capacitas;
-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2016 a las 20:08:29
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `capacitas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `idAlquiler` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `fechaInicio` datetime DEFAULT NULL,
  `fechaFin` datetime DEFAULT NULL,
  `observaciones` varchar(256) DEFAULT NULL,
  `precioTotal` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `telefono` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Estructura de tabla para la tabla `idtiporecurso`
--

CREATE TABLE `idtiporecurso` (
  `idTipoRecurso` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Estructura de tabla para la tabla `recurso`
--

CREATE TABLE `recurso` (
  `idRecurso` int(11) NOT NULL,
  `idTipoRecurso` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `costoxHora` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Estructura de tabla para la tabla `recursoalquiler`
--

CREATE TABLE `recursoalquiler` (
  `IdRecursoAlquiler` int(11) NOT NULL,
  `idAlquiler` int(11) NOT NULL,
  `idRecurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `clave`) VALUES
(1, 'Stefan', 'Nafets'),
(2, 'Lucas', 'Sacul');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`idAlquiler`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `idtiporecurso`
--
ALTER TABLE `idtiporecurso`
  ADD PRIMARY KEY (`idTipoRecurso`);

--
-- Indices de la tabla `recurso`
--
ALTER TABLE `recurso`
  ADD PRIMARY KEY (`idRecurso`);

--
-- Indices de la tabla `recursoalquiler`
--
ALTER TABLE `recursoalquiler`
  ADD PRIMARY KEY (`IdRecursoAlquiler`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);
-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2021 a las 15:44:45
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbfutbol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administracion`
--

CREATE TABLE `administracion` (
  `idempleado` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `edad` varchar(35) NOT NULL,
  `puesto` varchar(35) NOT NULL,
  `equipo` varchar(35) NOT NULL,
  `asociacion` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administracion`
--

INSERT INTO `administracion` (`idempleado`, `nombre`, `apellido`, `edad`, `puesto`, `equipo`, `asociacion`) VALUES
(0, 'Nombre', 'Apellido', '00', 'Puesto', 'Equipo', 'Asociacion'),
(1, 'Checo', 'Perez', '67', 'Entrenador', 'America', 'FIFA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `idequipo` int(35) NOT NULL,
  `nombre_equipo` varchar(35) NOT NULL,
  `pais` varchar(35) NOT NULL,
  `copas` varchar(35) NOT NULL,
  `partidos` varchar(35) NOT NULL,
  `clubes` varchar(35) NOT NULL,
  `jugadores` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`idequipo`, `nombre_equipo`, `pais`, `copas`, `partidos`, `clubes`, `jugadores`) VALUES
(0, '', 'Mexico/España', '', '', '', ''),
(1, 'America', 'Mexico', 'Mundial 2020', 'vs. Pachuca, vs. Chivas', 'America FC', 'Daniel, Pepe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `idjuego` int(11) NOT NULL,
  `equipos` varchar(35) NOT NULL,
  `copa` varchar(35) NOT NULL,
  `resultados` varchar(35) NOT NULL,
  `pais` varchar(35) NOT NULL,
  `organizacion` varchar(35) NOT NULL,
  `patrocinadores` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`idjuego`, `equipos`, `copa`, `resultados`, `pais`, `organizacion`, `patrocinadores`) VALUES
(0, 'Equipos', 'Copa', 'Resultados', 'Pais', 'Organizacion', 'Patrocinadores'),
(1, 'America vs Barca', 'Mundial 2014', 'Gano America', 'Mexico/España', 'FIFA', 'Coca-Cola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `idjugador` int(35) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `equipo` varchar(35) NOT NULL,
  `pais` varchar(35) NOT NULL,
  `edad` int(2) NOT NULL,
  `partidos` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`idjugador`, `nombre`, `apellido`, `equipo`, `pais`, `edad`, `partidos`) VALUES
(0, 'Nombre', 'Apellido', 'Equipo', 'Pais', 0, 'Partidos'),
(1, 'Daniel', 'Hernandez', 'America', 'Mexico', 17, 'vs. Pachuca, vs. Chivas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administracion`
--
ALTER TABLE `administracion`
  ADD PRIMARY KEY (`idempleado`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`idequipo`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`idjugador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

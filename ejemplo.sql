-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2019 a las 13:22:37
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejemplo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombre`, `apellido`, `direccion`, `correo`, `telefono`, `foto`) VALUES
(9, 'juan pedro', 'Ramierz', 'si o si', 'diquesi@gmail.com', '1234598', ''),
(10, 'lucas manuel', 'espinoza', 'ruta cero', 'jili@poyas', '564231000', ''),
(11, 'rik9', 'hanter', 'n idea', 'juaz@', '14524', ''),
(12, 'poca', 'hontas', 'oijfsakn', 'pure@hotmail.com', '5751496854', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `presente` varchar(45) NOT NULL,
  `ausente` varchar(45) NOT NULL,
  `justificacion` varchar(45) NOT NULL,
  `tardanza` varchar(45) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `nombre`, `apellido`, `presente`, `ausente`, `justificacion`, `tardanza`, `fecha`) VALUES
(3, 'lol', 'man', 'no', 'si', 'no', 'no', '0000-00-00'),
(4, 'pepe', 'agento', 'si', 'no', 'no', 'no', '0000-00-00'),
(5, 'marchelo', '', 'no', 'si', 'no', 'no', '0000-00-00'),
(6, 'ppeito', '', 'si', 'NO', 'NO', 'no', '0000-00-00'),
(7, 'huevo', 'duro', 'si', 'no', '', 'no', '2019-12-13'),
(8, 'heuvaso', 'durango', 'no', 'si', 'no', 'no', '2019-08-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id_calificaciones` int(10) UNSIGNED NOT NULL,
  `exelente` varchar(45) NOT NULL,
  `muybueno` varchar(45) NOT NULL,
  `bueno` varchar(45) NOT NULL,
  `regular` varchar(45) NOT NULL,
  `malo` varchar(45) NOT NULL,
  `muymalo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id_calificaciones`, `exelente`, `muybueno`, `bueno`, `regular`, `malo`, `muymalo`) VALUES
(2, 'diez', 'ocho', 'seis', 'cinco', 'cuatro', 'uno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(10) UNSIGNED NOT NULL,
  `curso` varchar(45) NOT NULL,
  `materia` varchar(45) NOT NULL,
  `profesor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idcurso`, `curso`, `materia`, `profesor`) VALUES
(7, 'Segundo AÃ±o C', 'Fisica ', 'Raul Lopez'),
(8, 'Segundo AÃ±o F', 'Quimica', 'Cristian Castro'),
(9, 'Segundo AÃ±o D', 'Fisica', 'Carlos Paredes'),
(10, 'Primer AÃ±o D', 'Quimica', 'Raul Lopez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `nombre`, `apellido`, `direccion`, `correo`, `telefono`, `foto`) VALUES
(3, 'Mauricio ', 'Macri', 'done sea ', 'pepito@gmail.com', '123436789', ''),
(4, 'carlos ', 'pelado', 'nfjhds', 'kjfasi@', '3125512654', ''),
(5, 'ppoopololo', 'lukas', 'moe', 'ipowfjw', 'jm1545454', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_alumno_curso`
--

CREATE TABLE `rel_alumno_curso` (
  `idcurso` int(10) UNSIGNED DEFAULT NULL,
  `id_alumno` int(10) UNSIGNED DEFAULT NULL,
  `id_asistencia` int(10) UNSIGNED DEFAULT NULL,
  `id_calificaciones` int(10) UNSIGNED DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id_calificaciones`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `rel_alumno_curso`
--
ALTER TABLE `rel_alumno_curso`
  ADD KEY `FK_rel_alumno_curso_1` (`idcurso`),
  ADD KEY `FK_rel_alumno_curso_2` (`id_alumno`),
  ADD KEY `FK_rel_alumno_curso_3` (`id_asistencia`),
  ADD KEY `FK_rel_alumno_curso_4` (`id_calificaciones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id_calificaciones` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rel_alumno_curso`
--
ALTER TABLE `rel_alumno_curso`
  ADD CONSTRAINT `FK_rel_alumno_curso_1` FOREIGN KEY (`idcurso`) REFERENCES `curso` (`idcurso`),
  ADD CONSTRAINT `FK_rel_alumno_curso_2` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  ADD CONSTRAINT `FK_rel_alumno_curso_3` FOREIGN KEY (`id_asistencia`) REFERENCES `asistencia` (`id_asistencia`),
  ADD CONSTRAINT `FK_rel_alumno_curso_4` FOREIGN KEY (`id_calificaciones`) REFERENCES `calificaciones` (`id_calificaciones`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

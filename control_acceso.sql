-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-12-2020 a las 14:34:03
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acceso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `cargo_id` int(2) NOT NULL,
  `nombre_cargo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`cargo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`cargo_id`, `nombre_cargo`) VALUES
(1, 'Estudiante'),
(2, 'Profesor'),
(3, 'Secretario'),
(4, 'Visitante'),
(5, 'programador'),
(6, 'Vigilante'),
(7, 'Operario de Aseo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE IF NOT EXISTS `ciudad` (
  `idciudad` int(2) NOT NULL,
  `nomciudad` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idciudad`, `nomciudad`) VALUES
(1, 'Cartagena'),
(2, 'Turbaco'),
(3, 'Arjona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE IF NOT EXISTS `configuracion` (
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_postal` int(10) NOT NULL,
  `direccion` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(14) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`nombre`, `nit`, `ciudad`, `codigo_postal`, `direccion`, `email`, `tel`) VALUES
('Bertha Suttner', '103124', 'Cartagena', 102345, 'Nelson Mandela', 'berthasuttner@gmail.com', '301');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `estudianteinasistencia`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `estudianteinasistencia`;
CREATE TABLE IF NOT EXISTS `estudianteinasistencia` (
`identidad_id` varchar(14)
,`nombre` varchar(51)
,`apellido` varchar(51)
,`fecha` date
,`nombre_cargo` varchar(25)
,`grado` varchar(4)
,`excusa` varchar(60)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `excusa`
--

DROP TABLE IF EXISTS `excusa`;
CREATE TABLE IF NOT EXISTS `excusa` (
  `identidad_id` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `excusa` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  KEY `fk_excuperso` (`identidad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `excusa`
--

INSERT INTO `excusa` (`identidad_id`, `fecha`, `excusa`) VALUES
('103', '2020-12-04', '✓'),
('104', '2020-12-04', '✓'),
('106', '2020-12-04', 'X'),
('105', '2020-12-04', '✓'),
('103', '2020-12-04', '✓'),
('104', '2020-12-04', '✓'),
('106', '2020-12-04', 'X'),
('105', '2020-12-04', '✓');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

DROP TABLE IF EXISTS `historial`;
CREATE TABLE IF NOT EXISTS `historial` (
  `identidad_id` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `descripcion_ac` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hora` time NOT NULL,
  `accion` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  KEY `fk_histoperso` (`identidad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`identidad_id`, `fecha`, `descripcion_ac`, `hora`, `accion`) VALUES
('103', '2020-12-04', '', '11:01:51', 'in'),
('104', '2020-12-04', '', '11:01:55', 'in'),
('105', '2020-12-04', '', '11:02:00', 'in');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE IF NOT EXISTS `personal` (
  `identidad_id` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `prinom` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `segnom` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `priapellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `segapellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` varchar(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `grado` varchar(4) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo_id` int(2) NOT NULL,
  `idciudad` int(2) NOT NULL,
  `barrio` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`identidad_id`),
  KEY `fk_cargo` (`cargo_id`),
  KEY `fk_ciudad` (`idciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`identidad_id`, `prinom`, `segnom`, `priapellido`, `segapellido`, `fecha_nacimiento`, `grado`, `cargo_id`, `idciudad`, `barrio`, `direccion`, `email`, `telefono`) VALUES
('101', 'Juan', NULL, 'Pinto', 'Mercado', '20020417', NULL, 5, 1, 'Null', 'Null', 'Null', 'Null'),
('103', 'Roni', '', 'Carrascal', 'Tejedor', '2001/11/14', '8°1', 1, 1, 'Nelson Mandela', 'Mz8 Lt24', 'ronnicarrascaltejedor@gmail.com', '3021451452'),
('104', 'Mary', 'Luz', 'Ocarman', 'Berrio', '1997/12/01', '', 3, 1, 'Las gaviotas', 'Mz787 Lt145', 'k@gmail.com', '3021457854'),
('105', 'Harol', '', 'Carrascal', 'Berrio', '1998/01/14', '', 2, 2, 'Las palmas', 'Mz8 Lt24', 'harol@gmail.com', '3215487985'),
('106', 'Juan', 'Camilo', 'Pinto', 'Mercado', '2002/04/17', '', 1, 1, 'Nelson Mandela', 'Mz7 lt25', 'juanca1795@gmail.com', '3021451245'),
('107', 'Ana', 'Maria', 'Carrascal', 'Banquet', '', '', 4, 1, 'Nelson Mandela', 'Mz5 lt45', '', '302145785');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `nivel` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `identidad_id` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  KEY `fk_usuaperso` (`identidad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nivel`, `identidad_id`, `pass`) VALUES
('3', '101', 'sena'),
('1', '104', 'hola1'),
('2', '105', 'sena');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistainasistencia`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vistainasistencia`;
CREATE TABLE IF NOT EXISTS `vistainasistencia` (
`identidad_id` varchar(14)
,`nombre` varchar(51)
,`apellido` varchar(51)
,`fecha` date
,`nombre_cargo` varchar(25)
,`grado` varchar(4)
,`excusa` varchar(60)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistapersonal`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vistapersonal`;
CREATE TABLE IF NOT EXISTS `vistapersonal` (
`identidad_id` varchar(14)
,`prinom` varchar(25)
,`segnom` varchar(25)
,`priapellido` varchar(25)
,`segapellido` varchar(25)
,`fecha_nacimiento` varchar(12)
,`grado` varchar(4)
,`nombre_cargo` varchar(25)
,`nomciudad` varchar(25)
,`barrio` varchar(25)
,`direccion` varchar(50)
,`email` varchar(50)
,`telefono` varchar(12)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistausuario`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vistausuario`;
CREATE TABLE IF NOT EXISTS `vistausuario` (
`nivel` varchar(2)
,`identidad_id` varchar(12)
,`pass` varchar(12)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `estudianteinasistencia`
--
DROP TABLE IF EXISTS `estudianteinasistencia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `estudianteinasistencia`  AS  select `vistainasistencia`.`identidad_id` AS `identidad_id`,`vistainasistencia`.`nombre` AS `nombre`,`vistainasistencia`.`apellido` AS `apellido`,`vistainasistencia`.`fecha` AS `fecha`,`vistainasistencia`.`nombre_cargo` AS `nombre_cargo`,`vistainasistencia`.`grado` AS `grado`,`vistainasistencia`.`excusa` AS `excusa` from `vistainasistencia` where `vistainasistencia`.`nombre_cargo` = 'Estudiante' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vistainasistencia`
--
DROP TABLE IF EXISTS `vistainasistencia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistainasistencia`  AS  select `personal`.`identidad_id` AS `identidad_id`,concat_ws(' ',`personal`.`prinom`,`personal`.`segnom`) AS `nombre`,concat_ws(' ',`personal`.`priapellido`,`personal`.`segapellido`) AS `apellido`,`excusa`.`fecha` AS `fecha`,`cargo`.`nombre_cargo` AS `nombre_cargo`,`personal`.`grado` AS `grado`,`excusa`.`excusa` AS `excusa` from ((`personal` join `excusa` on(`personal`.`identidad_id` = `excusa`.`identidad_id`)) join `cargo` on(`personal`.`cargo_id` = `cargo`.`cargo_id`)) where `excusa`.`excusa` = 'X' ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vistapersonal`
--
DROP TABLE IF EXISTS `vistapersonal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistapersonal`  AS  select `personal`.`identidad_id` AS `identidad_id`,`personal`.`prinom` AS `prinom`,`personal`.`segnom` AS `segnom`,`personal`.`priapellido` AS `priapellido`,`personal`.`segapellido` AS `segapellido`,`personal`.`fecha_nacimiento` AS `fecha_nacimiento`,`personal`.`grado` AS `grado`,`cargo`.`nombre_cargo` AS `nombre_cargo`,`ciudad`.`nomciudad` AS `nomciudad`,`personal`.`barrio` AS `barrio`,`personal`.`direccion` AS `direccion`,`personal`.`email` AS `email`,`personal`.`telefono` AS `telefono` from ((`personal` join `ciudad` on(`personal`.`idciudad` = `ciudad`.`idciudad`)) join `cargo` on(`personal`.`cargo_id` = `cargo`.`cargo_id`)) where `personal`.`identidad_id` <> 101 ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vistausuario`
--
DROP TABLE IF EXISTS `vistausuario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistausuario`  AS  select `usuario`.`nivel` AS `nivel`,`usuario`.`identidad_id` AS `identidad_id`,`usuario`.`pass` AS `pass` from `usuario` where `usuario`.`identidad_id` <> '101' ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `excusa`
--
ALTER TABLE `excusa`
  ADD CONSTRAINT `fk_excuperso` FOREIGN KEY (`identidad_id`) REFERENCES `personal` (`identidad_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `fk_histoperso` FOREIGN KEY (`identidad_id`) REFERENCES `personal` (`identidad_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `fk_cargo` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`cargo_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ciudad` FOREIGN KEY (`idciudad`) REFERENCES `ciudad` (`idciudad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuaperso` FOREIGN KEY (`identidad_id`) REFERENCES `personal` (`identidad_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

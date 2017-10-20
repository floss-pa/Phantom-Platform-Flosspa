-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-10-2017 a las 19:44:49
-- Versión del servidor: 5.7.19-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phantom_platform`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicionesusuario`
--

CREATE TABLE `condicionesusuario` (
  `codigousuario` int(11) NOT NULL,
  `codigoparticipareaster` int(11) NOT NULL,
  `codigorecibirmail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Contiene las decisiones del usuario en la plataforma';

--
-- Volcado de datos para la tabla `condicionesusuario`
--

INSERT INTO `condicionesusuario` (`codigousuario`, `codigoparticipareaster`, `codigorecibirmail`) VALUES
(1, 0, 0),
(2, 0, 0),
(3, 0, 0),
(4, 0, 0),
(5, 0, 0),
(6, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `codigoestado` int(11) NOT NULL,
  `estado` varchar(32) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Codigos de estado de los usuarios';

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`codigoestado`, `estado`) VALUES
(1, 'ACTIVO'),
(2, 'DESACTIVADO'),
(3, 'BLOQUEADO'),
(4, 'BANEADO'),
(5, 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `codigoevento` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `codigousuario` int(11) NOT NULL,
  `tituloevento` text COLLATE utf8_spanish2_ci NOT NULL,
  `fechainicioevento` datetime NOT NULL,
  `fechafinevento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`codigoevento`, `codigousuario`, `tituloevento`, `fechainicioevento`, `fechafinevento`) VALUES
('SFD2017', 1, 'Software Freedom Day 2017', '2017-10-07 00:00:00', '2017-10-08 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huevospascua`
--

CREATE TABLE `huevospascua` (
  `codigohuevopascua` int(11) NOT NULL,
  `titulo` varchar(128) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `codigosecreto` varchar(128) COLLATE utf8_spanish2_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Contiene los huevos de pascua';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secuenciassubeventos`
--

CREATE TABLE `secuenciassubeventos` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `secuenciassubeventos`
--

INSERT INTO `secuenciassubeventos` (`id`) VALUES
(17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secuenciasusuarios`
--

CREATE TABLE `secuenciasusuarios` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Secuencias de los Usuarios';

--
-- Volcado de datos para la tabla `secuenciasusuarios`
--

INSERT INTO `secuenciasusuarios` (`id`) VALUES
(7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subeventos`
--

CREATE TABLE `subeventos` (
  `codigoevento` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `codigoseccion` int(11) NOT NULL,
  `codigousuario` int(11) NOT NULL,
  `tipotema` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `tema` text COLLATE utf8_spanish2_ci NOT NULL,
  `ubicacion` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `horainicio` time NOT NULL,
  `horafinal` time NOT NULL,
  `comentario` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `subeventos`
--

INSERT INTO `subeventos` (`codigoevento`, `codigoseccion`, `codigousuario`, `tipotema`, `tema`, `ubicacion`, `horainicio`, `horafinal`, `comentario`) VALUES
('SFD2017', 1, 1, 'CONFERENCIA', 'Bienvenida', 'SPC1', '09:00:00', '09:45:00', ''),
('SFD2017', 2, 1, 'CONFERENCIA', 'Big Data: Tomar decisiones inteligentes también puede ser Free', 'SPC1', '10:00:00', '10:30:00', ''),
('SFD2017', 3, 1, 'CONFERENCIA', 'Ingeniería Social con Social-Engineering Toolkit (SET)', 'SPC1', '10:30:00', '11:30:00', ''),
('SFD2017', 4, 1, 'CONFERENCIA', 'Fintech/Blockchain (Criptomonedas)', 'SPC1', '11:30:00', '12:15:00', ''),
('SFD2017', 5, 1, 'ALMUERZO', 'Almuerzo', 'SPC1', '12:10:00', '12:45:00', ''),
('SFD2017', 6, 1, 'CONFERENCIA', 'Docker y su aplicación en la industria', 'SPC1', '12:45:00', '13:15:00', ''),
('SFD2017', 7, 1, 'CONFERENCIA', 'Internet of Things: Protocols, Evolution and Why you should care about.', 'SPC1', '13:15:00', '14:00:00', ''),
('SFD2017', 8, 1, 'CONFERENCIA', 'Hablemos de Computación Cuántica', 'SPC1', '14:00:00', '14:30:00', ''),
('SFD2017', 9, 1, 'CONFERENCIA', 'Diseño Gráfico Open-Source', 'SPC1', '14:30:00', '15:00:00', ''),
('SFD2017', 10, 1, 'CONFERENCIA', 'Creative Commons (Licenciamiento)', 'SPC1', '15:00:00', '15:30:00', ''),
('SFD2017', 11, 1, 'CONFERENCIA', 'What is a Data Scientist? Reasons why Fedora is the best OS for Big Data', 'SPC1', '15:30:00', '16:00:00', ''),
('SFD2017', 12, 1, 'TALLERES', 'Gestión de proyectos con Git y GitHub', 'SPC1', '09:45:00', '10:30:00', ''),
('SFD2017', 13, 1, 'TALLERES', 'Producción de audio y video utilizando la suite de Ubuntu Studio', 'SPC1', '10:30:00', '11:15:00', ''),
('SFD2017', 14, 1, 'TALLERES', 'Gestión documental con Alfresco', 'SPC1', '13:15:00', '14:00:00', ''),
('SFD2017', 15, 1, 'TALLERES', 'Introducción al Web Scraping', 'SPC1', '14:00:00', '14:45:00', ''),
('SFD2017', 16, 1, 'TALLERES', 'Hagamos un mobile App con NativeScript y Vuejs', 'SPC1', '14:45:00', '15:15:00', ''),
('SFD2017', 17, 1, 'TALLERES', 'Diseño de personajes con Inkscape', 'SPC1', '15:15:00', '16:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablero`
--

CREATE TABLE `tablero` (
  `codigousuario` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `encontrados` varchar(256) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Tablero de puntaje';

--
-- Volcado de datos para la tabla `tablero`
--

INSERT INTO `tablero` (`codigousuario`, `posicion`, `puntuacion`, `encontrados`) VALUES
(3, 1, 100, 'Meteor,Javascript,GNU,Linux'),
(4, 2, 50, 'Python,Ruby');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposusuarios`
--

CREATE TABLE `tiposusuarios` (
  `codigotipousuario` int(11) NOT NULL,
  `tipousuario` char(32) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Contiene los tipos de usuario de la plataforma';

--
-- Volcado de datos para la tabla `tiposusuarios`
--

INSERT INTO `tiposusuarios` (`codigotipousuario`, `tipousuario`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'MODERADOR'),
(3, 'PARTICIPANTE'),
(4, 'CONFERENCISTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `codigousuario` int(11) NOT NULL,
  `codigotipousuario` int(11) NOT NULL,
  `nombreusuario` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `claveusuario` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `tiquete` varchar(32) COLLATE utf8_spanish2_ci NOT NULL,
  `codigoestado` int(11) NOT NULL,
  `correoelectronico` varchar(256) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Tabla que contiene los usuarios';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codigousuario`, `codigotipousuario`, `nombreusuario`, `claveusuario`, `tiquete`, `codigoestado`, `correoelectronico`) VALUES
(1, 1, 'maryon_torres', 'WWxkR2VXVlhPWFZOVkVsNg==', '#123456789101', 5, 'maryontorres@gmail.com'),
(2, 2, 'luismora97', 'WWtoV2NHTXlNWFpqYlVWNFRXcE5QUT09', '#234567891123', 5, 'luismora1997@gmail.com'),
(3, 3, 'ubu_op', 'WkZkS01XSXpRVFZQUVQwOQ==', '#345678912098', 5, 'example@example.com'),
(4, 3, 'JavierDel20', 'WVcxR01tRlVSWGxOZHowOQ==', '#456789123120', 1, 'example2@example.com'),
(5, 3, 'hernan-quexopa', 'WTFjNWJXVnRaSFZOU0VVOQ==', '#567891234510', 5, 'tekuali90@gmail.com'),
(6, 3, 'manuelserna1206', 'VEZNeGRGbFlVbXhpZHowOQ==', '#678912345678', 5, 'manomauro1206@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `condicionesusuario`
--
ALTER TABLE `condicionesusuario`
  ADD KEY `codigousuario` (`codigousuario`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`codigoestado`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`codigoevento`),
  ADD KEY `codigousuario` (`codigousuario`);

--
-- Indices de la tabla `huevospascua`
--
ALTER TABLE `huevospascua`
  ADD PRIMARY KEY (`codigohuevopascua`);

--
-- Indices de la tabla `subeventos`
--
ALTER TABLE `subeventos`
  ADD PRIMARY KEY (`codigoseccion`),
  ADD KEY `codigousuario` (`codigousuario`),
  ADD KEY `codigoevento` (`codigoevento`);

--
-- Indices de la tabla `tablero`
--
ALTER TABLE `tablero`
  ADD KEY `codigousuario` (`codigousuario`);

--
-- Indices de la tabla `tiposusuarios`
--
ALTER TABLE `tiposusuarios`
  ADD PRIMARY KEY (`codigotipousuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigousuario`),
  ADD UNIQUE KEY `tiquete` (`tiquete`),
  ADD KEY `codigotipousuario` (`codigotipousuario`),
  ADD KEY `codigoestado` (`codigoestado`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `condicionesusuario`
--
ALTER TABLE `condicionesusuario`
  ADD CONSTRAINT `condicionesusuario_ibfk_1` FOREIGN KEY (`codigousuario`) REFERENCES `usuarios` (`codigousuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`codigousuario`) REFERENCES `usuarios` (`codigousuario`);

--
-- Filtros para la tabla `subeventos`
--
ALTER TABLE `subeventos`
  ADD CONSTRAINT `subeventos_ibfk_1` FOREIGN KEY (`codigoevento`) REFERENCES `eventos` (`codigoevento`),
  ADD CONSTRAINT `subeventos_ibfk_2` FOREIGN KEY (`codigousuario`) REFERENCES `usuarios` (`codigousuario`);

--
-- Filtros para la tabla `tablero`
--
ALTER TABLE `tablero`
  ADD CONSTRAINT `tablero_ibfk_1` FOREIGN KEY (`codigousuario`) REFERENCES `usuarios` (`codigousuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`codigotipousuario`) REFERENCES `tiposusuarios` (`codigotipousuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

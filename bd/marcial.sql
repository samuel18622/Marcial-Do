-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2019 a las 04:01:54
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marcial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `ID` int(2) NOT NULL,
  `usuario_log` varchar(30) NOT NULL,
  `contra_log` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`ID`, `usuario_log`, `contra_log`) VALUES
(1, 'samuel', 'as18'),
(2, 'mario', 'kanario'),
(5, 'samu', 'as18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID` int(2) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Correo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ID`, `Nombre`, `Correo`) VALUES
(1, 'Aleja ', 'mverabetancur@gmail.com'),
(2, 'Codi', 'panda@hotmail.com'),
(4, 'samu', 'samuel18@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `ID` int(2) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Texto` text NOT NULL,
  `imagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`ID`, `Nombre`, `Texto`, `imagen`) VALUES
(1, 'Inicio', '!!Bienvenido a MARCIAL-DO!!\r\nUn time-line con Ã©nfasis en las artes marciales.\r\n!!AcompÃ¡Ã±anos en esta gran aventura por el tiempo!!\r\n', 'img/casita.png'),
(2, '23 Ac', 'Nomi no Sukune fue un legendario luchador de sumo japonÃ©s durante la era del Emperador Suinin.  Supuestamente, en el 23 a. C., el Emperador le ordenÃ³ a Nomi no Sukune que tratara con Taima no Kehaya (? ? ? ?) despuï¿½s de que se jactara de que era el hombre mÃ¡s fuerte "bajo el cielo". Nomi no Sukune se enfrentï¿½ a Taima no Kehaya en la mano combatiï¿½ a mano y se rompiï¿½ las costillas con una patada y la espalda con otra, matando a Taima no Kehaya.  No era sumo moderno, pero se le considera como el creador humano del sumo.  Era un antepasado de Sugawara no Michizane.', 'Array'),
(3, 'Año 1970', 'El Campeonato Mundial de Karate de 1970 fue la primera ediciï¿½n del torneo de karate mï¿½s importante del mundo. Se disputÃ³ en Tokio,  JapÃ³n y contÃ³ con la participaciï¿½n de 178 karatekas de diferentes paï¿½ses del mundo. \r\nEste campeonatos solo fue de comitï¿½ por equipos y exclusivamente en la rama varonil ya no fue sino hasta 1980 en Madrid, Espaï¿½a, que hubo participaciï¿½n femenina y que se incluyï¿½ la modalidad de Kata. ? Participaron 178 deportistas federados, de los cuales 41 fueron de ï¿½frica, 41 de Asia, 51 de Europa, 9 de Oceanï¿½a y 36 de Amï¿½rica. ', 'Array');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `usuario_log` (`usuario_log`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Correo` (`Correo`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

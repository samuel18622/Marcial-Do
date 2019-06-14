-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-06-2019 a las 14:52:09
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `usuario_log` varchar(30) NOT NULL,
  `contra_log` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `usuario_log` (`usuario_log`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf16;

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

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Correo` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Correo` (`Correo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ID`, `Nombre`, `Correo`) VALUES
(1, 'Aleja ', 'mverabetancur@gmail.com'),
(2, 'Codi', 'panda@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

DROP TABLE IF EXISTS `seccion`;
CREATE TABLE IF NOT EXISTS `seccion` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(150) NOT NULL,
  `Texto` text NOT NULL,
  `imagen` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`ID`, `Nombre`, `Texto`, `imagen`) VALUES
(1, 'Inicio', '!!Bienvenido a MARCIAL-DO!!\r\nUn time-line con Ã©nfasis en las artes marciales.\r\n!!AcompÃ¡Ã±anos en esta gran aventura por el tiempo!!\r\n', 'img/casita.png'),
(2, '23 Ac', 'Nomi no Sukune (é‡Ž è¦‹ å®¿ ç¦°) fue un legendario luchador de sumo japonÃ©s durante la era del Emperador Suinin.  Supuestamente, en el 23 a. C., el Emperador le ordenÃ³ a Nomi no Sukune que tratara con Taima no Kehaya (éº» è¹´ é€Ÿ é€Ÿ) despuÃ©s de que se jactara de que era el hombre mÃ¡s fuerte \"bajo el cielo\". Nomi no Sukune se enfrentÃ³ a Taima no Kehaya en la mano combatiÃ³ a mano y se rompiÃ³ las costillas con una patada y la espalda con otra, matando a Taima no Kehaya.  No era sumo moderno, pero se le considera como el creador humano del sumo.  Era un antepasado de Sugawara no Michizane.', 'img/pa_23aC.jpg'),
(3, 'Año 1970', 'El Campeonato Mundial de Karate de 1970 fue la primera ediciÃ³n del torneo de karate mÃ¡s importante del mundo. Se disputÃ³ en Tokio, â€‹ JapÃ³n y contÃ³ con la participaciÃ³n de 178 karatekas de diferentes paÃ­ses del mundo. \r\nEste campeonatos solo fue de comitÃ© por equipos y exclusivamente en la rama varonil ya no fue sino hasta 1980 en Madrid, EspaÃ±a, que hubo participaciÃ³n femenina y que se incluyÃ³ la modalidad de Kata. â€‹ Participaron 178 deportistas federados, de los cuales 41 fueron de Ãfrica, 41 de Asia, 51 de Europa, 9 de OceanÃ­a y 36 de AmÃ©rica. ', 'img/pa_1970.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

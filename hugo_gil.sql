-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2021 a las 23:06:11
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
-- Base de datos: `hugo_gil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programador`
--

CREATE TABLE `programador` (
  `cod_programador` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `lenguajes` varchar(255) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `programador`
--

INSERT INTO `programador` (`cod_programador`, `nombre`, `apellido`, `cedula`, `correo`, `lenguajes`, `fecha_creacion`) VALUES
(1, 'Hugo Leonardo', 'Gil Mora', '24881905', 'HUGOLEO1995@GMAIL.COM', 'PHP', '2021-09-07'),
(2, 'Hugo Leonardo', 'Gil Mora', '24881905', 'HUGOLEO1995@GMAIL.COM', 'PHP', '2021-09-07'),
(3, 'Hugo Leonardo', 'Gil Mora', '24881905', 'HUGOLEO1995@GMAIL.COM', 'PHP', '2021-09-07'),
(4, 'Hugo Leonardo', 'Gil Mora', '24881905', 'HUGOLEO1995@GMAIL.COM', 'PHP', '2021-09-07'),
(5, 'Hugo Leonardo', 'Gil Mora', '24881905', 'HUGOLEO1995@GMAIL.COM', 'PHP', '2021-09-07'),
(6, 'Hugo Leonardo', 'Gil Mora', '24881905', 'HUGOLEO1995@GMAIL.COM', 'PHP', '2021-09-07'),
(7, 'Hugo Leonardo', 'Gil Mora', '24881905', 'HUGOLEO1995@GMAIL.COM', 'PHP', '2021-09-07'),
(8, 'Hugo Leonardo', 'Gil Mora', '24881905', 'HUGOLEO1995@GMAIL.COM', 'PHP', '2021-09-07'),
(9, 'Hugo Leonardo', 'Gil Mora', '24881905', 'HUGOLEO1995@GMAIL.COM', 'PHP', '2021-09-07'),
(10, 'Hugo Leonardo', 'Gil Mora', '24881905', 'HUGOLEO1995@GMAIL.COM', 'PHP', '2021-09-07'),
(11, 'Hugo Leonardo', 'Gil Mora', '24881905', 'HUGOLEO1995@GMAIL.COM', 'PHP', '2021-09-07'),
(12, 'Hugo Leonardo', 'Gil Mora', '24881905', 'HUGOLEO1995@GMAIL.COM', 'PHP', '2021-09-07'),
(13, 'Hugo Leonardo', 'Gil Mora', '24881905', 'HUGOLEO1995@GMAIL.COM', 'PHP', '2021-09-07'),
(14, '', '', '', '', '', '2021-09-07'),
(15, 'Pedro', 'Perez', '10545545', 'correo@gmail.com', 'PHP', '2021-09-07'),
(16, 'asdas', 'asdasd', '342423', 'asdasdas@gmail.com', 'sadadas', '2021-09-07'),
(17, 'asdas', 'asdasd', '342423', 'asdasdas@gmail.com', 'sadadas', '2021-09-07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `programador`
--
ALTER TABLE `programador`
  ADD PRIMARY KEY (`cod_programador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `programador`
--
ALTER TABLE `programador`
  MODIFY `cod_programador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

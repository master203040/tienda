-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2021 a las 04:17:00
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `edad` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `valor` double NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `foto` varchar(230) NOT NULL,
  `inventario` varchar(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `valor`, `tipo`, `foto`, `inventario`, `descripcion`) VALUES
(28, 'Mueble gris', 15000, 'home', 'https://firebasestorage.googleapis.com/v0/b/fotosempleados-5a29b.appspot.com/o/mueble%20doble.jpg?alt=media&token=7fca3d2b-01a4-4c52-a4b1-144599a59cd4', '4', 'muebles importado '),
(30, 'mueble clasico', 350000, 'home', 'https://firebasestorage.googleapis.com/v0/b/fotosempleados-5a29b.appspot.com/o/mueble1.jpg?alt=media&token=18aa47ec-b4f6-42c7-a5cc-5e88f4073166', '63', ' mueble agotado'),
(31, 'muebles triples ', 550000, 'home', 'https://firebasestorage.googleapis.com/v0/b/fotosempleados-5a29b.appspot.com/o/muebles.jpg?alt=media&token=ae47fde5-c1ae-4581-83bd-697ee9f4b2ce', '100', 'muebles importado'),
(32, 'cocina shprio', 40000, 'home', 'https://firebasestorage.googleapis.com/v0/b/fotosempleados-5a29b.appspot.com/o/cocina1.jpg?alt=media&token=c7f9a305-a5a9-4ac0-8733-7274c47fac30', '150', 'cocina importado'),
(33, 'cocina moderna', 70000, 'home', 'https://firebasestorage.googleapis.com/v0/b/fotosempleados-5a29b.appspot.com/o/cocina2.jpg?alt=media&token=5d5e1ecc-ef2c-4bf8-ba36-a97248c7fbe4', '700', 'cocina nacional'),
(34, 'cocina black', 48000, 'home', 'https://firebasestorage.googleapis.com/v0/b/fotosempleados-5a29b.appspot.com/o/cocina4.jpg?alt=media&token=011f1651-c373-43a3-9628-049e9aa23ec1', '90', 'cocina agotada'),
(35, 'cocina tipo pleaas', 48521, 'home', 'https://firebasestorage.googleapis.com/v0/b/fotosempleados-5a29b.appspot.com/o/cocina3.jpg?alt=media&token=0c1133fb-29ce-4192-a7bc-7e808b914f3c', '300', 'cocina importada'),
(44, 'cocina platinum', 230000, 'hogar y moda ', 'https://firebasestorage.googleapis.com/v0/b/fotosempleados-5a29b.appspot.com/o/cocina1.jpg?alt=media&token=c7f9a305-a5a9-4ac0-8733-7274c47fac30', '15', 'cocina importada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

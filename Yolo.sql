-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-10-2022 a las 07:27:14
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Yolo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobilenumber` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `edad` int(3) NOT NULL,
  `cp` int(6) NOT NULL,
  `numero2` int(15) NOT NULL,
  `calle` varchar(500) NOT NULL,
  `entreCalles` varchar(500) NOT NULL,
  `colonia` varchar(500) NOT NULL,
  `interior` varchar(30) NOT NULL,
  `exterior` varchar(30) NOT NULL,
  `token` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--
-- Error leyendo la estructura de la tabla Yolo.Usuarios: #1932 - Table &#039;Yolo.Usuarios&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla Yolo.Usuarios: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `Yolo`.`Usuarios`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--
-- Error leyendo la estructura de la tabla Yolo.ventas: #1932 - Table &#039;Yolo.ventas&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla Yolo.ventas: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `Yolo`.`ventas`&#039; en la linea 1

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;












-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--
CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `Producto` varchar(200) NOT NULL,
  `Precio` int(10) NOT NULL,
  `Direccion` varchar(250) NOT NULL,
  `CpNumber` int(5) NOT NULL,
  `Referencias` varchar(250) NOT NULL,
  `EstadoPago` varchar(20) NOT NULL,
  `Total` int(10) NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

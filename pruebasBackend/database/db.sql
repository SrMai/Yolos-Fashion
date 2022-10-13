SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Citas`
--

CREATE TABLE `ventas` (
  `id` int(9) NOT NULL,
  `NombreProducto` varchar(500) NOT NULL,
  `NombreRecibeProducto` varchar(350) NOT NULL,
  `Correo` varchar(500) NOT NULL,
  `Telefono` int(15) NOT NULL,
  `TamanoPaquete` varchar(150) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `FechaDeRecepcion` date NOT NULL,
  `HoraDePedido` varchar(100) NOT NULL,
  `Direccion` varchar(350) NOT NULL,
  `MensajeAVendedor` varchar(500) NOT NULL,
  `Precio` int(10) NOT NULL,
  `IDCliente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id` int(9) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `correo` varchar(400) NOT NULL,
  `password` varchar(300) NOT NULL,
  `apellidos` varchar(350) NOT NULL,
  `edad` varchar(10) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `numero2` varchar(15) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `entreCalles` varchar(200) NOT NULL,
  `colonia` varchar(150) NOT NULL,
  `interior` varchar(10) NOT NULL,
  `exterior` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Citas`
--
ALTER TABLE `Citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Citas`
--
ALTER TABLE `Citas`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2022 a las 07:06:53
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wbhostng`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `ID` int(100) NOT NULL,
  `NOMBRE` varchar(255) NOT NULL,
  `PRECIO` int(255) NOT NULL,
  `ESPACIO` varchar(255) NOT NULL,
  `CUENTAS` int(255) NOT NULL,
  `GARANTIA` int(255) NOT NULL,
  `NOMBRE_DOMINIO` varchar(255) NOT NULL,
  `VENCIMIENTO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`ID`, `NOMBRE`, `PRECIO`, `ESPACIO`, `CUENTAS`, `GARANTIA`, `NOMBRE_DOMINIO`, `VENCIMIENTO`) VALUES
(1, 'Starter', 250, '10GB', 100, 1, 'tumundoherramientas.com', '2023-06-13'),
(2, 'Starter', 250, '10GB', 100, 1, 'playgames.com', '2023-06-24'),
(3, 'Basico', 455, '100GB', 350, 2, 'programafacil.com', '2024-05-16'),
(4, 'No Limite', 799, 'Ilimitado', 100000, 4, 'roomsgbaespañol.com', '2026-05-13'),
(5, 'Avanzado', 1039, 'Ilimitado', 1000000, 10, 'losmejoresvideos.mx', '2032-05-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `ID` int(100) NOT NULL,
  `ID_USUARIO` int(100) NOT NULL,
  `ID_OFERTA` int(100) NOT NULL,
  `FECHA_REGISTRO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`ID`, `ID_USUARIO`, `ID_OFERTA`, `FECHA_REGISTRO`) VALUES
(1, 3, 1, '2022-05-13'),
(2, 4, 2, '2022-05-13'),
(3, 3, 3, '2022-05-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

CREATE TABLE `sugerencias` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(255) NOT NULL,
  `CORREO` varchar(255) NOT NULL,
  `SUGERENCIA` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sugerencias`
--

INSERT INTO `sugerencias` (`ID`, `NOMBRE`, `CORREO`, `SUGERENCIA`) VALUES
(1, 'Pepito', 'correo@hotmail.com', 'Me gustaría que existieran planes mas económicos'),
(2, 'Lucely', 'LucelyChida@gmail.com', 'Creo que es algo difícil la configuración'),
(3, 'Cristian', 'cristianguerrero@hotmail.com', 'No me gusta la calidad de red pesima!'),
(4, 'Hiroshi', 'Hiro23@gmail.com', 'Excelente servicio 10/10'),
(5, 'Jose Fernando', 'PF2022@hotmail.com', 'Contrate el plan mas grande es algo caro pero vale la pena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(100) NOT NULL,
  `NOMBRE` varchar(255) NOT NULL,
  `CONTRASEÑA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOMBRE`, `CONTRASEÑA`) VALUES
(3, 'asdf', '1234'),
(4, 'qwer', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_ID_OFERTA` (`ID_OFERTA`),
  ADD KEY `FK_ID_USUARIOS` (`ID_USUARIO`);

--
-- Indices de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `planes`
--
ALTER TABLE `planes`
  ADD CONSTRAINT `FK_ID_OFERTA` FOREIGN KEY (`ID_OFERTA`) REFERENCES `oferta` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ID_USUARIOS` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

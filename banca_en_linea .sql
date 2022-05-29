-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-05-2022 a las 22:20:18
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banca_en_linea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `idCuenta` varchar(12) NOT NULL,
  `fondos` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`idCuenta`, `fondos`) VALUES
('AB06192930-6', '0.00'),
('GJ06237379-4', '0.00'),
('GT06784594-6', '0.00'),
('RC06192930-6', '252');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `idMovimiento` int(12) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `monto` varchar(12) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `idUsuario` varchar(12) NOT NULL,
  `idDestinatario` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`idMovimiento`, `descripcion`, `monto`, `tipo`, `fecha`, `idUsuario`, `idDestinatario`) VALUES
(1, 'retiro cajero', '8.00', 'retiro', '05-29-2022 06:23', 'RC06192930-6', NULL),
(2, 'retiro cajero', '2.00', 'retiro', '05-29-2022 06:37', 'RC06192930-6', NULL),
(3, 'retiro cajero', '2.00', 'retiro', '05-29-2022 05:20', 'RC06192930-6', NULL),
(4, 'retiro cajero', '1.00', 'retiro', '05-29-2022 05:20', 'RC06192930-6', NULL),
(5, 'DEPOSITO DEL BANCO', '150', 'prestamo', '05-29-2022 10:18', 'RC06192930-6', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_usuario` varchar(15) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `numeroDUI` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_usuario`, `usuario`, `pass`, `nombre`, `apellido`, `numeroDUI`) VALUES
('AB06192930-6', 'abonilla', '$2y$10$puCRZwpR1pvcx/Jw0uaO2umbqQv7u/DnopkeP65Keg59hJ4zTvlES', 'ANTONIO', 'BONILLA', '06192930-6'),
('GJ06237379-4', 'gjuarez', '$2y$10$0ZvvrRO.C7llhMGiFvDrNOCeIrKe9u6KWaviajXMJERIQcUZMgFAa', 'GERARDO', 'JUAREZ', '06237379-4'),
('GT06784594-6', 'gtorres', '$2y$10$SB409.r7uKwFn6C92PjtGe75xOb5Rr1CeoBBOoEMoOP.wcFgub5U2', 'GABRIELA', 'TORRES', '06784594-6'),
('RC06192930-6', 'rcerna', '$2y$10$72J7GITVOobNuU/ncoNesORH2XFoLBYeQaifzgBMKSD.fT97ytSSq', 'RICARDO', 'CERNA', '06192930-6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`idCuenta`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`idMovimiento`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `idMovimiento` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

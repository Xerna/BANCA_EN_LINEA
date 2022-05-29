-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-05-2022 a las 04:27:23
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
('RC06192930-6', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `idMovimiento` varchar(12) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `monto` varchar(12) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `idUsuario` varchar(12) NOT NULL,
  `nCuenta` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`idMovimiento`, `descripcion`, `monto`, `tipo`, `fecha`, `idUsuario`, `nCuenta`) VALUES
('1', 'PAGO A CARMEN', '8.00', 'transferencia', '21/05/2022', '1', '3050413710'),
('2', 'PAGO SALARIO', '1000', 'deposito', '15/05/2022', '1', '3050413710'),
('3', 'ABONO PRESTAMO', '9.00', 'abono', '18/05/2021', '1', '3050413710');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

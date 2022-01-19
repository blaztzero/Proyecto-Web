-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2021 a las 01:39:46
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientedb_inacap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--
CREATE DATABASE clientedb_inacap;
USE clientedb_inacap;

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `ap1` varchar(45) DEFAULT NULL,
  `ap2` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `observacion` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `nombre`, `ap1`, `ap2`, `telefono`, `correo`, `direccion`, `observacion`) VALUES
(1, 'jose', 'Herinquez', 'Peres', '58745878456', 'com@hotmail.com', 'Pasaje 4 Estaciones / puente alto RM', 'Cliente empresa'),
(2, 'andres', 'jeres', 'naranjo', '789456415', 'asd@sad.asd', 'calle Vicuña Mackena 2012 La Florida', 'Cliente Empresa'),
(3, 'laura', 'salgado', 'gonzales\r\n', '7894566', 'asd@sad.asd', 'Bicentenario 4587 Santiago', 'Cliente Final'),
(4, 'gregorio', 'aviles', 'guajardo', '1234657', 'asd@sad.asd', 'Carnen Cobarruvias 5687 La Reina', 'Cliente Final'),
(5, 'joaquin', 'vergara', 'gonzales', '5598845', 'dasd@asa', 'calle grande 224', 'Cliente Final'),
(6, 'gabriel', 'toro', 'zamorano', '26558987', 'gabo@sese.clk', 'calle andres peres 2014', 'Cliente Final'),
(7, 'Daniela', 'Araneda', 'Salas', '231324567654', 'dsdgh@sdsff.com', 'Calle Grande 45447 los vilos', 'Cliente Final'),
(8, 'andres', 'Peres', 'gonzales', '1234564987', 'sasd@fgdfgd.com', 'vivo lejos muy lejos ... mas que el hombre ar', 'Cliente Final'),
(9, 'Camilo', 'Henriquez', 'Naranjo', '265898745', 'cam@cam.cl', 'Alameda 945', 'Cliente empresa'),
(10, 'Jorge', 'Jamaikano', 'Gutierres', '25458785', 'casc@tdff.com', 'casas a la loma de lo lejos', 'Cliente empresa'),
(11, 'james', 'rodriguez', 'jara', '67578786', 'fdsfs@fdsf.hfg', 'calle alonso ovalle 1234', 'Cliente Final'),
(12, 'manuel', 'salazar', 'contreras', ' 5698741214', 'msalazar@com.cl', 'Apoquindo 021452 las condes', 'Cliente Final');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(10) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `tipoProducto` varchar(25) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `stock` int(50) NOT NULL,
  `Precio` int(100) NOT NULL,
  `codigoDeBarra` varchar(25) NOT NULL,
  `fechaVenta` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `tipoProducto`, `Descripcion`, `stock`, `Precio`, `codigoDeBarra`, `fechaVenta`) VALUES
(1, 'Cartucho tinta E250', 'Insumos Impresora', 'Cartucho para E220tx', 50, 7890, 'eba1224567', '0000-00-00 00:00:00.000000'),
(2, 'Cartucho tinta E250', 'Insumos Impresora', 'Cartucho para E220tx', 50, 6900, 'eba1224567', '2021-07-13 18:09:19.000000'),
(3, 'Cartucho tinta tx350', 'Insumos Impresora', 'Cartucho para E550tx', 50, 14200, 'eba1224567', '2021-07-13 18:10:19.000000'),
(4, 'Toner negro tx350', 'Insumos Impresora', 'Cartucho para C2154', 50, 5200, 'eba1224568', '2021-07-13 18:10:19.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `ap1` varchar(45) DEFAULT NULL,
  `ap2` varchar(45) DEFAULT NULL,
  `nombreusuario` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombres`, `ap1`, `ap2`, `nombreusuario`, `contrasena`) VALUES
(1, 'Camilo', 'Herinquez', 'Naranjo', 'Chenriquez', '1234'),
(2, 'TIDS05', 'TIDS05', 'TIDS05', 'sistemasInformacion', '131v');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

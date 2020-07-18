-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2020 a las 01:52:44
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bdcarros`
--

CREATE TABLE `bdcarros` (
  `id` int(10) UNSIGNED NOT NULL,
  `marca` varchar(13) NOT NULL,
  `nombre` varchar(16) NOT NULL,
  `categoria` varchar(9) NOT NULL,
  `modelo` int(4) NOT NULL,
  `motor` varchar(18) NOT NULL,
  `potencia` int(3) NOT NULL,
  `torque` int(3) NOT NULL,
  `transmision` varchar(10) NOT NULL,
  `precio` varchar(11) NOT NULL,
  `cilindraje` varchar(3) NOT NULL,
  `vendido` varchar(2) NOT NULL,
  `consumo` varchar(4) NOT NULL,
  `foto` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bdcarros`
--

INSERT INTO `bdcarros` (`id`, `marca`, `nombre`, `categoria`, `modelo`, `motor`, `potencia`, `torque`, `transmision`, `precio`, `cilindraje`, `vendido`, `consumo`, `foto`) VALUES
(1, 'audi', 'a5', 'sedan', 2018, 'TFSI', 190, 272, 'automatica', '115.000.000', '2.0', 'no', '9.8', 'a5.jpg'),
(2, 'kia', 'cerato forte', 'sedan', 2019, 'Atkinson', 147, 179, 'automatica', '62.000.000', '2.0', 'no', '12.2', 'ceratof.jpg'),
(3, 'mercedes benz', 'clase a', 'sedan', 2019, '4 cilindros', 163, 250, 'automatica', '115.000.000', '1.3', 'no', '10.1', 'clasea.jpg'),
(4, 'toyota', 'corolla hybrid', 'sedan', 2020, 'Atkinson', 121, 143, 'automatica', '70.000.000', '1.8', 'si', '19.2', 'corolla.jpg'),
(5, 'hyundai', 'elantra', 'sedan', 2021, 'Atkinson', 147, 179, 'automatica', '92.000.000', '2.0', 'no', '13.5', 'elantra.jpg'),
(6, 'ford', 'fusion', 'sedan', 2017, '4 cilindros', 141, 270, 'automatica', '65.000.000', '2.0', 'no', '12.2', 'fusion.jpg'),
(7, 'volkswagen', 'jetta', 'sedan', 2019, 'TSI', 230, 258, 'automatica', '86.000.000', '2.0', 'si', '9.7', 'jetta.jpg'),
(8, 'mazda', '3 new', 'sedan', 2019, '4 cilindros', 186, 253, 'automatica', '69.000.000', '2.5', 'si', '10.2', 'mazda3.jpg'),
(9, 'renault', 'megane', 'sedan', 2020, '4 cilindros', 158, 262, 'automatica', '70.000.000', '1.6', 'no', '18.3', 'megane.jpg'),
(10, 'chevrolet', 'onix', 'sedan', 2020, '3 cilindros', 130, 166, 'automatica', '50.000.000', '1.2', 'no', '12.5', 'onix.jpg'),
(11, 'bmw', 'serie 3', 'sedan', 2020, '4 cilindros', 258, 374, 'automatica', '115.000.000', '2.0', 'no', '7.3', 'serie3.jpg'),
(12, 'nissan', 'versa', 'sedan', 2020, '4 cilindros', 118, 150, 'automatica', '54.000.000', '1.6', 'si', '12.9', 'versa.jpg'),
(13, 'mazda', 'cx3', 'suv', 2018, 'skyactive', 148, 183, 'automatica', '59.000.000', '2.0', 'si', '12.1', 'cx3.jpg'),
(14, 'renault', 'duster', 'suv', 2019, '4 cilindros', 140, 173, 'manual', '54.000.000', '2.0', 'si', '9.0', 'duster.jpg'),
(15, 'ford', 'ecosport', 'suv', 2019, '4 cilindros', 164, 250, 'automatica', '59.000.000', '2.0', 'no', '10.2', 'ecosport.jpg'),
(16, 'mercedes benz', 'gla', 'suv', 2018, 'turbo doch', 154, 210, 'automatica', '137.000.000', '1.6', 'no', '8.7', 'gla.jpg'),
(17, 'nissan', 'kicks', 'suv', 2019, '4 cilindros', 118, 150, 'manual', '59.000.000', '1.6', 'no', '12.1', 'kicks.jpg'),
(18, 'renault', 'kwid', 'suv', 2019, '3 cilindros', 66, 94, 'manual', '31.000.000', '1.0', 'si', '15.0', 'kwid.jpg'),
(19, 'audi', 'q5', 'suv', 2019, '4 cilindros', 252, 368, 'automatica', '150.000.000', '2.0', 'no', '8.5', 'q5.jpg'),
(20, 'renault', 'sandero stepway', 'suv', 2020, '4 cilindros', 113, 155, 'automatica', '47.000.000', '1.6', 'si', '11.5', 'sanderostepway.jpg'),
(21, 'kia', 'sportage', 'suv', 2020, '4 cilindros', 181, 237, 'automatica', '84.000.000', '2.4', 'no', '7.8', 'sportage.jpg'),
(22, 'chevrolet', 'tracker', 'suv', 2018, '4 cilindros', 140, 175, 'automatica', '60.000.000', '1.8', 'no', '12.1', 'tracker.jpg'),
(23, 'hyundai', 'tucson', 'suv', 2019, '4 cilindros', 155, 196, 'automatica', '88.000.000', '2.0', 'si', '10.1', 'tucson.jpg'),
(24, 'bmw', 'x3', 'suv', 2019, '6 cilindros', 360, 500, 'automatica', '160.000.000', '3.0', 'no', '8.5', 'x3.jpg'),
(25, 'volvo', 'xc60', 'suv', 2019, '4 cilindros', 250, 400, 'automatica', '147.000.000', '2.0', 'no', '7.6', 'xc60.jpg'),
(26, 'volkswagen', 'amarok', 'pickup', 2019, 'V6 TDI', 224, 500, 'automatica', '128.000.000', '3.0', 'no', '9.0', 'amarok.jpg'),
(27, 'chevrolet', 'dmax', 'pickup', 2019, 'turbo diesel', 130, 320, 'manual', '120.000.000', '2.5', 'si', '7.3', 'dmax.jpg'),
(28, 'nissan', 'frontier', 'pickup', 2017, '4 cilindros', 158, 233, 'manual', '57.000.000', '2.5', 'no', '9.7', 'frontier.jpg'),
(29, 'jeep', 'gladiator', 'pickup', 2020, 'V6', 285, 352, 'automatica', '160.000.000', '3.6', 'no', '5.1', 'gladiator.jpg'),
(30, 'toyota', 'hilux', 'pickup', 2019, '4 cilindros diesel', 174, 450, 'automatica', '93.000.000', '2.8', 'si', '10.0', 'hilux.jpg'),
(31, 'dodge', 'ram 1500 limited', 'pickup', 2019, 'V8 HEMI', 395, 556, 'automatica', '175.000.000', '5.7', 'no', '4.2', 'ram.jpg'),
(32, 'ford', 'ranger', 'pickup', 2020, '5 cilindros diesel', 197, 470, 'automatica', '140.000.000', '3.2', 'no', '8.4', 'ranger.jpg'),
(33, 'ford', 'raptor', 'pickup', 2020, 'V6 GTDI', 450, 670, 'automatica', '195.000.000', '3.5', 'si', '7.3', 'raptor.jpg'),
(34, 'chevrolet', 'silverado', 'pickup', 2020, 'V8', 420, 624, 'automatica', '165.000.000', '6.2', 'no', '5.6', 'silverado.jpg'),
(35, 'toyota', 'tacoma', 'pickup', 2020, 'V6', 278, 360, 'automatica', '115.000.000', '3.5', 'no', '8.7', 'tacoma.jpg'),
(36, 'chevrolet', 'captiva', 'camioneta', 2020, 'V6', 145, 250, 'automatica', '90.000.000', '1.5', 'si', '8.2', 'captiva.jpg'),
(37, 'mazda', 'cx5', 'camioneta', 2018, '4 cilindros', 188, 250, 'automatica', '75.000.000', '2.5', 'si', '9.8', 'cx5.jpg'),
(38, 'ford', 'edge', 'camioneta', 2020, '4 cilindros', 250, 380, 'automatica', '145.000.000', '2.0', 'no', '10.1', 'edge.jpg'),
(39, 'toyota', 'fj cruiser', 'camioneta', 2018, '6 cilindros', 171, 310, 'automatica', '164.000.000', '4.0', 'no', '7.4', 'fjcruiser.jpg'),
(40, 'toyota', 'fortuner', 'camioneta', 2020, '4 cilindros', 204, 500, 'automatica', '137.000.000', '2.8', 'no', '9.3', 'fortuner.jpg'),
(41, 'jeep', 'grand cherokee', 'camioneta', 2020, 'V6', 295, 352, 'automatica', '180.000.000', '3.6', 'no', '8.1', 'grandcherokee.jpg'),
(42, 'toyota', 'prado txl', 'camioneta', 2020, 'V6', 271, 340, 'automatica', '220.000.000', '4.0', 'si', '5.6', 'pradotxl.jpg'),
(43, 'audi', 'q7', 'camioneta', 2018, 'V6', 333, 440, 'automatica', '170.000.000', '3.0', 'no', '8.2', 'q7.jpg'),
(44, 'jeep', 'wrangler rubicon', 'camioneta', 2019, 'V6', 285, 353, 'automatica', '140.000.000', '3.6', 'no', '6.8', 'wranglerrubicon.jpg'),
(45, 'bmw', 'x7', 'camioneta', 2020, '6 cilindros', 340, 450, 'automatica', '375.000.000', '3.0', 'no', '6.0', 'x7.jpg'),
(46, 'mercedes benz', 'amg', 'deportivo', 2019, '6 cilindros', 639, 900, 'automatica', '250.000.000', '3.0', 'no', '4.5', 'amg.jpg'),
(47, 'chevrolet', 'camaro', 'deportivo', 2018, '8 cilindros', 455, 617, 'automatica', '120.000.000', '6.2', 'si', '4.5', 'camaro.jpg'),
(48, 'dodge', 'challenger', 'deportivo', 2018, 'V8 HEMI', 485, 644, 'manual', '175.000.000', '6.4', 'no', '3.5', 'challenger.jpg'),
(49, 'honda', 'civic type r', 'deportivo', 2018, '4 cilindros', 306, 400, 'manual', '117.000.000', '2.0', 'no', '8.8', 'civictyper.jpg'),
(50, 'jaguar', 'f type', 'deportivo', 2019, '4 cilindros', 300, 407, 'automatica', '310.000.000', '2.0', 'no', '8.5', 'ftype.jpg'),
(51, 'bmw', 'm4 competition', 'deportivo', 2019, '6 cilindros', 450, 610, 'automatica', '340.000.000', '3.0', 'no', '6.3', 'm4.jpg'),
(52, 'ford', 'mustang', 'deportivo', 2018, 'V8', 526, 582, 'manual', '185.000.000', '5.2', 'si', '5.0', 'mustang.jpg'),
(53, 'porsche', 'panamera', 'deportivo', 2018, 'V8', 550, 769, 'automatica', '510.000.000', '4.0', 'no', '8.5', 'panamera.jpg'),
(54, 'toyota', 'supra', 'deportivo', 2020, '6 cilindros', 335, 495, 'automatica', '185.000.000', '3.0', 'si', '7.9', 'supra.jpg'),
(55, 'audi', 'tt', 'deportivo', 2018, '5 cilindros', 400, 480, 'automatica', '205.000.000', '2.5', 'si', '6.8', 'tt.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bdcarros`
--
ALTER TABLE `bdcarros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bdcarros`
--
ALTER TABLE `bdcarros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

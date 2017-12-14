-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-12-2017 a las 10:39:36
-- Versión del servidor: 5.6.34-log
-- Versión de PHP: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemasolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planetas`
--

CREATE TABLE `planetas` (
  `id` int(11) NOT NULL,
  `nombrePlaneta` tinytext NOT NULL,
  `imagen` tinytext,
  `simbolo` tinytext,
  `inclinacionOrbital` double NOT NULL,
  `inclinacionAxial` double NOT NULL,
  `periodoOrbitalSideral` double NOT NULL,
  `periodoOrbitalSidonico` double DEFAULT NULL,
  `velocidadOrbital` double NOT NULL,
  `distanciaSol` double NOT NULL,
  `afelio` double NOT NULL,
  `perihelio` double NOT NULL,
  `diametro` double NOT NULL,
  `circunferencia` double NOT NULL,
  `superficieKm` double NOT NULL,
  `relacionSuperficieTierra` double NOT NULL,
  `volumen` tinytext NOT NULL,
  `masa` tinytext NOT NULL,
  `satelitesNaturales` double NOT NULL,
  `velocidadEscape` double NOT NULL,
  `albedo` double NOT NULL,
  `dias` double NOT NULL,
  `años` double NOT NULL,
  `proxCumpleaños` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `planetas`
--

INSERT INTO `planetas` (`id`, `nombrePlaneta`, `imagen`, `simbolo`, `inclinacionOrbital`, `inclinacionAxial`, `periodoOrbitalSideral`, `periodoOrbitalSidonico`, `velocidadOrbital`, `distanciaSol`, `afelio`, `perihelio`, `diametro`, `circunferencia`, `superficieKm`, `relacionSuperficieTierra`, `volumen`, `masa`, `satelitesNaturales`, `velocidadEscape`, `albedo`, `dias`, `años`, `proxCumpleaños`, `created_at`, `updated_at`) VALUES
(1, 'Mercurio', 'http://www.todoelsistemasolar.com.ar/imagenes/mercurio.jpg', 'http://www.sistemasolar.us/imagenes/mercurio-simb.gif', 7.00487, 0.1, 88, 115.88, 115.88, 57909175, 0.466697, 0.307499, 4879.4, 15328, 75, 0.1471, '6,083x10^10', '3,302x10^23', 0, 4.25, 0.068, 0, 0, '0000-00-00 00:00:00', '2017-11-04 18:38:27', '0000-00-00 00:00:00'),
(2, 'Venus', 'http://www.todoelsistemasolar.com.ar/imagenes/venus-real.jpg', 'http://www.sistemasolar.us/imagenes/venus-simb.gif', 3.39471, 177, 223.54, 583.92, 35.0214, 108208930, 0.728213, 0.71844, 12103.6, 38024.58, 460, 0.901, '9,28x10^11', '4,8690x10^24', 0, 10.36, 0.67, 0, 0, '0000-00-00 00:00:00', '2017-11-08 16:02:53', '0000-00-00 00:00:00'),
(3, 'Tierra', 'http://www.todoelsistemasolar.com.ar/imagenes/planetatierra.jpg', 'http://www.sistemasolar.us/imagenes/la-tierra-simb.gif', 0.00005, 23, 365, 0, 29.7859, 149597870, 1.01671388, 0.98329134, 12756, 40074, 510, 1, '1,083x10^12', '5,9742x10^24', 1, 11.18, 0.367, 0, 0, '0000-00-00 00:00:00', '2017-11-08 16:34:49', '0000-00-00 00:00:00'),
(5, 'Marte', 'http://www.todoelsistemasolar.com.ar/imagenes/marte.jpg', 'http://www.sistemasolar.us/imagenes/marte-simb.gif', 1.85061, 25, 686.51, 779.96, 24.1309, 227936640, 1.665861, 1.381497, 6794.4, 21345, 140, 0.2745, '1,6318x10^11', '6,4191x10^23', 2, 5.02, 0.17, 0, 0, '0000-00-00 00:00:00', '2017-11-08 17:20:31', '0000-00-00 00:00:00'),
(6, 'Júpiter', 'http://www.todoelsistemasolar.com.ar/imagenes/jupiter.jpg', 'http://www.sistemasolar.us/imagenes/jupiter-simb.gif', 1.3053, 3, 4329, 398.9, 13.0697, 778412010, 5.458104, 4.950429, 142985, 449197, 64000, 125.5, '1,431x10^15', '1,8987x10^27', 64, 59.54, 0.52, 0, 0, '0000-00-00 00:00:00', '2017-11-08 17:26:35', '2017-11-29 10:39:19'),
(7, 'Saturno', 'http://www.todoelsistemasolar.com.ar/imagenes/saturno.jpg', 'http://www.sistemasolar.us/imagenes/saturno-simb.gif', 2.48446, 27, 10748, 378.1, 9.6724, 1426725400, 10.115958, 9.0480763, 120534, 378670, 43800, 86.27, '8,27x10^14', '5,6851x10^26', 62, 35.49, 0.47, 0, 0, '0000-00-00 00:00:00', '2017-11-08 17:29:27', '0000-00-00 00:00:00'),
(8, 'Urano', 'http://www.todoelsistemasolar.com.ar/imagenes/urano2.jpg', 'http://www.sistemasolar.us/imagenes/urano-simb.gif', 0.76986, 98, 84, 369.66, 6.8352, 287097220, 20.083305, 18.375518, 51114, 160579, 8130, 15.88, '6,834x10^13', '8,6849x10^25', 27, 21.29, 0.51, 0, 0, '0000-00-00 00:00:00', '2017-11-08 17:31:42', '0000-00-00 00:00:00'),
(20, 'Neptuno', 'http://www.todoelsistemasolar.com.ar/imagenes/neptuno.jpg', 'http://www.sistemasolar.us/imagenes/neptuno-simb.gif', 1.76917, 30, 164.79, 367.5, 5.4778, 4498252900, 30.441252, 29.76607, 49532.72, 155.612, 7700, 15.1, '6,254x10^13', '1,0244x10^26', 13, 85356, 0.41, 0, 0, '0000-00-00 00:00:00', '2017-12-12 15:20:07', '2017-12-12 15:20:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `email` text NOT NULL,
  `fechaNac` datetime NOT NULL,
  `contraseña` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `email`, `fechaNac`, `contraseña`, `created_at`, `updated_at`) VALUES
(1, 'Marco Antonio Borja Romero', 'marcoabr93@gmail.com', '1993-05-26 00:00:00', '$2y$10$/xWOz7Nw/zKN3CZwweflyuisPCMvzlGqgFmbGgYFZ33zzF90u0w.y', '2017-12-05 10:40:09', '2017-12-05 10:40:09'),
(2, 'Marco', 'marco@gmail.com', '1993-05-26 00:00:00', '$2y$10$0rDMfSWQxD5BvTqAc2rS9.7G7u8.RJqxivHv76/MKM98wLx.j6sEa', '2017-12-05 10:41:23', '2017-12-05 10:41:23'),
(3, 'Homer', 'homer@gmail.com', '2555-05-05 00:00:00', '$2y$10$PToYXkihTb3LDaX.2ufeKuaDcAFD6H6P4333DF5NV7D3y59U8PxpC', '2017-12-06 11:50:36', '2017-12-06 11:50:36'),
(4, 'Pepe', 'pepe@pepe.pepe', '1995-06-06 00:00:00', '$2y$10$4a3sNMkjH38SoyZXKbktdeZ56G7qIbboDIVyPUsmPNIlzK25/L/4C', '2017-12-09 18:57:33', '2017-12-09 18:57:33');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `planetas`
--
ALTER TABLE `planetas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `planetas`
--
ALTER TABLE `planetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3305
-- Tiempo de generación: 10-07-2023 a las 03:08:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital32`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativo`
--

CREATE TABLE `administrativo` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `id_hospital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrativo`
--

INSERT INTO `administrativo` (`id`, `nombre`, `apellido`, `id_hospital`) VALUES
(2, 'Fabricio', 'Mandujano', 18),
(3, 'Fabricio', 'Mandujano', 18),
(4, 'Fabricio', 'Mandujano', 18),
(5, 'Fabricio', 'Mandujano', 18),
(6, 'Fabricio', 'Mandujano', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autopsia`
--

CREATE TABLE `autopsia` (
  `id` int(100) NOT NULL,
  `mdc_encargado` varchar(100) NOT NULL,
  `dni_fallecido` int(100) NOT NULL,
  `diagnostico` varchar(100) NOT NULL,
  `id_morge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autopsia`
--

INSERT INTO `autopsia` (`id`, `mdc_encargado`, `dni_fallecido`, `diagnostico`, `id_morge`) VALUES
(3, 'Francisco López', 72529862, 'Cáncer', 2),
(4, 'Francisco López', 72529862, 'Cáncer', 2),
(5, 'Francisco López', 72529862, 'Cáncer', 2),
(6, 'Francisco López', 72529862, 'Cáncer', 2),
(7, 'Francisco López', 72529862, 'Cáncer', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id` int(100) NOT NULL,
  `phone` int(9) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_administrativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id`, `phone`, `fecha`, `hora`, `id_administrativo`) VALUES
(2, 987654321, '2023-07-19', '21:26:00', 2),
(3, 987654321, '2023-07-19', '21:26:00', 2),
(4, 987654321, '2023-07-19', '21:26:00', 2),
(5, 987654321, '2023-07-19', '21:26:00', 2),
(6, 987654321, '2023-07-19', '21:26:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `id` int(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `id_medico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `diagnostico`
--

INSERT INTO `diagnostico` (`id`, `tipo`, `id_medico`) VALUES
(2, 'Cáncer de mama', 3),
(3, 'Cáncer de mama', 3),
(4, 'Cáncer de mama', 3),
(5, 'Cáncer de mama', 3),
(6, 'Cáncer de mama', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emergencia`
--

CREATE TABLE `emergencia` (
  `id` int(100) NOT NULL,
  `encargado` varchar(100) NOT NULL,
  `turno` varchar(100) NOT NULL,
  `recepcionista` varchar(100) NOT NULL,
  `id_hospital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `emergencia`
--

INSERT INTO `emergencia` (`id`, `encargado`, `turno`, `recepcionista`, `id_hospital`) VALUES
(2, 'Alonso Pérez', 'matutino', 'Gladys Cardenas', 18),
(3, 'Alonso Pérez', 'matutino', 'Gladys Cardenas', 18),
(4, 'Alonso Pérez', 'matutino', 'Gladys Cardenas', 18),
(5, 'Alonso Pérez', 'matutino', 'Gladys Cardenas', 18),
(6, 'Alonso Pérez', 'matutino', 'Gladys Cardenas', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermero`
--

CREATE TABLE `enfermero` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `phone` int(9) NOT NULL,
  `id_medico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `enfermero`
--

INSERT INTO `enfermero` (`id`, `nombre`, `apellido`, `phone`, `id_medico`) VALUES
(2, 'Fabricio', 'Mandujano', 123456789, 4),
(3, 'Pepe', 'Algo', 123456789, 2),
(4, 'Pepe', 'Messa', 123456789, 3),
(5, 'Pepe', 'Alacantarón', 933829200, 5),
(6, 'a', 'Yupanqui', 987654321, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_medico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id`, `nombre`, `id_medico`) VALUES
(2, 'Pediatra', 4),
(3, 'Pediatra', 4),
(4, 'Pediatra', 4),
(5, 'Pediatra', 4),
(6, 'Pediatra', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacia`
--

CREATE TABLE `farmacia` (
  `id` int(100) NOT NULL,
  `phone` varchar(9) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `id_hospital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `farmacia`
--

INSERT INTO `farmacia` (`id`, `phone`, `nombre`, `adress`, `id_hospital`) VALUES
(15, '123456789', 'Fabricio', 'Av. Jerusalén', 17),
(16, '987654321', 'fabricio', 'Av. Amparo', 18),
(17, '933829200', 'Carlos', 'Av. Gobierno', 18),
(18, '111111111', 'Honorio', 'Av. Judas', 19),
(19, '123789456', 'Hernando', 'Av. Avelino', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_clinica`
--

CREATE TABLE `historia_clinica` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historia_clinica`
--

INSERT INTO `historia_clinica` (`id`, `nombre`, `apellido`, `adress`, `id_paciente`) VALUES
(2, 'Fabricio', 'Messa', 'Av. Esperanza', 3),
(3, 'Fabricio', 'Messa', 'Av. Esperanza', 3),
(4, 'Fabricio', 'Messa', 'Av. Esperanza', 3),
(5, 'Fabricio', 'Messa', 'Av. Esperanza', 3),
(6, 'Fabricio', 'Messa', 'Av. Esperanza', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospital`
--

CREATE TABLE `hospital` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hospital`
--

INSERT INTO `hospital` (`id`, `nombre`, `adress`) VALUES
(12, 'Curitas', 'Av. Socabaya'),
(17, 'Curotas', 'Av. Peninsula'),
(18, 'Javier Prado', 'Av. Palmeras'),
(19, 'Paulinas', 'Av. Americas'),
(20, 'Cristobal', 'Av. Colón');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `id` int(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `phone` int(9) NOT NULL,
  `id_hospital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`id`, `adress`, `nombre`, `phone`, `id_hospital`) VALUES
(3, 'Av. Esperanza', 'Thiago', 933829200, 20),
(4, 'Av. Esperanza', 'Thiago', 933829200, 20),
(5, 'Av. Esperanza', 'Thiago', 933829200, 20),
(6, 'Av. Esperanza', 'Thiago', 933829200, 20),
(7, 'Av. Esperanza', 'Thiago', 933829200, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `limpieza`
--

CREATE TABLE `limpieza` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `id_hospital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `limpieza`
--

INSERT INTO `limpieza` (`id`, `nombre`, `apellido`, `id_hospital`) VALUES
(2, 'Pepe', 'Yupanqui', 18),
(3, 'Pepe', 'Yupanqui', 18),
(4, 'Pepe', 'Yupanqui', 18),
(5, 'Pepe', 'Yupanqui', 18),
(6, 'Pepe', 'Yupanqui', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `receta` varchar(100) NOT NULL,
  `id_farmacia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`id`, `cantidad`, `receta`, `id_farmacia`) VALUES
(4, 12, 'Redoxon', 15),
(5, 45, 'Pastillas para la gripe no sé', 16),
(6, 2, 'tabletas nastiflu', 15),
(7, 23, 'paracetamol', 19),
(8, 1, 'inyectable', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id` int(100) NOT NULL,
  `cedula` int(7) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `id_hospital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id`, `cedula`, `nombre`, `apellido`, `id_hospital`) VALUES
(2, 1234567, 'Thiago', 'Messa', 17),
(3, 7654321, 'Fabricio', 'Messa', 20),
(4, 2134576, 'Bryan', 'Suca', 17),
(5, 1234567, 'Samir', 'Carrera', 20),
(6, 7654321, 'Royer', 'Carcausto', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `morge`
--

CREATE TABLE `morge` (
  `id` int(100) NOT NULL,
  `capacidad` int(100) NOT NULL,
  `fallecido` varchar(100) NOT NULL,
  `id_hospital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `morge`
--

INSERT INTO `morge` (`id`, `capacidad`, `fallecido`, `id_hospital`) VALUES
(2, 12, 'Monica Perez', 17),
(3, 12, 'Monica Perez', 17),
(4, 12, 'Monica Perez', 17),
(5, 12, 'Monica Perez', 17),
(6, 12, 'Monica Perez', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `phone` int(9) NOT NULL,
  `id_medico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `nombre`, `apellido`, `phone`, `id_medico`) VALUES
(2, 'Yolanda', 'Cornejo', 123456789, 3),
(3, 'Alan', 'Turing', 214345679, 4),
(4, 'Jorge', 'Luna', 987654321, 5),
(5, 'Ricardo', 'Mendoza', 123456789, 4),
(6, 'Brad', 'Pid', 345216789, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `num_camas` int(100) NOT NULL,
  `id_hospital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`id`, `nombre`, `num_camas`, `id_hospital`) VALUES
(2, 'Fabricio', 3, 17),
(3, 'Fabricio', 3, 17),
(4, 'Fabricio', 3, 17),
(5, 'Fabricio', 3, 17),
(6, 'Fabricio', 3, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridad`
--

CREATE TABLE `seguridad` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `id_hospital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `seguridad`
--

INSERT INTO `seguridad` (`id`, `nombre`, `apellido`, `id_hospital`) VALUES
(4, 'Fabricio', 'Messa', 20),
(5, 'Fabricio', 'Messa', 20),
(6, 'Fabricio', 'Messa', 20),
(7, 'Fabricio', 'Messa', 20),
(8, 'Fabricio', 'Messa', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uci`
--

CREATE TABLE `uci` (
  `id` int(100) NOT NULL,
  `personal` int(100) NOT NULL,
  `equipo_mdc` varchar(100) NOT NULL,
  `id_hospital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `uci`
--

INSERT INTO `uci` (`id`, `personal`, `equipo_mdc`, `id_hospital`) VALUES
(2, 12, 'Alambres', 20),
(3, 12, 'Alambres', 20),
(4, 12, 'Alambres', 20),
(5, 12, 'Alambres', 20),
(6, 12, 'Alambres', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` int(100) NOT NULL,
  `uso` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `placa` varchar(100) NOT NULL,
  `id_seguridad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `uso`, `modelo`, `placa`, `id_seguridad`) VALUES
(5, 'emergencia', 'kia picando', 'ASD-GFD', 4),
(7, 'Emergencia', 'Kia Piccanto', 'ASD-FGH', 4),
(8, 'Transporte', 'Mini ban', 'WER-PLK', 5),
(9, 'Transporte', 'Mini ban', 'WER-PLK', 5),
(10, 'Transporte', 'Mini ban', 'WER-PLK', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `administrativo_ibfk_1` (`id_hospital`);

--
-- Indices de la tabla `autopsia`
--
ALTER TABLE `autopsia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autopsia_ibfk_1` (`id_morge`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cita_ibfk_1` (`id_administrativo`);

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagnostico_ibfk_1` (`id_medico`);

--
-- Indices de la tabla `emergencia`
--
ALTER TABLE `emergencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emergencia_ibfk_1` (`id_hospital`);

--
-- Indices de la tabla `enfermero`
--
ALTER TABLE `enfermero`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enfermero_ibfk_1` (`id_medico`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `especialidad_ibfk_1` (`id_medico`);

--
-- Indices de la tabla `farmacia`
--
ALTER TABLE `farmacia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `farmacia_ibfk_1` (`id_hospital`);

--
-- Indices de la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historiaclinica_ibfk_1` (`id_paciente`);

--
-- Indices de la tabla `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laboratorio_ibfk_1` (`id_hospital`);

--
-- Indices de la tabla `limpieza`
--
ALTER TABLE `limpieza`
  ADD PRIMARY KEY (`id`),
  ADD KEY `limpieza_ibfk_1` (`id_hospital`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicamentos_ibfk_1` (`id_farmacia`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medico_ibfk_1` (`id_hospital`);

--
-- Indices de la tabla `morge`
--
ALTER TABLE `morge`
  ADD PRIMARY KEY (`id`),
  ADD KEY `morge_ibfk_1` (`id_hospital`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paciente_ibfk_1` (`id_medico`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sala_ibfk_1` (`id_hospital`);

--
-- Indices de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seguridad_ibfk_1` (`id_hospital`);

--
-- Indices de la tabla `uci`
--
ALTER TABLE `uci`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uci_ibfk_1` (`id_hospital`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehiculo_ibfk_1` (`id_seguridad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrativo`
--
ALTER TABLE `administrativo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `autopsia`
--
ALTER TABLE `autopsia`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `emergencia`
--
ALTER TABLE `emergencia`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `enfermero`
--
ALTER TABLE `enfermero`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `farmacia`
--
ALTER TABLE `farmacia`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `limpieza`
--
ALTER TABLE `limpieza`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `morge`
--
ALTER TABLE `morge`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `uci`
--
ALTER TABLE `uci`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrativo`
--
ALTER TABLE `administrativo`
  ADD CONSTRAINT `administrativo_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `hospital` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `autopsia`
--
ALTER TABLE `autopsia`
  ADD CONSTRAINT `autopsia_ibfk_1` FOREIGN KEY (`id_morge`) REFERENCES `morge` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`id_administrativo`) REFERENCES `administrativo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD CONSTRAINT `diagnostico_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `emergencia`
--
ALTER TABLE `emergencia`
  ADD CONSTRAINT `emergencia_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `hospital` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `enfermero`
--
ALTER TABLE `enfermero`
  ADD CONSTRAINT `enfermero_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD CONSTRAINT `especialidad_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `farmacia`
--
ALTER TABLE `farmacia`
  ADD CONSTRAINT `farmacia_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `hospital` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  ADD CONSTRAINT `historiaclinica_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD CONSTRAINT `laboratorio_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `hospital` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `limpieza`
--
ALTER TABLE `limpieza`
  ADD CONSTRAINT `limpieza_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `hospital` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD CONSTRAINT `medicamentos_ibfk_1` FOREIGN KEY (`id_farmacia`) REFERENCES `farmacia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `hospital` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `morge`
--
ALTER TABLE `morge`
  ADD CONSTRAINT `morge_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `hospital` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `sala_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `hospital` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seguridad`
--
ALTER TABLE `seguridad`
  ADD CONSTRAINT `seguridad_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `hospital` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `uci`
--
ALTER TABLE `uci`
  ADD CONSTRAINT `uci_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `hospital` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`id_seguridad`) REFERENCES `seguridad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

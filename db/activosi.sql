-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-01-2018 a las 16:36:46
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `activosi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permisos` int(11) NOT NULL,
  `tipo_acceso` varchar(50) NOT NULL,
  `tipo_solicitud` varchar(50) NOT NULL,
  `desc_sistema` varchar(60) NOT NULL,
  `desc_labor` varchar(250) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `fecha_vigencia` date NOT NULL,
  `fecha_atencion` date NOT NULL,
  `j_autoriza` varchar(100) NOT NULL,
  `asesor_tics` varchar(100) NOT NULL,
  `admin_red` varchar(100) NOT NULL,
  `id_persona_per` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permisos`, `tipo_acceso`, `tipo_solicitud`, `desc_sistema`, `desc_labor`, `fecha_solicitud`, `fecha_vigencia`, `fecha_atencion`, `j_autoriza`, `asesor_tics`, `admin_red`, `id_persona_per`) VALUES
(1, 'Red Correo Internet Sistema Informacion', 'Creacion', 'sistema de informacion atencion al ciudadano', 'labores de appoyo', '2018-01-17', '2018-12-31', '0000-00-00', 'jose andres ardila', 'Sergio oswaldo cajias', 'bernardo espitia', '13719140'),
(2, 'Red Correo ', 'Creacion', 'SISTEMA GENERAL DE HACIENDA', 'labores', '2018-01-17', '2018-01-31', '0000-00-00', 'jose andres ardila', 'Sergio oswaldo cajias', 'bernardo espitia', '13719140'),
(3, 'Red Internet ', 'Creacion', 'SISTEMA GENERAL DE HACIENDA', 'sasaasas', '2018-01-17', '2018-01-17', '0000-00-00', 'jose andres ardila', 'Sergio oswaldo cajias', 'fdfdfd', '13719140'),
(4, 'Red ', 'Creacion', 'sistema de informacion atencion al ciudadano', 'asas', '2018-01-18', '2018-01-18', '0000-00-00', 'jose andres ardila', 'Sergio oswaldo cajias', 'BERNARDO ESPITIA', '13719140'),
(5, 'Correo Internet ', 'Modificacion', 'Sistema PARA HACIENDA', 'ASASA', '2018-01-18', '2018-01-18', '0000-00-00', 'ASSA', 'SAAS', 'SASASAS', '1142915558'),
(6, 'Correo Internet ', 'Modificacion', 'SISTEMA GENERAL DE HACIENDA', 'oooo', '2018-01-18', '2018-01-31', '0000-00-00', 'SASASAS', 'SASASAS', 'bernardo espitia', '13719140'),
(7, 'Correo Internet Sistema Informacion', 'Modificacion', 'sistema de informacion atencion al ciudadano', 'wewewwewee', '2018-01-19', '2018-01-31', '0000-00-00', 'jose andres ardila', 'Sergio oswaldo cajias', 'BERNARDO ESPITIA', '13719140'),
(8, 'Red Correo ', 'Modificacion', 'sistema de informacion atencion al ciudadano', 'csssdsdsd', '2018-01-19', '2018-01-19', '0000-00-00', 'jose andres ardila', 'Sergio oswaldo cajias', 'bernardo Espitia', '13719140');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_personas` int(11) NOT NULL,
  `tipo_usuario` varchar(26) NOT NULL,
  `nombres_personas` varchar(30) NOT NULL,
  `apellidos_personas` varchar(30) NOT NULL,
  `dependencia` varchar(26) NOT NULL,
  `doc_persona` varchar(16) NOT NULL,
  `cargo_persona` varchar(26) NOT NULL,
  `telefono_persona` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_personas`, `tipo_usuario`, `nombres_personas`, `apellidos_personas`, `dependencia`, `doc_persona`, `cargo_persona`, `telefono_persona`) VALUES
(1, 'Funcionario', 'JAVIER', 'GALVAN MANCERA', 'Oficina Sistemas', '13719140', 'APRENDIZ SENA', '3004467366'),
(2, 'Funcionario', 'ENEDIS', 'GALVAN MANCERA', 'Secretaria', '13719140', 'COORDINADOR DESARROLLO', '3004467366'),
(3, 'Contratista', 'JAVIER', 'GALVAN MANCERA', 'Oficina Sistemas', '13719140', 'APRENDIZ SENA', '3004467366'),
(4, 'Funcionario', 'JAVIER', 'GALVAN MANCERA', 'Oficina Sistemas', '13719140', 'APRENDIZ SENA', '3004467366'),
(5, 'Practicante', 'angelica MARIA ', 'BENITEZ', 'Oficina Sistemas', '1142915558', 'INGENIERO DE SOFTWARE', '3005006779'),
(6, 'Contratista', 'ENEDIS', 'GALVAN MANCERA', 'Oficina Sistemas', '13719140', 'APRENDIZ SENA', '3004467366'),
(7, 'Funcionario', 'ENEDIS', 'GALVAN MANCERA', 'Atencion al Ciudadano', '13719140', 'APRENDIZ SENA', '3004467366'),
(8, 'Contratista', 'JUAN PABLO', 'GALVAN MEZA', 'Oficina Sistemas', '13719140', 'APRENDIZ SENA', '3004467366');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`login`, `password`) VALUES
('administrador', '1234567'),
(' ', ''),
('1116793937', '1116793937'),
('6820487', '6820487'),
('123456', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD KEY `id_permisos` (`id_permisos`),
  ADD KEY `id_permisos_2` (`id_permisos`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_personas`),
  ADD KEY `id_personass` (`id_personas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permisos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_personas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

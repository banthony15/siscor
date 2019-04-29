-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2019 a las 22:46:23
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `scr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE `dependencias` (
  `id` int(11) NOT NULL,
  `descripcion_depen` varchar(90) NOT NULL,
  `padre_id` int(11) DEFAULT NULL,
  `referencia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`id`, `descripcion_depen`, `padre_id`, `referencia_id`) VALUES
(1, 'Otros...', NULL, 9),
(6, 'Secretaria General', NULL, 9),
(7, 'Inspectoria General', NULL, 9),
(8, 'Direccion de Policia Internacional', NULL, 9),
(9, 'Coordinacion Nacional de Recursos Humanos', NULL, 9),
(10, 'Coordinacion Nacional de Apoyo Administrativo', NULL, 9),
(11, 'Coordinacion Nacional de Dependencias Especiales', NULL, 9),
(12, 'Coordinacion Nacional de Criminalistica', NULL, 9),
(13, 'Coordinacion Nacional de Investigaciones Penales', NULL, 9),
(14, 'DivisiOn de Relaciones Institucionales e ImagEn', 6, 10),
(15, 'Otros...', 6, 10),
(16, 'Otros...', 7, 10),
(20, 'DivisiOn de Puertos y Aeropuertos INTERPOL', 8, 10),
(21, 'Otros...', 8, 10),
(24, 'Otros...', 9, 10),
(25, 'Division de Captacion y Desarrollo', 9, 10),
(26, 'Division de Evaluacion Integral', 9, 10),
(27, 'Division de Registro y Control', 9, 10),
(28, 'Division de Bienestar y Seguridad Social', 9, 10),
(29, 'Direccion de Administracion y Finanzas', 10, 10),
(30, 'Direccion de Planificacion y Presupuesto', 10, 10),
(31, 'Direccion de Tecnologia', 10, 10),
(32, 'Direccion de Infraestructura y Servicios', 10, 10),
(33, 'Direccion de Logistica', 10, 10),
(34, 'Direccion de Estrategias Especiales', 11, 10),
(35, 'Direccion de Investigaciones de Campo', 11, 10),
(36, 'DirecciOn de Investigaciones de Delitos en la funciOn pUblica', 11, 10),
(37, 'DirecciOn de Investigaciones Contra el Terrorismo', 11, 10),
(38, 'Otros...', 12, 10),
(40, 'Direccion de Criminalistica de Campo', 12, 10),
(41, 'Direccion de Criminalistica de Laboratorio', 12, 10),
(42, 'Direccion de Criminalistica Identificativa Comparativa', 12, 10),
(43, 'Direccion de Criminalistica Financiera e Informatica', 12, 10),
(44, 'Division de Informacion Policial', 13, 10),
(45, 'Direccion Contra Drogas', 13, 10),
(46, 'Direccion de Investigaciones de Delitos Contra el patrimonio economico', 13, 10),
(47, 'DirecciOn de InvestigaciOn de Delitos Contra la vida y la integridad psicofIsica ', 13, 10),
(48, 'Direcion de Investigaciones de Vehiculo', 13, 10),
(49, 'Otros...', 13, 10),
(50, 'Inspectoria Estadal', 14, 10),
(51, 'Area de Investigacion Contra Drogas Estadales', 14, 10),
(52, 'Relaciones Publicas', 14, 10),
(53, 'Estrategias Especiales', 14, 10),
(54, 'Departamento de Asuntos Administrativos', 14, 10),
(55, 'Departamento de Ciencias Forenses', 14, 10),
(56, 'Departamento de Criminalistica', 14, 10),
(57, 'SUB Delegacion tipo A', 14, 10),
(58, 'Sub Delegacion tipo B', 14, 10),
(59, 'Oficina de INTERPOL', 20, 11),
(60, 'Departamento de Reclutamiento y Seleccion', 25, 11),
(61, 'Departamento de Clasificacion y Remuneracion', 25, 11),
(62, 'Departamento de Adiestramiento y Desarrollo', 25, 11),
(63, 'Area de Evaluacion Psicosocial', 26, 11),
(64, 'Area de Evaluacion de Desempenio', 26, 11),
(65, 'Area de Evaluacion Especial Cargos', 26, 11),
(66, 'Area de Evaluacion Medicina', 26, 11),
(67, 'Departamento de Nomina', 27, 11),
(68, 'Departamento de Tramites de Personal', 27, 11),
(69, 'Departamento de Beneficios Socio Economicos', 28, 11),
(70, 'Departamento de Prestaciones y Jubilaciones', 28, 11),
(71, 'Division de Compras', 29, 11),
(72, 'Division de Habilitadoria', 29, 11),
(73, 'Division de Contabilidad Fiscal', 29, 11),
(74, 'Division de Evaluacion y Control de Proyectos', 30, 11),
(75, 'Division de Control de Gestion y Planificacio', 30, 11),
(76, 'Division de Presupuesto', 30, 11),
(77, 'Division de Desarrollo Organizacional', 30, 11),
(78, 'Division de Proyectos Especiales', 31, 11),
(79, 'Division de Sistemas', 31, 11),
(80, 'Division de Telematica', 31, 11),
(81, 'Division de Base de Datos', 31, 11),
(82, 'Division de Administracion de Operaciones', 31, 11),
(83, 'Division de Proyectos de Infraestructura', 32, 11),
(84, 'Division de Mantenimiento y Seguridad Industrial', 32, 11),
(85, 'Division de Servisios de Ornato y Aseo', 32, 11),
(86, 'Departamento de Almacen General y Suministro', 33, 11),
(87, 'Departamento de Correspondencia', 33, 11),
(88, 'Departamento de Imprenta y Reproduccion', 33, 11),
(89, 'Division de Dotacion de Equipos Policiales', 33, 11),
(90, 'Division de Transporte Terrestre y Acuatico', 33, 11),
(91, 'Division de Transporte Aereo', 33, 11),
(92, 'Brigada de Acciones Especiales', 34, 11),
(93, 'Brigada de Respuesta Inmediata', 34, 11),
(94, 'Grupos de Trabajo\r\n', 35, 11),
(95, 'Area de Analisis y Seguimiento de Informacion', 36, 11),
(96, 'Area de Investigacion', 36, 11),
(97, 'Area de Sustentacion', 36, 11),
(98, 'Area de Analisis y Seguimiento de Informacion', 37, 11),
(99, 'Area de Investigacion', 37, 11),
(100, 'Area de Sustentacion', 37, 11),
(101, 'Division de Siniestro', 40, 11),
(102, 'Division de Inspeccion Tecnica', 40, 11),
(103, 'Division de Analisis y Reconstruccion de Hechos', 40, 11),
(104, 'Departamento de Laboratorio Fotografico', 41, 11),
(105, 'Division de Laboratorio Fisico Quimico', 41, 11),
(106, 'Division de Laboratorio Biologico', 41, 11),
(107, 'Division de Lofoscopia', 42, 11),
(108, 'Division de Documentologia', 42, 11),
(109, 'Division de Balisitca', 42, 11),
(110, 'Division Fisica Comparativa', 42, 11),
(111, 'Departamento de Experticia de Vehiculos Area ', 42, 11),
(112, 'Division de Experticias Contables Financieras', 43, 11),
(113, 'Division de Experticias Informaticas', 43, 11),
(114, 'Division de Avaluos', 43, 11),
(115, 'Area de Procesamiento de Documentos', 44, 11),
(116, 'Area de Registro de Informacion', 44, 11),
(117, 'Area de Archivo de Documentacion Criminal', 44, 11),
(118, 'Departamento de Analisis y Seguimiento de Casos', 45, 11),
(119, 'Area de Sistemas de Procesamiento Informacion', 45, 11),
(120, 'Area de Investigacion Especial Antidrogas', 45, 11),
(121, 'Area de Enlace Conacuid', 45, 11),
(122, 'Division de Prevencion de Drogas', 45, 11),
(123, 'Division de Investigaciones Contra Drogas', 45, 11),
(124, 'Division de Investigaciones y Fiscalizacion de sustancias quimicas', 45, 11),
(125, 'Division Contra Legimitacion de Capitales', 45, 11),
(126, 'Division Contra el Trafico de drogas Aereo y Portuario', 45, 11),
(127, 'Dvision Contra Delicuencia Organizada', 46, 11),
(128, 'Division Contra Hurtos', 46, 11),
(129, 'Division Contra Robos', 46, 11),
(130, 'Division Contra Extorsion y Secuestro', 46, 11),
(131, 'Division Contra Delitos Financieros', 46, 11),
(132, 'Division Contra Delitos Informaticos', 46, 11),
(133, 'Division de Investigacion de Homicidio', 47, 11),
(134, 'DivisiOn de Investigaciones y ProtecciOn en Materia del niNo adolescente mujer y familia', 47, 11),
(135, 'Departamento Estrategico de Enlace Interinstitucional', 48, 11),
(136, 'Division de Estadistica', 48, 11),
(137, 'Division de Comunicaciones', 48, 11),
(138, 'Division de Seguridad Bancaria', 48, 11),
(139, 'Departamento de Aprehension', 48, 11),
(140, 'Area de Analisis y Seguimiento de Informacion', 57, 11),
(141, 'Area de Sustanciacion', 57, 11),
(142, 'Area de Investigacion', 57, 11),
(143, 'Area de Tecnica', 57, 11),
(144, 'Medicatura Forense', 57, 11),
(145, 'Consultoria Juridica', 57, 11),
(146, 'Psiquiatria Forense', 57, 11),
(147, 'Psicologia Forense', 57, 11),
(148, 'Trabajo Social Comunitario', 57, 11),
(149, 'Area de Analisis y Seguimiento de Informacion', 58, 11),
(150, 'Area de Sustanciacion', 58, 11),
(151, 'Area de Investigacion ', 58, 11),
(152, 'Area de Tecnica', 58, 11),
(153, 'Otros...', 1, 10),
(154, 'Direccion General', 153, 11),
(155, 'Consejo Disciplinario ', 153, 11),
(156, 'Grupo de Trabajo Autodirigido ', 153, 11),
(157, 'Junta Superior', 153, 11),
(158, 'AsesorIa JurIdica', 153, 11),
(159, 'SubdirecciOn', 153, 11),
(160, 'DivisiOn de Desarrollo y Fortalecimiento Institucional', 15, 11),
(161, 'DivisiOn de Seguridad Interna', 16, 11),
(162, 'DivisiOn de AnAlisis y Control de InformaciOn', 16, 11),
(163, 'DirecciOn de Investigaciones Internas', 16, 11),
(164, 'DirecciOn de InspectorIa del Debido Proceso', 16, 11),
(165, 'Departamento de Comunicaciones Internacionales', 21, 11),
(166, 'DivisiOn de Archivo Internacional', 21, 11),
(167, 'DivisiOn de Investigaciones', 21, 11),
(168, 'Area de AsignaciOn y Control de Credenciales', 24, 11),
(169, 'Oficina de AsesorIa y Desarrollo Crimina listico', 38, 11),
(170, 'DivisiOn de Resguardo y Custodia de Evidencia', 38, 11),
(171, 'Subdelegaciones Area Capital', 49, 11),
(172, 'Area de asesorIa y desarrollo laboral', 28, 11),
(173, 'Area de laboratorio fisicoquImico\r\n			', 41, 11),
(174, 'Area de microscopia electronica', 41, 11),
(175, 'Area de investigaciOn de drogas en puertos y aeropuertos', 45, 11),
(176, 'DelegaciOn estadal', NULL, 9),
(177, 'Otros...', 176, 10),
(178, 'InspectorIa estadal', 177, 11),
(179, 'Area de investigaciOn contra drogas estadales', 177, 11),
(180, 'Relaciones Publicas', 177, 11),
(181, 'Estrategias Especiales', 177, 11),
(182, 'Departamento de Asuntos Administrativos', 177, 11),
(183, 'Departamento de Ciencias Forenses', 177, 11),
(184, 'Departamento de CriminalIstica', 177, 11),
(185, 'SUB DelegaciOn Tipo A', 176, 10),
(206, 'Area de anAlisis y seguimiento de informaciOn', 185, 11),
(207, 'Area de sustanciaciOn', 185, 11),
(208, 'Area de investigaciOn', 185, 11),
(209, 'Area de tEcnica', 185, 11),
(210, 'Medicatura forense	', 185, 11),
(211, 'ConsultorIa JurIdica', 185, 11),
(212, 'PsiquiatrIa forense', 185, 11),
(213, 'PsicologIa forense', 185, 11),
(214, 'Trabajo Social Comunitario', 185, 11),
(215, 'Sub DelegaciOn Tipo B', 176, 10),
(216, 'Area de anAlisis y seguimiento de informaciOn', 215, 11),
(217, 'Area de sustanciaciOn', 215, 11),
(218, 'Area de investigaciOn', 215, 11),
(219, 'Area de tEcnica', 215, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_insert_requerimiento`
--

CREATE TABLE `log_insert_requerimiento` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `requerimiento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `log_insert_requerimiento`
--

INSERT INTO `log_insert_requerimiento` (`id`, `usuario_id`, `requerimiento_id`) VALUES
(25, 4, 61),
(34, 4, 74),
(36, 4, 76),
(37, 4, 77),
(45, 4, 85),
(46, 4, 86),
(55, 4, 102),
(56, 4, 103),
(57, 4, 104),
(58, 4, 105),
(59, 4, 106),
(60, 4, 107),
(61, 4, 108),
(62, 4, 109),
(65, 4, 112),
(66, 4, 113),
(67, 4, 114),
(74, 4, 121),
(75, 4, 122),
(76, 4, 123),
(79, 4, 127),
(81, 4, 129),
(82, 4, 130),
(83, 4, 131),
(84, 4, 132),
(85, 4, 133),
(86, 4, 134),
(87, 4, 135),
(88, 4, 136),
(89, 4, 137),
(90, 4, 138),
(91, 4, 139),
(92, 4, 141),
(93, 4, 142),
(94, 4, 143),
(95, 4, 144),
(96, 4, 145),
(97, 4, 146),
(98, 4, 147),
(99, 4, 148),
(100, 4, 149),
(101, 4, 150),
(102, 4, 151),
(103, 4, 152),
(104, 4, 153),
(105, 4, 154),
(106, 4, 155),
(107, 4, 156),
(108, 4, 157),
(109, 4, 158),
(110, 4, 159),
(111, 4, 160),
(112, 4, 161),
(113, 4, 162),
(114, 4, 163),
(115, 4, 164),
(116, 4, 165),
(117, 4, 166),
(118, 4, 167),
(119, 4, 168),
(120, 4, 169),
(121, 4, 170),
(122, 4, 171),
(123, 4, 172),
(124, 4, 173),
(125, 4, 174),
(126, 4, 180),
(127, 12, 181),
(128, 12, 182),
(129, 12, 183),
(130, 12, 184),
(131, 12, 185),
(132, 12, 186),
(133, 12, 187),
(134, 12, 188),
(135, 12, 189),
(136, 12, 190),
(137, 12, 191),
(138, 12, 192),
(139, 12, 193),
(140, 12, 194),
(141, 12, 195),
(142, 12, 196),
(143, 12, 197),
(144, 12, 198),
(145, 12, 199),
(146, 12, 200),
(147, 12, 201),
(148, 12, 202),
(149, 12, 203),
(150, 12, 204),
(151, 12, 205),
(152, 12, 206),
(153, 12, 207),
(154, 12, 208),
(155, 12, 209),
(156, 12, 210),
(157, 12, 211),
(158, 12, 212),
(159, 12, 213),
(160, 12, 214),
(161, 12, 215),
(162, 12, 216),
(163, 12, 217),
(164, 12, 218),
(165, 12, 219),
(166, 12, 220),
(169, 12, 223),
(170, 12, 224),
(171, 12, 225),
(172, 12, 226),
(173, 12, 227),
(174, 12, 228),
(175, 12, 229),
(176, 12, 230),
(177, 12, 231),
(178, 12, 232),
(179, 12, 233),
(180, 12, 234),
(181, 12, 235),
(184, 12, 239),
(185, 12, 240),
(186, 12, 241),
(187, 12, 242),
(188, 12, 243),
(189, 12, 244),
(190, 12, 245),
(191, 12, 246),
(192, 12, 247),
(193, 12, 248),
(194, 12, 249),
(195, 12, 250),
(196, 12, 251),
(197, 12, 252),
(198, 12, 253),
(199, 12, 254),
(201, 12, 256),
(202, 12, 257),
(203, 12, 258),
(204, 12, 259),
(205, 12, 260),
(207, 12, 262),
(209, 12, 264),
(210, 12, 265),
(211, 12, 266),
(212, 12, 267),
(213, 12, 268),
(214, 12, 269),
(215, 12, 270),
(216, 12, 271),
(217, 12, 272),
(218, 12, 273),
(219, 12, 274),
(220, 12, 275),
(221, 12, 276),
(222, 12, 277),
(223, 12, 278),
(224, 12, 279),
(225, 12, 280),
(226, 12, 281),
(227, 12, 282),
(228, 12, 283),
(229, 12, 284),
(230, 12, 285),
(231, 12, 286),
(232, 12, 287),
(233, 12, 288),
(234, 12, 289),
(235, 12, 290),
(236, 12, 291),
(237, 12, 292),
(238, 12, 293),
(239, 12, 294),
(240, 12, 295),
(241, 12, 296),
(242, 12, 297),
(244, 12, 299),
(245, 12, 300),
(246, 12, 301),
(247, 12, 302),
(248, 12, 303),
(249, 12, 304),
(250, 12, 305),
(251, 12, 306),
(252, 12, 307),
(253, 12, 308),
(254, 12, 309),
(255, 12, 310),
(256, 12, 311),
(257, 12, 312),
(258, 12, 313),
(259, 12, 314),
(260, 12, 315),
(262, 12, 317),
(263, 12, 318),
(264, 12, 319),
(265, 12, 320),
(267, 12, 322),
(268, 12, 323),
(269, 12, 324),
(271, 12, 326),
(272, 12, 327),
(273, 12, 328),
(274, 12, 329),
(275, 12, 330),
(276, 12, 331),
(277, 12, 332),
(278, 12, 333),
(279, 12, 334),
(280, 12, 335),
(281, 12, 336),
(282, 12, 337),
(283, 12, 338),
(284, 12, 339),
(285, 12, 340),
(286, 12, 341),
(287, 12, 342),
(288, 12, 343),
(289, 12, 344),
(290, 12, 345),
(291, 12, 346),
(292, 12, 347),
(293, 12, 348),
(294, 12, 349),
(295, 12, 350),
(296, 12, 351),
(297, 12, 352),
(298, 12, 353),
(299, 12, 354),
(300, 12, 355),
(301, 12, 356),
(302, 12, 357),
(303, 12, 358),
(304, 12, 359),
(305, 12, 360),
(306, 12, 361),
(307, 12, 362),
(308, 12, 363),
(310, 12, 365),
(311, 12, 366),
(312, 12, 367),
(313, 12, 368),
(314, 12, 369),
(315, 12, 370),
(316, 12, 371),
(317, 12, 372),
(319, 5, 378),
(320, 5, 379),
(321, 5, 380),
(322, 4, 381),
(323, 8, 382);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_insert_soporte`
--

CREATE TABLE `log_insert_soporte` (
  `id` int(11) NOT NULL,
  `persona_a_id` int(11) NOT NULL,
  `soporte_id` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `log_insert_soporte`
--

INSERT INTO `log_insert_soporte` (`id`, `persona_a_id`, `soporte_id`, `fecha_registro`) VALUES
(19, 5, 23, '2019-04-28 20:05:15'),
(20, 5, 24, '2019-04-28 20:05:15'),
(21, 5, 26, '2019-04-28 20:06:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_insert_ticket`
--

CREATE TABLE `log_insert_ticket` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `micro_tickets_id` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `log_insert_ticket`
--

INSERT INTO `log_insert_ticket` (`id`, `persona_id`, `micro_tickets_id`, `fecha_registro`) VALUES
(15, 5, 15, '2019-04-25 14:09:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_update_requerimiento`
--

CREATE TABLE `log_update_requerimiento` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `requerimiento_id` int(11) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `fecha_action` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_update_soporte`
--

CREATE TABLE `log_update_soporte` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `soporte_id` int(11) NOT NULL,
  `fecha_action` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `log_update_soporte`
--

INSERT INTO `log_update_soporte` (`id`, `persona_id`, `soporte_id`, `fecha_action`) VALUES
(1, 5, 23, '2019-04-28 19:53:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_update_ticket`
--

CREATE TABLE `log_update_ticket` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `micro_ticket_id` int(11) NOT NULL,
  `fecha_action` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `micro_persona`
--

CREATE TABLE `micro_persona` (
  `id` int(11) NOT NULL,
  `micro_tickets_idmt` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `micro_persona`
--

INSERT INTO `micro_persona` (`id`, `micro_tickets_idmt`, `persona_id`) VALUES
(15, 15, 38);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `micro_tecnico`
--

CREATE TABLE `micro_tecnico` (
  `id` int(11) NOT NULL,
  `persona_t_id` int(11) DEFAULT NULL,
  `micro_tickets_idmt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `micro_tecnico`
--

INSERT INTO `micro_tecnico` (`id`, `persona_t_id`, `micro_tickets_idmt`) VALUES
(15, 7, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `micro_tickets`
--

CREATE TABLE `micro_tickets` (
  `id` int(11) NOT NULL,
  `fecha_micro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cod_area_id` int(11) NOT NULL,
  `numero_micro` varchar(45) DEFAULT NULL,
  `areac_id` int(11) NOT NULL,
  `tipo_equipo_id` int(11) NOT NULL,
  `modelo_del_equipo` varchar(45) NOT NULL,
  `marca_del_equipo` varchar(45) NOT NULL,
  `serial_del_equipo` varchar(45) NOT NULL,
  `pieza_suelta_id` int(11) NOT NULL,
  `pieza_danada_id` int(11) NOT NULL,
  `rayado_id` int(11) NOT NULL,
  `marca_procesador_id` int(11) DEFAULT NULL,
  `tipo_de_ram_id` int(11) DEFAULT NULL,
  `capacidad_ram_id` int(11) DEFAULT NULL,
  `cantidad_memoria_ram` int(11) DEFAULT NULL,
  `tipo_disco_duro_id` int(11) DEFAULT NULL,
  `capacidad_disco_duro_id` int(11) DEFAULT NULL,
  `cantidad_disco_duro` int(11) DEFAULT NULL,
  `fan_cooler` int(11) DEFAULT NULL,
  `floppy` int(11) DEFAULT NULL,
  `unidad_dvd_cd` int(11) DEFAULT NULL,
  `tarjeta_red` int(11) DEFAULT NULL,
  `tarjeta_video` int(11) DEFAULT NULL,
  `tarjeta_sonido` int(11) DEFAULT NULL,
  `descripcion` varchar(45) NOT NULL,
  `solucion` varchar(45) DEFAULT NULL,
  `status_equipo_id` int(11) DEFAULT NULL,
  `fecha_entrega` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `micro_tickets`
--

INSERT INTO `micro_tickets` (`id`, `fecha_micro`, `cod_area_id`, `numero_micro`, `areac_id`, `tipo_equipo_id`, `modelo_del_equipo`, `marca_del_equipo`, `serial_del_equipo`, `pieza_suelta_id`, `pieza_danada_id`, `rayado_id`, `marca_procesador_id`, `tipo_de_ram_id`, `capacidad_ram_id`, `cantidad_memoria_ram`, `tipo_disco_duro_id`, `capacidad_disco_duro_id`, `cantidad_disco_duro`, `fan_cooler`, `floppy`, `unidad_dvd_cd`, `tarjeta_red`, `tarjeta_video`, `tarjeta_sonido`, `descripcion`, `solucion`, `status_equipo_id`, `fecha_entrega`) VALUES
(15, '2019-04-25 13:51:27', 69, NULL, 79, 95, 'x3elimloc', 'samsung', 'iphone4s', 91, 88, 85, 141, 106, 121, 2, 110, 124, 2, 1, NULL, 1, 1, 1, 1, 'prueba', NULL, 163, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `credencial` int(11) DEFAULT NULL,
  `nombre_1` varchar(45) NOT NULL,
  `nombre_2` varchar(45) DEFAULT NULL,
  `apellido_1` varchar(45) NOT NULL,
  `apellido_2` varchar(45) DEFAULT NULL,
  `correo` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `jerarquia_id` int(11) NOT NULL,
  `horaaaaa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `areac_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `cedula`, `credencial`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, `correo`, `cargo`, `jerarquia_id`, `horaaaaa`, `areac_id`) VALUES
(4, 21537872, 46888, 'Anthony', 'Jose', 'Benitez', 'Clemente', 'anthojose@hotmail.es', 'Analista', 42, '2018-06-11 14:04:54', 79),
(5, 25213224, 13224, 'Carlos', 'Eduardo', 'Soto', 'Valera', 'tigre3216@hotmail.com', 'analista', 27, '2018-10-23 13:29:42', 80),
(7, 20220839, 46921, 'Jesus', 'Alenjadro', 'Guerra', 'Blanco', 'jguerra@cicpc.gob.ve', 'operador', 27, '2018-10-23 13:29:28', 80),
(16, 10181238, 81238, 'nury', 'jose', 'clemente', 'lobo', 'anthonyfel@hotmail.com', 'abogado', 21, '2018-05-03 19:05:14', NULL),
(17, 15123698, 47000, 'jose', 'alberto', 'flore', 'campo', 'ab@cicpc.com.ve', 'analista financiero', 27, '2018-05-18 00:03:09', NULL),
(38, 17639604, 46932, 'andres', 'edilberto', 'leotur', 'orellana', 'aleotur@cicpc.gob.ve', 'ingeniero', 49, '2018-05-18 22:10:19', NULL),
(39, 302158, 12345, 'jose', 'peralta', 'lopez', 'peralta', 'fm@hotmail.com', 'policia loco', 17, '2018-06-12 18:26:26', NULL),
(41, 36987456, 81237, 'nury', 'jose', 'clemente', 'clemente', 'ikjbi@hotmil.com', 'operador', 30, '2018-06-29 12:54:50', NULL),
(42, 25369741, 10258, 'jose', 'pepito', 'comando', 'borrarcho', 'fm@hotmail.com', 'analista ', 17, '2018-07-12 17:48:57', NULL),
(43, 1, 1, 'Gestor', '', 'S', '', 'fm@hotmail.com', 'Administrador de SISCOR', 23, '2018-08-03 15:36:32', 80),
(47, 10111236, 12025, 'jose', 'jose', 'jose', 'jose', 'anthonyfel@hotmail.com', 'abogado', 34, '2018-07-17 20:20:31', NULL),
(48, 258963, 1111, 'juan', 'comando', 'peralta', 'alberto', 'fm@hotmail.com', 'jjjj', 23, '2018-09-05 19:06:34', 214),
(49, 23409133, 36464, 'andres', 'alejandro', 'contreras', 'silvera', 'acontreras@cicpc.gob.ve', 'analista de sistemas', 29, '2018-07-20 18:42:55', 79),
(65, 101010, 10234, 'nury', 'ojoj', 'jojo', 'ojojo', 'anthonyfel@hotmail.com', 'analista', 34, '2018-10-05 19:51:21', NULL),
(66, 101020, 10201, 'jose', 'jose', 'jose', 'jose', 'fm@hotmail.com', 'amor mio', 16, '2018-10-05 20:32:41', NULL),
(67, 12345, 124587, 'chuchu', 'chuchu', 'chuchu', 'chuchu', 'anthonyfel@hotmail.com', 'chuchu', 22, '2018-10-05 20:34:38', NULL),
(68, 25417896, 21489, 'ijoj', 'iji', 'ji', 'jij', 'ikjbi@hotmil.com', 'ij', 18, '2018-10-05 20:37:15', NULL),
(69, 6186488, 17551, 'GEORGETTE', 'COROMOTO', 'TERAN', 'ZAMBRANO', 'gzambrano@cicpc.gob.ve', 'Analista de Informacion', 53, '2018-10-08 18:20:16', NULL),
(70, 30111222, 30111, 'ejemplo', 'plo', 'plo', 'plo', 'kmoreno@hotmail.com', 'analista', 16, '2018-10-09 17:52:16', NULL),
(71, 17927724, 27724, 'yosmar', 'berenice', 'gil', 'mujica', 'yosmargil@gmail.com', 'analista de sistemas', 49, '2018-10-09 18:22:44', 79),
(76, 12333222, 11223, 'jose', 'luis', 'dugarte', 'lo', 'anthonyfel@hotmail.com', 'analista financiero', 27, '2018-10-18 19:17:43', NULL),
(77, 18009194, 9194, 'luis', '', 'mila', '', 'daymisdjs@gmail.com', 'analista', 33, '2018-10-18 20:13:38', NULL),
(78, 15541888, 36414, 'Yenifer', '', 'Luna', '', 'yluna@cicpc.gob.ve', 'Analista', 50, '2018-10-29 18:23:42', 79),
(79, 15573515, 33102, 'Katiria', 'Elena', 'Perez', 'Sanchez', 'kperez@cicpc.gob.ve', 'Jefe de division', 49, '2019-02-20 20:05:34', 80),
(80, 26435880, 47259, 'Darly', 'Naidu', 'Martinez', 'Barreto', 'darlymmartinezb@gmail.com', 'Preogramadora', 42, '2019-02-25 14:34:19', NULL),
(81, 14954431, 33482, 'Maria', '', 'Salazar', '', 'msalazar@cicpc.gob.ve', 'Analista', 42, '2019-04-23 13:19:42', 79),
(82, 12832485, 0, 'jose', '', 'camacho', '', 'rchacin@cicpc.gobb.ve', 'Tecnico', 15, '2019-04-25 15:39:49', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencia`
--

CREATE TABLE `referencia` (
  `id` int(11) NOT NULL,
  `referencia` varchar(45) CHARACTER SET latin1 NOT NULL,
  `padre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `referencia`
--

INSERT INTO `referencia` (`id`, `referencia`, `padre_id`) VALUES
(1, 'perfil', NULL),
(3, 'jerarquia', NULL),
(4, 'tipo_de_solicitud', NULL),
(5, 'tipo_de_requerimiento', NULL),
(6, 'status', NULL),
(7, 'cod_area', NULL),
(9, 'areaa', NULL),
(10, 'areab', 9),
(11, 'areac', 10),
(13, 'Inhabilitado', 1),
(14, 'Administrador', 1),
(15, 'DETECTIVE', 3),
(16, 'DETECTIVE AGREGADO', 3),
(17, 'DETECTIVE JEFE', 3),
(18, 'INSPECTOR\n', 3),
(19, 'INSPECTOR AGREGADO', 3),
(20, 'INSPECTOR JEFE', 3),
(21, 'COMISARIO', 3),
(22, 'COMISARIO JEFE', 3),
(23, 'COMISARIO GENERAL', 3),
(24, 'AGENTE DE SEGURIDAD I\n', 3),
(25, 'AGENTE DE SEGURIDAD II', 3),
(27, 'ASISTENTE ADMINISTRATIVO I', 3),
(28, 'ASISTENTE ADMINISTRATIVO I', 3),
(29, 'ASISTENTE ADMINISTRATIVO II', 3),
(30, 'ASISTENTE ADMINISTRATIVO III', 3),
(31, 'ASISTENTE ADMINISTRATIVO IV', 3),
(32, 'ASISTENTE ADMINISTRATIVO V', 3),
(33, 'ASISTENTE ADMINISTRATIVO VI', 3),
(34, 'ASISTENTE ADMINISTRATIVO VII', 3),
(35, 'AUXILIAR ADMINISTRATIVO I', 3),
(36, 'AUXILIAR ADMINISTRATIVO II', 3),
(37, 'AUXILIAR ADMINISTRATIVO III', 3),
(38, 'AUXILIAR ADMINISTRATIVO IV', 3),
(39, 'AUXILIAR ADMINISTRATIVO V', 3),
(40, 'AUXILIAR ADMINISTRATIVO VI', 3),
(41, 'AUXILIAR ADMINISTRATIVO VII', 3),
(42, 'EXPERTO TECNICO I', 3),
(43, 'EXPERTO TECNICO II', 3),
(44, 'EXPERTO TECNICO III', 3),
(45, 'EXPERTO TECNICO IV', 3),
(46, 'EXPERTO TECNICO V', 3),
(47, 'EXPERTO TECNICO VI', 3),
(48, 'EXPERTO TECNICO VII', 3),
(49, 'EXPERTO PROFESIONAL I', 3),
(50, 'EXPERTO PROFESIONAL II', 3),
(51, 'EXPERTO PROFESIONAL III', 3),
(52, 'EXPERTO PROFESIONAL IV', 3),
(53, 'EXPERTO PROFESIONAL IV', 3),
(54, 'EXPERTO PROFESIONAL ESPECIALISTA I', 3),
(55, 'EXPERTO PROFESIONAL ESPECIALISTA II', 3),
(56, 'EXPERTO PROFESIONAL ESPECIALISTA III', 3),
(57, 'SECRETARIO GENERAL ', 3),
(58, 'ASESOR JURIDICO GENERAL', 3),
(59, 'SUB DIRECTOR GENERAL', 3),
(60, 'DIRECTOR GENERAL NACIONAL', 3),
(61, 'Memorandum', 4),
(62, 'Correo electronico', 4),
(63, 'LLamada telefonica', 4),
(64, 'No conformidad', 5),
(65, 'Nuevo Requerimiento', 5),
(66, 'Pedido de Cambio', 5),
(67, 'Procesado', 6),
(68, 'No Procesado', 6),
(69, '212', 7),
(70, '412', 7),
(71, '414', 7),
(72, '424', 7),
(73, '416', 7),
(74, '426', 7),
(75, 'Orden de la Directiva General', 4),
(76, 'Oficio', 4),
(77, 'Otros...', 5),
(78, 'En Proceso', 6),
(79, 'Sistema', NULL),
(80, 'Modulo', 79),
(81, 'Usuario Sistemas', 1),
(82, 'Super Usuario Sistemas', 1),
(83, 'rayado', NULL),
(84, 'Si', 83),
(85, 'No', 83),
(86, 'pieza_danada', NULL),
(87, 'Si', 86),
(88, 'No', 86),
(89, 'pieza_suelta', NULL),
(90, 'Si', 89),
(91, 'No', 89),
(92, 'Super Usuario Telematica', 1),
(93, 'Usuario Telematica', 1),
(94, 'tipo_equipo', NULL),
(95, 'Computador', 94),
(96, 'Impresora', 94),
(97, 'Modem', 94),
(98, 'Laptop', NULL),
(99, 'Tablet', 94),
(100, 'tipo_de_ram', NULL),
(101, 'N/A', 100),
(102, 'DRAM', 100),
(103, 'RDRAM', 100),
(104, 'DDR', 100),
(105, 'DDR2', 100),
(106, 'DDR3', 100),
(107, 'DDR4', 100),
(108, 'tipo_disco_duro', NULL),
(109, 'IDE', 108),
(110, 'SATA', 108),
(111, 'N/A', 108),
(112, 'capacidad_ram', NULL),
(113, '128 MB', 112),
(114, '256 MB', 112),
(115, '512 MB', 112),
(116, '1 GB', 112),
(117, '2 GB', 112),
(118, '4 GB', 112),
(119, '8 GB', 112),
(120, '16 GB', 112),
(121, '32 GB', 112),
(122, 'N/A', 112),
(123, 'capacidad_disco_duro', NULL),
(124, '40 GB', 123),
(125, '60 GB', 123),
(126, '80 GB', 123),
(127, '120 GB', 123),
(128, '160 GB', 123),
(129, '180 GB', 123),
(130, '250 GB', 123),
(131, '320 GB', 123),
(132, '360 GB', 123),
(133, '500 GB', 123),
(134, '750 GB', 123),
(135, '1 TB', 123),
(136, '2 TB', 123),
(137, '3 TB', 123),
(138, '4 TB', 123),
(139, 'N/A', 123),
(140, 'marca_procesador', NULL),
(141, 'INTEL', 140),
(142, 'AMD', 140),
(143, 'N/A', 140),
(144, 'tipo_de_rt', NULL),
(145, 'VerificaciOn de internet', 144),
(146, 'ActivaciOn de puntos de red', 144),
(147, 'Formateo de equipo', 144),
(148, 'Verificacion de equipos con virus', 144),
(149, 'ConfiguraciOn de impresoras locales/red', 144),
(150, 'InstalaciOn de hardware', 144),
(151, 'InstalaciOn de software', 144),
(152, 'Mantenimiento preventivo', 144),
(153, 'Mantenimiento correctivo', 144),
(154, 'Transferencia de puntos de red', 144),
(155, 'Instalacion de tonner', 144),
(156, 'ConfiguraciOn de router/switcher', 144),
(157, 'ConfiguraciOn de VPN', 144),
(158, 'ConfiguraciOn de Correo', 144),
(159, 'Transferencia de informaciOn', 144),
(160, 'Respaldar informaciOn', 144),
(161, 'ActivaciOn de Windows', 144),
(162, 'status_equipo', NULL),
(163, 'Equipo por reparar', 162),
(164, 'Equipo reparado', 162),
(165, 'Equipo entregado', 162),
(166, 'status_del_caso', NULL),
(167, 'Caso abierto', 166),
(168, 'Caso cerrado', 166),
(169, 'Otros', 144);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimiento`
--

CREATE TABLE `requerimiento` (
  `id` int(11) NOT NULL,
  `hora` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cod_area_id` int(11) NOT NULL,
  `numero_tel_requerimiento` varchar(45) DEFAULT NULL,
  `areac_id` int(11) NOT NULL,
  `tipo_de_solicitud_id` int(11) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `fecha_documento` date NOT NULL,
  `fecha_culm` date NOT NULL,
  `tipo_de_requerimiento_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `descripcion` varchar(1024) NOT NULL,
  `solucion` varchar(120) DEFAULT NULL,
  `observaciones` varchar(120) DEFAULT NULL,
  `Modulo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `requerimiento`
--

INSERT INTO `requerimiento` (`id`, `hora`, `cod_area_id`, `numero_tel_requerimiento`, `areac_id`, `tipo_de_solicitud_id`, `numero`, `fecha_documento`, `fecha_culm`, `tipo_de_requerimiento_id`, `status_id`, `descripcion`, `solucion`, `observaciones`, `Modulo_id`) VALUES
(61, '2018-10-04 15:14:41', 69, '5774894', 131, 62, 'effgdfgdfg', '2018-03-21', '0000-00-00', 66, 78, 'En la pantalla al registrar solicitud de inspecciÃ³n de seguridad, falta incluir el tipo de inspecciÃ³n: â€œREINSPECCION', NULL, NULL, 33),
(74, '2018-10-08 18:20:16', 70, '3888000', 116, 76, '01', '0000-00-00', '0000-00-00', 64, 78, 'El sistema, no valida que la fecha de emisiÃ³n sea menor a la fecha RemisiÃ³n. Debe enviar un mensaje que diga â€œLa fecha de emisiÃ³n debe ser mayor a la fecha de remisiÃ³nâ€.', NULL, NULL, 14),
(76, '2018-10-08 18:53:11', 70, '3888000', 116, 76, '2', '2016-08-01', '0000-00-00', 64, 78, 'El sistema no valida al concluir un expediente Ã©ste, tenga un Auto de Inicio asociado. El sistema deberÃ­a mostrar un mensaje que diga â€œEl expediente al concluir no tiene un Auto de Inicio Asociadoâ€.', NULL, NULL, 14),
(77, '2018-10-08 18:55:15', 70, '3888000', 116, 76, '3', '2016-08-01', '0000-00-00', 64, 78, 'En Incluir un Auto de Inicio el sistema no valida que se haya hecho previamente la participaciÃ³n al Fiscal (Oficio de ParticipaciÃ³n), permitiendo hacerlo luego de haber concluido el Acta Procesal', NULL, NULL, 14),
(85, '2018-10-08 19:24:13', 70, '3888000', 116, 76, '4', '0000-00-00', '0000-00-00', 64, 78, 'En Incluir Examen ClÃ­nico	Cuando el usuario presiona el botÃ³n de â€œIncluirâ€ sin registrar al menos un tipo de muestra y/o un objetivo de investigaciÃ³n, el sistema muestra el mensaje: â€œDebe asociar muestrasâ€, lo cual es incorrecto, debe ser: â€œDebe asociar muestras y/o Debe asociar Tipo de Drogaâ€.', NULL, NULL, 14),
(86, '2018-10-08 19:25:48', 70, '3888000', 116, 76, '5', '0000-00-00', '0000-00-00', 64, 78, 'En Consultar Actas Procesales y Libro de Control de InvestigaciÃ³n	Cuando el usuario introduce el nÃºmero de acta procesal de forma incorrecta el sistema muestra el mensaje de error: â€œNo se encontraron coincidenciasâ€ en vez de ser el siguiente: â€œExisten campos escritos incorrectamente, por favor, rectifique estos datosâ€. Y sombrear el Ã¡rea problema', NULL, NULL, 14),
(102, '2018-10-08 20:06:39', 70, '3888000', 116, 76, '6', '2018-10-01', '0000-00-00', 64, 78, 'Se requiere la creacion de una opcion que permita corregir el acta procesal de concluida a iniciado o en curso', NULL, NULL, 14),
(103, '2018-10-08 20:11:21', 70, '3888000', 116, 76, '7', '2018-10-01', '0000-00-00', 64, 78, 'El sistema no permite realizar correccion de la dependencia, cuando el acta procesal ya esta incluida. Citamos como ejemplo acta procesal C-168.073', NULL, NULL, 14),
(104, '2018-10-08 20:13:22', 70, '3888000', 115, 76, '8', '2018-10-01', '0000-00-00', 64, 78, 'El Investigador va a realizar una solicitud de experticia, desde el acta procesal, al seleccionar dependencias del cicpc el mismo no despliega la lista de los despacho, asimismo al realizar la comunicaciÃ³n remitiendo la solicitud da un error de excepcion ', NULL, NULL, 14),
(105, '2018-10-08 20:15:45', 70, '3888000', 116, 76, '9', '2018-10-01', '0000-00-00', 64, 78, 'Al incluir un vehiculo con placa nueva asignada y segÃºn el INTT arroje solo la  placa vieja,  el Sistema debe desbloquear los campos placa nueva y vieja, a los fines de incluir manualmente la placa correcta (ojo, solo en el campo \"placa\")', NULL, NULL, 14),
(106, '2018-10-08 20:18:19', 70, '3888000', 116, 76, '10', '2018-10-01', '0000-00-00', 64, 78, 'Cuando el usuario introduce la fecha inicial mayor que la fecha final, el sistema muestra el mensaje de error: â€œNo se encontraron coincidenciasâ€ en vez de ser el siguiente: â€œLa fecha final debe ser mayor o igual que la fecha inicialâ€.', NULL, NULL, 14),
(107, '2018-10-08 20:20:06', 70, '3888000', 116, 76, '11', '2018-10-01', '0000-00-00', 64, 78, 'En PÃ¡ginas de Consultas de Datos El sistema cuando selecciona uno de los elementos (â€œDrogasâ€ por ejemplo) sin haber iniciado la investigaciÃ³n (validado el â€œNÂº de Expedienteâ€), muestra un mensaje: â€œExisten campos escritos incorrectamente, por favor, rectifique estos datosâ€, cuando deberÃ­a ser el siguiente mensaje: â€œExisten campos vacÃ­os que son obligatorios, por favor, complete estos datosâ€. ', NULL, NULL, 14),
(108, '2018-10-08 20:30:20', 70, '3888000', 116, 76, '13', '2018-10-01', '0000-00-00', 64, 78, 'Cuando el usuario se pasa del lÃ­mite de los caracteres permitidos en los campos de texto, el sistema muestra el mensaje: â€œExisten campos escritos incorrectamente, por favor, rectifique estos datosâ€; cuando deberÃ­a de indicar un mensaje que indique cuantos caracteres son los permitidos, ya que permite llenar todos los espacios sin dar error alguno hasta que se presiona el botÃ³n de â€œIncluirâ€.', NULL, NULL, 14),
(109, '2018-10-08 20:32:17', 70, '3888000', 116, 76, '14', '0000-00-00', '0000-00-00', 64, 78, 'Cuando el usuario quiere asociar un â€œObjetoâ€ como elemento, el sistema no permite registrar un â€œCuchilloâ€ como objeto incriminado, sin que se le asigne un serial que no sea en el campo de â€œSerialâ€; y no cuenta con otro campo donde se pueda registrar algÃºn serial asignado por el usuario, y poder continuar con la investigaciÃ³n.', NULL, NULL, 14),
(112, '2018-10-09 17:49:08', 70, '3888000', 116, 76, '15', '2018-10-01', '0000-00-00', 64, 78, 'El sistema no valida que al ingresar un â€œObjetoâ€ se requiera el Serial como campo obligatorio y cuando se le va a asociar la razÃ³n distinta a â€œObjeto Decomisadoâ€ se muestra el mensaje â€œEl Objeto no puede quedar SOLICITADO sin serial.â€', NULL, NULL, 14),
(113, '2018-10-09 17:50:40', 70, '3888000', 116, 76, '16', '2018-10-01', '0000-00-00', 64, 78, 'El sistema no valida el mÃ¡ximo de la â€œCantidadâ€ de objetos involucrados Vs. El â€œNÂº de Serialesâ€ por Objeto.', NULL, NULL, 14),
(114, '2018-10-09 17:51:39', 70, '3888000', 116, 76, '17', '2018-10-01', '0000-00-00', 64, 78, 'Si el usuario estando en opciÃ³n â€œModificar un Objetoâ€ selecciona la opciÃ³n â€œDisociarâ€ y luego le da la opciÃ³n â€œGuardarâ€ y seguidamente â€œCerrarâ€, el sistema no actualiza la acciÃ³n de eliminado, aun cuando muestra el mensaje de: â€œSe ha disociado el objetoâ€; lo hace solo cuando se presiona el botÃ³n â€œCerrarâ€ directamente. NOTA: cuando se â€œDisociaâ€ desde la pantalla que muestra todos los elementos, si lo realiza correctamente.', NULL, NULL, 14),
(121, '2018-10-09 18:13:20', 70, '3888000', 116, 76, '18', '2018-10-01', '0000-00-00', 64, 78, 'Cuando el usuario quiere registrar un â€œArmaâ€ como elemento asociado, sin incluir un nÃºmero de serial, el sistema muestra el mensaje de que debe llenar los campos que son obligatorios; en este caso, muestra los tres campos de seriales: primario, secundario y terciario, como obligatorios, cuando con tan solo introducir uno de ellos, permite asociar el elemento. DeberÃ­a mostrar un mensaje que diga â€œDebe llenar al menos un campoâ€.', NULL, NULL, 14),
(122, '2018-10-09 18:16:28', 70, '3888000', 116, 76, '19', '2018-10-01', '0000-00-00', 64, 78, 'No estÃ¡n registrados los nombres de las aerolÃ­neas. Las aerolÃ­neas son administrables desde el mÃ³dulo de AdministraciÃ³n.', NULL, NULL, 14),
(123, '2018-10-09 18:17:43', 70, '3888000', 116, 76, '20', '2018-10-01', '0000-00-00', 64, 78, 'Al imprimir el reporte de sistema, no aparece la descripciÃ³n ni las caracterÃ­sticas del equipaje.', NULL, NULL, 14),
(127, '2018-10-09 18:24:34', 70, '3888000', 116, 76, '21', '2018-10-01', '0000-00-00', 64, 78, 'Aparece una â€œEntidadâ€ que no corresponde a nuestro PaÃ­s.', '', '', 14),
(129, '2018-10-09 18:31:01', 70, '3888000', 116, 76, '22', '2018-10-01', '0000-00-00', 64, 78, 'En Diligencia Verificar en los Casos de Uso, la descripciÃ³n de los campos â€œFechas de CreaciÃ³nâ€, â€œRemisiÃ³nâ€ y â€œRealizaciÃ³nâ€; por ejemplo, las de creaciÃ³n y realizaciÃ³n parecieran la misma a nivel conceptual, cuando las de â€œRealizaciÃ³nâ€ deberÃ­a llamarse â€œFecha de AutorizaciÃ³nâ€.', NULL, NULL, 14),
(130, '2018-10-09 18:32:40', 70, '3888000', 116, 76, '23', '2018-10-01', '0000-00-00', 64, 78, 'Cuando el usuario presiona el botÃ³n de Incluir sin validar el nÃºmero de expediente, el sistema da un â€œha ocurrido una excepciÃ³nâ€.  En estos momentos el sistema estÃ¡ validando la informaciÃ³n del expediente. Se podrÃ­a solicitar la validaciÃ³n del formato del nÃºmero del expediente ya que el mensaje que muestra al colocar un nÃºmero con un formato equivocado es que â€œEl No. de expediente investigativo no se encuentra en el sistema. Por favor rectifique los datos.â€ Y deberÃ­a mostrar el mensaje que diga â€œEl Formato de NÃºmero de Expediente es Incorrectoâ€.', NULL, NULL, 14),
(131, '2018-10-09 18:34:47', 70, '3888000', 116, 76, '12', '2018-10-01', '0000-00-00', 64, 78, 'Cuando el usuario le da a la opciÃ³n â€œNuevoâ€ y luego consulta para asociar un Denunciante JurÃ­dico de la lista, el sistema no provee la opciÃ³n de seleccionarlo. Los Entes Externos son administrables desde el mÃ³dulo de AdministraciÃ³n.', NULL, NULL, 14),
(132, '2018-10-09 18:36:05', 70, '3888000', 116, 76, '24', '2018-10-01', '0000-00-00', 64, 78, 'En Aprobaciones / Consulta de Orden de Allanamiento Cuando el usuario hace la consulta, el sistema muestra mensaje de un â€œError Excepcionalâ€.', NULL, NULL, 14),
(133, '2018-10-09 18:39:40', 70, '3888000', 116, 76, '25', '2018-10-01', '0000-00-00', 64, 78, 'Cuando el usuario presiona el botÃ³n de â€œGuardarâ€, el sistema muestra mensaje de un â€œError Excepcionalâ€.', NULL, NULL, 14),
(134, '2018-10-09 18:46:26', 70, '3888000', 116, 76, '26', '2018-10-01', '0000-00-00', 64, 78, 'En Orden de Allanamiento a partir de una Solicitud Los â€œDatos de la Ordenâ€ el â€œhÃ­per vinculoâ€ debe estar despuÃ©s del nÃºmero de la solicitud (presenta lo siguiente: â€œCXCXâ€), ademÃ¡s falta mostrar la â€œHora de la Orden de Allanamientoâ€.', NULL, NULL, 14),
(135, '2018-10-09 18:47:37', 70, '3888000', 116, 76, '27', '2018-10-01', '0000-00-00', 64, 78, 'Cuando el usuario cambiar la â€œDependencia Remitenteâ€ del â€œEnte Externoâ€ a â€œEnte Policialâ€ y viceversa, no cambia el campo que corresponde al nÃºmero de la comunicaciÃ³n, ademÃ¡s muestra mensaje de error y de campos del â€œEnte Externoâ€.', NULL, NULL, 14),
(136, '2018-10-09 18:48:56', 70, '3888000', 116, 76, '28', '2018-10-01', '0000-00-00', 64, 78, 'En Incluir Oficio de Reapertura Cuando el usuario presiona el botÃ³n de â€œRegistrarâ€ y especifica una fecha de emisiÃ³n del Oficio de Reapertura menor a la fecha de la denuncia, el sistema no muestra el error: â€œLa fecha seleccionada no puede ser menor que la fecha de apertura del Expedienteâ€.', NULL, NULL, 14),
(137, '2018-10-09 18:50:18', 70, '3888000', 116, 76, '29', '2018-10-01', '0000-00-00', 64, 78, 'En Acta de Entrevista El sistema no valida: persona, fecha ni hora de la entrevista; lo que permite entrevistar la misma persona el mismo dÃ­a a la misma hora. AdemÃ¡s se puede citar a la persona a una hora anterior a la elaboraciÃ³n de la entrevista. NOTA: solo valida que la fecha de RealizaciÃ³n no sea menor a la fecha de apertura del expediente.', NULL, NULL, 14),
(138, '2018-10-09 18:52:00', 70, '3888000', 116, 76, '30', '2018-10-01', '0000-00-00', 64, 78, 'En Acta de CitaciÃ³n Formal El sistema no valida: â€œpersonaâ€, â€œfechaâ€, â€œhoraâ€ ni â€œlugar de la cita formalâ€; lo que permite, citar la misma persona el mismo dÃ­a a la misma hora en un mismo lugar. AdemÃ¡s se puede citar a una persona a una hora anterior a la elaboraciÃ³n de la cita. NOTA: solo valida que la fecha de RealizaciÃ³n no sea menor a la fecha de apertura del expediente. AdemÃ¡s el sistema permite que una misma persona que estÃ¡ citada, pueda ser entrevistada el mismo dÃ­a a la misma hora, en el mismo lugar y tambiÃ©n en el mismo sitio del suceso.', NULL, NULL, 14),
(139, '2018-10-09 18:53:40', 70, '3888000', 116, 76, '31', '2018-10-01', '0000-00-00', 64, 78, 'En Acta de IncineraciÃ³n de Sustancias Permite incluir a una Acta de IncineraciÃ³n de Sustancias, dos veces al mismo â€œEnte Policialâ€ o â€œEnte Externoâ€, como autoridades involucradas.', NULL, NULL, 14),
(141, '2018-10-09 19:00:03', 70, '3888000', 116, 76, '32', '2018-10-01', '0000-00-00', 64, 78, 'En Agenda de Trabajo Los documentos aprobados que deberÃ­an quedar almacenados temporalmente en la funcionalidad â€œBorradoresâ€ (como lo indica su descripciÃ³n), el sistema no lo cumple; y los que fueron â€œAprobados y Enviadosâ€, que deberÃ­an quedar almacenados permanentemente en â€œArchivosâ€, tampoco lo hace.', NULL, NULL, 14),
(142, '2018-10-09 19:01:15', 70, '3888000', 116, 76, '33', '2018-10-01', '0000-00-00', 64, 78, 'En Acta Procesal â€“ Consultar Documentos asociados Cuando el usuario introduce una fecha â€œDesdeâ€ menor a la fecha  de creaciÃ³n, luego de arrojar el mensaje de error, al momento de querer cambiar dicha fecha, presionando el botÃ³n â€œNueva BÃºsquedaâ€, el sistema no limpia los campos y debo ir directamente a cambiar la fecha por la correcta.', NULL, NULL, 14),
(143, '2018-10-09 19:02:36', 70, '3888000', 116, 76, '34', '2018-10-01', '0000-00-00', 64, 68, 'En general Que se respete el correlativo de las comunicaciones, el sistema permite registrar el mismo nÃºmero de comunicaciÃ³n, pero con fecha anterior.', 'No Procede', '', 14),
(144, '2018-10-09 19:03:53', 70, '3888000', 116, 76, '35', '2018-10-01', '0000-00-00', 64, 78, 'Verificar por quÃ© algunas pantallas se descuadran y solucionarlo', NULL, NULL, 14),
(145, '2018-10-09 19:04:58', 70, '', 116, 76, '36', '2018-10-01', '0000-00-00', 64, 78, 'Al estar registrada una persona, no permite modificar (en identificaciÃ³n de persona) los datos de la misma, si desde un principio de registra con un nÃºmero de cedula errÃ³neo.', NULL, NULL, 14),
(146, '2018-10-09 19:06:08', 70, '3888000', 116, 76, '37', '2018-10-01', '2018-10-01', 64, 67, 'SÃ­ un acta procesal estÃ¡ dictaminada el sistema no debe permitir que le asocien una pd-1, ej V-12.380.049 ver trazas.', 'Procesado', '', 14),
(147, '2018-10-09 19:07:20', 70, '3888000', 116, 76, '38', '2018-10-01', '0000-00-00', 64, 78, 'deberÃ­a crear dos campos en la pestaÃ±a â€œInicio de InvestigaciÃ³nâ€ para incluir el nÃºmero telefÃ³nico y la direcciÃ³n de correo electrÃ³nico del denunciante y que al menos el primero sea obligatorio.', NULL, NULL, 14),
(148, '2018-10-09 19:08:43', 70, '3888000', 116, 76, '39', '2018-10-01', '0000-00-00', 64, 78, 'En la funcionalidad Imprimir/Exportar Es necesario hacer una revisiÃ³n para que no sean generadas hojas en blanco, ya que esto ocasiona un problema sobre todo al remitir el expediente a fiscalÃ­a por la cantidad de hojas que es reflejado en el reporte.', NULL, NULL, 14),
(149, '2018-10-10 13:51:19', 70, '3888000', 116, 76, '40', '2018-10-01', '0000-00-00', 66, 78, '         Incluir un gestor de correcciÃ³n ortogrÃ¡fica', NULL, NULL, 14),
(150, '2018-10-10 13:52:25', 70, '3888000', 116, 76, '41', '2018-10-01', '0000-00-00', 66, 78, 'Se debe estandarizar y mejorar las imÃ¡genes que se adjuntan al sistema en calidad, posiciÃ³n, resoluciÃ³n', NULL, NULL, 14),
(151, '2018-10-10 13:53:36', 70, '3888000', 116, 76, '42', '2018-10-01', '0000-00-00', 66, 78, 'Permitir adjuntar la huella dactilar a las denuncias.', NULL, NULL, 14),
(152, '2018-10-10 13:56:42', 70, '3888000', 116, 76, '43', '2018-10-01', '0000-00-00', 66, 78, 'Incluir la firma digital para la aprobaciÃ³n de documentos.', NULL, NULL, 14),
(153, '2018-10-10 13:58:08', 70, '3888000', 116, 76, '44', '2018-10-01', '0000-00-00', 66, 78, 'Colocar en orden alfabÃ©tico las opciones de las listas desplegable para su eficiente uso.', NULL, NULL, 14),
(154, '2018-10-10 13:59:12', 70, '3888000', 116, 76, '45', '2018-10-01', '0000-00-00', 66, 78, 'Colocar mensaje que especifique el tamaÃ±o y la resoluciÃ³n mÃ¡xima de las fotos al registrar una PD1 (mÃ¡ximo 1024x768 megapÃ­xeles).', NULL, NULL, 14),
(155, '2018-10-10 14:00:08', 70, '3888000', 116, 76, '46', '2018-10-01', '0000-00-00', 66, 78, 'Incluir una lista desplegable para las compaÃ±Ã­as de seguro cuando se tilde la opciÃ³n de vehÃ­culo asegurado.', NULL, NULL, 14),
(156, '2018-10-10 14:03:52', 70, '3888000', 116, 76, '47', '2018-10-01', '0000-00-00', 66, 78, 'Al imprimir un acta procesal presenta error en el tÃ­tulo de la columna: â€œcreaciÃ³nâ€, ya que muestra es la fecha de la denuncia, la etiqueta de la columna debe ser â€œFecha de Denunciaâ€', NULL, NULL, 14),
(157, '2018-10-10 15:11:00', 70, '3888000', 116, 76, '48', '2018-10-01', '0000-00-00', 66, 78, 'El sistema no permite ejecutar un oficio de requerimiento para registrar una entrega de un vehÃ­culo que posee dos actas procesales en la cual en una tiene el estado â€œRecuperado sin Entregaâ€ y en la otra â€œPlaca Solicitadaâ€.', NULL, NULL, 14),
(158, '2018-10-10 15:13:05', 70, '3888000', 116, 76, '49', '2018-10-01', '0000-00-00', 66, 78, 'InvestigaciÃ³n Penal  Registro  Inicio de InvestigaciÃ³n Penal Se requiere que el sistema permita  dejar con estado SOLICITADO a una persona cuando la Naturaleza del Delito sea \"Contra la AdministraciÃ³n de Justicia\" y el Tipo de Delito sea \"Fuga de Detenido\".', NULL, NULL, 14),
(159, '2018-10-10 15:14:40', 70, '3888000', 116, 76, '50', '2018-10-01', '0000-00-00', 66, 78, 'InvestigaciÃ³n Penal  Consulta  Acta Procesal Al generar un acta procesal los reportes aparecen incompletos, es decir, cuando el expediente tiene asociado informes periciales respondidos, estos aparecen sin el contenido, sÃ³lo referenciando el nÃºmero del informe.', NULL, NULL, 14),
(160, '2018-10-10 15:30:52', 70, '3888000', 116, 76, '51', '2018-10-01', '0000-00-00', 64, 78, 'Al consultar trazas de un elemento Los usuarios deshabilitados deben ser visualizados para el momento de efectuar auditoria de trazas.', NULL, NULL, 30),
(161, '2018-10-10 15:32:12', 70, '3888000', 116, 76, '52', '2018-10-01', '0000-00-00', 64, 78, 'Al consultar trazas de un elemento  Al efectuar la integracion de dos (02) cedulas, y consultar el elemento persona integrado, por auditoria, no refleja los datos anteriores. Ejm: 16472014 se corrigio a C.I 23688399 y eso no se refleja en las trazas, asÃ­ como al momento de consultar el elemento mod o intregrado no me refleja el historico de las trazas ejm: 10422434', NULL, NULL, 14),
(162, '2018-10-10 15:33:48', 70, '3888000', 116, 76, '53', '2018-10-01', '0000-00-00', 64, 78, 'El elemento armas Al verificar las trazas de armas de fuego en general, no se visualiza el historico.', NULL, NULL, 30),
(163, '2018-10-10 15:35:06', 70, '3888000', 116, 76, '54', '2018-10-01', '0000-00-00', 64, 78, 'Auditoria entidad debe registrar las trazas de los elementos que sean asociados en el sistema hasta el momento de su disociacion ejm placa A16BG3G.', NULL, NULL, 30),
(164, '2018-10-10 15:36:19', 70, '3888000', 116, 76, '55', '2018-10-01', '0000-00-00', 66, 78, '             Revisar la traza de depuraciÃ³n de usuario.', NULL, NULL, 30),
(165, '2018-10-10 15:37:27', 70, '3888000', 116, 76, '56', '2018-10-01', '0000-00-00', 64, 78, 'Todos los mÃ³dulos del Sistema Policial deben dejar trazas Todos los modulos que integran el Sistema de Investigacion e InformaciÃ³n Policial, deben ser auditables. Ejemplo mÃ³dulos de Criminalistica, ciencias forenses, inv internas, etc.', NULL, NULL, 30),
(166, '2018-10-11 13:40:05', 70, '3888000', 116, 76, '57', '2018-10-01', '0000-00-00', 64, 78, 'Al registrar una evidencia, en la pantalla asociar fotÃ³grafo no permite que el funcionario sea el colector, y en ocasiones el mismo funcionario realiza ambas funciones.', NULL, NULL, 17),
(167, '2018-10-11 13:42:13', 70, '3888000', 116, 76, '58', '2018-10-01', '0000-00-00', 64, 78, 'Este MÃ³dulo no tiene correcciones, modificacion y auditorÃ­a.', NULL, NULL, 15),
(168, '2018-10-11 13:43:21', 70, '3888000', 116, 76, '59', '2018-10-01', '0000-00-00', 65, 78, 'En los expedientes Disciplinarios, cuya medida sea destituciÃ³n, al momento de efectuar el cambio de estatus, deberia ejecutarlo directamente de la tabla de funcionario y actualizar el status como DESTITUIDO.', NULL, NULL, 15),
(169, '2018-10-11 13:44:20', 70, '3888000', 116, 76, '60', '2018-10-01', '0000-00-00', 64, 78, 'La Dependencia Receptora es InspectorÃ­a General Nacional, la misma no le remite a ningÃºn otro Despacho, ya que es esta quien Organiza, Administra y Dirige el registro automatizado; segÃºn el Art 9 del Reglamento de RÃ©gimen Disciplinario de esta InstituciÃ³n.', NULL, NULL, 15),
(170, '2018-10-11 13:45:37', 70, '3888000', 116, 76, '61', '2018-10-01', '0000-00-00', 64, 78, 'Para eliminar un acta procesal o un expedientes disciplinarios, se requiere eliminar las diligencias asociadas, lo cual no es permitido por el Sistema, por lo tanto es necesario crear una opcion que permita ejecutar este proceso', NULL, NULL, 15),
(171, '2018-10-11 13:50:16', 70, '3888000', 116, 76, '62', '2018-10-01', '0000-00-00', 66, 78, 'El campo Defensor no sea Obligatorio ya que el funcionario puede ejercer su Auto Defensa.', NULL, NULL, 15),
(172, '2018-10-11 13:52:14', 70, '3888000', 116, 76, '63', '2018-10-01', '0000-00-00', 66, 78, 'Incluir por el mÃ³dulo de correspondencia de entrada las Medidas de Asistencia Obligatoria y Voluntarias aplicada por Falta Disciplinaria.', NULL, NULL, 15),
(173, '2018-10-11 13:53:28', 70, '3888000', 116, 76, '64', '2018-10-01', '0000-00-00', 66, 78, 'Incluir un campo donde se pueda seleccionar los dos (02) tipos de Asistencia las cuales son Voluntaria y Obligatoria.', NULL, NULL, 15),
(174, '2018-10-11 14:07:39', 70, '3888000', 116, 76, '65', '2018-10-01', '0000-00-00', 64, 78, 'Basados en la implementacion del Nuevo formato de planilla PD-1,  validar numericamente por lotes asignados a cada Despacho.', NULL, NULL, 10),
(180, '2018-10-11 14:30:58', 70, '3888000', 116, 76, '66', '2018-10-01', '0000-00-00', 64, 78, 'Discriminar en la tabla de funcionarios ACTIVOS Y NO ACTIVOS, para faciltar las labores al momento de asignar las comunicaciÃ³nes.', NULL, NULL, 10),
(181, '2018-10-11 14:32:36', 70, '3888000', 116, 76, '67', '2018-10-01', '0000-00-00', 64, 78, 'Al momento de efectuar alguna modificaciÃ³n a la Data relacionada con funcionarios de la InstituciÃ³n con Registros Policiales, genera un error, pues los elimina como funcionario.', '', '', 10),
(182, '2018-10-11 14:34:34', 70, '3888000', 116, 76, '68', '2018-10-01', '0000-00-00', 64, 78, 'Al generar el reporte de bÃºsqueda, solo refleja 100 registros. Cuando excede de esta cantidad de registros exportar a un archivo de texto.', NULL, NULL, 10),
(183, '2018-10-11 14:35:31', 70, '3888000', 116, 76, '69', '2018-10-01', '0000-00-00', 64, 78, 'En la ubicaciÃ³n del funcionario, se necesita que se corrija el error que se estÃ¡ presentando, ya que cuando se cambia de ubicaciÃ³n al funcionario en el mÃ³dulo de anÃ¡lisis de informaciÃ³n, en algunos casos no queda reflejado en el mÃ³dulo de administraciÃ³n.', NULL, NULL, 10),
(184, '2018-10-11 14:38:16', 70, '3888000', 116, 76, '70', '2018-10-01', '0000-00-00', 64, 78, 'En el reporte que muestra el sistema de un usuario (ente externo), no se refleja el cargo que tiene.', NULL, NULL, 10),
(185, '2018-10-11 14:45:06', 70, '3888000', 116, 76, '71', '2018-10-01', '0000-00-00', 64, 78, 'En el reporte que muestra el sistema de un usuario (ente externo), no se refleja el cargo que tiene.', NULL, NULL, 10),
(186, '2018-10-11 14:46:36', 70, '3888000', 116, 76, '72', '2018-10-01', '0000-00-00', 64, 78, 'Cuando se cambia un jefe de una dependencia a otra el sistema no deberÃ­a aceptar asociarla como jefe de otro despacho. Hace falta una validaciÃ³n.', NULL, NULL, 10),
(187, '2018-10-11 14:47:25', 70, '3888000', 116, 76, '73', '2018-10-01', '0000-00-00', 64, 78, 'Falla en el ingreso de los usuarios al SIIPOL, aun estando adscritos al despacho.', NULL, NULL, 10),
(188, '2018-10-11 14:49:51', 70, '3888000', 116, 76, '74', '2018-10-01', '0000-00-00', 66, 78, 'Crear un perfil para entes externos, el cual solo permita visualizar los elementos solicitados, que guarden relacion con las funciones del despacho, varios perfiles dependiendo de las funciones del ente, (Ejm: intt: vehiculos sol y rec sin entrega)', NULL, NULL, 10),
(189, '2018-10-11 14:50:51', 70, '3888000', 116, 76, '75', '2018-10-01', '0000-00-00', 66, 78, 'En el modificar usuario separar el cargo del nombre y apellidos y colocarlo en otro campo.', NULL, NULL, 10),
(190, '2018-10-11 14:51:43', 70, '3888000', 116, 76, '76', '2018-10-01', '0000-00-00', 66, 78, 'Colocar el campo de cargo en el reporte PDF. (Consultar Usuario).', NULL, NULL, 10),
(191, '2018-10-11 14:52:37', 70, '', 116, 76, '77', '2018-10-01', '0000-00-00', 66, 78, 'Los funcionarios que tienen clave de modificaciÃ³n deberÃ­an tener doble pantalla de Seguridad.', NULL, NULL, 10),
(192, '2018-10-11 14:53:28', 70, '3888000', 116, 76, '78', '2018-10-01', '0000-00-00', 66, 78, 'Agregar automÃ¡ticamente al momento de realizar una  transferencia de despacho a un usuario que ya existe en el sistema,  debe conservarse el Perfil BÃ¡sico por defecto.', NULL, NULL, 10),
(193, '2018-10-11 14:54:45', 70, '3888000', 116, 76, '79', '2018-10-01', '0000-00-00', 66, 78, 'En la opciÃ³n Usuarios Procesados una vez que se realiza la consulta, nos muestra la informaciÃ³n de los diferentes usuarios, ademÃ¡s una serie de botones para realizar diferentes opciones. ', NULL, NULL, 10),
(194, '2018-10-11 14:56:23', 70, '3888000', 116, 76, '80', '2018-10-01', '0000-00-00', 64, 78, 'En el botÃ³n Reporte de Notificados Actualizar el formato, tal y como se muestran en los reportes de los demÃ¡s mÃ³dulos.', NULL, NULL, 10),
(195, '2018-10-11 14:57:44', 70, '3888000', 116, 76, '81', '2018-10-01', '0000-00-00', 66, 78, 'Una vez que muestre la informaciÃ³n del usuario, debe aparecer tambiÃ©n, la fecha de nacimiento, el correo y el nÃºmero de telÃ©fono del funcionario a consultar.', NULL, NULL, 10),
(196, '2018-10-11 14:58:59', 70, '3888000', 116, 76, '82', '2018-10-01', '0000-00-00', 66, 78, 'Para crear o modificar perfiles, se requiere incluir un BotÃ³n Pasar Todos cuando se van a incluir permisos', NULL, NULL, 10),
(197, '2018-10-11 15:01:14', 70, '3888000', 116, 76, '83', '2018-10-01', '0000-00-00', 66, 78, 'Poder migrar el usuario de los funcionarios internos a externos al irse de comisiÃ³n de servicio y de externo a interno cuando el funcionario regresa de comisiÃ³n.', NULL, NULL, 10),
(198, '2018-10-11 15:03:07', 70, '3888000', 116, 76, '84', '2018-10-01', '0000-00-00', 66, 78, 'Colocar en la opciÃ³n Usuarios Procesados, en uno de sus botones la exportaciÃ³n de los datos de los usuarios que se le hallan realizados ampliaciÃ³n de perfil.', NULL, NULL, 10),
(199, '2018-10-11 15:03:57', 70, '3888000', 116, 76, '85', '2018-10-01', '0000-00-00', 66, 78, 'Al consultar un usuario visualizar todos los campos actuales agregando los que se soliciten incluir en la creaciÃ³n de usuario, ademÃ¡s, mostrar Ãºltima fecha y hora de conexiÃ³n del usuario.', NULL, NULL, 10),
(200, '2018-10-11 15:04:55', 70, '3888000', 116, 76, '86', '2018-10-01', '0000-00-00', 66, 78, 'Incluir generador de claves aleatorias de los usuarios que sean enviados al correo institucional del funcionario al momento de ser superada las preguntas de seguridad. Clave que sÃ³lo sea visualizada en el correspondiente funcionario, dueÃ±o del usuario, en su correo y no sea posible conocer por los operadores o personal de tecnologÃ­a que realice la depuraciÃ³n. DeberÃ¡ conservarse el modo de depuraciÃ³n utilizado actualmente bajo un perfil distinto para que sea asignado a un personal que se considere necesario.mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', 'Incluir generador de claves aleatorias de los usuarios que sean enviados al correo institucional del funcionario al mome', 'Incluir generador de claves aleatorias de los usuarios que sean enviados al correo institucional del funcionario al mome', 10),
(201, '2018-10-11 15:05:46', 70, '3888000', 116, 76, '87', '2018-10-01', '0000-00-00', 66, 78, 'Que la aplicaciÃ³n guarde la traza no solo de la direcciÃ³n IP desde donde se conecta sino que, ademÃ¡s, trace desde que direcciÃ³n fÃ­sica MAC.', NULL, NULL, 10),
(202, '2018-10-11 15:07:50', 70, '3888000', 116, 76, '88', '2018-10-01', '0000-00-00', 66, 78, 'Se necesita para el Departamento de seguridad que el sistema muestre las trazas de modificaciÃ³n del funcionario, que se realiza en el mÃ³dulo de anÃ¡lisis de informaciÃ³n.', NULL, NULL, 10),
(203, '2018-10-11 15:09:01', 70, '3888000', 116, 76, '89', '2018-10-01', '0000-00-00', 66, 78, 'Se desea que el sistema imprima en una sola hoja la informaciÃ³n reflejada del usuario del mÃ³dulo administraciÃ³n.', NULL, NULL, 10),
(204, '2018-10-11 15:10:10', 70, '3888000', 116, 76, '90', '2018-10-01', '0000-00-00', 66, 78, 'Crear un permiso denominado â€œRegistrar Localizar Personaâ€, que sea agregado al perfil AtenciÃ³n a la Victima, esto con la finalidad de que los usuarios que tengan asignado el perfil de transcriptor, puedan registrar como localizado a los ciudadanos.', NULL, NULL, 10),
(205, '2018-10-11 15:11:24', 70, '3888000', 116, 76, '91', '2018-10-01', '0000-00-00', 66, 78, 'Incluir un nomenclador para administrar compaÃ±Ã­as de seguro.', NULL, NULL, 10),
(206, '2018-10-11 15:14:36', 70, '3888000', 116, 76, '92', '2018-10-01', '0000-00-00', 64, 78, 'Los VehÃ­culos cuando van a ser asociados a un oficio de requerimiento y la data del INTT y contenga caracteres especiales no debe permitir asociarlo.', NULL, NULL, 8),
(207, '2018-10-11 15:15:21', 70, '3888000', 116, 76, '93', '2018-10-01', '0000-00-00', 64, 78, 'La hora de la guardia que aparece reflejada en el reporte, no debe ser siempre las 00:00, sino la que se selecciona para generar el mismo.', NULL, NULL, 8),
(208, '2018-10-11 15:16:30', 70, '3888000', 116, 76, '94', '2018-10-01', '0000-00-00', 64, 78, 'No se puede reversar un oficio de requerimiento. El sistema muestra mensaje â€œExisten modificaciones hechas por ese oficio de requerimiento y que se anexan a esteâ€.', NULL, NULL, 8),
(209, '2018-10-11 15:23:37', 70, '3888000', 116, 76, '95', '2018-10-01', '0000-00-00', 66, 78, 'Poder incluir todos los elementos al registrar una correspondencia de entrada en el caso de oficio de exclusiÃ³n, asÃ­ como al tribunal donde va dirigida.', NULL, NULL, 8),
(210, '2018-10-11 15:24:26', 70, '3888000', 116, 76, '96', '2018-10-01', '0000-00-00', 66, 78, 'Poder consultar los elementos y los tribunales que tienen correspondencia de entrada.', NULL, NULL, 8),
(211, '2018-10-11 15:25:23', 70, '3888000', 116, 76, '97', '2018-10-01', '0000-00-00', 66, 78, '   En la fecha, el mes debe comenzar por mayÃºscula.', NULL, NULL, 8),
(212, '2018-10-11 15:30:06', 70, '3888000', 116, 76, '98', '2018-10-01', '0000-00-00', 66, 78, 'En el nombre del jefe del despacho, revisar la sangrÃ­a.', NULL, NULL, 8),
(213, '2018-10-11 15:31:48', 70, '3888000', 116, 76, '99', '2018-10-01', '0000-00-00', 66, 78, 'Las horas de los numerales no estÃ¡n consecutivas, es decir, no aparecen organizadas correlativamente.', NULL, NULL, 8),
(214, '2018-10-11 15:32:50', 70, '3888000', 116, 76, '100', '2018-10-01', '0000-00-00', 66, 78, 'Crear en la correspondencia de salida un componente para adjuntar archivos e imagen de huella, la cual esta Ãºltima debe ser adjuntada al documento seleccionado.', '', '', 8),
(215, '2018-10-11 15:33:51', 70, '3888000', 116, 76, '101', '2018-10-01', '0000-00-00', 66, 78, 'Incluir un renglÃ³n en el sistema que permita indicar entes externos a nivel internacional, ya que la mayorÃ­a de las solicitudes son de otros paÃ­ses.', NULL, NULL, 8),
(216, '2018-10-11 15:34:50', 70, '3888000', 116, 76, '102', '2018-10-01', '0000-00-00', 66, 78, 'Gestionar Despacho - Consulta - Libro de Correspondencia En el Modulo de Gestion de Despacho, en el Listado de resultados de Busqueda del Libro de Correspondencia, modificar los campos de tipo de documento x Dependencia y Fecha de AprobaciÃ³n  por Asunto', NULL, NULL, 8),
(217, '2018-10-11 15:37:17', 70, '3888000', 116, 76, '103', '2018-10-01', '0000-00-00', 66, 78, 'Unificar la numeracion correlativa de la correspondencia para las comunicaciones de salida de Ente Policial y Ente externo', NULL, NULL, 8),
(218, '2018-10-11 15:40:44', 70, '3888000', 116, 61, '104', '2018-10-01', '0000-00-00', 64, 78, 'En la pantalla al registrar solicitud de inspecciÃ³n de seguridad Falta incluir el tipo de inspecciÃ³n: â€œREINSPECCIONâ€.', '', '', 33),
(219, '2018-10-11 15:41:46', 70, '3888000', 116, 76, '105', '2018-10-01', '0000-00-00', 64, 78, 'Falta la opciÃ³n de Consultar las certificaciones de seguridad y el control de cuantas se han realizado.', '', '', 33),
(220, '2018-10-11 15:44:32', 70, '3888000', 116, 76, '106', '2018-10-01', '0000-00-00', 64, 78, 'Este MÃ³dulo no tiene correcciones, modificacion y auditorÃ­a.', NULL, NULL, 13),
(223, '2018-10-11 15:54:00', 70, '3888000', 116, 76, '108', '2018-10-01', '0000-00-00', 64, 78, 'Gestionar InformaciÃ³n Documental al crear una informaciÃ³n documental, no muestra la imagen incluida.', NULL, NULL, 13),
(224, '2018-10-11 15:55:20', 70, '3888000', 116, 76, '109', '2018-10-01', '0000-00-00', 64, 78, 'En el proceso Incluir Carta Rogatoria  En grupo de documento agregar al menÃº desplegable â€œcartaâ€, y el tipo de documento agregar al menÃº desplegable: â€œcarta rogatoriaâ€ ya que no aparecen esas opciones para poder seleccionar y continuar con el proceso.', NULL, NULL, 13),
(225, '2018-10-11 15:56:36', 70, '3888000', 116, 76, '110', '2018-10-01', '0000-00-00', 64, 78, 'En el proceso Incluir Oficio de Traslado de Persona Repatriada En tipo de documento agregar al menÃº desplegable: â€œoficio de traslado de persona/repatriaciÃ³nâ€ ya que no aparece esa opciÃ³n para poder seleccionar y continuar con el proceso.', NULL, NULL, 13),
(226, '2018-10-11 17:35:32', 70, '3888000', 116, 76, '111', '2018-10-01', '0000-00-00', 64, 78, 'En tipo de documento agregar al menÃº desplegable: â€œorden de detenciÃ³n con fines de extradiciÃ³nâ€ ya que no aparece esa opciÃ³n para poder seleccionar y continuar con el proceso.', NULL, NULL, 13),
(227, '2018-10-11 17:37:00', 70, '3888000', 116, 76, '112', '2018-10-01', '0000-00-00', 64, 78, 'En el proceso Incluir Acta de Entrega en tipo de diligencia agregar al menÃº desplegable: â€œacta de entregaâ€ ya que no aparece esa opciÃ³n para poder seleccionar y continuar con el proceso.', NULL, NULL, 13),
(228, '2018-10-11 17:38:10', 70, '3888000', 116, 76, '113', '2018-10-01', '0000-00-00', 64, 78, 'En el proceso Incluir Minuta de InformaciÃ³n En la pestaÃ±a Elementos no aparece botÃ³n que permita asociar los mismos', NULL, NULL, 13),
(229, '2018-10-11 17:39:03', 70, '3888000', 116, 76, '114', '2018-10-01', '0000-00-00', 64, 78, 'Chequear en todos los procesos la opciÃ³n modificar, ya que no se muestra botÃ³n.', NULL, NULL, 13),
(230, '2018-10-11 17:48:45', 70, '3888000', 116, 76, '115', '2018-10-01', '0000-00-00', 64, 78, 'En el proceso Ver Datos Libro Dosier No se refleja el nÃºmero del expediente.', NULL, NULL, 13),
(231, '2018-10-11 17:50:00', 70, '3888000', 116, 76, '116', '2018-10-01', '0000-00-00', 64, 78, 'En el proceso Solicitud de Cese de BÃºsqueda Al crear o consultar un elemento no muestra la informaciÃ³n guardada relacionada a la pestaÃ±a elementos.', NULL, NULL, 13),
(232, '2018-10-11 17:51:07', 70, '3888000', 116, 76, '117', '2018-10-01', '0000-00-00', 64, 78, 'Al generar un expediente de interpol y darle al botÃ³n incluir, generÃ³ Error en sistema.', NULL, NULL, 13),
(233, '2018-10-11 17:52:03', 70, '3888000', 116, 76, '118', '2018-10-01', '0000-00-00', 64, 78, 'Para poder asociar una direcciÃ³n de sitio de suceso internacional es necesario que se valide por cuÃ¡l paÃ­s es solicitado el inicio del mismo, ya que es un campo obligatorio en el sistema.', NULL, NULL, 13),
(234, '2018-10-11 17:53:34', 70, '3888000', 116, 76, '119', '2018-10-01', '0000-00-00', 66, 78, 'Revisar la naturaleza del delito para gestionar dossier de otros paÃ­ses.', NULL, NULL, 13),
(235, '2018-10-11 17:54:42', 70, '3888000', 116, 76, '120', '2018-10-01', '0000-00-00', 66, 78, 'Modulo de Interpol: En el inicio de Investigacion del Dossier debe permitir la inclusion manual de la numeracion y en cuanto al delito, requiere colocar sitio de suceso y solo registra el campo de venezuela, deberia existir un renglon donde se registre el sitio exacto tanto nacional como internacionalmente.', NULL, NULL, 13),
(239, '2018-10-11 18:12:28', 70, '3888000', 116, 76, '121', '2018-10-01', '0000-00-00', 66, 78, 'Este MÃ³dulo no tiene correcciones, modificacion y auditorÃ­a', NULL, NULL, 27),
(240, '2018-10-11 18:13:29', 70, '3888000', 116, 76, '122', '2018-10-01', '0000-00-00', 66, 78, 'Adecuar los reportes segÃºn lo que especifica el Observatorio Venezolano de la Seguridad.', NULL, NULL, 27),
(241, '2018-10-11 18:50:49', 70, '3888000', 116, 76, '123', '2018-10-01', '0000-00-00', 64, 78, 'Este MÃ³dulo no tiene correcciones, modificacion y auditorÃ­a', NULL, NULL, 20),
(242, '2018-10-11 18:52:46', 70, '3888000', 116, 76, '124', '2018-10-01', '0000-00-00', 64, 78, 'Al momento de rechazar por el DACIP una comunicaciÃ³n, el sistema debe rectificar la misma y enviarla nuevamente con la misma numeraciÃ³n.', NULL, NULL, 20),
(243, '2018-10-11 18:53:57', 70, '3888000', 116, 76, '125', '2018-10-01', '0000-00-00', 64, 78, 'Al imprimir un dictamen el reporte de los registros policiales que presenta la persona arroja la fecha de creacion y debe ser la fecha de la denuncia del acta procesal', NULL, NULL, 20),
(244, '2018-10-11 18:55:04', 70, '3888000', 116, 76, '126', '2018-10-01', '0000-00-00', 66, 78, 'El sistema deberÃ­a permitir cargar los oficios para dejar sin efectos las solicitudes y personas requeridas por los Ã³rganos jurisdiccionales, solo permite la inclusiÃ³n de los oficios para exclusiÃ³n de las personas.', NULL, NULL, 20),
(245, '2018-10-11 18:58:18', 70, '3888000', 116, 76, '127', '2018-10-01', '0000-00-00', 64, 78, 'Agregar en el Modulo de Asesoria Juridica, la opcion de corregir o eliminar Nro. De Carpeta de ExclusiÃ³n, (eliminar la carpeta 37702, ya que, le corresponde 35702). Cuando se consulte una cedula en este modulo se visualicen cuantos oficios de requerimientos o exclusiÃ³n tiene asociado. (RPG)', NULL, NULL, 20),
(246, '2018-10-11 18:59:24', 70, '3888000', 116, 76, '128', '2018-10-01', '0000-00-00', 66, 78, 'Agregar en el Modulo de Asesoria un sub.modulo de oficios de exclusion, tal cual como el de carpeta de exclusion, y permitir adicionar personas al oficio ya relacionado.:  Agregar , corregir y ver los oficios y adicionar persona a oficio', NULL, NULL, 20),
(247, '2018-10-11 19:02:58', 70, '3888000', 116, 76, '129', '2018-10-01', '0000-00-00', 64, 78, 'Al incluir una PD-1 y por error del usuario no asociÃ³ las caracterÃ­sticas fÃ­sicas, el sistema no permite la modificaciÃ³n, al menos que el usuario tenga clave de modificaciÃ³n. Debe existir un permiso especial para los usuarios que incluyan PD-1 de adicionar las caracterÃ­sticas fÃ­sicas o fotos.', 'Procesado', '', 22),
(248, '2018-10-11 19:04:19', 70, '3888000', 116, 76, '130', '2018-10-01', '0000-00-00', 66, 67, 'Las planillas de detenciÃ³n que se encuentren dictaminadas, no pueden visualizarlas los demÃ¡s perfiles, solo se puede ver por los del DACIP.', 'Procesado', '', 22),
(249, '2018-10-11 19:05:40', 70, '3888000', 116, 76, '131', '2018-10-01', '0000-00-00', 66, 78, 'Ajustar el Modelo de la plantilla de la PD-1 a la estructura de SIIPOL para que al momento de la impresiÃ³n el diseÃ±o de la pagina sea el correcto (diseÃ±o listo)', NULL, NULL, 19),
(250, '2018-10-11 19:19:03', 70, '3888000', 116, 76, '132', '2018-10-01', '0000-00-00', 64, 78, 'No permite modificar el pase luego de ser incluido el mismo.', NULL, NULL, 28),
(251, '2018-10-11 19:21:12', 70, '3888000', 116, 76, '133', '2018-10-01', '0000-00-00', 64, 78, 'Al consultar una persona para asociarle un pase, el sistema muestra dos coincidencias de la misma cÃ©dula cuando presenta registro con el estado Solicitado y con InformaciÃ³n Confidencial Uso Interno, debiendo mostrar sÃ³lo cuando tenga el primer estado.', NULL, NULL, 28),
(252, '2018-10-11 19:22:33', 70, '3888000', 116, 76, '134', '2018-10-01', '0000-00-00', 64, 78, 'El modulo debe permitir gestionar la guardia para mÃ¡s de un funcionario a la vez.', NULL, NULL, 28),
(253, '2018-10-11 19:25:20', 70, '3', 116, 76, '135', '2018-10-01', '0000-00-00', 64, 78, 'El modulo debe validar la fecha y hora sea vigente al gestionar una guardia', NULL, NULL, 28),
(254, '2018-10-11 19:28:03', 70, '3888000', 116, 76, '136', '2018-10-01', '0000-00-00', 64, 78, 'Al consultar una guardia de acceso el sistema pide las credenciales del funcionario y el rango de fecha exacto obligatoriamente, debiendo  ser con solo la credencial o con rango de fecha por periodo por cualquier criterio de bÃºsqueda.', NULL, NULL, 28),
(256, '2018-10-15 18:30:40', 70, '3888000', 116, 76, '137', '2018-10-01', '0000-00-00', 64, 78, 'Al modificar el nÃºmero correlativo de una persona para cambiarlo por el nÃºmero de cÃ©dula, se hace la actualizaciÃ³n y el sistema indica el siguiente mensaje â€œel elemento ya ha sido modificadoâ€, sin embargo, al realizar la consulta de dicho elemento, no genera ningÃºn cambio.', NULL, NULL, 11),
(257, '2018-10-15 18:31:58', 70, '3888000', 116, 76, '138', '2018-10-01', '0000-00-00', 64, 78, 'Al momento de realizar una modificaciÃ³n en la opciÃ³n de funcionario (Dependencia), el sistema se queda procesando y muestra la misma pantalla sin generar ningÃºn mensaje, sin embargo al consultar de nuevo al funcionario se visualiza que se ejecutÃ³ el cambio.', NULL, NULL, 11),
(258, '2018-10-15 18:32:50', 70, '3888000', 116, 76, '139', '2018-10-01', '0000-00-00', 64, 78, 'Al imprimir un acta procesal presenta error en el tÃ­tulo de la columna: â€œcreaciÃ³nâ€, ya que muestra es la fecha de la denuncia, la etiqueta de la columna debe ser â€œFecha de Denunciaâ€.', NULL, NULL, 11),
(259, '2018-10-15 18:37:41', 70, '3888000', 116, 76, '140', '2018-10-01', '2018-10-01', 64, 78, 'El sistema solo permite ejecutar un Oficio de Requerimiento para registrar la entrega de un vehÃ­culo si presenta status: solicitado, localizado, recuperado sin entregar, placa o motor solicitado o recuperado. En estos momentos no reconoce los estados Decomisado, VehÃ­culo Recuperado Sin Entregar/Placa Solicitada, VehÃ­culo  Recuperado Sin Entregar/Motor Solicitado y/o VehÃ­culo Recuperado Sin Entregar/Placa y Motor Solicitado.', 'Procesado', '', 11),
(260, '2018-10-15 18:58:01', 70, '3888000', 116, 76, '141', '2018-10-01', '0000-00-00', 64, 78, 'El sistema no permite ejecutar un oficio de requerimiento para registrar una entrega de un vehÃ­culo que posee dos actas procesales en la cual en una tiene el estado â€œRecuperado sin Entregaâ€ y en la otra â€œPlaca Solicitadaâ€.', NULL, NULL, 14),
(262, '2018-10-15 19:23:52', 70, '3888000', 116, 76, '142', '2018-10-01', '0000-00-00', 64, 78, 'Tabla de objeto denuncia no estÃ¡ colocando el id de denuncia y hasta la fecha existen mÃ¡s de 36000 relaciones perdidas en la base de datos, lo que ocasiona un error al momento de integrar los elementos.', NULL, NULL, 11),
(264, '2018-10-15 19:57:29', 70, '3888000', 116, 76, '143', '2018-10-01', '0000-00-00', 64, 78, 'Al consultar e imprimir la informacion del elemento persona en el oficio de requerimiento se visualiza el estado anterior, lo cual debe ser restringido por permisologia', NULL, NULL, 11),
(265, '2018-10-15 20:08:17', 70, '3888000', 116, 76, '144', '2018-10-01', '0000-00-00', 64, 78, 'Al consultar un funcionario con registros en SIIPOL (Denunciante), muestra su nÃºmero telefÃ³nico, lo cual no debe suceder segÃºn lo establecido en la Ley de ProtecciÃ³n de VÃ­ctimas.', NULL, NULL, 11),
(266, '2018-10-15 20:09:24', 70, '3888000', 116, 76, '145', '2018-10-01', '0000-00-00', 66, 78, 'Se debe permitir la opciÃ³n en comisiÃ³n asÃ­ como en el tipo de dependencia el Ã³rgano externo al que fue enviado, es necesario que asÃ­ como se permite migrar un usuario de interno a externo  o externo a interno pueda tambiÃ©n migrarse su usuario.', NULL, NULL, 11),
(267, '2018-10-15 20:10:40', 70, '3888000', 116, 76, '146', '2018-10-01', '0000-00-00', 66, 78, 'Se necesita crear permisos para consultar elementos (vehÃ­culo, personas, armas u objeto) en donde se pueda observar sÃ³lo el estado Solicitado con sus relaciones, para que sea asociado a los perfiles de Entes Externos.', NULL, NULL, 11),
(268, '2018-10-15 20:11:39', 70, '3888000', 116, 76, '147', '2018-10-01', '0000-00-00', 66, 78, 'Se necesita que ademÃ¡s de la consulta bÃ¡sica que se ve en VehÃ­culo INTT, se muestren los datos de los vehÃ­culos que no registran en el sistema de INTT tales como nÃºmero de certificado de origen, certificado preimpreso y fecha de emisiÃ³n.', NULL, NULL, 11),
(269, '2018-10-16 13:57:33', 70, '3888000', 116, 76, '148', '2018-10-01', '0000-00-00', 66, 78, 'En las Integraciones de VehÃ­culos falta colocar en el listado de coincidencias (Clase y tipo de VehÃ­culo).', NULL, NULL, 11),
(270, '2018-10-16 14:24:06', 70, '3888000', 116, 76, '149', '2018-10-01', '0000-00-00', 66, 78, 'Reversar los oficios de Requerimiento antes de la fecha del mes 06/, mes 07/, en la que la empresa Albet colocÃ³ el \"reverso de informaciÃ³n\".', 'PROCESADO', '', 11),
(271, '2018-10-16 14:26:10', 70, '3888000', 116, 76, '150', '2018-10-01', '0000-00-00', 66, 78, 'El sistema debe permitir integrar armas orgÃ¡nicas.', 'ESTO ESTA LISTO EN EL MODULO DE DOTACIÃ“N', '', 11),
(272, '2018-10-16 14:29:02', 70, '3888000', 116, 76, '151', '2018-10-01', '0000-00-00', 66, 78, 'Al consultar vehÃ­culo en el ver relaciones, se debe incluir los campos â€œplaca anteriorâ€ â€œserial chasisâ€, â€œaÃ±oâ€, â€œTipoâ€ y â€œusoâ€.', NULL, NULL, 11),
(273, '2018-10-16 14:30:06', 70, '3888000', 116, 76, '152', '2018-10-01', '0000-00-00', 66, 78, 'Pasar de funcionario interno a funcionario externo. Lo que se quiere es saber dÃ³nde estÃ¡ el funcionario en comisiÃ³n de servicios. Hacer una nueva tabla y vista donde se vea el nombre del funcionario, credencial, fecha inicio, fecha fin y en que Ente estÃ¡ prestando servicios.', NULL, NULL, 11),
(274, '2018-10-16 14:31:02', 70, '3888000', 116, 76, '153', '2018-10-01', '0000-00-00', 66, 78, 'El permiso de ver dictamen solo permite visualizar los elementos dictaminados por el mÃ³dulo de anÃ¡lisis de informaciÃ³n, sin embargo, existen otros perfiles que pueden visualizar dicha informaciÃ³n sin tener asociado ese permiso por el mÃ³dulo de historial policial.', NULL, NULL, 11),
(275, '2018-10-16 14:35:22', 70, '3888000', 116, 76, '154', '2018-10-01', '0000-00-00', 66, 78, '              Quitar validador, vehÃ­culos (VALSER).', NULL, NULL, 11),
(276, '2018-10-16 14:36:40', 70, '3888000', 116, 76, '155', '2018-10-01', '0000-00-00', 66, 78, 'Acordar las letras a usar para todo lo relacionado con INTT (caracteres especiales).', NULL, NULL, 11),
(277, '2018-10-16 14:39:28', 70, '3888000', 116, 76, '156', '2018-10-01', '0000-00-00', 66, 78, 'Poder verificar por vehÃ­culo INTT reporte con *(asterisco), colocando aÃ±o.', NULL, NULL, 11),
(278, '2018-10-16 14:45:00', 70, '3888000', 116, 76, '157', '2018-10-01', '0000-00-00', 64, 78, 'Este MÃ³dulo no tiene correcciones, modificaciÃ³n y auditoria.', NULL, NULL, 34),
(279, '2018-10-16 14:48:00', 70, '3888000', 116, 76, '158', '2018-10-01', '0000-00-00', 64, 78, 'Al asociar un arma que ya ha sido desincorporada, el sistema debe mostrar el siguiente mensaje â€œEl arma que intenta asociar ya ha sido desincorporadaâ€.', NULL, NULL, 34),
(280, '2018-10-16 14:49:30', 70, '3888000', 116, 76, '159', '2018-10-01', '0000-00-00', 64, 78, 'Al registrar un resguardo en bÃ³veda, se muestra un mensaje que dice â€œYa se ha creado una novedad en el Despachoâ€, pero al consultar la novedad no aparece registrada.', NULL, NULL, 34),
(281, '2018-10-16 14:50:48', 70, '3888000', 116, 76, '160', '2018-10-01', '0000-00-00', 64, 78, 'No se puede consultar la cantidad de armas que se encuentran en Resguardo en BÃ³veda, ni se puede realizar una entrega de esas armas luego de registradas.', NULL, NULL, 34),
(282, '2018-10-16 14:52:02', 70, '3888000', 116, 76, '161', '2018-10-01', '0000-00-00', 64, 78, 'Al consultar un arma que se encuentra resguardada en bÃ³veda el estado de esta sigue siendo â€œasignadaâ€, cuando deberÃ­a mostrar â€œResguardada en BÃ³vedaâ€.', NULL, NULL, 11),
(283, '2018-10-16 14:53:14', 70, '3888000', 116, 76, '162', '2018-10-01', '0000-00-00', 66, 78, 'Dar permisos a los Despachos a nivel nacional para que puedan consultar dotaciÃ³n de equipos policiales asignados a su dependencia.', NULL, NULL, 34),
(284, '2018-10-16 14:54:57', 70, '3888000', 116, 76, '163', '2018-10-01', '0000-00-00', 66, 78, 'Se solicita que se haga la asignaciÃ³n y reasignaciÃ³n directa a dependencia tal y como se hace para funcionario pero con armas largas.', NULL, NULL, 34),
(285, '2018-10-16 14:56:28', 70, '3888000', 116, 76, '164', '0000-00-00', '0000-00-00', 66, 78, 'El sistema no permite la integraciÃ³n de armas orgÃ¡nicas, debe existir un renglÃ³n para ejecutar esta acciÃ³n, Por perisologÃ­a.', NULL, NULL, 34),
(286, '2018-10-16 14:58:31', 70, '3888000', 116, 76, '165', '2018-10-01', '0000-00-00', 66, 78, 'DotaciÃ²n > Registro >Incluir Solicitud de Devolucion a Dependencia Al tildar un Ã¬tem y pasar de pÃ¡gina, el mismo queda desmarcado y debe ser agregado pÃ¡gina por pÃ¡gina los objetos agregados.', NULL, NULL, 34),
(287, '2018-10-16 14:59:58', 70, '3888000', 116, 76, '166', '2018-10-01', '0000-00-00', 66, 78, 'DotaciÃ²n > Registro  Ordenar los elementos por fecha mas reciente, ya que cuando se va a verificar algun Ã¬tem los mismos estan de forma desordenada.', NULL, NULL, 34),
(288, '2018-10-16 15:16:47', 70, '3888000', 116, 76, '167', '2018-10-01', '0000-00-00', 64, 78, 'Al pasar a SIIPOL un expediente histÃ³rico que tenÃ­a asociado un elemento con comentario, el mismo ya no se visualiza.', NULL, NULL, 31);
INSERT INTO `requerimiento` (`id`, `hora`, `cod_area_id`, `numero_tel_requerimiento`, `areac_id`, `tipo_de_solicitud_id`, `numero`, `fecha_documento`, `fecha_culm`, `tipo_de_requerimiento_id`, `status_id`, `descripcion`, `solucion`, `observaciones`, `Modulo_id`) VALUES
(289, '2018-10-16 15:19:18', 70, '3888000', 116, 76, '168', '0000-00-00', '0000-00-00', 64, 78, 'Al realizar una correcciÃ³n por el acta procesal, el sistema muestra el mensaje de haber realizado la actualizaciÃ³n; al consultar por SIIPOL no realiza dicha correcciÃ³n.', NULL, NULL, 12),
(290, '2018-10-16 15:21:01', 70, '3888000', 116, 76, '169', '2018-10-01', '0000-00-00', 64, 78, 'El sistema debe permitir eliminar las diligencias para poder disociar el acta procesal.', NULL, NULL, 12),
(291, '2018-10-16 15:23:39', 70, '3888000', 116, 76, '170', '2018-10-01', '0000-00-00', 66, 78, 'En el modulo de correcciones , se requiere la opciÃ³n de corregir tanto por oficio de requerimiento, como Capturas histÃ³ricas el  expediente de tribunal o fiscalÃ­a, las fechas y asÃ­ como el ente solicitante.', NULL, NULL, 12),
(292, '2018-10-16 15:24:51', 70, '3888000', 116, 76, '171', '2018-10-01', '0000-00-00', 66, 78, 'Incluir una opciÃ³n para modificar nÃºmero de carpetas de AsesorÃ­a JurÃ­dica.', NULL, NULL, 12),
(293, '2018-10-16 15:26:12', 70, '3888000', 116, 76, '172', '2018-10-01', '0000-00-00', 66, 78, 'Poder cambiar el estado de un acta procesal (Iniciado, En Curso, Remitido o Concluido).', NULL, NULL, 12),
(294, '2018-10-16 15:27:15', 70, '3888000', 116, 76, '173', '2018-10-01', '0000-00-00', 66, 78, 'Poder visualizar los elementos asociados a los oficios de requerimientos incluidos por otros despachos para poder eliminarlos o corregirlos.', NULL, NULL, 12),
(295, '2018-10-16 15:28:52', 70, '3888000', 116, 76, '174', '2018-10-01', '0000-00-00', 66, 78, 'Poder reversar comunicaciones que hayan sido aprobadas y enviadas por error, a menos que el despacho receptor ya las haya recepcionado.', NULL, NULL, 12),
(296, '2018-10-16 15:30:31', 70, '38880000', 116, 76, '175', '2018-10-01', '0000-00-00', 66, 78, 'En el mÃ³dulo de correcciones colocar un sub-Modulo a los fines de poder consultar los oficios de requerimientos de otros despachos que no han sido ejecutados. (Bien sea por el nÃºmero de oficio o por el elemento asociado)', NULL, NULL, 12),
(297, '2018-10-16 15:32:22', 70, '3888000', 116, 76, '176', '2018-10-01', '0000-00-00', 66, 78, 'Permitir la eliminaciÃ³n de notificaciones', NULL, NULL, 12),
(299, '2018-10-16 15:41:13', 70, '3888000', 116, 76, '177', '2018-10-01', '0000-00-00', 64, 78, 'En el modulo de captura solo se ven las capturas histÃ³rica, mas no, los oficios de requerimiento que tenga asociado a una persona en especifico, bien sea SOLICITADO o SIN EFECTO SOLICITUD.', NULL, NULL, 18),
(300, '2018-10-16 15:48:29', 70, '3888000', 116, 76, '178', '2018-10-01', '0000-00-00', 64, 78, 'El sistema no me permite consultar las solicitudes (SOLO BAE)', NULL, NULL, 32),
(301, '2018-10-16 15:50:17', 70, '3888000', 116, 76, '179', '2018-10-01', '0000-00-00', 64, 78, 'El sistema no me permite modificar las solicitudes', NULL, NULL, 32),
(302, '2018-10-16 15:52:15', 70, '3888000', 116, 76, '180', '2018-10-01', '0000-00-00', 64, 78, 'En incluir custodia de prisionero al asociar el tipo de ente deberÃ¡ de tener ademÃ¡s una interna (CICPC).', NULL, NULL, 32),
(303, '2018-10-16 15:53:33', 70, '3888000', 116, 76, '181', '2018-10-01', '0000-00-00', 64, 78, '', NULL, NULL, 32),
(304, '2018-10-16 15:55:07', 70, '3888000', 116, 76, '182', '2018-10-01', '0000-00-00', 64, 78, 'En incluir solicitud de custodia de personalidad si tildo valija diplomÃ¡tica no aparece reflejado en el reporte de sistema.', NULL, NULL, 32),
(305, '2018-10-16 15:56:21', 70, '3888000', 116, 76, '183', '2018-10-01', '0000-00-00', 64, 78, 'En el reporte de sistema verificar la etiqueta de la descripciÃ³n.', NULL, NULL, 32),
(306, '2018-10-16 15:57:32', 70, '', 116, 76, '184', '2018-10-01', '0000-00-00', 64, 78, 'En el reporte del sistema el campo de persona a custodia no deberÃ­a aparecer en una hoja aparte.', NULL, NULL, 32),
(307, '2018-10-16 15:59:02', 70, '3888000', 116, 76, '185', '2018-10-01', '0000-00-00', 64, 78, 'Para incluir la fecha de la custodia el sistema no permite colocar fecha posterior a la actual.', NULL, NULL, 32),
(308, '2018-10-16 16:00:43', 70, '3888000', 116, 76, '186', '2018-10-01', '0000-00-00', 64, 78, 'En el reporte que genera el sistema para responder la custodia luego de hecha no se observan los funcionarios que actuaron en dicha custodia.', NULL, NULL, 32),
(309, '2018-10-17 13:28:13', 70, '3888000', 116, 76, '187', '2018-10-01', '0000-00-00', 64, 78, 'Al crear una mascara se consulta en validaciones y la misma no aparece; al momento de imprimir no refleja la informaciÃ³n completa; actualizar las tablas de marca y modelo del CICPC; data del INTT al CICPC y viceversa. (Sub-modulo-Valser)', NULL, NULL, 10),
(310, '2018-10-17 13:29:57', 70, '3888000', 116, 76, '188', '2018-10-01', '0000-00-00', 64, 78, 'VehÃ­culo-InclusiÃ³n: al validar su existencia en el INTT y VALSER debe rellenar toda la informaciÃ³n  (Sub-modulo-Valser). ', NULL, NULL, 10),
(311, '2018-10-17 13:31:18', 70, '3888000', 116, 76, '189', '2018-10-01', '0000-00-00', 64, 78, 'Al momento de trabajar un clone en el sistema oculta la informaciÃ³n, debe de hacerlo tambiÃ©n en el acta procesal ejemplo: H-011645 con vehÃ­culo DAD95T  (Sub-modulo-Valser) ', NULL, NULL, 10),
(312, '2018-10-17 13:34:20', 70, '3888000', 116, 76, '190', '2018-10-01', '0000-00-00', 64, 78, 'VehÃ­culos: Al momento de incluir un vehÃ­culo, el cual se encuentra estructurado con serial de carrocerÃ­a de 17 caracteres, el sistema automÃ¡ticamente arroje la marca y modelo. Agregar cuando se tilde vehÃ­culo asegurado, un cuadro con las compaÃ±Ã­as aseguradoras para que sea de interÃ©s criminalÃstico. Agregar cuando se recupere un VehÃ­culos los estacionamiento judiciales.  Cuando se crea una nueva mascara hay que validarlos con los vehÃ­culos que ya se encuentran incluidos en el sistema. Agregar al hacer bÃºsqueda especial la opciÃ³n que permita visualizar las relaciones con el acta procesal que tiene el vehÃ­culo con su razÃ³n y estado; asÃ­ como colocar bÃºsqueda por rango de fechas. ', NULL, NULL, 10),
(313, '2018-10-17 13:35:33', 70, '3888000', 116, 76, '191', '2018-10-01', '0000-00-00', 64, 78, 'Los VehÃ­culos cuando van a ser incluidos y la data del INTT contenga caracteres especiales no debe permitir asociarlo.  (Sub-modulo-Valser)', NULL, NULL, 10),
(314, '2018-10-17 14:21:06', 70, '3888000', 116, 76, '192', '2018-10-01', '0000-00-00', 64, 78, 'Este MÃ³dulo no tiene correcciones, modificaciÃ³n y auditarÃ­a', NULL, NULL, 134),
(315, '2018-10-17 14:23:23', 70, '3888000', 116, 76, '193', '2018-10-01', '0000-00-00', 64, 78, 'El Sistema no permite eliminar las experticias cargadas por el Modulo de CriminalÃstica. Debe habilitarse esta opciÃ³n.', NULL, NULL, 134),
(317, '2018-10-17 14:26:54', 70, '3888000', 116, 76, '194', '2018-10-01', '0000-00-00', 64, 78, 'Al registrar una evidencia En la pantalla asociar fotÃ³grafo no permite que el funcionario sea el colector,  y en ocasiones el mismo funcionario realiza ambas funciones.', NULL, NULL, 134),
(318, '2018-10-17 14:28:50', 70, '3888000', 116, 76, '195', '2018-10-01', '0000-00-00', 64, 78, 'Al incluir la Solicitud de Experticia Trayectoria IntraorgÃ¡nica Falta la pestaÃ±a Expediente TanatolÃ³gico.', NULL, NULL, 134),
(319, '2018-10-17 14:30:06', 70, '3888000', 116, 76, '196', '2018-10-01', '0000-00-00', 64, 78, 'Al incluir una Solicitud de IdentificaciÃ³n de Individuo. Falta la pestaÃ±a Planilla Dactilar Ãšnica y el campo Planillas.', NULL, NULL, 134),
(320, '2018-10-17 14:31:34', 70, '3888000', 116, 76, '197', '2018-10-01', '0000-00-00', 64, 78, 'Al Incluir el Levantamiento PlanimÃ©trico. Falta la pestaÃ±a de Elementos y el botÃ³n de Incluir.', NULL, NULL, 134),
(322, '2018-10-17 14:34:08', 70, '3888000', 116, 76, '198', '2018-10-01', '0000-00-00', 64, 78, 'Al Consultar el Informe de Experticias a Entidades Financieras. No se puede validar los campos.', NULL, NULL, 134),
(323, '2018-10-17 14:35:14', 70, '3888000', 116, 76, '199', '2018-10-01', '0000-00-00', 64, 78, 'Al Consultar un Registro de VehÃ­culo. No se puede validar los campos.', NULL, NULL, 134),
(324, '2018-10-17 14:36:45', 70, '3888000', 116, 76, '200', '0000-00-00', '0000-00-00', 66, 78, 'Permitir consultar las evidencias sin modificarlas.', NULL, NULL, 134),
(326, '2018-10-17 14:39:20', 70, '3888000', 116, 76, '201', '2018-10-01', '0000-00-00', 66, 78, 'En avalÃºo se realizan experticias que pueden tener hasta 500 folios es por ello que debe evaluarse un modo de poder contar con un respaldo de esta evidencia en el sistema mediante un adjuntar un archivo o imagen.', NULL, NULL, 134),
(327, '2018-10-17 14:40:39', 70, '3888000', 116, 76, '202', '2018-10-01', '0000-00-00', 66, 78, 'Agregar solicitudes informes y tipos de experticias faltantes: Autenticidad o falsedad de la fotografÃ­a, FijaciÃ³n FotogrÃ¡fica (Sitio de suceso, lumino, Rastros, Exhumaciones, Reconstrucciones), Revelado de FotografÃ­as AnÃ¡lisis de Siniestro entre otros.', NULL, NULL, 134),
(328, '2018-10-17 14:41:49', 70, '3888000', 116, 76, '203', '2018-10-01', '0000-00-00', 66, 78, 'Evaluar la posibilidad de migraciÃ³n de datos de criminalÃ­stica.', NULL, NULL, 134),
(329, '2018-10-17 14:46:11', 70, '3888000', 116, 76, '204', '2018-10-01', '0000-00-00', 66, 78, 'En el mÃ³dulo Experticias de vehÃ­culos debe tener imÃ¡genes por cuanto las improntas de los seriales forman parte de la resulta.', NULL, NULL, 134),
(330, '2018-10-17 14:47:55', 70, '3888000', 116, 76, '205', '2018-10-01', '0000-00-00', 66, 78, 'Agregar las opciones: DeterminaciÃ³n de iones Nitratos y Nitritos en VehÃ­culos, DeterminaciÃ³n de iones Nitratos y Nitritos en Prendas de Vestir, DeterminaciÃ³n de altas y bajas. Explosivos, DeterminaciÃ³n de Hidrocarburos, DeterminaciÃ³n de Sustancias.', NULL, NULL, 134),
(331, '2018-10-17 14:49:37', 70, '3888000', 116, 76, '206', '2018-10-01', '0000-00-00', 66, 78, 'Las averiguaciones  muertes, deben tener  un renglÃ³n donde se puedan incluir los datos caracterÃ­sticos  y datos filiatorios.', NULL, NULL, 134),
(332, '2018-10-17 14:50:48', 70, '3888000', 116, 76, '207', '2018-10-01', '0000-00-00', 66, 78, 'El sistema debe contemplar todos los tipos de experticias y permitir la combinaciÃ³n de tipos de estudios en los informes: QuÃ­mica, RestauraciÃ³n, MecÃ¡nica, BalÃ­stica,  Disparo de Prueba.', NULL, NULL, 134),
(333, '2018-10-17 14:59:31', 70, '3888000', 116, 76, '208', '2018-10-01', '0000-00-00', 66, 78, 'Debe ampliarse los tipos de Evidencias, agregar Armas, Pistola, Escopetas, Revolver, Fusil, etc.  Armas neumÃ¡ticas. FacsÃ­mil: Bala, Fragmento, Concha, Blindaje, Proyectil, Posta,  Cartucho, Perdigones.', NULL, NULL, 134),
(334, '2018-10-17 15:06:57', 70, '3888000', 116, 76, '209', '2018-10-01', '0000-00-00', 64, 78, 'Este MÃ³dulo no tiene correcciones, modificaciÃ³n y auditorÃ­a.', '', '', 137),
(335, '2018-10-17 15:08:15', 70, '3888000', 116, 76, '210', '2018-10-01', '0000-00-00', 64, 78, 'El modulo de atenciÃ³n a la victima no da la opciÃ³n de corregir el numero de notificaciÃ³n de amenaza, ni  colocar la fecha manual, sino que es generada por el Sistema, se requiere permitir tanto la correcciÃ³n, como la inclusiÃ³n de fecha manualmente. y no que la genere el sistema.', NULL, NULL, 137),
(336, '2018-10-17 15:09:42', 70, '3888000', 116, 76, '211', '2018-10-01', '0000-00-00', 66, 78, 'Se pide que se haga una opciÃ³n que permita incluir en el sistema las denuncias recibidas en el 0800-CICPC-24 tal y como se reciben para amenaza de muerte pero para otros delitos.', '', '', 137),
(337, '2018-10-17 15:10:57', 70, '3888000', 116, 76, '212', '2018-10-01', '0000-00-00', 66, 78, 'El nÃºmero de notificaciÃ³n de amenaza de muerte debe permitir incluirse manualmente.', NULL, NULL, 137),
(338, '2018-10-17 15:12:22', 70, '3888000', 116, 76, '213', '2018-10-01', '0000-00-00', 66, 78, 'Se hace necesario la creaciÃ³n de un sub-modulo de notificaciÃ³n en los casos de robo de documentos de identificaciÃ³n, dentro del modulo de atenciÃ³n telefÃ³nica , ya que, en cuanto los pasaportes y cÃ©dula de identidad, esto es un resguardo en los casos de usurpaciÃ³n.', '', '', 137),
(339, '2018-10-17 15:27:14', 70, '3888000', 116, 76, '214', '2018-10-01', '0000-00-00', 64, 78, 'En Tipo de transmisiÃ³n= Elemento a verificar. Al Verificar InformaciÃ³n, el sistema muestra en algunos si el elemento a consultar no presenta registro y en otros casos muestra un mensaje que dice â€œNo se encontraron coincidencias.â€, lo que representa un problema al momento de generar los reportes de novedades ya que aparecen reflejados en las mismas.', '', '', 138),
(340, '2018-10-17 15:28:37', 70, '3888000', 116, 76, '215', '2018-10-01', '0000-00-00', 64, 78, 'Al generar el reporte, no muestra nada.', NULL, NULL, 138),
(341, '2018-10-17 15:30:27', 70, '3888000', 116, 76, '216', '2018-10-01', '0000-00-00', 64, 78, 'Lentitud del sistema, carga la agenda de trabajo.', NULL, NULL, 135),
(342, '2018-10-17 15:31:49', 70, '3888000', 116, 76, '217', '2018-10-01', '0000-00-00', 64, 78, 'Agenda de Trabajo> Mis Asignaciones Al procesar una solicitud de avalÃºo de tipo RegulaciÃ³n Prudencial, el sistema no permite responderla, ya que al presionar el botÃ³n de \"Responder\" el sistema no genera ninguna acciÃ³n.', NULL, NULL, 135),
(343, '2018-10-17 15:32:53', 70, '3888000', 116, 76, '218', '2018-10-01', '0000-00-00', 66, 78, 'CorrecciÃ³n de eliminaciÃ³n de documentos, colocar nÃºmero a todos los documentos.', NULL, NULL, 135),
(344, '2018-10-17 15:38:07', 70, '3888000', 116, 76, '219', '2018-10-01', '0000-00-00', 64, 78, 'Este MÃ³dulo no tiene correcciones, modificaciÃ³n y auditorÃ­a', NULL, NULL, 136),
(345, '2018-10-17 15:39:21', 70, '3888000', 116, 76, '220', '2018-10-01', '0000-00-00', 64, 78, 'Cuando se realiza un registro del desaparecido u occiso y no se incluye otro familiar, se borra la informaciÃ³n que se registrÃ³.', NULL, NULL, 136),
(346, '2018-10-17 15:41:08', 70, '3888000', 116, 76, '221', '2018-10-01', '0000-00-00', 64, 78, 'En el sistema el hipervÃ­nculo de dibujar odontodiagrama no funciona.', NULL, NULL, 134),
(347, '2018-10-17 15:42:19', 70, '3888000', 116, 76, '222', '2018-10-01', '0000-00-00', 64, 78, 'En entrevista AntropolÃ³gica En familiar denunciante, los parentescos esposa, sobrina y tÃ­o aparece dos veces.', NULL, NULL, 136),
(348, '2018-10-17 15:46:37', 70, '3888000', 116, 76, '223', '2018-10-01', '0000-00-00', 64, 78, 'En el sub-mÃ³dulo de incluir sesiÃ³n de radiografÃ­a se pide cambiar algunos tÃ©rminos de tÃ­tulos en los campos: tipo de placa por tipo de films, el tÃ­tulo del sub-modulo deberÃ­a de llamarse sesiÃ³n de radiologÃ­a.', NULL, NULL, 136),
(349, '2018-10-17 15:47:51', 70, '3888000', 116, 76, '224', '2018-10-01', '0000-00-00', 64, 78, 'En el sub-modulo ingreso de cadÃ¡ver, en el campo de registro de la C.I. â€œsolo acepta hasta 7 caracteresâ€.', NULL, NULL, 136),
(350, '2018-10-17 15:48:57', 70, '3888000', 116, 76, '225', '2018-10-01', '0000-00-00', 64, 78, 'Al registrar los resultados de autopsia en datos de la muerte, dejar solo Causa de la Muerte y quitar las otras 3 causas.', NULL, NULL, 136),
(351, '2018-10-17 15:49:53', 70, '3888000', 116, 76, '226', '2018-10-01', '0000-00-00', 64, 78, 'Al registrar los resultados de autopsia quitar las pestaÃ±as Certificado y Elementos.', NULL, NULL, 136),
(352, '2018-10-17 17:28:09', 70, '3888000', 116, 76, '227', '2018-10-01', '0000-00-00', 66, 78, 'Arreglar la palabra obnoxia por biopsia.', NULL, NULL, 136),
(353, '2018-10-17 17:29:39', 70, '3888000', 116, 76, '228', '2018-10-01', '0000-00-00', 66, 78, 'Agregar campo de seÃ±ales particulares en el diagrama corporal.', NULL, NULL, 136),
(354, '2018-10-17 17:31:30', 70, '3888000', 116, 76, '229', '2018-10-01', '0000-00-00', 66, 78, 'Agregar en la entrevista campo desaparecido, fallecido, occiso, indocumentado. ', NULL, NULL, 136),
(355, '2018-10-17 17:32:41', 70, '3888000', 116, 76, '230', '2018-10-01', '0000-00-00', 66, 78, 'Agregar campo de miscelÃ¡nea en levantamiento de cadÃ¡ver. ', NULL, NULL, 136),
(356, '2018-10-17 17:33:53', 70, '3888000', 116, 76, '231', '2018-10-01', '0000-00-00', 66, 78, 'Agregar campo mixto en el sub modulo entrevista odontolÃ³gico dentadura total o parcial. ', NULL, NULL, 136),
(357, '2018-10-17 17:35:20', 70, '3888000', 116, 76, '232', '2018-10-01', '0000-00-00', 66, 78, 'Incluir el campo cadena de custodia en el mÃ³dulo de forenses.', NULL, NULL, 136),
(358, '2018-10-17 17:36:41', 70, '3888000', 116, 76, '233', '2018-10-01', '0000-00-00', 66, 78, 'Anexar campo de laboratorio biolÃ³gico. ', NULL, NULL, 136),
(359, '2018-10-17 17:37:32', 70, '3888000', 116, 76, '234', '2018-10-01', '0000-00-00', 66, 78, 'Agregar un campo para colocar un nÃºmero de registro interno para cada cadÃ¡ver. ', NULL, NULL, 136),
(360, '2018-10-17 17:38:29', 70, '3888000', 116, 76, '235', '2018-10-01', '0000-00-00', 66, 78, 'En entrevista AntropolÃ³gica, en caracterÃ­sticas del ojo cambiar la palabra pteligio por pterigion. ', NULL, NULL, 136),
(361, '2018-10-17 17:45:09', 70, '3888000', 116, 76, '236', '2018-10-01', '0000-00-00', 66, 78, 'En el sub-modulo levantamiento de cadÃ¡ver, se pide cambiar el tÃ­tulo del campo â€œCausa de la Muerteâ€ por â€œDescripciÃ³n externa del CadÃ¡verâ€.', NULL, NULL, 136),
(362, '2018-10-17 17:46:23', 70, '3888000', 116, 76, '237', '2018-10-01', '0000-00-00', 66, 78, 'En el mÃ³dulo de InvestigaciÃ³n en Ciencias Forenses el sistema no permite modificar los campos luego que son registrados en el sistema', NULL, NULL, 136),
(363, '2018-10-17 17:47:30', 70, '3888000', 116, 76, '238', '2018-10-01', '0000-00-00', 66, 78, 'Crear un estÃ¡ndar para la nomenclatura de los ingresos del cadÃ¡ver.', NULL, NULL, 136),
(365, '2018-10-17 17:51:52', 70, '3888000', 116, 76, '239', '2018-10-01', '0000-00-00', 66, 78, 'Se pide la creaciÃ³n la solicitud para Experticia BiolÃ³gica y solicitud de Experticia GenÃ©tica (ADN).', NULL, NULL, 136),
(366, '2018-10-17 17:53:05', 70, '3888000', 116, 76, '240', '2018-10-01', '0000-00-00', 66, 78, 'Se pide la creaciÃ³n de un sub-modulo â€œEntrevista Socialâ€ para el Ã¡rea de atenciÃ³n social.', NULL, NULL, 136),
(367, '2018-10-17 17:54:13', 70, '3888000', 116, 76, '241', '2018-10-01', '0000-00-00', 66, 78, 'En el sub-mÃ³dulo de entrevista odontolÃ³gica es necesario modificar tÃ©rminos medico odontolÃ³gicos como por ejm. Plancha, puente, desdentado  entre otros.', NULL, NULL, 136),
(368, '2018-10-17 17:55:26', 70, '3888000', 116, 76, '242', '2018-10-01', '0000-00-00', 66, 78, 'Al incluir Informe de Experticia ToxicolÃ³gica en la opciÃ³n Muestra ll, falta incluir en un campo las unidades de peso kg, gr, etc; y si la unidad es en lÃ­quido que tenga la nomenclatura cc, dc, mc.', NULL, NULL, 136),
(369, '2018-10-17 17:56:37', 70, '3888000', 116, 76, '243', '2018-10-01', '0000-00-00', 66, 78, 'Al incluir Informe de Experticia ToxicolÃ³gica en la opciÃ³n Datos de Informe l, al incluir informe de experticia toxicolÃ³gica in vivo se requiere de un campo de tipo de muestra donde se muestre una pestaÃ±a con los 3 Ãºnicos exÃ¡menes que se realizan: orina, raspado y sangre y aparte de estos 3 para un futuro que llegase a existir otra muestra un campo de â€œotrosâ€. En la opciÃ³n experticia post-morten el campo de observaciones no debe de ser obligatorio. NOTA: SI EN EL RESULTADO DE LAS MUESTRAS LOS ALCALOIDES SON POSITIVOS QUE A SU VEZ MUESTRE SI FUE DE (COCAINA, HEROÃNA O MARIHUANA).', NULL, NULL, 136),
(370, '2018-10-17 17:57:49', 70, '3888000', 116, 76, '244', '2018-10-01', '0000-00-00', 66, 78, 'Al incluir la Ficha ExhumaciÃ³n, se recomienda colocar entre los funcionarios actuantes el FotÃ³grafo.', NULL, NULL, 136),
(371, '2018-10-18 13:04:25', 70, '3888000', 116, 76, '245', '2018-10-01', '0000-00-00', 64, 78, 'Al hacer un RPG a un numero de cÃ©dula para ocultar informaciÃ³n del expediente, queda como resultado â€œsin registro policialâ€ en el estado fÃ­sico y como â€œhistorial policialâ€ en razÃ³n, en lugar de â€œinformaciÃ³n confidencial en el casoâ€.', NULL, NULL, 139),
(372, '2018-10-18 13:05:55', 70, '3888000', 116, 76, '246', '2018-10-01', '0000-00-00', 66, 78, 'Revisar el funcionamiento de la mÃ¡quina de estado, por cuanto no esta recalculando el estado principal de las personas ejemplo V-10276622 se envio a base de datos seg memo 13 del 05/01/2015', NULL, NULL, 139),
(378, '2018-10-18 19:17:43', 71, '1441441', 174, 62, '1414', '2018-10-18', '0000-00-00', 66, 67, '4114144111111111111111111111', NULL, NULL, 82),
(379, '2018-10-18 19:26:18', 70, '2134567', 73, 61, '1111', '2018-05-18', '0000-00-00', 64, 67, '1111111111111111111111111111111111111', NULL, NULL, 82),
(380, '2018-10-18 19:26:59', 70, '1111111111111111', 164, 63, '111111111', '2018-05-18', '0000-00-00', 64, 68, '1111111111111111111111111111111111111111111111111111111', NULL, NULL, 73),
(381, '2018-10-23 17:59:17', 71, '8584123', 99, 63, '344', '2018-10-23', '0000-00-00', 66, 67, '23333333333333333333333333333333333', '', '', 12),
(382, '2019-02-25 14:34:19', 71, '0272330', 163, 61, '02222222', '2019-02-15', '0000-00-00', 66, 68, 'Se requiere que em el modulo de dotacion se actyualize la ata', '', 'aasjsjsjdhhjsbdhshdbhsbdfhsbdfhbshbdhsbdhsbhd', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimientos_supervisor`
--

CREATE TABLE `requerimientos_supervisor` (
  `id` int(45) NOT NULL,
  `persona_s_id` int(11) DEFAULT NULL,
  `requerimiento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `requerimientos_supervisor`
--

INSERT INTO `requerimientos_supervisor` (`id`, `persona_s_id`, `requerimiento_id`) VALUES
(80, 12, 127),
(81, 12, 129),
(82, 12, 130),
(83, 12, 131),
(84, 12, 132),
(85, 12, 133),
(86, 12, 134),
(87, 12, 135),
(88, 12, 136),
(89, 12, 137),
(90, 12, 138),
(91, 12, 139),
(93, 12, 141),
(94, 12, 142),
(95, 12, 143),
(96, 12, 144),
(97, 12, 145),
(98, 12, 146),
(99, 12, 147),
(100, 12, 148),
(101, 12, 149),
(102, 12, 150),
(103, 12, 151),
(104, 12, 152),
(105, 12, 153),
(106, 12, 154),
(107, 12, 155),
(108, 12, 156),
(109, 12, 157),
(110, 12, 158),
(111, 12, 159),
(112, 12, 160),
(113, 12, 161),
(114, 12, 162),
(115, 12, 163),
(116, 12, 164),
(117, 12, 165),
(118, 12, 166),
(119, 12, 167),
(120, 12, 168),
(121, 12, 169),
(122, 12, 170),
(123, 12, 171),
(124, 12, 172),
(125, 12, 173),
(126, 12, 174),
(132, 12, 180),
(133, 12, 181),
(134, 12, 182),
(135, 12, 183),
(136, 12, 184),
(137, 12, 185),
(138, 12, 186),
(139, 12, 187),
(140, 12, 188),
(141, 12, 189),
(142, 12, 190),
(143, 12, 191),
(144, 12, 192),
(145, 12, 193),
(146, 12, 194),
(147, 12, 195),
(148, 12, 196),
(149, 12, 197),
(150, 12, 198),
(151, 12, 199),
(152, 12, 200),
(153, 12, 201),
(154, 12, 202),
(155, 12, 203),
(156, 12, 204),
(157, 12, 205),
(158, 12, 206),
(159, 12, 207),
(160, 12, 208),
(161, 12, 209),
(162, 12, 210),
(163, 12, 211),
(164, 12, 212),
(165, 12, 213),
(166, 12, 214),
(167, 12, 215),
(168, 12, 216),
(169, 12, 217),
(170, 12, 218),
(171, 12, 219),
(172, 12, 220),
(175, 12, 223),
(176, 12, 224),
(177, 12, 225),
(178, 12, 226),
(179, 12, 227),
(180, 12, 228),
(181, 12, 229),
(182, 12, 230),
(183, 12, 231),
(184, 12, 232),
(185, 12, 233),
(186, 12, 234),
(187, 12, 235),
(191, 12, 239),
(192, 12, 240),
(193, 12, 241),
(194, 12, 242),
(195, 12, 243),
(196, 12, 244),
(197, 12, 245),
(198, 12, 246),
(199, 12, 247),
(200, 12, 248),
(201, 12, 249),
(202, 12, 250),
(203, 12, 251),
(204, 12, 252),
(205, 12, 253),
(206, 12, 254),
(208, 12, 256),
(209, 12, 257),
(210, 12, 258),
(211, 12, 259),
(212, 12, 260),
(214, 12, 262),
(216, 12, 264),
(217, 12, 265),
(218, 12, 266),
(219, 12, 267),
(220, 12, 268),
(221, 12, 269),
(222, 12, 270),
(223, 12, 271),
(224, 12, 272),
(225, 12, 273),
(226, 12, 274),
(227, 12, 275),
(228, 12, 276),
(229, 12, 277),
(230, 12, 278),
(231, 12, 279),
(232, 12, 280),
(233, 12, 281),
(234, 12, 282),
(235, 12, 283),
(236, 12, 284),
(237, 12, 285),
(238, 12, 286),
(239, 12, 287),
(240, 12, 288),
(241, 12, 289),
(242, 12, 290),
(243, 12, 291),
(244, 12, 292),
(245, 12, 293),
(246, 12, 294),
(247, 12, 295),
(248, 12, 296),
(249, 12, 297),
(251, 12, 299),
(252, 12, 300),
(253, 12, 301),
(254, 12, 302),
(255, 12, 303),
(256, 12, 304),
(257, 12, 305),
(258, 12, 306),
(259, 12, 307),
(260, 12, 308),
(261, 12, 309),
(262, 12, 310),
(263, 12, 311),
(264, 12, 312),
(265, 12, 313),
(266, 12, 314),
(267, 12, 315),
(269, 12, 317),
(270, 12, 318),
(271, 12, 319),
(272, 12, 320),
(274, 12, 322),
(275, 12, 323),
(276, 12, 324),
(278, 12, 326),
(279, 12, 327),
(280, 12, 328),
(281, 12, 329),
(282, 12, 330),
(283, 12, 331),
(284, 12, 332),
(285, 12, 333),
(286, 12, 334),
(287, 12, 335),
(288, 12, 336),
(289, 12, 337),
(290, 12, 338),
(291, 12, 339),
(292, 12, 340),
(293, 12, 341),
(294, 12, 342),
(295, 12, 343),
(296, 12, 344),
(297, 12, 345),
(298, 12, 346),
(299, 12, 347),
(300, 12, 348),
(301, 12, 349),
(302, 12, 350),
(303, 12, 351),
(304, 12, 352),
(305, 12, 353),
(306, 12, 354),
(307, 12, 355),
(308, 12, 356),
(309, 12, 357),
(310, 12, 358),
(311, 12, 359),
(312, 12, 360),
(313, 12, 361),
(314, 12, 362),
(315, 12, 363),
(317, 12, 365),
(318, 12, 366),
(319, 12, 367),
(320, 12, 368),
(321, 12, 369),
(322, 12, 370),
(323, 12, 371),
(324, 12, 372),
(333, 12, 74),
(334, 12, 106),
(335, 12, 107),
(336, 12, 379),
(337, 12, 380),
(338, 12, 108),
(339, 12, 109),
(340, 12, 378),
(341, 12, 112),
(342, 12, 113),
(343, 12, 114),
(344, 12, 121),
(345, 12, 122),
(346, 12, 76),
(347, 12, 123),
(348, 12, 77),
(349, 12, 85),
(350, 12, 86),
(351, 12, 102),
(352, 12, 103),
(353, 12, 104),
(354, 12, 105),
(355, 12, 61),
(356, 4, 381),
(357, 8, 382);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimiento_has_persona`
--

CREATE TABLE `requerimiento_has_persona` (
  `id` int(11) NOT NULL,
  `requerimiento_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `requerimiento_has_persona`
--

INSERT INTO `requerimiento_has_persona` (`id`, `requerimiento_id`, `persona_id`) VALUES
(25, 61, 39),
(34, 74, 69),
(36, 76, 69),
(37, 77, 69),
(45, 85, 69),
(46, 86, 69),
(57, 102, 69),
(58, 103, 69),
(59, 104, 69),
(60, 105, 69),
(61, 106, 69),
(62, 107, 69),
(63, 108, 69),
(64, 109, 69),
(67, 112, 69),
(68, 113, 69),
(69, 114, 69),
(76, 121, 69),
(77, 122, 69),
(78, 123, 69),
(81, 127, 69),
(83, 129, 69),
(84, 130, 69),
(85, 131, 69),
(86, 132, 69),
(87, 133, 69),
(88, 134, 69),
(89, 135, 69),
(90, 136, 69),
(91, 137, 69),
(92, 138, 69),
(93, 139, 69),
(94, 141, 69),
(95, 142, 69),
(96, 143, 69),
(97, 144, 69),
(98, 145, 69),
(99, 146, 69),
(100, 147, 69),
(101, 148, 69),
(102, 149, 69),
(103, 150, 69),
(104, 151, 69),
(105, 152, 69),
(106, 153, 69),
(107, 154, 69),
(108, 155, 69),
(109, 156, 69),
(110, 157, 69),
(111, 158, 69),
(112, 159, 69),
(113, 160, 69),
(114, 161, 69),
(115, 162, 69),
(116, 163, 69),
(117, 164, 69),
(118, 165, 69),
(119, 166, 69),
(120, 167, 69),
(121, 168, 69),
(122, 169, 69),
(123, 170, 69),
(124, 171, 69),
(125, 172, 69),
(126, 173, 69),
(127, 174, 69),
(128, 180, 69),
(129, 181, 69),
(130, 182, 69),
(131, 183, 69),
(132, 184, 69),
(133, 185, 69),
(134, 186, 69),
(135, 187, 69),
(136, 188, 69),
(137, 189, 69),
(138, 190, 69),
(139, 191, 69),
(140, 192, 69),
(141, 193, 69),
(142, 194, 69),
(143, 195, 69),
(144, 196, 69),
(145, 197, 69),
(146, 198, 69),
(147, 199, 69),
(148, 200, 69),
(149, 201, 69),
(150, 202, 69),
(151, 203, 69),
(152, 204, 69),
(153, 205, 69),
(154, 206, 69),
(155, 207, 69),
(156, 208, 69),
(157, 209, 69),
(158, 210, 69),
(159, 211, 69),
(160, 212, 69),
(161, 213, 69),
(162, 214, 69),
(163, 215, 69),
(164, 216, 69),
(165, 217, 69),
(166, 218, 69),
(167, 219, 69),
(168, 220, 69),
(171, 223, 69),
(172, 224, 69),
(173, 225, 69),
(174, 226, 69),
(175, 227, 69),
(176, 228, 69),
(177, 229, 69),
(178, 230, 69),
(179, 231, 69),
(180, 232, 69),
(181, 233, 69),
(182, 234, 69),
(183, 235, 69),
(186, 239, 69),
(187, 240, 69),
(188, 241, 69),
(189, 242, 69),
(190, 243, 69),
(191, 244, 69),
(192, 245, 69),
(193, 246, 69),
(194, 247, 69),
(195, 248, 69),
(196, 249, 69),
(197, 250, 69),
(198, 251, 69),
(199, 252, 69),
(200, 253, 69),
(201, 254, 69),
(203, 256, 69),
(204, 257, 69),
(205, 258, 69),
(206, 259, 69),
(207, 260, 69),
(209, 262, 69),
(211, 264, 69),
(212, 265, 69),
(213, 266, 69),
(214, 267, 69),
(215, 268, 69),
(216, 269, 69),
(217, 270, 69),
(218, 271, 69),
(219, 272, 69),
(220, 273, 69),
(221, 274, 69),
(222, 275, 69),
(223, 276, 69),
(224, 277, 69),
(225, 278, 69),
(226, 279, 69),
(227, 280, 69),
(228, 281, 69),
(229, 282, 69),
(230, 283, 69),
(231, 284, 69),
(232, 285, 69),
(233, 286, 69),
(234, 287, 69),
(235, 288, 69),
(236, 289, 69),
(237, 290, 69),
(238, 291, 69),
(239, 292, 69),
(240, 293, 69),
(241, 294, 69),
(242, 295, 69),
(243, 296, 69),
(244, 297, 69),
(246, 299, 69),
(247, 300, 69),
(248, 301, 69),
(249, 302, 69),
(250, 303, 69),
(251, 304, 69),
(252, 305, 69),
(253, 306, 69),
(254, 307, 69),
(255, 308, 69),
(256, 309, 69),
(257, 310, 69),
(258, 311, 69),
(259, 312, 69),
(260, 313, 69),
(261, 314, 69),
(262, 315, 69),
(264, 317, 69),
(265, 318, 69),
(266, 319, 69),
(267, 320, 69),
(269, 322, 69),
(270, 323, 69),
(271, 324, 69),
(273, 326, 69),
(274, 327, 69),
(275, 328, 69),
(276, 329, 69),
(277, 330, 69),
(278, 331, 69),
(279, 332, 69),
(280, 333, 69),
(281, 334, 69),
(282, 335, 69),
(283, 336, 69),
(284, 337, 69),
(285, 338, 69),
(286, 339, 69),
(287, 340, 69),
(288, 341, 69),
(289, 342, 69),
(290, 343, 69),
(291, 344, 69),
(292, 345, 69),
(293, 346, 69),
(294, 347, 69),
(295, 348, 69),
(296, 349, 69),
(297, 350, 69),
(298, 351, 69),
(299, 352, 69),
(300, 353, 69),
(301, 354, 69),
(302, 355, 69),
(303, 356, 69),
(304, 357, 69),
(305, 358, 69),
(306, 359, 69),
(307, 360, 69),
(308, 361, 69),
(309, 362, 69),
(310, 363, 69),
(312, 365, 69),
(313, 366, 69),
(314, 367, 69),
(315, 368, 69),
(316, 369, 69),
(317, 370, 69),
(318, 371, 69),
(319, 372, 69),
(325, 378, 76),
(326, 379, 67),
(327, 380, 76),
(328, 381, 47),
(329, 382, 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas`
--

CREATE TABLE `sistemas` (
  `id` int(11) NOT NULL,
  `descripcion_sistema` varchar(50) NOT NULL,
  `padre_sistema_id` int(11) DEFAULT NULL,
  `referencia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sistemas`
--

INSERT INTO `sistemas` (`id`, `descripcion_sistema`, `padre_sistema_id`, `referencia_id`) VALUES
(2, 'SCD', NULL, 79),
(5, 'Gestion de Registro', 2, 80),
(6, 'Reportes', 2, 80),
(7, 'SIIPOL', NULL, 79),
(8, 'GestiOn de Despacho', 7, 80),
(9, 'Guardia', 7, 80),
(10, 'AdministraciOn', 7, 80),
(11, 'AnAlisis de InformaciOn', 7, 80),
(12, 'Correciones', 7, 80),
(13, 'INTERPOL', 7, 80),
(14, 'InvestigaciOn Penal', 7, 80),
(15, 'InvestigaciOn Interna', 7, 80),
(16, 'Control de ActuaciOn Policial', 7, 80),
(17, 'Evidencia', 7, 80),
(18, 'Captura', 7, 80),
(19, 'Historial Policial', 7, 80),
(20, 'AsesorIa JurIdica', 7, 80),
(21, 'Debido Proceso', 7, 80),
(22, 'Historial Policial', 7, 80),
(23, 'AsesorIa JurIdica', 7, 80),
(24, 'CapacitaciOn y Reentrana...', 7, 80),
(25, 'AtenciOn a la VIctima', 7, 80),
(26, 'PolicIa Comunal', 7, 80),
(27, 'EstadIsticas', 7, 80),
(28, 'Acceso', 7, 80),
(29, 'Sustancias QuImicas', 7, 80),
(30, 'AuditorIa', 7, 80),
(31, 'Archivos HistOricos', 7, 80),
(32, 'Acciones Especiales', 7, 80),
(33, 'Banco', 7, 80),
(34, 'DotaciOn', 7, 80),
(35, 'Comunicaciones', 7, 80),
(36, 'Transcripciones', 7, 80),
(37, 'Vigilancia y Patrullaje', 7, 80),
(38, 'SICPRU', NULL, 79),
(39, 'PD1', 38, 80),
(40, 'ReseNa', 38, 80),
(41, 'SIEPOL', NULL, 79),
(42, 'GestiOn de ReseNa', 41, 80),
(43, 'Reportes', 41, 80),
(44, 'EstadIsticas', 41, 80),
(45, 'SIAES', NULL, 79),
(50, 'AdministraciOn', 45, 80),
(51, 'Minuta', 45, 80),
(52, 'Reportes PDF', 45, 80),
(53, 'Reporte Grafico', 45, 80),
(54, 'Portal', NULL, 79),
(55, 'Galeria', 54, 80),
(56, 'Vehiculos Recuperados', 54, 80),
(57, '0800CICPC24', 54, 80),
(58, 'Correo Institucional', 54, 80),
(59, 'CACICPC', 54, 80),
(60, 'IPSOPOL', 54, 80),
(61, 'FUNDAAMI', 54, 80),
(62, 'Servicios', 54, 80),
(63, 'InformaciOn', 54, 80),
(64, 'Nosotros', 54, 80),
(65, 'GeolocalizaciOn', 54, 80),
(68, 'INTRANET', NULL, 79),
(69, 'Inicio', 68, 80),
(70, 'Descarga', 68, 80),
(71, 'SISCOF', NULL, 79),
(72, 'Busqueda', 71, 80),
(73, 'Reportes', 71, 80),
(76, 'SISCA', NULL, 79),
(77, 'Modulo de AdministraciOn', 76, 80),
(78, 'Solicitud de Permisos', 76, 80),
(79, 'Reportes', 76, 80),
(81, 'WIKI', NULL, 79),
(82, 'Subir InformaciOn', 81, 80),
(84, 'SIIPOL MOVIL', NULL, 79),
(92, 'Persona', 84, 80),
(93, 'Persona SAIME', 84, 80),
(94, 'Vehiculo', 84, 80),
(95, 'Vehiculo INTT', 84, 80),
(96, 'Arma', 84, 80),
(97, 'Objeto', 84, 80),
(99, 'I2', NULL, 79),
(117, 'Arma', 99, 80),
(118, 'Bienes', 99, 80),
(119, 'Caso', 99, 80),
(120, 'Cuenta Bancaria', 99, 80),
(121, 'Empresa', 99, 80),
(122, 'Equipo Telefonico', 99, 80),
(123, 'Evidencia Balistica', 99, 80),
(124, 'Experticia', 99, 80),
(125, 'Familia', 99, 80),
(126, 'Linea Telefonica', 99, 80),
(127, 'Lugar del hecho', 99, 80),
(128, 'Modus Operandi', 99, 80),
(129, 'Otras Evidencias', 99, 80),
(130, 'Persona', 99, 80),
(131, 'TIC Dispositivo', 99, 80),
(132, 'TIC Servicio Web', 99, 80),
(133, 'Vehiculo', 99, 80),
(134, 'Investigacion Criminalistica', 7, 80),
(135, 'Agenda de trabajo', 7, 80),
(136, 'Investigacion Ciencias Forenses', 7, 80),
(137, 'Atencion telefonica', 7, 80),
(138, 'Transmisiones', 7, 80),
(139, 'Maquina de estado', 7, 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soporte`
--

CREATE TABLE `soporte` (
  `id` int(11) NOT NULL,
  `tipo_de_rt_id` int(11) NOT NULL,
  `cod_area_id` int(11) NOT NULL,
  `numero_tel` varchar(45) NOT NULL,
  `areac_id` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `observacion` varchar(45) DEFAULT NULL,
  `solucion` varchar(45) DEFAULT NULL,
  `status_del_caso_id` int(11) DEFAULT NULL,
  `fecha_inicio` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `fecha_culminacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `soporte`
--

INSERT INTO `soporte` (`id`, `tipo_de_rt_id`, `cod_area_id`, `numero_tel`, `areac_id`, `descripcion`, `observacion`, `solucion`, `status_del_caso_id`, `fecha_inicio`, `fecha_culminacion`) VALUES
(23, 161, 73, '40404040', 173, 'dfdf', 'ninguna', 'ninguna', 167, '2019-04-25 13:55:09.828342', '2019-04-25T13:46'),
(24, 160, 69, '8589663', 72, 'fdfdfdf', NULL, NULL, 167, '2019-04-25 15:39:49.469806', NULL),
(26, 145, 69, '8580318', 73, 'sadsdsd', NULL, NULL, 167, '2019-04-28 20:06:39.977693', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soporte_persona`
--

CREATE TABLE `soporte_persona` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `soporte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `soporte_persona`
--

INSERT INTO `soporte_persona` (`id`, `persona_id`, `soporte_id`) VALUES
(19, 7, 23),
(20, 82, 24),
(22, 69, 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soporte_tecnico`
--

CREATE TABLE `soporte_tecnico` (
  `id` int(11) NOT NULL,
  `persona_sp_id` int(11) DEFAULT NULL,
  `soporte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `soporte_tecnico`
--

INSERT INTO `soporte_tecnico` (`id`, `persona_sp_id`, `soporte_id`) VALUES
(19, 7, 23),
(20, 7, 24),
(21, 5, 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(8) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `pregunta` varchar(45) NOT NULL,
  `respuesta` varchar(45) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `perfil_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `clave`, `pregunta`, `respuesta`, `persona_id`, `perfil_id`) VALUES
(4, 'bca37872', '01507881d7647a8524a9cbafbcd813ef', 'nombre de mi gata', 'valentina', 4, 82),
(5, 'csoto', '01507881d7647a8524a9cbafbcd813ef', 'hola', 'valentina', 5, 92),
(6, 'admin', '01507881d7647a8524a9cbafbcd813ef', 'nombre de mi perro', 'no tengo', 43, 14),
(7, 'jguerra', '01507881d7647a8524a9cbafbcd813ef', 'comida favorita', 'pizza', 7, 93),
(8, 'acontrer', '01507881d7647a8524a9cbafbcd813ef', 'nombre de tu hijo', 'joshua', 49, 82),
(10, 'juancho', '01507881d7647a8524a9cbafbcd813ef', 'quien tiene la culpa?', 'maria la bollera', 48, 92),
(12, 'yg7724', '25d55ad283aa400af464c76d713c07ad', 'nombre de mi mama', 'mirian', 71, 82),
(13, 'yluna', '25d55ad283aa400af464c76d713c07ad', 'hola', 'chao', 78, 82),
(14, 'kperez', '25d55ad283aa400af464c76d713c07ad', 'cual es mi nombre', 'katiria', 79, 82),
(15, 'msalazar', '1c0e2b5f190a0e3d2d30d4479db5a2b3', 'nombre de hija', 'crismar', 81, 82);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `iddireccion_UNIQUE` (`id`),
  ADD KEY `fk_direccion_referencia1_idx` (`referencia_id`),
  ADD KEY `fk_direccion_direccion1_idx` (`padre_id`);

--
-- Indices de la tabla `log_insert_requerimiento`
--
ALTER TABLE `log_insert_requerimiento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `requerimiento_id` (`requerimiento_id`),
  ADD KEY `requerimiento_analista_ibfk_1` (`usuario_id`);

--
-- Indices de la tabla `log_insert_soporte`
--
ALTER TABLE `log_insert_soporte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soporte_analista_ibfk_2` (`soporte_id`),
  ADD KEY `soporte_analista_ibfk_1` (`persona_a_id`);

--
-- Indices de la tabla `log_insert_ticket`
--
ALTER TABLE `log_insert_ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_micro_tickets_has_persona_persona1_idx` (`persona_id`),
  ADD KEY `fk_micro_tickets_has_persona_micro_tickets1_idx` (`micro_tickets_id`);

--
-- Indices de la tabla `log_update_soporte`
--
ALTER TABLE `log_update_soporte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_update_soporte_ibfk_1` (`persona_id`);

--
-- Indices de la tabla `log_update_ticket`
--
ALTER TABLE `log_update_ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persona_id` (`persona_id`);

--
-- Indices de la tabla `micro_persona`
--
ALTER TABLE `micro_persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `micro_persona_ibfk_1` (`micro_tickets_idmt`),
  ADD KEY `micro_persona_ibfk_2` (`persona_id`);

--
-- Indices de la tabla `micro_tecnico`
--
ALTER TABLE `micro_tecnico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `micro_tickets_idmt` (`micro_tickets_idmt`),
  ADD KEY `micro_tecnico_ibfk_2` (`persona_t_id`);

--
-- Indices de la tabla `micro_tickets`
--
ALTER TABLE `micro_tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_micro_tickets_referencia_idx` (`rayado_id`),
  ADD KEY `fk_micro_tickets_referencia1_idx` (`pieza_suelta_id`),
  ADD KEY `fk_micro_tickets_referencia2_idx` (`pieza_danada_id`),
  ADD KEY `fk_micro_tickets_referencia3_idx` (`cod_area_id`),
  ADD KEY `fk_micro_tickets_referencia4_idx` (`tipo_equipo_id`),
  ADD KEY `fk_micro_tickets_referencia5_idx` (`tipo_disco_duro_id`),
  ADD KEY `fk_micro_tickets_referencia6_idx` (`marca_procesador_id`),
  ADD KEY `fk_micro_tickets_referencia7_idx` (`tipo_de_ram_id`),
  ADD KEY `fk_micro_tickets_referencia8_idx` (`capacidad_ram_id`),
  ADD KEY `fk_micro_tickets_referencia9_idx` (`capacidad_disco_duro_id`),
  ADD KEY `areac_id` (`areac_id`),
  ADD KEY `status_equipo_id` (`status_equipo_id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `cedula_UNIQUE` (`cedula`),
  ADD UNIQUE KEY `credencial_UNIQUE` (`credencial`),
  ADD KEY `fk_persona_referencia1_idx` (`jerarquia_id`),
  ADD KEY `areac_id` (`areac_id`);

--
-- Indices de la tabla `referencia`
--
ALTER TABLE `referencia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_referencia_referencia1_idx` (`padre_id`);

--
-- Indices de la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `numero` (`numero`),
  ADD KEY `fk_requerimiento_referencia2_idx` (`tipo_de_solicitud_id`),
  ADD KEY `fk_requerimiento_referencia1_idx` (`tipo_de_requerimiento_id`),
  ADD KEY `fk_requerimiento_referencia3_idx` (`status_id`),
  ADD KEY `fk_requerimiento_sistema1_idx` (`Modulo_id`),
  ADD KEY `fk_requerimiento_referencia4_idx` (`cod_area_id`),
  ADD KEY `areac_id` (`areac_id`);

--
-- Indices de la tabla `requerimientos_supervisor`
--
ALTER TABLE `requerimientos_supervisor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_persona_has_micro_tickets_micro_tickets2_idx` (`requerimiento_id`),
  ADD KEY `fk_persona_has_micro_tickets_persona2_idx` (`persona_s_id`);

--
-- Indices de la tabla `requerimiento_has_persona`
--
ALTER TABLE `requerimiento_has_persona`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_requerimiento_has_persona_persona1_idx` (`persona_id`),
  ADD KEY `fk_requerimiento_has_persona_requerimiento1_idx` (`requerimiento_id`);

--
-- Indices de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_table1_referencia1_idx` (`referencia_id`),
  ADD KEY `fk_sistema_sistema1_idx` (`padre_sistema_id`);

--
-- Indices de la tabla `soporte`
--
ALTER TABLE `soporte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_soporte_referencia_idx` (`tipo_de_rt_id`),
  ADD KEY `fk_soporte_referencia1_idx` (`cod_area_id`),
  ADD KEY `soporte_ibfk_1` (`areac_id`),
  ADD KEY `status_del_caso_id` (`status_del_caso_id`);

--
-- Indices de la tabla `soporte_persona`
--
ALTER TABLE `soporte_persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soporte_persona_ibfk_1` (`persona_id`),
  ADD KEY `soporte_persona_ibfk_2` (`soporte_id`);

--
-- Indices de la tabla `soporte_tecnico`
--
ALTER TABLE `soporte_tecnico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soporte_tecnico_ibfk_2` (`soporte_id`),
  ADD KEY `soporte_tecnico_ibfk_1` (`persona_sp_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `ixunique_usuario` (`usuario`),
  ADD UNIQUE KEY `ixunique_persona` (`persona_id`),
  ADD KEY `fk_usuario_persona1_idx` (`persona_id`),
  ADD KEY `fk_usuario_referencia1_idx` (`perfil_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT de la tabla `log_insert_requerimiento`
--
ALTER TABLE `log_insert_requerimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT de la tabla `log_insert_soporte`
--
ALTER TABLE `log_insert_soporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `log_insert_ticket`
--
ALTER TABLE `log_insert_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `log_update_soporte`
--
ALTER TABLE `log_update_soporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `log_update_ticket`
--
ALTER TABLE `log_update_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `micro_persona`
--
ALTER TABLE `micro_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `micro_tecnico`
--
ALTER TABLE `micro_tecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `micro_tickets`
--
ALTER TABLE `micro_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `referencia`
--
ALTER TABLE `referencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT de la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;

--
-- AUTO_INCREMENT de la tabla `requerimientos_supervisor`
--
ALTER TABLE `requerimientos_supervisor`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=358;

--
-- AUTO_INCREMENT de la tabla `requerimiento_has_persona`
--
ALTER TABLE `requerimiento_has_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT de la tabla `sistemas`
--
ALTER TABLE `sistemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT de la tabla `soporte`
--
ALTER TABLE `soporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `soporte_persona`
--
ALTER TABLE `soporte_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `soporte_tecnico`
--
ALTER TABLE `soporte_tecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD CONSTRAINT `fk_direccion_direccion1` FOREIGN KEY (`padre_id`) REFERENCES `dependencias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_direccion_referencia1` FOREIGN KEY (`referencia_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `log_insert_requerimiento`
--
ALTER TABLE `log_insert_requerimiento`
  ADD CONSTRAINT `log_insert_requerimiento_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `log_insert_soporte`
--
ALTER TABLE `log_insert_soporte`
  ADD CONSTRAINT `log_insert_soporte_ibfk_1` FOREIGN KEY (`persona_a_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `log_insert_ticket`
--
ALTER TABLE `log_insert_ticket`
  ADD CONSTRAINT `fk_micro_tickets_has_persona_persona1` FOREIGN KEY (`persona_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `log_update_soporte`
--
ALTER TABLE `log_update_soporte`
  ADD CONSTRAINT `log_update_soporte_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `log_update_ticket`
--
ALTER TABLE `log_update_ticket`
  ADD CONSTRAINT `log_update_ticket_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`);

--
-- Filtros para la tabla `micro_persona`
--
ALTER TABLE `micro_persona`
  ADD CONSTRAINT `micro_persona_ibfk_1` FOREIGN KEY (`micro_tickets_idmt`) REFERENCES `micro_tickets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `micro_persona_ibfk_2` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `micro_tecnico`
--
ALTER TABLE `micro_tecnico`
  ADD CONSTRAINT `micro_tecnico_ibfk_1` FOREIGN KEY (`micro_tickets_idmt`) REFERENCES `micro_tickets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `micro_tecnico_ibfk_2` FOREIGN KEY (`persona_t_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `micro_tickets`
--
ALTER TABLE `micro_tickets`
  ADD CONSTRAINT `fk_micro_tickets_referencia` FOREIGN KEY (`rayado_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_micro_tickets_referencia1` FOREIGN KEY (`pieza_suelta_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_micro_tickets_referencia2` FOREIGN KEY (`pieza_danada_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_micro_tickets_referencia3` FOREIGN KEY (`cod_area_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_micro_tickets_referencia4` FOREIGN KEY (`tipo_equipo_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_micro_tickets_referencia5` FOREIGN KEY (`tipo_disco_duro_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_micro_tickets_referencia6` FOREIGN KEY (`marca_procesador_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_micro_tickets_referencia7` FOREIGN KEY (`tipo_de_ram_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_micro_tickets_referencia8` FOREIGN KEY (`capacidad_ram_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_micro_tickets_referencia9` FOREIGN KEY (`capacidad_disco_duro_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `micro_tickets_ibfk_7` FOREIGN KEY (`areac_id`) REFERENCES `dependencias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `micro_tickets_ibfk_8` FOREIGN KEY (`status_equipo_id`) REFERENCES `referencia` (`id`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_persona_referencia1` FOREIGN KEY (`jerarquia_id`) REFERENCES `referencia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`areac_id`) REFERENCES `dependencias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `referencia`
--
ALTER TABLE `referencia`
  ADD CONSTRAINT `fk_referencia_referencia1` FOREIGN KEY (`padre_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  ADD CONSTRAINT `fk_requerimiento_referencia1` FOREIGN KEY (`tipo_de_requerimiento_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_requerimiento_referencia2` FOREIGN KEY (`tipo_de_solicitud_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_requerimiento_referencia3` FOREIGN KEY (`status_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_requerimiento_referencia4` FOREIGN KEY (`cod_area_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_requerimiento_sistema1` FOREIGN KEY (`Modulo_id`) REFERENCES `sistemas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `requerimiento_ibfk_1` FOREIGN KEY (`areac_id`) REFERENCES `dependencias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `requerimientos_supervisor`
--
ALTER TABLE `requerimientos_supervisor`
  ADD CONSTRAINT `requerimientos_supervisor_ibfk_1` FOREIGN KEY (`persona_s_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requerimientos_supervisor_ibfk_2` FOREIGN KEY (`requerimiento_id`) REFERENCES `requerimiento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `requerimiento_has_persona`
--
ALTER TABLE `requerimiento_has_persona`
  ADD CONSTRAINT `requerimiento_has_persona_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requerimiento_has_persona_ibfk_2` FOREIGN KEY (`requerimiento_id`) REFERENCES `requerimiento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sistemas`
--
ALTER TABLE `sistemas`
  ADD CONSTRAINT `fk_sistema_sistema1` FOREIGN KEY (`padre_sistema_id`) REFERENCES `sistemas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_referencia1` FOREIGN KEY (`referencia_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `soporte`
--
ALTER TABLE `soporte`
  ADD CONSTRAINT `fk_soporte_referencia` FOREIGN KEY (`tipo_de_rt_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_soporte_referencia1` FOREIGN KEY (`cod_area_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `soporte_ibfk_1` FOREIGN KEY (`areac_id`) REFERENCES `dependencias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `soporte_ibfk_2` FOREIGN KEY (`status_del_caso_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `soporte_persona`
--
ALTER TABLE `soporte_persona`
  ADD CONSTRAINT `soporte_persona_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soporte_persona_ibfk_2` FOREIGN KEY (`soporte_id`) REFERENCES `soporte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `soporte_tecnico`
--
ALTER TABLE `soporte_tecnico`
  ADD CONSTRAINT `soporte_tecnico_ibfk_1` FOREIGN KEY (`persona_sp_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soporte_tecnico_ibfk_2` FOREIGN KEY (`soporte_id`) REFERENCES `soporte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `referencia` (`id`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

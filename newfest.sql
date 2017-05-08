-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2017 a las 00:35:32
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `newfest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `decano` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `nombre`, `decano`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CIENCIAS ADMINISTRATIVAS', '', '2017-04-11 16:47:47', '2017-04-12 14:08:22', NULL),
(2, 'COMUNICACIÓN Y BELLAS ARTES', '', '2017-04-11 16:48:09', '2017-04-12 14:37:21', NULL),
(3, 'INGENIERÍAS', '', '2017-04-11 16:48:14', '2017-04-12 14:38:27', NULL),
(4, 'EDUCACIÓN CONTINUADA', '', '2017-04-11 16:48:23', '2017-04-11 16:48:23', NULL),
(5, 'POSGRADOS', '', '2017-04-11 16:48:29', '2017-04-12 14:37:16', NULL),
(6, 'test', 'sagag', '2017-04-12 13:41:37', '2017-04-12 14:35:56', '2017-04-12 14:35:56'),
(7, 'sagfas2222222', 'sdhshasd', '2017-04-12 14:33:01', '2017-04-12 14:35:45', '2017-04-12 14:35:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(10) UNSIGNED NOT NULL,
  `a1` text COLLATE utf8_unicode_ci NOT NULL,
  `a2` text COLLATE utf8_unicode_ci NOT NULL,
  `a3` text COLLATE utf8_unicode_ci NOT NULL,
  `a4` text COLLATE utf8_unicode_ci NOT NULL,
  `a5` text COLLATE utf8_unicode_ci NOT NULL,
  `a6` text COLLATE utf8_unicode_ci NOT NULL,
  `a7` text COLLATE utf8_unicode_ci NOT NULL,
  `a8` text COLLATE utf8_unicode_ci NOT NULL,
  `a9` text COLLATE utf8_unicode_ci NOT NULL,
  `a10` text COLLATE utf8_unicode_ci NOT NULL,
  `a11` text COLLATE utf8_unicode_ci NOT NULL,
  `a12` text COLLATE utf8_unicode_ci NOT NULL,
  `a13` text COLLATE utf8_unicode_ci NOT NULL,
  `a14` text COLLATE utf8_unicode_ci NOT NULL,
  `a15` text COLLATE utf8_unicode_ci NOT NULL,
  `a16` text COLLATE utf8_unicode_ci NOT NULL,
  `a17` text COLLATE utf8_unicode_ci NOT NULL,
  `a18` text COLLATE utf8_unicode_ci NOT NULL,
  `a19` text COLLATE utf8_unicode_ci NOT NULL,
  `a20` text COLLATE utf8_unicode_ci NOT NULL,
  `a21` text COLLATE utf8_unicode_ci NOT NULL,
  `a22` text COLLATE utf8_unicode_ci NOT NULL,
  `a23` text COLLATE utf8_unicode_ci NOT NULL,
  `a24` text COLLATE utf8_unicode_ci NOT NULL,
  `a25` text COLLATE utf8_unicode_ci NOT NULL,
  `a26` text COLLATE utf8_unicode_ci NOT NULL,
  `a27` text COLLATE utf8_unicode_ci NOT NULL,
  `a28` text COLLATE utf8_unicode_ci NOT NULL,
  `a29` text COLLATE utf8_unicode_ci NOT NULL,
  `a30` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `proyecto_id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `a29`, `a30`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'sdfgd<u>fsadas</u>dsa &nbsp; a<font color=\"#66cc99\">dwda</font><h2 style=\"text-align: center;\"><br></h2>', 'sfdg<b>sdfg</b>', '<div style=\"text-align: center;\">dsfgdsfg</div>', '<font size=\"5\">sfdhsdhf</font>', 'dfshdsf', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '<br>', '', '', '', '', '', '', '2017-04-19 21:02:58', '2017-04-19 21:36:04', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'AMAZONAS', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(2, 'ANTIOQUIA', '2017-04-10 19:12:50', '2017-04-12 14:45:27', NULL),
(3, 'ARAUCA', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(4, 'ATLÁNTICO', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(5, 'BOLÍVAR', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(6, 'BOYACÁ', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(7, 'CALDAS', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(8, 'CAQUETÁ', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(9, 'CASANARE', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(10, 'CAUCA', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(11, 'CESAR', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(12, 'CHOCÓ', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(13, 'CÓRDOBA', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(14, 'CUNDINAMARCA', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(15, 'GUAINÍA', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(16, 'GUAVIARE', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(17, 'HUILA', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(18, 'LA GUAJIRA', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(19, 'MAGDALENA', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(20, 'META', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(21, 'NARIÑO', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(22, 'NORTE DE SANTANDER', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(23, 'PUTUMAYO', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(24, 'QUINDÍO', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(25, 'RISARALDA', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(26, 'SAN ANDRÉS Y ROVIDENCIA', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(27, 'SANTANDER', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(28, 'SUCRE', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(29, 'TOLIMA', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(30, 'VALLE DEL CAUCA', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(31, 'VAUPÉS', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(32, 'VICHADA', '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'No Disponible', '2017-04-12 15:05:13', '2017-04-12 15:05:13', NULL),
(2, 'En proceso de Creación', '2017-04-12 15:05:29', '2017-04-12 15:05:29', NULL),
(3, 'Propuesta', '2017-04-12 15:05:48', '2017-04-12 15:05:48', NULL),
(4, 'Solicitud de aceptación y revisión preliminar', '2017-04-12 15:06:48', '2017-04-12 15:06:48', NULL),
(5, 'Investigación en curso', '2017-04-12 15:25:42', '2017-04-12 15:25:42', NULL),
(6, 'Solicitud revisión cíclica (Director semillero)', '2017-04-12 15:27:32', '2017-04-12 15:27:32', NULL),
(7, 'Solicitud preliminar (Comité  de Jurados)', '2017-04-12 15:28:30', '2017-04-12 15:28:30', NULL),
(8, 'En espera (Evento)', '2017-04-12 15:29:55', '2017-04-12 15:29:55', NULL),
(9, 'Evento asignado para exponencia', '2017-04-12 15:32:11', '2017-04-12 15:32:11', NULL),
(10, 'Terminado', '2017-04-12 15:32:20', '2017-04-12 15:32:20', NULL),
(11, 'Publicado', '2017-04-12 15:32:32', '2017-04-12 15:32:32', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `programa_id` int(10) UNSIGNED NOT NULL,
  `regional_id` int(10) UNSIGNED NOT NULL,
  `genero` enum('Masculino','Femenino','Indefinido') COLLATE utf8_unicode_ci NOT NULL,
  `pensum` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `semestre` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `correo_principal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correo_institucional` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `expedicion_documento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nacionalidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `wp` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado_civil` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombres`, `apellidos`, `cedula`, `area_id`, `programa_id`, `regional_id`, `genero`, `pensum`, `semestre`, `correo_principal`, `correo_institucional`, `celular`, `telefono`, `fecha_nacimiento`, `expedicion_documento`, `nacionalidad`, `wp`, `skype`, `linkedin`, `twitter`, `estado_civil`, `estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Laura Andrea', 'Ferreira Centeno', '1024777418', 3, 12, 5, 'Femenino', '2030D', '8', 'laura0812@gmail.com', 'laura.ferreira@cun.edu.co', '3015415060', '4741254', '1993-04-13', '82', 'Colombiano', '', '', '', '', 'soltero', '', '2017-04-12 20:32:16', '2017-04-12 20:32:16', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento_expos`
--

CREATE TABLE `evento_expos` (
  `id` int(10) UNSIGNED NOT NULL,
  `grupojurado_id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `informacion` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `evento_expos`
--

INSERT INTO `evento_expos` (`id`, `grupojurado_id`, `nombre`, `direccion`, `informacion`, `fecha`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Sin Evento Asignado', 'N/D', 'N/D', '0000-00-00 00:00:00', 1, '2017-04-14 19:14:12', '2017-04-14 19:14:12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_investigacions`
--

CREATE TABLE `grupo_investigacions` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `año_formacion` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `gran_area` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area_conocimiento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_primer_lider` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_primer_lider` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_segundo_lider` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_segundo_lider` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `grupLAC` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `grupo_investigacions`
--

INSERT INTO `grupo_investigacions` (`id`, `nombre`, `año_formacion`, `gran_area`, `area_conocimiento`, `cedula_primer_lider`, `nombre_primer_lider`, `cedula_segundo_lider`, `nombre_segundo_lider`, `grupLAC`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Grupo de investigación CUN NACIONAL', '2003', 'Ingenierías Humanidades y Administración', 'otras', '23441296', 'Jhon freddy beltran', '1041778065', 'Yamir palacios elhash', 'CRTF40000214854A', '2017-04-12 17:05:13', '2017-04-12 17:05:13', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_jurados`
--

CREATE TABLE `grupo_jurados` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `regional_id` int(10) UNSIGNED NOT NULL,
  `observaciones` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `grupo_jurados`
--

INSERT INTO `grupo_jurados` (`id`, `codigo`, `regional_id`, `observaciones`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'N/D', 2, 'No disponible', '2017-04-12 17:22:38', '2017-04-14 19:07:50', NULL),
(2, 'GJ001', 5, 'Comité de jurados monteria', '2017-04-14 19:07:06', '2017-04-14 19:07:06', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jurados`
--

CREATE TABLE `jurados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `grupojurado_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `linea_investigacion_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `celular` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `jurados`
--

INSERT INTO `jurados` (`id`, `nombres`, `apellidos`, `cedula`, `grupojurado_id`, `user_id`, `linea_investigacion_id`, `area_id`, `celular`, `direccion`, `correo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Paulina', 'Cisneros Nájar', '60524332', 2, 0, 2, 3, '3001418820', 'cl 84 diag 29-44', 'paulina.cisneros@cun.edu.co', '2017-04-12 18:40:58', '2017-04-14 19:08:11', NULL),
(2, 'Luisa', 'Fernández Castillo', '40524333', 2, 0, 3, 3, '3015547419', 'cl 24 n83 b/flora', 'luisa.fernandez@cun.edu.co', '2017-04-12 20:17:23', '2017-04-14 19:08:16', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_investigacions`
--

CREATE TABLE `linea_investigacions` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `linea_investigacions`
--

INSERT INTO `linea_investigacions` (`id`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Salud', '2017-04-12 15:44:43', '2017-04-12 15:44:43', NULL),
(2, 'Informatica', '2017-04-12 15:44:52', '2017-04-12 15:44:58', NULL),
(3, 'Robotica', '2017-04-12 15:48:51', '2017-04-12 15:48:51', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_04_09_223641_create_cache_table', 1),
('2017_04_10_080316_create_departamentos_table', 1),
('2017_04_10_083201_create_municipios_table', 1),
('2017_04_11_114336_create_areas_table', 2),
('2017_04_11_115157_create_programas_table', 3),
('2017_04_12_065707_create_regionals_table', 4),
('2017_04_12_071240_create_sedes_table', 5),
('2017_04_12_095346_create_estados_table', 6),
('2017_04_12_104251_create_linea_table', 7),
('2017_04_12_114254_create_grupo_investigacions_table', 8),
('2017_04_12_121116_create_grupo_jurados_table', 9),
('2017_04_12_125609_create_jurados_table', 10),
('2017_04_12_141544_create_evento_expos_table', 11),
('2017_04_12_144119_create_estudiantes_table', 12),
('2017_04_12_161424_create_semilleros_table', 13),
('2017_04_13_175225_create_proyectos_table', 14),
('2017_04_14_151609_create_notas_table', 15),
('2017_04_14_152834_create_rel_integras_table', 16),
('2017_04_19_015721_create_contenidos_table', 17),
('2017_04_19_020911_create_contenido_titulos_table', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_departamento` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `nombre`, `id_departamento`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'EL ENCANTO', 1, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(2, 'LA CHORRERA', 1, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(3, 'LA PEDRERA', 1, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(4, 'LA VICTORIA', 1, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(5, 'LETICIA', 1, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(6, 'MIRITI', 1, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(7, 'PUERTO ALEGRIA', 1, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(8, 'PUERTO ARICA', 1, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(9, 'PUERTO NARIÑO', 1, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(10, 'PUERTO SANTANDER', 1, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(11, 'TURAPACA', 1, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(12, 'ABEJORRAL', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(13, 'ABRIAQUI', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(14, 'ALEJANDRIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(15, 'AMAGA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(16, 'AMALFI', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(17, 'ANDES', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(18, 'ANGELOPOLIS', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(19, 'ANGOSTURA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(20, 'ANORI', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(21, 'ANTIOQUIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(22, 'ANZA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(23, 'APARTADO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(24, 'ARBOLETES', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(25, 'ARGELIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(26, 'ARMENIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(27, 'BARBOSA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(28, 'BELLO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(29, 'BELMIRA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(30, 'BETANIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(31, 'BETULIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(32, 'BOLIVAR', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(33, 'BRICEÑO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(34, 'BURITICA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(35, 'CACERES', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(36, 'CAICEDO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(37, 'CALDAS', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(38, 'CAMPAMENTO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(39, 'CANASGORDAS', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(40, 'CARACOLI', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(41, 'CARAMANTA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(42, 'CAREPA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(43, 'CARMEN DE VIBORAL', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(44, 'CAROLINA DEL PRINCIPE', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(45, 'CAUCASIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(46, 'CHIGORODO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(47, 'CISNEROS', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(48, 'COCORNA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(49, 'CONCEPCION', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(50, 'CONCORDIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(51, 'COPACABANA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(52, 'DABEIBA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(53, 'DONMATIAS', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(54, 'EBEJICO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(55, 'EL BAGRE', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(56, 'EL PENOL', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(57, 'EL RETIRO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(58, 'ENTRERRIOS', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(59, 'ENVIGADO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(60, 'FREDONIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(61, 'FRONTINO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(62, 'GIRALDO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(63, 'GIRARDOTA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(64, 'GOMEZ PLATA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(65, 'GRANADA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(66, 'GUADALUPE', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(67, 'GUARNE', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(68, 'GUATAQUE', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(69, 'HELICONIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(70, 'HISPANIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(71, 'ITAGUI', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(72, 'ITUANGO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(73, 'JARDIN', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(74, 'JERICO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(75, 'LA CEJA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(76, 'LA ESTRELLA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(77, 'LA PINTADA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(78, 'LA UNION', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(79, 'LIBORINA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(80, 'MACEO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(81, 'MARINILLA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(82, 'MEDELLIN', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(83, 'MONTEBELLO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(84, 'MURINDO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(85, 'MUTATA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(86, 'NARINO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(87, 'NECHI', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(88, 'NECOCLI', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(89, 'OLAYA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(90, 'PEQUE', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(91, 'PUEBLORRICO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(92, 'PUERTO BERRIO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(93, 'PUERTO NARE', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(94, 'PUERTO TRIUNFO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(95, 'REMEDIOS', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(96, 'RIONEGRO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(97, 'SABANALARGA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(98, 'SABANETA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(99, 'SALGAR', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(100, 'SAN ANDRES DE CUERQUIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(101, 'SAN CARLOS', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(102, 'SAN FRANCISCO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(103, 'SAN JERONIMO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(104, 'SAN JOSE DE LA MONTAÑA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(105, 'SAN JUAN DE URABA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(106, 'SAN LUIS', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(107, 'SAN PEDRO DE LOS MILAGROS', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(108, 'SAN PEDRO DE URABA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(109, 'SAN RAFAEL', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(110, 'SAN ROQUE', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(111, 'SAN VICENTE', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(112, 'SANTA BARBARA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(113, 'SANTA ROSA DE OSOS', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(114, 'SANTO DOMINGO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(115, 'SANTUARIO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(116, 'SEGOVIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(117, 'SONSON', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(118, 'SOPETRAN', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(119, 'TAMESIS', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(120, 'TARAZA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(121, 'TARSO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(122, 'TITIRIBI', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(123, 'TOLEDO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(124, 'TURBO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(125, 'URAMITA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(126, 'URRAO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(127, 'VALDIVIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(128, 'VALPARAISO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(129, 'VEGACHI', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(130, 'VENECIA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(131, 'VIGIA DEL FUERTE', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(132, 'YALI', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(133, 'YARUMAL', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(134, 'YOLOMBO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(135, 'YONDO', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(136, 'ZARAGOZA', 2, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(137, 'ARAUCA', 3, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(138, 'ARAUQUITA', 3, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(139, 'CRAVO NORTE', 3, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(140, 'FORTUL', 3, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(141, 'PUERTO RONDON', 3, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(142, 'SARAVENA', 3, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(143, 'TAME', 3, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(144, 'BARANOA', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(145, 'BARRANQUILLA', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(146, 'CAMPO DE LA CRUZ', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(147, 'CANDELARIA', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(148, 'GALAPA', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(149, 'JUAN DE ACOSTA', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(150, 'LURUACO', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(151, 'MALAMBO', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(152, 'MANATI', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(153, 'PALMAR DE VARELA', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(154, 'PIOJO', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(155, 'POLO NUEVO', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(156, 'PONEDERA', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(157, 'PUERTO COLOMBIA', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(158, 'REPELON', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(159, 'SABANAGRANDE', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(160, 'SABANALARGA', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(161, 'SANTA LUCIA', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(162, 'SANTO TOMAS', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(163, 'SOLEDAD', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(164, 'SUAN', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(165, 'TUBARA', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(166, 'USIACURI', 4, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(167, 'ACHI', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(168, 'ALTOS DEL ROSARIO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(169, 'ARENAL', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(170, 'ARJONA', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(171, 'ARROYOHONDO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(172, 'BARRANCO DE LOBA', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(173, 'BRAZUELO DE PAPAYAL', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(174, 'CALAMAR', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(175, 'CANTAGALLO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(176, 'CARTAGENA DE INDIAS', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(177, 'CICUCO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(178, 'CLEMENCIA', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(179, 'CORDOBA', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(180, 'EL CARMEN DE BOLIVAR', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(181, 'EL GUAMO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(182, 'EL PENION', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(183, 'HATILLO DE LOBA', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(184, 'MAGANGUE', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(185, 'MAHATES', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(186, 'MARGARITA', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(187, 'MARIA LA BAJA', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(188, 'MONTECRISTO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(189, 'MORALES', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(190, 'MORALES', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(191, 'NOROSI', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(192, 'PINILLOS', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(193, 'REGIDOR', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(194, 'RIO VIEJO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(195, 'SAN CRISTOBAL', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(196, 'SAN ESTANISLAO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(197, 'SAN FERNANDO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(198, 'SAN JACINTO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(199, 'SAN JACINTO DEL CAUCA', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(200, 'SAN JUAN DE NEPOMUCENO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(201, 'SAN MARTIN DE LOBA', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(202, 'SAN PABLO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(203, 'SAN PABLO NORTE', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(204, 'SANTA CATALINA', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(205, 'SANTA CRUZ DE MOMPOX', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(206, 'SANTA ROSA', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(207, 'SANTA ROSA DEL SUR', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(208, 'SIMITI', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(209, 'SOPLAVIENTO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(210, 'TALAIGUA NUEVO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(211, 'TUQUISIO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(212, 'TURBACO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(213, 'TURBANA', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(214, 'VILLANUEVA', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(215, 'ZAMBRANO', 5, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(216, 'AQUITANIA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(217, 'ARCABUCO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(218, 'BELÉN', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(219, 'BERBEO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(220, 'BETÉITIVA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(221, 'BOAVITA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(222, 'BOYACÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(223, 'BRICEÑO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(224, 'BUENAVISTA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(225, 'BUSBANZÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(226, 'CALDAS', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(227, 'CAMPO HERMOSO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(228, 'CERINZA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(229, 'CHINAVITA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(230, 'CHIQUINQUIRÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(231, 'CHÍQUIZA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(232, 'CHISCAS', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(233, 'CHITA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(234, 'CHITARAQUE', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(235, 'CHIVATÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(236, 'CIÉNEGA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(237, 'CÓMBITA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(238, 'COPER', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(239, 'CORRALES', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(240, 'COVARACHÍA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(241, 'CUBARA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(242, 'CUCAITA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(243, 'CUITIVA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(244, 'DUITAMA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(245, 'EL COCUY', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(246, 'EL ESPINO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(247, 'FIRAVITOBA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(248, 'FLORESTA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(249, 'GACHANTIVÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(250, 'GÁMEZA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(251, 'GARAGOA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(252, 'GUACAMAYAS', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(253, 'GÜICÁN', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(254, 'IZA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(255, 'JENESANO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(256, 'JERICÓ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(257, 'LA UVITA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(258, 'LA VICTORIA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(259, 'LABRANZA GRANDE', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(260, 'MACANAL', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(261, 'MARIPÍ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(262, 'MIRAFLORES', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(263, 'MONGUA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(264, 'MONGUÍ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(265, 'MONIQUIRÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(266, 'MOTAVITA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(267, 'MUZO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(268, 'NOBSA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(269, 'NUEVO COLÓN', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(270, 'OICATÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(271, 'OTANCHE', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(272, 'PACHAVITA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(273, 'PÁEZ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(274, 'PAIPA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(275, 'PAJARITO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(276, 'PANQUEBA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(277, 'PAUNA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(278, 'PAYA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(279, 'PAZ DE RÍO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(280, 'PESCA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(281, 'PISBA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(282, 'PUERTO BOYACA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(283, 'QUÍPAMA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(284, 'RAMIRIQUÍ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(285, 'RÁQUIRA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(286, 'RONDÓN', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(287, 'SABOYÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(288, 'SÁCHICA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(289, 'SAMACÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(290, 'SAN EDUARDO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(291, 'SAN JOSÉ DE PARE', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(292, 'SAN LUÍS DE GACENO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(293, 'SAN MATEO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(294, 'SAN MIGUEL DE SEMA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(295, 'SAN PABLO DE BORBUR', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(296, 'SANTA MARÍA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(297, 'SANTA ROSA DE VITERBO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(298, 'SANTA SOFÍA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(299, 'SANTANA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(300, 'SATIVANORTE', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(301, 'SATIVASUR', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(302, 'SIACHOQUE', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(303, 'SOATÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(304, 'SOCHA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(305, 'SOCOTÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(306, 'SOGAMOSO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(307, 'SORA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(308, 'SORACÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(309, 'SOTAQUIRÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(310, 'SUSACÓN', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(311, 'SUTARMACHÁN', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(312, 'TASCO', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(313, 'TIBANÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(314, 'TIBASOSA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(315, 'TINJACÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(316, 'TIPACOQUE', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(317, 'TOCA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(318, 'TOGÜÍ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(319, 'TÓPAGA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(320, 'TOTA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(321, 'TUNJA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(322, 'TUNUNGUÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(323, 'TURMEQUÉ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(324, 'TUTA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(325, 'TUTAZÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(326, 'UMBITA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(327, 'VENTA QUEMADA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(328, 'VILLA DE LEYVA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(329, 'VIRACACHÁ', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(330, 'ZETAQUIRA', 6, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(331, 'AGUADAS', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(332, 'ANSERMA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(333, 'ARANZAZU', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(334, 'BELALCAZAR', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(335, 'CHINCHINÁ', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(336, 'FILADELFIA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(337, 'LA DORADA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(338, 'LA MERCED', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(339, 'MANIZALES', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(340, 'MANZANARES', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(341, 'MARMATO', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(342, 'MARQUETALIA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(343, 'MARULANDA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(344, 'NEIRA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(345, 'NORCASIA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(346, 'PACORA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(347, 'PALESTINA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(348, 'PENSILVANIA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(349, 'RIOSUCIO', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(350, 'RISARALDA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(351, 'SALAMINA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(352, 'SAMANA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(353, 'SAN JOSE', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(354, 'SUPÍA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(355, 'VICTORIA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(356, 'VILLAMARÍA', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(357, 'VITERBO', 7, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(358, 'ALBANIA', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(359, 'BELÉN ANDAQUIES', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(360, 'CARTAGENA DEL CHAIRA', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(361, 'CURILLO', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(362, 'EL DONCELLO', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(363, 'EL PAUJIL', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(364, 'FLORENCIA', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(365, 'LA MONTAÑITA', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(366, 'MILÁN', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(367, 'MORELIA', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(368, 'PUERTO RICO', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(369, 'SAN  VICENTE DEL CAGUAN', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(370, 'SAN JOSÉ DE FRAGUA', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(371, 'SOLANO', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(372, 'SOLITA', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(373, 'VALPARAÍSO', 8, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(374, 'AGUAZUL', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(375, 'CHAMEZA', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(376, 'HATO COROZAL', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(377, 'LA SALINA', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(378, 'MANÍ', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(379, 'MONTERREY', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(380, 'NUNCHIA', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(381, 'OROCUE', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(382, 'PAZ DE ARIPORO', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(383, 'PORE', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(384, 'RECETOR', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(385, 'SABANA LARGA', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(386, 'SACAMA', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(387, 'SAN LUIS DE PALENQUE', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(388, 'TAMARA', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(389, 'TAURAMENA', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(390, 'TRINIDAD', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(391, 'VILLANUEVA', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(392, 'YOPAL', 9, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(393, 'ALMAGUER', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(394, 'ARGELIA', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(395, 'BALBOA', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(396, 'BOLÍVAR', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(397, 'BUENOS AIRES', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(398, 'CAJIBIO', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(399, 'CALDONO', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(400, 'CALOTO', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(401, 'CORINTO', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(402, 'EL TAMBO', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(403, 'FLORENCIA', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(404, 'GUAPI', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(405, 'INZA', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(406, 'JAMBALÓ', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(407, 'LA SIERRA', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(408, 'LA VEGA', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(409, 'LÓPEZ', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(410, 'MERCADERES', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(411, 'MIRANDA', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(412, 'MORALES', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(413, 'PADILLA', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(414, 'PÁEZ', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(415, 'PATIA (EL BORDO)', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(416, 'PIAMONTE', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(417, 'PIENDAMO', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(418, 'POPAYÁN', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(419, 'PUERTO TEJADA', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(420, 'PURACE', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(421, 'ROSAS', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(422, 'SAN SEBASTIÁN', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(423, 'SANTA ROSA', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(424, 'SANTANDER DE QUILICHAO', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(425, 'SILVIA', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(426, 'SOTARA', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(427, 'SUÁREZ', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(428, 'SUCRE', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(429, 'TIMBÍO', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(430, 'TIMBIQUÍ', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(431, 'TORIBIO', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(432, 'TOTORO', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(433, 'VILLA RICA', 10, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(434, 'AGUACHICA', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(435, 'AGUSTÍN CODAZZI', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(436, 'ASTREA', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(437, 'BECERRIL', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(438, 'BOSCONIA', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(439, 'CHIMICHAGUA', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(440, 'CHIRIGUANÁ', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(441, 'CURUMANÍ', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(442, 'EL COPEY', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(443, 'EL PASO', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(444, 'GAMARRA', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(445, 'GONZÁLEZ', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(446, 'LA GLORIA', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(447, 'LA JAGUA IBIRICO', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(448, 'MANAURE BALCÓN DEL CESAR', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(449, 'PAILITAS', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(450, 'PELAYA', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(451, 'PUEBLO BELLO', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(452, 'RÍO DE ORO', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(453, 'ROBLES (LA PAZ)', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(454, 'SAN ALBERTO', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(455, 'SAN DIEGO', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(456, 'SAN MARTÍN', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(457, 'TAMALAMEQUE', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(458, 'VALLEDUPAR', 11, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(459, 'ACANDI', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(460, 'ALTO BAUDO (PIE DE PATO)', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(461, 'ATRATO', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(462, 'BAGADO', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(463, 'BAHIA SOLANO (MUTIS)', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(464, 'BAJO BAUDO (PIZARRO)', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(465, 'BOJAYA (BELLAVISTA)', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(466, 'CANTON DE SAN PABLO', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(467, 'CARMEN DEL DARIEN', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(468, 'CERTEGUI', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(469, 'CONDOTO', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(470, 'EL CARMEN', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(471, 'ISTMINA', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(472, 'JURADO', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(473, 'LITORAL DEL SAN JUAN', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(474, 'LLORO', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(475, 'MEDIO ATRATO', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(476, 'MEDIO BAUDO (BOCA DE PEPE)', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(477, 'MEDIO SAN JUAN', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(478, 'NOVITA', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(479, 'NUQUI', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(480, 'QUIBDO', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(481, 'RIO IRO', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(482, 'RIO QUITO', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(483, 'RIOSUCIO', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(484, 'SAN JOSE DEL PALMAR', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(485, 'SIPI', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(486, 'TADO', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(487, 'UNGUIA', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(488, 'UNIÓN PANAMERICANA', 12, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(489, 'AYAPEL', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(490, 'BUENAVISTA', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(491, 'CANALETE', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(492, 'CERETÉ', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(493, 'CHIMA', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(494, 'CHINÚ', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(495, 'CIENAGA DE ORO', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(496, 'COTORRA', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(497, 'LA APARTADA', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(498, 'LORICA', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(499, 'LOS CÓRDOBAS', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(500, 'MOMIL', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(501, 'MONTELÍBANO', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(502, 'MONTERÍA', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(503, 'MOÑITOS', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(504, 'PLANETA RICA', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(505, 'PUEBLO NUEVO', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(506, 'PUERTO ESCONDIDO', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(507, 'PUERTO LIBERTADOR', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(508, 'PURÍSIMA', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(509, 'SAHAGÚN', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(510, 'SAN ANDRÉS SOTAVENTO', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(511, 'SAN ANTERO', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(512, 'SAN BERNARDO VIENTO', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(513, 'SAN CARLOS', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(514, 'SAN PELAYO', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(515, 'TIERRALTA', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(516, 'VALENCIA', 13, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(517, 'AGUA DE DIOS', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(518, 'ALBAN', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(519, 'ANAPOIMA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(520, 'ANOLAIMA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(521, 'ARBELAEZ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(522, 'BELTRÁN', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(523, 'BITUIMA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(524, 'BOGOTÁ DC', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(525, 'BOJACÁ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(526, 'CABRERA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(527, 'CACHIPAY', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(528, 'CAJICÁ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(529, 'CAPARRAPÍ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(530, 'CAQUEZA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(531, 'CARMEN DE CARUPA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(532, 'CHAGUANÍ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(533, 'CHIA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(534, 'CHIPAQUE', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(535, 'CHOACHÍ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(536, 'CHOCONTÁ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(537, 'COGUA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(538, 'COTA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(539, 'CUCUNUBÁ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(540, 'EL COLEGIO', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(541, 'EL PEÑÓN', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(542, 'EL ROSAL1', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(543, 'FACATATIVA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(544, 'FÓMEQUE', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(545, 'FOSCA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(546, 'FUNZA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(547, 'FÚQUENE', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(548, 'FUSAGASUGA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(549, 'GACHALÁ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(550, 'GACHANCIPÁ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(551, 'GACHETA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(552, 'GAMA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(553, 'GIRARDOT', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(554, 'GRANADA2', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(555, 'GUACHETÁ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(556, 'GUADUAS', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(557, 'GUASCA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(558, 'GUATAQUÍ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(559, 'GUATAVITA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(560, 'GUAYABAL DE SIQUIMA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(561, 'GUAYABETAL', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(562, 'GUTIÉRREZ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(563, 'JERUSALÉN', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(564, 'JUNÍN', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(565, 'LA CALERA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(566, 'LA MESA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(567, 'LA PALMA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(568, 'LA PEÑA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(569, 'LA VEGA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(570, 'LENGUAZAQUE', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(571, 'MACHETÁ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(572, 'MADRID', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(573, 'MANTA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(574, 'MEDINA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(575, 'MOSQUERA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(576, 'NARIÑO', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(577, 'NEMOCÓN', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(578, 'NILO', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(579, 'NIMAIMA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(580, 'NOCAIMA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(581, 'OSPINA PÉREZ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(582, 'PACHO', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(583, 'PAIME', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(584, 'PANDI', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(585, 'PARATEBUENO', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(586, 'PASCA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(587, 'PUERTO SALGAR', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(588, 'PULÍ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(589, 'QUEBRADANEGRA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(590, 'QUETAME', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(591, 'QUIPILE', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(592, 'RAFAEL REYES', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(593, 'RICAURTE', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(594, 'SAN  ANTONIO DEL  TEQUENDAMA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(595, 'SAN BERNARDO', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(596, 'SAN CAYETANO', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(597, 'SAN FRANCISCO', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(598, 'SAN JUAN DE RIOSECO', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(599, 'SASAIMA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(600, 'SESQUILÉ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(601, 'SIBATÉ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(602, 'SILVANIA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(603, 'SIMIJACA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(604, 'SOACHA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(605, 'SOPO', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(606, 'SUBACHOQUE', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(607, 'SUESCA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(608, 'SUPATÁ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(609, 'SUSA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(610, 'SUTATAUSA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(611, 'TABIO', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(612, 'TAUSA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(613, 'TENA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(614, 'TENJO', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(615, 'TIBACUY', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(616, 'TIBIRITA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(617, 'TOCAIMA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(618, 'TOCANCIPÁ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(619, 'TOPAIPÍ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(620, 'UBALÁ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(621, 'UBAQUE', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(622, 'UBATÉ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(623, 'UNE', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(624, 'UTICA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(625, 'VERGARA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(626, 'VIANI', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(627, 'VILLA GOMEZ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(628, 'VILLA PINZÓN', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(629, 'VILLETA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(630, 'VIOTA', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(631, 'YACOPÍ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(632, 'ZIPACÓN', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(633, 'ZIPAQUIRÁ', 14, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(634, 'BARRANCO MINAS', 15, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(635, 'CACAHUAL', 15, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(636, 'INÍRIDA', 15, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(637, 'LA GUADALUPE', 15, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(638, 'MAPIRIPANA', 15, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(639, 'MORICHAL', 15, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(640, 'PANA PANA', 15, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(641, 'PUERTO COLOMBIA', 15, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(642, 'SAN FELIPE', 15, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(643, 'CALAMAR', 16, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(644, 'EL RETORNO', 16, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(645, 'MIRAFLOREZ', 16, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(646, 'SAN JOSÉ DEL GUAVIARE', 16, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(647, 'ACEVEDO', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(648, 'AGRADO', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(649, 'AIPE', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(650, 'ALGECIRAS', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(651, 'ALTAMIRA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(652, 'BARAYA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(653, 'CAMPO ALEGRE', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(654, 'COLOMBIA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(655, 'ELIAS', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(656, 'GARZÓN', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(657, 'GIGANTE', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(658, 'GUADALUPE', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(659, 'HOBO', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(660, 'IQUIRA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(661, 'ISNOS', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(662, 'LA ARGENTINA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(663, 'LA PLATA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(664, 'NATAGA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(665, 'NEIVA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(666, 'OPORAPA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(667, 'PAICOL', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(668, 'PALERMO', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(669, 'PALESTINA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(670, 'PITAL', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(671, 'PITALITO', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(672, 'RIVERA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(673, 'SALADO BLANCO', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(674, 'SAN AGUSTÍN', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(675, 'SANTA MARIA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(676, 'SUAZA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(677, 'TARQUI', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(678, 'TELLO', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(679, 'TERUEL', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(680, 'TESALIA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(681, 'TIMANA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(682, 'VILLAVIEJA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL);
INSERT INTO `municipios` (`id`, `nombre`, `id_departamento`, `created_at`, `updated_at`, `deleted_at`) VALUES
(683, 'YAGUARA', 17, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(684, 'ALBANIA', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(685, 'BARRANCAS', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(686, 'DIBULLA', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(687, 'DISTRACCIÓN', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(688, 'EL MOLINO', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(689, 'FONSECA', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(690, 'HATO NUEVO', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(691, 'LA JAGUA DEL PILAR', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(692, 'MAICAO', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(693, 'MANAURE', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(694, 'RIOHACHA', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(695, 'SAN JUAN DEL CESAR', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(696, 'URIBIA', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(697, 'URUMITA', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(698, 'VILLANUEVA', 18, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(699, 'ALGARROBO', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(700, 'ARACATACA', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(701, 'ARIGUANI', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(702, 'CERRO SAN ANTONIO', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(703, 'CHIVOLO', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(704, 'CIENAGA', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(705, 'CONCORDIA', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(706, 'EL BANCO', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(707, 'EL PIÑON', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(708, 'EL RETEN', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(709, 'FUNDACION', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(710, 'GUAMAL', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(711, 'NUEVA GRANADA', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(712, 'PEDRAZA', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(713, 'PIJIÑO DEL CARMEN', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(714, 'PIVIJAY', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(715, 'PLATO', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(716, 'PUEBLO VIEJO', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(717, 'REMOLINO', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(718, 'SABANAS DE SAN ANGEL', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(719, 'SALAMINA', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(720, 'SAN SEBASTIAN DE BUENAVISTA', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(721, 'SAN ZENON', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(722, 'SANTA ANA', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(723, 'SANTA BARBARA DE PINTO', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(724, 'SANTA MARTA', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(725, 'SITIONUEVO', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(726, 'TENERIFE', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(727, 'ZAPAYAN', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(728, 'ZONA BANANERA', 19, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(729, 'ACACIAS', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(730, 'BARRANCA DE UPIA', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(731, 'CABUYARO', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(732, 'CASTILLA LA NUEVA', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(733, 'CUBARRAL', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(734, 'CUMARAL', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(735, 'EL CALVARIO', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(736, 'EL CASTILLO', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(737, 'EL DORADO', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(738, 'FUENTE DE ORO', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(739, 'GRANADA', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(740, 'GUAMAL', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(741, 'LA MACARENA', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(742, 'LA URIBE', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(743, 'LEJANÍAS', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(744, 'MAPIRIPÁN', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(745, 'MESETAS', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(746, 'PUERTO CONCORDIA', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(747, 'PUERTO GAITÁN', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(748, 'PUERTO LLERAS', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(749, 'PUERTO LÓPEZ', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(750, 'PUERTO RICO', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(751, 'RESTREPO', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(752, 'SAN  JUAN DE ARAMA', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(753, 'SAN CARLOS GUAROA', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(754, 'SAN JUANITO', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(755, 'SAN MARTÍN', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(756, 'VILLAVICENCIO', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(757, 'VISTA HERMOSA', 20, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(758, 'ALBAN', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(759, 'ALDAÑA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(760, 'ANCUYA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(761, 'ARBOLEDA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(762, 'BARBACOAS', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(763, 'BELEN', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(764, 'BUESACO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(765, 'CHACHAGUI', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(766, 'COLON (GENOVA)', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(767, 'CONSACA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(768, 'CONTADERO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(769, 'CORDOBA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(770, 'CUASPUD', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(771, 'CUMBAL', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(772, 'CUMBITARA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(773, 'EL CHARCO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(774, 'EL PEÑOL', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(775, 'EL ROSARIO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(776, 'EL TABLÓN', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(777, 'EL TAMBO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(778, 'FUNES', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(779, 'GUACHUCAL', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(780, 'GUAITARILLA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(781, 'GUALMATAN', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(782, 'ILES', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(783, 'IMUES', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(784, 'IPIALES', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(785, 'LA CRUZ', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(786, 'LA FLORIDA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(787, 'LA LLANADA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(788, 'LA TOLA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(789, 'LA UNION', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(790, 'LEIVA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(791, 'LINARES', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(792, 'LOS ANDES', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(793, 'MAGUI', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(794, 'MALLAMA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(795, 'MOSQUEZA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(796, 'NARIÑO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(797, 'OLAYA HERRERA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(798, 'OSPINA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(799, 'PASTO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(800, 'PIZARRO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(801, 'POLICARPA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(802, 'POTOSI', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(803, 'PROVIDENCIA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(804, 'PUERRES', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(805, 'PUPIALES', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(806, 'RICAURTE', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(807, 'ROBERTO PAYAN', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(808, 'SAMANIEGO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(809, 'SAN BERNARDO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(810, 'SAN LORENZO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(811, 'SAN PABLO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(812, 'SAN PEDRO DE CARTAGO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(813, 'SANDONA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(814, 'SANTA BARBARA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(815, 'SANTACRUZ', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(816, 'SAPUYES', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(817, 'TAMINANGO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(818, 'TANGUA', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(819, 'TUMACO', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(820, 'TUQUERRES', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(821, 'YACUANQUER', 21, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(822, 'ABREGO', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(823, 'ARBOLEDAS', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(824, 'BOCHALEMA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(825, 'BUCARASICA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(826, 'CÁCHIRA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(827, 'CÁCOTA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(828, 'CHINÁCOTA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(829, 'CHITAGÁ', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(830, 'CONVENCIÓN', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(831, 'CÚCUTA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(832, 'CUCUTILLA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(833, 'DURANIA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(834, 'EL CARMEN', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(835, 'EL TARRA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(836, 'EL ZULIA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(837, 'GRAMALOTE', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(838, 'HACARI', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(839, 'HERRÁN', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(840, 'LA ESPERANZA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(841, 'LA PLAYA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(842, 'LABATECA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(843, 'LOS PATIOS', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(844, 'LOURDES', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(845, 'MUTISCUA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(846, 'OCAÑA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(847, 'PAMPLONA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(848, 'PAMPLONITA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(849, 'PUERTO SANTANDER', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(850, 'RAGONVALIA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(851, 'SALAZAR', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(852, 'SAN CALIXTO', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(853, 'SAN CAYETANO', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(854, 'SANTIAGO', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(855, 'SARDINATA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(856, 'SILOS', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(857, 'TEORAMA', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(858, 'TIBÚ', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(859, 'TOLEDO', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(860, 'VILLA CARO', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(861, 'VILLA DEL ROSARIO', 22, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(862, 'COLÓN', 23, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(863, 'MOCOA', 23, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(864, 'ORITO', 23, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(865, 'PUERTO ASÍS', 23, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(866, 'PUERTO CAYCEDO', 23, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(867, 'PUERTO GUZMÁN', 23, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(868, 'PUERTO LEGUÍZAMO', 23, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(869, 'SAN FRANCISCO', 23, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(870, 'SAN MIGUEL', 23, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(871, 'SANTIAGO', 23, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(872, 'SIBUNDOY', 23, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(873, 'VALLE DEL GUAMUEZ', 23, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(874, 'VILLAGARZÓN', 23, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(875, 'ARMENIA', 24, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(876, 'BUENAVISTA', 24, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(877, 'CALARCÁ', 24, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(878, 'CIRCASIA', 24, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(879, 'CÓRDOBA', 24, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(880, 'FILANDIA', 24, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(881, 'GÉNOVA', 24, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(882, 'LA TEBAIDA', 24, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(883, 'MONTENEGRO', 24, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(884, 'PIJAO', 24, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(885, 'QUIMBAYA', 24, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(886, 'SALENTO', 24, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(887, 'APIA', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(888, 'BALBOA', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(889, 'BELÉN DE UMBRÍA', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(890, 'DOS QUEBRADAS', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(891, 'GUATICA', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(892, 'LA CELIA', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(893, 'LA VIRGINIA', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(894, 'MARSELLA', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(895, 'MISTRATO', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(896, 'PEREIRA', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(897, 'PUEBLO RICO', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(898, 'QUINCHÍA', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(899, 'SANTA ROSA DE CABAL', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(900, 'SANTUARIO', 25, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(901, 'PROVIDENCIA', 26, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(902, 'SAN ANDRES', 26, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(903, 'SANTA CATALINA', 26, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(904, 'AGUADA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(905, 'ALBANIA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(906, 'ARATOCA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(907, 'BARBOSA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(908, 'BARICHARA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(909, 'BARRANCABERMEJA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(910, 'BETULIA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(911, 'BOLÍVAR', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(912, 'BUCARAMANGA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(913, 'CABRERA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(914, 'CALIFORNIA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(915, 'CAPITANEJO', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(916, 'CARCASI', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(917, 'CEPITA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(918, 'CERRITO', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(919, 'CHARALÁ', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(920, 'CHARTA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(921, 'CHIMA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(922, 'CHIPATÁ', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(923, 'CIMITARRA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(924, 'CONCEPCIÓN', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(925, 'CONFINES', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(926, 'CONTRATACIÓN', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(927, 'COROMORO', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(928, 'CURITÍ', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(929, 'EL CARMEN', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(930, 'EL GUACAMAYO', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(931, 'EL PEÑÓN', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(932, 'EL PLAYÓN', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(933, 'ENCINO', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(934, 'ENCISO', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(935, 'FLORIÁN', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(936, 'FLORIDABLANCA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(937, 'GALÁN', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(938, 'GAMBITA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(939, 'GIRÓN', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(940, 'GUACA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(941, 'GUADALUPE', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(942, 'GUAPOTA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(943, 'GUAVATÁ', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(944, 'GUEPSA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(945, 'HATO', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(946, 'JESÚS MARIA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(947, 'JORDÁN', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(948, 'LA BELLEZA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(949, 'LA PAZ', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(950, 'LANDAZURI', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(951, 'LEBRIJA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(952, 'LOS SANTOS', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(953, 'MACARAVITA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(954, 'MÁLAGA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(955, 'MATANZA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(956, 'MOGOTES', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(957, 'MOLAGAVITA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(958, 'OCAMONTE', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(959, 'OIBA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(960, 'ONZAGA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(961, 'PALMAR', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(962, 'PALMAS DEL SOCORRO', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(963, 'PÁRAMO', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(964, 'PIEDECUESTA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(965, 'PINCHOTE', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(966, 'PUENTE NACIONAL', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(967, 'PUERTO PARRA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(968, 'PUERTO WILCHES', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(969, 'RIONEGRO', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(970, 'SABANA DE TORRES', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(971, 'SAN ANDRÉS', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(972, 'SAN BENITO', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(973, 'SAN GIL', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(974, 'SAN JOAQUÍN', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(975, 'SAN JOSÉ DE MIRANDA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(976, 'SAN MIGUEL', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(977, 'SAN VICENTE DE CHUCURÍ', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(978, 'SANTA BÁRBARA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(979, 'SANTA HELENA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(980, 'SIMACOTA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(981, 'SOCORRO', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(982, 'SUAITA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(983, 'SUCRE', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(984, 'SURATA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(985, 'TONA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(986, 'VALLE SAN JOSÉ', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(987, 'VÉLEZ', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(988, 'VETAS', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(989, 'VILLANUEVA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(990, 'ZAPATOCA', 27, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(991, 'BUENAVISTA', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(992, 'CAIMITO', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(993, 'CHALÁN', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(994, 'COLOSO', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(995, 'COROZAL', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(996, 'EL ROBLE', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(997, 'GALERAS', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(998, 'GUARANDA', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(999, 'LA UNIÓN', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1000, 'LOS PALMITOS', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1001, 'MAJAGUAL', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1002, 'MORROA', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1003, 'OVEJAS', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1004, 'PALMITO', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1005, 'SAMPUES', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1006, 'SAN BENITO ABAD', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1007, 'SAN JUAN DE BETULIA', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1008, 'SAN MARCOS', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1009, 'SAN ONOFRE', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1010, 'SAN PEDRO', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1011, 'SINCÉ', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1012, 'SINCELEJO', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1013, 'SUCRE', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1014, 'TOLÚ', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1015, 'TOLUVIEJO', 28, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1016, 'ALPUJARRA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1017, 'ALVARADO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1018, 'AMBALEMA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1019, 'ANZOATEGUI', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1020, 'ARMERO (GUAYABAL)', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1021, 'ATACO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1022, 'CAJAMARCA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1023, 'CARMEN DE APICALÁ', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1024, 'CASABIANCA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1025, 'CHAPARRAL', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1026, 'COELLO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1027, 'COYAIMA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1028, 'CUNDAY', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1029, 'DOLORES', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1030, 'ESPINAL', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1031, 'FALÁN', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1032, 'FLANDES', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1033, 'FRESNO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1034, 'GUAMO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1035, 'HERVEO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1036, 'HONDA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1037, 'IBAGUÉ', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1038, 'ICONONZO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1039, 'LÉRIDA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1040, 'LÍBANO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1041, 'MARIQUITA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1042, 'MELGAR', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1043, 'MURILLO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1044, 'NATAGAIMA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1045, 'ORTEGA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1046, 'PALOCABILDO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1047, 'PIEDRAS PLANADAS', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1048, 'PRADO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1049, 'PURIFICACIÓN', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1050, 'RIOBLANCO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1051, 'RONCESVALLES', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1052, 'ROVIRA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1053, 'SALDAÑA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1054, 'SAN ANTONIO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1055, 'SAN LUIS', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1056, 'SANTA ISABEL', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1057, 'SUÁREZ', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1058, 'VALLE DE SAN JUAN', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1059, 'VENADILLO', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1060, 'VILLAHERMOSA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1061, 'VILLARRICA', 29, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1062, 'ALCALÁ', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1063, 'ANDALUCÍA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1064, 'ANSERMA NUEVO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1065, 'ARGELIA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1066, 'BOLÍVAR', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1067, 'BUENAVENTURA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1068, 'BUGA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1069, 'BUGALAGRANDE', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1070, 'CAICEDONIA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1071, 'CALI', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1072, 'CALIMA (DARIEN)', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1073, 'CANDELARIA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1074, 'CARTAGO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1075, 'DAGUA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1076, 'EL AGUILA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1077, 'EL CAIRO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1078, 'EL CERRITO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1079, 'EL DOVIO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1080, 'FLORIDA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1081, 'GINEBRA GUACARI', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1082, 'JAMUNDÍ', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1083, 'LA CUMBRE', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1084, 'LA UNIÓN', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1085, 'LA VICTORIA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1086, 'OBANDO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1087, 'PALMIRA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1088, 'PRADERA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1089, 'RESTREPO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1090, 'RIO FRÍO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1091, 'ROLDANILLO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1092, 'SAN PEDRO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1093, 'SEVILLA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1094, 'TORO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1095, 'TRUJILLO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1096, 'TULÚA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1097, 'ULLOA', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1098, 'VERSALLES', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1099, 'VIJES', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1100, 'YOTOCO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1101, 'YUMBO', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1102, 'ZARZAL', 30, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1103, 'CARURÚ', 31, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1104, 'MITÚ', 31, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1105, 'PACOA', 31, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1106, 'PAPUNAUA', 31, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1107, 'TARAIRA', 31, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1108, 'YAVARATÉ', 31, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1109, 'CUMARIBO', 32, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1110, 'LA PRIMAVERA', 32, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1111, 'PUERTO CARREÑO', 32, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL),
(1112, 'SANTA ROSALIA', 32, '2017-04-10 19:12:50', '2017-04-10 19:12:50', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(10) UNSIGNED NOT NULL,
  `nota` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `tipo`, `user_id`, `proyecto_id`, `nota`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'coordinador', 14, 1, 'Muy bien sigue asi...', '2017-04-20 02:37:14', '2017-04-20 02:37:14', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modalidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `nombre`, `modalidad`, `area_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ADMINISTRACIÓN DE EMPRESAS', '', 1, '2017-04-11 17:26:11', '2017-04-11 17:26:11', NULL),
(2, 'ADMINISTRACIÓN DE EMPRESAS AGROINDUSTRIALES', '', 1, '2017-04-11 17:26:24', '2017-04-11 17:26:24', NULL),
(3, 'ADMINISTRACIÓN TÚRISTICA Y HOTELERA', '', 1, '2017-04-11 17:26:31', '2017-04-11 17:26:31', NULL),
(4, 'ADMINISTRACIÓN DE SERVICIOS DE SALUD ', '', 1, '2017-04-11 17:29:30', '2017-04-11 17:29:30', NULL),
(5, 'CONTADURÍA PÚBLICA ', '', 1, '2017-04-11 17:29:42', '2017-04-11 17:29:42', NULL),
(6, 'NEGOCIOS INTERNACIONALES ', '', 1, '2017-04-11 17:29:50', '2017-04-11 17:29:50', NULL),
(7, 'ADMINISTRACIÓN PÚBLICA ', '', 1, '2017-04-11 17:29:57', '2017-04-11 17:29:57', NULL),
(8, 'DISEÑO GRÁFICO', '', 2, '2017-04-11 17:30:09', '2017-04-11 17:30:09', NULL),
(9, 'DISEÑO DE MODAS', '', 2, '2017-04-11 17:30:18', '2017-04-11 17:30:18', NULL),
(10, 'DIRECCIÓN Y PRODUCCIÓN DE MEDIOS AUDIOVISUALES ', '', 2, '2017-04-11 17:30:27', '2017-04-11 17:30:27', NULL),
(11, 'COMUNICACIÓN SOCIAL', '', 2, '2017-04-11 17:30:34', '2017-04-11 17:30:34', NULL),
(12, 'INGENIERÍA DE SISTEMAS', '', 3, '2017-04-11 17:30:44', '2017-04-11 17:30:44', NULL),
(13, 'INGENIERÍA ELECTRÓNICA', '', 3, '2017-04-11 17:30:55', '2017-04-11 17:30:55', NULL),
(14, 'POSGRADO EN GERENCIA DE LA INDUSTRIA DE LA MODA', '', 5, '2017-04-11 17:32:04', '2017-04-11 17:32:04', NULL),
(15, 'POSGRADO EN PAZ Y DESARROLLO TERRITORIAL', '', 5, '2017-04-11 17:32:14', '2017-04-11 17:32:14', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(10) UNSIGNED NOT NULL,
  `pais` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Colombia',
  `universidad` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Corporacion Unificada Nacional de Educacion Superior (CUN)',
  `regional_id` int(10) UNSIGNED NOT NULL,
  `semillero_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `programa_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `estado_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `linea_id` int(10) UNSIGNED NOT NULL,
  `grupojurado_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `evento_expo_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `tipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `progreso_estimado` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '5',
  `boo_publicacion` tinyint(1) NOT NULL DEFAULT '0',
  `detalles_publicacion` text COLLATE utf8_unicode_ci NOT NULL,
  `boo_solicitud_revision` tinyint(1) NOT NULL DEFAULT '0',
  `boo_contenido` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `pais`, `universidad`, `regional_id`, `semillero_id`, `area_id`, `programa_id`, `user_id`, `estado_id`, `linea_id`, `grupojurado_id`, `evento_expo_id`, `tipo`, `titulo`, `descripcion`, `progreso_estimado`, `boo_publicacion`, `detalles_publicacion`, `boo_solicitud_revision`, `boo_contenido`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Colombia', 'Corporacion Unificada Nacional de Educacion Superior (CUN)', 5, 1, 3, 12, 1, 3, 2, 1, 1, 'n/d', 'Diseño e implementación de un aplicativo web para la gestión de proyectos de investigación.', 'El proyecto es la forma práctica de implementar la estrategia mediante la combinación de un conjunto de recursos humanos, naturales, financieros y de organización.\r\n\r\nA continuación se presenta el estado actual de formulación de proyectos al nivel alcanzado por el Programa de Descentralización y Desarrollo de la Región del Pacífico. Esto representa un primer paso en la implementación de la estrategia integral, Si se considera la planificación como la elaboración de un plan completo y definitivo, entonces todos los proyectos que requiere la estrategia deberían ser preparados al nivel de factibilidad, para poder compararlos y decidir su ejecución. Si se considera la planificación como un proceso de elaboración y mejoramiento continuo, entonces podrán tomarse ciertas decisiones sobre los proyectos que tengan distintos niveles de madurez, a sabiendas que la disponibilidad de nuevas informaciones hará factible tomar decisiones nuevas o efectuar reajustes.\r\n\r\nAl presentar un diagnóstico sobre las potencialidades y necesidades regionales, acompañado por la formulación de una estrategia integral que señala prioridades espaciales, sectoriales y transversales, se considera que existen las bases para la formulación continua de proyectos de desarrollo. Los que se presentan en este capítulo fueron seleccionados en un primer análisis como prioritarios, ya que son los que mejor implementan la estrategia integral en sus aspectos principales de descentralización concentrada (prioridad a la Zona de Equilibrio Regional ZER) y de integración intra e intersectorial (necesidad de fomentar complejos de actividades económicas con efectos encadenantes).\r\n\r\nLa descentralización y el desarrollo regional no se lograran mediante la realización de proyectos en forma aislada con poca o nula vinculación sectorial y espacial. La estrategia planteada sólo cobrará fuerza si se realiza a través de acciones fuertemente enlazadas, coordinadas y concentradas en algunos sectores, zonas y centros urbanos o rurales considerados clave. Los proyectos presentados tratan de ilustrar de manera concreta y realista estos principios. Su selección se hizo con base en los siguientes criterios: la rentabilidad propia del proyecto; su aporte al crecimiento del sector respectivo y a la integración sectorial; su contribución - mediante su localización - a la descentralización y a la integración espacial. Su estudio se realizó con distinto grado de detalle, de acuerdo con la información disponible y el estado de avance de los trabajos anteriores.\r\n\r\nSe han denominado \"ideas de proyecto\" las posibilidades de acción o de inversión determinadas por una situación ventajosa en el mercado, por la existencia de un recurso ocioso o no utilizado, o por una necesidad evidente. La \"idea\" identifica el proyecto, su campo de acción y a veces su magnitud, pero no entra a determinar costos ni beneficios en términos monetarios.', '5', 0, '', 0, 1, '2017-04-16 01:29:27', '2017-04-20 02:37:14', NULL),
(2, 'Colombia', 'Corporacion Unificada Nacional de Educacion Superior (CUN)', 5, 1, 1, 4, 1, 1, 1, 1, 1, 'Proyecto de Investigación', 'La diabetes en la sociedad actual La diabetes como estigma en la sociedad ', 'Introducción\r\n\r\nLa diabetes es una enfermedad que afecta a un gran margen de la sociedad, el estudio de esta enfermedad toma gran actividad en los expertos del tema, quienes investigan sin descanso los fenómenos que afectan al hombre.\r\n\r\nPlanteamiento\r\n\r\nLa diabetes es una enfermedad que afecta a un número muy elevado de personas en México, existen muchos textos e investigaciones al respecto, y declaran estos documentos que las personas de tez obscura e indígena (autóctono de américa), son particularmente vulnerables a esta enfermedad.\r\n\r\nObjetivos\r\n\r\nEl objetivo de esta investigación, es comprobar y delimitar la propensión de la población nacional a la diabetes, y la influencia de las costumbres y tradiciones como propulsores en el padecimiento. El tratamiento y la influencia cultural alimenticia y la actividad física y el sedentarismo social.\r\n\r\n', '5', 0, '', 0, 0, '2017-04-17 06:54:34', '2017-04-17 06:54:34', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regionals`
--

CREATE TABLE `regionals` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `regionals`
--

INSERT INTO `regionals` (`id`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Regional Antioquia', '2017-04-12 12:02:10', '2017-04-12 12:02:10', NULL),
(2, 'Regional Bogotá', '2017-04-12 12:02:22', '2017-04-12 12:02:22', NULL),
(3, 'Regional Caquetá', '2017-04-12 12:02:29', '2017-04-12 12:02:29', NULL),
(4, 'Regional Casanare', '2017-04-12 12:02:38', '2017-04-12 12:02:38', NULL),
(5, 'Regional Córdoba', '2017-04-12 12:02:45', '2017-04-12 12:02:45', NULL),
(6, 'Regional Cundinamarca', '2017-04-12 12:02:51', '2017-04-12 12:02:51', NULL),
(7, 'Regional Costa Caribe', '2017-04-12 12:02:59', '2017-04-12 12:02:59', NULL),
(8, 'Regional Huila', '2017-04-12 12:03:05', '2017-04-12 12:03:05', NULL),
(9, 'Regional Magdalena', '2017-04-12 12:03:11', '2017-04-12 12:03:11', NULL),
(10, 'Regional Meta', '2017-04-12 12:03:21', '2017-04-12 12:03:21', NULL),
(11, 'Regional Nariño', '2017-04-12 12:03:30', '2017-04-12 12:03:30', NULL),
(12, 'Regional Norte de Santander', '2017-04-12 12:03:41', '2017-04-12 12:03:41', NULL),
(13, 'Regional Quindio', '2017-04-12 12:03:48', '2017-04-12 12:03:48', NULL),
(14, 'Regional Risaralda', '2017-04-12 12:03:54', '2017-04-12 12:03:54', NULL),
(15, 'Regional Sucre', '2017-04-12 12:04:00', '2017-04-12 12:04:00', NULL),
(16, 'Regional Tolima', '2017-04-12 12:04:08', '2017-04-12 12:04:08', NULL),
(17, 'Regional Valle del Cauca', '2017-04-12 12:04:14', '2017-04-12 12:04:14', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_integras`
--

CREATE TABLE `rel_integras` (
  `id` int(10) UNSIGNED NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `boo_ponente` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `municipio_id` int(10) UNSIGNED NOT NULL,
  `regional_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `nombre`, `direccion`, `telefono`, `info`, `municipio_id`, `regional_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sede central Monteria', 'Carrera 4 - 38', '(034) 768 00', 'sin información', 502, 5, '2017-04-12 13:04:23', '2017-04-12 14:39:53', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semilleros`
--

CREATE TABLE `semilleros` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `director_id` int(10) UNSIGNED NOT NULL,
  `coordinador_id` int(11) NOT NULL,
  `estudiante_lider_id` int(10) UNSIGNED NOT NULL,
  `regional_id` int(10) UNSIGNED NOT NULL,
  `grupo_investigacion_id` int(10) UNSIGNED NOT NULL,
  `informacion` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `semilleros`
--

INSERT INTO `semilleros` (`id`, `nombre`, `director_id`, `coordinador_id`, `estudiante_lider_id`, `regional_id`, `grupo_investigacion_id`, `informacion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Semillero Investigativo Cun Monteria', 11, 6, 1, 5, 1, 'no dispobible', '2017-04-12 22:20:40', '2017-04-12 22:20:40', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos`
--

CREATE TABLE `titulos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capitulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `titulos`
--

INSERT INTO `titulos` (`id`, `codigo`, `titulo`, `capitulo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a1', 'RESUMEN ANALÍTICO (RAE)', 'RAE', '2017-04-19 07:25:11', '2017-04-19 07:25:11', NULL),
(2, 'a2', 'DESCRIPCIÓN DEL PROBLEMA ', 'CAPITULO I. PROBLEMA', '2017-04-19 07:25:30', '2017-04-19 21:42:32', NULL),
(3, 'a3', 'SISTEMATIZACIÓN DEL PROBLEMA', 'CAPITULO I. PROBLEMA', '2017-04-19 07:26:25', '2017-04-19 21:42:38', NULL),
(4, 'a4', 'OBJETIVO GENERAL', 'CAPÍTULO II: OBJETIVOS DE LA INVESTIGACIÓN', '2017-04-19 07:27:05', '2017-04-19 07:27:05', NULL),
(5, 'a5', 'OBJETIVOS ESPECÍFICOS', 'CAPÍTULO III: JUSTIFICACIÓN DE LA INVESTIGACIÓN', '2017-04-19 07:27:19', '2017-04-19 07:27:25', NULL),
(6, 'a6', 'TABLA DE OBJETIVOS', 'CAPÍTULO II: OBJETIVOS DE LA INVESTIGACIÓN', '2017-04-19 07:27:41', '2017-04-19 07:27:41', NULL),
(7, 'a7', 'JUSTIFICACIÓN', 'CAPÍTULO III: JUSTIFICACIÓN DE LA INVESTIGACIÓN', '2017-04-19 07:28:18', '2017-04-19 07:28:18', NULL),
(8, 'a8', 'REFERENTES INVESTIGATIVOS', 'CAPÍTULO IV: MARCO REFERENCIAL', '2017-04-19 07:28:58', '2017-04-19 07:28:58', NULL),
(9, 'a9', 'ANTECEDENTES', 'CAPÍTULO IV: MARCO REFERENCIAL', '2017-04-19 07:29:24', '2017-04-19 07:33:50', NULL),
(10, 'a10', 'MARCO LEGAL', 'CAPÍTULO IV: MARCO REFERENCIAL', '2017-04-19 07:29:44', '2017-04-19 07:33:55', NULL),
(11, 'a11', 'BASES TEÓRICO – CONCEPTUALES', 'CAPÍTULO V: MARCO TEÓRICO', '2017-04-19 07:29:58', '2017-04-19 07:34:03', NULL),
(12, 'a12', 'CONCEPTOS', 'CAPÍTULO V: MARCO TEÓRICO', '2017-04-19 07:30:29', '2017-04-19 07:34:10', NULL),
(13, 'a13', 'METODOLOGÍA', 'CAPÍTULO VI: DISEÑO METODOLÓGICO Ó DISEÑO TECNOLÓGICO', '2017-04-19 07:30:54', '2017-04-19 07:30:54', NULL),
(14, 'a14', 'TIPO DE ESTUDIO', 'CAPÍTULO VI: DISEÑO METODOLÓGICO Ó DISEÑO TECNOLÓGICO', '2017-04-19 07:31:11', '2017-04-19 07:31:11', NULL),
(15, 'a15', 'MÉTODO', 'CAPÍTULO VI: DISEÑO METODOLÓGICO Ó DISEÑO TECNOLÓGICO', '2017-04-19 07:31:38', '2017-04-19 07:31:38', NULL),
(16, 'a16', 'LÍNEA y SUBLÍNEA DE INVESTIGACIÓN', 'CAPÍTULO VI: DISEÑO METODOLÓGICO Ó DISEÑO TECNOLÓGICO', '2017-04-19 07:31:55', '2017-04-19 07:31:55', NULL),
(17, 'a17', 'TÉCNICAS O INSTRUMENTOS DE RECOLECCIÓN DE  INFORMACIÓN', 'CAPÍTULO VI: DISEÑO METODOLÓGICO Ó DISEÑO TECNOLÓGICO', '2017-04-19 07:32:12', '2017-04-19 07:32:12', NULL),
(18, 'a18', 'ETAPAS DE INVESTIGACIÓN', 'CAPÍTULO VI: DISEÑO METODOLÓGICO Ó DISEÑO TECNOLÓGICO', '2017-04-19 07:32:28', '2017-04-19 07:32:28', NULL),
(19, 'a19', 'POBLACIÓN Y MUESTRA', 'CAPÍTULO VI: DISEÑO METODOLÓGICO Ó DISEÑO TECNOLÓGICO', '2017-04-19 07:32:39', '2017-04-19 07:32:39', NULL),
(20, 'a20', 'FUENTES DE INFORMACIÓN', 'CAPÍTULO VI: DISEÑO METODOLÓGICO Ó DISEÑO TECNOLÓGICO', '2017-04-19 07:32:49', '2017-04-19 07:32:49', NULL),
(21, 'a21', 'CONCLUSIONES', 'CAPÍTULO VII: CONCLUSIONES Y RECOMENDACIONES', '2017-04-19 07:32:59', '2017-04-19 07:32:59', NULL),
(22, 'a22', 'RECOMENDACIONES', 'CAPÍTULO VII: CONCLUSIONES Y RECOMENDACIONES', '2017-04-19 07:33:14', '2017-04-19 07:33:14', NULL),
(23, 'a23', 'APÉNDICE', 'CAPÍTULO VIII: FUENTES DE INFORMACIÓN', '2017-04-19 07:33:31', '2017-04-19 07:33:31', NULL),
(24, 'a24', 'ANEXOS', 'CAPÍTULO VIII: FUENTES DE INFORMACIÓN', '2017-04-19 07:33:42', '2017-04-19 07:33:42', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('administrador','coordinador','docente','jurado','estudiante','invitado','aux') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellidos`, `cedula`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eduard', 'Ramos', '1017211783', 'xseduard@gmail.com', '$2y$10$0NRS69Ape3iTdlaYfwz99uxifPSJGiqD7Gn7dKmJhFg6e7evPwWQG', 'administrador', 'ke7o7BZXlKKUbP98XCBbDNblAJJfKOU2Phoia4CWketAwt5bNIOdm5pOBajc', '2017-04-10 19:10:31', '2017-04-20 01:23:59'),
(2, 'Jason', 'Schmidt', '5142454121', 'daniella51@yahoo.com', '$2y$10$AfuvHcI9rz47yKK1i5GHV.QDI3TA8CnCYr/wrKEjFwHhCIeH9fooy', 'docente', '62L7C6mwhQ', '2017-04-11 19:10:55', '2017-04-11 19:10:55'),
(3, 'Garth', 'Little', '1024585663', 'schaden.robbie@hotmail.com', '$2y$10$G6HgH1O.spBCsnIWQWZkx.Aeb.JeqjQb0EeJsBH1gKF9B9mQhC2Qy', 'jurado', 'eWOwznC0rJ', '2017-04-11 19:10:55', '2017-04-11 19:10:55'),
(4, 'Alvis', 'Rolfson', '1024475195', 'gabshire@hotmail.com', '$2y$10$dI7oU2y6T3cvS1QEwYlz0O67/hj.BTKfAM3FWXh/pF40c/GDWM.sq', 'docente', 'KH2PUrmtBn', '2017-04-11 19:10:55', '2017-04-11 19:10:55'),
(5, 'Christelle', 'Streich', '5022149113', 'julius.hansen@yahoo.com', '$2y$10$lLpIux8/lenh5KYOjDVgiumH2jk/PfYfGpWW.MYnZCp6v9uyoIIqC', 'coordinador', 'zO5g0gxtAt', '2017-04-11 19:10:55', '2017-04-11 19:10:55'),
(6, 'Katrine', 'Stokes', '1033355498', 'pledner@gmail.com', '$2y$10$0tTDEmRODvzdIw5hn3K1xuzX/xbwx89ZZkFv/JGzfNktu7IRja4Mq', 'docente', 'rCGTm7A9Wx', '2017-04-11 19:10:55', '2017-04-11 19:10:55'),
(7, 'Bernie', 'Kutch', '50548996', 'rashad17@gmail.com', '$2y$10$8wpk/iIsOfCQVepJomjPeunTyRtpsYlcsOVt6ywR/E0kFuWgzMYwG', 'jurado', 'hieVkn0bmg', '2017-04-11 19:10:55', '2017-04-11 19:10:55'),
(8, 'Milford', 'Hoeger', '1017244113', 'legros.meta@hotmail.com', '$2y$10$GXQ2E99ENeDNNnIDsEaHn.CCACfi7ZUhjdxXjSovdfDeFBR14vgP.', 'docente', 'fYDEows7MD', '2017-04-11 19:10:55', '2017-04-11 19:10:55'),
(9, 'Trent', 'Bechtelar', '32250884', 'anabel.mayer@gmail.com', '$2y$10$cr6jbx.fvrwrZfWopn.V2.opBP/eEMtnzxAEtrpovH/PxdEM4/lxe', 'docente', 'YcYZ1xHv7J', '2017-04-11 19:10:55', '2017-04-11 19:10:55'),
(10, 'Deontae', 'Casper', '6077421141', 'ehessel@hotmail.com', '$2y$10$iL15j5mnBjPMyJi15.Zh0ebW1rCa9cez9Anmr2oe1aslwVz5xllCq', 'docente', 'ow6x0Mipbw', '2017-04-11 19:10:55', '2017-04-11 19:10:55'),
(11, 'Rocky', 'Viscaya Ortiz', '70521446', 'Vizrocky@cun.edu.co', '$2y$10$74.wINeyyd3HHgtLxLVZ1ONA8eyxHLtY7vTIks9qqp7R5/7AwPpEC', 'docente', 'v3dmUCp9j64GKbtXE0npyHptcJmlbcaD0QgYz5c6fFA9B0cKb8YhWSKjGjoo', '2017-04-12 22:16:04', '2017-04-12 22:17:08'),
(12, 'Paulina', 'Cisneros Nájar', '60524332', 'paulina.cisneros@cun.edu.co', '$2y$10$bUUga2Wh3PwYVRQdvwskaedWgAXr02AKMWEktmagQjqBCz/sql9Mm', 'jurado', NULL, '2017-04-12 22:17:54', '2017-04-12 22:17:54'),
(13, 'Andres', 'Arrieta', '1067931715', 'arrietandress@gmail.com', '$2y$10$W7GU1Qb.RGF4B6ktXNXuUOFS4/zLQppDfqmPa8e6aYxznJDSfzeHy', 'estudiante', 'xumSRBBbAcdD9Gik0Ofj7Xnu5DrxP3SCyuuaOcQ1ksnCXuT3CRqGy1gHjNrP', '2017-04-13 21:51:50', '2017-04-15 23:41:17'),
(14, 'Estefania', 'Duque', '123456789', 'estefa.duque@cun.edu.co', '$2y$10$D2W5LlGiGhNiMCk0FAXY1e6oPPKdibi5RsSU4QagPpdKQUbf1kQ4C', 'coordinador', 'gD2dK83RG1hzkV9OZWyaOY04lzSB5ZQurSAGCePA2DsLS2BneD2jcouYPdAJ', '2017-04-19 21:57:07', '2017-04-20 03:22:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contenidos_proyecto_id_foreign` (`proyecto_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `estudiantes_cedula_unique` (`cedula`),
  ADD KEY `estudiantes_area_id_foreign` (`area_id`),
  ADD KEY `estudiantes_programa_id_foreign` (`programa_id`),
  ADD KEY `estudiantes_regional_id_foreign` (`regional_id`);

--
-- Indices de la tabla `evento_expos`
--
ALTER TABLE `evento_expos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_grupojurado_eventoexpo` (`grupojurado_id`),
  ADD KEY `fk_user_eventoexpo` (`user_id`);

--
-- Indices de la tabla `grupo_investigacions`
--
ALTER TABLE `grupo_investigacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupo_jurados`
--
ALTER TABLE `grupo_jurados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grupo_jurados_regional_id_foreign` (`regional_id`);

--
-- Indices de la tabla `jurados`
--
ALTER TABLE `jurados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jurados_cedula_unique` (`cedula`),
  ADD KEY `jurados_linea_investigacion_id_foreign` (`linea_investigacion_id`),
  ADD KEY `jurados_area_id_foreign` (`area_id`),
  ADD KEY `grupojurado_id` (`grupojurado_id`);

--
-- Indices de la tabla `linea_investigacions`
--
ALTER TABLE `linea_investigacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `municipios_id_departamento_foreign` (`id_departamento`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notas_user_id_foreign` (`user_id`),
  ADD KEY `notas_proyecto_id_foreign` (`proyecto_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programas_area_id_foreign` (`area_id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyectos_regional_id_foreign` (`regional_id`),
  ADD KEY `proyectos_semillero_id_foreign` (`semillero_id`),
  ADD KEY `proyectos_area_id_foreign` (`area_id`),
  ADD KEY `proyectos_programa_id_foreign` (`programa_id`),
  ADD KEY `proyectos_user_id_foreign` (`user_id`),
  ADD KEY `proyectos_estado_id_foreign` (`estado_id`),
  ADD KEY `proyectos_linea_id_foreign` (`linea_id`),
  ADD KEY `proyectos_grupojurado_id_foreign` (`grupojurado_id`),
  ADD KEY `proyectos_evento_expo_id_foreign` (`evento_expo_id`);

--
-- Indices de la tabla `regionals`
--
ALTER TABLE `regionals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rel_integras`
--
ALTER TABLE `rel_integras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sedes_municipio_id_foreign` (`municipio_id`),
  ADD KEY `sedes_regional_id_foreign` (`regional_id`);

--
-- Indices de la tabla `semilleros`
--
ALTER TABLE `semilleros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semilleros_director_id_foreign` (`director_id`),
  ADD KEY `semilleros_estudiante_lider_id_foreign` (`estudiante_lider_id`),
  ADD KEY `semilleros_regional_id_foreign` (`regional_id`),
  ADD KEY `semilleros_grupo_investigacion_id_foreign` (`grupo_investigacion_id`);

--
-- Indices de la tabla `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_cedula_unique` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `evento_expos`
--
ALTER TABLE `evento_expos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `grupo_investigacions`
--
ALTER TABLE `grupo_investigacions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `grupo_jurados`
--
ALTER TABLE `grupo_jurados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `jurados`
--
ALTER TABLE `jurados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `linea_investigacions`
--
ALTER TABLE `linea_investigacions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1113;
--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `regionals`
--
ALTER TABLE `regionals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `rel_integras`
--
ALTER TABLE `rel_integras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `semilleros`
--
ALTER TABLE `semilleros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `titulos`
--
ALTER TABLE `titulos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD CONSTRAINT `contenidos_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `estudiantes_programa_id_foreign` FOREIGN KEY (`programa_id`) REFERENCES `programas` (`id`),
  ADD CONSTRAINT `estudiantes_regional_id_foreign` FOREIGN KEY (`regional_id`) REFERENCES `regionals` (`id`);

--
-- Filtros para la tabla `evento_expos`
--
ALTER TABLE `evento_expos`
  ADD CONSTRAINT `fk_grupojurado_eventoexpo` FOREIGN KEY (`grupojurado_id`) REFERENCES `grupo_jurados` (`id`),
  ADD CONSTRAINT `fk_user_eventoexpo` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `grupo_jurados`
--
ALTER TABLE `grupo_jurados`
  ADD CONSTRAINT `grupo_jurados_regional_id_foreign` FOREIGN KEY (`regional_id`) REFERENCES `regionals` (`id`);

--
-- Filtros para la tabla `jurados`
--
ALTER TABLE `jurados`
  ADD CONSTRAINT `jurados_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `jurados_grupojurado_id_foreign` FOREIGN KEY (`grupojurado_id`) REFERENCES `grupo_jurados` (`id`),
  ADD CONSTRAINT `jurados_linea_investigacion_id_foreign` FOREIGN KEY (`linea_investigacion_id`) REFERENCES `linea_investigacions` (`id`);

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_id_departamento_foreign` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id`);

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_proyecto_id_foreign` FOREIGN KEY (`proyecto_id`) REFERENCES `proyectos` (`id`),
  ADD CONSTRAINT `notas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `programas`
--
ALTER TABLE `programas`
  ADD CONSTRAINT `programas_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`);

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `proyectos_estado_id_foreign` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`),
  ADD CONSTRAINT `proyectos_evento_expo_id_foreign` FOREIGN KEY (`evento_expo_id`) REFERENCES `evento_expos` (`id`),
  ADD CONSTRAINT `proyectos_grupojurado_id_foreign` FOREIGN KEY (`grupojurado_id`) REFERENCES `grupo_jurados` (`id`),
  ADD CONSTRAINT `proyectos_linea_id_foreign` FOREIGN KEY (`linea_id`) REFERENCES `linea_investigacions` (`id`),
  ADD CONSTRAINT `proyectos_programa_id_foreign` FOREIGN KEY (`programa_id`) REFERENCES `programas` (`id`),
  ADD CONSTRAINT `proyectos_regional_id_foreign` FOREIGN KEY (`regional_id`) REFERENCES `regionals` (`id`),
  ADD CONSTRAINT `proyectos_semillero_id_foreign` FOREIGN KEY (`semillero_id`) REFERENCES `semilleros` (`id`),
  ADD CONSTRAINT `proyectos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD CONSTRAINT `sedes_municipio_id_foreign` FOREIGN KEY (`municipio_id`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `sedes_regional_id_foreign` FOREIGN KEY (`regional_id`) REFERENCES `regionals` (`id`);

--
-- Filtros para la tabla `semilleros`
--
ALTER TABLE `semilleros`
  ADD CONSTRAINT `semilleros_director_id_foreign` FOREIGN KEY (`director_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `semilleros_estudiante_lider_id_foreign` FOREIGN KEY (`estudiante_lider_id`) REFERENCES `estudiantes` (`id`),
  ADD CONSTRAINT `semilleros_grupo_investigacion_id_foreign` FOREIGN KEY (`grupo_investigacion_id`) REFERENCES `grupo_investigacions` (`id`),
  ADD CONSTRAINT `semilleros_regional_id_foreign` FOREIGN KEY (`regional_id`) REFERENCES `regionals` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

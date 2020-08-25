-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2020 a las 17:03:27
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estudiantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoyos_academicos`
--

CREATE TABLE `apoyos_academicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apoyoAcademico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `apoyos_academicos`
--

INSERT INTO `apoyos_academicos` (`id`, `apoyoAcademico`) VALUES
(1, 'EN EL AHULA HOSPITALARIA '),
(2, 'EN DOMICILIO  '),
(3, 'EN EL ESTABLECIMIENTO'),
(4, 'EN INSTITUCION DE APOYO'),
(5, 'SISTEMA DE RESPONSABILIDAD PENAL DE ADOLESCENTES'),
(6, 'PRIVADO DE LA LIBERTAD'),
(7, 'NO PRIVADO DE LA LIBERTAD'),
(8, 'NO APLICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacidades_exepcionales`
--

CREATE TABLE `capacidades_exepcionales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `capacidadExepcional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `capacidades_exepcionales`
--

INSERT INTO `capacidades_exepcionales` (`id`, `capacidadExepcional`) VALUES
(1, 'LIDER SOCIAL Y EMPRENDIMIENTO'),
(2, 'TALENTO EN CIENCIAS NATURALES'),
(3, 'TALENTO EN ARTES O LETRAS'),
(4, 'TALENTO EN ACTIVIDAD FISICA-DEPORTES'),
(5, 'TALENTO EN CIENCIAS SOCIALES Y HUMANAS'),
(6, 'NO APLICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `departamento`) VALUES
(1, 'BOLIVAR'),
(2, 'MAGDALENA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidades`
--

CREATE TABLE `discapacidades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discapacidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `discapacidades`
--

INSERT INTO `discapacidades` (`id`, `discapacidad`) VALUES
(1, 'FISICA'),
(2, 'SEGUERA'),
(3, 'MULTIPLE'),
(4, 'USUARIO DE LENGUA DE SEÑAS'),
(5, 'SORDOCEGUERA'),
(6, 'LENGUA DEL CASTELLANO'),
(7, 'INTELECTUAL'),
(8, 'TRASTORNO DEL ASPECTRO AUTISTA'),
(9, 'BAJA VISION IRREVERSIBLE'),
(10, 'PSICO SOCIAL MENTAL'),
(11, 'NO APLICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estratos`
--

CREATE TABLE `estratos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estrato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estratos`
--

INSERT INTO `estratos` (`id`, `estrato`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fechaInscripcion` date NOT NULL,
  `id_grado` bigint(20) UNSIGNED NOT NULL,
  `id_jornada` bigint(20) UNSIGNED NOT NULL,
  `id_sede` bigint(20) UNSIGNED NOT NULL,
  `id_pais` bigint(20) UNSIGNED NOT NULL,
  `id_tipoDocumento` bigint(20) UNSIGNED NOT NULL,
  `numeroDocumento` int(20) NOT NULL,
  `id_genero` bigint(20) UNSIGNED NOT NULL,
  `id_municipioExp` bigint(20) UNSIGNED NOT NULL,
  `id_departamentoExp` bigint(20) UNSIGNED NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `id_municipioNac` bigint(20) UNSIGNED NOT NULL,
  `id_departamentoNac` bigint(20) UNSIGNED NOT NULL,
  `apellidos` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barrio` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_municipioViv` bigint(20) UNSIGNED NOT NULL,
  `id_zona` bigint(20) UNSIGNED NOT NULL,
  `celular` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sectorPrivado` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provieneDeOtroMunicipio` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institucionDeDondeProviene` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eps` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ips` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_tipoSangre` bigint(20) UNSIGNED NOT NULL,
  `id_poblacionVictima` bigint(20) UNSIGNED NOT NULL,
  `numeroCarnetSisben` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `puntajeSisben` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_estrato` bigint(20) UNSIGNED NOT NULL,
  `id_situacionSocioeconomica` bigint(20) UNSIGNED NOT NULL,
  `id_etnia` bigint(20) UNSIGNED NOT NULL,
  `id_discapacidad` bigint(20) UNSIGNED NOT NULL,
  `id_trasntornoAprend` bigint(20) UNSIGNED NOT NULL,
  `id_apoyoAcademico` bigint(20) UNSIGNED NOT NULL,
  `id_capacidadExepcional` bigint(20) UNSIGNED NOT NULL,
  `nombreAcudiente` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoAcudiente` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_paisAcud` bigint(20) UNSIGNED NOT NULL,
  `direccionAcud` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barrioAcud` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_parentesco` bigint(20) UNSIGNED NOT NULL,
  `id_zonaAcud` bigint(20) UNSIGNED NOT NULL,
  `celularAcud` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correoAcud` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tipoDocumentoAcud` bigint(20) UNSIGNED NOT NULL,
  `numeroDocumentoAcud` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_generoAcud` bigint(20) UNSIGNED NOT NULL,
  `id_departamentoAcud` bigint(20) UNSIGNED NOT NULL,
  `id_municipioAcud` bigint(20) UNSIGNED NOT NULL,
  `conviveConEstudiante` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaNacimientoAcud` date NOT NULL,
  `id_departamentoNacAcud` bigint(20) UNSIGNED NOT NULL,
  `id_municipioNacAcud` bigint(20) UNSIGNED NOT NULL,
  `id_tipoEmpleo` bigint(20) UNSIGNED NOT NULL,
  `ocupacion` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profesion` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `fechaInscripcion`, `id_grado`, `id_jornada`, `id_sede`, `id_pais`, `id_tipoDocumento`, `numeroDocumento`, `id_genero`, `id_municipioExp`, `id_departamentoExp`, `fechaNacimiento`, `id_municipioNac`, `id_departamentoNac`, `apellidos`, `nombres`, `direccion`, `barrio`, `id_municipioViv`, `id_zona`, `celular`, `correo`, `sectorPrivado`, `provieneDeOtroMunicipio`, `institucionDeDondeProviene`, `eps`, `ips`, `id_tipoSangre`, `id_poblacionVictima`, `numeroCarnetSisben`, `puntajeSisben`, `id_estrato`, `id_situacionSocioeconomica`, `id_etnia`, `id_discapacidad`, `id_trasntornoAprend`, `id_apoyoAcademico`, `id_capacidadExepcional`, `nombreAcudiente`, `apellidoAcudiente`, `id_paisAcud`, `direccionAcud`, `barrioAcud`, `id_parentesco`, `id_zonaAcud`, `celularAcud`, `correoAcud`, `id_tipoDocumentoAcud`, `numeroDocumentoAcud`, `id_generoAcud`, `id_departamentoAcud`, `id_municipioAcud`, `conviveConEstudiante`, `fechaNacimientoAcud`, `id_departamentoNacAcud`, `id_municipioNacAcud`, `id_tipoEmpleo`, `ocupacion`, `profesion`) VALUES
(21, '2020-06-27', 10, 2, 1, 1, 1, 1004280446, 1, 1, 1, '2020-06-02', 1, 1, 'Almendrales', 'Luis', 'blasdelezo MC LT 7 2ETP', 'SAN FERNANDO', 1, 1, '3117952897', 'almendralesluifer@gmail.com', 'SI', 'SI', 'hgbuhjbuj', 'bjbm', 'hbvhbh', 6, 1, '122', '7676', 3, 1, 2, 11, 4, 8, 5, 'hghb', 'Almendrales', 1, 'blasdelezo MC LT 7 2ETP', 'gbbhj', 7, 1, '676', 'vhv@gmail.com', 1, '677698888', 1, 2, 1, 'SI', '2020-06-01', 1, 1, 1, 'jbjhn', 'jhjb'),
(25, '2020-06-16', 9, 1, 1, 1, 6, 1234, 1, 1, 1, '2020-06-18', 1, 1, 'jansja', 'jesu', 'hgbhj', 'hbhbh', 1, 1, '678676', 'hhjhj@gmail.com', 'SI', 'SI', 'ughiuhbihihikhjikhihih', 'hbjbhjbujghu', 'uhdusbdiua', 7, 1, '1234', '12', 2, 1, 1, 10, 1, 5, 4, 'hunhiknjho', 'bhjb j', 1, 'uhjhjhnj', 'yvchujhvj', 5, 1, '67878', 'ihhihhj@gmail.com', 1, '56767676', 1, 1, 1, 'SI', '2020-06-16', 2, 2, 1, 'ygbujbik', 'bnb jb'),
(26, '2020-06-28', 8, 1, 2, 1, 2, 7878787, 1, 1, 2, '2020-06-04', 2, 2, 'Almendrales', 'Firulay Andres', 'blasdelezo MC LT 7 2ETP', 'SAN FERNANDO', 1, 2, '121212', 'firu@gmail.com', 'SI', 'SI', 'LUIS CARLOS GALAN', 'hvhvhvbh', 'qjhsjabd', 2, 2, '6776', '666', 3, 2, 2, 6, 1, 7, 4, 'jorge', 'berrio', 1, 'calle 1', 'sasasas', 1, 1, '5656', 'jorge@gmail.com', 1, '787878799', 1, 1, 1, 'SI', '2020-06-03', 1, 1, 1, 'ujhju', 'ijnhjk'),
(27, '2020-06-28', 8, 1, 2, 1, 2, 877779, 1, 1, 2, '2020-06-04', 2, 2, 'Almendrales', 'Firulay Andres', 'blasdelezo MC LT 7 2ETP', 'SAN FERNANDO', 1, 2, '121212', 'firu@gmail.com', 'SI', 'SI', 'LUIS CARLOS GALAN', 'hvhvhvbh', 'qjhsjabd', 2, 2, '6776', '666', 3, 2, 2, 6, 1, 7, 4, 'jorge', 'berrio', 1, 'calle 1', 'sasasas', 1, 1, '5656', 'jorge@gmail.com', 1, '787878799', 1, 1, 1, 'SI', '2020-06-03', 1, 1, 1, 'ujhju', 'ijnhjk'),
(28, '2020-06-28', 8, 1, 2, 1, 2, 89878675, 1, 1, 2, '2020-06-04', 2, 2, 'Almendrales', 'Firulay Andres', 'blasdelezo MC LT 7 2ETP', 'SAN FERNANDO', 1, 2, '121212', 'firu@gmail.com', 'SI', 'SI', 'LUIS CARLOS GALAN', 'hvhvhvbh', 'qjhsjabd', 2, 2, '6776', '666', 3, 2, 2, 6, 1, 7, 4, 'jorge', 'berrio', 1, 'calle 1', 'sasasas', 1, 1, '5656', 'jorge@gmail.com', 1, '787878799', 1, 1, 1, 'SI', '2020-06-03', 1, 1, 1, 'ujhju', 'ijnhjk'),
(29, '2020-06-28', 8, 1, 2, 1, 2, 89, 1, 1, 2, '2020-06-04', 2, 2, 'Almendrales', 'Firulay Andres', 'blasdelezo MC LT 7 2ETP', 'SAN FERNANDO', 1, 2, '121212', 'firu@gmail.com', 'SI', 'SI', 'LUIS CARLOS GALAN', 'hvhvhvbh', 'qjhsjabd', 2, 2, '6776', '666', 3, 2, 2, 6, 1, 7, 4, 'jorge', 'berrio', 1, 'calle 1', 'sasasas', 1, 1, '5656', 'jorge@gmail.com', 1, '787878799', 1, 1, 1, 'SI', '2020-06-03', 1, 1, 1, 'ujhju', 'ijnhjk'),
(30, '2020-06-28', 8, 1, 2, 1, 2, 89666, 1, 1, 2, '2020-06-04', 2, 2, 'Almendrales', 'Firulay Andres', 'blasdelezo MC LT 7 2ETP', 'SAN FERNANDO', 1, 2, '121212', 'firu@gmail.com', 'SI', 'SI', 'LUIS CARLOS GALAN', 'hvhvhvbh', 'qjhsjabd', 2, 2, '6776', '666', 3, 2, 2, 6, 1, 7, 4, 'jorge', 'berrio', 1, 'calle 1', 'sasasas', 1, 1, '5656', 'jorge@gmail.com', 1, '787878799', 1, 1, 1, 'SI', '2020-06-03', 1, 1, 1, 'ujhju', 'ijnhjk'),
(31, '2020-06-28', 8, 1, 2, 1, 2, 896660986, 1, 1, 2, '2020-06-04', 2, 2, 'Almendrales', 'Firulay Andres', 'blasdelezo MC LT 7 2ETP', 'SAN FERNANDO', 1, 2, '121212', 'firu@gmail.com', 'SI', 'SI', 'LUIS CARLOS GALAN', 'hvhvhvbh', 'qjhsjabd', 2, 2, '6776', '666', 3, 2, 2, 6, 1, 7, 4, 'jorge', 'berrio', 1, 'calle 1', 'sasasas', 1, 1, '5656', 'jorge@gmail.com', 1, '787878799', 1, 1, 1, 'SI', '2020-06-03', 1, 1, 1, 'ujhju', 'ijnhjk'),
(32, '2020-06-28', 8, 1, 2, 1, 2, 132435456, 1, 1, 2, '2020-06-04', 2, 2, 'Almendrales', 'Firulay Andres', 'blasdelezo MC LT 7 2ETP', 'SAN FERNANDO', 1, 2, '121212', 'firu@gmail.com', 'SI', 'SI', 'LUIS CARLOS GALAN', 'hvhvhvbh', 'qjhsjabd', 2, 2, '6776', '666', 3, 2, 2, 6, 1, 7, 4, 'jorge', 'berrio', 1, 'calle 1', 'sasasas', 1, 1, '5656', 'jorge@gmail.com', 1, '787878799', 1, 1, 1, 'SI', '2020-06-03', 1, 1, 1, 'ujhju', 'ijnhjk'),
(33, '2020-06-28', 8, 1, 2, 1, 2, 1325, 1, 1, 2, '2020-06-04', 2, 2, 'Almendrales', 'Firulay Andres', 'blasdelezo MC LT 7 2ETP', 'SAN FERNANDO', 1, 2, '121212', 'firu@gmail.com', 'SI', 'SI', 'LUIS CARLOS GALAN', 'hvhvhvbh', 'qjhsjabd', 2, 2, '6776', '666', 3, 2, 2, 6, 1, 7, 4, 'jorge', 'berrio', 1, 'calle 1', 'sasasas', 1, 1, '5656', 'jorge@gmail.com', 1, '787878799', 1, 1, 1, 'SI', '2020-06-03', 1, 1, 1, 'ujhju', 'ijnhjk'),
(34, '2020-06-28', 8, 1, 2, 1, 2, 1325232131, 1, 1, 2, '2020-06-04', 2, 2, 'Almendrales', 'Firulay Andres', 'blasdelezo MC LT 7 2ETP', 'SAN FERNANDO', 1, 2, '121212', 'firu@gmail.com', 'SI', 'SI', 'LUIS CARLOS GALAN', 'hvhvhvbh', 'qjhsjabd', 2, 2, '6776', '666', 3, 2, 2, 6, 1, 7, 4, 'jorge', 'berrio', 1, 'calle 1', 'sasasas', 1, 1, '5656', 'jorge@gmail.com', 1, '787878799', 1, 1, 1, 'SI', '2020-06-03', 1, 1, 1, 'ujhju', 'ijnhjk'),
(35, '2020-06-28', 8, 1, 2, 1, 2, 1325232, 1, 1, 2, '2020-06-04', 2, 2, 'Almendrales', 'Firulay Andres', 'blasdelezo MC LT 7 2ETP', 'SAN FERNANDO', 1, 2, '121212', 'firu@gmail.com', 'SI', 'SI', 'LUIS CARLOS GALAN', 'hvhvhvbh', 'qjhsjabd', 2, 2, '6776', '666', 3, 2, 2, 6, 1, 7, 4, 'jorge', 'berrio', 1, 'calle 1', 'sasasas', 1, 1, '5656', 'jorge@gmail.com', 1, '787878799', 1, 1, 1, 'SI', '2020-06-03', 1, 1, 1, 'ujhju', 'ijnhjk'),
(36, '2020-06-30', 7, 1, 1, 1, 1, 989898989, 2, 1, 1, '2020-06-30', 1, 1, 'Almendrales', 'julian', 'blasdelezo MC LT 7 2ETP', 'SAN FERNANDO', 1, 1, '12121212', 'almendralesluifer@homail.com', 'SI', 'SI', 'bjhjhjh', 'MUTUAL SER', 'hbvhbh', 1, 13, '7878', '67676', 1, 2, 2, 1, 3, 8, 5, 'maria', 'jaraba', 1, 'calle de los locos', 'hvhbhbj', 2, 1, '676', 'maria@gmail.com', 1, '7576767', 1, 1, 1, 'SI', '2020-07-07', 1, 1, 1, 'uhihi', 'jbhj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etnias`
--

CREATE TABLE `etnias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `etnia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `etnias`
--

INSERT INTO `etnias` (`id`, `etnia`) VALUES
(1, 'AFRODESCENDIENTE    '),
(2, 'NEGRITUDES  '),
(3, 'PALENQUERO   '),
(4, 'ZENU'),
(5, 'WAYUU  '),
(6, 'OTRA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `genero`) VALUES
(1, 'MASCULINO'),
(2, 'FEMENINO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id`, `grado`) VALUES
(1, '1°'),
(2, '2°'),
(3, '3°'),
(4, '4°'),
(5, '5°'),
(6, '6°'),
(7, '7°'),
(8, '8°'),
(9, '9°'),
(10, '10°'),
(11, '11°');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornadas`
--

CREATE TABLE `jornadas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jornada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `jornadas`
--

INSERT INTO `jornadas` (`id`, `jornada`) VALUES
(1, 'MAÑANA'),
(2, 'TARDE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_19_055734_create_estudiantes_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `municipio`) VALUES
(1, 'CARTAGENA'),
(2, 'SANTA MARTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `pais`) VALUES
(1, 'COLOMBIA'),
(2, 'VENEZUELA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentescos`
--

CREATE TABLE `parentescos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parentesco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `parentescos`
--

INSERT INTO `parentescos` (`id`, `parentesco`) VALUES
(1, 'PAPA'),
(2, 'MAMA'),
(3, 'TIO'),
(4, 'HERMANO'),
(5, 'ABUELO'),
(6, 'PRIMO'),
(7, 'OTRO\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('firu@gmail.com', '$2y$10$bjN/.TfmafUwxNApeVAxgOZktBFl1tOzvOT8oBYxN87jTH1DTb0pS', '2020-06-29 22:38:52'),
('almendralesluifer@gmail.com', '$2y$10$DXcwnhBHfmUsf.0.ldLXhuwy/MsxnGBvap7UDo62JWOxLiHVWbzWa', '2020-06-29 23:10:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblaciones_victimas`
--

CREATE TABLE `poblaciones_victimas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poblacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `poblaciones_victimas`
--

INSERT INTO `poblaciones_victimas` (`id`, `poblacion`) VALUES
(1, 'ABANDONO O DESPOJO DE TIERRA '),
(2, 'ACTO TERRORISTA – ATENTADO '),
(3, 'AMENAZA'),
(4, 'CONFINAMIENTO         '),
(5, 'DELITOS CONTRA LA LIB E INT SEXUAL '),
(6, 'DESAPARICIÓN FORZADA'),
(7, 'DESPLAZAMIENTO FORZADO'),
(8, 'DESVINCULADO DE GRUPOS ARMADOS'),
(9, 'EN SITUACIÓN DE DESPLAZAMIENTO'),
(10, 'HIJO DE ADULTO DESMOVILIZADO '),
(11, 'HOMICIDIO'),
(12, 'LESIONES PERSONALES FÍSICAS                              '),
(13, 'LESIONES PERSONALES PSICOLÓGICAS  '),
(14, 'MINAS ANTI PERSONALES       '),
(15, 'PÉRDIDA DE BIENES'),
(16, 'SECUESTRO'),
(17, 'NO APLICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sede` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `sede`) VALUES
(1, 'LOS CEREZOS'),
(2, 'CONSOLATA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situaciones_socioeconomicas`
--

CREATE TABLE `situaciones_socioeconomicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `situacionSocioeconomica` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `situaciones_socioeconomicas`
--

INSERT INTO `situaciones_socioeconomicas` (`id`, `situacionSocioeconomica`) VALUES
(1, 'ALUMNO MADRE CABEZA DE FAMILIA'),
(2, 'BEN. HIJOS DEPENDIENTES DE MADRE CABEZA DE FAMILIA\r\n'),
(3, 'BENEFICIARIO VETERANO DE LA FUERZA PÚBLICA\r\n'),
(4, 'BENEFICIARIO HÉROE DE LA NACIÓN\r\n'),
(5, 'NO APLICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_de_documentos`
--

CREATE TABLE `tipos_de_documentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipoDocumento` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos_de_documentos`
--

INSERT INTO `tipos_de_documentos` (`id`, `tipoDocumento`) VALUES
(1, 'C.C Cedula de Ciudadania'),
(2, 'C.E Cedula Extranjera '),
(3, 'T.I Tarjeta de Identidad'),
(4, 'R.C Reggistro Civil'),
(5, 'P.E.P Permiso Especial de Permanencia'),
(6, 'T.M.F Tarjeta de movilidad Fronteriza'),
(7, 'VISA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_de_empleos`
--

CREATE TABLE `tipos_de_empleos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipoEmpleo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos_de_empleos`
--

INSERT INTO `tipos_de_empleos` (`id`, `tipoEmpleo`) VALUES
(1, 'TEMPORAL'),
(2, 'PERMANENTE'),
(3, 'NO TRABAJO\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_de_sangres`
--

CREATE TABLE `tipos_de_sangres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipoSangre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos_de_sangres`
--

INSERT INTO `tipos_de_sangres` (`id`, `tipoSangre`) VALUES
(1, 'R.H A+'),
(2, 'R.H A-'),
(3, 'R.H B+'),
(4, 'R.H B-'),
(5, 'R.H AB+'),
(6, 'R.H AB-'),
(7, 'R.H O+'),
(8, 'O-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transtorno_aprendisajes`
--

CREATE TABLE `transtorno_aprendisajes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transtorno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `transtorno_aprendisajes`
--

INSERT INTO `transtorno_aprendisajes` (`id`, `transtorno`) VALUES
(1, 'DEFICIT DE ATENCION CON O SIN HIPERACTIVIDAD'),
(2, 'ESPECIFICO DE APRENDIZAJE ESCOLAR'),
(3, 'DE APRENDIZAJE ESCOLAR Y POR DEFICIT '),
(4, 'NO APLICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Luis Almendrales', 'almendralesluifer@gmail.com', NULL, '$2y$10$XM5uHLBp4rE9Ztq15sxgiORHRb6KWU5zL40QlS5eChv/YvZAL7chO', NULL, '2020-06-28 23:09:08', '2020-06-28 23:09:08'),
(15, 'Firulay Andres Guau Guau', 'firu@gmail.com', NULL, '$2y$10$USrAmv91k4kQHKt7XrCJKuB9rKwAG2eUxflg8383N4bI.yOWs7DXi', NULL, '2020-07-02 19:38:53', '2020-07-02 19:38:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `zona` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id`, `zona`) VALUES
(1, 'RURAL'),
(2, 'URBANA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apoyos_academicos`
--
ALTER TABLE `apoyos_academicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `capacidades_exepcionales`
--
ALTER TABLE `capacidades_exepcionales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `discapacidades`
--
ALTER TABLE `discapacidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `estratos`
--
ALTER TABLE `estratos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estudiantes_id_grado_foreign` (`id_grado`),
  ADD KEY `estudiantes_id_jornada_foreign` (`id_jornada`),
  ADD KEY `estudiantes_id_sede_foreign` (`id_sede`),
  ADD KEY `estudiantes_id_pais_foreign` (`id_pais`),
  ADD KEY `estudiantes_id_tipodocumento_foreign` (`id_tipoDocumento`),
  ADD KEY `estudiantes_id_genero_foreign` (`id_genero`),
  ADD KEY `estudiantes_id_municipioexp_foreign` (`id_municipioExp`),
  ADD KEY `estudiantes_id_departamentoexp_foreign` (`id_departamentoExp`),
  ADD KEY `estudiantes_id_municipionac_foreign` (`id_municipioNac`),
  ADD KEY `estudiantes_id_departamentonac_foreign` (`id_departamentoNac`),
  ADD KEY `estudiantes_id_municipioviv_foreign` (`id_municipioViv`),
  ADD KEY `estudiantes_id_zona_foreign` (`id_zona`),
  ADD KEY `estudiantes_id_tiposangre_foreign` (`id_tipoSangre`),
  ADD KEY `estudiantes_id_poblacionvictima_foreign` (`id_poblacionVictima`),
  ADD KEY `estudiantes_id_estrato_foreign` (`id_estrato`),
  ADD KEY `estudiantes_id_situacionsocioeconomica_foreign` (`id_situacionSocioeconomica`),
  ADD KEY `estudiantes_id_etnia_foreign` (`id_etnia`),
  ADD KEY `estudiantes_id_discapacidad_foreign` (`id_discapacidad`),
  ADD KEY `estudiantes_id_trasntornoaprend_foreign` (`id_trasntornoAprend`),
  ADD KEY `estudiantes_id_apoyoacademico_foreign` (`id_apoyoAcademico`),
  ADD KEY `estudiantes_id_capacidadexepcional_foreign` (`id_capacidadExepcional`),
  ADD KEY `estudiantes_id_paisacud_foreign` (`id_paisAcud`),
  ADD KEY `estudiantes_id_parentesco_foreign` (`id_parentesco`),
  ADD KEY `estudiantes_id_zonaacud_foreign` (`id_zonaAcud`),
  ADD KEY `estudiantes_id_tipodocumentoacud_foreign` (`id_tipoDocumentoAcud`),
  ADD KEY `estudiantes_id_generoacud_foreign` (`id_generoAcud`),
  ADD KEY `estudiantes_id_departamentoacud_foreign` (`id_departamentoAcud`),
  ADD KEY `estudiantes_id_municipioacud_foreign` (`id_municipioAcud`),
  ADD KEY `estudiantes_id_departamentonacacud_foreign` (`id_departamentoNacAcud`),
  ADD KEY `estudiantes_id_municipionacacud_foreign` (`id_municipioNacAcud`),
  ADD KEY `estudiantes_id_tipoempleo_foreign` (`id_tipoEmpleo`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `etnias`
--
ALTER TABLE `etnias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `jornadas`
--
ALTER TABLE `jornadas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `parentescos`
--
ALTER TABLE `parentescos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `poblaciones_victimas`
--
ALTER TABLE `poblaciones_victimas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `situaciones_socioeconomicas`
--
ALTER TABLE `situaciones_socioeconomicas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `tipos_de_documentos`
--
ALTER TABLE `tipos_de_documentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `tipos_de_empleos`
--
ALTER TABLE `tipos_de_empleos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_de_sangres`
--
ALTER TABLE `tipos_de_sangres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `transtorno_aprendisajes`
--
ALTER TABLE `transtorno_aprendisajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apoyos_academicos`
--
ALTER TABLE `apoyos_academicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `capacidades_exepcionales`
--
ALTER TABLE `capacidades_exepcionales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `discapacidades`
--
ALTER TABLE `discapacidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `estratos`
--
ALTER TABLE `estratos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `etnias`
--
ALTER TABLE `etnias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `jornadas`
--
ALTER TABLE `jornadas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `parentescos`
--
ALTER TABLE `parentescos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `poblaciones_victimas`
--
ALTER TABLE `poblaciones_victimas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `situaciones_socioeconomicas`
--
ALTER TABLE `situaciones_socioeconomicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipos_de_documentos`
--
ALTER TABLE `tipos_de_documentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipos_de_empleos`
--
ALTER TABLE `tipos_de_empleos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipos_de_sangres`
--
ALTER TABLE `tipos_de_sangres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `transtorno_aprendisajes`
--
ALTER TABLE `transtorno_aprendisajes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_id_apoyoacademico_foreign` FOREIGN KEY (`id_apoyoAcademico`) REFERENCES `apoyos_academicos` (`id`),
  ADD CONSTRAINT `estudiantes_id_capacidadexepcional_foreign` FOREIGN KEY (`id_capacidadExepcional`) REFERENCES `capacidades_exepcionales` (`id`),
  ADD CONSTRAINT `estudiantes_id_departamentoacud_foreign` FOREIGN KEY (`id_departamentoAcud`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `estudiantes_id_departamentoexp_foreign` FOREIGN KEY (`id_departamentoExp`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `estudiantes_id_departamentonac_foreign` FOREIGN KEY (`id_departamentoNac`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `estudiantes_id_departamentonacacud_foreign` FOREIGN KEY (`id_departamentoNacAcud`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `estudiantes_id_discapacidad_foreign` FOREIGN KEY (`id_discapacidad`) REFERENCES `discapacidades` (`id`),
  ADD CONSTRAINT `estudiantes_id_estrato_foreign` FOREIGN KEY (`id_estrato`) REFERENCES `estratos` (`id`),
  ADD CONSTRAINT `estudiantes_id_etnia_foreign` FOREIGN KEY (`id_etnia`) REFERENCES `etnias` (`id`),
  ADD CONSTRAINT `estudiantes_id_genero_foreign` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id`),
  ADD CONSTRAINT `estudiantes_id_generoacud_foreign` FOREIGN KEY (`id_generoAcud`) REFERENCES `generos` (`id`),
  ADD CONSTRAINT `estudiantes_id_grado_foreign` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id`),
  ADD CONSTRAINT `estudiantes_id_jornada_foreign` FOREIGN KEY (`id_jornada`) REFERENCES `jornadas` (`id`),
  ADD CONSTRAINT `estudiantes_id_municipioacud_foreign` FOREIGN KEY (`id_municipioAcud`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `estudiantes_id_municipioexp_foreign` FOREIGN KEY (`id_municipioExp`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `estudiantes_id_municipionac_foreign` FOREIGN KEY (`id_municipioNac`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `estudiantes_id_municipionacacud_foreign` FOREIGN KEY (`id_municipioNacAcud`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `estudiantes_id_municipioviv_foreign` FOREIGN KEY (`id_municipioViv`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `estudiantes_id_pais_foreign` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id`),
  ADD CONSTRAINT `estudiantes_id_paisacud_foreign` FOREIGN KEY (`id_paisAcud`) REFERENCES `paises` (`id`),
  ADD CONSTRAINT `estudiantes_id_parentesco_foreign` FOREIGN KEY (`id_parentesco`) REFERENCES `parentescos` (`id`),
  ADD CONSTRAINT `estudiantes_id_poblacionvictima_foreign` FOREIGN KEY (`id_poblacionVictima`) REFERENCES `poblaciones_victimas` (`id`),
  ADD CONSTRAINT `estudiantes_id_sede_foreign` FOREIGN KEY (`id_sede`) REFERENCES `sedes` (`id`),
  ADD CONSTRAINT `estudiantes_id_situacionsocioeconomica_foreign` FOREIGN KEY (`id_situacionSocioeconomica`) REFERENCES `situaciones_socioeconomicas` (`id`),
  ADD CONSTRAINT `estudiantes_id_tipodocumento_foreign` FOREIGN KEY (`id_tipoDocumento`) REFERENCES `tipos_de_documentos` (`id`),
  ADD CONSTRAINT `estudiantes_id_tipodocumentoacud_foreign` FOREIGN KEY (`id_tipoDocumentoAcud`) REFERENCES `tipos_de_documentos` (`id`),
  ADD CONSTRAINT `estudiantes_id_tipoempleo_foreign` FOREIGN KEY (`id_tipoEmpleo`) REFERENCES `tipos_de_empleos` (`id`),
  ADD CONSTRAINT `estudiantes_id_tiposangre_foreign` FOREIGN KEY (`id_tipoSangre`) REFERENCES `tipos_de_sangres` (`id`),
  ADD CONSTRAINT `estudiantes_id_trasntornoaprend_foreign` FOREIGN KEY (`id_trasntornoAprend`) REFERENCES `transtorno_aprendisajes` (`id`),
  ADD CONSTRAINT `estudiantes_id_zona_foreign` FOREIGN KEY (`id_zona`) REFERENCES `zonas` (`id`),
  ADD CONSTRAINT `estudiantes_id_zonaacud_foreign` FOREIGN KEY (`id_zonaAcud`) REFERENCES `zonas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para usuarios_dgrpt
CREATE DATABASE IF NOT EXISTS `usuarios_dgrpt` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `usuarios_dgrpt`;

-- Volcando estructura para tabla usuarios_dgrpt.accesos
CREATE TABLE IF NOT EXISTS `accesos` (
  `usuario` varchar(50) NOT NULL COMMENT 'Nombre del usuario que accederá al aplicativo.',
  `cve_aplicativo` int(11) NOT NULL COMMENT 'Identificador numérico del aplicativo.',
  `estatus` set('A','B') NOT NULL COMMENT 'A: Alta | B: Baja',
  `fecha_alta` datetime NOT NULL COMMENT 'Fecha de alta.',
  KEY `usuario` (`usuario`),
  KEY `cve_aplicativo` (`cve_aplicativo`),
  CONSTRAINT `accesos_ibfk_1` FOREIGN KEY (`cve_aplicativo`) REFERENCES `aplicativos` (`cve_aplicativo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `accesos_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla usuarios_dgrpt.aplicativos
CREATE TABLE IF NOT EXISTS `aplicativos` (
  `cve_aplicativo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador numérico de cada aplicativo.',
  `aplicativo` varchar(100) NOT NULL COMMENT 'Nombre del aplicativo',
  PRIMARY KEY (`cve_aplicativo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla usuarios_dgrpt.areas
CREATE TABLE IF NOT EXISTS `areas` (
  `cve_area_dgrpt` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador numérico para cada área de la Dirección General.',
  `area_dgrpt` varchar(150) NOT NULL COMMENT 'Nombre de la subdirección.',
  PRIMARY KEY (`cve_area_dgrpt`),
  UNIQUE KEY `area_dgrpt` (`area_dgrpt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla usuarios_dgrpt.historial_acceso
CREATE TABLE IF NOT EXISTS `historial_acceso` (
  `cve_historial_acceso` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador numérico de cada acceso a los aplicativos.',
  `usuario` varchar(50) NOT NULL COMMENT 'Usuario que accede a los aplicativos.',
  `cve_aplicativo` int(11) NOT NULL,
  `utlimo_acceso` datetime NOT NULL COMMENT 'Fecha y hora del último acceso a los aplicativos.',
  `id_session` varchar(50) NOT NULL,
  `estatus_session` set('0','1') NOT NULL,
  PRIMARY KEY (`cve_historial_acceso`),
  KEY `usuario` (`usuario`),
  KEY `cve_aplicativo` (`cve_aplicativo`),
  CONSTRAINT `historial_acceso_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `historial_acceso_ibfk_2` FOREIGN KEY (`cve_aplicativo`) REFERENCES `aplicativos` (`cve_aplicativo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla usuarios_dgrpt.tipo_personal
CREATE TABLE IF NOT EXISTS `tipo_personal` (
  `cve_tipo_personal` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador numérico para cada tipo de personal.',
  `tipo_personal` varchar(100) NOT NULL COMMENT 'Estructura, honorarios, nómina 8 y base.',
  PRIMARY KEY (`cve_tipo_personal`),
  UNIQUE KEY `tipo_personal` (`tipo_personal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla usuarios_dgrpt.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(50) NOT NULL COMMENT 'Nombre de usuario (único) asignado por la Subdirección de Base de Datos.',
  `curp` varchar(18) DEFAULT NULL COMMENT 'CURP del usuario.',
  `rfc` varchar(13) NOT NULL COMMENT 'RFC del usuario.',
  `nombre` varchar(80) NOT NULL COMMENT 'Nombre o nombres del usuario.',
  `apellido_paterno` varchar(80) NOT NULL COMMENT 'Apellido paterno del usuario.',
  `apellido_materno` varchar(80) DEFAULT NULL COMMENT 'Apellido paterno del usuario.',
  `estatus` set('A','B') NOT NULL COMMENT 'Estatus del registro.\r\nA: Activo\r\nB: Baja',
  `fecha_alta` datetime NOT NULL COMMENT 'Fecha de alta del registro.',
  `fecha_baja` datetime DEFAULT NULL COMMENT 'Fecha de baja del registro.',
  `cve_area_dgrpt` int(11) NOT NULL COMMENT 'Subdirección a la cual pertenece el usuario dado de alta.',
  `cve_tipo_personal` int(11) NOT NULL COMMENT 'Estructura, honorarios, base y nomina 8.',
  `contrasena` blob NOT NULL COMMENT 'Contraseña del usuario.',
  PRIMARY KEY (`usuario`),
  UNIQUE KEY `rfc` (`rfc`),
  KEY `cve_area_dgrpt` (`cve_area_dgrpt`),
  KEY `cve_tipo_personal` (`cve_tipo_personal`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cve_tipo_personal`) REFERENCES `tipo_personal` (`cve_tipo_personal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`cve_area_dgrpt`) REFERENCES `areas` (`cve_area_dgrpt`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

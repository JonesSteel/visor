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

-- Volcando datos para la tabla usuarios_dgrpt.aplicativos: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `aplicativos` DISABLE KEYS */;
INSERT INTO `aplicativos` (`cve_aplicativo`, `aplicativo`) VALUES
	(1, 'CAMBIO DE SEMÁFORO 2022'),
	(2, 'PRE-REGISTRO 2020'),
	(3, 'TAXI SUSTITUCIÓN 2020'),
	(4, 'CUAUTEPEC FASE 1'),
	(5, 'MANO ALZADA'),
	(6, 'TAXI SUSTITUCIÓN 2021 (PERITAJE, TÍTULOS Y CONVENIOS DE ADHESIÓN)'),
	(7, 'VELÓDROMO');
/*!40000 ALTER TABLE `aplicativos` ENABLE KEYS */;

-- Volcando datos para la tabla usuarios_dgrpt.areas: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` (`cve_area_dgrpt`, `area_dgrpt`) VALUES
	(1, 'DIRECCIÓN GENERAL DE REGISTRO PÚBLICO DE TRANSPORTE'),
	(3, 'SUBDIRECCIÓN DE ARCHIVO'),
	(2, 'SUBDIRECCIÓN DE CONCENTRACIÓN Y VINCULACIÓN DE BASES DE DATOS DEL REGISTRO DEL TRANSPORTE'),
	(5, 'SUBDIRECCIÓN DE ENLACE CON REPUVE'),
	(4, 'SUBDIRECCIÓN DE INFORMACIÓN REGISTRAL'),
	(6, 'SUBDIRECCIÓN DE VALIDACIÓN Y PROCESO REGISTRAL');
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;

-- Volcando datos para la tabla usuarios_dgrpt.tipo_personal: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_personal` DISABLE KEYS */;
INSERT INTO `tipo_personal` (`cve_tipo_personal`, `tipo_personal`) VALUES
	(4, 'BASE'),
	(1, 'ESTRUCTURA'),
	(2, 'HONORARIOS'),
	(3, 'NÓMINA 8');
/*!40000 ALTER TABLE `tipo_personal` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

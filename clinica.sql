-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.1.8-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla clinica.agenda
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor` varchar(50) DEFAULT NULL,
  `nombre` char(35) CHARACTER SET utf8 DEFAULT NULL,
  `dni` char(11) CHARACTER SET utf8 DEFAULT NULL,
  `telefono` char(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `hora_i_h` char(50) DEFAULT NULL,
  `hora_i_m` char(50) DEFAULT NULL,
  `hora_i_t` char(50) DEFAULT NULL,
  `hora_f_h` char(50) DEFAULT NULL,
  `hora_f_m` char(50) DEFAULT NULL,
  `hora_f_t` char(50) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla clinica.agenda: ~4 rows (aproximadamente)
DELETE FROM `agenda`;
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` (`id`, `doctor`, `nombre`, `dni`, `telefono`, `email`, `fechanac`, `start`, `hora_i_h`, `hora_i_m`, `hora_i_t`, `hora_f_h`, `hora_f_m`, `hora_f_t`, `id_usuario`) VALUES
	(22, '2', 'martin vizcarra', '98686868', '', '', '0000-00-00', '2018-03-07 00:00:00', '13', '00', 'pm', '13', '00', 'pm', 2),
	(23, '2', 'selena gomez', '', '', '', '0000-00-00', '2018-03-06 00:00:00', '12', '00', 'pm', '12', '00', 'pm', 2),
	(24, '2', 'sandra bullock', '', '', '', '0000-00-00', '2018-03-08 00:00:00', '12', '00', 'pm', '12', '00', 'pm', 2);
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.diagnostico
CREATE TABLE IF NOT EXISTS `diagnostico` (
  `id_diagnostico` int(11) NOT NULL AUTO_INCREMENT,
  `n_diagnostico` varchar(80) DEFAULT NULL,
  `cie` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_diagnostico`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla clinica.diagnostico: ~13 rows (aproximadamente)
DELETE FROM `diagnostico`;
/*!40000 ALTER TABLE `diagnostico` DISABLE KEYS */;
INSERT INTO `diagnostico` (`id_diagnostico`, `n_diagnostico`, `cie`) VALUES
	(1, 'Caries', 'K02'),
	(2, 'Pulpitis', 'K04.0'),
	(3, 'Necrosis Pulpar', 'K04.1'),
	(4, 'Gingivitis Aguda', 'K05.0'),
	(5, 'Gingivitis Cronica', 'K05.1'),
	(6, 'Periodontitis Aguda', 'K05.2'),
	(7, 'Periodontitis Cronica', 'K05.3'),
	(8, 'Dientes Incluidos', 'K01.0'),
	(9, 'Dientes Impactados', 'K01.1'),
	(10, 'Anomalias Dentofaciales y mal Oclusion', 'K07'),
	(11, 'Anomalias de la Posicion Dentaria', 'K07.3'),
	(12, 'Transtornos de la Articulacion Temporomandibular', 'K07.6'),
	(13, 'Perdida de dientes por accidente, extraccion o enfermedad periodontal', 'K08.1');
/*!40000 ALTER TABLE `diagnostico` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.dientes
CREATE TABLE IF NOT EXISTS `dientes` (
  `id_dientes` int(11) DEFAULT NULL,
  `pieza1_a` int(11) DEFAULT NULL,
  `pieza1_b` int(11) DEFAULT NULL,
  `pieza1_c` int(11) DEFAULT NULL,
  `pieza1_d` int(11) DEFAULT NULL,
  `pieza1_e` int(11) DEFAULT NULL,
  `pieza2_a` int(11) DEFAULT NULL,
  `pieza2_b` int(11) DEFAULT NULL,
  `pieza2_c` int(11) DEFAULT NULL,
  `pieza2_d` int(11) DEFAULT NULL,
  `pieza2_e` int(11) DEFAULT NULL,
  `pieza3_a` int(11) DEFAULT NULL,
  `pieza3_b` int(11) DEFAULT NULL,
  `pieza3_c` int(11) DEFAULT NULL,
  `pieza3_d` int(11) DEFAULT NULL,
  `pieza3_e` int(11) DEFAULT NULL,
  `pieza4_a` int(11) DEFAULT NULL,
  `pieza4_b` int(11) DEFAULT NULL,
  `pieza4_c` int(11) DEFAULT NULL,
  `pieza4_d` int(11) DEFAULT NULL,
  `pieza5_a` int(11) DEFAULT NULL,
  `pieza5_b` int(11) DEFAULT NULL,
  `pieza5_c` int(11) DEFAULT NULL,
  `pieza5_d` int(11) DEFAULT NULL,
  `pieza6_a` int(11) DEFAULT NULL,
  `pieza6_b` int(11) DEFAULT NULL,
  `pieza6_c` int(11) DEFAULT NULL,
  `pieza6_d` int(11) DEFAULT NULL,
  `pieza7_a` int(11) DEFAULT NULL,
  `pieza7_b` int(11) DEFAULT NULL,
  `pieza7_c` int(11) DEFAULT NULL,
  `pieza7_d` int(11) DEFAULT NULL,
  `pieza8_a` int(11) DEFAULT NULL,
  `pieza8_b` int(11) DEFAULT NULL,
  `pieza8_c` int(11) DEFAULT NULL,
  `pieza8_d` int(11) DEFAULT NULL,
  `pieza9_a` int(11) DEFAULT NULL,
  `pieza9_b` int(11) DEFAULT NULL,
  `pieza9_c` int(11) DEFAULT NULL,
  `pieza9_d` int(11) DEFAULT NULL,
  `pieza10_a` int(11) DEFAULT NULL,
  `pieza10_b` int(11) DEFAULT NULL,
  `pieza10_c` int(11) DEFAULT NULL,
  `pieza10_d` int(11) DEFAULT NULL,
  `pieza11_a` int(11) DEFAULT NULL,
  `pieza11_b` int(11) DEFAULT NULL,
  `pieza11_c` int(11) DEFAULT NULL,
  `pieza11_d` int(11) DEFAULT NULL,
  `pieza12_a` int(11) DEFAULT NULL,
  `pieza12_b` int(11) DEFAULT NULL,
  `pieza12_c` int(11) DEFAULT NULL,
  `pieza12_d` int(11) DEFAULT NULL,
  `pieza13_a` int(11) DEFAULT NULL,
  `pieza13_b` int(11) DEFAULT NULL,
  `pieza13_c` int(11) DEFAULT NULL,
  `pieza13_d` int(11) DEFAULT NULL,
  `pieza14_a` int(11) DEFAULT NULL,
  `pieza14_b` int(11) DEFAULT NULL,
  `pieza14_c` int(11) DEFAULT NULL,
  `pieza14_d` int(11) DEFAULT NULL,
  `pieza14_e` int(11) DEFAULT NULL,
  `pieza15_a` int(11) DEFAULT NULL,
  `pieza15_b` int(11) DEFAULT NULL,
  `pieza15_c` int(11) DEFAULT NULL,
  `pieza15_d` int(11) DEFAULT NULL,
  `pieza15_e` int(11) DEFAULT NULL,
  `pieza16_a` int(11) DEFAULT NULL,
  `pieza16_b` int(11) DEFAULT NULL,
  `pieza16_c` int(11) DEFAULT NULL,
  `pieza16_d` int(11) DEFAULT NULL,
  `pieza16_e` int(11) DEFAULT NULL,
  `pieza17_a` int(11) DEFAULT NULL,
  `pieza17_b` int(11) DEFAULT NULL,
  `pieza17_c` int(11) DEFAULT NULL,
  `pieza17_d` int(11) DEFAULT NULL,
  `pieza17_e` int(11) DEFAULT NULL,
  `pieza18_a` int(11) DEFAULT NULL,
  `pieza18_b` int(11) DEFAULT NULL,
  `pieza18_c` int(11) DEFAULT NULL,
  `pieza18_d` int(11) DEFAULT NULL,
  `pieza18_e` int(11) DEFAULT NULL,
  `pieza19_a` int(11) DEFAULT NULL,
  `pieza19_b` int(11) DEFAULT NULL,
  `pieza19_c` int(11) DEFAULT NULL,
  `pieza19_d` int(11) DEFAULT NULL,
  `pieza19_e` int(11) DEFAULT NULL,
  `pieza20_a` int(11) DEFAULT NULL,
  `pieza20_b` int(11) DEFAULT NULL,
  `pieza20_c` int(11) DEFAULT NULL,
  `pieza20_d` int(11) DEFAULT NULL,
  `pieza21_a` int(11) DEFAULT NULL,
  `pieza21_b` int(11) DEFAULT NULL,
  `pieza21_c` int(11) DEFAULT NULL,
  `pieza21_d` int(11) DEFAULT NULL,
  `pieza22_a` int(11) DEFAULT NULL,
  `pieza22_b` int(11) DEFAULT NULL,
  `pieza22_c` int(11) DEFAULT NULL,
  `pieza22_d` int(11) DEFAULT NULL,
  `pieza23_a` int(11) DEFAULT NULL,
  `pieza23_b` int(11) DEFAULT NULL,
  `pieza23_c` int(11) DEFAULT NULL,
  `pieza23_d` int(11) DEFAULT NULL,
  `pieza24_a` int(11) DEFAULT NULL,
  `pieza24_b` int(11) DEFAULT NULL,
  `pieza24_c` int(11) DEFAULT NULL,
  `pieza24_d` int(11) DEFAULT NULL,
  `pieza25_a` int(11) DEFAULT NULL,
  `pieza25_b` int(11) DEFAULT NULL,
  `pieza25_c` int(11) DEFAULT NULL,
  `pieza25_d` int(11) DEFAULT NULL,
  `pieza26_a` int(11) DEFAULT NULL,
  `pieza26_b` int(11) DEFAULT NULL,
  `pieza26_c` int(11) DEFAULT NULL,
  `pieza26_d` int(11) DEFAULT NULL,
  `pieza27_a` int(11) DEFAULT NULL,
  `pieza27_b` int(11) NOT NULL,
  `pieza27_c` int(11) DEFAULT NULL,
  `pieza27_d` int(11) DEFAULT NULL,
  `pieza28_a` int(11) DEFAULT NULL,
  `pieza28_b` int(11) DEFAULT NULL,
  `pieza28_c` int(11) NOT NULL,
  `pieza28_d` int(11) DEFAULT NULL,
  `pieza29_a` int(11) DEFAULT NULL,
  `pieza29_b` int(11) DEFAULT NULL,
  `pieza29_c` int(11) DEFAULT NULL,
  `pieza29_d` int(11) DEFAULT NULL,
  `pieza30_a` int(11) DEFAULT NULL,
  `pieza30_b` int(11) DEFAULT NULL,
  `pieza30_c` int(11) DEFAULT NULL,
  `pieza30_d` int(11) DEFAULT NULL,
  `pieza30_e` int(11) DEFAULT NULL,
  `pieza31_a` int(11) DEFAULT NULL,
  `pieza31_b` int(11) DEFAULT NULL,
  `pieza31_c` int(11) DEFAULT NULL,
  `pieza31_d` int(11) DEFAULT NULL,
  `pieza31_e` int(11) DEFAULT NULL,
  `pieza32_a` int(11) DEFAULT NULL,
  `pieza32_b` int(11) DEFAULT NULL,
  `pieza32_c` int(11) DEFAULT NULL,
  `pieza32_d` int(11) DEFAULT NULL,
  `pieza32_e` int(11) DEFAULT NULL,
  KEY `id_dientes` (`id_dientes`),
  CONSTRAINT `dientes_ibfk_1` FOREIGN KEY (`id_dientes`) REFERENCES `ficha_ei` (`id_fichaie`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla clinica.dientes: ~0 rows (aproximadamente)
DELETE FROM `dientes`;
/*!40000 ALTER TABLE `dientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `dientes` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.doctores
CREATE TABLE IF NOT EXISTS `doctores` (
  `dni` char(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fono` char(20) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla clinica.doctores: ~7 rows (aproximadamente)
DELETE FROM `doctores`;
/*!40000 ALTER TABLE `doctores` DISABLE KEYS */;
INSERT INTO `doctores` (`dni`, `nombre`, `fono`, `id`) VALUES
	('', 'J.Gaona', '', 1),
	(NULL, 'J.Visosa', NULL, 2),
	(NULL, 'D.Becerra', NULL, 3),
	(NULL, 'R.Flores', NULL, 4),
	(NULL, 'R.Alegria', NULL, 5),
	(NULL, 'R.Reynosa', NULL, 6),
	(NULL, 'C.Gonzales', NULL, 7);
/*!40000 ALTER TABLE `doctores` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.d_tratamiento
CREATE TABLE IF NOT EXISTS `d_tratamiento` (
  `id_descripcion` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT '0',
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT '0',
  PRIMARY KEY (`id_descripcion`),
  KEY `id` (`id`),
  CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `n_tratamiento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla clinica.d_tratamiento: ~62 rows (aproximadamente)
DELETE FROM `d_tratamiento`;
/*!40000 ALTER TABLE `d_tratamiento` DISABLE KEYS */;
INSERT INTO `d_tratamiento` (`id_descripcion`, `id`, `descripcion`) VALUES
	(1, 1, 'Periapical'),
	(2, 1, 'Bitewing - Otras'),
	(3, 2, 'Destartraje'),
	(4, 2, 'Profilaxis'),
	(5, 2, 'Sellantes'),
	(6, 2, 'Fluorizacion'),
	(7, 3, 'Pulpotomia'),
	(8, 3, 'Pulpectomia'),
	(9, 4, 'Obturacion Simple'),
	(10, 4, 'Obturacion Compuesta'),
	(11, 4, 'Obturacion Compleja'),
	(12, 4, 'Pin dentinario'),
	(13, 4, 'Recubrimiento Pulpar'),
	(14, 5, 'Endodoncia anterior'),
	(15, 5, 'Endodoncia posterior'),
	(16, 5, 'Retratamiento'),
	(17, 5, 'Endodoncia con rotatorio'),
	(18, 6, 'Exodoncia Simple'),
	(19, 6, 'Exodoncia Compleja'),
	(20, 6, 'Exodoncia Semi Impactada'),
	(21, 6, 'Exodoncia Impactada'),
	(22, 6, 'Exodoncia de Remanente'),
	(23, 6, 'EApicectomia'),
	(24, 7, 'Raspaje y alisaje radicular'),
	(25, 7, 'Ganancia de corona clinica'),
	(26, 7, 'Curetaje Gingival'),
	(27, 7, 'Regeneracion Tisular Guiada'),
	(28, 7, 'Gingivoplastía'),
	(29, 7, 'Gingivo-osteoplastía'),
	(30, 7, 'Frenectomia'),
	(31, 7, 'Injerto óseo x gramo'),
	(32, 8, 'Implante para protesis fija'),
	(33, 8, 'Corona sobre implante'),
	(34, 8, 'Implante para protesis removible'),
	(35, 8, 'Sobredentadura atornillada'),
	(36, 9, 'Carillas'),
	(37, 9, 'Incrustacion'),
	(38, 9, 'Blanqueamiento'),
	(39, 9, 'Diseño Digital de la Sonrisa'),
	(40, 9, 'Encerado Dx./Mock Up'),
	(41, 10, 'Corona Metal Ceramica'),
	(42, 10, 'Corona Libre de Metal'),
	(43, 10, 'Corona - Otros'),
	(44, 10, 'Espigo Muñon'),
	(45, 10, 'Ataches'),
	(46, 11, 'Con Base Metallica'),
	(47, 11, 'Tipo Wipla'),
	(48, 12, 'Rebasado de protesis'),
	(49, 12, 'Reparación de protesis'),
	(50, 13, 'acrilico'),
	(51, 13, 'Acetato'),
	(54, 14, 'Brackets Metalicos'),
	(55, 14, 'Brackets Cerámicos'),
	(56, 14, 'Brackets Zafiro'),
	(57, 14, 'Brackets Autoligantes'),
	(58, 14, 'Ortodoncia Invisible'),
	(59, 14, 'Minitornillos'),
	(60, 15, 'Superior'),
	(61, 15, 'Inferior'),
	(62, 15, 'Contencion Fija Superior'),
	(63, 15, 'Contencion Fija Interior'),
	(64, 16, 'OTROS');
/*!40000 ALTER TABLE `d_tratamiento` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.ficha
CREATE TABLE IF NOT EXISTS `ficha` (
  `id_ficha` int(11) unsigned zerofill DEFAULT NULL,
  `id_doctores` int(11) DEFAULT NULL,
  `numero_h` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `doctor_tte` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `dni` varchar(50) DEFAULT NULL,
  `edad` varchar(50) DEFAULT NULL,
  `fecha_n` date DEFAULT NULL,
  `lugar_n` varchar(50) DEFAULT NULL,
  `apoderado` varchar(50) DEFAULT NULL,
  `parentesco` varchar(50) DEFAULT NULL,
  `lugar_p` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `distrito` varchar(50) DEFAULT NULL,
  `codigo_p` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `centro_toe` varchar(50) DEFAULT NULL,
  `telefono_ofi` varchar(50) DEFAULT NULL,
  `recom_por` varchar(50) DEFAULT NULL,
  `motivo_consul` varchar(100) DEFAULT NULL,
  `medicode_conf` varchar(50) DEFAULT NULL,
  `contacto_emer` varchar(50) DEFAULT NULL,
  `telef_emer` varchar(50) DEFAULT NULL,
  `alergico_m` varchar(10) DEFAULT NULL,
  `cual_am` varchar(50) DEFAULT NULL,
  `tipo_m` varchar(10) DEFAULT NULL,
  `cualtipo_m` varchar(50) DEFAULT NULL,
  `hepatitis` varchar(10) DEFAULT NULL,
  `tipo_h` varchar(50) DEFAULT NULL,
  `diabetes` varchar(10) DEFAULT NULL,
  `tratamiento_d` varchar(50) DEFAULT NULL,
  `presion` varchar(10) DEFAULT NULL,
  `presion_m` varchar(50) DEFAULT NULL,
  `fuma` varchar(10) DEFAULT NULL,
  `embarazada` varchar(10) DEFAULT NULL,
  `hemorragias` varchar(10) DEFAULT NULL,
  `r_anestecia` varchar(10) DEFAULT NULL,
  `dolor_d` varchar(10) DEFAULT NULL,
  `olor_b` varchar(10) DEFAULT NULL,
  `ruidos_b` varchar(10) DEFAULT NULL,
  `dolor_m` varchar(10) DEFAULT NULL,
  `satisfecho_s` varchar(10) DEFAULT NULL,
  `e_muelas` varchar(10) DEFAULT NULL,
  `b_dental` varchar(10) DEFAULT NULL,
  `cuanto_t` varchar(50) DEFAULT NULL,
  `protesis` varchar(10) DEFAULT NULL,
  `tipo_p` varchar(50) DEFAULT NULL,
  `aditamento_d` varchar(10) DEFAULT NULL,
  `cual_adit` varchar(50) DEFAULT NULL,
  `s_encias` varchar(10) DEFAULT NULL,
  `u_profilaxia` varchar(50) DEFAULT NULL,
  `frecuencia_d` varchar(50) DEFAULT NULL,
  `experiencia_t` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`numero_h`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla clinica.ficha: ~0 rows (aproximadamente)
DELETE FROM `ficha`;
/*!40000 ALTER TABLE `ficha` DISABLE KEYS */;
INSERT INTO `ficha` (`id_ficha`, `id_doctores`, `numero_h`, `fecha`, `doctor_tte`, `nombre`, `dni`, `edad`, `fecha_n`, `lugar_n`, `apoderado`, `parentesco`, `lugar_p`, `direccion`, `distrito`, `codigo_p`, `correo`, `telefono`, `celular`, `centro_toe`, `telefono_ofi`, `recom_por`, `motivo_consul`, `medicode_conf`, `contacto_emer`, `telef_emer`, `alergico_m`, `cual_am`, `tipo_m`, `cualtipo_m`, `hepatitis`, `tipo_h`, `diabetes`, `tratamiento_d`, `presion`, `presion_m`, `fuma`, `embarazada`, `hemorragias`, `r_anestecia`, `dolor_d`, `olor_b`, `ruidos_b`, `dolor_m`, `satisfecho_s`, `e_muelas`, `b_dental`, `cuanto_t`, `protesis`, `tipo_p`, `aditamento_d`, `cual_adit`, `s_encias`, `u_profilaxia`, `frecuencia_d`, `experiencia_t`) VALUES
	(NULL, NULL, 1, '2018-03-26', '', 'josthein mayorca', '74716278', '20', '2018-04-04', 'sda', 'asd', 'sdad', 'sn martin', 'sd', 'sad', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'sad', 'asds', 'asd', 'asd', 'SI', 'adsahdgsadgj', 'SI', 'ggggggg', 'SI', 'rrrrrr', 'SI', 'yyyyyyy', 'SI', 'jjjjj', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'ertrtt', 'NO', 'NO', 'NO', 'wertytyr', 'NO', 'vxcvxcvxcv', 'NO', 'vfbcvbcv', 'NO', 'rrqwrqwr', 'asdddd', 'aasdasd'),
	(NULL, NULL, 2, '2018-03-27', 'J.Gaona', 'douglas torres torres', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, '', NULL, '', NULL, '', '', ''),
	(NULL, NULL, 3, '2018-04-08', 'J.Visosa', 'Martin Callosa', '95959595', '25', '1995-12-02', '', 'Scorpio', '', '', '', '', '', '', '', '', '', '', 'Flavito', 'Otros casitos', '', '', '', 'NO', '', 'NO', '', 'NO', '', 'NO', '', 'NO', '', 'SI', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'SI', 'NO', 'NO', '', 'NO', '', 'NO', '', 'NO', '', '', 'nanais');
/*!40000 ALTER TABLE `ficha` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.ficha_ei
CREATE TABLE IF NOT EXISTS `ficha_ei` (
  `id_fichaie` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `numero_h` int(11) DEFAULT NULL,
  `motivo_c` varchar(100) DEFAULT NULL,
  `examen_i` varchar(100) DEFAULT NULL,
  `radiografias` varchar(10) DEFAULT NULL,
  `p_arterial` varchar(10) DEFAULT NULL,
  `periodontograma` varchar(10) DEFAULT NULL,
  `f_clinica` varchar(10) DEFAULT NULL,
  `e_laboratorio` varchar(10) DEFAULT NULL,
  `m_estudio` varchar(10) DEFAULT NULL,
  `tomografia` varchar(10) DEFAULT NULL,
  `a_sonrisa` varchar(10) DEFAULT NULL,
  `informe` varchar(150) DEFAULT NULL,
  `pieza` varchar(50) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `diag` varchar(50) DEFAULT NULL,
  `caries` varchar(10) DEFAULT NULL,
  `pulpitis` varchar(10) DEFAULT NULL,
  `necrosi_p` varchar(10) DEFAULT NULL,
  `gingivitis_a` varchar(10) DEFAULT NULL,
  `gingivitis_c` varchar(10) DEFAULT NULL,
  `periodontitis_a` varchar(10) DEFAULT NULL,
  `periodontitis_c` varchar(10) DEFAULT NULL,
  `dientes_inclu` varchar(10) DEFAULT NULL,
  `dientes_impac` varchar(10) DEFAULT NULL,
  `anomalias_dentofaciales` varchar(10) DEFAULT NULL,
  `anomalias_posicion` varchar(10) DEFAULT NULL,
  `transtornos` varchar(10) DEFAULT NULL,
  `perdida_diente` varchar(10) DEFAULT NULL,
  `diagnostico_a` varchar(100) DEFAULT NULL,
  `diagnostico_b` varchar(100) DEFAULT NULL,
  `diagnostico_c` varchar(100) DEFAULT NULL,
  `diagnostico_d` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_fichaie`),
  KEY `numero_h` (`numero_h`),
  CONSTRAINT `ficha_ei_ibfk_1` FOREIGN KEY (`numero_h`) REFERENCES `ficha` (`numero_h`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla clinica.ficha_ei: ~5 rows (aproximadamente)
DELETE FROM `ficha_ei`;
/*!40000 ALTER TABLE `ficha_ei` DISABLE KEYS */;
INSERT INTO `ficha_ei` (`id_fichaie`, `fecha`, `numero_h`, `motivo_c`, `examen_i`, `radiografias`, `p_arterial`, `periodontograma`, `f_clinica`, `e_laboratorio`, `m_estudio`, `tomografia`, `a_sonrisa`, `informe`, `pieza`, `area`, `diag`, `caries`, `pulpitis`, `necrosi_p`, `gingivitis_a`, `gingivitis_c`, `periodontitis_a`, `periodontitis_c`, `dientes_inclu`, `dientes_impac`, `anomalias_dentofaciales`, `anomalias_posicion`, `transtornos`, `perdida_diente`, `diagnostico_a`, `diagnostico_b`, `diagnostico_c`, `diagnostico_d`) VALUES
	(1, '2018-03-26', 1, 'cosas', 'examen', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'INFORMADO', '12', 'C', 'u7676ikulll', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'A', 'B', 'C', 'D'),
	(2, '2018-03-26', 1, 'cosas', 'examen', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'INFORMADO', '5', 'C', 'ssasdasdsd', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'A', 'B', 'C', 'D'),
	(3, '2018-03-27', 2, 'dientes', 'hoy', 'SI', 'NO', 'NO', 'SI', 'SI', 'SI', 'SI', 'SI', 'un informe', '13', 'A', 'prueba', 'NO', 'NO', 'NO', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'vivo', 'vivo2', 'vivo3', 'vivo4'),
	(4, '2018-04-08', 3, 'dolorcito', '', 'NO', 'SI', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'todos los dientes con poco calcio', '1', 'A', 'leve', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', ''),
	(5, '2018-04-09', 3, 'motivo 2', 'examen 2', 'NO', 'NO', 'NO', 'SI', 'NO', 'NO', 'NO', 'NO', 'nada', '15', 'B', 'caries', 'NO', 'SI', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'diag11', 'diag22', 'diag33', 'diag44');
/*!40000 ALTER TABLE `ficha_ei` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.n_tratamiento
CREATE TABLE IF NOT EXISTS `n_tratamiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tratamiento` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla clinica.n_tratamiento: ~16 rows (aproximadamente)
DELETE FROM `n_tratamiento`;
/*!40000 ALTER TABLE `n_tratamiento` DISABLE KEYS */;
INSERT INTO `n_tratamiento` (`id`, `tratamiento`) VALUES
	(1, 'RADIOLOGIA'),
	(2, 'PREVENCION'),
	(3, 'ODONTOPEDIATRIA'),
	(4, 'OPERATORIA DENTAL'),
	(5, 'ENDODONCIA'),
	(6, 'CIRUGIA'),
	(7, 'PERIODONCIA'),
	(8, 'IMPLANTES'),
	(9, 'COSMETICA'),
	(10, 'PROTESIS FIJA'),
	(11, 'PROTESIS PARCIAL REMOVIBLE'),
	(12, 'PROTESIS TOTAL'),
	(13, 'FERULA DE RELAJAMIENTO'),
	(14, 'ORTODONCIA'),
	(15, 'APARATOLOGIA REMOVIBLE'),
	(16, 'OTROS');
/*!40000 ALTER TABLE `n_tratamiento` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla clinica.pacientes: ~54 rows (aproximadamente)
DELETE FROM `pacientes`;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` (`id`, `nombre`, `dni`, `telefono`, `email`, `fechanac`) VALUES
	(1, 'rosa', '', '', '', '0000-00-00'),
	(2, 'pablo', '', '', '', '0000-00-00'),
	(3, 'richard', '', '', '', '0000-00-00'),
	(4, 'aaa', '', '', '', '0000-00-00'),
	(5, 'luis', '', '', '', '0000-00-00'),
	(6, 'rodrigo', '', '', '', '0000-00-00'),
	(7, 'alex', '', '', '', '0000-00-00'),
	(8, 'jhon', '', '', '', '0000-00-00'),
	(9, 'yyyyy', '', '', '', '0000-00-00'),
	(10, 'samuel', '', '', '', '0000-00-00'),
	(11, 'Cintia', '', '', '', '0000-00-00'),
	(12, 'Pedro', '', '', '', '0000-00-00'),
	(13, 'Alcaeda', '', '', '', '0000-00-00'),
	(14, 'Thomas', '', '', '', '0000-00-00'),
	(15, 'Lucy', '', '', '', '0000-00-00'),
	(16, 'Jamir', '', '', '', '0000-00-00'),
	(17, 'j', '', '', '', '0000-00-00'),
	(18, 'pisco', '', '', '', '0000-00-00'),
	(19, 'gg', '', '', '', '0000-00-00'),
	(20, 'Papila', '', '', '', '0000-00-00'),
	(22, 'nuevo contactiaxcasd', '', '', '', '0000-00-00'),
	(23, 'prueba id invi', '', '', '', '0000-00-00'),
	(24, 'pruebasdasdsasadsadsad', '', '', '', '0000-00-00'),
	(25, 'jostin', '', '', '', '0000-00-00'),
	(26, 'sdahksdaghsdahsda', '', '', '', '0000-00-00'),
	(27, 'juancito', '', '', '', '0000-00-00'),
	(28, 'nuevo', '', '', '', '0000-00-00'),
	(29, 'nuevo 2', '', '', '', '0000-00-00'),
	(30, 'nuevo 3', '', '', '', '0000-00-00'),
	(31, 'nuevo4', '', '', '', '0000-00-00'),
	(32, 'nuevo3', '', '', '', '0000-00-00'),
	(33, 'sadsda', '', '', '', '0000-00-00'),
	(34, 'nuevo2', '', '', '', '0000-00-00'),
	(35, 'prueba', '', '', '', '0000-00-00'),
	(36, 'dia 1', '', '', '', '0000-00-00'),
	(37, 'esto es una prueba', '', '', '', '0000-00-00'),
	(38, 'joseeeeee', '', '', '', '0000-00-00'),
	(39, 'visosaaaaa', '', '', '', '0000-00-00'),
	(40, 'joseeeeeeee', '', '', '', '0000-00-00'),
	(41, 'sdasdasdasdasda', '', '', '', '0000-00-00'),
	(42, 'dsasdasdasdasdasda', '', '', '', '0000-00-00'),
	(43, 'fgdfgdfgdfgfdg', '', '', '', '0000-00-00'),
	(44, 'gtfuy', '', '', '', '0000-00-00'),
	(45, 'fffffff', '', '', '', '0000-00-00'),
	(46, 'as', '', '', '', '0000-00-00'),
	(47, 'sadsadsad', '', '', '', '0000-00-00'),
	(48, 'asdasdasd', '', '', '', '0000-00-00'),
	(49, 'asdasd', '', '', '', '0000-00-00'),
	(50, 'adasd', '', '', '', '0000-00-00'),
	(51, 'asdsadsd', '', '', '', '0000-00-00'),
	(52, 'adasds', '', '', '', '0000-00-00'),
	(53, 'dasasdas', '', '', '', '0000-00-00'),
	(54, 'asdsad', '', '', '', '0000-00-00'),
	(55, 'sadasdasd', '', '', '', '0000-00-00'),
	(56, 'martin vizcarra', '98686868', '', '', '0000-00-00'),
	(57, 'selena gomez', '', '', '', '0000-00-00'),
	(58, 'sandra bullock', '', '', '', '0000-00-00'),
	(59, 'asdasdas', '', '', '', '0000-00-00'),
	(60, 'sdasda', '', '', '', '0000-00-00'),
	(61, 'dddddddddddd', '', '', '', '0000-00-00');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.pacienteseliminados
CREATE TABLE IF NOT EXISTS `pacienteseliminados` (
  `id` int(11) NOT NULL,
  `nombre` char(35) CHARACTER SET utf8 NOT NULL,
  `dni` char(11) CHARACTER SET utf8 NOT NULL,
  `telefono` char(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fechanac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla clinica.pacienteseliminados: ~5 rows (aproximadamente)
DELETE FROM `pacienteseliminados`;
/*!40000 ALTER TABLE `pacienteseliminados` DISABLE KEYS */;
INSERT INTO `pacienteseliminados` (`id`, `nombre`, `dni`, `telefono`, `email`, `fechanac`) VALUES
	(8, 'Miguel Ignacio de las Casas', '', '', '', '0000-00-00'),
	(7, 'Juan', '96325874', '2563147', 'juan@gmail.com', '1980-11-02'),
	(23, 'sandro', '', '', '', '0000-00-00'),
	(23, 'sandro', '', '', '', '0000-00-00'),
	(22, 'pancho', '', '', '', '0000-00-00'),
	(21, 'ggg', '', '', '', '0000-00-00');
/*!40000 ALTER TABLE `pacienteseliminados` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.presupuestos
CREATE TABLE IF NOT EXISTS `presupuestos` (
  `id_presupuesto` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `numero_h` int(11) NOT NULL,
  `pieza` int(11) NOT NULL,
  `area` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `diag` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion2` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `costo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `costoSoles` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `costoDolar` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `inicial` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `saldo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cuotas` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_presupuesto`),
  KEY `id_presupuesto` (`numero_h`),
  CONSTRAINT `presupuestos_ibfk_1` FOREIGN KEY (`numero_h`) REFERENCES `ficha_ei` (`numero_h`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla clinica.presupuestos: ~4 rows (aproximadamente)
DELETE FROM `presupuestos`;
/*!40000 ALTER TABLE `presupuestos` DISABLE KEYS */;
INSERT INTO `presupuestos` (`id_presupuesto`, `fecha`, `numero_h`, `pieza`, `area`, `diag`, `Descripcion`, `Descripcion2`, `costo`, `cantidad`, `costoSoles`, `costoDolar`, `inicial`, `saldo`, `cuotas`) VALUES
	(82, '2018-04-09', 1, 12, 'C', 'u7676ikulll', '', '', '50', '4', '6.00', '1.84', '6', '0', '0'),
	(83, '2018-04-09', 1, 12, 'C', 'u7676ikulll', 'PREVENCION', 'Destartraje', '2', '6', '6.00', '1.84', '6', '0', '0'),
	(84, '2018-04-09', 2, 13, 'A', 'prueba', '', '', '', '', '319.00', '97.85', '', '', ''),
	(85, '2018-04-09', 2, 13, 'A', 'prueba', 'PREVENCION', 'Profilaxis', '3', '33', '319.00', '97.85', '', '', ''),
	(86, '2018-04-09', 2, 13, 'A', 'prueba', 'FERULA DE RELAJAMIENTO', 'Acetato', '4', '55', '319.00', '97.85', '', '', '');
/*!40000 ALTER TABLE `presupuestos` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.record_tratamiento
CREATE TABLE IF NOT EXISTS `record_tratamiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `numero_h` int(11) DEFAULT NULL,
  `tpps` int(11) DEFAULT NULL,
  `tppd` int(11) DEFAULT NULL,
  `cis` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `rtfecha` date DEFAULT NULL,
  `rtatencion` varchar(50) DEFAULT NULL,
  `ecdr` varchar(50) DEFAULT NULL,
  `ecfecha` date DEFAULT NULL,
  `ectc` varchar(50) DEFAULT NULL,
  `ecacta` varchar(50) DEFAULT NULL,
  `ecsaldo` varchar(50) DEFAULT NULL,
  `laba` varchar(50) DEFAULT NULL,
  `labb` varchar(50) DEFAULT NULL,
  `labc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rt` (`numero_h`),
  CONSTRAINT `fk_rt` FOREIGN KEY (`numero_h`) REFERENCES `presupuestos` (`numero_h`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla clinica.record_tratamiento: ~0 rows (aproximadamente)
DELETE FROM `record_tratamiento`;
/*!40000 ALTER TABLE `record_tratamiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `record_tratamiento` ENABLE KEYS */;

-- Volcando estructura para tabla clinica.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dc` (`idusuario`),
  CONSTRAINT `fk_dc` FOREIGN KEY (`idusuario`) REFERENCES `doctores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla clinica.usuario: ~7 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nombre_usuario`, `clave`, `idusuario`) VALUES
	(1, 'Jose', '2018jg', 1),
	(2, 'Visosa', '2018vi', 2),
	(3, 'Becerra', '2018be', 3),
	(4, 'Flores', '2018fl', 4),
	(5, 'Alegria', '2018al', 5),
	(6, 'Reynosa', '2018re', 6),
	(7, 'Gonzales', '2018go', 7);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

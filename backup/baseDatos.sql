-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para tienda_santiaguina
CREATE DATABASE IF NOT EXISTS `tienda_santiaguina` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tienda_santiaguina`;

-- Volcando estructura para tabla tienda_santiaguina.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id_pro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificacion autoincremental',
  `cod_pro` int(11) DEFAULT NULL COMMENT 'codigo del producto',
  `nom_pro` varchar(50) DEFAULT NULL COMMENT 'nombre del producto',
  `can_pro` int(11) DEFAULT NULL COMMENT 'cantidad del producto',
  `tip_pro` varchar(50) DEFAULT NULL COMMENT 'tipo del producto',
  `pre_pro` int(11) DEFAULT NULL COMMENT 'precio del producto',
  PRIMARY KEY (`id_pro`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tienda_santiaguina.productos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id_pro`, `cod_pro`, `nom_pro`, `can_pro`, `tip_pro`, `pre_pro`) VALUES
	(5, 327, 'Gorra verde', 2, 'gorras', 10),
	(6, 1234, 'bata azul', 6, 'uniforme', 10000),
	(7, 928, 'camisa morada', 3, 'camisas', 25000),
	(8, 502, 'sudadera gris', 8, 'sudaderas', 35000);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla tienda_santiaguina.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificacion automatica',
  `cor_usu` varchar(50) NOT NULL COMMENT 'correo usuario',
  `con_usu` varchar(50) DEFAULT NULL COMMENT 'contraseña usuario',
  `nom_usu` varchar(50) NOT NULL,
  `ape_usu` varchar(50) NOT NULL,
  `use_usu` varchar(50) DEFAULT NULL,
  `adm_pro` char(1) DEFAULT '1',
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tienda_santiaguina.usuarios: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usu`, `cor_usu`, `con_usu`, `nom_usu`, `ape_usu`, `use_usu`, `adm_pro`) VALUES
	(2, 'admin@gmail.com', '1234', 'Ricardo', 'Almeida', 'rad', '0'),
	(7, 'catalina@gmail.com', 'qwerty2020', 'Catalina', 'Mendoza', 'cat27', '1'),
	(8, 'santi@gmail.com', '12345', 'Santiago', 'Varela', 'sirzes', '1');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para aac
CREATE DATABASE IF NOT EXISTS `aac` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `aac`;


-- Copiando estrutura para tabela aac.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `categoria_geral` int(11) DEFAULT NULL,
  `data_cadastro` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela aac.categoria: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
REPLACE INTO `categoria` (`id_categoria`, `nome`, `categoria_geral`, `data_cadastro`) VALUES
	(14, 'eu quero comer', 1, '2018-08-12 01:13:37'),
	(15, 'Eu quero Beber', 1, '2018-08-12 01:16:38'),
	(18, 'Eu quero andar', 1, '2018-08-12 01:38:38');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;


-- Copiando estrutura para tabela aac.categoria_usuario
CREATE TABLE IF NOT EXISTS `categoria_usuario` (
  `id_categoria_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL DEFAULT '0',
  `id_usuario` int(11) NOT NULL DEFAULT '0',
  `data_cadastro` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_categoria_usuario`),
  KEY `FK_categoria_usuario_categoria` (`id_categoria`),
  KEY `FK_categoria_usuario_usuario` (`id_usuario`),
  CONSTRAINT `FK_categoria_usuario_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  CONSTRAINT `FK_categoria_usuario_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela aac.categoria_usuario: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria_usuario` DISABLE KEYS */;
REPLACE INTO `categoria_usuario` (`id_categoria_usuario`, `id_categoria`, `id_usuario`, `data_cadastro`) VALUES
	(34, 14, 29, NULL),
	(35, 15, 29, NULL),
	(36, 18, 29, '2018-08-12 01:38:38');
/*!40000 ALTER TABLE `categoria_usuario` ENABLE KEYS */;


-- Copiando estrutura para tabela aac.sub_categoria
CREATE TABLE IF NOT EXISTS `sub_categoria` (
  `id_sub_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `id_categoria` int(11) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `data_cadastro` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_sub_categoria`),
  KEY `FK_subi_categoria_categoria` (`id_categoria`),
  CONSTRAINT `FK_subi_categoria_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela aac.sub_categoria: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `sub_categoria` DISABLE KEYS */;
REPLACE INTO `sub_categoria` (`id_sub_categoria`, `nome`, `id_categoria`, `imagem`, `data_cadastro`) VALUES
	(5, 'Pão', 14, 'public/img/sub_categorias/1534076649.jpg', '2018-08-12 09:24:09'),
	(6, 'Peixe Frito', 14, 'public/img/sub_categorias/1534076769.jpg', '2018-08-12 09:26:09'),
	(7, 'Macarrão', 14, 'public/img/sub_categorias/1534077195.jpg', '2018-08-12 09:33:15'),
	(8, 'Agua', 15, 'public/img/sub_categorias/1534079867.jpg', '2018-08-12 10:17:47'),
	(9, 'Suco de Laranja', 15, 'public/img/sub_categorias/1534080388.jpg', '2018-08-12 10:26:28');
/*!40000 ALTER TABLE `sub_categoria` ENABLE KEYS */;


-- Copiando estrutura para tabela aac.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `data_cadastro` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela aac.usuario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
REPLACE INTO `usuario` (`id_usuario`, `nome`, `imagem`, `data_cadastro`) VALUES
	(29, 'Valdiney', 'public/img/usuarios/1534047868.jpg', '2018-08-12 01:24:28');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

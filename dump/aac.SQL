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
  `categoria_geral` int(11) DEFAULT '0',
  `data_cadastro` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela aac.categoria: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
REPLACE INTO `categoria` (`id_categoria`, `nome`, `categoria_geral`, `data_cadastro`) VALUES
	(1, 'Comer', 0, '2018-08-06 22:43:27'),
	(2, 'Beber', 0, '2018-08-06 22:43:40');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;


-- Copiando estrutura para tabela aac.sub_categoria
CREATE TABLE IF NOT EXISTS `sub_categoria` (
  `id_subi_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `id_categoria` int(11) DEFAULT NULL,
  `data_cadastro` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_subi_categoria`),
  KEY `FK_subi_categoria_categoria` (`id_categoria`),
  CONSTRAINT `FK_subi_categoria_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela aac.sub_categoria: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sub_categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `sub_categoria` ENABLE KEYS */;


-- Copiando estrutura para tabela aac.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(50) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `data_cadastro` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `FK_usuario_categoria` (`id_categoria`),
  CONSTRAINT `FK_usuario_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela aac.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

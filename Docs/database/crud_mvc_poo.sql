-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.36 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para crud_mvc_poo
DROP DATABASE IF EXISTS `crud_mvc_poo`;
CREATE DATABASE IF NOT EXISTS `crud_mvc_poo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `crud_mvc_poo`;

-- Copiando estrutura para tabela crud_mvc_poo.clients
DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `name_client` varchar(45) NOT NULL,
  `email_client` varchar(85) NOT NULL,
  `phone_client` varchar(11) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela crud_mvc_poo.clients: 1 rows
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
REPLACE INTO `clients` (`id_client`, `name_client`, `email_client`, `phone_client`) VALUES
	(1, 'Jose Lima Corte', 'jose@gmail.com', '12345678910'),
	(2, 'Almira Campos', 'almirasqcampos@gmail.com', '22233123123');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

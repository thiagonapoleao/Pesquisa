-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.35-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para tratativa
CREATE DATABASE IF NOT EXISTS `tratativa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tratativa`;

-- Copiando estrutura para tabela tratativa.separadores
CREATE TABLE IF NOT EXISTS `separadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tratativa.separadores: 177 rows
/*!40000 ALTER TABLE `separadores` DISABLE KEYS */;
INSERT INTO `separadores` (`id`, `codigo`, `nome`) VALUES
	(1, 2, 'Damiane'),
	(2, 5, 'Valdirene'),
	(3, 6, 'Lucimara');
/*!40000 ALTER TABLE `separadores` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

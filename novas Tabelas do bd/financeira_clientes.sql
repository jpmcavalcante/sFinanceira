-- MySQL dump 10.13  Distrib 8.0.18, for Linux (x86_64)
--
-- Host: localhost    Database: financeira
-- ------------------------------------------------------
-- Server version	5.7.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `rg` varchar(30) DEFAULT NULL,
  `emissor` varchar(30) DEFAULT NULL,
  `estado_emissor` varchar(2) DEFAULT NULL,
  `data_expedicao` varchar(15) DEFAULT NULL,
  `data_nascimento` varchar(15) DEFAULT NULL,
  `estado_civil` varchar(30) DEFAULT NULL,
  `sexo` varchar(30) DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `endereco` varchar(45) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `tipo_residencia` varchar(45) DEFAULT NULL,
  `tempo_residencia` int(11) DEFAULT NULL,
  `naturalidade` varchar(45) DEFAULT NULL,
  `nome_pai` varchar(100) DEFAULT NULL,
  `nome_mae` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'foto gerada','333.333.333-33','edualexandre.f@gmail.com','3','ee','AM','33/33/3333','33/33/3333','Solteiro(a)','Masculino','(33) 3333-3333','(33) 33333-3333','50960300','Rua s, jabioatÃ£o, PE',4,'ee','VÃ¡rzea','ee','Recife','eee',3,'eee','gg','eeeeeeeeeeee'),(2,'EDUARDO ALEXANDRE FERREIRA DA SILVA','11027377475','edualexandre.f@gmail.com','6940251','dd','PB','2019-12-25','2019-12-13','Casado(a)','Masculino','81988391210','81988391210','50960-300','Ap, Apartamento',25,'wwww','www','ww','Lages','www',222,'w','w','w'),(3,'LÃ­via Karine de carvalho','110.273.774-75','livia.ca7444@gmail.com','6940251','dd','AC','33/33/3333','10/07/2011','ViÃºvo(a)','Feminino','81988391210','81988391210','50960-300','Ap, Apartamento',3,'uuu','uu','uu','uu','uuu',66,'uuu','uu','uu'),(17,'foto ver agora com outra img','333.333.333-33','edualexandre.f@gmail.com','3','ee','AM','33/33/3333','33/33/3333','Solteiro(a)','Masculino','(33) 3333-3333','(33) 33333-3333','50960300','Rua s, jabioatÃ£o, PE',4,'ee','VÃ¡rzea','ee','Recife','eee',3,'eee','gg','eeeeeeeeeeee'),(18,'teste agora','333.333.333-33','livia.ca7@gmail.com','2','ee','AC','07/10/1995','33/33/3333','Solteiro(a)','Masculino','(33) 3333-3333','(33) 33333-3333','50960300','Rua s, jabioatÃ£o, PE',3,'ee','VÃ¡rzea','ee','Recife','eee',3,'eee','eee','gg');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-27  4:08:34

CREATE DATABASE  IF NOT EXISTS `sistema_venta` /*DEFAULT CHARACTER SET utf8mb4 COLLATE utf8_unicode_ci*/;
USE `sistema_venta`;
-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: sistema_venta
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`



DROP TABLE IF EXISTS `users` ;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(200) NOT NULL,
  `avatar` VARCHAR(45) NULL,
  `perfil` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES(1,"Pedro","Malbran","pm@gmail.com","$2y$10$i49LHz.3zVQ2vUkOyHNelOpeoSQkvZ6b\/JWwmWml162aWHt.EMVSS","5d3dac79d968b.jpg",1);
INSERT INTO `users` VALUES(2,"Emilia","Bolzano","emi@gmail.com","$2y$10$x5QxEs04fJ2lIYLWntmkxuAgE9IUGbzKDTdQhgaiBoQKnp734TWne","5cf70bc2ecac1.jpg",9);
INSERT INTO `users` VALUES(3,"Luciana","Ferreiro","luli@gmail.com","$2y$10$7YR7QtbLenPkHmAMl0tcYu\/yskYrfjGcLJ4DXrP3B6ioy.vTLZzyK","5cf70afb7e85a.jpg",1);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--

DROP TABLE IF EXISTS `muebles` ;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;

CREATE TABLE `muebles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `precio` VARCHAR(45) NOT NULL,
  `material` VARCHAR(45) NULL,
  `alto` DECIMAL(2) NULL,
  `ancho` DECIMAL(2) NULL,
  `profundidad` DECIMAL(2) NULL,
  `descripcion` VARCHAR(1000) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `muebles`
--

--LOCK TABLES `muebles` WRITE;
--/*!40000 ALTER TABLE `users` DISABLE KEYS */;
--INSERT INTO `muebles` VALUES ;
--/*!40000 ALTER TABLE `users` ENABLE KEYS */;
--UNLOCK TABLES;



-- Dumping routines for database 'sistema_venta'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

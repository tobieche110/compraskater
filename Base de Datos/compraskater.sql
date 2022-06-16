-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: compraskater
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (5,'TABLA SECTION ELEMENT 8\'\'','15900','Element','tabla','2022-06-05-16-07-44.jpg'),(6,'TABLA SEAL ELEMENT 8.5\'\'','16900','Element','tabla','2022-06-05-16-08-48.jpg'),(7,'TABLA SKATE LUCKY CAT SANTA CRUZ 8\"','23400','Santa Cruz','tabla','2022-06-05-16-10-31.jpg'),(8,'RUEDAS SECTION 54mm ELEMENT','6999','Element','ruedas','2022-06-05-16-13-48.jpg'),(9,'RUEDAS WOODOO INST WARHOL','2950','Woodoo','ruedas','2022-06-05-16-15-31.jpg'),(10,'Truck para skate Raw Truck Set 5.25 ELEMENT','7699','Element','trucks','2022-06-05-16-17-30.jpg'),(11,'PIVOT TRUCKS TRI CHECKER BLACK/BLACK 5.25','3990','Checker','trucks','2022-06-05-16-18-44.jpg'),(12,'Rulemanes WOODOO REDWINGS RED TUBO','1840','Woodoo','rulemanes','2022-06-05-16-22-09.jpg'),(13,'Rulemanes de skate BONES SUPER REDS GRADE STEEL','9390','Bones','rulemanes','2022-06-05-16-23-02.jpg'),(14,'Rulemanes de skate BONES REDS 608','5960','Bones','rulemanes','2022-06-05-16-23-26.jpg'),(15,'Rulemanes de skate BONES SWISS CERAMICS','41490','Bones','rulemanes','2022-06-05-16-23-51.jpg'),(16,'Lija de skate WOODOO PLASTICO ECONOMICO MICROPERFORADA','990','Woodoo','lija','2022-06-05-16-26-13.jpg'),(17,'Lija de skate VARBARO ART - FALCON','1560','Varbaro','lija','2022-06-05-16-26-59.jpg'),(18,'Lija de skate VARBARO ART -BUDA','1560','Varbaro','lija','2022-06-05-16-27-19.jpg'),(19,'Kit de montaje tornillos WOODOO Allen 1”','490','Woodoo','hardware','2022-06-05-16-30-31.jpg'),(21,'Skate completo SANTA CRUZ LOGO','31990','Santa Cruz','skateCompleto','2022-06-05-16-33-48.jpg'),(22,'Skate completo WOODOO MARTINEZ PRO TOKYO','16960','Woodoo','skateCompleto','2022-06-05-16-34-14.jpg'),(23,'Skate Woodoo VISITOR PRO Tatu','16960','Woodoo','skateCompleto','2022-06-05-16-35-11.jpg'),(24,'Skate completo WOODOO VISITOR PRO MORAL 31.75','16960','Woodoo','skateCompleto','2022-06-10-03-14-57.jpg'),(25,'Tabla de skate WOODOO SANDRO MORAL PACK 777','8360','Woodoo','tabla','2022-06-10-03-16-36.jpg');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'tobieche','123456'),(2,'admin','admin');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-14 23:50:41

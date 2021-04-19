-- B.B.D.D. DBOpticaCulAmpolla.sql
-- START
-- Host: 127.0.0.1    Database: db-OpticaCulAmpolla
-- ------------------------------------------------------
-- Server version	8.0.21
CREATE DATABASE  IF NOT EXISTS `db-OpticaCulAmpolla` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db-OpticaCulAmpolla`;
-- MySQL dump 10.13  Distrib 8.0.21, for macos10.15 (x86_64)
--
-- Host: 127.0.0.1    Database: db-OpticaCulAmpolla
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `Brand`
--

DROP TABLE IF EXISTS `Brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Brand` (
  `idBrand` int NOT NULL,
  `brandName` varchar(45) NOT NULL,
  `idProveidor` int NOT NULL,
  `brandPurchaseDate` date DEFAULT NULL,
  PRIMARY KEY (`idBrand`),
  KEY `fk_brand_Proveidor1_idx` (`idProveidor`),
  CONSTRAINT `idProveidor` FOREIGN KEY (`idProveidor`) REFERENCES `Proveidor` (`idProveidor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Brand`
--

LOCK TABLES `Brand` WRITE;
/*!40000 ALTER TABLE `Brand` DISABLE KEYS */;
INSERT INTO `Brand` VALUES (1,'Rand',3,'2021-03-12'),(2,'Logan',3,'2021-03-12'),(3,'Lulo',3,'2021-02-02');
/*!40000 ALTER TABLE `Brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Client`
--

DROP TABLE IF EXISTS `Client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Client` (
  `idClient` int NOT NULL,
  `userType` enum('Client','Empleat','Proveïdor') NOT NULL,
  `name` varchar(45) NOT NULL,
  `surnames` varchar(100) NOT NULL,
  `postalCode` varchar(5) DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `registratonDate` date NOT NULL,
  `recommendedCustomer` int DEFAULT NULL,
  PRIMARY KEY (`idClient`),
  KEY `fk_Client_Client1_idx` (`recommendedCustomer`),
  CONSTRAINT `fk_Client_HAS_Client` FOREIGN KEY (`recommendedCustomer`) REFERENCES `Client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Client`
--

LOCK TABLES `Client` WRITE;
/*!40000 ALTER TABLE `Client` DISABLE KEYS */;
INSERT INTO `Client` VALUES (1,'Client','Jordi','Puigoriol','08500','123456789','j@g.com','2021-04-11',NULL),(2,'Client','Cristina','Comerma','08500','234567891','c@g.com','2021-04-11',NULL),(3,'Empleat','Ester','Masramon','08080','345678912','e@g.com','2021-04-11',NULL);
/*!40000 ALTER TABLE `Client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Employees`
--

DROP TABLE IF EXISTS `Employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Employees` (
  `idEmployer` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `surnames` varchar(100) NOT NULL,
  `registrationDate` date DEFAULT NULL,
  `codeWorker` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idEmployer`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employees`
--

LOCK TABLES `Employees` WRITE;
/*!40000 ALTER TABLE `Employees` DISABLE KEYS */;
INSERT INTO `Employees` VALUES (1,'Ester','Masramon','2021-04-10','esma001'),(2,'Jordi','Viñas','2021-04-11','jovi002');
/*!40000 ALTER TABLE `Employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Glasses`
--

DROP TABLE IF EXISTS `Glasses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Glasses` (
  `idGlasses` int NOT NULL,
  `brand_idBrand` int NOT NULL,
  `vidreGraduacioUllDret` varchar(34) DEFAULT NULL,
  `vidreGraduacioUllEsquerra` varchar(34) DEFAULT NULL,
  `vidreFiltre` varchar(55) DEFAULT NULL,
  `tipusMuntura` enum('Flotant','Metalica','Pasta') DEFAULT NULL,
  `colorMuntura` varchar(55) DEFAULT NULL,
  `colorVidreDret` varchar(34) DEFAULT NULL,
  `colorVidreEsquerra` varchar(34) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`idGlasses`),
  KEY `fk_Glasses_brand1_idx` (`brand_idBrand`),
  CONSTRAINT `fk_Glasses_brand1` FOREIGN KEY (`brand_idBrand`) REFERENCES `Brand` (`idBrand`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Glasses`
--

LOCK TABLES `Glasses` WRITE;
/*!40000 ALTER TABLE `Glasses` DISABLE KEYS */;
INSERT INTO `Glasses` VALUES (1,1,'0.50','0.75','si','Flotant','Taronja','normal','normal',190),(2,2,'2.25','3.50',NULL,'Metalica','Blau',NULL,NULL,215),(3,3,'1.0','1.0',NULL,'Pasta',NULL,'Anti reflectint','Anti reflectint',96);
/*!40000 ALTER TABLE `Glasses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Proveidor`
--

DROP TABLE IF EXISTS `Proveidor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Proveidor` (
  `idProveidor` int NOT NULL,
  `nameProveidor` varchar(45) NOT NULL,
  `nameStreet` varchar(100) NOT NULL,
  `numberStreet` int NOT NULL,
  `pis` varchar(5) DEFAULT NULL,
  `door` varchar(5) DEFAULT NULL,
  `city` varchar(55) NOT NULL,
  `postalCode` varchar(5) NOT NULL,
  `country` varchar(34) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `fax` varchar(34) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nif-dni` varchar(21) NOT NULL,
  PRIMARY KEY (`idProveidor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Proveidor`
--

LOCK TABLES `Proveidor` WRITE;
/*!40000 ALTER TABLE `Proveidor` DISABLE KEYS */;
INSERT INTO `Proveidor` VALUES (1,'Bauba Style','Woodys Barcelona',26,NULL,NULL,'Blanes','17300','Spain','670058259','670058259','670058259',NULL,'11111111'),(2,'Comercial Ernest','Via Cannetum',8,'3','1','Canet de Mar','08360','Spain','937943280',NULL,'937943281','i@ernest.com','222222222'),(3,'Woodys Barcelona','Pol. Ind. Malloles, c. Sau',5,NULL,NULL,'Vic','08501','Spain','938869110',NULL,'938869110',NULL,'33333333');
/*!40000 ALTER TABLE `Proveidor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Sales`
--

DROP TABLE IF EXISTS `Sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Sales` (
  `idSales` int NOT NULL,
  `idGlasses` int NOT NULL,
  `idEmployer` int DEFAULT NULL,
  `idClient` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `registratonDate` date NOT NULL,
  `codeWorker` varchar(10) NOT NULL,
  PRIMARY KEY (`idSales`),
  KEY `idGlasses_idx` (`idGlasses`),
  KEY `idClient_idx` (`idClient`),
  KEY `idEmployer_idx` (`idEmployer`),
  CONSTRAINT `idClient` FOREIGN KEY (`idClient`) REFERENCES `Client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `idEmployer` FOREIGN KEY (`idEmployer`) REFERENCES `Employees` (`idEmployer`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `idGlasses` FOREIGN KEY (`idGlasses`) REFERENCES `Glasses` (`idGlasses`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Sales`
--

LOCK TABLES `Sales` WRITE;
/*!40000 ALTER TABLE `Sales` DISABLE KEYS */;
INSERT INTO `Sales` VALUES (1,1,1,1,1,190.00,'2021-04-12','esma001'),(3,3,2,3,2,191.80,'2021-04-12','jovi002');
/*!40000 ALTER TABLE `Sales` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-15 17:07:23

-- B.B.D.D. DBOpticaCulAmpolla.sql
-- END








-- B.B.D.D. DBPizzeria.sql
-- START
-- MySQL dump 10.13  Distrib 8.0.21, for macos10.15 (x86_64)
--
-- Host: 127.0.0.1    Database: db-pizzeria
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `CartaProductos`
--

DROP TABLE IF EXISTS `CartaProductos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CartaProductos` (
  `idCartaProductos` int NOT NULL,
  `tipoProducto` enum('Pizza','Hamburguesa','Bebida') NOT NULL,
  `nombre` varchar(34) NOT NULL,
  `descripcion` varchar(144) NOT NULL,
  `imagen` varchar(144) NOT NULL,
  `precio` float NOT NULL,
  `alchol` enum('SI','NO') NOT NULL,
  `idCategorias` int NOT NULL,
  PRIMARY KEY (`idCartaProductos`),
  KEY `idCategoriasPizzas_idx` (`idCategorias`),
  CONSTRAINT `idCategoriasPizzas` FOREIGN KEY (`idCategorias`) REFERENCES `Categorias` (`idCategorias`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CartaProductos`
--

LOCK TABLES `CartaProductos` WRITE;
/*!40000 ALTER TABLE `CartaProductos` DISABLE KEYS */;
INSERT INTO `CartaProductos` VALUES (1,'Bebida','Sprite','Refresco','asdfghjkl',2.5,'NO',2),(2,'Pizza','Diavola','Pepperoni picant, bitxos i olives negres','qwertyuiop',9.25,'NO',1),(3,'Hamburguesa','Mexicana','Carn de Vedella 100%, salsa cheddar, chili amb carn, cogombrets, cheddar, jalapeños i nachos','zxcvbnm',9.95,'NO',3);
/*!40000 ALTER TABLE `CartaProductos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CartaProductos_has_Pedidos`
--

DROP TABLE IF EXISTS `CartaProductos_has_Pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CartaProductos_has_Pedidos` (
  `CartaProductos_idCartaProductos` int NOT NULL,
  `Pedidos_idPedido` int NOT NULL,
  `cantidad` int NOT NULL,
  PRIMARY KEY (`CartaProductos_idCartaProductos`,`Pedidos_idPedido`),
  KEY `fk_CartaProductos_has_Pedidos_Pedidos1_idx` (`Pedidos_idPedido`),
  KEY `fk_CartaProductos_has_Pedidos_CartaProductos1_idx` (`CartaProductos_idCartaProductos`),
  CONSTRAINT `fk_CartaProductos_has_Pedidos_CartaProductos1` FOREIGN KEY (`CartaProductos_idCartaProductos`) REFERENCES `CartaProductos` (`idCartaProductos`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_CartaProductos_has_Pedidos_Pedidos1` FOREIGN KEY (`Pedidos_idPedido`) REFERENCES `Pedidos` (`idPedido`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CartaProductos_has_Pedidos`
--

LOCK TABLES `CartaProductos_has_Pedidos` WRITE;
/*!40000 ALTER TABLE `CartaProductos_has_Pedidos` DISABLE KEYS */;
INSERT INTO `CartaProductos_has_Pedidos` VALUES (1,1,2),(2,2,1),(3,3,1);
/*!40000 ALTER TABLE `CartaProductos_has_Pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Categorias`
--

DROP TABLE IF EXISTS `Categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Categorias` (
  `idCategorias` int NOT NULL AUTO_INCREMENT,
  `nombreCategoria` varchar(34) NOT NULL,
  PRIMARY KEY (`idCategorias`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Categorias`
--

LOCK TABLES `Categorias` WRITE;
/*!40000 ALTER TABLE `Categorias` DISABLE KEYS */;
INSERT INTO `Categorias` VALUES (1,'Massa fina'),(2,'Refresc'),(3,'Hamburguesa');
/*!40000 ALTER TABLE `Categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Customers`
--

DROP TABLE IF EXISTS `Customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Customers` (
  `idClient` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(21) NOT NULL,
  `apellidos` varchar(34) NOT NULL,
  `direccion` varchar(55) NOT NULL,
  `telefono` int NOT NULL,
  `Localidades_idLocalidad` int NOT NULL,
  PRIMARY KEY (`idClient`),
  KEY `fk_Customers_Localidades1_idx` (`Localidades_idLocalidad`),
  CONSTRAINT `fk_Customers_Localidades1` FOREIGN KEY (`Localidades_idLocalidad`) REFERENCES `Localidades` (`idLocalidad`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Customers`
--

LOCK TABLES `Customers` WRITE;
/*!40000 ALTER TABLE `Customers` DISABLE KEYS */;
INSERT INTO `Customers` VALUES (1,'Jordi','Puigoriol','c. de les Escoles, 3',456789123,1),(2,'Ester','Masramon','c. Dues Soloes, 2, 2 - 2',567891234,2),(3,'Marc','Serra','Eix Onze de Setembre, 37',678912345,3);
/*!40000 ALTER TABLE `Customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Empleados`
--

DROP TABLE IF EXISTS `Empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Empleados` (
  `idEmpleado` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(21) NOT NULL,
  `apellidos` varchar(34) NOT NULL,
  `nif-dni` varchar(21) NOT NULL,
  `telefono` int NOT NULL,
  `puesto` enum('Cocinero','Repartidor') NOT NULL,
  `Tienda_idTienda` int NOT NULL,
  PRIMARY KEY (`idEmpleado`),
  KEY `fk_Empleados_Tienda1_idx` (`Tienda_idTienda`),
  CONSTRAINT `fk_Empleados_Tienda1` FOREIGN KEY (`Tienda_idTienda`) REFERENCES `Tienda` (`idTienda`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Empleados`
--

LOCK TABLES `Empleados` WRITE;
/*!40000 ALTER TABLE `Empleados` DISABLE KEYS */;
INSERT INTO `Empleados` VALUES (1,'Eduard','Pevedano','11111111',678912345,'Cocinero',1),(2,'Joan','Comsempre','22222222',789123456,'Repartidor',2),(3,'Elisabet','Dachs','33333333',891234567,'Repartidor',3);
/*!40000 ALTER TABLE `Empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Localidades`
--

DROP TABLE IF EXISTS `Localidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Localidades` (
  `idLocalidad` int NOT NULL AUTO_INCREMENT,
  `nombreLocalidad` varchar(55) NOT NULL,
  `codigoPostal` int NOT NULL,
  `Provincias_idProvincia` int NOT NULL,
  PRIMARY KEY (`idLocalidad`,`Provincias_idProvincia`),
  KEY `fk_Localidades_Provincias1_idx` (`Provincias_idProvincia`),
  CONSTRAINT `fk_Localidades_Provincias1` FOREIGN KEY (`Provincias_idProvincia`) REFERENCES `Provincias` (`idProvincia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Localidades`
--

LOCK TABLES `Localidades` WRITE;
/*!40000 ALTER TABLE `Localidades` DISABLE KEYS */;
INSERT INTO `Localidades` VALUES (1,'Figueres',17600,1),(2,'Les Borges Blanques',25400,2),(3,'Cambrils',43850,3);
/*!40000 ALTER TABLE `Localidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pedidos`
--

DROP TABLE IF EXISTS `Pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Pedidos` (
  `idPedido` int NOT NULL AUTO_INCREMENT,
  `fechaDia` date NOT NULL,
  `fechaHora` time NOT NULL,
  `pedidoLocal` enum('local','domicilio') DEFAULT NULL,
  `precioTotal` float NOT NULL,
  `Customers_idClient` int NOT NULL,
  `Customers_Localidades_idLocalidad` int NOT NULL,
  `Empleados_idEmpleado` int DEFAULT NULL,
  `Tienda_idTienda` int NOT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `fk_Pedidos_Customers1_idx` (`Customers_idClient`),
  KEY `fk_Pedidos_Empleados1_idx` (`Empleados_idEmpleado`),
  KEY `fk_Pedidos_Tienda1_idx` (`Tienda_idTienda`),
  CONSTRAINT `fk_Pedidos_Customers1` FOREIGN KEY (`Customers_idClient`) REFERENCES `Customers` (`idClient`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_Pedidos_Empleados1` FOREIGN KEY (`Empleados_idEmpleado`) REFERENCES `Empleados` (`idEmpleado`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_Pedidos_Tienda1` FOREIGN KEY (`Tienda_idTienda`) REFERENCES `Tienda` (`idTienda`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pedidos`
--

LOCK TABLES `Pedidos` WRITE;
/*!40000 ALTER TABLE `Pedidos` DISABLE KEYS */;
INSERT INTO `Pedidos` VALUES (1,'2021-04-11','20:30:00','domicilio',25,1,1,2,3),(2,'2021-04-11','20:33:00','local',30,2,2,1,2),(3,'2021-04-11','19:55:00','domicilio',27.5,3,3,3,1);
/*!40000 ALTER TABLE `Pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Provincias`
--

DROP TABLE IF EXISTS `Provincias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Provincias` (
  `idProvincia` int NOT NULL AUTO_INCREMENT,
  `nombreProvincia` varchar(55) NOT NULL,
  PRIMARY KEY (`idProvincia`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Provincias`
--

LOCK TABLES `Provincias` WRITE;
/*!40000 ALTER TABLE `Provincias` DISABLE KEYS */;
INSERT INTO `Provincias` VALUES (1,'Girona'),(2,'Lleida'),(3,'Tarragona');
/*!40000 ALTER TABLE `Provincias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Tienda`
--

DROP TABLE IF EXISTS `Tienda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Tienda` (
  `idTienda` int NOT NULL AUTO_INCREMENT,
  `direccion` varchar(55) NOT NULL,
  `telefono` int NOT NULL,
  PRIMARY KEY (`idTienda`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tienda`
--

LOCK TABLES `Tienda` WRITE;
/*!40000 ALTER TABLE `Tienda` DISABLE KEYS */;
INSERT INTO `Tienda` VALUES (1,'c. del Carme, 21',973142850),(2,'pl. Ajuntament, 4',977794579),(3,'pl. Ajuntament, 12',972032200);
/*!40000 ALTER TABLE `Tienda` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-19 11:06:58

-- B.B.D.D. DBPizzeria.sql
-- END
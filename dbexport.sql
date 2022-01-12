-- MySQL dump 10.19  Distrib 10.3.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: test_project_db
-- ------------------------------------------------------
-- Server version	10.3.31-MariaDB-0+deb10u1-log

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
-- Table structure for table `cards_board`
--

DROP TABLE IF EXISTS `cards_board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cards_board` (
  `x` tinyint(1) NOT NULL,
  `y` tinyint(1) NOT NULL,
  `z` tinyint(1) NOT NULL,
  `b_color` enum('T','D') NOT NULL,
  `piece_color` enum('T','D') DEFAULT NULL,
  `piece` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41') DEFAULT NULL,
  PRIMARY KEY (`x`,`y`,`z`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards_board`
--

LOCK TABLES `cards_board` WRITE;
/*!40000 ALTER TABLE `cards_board` DISABLE KEYS */;
INSERT INTO `cards_board` VALUES (0,1,2,'D','D','31'),(0,3,2,'T','T','2'),(1,1,2,'D','D','20'),(1,3,2,'T','T','34'),(2,1,2,'D','D','39'),(2,3,2,'T','T','26'),(3,1,2,'D','D','21'),(3,3,2,'T','T','15'),(4,1,2,'D','D','35'),(4,3,2,'T','T','16'),(5,1,2,'D','D','23'),(5,3,2,'T','T','40'),(6,1,2,'D','D','7'),(6,3,2,'T','T','33'),(7,1,2,'D','D','19'),(7,3,2,'T','T','8'),(8,1,2,'D','D','12'),(8,3,2,'T','T','41'),(9,1,2,'D','D','17'),(9,3,2,'T','T','11'),(10,1,2,'D','D','1'),(10,3,2,'T','T','5'),(11,1,2,'D','D','6'),(11,3,2,'T','T','18'),(12,1,2,'D','D','22'),(12,3,2,'T','T','32'),(13,1,2,'D','D','38'),(13,3,2,'T','T','4'),(14,1,2,'D','D','30'),(14,3,2,'T','T','3'),(15,1,2,'D','D','25'),(15,3,2,'T','T','14'),(16,1,2,'D','D','24'),(16,3,2,'T','T','29'),(17,1,2,'D','D','10'),(17,3,2,'T','T','27'),(18,1,2,'D','D','9'),(18,3,2,'T','T','37'),(19,1,2,'D','D','28'),(19,3,2,'T','T','13'),(20,1,2,'D','D','36');
/*!40000 ALTER TABLE `cards_board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cards_board_empty`
--

DROP TABLE IF EXISTS `cards_board_empty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cards_board_empty` (
  `x` tinyint(1) NOT NULL,
  `y` tinyint(1) NOT NULL,
  `z` tinyint(1) NOT NULL,
  `b_color` enum('T','D') NOT NULL,
  `piece_color` enum('T','D') DEFAULT NULL,
  `piece` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41') DEFAULT NULL,
  PRIMARY KEY (`x`,`y`,`z`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards_board_empty`
--

LOCK TABLES `cards_board_empty` WRITE;
/*!40000 ALTER TABLE `cards_board_empty` DISABLE KEYS */;
INSERT INTO `cards_board_empty` VALUES (0,1,2,'D','D','1'),(0,3,2,'T','T','22'),(1,1,2,'D','D','2'),(1,3,2,'T','T','23'),(2,1,2,'D','D','3'),(2,3,2,'T','T','24'),(3,1,2,'D','D','4'),(3,3,2,'T','T','25'),(4,1,2,'D','D','5'),(4,3,2,'T','T','26'),(5,1,2,'D','D','6'),(5,3,2,'T','T','27'),(6,1,2,'D','D','7'),(6,3,2,'T','T','28'),(7,1,2,'D','D','8'),(7,3,2,'T','T','29'),(8,1,2,'D','D','9'),(8,3,2,'T','T','30'),(9,1,2,'D','D','10'),(9,3,2,'T','T','31'),(10,1,2,'D','D','11'),(10,3,2,'T','T','32'),(11,1,2,'D','D','12'),(11,3,2,'T','T','33'),(12,1,2,'D','D','13'),(12,3,2,'T','T','34'),(13,1,2,'D','D','14'),(13,3,2,'T','T','35'),(14,1,2,'D','D','15'),(14,3,2,'T','T','36'),(15,1,2,'D','D','16'),(15,3,2,'T','T','37'),(16,1,2,'D','D','17'),(16,3,2,'T','T','38'),(17,1,2,'D','D','18'),(17,3,2,'T','T','39'),(18,1,2,'D','D','19'),(18,3,2,'T','T','40'),(19,1,2,'D','D','20'),(19,3,2,'T','T','41'),(20,1,2,'D','D','21');
/*!40000 ALTER TABLE `cards_board_empty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cards_players`
--

DROP TABLE IF EXISTS `cards_players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cards_players` (
  `username` varchar(20) DEFAULT NULL,
  `piece_color` enum('T','D') NOT NULL,
  `token` varchar(45) DEFAULT NULL,
  `last_action` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`piece_color`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards_players`
--

LOCK TABLES `cards_players` WRITE;
/*!40000 ALTER TABLE `cards_players` DISABLE KEYS */;
INSERT INTO `cards_players` VALUES (NULL,'T',NULL,'2022-01-04 17:49:19'),(NULL,'D',NULL,'2022-01-11 15:54:30');
/*!40000 ALTER TABLE `cards_players` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `game_status`
--

DROP TABLE IF EXISTS `game_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `game_status` (
  `status` enum('not active','initialized','started','ended','aborded') NOT NULL DEFAULT 'not active',
  `p_turn` enum('T','D') DEFAULT NULL,
  `result` enum('T','D','de') DEFAULT NULL,
  `last_change` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game_status`
--

LOCK TABLES `game_status` WRITE;
/*!40000 ALTER TABLE `game_status` DISABLE KEYS */;
INSERT INTO `game_status` VALUES ('initialized',NULL,'D','2022-01-11 15:53:30');
/*!40000 ALTER TABLE `game_status` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER game_status_update BEFORE UPDATE
ON game_status
FOR EACH ROW BEGIN
SET NEW.last_change = NOW();
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `players` (
  `idplayers` int(110) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idplayers`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `players`
--

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
INSERT INTO `players` VALUES (3,'Γιώργος','Ναβροζίδης','georgenavro@hotmail.com','user','8321d448eacc38d9b4101219112d7e6e'),(4,'makis','nvr','aeasda@gesfs','makis','8321d448eacc38d9b4101219112d7e6e'),(5,'Γιώργος','Ναβροζίδης','georgenavro@hotmail.com','admin','8321d448eacc38d9b4101219112d7e6e');
/*!40000 ALTER TABLE `players` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-12 12:05:43

-- MySQL dump 10.14  Distrib 5.5.36-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: TheDead
-- ------------------------------------------------------
-- Server version	5.5.36-MariaDB-log

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
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `nick` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `fb` varchar(45) DEFAULT NULL,
  `twitter` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'2014-03-23 03:41:25','2014-03-23 03:41:26','fcrios','fcrios145@hotmail.com','fcrios145','fcrios145'),(2,'2014-03-24 19:32:44','2014-03-24 19:32:45','adivino',NULL,NULL,NULL);
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `body` text,
  `titulo` varchar(45) DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_news_authors` (`author_id`),
  CONSTRAINT `fk_news_authors` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'2014-03-23 03:42:06','2014-03-23 03:42:07','Esta es una noticia bien chingona por que la escribio el francisco Rios el morro mas perron de todos que se la rifa machin','Noticion',1),(2,'2014-03-23 04:43:20','2014-03-23 04:43:21','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad commodi ducimus facere fuga in iure magnam minus officiis possimus quibusdam! Cum deserunt doloremque magni molestias non numquam provident recusandae, veritatis.','Lorem',1),(3,'2014-03-25 02:36:08','2014-03-25 02:36:08','ghhjghjhj','jhhjghj',1),(4,'2014-03-25 02:36:20','2014-03-25 02:36:20','jashdkjahdkjasdhaskj','noticion',1),(5,'2014-03-25 17:14:20','2014-03-25 17:14:20','Buena noticia lrkajldkaskd','Noticion 2',2),(6,'2014-03-25 17:25:11','2014-03-25 17:25:11','lkajsdlkasjdlkasjdlkasjdlaksjdlaksjdajljdljldaljk\r\n\r\nlkajsdlkasjdlkasjdlkasjdlaksjdlaksjdajljdljldaljk\r\n\r\nlkajsdlkasjdlkasjdlkasjdlaksjdlaksjdajljdljldaljk','JUAJUA',1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-25 12:13:17

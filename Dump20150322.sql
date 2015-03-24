CREATE DATABASE  IF NOT EXISTS `researchbros` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `researchbros`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: researchbros
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `labs`
--

DROP TABLE IF EXISTS `labs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `labs` (
  `labID` int(11) NOT NULL DEFAULT '0',
  `universityID` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `description` text,
  `sitelink` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`labID`),
  KEY `universityID` (`universityID`),
  KEY `labs_ibfk_2` (`admin`),
  CONSTRAINT `labs_ibfk_2` FOREIGN KEY (`admin`) REFERENCES `user` (`emailID`),
  CONSTRAINT `labs_ibfk_1` FOREIGN KEY (`universityID`) REFERENCES `university` (`universityID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `labs`
--

LOCK TABLES `labs` WRITE;
/*!40000 ALTER TABLE `labs` DISABLE KEYS */;
INSERT INTO `labs` VALUES (1,1,'ankitk94@yahoo.com','','lab 1',NULL,'','','','jfdkjasdk',NULL),(2,1,'ankitk94@yahoo.com','','lab 2',NULL,'','','','adsadsadsa',NULL),(3,1,'ankitk94@yahoo.com','','lab 3',NULL,'','','','jdsklajsdk',NULL),(4,1,'ankitk94@yahoo.com','','Ankit\'s lab ',NULL,'','','','This is a very cool lab indeed',NULL),(5,1,'ankitk94@yahoo.com','','lab 4',NULL,'','','','This is lab 4',NULL),(6,1,'ankitk94@yahoo.com','','lab 5',NULL,'','','','Adding lab 5',NULL),(7,1,'ankitk94@yahoo.com','','lab 6',NULL,'','','','Lab 6 is added',NULL),(8,1,'ankitk94@yahoo.com','','lab 7',NULL,'','','','Now time for lab 7',NULL),(9,1,'ankitk94@yahoo.com','','lab 8',NULL,'','','','And finally the lab 8',NULL),(10,1,'ankitk94@yahoo.com','','lab 9',NULL,'','','','This is the final testing. Did this worked???',NULL),(11,1,'ankitk94@yahoo.com','','lab 10',NULL,'','','','Lab 11 is not gonna needed',NULL),(12,1,'ankitk94@yahoo.com','','lab 10',NULL,'','','','Lab 11 is not gonna needed, and done',NULL),(13,1,'ankitk94@yahoo.com','service 1','j','n','jn','jn','jhn','jn','hjn'),(14,1,'ankitk94@yahoo.com','service 2','f2 ','djksad sad as ','km','d4d54d54d5','45','d m','d ');
/*!40000 ALTER TABLE `labs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `university`
--

DROP TABLE IF EXISTS `university`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `university` (
  `universityID` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `description` text,
  `location` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL,
  PRIMARY KEY (`universityID`),
  KEY `location` (`location`),
  KEY `admin` (`admin`),
  CONSTRAINT `university_ibfk_1` FOREIGN KEY (`location`) REFERENCES `geolocation` (`locationID`),
  CONSTRAINT `university_ibfk_2` FOREIGN KEY (`admin`) REFERENCES `user` (`emailID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `university`
--

LOCK TABLES `university` WRITE;
/*!40000 ALTER TABLE `university` DISABLE KEYS */;
INSERT INTO `university` VALUES (1,'stanford','stanford descrition',1271308,'ankitk94@yahoo.com');
/*!40000 ALTER TABLE `university` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `emailID` varchar(45) NOT NULL,
  `password` char(32) NOT NULL,
  `name` varchar(45) NOT NULL,
  `universityID` int(11) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`emailID`),
  UNIQUE KEY `emailID_UNIQUE` (`emailID`),
  KEY `fk_university_idx` (`universityID`),
  KEY `fk_user_university_idx` (`universityID`),
  CONSTRAINT `fk_user_university` FOREIGN KEY (`universityID`) REFERENCES `university` (`universityID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('aniket.sachdeva@gmail.com','fd2cc6c54239c40495a0d3a93b6380eb','aniket',1,'9541421340',NULL),('ankitk94@yahoo.com','827ccb0eea8a706c4c34a16891f84e7b','Ankit Khokhar',1,'95414213','my address');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-22 22:12:46

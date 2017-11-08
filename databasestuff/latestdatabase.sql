-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: oes
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `Admin_Name` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `security_question` varchar(200) DEFAULT NULL,
  `Answer` varchar(200) DEFAULT NULL,
  `Admin_ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Admin_ID`),
  UNIQUE KEY `Admin_Name` (`Admin_Name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','admin','what is your name','ashmeet',1),('ashmeet4293','Pokhara','1','Java',2),('ashmeet42','Pokhara','1','java',3);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `questionId` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(250) DEFAULT NULL,
  `option1` varchar(45) DEFAULT NULL,
  `option2` varchar(45) DEFAULT NULL,
  `option3` varchar(45) DEFAULT NULL,
  `option4` varchar(45) DEFAULT NULL,
  `answer` varchar(45) DEFAULT NULL,
  `subjectName` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`questionId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (1,'C was discovered in ?','1972','1973','1984','1963','1972','C'),(3,'Who is the founder of Java ??','Mark zukerberg','james Gosling','Ken Thompson','Larry Page','james Gosling','Java'),(4,'Who was the founder of C ?','a','a','a','a','a','C'),(5,'What type of language is C ?','Procedural','Object Oriented','Markup','Query','Procedural','C'),(6,'What is variable used for ?','To create a memory space in RAM.','To know for the prgrammer.','To make loop.','To change the format.','To create a memory space in RAM.','C'),(7,'How to declare Integer in C ?','Integer','int','INTEGER','INT','int','C'),(8,'What is purpose of loop ?','for making the code complete.','for iterating the statement.','For checking the statement.','for taking input from user.','for iterating the statement.','C'),(9,'What is array ?','collection of similar data type.','Formation of variable.','Arrangement of variable.','collection of different data type.','collection of similar data type.','C'),(10,'getch() is the function of which header of class ?','stdio.h','conio.h','math.h','string.h','conio.h','C'),(11,'printf() is the function of ?','stdio.h','conio.h','math.h','string.h','stdio.h','C'),(12,'function with no return type can be declared in c with ?','void functionName()','Null functionName()','functionName()','0 functionName();','void functionName()','C'),(13,'Logical AND is represented in C as ?','and','&&','&','AND','&&','C');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `Fname` varchar(120) DEFAULT NULL,
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(120) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `DOB` varchar(20) DEFAULT NULL,
  `Uname` varchar(120) DEFAULT NULL,
  `Pass` varchar(120) DEFAULT NULL,
  `Confirm_Pass` varchar(120) DEFAULT NULL,
  `Reg_Date` timestamp NULL DEFAULT NULL,
  `security_question` varchar(250) DEFAULT NULL,
  `Answer` varchar(300) DEFAULT NULL,
  `marks_obtained` int(11) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `SubjectName` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Uname` (`Uname`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES ('Ashmeet Tiwary',12,'ashmeet4293@gmail.com','Male','1111-01-01','ashmeet4293','Pokhara','Pokhara','2017-11-06 05:07:22','Which is your favorite book?','java',5,'Work Hard','Pokhara','C');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-07 20:25:52

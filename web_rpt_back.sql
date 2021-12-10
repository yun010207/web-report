-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: web_rpt
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

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
-- Table structure for table `board`
--

DROP TABLE IF EXISTS `board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `board` (
  `kind` varchar(20) DEFAULT NULL,
  `writer` varchar(20) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `boarddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `view` int(11) DEFAULT NULL,
  `recommand` int(11) DEFAULT NULL,
  `comment` int(11) DEFAULT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `board`
--

LOCK TABLES `board` WRITE;
/*!40000 ALTER TABLE `board` DISABLE KEYS */;
INSERT INTO `board` VALUES ('도움','abc','3277327','237 sdf sdf sa\r\ns adfsda fsa\r\nfs adf','2021-12-10 07:24:01',0,0,0,0),('도움','abc','saodfjosiajfosiaj','','2021-12-10 07:24:28',0,0,0,1),('도움','abc','asdfsadf','safsafdsadf','2021-12-10 07:27:49',0,0,0,2),('도움','abc','fsdafsaf','sdfsad fsdf\r\nsdf sadfsa\r\nfsa dfsadfs\r\ndaf\r\nsd\r\n\r\n\r\n\r\n\r\nwqfd\r\nw\r\nd\r\n\r\n\r\n\r\n\r\n\r\nwqdf','2021-12-10 07:30:33',0,0,0,3),('도움','abc','test','a\r\ns\r\n\r\n\r\n\r\n\r\nsadfsadfs\r\n\r\n\r\n   sdafsadfsadfs sda    sadf\r\n\r\n\r\n\r\nwqdfwqfiowjhf ojwqfiwqoj\r\n\r\n\r\n\r\n','2021-12-10 07:58:25',0,0,0,4),('도움','abc','test2','a   a\r\nb  b\r\nc c\r\n\r\n\r\n\r\n\r\n\r\na a \r\n\r\n\r\nc\r\n\r\n','2021-12-10 08:02:12',0,0,0,5),('도움','','ㄴㅁㅇㄹㄴㅁㅇ','ㄴㅁㅇㄹ','2021-12-10 08:40:32',0,0,0,6),('도움','','ㄴㅁㅇㄹㄴㅁ','ㄴㅁㅇㄹㄴㅁㅇㄹㄴㅁㄹㄴㅁㅇㄹ','2021-12-10 08:40:40',0,0,0,7),('도움','','테스','테트\r\n\r\n\r\nㄴㅁ으른ㅇ ㄴㅁㅇㄹㄴㅁㄹㅇ','2021-12-10 08:45:52',0,0,0,8);
/*!40000 ALTER TABLE `board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `commentdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `boardnum` int(11) DEFAULT NULL,
  `recommand` int(11) DEFAULT NULL,
  `commentnum` int(11) NOT NULL,
  `writer` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`commentnum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history` (
  `student_id` int(11) NOT NULL,
  `viewboardnum` int(11) DEFAULT NULL,
  `writeboardnum` int(11) DEFAULT NULL,
  `writecommentnum` int(11) DEFAULT NULL,
  `bookmarkboardnum` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member_tbl`
--

DROP TABLE IF EXISTS `member_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member_tbl` (
  `student_id` varchar(10) NOT NULL,
  `id` varchar(20) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `MW` varchar(10) DEFAULT NULL,
  `depart` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member_tbl`
--

LOCK TABLES `member_tbl` WRITE;
/*!40000 ALTER TABLE `member_tbl` DISABLE KEYS */;
INSERT INTO `member_tbl` VALUES ('20203126','yun010207','윤승환','dbs010207','01094345970','남자','응용소프트웨어공학과'),('20203189','$1234','$1234','1234','01011111111','','영문학과'),('87945','test','assdf','asdf','1561324','남자','컴퓨터소프트웨어공학과');
/*!40000 ALTER TABLE `member_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reply` (
  `commentdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `commentnum` int(11) NOT NULL,
  `recommand` int(11) DEFAULT NULL,
  `replynum` int(11) DEFAULT NULL,
  `writer` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`commentnum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reply`
--

LOCK TABLES `reply` WRITE;
/*!40000 ALTER TABLE `reply` DISABLE KEYS */;
/*!40000 ALTER TABLE `reply` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-10 17:54:32

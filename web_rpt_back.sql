-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: web_rpt
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

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
  `boarddate` datetime DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `recommend` int(11) DEFAULT NULL,
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
INSERT INTO `board` VALUES ('도움','yun010207','도움 테스트 1','안띄움\r\n\r\n여러칸            띄움\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n여러줄 띄움','2021-12-24 08:00:23',35,0,6,0),('공지','yun010207','공지 글','능력 부족으로 광고 및 포인트 기능은 구현하지 못했습니다..','2021-12-24 08:05:54',12,0,5,1);
/*!40000 ALTER TABLE `board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookmark`
--

DROP TABLE IF EXISTS `bookmark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookmark` (
  `id` varchar(20) DEFAULT NULL,
  `boardnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookmark`
--

LOCK TABLES `bookmark` WRITE;
/*!40000 ALTER TABLE `bookmark` DISABLE KEYS */;
INSERT INTO `bookmark` VALUES ('yun010207',0);
/*!40000 ALTER TABLE `bookmark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `commentdate` datetime DEFAULT NULL,
  `content` varchar(300) DEFAULT NULL,
  `boardnum` int(11) DEFAULT NULL,
  `recommend` int(11) DEFAULT NULL,
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
INSERT INTO `comment` VALUES ('2021-12-24 08:00:47','댓글 테스트1',0,0,0,'yun010207');
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
INSERT INTO `member_tbl` VALUES ('20203126','yun010207','윤승환','dbs010207','01094345970','남자','응용소프트웨어공학과'),('20203189','$1234','$1234','1234','01011111111','','영문학과'),('2021111769','yun020313','윤영지','Skal703066!','01087825970','여자','컴퓨터공학부'),('24234','test2','fgsad','qwer','42348473873','여자','asfdsafsa'),('5635','okm9874','윤승환2','dbs2001@','2373434','여자','창의소프트웨어공학부'),('87945','test','assdf','asdf','1561324','남자','컴퓨터소프트웨어공학과');
/*!40000 ALTER TABLE `member_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recentview`
--

DROP TABLE IF EXISTS `recentview`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recentview` (
  `id` varchar(20) DEFAULT NULL,
  `viewtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `boardnum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recentview`
--

LOCK TABLES `recentview` WRITE;
/*!40000 ALTER TABLE `recentview` DISABLE KEYS */;
INSERT INTO `recentview` VALUES ('okm9874','2021-12-24 07:15:02',0),('okm9874','2021-12-24 07:15:06',1),('yun010207','2021-12-24 07:39:19',0),('yun010207','2021-12-24 07:39:22',1),('yun010207','2021-12-24 07:59:45',2);
/*!40000 ALTER TABLE `recentview` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recommend`
--

DROP TABLE IF EXISTS `recommend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recommend` (
  `id` varchar(20) DEFAULT NULL,
  `kind` varchar(20) DEFAULT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recommend`
--

LOCK TABLES `recommend` WRITE;
/*!40000 ALTER TABLE `recommend` DISABLE KEYS */;
INSERT INTO `recommend` VALUES ('yun010207','board',0);
/*!40000 ALTER TABLE `recommend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reply` (
  `replydate` datetime DEFAULT NULL,
  `content` varchar(300) DEFAULT NULL,
  `commentnum` int(11) DEFAULT NULL,
  `recommend` int(11) DEFAULT NULL,
  `replynum` int(11) NOT NULL,
  `writer` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`replynum`)
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

-- Dump completed on 2021-12-24 17:01:30

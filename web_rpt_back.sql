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
INSERT INTO `board` VALUES ('도움','yun010207','도움1-1','테스트\r\n\r\n\r\n테스트     테스트 여러번 띄움\r\n\r\n\r\n','2021-12-12 19:18:35',279,0,17,0),('도움','okm9874','테스트 2','ㅈㄷㄱㄷㅈ\r\n\r\n\r\nㅈㄷㅇㄹㅈ       ㅈ\r\n','2021-12-12 19:22:41',241,0,16,1),('도움','yun010207','테스트 3 도움','ㅇㄴㄹ ㄴ\r\n\r\n\r\n\r\nㅇㅇㅇㅇ      \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nㅇㅇㄴㄹㄴ       ㄴㄴ','2021-12-13 04:28:07',96,0,5,2),('팀플','yun010207','팀플 테스트1','ㄴㅁㅇㄹㄴㅁㅇㄹ','2021-12-13 08:49:06',59,0,4,3),('설문','okm9874','설문 테스트1','ㄴ ㄴㅇㄴ       ㄴㅇㄹㄴㅁ','2021-12-13 11:39:40',6,0,4,4),('택시','yun010207','택시 합승 게시판 테스트1','ㄷㄷㄷㄷ\r\n\r\n\r\nㄷㄷㄷㄷ\r\n\r\n\r\nㄷ    ㄷ\r\n','2021-12-13 12:10:40',1,0,4,5),('학과','yun010207','학과 테스트1','ㅈㄱㄷㅈ','2021-12-13 12:18:30',1,0,4,6),('학과','yun010207','응용 학과 텟1','ㄹㄴㅇㅁㄹㄴㅁ','2021-12-13 12:26:27',2,0,4,7),('학과','okm9874','창의 소프트 텟1','ㄴㅇㅁㄹㄴㅁㄹ ㄴㅇㄹㄴㅁㄹ','2021-12-13 12:29:22',1,0,4,8),('학과','yun010207','응용학과 텟3','ㄴㅁㅇㄴㅁㄹ','2021-12-13 12:33:47',0,0,4,9),('학과','okm9874','창의 텟 2','ㄴㅁㅇㄹㄴㅁㄹㅇ','2021-12-13 12:33:58',1,0,4,10);
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
INSERT INTO `bookmark` VALUES ('yun010207',3),('yun010207',2);
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
INSERT INTO `comment` VALUES ('2021-12-12 20:06:14','ㅅㄷㅌㅅ',0,3,0,'okm9874'),('2021-12-12 20:06:19','text2',0,1,1,'okm9874'),('2021-12-12 20:06:23','tewt3',0,2,2,'okm9874'),('2021-12-12 20:06:32','test1',1,0,3,'okm9874'),('2021-12-12 20:06:46','tese4',1,0,4,'yun010207'),('2021-12-12 20:08:27','test3',1,0,5,'yun010207'),('2021-12-12 20:29:17','test45',1,0,6,'yun010207'),('2021-12-13 08:27:55','text1',2,0,7,'yun010207'),('2021-12-13 13:14:37','안녕하세용',3,0,8,'yun010207'),('2021-12-13 13:17:41','가나다',3,0,9,'yun010207');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
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
INSERT INTO `member_tbl` VALUES ('20203126','yun010207','윤승환','dbs010207','01094345970','남자','응용소프트웨어공학과'),('20203189','$1234','$1234','1234','01011111111','','영문학과'),('24234','test2','fgsad','qwer','42348473873','여자','asfdsafsa'),('5635','okm9874','윤승환2','dbs2001@','2373434','여자','창의소프트웨어공학부'),('87945','test','assdf','asdf','1561324','남자','컴퓨터소프트웨어공학과');
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
INSERT INTO `recentview` VALUES ('yun010207','2021-12-13 09:09:58',0),('okm9874','2021-12-13 10:58:16',2),('okm9874','2021-12-13 10:58:20',0),('okm9874','2021-12-13 10:58:25',3),('okm9874','2021-12-13 11:05:17',4),('okm9874','2021-12-13 11:05:18',1),('yun010207','2021-12-13 11:05:27',2),('yun010207','2021-12-13 11:05:37',1),('','2021-12-13 11:05:59',2),('yun010207','2021-12-13 11:10:41',5),('yun010207','2021-12-13 11:18:32',6),('okm9874','2021-12-13 11:33:54',8),('okm9874','2021-12-13 11:34:00',10),('yun010207','2021-12-13 12:20:31',3),('yun010207','2021-12-13 12:20:33',7),('yun010207','2021-12-13 12:20:36',4);
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
INSERT INTO `recommend` VALUES ('yun010207','board',1),('yun010207','comment',0),('yun010207','comment',0),('yun010207','comment',0),('yun010207','board',2),('okm9874','board',2),('okm9874','comment',0),('okm9874','comment',0),('okm9874','comment',0),('okm9874','comment',0),('okm9874','comment',0),('okm9874','comment',0),('okm9874','comment',2),('okm9874','comment',0),('okm9874','comment',0),('okm9874','comment',0),('okm9874','comment',1),('okm9874','comment',5),('okm9874','comment',3),('okm9874','comment',6),('okm9874','comment',0),('okm9874','comment',0),('okm9874','comment',0),('yun010207','board',0),('yun010207','comment',4),('yun010207','comment',7),('yun010207','comment',9);
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
  `commentnum` int(11) NOT NULL,
  `recommend` int(11) DEFAULT NULL,
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

-- Dump completed on 2021-12-14 13:05:06

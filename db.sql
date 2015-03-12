-- MySQL dump 10.9
--
-- Host: localhost    Database: villa-lilleboe_com_data
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `ID` int(11) NOT NULL auto_increment,
  `FullName` varchar(255) NOT NULL,
  `HomePhone` varchar(255) default NULL,
  `Mobile` varchar(255) default NULL,
  `Email` varchar(255) default NULL,
  `HomeAddress` varchar(255) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Duong Pham','8124316165','8124316165','duongpham_1988@yahoo.com','42 Huynh Thien Loc'),(2,'Reika Okada','5738754589','5738754589','okalemon@gmail.com','100 N Keene St\r\nApt 2\r\nColumbia, MO 65201'),(3,'Kyle Affoon','8124316165','8124316165','duongue@gmail.com','100 N Keene St\r\nApt 2\r\nColumbia, MO 65201'),(5,'Lien & Arne ','+47 70092077','90192606','arne@libra.no','Pe-vegen 19, 6062 BRANDAL'),(6,'Charlotte & Kim LillebÃ¸','+4740454086','+4740454086','kim@libra.no','Nobba 10, 6060 Hareid'),(7,'Tove & Johan Ole ','+4770093412','+4799167304','Johan.Ole.Brandal@franzefoss.no','Indredalsvegen, 6062 BRANDAL '),(8,'Lillemor & Ottar Brandal  ','+4770092290','+4791716956','ottarm.brandal@tussa.com','Slettebakken, 6060 Hareid'),(9,'Liv Norun LillebÃ¸','+4751551851','+4740005442','liv.norun.lillebo@visma.no','Valhallveien 3, 4043 HAFRSFJORD'),(10,'Anita & Jogeir LillebÃ¸','+4751534804','+4741514855','jolillebo@c2i.net','Folke Bernadottesvei 42, 4011 STAVANGER '),(11,'Adele & Claus Pedersen ','+4721909757','+4799728252','claus@danoform.com','Olav Aukrustvei 16, 0785 OSLO '),(12,'Ã…se & Gudmund Sydnes','+4722492035','+4740241716','sydness@getmail.no','Grindbakken 70, 0764 OSLO '),(13,'Maris Meija','+37129242771','+37129242771','maris@samaco.lv','Latvia \r\n'),(14,'Liv Norun Lilleboe ','+4751551851','+4740005442 ','liv.norun.lillebo@visma.no ','Valhallv.3, 4043 HAFRSFJORD, '),(15,'Ivar VollsÃ¦ter ','+4790191657','+4790191657','Ivar.vollseter@Platou.com','Norway '),(16,'KÃ¥re & Elsa Haddal ','+4791580142','+4791580142','kah@jets.no','Haddal, Norge'),(17,'','','','',''),(18,'Anne Linn','4745634677','4797524357','a_skjong@yahoo.no ','Norge'),(19,'Olve Brandal ','+4795816830','+4795816830','olve@tussa.com','N-6065 Ulsteinvik '),(20,'Kim LillebÃ¸','+4740454086','+4740454086','kimlilleboe@gmail.com ','N-6062 Brandal '),(21,'Ivar ','+4790191657','+4790191657','ivar.vollseter@platou.com','Oslo, Norway '),(22,'Huong Thanh ','+84904113637','+84904113637','huonginvanor@yahoo.com ','Hanoi, Vietnam ');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guestpassword`
--

DROP TABLE IF EXISTS `guestpassword`;
CREATE TABLE `guestpassword` (
  `GuestID` int(11) NOT NULL,
  `GuestPass` varchar(255) NOT NULL,
  PRIMARY KEY  (`GuestID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestpassword`
--

LOCK TABLES `guestpassword` WRITE;
/*!40000 ALTER TABLE `guestpassword` DISABLE KEYS */;
INSERT INTO `guestpassword` VALUES (1,'test11');
/*!40000 ALTER TABLE `guestpassword` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
  `R_ID` int(11) NOT NULL auto_increment,
  `ArrivalDate` date NOT NULL,
  `ArrivalTime` time NOT NULL,
  `DepartureDate` date NOT NULL,
  `DepartureTime` time NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `PerNum` int(11) NOT NULL,
  `RentPerDay` double NOT NULL,
  `CarPayment` double NOT NULL default '0',
  `PaymentDate` date default NULL,
  PRIMARY KEY  (`R_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (14,'2011-08-02','14:30:00','2011-08-25','09:45:00',5,0,0,0,NULL),(26,'2011-07-13','00:00:00','2011-08-02','00:00:00',6,2,0,0,NULL),(27,'2011-06-06','14:00:00','2011-06-15','12:00:00',7,2,500,0,'2011-06-25'),(29,'2011-04-01','21:30:00','2011-04-28','12:00:00',8,2,392.85,0,'2011-05-01'),(31,'2011-10-07','14:00:00','2011-10-16','12:00:00',10,2,0,0,NULL),(32,'2011-06-15','14:00:00','2011-07-04','12:00:00',11,4,550,0,'2011-06-05'),(34,'2011-07-04','14:00:00','2011-07-11','12:00:00',12,2,625,0,'2011-06-05'),(48,'2011-09-01','14:00:00','2011-09-10','12:00:00',13,4,0,0,NULL),(49,'2011-09-10','14:00:00','2011-09-17','12:00:00',15,2,0,0,NULL),(50,'2011-09-17','14:00:00','2011-09-25','14:00:00',16,2,0,0,'1970-01-01'),(55,'2012-06-24','14:00:00','2012-07-08','12:00:00',18,3,0,0,NULL),(56,'2012-06-09','12:15:00','2012-06-22','12:15:00',19,4,0,0,NULL),(57,'2008-02-02','12:15:00','2015-01-02','12:15:00',20,4,0,0,'2020-10-02'),(58,'2012-05-07','12:00:00','2012-05-11','12:00:00',21,2,0,0,NULL),(59,'2011-02-02','12:00:00','2017-02-01','12:08:00',22,4,0,0,'2012-04-15');
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


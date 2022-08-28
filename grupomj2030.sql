# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     grupomj2030
# Server version:               5.5.16-log
# Server OS:                    Win64
# Target compatibility:         Same as source (5.5.16)
# Target max_allowed_packet:    1048576
# HeidiSQL version:             4.0
# Date/time:                    2022-07-28 22:18:05
# --------------------------------------------------------

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'grupomj2030'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `grupomj2030` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `grupomj2030`;


#
# Table structure for table 'personas'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `personas` (
  `idPERS` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nomPERS` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dirPERS` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telPERS` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `dtoPERS` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idPERS`),
  KEY `nomPERS` (`nomPERS`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



#
# Dumping data for table 'personas'
#

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS;*/
REPLACE INTO `personas` (`idPERS`, `nomPERS`, `dirPERS`, `telPERS`, `dtoPERS`) VALUES
	('1','Pedro Picapiedra','Roca Dura 777','9029085','montevideo'),
	('2','Pablo Mármol','Roca Dura 778','9029075','Montevideo'),
	('3','Betty Mármol','Roca Dura 778','9029075','MONTEVIDEO'),
	('4','Bilma Picapiedra','Roca Dura 777','9029085','montevideo'),
	('5','Don Gato','Close Street 777','903045','Canelones'),
	('6','Matute','Callejón 567','803085','Maldonado'),
	('7','Demóstenes','Calle cerrada 1234','4023385','Paysandú'),
	('8','Benito','Cierre 9889','40128560','Canelones'),
	('9','Cucho','Av. Close 567','30859011','maldonado'),
	('10','Claudio','Gallo 7897','4085285','maldonado'),
	('11','Pepe Trueno','Storm 789','24870385','montevideo'),
	('13','PEPE TRUENO','Rain 5554','5554545','canelones');
/*!40000 ALTER TABLE `personas` ENABLE KEYS;*/
UNLOCK TABLES;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/

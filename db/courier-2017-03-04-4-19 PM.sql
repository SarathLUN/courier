# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: courier
# Generation Time: 2017-03-04 09:19:48 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ci_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`,`ip_address`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`)
VALUES
	('5532dffd8d1622bd30ee06b1b69b9f289ab495eb','::1',1488281565,X'5F5F63695F6C6173745F726567656E65726174657C693A313438383238313536353B7569647C733A3137323A226261326438643063373963306664623837613461656335386462663339396663663439386131366439343839613263366239343565363463663531306635633831323331383037346363666566636434663533646232653731363966623763623137353339663935303239346333373230343330656639646631393361633432652B73356741524A51782F6951514C31686C434D796C5670444A517654704A5470695A465532467A7763673D223B'),
	('7060ade85691c218aa6b289cedd032c9075a7ea5','::1',1488617520,X'5F5F63695F6C6173745F726567656E65726174657C693A313438383631373434343B7569647C733A3137323A223430356231353936363638333730346165346532316264633532396564646139613639623861623963356434316134306465393064653438313231313336643137636436386636346638613063383630353338353639373735663331323366353163306239383835323566356262343439636535626163383139656165646132686E74684551396B324746412B31364776586D392F757874543773386945766C346B664173572B30506B673D223B');

/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table location_01_tbl_country
# ------------------------------------------------------------

DROP TABLE IF EXISTS `location_01_tbl_country`;

CREATE TABLE `location_01_tbl_country` (
  `country_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) NOT NULL DEFAULT '',
  `country_iso2_code` varchar(5) DEFAULT NULL,
  `country_iso3_code` varchar(5) DEFAULT NULL,
  `country_tax` float DEFAULT NULL,
  `country_currency` varchar(50) DEFAULT NULL,
  `country_calling_code` int(11) DEFAULT NULL,
  `is_deleted_country` tinyint(1) NOT NULL DEFAULT '0',
  `country_secure_code` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `location_01_tbl_country` WRITE;
/*!40000 ALTER TABLE `location_01_tbl_country` DISABLE KEYS */;

INSERT INTO `location_01_tbl_country` (`country_id`, `country_name`, `country_iso2_code`, `country_iso3_code`, `country_tax`, `country_currency`, `country_calling_code`, `is_deleted_country`, `country_secure_code`)
VALUES
	(1,'Vietnam','vn','vnm',0,'',0,0,'d66c76d7ce0a453b39bf17885dada356'),
	(2,'Cambodia','','',12.5,'',0,0,'74f121099394115f3aadb32d1e655e61'),
	(3,'Myanmar',NULL,NULL,NULL,NULL,NULL,0,'6c15f3a585caf4c43c8c359f60e2bba1'),
	(4,'Laos',NULL,NULL,NULL,NULL,NULL,0,'5d561f03943e57ac5173e166ac9fcd8b'),
	(5,'Thailand',NULL,NULL,NULL,NULL,NULL,0,'b18ef26f2adc9de38271aeef0e22b1dd'),
	(6,'Peninsular Malaysia',NULL,NULL,NULL,NULL,NULL,0,NULL),
	(7,'Indonesia',NULL,NULL,NULL,NULL,NULL,0,NULL),
	(8,'Philippines',NULL,NULL,NULL,NULL,NULL,0,NULL),
	(9,'East Malaysia',NULL,NULL,NULL,NULL,NULL,0,NULL),
	(10,'Brunei',NULL,NULL,NULL,NULL,NULL,0,'161226185211'),
	(11,'Singapore',NULL,NULL,NULL,NULL,NULL,0,NULL),
	(12,'East Timor',NULL,NULL,NULL,NULL,NULL,0,NULL),
	(13,'test update','kh','khm',NULL,'riels',855,1,'161226191216'),
	(14,'abc','','',0,'',0,1,NULL),
	(15,'test','kh','khm',10,'Riel',855,0,NULL);

/*!40000 ALTER TABLE `location_01_tbl_country` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table location_02_tbl_state_province
# ------------------------------------------------------------

DROP TABLE IF EXISTS `location_02_tbl_state_province`;

CREATE TABLE `location_02_tbl_state_province` (
  `state_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `state_name` varchar(100) NOT NULL DEFAULT '',
  `state_country_id` int(11) unsigned NOT NULL,
  `is_deleted_state` tinyint(1) NOT NULL DEFAULT '0',
  `state_secure_code` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `location_02_tbl_state_province` WRITE;
/*!40000 ALTER TABLE `location_02_tbl_state_province` DISABLE KEYS */;

INSERT INTO `location_02_tbl_state_province` (`state_id`, `state_name`, `state_country_id`, `is_deleted_state`, `state_secure_code`)
VALUES
	(1,'Banteay Meanchey',2,0,''),
	(2,'Battambang',2,0,NULL),
	(3,'Kampong Cham',2,0,NULL),
	(4,'Kampong Chhnang',2,0,NULL),
	(5,'Kampong Speu',2,0,NULL),
	(6,'Kampong Thom',2,0,NULL),
	(7,'Kampot',2,0,NULL),
	(8,'Kandal',2,0,NULL),
	(9,'Koh Kong',2,0,NULL),
	(10,'Kratié',2,0,NULL),
	(11,'Mondulkiri',2,0,NULL),
	(12,'Oddar Meanchey',2,0,NULL),
	(13,'Preah Vihear',2,0,NULL),
	(14,'Pursat',2,0,NULL),
	(15,'Prey Veng',2,0,NULL),
	(16,'Ratanakiri',2,0,NULL),
	(17,'Siem Reap',2,0,NULL),
	(18,'Stung Treng',2,0,NULL),
	(19,'Svay Rieng',2,0,NULL),
	(20,'Takéo',2,0,NULL),
	(21,'Kep',2,0,NULL),
	(22,'Pailin',2,0,NULL),
	(23,'Phnom Penh',2,0,NULL),
	(24,'Preah Sihanouk',2,0,NULL),
	(25,'Tboung Khmum',2,0,NULL),
	(27,'Bangkok',5,0,NULL),
	(28,'Amnat Charoen',5,0,NULL),
	(29,'Ang Thong',5,0,NULL),
	(30,'Bueng Kan',5,0,NULL),
	(31,'Buriram',5,0,NULL),
	(32,'Chachoengsao',5,0,NULL),
	(33,'Chai Nat',5,0,NULL),
	(34,'Chaiyaphum',5,0,NULL),
	(35,'Chanthaburi',5,0,NULL),
	(36,'Chiang Mai',5,0,NULL),
	(37,'Chiang Rai',5,0,NULL),
	(38,'Chonburi',5,0,NULL),
	(39,'Chumphon',5,0,NULL),
	(40,'Kalasin',5,0,NULL),
	(41,'Kamphaeng Phet',5,0,NULL),
	(42,'Kanchanaburi',5,0,NULL),
	(43,'Khon Kaen',5,0,NULL),
	(44,'Krabi',5,0,NULL),
	(45,'Lampang',5,0,NULL),
	(46,'Lamphun',5,0,NULL),
	(47,'Loei',5,0,NULL),
	(48,'Lopburi',5,0,NULL),
	(49,'Mae Hong Son',5,0,NULL),
	(50,'Maha Sarakham',5,0,NULL),
	(51,'Mukdahan',5,0,NULL),
	(52,'Nakhon Nayok',5,0,NULL),
	(53,'Nakhon Pathom',5,0,NULL),
	(54,'Nakhon Phanom',5,0,NULL),
	(55,'Nakhon Ratchasima',5,0,NULL),
	(56,'Nakhon Sawan',5,0,NULL),
	(57,'Nakhon Si Thammarat',5,0,NULL),
	(58,'Nan',5,0,NULL),
	(59,'Narathiwat',5,0,NULL),
	(60,'Nong Bua Lam Phu',5,0,NULL),
	(61,'Nong Khai',5,0,NULL),
	(62,'Nonthaburi',5,0,NULL),
	(63,'Pathum Thani',5,0,NULL),
	(64,'Pattani',5,0,NULL),
	(65,'Phang Nga',5,0,NULL),
	(66,'Phatthalung',5,0,NULL),
	(67,'Phayao',5,0,NULL),
	(68,'Phetchabun',5,0,NULL),
	(69,'Phetchaburi',5,0,NULL),
	(70,'Phichit',5,0,NULL),
	(71,'Phitsanulok',5,0,NULL),
	(72,'Phra Nakhon Si Ayutthaya',5,0,NULL),
	(73,'Phrae',5,0,NULL),
	(74,'Phuket',5,0,NULL),
	(75,'Prachinburi',5,0,NULL),
	(76,'Prachuap Khiri Khan',5,0,NULL),
	(77,'Ranong',5,0,NULL),
	(78,'Ratchaburi',5,0,NULL),
	(79,'Rayong',5,0,NULL),
	(80,'Roi Et',5,0,NULL),
	(81,'Sa Kaeo',5,0,NULL),
	(82,'Sakon Nakhon',5,0,NULL),
	(83,'Samut Prakan',5,0,NULL),
	(84,'Samut Sakhon',5,0,NULL),
	(85,'Samut Songkhram',5,0,NULL),
	(86,'Saraburi',5,0,NULL),
	(87,'Satun',5,0,NULL),
	(88,'Sing Buri',5,0,NULL),
	(89,'Sisaket',5,0,NULL),
	(90,'Songkhla',5,0,NULL),
	(91,'Sukhothai',5,0,NULL),
	(92,'Suphan Buri',5,0,NULL),
	(93,'Surat Thani',5,0,NULL),
	(94,'Surin',5,0,NULL),
	(95,'Tak',5,0,NULL),
	(96,'Trang',5,0,NULL),
	(97,'Trat',5,0,NULL),
	(98,'Ubon Ratchathani',5,0,NULL),
	(99,'Udon Thani',5,0,NULL),
	(100,'Uthai Thani',5,0,NULL),
	(101,'Uttaradit',5,0,NULL),
	(102,'Yala',5,0,NULL),
	(103,'Yasothon',5,0,NULL),
	(104,'test update',2,1,'161227205042'),
	(105,'test',2,0,NULL),
	(106,'test2',2,1,NULL);

/*!40000 ALTER TABLE `location_02_tbl_state_province` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table location_03_tbl_city_district
# ------------------------------------------------------------

DROP TABLE IF EXISTS `location_03_tbl_city_district`;

CREATE TABLE `location_03_tbl_city_district` (
  `city_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) NOT NULL DEFAULT '',
  `city_state_id` int(11) unsigned NOT NULL,
  `is_deleted_city` tinyint(1) NOT NULL DEFAULT '0',
  `city_secure_code` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `location_03_tbl_city_district` WRITE;
/*!40000 ALTER TABLE `location_03_tbl_city_district` DISABLE KEYS */;

INSERT INTO `location_03_tbl_city_district` (`city_id`, `city_name`, `city_state_id`, `is_deleted_city`, `city_secure_code`)
VALUES
	(1,'Chamkar Mon test',23,0,'2e44e78f2283d87bccf56e5418701430'),
	(2,'Doun Penh',23,0,NULL),
	(3,'Prampir Meakkakra',23,0,NULL),
	(4,'Toul Kouk',23,0,NULL),
	(5,'Dangkao',23,0,NULL),
	(6,'Mean Chey',23,0,NULL),
	(7,'Ruessei Kaev',23,0,NULL),
	(8,'Sen Sok',23,0,NULL),
	(9,'Pou Senchey',23,0,NULL),
	(10,'Chrouy Changvar',23,0,NULL),
	(11,'Preaek Pnov',23,0,NULL),
	(12,'Chbar Ampov',23,0,NULL),
	(13,'Krong Preah Sihanouk',24,0,NULL),
	(14,'Prey Nob',24,0,NULL),
	(15,'Stueng Hav',24,0,NULL),
	(16,'Kampong Seila',24,0,NULL),
	(18,'Phra Nakhon',27,0,NULL),
	(19,'Dusit',27,0,NULL),
	(20,'Nong Chok',27,0,NULL),
	(21,'Bang Rak',27,0,NULL),
	(22,'Bang Khen',27,0,NULL),
	(23,'Bang Kapi',27,0,NULL),
	(24,'Pathum Wan',27,0,NULL),
	(25,'Pom Prap Sattru Phai',27,0,NULL),
	(26,'Phra Khanong',27,0,NULL),
	(27,'Min Buri',27,0,NULL),
	(28,'Lat Krabang',27,0,NULL),
	(29,'Yan Nawa',27,0,NULL),
	(30,'Samphanthawong',27,0,NULL),
	(31,'Phaya Thai',27,0,NULL),
	(32,'Thon Buri',27,0,NULL),
	(33,'Bangkok Yai',27,0,NULL),
	(34,'Huai Khwang',27,0,NULL),
	(35,'Khlong San',27,0,NULL),
	(36,'Taling Chan',27,0,NULL),
	(37,'Bangkok Noi',27,0,NULL),
	(38,'Bang Khun Thian',27,0,NULL),
	(39,'Phasi Charoen',27,0,NULL),
	(40,'Nong Khaem',27,0,NULL),
	(41,'Rat Burana',27,0,NULL),
	(42,'Bang Phlat',27,0,NULL),
	(43,'Din Daeng',27,0,NULL),
	(44,'Bueng Kum',27,0,NULL),
	(45,'Sathon',27,0,NULL),
	(46,'Bang Sue',27,0,NULL),
	(47,'Chatuchak',27,0,NULL),
	(48,'Bang Kho Laem',27,0,NULL),
	(49,'Prawet',27,0,NULL),
	(50,'Khlong Toei',27,0,NULL),
	(51,'Suan Luang',27,0,NULL),
	(52,'Chom Thong',27,0,NULL),
	(53,'Don Mueang',27,0,NULL),
	(54,'Ratchathewi',27,0,NULL),
	(55,'Lat Phrao',27,0,NULL),
	(56,'Watthana',27,0,NULL),
	(57,'Bang Khae',27,0,NULL),
	(58,'Lak Si',27,0,NULL),
	(59,'Sai Mai',27,0,NULL),
	(60,'Khan Na Yao',27,0,NULL),
	(61,'Saphan Sung',27,0,NULL),
	(62,'Wang Thonglang',27,0,NULL),
	(63,'Khlong Sam Wa',27,0,NULL),
	(64,'Bang Na',27,0,NULL),
	(65,'Thawi Watthana',27,0,NULL),
	(66,'Thung Khru',27,0,NULL),
	(67,'Bang Bon',27,0,NULL),
	(68,'Mongkol Borei',1,0,NULL),
	(69,'Phnum Srok',1,0,NULL),
	(70,'Preah Netr Preah',1,0,NULL),
	(71,'Ou Chrov',1,0,NULL),
	(72,'Krong Serei Saophoan',1,0,NULL),
	(73,'Thma Puok',1,0,NULL),
	(74,'Svay Chek',1,0,NULL),
	(75,'Malai',1,0,NULL),
	(76,'Krong Paoy Paet',1,0,NULL),
	(77,'Tuol Ta Aek',2,0,NULL),
	(78,'Preaek Preah Sdach',2,0,NULL),
	(79,'Rotanak',2,0,NULL),
	(80,'Chamkar Samraong',2,0,NULL),
	(81,'Sla Kaet',2,0,NULL),
	(82,'Kdol Doun Teav',2,0,NULL),
	(83,'Ou Mal',2,0,NULL),
	(84,'Voat Kor',2,0,NULL),
	(85,'Ou Char',2,0,NULL),
	(86,'Svay Pao',2,0,NULL),
	(87,'test update',2,1,'161227221539'),
	(88,'test',1,1,NULL);

/*!40000 ALTER TABLE `location_03_tbl_city_district` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table payment_01_tbl_federal_tax_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `payment_01_tbl_federal_tax_type`;

CREATE TABLE `payment_01_tbl_federal_tax_type` (
  `federal_tax_type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `federal_tax_type_name` varchar(100) DEFAULT NULL,
  `federal_tax_type_is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`federal_tax_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `payment_01_tbl_federal_tax_type` WRITE;
/*!40000 ALTER TABLE `payment_01_tbl_federal_tax_type` DISABLE KEYS */;

INSERT INTO `payment_01_tbl_federal_tax_type` (`federal_tax_type_id`, `federal_tax_type_name`, `federal_tax_type_is_deleted`)
VALUES
	(1,'FederalTaxTest1',0),
	(2,'FederalTaxTest2',0);

/*!40000 ALTER TABLE `payment_01_tbl_federal_tax_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table payment_02_tbl_price_list
# ------------------------------------------------------------

DROP TABLE IF EXISTS `payment_02_tbl_price_list`;

CREATE TABLE `payment_02_tbl_price_list` (
  `prince_list_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `prince_list_service_type_id` int(11) DEFAULT NULL,
  `prince_list_customer_type_id` int(11) DEFAULT NULL,
  `prince_list_product_type_id` int(11) DEFAULT NULL,
  `prince_list_service_id` int(11) DEFAULT NULL,
  `prince_list_ weight_min` float DEFAULT NULL,
  `prince_list_ weight_max` float DEFAULT NULL,
  `prince_list_dimension_width_min` float DEFAULT NULL,
  `prince_list_dimension_width_max` float DEFAULT NULL,
  `prince_list_dimension_ height_min` float DEFAULT NULL,
  `prince_list_dimension_ height_max` float DEFAULT NULL,
  `prince_list_dimension_ length_min` float DEFAULT NULL,
  `prince_list_dimension_ length_max` float DEFAULT NULL,
  `prince_list_unit_price` float DEFAULT NULL COMMENT 'unit price by weight',
  `prince_list_tax` float DEFAULT NULL,
  `prince_list_country_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`prince_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='To find unit price per Kg.';



# Dump of table payment_03_tbl_payment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `payment_03_tbl_payment`;

CREATE TABLE `payment_03_tbl_payment` (
  `payment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `payment_bill_to` int(11) DEFAULT NULL COMMENT 'fk to tbl_user',
  `payment_unit_price` float DEFAULT NULL,
  `payment_total_amount` float DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table product_01_tbl_product
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_01_tbl_product`;

CREATE TABLE `product_01_tbl_product` (
  `product_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_weight` float DEFAULT NULL,
  `product_lenght` float DEFAULT NULL,
  `product_heigh` float DEFAULT NULL,
  `product_width` float DEFAULT NULL,
  `product_type_id` int(11) DEFAULT NULL,
  `product_is_enabled` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `product_01_tbl_product` WRITE;
/*!40000 ALTER TABLE `product_01_tbl_product` DISABLE KEYS */;

INSERT INTO `product_01_tbl_product` (`product_id`, `product_weight`, `product_lenght`, `product_heigh`, `product_width`, `product_type_id`, `product_is_enabled`)
VALUES
	(1,7,6,6,5,2,1),
	(2,7,6,6,5,2,1),
	(3,7,6,6,5,2,1),
	(4,8,6,4,5,2,1);

/*!40000 ALTER TABLE `product_01_tbl_product` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_02_tbl_product_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_02_tbl_product_type`;

CREATE TABLE `product_02_tbl_product_type` (
  `product_type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_type_name` varchar(100) DEFAULT NULL,
  `product_type_is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`product_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `product_02_tbl_product_type` WRITE;
/*!40000 ALTER TABLE `product_02_tbl_product_type` DISABLE KEYS */;

INSERT INTO `product_02_tbl_product_type` (`product_type_id`, `product_type_name`, `product_type_is_deleted`)
VALUES
	(1,'Document',0),
	(2,'Parcel',0),
	(3,'Glass',0),
	(4,'Plastic',0),
	(5,'Cloth',0);

/*!40000 ALTER TABLE `product_02_tbl_product_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_03_tbl_product_type_route
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_03_tbl_product_type_route`;

CREATE TABLE `product_03_tbl_product_type_route` (
  `product_route_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_route_origin_country` int(11) DEFAULT NULL,
  `product_route_consignee_country` int(11) DEFAULT NULL,
  `product_route_product_type_id` int(11) DEFAULT NULL,
  `product_route_is_denied` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`product_route_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `product_03_tbl_product_type_route` WRITE;
/*!40000 ALTER TABLE `product_03_tbl_product_type_route` DISABLE KEYS */;

INSERT INTO `product_03_tbl_product_type_route` (`product_route_id`, `product_route_origin_country`, `product_route_consignee_country`, `product_route_product_type_id`, `product_route_is_denied`)
VALUES
	(1,1,2,1,1);

/*!40000 ALTER TABLE `product_03_tbl_product_type_route` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table service_01_tbl_service
# ------------------------------------------------------------

DROP TABLE IF EXISTS `service_01_tbl_service`;

CREATE TABLE `service_01_tbl_service` (
  `service_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `service_name` varchar(100) DEFAULT NULL,
  `service_description` varchar(250) DEFAULT NULL,
  `service_type_id` int(11) DEFAULT NULL,
  `service_is_enabled` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `service_01_tbl_service` WRITE;
/*!40000 ALTER TABLE `service_01_tbl_service` DISABLE KEYS */;

INSERT INTO `service_01_tbl_service` (`service_id`, `service_name`, `service_description`, `service_type_id`, `service_is_enabled`)
VALUES
	(1,'test1',NULL,1,1),
	(2,'test2',NULL,1,1);

/*!40000 ALTER TABLE `service_01_tbl_service` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table service_02_tbl_service_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `service_02_tbl_service_type`;

CREATE TABLE `service_02_tbl_service_type` (
  `service_type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `service_type_name` varchar(100) DEFAULT NULL,
  `service_type_is_enabled` tinyint(1) DEFAULT '1',
  `service_type_tax` float DEFAULT NULL,
  PRIMARY KEY (`service_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `service_02_tbl_service_type` WRITE;
/*!40000 ALTER TABLE `service_02_tbl_service_type` DISABLE KEYS */;

INSERT INTO `service_02_tbl_service_type` (`service_type_id`, `service_type_name`, `service_type_is_enabled`, `service_type_tax`)
VALUES
	(1,'Domestic',1,10),
	(2,'International',1,15);

/*!40000 ALTER TABLE `service_02_tbl_service_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table service_03_tbl_service_route
# ------------------------------------------------------------

DROP TABLE IF EXISTS `service_03_tbl_service_route`;

CREATE TABLE `service_03_tbl_service_route` (
  `service_route_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `service_route_origin_state` int(11) DEFAULT NULL,
  `service_route_consignee_state` int(11) DEFAULT NULL,
  `service_route_service_id` int(11) DEFAULT NULL,
  `service_router_is_denied` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`service_route_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `service_03_tbl_service_route` WRITE;
/*!40000 ALTER TABLE `service_03_tbl_service_route` DISABLE KEYS */;

INSERT INTO `service_03_tbl_service_route` (`service_route_id`, `service_route_origin_state`, `service_route_consignee_state`, `service_route_service_id`, `service_router_is_denied`)
VALUES
	(1,1,2,2,1);

/*!40000 ALTER TABLE `service_03_tbl_service_route` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shipping_01_tbl_awb_number_pool
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shipping_01_tbl_awb_number_pool`;

CREATE TABLE `shipping_01_tbl_awb_number_pool` (
  `awb_pool_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `awb_pool_name` varchar(100) DEFAULT NULL,
  `awb_pool_prefix` varchar(11) DEFAULT NULL,
  `awb_pool_start_number` int(11) DEFAULT NULL,
  `awb_pool_end_number` int(11) DEFAULT NULL,
  `awb_pool_is_enabled` tinyint(1) DEFAULT '1',
  `awb_pool_is_deleted` tinyint(1) DEFAULT '0' COMMENT 'delete mean remove from list',
  PRIMARY KEY (`awb_pool_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `shipping_01_tbl_awb_number_pool` WRITE;
/*!40000 ALTER TABLE `shipping_01_tbl_awb_number_pool` DISABLE KEYS */;

INSERT INTO `shipping_01_tbl_awb_number_pool` (`awb_pool_id`, `awb_pool_name`, `awb_pool_prefix`, `awb_pool_start_number`, `awb_pool_end_number`, `awb_pool_is_enabled`, `awb_pool_is_deleted`)
VALUES
	(1,'test','test',1,10,1,0),
	(2,'test2','test',11,15,1,0),
	(3,'abc','abc',1,2,1,1),
	(4,'abcd','abcd',1,2,1,0),
	(5,'abc','abc',1,2,1,1),
	(6,'test3','test3',1,2,1,0);

/*!40000 ALTER TABLE `shipping_01_tbl_awb_number_pool` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shipping_02_tbl_awb_number
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shipping_02_tbl_awb_number`;

CREATE TABLE `shipping_02_tbl_awb_number` (
  `awb_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `awb_number` varchar(20) DEFAULT NULL,
  `awb_number_pool_id` int(11) DEFAULT NULL,
  `awb_number_is_available` tinyint(1) DEFAULT '1' COMMENT 'awb is available/busy with shipment',
  `awb_number_is_enabled` tinyint(1) DEFAULT '1' COMMENT 'awb is enable(show)/disable(hidden)',
  `awb_number_is_deleted` tinyint(1) DEFAULT '0' COMMENT 'awb is enable(show)/disable(hidden)',
  PRIMARY KEY (`awb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `shipping_02_tbl_awb_number` WRITE;
/*!40000 ALTER TABLE `shipping_02_tbl_awb_number` DISABLE KEYS */;

INSERT INTO `shipping_02_tbl_awb_number` (`awb_id`, `awb_number`, `awb_number_pool_id`, `awb_number_is_available`, `awb_number_is_enabled`, `awb_number_is_deleted`)
VALUES
	(1,'test01',1,1,1,0),
	(2,'test02',1,1,1,0),
	(3,'test03',1,1,1,0),
	(4,'test04',1,1,1,0),
	(5,'test05',1,1,1,0),
	(6,'test06',1,1,1,0),
	(7,'test07',1,1,1,0),
	(8,'test08',1,1,1,0),
	(9,'test09',1,1,1,0),
	(10,'test10',1,1,1,0),
	(11,'abc1',3,1,0,0),
	(12,'abcd1',4,1,1,0),
	(13,'abcd2',4,1,1,0),
	(14,'abc1',5,1,0,0),
	(15,'abc2',5,1,0,0),
	(16,'test301',6,1,1,0),
	(17,'test302',6,1,1,0);

/*!40000 ALTER TABLE `shipping_02_tbl_awb_number` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shipping_03_tbl_shipment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shipping_03_tbl_shipment`;

CREATE TABLE `shipping_03_tbl_shipment` (
  `shipment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `shipment_awb_number` varchar(100) DEFAULT NULL,
  `shipment_sender_id` int(11) DEFAULT NULL COMMENT 'fk to tbl_user',
  `shipment_product_id` int(11) DEFAULT NULL COMMENT 'fk to tbl_product',
  `shipment_service_id` int(11) DEFAULT NULL COMMENT 'fk to tbl_service',
  `shipment_receiver_id` int(11) DEFAULT NULL COMMENT 'fk to tbl_user',
  `shipment_payment_id` int(11) DEFAULT NULL COMMENT 'fk to tbl_payment',
  `shipment_status_id` int(11) DEFAULT NULL COMMENT 'fk to tbl_shipment_status',
  `shipment_type_of_export_id` int(11) DEFAULT NULL COMMENT 'fk to tbl_type_of_export',
  `shipment_available_pickup_time` datetime DEFAULT NULL,
  `shipment_description` varchar(250) DEFAULT NULL,
  `shipment_is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`shipment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `shipping_03_tbl_shipment` WRITE;
/*!40000 ALTER TABLE `shipping_03_tbl_shipment` DISABLE KEYS */;

INSERT INTO `shipping_03_tbl_shipment` (`shipment_id`, `shipment_awb_number`, `shipment_sender_id`, `shipment_product_id`, `shipment_service_id`, `shipment_receiver_id`, `shipment_payment_id`, `shipment_status_id`, `shipment_type_of_export_id`, `shipment_available_pickup_time`, `shipment_description`, `shipment_is_deleted`)
VALUES
	(1,'test01',1,2,1,4,1,6,0,'2017-01-23 09:00:00','test',1),
	(2,'test01',1,3,1,5,2,1,0,'2017-01-23 09:00:00','test',1),
	(3,'test02',1,4,1,6,3,1,0,'2017-01-24 10:30:00','test and test',1);

/*!40000 ALTER TABLE `shipping_03_tbl_shipment` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shipping_04_type_of_export
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shipping_04_type_of_export`;

CREATE TABLE `shipping_04_type_of_export` (
  `type_of_export_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type_of_export_name` varchar(100) DEFAULT NULL,
  `type_of_export_description` varchar(250) DEFAULT NULL,
  `type_of_export_is_enabled` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`type_of_export_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `shipping_04_type_of_export` WRITE;
/*!40000 ALTER TABLE `shipping_04_type_of_export` DISABLE KEYS */;

INSERT INTO `shipping_04_type_of_export` (`type_of_export_id`, `type_of_export_name`, `type_of_export_description`, `type_of_export_is_enabled`)
VALUES
	(1,'export type 1','test1',1),
	(2,'export type 2','test2',1);

/*!40000 ALTER TABLE `shipping_04_type_of_export` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shipping_05_shipment_status
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shipping_05_shipment_status`;

CREATE TABLE `shipping_05_shipment_status` (
  `shipment_status_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `shipment_status_name` varchar(100) DEFAULT NULL,
  `shipment_status_description` varchar(250) DEFAULT NULL,
  `shipment_status_is_enabled` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`shipment_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `shipping_05_shipment_status` WRITE;
/*!40000 ALTER TABLE `shipping_05_shipment_status` DISABLE KEYS */;

INSERT INTO `shipping_05_shipment_status` (`shipment_status_id`, `shipment_status_name`, `shipment_status_description`, `shipment_status_is_enabled`)
VALUES
	(1,'Booked','Booked',1),
	(2,'Proceed Pickup','Already Proceed Pickup, but not yet picked up',1),
	(3,'Picked Up','Already Pickup',1),
	(4,'In Warehouse','In Warehouse',1),
	(5,'In Transit','In Transit',1),
	(6,'Delivered','Delivered',1),
	(7,'Delay','Delay',1);

/*!40000 ALTER TABLE `shipping_05_shipment_status` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shipping_06_tracking
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shipping_06_tracking`;

CREATE TABLE `shipping_06_tracking` (
  `tracking_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tracking_shipment_id` int(11) DEFAULT NULL,
  `tracking_time` datetime DEFAULT NULL,
  `tracking_action` varchar(250) DEFAULT NULL,
  `tracking_actor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`tracking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table system_log_01_tbl_logs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `system_log_01_tbl_logs`;

CREATE TABLE `system_log_01_tbl_logs` (
  `sys_log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sys_log_date` datetime DEFAULT NULL,
  `sys_log_user` varchar(250) DEFAULT NULL,
  `sys_log_action` varchar(250) DEFAULT NULL,
  `sys_log_msg` varchar(250) DEFAULT NULL,
  `sys_log_os` varchar(50) DEFAULT NULL,
  `sys_log_ip` varchar(100) DEFAULT NULL,
  `sys_log_mac_address` text,
  PRIMARY KEY (`sys_log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `system_log_01_tbl_logs` WRITE;
/*!40000 ALTER TABLE `system_log_01_tbl_logs` DISABLE KEYS */;

INSERT INTO `system_log_01_tbl_logs` (`sys_log_id`, `sys_log_date`, `sys_log_user`, `sys_log_action`, `sys_log_msg`, `sys_log_os`, `sys_log_ip`, `sys_log_mac_address`)
VALUES
	(1,'2017-02-16 14:41:13','verify_login','user not existed with user@cla.com',NULL,'Mac','::1','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384 	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP> 	inet 127.0.0.1 netmask 0xff000000 	inet6 ::1 prefixlen 128 	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1 	nd6 options=201<PERFORMNUD,DAD> gif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280 stf0: flags=0<> mtu 1280 en0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500 	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV> 	ether 40:6c:8f:31:b0:64 	inet6 fe80::c47:bf59:df6f:7d9%en0 prefixlen 64 secured scopeid 0x4 	inet 192.168.30.95 netmask 0xffffff00 broadcast 192.168.30.255 	nd6 options=201<PERFORMNUD,DAD> 	media: autoselect (1000baseT <full-duplex>) 	status: active en1: flags=8823<UP,BROADCAST,SMART,SIMPLEX,MULTICAST> mtu 1500 	ether 00:23:12:13:b6:22 	nd6 options=201<PERFORMNUD,DAD> 	media: autoselect (<unknown type>) 	status: inactive en2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500 	options=60<TSO4,TSO6> 	ether d2:00:1a:1c:d9:a0 	media: autoselect <full-duplex> 	status: inactive fw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078 	lladdr 40:6c:8f:ff:fe:a1:cd:9a 	nd6 options=201<PERFORMNUD,DAD> 	media: autoselect <full-duplex> 	status: inactive p2p0: flags=8802<BROADCAST,SIMPLEX,MULTICAST> mtu 2304 	ether 02:23:12:13:b6:22 	media: autoselect 	status: inactive awdl0: flags=8902<BROADCAST,PROMISC,SIMPLEX,MULTICAST> mtu 1484 	ether 3a:55:29:ec:11:80 	nd6 options=201<PERFORMNUD,DAD> 	media: autoselect 	status: inactive bridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500 	options=63<RXCSUM,TXCSUM,TSO4,TSO6> 	ether d2:00:1a:1c:d9:a0 	Configuration: 		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0 		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200 		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0 		ipfilter disabled flags 0x2 	member: en2 flags=3<LEARNING,DISCOVER> 	        ifmaxaddr 0 port 6 priority 0 path cost 0 	nd6 options=201<PERFORMNUD,DAD> 	media: <unknown type> 	status: inactive utun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000 	inet6 fe80::fade:3f92:f3ba:f6%utun0 prefixlen 64 scopeid 0xb 	nd6 options=201<PERFORMNUD,DAD>'),
	(2,'2017-02-16 14:41:46','user@cla.com','verify_login','user not existed with user@cla.com','Mac','::1','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384 	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP> 	inet 127.0.0.1 netmask 0xff000000 	inet6 ::1 prefixlen 128 	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1 	nd6 options=201<PERFORMNUD,DAD> gif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280 stf0: flags=0<> mtu 1280 en0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500 	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV> 	ether 40:6c:8f:31:b0:64 	inet6 fe80::c47:bf59:df6f:7d9%en0 prefixlen 64 secured scopeid 0x4 	inet 192.168.30.95 netmask 0xffffff00 broadcast 192.168.30.255 	nd6 options=201<PERFORMNUD,DAD> 	media: autoselect (1000baseT <full-duplex>) 	status: active en1: flags=8823<UP,BROADCAST,SMART,SIMPLEX,MULTICAST> mtu 1500 	ether 00:23:12:13:b6:22 	nd6 options=201<PERFORMNUD,DAD> 	media: autoselect (<unknown type>) 	status: inactive en2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500 	options=60<TSO4,TSO6> 	ether d2:00:1a:1c:d9:a0 	media: autoselect <full-duplex> 	status: inactive fw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078 	lladdr 40:6c:8f:ff:fe:a1:cd:9a 	nd6 options=201<PERFORMNUD,DAD> 	media: autoselect <full-duplex> 	status: inactive p2p0: flags=8802<BROADCAST,SIMPLEX,MULTICAST> mtu 2304 	ether 02:23:12:13:b6:22 	media: autoselect 	status: inactive awdl0: flags=8902<BROADCAST,PROMISC,SIMPLEX,MULTICAST> mtu 1484 	ether 3a:55:29:ec:11:80 	nd6 options=201<PERFORMNUD,DAD> 	media: autoselect 	status: inactive bridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500 	options=63<RXCSUM,TXCSUM,TSO4,TSO6> 	ether d2:00:1a:1c:d9:a0 	Configuration: 		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0 		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200 		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0 		ipfilter disabled flags 0x2 	member: en2 flags=3<LEARNING,DISCOVER> 	        ifmaxaddr 0 port 6 priority 0 path cost 0 	nd6 options=201<PERFORMNUD,DAD> 	media: <unknown type> 	status: inactive utun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000 	inet6 fe80::fade:3f92:f3ba:f6%utun0 prefixlen 64 scopeid 0xb 	nd6 options=201<PERFORMNUD,DAD>'),
	(3,'2017-02-16 14:45:07','abc@abc.com','verify_login','user not existed with abc@abc.com','Mac','::1','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP>	inet 127.0.0.1 netmask 0xff000000	inet6 ::1 prefixlen 128	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1	nd6 options=201<PERFORMNUD,DAD>gif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280stf0: flags=0<> mtu 1280en0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV>	ether 40:6c:8f:31:b0:64	inet6 fe80::c47:bf59:df6f:7d9%en0 prefixlen 64 secured scopeid 0x4	inet 192.168.30.95 netmask 0xffffff00 broadcast 192.168.30.255	nd6 options=201<PERFORMNUD,DAD>	media: autoselect (1000baseT <full-duplex>)	status: activeen1: flags=8823<UP,BROADCAST,SMART,SIMPLEX,MULTICAST> mtu 1500	ether 00:23:12:13:b6:22	nd6 options=201<PERFORMNUD,DAD>	media: autoselect (<unknown type>)	status: inactiveen2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500	options=60<TSO4,TSO6>	ether d2:00:1a:1c:d9:a0	media: autoselect <full-duplex>	status: inactivefw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078	lladdr 40:6c:8f:ff:fe:a1:cd:9a	nd6 options=201<PERFORMNUD,DAD>	media: autoselect <full-duplex>	status: inactivep2p0: flags=8802<BROADCAST,SIMPLEX,MULTICAST> mtu 2304	ether 02:23:12:13:b6:22	media: autoselect	status: inactiveawdl0: flags=8902<BROADCAST,PROMISC,SIMPLEX,MULTICAST> mtu 1484	ether 3a:55:29:ec:11:80	nd6 options=201<PERFORMNUD,DAD>	media: autoselect	status: inactivebridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500	options=63<RXCSUM,TXCSUM,TSO4,TSO6>	ether d2:00:1a:1c:d9:a0	Configuration:		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0		ipfilter disabled flags 0x2	member: en2 flags=3<LEARNING,DISCOVER>	        ifmaxaddr 0 port 6 priority 0 path cost 0	nd6 options=201<PERFORMNUD,DAD>	media: <unknown type>	status: inactiveutun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000	inet6 fe80::fade:3f92:f3ba:f6%utun0 prefixlen 64 scopeid 0xb	nd6 options=201<PERFORMNUD,DAD>'),
	(4,'2017-02-16 14:48:01','teart@abc.com','verify_login','user not existed with teart@abc.com','Mac','::1','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384<br>	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP><br>	inet 127.0.0.1 netmask 0xff000000<br>	inet6 ::1 prefixlen 128<br>	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1<br>	nd6 options=201<PERFORMNUD,DAD><br>gif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280<br>stf0: flags=0<> mtu 1280<br>en0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500<br>	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV><br>	ether 40:6c:8f:31:b0:64<br>	inet6 fe80::c47:bf59:df6f:7d9%en0 prefixlen 64 secured scopeid 0x4<br>	inet 192.168.30.95 netmask 0xffffff00 broadcast 192.168.30.255<br>	nd6 options=201<PERFORMNUD,DAD><br>	media: autoselect (1000baseT <full-duplex>)<br>	status: active<br>en1: flags=8823<UP,BROADCAST,SMART,SIMPLEX,MULTICAST> mtu 1500<br>	ether 00:23:12:13:b6:22<br>	nd6 options=201<PERFORMNUD,DAD><br>	media: autoselect (<unknown type>)<br>	status: inactive<br>en2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500<br>	options=60<TSO4,TSO6><br>	ether d2:00:1a:1c:d9:a0<br>	media: autoselect <full-duplex><br>	status: inactive<br>fw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078<br>	lladdr 40:6c:8f:ff:fe:a1:cd:9a<br>	nd6 options=201<PERFORMNUD,DAD><br>	media: autoselect <full-duplex><br>	status: inactive<br>p2p0: flags=8802<BROADCAST,SIMPLEX,MULTICAST> mtu 2304<br>	ether 02:23:12:13:b6:22<br>	media: autoselect<br>	status: inactive<br>awdl0: flags=8902<BROADCAST,PROMISC,SIMPLEX,MULTICAST> mtu 1484<br>	ether 3a:55:29:ec:11:80<br>	nd6 options=201<PERFORMNUD,DAD><br>	media: autoselect<br>	status: inactive<br>bridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500<br>	options=63<RXCSUM,TXCSUM,TSO4,TSO6><br>	ether d2:00:1a:1c:d9:a0<br>	Configuration:<br>		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0<br>		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200<br>		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0<br>		ipfilter disabled flags 0x2<br>	member: en2 flags=3<LEARNING,DISCOVER><br>	        ifmaxaddr 0 port 6 priority 0 path cost 0<br>	nd6 options=201<PERFORMNUD,DAD><br>	media: <unknown type><br>	status: inactive<br>utun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000<br>	inet6 fe80::fade:3f92:f3ba:f6%utun0 prefixlen 64 scopeid 0xb<br>	nd6 options=201<PERFORMNUD,DAD>'),
	(5,'2017-02-16 14:57:23','test2@test.com','verify_login','user not existed with test2@test.com','Mac','::1','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384\n	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP>\n	inet 127.0.0.1 netmask 0xff000000\n	inet6 ::1 prefixlen 128\n	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1\n	nd6 options=201<PERFORMNUD,DAD>\ngif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280\nstf0: flags=0<> mtu 1280\nen0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV>\n	ether 40:6c:8f:31:b0:64\n	inet6 fe80::c47:bf59:df6f:7d9%en0 prefixlen 64 secured scopeid 0x4\n	inet 192.168.30.95 netmask 0xffffff00 broadcast 192.168.30.255\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect (1000baseT <full-duplex>)\n	status: active\nen1: flags=8823<UP,BROADCAST,SMART,SIMPLEX,MULTICAST> mtu 1500\n	ether 00:23:12:13:b6:22\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect (<unknown type>)\n	status: inactive\nen2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500\n	options=60<TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	media: autoselect <full-duplex>\n	status: inactive\nfw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078\n	lladdr 40:6c:8f:ff:fe:a1:cd:9a\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect <full-duplex>\n	status: inactive\np2p0: flags=8802<BROADCAST,SIMPLEX,MULTICAST> mtu 2304\n	ether 02:23:12:13:b6:22\n	media: autoselect\n	status: inactive\nawdl0: flags=8902<BROADCAST,PROMISC,SIMPLEX,MULTICAST> mtu 1484\n	ether 3a:55:29:ec:11:80\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: inactive\nbridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=63<RXCSUM,TXCSUM,TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	Configuration:\n		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0\n		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200\n		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0\n		ipfilter disabled flags 0x2\n	member: en2 flags=3<LEARNING,DISCOVER>\n	        ifmaxaddr 0 port 6 priority 0 path cost 0\n	nd6 options=201<PERFORMNUD,DAD>\n	media: <unknown type>\n	status: inactive\nutun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000\n	inet6 fe80::fade:3f92:f3ba:f6%utun0 prefixlen 64 scopeid 0xb\n	nd6 options=201<PERFORMNUD,DAD>'),
	(6,'2017-02-16 15:00:40','admin@cla.com','verify_login','log successful with admin@cla.com','Mac','::1','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384\n	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP>\n	inet 127.0.0.1 netmask 0xff000000\n	inet6 ::1 prefixlen 128\n	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1\n	nd6 options=201<PERFORMNUD,DAD>\ngif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280\nstf0: flags=0<> mtu 1280\nen0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV>\n	ether 40:6c:8f:31:b0:64\n	inet6 fe80::c47:bf59:df6f:7d9%en0 prefixlen 64 secured scopeid 0x4\n	inet 192.168.30.95 netmask 0xffffff00 broadcast 192.168.30.255\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect (1000baseT <full-duplex>)\n	status: active\nen1: flags=8823<UP,BROADCAST,SMART,SIMPLEX,MULTICAST> mtu 1500\n	ether 00:23:12:13:b6:22\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect (<unknown type>)\n	status: inactive\nen2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500\n	options=60<TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	media: autoselect <full-duplex>\n	status: inactive\nfw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078\n	lladdr 40:6c:8f:ff:fe:a1:cd:9a\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect <full-duplex>\n	status: inactive\np2p0: flags=8802<BROADCAST,SIMPLEX,MULTICAST> mtu 2304\n	ether 02:23:12:13:b6:22\n	media: autoselect\n	status: inactive\nawdl0: flags=8902<BROADCAST,PROMISC,SIMPLEX,MULTICAST> mtu 1484\n	ether 3a:55:29:ec:11:80\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: inactive\nbridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=63<RXCSUM,TXCSUM,TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	Configuration:\n		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0\n		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200\n		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0\n		ipfilter disabled flags 0x2\n	member: en2 flags=3<LEARNING,DISCOVER>\n	        ifmaxaddr 0 port 6 priority 0 path cost 0\n	nd6 options=201<PERFORMNUD,DAD>\n	media: <unknown type>\n	status: inactive\nutun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000\n	inet6 fe80::fade:3f92:f3ba:f6%utun0 prefixlen 64 scopeid 0xb\n	nd6 options=201<PERFORMNUD,DAD>'),
	(7,'2017-02-16 15:14:22','admin@cla.com','verify_login','log in successful with admin@cla.com','Windows','192.168.30.86',''),
	(8,'2017-02-16 16:20:23','admin@cla.com','verify_login','log in successful with admin@cla.com','Mac','192.168.30.95','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384\n	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP>\n	inet 127.0.0.1 netmask 0xff000000\n	inet6 ::1 prefixlen 128\n	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1\n	nd6 options=201<PERFORMNUD,DAD>\ngif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280\nstf0: flags=0<> mtu 1280\nen0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV>\n	ether 40:6c:8f:31:b0:64\n	inet6 fe80::c47:bf59:df6f:7d9%en0 prefixlen 64 secured scopeid 0x4\n	inet 192.168.30.95 netmask 0xffffff00 broadcast 192.168.30.255\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect (1000baseT <full-duplex>)\n	status: active\nen1: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	ether 00:23:12:13:b6:22\n	inet6 fe80::452:9cda:f15a:d166%en1 prefixlen 64 secured scopeid 0x5\n	inet 192.168.30.128 netmask 0xffffff00 broadcast 192.168.30.255\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nen2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500\n	options=60<TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	media: autoselect <full-duplex>\n	status: inactive\nfw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078\n	lladdr 40:6c:8f:ff:fe:a1:cd:9a\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect <full-duplex>\n	status: inactive\np2p0: flags=8843<UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST> mtu 2304\n	ether 02:23:12:13:b6:22\n	media: autoselect\n	status: inactive\nawdl0: flags=8943<UP,BROADCAST,RUNNING,PROMISC,SIMPLEX,MULTICAST> mtu 1484\n	ether 3a:55:29:ec:11:80\n	inet6 fe80::3855:29ff:feec:1180%awdl0 prefixlen 64 scopeid 0x9\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nbridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=63<RXCSUM,TXCSUM,TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	Configuration:\n		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0\n		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200\n		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0\n		ipfilter disabled flags 0x2\n	member: en2 flags=3<LEARNING,DISCOVER>\n	        ifmaxaddr 0 port 6 priority 0 path cost 0\n	nd6 options=201<PERFORMNUD,DAD>\n	media: <unknown type>\n	status: inactive\nutun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000\n	inet6 fe80::fade:3f92:f3ba:f6%utun0 prefixlen 64 scopeid 0xb\n	nd6 options=201<PERFORMNUD,DAD>'),
	(9,'2017-02-16 18:36:52','admin@cla.com','verify_login','log in successful with admin@cla.com','Mac','192.168.30.128',''),
	(10,'2017-02-16 18:41:45',NULL,'logout','logout','Mac','192.168.30.128',''),
	(11,'2017-02-16 18:42:23','admin@cla.com','verify_login','log in successful with admin@cla.com','Mac','192.168.30.128',''),
	(12,'2017-02-16 18:42:30','admin@cla.com','logout','logout','Mac','192.168.30.128',''),
	(13,'2017-02-16 18:45:25',NULL,'verify_login','form validation fail','Mac','192.168.30.128',''),
	(14,'2017-02-16 18:45:44','admin@cla.com','verify_login','log in successful with admin@cla.com','Mac','192.168.30.128',''),
	(15,'2017-02-16 18:47:01','admin@cla.com','verify_login','log in successful with admin@cla.com','Windows','192.168.30.49',''),
	(16,'2017-02-16 18:47:57','admin@cla.com','logout','logout','Windows','192.168.30.49',''),
	(17,'2017-02-16 18:48:10','admin@cla.com','logout','logout','Mac','192.168.30.128','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384\n	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP>\n	inet 127.0.0.1 netmask 0xff000000\n	inet6 ::1 prefixlen 128\n	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1\n	nd6 options=201<PERFORMNUD,DAD>\ngif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280\nstf0: flags=0<> mtu 1280\nen0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV>\n	ether 40:6c:8f:31:b0:64\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect (none)\n	status: inactive\nen1: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	ether 00:23:12:13:b6:22\n	inet6 fe80::452:9cda:f15a:d166%en1 prefixlen 64 secured scopeid 0x5\n	inet 192.168.30.128 netmask 0xffffff00 broadcast 192.168.30.255\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nen2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500\n	options=60<TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	media: autoselect <full-duplex>\n	status: inactive\nfw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078\n	lladdr 40:6c:8f:ff:fe:a1:cd:9a\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect <full-duplex>\n	status: inactive\np2p0: flags=8843<UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST> mtu 2304\n	ether 02:23:12:13:b6:22\n	media: autoselect\n	status: inactive\nawdl0: flags=8943<UP,BROADCAST,RUNNING,PROMISC,SIMPLEX,MULTICAST> mtu 1484\n	ether 3a:55:29:ec:11:80\n	inet6 fe80::3855:29ff:feec:1180%awdl0 prefixlen 64 scopeid 0x9\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nbridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=63<RXCSUM,TXCSUM,TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	Configuration:\n		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0\n		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200\n		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0\n		ipfilter disabled flags 0x2\n	member: en2 flags=3<LEARNING,DISCOVER>\n	        ifmaxaddr 0 port 6 priority 0 path cost 0\n	nd6 options=201<PERFORMNUD,DAD>\n	media: <unknown type>\n	status: inactive\nutun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000\n	inet6 fe80::fade:3f92:f3ba:f6%utun0 prefixlen 64 scopeid 0xb\n	nd6 options=201<PERFORMNUD,DAD>'),
	(18,'2017-02-17 18:03:51','admin@cla.com','verify_login','log in successful with admin@cla.com','Mac','::1','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384\n	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP>\n	inet 127.0.0.1 netmask 0xff000000\n	inet6 ::1 prefixlen 128\n	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1\n	nd6 options=201<PERFORMNUD,DAD>\ngif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280\nstf0: flags=0<> mtu 1280\nen1: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	ether 00:23:12:13:b6:22\n	inet6 fe80::c69:f44e:362b:f291%en1 prefixlen 64 secured scopeid 0x4\n	inet 192.168.0.102 netmask 0xffffff00 broadcast 192.168.0.255\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nfw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078\n	lladdr 40:6c:8f:ff:fe:a1:cd:9a\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect <full-duplex>\n	status: inactive\nen2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500\n	options=60<TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	media: autoselect <full-duplex>\n	status: inactive\np2p0: flags=8843<UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST> mtu 2304\n	ether 02:23:12:13:b6:22\n	media: autoselect\n	status: inactive\nawdl0: flags=8943<UP,BROADCAST,RUNNING,PROMISC,SIMPLEX,MULTICAST> mtu 1484\n	ether 92:3c:b3:f1:17:ee\n	inet6 fe80::903c:b3ff:fef1:17ee%awdl0 prefixlen 64 scopeid 0x8\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nen0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV>\n	ether 40:6c:8f:31:b0:64\n	inet6 fe80::1cf6:5be:e2bc:23d1%en0 prefixlen 64 secured scopeid 0x9\n	inet 110.74.214.147 netmask 0xfffffff8 broadcast 110.74.214.151\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect (1000baseT <full-duplex,flow-control,energy-efficient-ethernet>)\n	status: active\nbridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=63<RXCSUM,TXCSUM,TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	Configuration:\n		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0\n		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200\n		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0\n		ipfilter disabled flags 0x2\n	member: en2 flags=3<LEARNING,DISCOVER>\n	        ifmaxaddr 0 port 6 priority 0 path cost 0\n	nd6 options=201<PERFORMNUD,DAD>\n	media: <unknown type>\n	status: inactive\nutun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000\n	inet6 fe80::6a59:a463:ee62:ee73%utun0 prefixlen 64 scopeid 0xb\n	nd6 options=201<PERFORMNUD,DAD>'),
	(19,'2017-02-17 18:10:13','1','AWB Number','list awb number','Mac','::1','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384\n	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP>\n	inet 127.0.0.1 netmask 0xff000000\n	inet6 ::1 prefixlen 128\n	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1\n	nd6 options=201<PERFORMNUD,DAD>\ngif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280\nstf0: flags=0<> mtu 1280\nen1: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	ether 00:23:12:13:b6:22\n	inet6 fe80::c69:f44e:362b:f291%en1 prefixlen 64 secured scopeid 0x4\n	inet 192.168.0.102 netmask 0xffffff00 broadcast 192.168.0.255\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nfw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078\n	lladdr 40:6c:8f:ff:fe:a1:cd:9a\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect <full-duplex>\n	status: inactive\nen2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500\n	options=60<TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	media: autoselect <full-duplex>\n	status: inactive\np2p0: flags=8843<UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST> mtu 2304\n	ether 02:23:12:13:b6:22\n	media: autoselect\n	status: inactive\nawdl0: flags=8943<UP,BROADCAST,RUNNING,PROMISC,SIMPLEX,MULTICAST> mtu 1484\n	ether 92:3c:b3:f1:17:ee\n	inet6 fe80::903c:b3ff:fef1:17ee%awdl0 prefixlen 64 scopeid 0x8\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nen0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV>\n	ether 40:6c:8f:31:b0:64\n	inet6 fe80::1cf6:5be:e2bc:23d1%en0 prefixlen 64 secured scopeid 0x9\n	inet 110.74.214.147 netmask 0xfffffff8 broadcast 110.74.214.151\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect (1000baseT <full-duplex,flow-control,energy-efficient-ethernet>)\n	status: active\nbridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=63<RXCSUM,TXCSUM,TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	Configuration:\n		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0\n		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200\n		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0\n		ipfilter disabled flags 0x2\n	member: en2 flags=3<LEARNING,DISCOVER>\n	        ifmaxaddr 0 port 6 priority 0 path cost 0\n	nd6 options=201<PERFORMNUD,DAD>\n	media: <unknown type>\n	status: inactive\nutun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000\n	inet6 fe80::6a59:a463:ee62:ee73%utun0 prefixlen 64 scopeid 0xb\n	nd6 options=201<PERFORMNUD,DAD>'),
	(20,'2017-02-17 18:12:27','admin@cla.com','logout','logout','Mac','::1','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384\n	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP>\n	inet 127.0.0.1 netmask 0xff000000\n	inet6 ::1 prefixlen 128\n	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1\n	nd6 options=201<PERFORMNUD,DAD>\ngif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280\nstf0: flags=0<> mtu 1280\nen1: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	ether 00:23:12:13:b6:22\n	inet6 fe80::c69:f44e:362b:f291%en1 prefixlen 64 secured scopeid 0x4\n	inet 192.168.0.102 netmask 0xffffff00 broadcast 192.168.0.255\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nfw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078\n	lladdr 40:6c:8f:ff:fe:a1:cd:9a\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect <full-duplex>\n	status: inactive\nen2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500\n	options=60<TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	media: autoselect <full-duplex>\n	status: inactive\np2p0: flags=8843<UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST> mtu 2304\n	ether 02:23:12:13:b6:22\n	media: autoselect\n	status: inactive\nawdl0: flags=8943<UP,BROADCAST,RUNNING,PROMISC,SIMPLEX,MULTICAST> mtu 1484\n	ether 92:3c:b3:f1:17:ee\n	inet6 fe80::903c:b3ff:fef1:17ee%awdl0 prefixlen 64 scopeid 0x8\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nen0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV>\n	ether 40:6c:8f:31:b0:64\n	inet6 fe80::1cf6:5be:e2bc:23d1%en0 prefixlen 64 secured scopeid 0x9\n	inet 110.74.214.147 netmask 0xfffffff8 broadcast 110.74.214.151\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect (1000baseT <full-duplex,flow-control,energy-efficient-ethernet>)\n	status: active\nbridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=63<RXCSUM,TXCSUM,TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	Configuration:\n		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0\n		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200\n		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0\n		ipfilter disabled flags 0x2\n	member: en2 flags=3<LEARNING,DISCOVER>\n	        ifmaxaddr 0 port 6 priority 0 path cost 0\n	nd6 options=201<PERFORMNUD,DAD>\n	media: <unknown type>\n	status: inactive\nutun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000\n	inet6 fe80::6a59:a463:ee62:ee73%utun0 prefixlen 64 scopeid 0xb\n	nd6 options=201<PERFORMNUD,DAD>'),
	(21,'2017-02-17 18:15:36','admin@cla.com','verify_login','log in successful with admin@cla.com','Mac','::1','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384\n	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP>\n	inet 127.0.0.1 netmask 0xff000000\n	inet6 ::1 prefixlen 128\n	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1\n	nd6 options=201<PERFORMNUD,DAD>\ngif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280\nstf0: flags=0<> mtu 1280\nen1: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	ether 00:23:12:13:b6:22\n	inet6 fe80::c69:f44e:362b:f291%en1 prefixlen 64 secured scopeid 0x4\n	inet 192.168.0.102 netmask 0xffffff00 broadcast 192.168.0.255\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nfw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078\n	lladdr 40:6c:8f:ff:fe:a1:cd:9a\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect <full-duplex>\n	status: inactive\nen2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500\n	options=60<TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	media: autoselect <full-duplex>\n	status: inactive\np2p0: flags=8843<UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST> mtu 2304\n	ether 02:23:12:13:b6:22\n	media: autoselect\n	status: inactive\nawdl0: flags=8943<UP,BROADCAST,RUNNING,PROMISC,SIMPLEX,MULTICAST> mtu 1484\n	ether 92:3c:b3:f1:17:ee\n	inet6 fe80::903c:b3ff:fef1:17ee%awdl0 prefixlen 64 scopeid 0x8\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nen0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV>\n	ether 40:6c:8f:31:b0:64\n	inet6 fe80::1cf6:5be:e2bc:23d1%en0 prefixlen 64 secured scopeid 0x9\n	inet 110.74.214.147 netmask 0xfffffff8 broadcast 110.74.214.151\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect (1000baseT <full-duplex,flow-control,energy-efficient-ethernet>)\n	status: active\nbridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=63<RXCSUM,TXCSUM,TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	Configuration:\n		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0\n		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200\n		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0\n		ipfilter disabled flags 0x2\n	member: en2 flags=3<LEARNING,DISCOVER>\n	        ifmaxaddr 0 port 6 priority 0 path cost 0\n	nd6 options=201<PERFORMNUD,DAD>\n	media: <unknown type>\n	status: inactive\nutun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000\n	inet6 fe80::6a59:a463:ee62:ee73%utun0 prefixlen 64 scopeid 0xb\n	nd6 options=201<PERFORMNUD,DAD>'),
	(22,'2017-02-17 18:15:42','1','logout','logged out by admin@cla.com','Mac','::1','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384\n	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP>\n	inet 127.0.0.1 netmask 0xff000000\n	inet6 ::1 prefixlen 128\n	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1\n	nd6 options=201<PERFORMNUD,DAD>\ngif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280\nstf0: flags=0<> mtu 1280\nen1: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	ether 00:23:12:13:b6:22\n	inet6 fe80::c69:f44e:362b:f291%en1 prefixlen 64 secured scopeid 0x4\n	inet 192.168.0.102 netmask 0xffffff00 broadcast 192.168.0.255\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nfw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078\n	lladdr 40:6c:8f:ff:fe:a1:cd:9a\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect <full-duplex>\n	status: inactive\nen2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500\n	options=60<TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	media: autoselect <full-duplex>\n	status: inactive\np2p0: flags=8843<UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST> mtu 2304\n	ether 02:23:12:13:b6:22\n	media: autoselect\n	status: inactive\nawdl0: flags=8943<UP,BROADCAST,RUNNING,PROMISC,SIMPLEX,MULTICAST> mtu 1484\n	ether 92:3c:b3:f1:17:ee\n	inet6 fe80::903c:b3ff:fef1:17ee%awdl0 prefixlen 64 scopeid 0x8\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nen0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV>\n	ether 40:6c:8f:31:b0:64\n	inet6 fe80::1cf6:5be:e2bc:23d1%en0 prefixlen 64 secured scopeid 0x9\n	inet 110.74.214.147 netmask 0xfffffff8 broadcast 110.74.214.151\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect (1000baseT <full-duplex,flow-control,energy-efficient-ethernet>)\n	status: active\nbridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=63<RXCSUM,TXCSUM,TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	Configuration:\n		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0\n		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200\n		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0\n		ipfilter disabled flags 0x2\n	member: en2 flags=3<LEARNING,DISCOVER>\n	        ifmaxaddr 0 port 6 priority 0 path cost 0\n	nd6 options=201<PERFORMNUD,DAD>\n	media: <unknown type>\n	status: inactive\nutun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000\n	inet6 fe80::6a59:a463:ee62:ee73%utun0 prefixlen 64 scopeid 0xb\n	nd6 options=201<PERFORMNUD,DAD>'),
	(23,'2017-02-17 18:18:03','N/A','verify_login','user user@ldkfj.com is not existed.','Mac','::1','lo0: flags=8049<UP,LOOPBACK,RUNNING,MULTICAST> mtu 16384\n	options=1203<RXCSUM,TXCSUM,TXSTATUS,SW_TIMESTAMP>\n	inet 127.0.0.1 netmask 0xff000000\n	inet6 ::1 prefixlen 128\n	inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1\n	nd6 options=201<PERFORMNUD,DAD>\ngif0: flags=8010<POINTOPOINT,MULTICAST> mtu 1280\nstf0: flags=0<> mtu 1280\nen1: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	ether 00:23:12:13:b6:22\n	inet6 fe80::c69:f44e:362b:f291%en1 prefixlen 64 secured scopeid 0x4\n	inet 192.168.0.102 netmask 0xffffff00 broadcast 192.168.0.255\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nfw0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 4078\n	lladdr 40:6c:8f:ff:fe:a1:cd:9a\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect <full-duplex>\n	status: inactive\nen2: flags=963<UP,BROADCAST,SMART,RUNNING,PROMISC,SIMPLEX> mtu 1500\n	options=60<TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	media: autoselect <full-duplex>\n	status: inactive\np2p0: flags=8843<UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST> mtu 2304\n	ether 02:23:12:13:b6:22\n	media: autoselect\n	status: inactive\nawdl0: flags=8943<UP,BROADCAST,RUNNING,PROMISC,SIMPLEX,MULTICAST> mtu 1484\n	ether 92:3c:b3:f1:17:ee\n	inet6 fe80::903c:b3ff:fef1:17ee%awdl0 prefixlen 64 scopeid 0x8\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect\n	status: active\nen0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=10b<RXCSUM,TXCSUM,VLAN_HWTAGGING,AV>\n	ether 40:6c:8f:31:b0:64\n	inet6 fe80::1cf6:5be:e2bc:23d1%en0 prefixlen 64 secured scopeid 0x9\n	inet 110.74.214.147 netmask 0xfffffff8 broadcast 110.74.214.151\n	nd6 options=201<PERFORMNUD,DAD>\n	media: autoselect (1000baseT <full-duplex,flow-control,energy-efficient-ethernet>)\n	status: active\nbridge0: flags=8863<UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST> mtu 1500\n	options=63<RXCSUM,TXCSUM,TSO4,TSO6>\n	ether d2:00:1a:1c:d9:a0\n	Configuration:\n		id 0:0:0:0:0:0 priority 0 hellotime 0 fwddelay 0\n		maxage 0 holdcnt 0 proto stp maxaddr 100 timeout 1200\n		root id 0:0:0:0:0:0 priority 0 ifcost 0 port 0\n		ipfilter disabled flags 0x2\n	member: en2 flags=3<LEARNING,DISCOVER>\n	        ifmaxaddr 0 port 6 priority 0 path cost 0\n	nd6 options=201<PERFORMNUD,DAD>\n	media: <unknown type>\n	status: inactive\nutun0: flags=8051<UP,POINTOPOINT,RUNNING,MULTICAST> mtu 2000\n	inet6 fe80::6a59:a463:ee62:ee73%utun0 prefixlen 64 scopeid 0xb\n	nd6 options=201<PERFORMNUD,DAD>'),
	(24,'2017-02-17 21:31:45','admin@cla.com','verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(25,'2017-02-17 21:31:50','1','add country','load form add country','Mac','::1',NULL),
	(26,'2017-02-17 21:32:21','1','add country','country add successful','Mac','::1',NULL),
	(27,'2017-02-17 21:32:22','1','add country','load form add country','Mac','::1',NULL),
	(28,'2017-02-18 10:59:35','admin@cla.com','verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(29,'2017-02-18 11:00:23','admin@cla.com','verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(30,'2017-02-18 11:06:01','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(31,'2017-02-18 11:06:11','1','list country','list country','Mac','::1',NULL),
	(32,'2017-02-18 11:58:57','admin@cla.com','verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(33,'2017-02-18 13:38:18','admin@cla.com','verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(34,'2017-02-18 13:38:22','1','add state or province','load form add state or province','Mac','::1',NULL),
	(35,'2017-02-18 13:45:03','1','add state or province','load form add state or province','Mac','::1',NULL),
	(36,'2017-02-18 15:21:10','1','add state or province','load form add state or province','Mac','::1',NULL),
	(37,'2017-02-18 15:21:24','1','add state or province','state or province already existed','Mac','::1',NULL),
	(38,'2017-02-18 15:21:25','1','add state or province','load form add state or province','Mac','::1',NULL),
	(39,'2017-02-18 15:21:49','1','add state or province','state or province already existed','Mac','::1',NULL),
	(40,'2017-02-18 15:21:50','1','add state or province','load form add state or province','Mac','::1',NULL),
	(41,'2017-02-18 15:22:03','1','add state or province','state or province insert successful','Mac','::1',NULL),
	(42,'2017-02-18 15:22:04','1','add state or province','load form add state or province','Mac','::1',NULL),
	(43,'2017-02-18 15:39:39','1','list state or province','load list state or province','Mac','::1',NULL),
	(44,'2017-02-18 15:42:47','1','list state or province','load list state or province','Mac','::1',NULL),
	(45,'2017-02-18 15:43:02','1','list state or province','load list state or province','Mac','::1',NULL),
	(46,'2017-02-18 15:43:13','1','list state or province','load list state or province','Mac','::1',NULL),
	(47,'2017-02-18 15:43:52','1','list state or province','load list state or province','Mac','::1',NULL),
	(48,'2017-02-18 15:57:40','1','list state or province','load list state or province','Mac','::1',NULL),
	(49,'2017-02-18 15:59:39','1','list state or province','load list state or province','Mac','::1',NULL),
	(50,'2017-02-18 16:24:06','1','list state or province','load list state or province','Mac','::1',NULL),
	(51,'2017-02-18 16:24:44','1','list state or province','load list state or province','Mac','::1',NULL),
	(52,'2017-02-18 16:25:26','1','list state or province','load list state or province','Mac','::1',NULL),
	(53,'2017-02-18 16:45:11','1','edit state or province','load form edit state or province','Mac','::1',NULL),
	(54,'2017-02-18 16:45:37','1','edit state or province','load form edit state or province','Mac','::1',NULL),
	(55,'2017-02-18 18:11:35','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(56,'2017-02-18 18:12:48','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(57,'2017-02-18 18:12:52','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(58,'2017-02-18 18:17:56','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(59,'2017-02-18 18:18:01','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(60,'2017-02-18 18:18:02','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(61,'2017-02-18 18:18:03','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(62,'2017-02-18 18:18:04','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(63,'2017-02-18 18:18:05','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(64,'2017-02-18 18:18:13','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(65,'2017-02-18 18:18:31','1','edit state or province','data validation fail','Mac','::1',NULL),
	(66,'2017-02-18 18:18:40','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(67,'2017-02-18 18:39:26','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(68,'2017-02-18 18:57:28','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(69,'2017-02-18 18:57:32','1','edit state or province','generate secure code and load form edit state','Mac','::1',NULL),
	(70,'2017-02-18 19:11:48','1','edit state or province','load form edit state','Mac','::1',NULL),
	(71,'2017-02-18 19:11:54','1','edit state or province','load form edit state','Mac','::1',NULL),
	(72,'2017-02-18 19:11:55','1','edit state or province','load form edit state','Mac','::1',NULL),
	(73,'2017-02-18 19:11:55','1','edit state or province','load form edit state','Mac','::1',NULL),
	(74,'2017-02-18 19:11:56','1','edit state or province','load form edit state','Mac','::1',NULL),
	(75,'2017-02-18 19:11:57','1','edit state or province','load form edit state','Mac','::1',NULL),
	(76,'2017-02-18 19:11:58','1','edit state or province','load form edit state','Mac','::1',NULL),
	(77,'2017-02-18 21:01:42','1','edit state or province','load form edit state','Mac','::1',NULL),
	(78,'2017-02-18 21:02:39','1','edit state or province','state or province update successful','Mac','::1',NULL),
	(79,'2017-02-18 21:02:48','1','edit state or province','load form edit state','Mac','::1',NULL),
	(80,'2017-02-18 21:24:10','1','edit state or province','state or province update successful','Mac','::1',NULL),
	(81,'2017-02-18 21:24:10','1','edit state or province','load form edit state','Mac','::1',NULL),
	(82,'2017-02-18 21:24:12','1','edit state or province','state or province already existed','Mac','::1',NULL),
	(83,'2017-02-18 21:24:12','1','edit state or province','load form edit state','Mac','::1',NULL),
	(84,'2017-02-18 21:28:16','1','add state or province','load form add state or province','Mac','::1',NULL),
	(85,'2017-02-18 21:28:18','1','list state or province','load list state or province','Mac','::1',NULL),
	(86,'2017-02-18 21:46:40','1','delete state or province','state or province deleted successful','Mac','::1',NULL),
	(87,'2017-02-18 21:46:40','1','list state or province','load list state or province','Mac','::1',NULL),
	(88,'2017-02-18 21:46:58','1','delete state or province','state or province deleted successful','Mac','::1',NULL),
	(89,'2017-02-18 21:46:58','1','list state or province','load list state or province','Mac','::1',NULL),
	(90,'2017-02-19 13:41:08',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(91,'2017-02-19 13:54:26','1','add city or district','load form add city or district','Mac','::1',NULL),
	(92,'2017-02-19 13:56:32','1','add city or district','load form add city or district','Mac','::1',NULL),
	(93,'2017-02-19 14:02:50','1','add city or district','load form add city or district','Mac','::1',NULL),
	(94,'2017-02-19 14:04:05','1','add city or district','load form add city or district','Mac','::1',NULL),
	(95,'2017-02-19 14:17:59','1','add city or district','load form add city or district','Mac','::1',NULL),
	(96,'2017-02-19 14:18:27','1','add city or district','load form add city or district','Mac','::1',NULL),
	(97,'2017-02-19 14:20:47','1','add city or district','load form add city or district','Mac','::1',NULL),
	(98,'2017-02-19 14:47:19','1','add city or district','load form add city or district','Mac','::1',NULL),
	(99,'2017-02-19 14:47:29','1','add city or district','load form add city or district','Mac','::1',NULL),
	(100,'2017-02-19 14:47:49','1','add city or district','load form add city or district','Mac','::1',NULL),
	(101,'2017-02-19 14:52:02','1','add city or district','load form add city or district','Mac','::1',NULL),
	(102,'2017-02-19 14:52:47','1','add city or district','load form add city or district','Mac','::1',NULL),
	(103,'2017-02-19 14:58:24','1','add city or district','load form add city or district','Mac','::1',NULL),
	(104,'2017-02-19 22:13:44',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(105,'2017-02-19 22:13:48','1','add city or district','load form add city or district','Mac','::1',NULL),
	(106,'2017-02-20 13:34:00',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(107,'2017-02-20 13:34:04','1','add city or district','load form add city or district','Mac','::1',NULL),
	(108,'2017-02-20 14:17:21','1','add city or district','load form add city or district','Mac','::1',NULL),
	(109,'2017-02-20 14:17:23','1','list city or district','load list city or district','Mac','::1',NULL),
	(110,'2017-02-20 14:21:19','1','list city or district','load list city or district','Mac','::1',NULL),
	(111,'2017-02-20 14:37:47','1','list city or district','load list city or district','Mac','::1',NULL),
	(112,'2017-02-20 14:38:33','1','list city or district','load list city or district','Mac','::1',NULL),
	(113,'2017-02-20 14:38:57','1','list city or district','load list city or district','Mac','::1',NULL),
	(114,'2017-02-20 14:39:17','1','add city or district','load form add city or district','Mac','::1',NULL),
	(115,'2017-02-20 14:39:23','1','list city or district','load list city or district','Mac','::1',NULL),
	(116,'2017-02-20 14:39:28','1','add city or district','load form add city or district','Mac','::1',NULL),
	(117,'2017-02-20 14:39:48','1','add city or district','city or district insert successful','Mac','::1',NULL),
	(118,'2017-02-20 14:39:48','1','add city or district','load form add city or district','Mac','::1',NULL),
	(119,'2017-02-20 14:39:57','1','add city or district','city already exist','Mac','::1',NULL),
	(120,'2017-02-20 14:39:57','1','add city or district','load form add city or district','Mac','::1',NULL),
	(121,'2017-02-20 14:40:20','1','list city or district','load list city or district','Mac','::1',NULL),
	(122,'2017-02-20 15:08:49','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(123,'2017-02-20 15:09:56','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(124,'2017-02-20 15:11:21','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(125,'2017-02-20 15:11:25','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(126,'2017-02-20 15:16:32','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(127,'2017-02-20 15:20:54','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(128,'2017-02-20 15:21:40','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(129,'2017-02-20 15:22:09','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(130,'2017-02-20 15:22:39','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(131,'2017-02-20 15:22:45','1','list city or district','load list city or district','Mac','::1',NULL),
	(132,'2017-02-20 15:22:51','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(133,'2017-02-20 15:23:07','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(134,'2017-02-20 15:24:20','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(135,'2017-02-20 15:25:39','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(136,'2017-02-20 15:43:46','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(137,'2017-02-20 15:57:58','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(138,'2017-02-20 16:13:56','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(139,'2017-02-20 16:14:01','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(140,'2017-02-20 16:46:36','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(141,'2017-02-20 16:46:39','1','edit city or district','city or district update successful','Mac','::1',NULL),
	(142,'2017-02-20 16:46:39','1','add city or district','load form add city or district','Mac','::1',NULL),
	(143,'2017-02-20 16:48:02','1','list city or district','load list city or district','Mac','::1',NULL),
	(144,'2017-02-20 16:48:05','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(145,'2017-02-20 16:48:10','1','edit city or district','city or district update successful','Mac','::1',NULL),
	(146,'2017-02-20 16:49:09','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(147,'2017-02-20 16:49:10','1','list city or district','load list city or district','Mac','::1',NULL),
	(148,'2017-02-20 16:49:13','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(149,'2017-02-20 16:49:17','1','edit city or district','city or district update successful','Mac','::1',NULL),
	(150,'2017-02-20 16:49:29','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(151,'2017-02-20 16:49:34','1','edit city or district','city already exist','Mac','::1',NULL),
	(152,'2017-02-20 16:51:37','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(153,'2017-02-20 16:51:39','1','list city or district','load list city or district','Mac','::1',NULL),
	(154,'2017-02-20 16:51:42','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(155,'2017-02-20 16:51:44','1','edit city or district','city already exist','Mac','::1',NULL),
	(156,'2017-02-20 16:51:51','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(157,'2017-02-20 16:51:55','1','edit city or district','city or district update successful','Mac','::1',NULL),
	(158,'2017-02-20 16:51:55','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(159,'2017-02-20 16:53:54','1','edit city or district','city already exist','Mac','::1',NULL),
	(160,'2017-02-20 16:53:54','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(161,'2017-02-20 16:54:01','1','edit city or district','city or district update successful','Mac','::1',NULL),
	(162,'2017-02-20 16:54:01','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(163,'2017-02-20 16:54:08','1','edit city or district','city or district update successful','Mac','::1',NULL),
	(164,'2017-02-20 16:54:08','1','edit city or district','load form edit city or district','Mac','::1',NULL),
	(165,'2017-02-20 16:54:57','1','list city or district','load list city or district','Mac','::1',NULL),
	(166,'2017-02-20 16:56:02','1','list city or district','load list city or district','Mac','::1',NULL),
	(167,'2017-02-20 16:58:37','1','delete city','city or district delete successful','Mac','::1',NULL),
	(168,'2017-02-20 16:58:37','1','list city or district','load list city or district','Mac','::1',NULL),
	(169,'2017-02-20 17:19:04','1','list city or district','load list city or district','Mac','::1',NULL),
	(170,'2017-02-20 17:19:07','1','edit city or district','load form edit city or district ID:1','Mac','::1',NULL),
	(171,'2017-02-20 17:19:11','1','update city or district','city or district ID:1 update successful','Mac','::1',NULL),
	(172,'2017-02-20 17:19:11','1','edit city or district','load form edit city or district ID:1','Mac','::1',NULL),
	(173,'2017-02-20 19:10:17',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(174,'2017-02-20 19:10:34','1','list country','list country','Mac','::1',NULL),
	(175,'2017-02-20 21:01:41','1','list country','list country','Mac','::1',NULL),
	(176,'2017-02-20 21:01:45','1','edit country','generate secure code and load form edit country','Mac','::1',NULL),
	(177,'2017-02-20 21:01:52','1','edit country','generate secure code and load form edit country','Mac','::1',NULL),
	(178,'2017-02-20 21:02:38','1','edit country','generate secure code and load form edit country','Mac','::1',NULL),
	(179,'2017-02-20 21:03:30','1','edit country','generate secure code and load form edit country','Mac','::1',NULL),
	(180,'2017-02-20 21:07:45','1','update country','country ID:2 already existed','Mac','::1',NULL),
	(181,'2017-02-20 21:08:09','1','edit country','generate secure code and load form edit country','Mac','::1',NULL),
	(182,'2017-02-20 21:08:19','1','edit country','generate secure code and load form edit country','Mac','::1',NULL),
	(183,'2017-02-20 21:08:25','1','update country','country ID:2 update successful','Mac','::1',NULL),
	(184,'2017-02-20 21:08:29','1','edit country','generate secure code and load form edit country','Mac','::1',NULL),
	(185,'2017-02-20 21:09:07','1','update country','country ID:2 update successful','Mac','::1',NULL),
	(186,'2017-02-20 21:09:07','1','edit country','generate secure code and load form edit country','Mac','::1',NULL),
	(187,'2017-02-20 21:09:59','1','list state or province','load list state or province','Mac','::1',NULL),
	(188,'2017-02-20 21:10:03','1','edit state or province','load form edit state','Mac','::1',NULL),
	(189,'2017-02-20 21:10:06','1','edit state or province','load form edit state','Mac','::1',NULL),
	(190,'2017-02-21 09:03:14',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(191,'2017-02-21 09:04:44','1','add state or province','load form add state or province','Mac','::1',NULL),
	(192,'2017-02-21 09:04:56','1','list state or province','load list state or province','Mac','::1',NULL),
	(193,'2017-02-21 09:04:58','1','add state or province','load form add state or province','Mac','::1',NULL),
	(194,'2017-02-21 09:10:50','1','add state or province','load form add state or province','Mac','::1',NULL),
	(195,'2017-02-21 09:11:48','1','list state or province','load list state or province','Mac','::1',NULL),
	(196,'2017-02-21 09:12:10','1','add state or province','load form add state or province','Mac','::1',NULL),
	(197,'2017-02-21 09:13:34','1','list state or province','load list state or province','Mac','::1',NULL),
	(198,'2017-02-21 09:14:00','1','add state or province','load form add state or province','Mac','::1',NULL),
	(199,'2017-02-21 09:14:11','1','list state or province','load list state or province','Mac','::1',NULL),
	(200,'2017-02-21 09:14:25','1','add state or province','load form add state or province','Mac','::1',NULL),
	(201,'2017-02-21 09:14:27','1','list state or province','load list state or province','Mac','::1',NULL),
	(202,'2017-02-21 10:11:08','1','edit state or province','load form edit state','Mac','::1',NULL),
	(203,'2017-02-21 10:14:42','1','edit state or province','load form edit state','Mac','::1',NULL),
	(204,'2017-02-21 10:15:16','1','edit state or province','load form edit state','Mac','::1',NULL),
	(205,'2017-02-21 10:17:00','1','AWB Number','list awb number','Mac','::1',NULL),
	(206,'2017-02-21 10:17:18','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(207,'2017-02-21 19:17:49',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(208,'2017-02-21 21:25:15',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(209,'2017-02-22 15:20:16',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(210,'2017-02-22 16:19:19','1','add country','load form add country','Mac','::1',NULL),
	(211,'2017-02-22 16:20:08','1','add country','load form add country','Mac','::1',NULL),
	(212,'2017-02-22 16:20:55','1','add country','load form add country','Mac','::1',NULL),
	(213,'2017-02-22 16:21:55','1','add country','load form add country','Mac','::1',NULL),
	(214,'2017-02-22 16:26:45','1','add country','load form add country','Mac','::1',NULL),
	(215,'2017-02-22 20:34:40',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(216,'2017-02-22 21:33:05','1','add country','load form add country','Mac','::1',NULL),
	(217,'2017-02-22 21:33:15','1','list state or province','load list state or province','Mac','::1',NULL),
	(218,'2017-02-22 21:35:29','1','add state or province','load form add state or province','Mac','::1',NULL),
	(219,'2017-02-22 21:35:34','1','add country','load form add country','Mac','::1',NULL),
	(220,'2017-02-22 21:35:35','1','list country','list country','Mac','::1',NULL),
	(221,'2017-02-22 21:36:04','1','add country','load form add country','Mac','::1',NULL),
	(222,'2017-02-22 21:36:13','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(223,'2017-02-22 21:36:14','1','AWB Number','list awb number','Mac','::1',NULL),
	(224,'2017-02-22 21:37:05','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(225,'2017-02-22 21:40:57','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(226,'2017-02-22 21:49:52','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(227,'2017-02-22 21:49:56','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(228,'2017-02-22 21:50:06','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(229,'2017-02-23 21:37:54',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(230,'2017-02-23 21:55:54','1','AWB Number','list awb number','Mac','::1',NULL),
	(231,'2017-02-23 21:55:55','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(232,'2017-02-23 21:56:10','1','add country','load form add country','Mac','::1',NULL),
	(233,'2017-02-23 21:56:12','1','list country','list country','Mac','::1',NULL),
	(234,'2017-02-23 21:56:19','1','add state or province','load form add state or province','Mac','::1',NULL),
	(235,'2017-02-23 21:56:28','1','list state or province','load list state or province','Mac','::1',NULL),
	(236,'2017-02-23 21:56:32','1','add city or district','load form add city or district','Mac','::1',NULL),
	(237,'2017-02-23 21:56:34','1','list city or district','load list city or district','Mac','::1',NULL),
	(238,'2017-02-23 21:56:36','1','add city or district','load form add city or district','Mac','::1',NULL),
	(239,'2017-02-24 16:40:14',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(240,'2017-02-24 21:58:29','1','AWB Number','list awb number','Mac','::1',NULL),
	(241,'2017-02-24 21:58:31','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(242,'2017-02-24 21:58:37','1','add country','load form add country','Mac','::1',NULL),
	(243,'2017-02-24 21:58:40','1','list country','list country','Mac','::1',NULL),
	(244,'2017-02-24 21:58:50','1','add country','load form add country','Mac','::1',NULL),
	(245,'2017-02-24 22:01:23','1','add country','load form add country','Mac','::1',NULL),
	(246,'2017-02-24 22:04:25','1','add country','load form add country','Mac','::1',NULL),
	(247,'2017-02-24 22:04:30','1','add country','load form add country','Mac','::1',NULL),
	(248,'2017-02-24 22:04:55','1','list country','list country','Mac','::1',NULL),
	(249,'2017-02-24 22:05:12','1','list state or province','load list state or province','Mac','::1',NULL),
	(250,'2017-02-24 22:17:42','1','list state or province','load list state or province','Mac','::1',NULL),
	(251,'2017-02-24 22:18:26','1','list state or province','load list state or province','Mac','::1',NULL),
	(252,'2017-02-24 22:22:23','1','list state or province','load list state or province','Mac','::1',NULL),
	(253,'2017-02-24 22:22:34','1','add state or province','load form add state or province','Mac','::1',NULL),
	(254,'2017-02-24 22:26:52','1','add state or province','load form add state or province','Mac','::1',NULL),
	(255,'2017-02-24 22:29:07','1','add state or province','load form add state or province','Mac','::1',NULL),
	(256,'2017-02-24 22:29:20','1','add state or province','load form add state or province','Mac','::1',NULL),
	(257,'2017-02-24 22:30:03','1','add state or province','load form add state or province','Mac','::1',NULL),
	(258,'2017-02-24 22:30:08','1','add state or province','load form add state or province','Mac','::1',NULL),
	(259,'2017-02-24 22:30:15','1','add state or province','load form add state or province','Mac','::1',NULL),
	(260,'2017-02-24 22:32:51','1','add state or province','load form add state or province','Mac','::1',NULL),
	(261,'2017-02-24 22:37:58','1','add state or province','load form add state or province','Mac','::1',NULL),
	(262,'2017-02-24 22:38:05','1','list state or province','load list state or province','Mac','::1',NULL),
	(263,'2017-02-24 22:38:07','1','add state or province','load form add state or province','Mac','::1',NULL),
	(264,'2017-02-24 22:38:10','1','AWB Number','list awb number','Mac','::1',NULL),
	(265,'2017-02-24 22:38:14','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(266,'2017-02-24 22:40:09','1','AWB Number','list awb number','Mac','::1',NULL),
	(267,'2017-02-24 22:42:20','1','AWB Number','list awb number','Mac','::1',NULL),
	(268,'2017-02-24 22:43:42','1','AWB Number','list awb number','Mac','::1',NULL),
	(269,'2017-02-24 22:44:03','1','AWB Number','list awb number','Mac','::1',NULL),
	(270,'2017-02-24 22:44:36','1','AWB Number','list awb number','Mac','::1',NULL),
	(271,'2017-02-24 22:44:53','1','add country','load form add country','Mac','::1',NULL),
	(272,'2017-02-24 22:45:31','1','add country','load form add country','Mac','::1',NULL),
	(273,'2017-02-24 22:54:41','1','AWB Number','list awb number','Mac','::1',NULL),
	(274,'2017-02-24 22:54:52','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(275,'2017-02-24 22:55:12','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(276,'2017-02-24 22:57:02','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(277,'2017-02-25 08:48:29',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(278,'2017-02-25 08:54:37','1','AWB Number','list awb number','Mac','::1',NULL),
	(279,'2017-02-25 08:54:46','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(280,'2017-02-25 08:58:51','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(281,'2017-02-25 08:58:58','1','AWB Number','list awb number','Mac','::1',NULL),
	(282,'2017-02-25 08:59:01','1','AWB Number','list awb number','Mac','::1',NULL),
	(283,'2017-02-25 08:59:05','1','AWB Number','list awb number','Mac','::1',NULL),
	(284,'2017-02-25 09:00:26','1','AWB Number','list awb number','Mac','::1',NULL),
	(285,'2017-02-25 09:03:19','1','AWB Number','list awb number','Mac','::1',NULL),
	(286,'2017-02-25 09:04:37','1','AWB Number','list awb number','Mac','::1',NULL),
	(287,'2017-02-25 09:04:45','1','AWB Number','list awb number','Mac','::1',NULL),
	(288,'2017-02-25 09:04:57','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(289,'2017-02-25 09:05:00','1','AWB Number','list awb number','Mac','::1',NULL),
	(290,'2017-02-25 09:10:55','1','AWB Number','list awb number','Mac','::1',NULL),
	(291,'2017-02-25 09:11:04','1','AWB Number','list awb number','Mac','::1',NULL),
	(292,'2017-02-25 09:12:09','1','AWB Number','list awb number','Mac','::1',NULL),
	(293,'2017-02-25 09:15:54','1','AWB Number','list awb number','Mac','::1',NULL),
	(294,'2017-02-25 09:18:52','1','AWB Number','list awb number','Mac','::1',NULL),
	(295,'2017-02-25 09:18:58','1','AWB Number','list awb number','Mac','::1',NULL),
	(296,'2017-02-25 09:19:01','1','AWB Number','list awb number','Mac','::1',NULL),
	(297,'2017-02-25 09:19:06','1','AWB Number','list awb number','Mac','::1',NULL),
	(298,'2017-02-25 09:20:56','1','AWB Number','list awb number','Mac','::1',NULL),
	(299,'2017-02-25 09:23:23','1','AWB Number','list awb number','Mac','::1',NULL),
	(300,'2017-02-25 09:23:38','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(301,'2017-02-25 09:23:44','1','list country','list country','Mac','::1',NULL),
	(302,'2017-02-25 09:29:46','1','add state or province','load form add state or province','Mac','::1',NULL),
	(303,'2017-02-25 09:31:30','1','add state or province','load form add state or province','Mac','::1',NULL),
	(304,'2017-02-25 09:31:48','1','add state or province','load form add state or province','Mac','::1',NULL),
	(305,'2017-02-25 09:33:33','1','add state or province','load form add state or province','Mac','::1',NULL),
	(306,'2017-02-25 09:35:33','1','add state or province','load form add state or province','Mac','::1',NULL),
	(307,'2017-02-25 09:37:06','1','add state or province','load form add state or province','Mac','::1',NULL),
	(308,'2017-02-25 09:37:51','1','add state or province','load form add state or province','Mac','::1',NULL),
	(309,'2017-02-25 09:37:59','1','list state or province','load list state or province','Mac','::1',NULL),
	(310,'2017-02-25 09:38:11','1','add city or district','load form add city or district','Mac','::1',NULL),
	(311,'2017-02-25 09:38:15','1','list city or district','load list city or district','Mac','::1',NULL),
	(312,'2017-02-25 09:38:19','1','edit city or district','load form edit city or district ID:1','Mac','::1',NULL),
	(313,'2017-02-25 09:41:39','1','edit city or district','load form edit city or district ID:1','Mac','::1',NULL),
	(314,'2017-02-25 09:41:54','1','edit city or district','load form edit city or district ID:1','Mac','::1',NULL),
	(315,'2017-02-25 09:43:52','1','edit city or district','load form edit city or district ID:1','Mac','::1',NULL),
	(316,'2017-02-25 09:44:56','1','edit city or district','load form edit city or district ID:1','Mac','::1',NULL),
	(317,'2017-02-25 09:46:08','1','add state or province','load form add state or province','Mac','::1',NULL),
	(318,'2017-02-25 09:48:46','1','add state or province','load form add state or province','Mac','::1',NULL),
	(319,'2017-02-25 09:49:48','1','add state or province','load form add state or province','Mac','::1',NULL),
	(320,'2017-02-25 09:54:07','1','add state or province','load form add state or province','Mac','::1',NULL),
	(321,'2017-02-25 09:54:41','1','add state or province','load form add state or province','Mac','::1',NULL),
	(322,'2017-02-25 09:58:20','1','add state or province','load form add state or province','Mac','::1',NULL),
	(323,'2017-02-25 09:59:47','1','add state or province','load form add state or province','Mac','::1',NULL),
	(324,'2017-02-25 10:01:34','1','add city or district','load form add city or district','Mac','::1',NULL),
	(325,'2017-02-25 10:10:58','1','add city or district','load form add city or district','Mac','::1',NULL),
	(326,'2017-02-25 10:11:03','1','list city or district','load list city or district','Mac','::1',NULL),
	(327,'2017-02-25 10:11:04','1','add city or district','load form add city or district','Mac','::1',NULL),
	(328,'2017-02-25 10:11:24','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(329,'2017-02-25 10:12:19','1','disable awb pool','AWB Pool ID:1 has been disabled','Mac','::1',NULL),
	(330,'2017-02-25 10:12:19','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(331,'2017-02-25 10:35:01','1','enable awb pool','awb and pool ID:1 enable successful','Mac','::1',NULL),
	(332,'2017-02-25 10:35:01','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(333,'2017-02-25 10:35:06','1','AWB Number','list awb number','Mac','::1',NULL),
	(334,'2017-02-25 10:35:11','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(335,'2017-02-25 10:35:20','1','disable awb pool','AWB Pool ID:6 has been disabled','Mac','::1',NULL),
	(336,'2017-02-25 10:35:20','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(337,'2017-02-25 10:35:27','1','AWB Number','list awb number','Mac','::1',NULL),
	(338,'2017-02-25 10:38:37','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(339,'2017-02-25 10:38:55','1','enable awb pool','awb and pool ID:6 enable successful','Mac','::1',NULL),
	(340,'2017-02-25 10:38:55','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(341,'2017-02-25 10:38:57','1','AWB Number','list awb number','Mac','::1',NULL),
	(342,'2017-02-25 11:41:05','1','AWB Number','list awb number','Mac','::1',NULL),
	(343,'2017-02-25 11:41:11','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(344,'2017-02-25 12:03:45','1','AWB Number','list awb number','Mac','::1',NULL),
	(345,'2017-02-25 12:03:48','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(346,'2017-02-25 12:03:51','1','add country','load form add country','Mac','::1',NULL),
	(347,'2017-02-25 12:03:53','1','list country','list country','Mac','::1',NULL),
	(348,'2017-02-25 12:03:57','1','add state or province','load form add state or province','Mac','::1',NULL),
	(349,'2017-02-25 12:04:01','1','list state or province','load list state or province','Mac','::1',NULL),
	(350,'2017-02-25 12:04:04','1','add city or district','load form add city or district','Mac','::1',NULL),
	(351,'2017-02-25 12:04:06','1','list city or district','load list city or district','Mac','::1',NULL),
	(352,'2017-02-25 14:09:38','1','AWB Number','list awb number','Mac','::1',NULL),
	(353,'2017-02-25 14:10:11','1','list country','list country','Mac','::1',NULL),
	(354,'2017-02-25 14:10:49','1','AWB Number','list awb number','Mac','::1',NULL),
	(355,'2017-02-25 14:10:52','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(356,'2017-02-25 20:25:36',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(357,'2017-02-25 20:26:01',NULL,'logout','logged out by ','Mac','::1',NULL),
	(358,'2017-02-25 20:26:24',NULL,'verify_login','user test1@cla.com is not existed.','Mac','::1',NULL),
	(359,'2017-02-25 20:26:45',NULL,'verify_login','log in successful with user.test1@test.com','Mac','::1',NULL),
	(360,'2017-02-25 20:34:24',NULL,'verify_login','form validation fail','Mac','::1',NULL),
	(361,'2017-02-25 20:35:35',NULL,'verify_login','form validation fail','Mac','::1',NULL),
	(362,'2017-02-25 20:35:46',NULL,'verify_login','form validation fail','Mac','::1',NULL),
	(363,'2017-02-25 20:36:54',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(364,'2017-02-26 10:07:58',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(365,'2017-02-26 17:58:06','1','AWB Number','list awb number','Mac','::1',NULL),
	(366,'2017-02-26 17:58:24','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(367,'2017-02-26 17:58:55','1','AWB Number','list awb number','Mac','::1',NULL),
	(368,'2017-02-26 17:59:12','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(369,'2017-02-26 17:59:19','1','disable awb pool','AWB Pool ID:1 has been disabled','Mac','::1',NULL),
	(370,'2017-02-26 17:59:19','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(371,'2017-02-26 17:59:25','1','AWB Number','list awb number','Mac','::1',NULL),
	(372,'2017-02-26 17:59:33','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(373,'2017-02-26 17:59:38','1','AWB Number','list awb number','Mac','::1',NULL),
	(374,'2017-02-26 17:59:41','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(375,'2017-02-26 17:59:45','1','enable awb pool','awb and pool ID:1 enable successful','Mac','::1',NULL),
	(376,'2017-02-26 17:59:45','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(377,'2017-02-26 17:59:47','1','AWB Number','list awb number','Mac','::1',NULL),
	(378,'2017-02-26 18:00:14','1','AWB Pool','list awb pool','Mac','::1',NULL),
	(379,'2017-02-26 21:24:23',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(380,'2017-02-27 19:58:28',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(381,'2017-02-27 22:19:11',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(382,'2017-02-28 15:21:52',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL),
	(383,'2017-03-04 15:41:18',NULL,'verify_login','log in successful with admin@cla.com','Mac','::1',NULL);

/*!40000 ALTER TABLE `system_log_01_tbl_logs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table system_user_01_tbl_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `system_user_01_tbl_users`;

CREATE TABLE `system_user_01_tbl_users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(50) DEFAULT NULL,
  `user_first_name` varchar(250) DEFAULT NULL,
  `user_last_name` varchar(250) DEFAULT NULL,
  `user_display_name` varchar(250) DEFAULT NULL,
  `user_phone_number` varchar(250) DEFAULT NULL,
  `user_position` varchar(250) DEFAULT NULL,
  `user_email` varchar(250) NOT NULL DEFAULT '',
  `user_password` varchar(250) DEFAULT NULL,
  `user_profile_picture` varchar(250) DEFAULT NULL,
  `user_gid` int(11) DEFAULT NULL COMMENT 'fk to system_user_02_tbl_group',
  `user_is_enabled` tinyint(1) DEFAULT '1',
  `user_encrypted_id` varchar(250) DEFAULT NULL,
  `user_change_password_next_login` tinyint(1) DEFAULT '1',
  `customer_company_name` varchar(250) DEFAULT NULL,
  `customer_phone_number` varchar(250) DEFAULT NULL,
  `customer_address` varchar(250) DEFAULT NULL,
  `customer_zip_post_code` varchar(11) DEFAULT NULL,
  `customer_city_id` int(11) DEFAULT NULL COMMENT 'fk to location_03_tbl_city_district',
  `customer_state_id` int(11) DEFAULT NULL COMMENT 'fk to location_02_tbl_state_province',
  `customer_country_id` int(11) DEFAULT NULL COMMENT 'fk to location_01_tbl_country',
  `customer_federal_tax_number` varchar(50) DEFAULT NULL,
  `customer_federal_tax_type_id` int(11) DEFAULT NULL COMMENT 'fk to payment_03_tbl_federal_tax_type',
  `customer_ie_rg` varchar(50) DEFAULT NULL,
  `customer_vat_gst` varchar(50) DEFAULT NULL,
  `customer_type_id` int(11) DEFAULT NULL COMMENT 'fk to customer_01_tbl_customer_type',
  `customer_is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `system_user_01_tbl_users` WRITE;
/*!40000 ALTER TABLE `system_user_01_tbl_users` DISABLE KEYS */;

INSERT INTO `system_user_01_tbl_users` (`user_id`, `customer_id`, `user_first_name`, `user_last_name`, `user_display_name`, `user_phone_number`, `user_position`, `user_email`, `user_password`, `user_profile_picture`, `user_gid`, `user_is_enabled`, `user_encrypted_id`, `user_change_password_next_login`, `customer_company_name`, `customer_phone_number`, `customer_address`, `customer_zip_post_code`, `customer_city_id`, `customer_state_id`, `customer_country_id`, `customer_federal_tax_number`, `customer_federal_tax_type_id`, `customer_ie_rg`, `customer_vat_gst`, `customer_type_id`, `customer_is_deleted`)
VALUES
	(1,NULL,'System','Admin','Administrator',NULL,'System Admin','admin@cla.com','123','resources/AdminLTE/img/user2-160x160.jpg',1,1,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(2,'CLA-VIP-000000001','user','test1','Test1',NULL,'Supply Chain','user.test1@test.com','123',NULL,2,0,NULL,0,'Test','098756658','#39,str.abc','ZPC-001',70,1,2,'FTN-001',1,'IE-RG-001','VAT-001',1,0),
	(3,'CLA-VIP-000000002','user','test2','Test2',NULL,'Supply Chain','user.test2@test.com','123',NULL,2,0,NULL,0,'Test','05764887098','#725,str.8466','ZPC-002',79,2,2,'FTN-002',2,'IE-RG-002','VAT-002',1,0);

/*!40000 ALTER TABLE `system_user_01_tbl_users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table system_user_02_tbl_group
# ------------------------------------------------------------

DROP TABLE IF EXISTS `system_user_02_tbl_group`;

CREATE TABLE `system_user_02_tbl_group` (
  `group_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(250) DEFAULT NULL,
  `group_decription` varchar(250) DEFAULT NULL,
  `group_is_enabled` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `system_user_02_tbl_group` WRITE;
/*!40000 ALTER TABLE `system_user_02_tbl_group` DISABLE KEYS */;

INSERT INTO `system_user_02_tbl_group` (`group_id`, `group_name`, `group_decription`, `group_is_enabled`)
VALUES
	(1,'System Administrator',NULL,1);

/*!40000 ALTER TABLE `system_user_02_tbl_group` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

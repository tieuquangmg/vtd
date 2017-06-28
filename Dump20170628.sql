CREATE DATABASE  IF NOT EXISTS `vtd` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `vtd`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: vtd
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `absence`
--

DROP TABLE IF EXISTS `absence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `absence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `days` int(11) NOT NULL,
  `user_approval_id` int(11) NOT NULL DEFAULT '0',
  `absence_status_id` int(2) NOT NULL DEFAULT '0',
  `user_note` text COLLATE utf8mb4_unicode_ci,
  `approval_note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `absence`
--

LOCK TABLES `absence` WRITE;
/*!40000 ALTER TABLE `absence` DISABLE KEYS */;
INSERT INTO `absence` VALUES (9,7,'2017-06-29',11,0,2,'sdasdasd',NULL,'2017-06-27 17:59:14','2017-06-27 18:21:56',NULL),(8,7,'2017-06-01',2,0,1,'efsdfsdf',NULL,'2017-06-26 17:22:21','2017-06-26 17:22:21',NULL);
/*!40000 ALTER TABLE `absence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `absence_status`
--

DROP TABLE IF EXISTS `absence_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `absence_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `absence_status_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `absence_status`
--

LOCK TABLES `absence_status` WRITE;
/*!40000 ALTER TABLE `absence_status` DISABLE KEYS */;
INSERT INTO `absence_status` VALUES (1,'Chưa duyệt','2017-05-27 10:26:24','2017-05-27 10:26:24',NULL),(2,'Đã duyệt','2017-05-27 10:26:36','2017-05-27 10:26:36',NULL),(3,'Không chấp nhận','2017-05-27 10:49:36','2017-05-27 10:49:36',NULL);
/*!40000 ALTER TABLE `absence_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `absence_type`
--

DROP TABLE IF EXISTS `absence_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `absence_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `absence_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `total` int(11) NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `absence_type`
--

LOCK TABLES `absence_type` WRITE;
/*!40000 ALTER TABLE `absence_type` DISABLE KEYS */;
INSERT INTO `absence_type` VALUES (1,'Nghỉ ốm','2017-05-27 10:00:46',20,'2017-06-26 15:05:55',NULL),(2,'Nghỉ lễ','2017-05-27 10:00:58',10,'2017-06-26 14:59:05',NULL);
/*!40000 ALTER TABLE `absence_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banks`
--

LOCK TABLES `banks` WRITE;
/*!40000 ALTER TABLE `banks` DISABLE KEYS */;
INSERT INTO `banks` VALUES (1,'VietComBank',NULL,NULL,NULL),(2,'TechComBank',NULL,NULL,NULL);
/*!40000 ALTER TABLE `banks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `device`
--

DROP TABLE IF EXISTS `device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `device` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_money` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_guarantee_end` datetime NOT NULL,
  `date_inventory` datetime NOT NULL,
  `date_buy` datetime NOT NULL,
  `device_status_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device`
--

LOCK TABLES `device` WRITE;
/*!40000 ALTER TABLE `device` DISABLE KEYS */;
INSERT INTO `device` VALUES (1,'macpro2012','macbook Pro',20000000,2,'2015-10-28 00:00:00','2016-11-30 00:00:00','2018-02-28 00:00:00',1,'2017-05-24 03:29:15',NULL,'2017-05-24 03:29:15',NULL),(2,'macpro2012','macbook Pro',20000000,1,'2015-10-28 00:00:00','2016-11-30 00:00:00','2018-02-28 00:00:00',1,'2017-05-24 03:29:39',NULL,'2017-05-24 03:29:39',NULL),(3,'34534534534','sssssssssssssssssssssssssssssssssss',344,1,'2017-10-05 12:37:32','2019-03-11 12:37:32','2019-01-05 12:37:32',2,'2017-05-25 09:25:41',2,'2017-06-15 05:37:32',NULL);
/*!40000 ALTER TABLE `device` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `device_brand`
--

DROP TABLE IF EXISTS `device_brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `device_brand` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device_brand`
--

LOCK TABLES `device_brand` WRITE;
/*!40000 ALTER TABLE `device_brand` DISABLE KEYS */;
/*!40000 ALTER TABLE `device_brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `device_status`
--

DROP TABLE IF EXISTS `device_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `device_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device_status`
--

LOCK TABLES `device_status` WRITE;
/*!40000 ALTER TABLE `device_status` DISABLE KEYS */;
INSERT INTO `device_status` VALUES (1,'Đang hoạt động','2017-05-24 03:15:06','2017-05-24 03:15:06',NULL),(2,'Hỏng','2017-05-24 03:15:18','2017-05-24 03:15:18',NULL);
/*!40000 ALTER TABLE `device_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `device_supplier`
--

DROP TABLE IF EXISTS `device_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `device_supplier` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device_supplier`
--

LOCK TABLES `device_supplier` WRITE;
/*!40000 ALTER TABLE `device_supplier` DISABLE KEYS */;
INSERT INTO `device_supplier` VALUES (1,'Hà nội computer','0123456789',NULL,NULL,'0000-00-00'),(2,'Mai Hoàng','0123455654',NULL,NULL,'0000-00-00');
/*!40000 ALTER TABLE `device_supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doccument_serve`
--

DROP TABLE IF EXISTS `doccument_serve`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doccument_serve` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doccument_serve`
--

LOCK TABLES `doccument_serve` WRITE;
/*!40000 ALTER TABLE `doccument_serve` DISABLE KEYS */;
/*!40000 ALTER TABLE `doccument_serve` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doccuments`
--

DROP TABLE IF EXISTS `doccuments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doccuments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doccuments`
--

LOCK TABLES `doccuments` WRITE;
/*!40000 ALTER TABLE `doccuments` DISABLE KEYS */;
INSERT INTO `doccuments` VALUES (1,'tai lieu 1','https://translate.google.com/','google','2017-06-15 05:49:53','2017-06-15 05:49:53',NULL);
/*!40000 ALTER TABLE `doccuments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_to_user`
--

DROP TABLE IF EXISTS `email_to_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_to_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_to_user`
--

LOCK TABLES `email_to_user` WRITE;
/*!40000 ALTER TABLE `email_to_user` DISABLE KEYS */;
INSERT INTO `email_to_user` VALUES (136,63,1,1),(137,63,2,1),(138,63,3,0),(139,63,4,0),(140,64,1,1),(141,64,2,1),(142,64,3,0),(143,64,4,0);
/*!40000 ALTER TABLE `email_to_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` int(11) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_05_23_130054_create_user_employee_type_table',2),(4,'2017_05_23_130519_create_user_rank_table',2),(5,'2017_05_23_130601_create_user_status__table',2),(6,'2017_05_23_143421_create_device_table',2),(7,'2017_05_23_145520_create_device_status_table',2),(8,'2017_05_23_150643_create_server_table',2),(9,'2017_05_23_151015_create_server_status_table',2),(10,'2017_05_23_160854_create_device_brand_table',2),(11,'2017_05_27_101143_create_absence_table',3),(12,'2017_05_27_101346_create_absence_type_table',3),(13,'2017_05_27_101430_create_absence_status_table',3),(14,'2017_05_27_144758_create_user_leave_table',3),(15,'2017_05_27_194937_create_year_table',4),(16,'2017_06_10_212550_laratrust_setup_tables',5),(17,'2015_02_23_161101_create_defender_roles_table',6),(18,'2015_02_23_161102_create_defender_permissions_table',6),(19,'2015_02_23_161103_create_defender_role_user_table',6),(20,'2015_02_23_161104_create_defender_permission_user_table',6),(21,'2015_02_23_161105_create_defender_permission_role_table',6),(22,'2017_06_13_205725_create_banks_table',7),(23,'2017_06_15_121653_create_device_supplier_table',8),(24,'2017_06_15_124006_create_doccuments_table',9),(25,'2017_06_15_125441_create_doccument_serve_table',10),(26,'2017_06_16_091910_create_user_email_table',11),(27,'2017_06_16_121443_create_email_to_user_table',11),(28,'2017_06_17_190642_create_jobs_table',12);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_group`
--

DROP TABLE IF EXISTS `permission_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_group` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_group`
--

LOCK TABLES `permission_group` WRITE;
/*!40000 ALTER TABLE `permission_group` DISABLE KEYS */;
INSERT INTO `permission_group` VALUES (1,'Người dùng'),(2,'Tài liệu');
/*!40000 ALTER TABLE `permission_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `value` tinyint(4) NOT NULL DEFAULT '-1',
  `expires` timestamp NULL DEFAULT NULL,
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1,-1,NULL),(4,1,-1,NULL),(2,1,-1,NULL),(3,1,-1,NULL),(4,2,-1,NULL),(4,3,-1,NULL),(4,4,-1,NULL);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_user` (
  `user_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  `value` tinyint(4) NOT NULL DEFAULT '-1',
  `expires` timestamp NULL DEFAULT NULL,
  KEY `permission_user_user_id_index` (`user_id`),
  KEY `permission_user_permission_id_index` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_user`
--

LOCK TABLES `permission_user` WRITE;
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
INSERT INTO `permission_user` VALUES (3,1,0,NULL),(3,2,0,NULL),(1,1,1,NULL),(1,2,1,NULL),(2,1,0,NULL),(2,2,0,NULL),(5,1,0,NULL),(5,2,0,NULL),(1,3,1,NULL),(1,4,1,NULL),(2,3,0,NULL),(2,4,1,NULL),(3,3,0,NULL),(3,4,1,NULL),(4,1,0,NULL),(4,2,0,NULL),(4,3,0,NULL),(4,4,1,NULL);
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `readable_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'users.create','Thêm tài khoản mới',1,'2017-06-11 11:37:51','2017-06-11 11:37:51'),(2,'users.destroy','Xóa tài khoản',1,'2017-06-11 11:37:58','2017-06-11 11:37:58'),(3,'users.edit','Sủa thông tin tài khoản',1,'2017-06-11 11:37:58','2017-06-11 11:37:58'),(4,'users.view','Xem thông tin tài khoản',1,'2017-06-11 11:37:58','2017-06-11 11:37:58'),(5,'doccument.create','Thêm tài liệu',2,NULL,NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  KEY `role_user_user_id_index` (`user_id`),
  KEY `role_user_role_id_index` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (5,1),(5,2),(1,1),(3,2),(2,2),(4,2),(3,3),(3,4),(6,1),(6,2),(6,3),(6,4),(7,4),(7,2),(7,3);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Admin','2017-06-11 11:36:11','2017-06-11 11:36:11'),(2,'member','Nhân viên','2017-06-11 17:32:57','2017-06-11 17:32:57'),(3,'samurai','Samurai','2017-06-11 17:32:57','2017-06-11 17:32:57'),(4,'ninja','Ninja','2017-06-11 17:32:57','2017-06-11 17:32:57');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `server`
--

DROP TABLE IF EXISTS `server`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `server` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `server_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `server_first_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `server_second_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `server_ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `server_expire_day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `server_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `server`
--

LOCK TABLES `server` WRITE;
/*!40000 ALTER TABLE `server` DISABLE KEYS */;
/*!40000 ALTER TABLE `server` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `server_status`
--

DROP TABLE IF EXISTS `server_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `server_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `server_status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `server_status`
--

LOCK TABLES `server_status` WRITE;
/*!40000 ALTER TABLE `server_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `server_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_email`
--

DROP TABLE IF EXISTS `user_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_email` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `email_to_user_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_email`
--

LOCK TABLES `user_email` WRITE;
/*!40000 ALTER TABLE `user_email` DISABLE KEYS */;
INSERT INTO `user_email` VALUES (63,3,NULL,'<p>asdasdasdasdasdasdasdasdasd</p>',1,'2017-06-25 16:59:36','2017-06-25 16:59:36'),(64,3,NULL,'<p>ssdasd</p>',1,'2017-06-25 17:08:09','2017-06-25 17:08:09');
/*!40000 ALTER TABLE `user_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_employee_type`
--

DROP TABLE IF EXISTS `user_employee_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_employee_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_employee_type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_employee_type`
--

LOCK TABLES `user_employee_type` WRITE;
/*!40000 ALTER TABLE `user_employee_type` DISABLE KEYS */;
INSERT INTO `user_employee_type` VALUES (1,'Chính thức','2017-05-23 10:47:40','2017-05-23 10:47:40',NULL),(3,'PartTime','2017-05-24 03:19:42','2017-05-24 03:19:42',NULL);
/*!40000 ALTER TABLE `user_employee_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_leave`
--

DROP TABLE IF EXISTS `user_leave`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_leave` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `absence_type_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `total_leave` int(11) NOT NULL,
  `taken_leave` int(11) NOT NULL,
  `balance_leave` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_leave`
--

LOCK TABLES `user_leave` WRITE;
/*!40000 ALTER TABLE `user_leave` DISABLE KEYS */;
INSERT INTO `user_leave` VALUES (38,6,2,1,11,0,10,'2017-06-26 17:16:01','2017-06-26 17:16:01'),(37,6,1,1,22,0,20,'2017-06-26 17:16:01','2017-06-26 17:16:01'),(36,7,2,1,10,0,10,'2017-06-26 16:00:41','2017-06-26 16:00:41'),(35,7,1,1,20,0,20,'2017-06-26 16:00:41','2017-06-26 16:00:41');
/*!40000 ALTER TABLE `user_leave` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_rank`
--

DROP TABLE IF EXISTS `user_rank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_rank` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_rank_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_rank`
--

LOCK TABLES `user_rank` WRITE;
/*!40000 ALTER TABLE `user_rank` DISABLE KEYS */;
INSERT INTO `user_rank` VALUES (1,'Developer','2017-05-24 03:19:56','2017-05-24 03:19:56',NULL);
/*!40000 ALTER TABLE `user_rank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_status`
--

DROP TABLE IF EXISTS `user_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_status`
--

LOCK TABLES `user_status` WRITE;
/*!40000 ALTER TABLE `user_status` DISABLE KEYS */;
INSERT INTO `user_status` VALUES (1,'Đang làm','2017-05-24 03:20:13','2017-05-24 03:20:13',NULL);
/*!40000 ALTER TABLE `user_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `contract_date_end` date DEFAULT NULL,
  `contract_file` text COLLATE utf8mb4_unicode_ci,
  `user_employee_type_id` int(11) NOT NULL DEFAULT '1',
  `user_rank_id` int(11) NOT NULL DEFAULT '1',
  `user_status_id` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `card_id` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_date` date DEFAULT NULL,
  `card_location` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `bank_acc` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_location` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` int(10) DEFAULT NULL,
  `bike_no` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'phan van quang','Superadministrator','$2y$10$smQ6OL.30HizL/Ij3kEJ2useq9PSg8i2mXZ51DLycf8BvjRLYuFHG','tieuquangmg@gmail.com',NULL,NULL,NULL,'2017-06-10','2017-06-01',NULL,1,1,1,NULL,'2017-06-10 14:41:35',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-26 15:59:41','2017-06-26 15:59:41'),(2,'phan van quang','Administrator','$2y$10$o7WlXbdQFkXDq35a0rhCAu81ORrNUs.gUx8dOAtO5EOCAXbRV/5ri','administrator@app.com',NULL,NULL,NULL,'2017-06-10',NULL,NULL,1,1,1,NULL,'2017-06-10 14:41:36',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-26 15:59:45','2017-06-26 15:59:45'),(3,'aaaaaaaaa','quangpv555','$2y$10$xUNhYmd/cGaSFqlz.WxhLu6AtPH6SOLbkBPtiQK/j32zwoh1JwtMm','tieuquangmg@gmail.com',NULL,NULL,NULL,'2017-06-10','2017-06-15',NULL,1,1,1,'MLdRxiEQ2WhZKSZETNa1vForZ2RsoT7oUDWrQ8PndnejYVpl3zelWJWHLHfR','2017-06-10 14:41:36',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,'2017-06-26 15:59:51','2017-06-26 15:59:51'),(4,'phan van quang','Cru User','$2y$10$vpJRHxryjXZF.PGb54WJkuJjHPkiYOla9wUOE4pglefTRib/w5bzC','cruuser@app.com','01665653933',NULL,NULL,'2017-06-10','2017-09-12',NULL,1,1,1,'KQ094z6sP4','2017-06-10 14:41:36',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-26 15:59:56','2017-06-26 15:59:56'),(5,'sdfsdfsdfsdf','sdfgsdfhdgfhfghgfhg','$2y$10$zTMtYlpxHvlsrTIgxNXjUesLFrERTvyyvmb5U3dlg3pWW/REerCCq','dfsdfsdfsdf@cgdf.d',NULL,NULL,NULL,'2017-06-21','2017-06-20',NULL,1,1,1,NULL,'2017-06-11 17:48:29',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-12 05:34:11','2017-06-12 05:34:11'),(6,'admin','casasdasdasdasdasd','$2y$10$DpZzRb77wKfIyl8zp6Zbu.zrBZ4aYgTys9oczNnuae6TDgN5KV.FG','asdasdasd@ddf.dfd',NULL,NULL,NULL,'2017-06-09',NULL,NULL,1,1,1,NULL,'2017-06-26 15:34:21','2017-06-14',NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,'2017-06-26 17:16:00',NULL),(7,'phan vanquang','quangpv','$2y$10$OZy5gGfLnzUTeTB4oeIUFeEYgUJwSI823.OCqUgGe4POi0tsdX4DG','asdasdasd@ddf.dfddfd',NULL,NULL,NULL,'2017-06-14',NULL,NULL,1,1,1,NULL,'2017-06-26 16:00:41',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,'2017-06-27 17:25:46',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `year`
--

DROP TABLE IF EXISTS `year`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `year` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` int(11) NOT NULL,
  `year_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `year`
--

LOCK TABLES `year` WRITE;
/*!40000 ALTER TABLE `year` DISABLE KEYS */;
INSERT INTO `year` VALUES (1,2017,'2017',NULL,'2017-05-28 01:35:36','2017-05-28 01:35:36'),(2,2018,'2018',NULL,'2017-05-28 01:36:53','2017-05-28 01:36:53');
/*!40000 ALTER TABLE `year` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-28  8:39:55

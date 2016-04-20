/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.17 : Database - project_laravel_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`project_laravel_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `project_laravel_db`;

/*Table structure for table `cars` */

DROP TABLE IF EXISTS `cars`;

CREATE TABLE `cars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `make` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) DEFAULT '0',
  `car_summary` varchar(250) COLLATE utf8_unicode_ci DEFAULT 'summary',
  `car_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `cars` */

insert  into `cars`(`id`,`make`,`price`,`car_summary`,`car_detail`,`model`,`created_at`,`updated_at`) values (15,'My lovely Camary  ssss','2500','<p>Please check detail about my car, my car just bought 2 months.</p>','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>\r\n<p><img src=\"/tinymce/file_manager/source/my%20cars/2016_toyota_camry-pic-3766702507293730940-1600x1200.jpg?1459936173427\" alt=\"2016_toyota_camry-pic-3766702507293730940-1600x1200\" width=\"1001\" height=\"487\" /></p>','','2016-04-06 09:50:19','2016-04-06 11:11:42'),(16,'My lovely Camary','2500','<p>Please check detail about my car, my car just bought 2 months.</p>','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>\r\n<figure class=\"image\"><img src=\"/tinymce/file_manager/source/my%20cars/2016_toyota_camry-pic-3766702507293730940-1600x1200.jpg?1459936173427\" alt=\"2016_toyota_camry-pic-3766702507293730940-1600x1200\" width=\"500\" height=\"243\" />\r\n<figcaption>Good condition and really new for everything</figcaption>\r\n</figure>','','2016-04-06 10:40:57','2016-04-06 10:40:57');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_23_032106_create_cars_table',2);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `tbl_company` */

DROP TABLE IF EXISTS `tbl_company`;

CREATE TABLE `tbl_company` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT '0000-00-00 00:00:00',
  `updated_date` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_company` */

insert  into `tbl_company`(`id`,`name`,`logo`,`location`,`description`,`created_date`,`updated_date`) values (1,'KHMERDEV(Co,ltd)',NULL,'Phnom Penh',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'KDD',NULL,'Phnom Penh',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `tbl_position` */

DROP TABLE IF EXISTS `tbl_position`;

CREATE TABLE `tbl_position` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT '0000-00-00 00:00:00',
  `updated_date` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_position` */

insert  into `tbl_position`(`id`,`name`,`description`,`created_date`,`updated_date`) values (1,'Productioin Manager',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Project Manager',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Senior Developer',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'Developer',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'Trainnee',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `tbl_staff` */

DROP TABLE IF EXISTS `tbl_staff`;

CREATE TABLE `tbl_staff` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `team_id` int(10) unsigned DEFAULT NULL,
  `position_id` int(10) unsigned DEFAULT NULL,
  `started_date` date DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pob` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `team_id` (`team_id`) USING BTREE,
  KEY `position_id` (`position_id`),
  CONSTRAINT `tbl_staff_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `tbl_position` (`id`),
  CONSTRAINT `tbl_staff_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `tbl_team` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_staff` */

insert  into `tbl_staff`(`id`,`fname`,`lname`,`username`,`team_id`,`position_id`,`started_date`,`dob`,`pob`,`description`,`email`,`phone`) values (1,'HOM','KIMHIM','h.kimhim',1,2,'2015-12-17','1990-11-21','Prey Veng',NULL,'kimhim.hom@gmail.com','093240717');

/*Table structure for table `tbl_team` */

DROP TABLE IF EXISTS `tbl_team`;

CREATE TABLE `tbl_team` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `company_id` int(10) unsigned DEFAULT NULL,
  `created_date` datetime DEFAULT '0000-00-00 00:00:00',
  `updated_date` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`),
  CONSTRAINT `tbl_team_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `tbl_company` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_team` */

insert  into `tbl_team`(`id`,`name`,`company_id`,`created_date`,`updated_date`) values (1,'Barcelona',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Lyon',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

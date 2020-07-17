/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.11-MariaDB : Database - signal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`signal` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `signal`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `member_request` */

DROP TABLE IF EXISTS `member_request`;

CREATE TABLE `member_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `currency_request` varchar(50) DEFAULT NULL,
  `currency_open` smallint(6) DEFAULT 0,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4;

/*Data for the table `member_request` */

insert  into `member_request`(`id`,`user_id`,`currency_request`,`currency_open`,`create_at`,`update_at`) values (73,4,'USDJPN',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(74,4,'GBPUSD',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(75,4,'XAUUSD',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(76,4,'EURUSD',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(77,4,'AUDUSD',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(78,1,'AUDUSD',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(79,1,'XAUUSD',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(80,1,'GBPUSD',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(81,1,'USDJPN',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(82,4,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `members` */

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `member_role` smallint(2) DEFAULT NULL,
  `member_image` varchar(1000) DEFAULT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `telephone` varchar(14) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `country` varchar(25) DEFAULT NULL,
  `postal_code` int(10) DEFAULT NULL,
  `about_me` varchar(500) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `members` */

insert  into `members`(`id`,`user_id`,`member_role`,`member_image`,`first_name`,`last_name`,`telephone`,`address`,`city`,`country`,`postal_code`,`about_me`,`create_at`,`update_at`) values (1,1,1,'https://images.unsplash.com/profile-1562879881254-56eb37673331?dpr=1&auto=format&fit=crop&w=64&h=64&q=60&crop=faces&bg=fff',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-17 16:04:23','2020-03-17 16:04:26'),(2,4,1,'https://images.unsplash.com/profile-1562879881254-56eb37673331?dpr=1&auto=format&fit=crop&w=64&h=64&q=60&crop=faces&bg=fff',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-17 17:35:14','2020-03-17 17:35:16');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2019_08_19_000000_create_failed_jobs_table',1);

/*Table structure for table `signal` */

DROP TABLE IF EXISTS `signal`;

CREATE TABLE `signal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `buy_sell` varchar(25) NOT NULL,
  `buy_sell_number` varchar(25) NOT NULL,
  `currency_name` varchar(50) NOT NULL,
  `take_profile` int(50) NOT NULL,
  `stop_lost` int(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `description` longtext DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `view_premium` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

/*Data for the table `signal` */

insert  into `signal`(`id`,`buy_sell`,`buy_sell_number`,`currency_name`,`take_profile`,`stop_lost`,`date_time`,`description`,`status`,`view_premium`,`updated_at`,`created_at`) values (8,'sell','345345','AUDUSD',3453,345,'03/11/2020 4:37 PM','34545',1,0,'2020-03-11 09:37:43','2020-03-11 09:37:43'),(9,'sell','345345','AUDUSD',3453,345,'03/11/2020 4:37 PM',NULL,1,0,'2020-03-11 09:37:43','2020-03-11 09:37:43'),(10,'buy','234234','AUDUSD',234234,254345,'03/11/2020 4:30 AM','asxcasx',2,0,'2020-03-11 09:41:13','2020-03-11 09:41:13'),(11,'buy','234234','AUDUSD',234234,254345,'03/11/2020 4:30 AM',NULL,1,1,'2020-03-11 09:41:13','2020-03-11 09:41:13'),(12,'buy','234','AUDUSD',234,234,'03/25/2020 4:41 PM','234',1,3,'2020-03-11 09:41:43','2020-03-11 09:41:43'),(15,'BUY','354345','XAUUSD',5345345,34534,'03/17/2020 10:28 AM','asx',1,0,'2020-03-17 03:28:08','2020-03-17 03:28:08'),(16,'BUY','354345','XAUUSD',5345345,34534,'03/17/2020 10:28 AM',NULL,1,0,'2020-03-17 03:28:08','2020-03-17 03:28:08'),(17,'BUY','354345','XAUUSD',34534,5345345,'03/17/2020 10:37 AM','<p>ef sdcsd <strong>sdcsdc</strong></p>',1,0,'2020-03-17 03:37:42','2020-03-17 03:37:42'),(18,'BUY','354345','XAUUSD',34534,5345345,'03/17/2020 10:37 AM',NULL,1,0,'2020-03-17 03:37:42','2020-03-17 03:37:42'),(19,'BUY','43234','EURUSD',234,456345,'03/17/2020 11:32 AM','<p>aksjnx&nbsp;</p><p>alsxnalskxmnlaskmxasx as;xm lskmxcl mlasxmalsx alsxnmasjklx</p><p>&nbsp;</p><figure class=\"image\"><img src=\"https://images.unsplash.com/photo-1558980664-2506fca6bfc2?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;w=1000&amp;q=80\" alt=\"parked black motorcycle\"></figure><p>kasnbkxjasnxkjasx</p><figure class=\"image\"><img src=\"https://images.unsplash.com/photo-1584277261846-c6a1672ed979?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;w=1000&amp;q=80\" alt=\"man in blue and white striped long sleeve shirt standing beside man in black framed eyeglasses\"></figure>',2,1,'2020-03-17 04:33:10','2020-03-17 04:33:10'),(20,'BUY','43234','EURUSD',234,456345,'03/17/2020 11:32 AM',NULL,2,1,'2020-03-17 04:33:10','2020-03-17 04:33:10'),(21,'SELL','34534','GBPUSD',345,234,'03/26/2020 11:35 AM','<p>asxas asxasx sxasx</p>',1,0,'2020-03-17 04:35:53','2020-03-17 04:35:53'),(22,'SELL','34534','GBPUSD',345,234,'03/26/2020 11:35 AM',NULL,1,1,'2020-03-17 04:35:53','2020-03-17 04:35:53'),(23,'BUY','234','XAUUSD',234,2,'03/17/2020 11:36 AM','<p>sdcs sdcs dc</p>',1,0,'2020-03-17 04:36:43','2020-03-17 04:36:43'),(24,'BUY','234','XAUUSD',234,2,'03/17/2020 11:36 AM',NULL,1,0,'2020-03-17 04:36:43','2020-03-17 04:36:43'),(25,'BUY','23423','XAUUSD',4545,234,'03/24/2020 11:38 AM','sdc sdcsd',1,0,'2020-03-17 04:38:32','2020-03-17 04:38:32'),(26,'BUY','23423','XAUUSD',4545,234,'03/24/2020 11:38 AM',NULL,1,0,'2020-03-17 04:38:32','2020-03-17 04:38:32'),(27,'BUY','345.345','XAUUSD',4454,23,'03/17/2020 11:43 AM','<p>asxasx asx&nbsp;</p><figure class=\"image\"><img src=\"https://images.unsplash.com/photo-1558980664-2506fca6bfc2?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;w=1000&amp;q=80\" alt=\"parked black motorcycle\"><figcaption>Ini gambar unplessss</figcaption></figure>',2,0,'2020-03-17 04:44:55','2020-03-17 04:44:55'),(28,'BUY','345.345','XAUUSD',4454,23,'03/17/2020 11:43 AM',NULL,2,0,'2020-03-17 04:44:55','2020-03-17 04:44:55'),(29,'BUY','234','GBPUSD',345,232,'03/17/2020 11:47 AM','<p>sdc sdc sdcs sdc</p><figure class=\"image\"><img src=\"https://images.unsplash.com/photo-1558980664-2506fca6bfc2?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;w=1000&amp;q=80\" alt=\"parked black motorcycle\"></figure>',1,2,'2020-03-17 04:47:40','2020-03-17 04:47:40'),(30,'BUY','234','GBPUSD',345,232,'03/17/2020 11:47 AM',NULL,1,0,'2020-03-17 04:47:40','2020-03-17 04:47:40'),(31,'BUY','234','XAUUSD',43234,23434,'03/19/2020 11:48 AM','<p>scsd scs&nbsp;</p><figure class=\"image\"><img src=\"https://images.unsplash.com/photo-1558980664-2506fca6bfc2?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;w=1000&amp;q=80\" alt=\"parked black motorcycle\"></figure>',1,0,'2020-03-17 04:48:25','2020-03-17 04:48:25'),(32,'BUY','234','XAUUSD',43234,23434,'03/19/2020 11:48 AM',NULL,1,3,'2020-03-17 04:48:25','2020-03-17 04:48:25'),(33,'BUY','234','GBPUSD',45423,234,'03/17/2020 11:50 AM','<p>asxa asxa asxa</p><figure class=\"image\"><img src=\"https://images.unsplash.com/photo-1558980664-2506fca6bfc2?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;w=1000&amp;q=80\" alt=\"parked black motorcycle\"><figcaption>qwsasx asxa</figcaption></figure>',1,0,'2020-03-17 04:50:03','2020-03-17 04:50:03'),(34,'BUY','234234','XAUUSD',345,34,'03/18/2020 11:54 AM','<p>csdcs sdcsdc&nbsp;</p><figure class=\"image\"><img src=\"https://images.unsplash.com/photo-1581094021370-0e3fa7633cc3?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;w=1000&amp;q=80\" alt=\"woman in red and white floral dress holding white round plate\"></figure>',1,1,'2020-03-17 04:55:23','2020-03-17 04:55:23'),(35,'SELL','234','GBPUSD',23,234,'03/17/2020 11:58 AM','<figure class=\"image image-style-align-left\"><img src=\"https://images.unsplash.com/photo-1584277261846-c6a1672ed979?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;w=1000&amp;q=80\" alt=\"man in blue and white striped long sleeve shirt standing beside man in black framed eyeglasses\"><figcaption>sdc sdcsdc</figcaption></figure><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>asxasxasx</p><p>&nbsp;</p><p>&nbsp;</p>',1,1,'2020-03-17 04:59:45','2020-03-17 04:59:45'),(36,'BUY','345','GBPUSD',2334,234,'03/17/2020 1:07 PM','<p>asxas asx</p><figure class=\"image\"><img src=\"https://images.unsplash.com/photo-1558981000-f294a6ed32b2?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;w=1000&amp;q=80\" alt=\"black and gray cruiser motorcycle\"></figure>',1,3,'2020-03-17 06:07:11','2020-03-17 06:07:11'),(38,'BUY','234','GBPUSD',345,5345,'03/17/2020 2:19 PM','<p>acasx asxasx</p><p>&nbsp;</p><figure class=\"image image-style-align-left\"><img src=\"https://images.unsplash.com/photo-1584345602351-f8fd5e5a017c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;w=1000&amp;q=80\" alt=\"red car on road during daytime\"></figure>',1,6,'2020-03-17 07:19:28','2020-03-17 07:19:28'),(39,'BUY','345345','USDJPN',354,45645,'03/18/2020 9:12 AM','<p>345453</p>',1,7,'2020-03-18 02:12:29','2020-03-18 02:12:29'),(40,'SELL','222','GBPUSD',222,2222,'03/25/2020 2:00 PM','<p>aqsxasxasx</p><figure class=\"image\"><img src=\"https://www.tutorialrepublic.com/lib/images/font-awesome-icons.png\" alt=\"Font Awesome Icon Classes\"><figcaption>IMagesssssssss</figcaption></figure><p>sdcsdcsd sdc</p><p>scsdcsdcsdcsd sdcsdc</p>',1,0,'2020-03-19 07:04:47','2020-03-19 05:15:45');

/*Table structure for table `signal_member` */

DROP TABLE IF EXISTS `signal_member`;

CREATE TABLE `signal_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `currency_member` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `signal_member` */

insert  into `signal_member`(`id`,`user_id`,`currency_member`,`create_at`,`update_at`) values (2,1,'AUDUSD','2020-03-17 14:31:10','2020-03-17 14:31:13'),(3,1,'EURUSD','2020-03-17 14:31:10','2020-03-17 14:31:13'),(4,1,'USDJPY','2020-03-17 14:31:10','2020-03-17 14:31:13'),(5,1,'XAUUSD','2020-03-17 14:33:25','2020-03-17 14:33:27');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`role`,`created_at`,`updated_at`) values (1,'end','end@gmail.com',NULL,'$2y$10$QDeDU3VPCSB3z64tFwvvB.n8SQ2pRgFk.fetVwIKJIdrOZofs9aUC',NULL,1,'2020-03-10 10:10:56','2020-03-10 10:10:56'),(2,'admin','admin@gmail.com',NULL,'$2y$10$1I9GPtRtJQQ5IkkIw77JsudcW8J23Ox.e.SNzSoZILRnpnA2rZkbe',NULL,2,'2020-03-10 10:21:59','2020-03-10 10:21:59'),(4,'member','member@gmail.com',NULL,'$2y$10$gFxZNRK2m98ZmdYGS6wmNecyXBCfEIJA.2zQjUrFB1cm64MLIlECq',NULL,1,'2020-03-17 11:07:23','2020-03-17 11:07:23');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

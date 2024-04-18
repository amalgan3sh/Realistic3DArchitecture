/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.28-MariaDB : Database - realistic3darchitecture
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`realistic3darchitecture` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `realistic3darchitecture`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `admin` */

insert  into `admin`(`admin_id`,`username`,`password`,`role`) values 
(1,'admin','admin','admin');

/*Table structure for table `architect` */

DROP TABLE IF EXISTS `architect`;

CREATE TABLE `architect` (
  `architecture_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `certification` varchar(20) DEFAULT NULL,
  `portfolio` varchar(4) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'active',
  PRIMARY KEY (`architecture_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `architect` */

insert  into `architect`(`architecture_id`,`first_name`,`last_name`,`email`,`phone`,`certification`,`portfolio`,`username`,`password`,`status`) values 
(1,NULL,NULL,'architect@gmail.com','1234512345',NULL,NULL,'architect','architect','active');

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `pan_number` varchar(15) DEFAULT NULL,
  `gst` varchar(20) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'active',
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `company` */

insert  into `company`(`company_id`,`company_name`,`email`,`phone`,`pan_number`,`gst`,`username`,`password`,`status`) values 
(1,NULL,'company@gmail.com','7894563214',NULL,NULL,'company','company','active');

/*Table structure for table `content` */

DROP TABLE IF EXISTS `content`;

CREATE TABLE `content` (
  `content_id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `content` */

/*Table structure for table `design_model` */

DROP TABLE IF EXISTS `design_model`;

CREATE TABLE `design_model` (
  `design_id` int(11) NOT NULL AUTO_INCREMENT,
  `design_name` varchar(100) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`design_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `design_model` */

insert  into `design_model`(`design_id`,`design_name`,`image`,`project_id`,`type`) values 
(4,'test view','designs/pexels-sebastian-ervi-1763075.jpg',2,NULL),
(5,'test view','designs/pexels-sebastian-ervi-17630751.jpg',2,NULL),
(6,'project id test','designs/Screenshot_(7).png',2,NULL),
(7,'project it test 2','designs/Screenshot_(7)1.png',NULL,NULL),
(8,'project id test 3','designs/pexels-pixabay-46798.jpg',1,NULL),
(9,'ahh','designs/pexels-fu-zhichao-587741.jpg',1,NULL);

/*Table structure for table `designers` */

DROP TABLE IF EXISTS `designers`;

CREATE TABLE `designers` (
  `designer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `certification` varchar(20) DEFAULT NULL,
  `portfolio` varchar(40) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `status` varbinary(10) DEFAULT 'active',
  PRIMARY KEY (`designer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `designers` */

insert  into `designers`(`designer_id`,`first_name`,`last_name`,`email`,`phone`,`certification`,`portfolio`,`username`,`password`,`status`) values 
(1,NULL,NULL,'designer@gmail.com','7898985658',NULL,NULL,'Designer','designer','active');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feedback_id` int(20) DEFAULT NULL,
  `project` varchar(30) DEFAULT NULL,
  `client` varchar(30) DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `comment` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `feedback` */

/*Table structure for table `insights` */

DROP TABLE IF EXISTS `insights`;

CREATE TABLE `insights` (
  `insight_id` int(20) NOT NULL AUTO_INCREMENT,
  `category` varchar(30) DEFAULT NULL,
  `value` varchar(20) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`insight_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `insights` */

/*Table structure for table `portfolio` */

DROP TABLE IF EXISTS `portfolio`;

CREATE TABLE `portfolio` (
  `portfolio_id` int(20) NOT NULL AUTO_INCREMENT,
  `project_details` varchar(20) DEFAULT NULL,
  `skills` varchar(200) DEFAULT NULL,
  `education` varchar(200) DEFAULT NULL,
  `experience` varbinary(200) DEFAULT NULL,
  `certifications` varchar(200) DEFAULT NULL,
  `contact_informations` varchar(20) DEFAULT NULL,
  `biography` varchar(200) DEFAULT NULL,
  `additional_informations` varchar(200) DEFAULT NULL,
  `designer_id` int(11) DEFAULT NULL,
  `architecture_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`portfolio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `portfolio` */

/*Table structure for table `project` */

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project` (
  `project_id` int(20) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(30) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `designer_id` int(11) DEFAULT NULL,
  `architect_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'pending',
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `project` */

insert  into `project`(`project_id`,`project_name`,`description`,`user_id`,`company_id`,`designer_id`,`architect_id`,`status`) values 
(1,'Urban Oasis: Sustainable Commu','Urban Oasis\" is a visionary project aimed at transforming urban spaces into sustainable, vibrant community hubs. This project encompasses the construction of a multi-functional complex designed to serve as a nexus of community engagement, environmental stewardship, and economic vitality',1,1,1,1,'accepted'),
(2,'bakery shop','1000 sqr feet bakery at kalamaserry',1,1,NULL,NULL,'accepted');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`user_id`,`username`,`password`,`phone`,`email`) values 
(1,'user','user','7356529545','user@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

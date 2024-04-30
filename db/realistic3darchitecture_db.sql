/*
SQLyog Community v13.2.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - realistic3darchitecture
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `admin` */

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `architect` */

insert  into `architect`(`architecture_id`,`first_name`,`last_name`,`email`,`phone`,`certification`,`portfolio`,`username`,`password`,`status`) values 
(1,NULL,NULL,'architect@gmail.com','7859898698',NULL,NULL,'Anantha Krishnan','architect','active'),
(2,NULL,NULL,'lijo@gmail.com','12312312',NULL,NULL,'Lijo Jose','lijo','active'),
(3,NULL,NULL,'gouri@gmail.com','1234567812',NULL,NULL,'Gouri','gouri','active'),
(4,NULL,NULL,'amal@gmail.com','7356363635',NULL,NULL,'Amal Neerad','amal','active');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `company` */

insert  into `company`(`company_id`,`company_name`,`email`,`phone`,`pan_number`,`gst`,`username`,`password`,`status`) values 
(1,NULL,'company@gmail.com','7898598589',NULL,NULL,'Horizon Builders','company','active'),
(2,NULL,'company-1@gmail.com','7858986985',NULL,NULL,'SummitCraft Builders','company1','active'),
(3,NULL,'marvel@gmail.com','1234567890',NULL,NULL,'Marvel Builders','marvel','active'),
(4,NULL,'dcbuilders@gmail.com','1234567812',NULL,NULL,'DC builders','dcbuilders','active'),
(5,NULL,'jackandjohn@gmail.com','1234567890',NULL,NULL,'Jack and John Building Co','jackandjohn','active'),
(6,NULL,'jk@gmail.com','1234567890',NULL,NULL,'JK builders','jk123','active');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `design_model` */

insert  into `design_model`(`design_id`,`design_name`,`image`,`project_id`,`type`) values 
(1,'First Draft','designs/IMG_8982_(1).JPG',1,NULL),
(2,'First Draft','designs/IMG_8977.JPG',1,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `designers` */

insert  into `designers`(`designer_id`,`first_name`,`last_name`,`email`,`phone`,`certification`,`portfolio`,`username`,`password`,`status`) values 
(1,NULL,NULL,'designer@gmail.com','7854587898',NULL,NULL,'Lijo Thekkethil','designer','active'),
(2,NULL,NULL,'nivin@gmail.com','123123123',NULL,NULL,'nivin@gmail.com','nivin','active'),
(3,NULL,NULL,'dulquer@gmail.com','1234512345',NULL,NULL,'dulquer','dulquer','active'),
(4,NULL,NULL,'raju@gmail.com','1234123412',NULL,NULL,'Raju','user','active'),
(5,NULL,NULL,'sanjay@gmail.com','1234561234',NULL,NULL,'Sanjay R','sanjay','active');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `portfolio` */

insert  into `portfolio`(`portfolio_id`,`project_details`,`skills`,`education`,`experience`,`certifications`,`contact_informations`,`biography`,`additional_informations`,`designer_id`,`architecture_id`) values 
(1,'rooftop cafe','designing','barc','2 year at x company','designer','1234567890','iam a professional  designer and have 2 year experience at x company','123',1,NULL);

/*Table structure for table `project` */

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project` (
  `project_id` int(20) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(30) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `start_date` varchar(20) DEFAULT NULL,
  `end_date` varchar(20) DEFAULT NULL,
  `budget` varchar(30) DEFAULT NULL,
  `materials_needed` varchar(200) DEFAULT NULL,
  `special_requirments` varchar(300) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `designer_id` int(11) DEFAULT NULL,
  `architect_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'pending',
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `project` */

insert  into `project`(`project_id`,`project_name`,`description`,`location`,`start_date`,`end_date`,`budget`,`materials_needed`,`special_requirments`,`user_id`,`company_id`,`designer_id`,`architect_id`,`status`) values 
(1,'Sunrise Villas','Construction of a residential complex with modern amenities.','123 Main Street, Cityville, State','2024-04-28','2024-11-28','50000000','Bricks, cement, steel rods, glass panels, plumbing fixtures','LEED certification, energy-efficient design, wheelchair accessibility',1,1,1,1,'accepted'),
(2,'rooftop cafe','rooftop cafe at kalamassery','kalamassery','2024-12-12','2025-03-24','800000','furnitures, paints,cement,wood,wire','not yet decided',1,1,1,1,'accepted'),
(3,'workshop','500sq ft workshop in x place ','near edapally xyz supermarket ','2024-05-23','2024-12-12','100000','xyz','xyz',1,4,NULL,NULL,'pending');

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
(1,'Amal Ganesh','user','07356529545','user@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

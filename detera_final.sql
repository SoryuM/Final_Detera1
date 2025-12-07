/*
SQLyog Community v13.3.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - detera_final
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`detera_final` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `detera_final`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_Id` int(50) NOT NULL AUTO_INCREMENT,
  `user_role` enum('Manager','Staff') DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`user_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`user_Id`,`user_role`,`username`,`password_hash`,`first_name`,`middle_name`,`last_name`,`contact`) values 
(1,'Staff','r.detera20','$2y$10$cA8cmUg80edFejdNbe0oaOQ3zA.lNWs6yyeg7vK/KVW29ZDd96Z5S','Ronnel','Janer','Detera','09563371751');

/*Table structure for table `visitors` */

DROP TABLE IF EXISTS `visitors`;

CREATE TABLE `visitors` (
  `vis_id` int(50) NOT NULL AUTO_INCREMENT,
  `vis_fname` varchar(50) NOT NULL,
  `vis_mname` varchar(50) NOT NULL,
  `vis_lname` varchar(50) NOT NULL,
  `vis_address` varchar(50) NOT NULL,
  `vis_contact` varchar(50) NOT NULL,
  `location_type` enum('Office','School') DEFAULT NULL,
  `visit_purpose` enum('Inquiry','Attendance','Exam','Others') DEFAULT NULL,
  `visit_date` date DEFAULT NULL,
  `visit_time` time DEFAULT NULL,
  KEY `vis_id` (`vis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `visitors` */

insert  into `visitors`(`vis_id`,`vis_fname`,`vis_mname`,`vis_lname`,`vis_address`,`vis_contact`,`location_type`,`visit_purpose`,`visit_date`,`visit_time`) values 
(1,'Cyril','Discaya','Aninipot','Bibincahan Bitch','09123456789','School','Others','2025-12-05','00:00:12'),
(2,'Cedrick','Ocampo','Narag','Talisay','09987654321','Office','Attendance','2025-12-03','00:00:14'),
(3,'philip','antonio','dioneda','sirangan','09653814221','School','Exam','2025-12-06','00:00:10'),
(4,'philip','antonio','dioneda','sirangan','09653814221','School','Attendance','2025-12-06','00:00:10'),
(5,'tim','torres','giba','gabao','09458624455','School','Exam','2025-12-06','00:00:10');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

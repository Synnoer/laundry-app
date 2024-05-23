-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: laundry_rpl
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int DEFAULT NULL,
  `membership_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `phone_number_UNIQUE` (`phone_number`),
  KEY `membership_id` (`membership_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `membership_id` FOREIGN KEY (`membership_id`) REFERENCES `membership_types` (`id`),
  CONSTRAINT `role_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Dimas','L','c','1',NULL,'dimas.an217@gmail.com',NULL,'$2y$12$YIEjecSW1REIFt9qnc.KAe/dXYqZJXO84UyrL.6BdoEv/USpClD6a',NULL,'2024-05-05 00:15:53','2024-05-05 00:15:53',2,NULL),(2,'adil','L','tes','2',NULL,'adili@gmail.com',NULL,'$2y$12$J/S1H6L6oLBHl9qsX2sYUOQJ0piv3Xw/57svGRt/KfLHbdSvgHGLO','4qEUTbK65XnH4LH8TDEflhTAKgVUMPlG65miRmszYFQaLyYeZf3iJu5sSp8M','2024-05-05 01:35:44','2024-05-05 01:35:44',2,NULL),(3,'zen','L','o','3',NULL,'ahmadyunus@gmail.com',NULL,'$2y$12$Jk98qF19cgQHu5hMlDoVcescizw52ZXQc6HvRkSbA8hcNndT.iH7W',NULL,'2024-05-06 02:10:58','2024-05-06 02:10:58',2,NULL),(4,'Adil','L','o','4',NULL,'adiladil@gmail.com',NULL,'$2y$12$mv/slvyJdvor5AMXHoSGPe3vCrdOky9tnVfJchrs4UpXDtmK/3IkG','rBCAPtrQddkglREusDuiBfqbsI2HYNFGgtRlJqtlnG8nF1HSKN2LcJx0HZFZ','2024-05-06 02:14:47','2024-05-06 02:14:47',2,NULL),(5,'adi','L','o','5',NULL,'abc@gmail.com',NULL,'$2y$12$jJ8mseOXLAIdmO5kCM992uRBQUmBbelqL32bof2QGgCcBN5SAuUSC',NULL,'2024-05-08 03:21:03','2024-05-08 03:21:03',2,NULL),(6,'Dimas','L','Jl.Cibiru','6',NULL,'dd@gmail.com',NULL,'$2y$12$4a67Mvf2jioiGn9zR3neCOB4sMkmr9Sp8QNPjQZk1hMjQr6qh6nxG',NULL,'2024-05-08 03:24:07','2024-05-08 03:24:07',2,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-20 16:27:46

CREATE TABLE `participants_students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `neptun_code` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `qr_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `participants_students_id_uindex` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
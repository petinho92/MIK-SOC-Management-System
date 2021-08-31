CREATE TABLE `participants_chambers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `chamber` varchar(100) DEFAULT NULL,
  `chamber_person_id` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `participants_chambers_id_uindex` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
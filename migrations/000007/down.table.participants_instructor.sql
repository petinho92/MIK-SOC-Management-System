CREATE TABLE `participants_instructor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `is_lecturer` tinyint(1) DEFAULT NULL,
  `is_instructor` tinyint(1) DEFAULT NULL,
  `guid` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `participants_guests_id_uindex` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
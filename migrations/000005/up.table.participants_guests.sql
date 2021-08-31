CREATE TABLE `participants_guests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `organisation` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `plen1` json DEFAULT NULL,
  `plen2` json DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `guid` varchar(36) DEFAULT NULL,
  `foodTicket` json DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `participants_guests_id_uindex` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
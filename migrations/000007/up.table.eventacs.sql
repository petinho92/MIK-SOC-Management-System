CREATE TABLE `eventacs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `qrCode` varchar(100) DEFAULT NULL,
  `station` int unsigned DEFAULT NULL,
  `phase` int unsigned DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventacs_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
CREATE TABLE `emailsender` (
  `id` int NOT NULL AUTO_INCREMENT,
  `toEmail` varchar(100) DEFAULT NULL,
  `toName` varchar(100) DEFAULT NULL,
  `toQr` varchar(100) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `toContent` text,
  `statusSent` tinyint(1) DEFAULT NULL,
  `sentTime` timestamp NULL DEFAULT NULL,
  `lang` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emailsender_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb3;
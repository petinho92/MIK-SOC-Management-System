CREATE TABLE `majors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_hu` varchar(100) DEFAULT NULL,
  `name_en` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `majors_int_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb3;
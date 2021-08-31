ALTER TABLE `participants_students`
  DROP COLUMN `neptun_code`;
ALTER TABLE `participants_students`
  ADD COLUMN `neptun` varchar(10) DEFAULT NULL AFTER `name`,
  CHANGE COLUMN `email` `email` varchar(100) DEFAULT NULL AFTER `neptun`,
  CHANGE COLUMN `mobile` `mobile` varchar(20) DEFAULT NULL AFTER `email`,
  CHANGE COLUMN `major` `major` int unsigned DEFAULT NULL AFTER `mobile`,
  CHANGE COLUMN `semester` `semester` int unsigned DEFAULT NULL AFTER `major`,
  CHANGE COLUMN `created` `created` timestamp NULL DEFAULT NULL AFTER `semester`,
  CHANGE COLUMN `qr_code` `qr_code` varchar(100) DEFAULT NULL AFTER `created`,
  ADD COLUMN `guid` varchar(36) DEFAULT NULL AFTER `qr_code`,
  ADD UNIQUE KEY `participants_students_neptun_code_uindex` (`neptun`);
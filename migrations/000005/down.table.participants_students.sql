ALTER TABLE `participants_students`
  DROP INDEX `participants_students_neptun_code_uindex`,
  DROP COLUMN `neptun`,
  DROP COLUMN `guid`;
ALTER TABLE `participants_students`
  ADD COLUMN `neptun_code` varchar(10) DEFAULT NULL AFTER `name`,
  CHANGE COLUMN `email` `email` varchar(100) DEFAULT NULL AFTER `neptun_code`,
  CHANGE COLUMN `mobile` `mobile` varchar(20) DEFAULT NULL AFTER `email`,
  CHANGE COLUMN `major` `major` int unsigned DEFAULT NULL AFTER `mobile`,
  CHANGE COLUMN `semester` `semester` int unsigned DEFAULT NULL AFTER `major`,
  CHANGE COLUMN `created` `created` timestamp NULL DEFAULT NULL AFTER `semester`,
  CHANGE COLUMN `qr_code` `qr_code` varchar(100) DEFAULT NULL AFTER `created`;
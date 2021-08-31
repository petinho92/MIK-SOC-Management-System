ALTER TABLE `participants_students`
  DROP COLUMN `major`,
  DROP COLUMN `semester`;
ALTER TABLE `participants_students`
  CHANGE COLUMN `created` `created` timestamp NULL DEFAULT NULL AFTER `mobile`,
  CHANGE COLUMN `qr_code` `qr_code` varchar(100) DEFAULT NULL AFTER `created`;
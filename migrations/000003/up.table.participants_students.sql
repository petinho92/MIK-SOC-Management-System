ALTER TABLE `participants_students`
  ADD COLUMN `major` varchar(50) DEFAULT NULL AFTER `mobile`,
  ADD COLUMN `semester` int DEFAULT NULL AFTER `major`,
  CHANGE COLUMN `created` `created` timestamp NULL DEFAULT NULL AFTER `semester`,
  CHANGE COLUMN `qr_code` `qr_code` varchar(100) DEFAULT NULL AFTER `created`;
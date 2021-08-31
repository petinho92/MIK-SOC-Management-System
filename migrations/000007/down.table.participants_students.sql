ALTER TABLE `participants_students`
  DROP COLUMN `participate`,
  DROP COLUMN `orientation`,
  DROP COLUMN `lang`;
ALTER TABLE `participants_students`
  CHANGE COLUMN `created` `created` timestamp NULL DEFAULT NULL AFTER `semester`,
  CHANGE COLUMN `qr_code` `qr_code` varchar(100) DEFAULT NULL AFTER `created`,
  CHANGE COLUMN `guid` `guid` varchar(36) DEFAULT NULL AFTER `qr_code`;
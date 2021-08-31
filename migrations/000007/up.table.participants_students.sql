ALTER TABLE `participants_students`
  ADD COLUMN `participate` int unsigned DEFAULT NULL AFTER `semester`,
  CHANGE COLUMN `qr_code` `qr_code` varchar(100) DEFAULT NULL AFTER `participate`,
  CHANGE COLUMN `created` `created` timestamp NULL DEFAULT NULL AFTER `qr_code`,
  CHANGE COLUMN `guid` `guid` varchar(36) DEFAULT NULL AFTER `created`,
  ADD COLUMN `orientation` int unsigned DEFAULT NULL AFTER `guid`,
  ADD COLUMN `lang` varchar(5) NOT NULL AFTER `orientation`;
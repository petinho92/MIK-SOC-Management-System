ALTER TABLE `participants_chambers`
  DROP INDEX `participants_chambers_id_uindex`,
  DROP COLUMN `chamber`,
  DROP COLUMN `chamber_person_id`,
  DROP COLUMN `created_at`;
ALTER TABLE `participants_chambers`
  ADD COLUMN `chambership` varchar(100) DEFAULT NULL AFTER `name`,
  ADD COLUMN `chambership_number` varchar(50) DEFAULT NULL AFTER `chambership`,
  CHANGE COLUMN `address` `address` varchar(100) DEFAULT NULL AFTER `chambership_number`,
  CHANGE COLUMN `email` `email` varchar(100) DEFAULT NULL AFTER `address`,
  CHANGE COLUMN `mobile` `mobile` varchar(20) DEFAULT NULL AFTER `email`,
  ADD COLUMN `created` timestamp NULL DEFAULT NULL AFTER `mobile`,
  ADD COLUMN `guid` varchar(36) DEFAULT NULL AFTER `created`;
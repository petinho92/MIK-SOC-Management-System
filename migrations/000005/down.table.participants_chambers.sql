ALTER TABLE `participants_chambers`
  DROP COLUMN `chambership`,
  DROP COLUMN `chambership_number`,
  DROP COLUMN `created`,
  DROP COLUMN `guid`;
ALTER TABLE `participants_chambers`
  ADD COLUMN `chamber` varchar(100) DEFAULT NULL AFTER `name`,
  ADD COLUMN `chamber_person_id` varchar(30) DEFAULT NULL AFTER `chamber`,
  CHANGE COLUMN `address` `address` varchar(100) DEFAULT NULL AFTER `chamber_person_id`,
  CHANGE COLUMN `email` `email` varchar(50) DEFAULT NULL AFTER `address`,
  CHANGE COLUMN `mobile` `mobile` varchar(50) DEFAULT NULL AFTER `email`,
  ADD COLUMN `created_at` timestamp NULL DEFAULT NULL AFTER `mobile`,
  ADD UNIQUE KEY `participants_chambers_id_uindex` (`id`);
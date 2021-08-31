ALTER TABLE `participants_guests`
  DROP COLUMN `organization`;
ALTER TABLE `participants_guests`
  ADD COLUMN `organisation` varchar(100) DEFAULT NULL AFTER `name`,
  CHANGE COLUMN `email` `email` varchar(100) DEFAULT NULL AFTER `organisation`,
  CHANGE COLUMN `mobile` `mobile` varchar(20) DEFAULT NULL AFTER `email`,
  CHANGE COLUMN `created` `created` timestamp NULL DEFAULT NULL AFTER `mobile`,
  CHANGE COLUMN `guid` `guid` varchar(36) DEFAULT NULL AFTER `created`;
ALTER TABLE `participants_instructor`
  DROP COLUMN `created_at`;
ALTER TABLE `participants_instructor`
  CHANGE COLUMN `name` `name` varchar(100) DEFAULT NULL AFTER `id`,
  CHANGE COLUMN `organization` `organization` varchar(100) DEFAULT NULL AFTER `name`,
  CHANGE COLUMN `email` `email` varchar(100) DEFAULT NULL AFTER `organization`,
  CHANGE COLUMN `mobile` `mobile` varchar(20) DEFAULT NULL AFTER `email`,
  ADD COLUMN `created` timestamp NULL DEFAULT NULL AFTER `mobile`,
  ADD COLUMN `is_lecturer` tinyint(1) DEFAULT NULL AFTER `created`,
  ADD COLUMN `is_instructor` tinyint(1) DEFAULT NULL AFTER `is_lecturer`,
  ADD COLUMN `guid` varchar(36) DEFAULT NULL AFTER `is_instructor`;
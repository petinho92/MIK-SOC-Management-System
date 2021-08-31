ALTER TABLE `participants_instructor`
  DROP COLUMN `created`,
  DROP COLUMN `is_lecturer`,
  DROP COLUMN `is_instructor`,
  DROP COLUMN `guid`;
ALTER TABLE `participants_instructor`
  CHANGE COLUMN `name` `name` varchar(50) DEFAULT NULL AFTER `id`,
  CHANGE COLUMN `organization` `organization` varchar(50) DEFAULT NULL AFTER `name`,
  CHANGE COLUMN `email` `email` varchar(50) DEFAULT NULL AFTER `organization`,
  CHANGE COLUMN `mobile` `mobile` varchar(50) DEFAULT NULL AFTER `email`,
  ADD COLUMN `created_at` timestamp NULL DEFAULT NULL AFTER `mobile`;
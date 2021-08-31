ALTER TABLE `participants_students`
  CHANGE COLUMN `major` `major` int unsigned DEFAULT NULL AFTER `mobile`,
  CHANGE COLUMN `semester` `semester` int unsigned DEFAULT NULL AFTER `major`;
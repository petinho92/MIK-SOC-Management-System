ALTER TABLE `participants_students`
  CHANGE COLUMN `major` `major` varchar(50) DEFAULT NULL AFTER `mobile`,
  CHANGE COLUMN `semester` `semester` int DEFAULT NULL AFTER `major`;
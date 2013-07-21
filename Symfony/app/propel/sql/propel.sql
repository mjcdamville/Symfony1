
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- tache
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tache`;

CREATE TABLE `tache`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `description` VARCHAR(45) NOT NULL,
    `realisee` TINYINT(1) DEFAULT 0 NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;

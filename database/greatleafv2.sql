-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema greatleafv2
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema greatleafv2
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `greatleafv2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `greatleafv2` ;

-- -----------------------------------------------------
-- Table `greatleafv2`.`overtime`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greatleafv2`.`overtime` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `filedate` DATETIME NULL COMMENT '',
  `reason` TEXT(250) NOT NULL COMMENT '',
  `startdate` DATE NOT NULL COMMENT '',
  `enddate` DATE NOT NULL COMMENT '',
  `duration` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greatleafv2`.`jobacc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greatleafv2`.`jobacc` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `filedate` DATETIME NULL COMMENT '',
  `department` VARCHAR(45) NOT NULL COMMENT '',
  `date` DATE NOT NULL COMMENT '',
  `reason` TEXT(250) NOT NULL COMMENT '',
  `office_timein` TIME NOT NULL COMMENT '',
  `office_timeout` TIME NOT NULL COMMENT '',
  `site_timein` TIME NOT NULL COMMENT '',
  `site_timeout` TIME NOT NULL COMMENT '',
  `destination` VARCHAR(100) NOT NULL COMMENT '',
  `purpose` TEXT(100) NOT NULL COMMENT '',
  `accomplishment` TEXT(250) NULL COMMENT '',
  `remarks` TEXT(250) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greatleafv2`.`leave`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greatleafv2`.`leave` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `filedate` DATETIME NULL COMMENT '',
  `reason` TEXT(250) NOT NULL COMMENT '',
  `startdate` DATE NOT NULL COMMENT '',
  `enddate` DATE NOT NULL COMMENT '',
  `duration` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greatleafv2`.`cashvoucher`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greatleafv2`.`cashvoucher` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `filedate` DATETIME NULL COMMENT '',
  `type` VARCHAR(45) NOT NULL COMMENT '',
  `details` TEXT(250) NOT NULL COMMENT '',
  `particular` TINYTEXT NOT NULL COMMENT '',
  `date` DATE NOT NULL COMMENT '',
  `receiptno` CHAR(11) NOT NULL COMMENT '',
  `amount` DECIMAL(10,2) NOT NULL COMMENT '',
  `remarks` TINYTEXT NULL COMMENT '',
  `total` DECIMAL(10,2) NOT NULL COMMENT '',
  `less_cash_advance` DECIMAL(10,2) NOT NULL COMMENT '',
  `amount_return` DECIMAL(10,2) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greatleafv2`.`officialbusiness`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greatleafv2`.`officialbusiness` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `filedate` DATETIME NULL COMMENT '',
  `department` VARCHAR(45) NOT NULL COMMENT '',
  `date` DATE NOT NULL COMMENT '',
  `reason` TEXT(250) NOT NULL COMMENT '',
  `office_timein` TIME NOT NULL COMMENT '',
  `office_timeout` TIME NOT NULL COMMENT '',
  `site_timein` TIME NOT NULL COMMENT '',
  `site_timeout` TIME NOT NULL COMMENT '',
  `destination` VARCHAR(100) NOT NULL COMMENT '',
  `purpose` TEXT(100) NOT NULL COMMENT '',
  `accomplishment` TEXT(250) NULL COMMENT '',
  `remarks` TEXT(250) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greatleafv2`.`request`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greatleafv2`.`request` (
  `id` INT NOT NULL COMMENT '',
  `status` VARCHAR(10) NOT NULL COMMENT '',
  `overtime_id` INT NOT NULL COMMENT '',
  `jobacc_id` INT NOT NULL COMMENT '',
  `leave_id` INT NOT NULL COMMENT '',
  `cashvoucher_id` INT NOT NULL COMMENT '',
  `officialbusiness_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_request_overtime_idx` (`overtime_id` ASC)  COMMENT '',
  INDEX `fk_request_jobacc1_idx` (`jobacc_id` ASC)  COMMENT '',
  INDEX `fk_request_leave1_idx` (`leave_id` ASC)  COMMENT '',
  INDEX `fk_request_cashvoucher1_idx` (`cashvoucher_id` ASC)  COMMENT '',
  INDEX `fk_request_officialbusiness1_idx` (`officialbusiness_id` ASC)  COMMENT '',
  CONSTRAINT `fk_request_overtime`
    FOREIGN KEY (`overtime_id`)
    REFERENCES `greatleafv2`.`overtime` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_request_jobacc1`
    FOREIGN KEY (`jobacc_id`)
    REFERENCES `greatleafv2`.`jobacc` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_request_leave1`
    FOREIGN KEY (`leave_id`)
    REFERENCES `greatleafv2`.`leave` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_request_cashvoucher1`
    FOREIGN KEY (`cashvoucher_id`)
    REFERENCES `greatleafv2`.`cashvoucher` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_request_officialbusiness1`
    FOREIGN KEY (`officialbusiness_id`)
    REFERENCES `greatleafv2`.`officialbusiness` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greatleafv2`.`employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greatleafv2`.`employee` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `firstname` VARCHAR(100) NOT NULL COMMENT '',
  `middlename` VARCHAR(100) NULL COMMENT '',
  `lastname` VARCHAR(100) NOT NULL COMMENT '',
  `address` VARCHAR(100) NOT NULL COMMENT '',
  `contact` VARCHAR(45) NOT NULL COMMENT '',
  `department` VARCHAR(45) NOT NULL COMMENT '',
  `position` VARCHAR(45) NOT NULL COMMENT '',
  `image` VARCHAR(200) NULL COMMENT '',
  `gender` CHAR(1) NOT NULL COMMENT '',
  `dob` DATE NOT NULL COMMENT '',
  `request_id` INT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_employee_request1_idx` (`request_id` ASC)  COMMENT '',
  CONSTRAINT `fk_employee_request1`
    FOREIGN KEY (`request_id`)
    REFERENCES `greatleafv2`.`request` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `greatleafv2`.`dtr`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `greatleafv2`.`dtr` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `login` TIMESTAMP NULL COMMENT '',
  `logout` TIMESTAMP NULL COMMENT '',
  `employee_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_dtr_employee1_idx` (`employee_id` ASC)  COMMENT '',
  CONSTRAINT `fk_dtr_employee1`
    FOREIGN KEY (`employee_id`)
    REFERENCES `greatleafv2`.`employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`EMPLOYEE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`EMPLOYEE` (
  `id` INT NOT NULL COMMENT '',
  `firstname` VARCHAR(45) NOT NULL COMMENT '',
  `middlename` VARCHAR(45) NOT NULL COMMENT '',
  `lastname` VARCHAR(45) NOT NULL COMMENT '',
  `email` VARCHAR(45) NOT NULL COMMENT '',
  `designation` VARCHAR(45) NOT NULL COMMENT '',
  `department` VARCHAR(100) NOT NULL COMMENT '',
  `address` LONGTEXT NOT NULL COMMENT '',
  `username` VARCHAR(45) NOT NULL COMMENT '',
  `password` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`DTR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`DTR` (
  `id` INT NOT NULL COMMENT '',
  `dtr_timein` TIME NOT NULL COMMENT '',
  `dtr_timeout` TIME NOT NULL COMMENT '',
  `dtr_date` DATE NOT NULL COMMENT '',
  `lates` SMALLINT(2) NULL COMMENT '',
  `absences` SMALLINT(2) NULL COMMENT '',
  `EMPLOYEE_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_DTR_EMPLOYEE_idx` (`EMPLOYEE_id` ASC)  COMMENT '',
  CONSTRAINT `fk_DTR_EMPLOYEE`
    FOREIGN KEY (`EMPLOYEE_id`)
    REFERENCES `mydb`.`EMPLOYEE` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ACCESS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ACCESS` (
  `id` INT NOT NULL COMMENT '',
  `access_in` TIME NOT NULL COMMENT '',
  `access_out` TIME NOT NULL COMMENT '',
  `access_date` DATE NOT NULL COMMENT '',
  `EMPLOYEE_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_ACCESS_EMPLOYEE1_idx` (`EMPLOYEE_id` ASC)  COMMENT '',
  CONSTRAINT `fk_ACCESS_EMPLOYEE1`
    FOREIGN KEY (`EMPLOYEE_id`)
    REFERENCES `mydb`.`EMPLOYEE` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`REQUEST`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`REQUEST` (
  `id` INT NOT NULL COMMENT '',
  `type` VARCHAR(45) NOT NULL COMMENT '',
  `date` DATE NOT NULL COMMENT '',
  `status` VARCHAR(45) NOT NULL COMMENT '',
  `EMPLOYEE_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_REQUEST_EMPLOYEE1_idx` (`EMPLOYEE_id` ASC)  COMMENT '',
  CONSTRAINT `fk_REQUEST_EMPLOYEE1`
    FOREIGN KEY (`EMPLOYEE_id`)
    REFERENCES `mydb`.`EMPLOYEE` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

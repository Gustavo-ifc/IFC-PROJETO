-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `idusuario` INT NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NULL,
  `nome` VARCHAR(45) NOT NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`estufas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`estufas` (
  `idestufas` INT NOT NULL,
  `cadastro_estufa` VARCHAR(45) NULL,
  `lista_estufa` VARCHAR(45) NULL,
  PRIMARY KEY (`idestufas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`temperatura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`temperatura` (
  `idtemperatura` INT NOT NULL,
  PRIMARY KEY (`idtemperatura`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`historico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`historico` (
  `idhistorico` INT NOT NULL,
  `data_hora` VARCHAR(45) NULL,
  `temperatura` VARCHAR(45) NULL,
  `umidade` VARCHAR(45) NULL,
  `nivel_agua` VARCHAR(45) NULL,
  PRIMARY KEY (`idhistorico`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`data_hora`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`data_hora` (
  `iddata_hora` INT NOT NULL,
  PRIMARY KEY (`iddata_hora`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`umidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`umidade` (
  `idumidade` INT NOT NULL,
  PRIMARY KEY (`idumidade`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`nivel_agua`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`nivel_agua` (
  `idnivel_agua` INT NOT NULL,
  PRIMARY KEY (`idnivel_agua`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

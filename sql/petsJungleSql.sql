-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema petsJungle
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `petsJungle` ;

-- -----------------------------------------------------
-- Schema petsJungle
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `petsJungle` DEFAULT CHARACTER SET utf8 ;
USE `petsJungle` ;

-- -----------------------------------------------------
-- Table `petsJungle`.`refugios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petsJungle`.`refugios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `telefono` VARCHAR(20) NULL,
  `horario` VARCHAR(20) NULL,
  `masctoas` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petsJungle`.`mascotas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petsJungle`.`mascotas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `color` VARCHAR(45) NULL,
  `edad` VARCHAR(45) NULL,
  `historia` LONGTEXT NULL,
  `hMedico` LONGTEXT NULL,
  `imagen` VARCHAR(45) NULL,
  `adoptado` TINYINT(1) NULL DEFAULT 0,
  `refugios_id` INT NOT NULL,
  `raza` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_mascotas_refugios_idx` (`refugios_id` ASC),
  CONSTRAINT `fk_mascotas_refugios`
    FOREIGN KEY (`refugios_id`)
    REFERENCES `petsJungle`.`refugios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petsJungle`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petsJungle`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `contra` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `tMascotas` TINYINT(100) NULL,
  `peligrocidad` VARCHAR(45) NULL,
  `telefono` VARCHAR(15) NULL,
  `direccion` VARCHAR(45) NULL,
  `edad` TINYINT(100) NULL,
  `observaciones` VARCHAR(45) NULL,
  `rol` VARCHAR(20) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `nombre_UNIQUE` (`nombre` ASC),
  UNIQUE INDEX `contra_UNIQUE` (`contra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petsJungle`.`solicitudes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petsJungle`.`solicitudes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NULL,
  `mascotas_id` INT NOT NULL,
  `usuarios_id` INT NOT NULL,
  `refugios_id` INT NOT NULL,
  `fechaRespuesta` DATE NULL,
  `estado` TINYINT(1) NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_solicitudes_mascotas1_idx` (`mascotas_id` ASC),
  INDEX `fk_solicitudes_usuarios1_idx` (`usuarios_id` ASC),
  INDEX `fk_solicitudes_refugios1_idx` (`refugios_id` ASC),
  CONSTRAINT `fk_solicitudes_mascotas1`
    FOREIGN KEY (`mascotas_id`)
    REFERENCES `petsJungle`.`mascotas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitudes_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `petsJungle`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitudes_refugios1`
    FOREIGN KEY (`refugios_id`)
    REFERENCES `petsJungle`.`refugios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `petsJungle`.`propietarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `petsJungle`.`propietarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fechaReclamo` DATETIME(1) NULL,
  `mascotas_id` INT NOT NULL,
  `usuarios_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_propietarios_mascotas1_idx` (`mascotas_id` ASC),
  INDEX `fk_propietarios_usuarios1_idx` (`usuarios_id` ASC),
  CONSTRAINT `fk_propietarios_mascotas1`
    FOREIGN KEY (`mascotas_id`)
    REFERENCES `petsJungle`.`mascotas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_propietarios_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `petsJungle`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO `petsJungle`.`usuarios` (`contra`, `nombre`, `tMascotas`, `peligrocidad`, `telefono`, `direccion`, `edad`, `observaciones`, `rol`) VALUES ('1234', 'admin', '0', '0', '0', '0', '0', '0', 'admin');

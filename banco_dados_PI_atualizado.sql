-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema db_barber01
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `db_barber01` ;

-- -----------------------------------------------------
-- Schema db_barber01
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_barber01` DEFAULT CHARACTER SET utf8 ;
USE `db_barber01` ;

-- -----------------------------------------------------
-- Table `db_barber01`.`tb_clientes_colaboradores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_barber01`.`tb_clientes_colaboradores` ;

CREATE TABLE IF NOT EXISTS `db_barber01`.`tb_clientes_colaboradores` (
  `id_clientes_colaboradores` INT NOT NULL AUTO_INCREMENT,
  `ddd_celular` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `sobrenome` VARCHAR(100) NOT NULL,
  `aniversario` VARCHAR(10) NOT NULL,
  `colaborador` TINYINT NOT NULL,
  PRIMARY KEY (`id_clientes_colaboradores`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb3;

CREATE UNIQUE INDEX `ddd_celular_UNIQUE` ON `db_barber01`.`tb_clientes_colaboradores` (`ddd_celular` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `db_barber01`.`tb_servicos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_barber01`.`tb_servicos` ;

CREATE TABLE IF NOT EXISTS `db_barber01`.`tb_servicos` (
  `id_servico` INT NOT NULL AUTO_INCREMENT,
  `descricao` CHAR(100) CHARACTER SET 'utf8' NOT NULL,
  `genero` VARCHAR(1) NOT NULL,
  PRIMARY KEY (`id_servico`))
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `db_barber01`.`tb_agendamentos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_barber01`.`tb_agendamentos` ;

CREATE TABLE IF NOT EXISTS `db_barber01`.`tb_agendamentos` (
  `id_agendamentos` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `id_cliente` INT NOT NULL,
  `id_colaborador` INT NOT NULL,
  `id_servico` INT NOT NULL,
  PRIMARY KEY (`id_agendamentos`),
  CONSTRAINT `id_cliente_clientes_colaboradores`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `db_barber01`.`tb_clientes_colaboradores` (`id_clientes_colaboradores`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `id_colaborador_clientes_colaboradores`
    FOREIGN KEY (`id_colaborador`)
    REFERENCES `db_barber01`.`tb_clientes_colaboradores` (`id_clientes_colaboradores`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `id_servico_servicos`
    FOREIGN KEY (`id_servico`)
    REFERENCES `db_barber01`.`tb_servicos` (`id_servico`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

CREATE INDEX `ddd_celular_idx` ON `db_barber01`.`tb_agendamentos` (`id_cliente` ASC) VISIBLE;

CREATE INDEX `colaborador_idx` ON `db_barber01`.`tb_agendamentos` (`id_colaborador` ASC) VISIBLE;

CREATE INDEX `agendamento_idx` ON `db_barber01`.`tb_agendamentos` (`id_servico` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `db_barber01`.`tb_colaboradores_servicos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_barber01`.`tb_colaboradores_servicos` ;

CREATE TABLE IF NOT EXISTS `db_barber01`.`tb_colaboradores_servicos` (
  `id_colaborador` INT NOT NULL,
  `id_servico` INT NOT NULL,
  PRIMARY KEY (`id_colaborador`, `id_servico`),
  CONSTRAINT `tb_colaboradores_servicos_colaborador_clientes_colaboradores`
    FOREIGN KEY (`id_colaborador`)
    REFERENCES `db_barber01`.`tb_clientes_colaboradores` (`id_clientes_colaboradores`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `tb_colaboradores_servicos_servico_servicos`
    FOREIGN KEY (`id_servico`)
    REFERENCES `db_barber01`.`tb_servicos` (`id_servico`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

CREATE INDEX `id_servico_servicos_idx` ON `db_barber01`.`tb_colaboradores_servicos` (`id_servico` ASC) VISIBLE;

INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Cortes degradê', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Cortes social', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Cortes em tesouras', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Barba', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Sobrancelhas navalha', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Sobrancelhas pinça ou cera', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Depilação nasal e orelha', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Limpeza de pele a vácuo e curetagem', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Coloração', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Pigmentação', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Relaxamento capilar', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Alisamentos capilar', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Barba terapia', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Relaxamento em barba', 'M');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Corte', 'F');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Depilação facial', 'F');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Sobrancelhas', 'F');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Hidratação', 'F');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Nutrição', 'F');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Cauterização / Reconstrução', 'F');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Coloração / Matização', 'F');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Progressiva', 'F');
INSERT INTO `db_barber01`.`tb_servicos` (`descricao`, `genero`)  VALUES ('Luzes', 'F');

INSERT INTO `db_barber01`.`tb_clientes_colaboradores` (`ddd_celular`, `nome`, `sobrenome`, `aniversario`, `colaborador`) VALUES (1199999999, 'Silas', 'Silas', '01/01', 1);
INSERT INTO `db_barber01`.`tb_clientes_colaboradores` (`ddd_celular`, `nome`, `sobrenome`, `aniversario`, `colaborador`) VALUES (1199999998, 'Edilaine', 'Edilaine', '01/01', 1);

INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 1);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 2);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 3);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 4);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 5);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 6);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 7);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 8);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 9);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 10);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 11);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 12);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 13);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (1, 14);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (2, 15);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (2, 16);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (2, 17);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (2, 18);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (2, 19);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (2, 20);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (2, 21);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (2, 22);
INSERT INTO `db_barber01`.`tb_colaboradores_servicos` (`id_colaborador`, `id_servico`) VALUES (2, 23);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


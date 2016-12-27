CREATE DATABASE `test` CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE USER 'demo'@'localhost' IDENTIFIED BY 'password';

GRANT ALL PRIVILEGES ON `test` . * TO 'demo'@'localhost';

FLUSH PRIVILEGES;

CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `age` INT(3) NOT NULL,
  PRIMARY KEY(`id`)
)
;

INSERT INTO `users` (`name`, `age`)
VALUES
  ('Катя', 12),
  ('Лена', 18),
  ('Миша', 16),
  ('Саша', 20)
;

SELECT * FROM `users`;

SELECT LAST_INSERT_ID();

CREATE TABLE `author` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
  `fam` VARCHAR(200) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
  `birthday` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
)
  COLLATE='utf8_unicode_ci'
  ENGINE=InnoDB
  ROW_FORMAT=DEFAULT
  AUTO_INCREMENT=1;

CREATE TABLE `books` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `id_author` INT(10) NULL DEFAULT NULL,
  `book` VARCHAR(500) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
  PRIMARY KEY (`id`),
  INDEX `id_author` (`id_author`)
)
  COLLATE='utf8_unicode_ci'
  ENGINE=InnoDB
  ROW_FORMAT=DEFAULT
  AUTO_INCREMENT=1;

INSERT INTO `author` (`id`, `name`, `fam`, `birthday`) VALUES (NULL, 'Николай Николаевич', 'Носов', '2008-11-23');
SET @lastID := LAST_INSERT_ID();
INSERT INTO `books` (`id`, `id_author`, `book`) VALUES (NULL, @lastID, 'Незнайка учится');
INSERT INTO `books` (`id`, `id_author`, `book`) VALUES (NULL, @lastID, 'Незнайка-путешественник');

INSERT INTO `author` (`id`, `name`, `fam`, `birthday`) VALUES (NULL, 'Артур Конан', 'Дойль', '1859-05-22');
SET @lastID := LAST_INSERT_ID();
INSERT INTO `books` (`id`, `id_author`, `book`) VALUES (NULL, @lastID, 'Затерянный мир');
INSERT INTO `books` (`id`, `id_author`, `book`) VALUES (NULL, @lastID, 'Шерлок Холмс');


DROP USER 'demo'@'localhost';

DROP DATABASE `test`;

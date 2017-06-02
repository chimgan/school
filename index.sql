USE test;

ALTER DATABASE test CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE `user` CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;


SELECT SHA1('Sharik');


CREATE TABLE IF NOT EXISTS `user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `age` INT(3) NOT NULL,
  PRIMARY KEY(`id`)
)
;


INSERT INTO `user` (`name`, `age`)
VALUES
  ('Катя', 12),
  ('Лена', 18),
  ('Миша', 16),
  ('Саша', 20)
;



CREATE TABLE `author` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NULL DEFAULT 'noname' COLLATE 'utf8_unicode_ci',
  `fam` VARCHAR(200) NULL COLLATE 'utf8_unicode_ci',
  `birthday` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
)
  COLLATE='utf8_unicode_ci'
  ENGINE=InnoDB
  ROW_FORMAT=DEFAULT
  AUTO_INCREMENT=1;


CREATE TABLE `books` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_author` INT(11) NULL DEFAULT NULL,
  `book` VARCHAR(500) NULL DEFAULT NULL COLLATE 'utf8_unicode_ci',
  PRIMARY KEY (`id`),
  INDEX `id_author` (`id_author`)
)
  COLLATE='utf8_unicode_ci'
  ENGINE=InnoDB
  ROW_FORMAT=DEFAULT
  AUTO_INCREMENT=1;

INSERT INTO `author` (`id`, `name`, `fam`, `birthday`)
VALUES (NULL, 'Николай Николаевич', 'Носов', '2008-11-23');
SET @lastID := LAST_INSERT_ID();
INSERT INTO `books` (`id`, `id_author`, `book`)
VALUES (NULL, @lastID, 'Незнайка учится');
INSERT INTO `books` (`id`, `id_author`, `book`)
VALUES (NULL, @lastID, 'Незнайка-путешественник');

INSERT INTO `author` (`id`, `name`, `fam`, `birthday`)
VALUES (NULL, 'Артур Конан', 'Дойль', '1859-05-22');
SET @lastID := LAST_INSERT_ID();
INSERT INTO `books` (`id`, `id_author`, `book`)
VALUES (NULL, @lastID, 'Затерянный мир');
INSERT INTO `books` (`id`, `id_author`, `book`)
VALUES (NULL, @lastID, 'Шерлок Холмс');


ALTER TABLE `books`
  ADD CONSTRAINT `fk_book_author`
FOREIGN KEY (`id_author`)
REFERENCES `author` (`id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE
;

ALTER TABLE `books`
  DROP FOREIGN KEY `fk_book_author`
;


SELECT `a`.`name` AS `first_name`
     , `a`.`fam` AS `second_name`
FROM `author` AS `a`
WHERE `a`.`birthday` >= '1900-01-01'
ORDER BY `a`.`name` ASC
LIMIT 1, 1
;

SELECT *
FROM books
;

SELECT `a`.`name` AS `first_name`
     , `a`.`fam` AS `second_name`
     , `b`.`book` AS `book_title`
FROM author AS a
   , books as b
WHERE a.id = b.id_author
;


SELECT `a`.`name` AS `first_name`
  , `a`.`fam` AS `second_name`
  , `b`.`book` AS `book_title`
FROM author AS a
--  RIGHT JOIN books AS b ON a.id = b.id_author
--  LEFT JOIN books AS b ON a.id = b.id_author
  INNER JOIN books AS b ON a.id = b.id_author
;


CREATE TABLE `order` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(200) NULL DEFAULT 'noname' COLLATE 'utf8_unicode_ci',
  `price` INT(11) NULL COLLATE 'utf8_unicode_ci',
  `created_at` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
)
  COLLATE='utf8_unicode_ci'
  ENGINE=InnoDB
  ROW_FORMAT=DEFAULT
  AUTO_INCREMENT=1;

INSERT INTO `order` (title, price, created_at)
VALUES
  ('order1', 100, '2017-05-25')
, ('order2', 50, '2017-05-25')
, ('order3', 150, '2017-05-25')
, ('order4', 250, '2017-05-25')
, ('order5', 350, '2017-05-25')
, ('order6', 450, NOW())
, ('order7', 550, NOW())
, ('order8', 650, NOW())
, ('order9', 150, NOW())
;

SELECT group_concat(title)
     , AVG(price)
     , SUM(price)
     , COUNT(price)
     , MIN(price)
     , MAX(price)
     , created_at
FROM `order` AS o
WHERE id != 1
GROUP BY created_at
HAVING SUM(price) >= 1000
;


SELECT DISTINCT fam
FROM author
;

SELECT CONCAT('test', 1);

DELETE FROM books
WHERE book = 'ропропорп'
;


CREATE TABLE `form_element` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NULL DEFAULT 'noname' COLLATE 'utf8_unicode_ci',
  `email` VARCHAR(200) NULL COLLATE 'utf8_unicode_ci',
  `password` VARCHAR(42) NULL COLLATE 'utf8_unicode_ci',
  `contact` VARCHAR(200) NULL COLLATE 'utf8_unicode_ci',
  PRIMARY KEY (`id`)
)
  COLLATE='utf8_unicode_ci'
  ENGINE=InnoDB
  ROW_FORMAT=DEFAULT
  AUTO_INCREMENT=1
;

ALTER TABLE `form_element`
  ADD UNIQUE INDEX `unq_email` (`email`);
CREATE DATABASE /*!32312 IF NOT EXISTS*/`buahapi` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `buahapi`;



CREATE TABLE `buah` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

ALTER TABLE buah ADD CONSTRAINT unique_name UNIQUE (name);

insert  into `buah`(`name`) values 
('Melon'),
('Apel'),
('Semangka');

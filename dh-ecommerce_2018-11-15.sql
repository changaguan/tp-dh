# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.23)
# Base de datos: dh-ecommerce
# Tiempo de Generación: 2018-11-15 20:26:06 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(8) NOT NULL DEFAULT '',
  `name` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `avatar` varchar(100) DEFAULT '',
  `country` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Unico Mail` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `avatar`, `country`)
VALUES
	(1,'changa','CARLOS DAY','changa_1994@hotmail.com','$2y$10$5Xs.Y.EtoyfGSPcDOcJZFuJNJzM8hIE9UyjBcQUQ67JuYqyDe/gQO','','Argentina'),
	(2,'changa2','CARLOS DAY 2','changa2@hotmail.com','$2y$10$WGzlo5oZWs3FIJB/VQRyJunjLsBPUXdWvEZfHZTT/uspM9c9gKVqm','changa2@hotmail.com.jpg','Argentina'),
	(3,'javi','javiher','javi@dh.com','$2y$10$c4euflixZ05ocE98JowNAuUhMa5ktSGA/KTJoewKjYfi7t/S6JU7a','.jpg','Perú'),
	(4,'javi2','javiher2','javi@dh2.com','$2y$10$zl0mic7EXdJ/bL4.621X/OEYtknVzS20RSfPe6PTLy/wB6oF7CXLy','javi@dh2.com.jpg','Chile'),
	(7,'chanchan','chanchan','chanchan@hotmail.com','$2y$10$bvygYRkIibBjvHNnRPW1g.GrgUZmQ2ob8aMcp5PSWKdc7ylqSFXt6','chanchan@hotmail.com.jpg','Argentina'),
	(10,'qwerty','qwerty','qwerty@hotmail.com','$2y$10$1Xm8bqFY9p47WgIBBAKIf.EGvHn1KTRn3PQFjL..zH4oz3TRIyj3.','qwerty@hotmail.com.jpg','Argentina');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

# Database : incidentmanagement

SET FOREIGN_KEY_CHECKS=0;

DROP DATABASE IF EXISTS `incidentmanagement`;

CREATE DATABASE `incidentmanagement`
    CHARACTER SET 'utf8'
    COLLATE 'utf8_general_ci';

USE `incidentmanagement`;

#
# Structure for the `categories` table :
#

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_description` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Structure for the `change_log` table :
#

DROP TABLE IF EXISTS `change_log`;

CREATE TABLE `change_log` (
  `incident_id` int(11) NOT NULL,
  `changed_by` int(11) DEFAULT NULL,
  `old_user_id` int(11) DEFAULT NULL,
  `old_prio_id` int(11) DEFAULT NULL,
  `old_status_id` int(11) DEFAULT NULL,
  `new_user_id` int(11) DEFAULT NULL,
  `new_prio_id` int(11) DEFAULT NULL,
  `new_status_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `remark` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Structure for the `projects` table :
#

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Structure for the `users` table :
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

#
# Structure for the `statuses` table :
#

DROP TABLE IF EXISTS `statuses`;

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_description` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Structure for the `priorities` table :
#

DROP TABLE IF EXISTS `priorities`;

CREATE TABLE `priorities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `priority_description` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Structure for the `incidents` table :
#

DROP TABLE IF EXISTS `incidents`;

CREATE TABLE `incidents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status_id` int(2) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `priority_id` int(11) DEFAULT NULL,
  `aanmelder_id` int(11) DEFAULT NULL,
  `submit_date` datetime DEFAULT NULL,
  `title` varchar(2000) DEFAULT NULL,
  `subtitle` varchar(2000) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `resolution` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`),
  KEY `user_id` (`user_id`),
  KEY `status_id` (`status_id`),
  KEY `priority_id` (`priority_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `incidents_fk` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  CONSTRAINT `incidents_fk1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `incidents_fk2` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  CONSTRAINT `incidents_fk3` FOREIGN KEY (`priority_id`) REFERENCES `priorities` (`id`),
  CONSTRAINT `incidents_fk4` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Structure for the `mymfavorites` table :
#

DROP TABLE IF EXISTS `mymfavorites`;

CREATE TABLE `mymfavorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fav_name` text,
  `fav_source` text,
  `fav_path` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Please do not modify this table!';

#
# Definition for the `view_incidents` view :
#

DROP VIEW IF EXISTS `view_incidents`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_incidents` AS
  select
    `i`.`id` AS `IncidentID`,
    `p`.`project_name` AS `Project`,
    `i`.`title` AS `Titel`,
    `i`.`description` AS `description`,
    `s`.`status_description` AS `Status`,
    `pr`.`priority_description` AS `Prioriteit`,
    `u`.`user_name` AS `Toegewezen aan`,
    `c`.`category_description` AS `Categorie`,
    `i`.`submit_date` AS `Datum aangemeld`,
    `ua`.`user_name` AS `Aangemeld door`
  from
    ((((((`incidents` `i` left join `projects` `p` on((`i`.`project_id` = `p`.`id`))) left join `users` `ua` on((`i`.`aanmelder_id` = `ua`.`id`))) left join `users` `u` on((`i`.`user_id` = `u`.`id`))) left join `statuses` `s` on((`i`.`status_id` = `s`.`id`))) left join `categories` `c` on((`i`.`category_id` = `c`.`id`))) left join `priorities` `pr` on((`i`.`priority_id` = `pr`.`id`)));

#
# Data for the `categories` table  (LIMIT 0,500)
#

INSERT INTO `categories` (`id`, `category_description`) VALUES
  (1,'-'),
  (2,'Bug-fixing'),
  (3,'Development'),
  (4,'Maintenance'),
  (5,'Bug-fixing'),
  (6,'Diversen');

COMMIT;

#
# Data for the `projects` table  (LIMIT 0,500)
#

INSERT INTO `projects` (`id`, `project_name`) VALUES
  (1,'-'),
  (2,'Algemeen'),
  (3,'Stagezaken'),
  (4,'Wolter Kroes '),
  (5,'Q-Dance'),
  (6,'BeQuan'),
  (7,'AlpDhuZes');

COMMIT;

#
# Data for the `users` table  (LIMIT 0,500)
#

INSERT INTO `users` (`id`, `user_name`, `email`) VALUES
  (1,'-','-'),
  (2,'Coen','coen.bequan@gmail.com'),
  (3,'Wouter','wouter@email.com'),
  (4,'Rogier','onbekend'),
  (5,'Peter','peter@be-quan.com'),
  (7,'Brahim','brahim@gmail.com'),
  (8,'Denzyl','denzyl@gmail.com'),
  (9,'Sjoerd','sjoerd@gmail.com');

COMMIT;

#
# Data for the `statuses` table  (LIMIT 0,500)
#

INSERT INTO `statuses` (`id`, `status_description`) VALUES
  (1,'-'),
  (2,'In behandeling'),
  (3,'Toegewezen'),
  (4,'Gesloten');

COMMIT;

#
# Data for the `priorities` table  (LIMIT 0,500)
#

INSERT INTO `priorities` (`id`, `priority_description`) VALUES
  (1,'-'),
  (2,'Laag'),
  (3,'Gemiddeld'),
  (4,'Hoog'),
  (5,'Grip1: bel 112');

COMMIT;

#
# Data for the `incidents` table  (LIMIT 0,500)
#

INSERT INTO `incidents` (`id`, `project_id`, `user_id`, `status_id`, `category_id`, `priority_id`, `aanmelder_id`, `submit_date`, `title`, `subtitle`, `description`, `resolution`) VALUES
  (1,7,2,4,2,3,4,'2014-10-01 23:59:00','Hij doet ut niet','','Wat is er aan de hand? Kan dit niet gefixed worden?','Bug gefixed die error message veroorzaakt. Case closed.'),
  (2,3,3,4,3,3,4,'2014-10-04 16:47:44','Scherm niet uitgelijnd','','De kleur #FA6E5 moet veranderd worden in zwart. Alle schermen bijwerken aub.',''),
  (3,4,2,1,4,2,4,'2014-10-01 23:59:00','xxx','xx123','abc',''),
  (4,6,2,2,2,3,4,'2014-11-06 10:00:00','toevoegen optie ZZP''er/zelfstandige','','Bij de inschrijving dient er -behalve ik heb een baan en ik zoek een baan- een derde optie bijkomen : ''ZZP''er/zelfstandige''',''),
  (5,3,2,2,2,3,4,'2014-11-06','Z-order labels/volgen','','In het scherm ''contacten'' valt de box voor het volgen van mensen weg','');

COMMIT;

#
# Data for the `mymfavorites` table  (LIMIT 0,500)
#

INSERT INTO `mymfavorites` (`id`, `fav_name`, `fav_source`, `fav_path`) VALUES
  (1,'IncidentsPerUser','hex:2300410061006E00740061006C00200069006E0063006900640065006E00740065006E00200070006500720020006700650062007200750069006B0065007200200070006500720020007300740061007400750073000D000A00530045004C00450043005400200075002E0075007300650072005F006E0061006D0065002C00200043004F004E00430041005400280069002E007300740061007400750073005F00690064002C002000270020002D00200027002C00200073002E007300740061007400750073005F006400650073006300720069007000740069006F006E00290020004100530020005300740061007400750073002C00200043004F0055004E005400280069002E006900640029000D000A00460052004F004D00200075007300650072007300200075002C00200069006E0063006900640065006E0074007300200069002C00200073007400610074007500730065007300200073000D000A0057004800450052004500200069002E0075007300650072005F006900640020003D00200075002E00690064000D000A0041004E004400200069002E007300740061007400750073005F006900640020003D00200073002E00690064000D000A00470052004F0055005000200042005900200069002E0075007300650072005F00690064002C00200069002E007300740061007400750073005F00690064000D000A004F005200440045005200200042005900200075002E0075007300650072005F006E0061006D0065002C00200069002E007300740061007400750073005F0069006400',')#(');

COMMIT;


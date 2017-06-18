delimiter $$

CREATE DATABASE `talehunters` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci */$$



delimiter $$

CREATE TABLE `conditions` (
  `conditions_id` int(11) NOT NULL,
  `translation` float NOT NULL DEFAULT '0',
  `proofreading` float NOT NULL DEFAULT '0',
  `testing_status_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`conditions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci$$

delimiter $$

CREATE TABLE `downloads` (
  `downloads_id` int(11) NOT NULL AUTO_INCREMENT,
  `download_type_id` int(11) NOT NULL,
  `filename` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `projects_id` int(11) NOT NULL,
  `projects_part_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`downloads_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci$$

delimiter $$

CREATE TABLE `downloads_type` (
  `downloads_type_id` int(11) NOT NULL,
  `text` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`downloads_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci$$

delimiter $$

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_user_id` int(11) NOT NULL,
  `public_date` datetime DEFAULT NULL,
  `test_mode` varchar(1) COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'Y',
  `public_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci$$

delimiter $$

CREATE TABLE `news_items` (
  `news_items_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `text_hun` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `text_eng` longtext COLLATE utf8_hungarian_ci,
  `title_hun` varchar(1000) COLLATE utf8_hungarian_ci NOT NULL,
  `title_eng` varchar(1000) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `mod_date` datetime NOT NULL,
  `mod_user_id` int(11) NOT NULL,
  PRIMARY KEY (`news_items_id`),
  KEY `FK_NEWS_1_idx` (`news_id`),
  CONSTRAINT `FK_NEWS_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci$$

delimiter $$

CREATE TABLE `projects` (
  `projects_id` int(11) NOT NULL,
  `project_type_id` int(11) NOT NULL,
  `project_name` varchar(500) COLLATE utf8_hungarian_ci NOT NULL,
  `conditions_id` int(11) NOT NULL DEFAULT '0',
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `public_date` datetime DEFAULT NULL,
  `public_user_id` int(11) DEFAULT NULL,
  `download_link` varchar(1000) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `sheduled_release_date` datetime DEFAULT NULL,
  `picture_linke` varchar(1000) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `text` varchar(4000) COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`projects_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci$$

delimiter $$

CREATE TABLE `projects_part` (
  `projects_part_id` int(11) NOT NULL AUTO_INCREMENT,
  `projects_id` int(11) NOT NULL,
  `conditions_id` int(11) DEFAULT NULL,
  `sheduled_release_date` datetime DEFAULT NULL,
  `part_name` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`projects_part_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci$$

delimiter $$

CREATE TABLE `registration` (
  `registration_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `activation_code` varchar(1000) COLLATE utf8_hungarian_ci NOT NULL,
  `activate` varchar(1) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activate_date` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`registration_id`),
  KEY `FK_REGISTRATION_idx` (`users_id`),
  CONSTRAINT `FK_REGISTRATION` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci$$

delimiter $$

CREATE TABLE `role_type` (
  `role_type_id` int(11) NOT NULL,
  `text` varchar(200) COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`role_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci$$

delimiter $$

CREATE TABLE `roles` (
  `roles_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `role_type_id` int(11) NOT NULL DEFAULT '1',
  `allocate_date` datetime NOT NULL,
  `back_date` datetime DEFAULT NULL,
  `allocate_usr_id` int(11) NOT NULL,
  `back_usr_id` int(11) DEFAULT NULL,
  `storno` varchar(1) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `storno_date` datetime DEFAULT NULL,
  PRIMARY KEY (`roles_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci$$

delimiter $$

CREATE TABLE `testing_status` (
  `testing_status_id` int(11) NOT NULL,
  `text` varchar(45) COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`testing_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci$$

delimiter $$

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `nick_name` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `first_name` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `last_name` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `storno` varchar(1) COLLATE utf8_hungarian_ci DEFAULT 'N',
  `storno_date` datetime DEFAULT NULL,
  `superuser` varchar(1) COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci$$


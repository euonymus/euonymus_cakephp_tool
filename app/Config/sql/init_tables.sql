# ************************************************************
# Sequel Pro SQL dump
# バージョン 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# ホスト: 127.0.0.1 (MySQL 5.5.28)
# データベース: euonymus
# 作成時刻: 2014-10-31 07:17:21 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# テーブルのダンプ word_relations
# ------------------------------------------------------------

CREATE TABLE `word_relations` (
  `id` varchar(36) NOT NULL DEFAULT '',
  `word_id` varchar(36) DEFAULT NULL,
  `related_id` varchar(36) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `start_accuracy` varchar(10) DEFAULT NULL,
  `end_accuracy` varchar(10) DEFAULT NULL,
  `is_momentary` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `word_id` (`word_id`,`start`,`end`,`start_accuracy`,`end_accuracy`,`is_momentary`),
  KEY `related_id` (`related_id`,`start`,`end`,`start_accuracy`,`end_accuracy`,`is_momentary`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# テーブルのダンプ words
# ------------------------------------------------------------

CREATE TABLE `words` (
  `id` varchar(36) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL COMMENT '同名別IDを許可',
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `start_accuracy` varchar(10) DEFAULT NULL COMMENT 'year, month, day, hour, min, sec',
  `end_accuracy` varchar(10) DEFAULT NULL COMMENT 'year, month, day, hour, min, sec',
  `is_momentary` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0: term, 1: moment',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`,`start`,`end`,`start_accuracy`,`end_accuracy`,`is_momentary`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

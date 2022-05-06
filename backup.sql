-- SQLINES DEMO ***  Distrib 8.0.28, for Linux (x86_64)
-- 
-- SQLINES DEMO ***   Database: water_station_db
-- SQLINES DEMO *** -------------------------------------
-- SQLINES DEMO *** 0.28

/* SQLINES DEMO *** ARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/* SQLINES DEMO *** ARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/* SQLINES DEMO *** LLATION_CONNECTION=@@COLLATION_CONNECTION */;
/* SQLINES DEMO *** tf8mb4 */;
/* SQLINES DEMO *** ME_ZONE=@@TIME_ZONE */;
/* SQLINES DEMO *** NE='+00:00' */;
/* SQLINES DEMO *** IQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/* SQLINES DEMO *** REIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/* SQLINES DEMO *** L_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/* SQLINES DEMO *** L_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- 
-- SQLINES DEMO *** or table `ws_products`
-- 

DROP TABLE IF EXISTS `ws_products`;
/* SQLINES DEMO *** cs_client     = @@character_set_client */;
/* SQLINES DEMO *** er_set_client = utf8mb4 */;
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE ws_products (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(256) NOT NULL,
  `prod_desc` varchar(512) NOT NULL,
  `items` varchar(512) NOT NULL,
  `prod_price` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/* SQLINES DEMO *** er_set_client = @saved_cs_client */;

-- 
-- SQLINES DEMO *** table `ws_products`
-- 

LOCK TABLES `ws_products` WRITE;
/* SQLINES DEMO ***  `ws_products` DISABLE KEYS */;
INSERT INTO ws_products VALUES (1,'test','test','1',1),(2,'just another tubig','test','multilinerntestrnhaha',5454530);
/* SQLINES DEMO ***  `ws_products` ENABLE KEYS */;
UNLOCK TABLES;

-- 
-- SQLINES DEMO *** or table `ws_recovery`
-- 

DROP TABLE IF EXISTS `ws_recovery`;
/* SQLINES DEMO *** cs_client     = @@character_set_client */;
/* SQLINES DEMO *** er_set_client = utf8mb4 */;
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE ws_recovery (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `code` varchar(32) NOT NULL,
  `is_used` int NOT NULL,
  `create_date` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`),
  CONSTRAINT `code` UNIQUE  (`code`)
 ,
  CONSTRAINT `ws_recovery_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES ws_users (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE INDEX `user_id` ON ws_recovery (`user_id`);
/* SQLINES DEMO *** er_set_client = @saved_cs_client */;

-- 
-- SQLINES DEMO *** table `ws_recovery`
-- 

LOCK TABLES `ws_recovery` WRITE;
/* SQLINES DEMO ***  `ws_recovery` DISABLE KEYS */;
/* SQLINES DEMO ***  `ws_recovery` ENABLE KEYS */;
UNLOCK TABLES;

-- 
-- SQLINES DEMO *** or table `ws_users`
-- 

DROP TABLE IF EXISTS `ws_users`;
/* SQLINES DEMO *** cs_client     = @@character_set_client */;
/* SQLINES DEMO *** er_set_client = utf8mb4 */;
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE ws_users (
  `id` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `uname` UNIQUE  (`uname`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/* SQLINES DEMO *** er_set_client = @saved_cs_client */;

-- 
-- SQLINES DEMO *** table `ws_users`
-- 

LOCK TABLES `ws_users` WRITE;
/* SQLINES DEMO ***  `ws_users` DISABLE KEYS */;
INSERT INTO ws_users VALUES (1,'admin','$2y$10$OiqYfMUZI8F5y030fQax2u0MDTS/ugUywGQNC/A34MpjkInS6ENsG');
/* SQLINES DEMO ***  `ws_users` ENABLE KEYS */;
UNLOCK TABLES;
/* SQLINES DEMO *** NE=@OLD_TIME_ZONE */;

/* SQLINES DEMO *** E=@OLD_SQL_MODE */;
/* SQLINES DEMO *** _KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/* SQLINES DEMO *** CHECKS=@OLD_UNIQUE_CHECKS */;
/* SQLINES DEMO *** ER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/* SQLINES DEMO *** ER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/* SQLINES DEMO *** ON_CONNECTION=@OLD_COLLATION_CONNECTION */;
/* SQLINES DEMO *** ES=@OLD_SQL_NOTES */;

-- SQLINES DEMO ***  2022-05-03 21:05:53

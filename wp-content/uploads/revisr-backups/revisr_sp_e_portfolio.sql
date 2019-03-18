
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `sp_e_portfolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_e_portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `media_type` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `image_name` varchar(500) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `murl` varchar(2000) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `mtag` varchar(5000) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `open_link_in` tinyint(1) NOT NULL DEFAULT '0',
  `vtype` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `vid` varchar(300) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `videourl` varchar(1000) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `embed_url` varchar(300) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `HdnMediaSelection` varchar(300) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `createdon` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sp_e_portfolio` WRITE;
/*!40000 ALTER TABLE `sp_e_portfolio` DISABLE KEYS */;
INSERT INTO `sp_e_portfolio` VALUES (1,'image','vid_5c8b648caf9a2_big.png','header_bg1','#','Web Design',1,NULL,NULL,NULL,NULL,'http://wow.pebbled.io/schakraborty/softprodigy/1/wp-content/uploads/2019/03/header_bg1-3.png','2019-03-15 08:38:00');
/*!40000 ALTER TABLE `sp_e_portfolio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


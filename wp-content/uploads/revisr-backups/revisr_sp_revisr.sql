
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
DROP TABLE IF EXISTS `sp_revisr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_revisr` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message` text,
  `event` varchar(42) NOT NULL,
  `user` varchar(60) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sp_revisr` WRITE;
/*!40000 ALTER TABLE `sp_revisr` DISABLE KEYS */;
INSERT INTO `sp_revisr` VALUES (1,'2019-03-18 14:04:01','Successfully created a new repository.','init','admin'),(2,'2019-03-18 14:07:54','Successfully backed up the database.','backup','admin'),(3,'2019-03-18 14:08:02','Committed <a href=\"http://wow.pebbled.io/schakraborty/softprodigy/1/wp-admin/admin.php?page=revisr_view_commit&commit=6aa2229&success=true\">#6aa2229</a> to the local repository.','commit','admin'),(4,'2019-03-18 14:08:03','Error pushing changes to the remote repository.','error','admin'),(5,'2019-03-18 14:14:55','Created new branch: test','branch','admin'),(6,'2019-03-18 14:16:14','Successfully pushed 2 commits to origin/master.','push','admin'),(7,'2019-03-18 14:16:14','Reverted to commit <a href=\"http://wow.pebbled.io/schakraborty/softprodigy/1/wp-admin/admin.php?page=revisr_view_commit&commit=6aa2229\">#6aa2229</a>.','revert','admin');
/*!40000 ALTER TABLE `sp_revisr` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


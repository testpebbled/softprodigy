
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
DROP TABLE IF EXISTS `sp_strong_views`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_strong_views` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sp_strong_views` WRITE;
/*!40000 ALTER TABLE `sp_strong_views` DISABLE KEYS */;
INSERT INTO `sp_strong_views` VALUES (1,'new','a:40:{s:10:\"background\";a:5:{s:5:\"color\";s:0:\"\";s:4:\"type\";s:0:\"\";s:6:\"preset\";s:0:\"\";s:9:\"gradient1\";s:0:\"\";s:9:\"gradient2\";s:0:\"\";}s:8:\"category\";s:3:\"all\";s:5:\"class\";s:0:\"\";s:14:\"client_section\";a:2:{i:0;a:4:{s:5:\"field\";s:11:\"client_name\";s:4:\"type\";s:4:\"text\";s:6:\"before\";s:0:\"\";s:5:\"class\";s:16:\"testimonial-name\";}i:1;a:4:{s:5:\"field\";s:11:\"designation\";s:4:\"type\";s:4:\"text\";s:6:\"before\";s:0:\"\";s:5:\"class\";s:0:\"\";}}s:12:\"column_count\";s:1:\"4\";s:7:\"content\";s:6:\"entire\";s:5:\"count\";i:-1;s:12:\"divi_builder\";i:0;s:14:\"excerpt_length\";i:55;s:10:\"font-color\";a:2:{s:4:\"type\";s:0:\"\";s:5:\"color\";s:0:\"\";}s:9:\"form_ajax\";i:0;s:7:\"form_id\";s:1:\"1\";s:8:\"gravatar\";s:3:\"yes\";s:2:\"id\";i:0;s:6:\"layout\";s:0:\"\";s:14:\"less_post_text\";s:9:\"Show less\";s:8:\"lightbox\";i:0;s:14:\"lightbox_class\";s:0:\"\";s:4:\"mode\";s:9:\"slideshow\";s:14:\"more_full_post\";s:1:\"0\";s:14:\"more_page_hook\";s:18:\"wpmtst_view_footer\";s:14:\"more_page_text\";s:22:\"Read more testimonials\";s:9:\"more_post\";i:0;s:18:\"more_post_ellipsis\";s:1:\"1\";s:18:\"more_post_in_place\";s:1:\"0\";s:14:\"more_post_text\";s:9:\"Read more\";s:5:\"order\";s:6:\"newest\";s:10:\"pagination\";i:0;s:19:\"pagination_settings\";a:11:{s:4:\"type\";s:6:\"simple\";s:3:\"nav\";s:5:\"after\";s:8:\"show_all\";b:0;s:9:\"prev_next\";b:1;s:9:\"prev_text\";s:16:\"&laquo; Previous\";s:9:\"next_text\";s:12:\"Next &raquo;\";s:18:\"before_page_number\";s:0:\"\";s:17:\"after_page_number\";s:0:\"\";s:8:\"end_size\";i:1;s:8:\"mid_size\";i:2;s:8:\"per_page\";i:5;}s:18:\"slideshow_settings\";a:17:{s:12:\"adapt_height\";i:0;s:18:\"adapt_height_speed\";d:0.5;s:10:\"auto_hover\";i:1;s:10:\"auto_start\";i:1;s:11:\"breakpoints\";a:4:{s:7:\"desktop\";a:4:{s:5:\"width\";i:1200;s:10:\"max_slides\";i:4;s:11:\"move_slides\";i:1;s:6:\"margin\";i:20;}s:5:\"large\";a:4:{s:5:\"width\";i:1024;s:10:\"max_slides\";i:3;s:11:\"move_slides\";i:1;s:6:\"margin\";i:20;}s:6:\"medium\";a:4:{s:5:\"width\";i:640;s:10:\"max_slides\";i:1;s:11:\"move_slides\";i:1;s:6:\"margin\";i:10;}s:5:\"small\";a:4:{s:5:\"width\";i:480;s:10:\"max_slides\";i:1;s:11:\"move_slides\";i:1;s:6:\"margin\";i:1;}}s:14:\"controls_style\";s:7:\"buttons\";s:13:\"controls_type\";s:6:\"simple\";s:6:\"effect\";s:10:\"horizontal\";s:12:\"nav_position\";s:7:\"outside\";s:11:\"pager_style\";s:7:\"buttons\";s:10:\"pager_type\";s:4:\"none\";s:5:\"pause\";d:4;s:11:\"show_single\";a:3:{s:10:\"max_slides\";i:1;s:11:\"move_slides\";i:1;s:6:\"margin\";i:1;}s:5:\"speed\";d:1;s:18:\"stop_auto_on_click\";i:1;s:7:\"stretch\";i:0;s:4:\"type\";s:13:\"show_multiple\";}s:8:\"template\";s:6:\"modern\";s:17:\"template_settings\";a:3:{s:7:\"default\";a:3:{s:14:\"image_position\";s:4:\"left\";s:5:\"theme\";s:5:\"light\";s:6:\"quotes\";s:2:\"on\";}s:12:\"small-widget\";a:1:{s:14:\"image_position\";s:4:\"left\";}s:12:\"default-form\";a:1:{s:5:\"theme\";s:5:\"light\";}}s:9:\"thumbnail\";i:1;s:16:\"thumbnail_height\";i:0;s:14:\"thumbnail_size\";s:16:\"widget-thumbnail\";s:15:\"thumbnail_width\";i:0;s:5:\"title\";i:1;s:10:\"title_link\";i:0;s:18:\"use_default_length\";s:1:\"1\";s:16:\"use_default_more\";s:1:\"0\";}');
/*!40000 ALTER TABLE `sp_strong_views` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


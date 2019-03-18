
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
DROP TABLE IF EXISTS `sp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sp_usermeta` WRITE;
/*!40000 ALTER TABLE `sp_usermeta` DISABLE KEYS */;
INSERT INTO `sp_usermeta` VALUES (1,1,'nickname','admin'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'syntax_highlighting','true'),(7,1,'comment_shortcuts','false'),(8,1,'admin_color','fresh'),(9,1,'use_ssl','0'),(10,1,'show_admin_bar_front','true'),(11,1,'locale',''),(12,1,'sp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(13,1,'sp_user_level','10'),(14,1,'dismissed_wp_pointers','wp496_privacy,text_widget_custom_html,theme_editor_notice,wpmudcs1,plugin_editor_notice'),(15,1,'show_welcome_panel','1'),(40,1,'session_tokens','a:3:{s:64:\"79ba88ba6d4150df7095321849773b18bf3e395463a9ef2fa53812710aecdc77\";a:4:{s:10:\"expiration\";i:1553859959;s:2:\"ip\";s:15:\"117.224.220.199\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36\";s:5:\"login\";i:1552650359;}s:64:\"ebb630e0e8d902de1bf62abea549219c0ed439ea507b18351774bf7222a834fe\";a:4:{s:10:\"expiration\";i:1553054627;s:2:\"ip\";s:14:\"117.224.92.138\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36\";s:5:\"login\";i:1552881827;}s:64:\"804d220c47f8c67523d5a075d2de5daeb14e7dd2a4d1acb326650affcec7a9b1\";a:4:{s:10:\"expiration\";i:1553089940;s:2:\"ip\";s:13:\"181.49.95.100\";s:2:\"ua\";s:132:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36 OPR/58.0.3135.107\";s:5:\"login\";i:1552917140;}}'),(38,1,'meta-box-order_acf-field-group','a:3:{s:4:\"side\";s:9:\"submitdiv\";s:6:\"normal\";s:80:\"acf-field-group-fields,acf-field-group-locations,acf-field-group-options,slugdiv\";s:8:\"advanced\";s:0:\"\";}'),(39,1,'screen_layout_acf-field-group','2'),(17,1,'sp_dashboard_quick_press_last_post_id','438'),(18,1,'community-events-location','a:1:{s:2:\"ip\";s:11:\"181.49.95.0\";}'),(20,1,'sp_user-settings','libraryContent=browse&editor=tinymce&hidetb=1&urlbutton=none'),(21,1,'sp_user-settings-time','1552901850'),(22,1,'managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),(23,1,'metaboxhidden_nav-menus','a:5:{i:0;s:21:\"add-post-type-project\";i:1;s:12:\"add-post_tag\";i:2;s:15:\"add-post_format\";i:3;s:20:\"add-project_category\";i:4;s:15:\"add-project_tag\";}'),(24,1,'nav_menu_recently_edited','7'),(25,1,'gform_recent_forms','a:1:{i:0;s:1:\"1\";}'),(35,1,'closedpostboxes_post','a:0:{}'),(36,1,'metaboxhidden_post','a:6:{i:0;s:11:\"postexcerpt\";i:1;s:13:\"trackbacksdiv\";i:2;s:16:\"commentstatusdiv\";i:3;s:11:\"commentsdiv\";i:4;s:7:\"slugdiv\";i:5;s:9:\"authordiv\";}'),(26,1,'closedpostboxes_page','a:8:{i:0;s:23:\"acf-group_5c821ece074a1\";i:1;s:23:\"acf-group_5c81f7ab6a9f8\";i:2;s:23:\"acf-group_5c77c3c13fa1f\";i:3;s:23:\"acf-group_5c7fb17989707\";i:4;s:23:\"acf-group_5c7f9c5c7a210\";i:5;s:23:\"acf-group_5c7f4e01b766c\";i:6;s:23:\"acf-group_5c77a0e2aaf05\";i:7;s:23:\"acf-group_5c77b56b758aa\";}'),(27,1,'metaboxhidden_page','a:4:{i:0;s:16:\"commentstatusdiv\";i:1;s:11:\"commentsdiv\";i:2;s:7:\"slugdiv\";i:3;s:9:\"authordiv\";}'),(32,1,'sp_custom-sidebars-editor-advance','a:1:{s:4:\"cs-1\";b:0;}'),(33,1,'closedpostboxes_custom-css-js','a:0:{}'),(34,1,'metaboxhidden_custom-css-js','a:0:{}'),(28,1,'closedpostboxes_acf-field-group','a:2:{i:0;s:25:\"acf-field-group-locations\";i:1;s:23:\"acf-field-group-options\";}'),(29,1,'metaboxhidden_acf-field-group','a:1:{i:0;s:7:\"slugdiv\";}'),(30,1,'meta-box-order_page','a:4:{s:15:\"acf_after_title\";s:0:\"\";s:4:\"side\";s:36:\"submitdiv,pageparentdiv,postimagediv\";s:6:\"normal\";s:275:\"acf-group_5c77b82ec806e,acf-group_5c821ece074a1,acf-group_5c81f7ab6a9f8,acf-group_5c77c3c13fa1f,acf-group_5c7fb17989707,acf-group_5c7f9c5c7a210,acf-group_5c7f4e01b766c,acf-group_5c77a0e2aaf05,acf-group_5c77b56b758aa,revisionsdiv,commentstatusdiv,commentsdiv,slugdiv,authordiv\";s:8:\"advanced\";s:0:\"\";}'),(31,1,'screen_layout_page','2');
/*!40000 ALTER TABLE `sp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

